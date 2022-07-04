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

<?php require 'partials/header.php'; ?>

<body class="bg-pink">

    <div class="card mx-auto" style="width: 18rem;">
        <div class="card-body">
            <form method="post" action="email.php">
                <legend>Solicita tu presupuesto</legend>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nombre completo" aria-label="Nombre completo" aria-describedby="basic-addon1" id="nombre" name="nombre" pattern="[A-Za-zW+]{3,}" required>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Empresa" aria-label="Empresa" aria-describedby="basic-addon2" id="empresa" name="empresa" required>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" aria-label="Teléfono" placeholder="Teléfono" name="telefono" id="telefono" pattern="[0-9]{10}">
                </div>

                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Correo electrónico" aria-label="Correo electrónico" id="email" name="email" required>
                </div>

                <div class="input-group">
                    <textarea class="form-control" aria-label="With textarea" placeholder="Mensaje" id="mensaje" name="mensaje" required></textarea>
                </div>
                <br>
                <input type="submit" id="submit" value="Contáctanos" class="btn btn-secondary">
            </form>
        </div>
    </div>

    <br>
    <!-- Footer -->
    <?php require 'partials/footer.php'; ?>
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="static/js/main.js"></script>
</body>

</html>