<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_xirpl1_27_1"; // <== pastikan sama persis

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
?>
