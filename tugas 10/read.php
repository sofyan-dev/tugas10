<?php
require("db.php");

$produk = mysqli_query($connect, "SELECT * FROM produk");



?>
<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Daftar Produk</title>
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <imgclass="d-inline-block align-top" alt="" loading="lazy">
    SFYN STORE
  </a><a href="index.php">Tambah Produk</a>
</nav>
    <center>
    <h2>Daftar Produk</h2>
    <br>
    <table border="1" cellpadding="5" cellspacing="0" width="50%">
    <thead>
        <tr>
            <th>Nama Produk</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Aksi</th>
</tr>
</thead>

<tbody>
    <?php while($prod = mysqli_fetch_assoc($produk)) { ?>
    <tr>
        <td> <?php echo $prod['nama_produk'] ?> </td>
        <td> <?php echo $prod['keterangan'] ?> </td>
        <td> <?php echo $prod['harga'] ?> </td>
        <td> <?php echo $prod['jumlah'] ?> </td>
        <td> 
            <a href="edit.php">Edit</a>
    </td>
    </tr>
    <?php } ?>

       <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 
</body>
</html>