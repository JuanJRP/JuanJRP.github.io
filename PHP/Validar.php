<?php
include_once('db.php');
$nombre1 = $_POST["firs"];
$nombre2 = $_POST["last"];
$email = $_POST["email"];
$user = $_POST["user"];
$passwd = $_POST["password"];
$conectar = conn();
$sql = "INSERT INTO `usuarios` (`nombre1`, `nombre2`, `correo`, `user`, `passwd`) VALUES ('$nombre1', '$nombre2', '$email', '$user', '$passwd');";
$resul = mysqli_query($conectar,$sql) or trigger_error("query failed! SQL-ERROR: ".mysqli_errno($conectar));
echo $sql;
?>