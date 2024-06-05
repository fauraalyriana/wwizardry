<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "wwizardy";

$conn = mysqli_connect($servername, $username, $password, $databasename);
if (!$conn) {
    die("Koneksi tidak berhasil: " . mysqli_connect_error());
} 
?>
