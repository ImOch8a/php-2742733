<?php session_start();


 if ($_SERVER['REQUEST_METHOD'] == 'POST'){  
    $usuario = $_POST ['username'];
    $password = $_POST ['password'];
}

if(empty($usuario) or empty($password)){
    echo 'rellene el formulario';
    }else{
    //echo $usuario .' - '. $password;
    $_SESSION['userRegister'] = $usuario;
    $_SESSION['passRegister'] = $password;
        //echo "Variables de sesion guardadas";
        //header('Location: index.php');
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
    <input id="username" type="text" placeholder="User" name="username">
    <label for="password">Password</label>
    <input id="password" type="password" placeholder="Password" name="password">
    <button type="submit">Registro</button>

    </form>

    <?php if( isset($_SESSION['userRegister'])): ?>
    <p>Datos registraos, ya puedes iniciar sesion</p>
    <p><?php echo $_SESSION['userRegister'] . '-' . $_SESSION['passRegister']; ?></p>
    <a href="index.php">Iniciar Sesion</a>
    <?php endif ?>    
</body>
</html>