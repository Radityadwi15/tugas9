<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Data Prabot Dapur</title>
<style>
  body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: #333;
    margin: 0;
    padding: 0;
  }
  h1 {
    text-align: center;
    color: white;
    margin-top: 20px;
  }
  table {
    margin: 30px auto;
    border-collapse: collapse;
    width: 80%;
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  }
  th, td {
    padding: 12px 15px;
    border-bottom: 1px solid #ddd;
    text-align: center;
  }
  th {
    background: #764ba2;
    color: white;
  }
  tr:hover { background-color: #f1f1f1; }
  a.button {
    text-decoration: none;
    color: white;
    background: #667eea;
    padding: 8px 14px;
    border-radius: 5px;
    margin: 5px;
    transition: 0.3s;
  }
  a.button:hover { background: #5a67d8; }
  .tambah {
    display: block;
    width: 150px;
    text-align: center;
    margin: 20px auto;
    background: #48bb78;
  }
</style>
</head>
<body>

<h1>📦 Data Prabot Dapur</h1>

<a href="tambah.php" class="button tambah">+ Tambah Data</a>

<table>
  <tr>
    <th>ID</th>
    <th>Nama Prabot</th>
    <th>Stok</th>
    <th>Harga</th>
    <th>Aksi</th>
  </tr>

  <?php
  $query = mysqli_query($conn, "SELECT * FROM prabot_dapur");
  while ($data = mysqli_fetch_assoc($query)) {
  ?>
  <tr>
    <td><?= $data['id_prabot'] ?></td>
    <td><?= $data['nama_prabot'] ?></td>
    <td><?= $data['stok'] ?></td>
    <td>Rp<?= number_format($data['harga'], 0, ',', '.') ?></td>
    <td>
      <a href="ubah.php?id=<?= $data['id_prabot'] ?>" class="button">Ubah</a>
      <a href="hapus.php?id=<?= $data['id_prabot'] ?>" class="button" style="background:#e53e3e;" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
    </td>
  </tr>
  <?php } ?>
</table>

</body>
</html>



