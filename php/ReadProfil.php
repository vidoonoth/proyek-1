<?php 
include 'koneksi.php';

$sql ='SELECT * FROM pengusul';
$result= mysqli_query($con, $sql);

?>