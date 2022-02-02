<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contacto</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="js/header_responsive.js"></script>

</head>

<body id="inicio">

<?php require 'partials/header.php'; ?>
<br>
<div>
    <form method="post" action="php/email.php">
        <legend>Solicita tu presupuesto</legend>
        <br>Déjanos tus datos para contactarte<br>
        <br>
        <label for="nombre">Nombre:</label><input type="text" id="nombre" name="nombre" pattern="[A-Za-zW+]{3,}" required>
        <br>
        <label for="empresa">Empresa:</label><input type="text" id="empresa" name="empresa" required>
        <br>
        <label for="telefono">Teléfono:</label><input type="text" name="telefono" id="telefono" pattern="[0-9]{10}">
        <br>
        <label for="email">Dirección de email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" cols="30" rows="8"></textarea>
        <br>
        <input type="submit" id="submit" value="Contáctanos">
        <br>
    </form>
</div>

<br>
<?php require 'partials/footer.php'; ?>

<script src="https://kit.fontawesome.com/6c35e6223b.js" crossorigin="anonymous"></script>
<script src="js/app.js"></script>

</body>
</html>
