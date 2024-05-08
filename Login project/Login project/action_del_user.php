<?php

require_once "connect.php";
$email = $_GET['email'];

$sql = "DELETE FROM tb_user WHERE email = '$email'";
$result = mysqli_query ($conn, $sql);
if($result){
    header("location:data_user.php");
} else {
    echo "Gagal Hapus";
}
?>