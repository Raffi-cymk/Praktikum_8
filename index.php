<?php 
include("koneksi.php");

// query untuk menampilkan data
$sql = "SELECT * FROM data_barang";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Barang</title>
    <style>
        table {
            border-collapse: collapse;
            width: 700px;
        }
        table, th, td {
            border: 1px solid black;
            padding: 6px;
        }
    </style>
</head>
<body>
    <h1>Data Barang</h1>

    <table>
        <tr>
            <th>Gambar</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Stok</th>
        </tr>

        <?php if ($result && mysqli_num_rows($result) > 0): ?>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><img src="<?= $row['gambar']; ?>" width="80"></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['kategori']; ?></td>
                <td><?= $row['harga_beli']; ?></td>
                <td><?= $row['harga_jual']; ?></td>
                <td><?= $row['stok']; ?></td>
            </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="6">Belum ada data</td></tr>
        <?php endif; ?>

    </table>

</body>
</html>
