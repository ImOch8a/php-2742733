<?php

$Tipo = $_POST["tipo"];
$Mts2 = $_POST['mts2'];

$Estucada = 2000 * $Mts2;
$nolisa = 4000 * $Mts2;
$costoTotal = 15000;

if($Tipo === 'no_lisa'){
    $costoTotal += $Mts2 * 4000;
}else{
    $costoTotal += $Mts2 * 2000;
}

echo "El costo total del trabajo es: ", $costoTotal, "$";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index4.php" method="post">
        <label for="mts2">Metros cuadrados</label>
        <input type="int" placeholder="Mts2" name="mts2" id="mts2" required> <br>

        <label for="tipo">Tipo de superficie:</label>
        <select id="tipo" name="tipo" required>
            <option value="lisa">Lisa (estucada)</option>
            <option value="no_lisa">No lisa (sin estucada)</option>
        </select>

        <button type="submit">Enviar</button> <br> <br>

    </form>
</body>
</html>