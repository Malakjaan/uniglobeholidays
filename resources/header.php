<?php
    include('config/connection.php');
    $get_details = "SELECT * FROM tbl_contact";
    $run_details = mysqli_query($dbcon, $get_details);
    $row_details = mysqli_fetch_array($run_details);

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class=""><!--<![endif]-->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Home2 -Tour</title>
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
						<span>Welcome to Uniglobe Holidays</span>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6">
						<ul>
						<li><a href="https://www.facebook.com/parvezahmed.bhat?mibextid=rS40aB7S9Ucbxw6v" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="https://wa.me/message/4KCS6226JCVFN1" title="whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
							<li><a href="https://www.instagram.com/invites/contact/?i=eldexk4e5xnc&utm_content=m8byvwa" title="google-plus"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div><!-- Top Header /- -->
		<!-- Middle Header /- -->
		<div class="container header-middle">
			<div class="row">
				<div class="col-md-2">
					<div class="logo-block">
						<a href="index.php"><img src="logos/k7.webp" alt="logo" height="100" width="100"/><h3>Uniglobe Holidays</h3><span></span></a>
					</div>
				</div>
				<div class="col-md-10 col-sm-12 col-xs-12">
					<div class="header-contactinfo-block">
						<div class="contactinfo-box">
							<span class="icon icon-Pointer"></span>
							<p>
                                <?=$row_details['paddress'];
                                    ?></span></p>
						</div>
						<div class="contactinfo-box">
							<span class="icon icon-Time"></span>
							<p>Monday-Saturday : 9:00 AM to 7:00 PM<span>Sunday : Closed</span></p>
						</div>
						<div class="contactinfo-box">
							<span class="icon icon-Phone2"></span>
							<p>
								<a href="tel:+91<?php echo $row_details['pcontact'];?>" title="011234567896">+91-<?php echo $row_details['pcontact'];?></a>
								<a href="mailto:<?php echo $row_details['pemail'];?>" title="info@global.com"><?php echo $row_details['pemail'];?></a>
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
							<a title="Logo" href="logos/k7.webp" class="navbar-brand"></a>
							<a href="index.php" class="mobile-logo" title="Logo"><h3>Global</h3></a>
						</div>
						<div class="navbar-collapse collapse" id="navbar">
							<ul class="nav navbar-nav">
								<li class="dropdown active">
									<a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" title="Home" href="index.php">Home</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">
										<li><a title="my home page" href="index.php">Home</a></li>
									</ul>
								</li>
								<li><a title="About Us" href="aboutus.php">About Us</a></li>
								<li class="dropdown">
									<a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" title="Gallery" href="#">Gallery</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">
										<li><a title="Gallery" href="gallery3.php">Gallery</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" title="services" href="services.php">Services</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">
									<li><a title="services" href="destinations.php">Services</a></li>
									</ul>
								</li>
								<li><a title="Contact" href="contactus.php">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div class="input-group menusearch">
					<form action="search.php" method="GET">
					<span  class="input-group-btn"><a href="search.php?pid=<?=base64_encode($row_package['id'])?>"></a>
							<button action="search.php" type="submit" title="Search" class="btn"><span class="icon_search" aria-hidden="true" ></button>
						</span>
                        <input type="text" name="query">
						
                      </form>

					</div>
				</nav><!-- Navigation /- -->
			</div>
		</div>
	</div>
</header><!-- Header /- -->
