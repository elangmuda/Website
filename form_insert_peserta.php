<?php
session_start();

if (!isset($_SESSION['level']) || $_SESSION['level'] !== 'admin') {
    header("Location: login.php");
    exit();
}

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

<!DOCTYPE html>
<html>
<head>
    <title>Form Insert Peserta</title>
    <!-- Include file CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .jumbotron {
        margin-top: 100px;
    `   }

        .footer {
            position: fixed;
            width: 100%;
            bottom: 0;
        background-color: #f8f9fa;
        padding: 10px 0;
        text-align: center;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark ">
        <a class="navbar-brand" href="Dashboard.php">SMAN 1 Parongpong</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/Prakp3l/kelola_peserta.php">Kelola Data Peserta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/Prakp3l/berkas_siswa.php">Berkas Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/Prakp3l/jadwal.php">Jadwal Test</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/Prakp3l/hasil_test.php">Hasil Test</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="periode.php">Periode</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tambah_admin.php">Tambah Admin</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Akhir Navbar -->
    <div class="container">
    <h2 class="display-6 text-center">Tambah Peserta</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="id_peserta">ID Peserta:</label>
            <input type="text" class="form-control" id="id_peserta" name="id_peserta" readonly>
        </div>
        <div class="form-group">
            <label for="nama_lengkap">Nama Lengkap:</label>
            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
        </div>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="no_hp">Nomor hp:</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" required>
        </div>
        <div class="form-group">
            <label>Jenis Kelamin:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="L" value="L"  required>
                    <label class="form-check-label" for="L">L</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="P" value="P"  required>
                    <label class="form-check-label" for="P">P</label>
                </div>
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" class="form-control" id="alamat" name="alamat" required>
        </div>
        <div class="form-group">
            <label for="nilai_rata_rata">Nilai Rata-rata:</label>
            <input type="text" class="form-control" id="nilai_rata_rata" name="nilai_rata_rata" required>
        </div>
        <div class="form-group">
            <label for="asal_sekolah">Asal Sekolah:</label>
            <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
<br><br><br>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2023 Kelompok 3. All rights reserved.</p>
    </div>
</body>
</html>
