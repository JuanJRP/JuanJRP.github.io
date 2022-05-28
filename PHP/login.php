<?php
include_once('db.php');
$user = $_POST["user"];
$passwd = $_POST["passwd"];
$conectar = conn();
$sql = "SELECT * FROM `usuarios` WHERE user = '$user' AND passwd = '$passwd'";
$resul = mysqli_query($conectar,$sql);
$rowsuser = mysqli_fetch_row($resul);
$sql = "SELECT * FROM `admins` WHERE user = '$user' AND passwd = '$passwd'";
$resul = mysqli_query($conectar,$sql);
$rowsadmins = mysqli_fetch_row($resul);

if($rowsadmins > 0){
    header('location: ../Pages/admins.html');
}else if($rowsuser > 0){
    header('location: ../Pages/welcome.html');
}else{
    echo 'error';
}
?>