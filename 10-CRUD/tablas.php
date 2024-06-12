

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body style="background-color: #13ad9834;">
    
<div class="contenido_tablas">

<form action="agregar_curso.php" method="post">


  <table class="table">
    
    <tbody>
      <tr>
        <td>
          <label for="tituloCurso">Nombre de curso</label> <br>
          <input type="text" name="tituloCurso" id="tituloCurso" placeholder="agregar titulo"> 
        </td>
        <td>
          <label for="imagenCurso">Imagen del curso</label> <br>
          <input type="file"  name="imagenCurso" id="imagenCurso" placeholder="agregar imagen">
        </td>
        <td>
          <label for="descripcionCurso">Descripcion</label> <br>
          <input type="text" name="descripcionCurso" id="descripcionCurso" placeholder="agregar descripcion">
        </td>
        <td>
          <label for="estudiantesCurso">Cantidad de estudiantes</label> <br>
          <input type="text" name="estudiantesCurso" id="estudiantesCurso" placeholder="agregar estudiantes">
        </td>
        <td>
          <input type="submit" value="registrar curso">

        </td>
  
      </tr>
      
    </tbody>
  </table>
</form>
<div style="display: flex; justify-content: center;" class="tb">
        <table  class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre del curso</th>
                    <th scope="col">Imagen del curso</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Cantidad de estudiantes</th>
                    <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Induccion a la programacion</td>
                    <td>Img</td>
                    <td>Aprende las leyes de los algoritmos...</td>
                    <td>10</td>
                    <td>✏️Edit | 🗑️Delete</td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Induccion a la empanada</td>
                    <td>Img</td>
                    <td>Aprende a cocinar con el aroma de mama...</td>
                    <td>30</td>
                    <td>✏️Edit | 🗑️Delete</td>

                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Reviveme sage</td>
                    <td>Img</td>
                    <td>Revive tal cual lo hace sage...</td>
                    <td>20</td>
                    <td>✏️Edit | 🗑️Delete</td>

                </tr>
                
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>
</html>