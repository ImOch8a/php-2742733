 <?php require('header.php'); 
 require('conexion.php');?>



 <div class="contenido_tablas">



     <form action="agregar_curso.php" method="post">
         <?php if(isset($_SESSION['mensaje'])) { ?>
         <div class="alert alert-<?php echo $_SESSION['color'] ?> alert-dismissible fade show" role="alert">
             <p class="mb-0"><?php echo $_SESSION['mensaje'] ?></p>
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
         <?php session_unset();} ?>
         <table class="table">

             <tbody>
                 <tr>
                     <td>
                         <label for="tituloCurso">Nombre de curso</label> <br>
                         <input type="text" name="tituloCurso" id="tituloCurso" placeholder="agregar titulo">
                     </td>
                     <td>
                         <label for="imagenCurso">Imagen del curso</label> <br>
                         <input type="file" name="imagenCurso" id="imagenCurso" placeholder="agregar imagen">
                     </td>
                     <td>
                         <label for="descripcionCurso">Descripcion</label> <br>
                         <input type="text" name="descripcionCurso" id="descripcionCurso"
                             placeholder="agregar descripcion">
                     </td>
                     <td>
                         <label for="estudiantesCurso">Cantidad de estudiantes</label> <br>
                         <input type="text" name="estudiantesCurso" id="estudiantesCurso"
                             placeholder="agregar estudiantes">
                     </td>
                     <td>
                         <input type="submit" value="registrar curso">

                     </td>

                 </tr>

             </tbody>
         </table>
     </form>
     <div style="display: flex; justify-content: center;" class="tb">
         <table class="table">
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

                 <?php
              $statement= $conexion->prepare("SELECT * FROM cursos");
              $statement->execute();
              $result= $statement->fetchAll();

              foreach($result as $item) { ?>
                 <!-- meter el tr -->

                 <tr>
                     <th scope="row"><?php echo $item['id']   ?></th>
                     <td><?php echo $item['Nombre del curso']   ?></td>
                     <td><?php echo $item['Imagen de curso']   ?></td>
                     <td><?php echo $item['Descripcion']   ?></td>
                     <td><?php echo $item['Cantidad de estudiantes']   ?></td>
                     <td>✏️Edit | 🗑️Delete</td>

                 </tr>




                 <?php }  ?>



             </tbody>
         </table>
     </div>
 </div>


 <?php
require('footer.php');
?>