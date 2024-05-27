
<?php   session_start();
    
    

   

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $usuario = $_POST ['username'];
        $password = $_POST ['password'];
    
        $user_register = isset($_SESSION['userRegister']) ? $_SESSION ['userRegister'] : null;
        $pass_register = isset($_SESSION['passRegister']) ? $_SESSION ['passRegister'] : null;

    }


    if (empty($usuario) or empty($password)){
        echo 'rellene el formulario';

    }  else{
        //echo $usuario .' - '. $password;
        if ( $usuario ==  $user_register && $password ==  $pass_register){
            echo 'listo, iniciastes sesion';
            header ('location: user.php');
        } else {
            echo 'Tu usuario no existe';
        }
    }
    
    
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=x, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Pagina de inicio, Sesion inicializada</h1>
    
   
    

    <form action="index.php" method="post">

    <label for="username">User</label>
    <input id="username" type="text" placeholder="User" name="username">
    <label for="password">Password</label>
    <input id="password" type="password" placeholder="Password" name="password">
    <button type="submit">Iniciar sesion</button>

    </form>


    <a href="./registro.php">Registro php </a>



</body>
</html>