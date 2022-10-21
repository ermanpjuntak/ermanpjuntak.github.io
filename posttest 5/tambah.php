<?php
  require "config.php";

  if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $warna = $_POST['warna'];
    $harga = $_POST['harga'];
    $query = mysqli_query($db,"INSERT INTO barang (nama,kategori,warna,harga) VALUES ('$nama','$kategori','$warna','$harga')");
    var_dump($_FILES);

    if(isset($_POST['submit'])){
      if($query){
          header("Location:index.php");
      } else {
          echo "Update gagal";
      }
  }
  }
?> 