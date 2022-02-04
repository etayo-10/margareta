<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$merek = $_POST['merek'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
 
// update data ke database
mysqli_query($koneksi,"update buku set merek='$merek', jumlah='$jumlah', harga='$harga' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>