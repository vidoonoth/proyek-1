<?php 
include 'koneksi.php';

$sql ='SELECT * FROM usulan ORDER BY tanggal desc';
$result= mysqli_query($con, $sql);

?>
