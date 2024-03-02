<?php
include "../../conn.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk menghapus data buku berdasarkan ID
    $sql = "DELETE FROM user WHERE UserID=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Buku berhasil dihapus.";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "ID buku tidak ditemukan.";
}

header("location:../index.php"); 

// Tutup koneksi
$conn->close();
?>
