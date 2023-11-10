<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar un nuevo usuario</title>
</head>
<body>
    <?php
    if($_GET["mensaje"]=="exito")
    {
        echo "<h3>El usurio fue guardado correctamente, agregue otro.</h3>";
    }


?>
    <form action="procesar_formulario.php" method="post">
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="correo" required><br><br>

        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellidos">Apellidos:</label><br>
        <input type="text" id="apellidos" name="apellidos" required><br><br>

        <input type="submit" value="Enviar">
    </form>
    <a href = "prueba.php">Regresar al listado</a>
</body>
</html>