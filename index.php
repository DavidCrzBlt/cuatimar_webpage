<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inicio</title>
<!-- <link rel="stylesheet" href="css/stylesheet.css"> -->
<link rel="stylesheet" href="css/styles.css">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3D230K4YZW"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3D230K4YZW');
</script>

</head>

<body id="inicio">

<?php require 'partials/header.php'; ?>

<main>

<div class="container-slider">
	<div class="slider" id="slider">
		<div class="slider__section">
			<img src="Cuatimar_images/Reputacion.jpeg" alt="La recompensa de un trabajo bien hecho" class="slider__img">
		</div>
		<div class="slider__section">
			<img src="Cuatimar_images/Trabajo_equipo.jpeg" alt="Trabajo en equipo" class="slider__img">
		</div>
		<div class="slider__section">
			<img src="Cuatimar_images/Exito.jpeg" alt="Deja que tu exito haga todo el ruido" class="slider__img">
		</div>
		<div class="slider__section">
			<img src="Cuatimar_images/Un_dia_seguro.jpeg" alt="Un dia seguro" class="slider__img">
		</div>
	</div>
	<div class="slider__btn slider__btn--right" id="btn-right">&#62;</div>
	<div class="slider__btn slider__btn--left" id="btn-left">&#60;</div>
</div>

<section id="b1">
	<br>

	<div class="box">
		<h2>Nuestra empresa</h2>
		<p>Somos una empresa dedicada a gestionar proyectos de alto impacto para nuestros clientes.
		Pues esto nos hace ser parte de la cadena de valor que ellos ofrecen y así logramos contribuir al desarrollo del país y del crecimiento económico.</p>
	</div>
	<div class="juntos">
		<div>
			<h2>Misión</h2>
			<p>Agregar valor a través de nuestros servicios de construcción, ofreciendo soluciones innovadoras y eficientes para impulsar el desarrollo de la industria en México.</p>
		</div>
    <div class="separador">
    </div>
		<div>
			<h2>Visión</h2>
			<p>Ser reconocidos como la mejor empresa de ingeniería, construcción y gerencia de proyectos.</p>
		</div>
	</div>
	<div class="box">
		<h2>Valores</h2>

			<span><p>Compromiso</p><i class="fas fa-handshake fa-2x"></i></span>
			<span><p>Responsabilidad</p><i class="fas fa-list-ul fa-2x"></i></span>
			<span><p>Seguridad</p><i class="fas fa-hard-hat fa-2x"></i></span>
			<span><p>Integridad</p><i class="far fa-hand-paper fa-2x"></i></span>
			<span><p>Trabajo en equipo</p><i class="fas fa-users fa-2x"></i></span>
	</div>

</section>
</main>
<br><br>

<?php require 'partials/footer.php'; ?>

<script src="https://kit.fontawesome.com/6c35e6223b.js" crossorigin="anonymous"></script>
<script src="js/app.js"></script>

</body>
</html>
