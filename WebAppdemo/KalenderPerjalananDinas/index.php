<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kalender Perjalanan Dinas Gallery</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
	<link rel="stylesheet" href="cards-gallery.css">
</head>

<body>
	<?php include('../navbar.php') ?>

	<section class="gallery-block cards-gallery">
		<div class="container">
			<div class="heading">
				<h2>Kalender Perjalanan Dinas</h2>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-4">
					<div class="card border-0 transform-on-hover">
						<a class="lightbox" href="img/1.jpeg">
							<img src="img/1.jpeg" alt="Card Image" class="card-img-top">
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="card border-0 transform-on-hover">
						<a class="lightbox" href="img/2.jpeg">
							<img src="img/2.jpeg" alt="Card Image" class="card-img-top">
						</a>
					</div>
				</div>
				<!-- <div class="col-md-6 col-lg-4">
					<div class="card border-0 transform-on-hover">
						<a class="lightbox" href="img/3.jpeg">
							<img src="img/3.jpeg" alt="Card Image" class="card-img-top">
						</a>
					</div>
				</div> -->
				<div class="col-md-6 col-lg-4">
					<div class="card border-0 transform-on-hover">
						<a class="lightbox" href="img/4.jpeg">
							<img src="img/4.jpeg" alt="Card Image" class="card-img-top">
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="card border-0 transform-on-hover">
						<a class="lightbox" href="img/5.jpeg">
							<img src="img/5.jpeg" alt="Card Image" class="card-img-top">
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="card border-0 transform-on-hover">
						<a class="lightbox" href="img/6.jpeg">
							<img src="img/6.jpeg" alt="Card Image" class="card-img-top">
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="card border-0 transform-on-hover">
						<a class="lightbox" href="img/7.jpeg">
							<img src="img/7.jpeg" alt="Card Image" class="card-img-top">
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="card border-0 transform-on-hover">
						<a class="lightbox" href="img/8.jpeg">
							<img src="img/8.jpeg" alt="Card Image" class="card-img-top">
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="card border-0 transform-on-hover">
						<a class="lightbox" href="img/9.jpeg">
							<img src="img/9.jpeg" alt="Card Image" class="card-img-top">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
	<script>
		baguetteBox.run('.cards-gallery', {
			animation: 'slideIn'
		});
	</script>
</body>

</html>