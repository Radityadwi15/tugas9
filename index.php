<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Barang</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #4facfe, #00f2fe);
      margin: 0;
      padding: 0;
      color: #333;
    }
    h2 {
      text-align: center;
      padding: 20px;
      color: white;
    }
    table {
      width: 80%;
      margin: auto;
      border-collapse: collapse;
      background: white;
      box-shadow: 0 0 15px rgba(0,0,0,0.2);
    }
    th, td {
      padding: 12px;
      border: 1px solid #ddd;
      text-align: center;
    }
    th {
      background: linear-gradient(135deg, #667eea, #764ba2);
      color: white;
    }
    a {
      text-decoration: none;
      color: white;
      padding: 6px 12px;
      border-radius: 5px;
    }
    .btn-tambah {
      display: inline-block;
      margin: 20px auto;
      background: linear-gradient(135deg, #43e97b, #38f9d7);
    }
    .btn-ubah {
      background: linear-gradient(135deg, #f7971e, #ffd200);
    }
    .btn-hapus {
      background: linear-gradient(135deg, #ff416c, #ff4b2b);
    }
    .btn-tambah:hover, .btn-ubah:hover, .btn-hapus:hover {
      opacity: 0.8;
    }
    .container {
      text-align: center;
    }
  </style>
</head>
<body>
  <h2>Data Barang</h2>
  <div class="container">
    <a href="tambah.php" class="btn-tambah">+ Tambah Barang</a>
  </div>
  <table>
    <tr>
      <th>ID Barang</th>
      <th>Nama Barang</th>
      <th>Stok</th>
      <th>Harga</th>
      <th>Aksi</th>
    </tr>
    <?php
    $result = mysqli_query($koneksi, "SELECT * FROM buku");
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
      <td><?= $row['id_barang']; ?></td>
      <td><?= $row['nama_barang']; ?></td>
      <td><?= $row['stok']; ?></td>
      <td>Rp <?= number_format($row['harga'],0,',','.'); ?></td>
      <td>
        <a href="ubah.php?id=<?= $row['id_barang']; ?>" class="btn-ubah">Ubah</a>
        <a href="hapus.php?id=<?= $row['id_barang']; ?>" class="btn-hapus" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
      </td>
    </tr>
    <?php } ?>
  </table>
</body>
</html>
