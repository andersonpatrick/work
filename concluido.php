﻿<?php
require_once('mysql.php');


if(isset($_POST['nome_projeto'])){

$nome_projeto = "";
$dominio = "";
$possui_logo = "";
$video_promocional = "";
$contato_email = "";
$email_corporativo = "";
$multiplos_idiomas = "";
$tipo_pagamento = "";
$anuncio_adsense_admob = "";
$plats_mobiles = "";


if(isset($_POST['nome_projeto'])){$nome_projeto = $_POST['nome_projeto']; }
if(isset($_POST['dominio'])){$dominio = $_POST['dominio']; }
if(isset($_POST['cb_logo'])){$possui_logo = $_POST['cb_logo']; }
if(isset($_POST['cb_videopromocional'])){$video_promocional = $_POST['cb_videopromocional']; }
if(isset($_POST['cb_fomularioemail'])){$contato_email = $_POST['cb_fomularioemail']; }

if(isset($_POST['cb_emailcorporativo'])){ $email_corporativo = $_POST['cb_emailcorporativo'];}



if(isset($_POST['cb_multiplosidiomas'])){ $multiplos_idiomas = $_POST['cb_multiplosidiomas']; }

if(isset($_POST['pagamento'])){
	if($_POST['pagamento'] == 'sim'){
		
		if(isset($_POST['rb_meiopagamento'])){
			
			$tipo_pagamento = $_POST['rb_meiopagamento'];
			
			
		}
		
	}
}


if(isset($_POST['cb_adsense_admob'])){$anuncio_adsense_admob = $_POST['cb_adsense_admob'];}

if(isset($_POST['cb_appandroid'])){	$plats_mobiles = $plats_mobiles . 'android;'; } 
if(isset($_POST['cb_appios'])){	$plats_mobiles = $plats_mobiles . 'ios;'; } 
if(isset($_POST['cb_appwinphone'])){	$plats_mobiles = $plats_mobiles . 'winphone;'; } 



$sql = 'INSERT INTO formulario_projetos(nome_projeto,dominio,possui_logo,video_promocional,contato_email,email_corporativo,multiplos_idiomas,pagamento_app,anuncios_adsense_admob,aplicativos_mobile) VALUES ("'.$nome_projeto.'","'.$dominio.'","'.$possui_logo.'","'.$video_promocional.'","'.$contato_email.'","'.$email_corporativo.'","'.$multiplos_idiomas.'","'.$tipo_pagamento.'","'.$anuncio_adsense_admob.'","'.$plats_mobiles.'");';
	$resultado = $MySQLi->query($sql) OR trigger_error($MySQLi->error, E_USER_ERROR);
	
	if($MySQLi->affected_rows >= 1){ 
	
	} else { echo "<b>erro</b>"; die(); }

} 
?>
<html class="js no-touch history boxshadow csstransforms3d csstransitions video svg webkit chrome win js sticky-header-enabled sticky-header-negative js no-touch history boxshadow csstransforms3d csstransitions video svg webkit chrome win js js no-touch history boxshadow csstransforms3d csstransitions video svg webkit chrome win js js no-touch history boxshadow csstransforms3d csstransitions video svg webkit chrome win js js no-touch history boxshadow csstransforms3d csstransitions video svg webkit chrome win js js no-touch history boxshadow csstransforms3d csstransitions video svg webkit chrome win js js no-touch history boxshadow csstransforms3d csstransitions video svg webkit chrome win js js no-touch history boxshadow csstransforms3d csstransitions video svg webkit chrome win js" style=""><!-- Mirrored from preview.oklerthemes.com/porto/4.9.2/feature-admin-forms-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Oct 2016 20:03:40 GMT --><head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Forms Basic | Porto - Responsive HTML5 Template 4.9.2</title>	

		<meta name="keywords" content="HTML5 Template">
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">
		<link rel="stylesheet" href="css/theme-animate.css">

		<!-- Admin Extension Specific Page Vendor CSS -->
		<link rel="stylesheet" href="../../porto-admin/edge/assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css">

		<!-- Admin Extension CSS -->
		<link rel="stylesheet" href="../../porto-admin/edge/assets/stylesheets/theme-admin-extension.css">

		<!-- Admin Extension Skin CSS -->
		<link rel="stylesheet" href="../../porto-admin/edge/assets/stylesheets/skins/extension.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/default.css">		<script async="" src="../../../www.google-analytics.com/analytics.js"></script><script async="" src="../../../www.google-analytics.com/analytics.js"></script><script async="" src="../../../www.google-analytics.com/analytics.js"></script><script async="" src="../../../www.google-analytics.com/analytics.js"></script><script async="" src="../../../www.google-analytics.com/analytics.js"></script><script async="" src="../../../www.google-analytics.com/analytics.js"></script><script async="" src="../../../www.google-analytics.com/analytics.js"></script><script async="" src="../../../www.google-analytics.com/analytics.js"></script><script src="master/style-switcher/style.switcher.localstorage.js"></script>

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>

	<link rel="stylesheet" href="master/style-switcher/style-switcher.css"><link rel="stylesheet/less" href="master/less/skin-default.less"><link rel="stylesheet" href="master/style-switcher/bootstrap-colorpicker/css/bootstrap-colorpicker.css"><link rel="stylesheet" href="master/style-switcher/style-switcher.css"><link rel="stylesheet/less" href="master/less/skin-default.less"><link rel="stylesheet" href="master/style-switcher/bootstrap-colorpicker/css/bootstrap-colorpicker.css"><link rel="stylesheet" href="master/style-switcher/style-switcher.css"><link rel="stylesheet/less" href="master/less/skin-default.less"><link rel="stylesheet" href="master/style-switcher/bootstrap-colorpicker/css/bootstrap-colorpicker.css"><style>
		.tipospagamentos {
    display: none;
}
	</style><link rel="stylesheet" href="master/style-switcher/style-switcher.css"><link rel="stylesheet/less" href="master/less/skin-default.less"><link rel="stylesheet" href="master/style-switcher/bootstrap-colorpicker/css/bootstrap-colorpicker.css"><link rel="stylesheet" href="master/style-switcher/style-switcher.css"><link rel="stylesheet/less" href="master/less/skin-default.less"><link rel="stylesheet" href="master/style-switcher/bootstrap-colorpicker/css/bootstrap-colorpicker.css"><link rel="stylesheet" href="master/style-switcher/style-switcher.css"><link rel="stylesheet/less" href="master/less/skin-default.less"><link rel="stylesheet" href="master/style-switcher/bootstrap-colorpicker/css/bootstrap-colorpicker.css"><link rel="stylesheet" href="master/style-switcher/style-switcher.css"><link rel="stylesheet/less" href="master/less/skin-default.less"><link rel="stylesheet" href="master/style-switcher/bootstrap-colorpicker/css/bootstrap-colorpicker.css"><link rel="stylesheet" href="master/style-switcher/style-switcher.css"><link rel="stylesheet/less" href="master/less/skin-default.less"><link rel="stylesheet" href="master/style-switcher/bootstrap-colorpicker/css/bootstrap-colorpicker.css"></head>
	
	
	<body>

		<div class="body">
			<header id="header" data-plugin-options="{&quot;stickyEnabled&quot;: true, &quot;stickyEnableOnBoxed&quot;: true, &quot;stickyEnableOnMobile&quot;: true, &quot;stickyStartAt&quot;: 57, &quot;stickySetTop&quot;: &quot;-57px&quot;, &quot;stickyChangeLogo&quot;: true}" style="min-height: 125px;">
				<div class="header-body" style="top: 0px;">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo" style="width: 97px; height: 70px;">
									<a href="index.html">
										<img alt="Porto" width="111" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="img/logo.png" style="top: 0px; width: 111px; height: 54px;">
									</a>
								</div>
							</div>
							<div class="header-column">
								<div class="header-row">
									<div class="header-search hidden-xs">
										<form id="searchForm" action="http://preview.oklerthemes.com/porto/4.9.2/page-search-results.html" method="get" novalidate="novalidate">
											<div class="input-group">
												<input type="text" class="form-control" name="q" id="q" placeholder="Search..." required="" aria-required="true">
												<span class="input-group-btn">
													<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
												</span>
											</div>
										</form>
									</div>
									<nav class="header-nav-top">
										<ul class="nav nav-pills">
											<li class="hidden-xs">
												<a href="about-us.html"><i class="fa fa-angle-right"></i> About Us</a>
											</li>
											<li class="hidden-xs">
												<a href="contact-us.html"><i class="fa fa-angle-right"></i> Contact Us</a>
											</li>
											<li>
												<span class="ws-nowrap"><i class="fa fa-phone"></i> (123) 456-789</span>
											</li>
										</ul>
									</nav>
								</div>
								<div class="header-row">
									<div class="header-nav">
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
											<i class="fa fa-bars"></i>
										</button>
										<ul class="header-social-icons social-icons hidden-xs">
											<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
											<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
											<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
										</ul>
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
											<nav>
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown">
														<a class="dropdown-toggle" href="index.html">
															Home
														<i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
														<ul class="dropdown-menu">
															<li>
																<a href="index.html">
																	Landing Page
																</a>
															</li>
															<li class="dropdown-submenu">
																<a href="index-classic.html">Classic<i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
																<ul class="dropdown-menu">
																	<li><a href="index-classic.html" data-thumb-preview="img/previews/preview-classic.jpg">Classic - Original<span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic.jpg&quot;);"></span></span></span></a></li>
																	<li><a href="index-classic-color.html" data-thumb-preview="img/previews/preview-classic-color.jpg">Classic - Color<span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic-color.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic-color.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic-color.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic-color.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic-color.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic-color.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic-color.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic-color.jpg&quot;);"></span></span></span></a></li>
																	<li><a href="index-classic-light.html" data-thumb-preview="img/previews/preview-classic-light.jpg">Classic - Light<span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic-light.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic-light.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic-light.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic-light.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic-light.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic-light.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic-light.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic-light.jpg&quot;);"></span></span></span></a></li>
																	<li><a href="index-classic-video.html" data-thumb-preview="img/previews/preview-classic-video.jpg">Classic - Video<span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic-video.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic-video.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic-video.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic-video.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic-video.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic-video.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic-video.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic-video.jpg&quot;);"></span></span></span></a></li>
																	<li><a href="index-classic-video-light.html" data-thumb-preview="img/previews/preview-classic-video-light.jpg">Classic - Video - Light<span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic-video-light.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic-video-light.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic-video-light.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic-video-light.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic-video-light.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic-video-light.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic-video-light.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-classic-video-light.jpg&quot;);"></span></span></span></a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="index-corporate.html">Corporate <span class="tip tip-dark">hot</span><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
																<ul class="dropdown-menu">
																	<li><a href="index-corporate.html" data-thumb-preview="img/previews/preview-corporate.jpg">Corporate - Version 1<span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate.jpg&quot;);"></span></span></span></a></li>
																	<li><a href="index-corporate-2.html" data-thumb-preview="img/previews/preview-corporate-version2.jpg">Corporate - Version 2<span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version2.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version2.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version2.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version2.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version2.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version2.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version2.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version2.jpg&quot;);"></span></span></span></a></li>
																	<li><a href="index-corporate-3.html" data-thumb-preview="img/previews/preview-corporate-version3.jpg">Corporate - Version 3<span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version3.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version3.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version3.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version3.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version3.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version3.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version3.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version3.jpg&quot;);"></span></span></span></a></li>
																	<li><a href="index-corporate-4.html" data-thumb-preview="img/previews/preview-corporate-version4.jpg">Corporate - Version 4<span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version4.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version4.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version4.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version4.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version4.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version4.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version4.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version4.jpg&quot;);"></span></span></span></a></li>
																	<li><a href="index-corporate-5.html" data-thumb-preview="img/previews/preview-corporate-version5.jpg">Corporate - Version 5<span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version5.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version5.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version5.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version5.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version5.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version5.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version5.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version5.jpg&quot;);"></span></span></span></a></li>
																	<li><a href="index-corporate-6.html" data-thumb-preview="img/previews/preview-corporate-version6.jpg">Corporate - Version 6<span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version6.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version6.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version6.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version6.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version6.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version6.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version6.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version6.jpg&quot;);"></span></span></span></a></li>
																	<li><a href="index-corporate-7.html" data-thumb-preview="img/previews/preview-corporate-version7.jpg">Corporate - Version 7<span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version7.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version7.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version7.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version7.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version7.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version7.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version7.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version7.jpg&quot;);"></span></span></span></a></li>
																	<li><a href="index-corporate-8.html" data-thumb-preview="img/previews/preview-corporate-version8.jpg">Corporate - Version 8<span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version8.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version8.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version8.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version8.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version8.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version8.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version8.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-version8.jpg&quot;);"></span></span></span></a></li>
																	<li><a href="index-corporate-hosting.html" data-thumb-preview="img/previews/preview-corporate-hosting.jpg">Corporate - Hosting<span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-hosting.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-hosting.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-hosting.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-hosting.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-hosting.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-hosting.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-hosting.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-corporate-hosting.jpg&quot;);"></span></span></span></a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="#">One Page<i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
																<ul class="dropdown-menu">
																	<li><a href="index-one-page.html" data-thumb-preview="img/previews/preview-one-page.jpg">One Page Original<span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-one-page.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-one-page.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-one-page.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-one-page.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-one-page.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-one-page.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-one-page.jpg&quot;);"></span></span></span><span class="thumb-info thumb-info-preview"><span class="thumb-info-wrapper"><span class="thumb-info-image" style="background-image: url(&quot;img/previews/preview-one-page.jpg&quot;);"></span></span></span></a></li>
																</ul>
															</li>
														</ul>
													</li>
													<li class="">
														<a href="overview.html">
															Overview
														</a>
													</li>
													<li class="dropdown dropdown-mega">
														<a class="dropdown-toggle" href="#">
															Shortcodes
														<i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
														<ul class="dropdown-menu">
															<li>
																<div class="dropdown-mega-content">
																	<div class="row">
																		<div class="col-md-3">
																			<span class="dropdown-mega-sub-title">Shortcodes 1</span>
																			<ul class="dropdown-mega-sub-nav">
																				<li><a href="shortcodes-accordions.html">Accordions</a></li>
																				<li><a href="shortcodes-toggles.html">Toggles</a></li>
																				<li><a href="shortcodes-tabs.html">Tabs</a></li>
																				<li><a href="shortcodes-icons.html">Icons</a></li>
																				<li><a href="shortcodes-icon-boxes.html">Icon Boxes</a></li>
																				<li><a href="shortcodes-carousels.html">Carousels</a></li>
																				<li><a href="shortcodes-modals.html">Modals</a></li>
																				<li><a href="shortcodes-lightboxes.html">Lightboxes</a></li>
																			</ul>
																		</div>
																		<div class="col-md-3">
																			<span class="dropdown-mega-sub-title">Shortcodes 2</span>
																			<ul class="dropdown-mega-sub-nav">
																				<li><a href="shortcodes-buttons.html">Buttons</a></li>
																				<li><a href="shortcodes-labels.html">Labels</a></li>
																				<li><a href="shortcodes-lists.html">Lists</a></li>
																				<li><a href="shortcodes-image-gallery.html">Image Gallery</a></li>
																				<li><a href="shortcodes-image-frames.html">Image Frames</a></li>
																				<li><a href="shortcodes-testimonials.html">Testimonials</a></li>
																				<li><a href="shortcodes-blockquotes.html">Blockquotes</a></li>
																				<li><a href="shortcodes-word-rotator.html">Word Rotator</a></li>
																			</ul>
																		</div>
																		<div class="col-md-3">
																			<span class="dropdown-mega-sub-title">Shortcodes 3</span>
																			<ul class="dropdown-mega-sub-nav">
																				<li><a href="shortcodes-call-to-action.html">Call to Action</a></li>
																				<li><a href="shortcodes-pricing-tables.html">Pricing Tables</a></li>
																				<li><a href="shortcodes-tables.html">Tables</a></li>
																				<li><a href="shortcodes-progressbars.html">Progress Bars</a></li>
																				<li><a href="shortcodes-counters.html">Counters</a></li>
																				<li><a href="shortcodes-sections-parallax.html">Sections &amp; Parallax</a></li>
																				<li><a href="shortcodes-tooltips-popovers.html">Tooltips &amp; Popovers</a></li>
																				<li><a href="shortcodes-sticky-elements.html">Sticky Elements</a></li>
																			</ul>
																		</div>
																		<div class="col-md-3">
																			<span class="dropdown-mega-sub-title">Shortcodes 4</span>
																			<ul class="dropdown-mega-sub-nav">
																				<li><a href="shortcodes-headings.html">Headings</a></li>
																				<li><a href="shortcodes-dividers.html">Dividers</a></li>
																				<li><a href="shortcodes-animations.html">Animations</a></li>
																				<li><a href="shortcodes-medias.html">Medias</a></li>
																				<li><a href="shortcodes-maps.html">Maps</a></li>
																				<li><a href="shortcodes-arrows.html">Arrows</a></li>
																				<li><a href="shortcodes-alerts.html">Alerts</a></li>
																				<li><a href="shortcodes-posts.html">Posts</a></li>
																			</ul>
																		</div>
																	</div>
																</div>
															</li>
														</ul>
													</li>
													<li class="dropdown active">
														<a class="dropdown-toggle" href="#">
															Features
														<i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
													
														<ul class="dropdown-menu">
															<li class="dropdown-submenu">
																<a href="#">Headers<i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
																<ul class="dropdown-menu">
																	<li class="dropdown-submenu">
																		<a href="#">Default<i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
																		<ul class="dropdown-menu">
																			<li><a href="index-classic.html">Default</a></li>
																			<li><a href="index-header-language-dropdown.html">Default + Language Dropdown</a></li>
																			<li><a href="index-header-big-logo.html">Default + Big Logo</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a href="#">Flat<i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
																		<ul class="dropdown-menu">
																			<li><a href="index-header-flat.html">Flat</a></li>
																			<li><a href="index-header-flat-top-bar.html">Flat + Top Bar</a></li>
																			<li><a href="index-header-flat-colored-top-bar.html">Flat + Colored Top Bar</a></li>
																			<li><a href="index-header-flat-top-bar-search.html">Flat + Top Bar with Search</a></li>
																		</ul>
																	</li>
																	<li><a href="index-header-center.html">Center</a></li>
																	<li><a href="index-header-below-slider.html">Below Slider</a></li>
																	<li><a href="index-header-full-video.html">Full Video</a></li>
																	<li><a href="index-header-narrow.html">Narrow</a></li>
																	<li><a href="index-header-always-sticky.html">Always Sticky</a></li>
																	<li class="dropdown-submenu">
																		<a href="#">Transparent<i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
																		<ul class="dropdown-menu">
																			<li><a href="index-header-transparent.html">Transparent</a></li>
																			<li><a href="index-header-transparent-bottom-border.html">Transparent - Bottom Border</a></li>
																			<li><a href="index-header-semi-transparent.html">Semi Transparent</a></li>
																			<li><a href="index-header-semi-transparent-light.html">Semi Transparent - Light</a></li>
																		</ul>
																	</li>
																	<li><a href="index-header-full-width.html">Full-Width</a></li>
																	<li class="dropdown-submenu">
																		<a href="#">Navbar<i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
																		<ul class="dropdown-menu">
																			<li><a href="index-header-navbar.html">Navbar</a></li>
																			<li><a href="index-header-navbar-extra-info.html">Navbar + Extra Info</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a href="#">Side Header<i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
																		<ul class="dropdown-menu">
																			<li><a href="index-header-side-header-left.html">Side Header Left</a></li>
																			<li><a href="index-header-side-header-right.html">Side Header Right</a></li>
																			<li><a href="index-header-side-header-semi-transparent.html">Side Header Semi Transparent</a></li>
																		</ul>
																	</li>
																	<li><a href="index-header-signin.html">Sign In / Sign Up</a></li>
																	<li><a href="index-header-logged.html">Logged</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="#">Navigations<i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
																<ul class="dropdown-menu">
																	<li><a href="index-classic.html">Default</a></li>
																	<li><a href="index-navigation-stripe.html">Stripe</a></li>
																	<li><a href="index-navigation-top-line.html">Top Line</a></li>
																	<li><a href="index-navigation-dark-dropdown.html">Dark Dropdown</a></li>
																	<li><a href="index-navigation-colors.html">Colors</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="#">Footers<i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
																<ul class="dropdown-menu">
																	<li><a href="index-classic.html#footer">Default</a></li>
																	<li><a href="index-footer-advanced.html#footer">Advanced</a></li>
																	<li><a href="index-footer-simple.html#footer">Simple</a></li>
																	<li><a href="index-footer-light.html#footer">Light</a></li>
																	<li><a href="index-footer-light-narrow.html#footer">Light Narrow</a></li>
																	<li class="dropdown-submenu">
																		<a href="#">Colors<i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
																		<ul class="dropdown-menu">
																			<li><a href="index-footer-color-primary.html#footer">Primary Color</a></li>
																			<li><a href="index-footer-color-secondary.html#footer">Secondary Color</a></li>
																			<li><a href="index-footer-color-tertiary.html#footer">Tertiary Color</a></li>
																			<li><a href="index-footer-color-quaternary.html#footer">Quaternary Color</a></li>
																		</ul>
																	</li>
																	<li><a href="index-footer-latest-work.html#footer">Latest Work</a></li>
																	<li><a href="index-footer-contact-form.html#footer">Contact Form</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="#">Page Headers<i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
																<ul class="dropdown-menu">
																	<li><a href="index-page-header-default.html">Default</a></li>
																	<li class="dropdown-submenu">
																		<a href="#">Colors<i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
																		<ul class="dropdown-menu">
																			<li><a href="index-page-header-color-primary.html">Primary Color</a></li>
																			<li><a href="index-page-header-color-secondary.html">Secondary Color</a></li>
																			<li><a href="index-page-header-color-tertiary.html">Tertiary Color</a></li>
																			<li><a href="index-page-header-color-quaternary.html">Quaternary Color</a></li>
																		</ul>
																	</li>
																	<li><a href="index-page-header-light.html">Light</a></li>
																	<li><a href="index-page-header-light-reverse.html">Light - Reverse</a></li>
																	<li><a href="index-page-header-custom-background.html">Custom Background</a></li>
																	<li><a href="index-page-header-parallax.html">Parallax</a></li>
																	<li><a href="index-page-header-center.html">Center</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="#">Admin Extension <span class="tip tip-dark">hot</span> <em class="not-included">(Not Included)</em><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
																<ul class="dropdown-menu">
																	<li><a href="feature-admin-forms-basic.html">Forms Basic</a></li>
																	<li><a href="feature-admin-forms-advanced.html">Forms Advanced</a></li>
																	<li><a href="feature-admin-forms-wizard.html">Forms Wizard</a></li>
																	<li><a href="feature-admin-forms-code-editor.html">Code Editor</a></li>
																	<li><a href="feature-admin-tables-advanced.html">Tables Advanced</a></li>
																	<li><a href="feature-admin-tables-responsive.html">Tables Responsive</a></li>
																	<li><a href="feature-admin-tables-editable.html">Tables Editable</a></li>
																	<li><a href="feature-admin-tables-ajax.html">Tables Ajax</a></li>
																	<li><a href="feature-admin-charts.html">Charts</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="#">Sliders<i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
																<ul class="dropdown-menu">
																	<li><a href="index-classic.html">Revolution Slider</a></li>
																	<li><a href="index-slider-nivo.html">Nivo Slider</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="#">Layout Options<i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
																<ul class="dropdown-menu">
																	<li><a href="feature-layout-boxed.html">Boxed</a></li>
																	<li><a href="feature-layout-dark.html">Dark</a></li>
																	<li><a href="feature-layout-rtl.html">RTL</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="#">Extra<i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
																<ul class="dropdown-menu">
																	<li><a href="feature-typography.html">Typography</a></li>
																	<li><a href="feature-grid-system.html">Grid System</a></li>
																	<li><a href="feature-page-loading.html">Page Loading</a></li>
																	<li><a href="feature-lazy-load.html">Lazy Load</a></li>
																</ul>
															</li>
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-toggle" href="#">
															Pages
														<i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
														<ul class="dropdown-menu">
															<li class="dropdown-submenu">
																<a href="#">About Us<i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
																<ul class="dropdown-menu">
																	<li><a href="about-us.html">About Us</a></li>
																	<li><a href="about-us-basic.html">About Us - Basic</a></li>
																	<li><a href="about-me.html">About Me</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="#">Shop<i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
																<ul class="dropdown-menu">
																	<li><a href="shop-full-width.html">Shop - Full Width</a></li>
																	<li><a href="shop-sidebar.html">Shop - Sidebar</a></li>
																	<li><a href="shop-product-full-width.html">Shop - Product Full Width</a></li>
																	<li><a href="shop-product-sidebar.html">Shop - Product Sidebar</a></li>
																	<li><a href="shop-cart.html">Shop - Cart</a></li>
																	<li><a href="shop-login.html">Shop - Login</a></li>
																	<li><a href="shop-checkout.html">Shop - Checkout</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="#">Blog<i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
																<ul class="dropdown-menu">
																	<li><a href="blog-full-width.html">Blog Full Width</a></li>
																	<li><a href="blog-large-image.html">Blog Large Image</a></li>
																	<li><a href="blog-medium-image.html">Blog Medium Image</a></li>
																	<li><a href="blog-timeline.html">Blog Timeline</a></li>
																	<li><a href="blog-post.html">Single Post</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="#">Layouts<i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
																<ul class="dropdown-menu">
																	<li><a href="page-full-width.html">Full Width</a></li>
																	<li><a href="page-left-sidebar.html">Left Sidebar</a></li>
																	<li><a href="page-right-sidebar.html">Right Sidebar</a></li>
																	<li><a href="page-left-and-right-sidebars.html">Left and Right Sidebars</a></li>
																	<li><a href="page-sticky-sidebar.html">Sticky Sidebar</a></li>
																	<li><a href="page-secondary-navbar.html">Secondary Navbar</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="#">Extra<i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
																<ul class="dropdown-menu">
																	<li><a href="page-404.html">404 Error</a></li>
																	<li><a href="page-coming-soon.html">Coming Soon</a></li>
																	<li><a href="page-maintenance-mode.html">Maintenance Mode</a></li>
																	<li><a href="sitemap.html">Sitemap</a></li>
																</ul>
															</li>
															<li><a href="page-custom-header.html">Custom Header</a></li>
															<li><a href="page-team.html">Team</a></li>
															<li><a href="page-services.html">Services</a></li>
															<li><a href="page-careers.html">Careers</a></li>
															<li><a href="page-our-office.html">Our Office</a></li>
															<li><a href="page-faq.html">FAQ</a></li>
															<li><a href="page-login.html">Login / Register</a></li>
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-toggle" href="#">
															Portfolio
														<i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
														<ul class="dropdown-menu">
															<li class="dropdown-submenu">
																<a href="#">Single Project<i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
																<ul class="dropdown-menu">
																	<li><a href="portfolio-single-small-slider.html">Small Slider</a></li>
																	<li><a href="portfolio-single-wide-slider.html">Wide Slider</a></li>
																	<li><a href="portfolio-single-full-width-slider.html">Full Width Slider</a></li>
																	<li><a href="portfolio-single-gallery.html">Gallery</a></li>
																	<li><a href="portfolio-single-carousel.html">Carousel</a></li>
																	<li><a href="portfolio-single-medias.html">Medias</a></li>
																	<li><a href="portfolio-single-full-width-video.html">Full Width Video</a></li>
																	<li><a href="portfolio-single-masonry-images.html">Masonry Images</a></li>
																	<li><a href="portfolio-single-left-sidebar.html">Left Sidebar</a></li>
																	<li><a href="portfolio-single-right-sidebar.html">Right Sidebar</a></li>
																	<li><a href="portfolio-single-left-and-right-sidebars.html">Left and Right Sidebars</a></li>
																	<li><a href="portfolio-single-sticky-sidebar.html">Sticky Sidebar</a></li>
																	<li><a href="portfolio-single-extended.html">Extended</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="#">Grid Layouts<i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
																<ul class="dropdown-menu">
																	<li><a href="portfolio-grid-1-column.html">1 Column</a></li>
																	<li><a href="portfolio-grid-2-columns.html">2 Columns</a></li>
																	<li><a href="portfolio-grid-3-columns.html">3 Columns</a></li>
																	<li><a href="portfolio-grid-4-columns.html">4 Columns</a></li>
																	<li><a href="portfolio-grid-5-columns.html">5 Columns</a></li>
																	<li><a href="portfolio-grid-6-columns.html">6 Columns</a></li>
																	<li><a href="portfolio-grid-no-margins.html">No Margins</a></li>
																	<li><a href="portfolio-grid-full-width.html">Full Width</a></li>
																	<li><a href="portfolio-grid-full-width-no-margins.html">Full Width No Margins</a></li>
																	<li><a href="portfolio-grid-1-column-title-and-description.html">Title and Description</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="#">Masonry Layouts<i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
																<ul class="dropdown-menu">
																	<li><a href="portfolio-masonry-2-columns.html">2 Columns</a></li>
																	<li><a href="portfolio-masonry-3-columns.html">3 Columns</a></li>
																	<li><a href="portfolio-masonry-4-columns.html">4 Columns</a></li>
																	<li><a href="portfolio-masonry-5-columns.html">5 Columns</a></li>
																	<li><a href="portfolio-masonry-6-columns.html">6 Columns</a></li>
																	<li><a href="portfolio-masonry-no-margins.html">No Margins</a></li>
																	<li><a href="portfolio-masonry-full-width.html">Full Width</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="#">Sidebar Layouts<i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
																<ul class="dropdown-menu">
																	<li><a href="portfolio-sidebar-left.html">Left Sidebar</a></li>
																	<li><a href="portfolio-sidebar-right.html">Right Sidebar</a></li>
																	<li><a href="portfolio-sidebar-left-and-right.html">Left and Right Sidebars</a></li>
																	<li><a href="portfolio-sidebar-sticky.html">Sticky Sidebar</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="#">Ajax<i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
																<ul class="dropdown-menu">
																	<li><a href="portfolio-ajax-page.html">Ajax on Page</a></li>
																	<li><a href="portfolio-ajax-modal.html">Ajax on Modal</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="#">Extra<i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
																<ul class="dropdown-menu">
																	<li><a href="portfolio-extra-timeline.html">Timeline</a></li>
																	<li><a href="portfolio-extra-lightbox.html">Lightbox</a></li>
																	<li><a href="portfolio-extra-load-more.html">Load More</a></li>
																	<li><a href="portfolio-extra-lazy-load.html">Lazy Load</a></li>
																	<li><a href="portfolio-extra-pagination.html">Pagination</a></li>
																	<li><a href="portfolio-extra-combination-filters.html">Combination Filters</a></li>
																</ul>
															</li>
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-toggle" href="#">
															Contact Us
														<i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i><i class="fa fa-caret-down"></i></a>
														<ul class="dropdown-menu">
															<li><a href="contact-us.html">Contact Us - Basic</a></li>
															<li><a href="contact-us-advanced.html">Contact Us - Advanced</a></li>
														</ul>
													</li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Features</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Forms Basic</h1>
							</div>
						</div>
					</div>
				</section>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							
						</div>
					</div>
				</div>

				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							
					
					<h1>Concluido!</h1>
  <p>Sua mensagem foi enviada com sucesso! Entaremos em contato o mais rápido possível!.</p>
							
					
							
					
						</div>
					</div>
					
					
					
					
					
					
				</div>

			</div>

	
		</div>

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="master/style-switcher/style.switcher.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/common/common.min.js"></script>
		<script src="vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="vendor/isotope/jquery.isotope.min.js"></script>
		<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="vendor/vide/vide.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Admin Extension Specific Page Vendor -->
		<script src="../../porto-admin/edge/assets/vendor/autosize/autosize.js"></script>
		<script src="../../porto-admin/edge/assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>

		<!-- Admin Extension -->
		<script src="../../porto-admin/edge/assets/javascripts/theme.admin.extension.js"></script>
		
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script><a class="scroll-to-top hidden-mobile" href="#"><i class="fa fa-chevron-up"></i></a><a class="scroll-to-top hidden-mobile visible" href="#"><i class="fa fa-chevron-up"></i></a><a class="scroll-to-top hidden-mobile visible" href="#"><i class="fa fa-chevron-up"></i></a><a class="scroll-to-top hidden-mobile visible" href="#"><i class="fa fa-chevron-up"></i></a><a class="scroll-to-top hidden-mobile visible" href="#"><i class="fa fa-chevron-up"></i></a><a class="scroll-to-top hidden-mobile visible" href="#"><i class="fa fa-chevron-up"></i></a><a class="scroll-to-top hidden-mobile visible" href="#"><i class="fa fa-chevron-up"></i></a><a class="scroll-to-top hidden-mobile visible" href="#"><i class="fa fa-chevron-up"></i></a>

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-42715764-5', 'auto');
			ga('send', 'pageview');
		</script>
		<script src="master/analytics/analytics.js"></script>

	<script>
		var mod = 0;
		function OnOffdivpagamentos(){
			if(mod==0){
			 document.getElementById('tipospagamentos').style.display='block';
			 mod=1;
			} else if(mod==1){
			document.getElementById('tipospagamentos').style.display='none';
			 mod=0;
			}
		}
		
		function callsubmit(){
			var require = document.getElementById('nome_projeto').value;
			if(require.length == 0){
			alert('Preencha ao menos o Nome do Projeto para prosseguir!.');
			} else {
			
			document.getElementById('frmprojeto').submit();
			
			}
		}
		
	</script>

<!-- Mirrored from preview.oklerthemes.com/porto/4.9.2/feature-admin-forms-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Oct 2016 20:06:01 GMT -->

</body></html>