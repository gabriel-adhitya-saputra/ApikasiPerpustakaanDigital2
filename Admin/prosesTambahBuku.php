<?php

require_once("../conn.php");

if(isset($_POST['Register'])){
    // filter data yang diinputkan
    $Judul = filter_input(INPUT_POST, 'Judul', FILTER_SANITIZE_STRING);
    $Penulis = filter_input(INPUT_POST, 'Penulis', FILTER_SANITIZE_STRING);
    $Penerbit = filter_input(INPUT_POST, 'Penerbit', FILTER_SANITIZE_STRING);
    $TahunTerbit = filter_input(INPUT_POST, 'TahunTerbit', FILTER_SANITIZE_NUMBER_INT);

    $gambar = ""; // Inisialisasi, akan diisi dengan path gambar

    // ... (bagian untuk penanganan gambar tetap sama)
    if ($_FILES['gambar']['error'] == 0) {
        $target_dir = "../img/"; // Direktori tempat menyimpan gambar (pastikan direktori ini sudah ada)
        $target_file = $target_dir . basename($_FILES['gambar']['name']);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES['gambar']['tmp_name']);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File bukan gambar.";
            $uploadOk = 0;
        }
        
        // Check file size
        if ($_FILES['gambar']['size'] > 500000) {
            echo "Ukuran gambar terlalu besar.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Hanya gambar dengan format JPG, JPEG, PNG, dan GIF yang diizinkan.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Gambar tidak diunggah.";
        } else {
            // If everything is ok, try to upload file
            if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file)) {
                echo "Gambar berhasil diunggah.";
                $gambar = $target_file;
            } else {
                echo "Error uploading file.";
            }
        }
      }
      
    // menyiapkan query
    $sql = "INSERT INTO buku ( Judul, Penulis, Penerbit, TahunTerbit, gambar) 
            VALUES ( :Judul, :Penulis, :Penerbit, :TahunTerbit, :gambar)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":Judul" => $Judul,
        ":Penulis" => $Penulis,
        ":Penerbit" => $Penerbit,
        ":TahunTerbit" => $TahunTerbit,
        ":gambar" => $gambar, // Sesuaikan dengan nama kolom gambar di tabel
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) {
        echo "Buku berhasil ditambahkan.";
        // Ganti AddBuku.php dengan halaman yang sesuai
        header("Location: AddBuku.php");
    } else {
        echo "Gagal menambahkan buku: " . $stmt->errorInfo()[2];
    }
}

?>
