<?php include('header.php'); ?>
    <!-- Main Start -->
    <main>
    	<!-- banner Start -->
    	<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="imgs/21.jpg" class="d-block w-100" alt="Slide 1">
		    </div>
		    <div class="carousel-item">
		      <img src="imgs/22.jpg" class="d-block w-100" alt="Slide 1">
		    </div>
		    <div class="carousel-item">
		      <img src="imgs/23.jpg" class="d-block w-100" alt="Slide 1">
		    </div>
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Next</span>
		  </button>
		</div>
		<!-- End Banner -->
		<!-- Services -->
		<section class="container my-4">
			<h1 class="text-center mb-4 section-heading">Services</h1>
			<div class="row">
				<div class="col-md-4">
					<div class="card">
					  <img src="imgs/cardio-1.jpg" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h3 class="card-title">Cardio</h3>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a href="service.php" class="btn btn-primary">Read More</a>
					  </div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
					  <img src="imgs/body-2.jpg" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h3 class="card-title">Body Building</h3>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a href="service.php" class="btn btn-primary">Read More</a>
					  </div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
					  <img src="imgs/dance-3.jpg" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h3 class="card-title">Dancing</h3>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a href="service.php" class="btn btn-primary">Read More</a>
					  </div>
					</div>
				</div>
			</div>
		</section>
		<!-- End -->

		<!-- Testimonials -->
		<section class="container-fluid bg-light py-4 mt-5 border-top border-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
							<h1 class="mb-4 section-heading">About Us</h1>
							<p class="lh-base">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1550s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							<p><a href="page.php" class="btn btn-info text-white">Read More</a></p>
					</div>
					<div class="col-md-6 offset-1">
							<h1 class="mb-4 section-heading">Gallery <a href="#" class="float-end btn btn-info text-white mt-2">View All</a></h1>
							<div class="gallery">
								<a data-lightbox="home-gallery" href="imgs/body-2.jpg"><img src="imgs/body-2.jpg" width="155" class="img-thumbnail" alt="..."></a>
								<a data-lightbox="home-gallery" href="imgs/body-2.jpg"><img src="imgs/body-2.jpg" width="155" class="img-thumbnail" alt="..."></a>
								<a data-lightbox="home-gallery" href="imgs/body-2.jpg"><img src="imgs/cardio-1.jpg" width="155" class="img-thumbnail" alt="..."></a>
								<a data-lightbox="home-gallery" href="imgs/body-2.jpg"><img src="imgs/body-2.jpg" width="155" class="img-thumbnail" alt="..."></a>
								<a data-lightbox="home-gallery" href="imgs/body-2.jpg"><img src="imgs/cardio-1.jpg" width="155" class="img-thumbnail" alt="..."></a>
								<a data-lightbox="home-gallery" href="imgs/body-2.jpg"><img src="imgs/body-2.jpg" width="155" class="img-thumbnail" alt="..."></a>
								<a data-lightbox="home-gallery" href="imgs/body-2.jpg"><img src="imgs/body-2.jpg" width="155" class="img-thumbnail" alt="..."></a>
								<a data-lightbox="home-gallery" href="imgs/body-2.jpg"><img src="imgs/cardio-1.jpg" width="155" class="img-thumbnail" alt="..."></a>
								<a data-lightbox="home-gallery" href="imgs/body-2.jpg"><img src="imgs/body-2.jpg" width="155" class="img-thumbnail" alt="..."></a>
								<a data-lightbox="home-gallery" href="imgs/body-2.jpg"><img src="imgs/dance-3.jpg" width="155" class="img-thumbnail" alt="..."></a>
								<a data-lightbox="home-gallery" href="imgs/body-2.jpg"><img src="imgs/body-2.jpg" width="155" class="img-thumbnail" alt="..."></a>
								<a data-lightbox="home-gallery" href="imgs/body-2.jpg"><img src="imgs/body-2.jpg" width="155" class="img-thumbnail" alt="..."></a>
							</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Testimonials -->

    </main>
    <!-- End -->

<script type="text/javascript" src="assets/lightbox2-2.11.3/dist/js/lightbox.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets/lightbox2-2.11.3/dist/css/lightbox.min.css" />

<?php include('footer.php'); ?>