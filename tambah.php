<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "koneksi.php";

if (isset($_POST['simpan'])) {
    $nama  = $_POST['nama_barang'];
    $stok  = $_POST['stok'];
    $harga = $_POST['harga'];

    $query = "INSERT INTO buku (nama_barang, stok, harga) VALUES ('$nama','$stok','$harga')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Data berhasil ditambahkan!');window.location='index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ff9a9e, #fad0c4);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            width: 320px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ddd;
            border-radius: 6px;
        }
        button {
            width: 100%;
            padding: 10px;
            background: linear-gradient(to right, #00c6ff, #0072ff);
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
        }
        button:hover {
            opacity: 0.9;
        }
        .back {
            display: block;
            text-align: center;
            margin-top: 12px;
            text-decoration: none;
            color: #0072ff;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tambah Barang</h2>
        <form method="POST">
            <input type="text" name="nama_barang" placeholder="Nama Barang" required>
            <input type="number" name="stok" placeholder="Stok" required>
            <input type="number" name="harga" placeholder="Harga" required>
            <button type="submit" name="simpan">Simpan</button>
        </form>
        <a href="index.php" class="back">← Kembali</a>
    </div>
</body>
</html>
