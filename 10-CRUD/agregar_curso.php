<?php
    
    require('conexion.php');
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "datos enviados";
        $tituloCurso = $_POST['tituloCurso'];
        $imagenCurso = $_POST['imagenCurso'];
        $descripcionCurso = $_POST['descripcionCurso'];
        $estudiantesCurso = $_POST['estudiantesCurso'];
        echo  $tituloCurso;
        echo  $descripcionCurso;
        $statement = $conexion->prepare( "INSERT INTO cursos (`imagen`, `titulo`, `descripcion`, `estudiantes`) VALUES (?,?,?,?) ");
        $statement->execute ( array( $imagenCurso,$tituloCurso, $descripcionCurso,$estudiantesCurso));
            
    }

?>
