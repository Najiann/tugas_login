<?php

    require_once "connect.php";
    
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $sql = "UPDATE tb_barang SET nama_barang = '$nama_barang', harga = '$harga', stok = '$stok' WHERE id_barang = '$id_barang'";

    // var_dump($sql);die;
    $result = mysqli_query($conn, $sql);
    if($result){
        header("location: data_barang.php");
    } else {
        echo "Edit Gagal!";
    }

?>