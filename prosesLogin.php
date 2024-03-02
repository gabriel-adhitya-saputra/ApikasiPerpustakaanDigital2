<?php 
$host = "localhost"; 
$user = "root"; //nama user yang digunakan masuk k database
$password = ""; //password yagn digunakan masuk k database
$database = "Perpus3"; //nama database yang digunakkan
$koneksi = mysqli_connect($host, $user, $password, $database);

//cek koneksi ke database
//jika tidak menampilkan apa-apa artinya koneksi berhasil dilakukan
if (mysqli_connect_errno()){
echo "Koneksi gagal : " . mysqli_connect_error();
}

//mengaktifkan session
session_start();

//mengambil data yang dikirim dari form sebelumnya
$username = $_POST['UserName'];
$password = $_POST['Password'];

//mengambil data user di tabel user
$user = mysqli_query($koneksi, "select * from user where UserName='$username' and Password='$password'");
//menghitung jumlah data
$cek = mysqli_num_rows($user);

//jika username dan password lebih besar dari 0 maka user ditemukan
if($cek > 0){
    $data = mysqli_fetch_assoc($user);
    //jika user adalah admin
    if($data['Level'] == 'Admin001'){
        //buat session username dan levelnya
        $_SESSION['UserName'] = $username;
        $_SESSION['Level'] = 'Admin001';

        //arahkan user admin ke halaman admin
        header('location:Admin/index.php');

    //jika user adalah ketua
    }elseif($data['Level'] == '001Petugas'){
        //buat session username dan levelnya
        $_SESSION['UserName'] = $username;
        $_SESSION['Level'] = '001Petugas';

        //arahkan user ketua ke halaman ketua
        header('location:Petugas/index.php');

    //jika user adalah anggota
    }elseif($data['Level'] == 'Peminjam'){
        //buat session username dan levelnya
        $_SESSION['UserName'] = $username;
        $_SESSION['Level'] = 'Peminjam';

        //arahkan user ketua ke halaman ketua
        header('location:Peminjam/index.php');
    }
}else{
    //jika user tidak ditemukan
    header("location:login.php?pesan=gagal");
}

?>