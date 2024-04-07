<?php
include "koneksi.php";

$nama = $_POST['nama_lengkap'];
$username = $_POST['username'];
$email = $_POST['email'];
$noHp = $_POST['no_hp'];
$jenisKelamin = $_POST['jenis_kelamin'];
$tanggalLahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];


$query = "UPDATE nama_tabel SET nama='$nama', username='$username', email='$email', no_hp='$noHp', jenis_kelamin='$jenisKelamin', tanggal_lahir='$tanggalLahir', alamat='$alamat' WHERE id = 'id_peserta'";

header("location:profil_peserta.php");

?>
