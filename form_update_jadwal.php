<?php
session_start();

if (!isset($_SESSION['level']) || $_SESSION['level'] !== 'admin') {
    header("Location: login.php");
    exit();
}
include "koneksi.php";
if (isset($_GET['id_jadwal'])) {
    $id = $_GET['id_jadwal'];
} elseif (isset($_POST['id_jadwal'])) {
    $id = $_POST['id_jadwal'];
} else {
    $id = '';
}
$data = mysqli_query($koneksi, "SELECT * FROM jadwal WHERE id_jadwal = '$id'");
$jadwal = mysqli_fetch_assoc($data);

// Memeriksa apakah form sudah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Proses update data
    // ...
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Update Data</title>
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
        background-color: #f8f9fa;
        padding: 10px 0;
        text-align: center;
        }
    </style>
</head>
<body>
   <!-- Navbar -->
   <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand" href="Dashboard.php">SMAN 1 Parongpong</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
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
                    <a class="nav-link" href="tambah_admin.php">Tambah Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="periode.php">Periode</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
<!-- isi -->
<div class="container">
    <h2 class="display-6">Update Jadwal Test</h2>
    <form action="update_jadwal.php" method="POST">
        <div class="form-group">
            <label for="id_test">ID Test:</label>
            <input type="text" class="form-control" id="id_test" name="id_test" value="<?php echo $jadwal["id_test"]; ?>" required>
        </div>
        <div class="form-group">
            <label for="username">ID Username:</label>
            <input type="text" class="form-control" id="username" name="username" value="<?php echo $jadwal["username"]; ?>" required>
        </div>
        <div class="form-group">
            <label for="tanggal_test">Tanggal Test:</label>
            <input type="date" class="form-control" id="tanggal_test" name="tanggal_test" value="<?php echo $jadwal["tanggal_test"]; ?>" required>
        </div>
        <div class="form-group">
            <label for="tempat">Tempat:</label>
            <input type="text" class="form-control" id="tempat" name="tempat" value="<?php echo $jadwal["tempat"]; ?>" required>
        </div>
        <div class="form-group">
            <label for="angkatan">Angkatan/Periode:</label>
            <input type="text" class="form-control" id="angkatan" name="angkatan" value="<?php echo $jadwal["angkatan"]; ?>" required>
        </div>
        <input type="hidden" name="id_jadwal" value="<?php echo $jadwal['id_jadwal']; ?>">
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2023 Kelompok 3. All rights reserved.</p>
    </div>
</body>
</html>
