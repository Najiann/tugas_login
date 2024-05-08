<?php
require_once 'connect.php';

$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$sql = "SELECT * FROM tb_barang WHERE id_barang= '$id_barang'";


$result = mysqli_query($conn, $sql); //fungsi menjalankan query sql

if (mysqli_num_rows($result) > 0) {
    echo "gagal menambahkan";
} else {
    mysqli_query($conn, "INSERT INTO tb_barang (id_barang, nama_barang, harga, stok) VALUES ('$id_barang', '$nama_barang', '$harga', '$stok')");
    header("location:data_barang.php");
}
