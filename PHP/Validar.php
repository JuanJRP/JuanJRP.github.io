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
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Taken</title>
        <link rel="stylesheet" href="../CSS/Styles-index.css">
    </head>
    <body>
        <div class="login-box">
            <img class="Avatar" src="../Images/Logo.png" alt="Logo">
            <h1>Taken Puzzzle</h1>
            <form action="../PHP/login.php" method="post">
                <label for="username">Username</label>
                <input type="text" placeholder="Enter Username" name="user" required>
                <label for="Password">Password</label>
                <input type="password" placeholder="Enter Password" name="passwd" required>
                <input type="submit" value="Log In">
                <a href="Pages/Lost-Passwd.html">Lost Your Password?</a><br>
                <a href="Pages/Sing-up.html">Don't have an account?</a>
            </form>
        </div>
    </body>
</html>