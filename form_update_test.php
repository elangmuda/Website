<?php
session_start();

if (!isset($_SESSION['level']) || $_SESSION['level'] !== 'admin') {
    header("Location: login.php");
    exit();
}

include "koneksi.php";

// Mendapatkan ID data yang akan diupdate dari URL atau dari POST jika form sudah disubmit
$id = $_GET['id_test'] ?? $_POST['id_test'];

// Memeriksa apakah form sudah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
}

// Mengambil data dari database berdasarkan id_peserta
$data = mysqli_query($koneksi, "SELECT * FROM test WHERE id_test = '$id'");
$test = mysqli_fetch_assoc($data);
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
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">Form Update Test</h2>
                        <form method="POST" action="update_test.php">
                            <input type="hidden" name="id_test" value="<?php echo $test['id_test']; ?>">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" name="username" id="username" class="form-control" value="<?php echo $test['username']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_lengkap">Nama:</label>
                                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="<?php echo $test['nama_lengkap']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="nilai_test">Nilai:</label>
                                <input type="text" name="nilai_test" id="nilai_test" class="form-control" value="<?php echo $test['nilai_test']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Status:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="Lulus" value="Lulus" <?php if ($test['status'] === 'Lulus') echo 'checked'; ?> required>
                                    <label class="form-check-label" for="Lulus">Lulus</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="Tidak Lulus" value="Tidak Lulus" <?php if ($test['status'] === 'Tidak Lulus') echo 'checked'; ?> required>
                                    <label class="form-check-label" for="Tidak Lulus">Tidak Lulus</label>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" value="Update" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2023 Kelompok 3. All rights reserved.</p>
    </div>
</body>
</html>
