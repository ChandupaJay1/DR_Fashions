<!DOCTYPE html>
<html lang="en">

<body>

	<?php include 'components/header.php'; ?>

	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	


	<!-- Page header section start -->
	<section class="page-header-section set-bg" data-setbg="img/header-bg-2.jpg">
		<div class="container">
			<h1 class="header-title">News<span>.</span></h1>
		</div>
	</section>
	<!-- Page header section end -->


	<!-- Page section start -->	
	<section class="page-section spad">
		<div class="container">
			<!-- Single element -->
			<div class="element">
				<div class="section-title">
					<h1>Buttons</h1>
				</div>
				<div class="buttons">
					<button class="site-btn sb-dark mr-5">See Project</button>
					<button class="site-btn sb-solid-color mr-5">See Project</button>
					<button class="site-btn sb-solid-dark">See Project</button>
				</div>
			</div>
			<!-- Single element -->
			<div class="element">
				<div class="section-title">
					<h1>Accordions & tabs</h1>
				</div>
				<div class="row">
					<!-- Accordions -->
					<div class="col-md-6">
						<div id="accordion" class="accordion-area">
							<div class="panel">
								<div class="panel-header" id="headingOne">
									Mauris pharetra libero turpis, congue ultrices turpis consectetur 
									<button class="panel-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1"></button>
								</div>
								<div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
									<div class="panel-body">
										<p>Pellentesque lorem dolor, malesuada eget tortor vitae, tristique lacinia lectus. Pellen te sque sed accumsan risus, id aliquam nulla. Integer lorem risus, feugiat at mauris m alesuada, accumsan pellentesque ipsum. Nunc dapibus, libero ut pulvinar accumsan, tortor nisl iaculis ligula. </p>
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-header" id="headingTwo">
									Etiam ut augue et felis cursus bibendum sit amet ac justo
									<button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2"></button>
								</div>
								<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
									<div class="panel-body">
										<p>Pellentesque lorem dolor, malesuada eget tortor vitae, tristique lacinia lectus. Pellen te sque sed accumsan risus, id aliquam nulla. Integer lorem risus, feugiat at mauris m alesuada, accumsan pellentesque ipsum. Nunc dapibus, libero ut pulvinar accumsan, tortor nisl iaculis ligula. </p>
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-header active" id="headingThree">
									Etiam ut augue et felis cursus bibendum sit amet ac justo
									<button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3"></button>
								</div>
								<div id="collapse3" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
									<div class="panel-body">
										<p>Pellentesque lorem dolor, malesuada eget tortor vitae, tristique lacinia lectus. Pellen te sque sed accumsan risus, id aliquam nulla. Integer lorem risus, feugiat at mauris m alesuada, accumsan pellentesque ipsum. Nunc dapibus, libero ut pulvinar accumsan, tortor nisl iaculis ligula. </p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="tab-element">
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Pellentesque lorem </a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Etiam ut augue</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Congue ultrices</a>
								</li>
							</ul>
							<div class="tab-content" id="myTabContent">
								<!-- single tab content -->
								<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
									<div class="row">
										<div class="col-md-6">
											<img src="img/element.jpg" alt="">
										</div>
										<div class="col-md-6">
											<h4>Mauris pharetra libero turpis</h4>
											<p>Pellentesque lorem dolor, malesuada eget tortor vitae, tristique lacinia lectus. Pellen te sque sed accumsan risus, id aliquam nulla. Integer lorem risus, feugiat at mauris m alesuada.</p>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
									<div class="row">
										<div class="col-md-6">
											<img src="img/element.jpg" alt="">
										</div>
										<div class="col-md-6">
											<h4>Mauris pharetra libero turpis 2</h4>
											<p>Pellentesque lorem dolor, malesuada eget tortor vitae, tristique lacinia lectus. Pellen te sque sed accumsan risus, id aliquam nulla. Integer lorem risus, feugiat at mauris m alesuada.</p>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
									<div class="row">
										<div class="col-md-6">
											<img src="img/element.jpg" alt="">
										</div>
										<div class="col-md-6">
											<h4>Mauris pharetra libero turpis 3</h4>
											<p>Pellentesque lorem dolor, malesuada eget tortor vitae, tristique lacinia lectus. Pellen te sque sed accumsan risus, id aliquam nulla. Integer lorem risus, feugiat at mauris m alesuada.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Single element -->
			<div class="element">
				<div class="section-title">
					<h1>Loaders</h1>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="circle-progress">
							<div id="progress1" class="prog-circle"></div>
							<div class="progress-info">
								<h2>75%</h2>
							</div>
							<div class="prog-title">
								<h3>Fun Times</h3>
							</div>			
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="circle-progress">
							<div id="progress2" class="prog-circle"></div>
							<div class="progress-info">
								<h2>83%</h2>
							</div>
							<div class="prog-title">
								<h3>Hard Work</h3>
							</div>			
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="circle-progress">
							<div id="progress3" class="prog-circle"></div>
							<div class="progress-info">
								<h2>25%</h2>
							</div>
							<div class="prog-title">
								<h3>Inspiration</h3>
							</div>			
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="circle-progress">
							<div id="progress4" class="prog-circle"></div>
							<div class="progress-info">
								<h2>95%</h2>
							</div>
							<div class="prog-title">
								<h3>Creativity</h3>
							</div>			
						</div>
					</div>
				</div>
			</div>
			<div class="element">
				<div class="section-title">
					<h1>Milestones</h1>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="milestone">
							<h2>14</h2>
							<p>Years <br>of <br>Experience</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="milestone">
							<h2>237</h2>
							<p>Projects <br>Taken</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="milestone">
							<h2>11k</h2>
							<p>Twitter <br>Followers</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="milestone">
							<h2>12</h2>
							<p>Awards <br>Won</p>
						</div>
					</div>
				</div>
			</div>
			<div class="element">
				<div class="section-title">
					<h1>Icon boxes</h1>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="service-box">
							<div class="sb-icon">
								<div class="sb-img-icon">
									<img src="img/icon/dark/1.png" alt="">
								</div>
							</div>
							<h3>Plans and Projects</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed dui eget lorem tincidunt.</p>
							<a href="#" class="readmore">READ MORE</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="service-box">
							<div class="sb-icon">
								<div class="sb-img-icon">
									<img src="img/icon/dark/2.png" alt="">
								</div>
							</div>
							<h3>Conceptual Architecture</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed dui eget lorem tincidunt.</p>
							<a href="#" class="readmore">READ MORE</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="service-box">
							<div class="sb-icon">
								<div class="sb-img-icon">
									<img src="img/icon/dark/3.png" alt="">
								</div>
							</div>
							<h3>Apartment Buildings</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed dui eget lorem tincidunt.</p>
							<a href="#" class="readmore">READ MORE</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page section end -->


	<?php include 'components/footer.php'; ?>
</body>
</html>