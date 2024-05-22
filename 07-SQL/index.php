<?php 

//SQL//

//SELECT - extrae la informacion de la base de datos
//UPDATE - actualiza la informacion la base de datos
//DELETE - Borra la informacion de la base de datos
//INSERT INTO - inserta nueva informacion a la base de datos

//SELECT Nombres FROM alumnos
//selecciona los datos de la columna nombres de la base de datos alumnos

//SELECT DISTINCT edad FROM alumnos
//selecciona un dato diferente al que se asigna

//SELECT * FROM alumnos WHERE ciudad="Medellin"
//selecciona un dato en especifico por ejemplo alumnos de medellin

//(SELECT * FROM alumnos WHERE CustomerID=1;
//selecciona de la base de datos alumnos al nombre en el listado 1

//SELECT * FROM alumnos WHERE CustomerID > 80;)
//selecciona de la base de datos alumnos los estudiantes del 1 al 79

//Si desea devolver todas las columnas, sin especificar el nombre de cada columna, 
//puede usar la sintaxis SELECT *:

//SELECT * FROM alumnos ORDER BY edad;
//ordena los datos por edad
    
//SELECT * FROM alumnos ORDER BY edad DESC;
//ordena los datos por edad descendientemente

//SELECT * FROM alumnos ORDER BY nombre;
//ordena los datos por nombre alfabeticamente

//SELECT * FROM alumnos
//WHERE pais = 'Colombia' AND (nombres LIKE 'J%' OR nombres LIKE 'R%');
//selecciona de la base de datos alumnos los estudiantes del pais Colombia y el nombre 
//empieza por la J O empieza por la R la condicion se cumple si o si ya que el "AND" es obligatorio

//SELECT * FROM alumnos
//WHERE pais = 'Colombia' OR pais = 'Venezuela';
//selecciona de la base de datos alumnos los estudiantes del pais Colombia o del pais venezuela

//SELECT * FROM alumnos
//WHERE ciudad = 'Medellin' OR nombres LIKE 'G%' OR pais = 'Venezuela
//selecciona los datos de la base de datos alumnos los estudiantes de la ciudad medellin O 
//por un nombre que comience por la letra G O del pais de Venezuela

//SELECT * FROM alumnos
//WHERE NOT pais= 'Colombia';
//selecciona de la base de datos alumnos los estudiantes que no sean del pais Colombia

//SELECT * FROM alumnos
//WHERE nombres NOT LIKE 'A%';
//selecciona de la base de datos alumnos los estudiantes que no comiencen con la letra A

//Para anadir otra fila 

//INSERT INTO alumnos (nombres, direccion, ciudad, postal, pais)
//VALUES ('Juan', 'cra 73b #12-31, 'Medellin', '50001', 'Colombia');

//mas filas

//INSERT INTO alumnos (nombres, direccion, ciudad, postal, pais)
//VALUES ('Juan', 'cra 73b #12-31, 'Medellin', '50001', 'Colombia'),
//('Juan', 'cra 73b #12-31, 'Medellin', '50001', 'Colombia'),
//('Juan', 'cra 73b #12-31, 'Medellin', '50001', 'Colombia'),
//('Juan', 'cra 73b #12-31, 'Medellin', '50001', 'Colombia'),

//SELECT nombres, ciudad, direccion
//FROM alumnos
//WHERE direccion IS NULL;

//UPDATE alumnos SET nombres = 'Juan', Ciudad= 'Medellin'
//WHERE CustomerID = 1;

//DELETE FROM alumnos WHERE nombres='Juan';


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