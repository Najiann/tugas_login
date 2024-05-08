<?php
require_once "connect.php";
$sql = "SELECT * FROM tb_user";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <ul>
        <li><a href="beranda.html">Home</a></li>
        <li><a href="http://localhost/Login%20project/data_user.php">data_user</a></li>
        <li><a href="http://localhost/Login%20project/data_barang.php">data_barang</a></li>
        <li><a href="http://localhost/Login%20project/data_mahasiswa.php">data_mahasiswa</a></li>
    </ul>

    <h1>DATA USER</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Password</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($data = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $data['nama_lengkap'] ?></td>
                    <td><?php echo $data['email'] ?></td>
                    <td><?php echo $data['password'] ?></td>
                    <td>
                        <a href="action_del_user.php?email=<?php echo $data['email'] ?> ">Hapus</a>
                        <a href="edit_user_form.php?email=<?php echo $data['email'] ?> ">Edit</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="input_user_form.php">Tambahkan Data</a>
</body>

</html>