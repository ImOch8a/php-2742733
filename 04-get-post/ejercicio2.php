<?php
    $hrtrabajo = $_POST ["hrtrabajo"];

    $valor = $_POST ["valor"];


    $sueldo = ($hrtrabajo * $valor);



    echo $sueldo;

    if($valor >= 2200000) {
        echo "retenecion de fuente";
    }
    else{
        echo "no hay retenecion de fuente";
    };
    
?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="ejercicio2.php" method="POST">
   <label for="hrtrabajo">horas de trabajo</label>
    <input id= "hrtrabajo" type="text" placeholder="horas de trabajo.." name="hrtrabajo">
    <br>
    
    <label for="valor" required>valor</label> 
    <input id="valor" type="text" placeholder="precio de una hora de trabajo" name="valor">
    <br>
    <button type="submit">Enviar</button>
</body>
</html>