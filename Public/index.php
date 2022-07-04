<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="static/css/stylesheet.css">
	<link rel="stylesheet" href="static/assets/scss/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<body class="bg-pink">

	<?php require 'partials/header.php';?>

	<div class="carousel slide" id="mainSlider" data-bs-ride="true">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#mainSlider" data-bs-slide-to="0" class="active"
				aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#mainSlider" data-bs-slide-to="1"
				aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#mainSlider" data-bs-slide-to="2"
				aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="static/images/Factory1.png" alt="" class="d-block w-100">
			</div>
			<div class="carousel-item">
				<img src="static/images/Factory2.png" alt="" class="d-block w-100">
			</div>
			<div class="carousel-item">
				<img src="static/images/Factory3.png" alt="" class="d-block w-100">
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#mainSlider"
			data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#mainSlider"
			data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	<br>
	<div class="p-4">

		<div class="card bg-primary">
			<div class="card-body text-light">
				<h5 class="card-title text-center">Nuestra empresa</h5>
				<p class="card-text">Somos una empresa dedicada a gestionar proyectos de alto impacto para nuestros
					clientes.
					Pues esto nos hace ser parte de la cadena de valor que ellos ofrecen y así logramos contribuir
					al
					desarrollo del país y del crecimiento económico.</p>
			</div>
		</div>
		<br>
		<div class="row row-cols-1 row-cols-md-2 g-4">
			<div class="col">
				<div class="card bg-primary">
					<div class="card-body text-light">
						<h5 class="card-title text-center">Misión</h5>
						<p class="card-text">Agregar valor a través de nuestros servicios de construcción, ofreciendo
							soluciones innovadoras y
							eficientes para impulsar el desarrollo de la industria en México.</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card bg-primary">
					<div class="card-body text-light">
						<h5 class="card-title text-center">Visión</h5>
						<p class="card-text">Ser reconocidos como la mejor empresa de ingeniería, construcción y
							gerencia de proyectos.</p>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="card bg-primary">
			<div class="card-body text-light">
				<h5 class="card-title text-center">Valores</h5>
				<div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 g-4">
					<div class="col">
						<p class="text-center fw-bold">Compromiso</p>
						<i class="fas fa-handshake fa-2x text-center" style="width:100%"></i>
					</div>
					<div class="col">
						<p class="text-center fw-bold">Responsabilidad</p><i class="fas fa-list-ul fa-2x text-center"
							style="width:100%;"></i>
					</div>
					<div class="col">
						<p class="text-center fw-bold">Seguridad</p><i class="fas fa-hard-hat fa-2x text-center"
							style="width:100%;"></i>
					</div>
					<div class="col">
						<p class="text-center fw-bold">Integridad</p><i class="far fa-hand-paper fa-2x text-center"
							style="width:100%;"></i>
					</div>
					<div class="col">
						<p class="text-center fw-bold">Trabajo en equipo</p><i class="fas fa-users fa-2x text-center"
							style="width:100%;"></i>
					</div>
				</div>

			</div>
		</div>
	</div>



	<br><br>

	<br>
	<!-- Footer -->
	<?php require 'partials/footer.php';?>
	<!-- Footer -->

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
		crossorigin="anonymous"></script>
	<script src="static/js/main.js"></script>
	<script src="https://kit.fontawesome.com/6c35e6223b.js" crossorigin="anonymous"></script>
</body>

</html>