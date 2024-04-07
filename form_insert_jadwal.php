<?php
session_start();

if (!isset($_SESSION['level']) || $_SESSION['level'] !== 'admin') {
    header("Location: login.php");
    exit();
}

include "koneksi.php";

$query_jadwal = "SELECT id_peserta, username FROM peserta";
$result_jadwal = mysqli_query($koneksi, $query_jadwal);

if (!$result_jadwal) {
    die("Query Error: " . mysqli_error($koneksi));
}

$jadwal_options = array();
while ($row_jadwal = mysqli_fetch_assoc($result_jadwal)) {
    $id_peserta = $row_jadwal['id_peserta'];
    $username = $row_jadwal['username'];
    $jadwal_options[$id_peserta] = $username;
}

$query_angkatan = "SELECT angkatan FROM periode";
$result_angkatan = mysqli_query($koneksi, $query_angkatan);

if (!$result_angkatan) {
    die("Query Error: " . mysqli_error($koneksi));
}

$angkatan_options = array();
while ($row_angkatan = mysqli_fetch_assoc($result_angkatan)) {
    $angkatan = $row_angkatan['angkatan'];
    $angkatan_options[] = $angkatan;
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
        }

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
    <div class="container">
        <h2 class="display-6">Tambah Jadwal Test</h2>
        <form action="insert_jadwal.php" method="POST">
            <div class="form-group">
                <label for="id_test">ID Test:</label>
                <input type="text" class="form-control" id="id_test" name="id_test" required>
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <select class="form-control" id="username" name="username" required>
                    <?php
                    foreach ($jadwal_options as $id_test => $username) {
                        echo '<option value="' . $username . '">' . $username . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal_test">Tanggal Test:</label>
                <input type="date" class="form-control" id="tanggal_test" name="tanggal_test" required>
            </div>
            <div class="form-group">
                <label for="tempat">Tempat:</label>
                <input type="text" class="form-control" id="tempat" name="tempat" required>
            </div>
            <div class="form-group">
                <label for="angkatan">Angkatan:</label>
                <select class="form-control" id="angkatan" name="angkatan" required>
                    <?php
                    foreach ($angkatan_options as $angkatan) {
                        echo '<option value="' . $angkatan . '">' . $angkatan . '</option>';
                    }
                    ?>
                </select>
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
