<?php 
  include '../../php/ReadProfil.php';
  include '../../php/koneksi.php';
session_start();
if( !isset($_SESSION["login"])){
  header("Location: Login.php");
  exit;
}
$id = $_SESSION["id"];
$profile = $_GET["idp"];
// Mendapatkan data awal dari database berdasarkan nama_pengusul
$sql = mysqli_query($con, "SELECT * FROM pengusul WHERE id_pengusul= '$profile'" );
$data = mysqli_fetch_array($sql); 

// Memeriksa apakah tombol update ditekan
if(isset($_POST['update'])){
  $username = $_POST['username'];
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $nik = $_POST['nik'];
  $gender = $_POST['gender'];
  
  // Melakukan update data ke database
  $updateQuery = "UPDATE pengusul SET
    username_pengusul = '$username',
    nama_pengusul = '$nama',
    email_pengusul = '$email',
    password_pengusul = '$password',
    nik = '$nik',
    jenis_kelamin = '$gender'";

  if(mysqli_query($con, $updateQuery)){
    echo "
      <script> 
      alert('Data berhasil diubah'); 
      document.location.href = 'ProfileUser.php';
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
    <title>Pengaturan Akun</title>
    <link rel="stylesheet" href="../../css/user/PengaturanAkun.css">
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
      rel="stylesheet"
    />
</head>
<body>
   <div class="setting-close">
    <div class="head-1">
    <h1><a href="../../html/user/ProfileUser.php">Biodata</a></h1>
    <h1>Pengaturan Akun</h1>
    </div>
    <form method="post" action="">
      <div class="input-box">
        <p>Ubah Username</p>
        <input type="text" name="username" id="username" autocomplete="off" value="<?= $data['username_pengusul']?>"/>
      </div>
      <div class="input-box">
        <p>Ubah Nama</p>
        <input type="text" name="nama" id="nama" autocomplete="off" value="<?= $data['nama_pengusul']?>"/>
      </div>
      <div class="input-box">
        <p>Ubah Email</p>
        <input type="email" name="email" id="email" autocomplete="off" value="<?= $data['email_pengusul']?>"/>
      </div>
      <div class="input-box">
        <p>Kata Sandi Baru</p>
        <input type="password" name="password" id="password" autocomplete="off" value="<?= $data['password_pengusul']?>"/>
      </div>
      <div class="input-box">
        <p>Ubah Nik</p>
        <input type="text" name="nik" id="nik" autocomplete="off" value="<?= $data['nik']?>"/>
      </div>
      <div class="input-box">
        <p>Ubah Jenis Kelamin</p>
        <select name="gender" id="gender">
          <option value="laki-laki">laki-laki</option>
          <option value="perempuan">perempuan</option>
        </select>
      </div>
      <button type="submit" name="update" id="update">Simpan</button>
    </form>
  </div>
</body>
</html>
