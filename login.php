<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpus Digital</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- Navbar -->
      <nav class="navbar bg-primary navbar-expand-lg fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
            <img src="img/29302.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            Perpus Digital Online
          </a>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              <a class="nav-link" href="#">Features</a>
              <a class="nav-link" href="#">Pricing</a>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Daftar/Masuk
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="login.php">Masuk</a></li>
                  <li><a class="dropdown-item" href="Register.php">Daftar</a></li>
                </ul>
              </li>
            </div>
          </div>
        </div>
      </nav>

  <!-- content -->
    <div class="text-center" style="padding-top: 4rem;">
        <h1>Welcome</h1>
        <h3>Perpustakaan Online Terbaik!!!</h3>

        <div class="container mb-2 ">
          <div class="row justify-content-center">
            <div class="col-md-4">
              <div class="card text-start" style="width: 25rem;">
                <div class="card-header text-center">
                  <h5 class="card-title">Login</h5>
                </div>
                <div class="card-body">
                  <form class="m-3" method="POST" action="prosesLogin.php">
                    <div class="mb-3">
                      <label for="UserName" class="form-label">Username</label>
                      <input name="UserName" type="text" class="form-control" placeholder="Username" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPaPasswordssword1" class="form-label">Password</label>
                      <input name="Password" type="Password" class="form-control" placeholder="Password" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
                <div class="card-footer text-center">
                  <a href="Register.php" class="card-link">Buat Akun</a>
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