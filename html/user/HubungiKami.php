<?php 
  include '../../php/ReadProfil.php';
session_start();
if( !isset($_SESSION["login"])){
  header("Location: Login.php");
  exit;
}
$id = $_SESSION["id"];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../../css/user/HubungiKami.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container">
      <a href="../../html/user/HomePage.php">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="1em"
        height="1em"
        viewBox="0 0 16 16"
      >
        <path
          fill="none"
          stroke="#53A1C4"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="1.5"
          d="m7.25 3.75l-4.5 4.5l4.5 4.5m6-4.5H2.75"
        />
      </svg>
      </a>
      <div class="main">
        <h1>Hubungi Kami</h1>
        <form action="#" method="post">
          <div class="InputBox">
            <label for="name">Nama Lengkap</label>
            <input type="text" id="name" placeholder="Nama Lengkap" autocomplete="off"/>
          </div>
          <div class="InputBox">
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Email" autocomplete="off"/>
          </div>
          <div class="input-pesan">
            <label for="pesan">Pesan</label>
            <input
              type="text" name="pesan"
              id="pesan"
              placeholder="Masukkan pesan yang ingin disampaikan"
              autocomplete="off"/>
          </div>
        </form>
        <button type="submit" name="kirim">KIRIM</button>
      </div>
    </div>
  </body>
</html>
