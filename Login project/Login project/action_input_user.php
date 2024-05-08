<?php
require_once 'connect.php';

$email = $_POST['email'];
$nama_lengkap = $_POST['nama_lengkap'];
$password = $_POST['password'];
$repeat_password = $_POST['repeat_password'];


$sql = "SELECT * FROM tb_user WHERE email= '$email'";


$result = mysqli_query($conn, $sql); //fungsi menjalankan query sql

if (mysqli_num_rows($result) > 0) {
    echo "gagal menambahkan";
} else {
    mysqli_query($conn, "INSERT INTO tb_user (email, nama_lengkap, password, repeat_password) VALUES ('$email', '$nama_lengkap', '$password', '$repeat_password')");
    header("location:data_user.php");
}
