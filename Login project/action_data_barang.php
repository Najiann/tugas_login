<?php
    require_once 'connect.php';

    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    // di kurung array itu "name" dalam form 

    $sql = "UPDATE tb_barang SET nama_barang = '$nama_barang', harga = '$harga', stok = '$stok' WHERE id_barang = '$id_barang'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
       header("location: data_barang.php");
    } else {
       echo "edit gagal!";
    }

?>