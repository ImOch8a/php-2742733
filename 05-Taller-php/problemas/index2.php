<?php

$Valor = $_POST['valor'];
$Horas = $_POST['horas'];
$Total = $Valor * $Horas;

echo "Dinero ganado"," ", $Total, "$", "<br> <br>";

if($Total > 2200000){
    echo "Debe pagar impuesto de retención en la fuente";
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
    <form action="index2.php" method="post">
        <br>
        <label for="horas">Horas de trabajo</label>
        <input type="int" placeholder="Horas" name="horas" id="horas" required><br> <br>
        <label for="valor">Valor de la hora</label>
        <input type="int" placeholder="Valor" name="valor" id="valor" required> <br> <br>
        <button type="submit">Enviar</button>
    </form> <br> <br>

    <a href="index3.php">Problema 3</a>
</body>
</html>