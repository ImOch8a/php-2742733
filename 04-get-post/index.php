<?php
// modification php 
//Super globals GET y POST//
$userName = $_GET['username'];
$userEmail = $_GET['useremail'];

echo $userEmail;
echo "<br>";
echo $userName;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>body{
        background-color: <?php echo $_GET['color']?>;
    }</style>
</head>
<body>
    
<form action="index.php" method="get">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" placeholder="Username..." required><br>

    <label for="useremail">Useremail</label>
    <input type="email" id="useremail" name="useremail" placeholder="Useremail.." required><br>

    <label for="color">Color</label>
    <input type="text" id="color" name="color" placeholder="Color..." required><br>
    
    <button type="submit">Enviar</button>
</form>


</body>
</html>