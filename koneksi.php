<?php

<<<<<<< Updated upstream
=======


>>>>>>> Stashed changes
$host = "localhost";
$user = "root";
$pass = "";
$DB = "genboxpulsa";

$koneksi = mysqli_connect($host,$user,$pass,$DB);

if(!$koneksi){
    echo "Error: ".mysqli_error($koneksi);
}else {
    echo "<!-- koneksi mysql success -->";
}

?>