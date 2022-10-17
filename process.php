<?php
include('koneksi.php');

$penulis = $_REQUEST['penulis'];
$judul = $_REQUEST['judul'];
$genre = $_REQUEST['genre'];
$keterangan = $_REQUEST['keterangan'];

$berhasil = mysqli_query($conn, "INSERT INTO buku (judul, genre, keterangan, penulis) VALUES ('$judul', '$genre', '$keterangan', '$penulis')");

mysqli_close($conn);

?><!DOCTYPE html>
<html>
  <head>
    <title>Buku <?php if($berhasil) { echo 'Berhasil'; } else { echo 'Gagal'; } ?> Diinput</title>
  </head>
  <body bgcolor="#011">
    <font color="#fff">
      <h1>Buku <?php if($berhasil) { echo 'Berhasil'; } else { echo 'Gagal'; } ?> Diinput</h1>

      <a href="index.php">Beranda</a> --
      <a href="form.html">Input Data Buku</a> --
      <a href="list.php">Daftar Buku</a>
    </font>
  </body>
</html>
