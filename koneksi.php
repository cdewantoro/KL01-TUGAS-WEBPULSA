<?php

$host = "db4free.net:3306";
$user = "genbox";
$pass = "genbox12345";
$DB = "genboxpulsaweb";

$koneksi = mysqli_connect($host,$user,$pass,$DB);

if(!$koneksi){
    echo "Error: ".mysqli_error($koneksi);
}else {
    echo "<!-- koneksi mysql success -->";
}

?>