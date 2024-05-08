<?php

    require_once "connect.php";
    $id_barang = $_GET['id_barang'];

    $sql = "DELETE FROM tb_barang WHERE id_barang = '$id_barang'";
    $result = mysqli_query($conn, $sql);
    if($result) {
        header("location:data_barang.php");
    } else {
        echo "Gaga; Hapus";
    }

?>