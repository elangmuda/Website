<?php
include "koneksi.php";
$id = $_GET['id_jadwal'];

$query = "DELETE FROM jadwal WHERE id_jadwal = '$id'";
if ($koneksi->query($query) === TRUE) {
    echo "Data berhasil dihapus";
    header("location: jadwal.php");
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>
