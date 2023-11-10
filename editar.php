<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar un usuario</title>
</head>
<body>
    <?php
    if(@$_GET["mensaje"]=="exito")
    {
        echo "<h3>El usurio fue editado correctamente, edite otro.</h3>";
    }
    $con=@mysqli_connect("localhost", "root", "", "bdgim");
    $consulta = "SELECT * FROM `users` WHERE id=".$_GET["idusuario"];
    $queryuser = mysqli_query($con,$consulta);
    while ($row = mysqli_fetch_array($queryuser)) 
        {
            
        

?>
    <form action="procesar_edicion.php" method="post">
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="correo" value = "<?php echo $row["email"];?>" required><br><br>

        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" value = "<?php echo $row["first_name"];?>" required><br><br>

        <label for="apellidos">Apellidos:</label><br>
        <input type="text" id="apellidos" name="apellidos" value = "<?php echo $row["last_name"];?>" required><br><br>
        <input type="hidden" name = "id" value = "<?php echo $row["id"];?>">
        <input type="submit" value="Enviar">
    </form>
    <?php
        }



?>
    <a href = "prueba.php">Regresar al listado</a>
</body>
</html>