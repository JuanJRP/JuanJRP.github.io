<?php
include_once('db.php');
$user = $_POST["user"];
$passwd = $_POST["passwd"];
$conectar = conn();
$sql = "SELECT * FROM `usuarios` WHERE user = '$user' AND passwd = '$passwd'";
$resul = mysqli_query($conectar,$sql);
$rows = mysqli_fetch_row($resul);
if($rows > 0){
    echo "bien";
}else{
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
            <h1>erorr</h1>
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
    <?php
}
?>