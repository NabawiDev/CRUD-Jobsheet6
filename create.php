<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kodebarang = $_POST['kodebarang'];
    $namabarang = $_POST['namabarang'];
    $merk = $_POST['merk'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    $sql = "INSERT INTO barang (kodebarang, namabarang, merk, harga, jumlah)
            VALUES ('$kodebarang', '$namabarang', '$merk', '$harga', '$jumlah')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
