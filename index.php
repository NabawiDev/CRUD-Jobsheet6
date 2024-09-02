<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Daftar Barang</h1>
    <table>
        <thead>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Merk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM barang";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$row['kodebarang']}</td>
                        <td>{$row['namabarang']}</td>
                        <td>{$row['merk']}</td>
                        <td>Rp {$row['harga']}</td>
                        <td>{$row['jumlah']}</td>
                        <td>
                            <a href='edit.php?id={$row['id']}'>Edit</a>
                            <a href='delete.php?id={$row['id']}'>Hapus</a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No records found</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <h2>Tambah Barang</h2>
    <form action="create.php" method="post">
        <label for="kodebarang">Kode Barang:</label>
        <input type="text" id="kodebarang" name="kodebarang" required><br>
        <label for="namabarang">Nama Barang:</label>
        <input type="text" id="namabarang" name="namabarang" required><br>
        <label for="merk">Merk:</label>
        <input type="text" id="merk" name="merk" required><br>
        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga" step="0.01" required><br>
        <label for="jumlah">Jumlah:</label>
        <input type="number" id="jumlah" name="jumlah" required><br>
        <button type="submit">Tambah</button><br>
    </form>
</body>
</html>
