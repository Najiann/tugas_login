<?php
require_once  'connect.php';
$email = $_POST ['email'];
$passwordUser = md5($_POST['password']);

function getEmail($email){
    include "connect.php";
    $sql = "SELECT * FROM tb_user WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    return $row;
}
$data = getEmail($email);
if (!$data){
    echo "Email belum terdaftar";
} else {
    $password = $data['password'];

    if($password != $passwordUser) {
        echo "Incorrect Email/Password";
    } else {
        header("location: testestes.html");
    }
}
?> 