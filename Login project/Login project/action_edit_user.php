<?php

require_once "connect.php";

$nama = $_POST['nama'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "UPDATE tb_user SET nama_lengkap = '$nama', password = '$password' WHERE email = '$email'";
// eror di nama colom , nama colom yang di SET
$result = mysqli_query($conn, $sql);
if($result){
    header ("location: data_user.php");
} else {
    echo "edit gagal!";
}

?>