<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    Listado de rutinas cargadas</h1>
    <?php
    $con=@mysqli_connect("localhost", "root", "", "bdgim");
    $consulta = "SELECT
    u.id AS user_id,
    u.email AS user_email,
    u.first_name AS user_first_name,
    u.last_name AS user_last_name,
    r.dia AS rutina_dia,
    r.id_consecutivo AS rutina_id_consecutivo,
    e.nombre AS ejercicio_nombre,
    r.series AS rutina_series,
    r.repeticiones AS rutina_repeticiones,
    r.unidades AS rutina_unidades
FROM
    users u
INNER JOIN
    rutinas r ON u.id = r.id_usr
INNER JOIN
    ejercicios e ON r.id_ejercicio = e.id";
    $queryuser = mysqli_query($con,$consulta);
    while ($row = mysqli_fetch_array($queryuser)) 
        {
            echo $row ["user_first_name"].$row ["ejercicio_nombre"].$row ["rutina_dia"]."<br>";
        }
    
    ?>
    
</body>
</html>