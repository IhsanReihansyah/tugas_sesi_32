<?php 
include 'koneksi.php';
date_default_timezone_set('Asia/Jakarta');

// get variable from form input
$judul = $_POST["judul"];
$tahun = $_POST["tahun"];
$katalog = $_POST["katalog"];
$stok = $_POST["stok"];
$harga_pinjam = $_POST["harga_pinjam"];


$result = mysqli_query($conn, "UPDATE `buku` set `judul` = '$judul', `tahun` = '$tahun', `id_katalog` = '$katalog', `qty_stok` = '$stok', `harga_pinjam` = '$harga_pinjam' where `isbn` = '$_GET[isbn]'");

header("Location:index.php");

?>