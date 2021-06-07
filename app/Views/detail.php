<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	foreach ($jobs as $job) : ?>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="<?= $job->description ?>">
		<meta name="author" content="nilai.info by Careerjet.com">
		<title><?= $job->title ?></title>
		<meta name="title" content="<?= $job->title ?>">
	<?php endforeach ?>
	
	
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
							
						</div>
					</div>
				</nav>
				<div class="pt-4 pb-4">
				</div>
				
				<div class="row">
				    <div class="container m-1 pb-4 text-center text-uppercase">
    					<h2>" <?php echo $job->title ?> "</h2>
    				</div>
				    <div class="col-md-8">
    				<form action="/detail/" class="form-inline col-md-12 text-muted">
    					<div class="input-group">
    						<input type="hidden" name="keyword" value="<?= $_GET['keyword'] ?>">
    						<input type="hidden" name="location" value="<?= $_GET['location'] ?>">
    				</form>
    
    				<div class="container">
    					<!-- Careerjet search box -->
    					<style>
    						div.cjsearchbox {
    
    							text-align: left;
    							border: 1px solid #919294;
    							background-color: #FFFFFF;
    							padding: 8px;
    							font-family: Arial, sans-serif, Sans-serif;
    							font-size: 13px;
    							color: #000000;
    							width: 350px;
    						}
    
    						div.cjsearchbox a {
    							color: #198ADC;
    						}
    
    						div.cjbotl a {
    							color: #198ADC;
    						}
    
    
    						div.cjsearchbox form.cjsearchform {
    							padding-top: 0px;
    							padding-bottom: 0px;
    							padding-left: 0px;
    							padding-right: 0px;
    						}
    
    						div#cjSearchResult {}
    
    						div#cjSearchResult p.topline {
    							font-size: 16px;
    							font-weight: bold;
    							margin-bottom: 8px;
    							margin-top: 5px;
    						}
    
    						span.cjlabel {
    							font-size: 13px;
    							font-weight: bold;
    							color: #000000;
    						}
    
    						span.cjlabelsmall {
    							font-size: 11px;
    							color: #000000;
    						}
    
    						input.cjinput {
    							width: 90%;
    							padding: 3px 0px;
    							border: 1px solid #AAA;
    							border-right: 1px solid #DDD;
    							border-bottom: 1px solid #DDD;
    							margin-top: 2px;
    							margin-bottom: 2px;
    						}
    
    						input.cjbutton {
    							font-family: Arial, sans-serif, Sans-serif;
    						}
    
    						div.cjjob {
    							margin: 0px;
    							margin-bottom: 10px;
    							overflow: hidden;
    						}
    
    						div.cjjob p {
    							margin: 0px;
    						}
    
    						div.cjjob p.jobtitle {
    							font-size: 14;
    							font-weight: bold;
    						}
    
    						div.cjjob .company {
    							color: #666666;
    						}
    
    						div.cjjob .locations {
    							color: #666666;
    						}
    
    						div.cjjob .site {
    							color: #099E2D;
    						}
    
    						#search_box_tools span.button {
    							float: left;
    							color: #666;
    							margin-left: 5px;
    							margin-right: 5px;
    						}
    
    						#search_box_tools span.button input {
    							float: left;
    							color: #FFFFFF;
    							padding: 1px 10px;
    							font-weight: bold;
    							cursor: pointer;
    							border: 1px solid #d70;
    							-webkit-border-radius: 2px;
    							-moz-border-radius: 3px;
    							border-radius: 2px;
    							background: #e81;
    							background-image: linear-gradient(top, #F19F40 0%, #EE8711 100%);
    							background-image: -o-linear-gradient(top, #F19F40 0%, #EE8711 100%);
    							background-image: -moz-linear-gradient(top, #F19F40 0%, #EE8711 100%);
    							background-image: -webkit-linear-gradient(top, #F19F40 0%, #EE8711 100%);
    							background-image: -ms-linear-gradient(top, #F19F40 0%, #EE8711 100%);
    							background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #F19F40), color-stop(1, #EE8711));
    						}
    					</style>
    					<a name="cjsearchboxanchor"></a>
    					<div class="cjsearchbox">
    						<script language="javascript" type="text/javascript" src="https://www.careerjet.co.id/partners/js_searchbox.html?n=7&nfr=1&affid=173c58d992899af745ee8313574e1023"></script>
    						<div class="cjbotl bloggerDiv">
    						</div>
    					</div>
    					<!-- end of Careerjet search box -->
    				</div>
    
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <ins class="adsbygoogle"
                         style="display:block; text-align:center;"
                         data-ad-layout="in-article"
                         data-ad-format="fluid"
                         data-ad-client="ca-pub-8780775580869573"
                         data-ad-slot="2294840633"></ins>
                    <script>
                         (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
    
    				<?php
    				foreach ($jobs as $job) : ?>
    					<div class="col-md-12 p-4 bg-light m-4">
    						<h4 class="lead text-uppercase">
    							<i class="fas fa-briefcase"></i> <?php echo $job->title ?>
    						</h4>
    						<p class="small m-0">
    							<i class="far fa-building"></i> <?= ($job->company) ? $job->company : 'job vacancy available' ?> |
    							<i class="fas fa-hand-holding-usd"></i> <?= ($job->salary) ? $job->salary : 'Not Information' ?> |
    							<i class="fas fa-map-marker-alt"> </i> <?php echo $job->locations ?> |
    							<i class="fas fa-business-time"> </i> <?php echo date('d F Y', strtotime($job->date)) ?>
    						</p>
    						<div class="col-12 text-right">
    							<a class="js-hs-unfold-invoker" target="_blank" href="https://api.whatsapp.com/send?text=<?= base_url() ?>%2Fhome%2Fdetail%3Fkeyword%3D<?= $_GET['keyword'] ?>%26location%3D<?= $_GET['location'] ?>" data-hs-unfold-invoker="">
    								Share <i class="fas fa-share-alt fa-sm ml-1"></i>
    							</a>
    						</div>
    						<p class="text-muted small mt-3">
    							<?= $job->description ?>
    						</p>
    						<div class="mt-2">
    							<a class="btn btn-block btn-primary" target="_blank" href="<?= $job->url; ?>">Apply for this job</a>
    						</div>
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
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-layout="in-article" data-ad-format="fluid" data-ad-client="ca-pub-8780775580869573" data-ad-slot="1730243160"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-layout="in-article" data-ad-format="fluid" data-ad-client="ca-pub-8780775580869573" data-ad-slot="1730243160"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-layout="in-article" data-ad-format="fluid" data-ad-client="ca-pub-8780775580869573" data-ad-slot="1730243160"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-layout="in-article" data-ad-format="fluid" data-ad-client="ca-pub-8780775580869573" data-ad-slot="1730243160"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-layout="in-article" data-ad-format="fluid" data-ad-client="ca-pub-8780775580869573" data-ad-slot="1730243160"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                    </div>
                </div>
			</div>
			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-layout="in-article" data-ad-format="fluid" data-ad-client="ca-pub-8780775580869573" data-ad-slot="1730243160"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>&copy;2021. nilai.info source from <a class="text-primary" target="_blank" href="https://www.careerjet.com/">Careerjet</a></span>
						<br>Partner CareerJET.com<br>
						<a target="_blank" href="http://www.careerjet.co.id/partners/?ak=173c58d992899af745ee8313574e1023">Menjadi afiliasi Careerjet</a>
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