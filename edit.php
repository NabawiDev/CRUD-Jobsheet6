<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM barang WHERE id=$id";
    $result = $conn->query($sql);
    $barang = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Edit Barang</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $barang['id']; ?>">
        <label for="kodebarang">Kode Barang:</label>
        <input type="text" id="kodebarang" name="kodebarang" value="<?php echo $barang['kodebarang']; ?>" required>
        <label for="namabarang">Nama Barang:</label>
        <input type="text" id="namabarang" name="namabarang" value="<?php echo $barang['namabarang']; ?>" required>
        <label for="merk">Merk:</label>
        <input type="text" id="merk" name="merk" value="<?php echo $barang['merk']; ?>" required>
        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga" value="<?php echo $barang['harga']; ?>" step="0.01" required>
        <label for="jumlah">Jumlah:</label>
        <input type="number" id="jumlah" name="jumlah" value="<?php echo $barang['jumlah']; ?>" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>
