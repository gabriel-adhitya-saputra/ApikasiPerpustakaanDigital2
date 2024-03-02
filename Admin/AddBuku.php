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
              <a class="nav-link" href="AddPetugas.php">Tambah Petugas</a>
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
                  <form class="m-3" method="POST" action="prosesTambahBuku.php" enctype="multipart/form-data">
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
                    <div class="mb-3">
                      <label for="gambar" class="form-label">Gambar</label>
                      <input name="gambar" type="file" class="form-control" accept="image/*" id="gambar" aria-describedby="emailHelp">
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