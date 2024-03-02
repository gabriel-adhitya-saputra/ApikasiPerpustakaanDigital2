~<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../style.css">
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
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Lainnya
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="AddPtugas.php">Tambah Petugas/User</a></li>
                  <li><a class="dropdown-item" href="AddBuku.php">Tambah Buku</a></li>
                  <li><a class="dropdown-item" href="../Logout.php">LOGOUT</a></li>
                </ul>
              </li>
            </div>
          </div>
        </div>
      </nav>

    <!-- Content -->
    <div class="container" style="padding-top: 4rem">
      <div class="text-center">
        <h1>A  D  M  I  N</h1>
      </div>
      <table class="table">
        <a class="info-link" href="AddBuku.php">
          Tambah Buku
        </a>
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">ID Buku</th>
            <th scope="col">Judul</th>
            <th scope="col">Penulis</th>
            <th scope="col">Penebit</th>
            <th scope="col">TahunTerbit</th>
            <th scope="col">Gambar</th></th>
            <th scope="col">Aksi</th></th>
          </tr>
        </thead>
        <?php 
          include "../conn.php";
          $sql="select * from buku order by BukuID desc";
              
          $hasil=mysqli_query($conn,$sql);
          $no=0;
          while ($data = mysqli_fetch_array($hasil)) {
          $no++;
        ?>
        <tbody>
          <tr> 
            <td><?php echo $no;?></td> 
            <td name="BukuID"><?php echo $data["BukuID"]; ?></td> 
            <td><?php echo $data["Judul"]; ?></td> 
            <td><?php echo $data["Penulis"];   ?></td> 
            <td><?php echo $data["Penerbit"];   ?></td>
            <td><?php echo $data["TahunTerbit"];   ?></td>
            <td><?php echo '<img src="' . $data["gambar"] . '" alt="Gambar Buku" width="100" height="100">'; ?></td>
            <td><a href="Hapus/hapusbukuoijnck copy.php?id=<?php echo $data["BukuID"]; ?>">Hapus</a>|<a href="Edit/edit_buku.php">Edit</a></a> </td>  
          </tr>
        </tbody>  
          <?php 
            }
          ?>
      </table>
      <!-- Tabel Petugas -->
      <table class="table">
        <a class="info-link" href="AddPetugas.php">
          Tambah User
        </a>
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">ID User</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Email</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Alamat</th></th>
            <th scope="col">Level</th></th>
            <th scope="col">Aksi</th></th>
          </tr>
        </thead>
        <?php 
          include "../conn.php";
          $sql="select * from user order by UserID desc";
              
          $hasil=mysqli_query($conn,$sql);
          $no=0;
          while ($data = mysqli_fetch_array($hasil)) {
          $no++;
        ?>
        <tbody>
          <tr> 
            <td><?php echo $no;?></td> 
            <td name="BukuID"><?php echo $data["UserID"]; ?></td> 
            <td><?php echo $data["Username"]; ?></td> 
            <td><?php echo $data["Password"];   ?></td> 
            <td><?php echo $data["Email"];   ?></td>
            <td><?php echo $data["NamaLengkap"];   ?></td>  
            <td><?php echo $data["Alamat"];   ?></td>  
            <td><?php echo $data["Level"];   ?></td>  
            <td><a href="Hapus/HapusUser.php?id=<?php echo $data["UserID"]; ?>">Hapus</a>|<a href="Edit/editUser.php">Edit</a></a> </td>  
          </tr>
        </tbody>  
          <?php 
            }
          ?>
      </table>
    </div>
    
    <script src="../bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>