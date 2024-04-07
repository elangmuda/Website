<?php
session_start();

if (!isset($_SESSION['level']) || $_SESSION['level'] !== 'admin') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Periode</title>
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
    <div class="container">
    <h2 class="display-6">Periode</h2>
    <form action="insert_periode.php" method="POST">
        <div class="form-group">
            <label for="angkatan">Angkatan:</label>
            <input type="text" class="form-control" id="angkatan" name="angkatan" placeholder="Format angkatan 2 digit terkahir tahun"required>
        </div>
        <div class="form-group">
            <label for="tahun">Tahun Masuk:</label>
            <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Format tahun" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2023 Kelompok 3. All rights reserved.</p>
    </div>
</body>
</html>
