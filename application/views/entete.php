<!DOCTYPE html>

<html class="">
 
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Medislib</title>
	<!-- Standard Favicon -->
	<link rel="icon" type="image/png" href="../assets/images/icon.png" />
	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/images/apple-touch-icon-114x114-precomposed.png">
	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/images/apple-touch-icon-72x72-precomposed.png">
	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="../assets/images/apple-touch-icon-57x57-precomposed.png">
	<!-- Custom - Theme CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
	<!-- LOADER -->
	<div id="site-loader" class="load-complete">
		<div class="loader">
			<div class="loader-inner ball-triangle-path">
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
	</div><!-- Loader /- -->
	
	<header class="header-main container-fluid no-padding">
	<!-- SidePanel -->
	<div id="slidepanel">
		<!-- Top Header -->
		<div class="header-top container-fluid no-padding">	
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-6">
						<span>Bienvenue dans votre librairie Médicale</span>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6">
						<ul>
							<li><a href="#" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" title="GooglePlus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div><!-- Top Header /- -->
		<!-- Middle Header /- -->
		<div class="container header-middle">
			<div class="row">
				<div class="col-md-3">
					<div class="logo-block">
						<a href="../"><img src="../assets/images/logo.png" alt="logo" height="" width=""/><h3></h3><span></span></a>
					</div>
				</div>
				<div class="col-md-9 col-sm-12 col-xs-12">
					<div class="header-contactinfo-block">
						<div class="contactinfo-box">
							<span class="icon icon-Pointer"></span>
							<p>Global Tours, 09 downtown,<span>victoria, australia</span></p>
						</div>
						<div class="contactinfo-box">
							<span class="icon icon-Time"></span>
							<p>Monday-Friday : 9:00 AM to 7:00 PM<span>Sunday : Closed</span></p>
						</div>
						<div class="contactinfo-box">
							<span class="icon icon-Phone2"></span>
							<p>
								<a href="tel:011234567896" title="011234567896">(+01) 123 456 7896</a>
								<a href="mailto:info@global.com" title="info@global.com">info@global.com</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div><!-- Middle Header /- -->
	</div><!-- SidePanel /- -->
	
	<div class="menu-block">
		<div class="container">
			<div class="row">
				<!-- Navigation -->
				<nav class="navbar ow-navigation">
					<div id="loginpanel" class="desktop-hide">
						<div class="right" id="toggle">
							<a id="slideit" href="#slidepanel"><i class="fo-icons fa fa-inbox"></i></a>
							<a id="closeit" href="#slidepanel"><i class="fo-icons fa fa-close"></i></a>
						</div>
					</div>
					<div class="col-md-9">
						<div class="navbar-header">
							<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a title="Logo" href="index.html" class="navbar-brand"></a>
							<a href="index.html" class="mobile-logo" title="Logo"><h3>Medislib</h3></a>
						</div>
						<div class="navbar-collapse collapse" id="navbar">
							<ul class="nav navbar-nav">
								<li class="dropdown active">
									<a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" title="Home" href="index.html">Home</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">
										<li><a title="Home 2" href="home2.html">Accueil</a></li>
										<li><a title="" href="listemedecinAll">Listes Medecins</a></li>
										<li><a title="Top Destination" href="#">Listes pharmacie</a></li>
										<li><a title="Our Gallery" href="#">Our gallery</a></li>
										<li><a title="Contact Us" href="#">Contact us</a></li>
									</ul>
								</li>
								<li><a title="About Us" href="listemedecinAll">Listes Medecins</a></li>
								<li class="dropdown">
									<a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" title="Destination" href="destination.html">Listes pharmacie</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">
										<li><a title="Destination Detail" href="destination-details.html">Destination Detail</a></li>
									</ul>
								</li>
								
								<li class="dropdown">
									<a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" title="Blog" href="blog.html">Nous</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">
										<li><a title="Blog Single" href="blogpost.html">Blog Single</a></li>
									</ul>
								</li>
								
								<li><a title="Contact" href="contactus.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="input-group menusearch">
					
					</div>
				</nav><!-- Navigation /- -->
			</div>
		</div>
	</div>
</header><!-- Header /- -->