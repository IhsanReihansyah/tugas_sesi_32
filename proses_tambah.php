<?php 
include 'koneksi.php';

// get variable from form input
$isbn = $_POST["isbn"];
$judul = $_POST["judul"];
$tahun = $_POST["tahun"];
$katalog = $_POST["katalog"];
$stok = $_POST["stok"];
$harga_pinjam = $_POST["harga_pinjam"];

$result = mysqli_query($conn, "INSERT INTO `buku` (`isbn`, `judul`, `tahun`, `id_katalog`, `qty_stok`, `harga_pinjam`) VALUES ('$isbn', '$judul', '$tahun', '$katalog', '$stok', '$harga_pinjam');");

header("Location:index.php");

?>