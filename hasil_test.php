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
    <title>Jadwal Test</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .footer {
            position: bottom;
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
        <!-- Isi halaman lainnya -->
    
    <div class="container"> 
        <table class="table table-bordered" id="myTable">
        <h2 class="display-6">Hasil test</h2>
        <div class="text-left mb-3">
            <a href="form_insert_test.php" class="btn btn-primary">Tambah</a>
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Nilai</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include "koneksi.php";
            
                $peserta = mysqli_query($koneksi,"select * from test");
                ?>
                <?php while($v=mysqli_fetch_array($peserta)):;?>
                    <tr>
                        <td><?php echo $v["id_test"];?></td>
                        <td><?php echo $v["username"];?></td>
                        <td><?php echo $v["nama_lengkap"];?></td>
                        <td><?php echo $v["nilai_test"];?></td>
                        <td><?php echo $v["status"];?></td>

                        <td>
                            <div class="btn-group">
                                <a href="form_update_test.php?id_test=<?php echo $v["id_test"];?> "class="btn btn-warning btn-sm">Edit</a>
                                <a href="hapus_test.php?id_test=<?php echo $v["id_test"];?>" class="btn btn-danger btn-sm">Hapus</a>
                            </div>
                        </td>
                    </tr>
                <?php endwhile;?>
                <!-- Tambahkan baris sesuai dengan data peserta -->
            </tbody>
        </table>
        <div class="text-right mb-2">
                <a href="export_hasil_test.php" class="btn btn-primary btn-sm">Cetak Data</a>
            </div>
    </div>
     <!-- Footer -->
     <div class="footer">
        <p>&copy; 2023 Kelompok 3. All rights reserved.</p>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>
</html>
