<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Tambah Prabot</title>
<style>
  body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #ff9966, #ff5e62);
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
  }
  form {
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    width: 320px;
  }
  h2 {
    text-align: center;
    color: #ff5e62;
  }
  input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 8px;
  }
  button {
    background: #ff5e62;
    color: white;
    border: none;
    width: 100%;
    padding: 10px;
    border-radius: 8px;
    cursor: pointer;
  }
  button:hover {
    background: #ff4b2b;
  }
</style>
</head>
<body>

<form method="post">
  <h2>Tambah Prabot</h2>
  <input type="text" name="nama_prabot" placeholder="Nama Prabot" required>
  <input type="number" name="stok" placeholder="Stok" required>
  <input type="number" name="harga" placeholder="Harga" required>
  <button type="submit" name="simpan">Simpan</button>
</form>

<?php
if (isset($_POST['simpan'])) {
  $nama = $_POST['nama_prabot'];
  $stok = $_POST['stok'];
  $harga = $_POST['harga'];

  $sql = mysqli_query($conn, "INSERT INTO prabot_dapur (nama_prabot, stok, harga) VALUES ('$nama', '$stok', '$harga')");

  if ($sql) {
    echo "<script>alert('Data berhasil ditambahkan'); window.location='index.php';</script>";
  } else {
    echo "<script>alert('Gagal menambah data');</script>";
  }
}
?>

</body>
</html>
