<?php

$Numero1 = $_POST['numero1'];
$Numero2 = $_POST['numero2'];
$Numero3 = $_POST['numero3'];

$mayor = $Numero1;
if ($Numero2 > $mayor) {
    $mayor = $Numero2;
}
if ($Numero3 > $mayor) {
    $mayor = $Numero3;
}

echo "El número mayor es: $mayor";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index3.php" method="post">
        <label for="numero1">Numero 1</label>
        <input type="int" placeholder="Numero 1" name="numero1" id="numero1" required> <br>
        <label for="numero2">Numero 2</label>
        <input type="int" placeholder="Numero 2" name="numero2" id="numero2" required> <br>
        <label for="numero3">Numero 3</label>
        <input type="int" placeholder="Numero 3" name="numero3" id="numero3" required> <br>
        <button type="submit">Enviar</button> <br> <br>
        
        <a href="index4.php">Problema 4</a>
    </form>
</body>
</html>