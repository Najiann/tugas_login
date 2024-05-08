<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "db_login";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if ($db->connect_error) {
    echo "koneksi databese rusak";
    die("eror!");
}

?>