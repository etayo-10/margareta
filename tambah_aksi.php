<?php 
// koneksi database
include 'koneksi.php';
 

$merek = $_POST['merek'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
 if (!empty($merek) || !empty($jumlah) || !empty($harga)) {
// menginput data ke database
mysqli_query($koneksi,"insert into buku values('','$merek','$jumlah','$harga')");
 }
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>