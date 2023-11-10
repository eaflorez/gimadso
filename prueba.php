<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    Listado de usuarios registrados</h1>
    <?php
    $con=@mysqli_connect("localhost", "root", "", "bdgim");
    $consulta = "SELECT * FROM `users`";
    $queryuser = mysqli_query($con,$consulta);
    while ($row = mysqli_fetch_array($queryuser)) 
        {
            echo $row ["email"]."<img src = '".$row["picture"]."'/><a href = editar.php?idusuario=".$row["id"].">Editar</a> <br>";
        }
    
    ?>
    <a href="https://tu-url-especifica.com" target="_blank">
  <img alt="Iniciar sesión con Google" src="https://img.shields.io/badge/-Iniciar%20sesi%C3%B3n%20con%20Google-blue?style=for-the-badge&logo=google&logoColor=white"/>
</a>


</body>
</html>