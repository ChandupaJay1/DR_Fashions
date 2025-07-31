<!DOCTYPE html>
<html lang="en">

<body>

	<?php include 'components/header.php'; ?>

	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section start -->   
	<header class="header-area">
		<a href="home.php" class="logo-area">
			<img src="../public/img/logo.png" alt="">
		</a>
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
		<div class="phone-number">+675 334 567 223</div>
		<nav class="nav-menu">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="about.php">About us</a></li>
				<li><a href="service.php">Services</a></li>
				<li><a href="portfolio.php">Portfolio</a></li>
				<li class="active"><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->   


	<!-- Page header section start -->
	<section class="page-header-section set-bg" data-setbg="../public/img/header-bg-2.jpg">
		<div class="container">
			<h1 class="header-title">Contact<span>.</span></h1>
		</div>
	</section>
	<!-- Page header section end -->


	<!-- Page section start -->
	<section class="page-section pt100">
		<div class="container pb100">
			<div class="section-title pt-5">
				<h1>Get in touch</h1>
			</div>
			<div class="row">
				<div class="col-lg-3 contact-info mb-5 mb-lg-0">
					<p>Address: 1481 Creekside Lane Avila Beach, CA 93424 </p>
					<p>Phone: +53 345 7953 32453</p>
					<p>Email: yourmail@gmail.com</p>
					<div class="cf-social">
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
					</div>
				</div>
				<div class="col-lg-9">
					<form class="contact-form">
						<input type="text" placeholder="Enter your name">
						<input type="text" placeholder="Enter your email address">
						<textarea placeholder="Message ..."></textarea>
						<button class="site-btn sb-dark">Send</button>
					</form>
				</div>
			</div>
		</div>
		<div class="map-area" id="map-canvas"></div>
	</section>
	<!-- Page section end -->



	
	
	<!-- load for map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
	<script src="js/map.js"></script>

	<?php include 'components/footer.php'; ?>

</body>
</html>