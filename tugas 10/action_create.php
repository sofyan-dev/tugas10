<?php
require("db.php");

$nama = $_POST['nama'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

mysqli_query($connect, "INSERT INTO produk(nama_produk,keterangan,harga,jumlah) VALUES ('$nama','$keterangan','$harga','$jumlah')");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUCCES Add Produk!!</title>
</head>
<body>
    <a href="index.php">Tambah Produk</a>
    <a href="read.php">Daftar Produk</a>
    <script>
        alert("Data Produk berhasil ditambahkan");
</script>
</body>
</html>