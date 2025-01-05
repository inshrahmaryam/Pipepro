<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class=""><!--<![endif]-->

<!-- Mirrored from demoxml.com/html/royalbakery/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 May 2024 16:45:38 GMT -->
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

	<title>Home - Bakery</title>

	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="frontend/images/favicon.ico" />

	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href='{{url("frontend/images/apple-touch-icon-114x114-precomposed.png")}}'>

	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href='{{url("frontend/images/apple-touch-icon-72x72-precomposed")}}''>

	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href='{{url("frontend/images/apple-touch-icon-57x57-precomposed.png")}}'>

	<!-- Custom - Theme CSS -->
	<link rel="stylesheet" type="text/css" href='{{url("frontend/style.css")}}'>

	<!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->

</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
	<!-- Loader -->
	<div id="site-loader" class="load-complete">
		<div class="loader">
			<div class="loader-inner ball-clip-rotate">
				<div></div>
			</div>
		</div>
	</div><!-- Loader /- -->



	<!-- Header -->
	<header class="header-main container-fluid no-padding">
		<!-- Navigation -->
		<div class="menu-block container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<nav class="navbar ow-navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="add-to-cart">
						<div class="menu-search">
							<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search" />
									<button class="sb-search-submit"><i class="fa fa-search"></i></button>
									<span class="sb-icon-search"></span>
								</form>
							</div>
						</div>
						<ul class="cart">
							<li>
								<a aria-expanded="true" aria-haspopup="true" data-toggle="dropdown" id="cart" class="btn dropdown-toggle" title="Order Online" href="#">Order Online</a>
							</li>
						</ul>
					</div>
					<div id="navbar" class="navbar-collapse collapse navbar-right">
						<ul class="nav navbar-nav">
							<li class="dropdown active">
								<a href="{{ url('/')}}" title="Home" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
								<i class="ddl-switch fa fa-angle-down"></i>

							</li>
							<li class="dropdown">
								<a href="{{ url('/about')}}" title="About" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">About</a>
								<i class="ddl-switch fa fa-angle-down"></i>
								<
							</li>
							<li><a href="#menu-section" title="Features">Features</a></li>

							<li class="dropdown">
								<a href="{{ url('/blog')}}"  class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
								<i class="ddl-switch fa fa-angle-down"></i>

							</li>
							<li class="dropdown">
								<a href="{{ url('/services')}}"  class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
								<i class="ddl-switch fa fa-angle-down"></i>

							</li>
							<li class="dropdown">
								<a href="{{ url('/contact-us')}}"  class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Contact</a>
								<i class="ddl-switch fa fa-angle-down"></i>

							</li>
						</ul>
					</div>
				</nav><!-- Navigation -->
			</div>
		</div><!-- Container /- -->
	</header><!-- Header /- -->
