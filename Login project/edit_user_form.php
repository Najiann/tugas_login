<?php 
    require_once "connect.php";

    $email = $_GET['email'];

    $sql = "SELECT * FROM tb_user WHERE email = '$email'";
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
    <form action="action_edit_user.php" method="post">
        <input type="hidden" name="email" value="<?= $data['email']?>">
        <input type="name" name="nama" value=" <?= $data['nama_lengkap']?>">
        <input type="password" name="password" value=" <?= $data['password']?>">
        <button type="submit">Edit</button>
    </form>
</body>
</html>