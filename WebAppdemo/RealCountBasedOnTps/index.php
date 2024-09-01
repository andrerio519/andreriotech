<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Real Count Gallery</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
	<link rel="stylesheet" href="cards-gallery.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light navbar-dark bg-danger">
			<a class="navbar-brand" href="index.html">andrerioTech</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="index.html">Projects <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="/WebAppdemo/Certificate/certificate.html">Certificate</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="https://andreriotech.my.id" target="_blank">Contact</a>
					</li>
				</ul>
			</div>
		</nav>
	<section class="gallery-block cards-gallery">
		<div class="container">
			<div class="heading">
				<h2>Real Count Based On Tps</h2>
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
				<div class="col-md-6 col-lg-4">
					<div class="card border-0 transform-on-hover">
						<a class="lightbox" href="img/3.jpeg">
							<img src="img/3.jpeg" alt="Card Image" class="card-img-top">
						</a>
					</div>
				</div>
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
						<a class="lightbox" href="img/mobile (1).png">
							<img src="img/mobile (1).png" alt="Card Image" class="card-img-top">
						</a>
						<div class="card-body">
							<h6><a href="#">Mobile View</a></h6>
							<p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="card border-0 transform-on-hover">
						<a class="lightbox" href="img/mobile (2).png">
							<img src="img/mobile (2).png" alt="Card Image" class="card-img-top">
						</a>
						<div class="card-body">
							<h6><a href="#">Mobile View</a></h6>
							<p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="card border-0 transform-on-hover">
						<a class="lightbox" href="img/mobile.png">
							<img src="img/mobile.png" alt="Card Image" class="card-img-top">
						</a>
						<div class="card-body">
							<h6><a href="#">Mobile View</a></h6>
							<p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
						</div>
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