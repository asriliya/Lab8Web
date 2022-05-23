<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "latihan 1";
$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn == false)
{
    echo "Koneksi berhasil";
    die();
} #else echo "Koneksi berhasil";
?>
