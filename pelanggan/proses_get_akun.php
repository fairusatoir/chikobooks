<?php
  $line = "SELECT * FROM pelanggan WHERE id_pelanggan=" . $_SESSION['login_pelanggan']['id_pelanggan'];
  $query = mysqli_query($conn, $line);
  if ($query){
    $akun = mysqli_fetch_array($query);
  }
?>
