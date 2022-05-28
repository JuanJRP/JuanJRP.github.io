<?php
function conn(){
    $hostname = "85.10.205.173:3306";
    $usuariodb = "dbtaken12";
    $passwrddb = "juanjo1251";
    $dbname = "dbtaken";
    $connectar = mysqli_connect($hostname,$usuariodb,$passwrddb,$dbname);
    return $connectar;
}
?>