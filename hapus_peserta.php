<?php
include "koneksi.php";
$id = $_GET['id_peserta'];

$query = "DELETE FROM peserta WHERE id_peserta = '$id'";
if ($koneksi->query($query) === TRUE) {
    echo "Data berhasil dihapus";
    header("location: http://localhost/Prakp3l/kelola_peserta.php");
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>
