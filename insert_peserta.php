<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_peserta = $_POST["id_peserta"];
    $nama_lengkap = $_POST["nama_lengkap"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $no_hp = $_POST["no_hp"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $alamat = $_POST["alamat"];
    $nilai_rata_rata = $_POST["nilai_rata_rata"];
    $asal_sekolah = $_POST["asal_sekolah"];

    // Query untuk menambahkan data ke tabel jadwal
    $query = "INSERT INTO peserta (id_peserta, nama_lengkap, username, email, no_hp, jenis_kelamin, tanggal_lahir, alamat, nilai_rata_rata, asal_sekolah) VALUES ('$id_peserta', '$nama_lengkap', '$username', '$email', '$no_hp', '$jenis_kelamin', '$tanggal_lahir', '$alamat', '$nilai_rata_rata', '$asal_sekolah')";

    if (mysqli_query($koneksi, $query)) {
        // Jika data berhasil ditambahkan, redirect ke halaman jadwal.php
        header("Location: kelola_peserta.php");
        exit();
    } else {
        // Jika terjadi kesalahan, tampilkan pesan error
        echo "Error: " . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>
