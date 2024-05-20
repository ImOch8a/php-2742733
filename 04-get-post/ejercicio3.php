<?php

$nu1 = $_POST ['nu1'];
$nu2 = $_POST ['nu2'];
$nu3 = $_POST ['nu3'];

if ($nu1 >= $nu2 && $nu1 >= $nu3) {
    echo "el numero mayor es el $nu1";

} elseif ($nu2 >= $nu1 && $nu2 >= $nu3) {
    echo "el numero mayor es el $nu2";
}

else {
    echo "el numero mayor es el $nu3";
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
<form action="ejercicio3.php" method="POST">
   <label for="nu1">NUMERO 1</label>
   <input id="nu1" type="text" placeholder="numero1" name="nu1">
    <br>

    <label for="nu2">NUMERO 2</label>
   <input id="nu2" type="text" placeholder="numero2" name="nu2">
   <br>

   <label for="nu3">NUMERO 3</label>
   <input id="nu3" type="text" placeholder="numero3" name="nu3">

   <br>
   <button type="submit">Enviar</button>
</body>
</html>