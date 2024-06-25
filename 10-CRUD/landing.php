<?php require('conexion.php'); ?>

<?php require('header.php'); ?>

<section>
   
    <h1 style="font-size: 80px; display:flex; justify-content:center; margin: top 2px;">Cursos locales</h1>

</section>


<section style="display: flex; flex-direction: row; gap: 2rem;  justify-content: center; margin-top: 2rem;" class="dr">
    <?php
    $statement = $conexion->prepare("SELECT * FROM cursos");
    $statement->execute();
    $result = $statement->fetchAll();

    foreach ($result as $item) { ?>


        <a class="no-link" href="course.php?id=<?php echo $item['ID']?>">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <img src="<?php echo $item['imagen'] ?>" class="card-img-top" alt="...">
                    <h5 class="card-title"><?php echo $item['titulo'] ?> </h5>
                    <p class="card-text"> <?php echo $item['descripcion'] ?> </p>
                    <p class="card-text"><?php echo $item['estudiantes'] ?></p>
                </div>
        </a>
        </div>
    <?php } ?>
</section>
<?php require('footer.php'); ?>