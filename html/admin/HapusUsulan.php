<?php 
include '../../php/koneksi.php';

$id=$_GET['id_usulan'];
$sql = mysqli_query($con, "SELECT * FROM usulan WHERE id_usulan=$id " );
$data = mysqli_fetch_array($sql);


// Memeriksa apakah tombol update ditekan
if(isset($_POST['deleteData'])){
    $status = $_POST['delete'];
    // Melakukan update data ke database
    $deleteQuery = "DELETE FROM usulan WHERE id_usulan=$id ";
  
    if(mysqli_query($con, $deleteQuery)){
      echo "
        <script> 
        alert('Data berhasil dihapus'); 
        document.location.href = 'DataPengusulan.php';
        </script>
      ";
    } else {
      echo "Error: " . $deleteQuery . "<br>" . mysqli_error($con);
    }
  }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Data Usulan</title>
    <link rel="stylesheet" href="../../css/admin/HapusUsulan.css">
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
      rel="stylesheet"
    />
</head>
<body>
    <div class="container">
        <form name="delete" method="post">
            <h3>Tanggal : <?= $data['tanggal'] ?></h3>
            
            <div class="info">
                <label>Judul Buku</label>
                <input type="text" readonly value="<?= $data['judul_buku'] ?>">
            </div>

            <div class="info">
                <label>Pengarang</label>
                <input type="text" readonly value="<?= $data['pengarang'] ?>">
            </div>

            <div class="info">
                <label>Penerbit</label>
                <input type="text" readonly value="<?= $data['penerbit'] ?>">
            </div>
            
            <div class="info">
                <label>Tahun Terbit</label>
                <input type="text" readonly value="<?= $data['tahun_terbit'] ?>">
            </div>

            <div class="tombol">
                <button><a href="DataPengusulan.php">batal</a></button>
                <button name="deleteData">hapus</button>
            </div>
        </form>
    </div>
</body>
</html>