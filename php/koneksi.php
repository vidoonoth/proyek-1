<?php 
    $host="localhost";
    $username="root";
    $password="";
    $database="perpustakaan";
    $con = mysqli_connect($host, $username, $password, $database);

    if (mysqli_connect_error()){
        echo "Gagal terhubung".mysqli_connect_error();
        exit();
    }
?>