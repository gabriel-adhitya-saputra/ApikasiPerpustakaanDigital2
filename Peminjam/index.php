<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpus Digital</title>
    <link rel="stylesheet" href="../bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
  <!-- Navbar -->
    <nav class="navbar bg-primary navbar-expand-lg fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="../img/29302.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            Perpus Digital Online
          </a>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
              <a class="nav-link" href="">Koleksiku</a>
              <a class="nav-link" href="">Pinjam Buku</a>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Lainnya
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="login.php">Masuk</a></li>
                  <li><a class="dropdown-item" href="../Logout.php">Logout</a></li>
                </ul>
              </li>
            </div>
          </div>
        </div>
      </nav>

  <!-- content -->
    <div class="text-center">
      <div class="row " style="padding-top: 4rem;">
        <div class="col-md-4 justify-content-start ms-2">
          <img id="img1" src="../img/logos.png" alt="" style="width: 50%; height: 50%;">
        </div>
        <div class="col-md-4">
          <h1>Welcome</h1>
          <h3>Perpustakaan Online Terbaik!!!</h3>
        </div>
      </div>
      <div class="row justify-content-center text-start">
        <?php 
          include "../conn.php";
          $sql="select * from buku order by BukuID desc";
          
          $hasil=mysqli_query($conn,$sql);
          
          while ($data = mysqli_fetch_array($hasil)) {
          
        ?>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <?php echo '<img src="' . $data["gambar"] . '" alt="Gambar Buku" width="auto" height="auto">'; ?>
            <div class="card-body">
              <h5 class="card-title"><?php echo $data["Judul"]; ?></h5>
              <p class="card-text"><?php echo $data["Deskripsi"]; ?></p>
              <a href="#" class="btn btn-primary">Beli Buku</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
          <?php echo '<img src="' . $data["gambar"] . '" alt="Gambar Buku" width="auto" height="auto">'; ?>
            <div class="card-body">
              <h5 class="card-title"><?php echo $data["Judul"]; ?></h5>
              <p class="card-text">Buku yang di tulis oleh seorang programer yang sudah bersahabar dengan codingan meerah</p>
              <a href="#" class="btn btn-primary">Beli Buku</a>
            </div>
          </div>
        </div>
          <?php 
            }
          ?>  
      </div>        
    </div>

  <!-- footer -->
    <footer>
      @Copyright 2024 | Adhitya Saputra❤️
    </footer>

  <script src="../bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>