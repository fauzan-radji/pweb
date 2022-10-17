<?php
include('koneksi.php');

$data = mysqli_query($conn, "SELECT * FROM quotes");

mysqli_close($conn);

?><!DOCTYPE html>
<html>
  <head>
    <title>Inventaris Buku</title>
  </head>
  <body bgcolor="#011">
    <font color="#fff">
      <h1>Selamat datang di Inventaris Buku pribadi Anda.</h1>
      
      <a href="form.html">Input Data Buku</a> --
      <a href="list.php">Daftar Buku</a> --
      <a href="form-quote.html">Tambah Quote</a>
      
      <br />
      <br />
      
      <img src="img/rak.jpg" width="100%">
      
      <br />
      
      <h2>Quotes</h2>
      
      <?php while($quote = mysqli_fetch_array($data)) {
        $author = $quote["author"];
        $isi = $quote["isi"];
        echo "
        <fieldset>
          <legend>
            <font size='4'>$author</font>
          </legend>
          
          <font size='6'>
            <p>“ $isi ”</p>
          </font>
        </fieldset>
        <br>";
      } ?>
    </font>
  </body>
</html>
