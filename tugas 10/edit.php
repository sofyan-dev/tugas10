<?php
require("db.php");

$data = mysqli_query($connect, "SELECT * FROM produk");
$produk = mysqli_fetch_all($data, MYSQLI_ASSOC);

// var_dump($produk);

$produk= mysqli_query($connect, "SELECT * FROM produk");
$produk= mysqli_fetch_assoc($produk);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>SOFYAN STORE</title>
  </head>
  <body>
  <!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <imgclass="d-inline-block align-top" alt="" loading="lazy">
    SFYN STORE
  </a>
  <a href="read.php">Daftar Produk</a>
</nav>
<center>
<h2>ADD PRODUK</h2><br>
<form method="POST" action="action_edit.php">
    <p>
        <label>Nama Produk</label><br>
        <input type="text" name="nama" value="<?= $produk['nama_produk'] ?>" />
</p>

<p>
        <label>Keterangan</label><br>
        <textarea name="keterangan"><?= $produk['keterangan']?></textarea>
</p>

<p>
        <label>HARGA</label><br>
        <input type="text" name="harga" value="<?= $produk['harga']?>" />
</p>

<p>
        <label>JUMLAH</label><br>
        <input type="number" name="jumlah" value="<?= $produk['jumlah']?>" />
</p>

<p>
    <input type="submit">
</p>
</center>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>