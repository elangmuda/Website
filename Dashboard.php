<?php
// Mulai sesi
session_start();

// Cek jika pengguna tidak memiliki level "admin", arahkan ke halaman login
if (!isset($_SESSION['level']) || $_SESSION['level'] !== 'admin') {
    header("Location: loginnew.php"); //yang diganti awalnya login.php
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>SMAN 1 Parongpong</title>
    <link href="dashboard_peserta.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <style>
    body {
        font-family: Arial, sans-serif;
    }

    .jumbotron {
        margin-top: 100px;
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
        <!-- Isi halaman lainnya -->
        <div class="welcome">
            <?php if (isset($_SESSION['username'])): ?>
            <h1 class="display-4">Selamat Datang,
                <?php echo $_SESSION['username']; ?>
            </h1>
            <?php else: ?>
            <h1 class="display-4">Hello, Admin</h1>
            <?php endif; ?>
        </div>
        <div class="jumbotron mx-auto">
            <h2 class="display-6 text-center">Data Pendaftar</h2>
            <table class="table table-bordered table-striped" id="myTable">
                <thead class="thead-dark">
                    <tr>
                        <th>Nama </th>
                        <th>Tanggal Test</th>
                        <th>Angakatan</th>
                        <th>Nilai Test</th>
                        <th>Status</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "koneksi.php";
                    $peserta = mysqli_query($koneksi, "SELECT p.nama_lengkap, j.tanggal_test, j.angkatan, t.nilai_test,t.status
                                   FROM peserta p
                                   INNER JOIN jadwal j ON p.username = j.username
                                   INNER JOIN test t ON p.username = t.username");

                    ?>
                    <?php while ($v = mysqli_fetch_array($peserta)):
                        ; ?>
                    <tr>
                        <td>
                            <?php echo $v["nama_lengkap"]; ?>
                        </td>
                        <td>
                            <?php echo $v["tanggal_test"]; ?>
                        </td>
                        <td>
                            <?php echo $v["angkatan"]; ?>
                        </td>
                        <td>
                            <?php echo $v["nilai_test"]; ?>
                        </td>
                        <td>
                            <?php echo $v["status"]; ?>
                        </td>


                    </tr>
                    <?php endwhile; ?>
                    <!-- Tambahkan baris sesuai dengan data peserta -->
                </tbody>
            </table>
        </div>
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