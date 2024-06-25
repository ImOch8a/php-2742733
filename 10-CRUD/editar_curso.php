<?php require('conexion.php');

    //Si los datos fueron editados GET/POST

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $statement= $conexion->prepare("SELECT * FROM `cursos` WHERE `id` = $id");
        $statement->execute( );
        $result = $statement->fetch();

        $titulo = $result['titulo'];
        $descripcion = $result['descripcion'];
        $estudiantes = $result ['estudiantes'];

        echo "Titulo de la tarea:" . $titulo . '<br>';
        echo "Descripcion de la tarea:" . $descripcion . '<br>';
        echo "Estudiantes de la tarea" . $estudiantes . '<br>';

    }

    if(isset($_POST['actualizar_curso'])){
        echo "<h1>Formulario de actualización enviado</h1>";

        $id = $_GET['id'];
        $cursoActualizado= $_POST['titulo'];
        $descripcionActualizada= $_POST['descripcion'];
        $estudiantesActualizados= $_POST['estudiantes'];

        $imagenCurso = $_FILES['imagenCurso']['tmp_name'];
        $nombreImagen = $_FILES['imagenCurso']['name'];
        $tipoImagen = pathinfo($nombreImagen, PATHINFO_EXTENSION);
        $sizeImg = $_FILES['imagenCurso']['size'];
        $directorio = "img/";

        if ($tipoImagen == 'jpg' or $tipoImagen == 'png' or $tipoImagen == 'jpeg') {

            $ruta = $directorio . $id . '.' . $tipoImagen;
            
            $statement=$conexion->prepare("UPDATE `cursos` SET `imagen`=?,`titulo`=?,`descripcion`=?,`estudiantes`=? WHERE id = ? ");
    
            $statement->execute(array ($ruta, $cursoActualizado,$descripcionActualizada,$estudiantesActualizados,$id ));

            if (move_uploaded_file($imagenCurso, $ruta)) {
                $_SESSION['mensaje'] = 'curso agregado exitosamente';
                $_SESSION['color'] = 'success';
    
                header('location: tablas.php');
            }

        } else{

            $_SESSION['mensaje'] = 'formato no admitido :(';
                $_SESSION['color'] = 'danger';
    
                header('location: tablas.php');

        }

    }


?>

<?php

require('header.php');

?>

<div class="container">
    <div class="nav">
        <div class="col">
            <form action="editar_curso.php?id=<?php echo $id ?>" method="POST" enctype="multipart/form-data">
                <label for="imagen">imagen del curso</label>
                <input class="form-control" type="file" name="imagenCurso">
                <input class="form-control" type="text" name="titulo" value="<?php echo $titulo ?>">
                <label for="descripcion">Descripcion</label>
                <input type="form-control" type="text" name="descripcion" value="<?php echo $descripcion ?>">
                <label for="Estudiantes">Estudiantes</label>
                <input type="form-control" type="text" name="estudiantes" value="<?php echo $estudiantes ?>"> <br>
                <input id="titulo" type="submit" class="btn btn-success" name="actualizar_curso" value="Actualizar">
            </form>
        </div>
    </div>
</div>

<?php

require('footer.php');

?>