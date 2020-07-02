<?php
require("db.php");

$nama = $_POST['nama_produk'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

mysqli_query($connect, "UPDATE produk set nama_produk='$nama',keterangan='$keterangan',harga='$harga',jumlah='$jumlah'")