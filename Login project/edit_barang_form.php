<?php
require_once "connect.php";

$id_barang = $_GET['id_barang'];

$sql = "SELECT * FROM tb_barang WHERE id_barang = '$id_barang'";
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
    <form action="action_edit_Dbarang.php" method="post">
        <input type="hidden" name="id_barang" value="<?= $data['id_barang'] ?>">
        <input type="text" name="nama_barang" value="<?= $data['nama_barang'] ?>">
        <input type="text" name="harga" value="<?= $data['harga'] ?>">
        <input type="text" name="stok" value="<?= $data['stok'] ?>">
        <button type="submit">Edit</button>
    </form>
</body>

</html>