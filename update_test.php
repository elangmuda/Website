<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_test = $_POST["id_test"];
    $username = $_POST["username"];
    $nama_lengkap = $_POST["nama_lengkap"];
    $nilai_test = $_POST["nilai_test"];
    $status = $_POST["status"];

    $query = "UPDATE test SET username='$username', nama_lengkap='$nama_lengkap', nilai_test='$nilai_test', status='$status' WHERE id_test='$id_test'";

    if (mysqli_query($koneksi, $query)) {
        header("Location: hasil_test.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>
