<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "perpus3";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Tangkap data dari formulir
$book_id = $_POST['BukuID'];
$title = $_POST['Judul'];
$author = $_POST['Penulis'];
$penerbit=$_POST['Penerbit'];
$published_year = $_POST['TahunTerbit'];

// Query untuk memperbarui data buku
$sql = "UPDATE buku SET Judul='$title', Penulis='$author', Penerbit='$penerbit', TahunTerbit='$published_year' WHERE BukuID=$book_id";

if ($conn->query($sql) === TRUE) {
    echo "Buku berhasil diperbarui.";
} else {
    echo "Error updating record: " . $conn->error;
}

header("location:../index.php"); 

// Tutup koneksi
$conn->close();
?>
