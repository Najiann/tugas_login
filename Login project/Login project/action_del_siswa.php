<?php 

require_once "connect.php";
$nisn = $_GET['nisn'];

$sql = "DELETE FROM tb_siswa WHERE nisn = '$nisn'";
$result = mysqli_query ($conn, $sql);
if($result){
    header("location:data_siswa.php");
} else {
    echo "Gagal Hapus";
}

?>