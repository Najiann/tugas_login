<?php

require_once "connect.php";

$id_mahasiswa = $_POST['id_mahasiswa'];
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$angkatan = $_POST['angkatan'];
$ipk = $_POST['ipk'];

$sql = "UPDATE tb_mahasiswa SET npm = '$npm', nama = '$nama', jurusan = '$angkatan', angkatan = '$angkatan',ipk = '$ipk' WHERE id_mahasiswa = '$id_mahasiswa'";
$result = mysqli_query($conn, $sql);
if ($result) {
    header("location: data_mahasiswa.php");
} else {
    echo "Edit Gagal!";
}
