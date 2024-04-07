<?php
session_start();

// Cek apakah user memiliki level peserta
if ($_SESSION['level'] !== 'peserta') {
    // Jika tidak, redirect ke halaman login atau halaman lain yang sesuai
    header('Location: login.php'); // Ganti login.php dengan halaman yang sesuai
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>PPDB ONLINE</title>
    <link href="dashboard_peserta.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
        <a class="navbar-brand" href="Dashboard_peserta.php">SMAN 1 Parongpong</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="profil_peserta.php">Profil</a>
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
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <!-- Isi halaman lainnya -->
        <br>
        <div class="welcome">
            <?php if (isset($_SESSION['username'])) : ?>
                <h1 class="display-4">Selamat Datang, <?php echo $_SESSION['username']; ?></h1>
            <?php else : ?>
                <h1 class="display-4">Selamat Datang,</h1>
            <?php endif; ?>
        </div>
        <br>
        <div class="content-img">
         <a href="profil_peserta.php" class="img"><img src="image/profile.png" alt="" ></a>
         <a href="jadwal_peserta.php" class="img"><img src="image/Calendar.png" alt="" ></a>
         <a href="hasil_test_peserta.php" class="img"><img src="image/Result.png" alt="" ></a>
         <a href="berkas_peserta.php" class="img"><img src="image/papers.png" alt="" ></a>
    </div>
    <br><br>
        <div class="info_ppdb text-center">
            <h1>Informasi Seputar</h1>
            <h1>PPDB</h1>
            <p>Merupakan sebuah rangkaian kegiatan sistematik yang dirancang untuk mengatur penyelenggaraan PPDB mulai dari persiapan (pra pendaftaran), pengumuman pendaftaran, pendaftaran dan penyerahan dokumen persyaratan, seleksi hingga batas kuota daya tampung, pengumuman hasil seleksi secara terbuka, hingga daftar ulang.</p>
            <p>Penyelenggaraan PPDB dilaksanakan secara objektif, transparan, dan akuntabel, dilaksanakan pada setiap tahun, dimulai pada awal bulan Mei. Waktu penyelenggaraan PPDB dapat berubah jika terjadi kondisi darurat yang ditetapkan Pemerintah Pusat dan/atau Pemerintah Daerah Provinsi.</p>
        </div>
        <div class="jumbotron mx-auto">
            
            <p class="lead">Lihat hasil test di menu hasil test!</p>
            <hr class="my-4">
            <p>Jika belum lengkapi berkas,lengkapi sekarang untuk mempercepat prosses pendaftaran dan hasil test </p>
            <a class="btn btn-primary btn-lg" href="berkas_peserta.php" role="button">Lengkapi</a>
        </div>
    </div>
    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2023 Kelompok 3. All rights reserved.</p>
    </div>
</body>
</html>
