<?php session_start();

 if ($_SERVER['REQUEST_METHOD'] == 'POST'){  
    $usuario = $_POST ['username'];
    $password = $_POST ['password'];
    $password_2 = $_POST ['password_2'];
    $email = $_POST ['email'];
    
}

if(empty($usuario) or empty($password)){
    echo 'rellene el formulario';
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
</head>
<body>

<h1>Registrate</h1>
    
   
    

    <form action="registro.php" method="post">

    <label for="username">User</label>
    <input id="username" type="text" placeholder="User" name="username"> <br>
    <label for="email">Email</label>
    <input type="email" id="email" placeholder="Email" name="email" required> <br>
    <label for="password">Password</label>
    <input id="password" type="password" placeholder="Password" name="password"> <br>
    <label for="password_2">Password</label>
    <input id="password_2" type="password" placeholder="Confirme la contraseña" name="password_2"> <br>
    <button type="submit">Registro</button>

    </form>

    <?php if ($_SESSION['passRegister'] == $_SESSION['pass2Register']){
        echo "Datos registaos  <br> $usuario <br> $password <br> $email";
    }else{
        echo "se cancela";
    }

?>
<br>
<a href="index.php">Iniciar Sesion</a>

</body>
</html>