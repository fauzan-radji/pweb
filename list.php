<?php
include('koneksi.php');

$data = mysqli_query($conn, "SELECT * FROM buku");

mysqli_close($conn);

?><!DOCTYPE html>
<html>
  <head>
    <title>Daftar Buku</title>
  </head>
  <body bgcolor="#011">
    <font color="#fff">
      <h1>Daftar Buku</h1>

      <a href="index.php">Beranda</a> --
      <a href="form.html">Input Data Buku</a> <br />

      <?php
      $no = 1;
      while($buku = mysqli_fetch_array($data)) {
        $judul = $buku["judul"];
        $genre = $buku["genre"];
        $keterangan = $buku["keterangan"];

        echo "
        <br>
        <fieldset>
          <legend>
            <h2>$no. $judul</h2>
          </legend>
          <font size='4'>
            <p>Genre: $genre</p>
            <p>$keterangan</p>
          </font>
        </fieldset>";

        $no++;
      } ?>
    </font>
  </body>
</html>
