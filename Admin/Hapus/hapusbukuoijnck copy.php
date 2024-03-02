<?php
include "../../conn.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus relasi terlebih dahulu
    $sqlDeleteRelasi = "DELETE FROM kategoribuku_relasi WHERE BukuID=$id";

    if ($conn->query($sqlDeleteRelasi) === TRUE) {
        // Setelah berhasil menghapus relasi, lanjutkan dengan menghapus buku
        $sqlDeleteBuku = "DELETE FROM buku WHERE BukuID=$id";

        if ($conn->query($sqlDeleteBuku) === TRUE) {
            echo "Buku berhasil dihapus.";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } else {
        echo "Error deleting relations: " . $conn->error;
    }
} else {
    echo "ID buku tidak ditemukan.";
}

header("location:../index.php");

// Tutup koneksi
$conn->close();
?>
