<?php
$edad = $_GET['edad'];

if ($edad >= 18) {
    echo "mayor de edad";
} else{
    echo "menor de edad";
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
   <form action="ejercicios.php" method="GET">
   <label for="edad">Edad</label>
   <input id="edad" type="text" placeholder="edad..." name="edad"> 
   <button type="submit">Enviar</button>
</form>
</body>
</html>