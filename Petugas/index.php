~<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap-5.3.2-dist/css/bootstrap.min.css">
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
              <a class="nav-link" href="../Logout.php">Logout</a>
            </div>
          </div>
        </div>
      </nav>

    <!-- Content -->
    <div class="container" style="padding-top: 4rem">
      <div class="text-center">
        <h1>P  E  T  U  G  A  S</h1>
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
            <td><?php echo $data["BukuID"]; ?></td> 
            <td><?php echo $data["Judul"]; ?></td> 
            <td><?php echo $data["Penulis"];   ?></td> 
            <td><?php echo $data["Penerbit"];   ?></td>
            <td><?php echo $data["TahunTerbit"];   ?></td>  
          </tr>
        </tbody>  
          <?php 
            }
          ?>
      </table>
    </div>
    
</body>
</html>