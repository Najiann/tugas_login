<?php
    require_once "connect.php";

    $nisn = $_GET['nisn'];

    $sql = "SELECT * FROM tb_siswa WHERE nisn = '$nisn'";
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
    <form action="action_edit_siswa.php" method="post">
        <input type="hidden" name="nisn" value="<?= $data['nisn']?>">
        <input type="name" name="nama" value="<?= $data['nama']?>">
        <input type="class" name="kelas" value="<?= $data['kelas']?>">
        <button type="submit">Edit</button>
    </form>
</body>
</html>