<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="color_b">
    <div class="fondo_2">
        <div class="contenido">
            <?php if( isset($_SESSION['userRegister'])): ?>

            <h1 class="titulo_1">Bienvenido <br><?php echo $_SESSION ['userRegister']; ?></h1>
            <div class="botones">
                <a class="boton_2" href="./cerrar.php">Cerrar Sesion</a>
                <a class="boton_2" href="./index.php">Home</a>
            </div>


            <?php else: ?>

            <h1>No te haz registrado</h1>
            <a href="./registro.php" style="text-decoration: none; color:white; font-weight: bolder;">Registrate</a>

            <?php endif ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>