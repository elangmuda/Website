<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        .carousel-item img {
            max-height: 500px;
        }
        .footer {
            background-color: #f8f9fa;
            padding: 10px 0;
            text-align: center;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand" href="index.php">SMAN 1 Parongpong</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="buat_akun.php">Daftar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Isi content -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="Asset/info1.jpg" alt="First slide">
                <div class="carousel-caption">
                    <h3>Selamat Datang!</h3>
                    <p>Selamat datang di PPDB Online. Daftar sekarang untuk bergabung!</p>
                    <a href="buat_akun.php" class="btn btn-primary">Daftar</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="Asset/info2.jpg" alt="Second slide">
                <div class="carousel-caption">
                    <h3>Jelajahi Informasi</h3>
                    <p>Mari jelajahi ada apa saja di PPDB Online!</p>
                    <a href="http://20227901.siap-sekolah.com/sekolah-profil/" class="btn btn-primary">Jelajahi</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Card Profil Sekolah -->
    <div class="container mt-5">
        <h2 class="center">Profil Sekolah</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="Asset/profil_sekolah.jpg" alt="Profil Sekolah">
                    <div class="card-body">
                        <h5 class="card-title">Profil Sekolah</h5>
                        
                        <a href="http://20227901.siap-sekolah.com/sekolah-profil/" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="Asset/Fasilitas.jpg" alt="Fasilitas Sekolah">
                    <div class="card-body">
                        <h5 class="card-title">Fasilitas Sekolah</h5>
                        
                        <a href="https://www.instagram.com/p/ChoBSA_PR8v/" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="Asset/Ekstrakulikuler2.jpg" alt="Ekstrakurikuler">
                    <div class="card-body">
                        <h5 class="card-title">Ekstrakurikuler</h5>
                        
                        <a href="https://www.instagram.com/p/CoV_MGJPNDa/" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Alamat Peta Lembang -->
<div class="container mt-5">
    <h2 class="center">Alamat</h2>
    <div class="row">
        <div class="col-md-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.6704220978336!2d107.57372217464695!3d-6.809883993187668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e1026c55b881%3A0xf4322626ab5aff52!2sSMAN%201%20Parongpong!5e0!3m2!1sid!2sid!4v1687372868174!5m2!1sid!2sid"  width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <!-- <iframe src="https://goo.gl/maps/wrxYecbjaQVkddr46" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
        </div>
    </div>
</div>

<!-- About Us -->
<div class="container mt-5">
    <h2 class="center">About Us</h2>
    <div class="row">
        <div class="col-md-12">
            <p>Selamat datang di PPDB Online! Kami adalah platform yang dirancang untuk memfasilitasi proses Penerimaan Peserta Didik Baru (PPDB) secara daring. Kami berkomitmen untuk memberikan solusi inovatif yang mempermudah para orang tua, siswa, dan lembaga pendidikan dalam melaksanakan proses pendaftaran PPDB secara efisien, transparan, dan adil.</p>
            <p>Kami mengerti bahwa proses PPDB merupakan momen penting bagi setiap siswa dan keluarganya. Oleh karena itu, kami berdedikasi untuk menyediakan lingkungan online yang mudah digunakan dan menyenangkan bagi semua pihak yang terlibat. Dengan menggunakan teknologi terkini, kami telah mengembangkan sistem yang memastikan keadilan dalam penilaian dan penempatan siswa.</p>
        </div>
    </div>
</div>

     <!-- Footer -->
     <div class="footer">
        <p>&copy; 2023 Kelompok 3. All rights reserved.</p>
    </div>
</body>
</html>
