
<?php   session_start();
session_destroy();
header('location:landing.php');

$alerta = 'rellene el formulario';

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $usuario = $_POST ['username'];
        $password = $_POST ['password'];
    
        $user_register = isset($_SESSION['userRegister']) ? $_SESSION ['userRegister'] : null;
        $pass_register = isset($_SESSION['passRegister']) ? $_SESSION ['passRegister'] : null;

        if (empty($usuario) or empty($password)){
            echo '<div class="alert alert-danger" role="alert">' . $alerta . '</div>';
    
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
            /* print_r($statement);   */ 
    
            if($result){
                $_SESSION['userRegister']= $usuario;
                $_SESSION['passRegister']= $password;
                header('location:user.php');
    
                echo'intenta mas tarde';
            } else {
                echo'Usuario o contraseña podrian estar incorrectos';
            }
            
            //count(array)
    
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=x, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>

    <div class="fondo">
    <div class="todo">
    <h1 style="text-align:center; font-size: 40px; width: 400px;color: #13ad99; justify-content:center; display:flex; ">Pagina de inicio <br>
    Sesion inicializada</h1>
    
   
    

    <form class="solo"  action="index.php" method="post">

 <!--    <label for="username">User</label> -->
    <input class="user_C" id="username" type="text" placeholder="User" name="username">
<!--     <label for="password">Password</label> -->
    <input class="user_C" id="password" type="password" placeholder="Password" name="password">
    <button class="boton2" type="submit">Iniciar sesion</button>

    </form>


    <a style="text-decoration: none;
    display: flex;
    margin-top:10px;
    padding: 10px 20px;
    background-color: #13ad99;
    color: white;
    justify-content: center;
    align-items: center;
    border-radius: 30px;
    font-weight: bold;" href="./registro.php">Registro</a>
    </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>