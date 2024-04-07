<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksinew.php';

// fungsi untuk memvalidasi input
function validateInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// menangkap data yang dikirim dari form login
$username = validateInput($_POST['username']);
$password = validateInput($_POST['password']);

// menyiapkan query dengan PDO Parameterized Query
$stmt = $pdo->prepare("SELECT * FROM login WHERE username = :username AND password = :password");

// bind parameter dengan variabel
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);

// mengeksekusi query
$stmt->execute();

// mendapatkan hasil query
$data = $stmt->fetch();

// cek apakah username dan password di temukan pada database
if ($data) {

    // cek jika user login sebagai admin
    if ($data['level'] == "admin") {

        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";

        // alihkan ke halaman dashboard admin
        header("location: Dashboard.php");

    } else if ($data['level'] == "peserta") {

        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "peserta";

        // alihkan ke halaman dashboard pegawai
        header("location: Dashboard_peserta.php");

    } else {

        // alihkan ke halaman login kembali
        header("location: loginnew.php?pesan=gagal"); //awalnya login.php
    }

} else {

    header("location: loginnew.php?pesan=gagal"); //awalnya login.php
}

?>