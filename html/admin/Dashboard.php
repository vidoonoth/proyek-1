<?php 
require '../../php/koneksi.php';
$pengunjung= mysqli_query($con, "SELECT*FROM pengusul");
$total_pengunjung= mysqli_num_rows($pengunjung);

$buku= mysqli_query($con, "SELECT*FROM koleksi_buku");
$total_buku= mysqli_num_rows($buku);

$usulan= mysqli_query($con, "SELECT*FROM usulan");
$total_usulan= mysqli_num_rows($usulan);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../css/admin/Dashboard.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container">
      <div class="navbar">
        <nav>
          <div class="logo-dashboard">
            <a href="../../html/admin/Dashboard.php">
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
          <div class="logo-profil">
            <a href="../../html/admin/ProfileAdmin.php">
              <h2>admin</h2>
            </a>
          </div>
        </nav>
      </div>
      <div class="sidebar">
        <nav>
          <ul>
            <li><a href="../../html/admin/Dashboard.php"> Dashboard </a></li>
            <li>
              <a href="../../html/admin/DataPengusulan.php">Data Pengusulan</a>
            </li>
            <li>
              <a href="../../html/admin/StatusDataPengusulan.php">
                Status <br />
                Data Pengusulan</a
              >
            </li>
            <li><a href="../../html/admin/ProfileAdmin.php">Profil</a></li>
            <li><a href="../../html/admin/LoginAdmin.php">Keluar</a></li>
          </ul>
        </nav>
      </div>
      <div class="main-content">
        <h1>Dashboard</h1>
        <div class="cards-1">
          <div class="card-1">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="1em"
              height="1em"
              viewBox="0 0 24 24"
            >
              <g fill="none" fill-rule="evenodd">
                <path
                  d="M24 0v24H0V0zM12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036c-.01-.003-.019 0-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z"
                />
                <path
                  fill="white"
                  d="M12 2c5.523 0 10 4.477 10 10a9.959 9.959 0 0 1-2.258 6.33l.02.022l-.132.112A9.978 9.978 0 0 1 12 22c-2.95 0-5.6-1.277-7.43-3.307l-.2-.23l-.132-.11l.02-.024A9.958 9.958 0 0 1 2 12C2 6.477 6.477 2 12 2m0 15c-1.86 0-3.541.592-4.793 1.406A7.965 7.965 0 0 0 12 20a7.965 7.965 0 0 0 4.793-1.594A8.897 8.897 0 0 0 12 17m0-13a8 8 0 0 0-6.258 12.984C7.363 15.821 9.575 15 12 15s4.637.821 6.258 1.984A8 8 0 0 0 12 4m0 2a4 4 0 1 1 0 8a4 4 0 0 1 0-8m0 2a2 2 0 1 0 0 4a2 2 0 0 0 0-4"
                />
              </g>
            </svg>
            <p>
              <?= $total_pengunjung ?> <br />
              Pengunjung
            </p>
          </div>
          <div class="card-1">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="1em"
              height="1em"
              viewBox="0 0 20 20"
            >
              <g fill="white">
                <path
                  d="m11 5.79l7.314-1.27a1.5 1.5 0 0 1 .242-.02c.801 0 1.444.664 1.444 1.475v9.786c0 .72-.511 1.34-1.213 1.456l-7.705 1.276a.499.499 0 0 1-.18-.002l-7.647-1.267A1.5 1.5 0 0 1 2 15.744V6.011a1.5 1.5 0 0 1 1.756-1.478z"
                  opacity="0.2"
                />
                <path
                  fill-rule="evenodd"
                  d="M10.08 4.304L2.244 3.019A1.5 1.5 0 0 0 .5 4.5v9.738a1.5 1.5 0 0 0 1.268 1.482l8.155 1.275a.5.5 0 0 0 .577-.494V4.797a.5.5 0 0 0-.42-.493m-8-.298L9.5 5.222v10.694L1.923 14.73a.5.5 0 0 1-.423-.493V4.5a.5.5 0 0 1 .58-.494"
                  clip-rule="evenodd"
                />
                <path
                  fill-rule="evenodd"
                  d="M18 3a1.5 1.5 0 0 0-.243.02L9.92 4.303a.5.5 0 0 0-.419.493V16.5a.5.5 0 0 0 .577.494l8.155-1.275a1.5 1.5 0 0 0 1.268-1.482V4.5A1.5 1.5 0 0 0 18 3m.077 11.73L10.5 15.917V5.222l7.42-1.216a.501.501 0 0 1 .58.494v9.737a.5.5 0 0 1-.423.493"
                  clip-rule="evenodd"
                />
              </g>
            </svg>
            <p>
              <?= $total_buku ?> <br />
              Koleksi Buku
            </p>
          </div>
          <div class="card-1">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="30px"
              height="30px"
              viewBox="0 0 512 512"
            >
              <path
                fill="white"
                d="M213.3 0h-128C38.2 0 0 38.2 0 85.3v128L298.7 512L512 298.7zm-128 128c-23.6 0-42.7-19.1-42.7-42.7s19.1-42.7 42.7-42.7S128 61.8 128 85.3S108.9 128 85.3 128"
              />
            </svg>
            <p>
              <?= $total_usulan ?> <br />
              Usulan
            </p>
          </div>
        </div>
        <div class="cards-2">
          <div class="card-2">
            <a href="../../html/admin/DataPengusulan.php">
              <p>Data Pengusulan</p>
              <table>
                <tr>
                  <th>nama</th>
                  <th>tanggal</th>
                </tr>
                <tr>
                  <td>-</td>
                  <td>-</td>
                </tr>
              </table>
            </a>
          </div>
          <div class="card-2">
            <a href="../../html/admin/StatusDataPengusulan.php">
              <p>Status Data Pengusulan</p>
              <table>
                <tr>
                  <th>nama</th>
                  <th>tanggal</th>
                </tr>
                <tr>
                  <td>-</td>
                  <td>-</td>
                </tr>
              </table>
            </a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
