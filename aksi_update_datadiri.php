<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_peserta = $_POST["id_peserta"];
    $nama_lengkap = $_POST["nama_lengkap"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $no_hp = $_POST["no_hp"];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $nilai_rata_rata = $_POST['nilai_rata_rata'];
    $asal_sekolah =$_POST['asal_sekolah'];


    $query = "UPDATE peserta SET  nama_lengkap='$nama_lengkap', username='$username',email='$email', no_hp='$no_hp',jenis_kelamin='$jenis_kelamin',tanggal_lahir='$tanggal_lahir',alamat='$alamat',nilai_rata_rata='$nilai_rata_rata',asal_sekolah='$asal_sekolah' WHERE id_peserta='$id_peserta'";

    if (mysqli_query($koneksi, $query)) {
        header("Location: kelola_peserta.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>
