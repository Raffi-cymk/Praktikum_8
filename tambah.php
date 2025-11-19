<?php
include "koneksi.php";

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $stok = $_POST['stok'];

    // gambar lo kosongin, gapapa
    $gambar = "-";

    $sql = "INSERT INTO data_barang (nama, kategori, harga_jual, harga_beli, stok, gambar)
            VALUES ('$nama', '$kategori', '$harga_jual', '$harga_beli', '$stok', '$gambar')";

    mysqli_query($conn, $sql);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tambah Barang</title>
</head>
<body>

<h1>Tambah Barang</h1>

<form method="POST">

    <label>Nama Barang</label><br>
    <input type="text" name="nama" required><br><br>

    <label>Kategori</label><br>
    <select name="kategori">
        <option value="Elektronik">Elektronik</option>
        <option value="Komputer">Komputer</option>
        <option value="Hand Phone">Hand Phone</option>
    </select><br><br>

    <label>Harga Jual</label><br>
    <input type="text" name="harga_jual" required><br><br>

    <label>Harga Beli</label><br>
    <input type="text" name="harga_beli" required><br><br>

    <label>Stok</label><br>
    <input type="text" name="stok" required><br><br>

    <button type="submit" name="submit">Simpan</button>

</form>

</body>
</html>
