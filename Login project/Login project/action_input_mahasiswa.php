<?php
require_once 'connect.php';

$id_mahasiswa = $_POST['id_mahasiswa'];
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$angkatan = $_POST['angkatan'];
$ipk = $_POST['ipk'];

$sql = "SELECT * FROM tb_mahasiswa WHERE id_mahasiswa= '$id_mahasiswa'";


$result = mysqli_query($conn, $sql); //fungsi menjalankan query sql

if (mysqli_num_rows($result) > 0) {
    echo "gagal menambahkan";
} else {
    mysqli_query($conn, "INSERT INTO tb_mahasiswa (id_mahasiswa, npm, nama, jurusan, angkatan, ipk) VALUES ('$id_mahasiswa', '$npm', '$nama', '$jurusan', '$angkatan', '$ipk')");
    header("location:data_mahasiswa.php");
}
