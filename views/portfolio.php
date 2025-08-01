<!DOCTYPE html>
<html lang="en">

<body>

	<?php include 'components/header.php'; ?>

	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	


	<!-- Page header section start -->
	<section class="page-header-section set-bg" data-setbg="../public/img/header-bg.jpg">
		<div class="container">
			<h1 class="header-title">Portfolio<span>.</span></h1>
		</div>
	</section>
	<!-- Page header section end -->


	<!-- Page section start -->
	<div class="page-section spad">
		<div class="container">
			<!-- portfolio filter menu -->
			<ul class="portfolio-filter">
				<li class="filter" data-filter="*">All</li>
				<li class="filter" data-filter=".photo">Photography</li>
				<li class="filter" data-filter=".design">Design</li>
				<li class="filter" data-filter=".iden">Identity</li>
				<li class="filter" data-filter=".corp">Corporate</li>
				<li class="filter" data-filter=".uxui">UI/UX</li>
			</ul>
		</div>
		<!-- portfolio items -->
		<div class="portfolio-warp spad">
			<div id="portfolio">
				<div class="grid-sizer"></div>
				<!-- portfolio item -->
				<div class="grid-item set-bg grid-wide photo" data-setbg="../public/img/portfolio/1.jpg"><a class="img-popup" href="../public/img/portfolio/1.jpg"></a></div>
				<!-- portfolio item -->
				<div class="grid-item set-bg design corp" data-setbg="../public/img/portfolio/2.jpg"><a class="img-popup" href="../public/img/portfolio/2.jpg"></a></div>
				<!-- portfolio item -->
				<div class="grid-item set-bg iden photo uxui" data-setbg="../public/img/portfolio/3.jpg"><a class="img-popup" href="../public/img/portfolio/3.jpg"></a></div>
				<!-- portfolio item -->
				<div class="grid-item set-bg corp design" data-setbg="../public/img/portfolio/4.jpg"><a class="img-popup" href="../public/img/portfolio/4.jpg"></a></div>
				<!-- portfolio item -->
				<div class="grid-item set-bg uxui iden" data-setbg="../public/img/portfolio/5.jpg"><a class="img-popup" href="../public/img/portfolio/5.jpg"></a></div>
				<!-- portfolio item -->
				<div class="grid-item set-bg grid-long design corp" data-setbg="../public/img/portfolio/6.jpg"><a class="img-popup" href="../public/img/portfolio/6.jpg"></a></div>
			</div>
		</div>
		<div class="container">
			<div class="pagination">
				<a href="#">01</a>
				<a href="" class="active">02</a>
				<a href="">03</a>
			</div>
		</div>
	</div>
	<!-- Page section end -->



	<?php include 'components/footer.php'; ?>
</body>
</html>