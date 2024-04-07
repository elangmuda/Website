<?php

include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_test = $_POST['id_test'];
    $username = $_POST['username'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $nilai_test = $_POST['nilai_test'];
    $status = $_POST['status'];

    $query_insert = "INSERT INTO test (id_test, username, nama_lengkap, nilai_test, status) VALUES ('$id_test', '$username', '$nama_lengkap', '$nilai_test', '$status')";
    $result_insert = mysqli_query($koneksi, $query_insert);

    if ($result_insert) {
        echo "Data berhasil ditambahkan.";
        header("location: hasil_test.php");
    } else {
        echo "Terjadi kesalahan saat menambahkan data: " . mysqli_error($koneksi);
    }
}

?>
