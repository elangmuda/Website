<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
     <!-- Include file CSS Bootstrap -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style_login.css">
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
                <li class="nav-item ">
                    <a class="nav-link" href="http://localhost/Prakp3l/login.php">Login</a>
                </li>
        </div>
    </nav>
    <body>
    <div class="container">
        <h2>Form Pendaftaran Akun</h2>
        <form method="POST" action="aksi_akun.php">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Daftar">
            </div>
        </form>
    </div>
</body>
</html>
