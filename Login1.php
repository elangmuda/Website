<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="generator" content="Hugo 0.83.1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link href="Login.css" rel="stylesheet" />
    <title>Login</title>
    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
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
    <!--login-->
    <main class="form-signin text-center">
      <form class="was-validated" method="POST" action="aksi_Login.php">
        <img class="mb-4" src="LOGO-BEM-KMF-SI.png" alt="" width="72" height="72" />
        <h1 class="h3 mb-3 fw-normal">Log In</h1>

        <div class="form-floating">
          <input type="text" class="form-control" id="validationTextarea" placeholder="Masukan Username" required />
          <label for="username">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="validationTextarea" placeholder="Password" required/>
          <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
          <label> <input type="checkbox" value="remember-me" /> Remember me </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Log In</button>
      </form>
      <section id="bottom">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <br />
              <p class="aria-disabled">&copy; 2021 | BEM FSI Unjani</p>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!--akhir login-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
