<?php
include "koneksi.php";
$id = $_GET['id_test'];

$query = "DELETE FROM test WHERE id_test = '$id'";
if ($koneksi->query($query) === TRUE) {
    echo "Data berhasil dihapus";
    header("location: hasil_test.php");
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>
