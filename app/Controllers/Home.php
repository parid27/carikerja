<?php

namespace App\Controllers;

use App\Libraries\Careerjet_API;

class Home extends BaseController
{
	protected $Careerjet_API;
	public function __construct()
	{
		// $Careerjet_API = new Careerjet_API();
	}
	public function index()
	{
		$location = $this->request->getVar('location');
		$halaman = $this->request->getVar('halaman');
		$keyword = $this->request->getVar('keyword');
		$api = new Careerjet_API('en_GB');
		$page = $halaman; # Or from parameters.
	
			$result = $api->search(array(
				'keywords' => $keyword,
				'location' => $location,
				'page' => $page,
				'affid' => '173c58d992899af745ee8313574e1023',
			));
	
		if ($result->type == 'JOBS') {
			$found = $result->hits . " Posisi";
			$start = $result->pages . " Halaman\n";
			$jobs = $result->jobs;

			# Basic paging code
			if ($page > 1) {
				$halaman = "Gunakan \$page - 1 untuk halaman link sebelumnya\n";
			}
			$pagenow = "$page\n";
			if ($page < $result->pages) {
				$halaman = "Gunakan \$page + 1 untuk halaman link selanjutnya\n";
			}
		}
		# When location is ambiguous
		if ($result->type == 'LOCATIONS') {
			$locations = $result->solveLocations;
			foreach ($locations as $loc) {
				echo $loc->name . "\n"; # For end user display
				## Use $loc->location_id when making next search call
				## as 'location_id' parameter
			}
		}

		$data = [
			'jobs' => $jobs,
			'found' => $found,
			'start' => $start,
			'pagenow' => $pagenow,
			'page' => $page,
			'keyword' => $keyword,
			'location' => $location,
		];
		return view('welcome_message', $data);
	}

	public function detail()
	{
		if ($this->request->getVar('keyword') || $this->request->getVar('location')) {
			$keyword = $this->request->getVar('keyword');
			$location = $this->request->getVar('location');
			$api = new Careerjet_API('en_GB');
			$page = 1; # Or from parameters.
			$result = $api->search(array(
				'keywords' => $keyword,
				'location' => $location,
				'page' => $page,
				'affid' => '173c58d992899af745ee8313574e1023',
			));

			if ($result->type == 'JOBS') {
				$found = $result->hits . " Posisi";
				$start = $result->pages . " Halaman\n";
				$jobs = $result->jobs;

				# Basic paging code
				if ($page > 1) {
					$halaman = "Gunakan \$page - 1 untuk halaman link sebelumnya\n";
				}
				$pagenow = "$page\n";
				if ($page < $result->pages) {
					$halaman = "Gunakan \$page + 1 untuk halaman link selanjutnya\n";
				}
			}
			# When location is ambiguous
			if ($result->type == 'LOCATIONS') {
				$locations = $result->solveLocations;
				foreach ($locations as $loc) {
					echo $loc->name . "\n"; # For end user display
					## Use $loc->location_id when making next search call
					## as 'location_id' parameter
				}
			}

			$data = [
				'jobs' => $jobs,
				'found' => $found,
				'start' => $start,
				'pagenow' => $pagenow,
				'page' => $page,
				'keyword' => $keyword,
				'location' => $location,
			];
			return view('detail', $data);
		} else {
			session()->setFlashdata('pesan', '<script>Swal.fire({icon: "error",title: "Uupppss!",text:"Pencarian tidak ditemukan, coba dengan keyword lainnya"})</script>');
			return redirect()->to(base_url() . '/');
		}
	}
}
