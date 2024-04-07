<?php
include "koneksi.php";
$nama = $_POST['nama_lengkap'];
$username = $_POST['username'];
$email = $_POST['email'];
$nohp = $_POST['no_hp'];
$jeniskelamin = $_POST['jenis_kelamin'];
$tanggallahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$nilairatarata = $_POST['nilai_rata_rata'];
$asalsekolah = $_POST['asal_sekolah'];

$query = "INSERT INTO peserta (nama_lengkap, username, email, no_hp, jenis_kelamin, tanggal_lahir, alamat, nilai_rata_rata, asal_sekolah) 
          VALUES ('$nama', '$username', '$email', '$nohp', '$jeniskelamin', '$tanggallahir', '$alamat', '$nilairatarata', '$asalsekolah')";
$sql = mysqli_query($koneksi, $query) or die("gagal input" . $query);
header("location: login.php");
?>
