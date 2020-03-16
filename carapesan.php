<?php
session_start();
//koneksi ke database
include 'koneksi.php';



?>
<!DOCTYPE html>
<html>
<head>
    <title>Rumah Kopi Kiniko Batusangkar</title>

    <link rel="stylesheet"  href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"  href="assets/font-awesome/css/font-awesome.css">
    <link rel="stylesheet"  href="assets/owlcarousel/css/owl.carousel.min.css">
     <link rel="stylesheet"  href="assets/owlcarousel/css/owl.theme.default.min.css">
     <link rel="stylesheet"  href="assets/dist/css/main.css">

     <body background="assets/image/backgroundbati1.jpg">
       

        <style type="text/css">
    .navbar-inverse {background: #8B4513;
        font color: #ffffff;}
</style>

    <style type="text/css">
    .panel-footer {background: #8B4513;
        font color: #ffffff;}
</style>


</head>
<body style="background-color: #D2B48C">
    
<header class="header">
    <div class="container">
         <div class="row">
            <div ></div>
           
        </div>
       
    </div>
</header>
<!-- navbar --> 
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
         <a href="" class="navbar-brand"><font color="#7CFC00">RumahKopiKiniko.com</a></font>
    </div>
   <div class="collapse navbar-collapse" id="#naff">
        <ul class="nav navbar-nav" >

        <li><a href="index.php"><font color="#fffff"><button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home
</button></a></li></font>


           <li><a href="produk.php"><font color="#fffff"><button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> Produk
</button></a></li></font>

        <li><a href="pemesanan.php"><font color="#fffff"><button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> Pemesanan
</button></a></li></font>
        
        
        <li><a href="profil.php"><font color="#fffff"><button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-book" aria-hidden="true"></span>Profil
</button></a></li></font>

         <li><a href="carapesan.php"><font color="#fffff"><button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Cara pesan
</button></a></li></font>

        <!-- jika sudah login (ada session pelanggan) -->
        <?php if (isset($_SESSION["pelanggan"])): ?>

        <li><a href="logout.php"><font color="#fffff"><button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-open" aria-hidden="true"></span> logout
</button></a></li></font>

        <!-- selain itu(blm login )/ blm ada session pelanggan) -->
    <?php else: ?>

        <li><a href="login.php"><font color="#fffff"><button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-open" aria-hidden="true"></span> login
</button></a></li></font>

    <?php endif ?>
    </ul>
    </div>
</div>
</nav> 



<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-push-1">
                <div class="panel panel-primary">
                    <div class="panel-heading">
             <strong><h2>Cara Pemesanan</h2></strong>
             <h4>1. silahkan pilih menu produk dan kemudian pilih lah produk yang kami sediakan
                <br>
                <br> 2. setelah ada memilih produk kami silahkan tekan/klik tombol pesan <br>
                <br> 3. dan kemudian ada akan di arahkan ke menu pemesanan<br>
                <br> 4. silahkan ada baca dengan sangat teliti produk yang anda pesan<br>
                <br> 5. jika anda sudah yakin dengan produk yang anda pilih silahkan tekan tombol checkout<br>
                <br> 6. kemudian anda akah di arahkan ke menu login(silahkan masukan email dan password anda)<br>
                <br> 7. jika anda bukan pelanggan tetap di rumah kopi kiniko silahkan anda melakukan pendaftaran
                        (dengan cara klik tombol daftar di menu login)<br>
                <br> 8. jikan anda sudah login atau sudah mendaftar silahkan anda pilih ongkir dan isi alamat yang benar<br>
                <br> 9. kemudian tekan checkout dan anda akan di arahkan ke nota pemesanan<br>
                <br>10. kemudian silahkan anda cetak nota pemesanan dengan cara tekan tombol print warna hijau<br>
                <br> <CENTER><STRONG>(SEKIAN TERIMAH KASIH)</STRONG></CENTER>       




            </h4>
        </div>
    </div>
            </div>
           
             
                



            </div>
            


        </div>

    </div>
    






</section>

<hr>
<hr>
<hr>



    
       <center>  <div class="panel-footer"><font color="#fffff">CopyRight 2018 SV</div></font></center>
</div>
    </div>
    
</footer>
</center>