<?php
$host = "localhost"; // Nama hostnya
$username = "root"; // Username
$password = ""; // Password (Isi jika menggunakan password)
$database = "dbsiakad"; // Nama databasenya
$connect = mysqli_connect($host, $username, $password, $database) or mysql_errno(); // Koneksi ke MySQL
?>
