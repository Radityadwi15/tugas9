<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM prabot_dapur WHERE id_prabot=$id"));
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Ubah Prabot</title>
<style>
  body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #36d1dc, #5b86e5);
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
    color: #5b86e5;
  }
  input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 8px;
  }
  button {
    background: #36d1dc;
    color: white;
    border: none;
    width: 100%;
    padding: 10px;
    border-radius: 8px;
    cursor: pointer;
  }
  button:hover {
    background: #3399cc;
  }
</style>
</head>
<body>

<form method="post">
  <h2>Ubah Data Prabot</h2>
  <input type="text" name="nama_prabot" value="<?= $data['nama_prabot'] ?>" required>
  <input type="number" name="stok" value="<?= $data['stok'] ?>" required>
  <input type="number" name="harga" value="<?= $data['harga'] ?>" required>
  <button type="submit" name="ubah">Simpan Perubahan</button>
</form>

<?php
if (isset($_POST['ubah'])) {
  $nama = $_POST['nama_prabot'];
  $stok = $_POST['stok'];
  $harga = $_POST['harga'];

  $update = mysqli_query($conn, "UPDATE prabot_dapur SET nama_prabot='$nama', stok='$stok', harga='$harga' WHERE id_prabot=$id");

  if ($update) {
    echo "<script>alert('Data berhasil diubah'); window.location='index.php';</script>";
  } else {
    echo "<script>alert('Gagal mengubah data');</script>";
  }
}
?>

</body>
</html>
