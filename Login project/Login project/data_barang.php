<?php
require_once "connect.php";
$sql = "SELECT * FROM tb_barang";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="" type="text/css" />
    <title>Document</title>
</head>

<body>

    <ul>
        <li><a href="beranda.html">Home</a></li>
        <li><a href="http://localhost/Login%20project/data_user.php">data_user</a></li>
        <li><a href="http://localhost/Login%20project/data_barang.php">data_barang</a></li>
        <li><a href="http://localhost/Login%20project/data_mahasiswa.php">data_mahasiswa</a></li>
    </ul>

    <h1>DATA BARANG</h1>
    <table>
        <thead>
            <tr>
                <th>Id Barang</th>
                <th>Nama Barang</th>
                <th>Harga Barang</th>
                <th>Stok Barang</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($data = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?= $data['id_barang'] ?></td>
                    <td><?= $data['nama_barang'] ?></td>
                    <td><?= $data['harga'] ?></td>
                    <td><?= $data['stok'] ?></td>
                    <td>
                        <a href="action_del_Dbarang.php?id_barang=<?php echo $data['id_barang'] ?> ">Hapus</a>
                        <a href="edit_barang_form.php?id_barang=<?php echo $data['id_barang'] ?> ">Edit</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="input_barang_form.php">Tambahkan Data</a>
</body>

</html>