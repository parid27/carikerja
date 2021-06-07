<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Nilai.info - mesin pencari kerja di Indonesia. Cari kerja dari lebih sepuluh ribu situs web.">
	<meta name="author" content="nilai.info">
	<meta name="description" content="nilai.info Mesin pencari kerja di Indonesia. Cari kerja dari lebih sepuluh ribu situs web.">
		<meta name="keywords" content="kerja, pekerjaan, rekrutmen, mesin pencari kerja, pencarian kerja, lowongan kerja, lowongan pekerjaan, careerjet, cari semua kerja">
	
    <meta name="title" content="CARI INFO LOWONGAN PEKERJAAN | LOKER">
    <meta name="description" content="Nilai.info - mesin pencari kerja di Indonesia. Cari kerja dari lebih sepuluh ribu situs web.">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://nilai.info/">
    <meta property="og:title" content="CARI INFO LOWONGAN PEKERJAAN | LOKER">
    <meta property="og:description" content="Nilai.info - mesin pencari kerja di Indonesia. Cari kerja dari lebih sepuluh ribu situs web.">
    <meta property="og:image" content="<?=base_url()?>/img/images.png">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://nilai.info/">
    <meta property="twitter:title" content="CARI INFO LOWONGAN PEKERJAAN | LOKER">
    <meta property="twitter:description" content="Nilai.info - mesin pencari kerja di Indonesia. Cari kerja dari lebih sepuluh ribu situs web.">
    <meta property="twitter:image" content="<?=base_url()?>/img/images.png">
	
	
	<title>CARI INFO LOWONGAN PEKERJAAN | LOKER</title>
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/favicon.png" />
	<link href="<?= base_url() ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="<?= base_url() ?>/css/sb-admin-2.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>/css/zoom.css" rel="stylesheet">
	<meta name="google-site-verification" content="UMLAjgnZH77V7q74HT03gujAlpjj-e_Tw3f0C6HQitE" />
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TW4VNHQ');</script>
<!-- End Google Tag Manager -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZPY3XM876Y"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ZPY3XM876Y');
</script>
<script data-ad-client="ca-pub-8780775580869573" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script async custom-element="amp-auto-ads"
        src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
</script>
</head>

<body id="page-top">
    <script async src="https://cse.google.com/cse.js?cx=e0c84b4e90cc66481"></script>
<div class="gcse-search"></div>
    <amp-auto-ads type="adsense"
        data-ad-client="ca-pub-8780775580869573">
