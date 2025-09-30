<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "koneksi.php"; 
$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM buku WHERE id_barang='$id'");

echo "<script>alert('Data berhasil dihapus!');window.location='index.php';</script>";
?>
