<?php
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
$level = "admin";

// Periksa apakah username sudah ada di database
$checkQuery = "SELECT * FROM login WHERE username = '$username'";
$checkResult = mysqli_query($koneksi, $checkQuery);
if (mysqli_num_rows($checkResult) > 0) {
    // Username sudah ada, tampilkan pesan kesalahan dengan menggunakan pop-up
    echo "<script>alert('Username sudah digunakan. Silakan pilih username lain.');</script>";
    echo "<script>window.location.href='tambah_admin.php';</script>";
    exit();
}

$query = "INSERT INTO login (username, password, level) VALUES ('$username', '$password', '$level')";
$sql = mysqli_query($koneksi, $query) or die("Gagal input" . $query);
header("location: tambah_admin.php");
?>
