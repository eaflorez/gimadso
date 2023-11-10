<?php
echo $_POST["correo"];
echo "<br> El nombre ingresado fue:".$_POST["nombre"];
echo $_POST["apellidos"];

$con=@mysqli_connect("localhost", "root", "", "bdgim");
$consulta_insert ="INSERT INTO `users` (`id`, `email`, `first_name`, `last_name`, `gender`, `full_name`, `picture`, 
`verifiedEmail`, `token`) VALUES (NULL, '".$_POST["correo"]."', '".$_POST["nombre"]."', '".$_POST["apellidos"]."', NULL, NULL, NULL, NULL, NULL);";


$queryuser = mysqli_query($con,$consulta_insert);

header('Location: agregar.php?mensaje=exito');




?>