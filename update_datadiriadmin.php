<?php
session_start();

if (!isset($_SESSION['level']) || $_SESSION['level'] !== 'admin') {
    header("Location: login.php");
    exit();
}

include "koneksi.php";

// Mendapatkan ID data yang akan diupdate dari URL atau dari POST jika form sudah disubmit
$id = $_GET['id_peserta'] ?? $_POST['id_peserta'];

// Mengambil data dari database berdasarkan id_peserta
$data = mysqli_query($koneksi, "SELECT * FROM peserta WHERE id_peserta = '$id'");
$peserta = mysqli_fetch_assoc($data);

// Memeriksa apakah form sudah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_peserta = $_POST["id_peserta"];
    $nama_lengkap = $_POST["nama_lengkap"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $no_hp = $_POST["no_hp"];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $nilai_rata_rata = $_POST['nilai_rata_rata'];
    $asal_sekolah =$_POST['asal_sekolah'];

    $query = "UPDATE peserta SET  nama_lengkap='$nama_lengkap', username='$username',email='$email', no_hp='$no_hp',jenis_kelamin='$jenis_kelamin',tanggal_lahir='$tanggal_lahir',alamat='$alamat',nilai_rata_rata='$nilai_rata_rata',asal_sekolah='$asal_sekolah' WHERE id_peserta='$id_peserta'";

    if (mysqli_query($koneksi, $query)) {
        header("Location: kelola_peserta.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
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
                <!-- Menu items -->
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">Form Update Data Diri</h2>
                        <form method="POST" action="">
                            <div class="form-group">
                                <label for="nama_lengkap">Nama:</label>
                                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="<?php echo $peserta['nama_lengkap']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" name="username" id="username" class="form-control" value="<?php echo $peserta['username']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" class="form-control" value="<?php echo $peserta['email']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="no_hp">Telpon:</label>
                                <input type="text" name="no_hp" id="no_hp" class="form-control" value="<?php echo $peserta['no_hp']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="L" value="L" <?php if ($peserta['jenis_kelamin'] === 'L') echo 'checked'; ?> required>
                                    <label class="form-check-label" for="L">L</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="P" value="P" <?php if ($peserta['jenis_kelamin'] === 'P') echo 'checked'; ?> required>
                                    <label class="form-check-label" for="P">P</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir:</label>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="<?php echo $peserta['tanggal_lahir']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat:</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" value="<?php echo $peserta['alamat']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="nilai_rata_rata">Nilai:</label>
                                <input type="text" name="nilai_rata_rata" id="nilai_rata_rata" class="form-control" value="<?php echo $peserta['nilai_rata_rata']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="asal_sekolah">Asal Sekolah:</label>
                                <input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control" value="<?php echo $peserta['asal_sekolah']; ?>" required>
                            </div>
                            <div class="form-group text-center">
                                <input type="hidden" name="id_peserta" value="<?php echo $peserta['id_peserta']; ?>">
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