</amp-auto-ads>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TW4VNHQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<?php if (session()->getFlashdata('pesan')) : ?>
		<div>
			<?= session()->getFlashdata('pesan'); ?>
		</div>
	<?php endif; ?>
	<div class="container">
		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">
				<nav class="navbar shadow-sm bg-white navbar-expand-lg fixed-top navbar-light bg-light">
					<div class="container">
					    <a class="navbar-brand" href="<?php base_url() ?>/"><i class="fas fa-info-circle text-primary"> INFO PEKERJAAN </i> </a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto">
								<!--<li class="nav-item active shadow-sm">-->
								<!--	<a class="nav-link m-1 text-uppercase" href="<?= base_url() ?>/"><i class="fas fa-info-circle text-primary"> infro pekerjaan</i> <span class="sr-only">(current)</span></a>-->
								<!--</li>-->
							</ul>
							<form action="/" class="form-inline text-muted">
								<div class="input-group m-1">
									<div class="input-group-prepend">
										<span class="btn border border-secondary rounded-0">
											<i class="fas fa-map-marker-alt"></i>
										</span>
									</div>
									<input type="text" name="location" value="<?= $location ?>" class="form-control col-md-12 rounded-0 small" placeholder="Kota/Provinsi">
								</div>
								<div class="input-group m-1">
									<div class="input-group-prepend">
										<span class="btn border border border-secondary rounded-0">
											<i class="fas fa-search fa-sm"></i>
										</span>
									</div>
									<input type="text" name="keyword" value="<?= $keyword ?>" class="form-control col-md-12 rounded-0 small" placeholder="job title, skill or company">
								</div>
								<div class="input-group m-1">
									<button class="btn ml-auto btn-primary" type="submit">
										Search
									</button>
								</div>
							</form>
						</div>
					</div>
				</nav>
				<div class="pt-5 pb-5">
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-4 zoomin mb-4">
							<div class="border border-outline-primary h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
												Karir </div>
											<div class="h5 text-gray-800"><?= $found ?></div>
										</div>
										<div class="col-auto">
											<i class="fas fa-briefcase fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 zoomin mb-4">
							<div class="border border-outline-primary h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
												Halaman Karir (Pages)</div>
											<div class="h5 text-gray-800"><?= $start ?></div>
										</div>
										<div class="col-auto">
											<i class="fas fa-vote-yea fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 zoomin mb-4">
							<div class="border border-outline-primary h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-info text-uppercase mb-1">
												Posisi (Pages)
											</div>
											<div class="row no-gutters align-items-center">
												<div class="col-auto">
													<div class="h5 text-gray-800">
														Halaman ke-<?= $pagenow ?>
													</div>
												</div>
											</div>
										</div>
										<div class="col-auto">
											<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="d-sm-flex justify-content-between mb-4">
						<div class="d-sm-inline-block">
							<form action="/" class="form-inline text-muted">
								<div class="input-group">
									<input type="hidden" name="keyword" value="<?= $keyword ?>">
									<input type="hidden" name="location" value="<?= $location ?>">
									<div class="input-group-prepend col-md-12">
										<?php
										$pageprev = $page - 1;
										if ($page <= 1) : ?>
										<?php else : ?>
											<span class="btn border border border-secondary rounded-0">
												<i class="far fa-caret-square-left"></i>
											</span>
											<input type="submit" name="halaman" value="<?= number_format($pageprev, 0) ?>" class="btn btn-outline-primary">
										<?php endif ?>
										<span class="btn btn-outline-primary"><?= number_format($page, 0) ?></span>
										<?php
										$pagenext = $page + 1;
										if ($pagenext > $start) : ?>
										<?php else : ?>
											<input type="submit" name="halaman" value="<?= number_format($pagenext, 0) ?>" class="btn btn-outline-primary">
											<span class="btn border border border-secondary rounded-0">
												<i class="far fa-caret-square-right"></i>
											</span>
										<?php endif ?>
										</button>
									</div>
							</form>
						</div>
					</div>
				</div>
				<div class="row m-0 pt-2 pb-5">
				    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-layout="in-article" data-ad-format="fluid" data-ad-client="ca-pub-8780775580869573" data-ad-slot="1730243160"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
				    <div class="col-md-8">
				        <div class="row">
        					<?php
        					foreach ($jobs as $job) : ?>
        						<div class="col-md-6 zoomout">
        							<a class="card-link" target="_blank" href="<?= base_url() ?>/home/detail?keyword=<?= $job->title; ?>&location=<?= $job->locations; ?>">
        								<div class="card col-md-12 m-2" style="height: 120px;">
        									<div class="card-body">
        										<div class="text-xs text-success text-uppercase mb-1">
        											<i class="far fa-building"></i> <?= ($job->company) ? $job->company : 'job vacancy available' ?>
        										</div>
        										<div class="small text-gray-600">
        											<i class="fas fa-briefcase"></i> <?php echo $job->title ?>
        										</div>
        										<div class="small text-gray-600">
        											<i class="fas fa-hand-holding-usd"></i> <?= ($job->salary) ? $job->salary : 'Not Information' ?>
        										</div>
        									</div>
        									<div class="row card-footer p-0 small">
        										<div class="col-md-7 text-left small"><i class="fas fa-map-marker-alt"> <?php echo $job->locations ?></i></div>
        										<div class="col-md-5 text-right small"><i class="fas fa-business-time"> <?php echo date('d F Y', strtotime($job->date)) ?></i></div>
        									</div>
        								</div>
        							</a>
        						</div>
        					<?php endforeach ?>
        				</div>
				    </div>
				    <div class="col-md-4">
				        <div class="row">
				            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                            <ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-layout="in-article" data-ad-format="fluid" data-ad-client="ca-pub-8780775580869573" data-ad-slot="1730243160"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                            <ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-layout="in-article" data-ad-format="fluid" data-ad-client="ca-pub-8780775580869573" data-ad-slot="1730243160"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                            <ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-layout="in-article" data-ad-format="fluid" data-ad-client="ca-pub-8780775580869573" data-ad-slot="1730243160"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                            <ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-layout="in-article" data-ad-format="fluid" data-ad-client="ca-pub-8780775580869573" data-ad-slot="1730243160"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                            <ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-layout="in-article" data-ad-format="fluid" data-ad-client="ca-pub-8780775580869573" data-ad-slot="1730243160"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
				        </div>
				    </div>
				    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-layout="in-article" data-ad-format="fluid" data-ad-client="ca-pub-8780775580869573" data-ad-slot="1730243160"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
				</div>
			</div>
			<!-- Footer -->

			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>&copy;2021. nilai.info source from <a class="text-primary" target="_blank" href="https://www.careerjet.com/">Careerjet</a></span>
						<br>Partner CareerJET.com
					</div>
				</div>
			</footer>
		</div>
	</div>

	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<script src="<?= base_url() ?>/vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url() ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>