<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_test = $_POST["id_test"];
    $username = $_POST["username"];
    $tanggal_test = $_POST["tanggal_test"];
    $tempat = $_POST["tempat"];
    $angkatan = $_POST["angkatan"];

    // Query untuk menambahkan data ke tabel jadwal
    $query = "INSERT INTO jadwal (id_test,username, tanggal_test, tempat,angkatan) VALUES ('$id_test','$username', '$tanggal_test', '$tempat','$angkatan')";

    if (mysqli_query($koneksi, $query)) {
        // Jika data berhasil ditambahkan, redirect ke halaman jadwal.php
        header("Location: jadwal.php");
        exit();
    } else {
        // Jika terjadi kesalahan, tampilkan pesan error
        echo "Error: " . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>
