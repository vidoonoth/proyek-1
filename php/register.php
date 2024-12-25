<?php 
  function tambah($data)
  {
      global $con;
      $username = $data['username'];
      $nama = $data['name'];
      $password = $data['password'];
      $email = $data['email'];
      $nik = $data['nik'];
      $gender = $data['gender'];
      

      $query = "INSERT INTO pengusul VALUES ('', '$username', '$nama', '$password', '$email', '$nik','$gender')";
      $result = $con->query($query);

      return mysqli_affected_rows($con);
  }  
?>