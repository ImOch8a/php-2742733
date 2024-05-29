
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
        try {
            $conexion = new PDO("mysql: host=localhost; dbname=focaapp",'root','');
            echo "conexion OK <br>";
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        } 
        $statement = $conexion->prepare(" SELECT *  FROM userapp WHERE Username = :username AND Password = :pass ");
    
        $statement->execute ( array( ":username"=>$usuario, ":pass"=>$password ));
    
        $result = $statement->fetchAll();
        print_r($statement);   

        if($result){
            $_SESSION['userRegister']= $usuario;
            $_SESSION['passRegister']= $password;
            header('location:user.php');

            echo'intenta mas tarde';
        } else {
            
        }
        
        //count(array)

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