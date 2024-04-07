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
	<title>Data Peserta</title>
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
	<?php 
	include 'koneksi.php';
	?>
 
 <div class="container">
        <div class="table-container">
            
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>No Telpon</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Nilai</th>
                        <th>Asal Sekolah</th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php
                    include "koneksi.php";
                
                    $peserta = mysqli_query($koneksi,"select * from peserta");
                    ?>
                    <?php while($v=mysqli_fetch_array($peserta)):;?>
                        <tr>
                            <td><?php echo $v["id_peserta"];?></td>
                            <td><?php echo $v["nama_lengkap"];?></td>
                            <td><?php echo $v["username"];?></td>
                            <td><?php echo $v["email"];?></td>
                            <td><?php echo $v["no_hp"];?></td>
                            <td><?php echo $v["jenis_kelamin"];?></td>
                            <td><?php echo $v["tanggal_lahir"];?></td>
                            <td><?php echo $v["alamat"];?></td>
                            <td><?php echo $v["nilai_rata_rata"];?></td>
                            <td><?php echo $v["asal_sekolah"];?></td>
                        </tr>
                    <?php endwhile;?>
                    <!-- Tambahkan baris sesuai dengan data peserta -->
                </tbody>
            </table>
 
	<!-- <script>
		window.print();
	</script> -->
 
</body>
<div class="text-left mb-3">
            <a href="http://localhost/Prakp3l/kelola_peserta.php" class="btn btn-primary">Kembali</a>
</html>






