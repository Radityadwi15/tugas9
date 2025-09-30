<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "koneksi.php"; 
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_barang='$id'");
$row = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Ubah Barang</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #a1c4fd, #c2e9fb);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    form {
      background: white;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(0,0,0,0.2);
      width: 300px;
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    input {
      width: 100%;
      padding: 8px;
      margin: 8px 0;
      border: 1px solid #ddd;
      border-radius: 6px;
    }
    button {
      width: 100%;
      padding: 10px;
      background: linear-gradient(135deg, #f7971e, #ffd200);
      border: none;
      color: white;
      font-weight: bold;
      border-radius: 6px;
      cursor: pointer;
    }
    button:hover {
      opacity: 0.8;
    }
  </style>
</head>
<body>
  <form method="POST">
    <h2>Ubah Barang</h2>
    <input type="text" name="nama_barang" value="<?= $row['nama_barang']; ?>" required>
    <input type="number" name="stok" value="<?= $row['stok']; ?>" required>
    <input type="number" name="harga" value="<?= $row['harga']; ?>" required>
    <button type="submit" name="ubah">Ubah</button>
  </form>
</body>
</html>

<?php
if (isset($_POST['ubah'])) {
    $nama  = $_POST['nama_barang'];
    $stok  = $_POST['stok'];
    $harga = $_POST['harga'];

    mysqli_query($koneksi, "UPDATE buku SET nama_barang='$nama', stok='$stok', harga='$harga' WHERE id_barang='$id'");
    echo "<script>alert('Data berhasil diubah!');window.location='index.php';</script>";
}
?>
