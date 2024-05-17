<?php

$Edad = $_GET['edad'];


if($Edad >= 18){
    echo "Eres mayor de edad";
}else{
    echo "Eres menor de edad";
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
    <form action="index.php" method="get">
        <label for="edad">Edad</label>
        <input type="int" placeholder="Edad..." name="edad" id="edad" required>
        <button type="submit">Enviar</button> <br> <br>
        
        <a href="index2.php">Problema 2</a>
    </form>
</body>
</html>