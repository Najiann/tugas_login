<?php
require_once "connect.php";
$sql = "SELECT * FROM tb_siswa";
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
    <table>
        <thead>
            <tr>
                <th>Nisn</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($data = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $data['nisn'] ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['kelas'] ?></td>
                    <td>
                        <a href="action_del_siswa.php?nisn=<?php echo $data['nisn'] ?> ">Hapus</a>
                        <a href="edit_siswa_form.php?nisn=<?php echo $data['nisn'] ?> ">Edit</a>
                    </td>
                </tr>
            <?php }  ?>
        </tbody>
    </table>
</body>

</html>