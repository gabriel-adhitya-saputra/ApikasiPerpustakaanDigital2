<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpus Digital</title>
    <link rel="stylesheet" href="../../bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../style.css">
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
              <a class="nav-link" href="#">Tambah Petugas</a>
              <a class="nav-link" href="../Logout.php">Logout</a>
            </div>
          </div>
        </div>
      </nav>

  <!-- content -->
    <div class="justify-content-center text-center" style="padding-top: 4rem;">
        <h1>Ubah Buku</h1>
        <p class="text-danger">Harap Perhatikan Data</p>

        <div class="container mb-2">
          <div class="row justify-content-center">
            <div class="col-md-4">
              <div class="card text-start" style="width: 25rem;">
                <div class="card-header text-center">
                  <h5 class="card-title">Daftar</h5>
                </div>
                <div class="card-body">
                  <form class="m-3" method="POST" action="proses_edit_buku.php">
                  <?php 
                    include "../../conn.php";
                    $sql="select * from buku order by BukuID desc";
                        
                    $hasil=mysqli_query($conn,$sql);
                    $no=0;
                    while ($data = mysqli_fetch_array($hasil)) {
                    $no++;
                  ?>
                    <div class="mb-3">
                      <label for="BukuID" class="form-label">ID Buku:</label>
                      <input type="text" name="BukuID" class="form-control" value="<?php echo $data["BukuID"]; ?>" readonly>
                    </div>
                    <div class="mb-3">
                      <label for="Judul" class="form-label">Judul Buku:</label>
                      <input type="text" name="Judul" class="form-control" value="<?php echo $data["Judul"]; ?>" required>
                    </div>
                    <div class="mb-3">
                      <label for="Penulis" class="form-label">Penulis:</label>
                      <input type="text" name="Penulis" class="form-control" value="<?php echo $data["Penulis"]; ?>" required>
                    </div>
                    <div class="mb-3">
                      <label for="Penerbit" class="form-label">Penerbit :</label>
                      <input type="text" name="Penerbit" class="form-control" value="<?php echo $data["Penerbit"]; ?>" required>
                    </div>
                    <div class="mb-3">
                      <label for="TahunTerbit" class="form-label">Tahun Terbit:</label>
                      <input type="text" name="TahunTerbit" class="form-control" value="<?php echo $data["TahunTerbit"]; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="Register">Submit</button>
                    <?php
                      }
                    ?>
                  </form>
                </div>
                <div class="card-footer text-center">
                  <a href="index.php" class="card-link">Kembali</a>
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

    <script src="../bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>