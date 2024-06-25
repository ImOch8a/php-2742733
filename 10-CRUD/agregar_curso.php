<?php
    
    require('conexion.php');
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "datos enviados";
        $tituloCurso = $_POST['tituloCurso'];

        //datos de imagen capturados 
        $imagenCurso = $_FILES['imagenCurso']['tmp_name'];
        $nombreImagen = $_FILES['imagenCurso']['name'];
        $tipoImagen = pathinfo($nombreImagen, PATHINFO_EXTENSION);
        $sizeImg = $_FILES['imagenCurso']['size'];
        $directorio = "img/";

        $descripcionCurso = $_POST['descripcionCurso'];
        $estudiantesCurso = $_POST['estudiantesCurso'];


        if ($tipoImagen == 'jpg' or $tipoImagen == 'png' or $tipoImagen == 'jpeg') {
            echo "valido";

            $statement = $conexion->prepare("INSERT INTO `cursos`(`imagen`, `titulo`, `descripcion`, `estudiantes`) VALUES ('',?,?,?)");
            $statement->execute(array($tituloCurso, $descripcionCurso, $estudiantesCurso));
            $idRegistro = $conexion->lastInsertId();
            
    
            $ruta = $directorio . $idRegistro . '.' . $tipoImagen;
    

            $statement = $conexion->prepare("UPDATE `cursos` SET `imagen`='$ruta' WHERE ID = '$idRegistro' ");
            
            $statement->execute();
            if (move_uploaded_file($imagenCurso, $ruta)) {
                $_SESSION['mensaje'] = 'Tarea agregada exitosamente';
                $_SESSION['color'] = 'success';
    
                header('location: tablas.php');
            }
        } else {
            $_SESSION['mensaje'] = 'El arcivo de imagen no es admitido';
            $_SESSION['color'] = 'danger';
    
            header('location: tablas.php');
        }
    }


?>
