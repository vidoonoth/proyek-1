<?php 
include 'koneksi.php';

$sql ='SELECT * FROM pengusul, usulan';
// $result= mysqli_query($con, $sql);
$result = $con->query($sql);

?>