<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $kodebarang = $_POST['kodebarang'];
    $namabarang = $_POST['namabarang'];
    $merk = $_POST['merk'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    $sql = "UPDATE barang SET kodebarang='$kodebarang', namabarang='$namabarang', merk='$merk', harga='$harga', jumlah='$jumlah' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
