<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";
$user = "xirpl1_27";   // ganti sesuai username MySQL yang kamu dapat dari hosting
$pass = "password_kamu"; // ganti dengan password MySQL kamu
$db   = "db_xirpl1_27_1";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
} else {
  echo "Koneksi berhasil!";
}
?>
