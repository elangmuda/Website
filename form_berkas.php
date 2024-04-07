<?php
// Mulai sesi
session_start();

// Cek jika pengguna tidak memiliki level "admin", arahkan ke halaman login
if (!isset($_SESSION['level']) || $_SESSION['level'] !== 'peserta') {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Berkas</title>
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
        <a class="navbar-brand" href="http://localhost/Prakp3l/Dashboard_peserta.php">PPDB ONLINE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/Prakp3l/profil_peserta.php">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="jadwal_peserta.php">Jadwal Test</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="hasil_test_peserta.php">Hasil Test</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="berkas_peserta.php">Berkas</a>
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
                        <h2 class="card-title text-center">Form Berkas</h2>
                        <form method="POST" action="aksi_insert_berkas_peserta.php" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" name="username" id="username" class="form-control" required value="<?php echo $_SESSION['username']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="nama_lengkap">Nama:</label>
                                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="file_kartu_keluarga">Kartu Keluarga:</label>
                                <input type="file" name="file_kartu_keluarga" id="file_kartu_keluarga" class="form-control" required accept=".pdf">
                            </div>
                            <div class="form-group">
                                <label for="file_ijazah">Ijazah:</label>
                                <input type="file" name="file_ijazah" id="file_ijazah" class="form-control" required accept=".pdf">
                            </div>

                            <div class="form-group">
                                <label for="file_shun">SHUN:</label>
                                <input type="file" name="file_shun" id="file_shun" class="form-control" required accept=".pdf">
                            </div>
                            <div class="form-group">
                                <label for="file_kip">KIP:</label>
                                <input type="file" name="file_kip" id="file_kip" class="form-control" required accept=".pdf">
                            </div>
                            <div class="form-group">
                                <label for="file_serti_prestasi">Sertifikat Prestasi:</label>
                                <input type="file" name="file_serti_prestasi" id="file_serti_prestasi" class="form-control" required accept=".pdf">
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" value="Submit" class="btn btn-primary">
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
