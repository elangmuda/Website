<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_periode = $_POST["id_periode"];
    $angkatan = $_POST["angkatan"];
    $tahun = $_POST["tahun"];

    $query = "INSERT INTO periode (id_periode,angkatan, tahun) VALUES ('$id_periode','$angkatan', '$tahun')";

    if (mysqli_query($koneksi, $query)) {
 
        header("Location: periode.php");
        exit();
    } else {

        echo "Error: " . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>
