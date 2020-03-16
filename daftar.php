<?php
session_start();
//koneksi ke database
include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
        <link rel="stylesheet"  href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"  href="assets/font-awesome/css/font-awesome.css">
    <body background="assets/image/backasli.jpg">
      <style type="text/css">
    .navbar-inverse {background: #8B4513;
        font color: #ffffff;}
</style>
    <title>Halaman Registrasi</title>

    
  </head>
  <body>
    <nav class="navbar navbar-inverse">
    <div class="">
        <div class="navbar-header">
        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#naff">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
         <a href="" class="navbar-brand"><font color="#fffff">RumahKopiKiniko.com</a></font>
    </div>
   <div class="collapse navbar-collapse" id="#naff">
        <ul class="nav navbar-nav" >
        <li><a href="index.php"><font color="#fffff">Home</a></li></font>
        <li><a href="produk.php"><font color="#fffff">Produk</a></li></font>
        <li><a href="pemesanan.php"><font color="#fffff">Pemesanan</a></li></font>
        <li><a href=""><font color="#fffff">Profil</a></li></font>
        <li><a href="checkout.php"><font color="#fffff">CheckOut</a></li></font>
        <!-- jika sudah login (ada session pelanggan) -->
        <?php if (isset($_SESSION["pelanggan"])): ?>
        <li><a href="logout.php"><font color="#fffff">Logout</a></li></font>
        <!-- selain itu(blm login )/ blm ada session pelanggan) -->
    <?php else: ?>
        <li><a href="login.php"><font color="#fffff">Login</a></li></font>
    <?php endif ?>
    </ul>
    </div>
</div>
</nav>  
<div class="container">
    <div class="row ">
        <div class="col-md-7">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Daftar pelanggan</h3>
            </div>
            <div class="panel-body">
                <form method="post">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="pasword_pel">
                    </div>
                     <div class="form-group">
                        <label>Re-Password</label>
                        <input type="password" class="form-control" name="pasword_pel">
                    </div>
                     <div class="form-group">
                        <label>Nama Pelanggan</label>
                        <input type="text" class="form-control" name="nama_pelanggan">
                    </div>
                     <div class="form-group">
                        <label>Telepon</label>
                        <input type="number" class="form-control" name="telepon">
                    </div>
                    <button class="btn btn-primary" name="save">Daftar</button>

                    <a href="login.php" class="btn btn-primary">keluar</a>
                  
                </form>
            </div>


        </div>

        </div>

    </div>
</div>    

<?php
if (isset($_POST['save'])) 
{
    
    $koneksi->query("INSERT INTO pelanggan
        (Email,pasword_pel,nama_pelanggan,telepon)values
        ('$_POST[email]','$_POST[pasword_pel]','$_POST[nama_pelanggan]','$_POST[telepon]')");

        echo "<div class='alert alert-into'>Anda sudah terdaftar</div>";
        echo "<meta http-equiv='refresh' content='1;url=login.php'>";
        
}
?>         