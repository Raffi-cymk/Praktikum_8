<?php
include "koneksi.php";

$id = $_GET['id'];
$sql = "SELECT * FROM data_barang WHERE id_barang='$id'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $stok = $_POST['stok'];

    // gambar tetep "-" (tanpa upload)
    $gambar = $data['gambar'];

    $sql = "UPDATE data_barang SET
            nama='$nama',
            kategori='$kategori',
            harga_jual='$harga_jual',
            harga_beli='$harga_beli',
            stok='$stok',
            gambar='$gambar'
            WHERE id_barang='$id'";

    mysqli_query($conn, $sql);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ubah Barang</title>
</head>
<body>

<h1>Ubah Barang</h1>

<form method="POST">

    <label>Nama Barang</label><br>
    <input type="text" name="nama" value="<?= $data['nama']; ?>"><br><br>

    <label>Kategori</label><br>
    <select name="kategori">
        <option <?= ($data['kategori']=='Elektronik') ? 'selected' : '' ?>>Elektronik</option>
        <option <?= ($data['kategori']=='Komputer') ? 'selected' : '' ?>>Komputer</option>
        <option <?= ($data['kategori']=='Hand Phone') ? 'selected' : '' ?>>Hand Phone</option>
    </select><br><br>

    <label>Harga Jual</label><br>
    <input type="text" name="harga_jual" value="<?= $data['harga_jual']; ?>"><br><br>

    <label>Harga Beli</label><br>
    <input type="text" name="harga_beli" value="<?= $data['harga_beli']; ?>"><br><br>

    <label>Stok</label><br>
    <input type="text" name="stok" value="<?= $data['stok']; ?>"><br><br>

    <button type="submit" name="submit">Simpan Perubahan</button>

</form>

</body>
</html>
