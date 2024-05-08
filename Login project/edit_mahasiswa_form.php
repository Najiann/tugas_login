<?php
require_once "connect.php";

$id_mahasiswa = $_GET['id_mahasiswa'];

$sql = "SELECT * FROM tb_mahasiswa WHERE id_mahasiswa = '$id_mahasiswa'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($result);


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="action_edit_mahasiswa.php" method="post">
        <input type="hidden" name="id_mahasiswa" value=" <?= $data['id_mahasiswa'] ?>">
        <input type="text" name="npm" value=" <?= $data['npm'] ?>">
        <input type="text" name="nama" value=" <?= $data['nama'] ?>">
        <input type="text" name="jurusan" value=" <?= $data['jurusan'] ?>">
        <input type="text" name="angkatan" value=" <?= $data['angkatan'] ?>">
        <input type="text" name="ipk" value=" <?= $data['ipk'] ?>">
        <button type="submit">Edit</button>
    </form>
</body>

</html>