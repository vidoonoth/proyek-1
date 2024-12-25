<?php 
  include '../../php/ReadProfil.php';
session_start();
if( !isset($_SESSION["login"])){
  header("Location: Login.php");
  exit;
}
$id = $_SESSION["id"];



?>


<?php 
require '../../php/koneksi.php'; //mengambil data koneksi
require '../../php/FunctionUsulan.php'; //mengambil fungsi usulan

if (isset($_POST["confirm"])) {

      $isbn = $_POST['isbn'];
      $judul = $_POST['judul'];
      $pengarang = $_POST['pengarang'];
      $penerbit = $_POST['penerbit'];
      $tahun = $_POST['tahun'];
      $kategori = $_POST['kategori'];
      $tanggal = $_POST['tanggal'];

      $query = "INSERT INTO usulan (id_usulan, id_pengusul, isbn, judul_buku, pengarang, penerbit, tahun_terbit, kategori, tanggal) VALUES ('', '$id', '$isbn', '$judul', '$pengarang', '$penerbit', '$tahun', '$kategori', '$tanggal')";
      $result = mysqli_query($con, $query);

  if (mysqli_affected_rows($con) > 0) {
    echo"<script>
            alert('Data Berhasil Ditambahkan');
            document.location.href = 'riwayatpengusulan.php';
          </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pengusulan</title>
    <link rel="stylesheet" href="../../css/user/pengusulan.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body onload="setMinDate()">
    <div class="container">
        <nav class="navbar">
            <ul class="side">
              <li><a href="../../html/user/HomePage.php">Beranda</a></li>
              <li><a href="../../html/user/pengusulan.php">Pengusulan</a></li>
              <li><a href="../../html/user/riwayatpengusulan.php">Riwayat Pengusulan</a></li>
              <li><a href="../../html/user/ProfileUser.php">Profil</a></li>
              <li><a href="../../php/Logout.php">Logout</a></li>
            </ul>
            <div class="sidebar" id="sidebar">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="1em"
                height="1em"
                viewBox="0 0 48 48"
              >
                <g
                  fill="none"
                  stroke="white"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="4"
                >
                  <path d="M7.94971 11.9497H39.9497" />
                  <path d="M7.94971 23.9497H39.9497" />
                  <path d="M7.94971 35.9497H39.9497" />
                </g>
              </svg>
            </div>
              
    
            <div class="logo">
              <a href="../../html/user/HomePage.php">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="1em"
                  height="1em"
                  viewBox="0 0 512 512"
                >
                  <path
                    fill="white"
                    d="M319.61 20.654c13.145 33.114 13.144 33.115-5.46 63.5c33.114-13.145 33.116-13.146 63.5 5.457c-13.145-33.114-13.146-33.113 5.457-63.498c-33.114 13.146-33.113 13.145-63.498-5.459zM113.024 38.021c-11.808 21.04-11.808 21.04-35.724 24.217c21.04 11.809 21.04 11.808 24.217 35.725c11.808-21.04 11.808-21.04 35.724-24.217c-21.04-11.808-21.04-11.808-24.217-35.725m76.55 56.184c-.952 50.588-.95 50.588-41.991 80.18c50.587.95 50.588.95 80.18 41.99c.95-50.588.95-50.588 41.99-80.18c-50.588-.95-50.588-.95-80.18-41.99zm191.177 55.885c-.046 24.127-.048 24.125-19.377 38.564c24.127.047 24.127.046 38.566 19.375c.047-24.126.046-24.125 19.375-38.564c-24.126-.047-24.125-.046-38.564-19.375m-184.086 83.88a96 96 0 0 0-3.492.134c-18.591 1.064-41.868 8.416-77.445 22.556L76.012 433.582c78.487-20.734 132.97-21.909 170.99-4.615V247.71c-18.076-8.813-31.79-13.399-46.707-13.737a91 91 0 0 0-3.629-.002zm122.686 11.42a209 209 0 0 0-8.514.098c-12.81.417-27.638 2.215-45.84 4.522v177.135c43.565-7.825 106.85-4.2 171.244 7.566l-39.78-177.197c-35.904-8.37-56.589-11.91-77.11-12.123zm2.289 16.95c18.889.204 36.852 2.768 53.707 5.02l4.437 16.523c-23.78-3.75-65.966-4.906-92.467-.98l-.636-17.805c11.959-2.154 23.625-2.88 34.959-2.758m-250.483 4.658L60.54 313.002h24.094l10.326-46.004H71.158zm345.881 0l39.742 177.031l2.239 9.973l22.591-.152l-40.855-186.852zm-78.857 57.82c16.993.026 33.67.791 49.146 2.223l3.524 17.174c-32.645-3.08-72.58-2.889-102.995 0l-.709-17.174c16.733-1.533 34.04-2.248 51.034-2.223m-281.793 6.18l-6.924 30.004h24.394l6.735-30.004H56.389zm274.418 27.244c4.656.021 9.487.085 14.716.203l2.555 17.498c-19.97-.471-47.115.56-59.728 1.05l-.7-17.985c16.803-.493 29.189-.828 43.157-.766m41.476.447c8.268.042 16.697.334 24.121.069l2.58 17.74c-8.653-.312-24.87-.83-32.064-.502l-2.807-17.234a257 257 0 0 1 8.17-.073m-326.97 20.309l-17.985 77.928l25.035-.17l17.455-77.758H45.313zm303.164 11.848c19.608-.01 38.66.774 56.449 2.572l2.996 20.787c-34.305-4.244-85.755-7.697-119.1-3.244l-.14-17.922c20.02-1.379 40.186-2.183 59.795-2.193m-166.606 44.05c-30.112.09-67.916 6.25-115.408 19.76l-7.22 2.053l187.759-1.27v-6.347c-16.236-9.206-37.42-14.278-65.13-14.196zm134.41 6.174c-19.63.067-37.112 1.439-51.283 4.182v10.064l177.594-1.203c-44.322-8.634-89.137-13.17-126.31-13.043zM26 475v18h460v-18z"
                  />
                </svg>
    
                <h2>perpustakaan indramayu</h2>
              </a>
            </div>
            <div class="profil">
              <a href="../../html/user/ProfileUser.php" class="nav">pengusul</a>
            </div>
          </nav>
    
          <!--Navbar nav -->
          <div class="navbar-nav">
            <div class="navbar-nav-link">
              <a href="../../html/user/sejarah.php">sejarah</a>
              <a href="../../html/user/visi&misi.php">visi misi</a>
              <a href="../../html/user/KoleksiBuku.php">koleksi buku</a>
              <a href="../../html/user/denah&peta.php">denah & peta</a>
            </div>
          </div>

      <main><h1>pengusulan</h1></main>
      <form method="post" action="">
        <div class="input-boxs">
          <div class="input-box">
            <p>Judul Buku</p>
            <input type="text" name="judul" id="judul" placeholder="Judul Buku" autocomplete="off" required/>
          </div>
          <div class="input-box">
            <p>Kategori</p>
            <select name="kategori">
              <option value="Fiksi" >Fiksi</option>
              <option value="Non-Fiksi">Non-Fiksi</option>
              <option value="Motivasi">Motivasi</option>
              <option value="Komputer&Teknologi">Komputer&Teknologi</option>
              <option value="Sejarah">Sejarah</option>
            </select>
          
          </div>
          <div class="input-box">
            <p>Isbn</p>
            <input type="number" name="isbn" id="isbn" placeholder="Isbn" autocomplete="off"/>
          </div>
          <div class="input-box">
            <p>Tanggal</p>
            <input type="date" name="tanggal" id="tanggal" placeholder="Tanggal" autocomplete="off" required/>
          </div>
          <div class="input-box">
            <p>Pengarang</p>
            <input type="text" name="pengarang" id="pengarang" placeholder="Pengarang" autocomplete="off" required/>
          </div>
          <div class="input-box">
            <p>Penerbit</p>
            <input type="text" name="penerbit" id="penerbit" placeholder="Penerbit" autocomplete="off" required/>
          </div>
          <div class="input-box">
            <p>Tahun Terbit</p>
            <input type="number" name="tahun" id="tahun" placeholder="Tahun Terbit" autocomplete="off" required/>
          </div>
        </div>
        <button type="submit" name="confirm" id="confirm">konfirmasi</button>
      </form>
      
    </div>
    <script src="../../javascript/sidebar.js"></script>
    <script>
        function setMinDate() {
        var today = new Date().toISOString().split('T')[0];
        document.getElementById("tanggal").setAttribute("min", today);
        document.getElementById("tanggal").setAttribute("max", today);
      };
    </script>
  </body>
</html>
