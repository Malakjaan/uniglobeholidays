<?php include('resources/header.php'); ?>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Our Gallery </title>
	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="images/favicon.ico" />
	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114x114-precomposed.png">
	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72x72-precomposed.png">
	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-57x57-precomposed.png">
	<!-- Custom - Theme CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">
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
	
	<!-- Header -->	
	<header class="header-main container-fluid no-padding">
	<!-- SidePanel -->
	<div id="slidepanel">
		<!-- Top Header -->
		<div class="header-top container-fluid no-padding">	
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-6">
						<span>Welcome to tours & travels</span>
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
						<a href="index.html"><img src="images/logo.png" alt="logo" height="52" width="70"/><h3>Global</h3><span>tours & travels</span></a>
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
							<a href="index.html" class="mobile-logo" title="Logo"><h3>Global</h3></a>
						</div>
						<div class="navbar-collapse collapse" id="navbar">
							<ul class="nav navbar-nav">
								<li class="dropdown active">
									<a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" title="Home" href="index.html">Home</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">
										<li><a title="Home 2" href="home2.html">Home 2</a></li>
										<li><a title="About Global" href="#">About Global</a></li>
										<li><a title="Top Destination" href="#">Top destination</a></li>
										<li><a title="Our Gallery" href="#">Our gallery</a></li>
										<li><a title="Contact Us" href="#">Contact us</a></li>
									</ul>
								</li>
								<li><a title="About Us" href="aboutus.html">About Us</a></li>
								<li class="dropdown">
									<a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" title="Destination" href="destination.html">Destination</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">
										<li><a title="Destination Detail" href="destination-details.html">Destination Detail</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" title="Gallery" href="#">Gallery</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">
										<li><a title="Gallery 3 Column" href="gallery3column.html">Gallery 3 Column</a></li>
										<li><a title="Gallery 4 Column" href="gallery4column.html">Gallery 4 Column</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" title="Blog" href="blog.html">Blog</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">
										<li><a title="Blog Single" href="blogpost.html">Blog Single</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" title="Pages" href="#">Pages</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">
									<li><a title="Destination Detail" href="destination-details.html">Destination Detail</a></li>
									</ul>
								</li>
								<li><a title="Contact" href="contactus.html">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div class="input-group menusearch">
						<input type="text" placeholder="Search for Deals" class="form-control">
						<span  class="input-group-btn">
							<button type="button" title="Search" class="btn"><span class="icon_search" aria-hidden="true"></span></button>
						</span>
					</div>
				</nav><!-- Navigation /- -->
			</div>
		</div>
	</div>
</header><!-- Header /- -->
	<main class="site-main page-spacing">
		<!-- PageBanner -->
		<div class="container-fluid no-padding pagebanner gallery3column">
			<div class="container">
				<h3>Our gallery</h3>
			</div>
		</div><!-- PageBanner /- -->
		<div class="container gallery-section">
			<div class="section-padding"></div>
			<div class="section-header">
				<h3>our holiday gallery</h3>
				<span>We're gonna make our dreams come true</span>
			</div>
			<ul class="portfolio-list">
				<li class="col-md-4 col-sm-4 col-xs-4">
					<div class="content-image-block">
						<a href="index-2.html#"><img src="images/gallery3.1.jpg" alt="gallery" width="370" height="320"/></a>
						<div class="content-block-icon">
							<a href="images/gallery3.1.jpg" class="gallery-popup"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</li>
				<li class="col-md-4 col-sm-4 col-xs-4">
					<div class="content-image-block">
						<a href="index-2.html#"><img src="images/gallery3.2.jpg" alt="gallery" width="370" height="320"/></a>
						<div class="content-block-icon">
							<a href="images/gallery2.jpg" class="gallery-popup"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</li>
				<li class="col-md-4 col-sm-4 col-xs-4">
					<div class="content-image-block">
						<a href="index-2.html#"><img src="images/gallery3.3.jpg" alt="gallery" width="370" height="320"/></a>
						<div class="content-block-icon">
							<a href="images/gallery3.3.jpg" class="gallery-popup"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</li>
				<li class="col-md-4 col-sm-4 col-xs-4">
					<div class="content-image-block">
						<a href="index-2.html#"><img src="images/gallery3.4.jpg" alt="gallery" width="370" height="320"/></a>
						<div class="content-block-icon">
							<a href="images/gallery3.4.jpg" class="gallery-popup"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</li>
				<li class="col-md-4 col-sm-4 col-xs-4">
					<div class="content-image-block">
						<a href="index-2.html#"><img src="images/gallery3.5.jpg" alt="gallery" width="370" height="320"/></a>
						<div class="content-block-icon">
							<a href="images/gallery3.5.jpg" class="gallery-popup"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</li>
				<li class="col-md-4 col-sm-4 col-xs-4">
					<div class="content-image-block">
						<a href="index-2.html#"><img src="images/gallery3.6.jpg" alt="gallery" width="370" height="320"/></a>
						<div class="content-block-icon">
							<a href="images/gallery3.6.jpg" class="gallery-popup"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</li>
				<li class="col-md-4 col-sm-4 col-xs-4">
					<div class="content-image-block">
						<a href="index-2.html#"><img src="images/gallery3.7.jpg" alt="gallery" width="370" height="320"/></a>
						<div class="content-block-icon">
							<a href="images/gallery3.7.jpg" class="gallery-popup"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</li>
				<li class="col-md-4 col-sm-4 col-xs-4">
					<div class="content-image-block">
						<a href="index-2.html#"><img src="images/gallery3.8.jpg" alt="gallery" width="370" height="320"/></a>
						<div class="content-block-icon">
							<a href="images/gallery3.8.jpg" class="gallery-popup"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</li>
				<li class="col-md-4 col-sm-4 col-xs-4">
					<div class="content-image-block">
						<a href="index-2.html#"><img src="images/gallery3.9.jpg" alt="gallery" width="370" height="320"/></a>
						<div class="content-block-icon">
							<a href="images/gallery3.9.jpg" class="gallery-popup"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</li>
			</ul>
			<nav class="ow-pagination">
				<ul class="pagination">
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#"><i aria-hidden="true" class="fa fa-angle-double-right"></i></a></li>
				</ul>
			</nav>
			<div class="section-padding"></div>
		</div>
	</main>
	
	<!-- Footer Main -->
	<?php include('resources/footer.php'); ?>
	
	<!-- JQuery v1.11.3 -->	
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.ddslick.min.js"></script><!-- For Option Image & decription  -->	
	<script src="libraries/lib.js"></script><!-- Bootstrap JS File v3.3.5 -->	
	<script src="libraries/bootstrap-datetimepicker.min.js"></script><!-- Bootstrap DateTimePicker -->
	<script src="libraries/lightslider-master/lightslider.js"></script><!-- LightSlider -->	
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script><!-- Library - Google Map API -->
	
	<!-- Library - Theme JS -->
	<script src="js/functions.js"></script>
</body>
</html>