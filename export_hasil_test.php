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
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>export Data</title>
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
    <script>
        window.addEventListener('load', function () {
            window.print();
        });
    </script>
       
    </head>
    <body>
        <!-- Isi halaman lainnya -->
    
    <div class="container"> 
        <table class="table table-bordered">
        <h2 class="display-6">Hasil test</h2>
        <div class="text-left mb-3">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Nilai</th>
                    <th>Status</th>
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

                    </tr>
                <?php endwhile;?>
                <!-- Tambahkan baris sesuai dengan data peserta -->
            </tbody>
        </table>
        <a href="http://localhost/Prakp3l/jadwal.php" class="btn btn-primary">Kembali</a>
    </div>
            
        
        <script src="" async defer></script>
    </body>
</html>