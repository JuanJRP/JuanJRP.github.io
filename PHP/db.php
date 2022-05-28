<?php
function conn(){
    $hostname = "db4free.net:3606";
    $usuariodb = "dbtaken12";
    $passwrddb = "juanjo1251";
    $dbname = "dbtaken";
    $connectar = mysqli_connect($hostname,$usuariodb,$passwrddb,$dbname);
    return $connectar;
}
?>