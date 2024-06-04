<?php session_start();

 if ($_SERVER['REQUEST_METHOD'] == 'POST'){  
    $usuario = $_POST ['username'];
    $password = $_POST ['password'];
    $password_2 = $_POST ['password_2'];
    $email = $_POST ['email'];
    
}

$orden = "Rellene el formulario";


if(empty($usuario) or empty($password)){
    echo  '<div class="alert alert-danger" role="alert">' . $orden . '</div>'  ;
    }else{

    $_SESSION['userRegister'] = $usuario;
    $_SESSION['passRegister'] = $password;
    $_SESSION['pass2Register'] = $password_2;
    $_SESSION['emailRegister'] = $email;
    
    try {
        $conexion = new PDO("mysql: host=localhost; dbname=focaapp",'root','');
        echo "conexion OK <br>";
    } catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
    } 
    $statement = $conexion->prepare(" INSERT INTO `userapp` (`ID`, `Username`, `Email`, `Password`)
    VALUES (NULL, :username, :email, :pass)" );

    $statement->execute(array(":username"=>$usuario,":email"=>$email,":pass"=>$password));

    $statement = $statement->fetchAll();

    if($password == $password_2){
        echo "datos enviados";
    }else{
        echo "Las contraseñas no coinciden";
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/css/fontawesome-iconpicker.min.css"
        integrity="sha512-BfgviGirSi7OFeVB2z9bxp856rzU1Tyy9Dtq2124oRUZSKXIQqpy+2LPuafc2zMd8dNUa+F7cpxbvUsZZXFltQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="fondo">
        <div class="todo">
            <h1 style="color: #13ad99; justify-content:center; display:flex; ">Registrate</h1>

            <!-- <p style="color: blue"> <?php echo $orden ?>  </p> -->

            <form class="solo" action="registro.php" method="post">

                <i class="fa-solid fa-user"></i>
                <input class="user_C" id="username" type="text" placeholder="User" name="username"> <br>
                <!-- <label for="email">Email</label> -->
                <input class="user_C" type="email" id="email" placeholder="Email" name="email" required> <br>
                <!-- <label for="password">Password</label> -->
                <input class="user_C" id="password" type="password" placeholder="Password" name="password"> <br>
                <!--  <label for="password_2">Password</label> -->
                <input class="user_C" id="password_2" type="password" placeholder="Password" name="password_2"> <br>
                <button class="boton" type="submit">Registro</button>

            </form>

            <br>
            <a class="iniciar" href="index.php">
                Iniciar sesion </a>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/js/fontawesome-iconpicker.min.js"
        integrity="sha512-7dlzSK4Ulfm85ypS8/ya0xLf3NpXiML3s6HTLu4qDq7WiJWtLLyrXb9putdP3/1umwTmzIvhuu9EW7gHYSVtCQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>