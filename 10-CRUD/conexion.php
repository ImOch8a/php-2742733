<?php

try {
    $conexion = new PDO("mysql: host=localhost; dbname=focaapp",'root','');
    echo "conexion OK <br>";
} catch (PDOException $e) {
    echo "Error:" . $e->getMessage();
} 

?>