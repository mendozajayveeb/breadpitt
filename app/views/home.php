<?php require_once '../partials/template.php';?>

<?php function get_page_content() { ?>

	<section class="banner img-fluid">
		<div class="banner-message">
			<h1 class="text-center">Bread Pitt</h1>
			<p class="text-center">baked beyond your expectations.</p>
		</div>
	</section>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<section class="brand my-5">
					<div class="row">
						<div class="col-lg-12">
							<h2 class="text-center mb-5">Our Breads</h2>
						</div>
						<div class="col-lg-4 col-sm-12">
							<div class="card mt-3">
								<div class="card-top">
									<h3 class="text-center pt-3">Classic Breads</h3>
								</div>
								<div class="card-body">
									<a href="catalog.php?category_id=1"><img src="../assets/images/web-img/breadloaf.jpg" class="img-fluid"></a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-12">
							<div class="card mt-3">
								<div class="card-top">
									<h3 class="text-center pt-3">Specialty Breads</h3>
								</div>
								<div class="card-body">
									<a href="catalog.php?category_id=2"><img src="../assets/images/web-img/specialbread.jpg" class="img-fluid"></a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-12">
							<div class="card mt-3">
								<div class="card-top">
									<h3 class="text-center pt-3">Doughnuts</h3>
								</div>
								<div class="card-body">
									<a href="catalog.php?category_id=3"><img src="../assets/images/web-img/dougnut.jpg" class="img-fluid"></a>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div> <!-- end of div brands -->
		</div>
	</div>

	<section class="about">
		<!-- <div class="about-bg"> -->
			<div class="container">
				<div class="col-sm-12">
					<div class="about-content">
						<h2 class="text-center my-5 pt-5">About Us</h2>

						<p class="text-justify"> 
							Our breads are made fresh from scratch using the highest quality ingredients. In addition to our famous pandesal, we also make soft-crusted sandwich breads, specialty breads and other baked treats like muffins and ensaymadas. We encourage a more healthy and natural lifestyle, having it as one of our company values. In line with this concept, all our breads contain Bromate-Free flour, and we use NO preservatives, artificial color or flavor. We also use ISO 9001 food-grade brown kraft bags for packaging. Our house-brand palamans contain natural ingredients, with NO preservatives and artificial flavor and color.
						</p>

						<p class="text-justify">
							We have a wide range of breads, from the most basic all-time favorite Filipino Pandesal, to other flavored and speciality breads. Click <a href="catalog.php">here</a> to view our menu.
						</p>

					</div>
				</div>
			</div>
		<!-- </div> -->
	</section>

	<section class="testimonials py-5">
		<div class="container">
			<h2 class="text-center my-5">Testimonials</h2>
			<div class="row">
				<div class="col-lg-12 says">
					<div class="row">
						<div class="col-lg-12">
							<div class="person">
								<img src="../assets/images/web-img/jm.jpg">
							</div>
						</div>
						<div class="col-lg-12">
							<div class="testimony text-center">
								<blockquote>
									"More power to Bread Pitt. I think this is the best tasting bread in town. I can't live without them."
									<cite>- James Barallas</cite>
								</blockquote>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-12 says">
					<div class="row">
						<div class="col-lg-12">
							<div class="person">
								<img src="../assets/images/web-img/js.jpg">
							</div>
						</div>
						<div class="col-lg-12">
							<div class="testimony text-center">
								<blockquote>
									"Never in my life I imagined myself eating bread until I came across with Bread Pitt and try their menu. Everything has changed."
									<cite>- JC Mercado</cite>
								</blockquote>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-12 says">
					<div class="row">
						<div class="col-lg-12">
							<div class="person">
								<img src="../assets/images/web-img/pj.jpg">
							</div>
						</div>
						<div class="col-lg-12">
							<div class="testimony text-center">
								<blockquote>
									I met my wife at their shop somewhere in Makati. Its funny how I can still reminisce the times I used to go there. Until now, me and my family still can't resist to come and spend time while eating our favorite bread.
									<cite>- Paul Duenas</cite>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


<?php } ?>