<?php
// Mulai sesi
session_start();
include "koneksi.php";

// Cek jika pengguna tidak memiliki level "peserta", arahkan ke halaman login
if (!isset($_SESSION['level']) || $_SESSION['level'] !== 'peserta') {
    header("Location: login.php");
   
}

// Cek apakah ada file yang diunggah
if (isset($_FILES['file_kartu_keluarga']) && isset($_FILES['file_ijazah']) && isset($_FILES['file_shun']) && isset($_FILES['file_kip']) && isset($_FILES['file_serti_prestasi'])) {
    // Tentukan direktori untuk menyimpan berkas
    $uploadDir = "src/"; // Ganti dengan direktori yang sesuai di server Anda

    // Tentukan nama file yang unik
    $username = $_POST['username'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $file_kartu_keluarga = $uploadDir . basename($_FILES['file_kartu_keluarga']['name']);
    $file_ijazah = $uploadDir . basename($_FILES['file_ijazah']['name']);
    $file_shun = $uploadDir . basename($_FILES['file_shun']['name']);
    $file_kip = $uploadDir . basename($_FILES['file_kip']['name']);
    $file_serti_prestasi = $uploadDir . basename($_FILES['file_serti_prestasi']['name']);

    // Pindahkan file yang diunggah ke direktori tujuan
    move_uploaded_file($_FILES['file_kartu_keluarga']['tmp_name'], $file_kartu_keluarga);
    move_uploaded_file($_FILES['file_ijazah']['tmp_name'], $file_ijazah);
    move_uploaded_file($_FILES['file_shun']['tmp_name'], $file_shun);
    move_uploaded_file($_FILES['file_kip']['tmp_name'], $file_kip);
    move_uploaded_file($_FILES['file_serti_prestasi']['tmp_name'], $file_serti_prestasi);

    // Simpan informasi berkas ke dalam database
    $query = "INSERT INTO berkas (username, nama_lengkap, file_kartu_keluarga, file_ijazah, file_shun, file_kip, file_serti_prestasi)
              VALUES ('$username', '$nama_lengkap', '$file_kartu_keluarga', '$file_ijazah', '$file_shun', '$file_kip', '$file_serti_prestasi')";

    if (mysqli_query($koneksi, $query)) {
        header("Location: berkas_peserta.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
} else {
    echo "gagal upload";
}
?>
