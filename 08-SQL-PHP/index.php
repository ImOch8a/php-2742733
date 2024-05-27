<?php

try {
    $conexion = new PDO("mysql: host=localhost; dbname=colegio",'root','');
    echo "conexion OK <br>";
} catch (PDOException $e) {
    echo "Error:" . $e->getMessage();
}

$nombre = 'Goku';
$edad = '18';
$documento = 'Ssj Dios';

$statement = $conexion->prepare(" INSERT INTO `estudiantes` (`ID`, `Nombre`, `Edad`, `Media tecnica`, `Documento`)
VALUES (NULL, :nombre, :edad, 'Multimedia', :documento)" );

$statement->execute(array(":nombre"=>$nombre,":edad"=>$edad,":documento"=>$documento));


$statement = $statement->fetchAll();

foreach($statement as $item) {
    echo $item['ID'] . '-' . $item['Nombre'] . '<br>';
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
    
</body>
</html>