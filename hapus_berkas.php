<?php
include "koneksi.php";
$id = $_GET['id_berkas'];

$query = "DELETE FROM berkas WHERE id_berkas = '$id'";
if ($koneksi->query($query) === TRUE) {
    echo "Data berhasil dihapus";
    header("location: berkas_siswa.php");
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>
