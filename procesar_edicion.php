<?php
$con=@mysqli_connect("localhost", "root", "", "bdgim");
$consulta_update ="UPDATE `users` SET `email` = '".$_POST["correo"]."', `first_name` = '".$_POST["nombre"]."', 
`last_name` = '".$_POST["apellidos"]."' WHERE `users`.`id` = ".$_POST["id"];
$queryuser = mysqli_query($con,$consulta_update);

header('Location: editar.php?mensaje=exito');




?>