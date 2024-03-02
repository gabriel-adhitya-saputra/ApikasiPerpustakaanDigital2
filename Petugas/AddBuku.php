<?php

require_once("../conn.php");

if(isset($_POST['Register'])){

    // filter data yang diinputkan
    $Judul = filter_input(INPUT_POST, 'Judul', FILTER_SANITIZE_STRING);
    $Penulis = filter_input(INPUT_POST, 'Penulis', FILTER_SANITIZE_STRING);
    // enkripsi password
    $Penerbit = filter_input(INPUT_POST, 'Penerbit', FILTER_SANITIZE_STRING);
    $TahunTerbit = filter_input(INPUT_POST, 'TahunTerbit', FILTER_SANITIZE_STRING);

    // menyiapkan query
    $sql = "INSERT INTO buku (Judul, Penulis, Penerbit, TahunTerbit) 
            VALUES (:Judul, :Penulis, :Penerbit, :TahunTerbit)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":Judul" => $Judul,
        ":Penulis" => $Penulis,
        ":Penerbit" => $Penerbit,
        ":TahunTerbit" => $TahunTerbit,
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: AddBuku.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="../bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
  <!-- Navbar -->
    <nav class="navbar bg-primary navbar-expand-lg fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
            <img src="../img/29302.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            Perpus Digital Online
          </a>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              <a class="nav-link" href="AddBuku.php">Tambah Buku</a>
              <a class="nav-link" href="../Logout.php">Logout</a>
            </div>
          </div>
        </div>
      </nav>

  <!-- content -->
    <div class="text-center" style="padding-top: 4rem;">
        <h1>Tambah Buku</h1>
        <p class="text-danger">Perhatikan Data Buku</p>

        <div class="container mb-2">
          <div class="row justify-content-center">
            <div class="col-md-4">
              <div class="card text-start" style="width: 25rem;">
                <div class="card-header text-center">
                  <h5 class="card-title">Tambah Buku</h5>
                </div>
                <div class="card-body">
                  <form class="m-3" method="POST">
                  <div class="mb-3">
                      <label for="Judul" class="form-label">Judul Buku</label>
                      <input name="Judul" type="text" class="form-control" placeholder="Judul Buku" id="Judul" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="Penulis" class="form-label">Penulis</label>
                      <input name="Penulis" type="text" class="form-control" placeholder="Penulis" id="Penulis" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="Penerbit" class="form-label">Penerbit</label>
                      <input name="Penerbit" type="text" class="form-control" placeholder="Penerbit" id="Penerbit" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="TahunTerbit" class="form-label">Tahun Terbit</label>
                      <input name="TahunTerbit" type="number" class="form-control" placeholder="Tahun Terbit" id="TahunTerbit" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary" name="Register">Submit</button>
                  </form>
                </div>
                <div class="card-footer text-center">
                  <a href="index.php" class="card-link">Keluar</a>
                </div>                
              </div>
            </div>
          </div>
        </div>        
      </div>
    </div>

  <!-- footer -->
    <footer>
      @Copyright 2024 | Adhitya Saputra❤️
    </footer>

    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>