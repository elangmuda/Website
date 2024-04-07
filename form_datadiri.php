<!DOCTYPE html>
<html>
<head>
    <title>Data diri</title>
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
        <a class="navbar-brand" href="#">PPDB ONLINE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="http://localhost/Prakp3l/login.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">Form Data Diri</h2>
                        <form method="POST" action="aksi_datadiri.php">
                            <div class="form-group">
                                <label for="nama_lengkap">Nama:</label>
                                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="no_hp">Telpon:</label>
                                <input type="text" name="no_hp" id="no_hp" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="L" value="L" required>
                                    <label class="form-check-label" for="L">L</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="P" value="P" required>
                                    <label class="form-check-label" for="P">P</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir:</label>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat:</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="nilai_rata_rata">Nilai Rata-Rata:</label>
                                <input type="text" name="nilai_rata_rata" id="nilai_rata_rata" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="asal_sekolah">Asal Sekolah:</label>
                                <input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control" required>
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" value="Submit" class="btn btn-primary">
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
