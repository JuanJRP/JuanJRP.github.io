<?php
function conn(){
    $hostname = "localhost";
    $usuariodb = "root";
    $passwrddb = "";
    $dbname = "proyecto";
    $connectar = mysqli_connect($hostname,$usuariodb,$passwrddb,$dbname);
    return $connectar;
}
?>