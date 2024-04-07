<?php
session_start();

if (!isset($_SESSION['level']) || $_SESSION['level'] !== 'admin') {
    header("Location: login.php");
    exit();
}

include "koneksi.php";

$query_jadwal = "SELECT id_test, username FROM jadwal";
$result_jadwal = mysqli_query($koneksi, $query_jadwal);

if (!$result_jadwal) {
    die("Query Error: " . mysqli_error($koneksi));
}

$jadwal_options = array();
while ($row_jadwal = mysqli_fetch_assoc($result_jadwal)) {
    $id_test = $row_jadwal['id_test'];
    $username = $row_jadwal['username'];
    $jadwal_options[$id_test] = $username;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Insert Data</title>
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
    <!-- isi -->
    <div class="container">
        <h2 class="display-6">Form Insert Test</h2>
        <form action="insert_test.php" method="POST">
            <div class="form-group">
                <label for="id_test">ID Test:</label>
                <select class="form-control" id="id_test" name="id_test" required>
                    <?php
                    foreach ($jadwal_options as $id_test => $username) {
                        echo '<option value="' . $id_test . '">' . $id_test . ' - ' . $username . '</option>';
                    }
                    ?>
                </select>
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
                <label for="nama_lengkap">Nama Lengkap:</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
            </div>
            <div class="form-group">
                <label for="nilai_test">Nilai Test:</label>
                <input type="text" class="form-control" id="nilai_test" name="nilai_test" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="status_lulus" name="status" value="Lulus" required>
                    <label class="form-check-label" for="status_lulus">Lulus</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="status_tidak_lulus" name="status" value="Tidak Lulus" required>
                    <label class="form-check-label" for="status_tidak_lulus">Tidak Lulus</label>
                </div>
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
