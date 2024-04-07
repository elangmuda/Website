<?php
// Mulai sesi
session_start();

// Cek jika pengguna tidak memiliki level "admin", arahkan ke halaman login
if (!isset($_SESSION['level']) || $_SESSION['level'] !== 'admin') {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Kelola Berkas Peserta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 10px 0;
            text-align: center;
        }

        .table-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .table-container .btn-primary {
            align-self: flex-end;
            margin-bottom: 10px;
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
        <!-- Isi halaman lainnya -->
    
    <div class="container">
        <div class="table-container">
            <h2 class="display-6">Data Berkas Siswa</h2>
            <div class="text-left mb-3">
            <a href="#" class="btn btn-primary">Tambah</a>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>ID Peserta</th>
                        <th>Nama</th>
                        <th>Kartu Keluarga</th>
                        <th>Ijazah</th>
                        <th>SHUN</th>
                        <th>KIP</th>
                        <th>Sertifikat Prestasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "koneksi.php";
                    
                        $berkas = mysqli_query($koneksi,"select * from berkas");
                        ?>
                        <?php while($v=mysqli_fetch_array($berkas)):;?>
                            <tr>
                                <td><?php echo $v["id_berkas"];?></td>
                                <td><?php echo $v["username"];?></td>
                                <td><?php echo $v["nama_lengkap"];?></td>
                                <td><?php echo $v["file_kartu_keluarga"];?></td>
                                <td><?php echo $v["file_ijazah"];?></td>
                                <td><?php echo $v["file_shun"];?></td>
                                <td><?php echo $v["file_kip"];?></td>
                                <td><?php echo $v["file_serti_prestasi"];?></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                        <?php endwhile;?>
                        <!-- Tambahkan baris sesuai dengan data peserta -->
                </tbody>
            </table>
            <div class="text-right mb-2">
                <a href="export_word.php" class="btn btn-primary btn-sm">Cetak Data</a>
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
