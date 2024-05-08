<?php
require_once "connect.php";
$sql = "SELECT * FROM tb_mahasiswa";
$result = mysqli_query($conn, $sql);
?>

<style>
    a {
        text-align: center;
    }
    h1 {
        text-align: center;
        color: black;
    }

    ul {
        justify-content: center;
        display: flex;
        margin-top: 30px;
        font-size: 20px;

    }

    li {
        list-style-type: none;
        position: relative;
        margin: 10px;
        bottom: 25px;
    }

    th,
    td {
        padding: 15px;
        text-align: left;
    }

    tr:hover {
        background-color: coral;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    th {
        background-color: #04AA6D;
        color: white;
    }

    .table {
        justify-content: center;
        display: flex;

    }

    .responsive-a {
        /* display: inline-block; */
        justify-content: center;
        padding: 10px 20px;
        font-size: 16px;
        text-align: center;
        text-decoration: none;
        color: #fff;
        background-color: #007BFF;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s ease;
    }

    .responsive-a :hover {
        background-color: #0056b3;
    }

    .responsive-button {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        text-align: center;
        text-decoration: none;
        color: #fff;
        background-color: #007BFF;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s ease;
    }

    .responsive-button:hover {
        background-color: #0056b3;
    }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <ul>
        <li><a href="beranda.html" class="responsive-button">Home</a></li>
        <li><a href="http://localhost/Login%20project/data_user.php" class="responsive-button">data_user</a></li>
        <li><a href="http://localhost/Login%20project/data_barang.php" class="responsive-button">data_barang</a></li>
        <li><a href="http://localhost/Login%20project/data_mahasiswa.php" class="responsive-button">data_mahasiswa</a></li>
    </ul>

    <h1>DATA MAHASISWA</h1>
    <table style="margin-left:auto;margin-right:auto">
        <thead>
            <tr>
                <th>Id_mahasiswa</th>
                <th>NPM</th>
                <th>Nama</th>
                <th>jurusan</th>
                <th>Angkatan</th>
                <th>IPK</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($data = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $data['id_mahasiswa'] ?></td>
                    <td><?php echo $data['npm'] ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['jurusan'] ?></td>
                    <td><?php echo $data['angkatan'] ?></td>
                    <td><?php echo $data['ipk'] ?></td>
                    <td>
                        <a href="action_del_mahasiswa.php?id_mahasiswa=<?php echo $data['id_mahasiswa'] ?>">hapus</a>
                        <a href="edit_mahasiswa_form.php?id_mahasiswa=<?php echo $data['id_mahasiswa'] ?>">edit</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="input_mahasiswa_form.php" class="responsive-a">Tambahkan Data</a>
</body>

</html>