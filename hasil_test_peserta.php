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
    <title>Kelola Data Peserta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .footer {
            position: fixed;
            width: 100%;
            bottom: 0;
            background-color: #f8f9fa;
            padding: 10px 0;
            text-align: center;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .card-container {
            width: 80%;
            margin-top: 20px;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f8f9fa;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        .card-title {
            margin: 0;
            font-size: 18px;
        }

        .btn-primary {
            margin-right: 5px;
        }

        .card-body {
            padding: 0;
        }

        .profile-card {
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ccc;
        }

        .profile-card span {
            font-weight: bold;
        }

        .profile-card .btn {
            margin-right: 5px;
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
    <!-- Isi halaman lainnya -->
    <div class="container">
        <div class="card-container">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Hasil Test</h2>
                    
                </div>
                <div class="card-body">
                    <?php
                    include "koneksi.php";
                
                    $username = $_SESSION['username'];
                    $peserta = mysqli_query($koneksi,"SELECT * FROM test WHERE username = '$username'");
                    $data_peserta = mysqli_fetch_assoc($peserta);
                    ?>
                    <?php
                    if ($data_peserta) {
                        ?>
                    <div class="profile-card">
                        <div>
                            <span>ID Test:</span> <?php echo $data_peserta["id_test"];?><br>
                            <span>Username:</span> <?php echo $data_peserta["username"];?><br>
                            <span>Nama:</span> <?php echo $data_peserta["nama_lengkap"];?><br>
                            <span>Nilai:</span> <?php echo $data_peserta["nilai_test"];?><br>
                            <span>Status:</span> <?php echo $data_peserta["status"];?><br>
                        
                        </div>
                        <?php
                    } else {
                        echo "Hasil belum ada.";
                    }
                    ?>
                        <div>
                           
                        </div>
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
