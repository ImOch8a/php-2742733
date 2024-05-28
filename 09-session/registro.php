<?php session_start();

 if ($_SERVER['REQUEST_METHOD'] == 'POST'){  
    $usuario = $_POST ['username'];
    $password = $_POST ['password'];
    $email = $_POST ['email'];
}

if(empty($usuario) or empty($password)){
    echo 'rellene el formulario';
    }else{

    $_SESSION['userRegister'] = $usuario;
    $_SESSION['passRegister'] = $password;
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
}

    echo 'datos enviados';

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
    <input id="password" type="password" placeholder="Password" name="password">
    <button type="submit">Registro</button>

    </form>

    <?php if( isset($_SESSION['userRegister'])): ?>
    <p>Datos registraos, ya puedes iniciar sesion</p>
    <p><?php echo $_SESSION['userRegister'] . '<br>' . $_SESSION['passRegister'] . '<br>' . $_SESSION['emailRegister']; ?></p>
    <a href="index.php">Iniciar Sesion</a>
    <?php endif ?>    
</body>
</html>