<?php
$host = "localhost";
$dbname = "db_ppdb";
$user = "root";
$password = "";

try {
    // Buat koneksi PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

    // Set mode error PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    // Tampilkan pesan error jika koneksi gagal
    echo "Koneksi database gagal: " . $e->getMessage();
    exit();
}
?>