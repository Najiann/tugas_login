<?php

require_once "connect.php";
$id_mahasiswa = $_GET['id_mahasiswa'];

$sql = "DELETE FROM tb_mahasiswa WHERE id_mahasiswa = '$id_mahasiswa'";
$result = mysqli_query($conn, $sql);
if ($result){
    header("location: data_mahasiswa.php");
} else {
    echo "Gagal Hapus";
}

?>