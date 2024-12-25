<?php 
include '../../php/koneksi.php';

// Mendapatkan data awal dari database berdasarkan nama_pengusul
$id=$_GET['id_usulan'];
$sql = mysqli_query($con, "SELECT status FROM usulan WHERE id_usulan=$id " );
$data = mysqli_fetch_array($sql);

// Memeriksa apakah tombol update ditekan
if(isset($_POST['update'])){
  $status = $_POST['status1'];
  // Melakukan update data ke database
  $updateQuery = "UPDATE usulan SET status = '$status' WHERE id_usulan=$id ";

  if(mysqli_query($con, $updateQuery)){
    echo "
      <script> 
      alert('Data berhasil diubah'); 
      document.location.href = 'StatusDataPengusulan.php';
      </script>
    ";
  } else {
    echo "Error: " . $updateQuery . "<br>" . mysqli_error($con);
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Status</title>
    <link rel="stylesheet" href="../../css/admin/EditStatus.css">
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
      rel="stylesheet"
    />
</head>
<body>

    <div class="container">
    <div class="main">
        <form action="" method="post">
            <h3>Edit Status Usulan</h3>
            <div class="checkbox">
              <select name="status1" id="">
                <option value="diproses">diproses</option>
                <option value="diterima">diterima</option>
                <option value="tersedia">tersedia</option>
                <option value="ditolak">ditolak</option>
              </select>
            </div>
            <div class="button">
              <a href="../../html/admin/DataPengusulan.php">Batal</a>
              <button type="submit" name="update"> Simpan</button>
            </div>
        </form>

    </div>
    </div>    
</body>
</html>



