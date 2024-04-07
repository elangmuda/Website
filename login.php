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
                    <a class="nav-link" href="http://localhost/Prakp3l/buat_akun.php">Buat Akun</a>
                </li>
        </div>
    </nav>
    <div class="container">
        <h2>Form Login</h2>
        <form class="was-validated" method="POST" action="loginnew.php">
            <!-- awalnya aksi_login-->
            <div class="form-group">
                <label for="username">Username:</label>
                <input class="form-control" type="text" name="username" id="validationTextarea"
                    placeholder="Masukan Username " required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input class="form-control" type="password" name="password" id="validationTextarea"
                    placeholder="Masukan pasword " required>
            </div>
            <div class="form-group">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
</body>

</html>