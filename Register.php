<?php

require_once("conn.php");

if(isset($_POST['Register'])){

    // filter data yang diinputkan
    $NamaLengkap = filter_input(INPUT_POST, 'NamaLengkap', FILTER_SANITIZE_STRING);
    $UserName = filter_input(INPUT_POST, 'UserName', FILTER_SANITIZE_STRING);
    // enkripsi password
    $Password = strip_tags($_POST['Password']);
    $Email = filter_input(INPUT_POST, 'Email', FILTER_VALIDATE_EMAIL);
    $Alamat = filter_input(INPUT_POST, 'Alamat', FILTER_SANITIZE_STRING);
    $Level = filter_input(INPUT_POST, 'Level', FILTER_SANITIZE_STRING);

    // menyiapkan query
    $sql = "INSERT INTO user (UserName, Password, Email,  NamaLengkap, Alamat, Level) 
            VALUES (:UserName, :Password, :Email,  :NamaLengkap, :Alamat, :Level)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":NamaLengkap" => $NamaLengkap,
        ":UserName" => $UserName,
        ":Password" => $Password,
        ":Email" => $Email,
        ":Alamat" =>$Alamat,
        ":Level" =>$Level
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: login.php");
}

?>

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
                  Masuk/Daftar
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

        <div class="container mb-2">
          <div class="row justify-content-center">
            <div class="col-md-4">
              <div class="card text-start" style="width: 25rem;">
                <div class="card-header text-center">
                  <h5 class="card-title">Daftar</h5>
                </div>
                <div class="card-body">
                  <form class="m-3" method="POST">
                  <div class="mb-3">
                      <label for="NamaLengkap" class="form-label">Nama Lengkap</label>
                      <input name="NamaLengkap" type="text" class="form-control" placeholder="Nama Lengkap" id="NamaLengkap" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="UserName" class="form-label">User Name</label>
                      <input name="UserName" type="text" class="form-control" placeholder="User name" id="UserName" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="Alamat" class="form-label">Alamat</label>
                      <input name="Alamat" type="text" class="form-control" placeholder="Alamat" id="Alamat" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="Email" class="form-label">Email</label>
                      <input name="Email" type="email" class="form-control" placeholder="Email" id="Email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="Password" class="form-label">Password</label>
                      <input name="Password" type="password" class="form-control" placeholder="Password" id="Password">
                    </div>
                    <div class="mb-3">
                      <label for="Level" class="form-label">Code Registrasi</label>
                      <input name="Level" type="text" class="form-control" placeholder="Code Registrasi" value="Peminjam" id="Level" readonly>
                    </div>
                    <p class=text-danger>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                    </svg>
                      Isi kode registrasi dengan "Peminjam" jika salah mengisi
                      akun tidak akan terdaftar
                    </p>
                    <button type="submit" class="btn btn-primary" name="Register">Submit</button>
                  </form>
                </div>
                <div class="card-footer text-center">
                  <a href="login.php" class="card-link">Masuk</a>
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