<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_jadwal = $_POST["id_jadwal"];
    $id_test = $_POST["id_test"];
    $username = $_POST["username"];
    $tanggal_test = $_POST["tanggal_test"];
    $tempat = $_POST["tempat"];
    $angkatan = $_POST["angkatan"];

    // Query untuk memperbarui data di tabel jadwal
    $query = "UPDATE jadwal SET id_test='$id_test',username='$username', tanggal_test='$tanggal_test', tempat='$tempat',angkatan='$angkatan' WHERE id_jadwal='$id_jadwal'";

    if (mysqli_query($koneksi, $query)) {
        // Jika data berhasil diperbarui, redirect ke halaman jadwal.php
        header("Location: jadwal.php");
        exit();
    } else {
        // Jika terjadi kesalahan, tampilkan pesan error
        echo "Error: " . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>
