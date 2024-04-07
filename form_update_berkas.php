<?php
// Mulai sesi
session_start();

// Cek jika pengguna tidak memiliki level "admin", arahkan ke halaman login
if (!isset($_SESSION['level']) || $_SESSION['level'] !== 'peserta') {
    header("Location: login.php");
    exit();
}
include "koneksi.php";

// Mendapatkan ID data yang akan diupdate dari URL atau dari POST jika form sudah disubmit
$id = $_GET['id_berkas'] ?? $_POST['id_berkas'];

// Mengambil data dari database berdasarkan id_berkas dan sesuai dengan pengguna yang sedang login
$query = "SELECT * FROM berkas WHERE id_berkas = '$id' AND username = '{$_SESSION['username']}'";
$data = mysqli_query($koneksi, $query);
$berkas = mysqli_fetch_assoc($data);

// Periksa apakah pengguna yang sedang login memiliki akses ke berkas yang akan diperbarui
if (!$berkas) {
    echo "Error: Data tidak ditemukan atau Anda tidak memiliki akses.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['file_kartu_keluarga']) && isset($_FILES['file_ijazah']) && isset($_FILES['file_shun']) && isset($_FILES['file_kip']) && isset($_FILES['file_serti_prestasi'])) {
        // Tentukan direktori untuk menyimpan berkas
        $uploadDir = "src/"; // Ganti dengan direktori yang sesuai di server Anda
    
        // Tentukan nama file yang unik
        $username = $_POST['username'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $file_kartu_keluarga = $uploadDir . basename($_FILES['file_kartu_keluarga']['name']);
        $file_ijazah = $uploadDir . basename($_FILES['file_ijazah']['name']);
        $file_shun = $uploadDir . basename($_FILES['file_shun']['name']);
        $file_kip = $uploadDir . basename($_FILES['file_kip']['name']);
        $file_serti_prestasi = $uploadDir . basename($_FILES['file_serti_prestasi']['name']);
    
        // Pindahkan file yang diunggah ke direktori tujuan
        move_uploaded_file($_FILES['file_kartu_keluarga']['tmp_name'], $file_kartu_keluarga);
        move_uploaded_file($_FILES['file_ijazah']['tmp_name'], $file_ijazah);
        move_uploaded_file($_FILES['file_shun']['tmp_name'], $file_shun);
        move_uploaded_file($_FILES['file_kip']['tmp_name'], $file_kip);
        move_uploaded_file($_FILES['file_serti_prestasi']['tmp_name'], $file_serti_prestasi);
    
        // Simpan informasi berkas ke dalam database
        $query = "UPDATE berkas SET username='$username', nama_lengkap='$nama_lengkap', file_kartu_keluarga='$file_kartu_keluarga', file_ijazah='$file_ijazah', file_shun='$file_shun', file_kip='$file_kip', file_serti_prestasi='$file_serti_prestasi' WHERE id_berkas = '$id' AND username = '{$_SESSION['username']}'";
    
        if (mysqli_query($koneksi, $query)) {
            header("Location: berkas_peserta.php");
            exit;
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
        }
    } else {
        echo "gagal upload";
    }
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
        <a class="navbar-brand" href="Dashboard_peserta.php">SMAN 1 Parongpong</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
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
                        <form method="POST" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" name="username" id="username" class="form-control" required value="<?php echo $berkas['username']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="nama_lengkap">Nama:</label>
                                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" required value="<?php echo $berkas['nama_lengkap']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="file_kartu_keluarga">Kartu Keluarga:</label>
                                <input type="file" name="file_kartu_keluarga" id="file_kartu_keluarga" class="form-control" required accept=".pdf" value="<?php echo $berkas['file_kartu_keluarga']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="file_ijazah">Ijazah:</label>
                                <input type="file" name="file_ijazah" id="file_ijazah" class="form-control" required accept=".pdf" value="<?php echo $berkas['file_ijazah']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="file_shun">SHUN:</label>
                                <input type="file" name="file_shun" id="file_shun" class="form-control" required accept=".pdf" value="<?php echo $berkas['file_shun']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="file_kip">KIP:</label>
                                <input type="file" name="file_kip" id="file_kip" class="form-control" required accept=".pdf" value="<?php echo $berkas['file_kip']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="file_serti_prestasi">Sertifikat Prestasi:</label>
                                <input type="file" name="file_serti_prestasi" id="file_serti_prestasi" class="form-control" required accept=".pdf" value="<?php echo $berkas['file_serti_prestasi']; ?>">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
    <p>&copy; 2023 Kelompok 3. All rights reserved.</p>
    </div>
</body>
</html>
