<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "arkademy";

$connect = mysqli_connect($host,$user,$pass,$dbname);
if(!$connect){
    echo "tidak terhubung ke database";
}

?>