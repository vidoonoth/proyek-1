<?php 
require '../../php/koneksi.php';
include '../../php/ReadProfil.php';

if(isset($_POST["signup"])){
  $username = htmlspecialchars($_POST["username"]);
  $nama = htmlspecialchars($_POST["name"]);
  $password = htmlspecialchars($_POST["password"]);
  $username = htmlspecialchars($_POST["username"]);
  $email = htmlspecialchars($_POST["email"]);
  $nik = htmlspecialchars($_POST["nik"]);
  $gender = htmlspecialchars($_POST["gender"]);
  $query = "INSERT INTO pengusul VALUES ('', '$username', '$nama', '$password', '$email', '$nik','$gender')";
  mysqli_query($con, $query);
  if (mysqli_affected_rows($con)>0) {
    echo "<script>alert('Data berhasil disimpan');
    document.location.href = 'Login.php';
    </script>";
  } else {
    echo "<script>alert('Data gagal disimpan');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registrasi</title>
    <link rel="stylesheet" href="../../css/user/Register.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
      rel="stylesheet"
    />
  </head>
  <body>
    <img src="../../image/registrasi.jpg" alt="">
    <div class="container">
      <h1>Registrasi</h1>
      <form action="" method="post">
          <div class="input-box">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Username" autocomplete="off" required/>
          </div>
          <div class="input-box">
            <label for="nama">Nama Lengkap</label>
            <input type="text" name="name" id="name" placeholder="Nama Lengkap" autocomplete="off" required/>
          </div>
          
          <div class="input-box">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password" autocomplete="off" required/>
          </div>
          
          <div class="input-box">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email" autocomplete="off" required/>
          </div>

          <div class="input-box">
            <label for="nik">Nik</label>
            <input type="number" name="nik" id="nik" placeholder="Nik" autocomplete="off" required/>
          </div>

          <div class="input-box">
            <p>Jenis Kelamin</p>
            <select name="gender" id="gender">
              <option value="laki-laki">laki-laki</option>
              <option value="perempuan">perempuan</option>
            </select>
            
          </div>
        <button type="submit" name="signup">Daftar</button> 
        </form>
        <div class="link">
          <a href="../../html/user/Login.php">Sudah punya akun?</a>
        </div>
      </div>
    </div>
  </body>
</html>
