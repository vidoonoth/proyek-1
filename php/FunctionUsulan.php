<?php 

$id = $_SESSION["id"];
  function usulan($data)
  {
      global $con;
      $isbn = $data['isbn'];
      $judul = $data['judul'];
      $pengarang = $data['pengarang'];
      $penerbit = $data['penerbit'];
      $tahun = $data['tahun'];
      $kategori = $data['kategori'];
      $tanggal = $data['tanggal'];

      $query = "INSERT INTO usulan (id_usulan, id_pengusul, isbn, judul_buku, pengarang, penerbit, tahun_terbit, kategori, tanggal) VALUES ('$isbn', '$judul', '$pengarang', '$penerbit', '$tahun', '$kategori', '$tanggal')";
      $result = mysqli_query($con, $query);

      return mysqli_affected_rows($con);
  }  
?>