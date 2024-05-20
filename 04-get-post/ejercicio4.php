<?php
    
    $metros = $_POST ['metros'];

    $muro = $_POST ['muro'];


    if ($muro =="liso") {
        echo "el valor de todo es".($metros * 2000 + 15000);
    } else {
        echo "el valor de todo es". ($muro * 4000 + 15000);
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
<form action="ejercicio4.php" method="POST">
   <label for="metros">metros</label>
   <input id="metros" type="text" placeholder="metros" name="metros">

    <br>

   <label for="muro">muro</label>
   <input id="muro" type="text" placeholder="muro" name="muro">

   <button type="submit">ENVIAR</button>
</body>
</html>