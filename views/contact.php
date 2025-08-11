<!DOCTYPE html>
<html lang="en">


<head>
    <link rel="icon" type="image/x-icon" href="/DR_Fashions/public/img/favicon.ico">
</head>

<body>

	<?php include 'components/header.php'; ?>

	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>




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
					<p>Address: No.195/1 Pahalamadampella, Welekadehandiya, Akaragama </p>
					<p>Phone: 077 295 5780</p>
					<p>Email: drfashions.official@gmail.com</p>
<!--					<div class="cf-social">-->
<!--						<a href="#"><i class="fa-brands fa-instagram"></i></a>-->
<!--						<a href="#"><i class="fa-brands fa-facebook"></i></a>-->
<!--					</div>-->
				</div>
				<div class="col-lg-9">
					<form class="contact-form" action="send_mail.php" method="POST">
						<input type="text" name="name" placeholder="Enter your name" required>
						<input type="email" name="email" placeholder="Enter your email address" required>
						<textarea name="message" placeholder="Message ..." required></textarea>
						<button type="submit" class="site-btn sb-dark">Send</button>
					</form>
				</div>
			</div>
		</div>
		<div class="map-area">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m27!1m12!1m3!1d63325.67912027126!2d79.9046517285683!3d7.257344688794166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m12!3e3!4m5!1s0x3ae2e7b57a71c879%3A0x7ce436e65628daaf!2sDR%20Fashions%20pvt%20ltd%2C%20152%2F2%2F1%20pahalamadampella%2C%20Katana!3m2!1d7.2572614!2d79.9458514!4m4!1s0x3ae2e7b57a71c879%3A0x7ce436e65628daaf!3m2!1d7.2572614!2d79.9458514!5e0!3m2!1sen!2slk!4v1754768967370!5m2!1sen!2slk"
				width="100%"
				height="100%"
				style="border:0;"
				allowfullscreen=""
				loading="lazy"
				referrerpolicy="no-referrer-when-downgrade">
			</iframe>
		</div>

	</section>
	<!-- Page section end -->





	<!-- load for map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
	<script src="js/map.js"></script>

	<?php include 'components/footer.php'; ?>

</body>

</html>