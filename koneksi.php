<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "penjualan_online2";

$db = mysqli_connect($server, $user, $password, $database);

if(!$db){
    die("Gagal terhubung ke server : ". mysqli_connect_error());
}

?>