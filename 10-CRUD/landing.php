<?php /* session_start(); */

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

<body class="landing_page">
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link " href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        <form class="container-fluid justify-content-start">
                            <button class="btn btn-outline-success me-2" type="button">Registrate</button>
                            <button class="btn btn-outline-success me-2" type="button">Iniciar sesion</button>
                        </form>
                    </span>
                </div>
            </div>
        </nav>
    </header>

    <section class="page_1">

        <h1 class="titulo_page">
            Cursos Online
        </h1>

        <div class="contenido_page">
            <div class="card" style="width: 18rem; height: 31rem;">
                <img src="./img/software-developer-6521720_1280.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Induccion a la programacion</h5>
                    <p class="card-text">Aprende a programar como un verdadero hacker, ni en matrix hacen eso pues, anonymus te queda en pañales.</p>
                    <a href="course.php" class="btn btn-primary">Pa alla</a>
                    <div class="linea_3" style="display:flex; justify-content:space-between">
                      <p>10 pelaos</p>
                      <p>⭐3.99</p>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 18rem;height: 29rem;">
                <img src="./img/foto-curso002.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Induccion a la empanada</h5>
                    <p class="card-text">Aprende a cocinar como Ratatouille, iniciando con los basicos del pan ochon.</p>
                    <a href="#" class="btn btn-primary">Pa aca</a>
                    <div class="linea_3" style="display:flex; justify-content:space-between">
                      <p>30 pelaos</p>
                      <p>⭐3.99</p>
                    </div>
                  </div>
            </div>
            <div class="card" style="width: 18rem; height: 27rem;">
                <img src="./img/uag-imparte-curso-bls_Gyw.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Reviveme sage</h5>
                    <p class="card-text">Aprende a revivir como Sage, curando a todos tus compañeros REVIVEME SAGE.</p>
                    <a href="#" class="btn btn-primary">Pa algun lao</a>
                    <div class="linea_3" style="display:flex; justify-content:space-between">
                      <p>20 pelaos</p>
                      <p>⭐3.99</p>
                    </div>
                </div>
            </div>  
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>