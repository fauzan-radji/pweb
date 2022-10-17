<?php
include('koneksi.php');

$author = $_REQUEST['author'];
$isi = $_REQUEST['isi'];

$berhasil = mysqli_query($conn, "INSERT INTO quotes (author, isi) VALUES ('$author', '$isi')");

mysqli_close($conn);

?><!DOCTYPE html>
<html>
  <head>
    <title>Quote <?php if($berhasil) { echo 'Berhasil'; } else { echo 'Gagal'; } ?> Ditambah</title>
  </head>
  <body bgcolor="#011">
    <font color="#fff">
      <h1>Quote <?php if($berhasil) { echo 'Berhasil'; } else { echo 'Gagal'; } ?> Ditambah</h1>

      <a href="index.php">Beranda</a> --
      <a href="form-quote.html">Input Quote Baru</a>
    </font>
  </body>
</html>
