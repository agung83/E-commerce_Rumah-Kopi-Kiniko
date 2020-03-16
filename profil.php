<?php
session_start();
//koneksi ke database
$koneksi = new mysqli("localhost","root","","dbkopi");


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
            <div class="col-md-9 col-md-push-3">
             <strong><h2>Profil Perusahaan</h2></strong>
             <h3 > Perusahaan Kiniko  adalah suatu usaha kecil menengah bergerak di bidang penggolahan dan minuman Tradisional yang berdiri pada tahun 1981 yang di keluarkan izin sebagai badan usaha kecil no. 453/3122/VII/86288/1986 dengan Kiniko Interprise. Didirikan oleh Alm. Drs. Abdul Aziz Idris.
<hr>
·       Visi :
Membuka Pola Pikir dan Wawasan Penduduk di Nagari Tabek Patah.
<hr>
·       Misi :
Meningkatkan Kesejahteraan Penduduk di Nagari Tabek Patah, Khususnya Batusangkar pada Umumnya Melalui Penyerapan Tenaga Kerja Hasil Panen. Dibawah bimbingan Bapak Ika Suma Hamid mantan Bupati Tanah Datar periode 1985 – 1995, Idealisme Almarhum tetap di pertahankan putra/putrinya, Almarhum menjalankan usaha ini sehingga banyak membantu masyarakat sekitar melalui penyerapan tenaga kerja.
<hr>

·       Maksud Tujuan Pendirian Perusahaan
Melaksanakan anjuran Bapak Presiden Suharto yaitu : Agar sebaiknya industri didirikan di desa sehingga bisa :
<hr>
    1.  Menyerap tenaga kerja
    <hr>
    2.  Memajukan/mencerdaskan masyarakat desa
    <hr>
    3.  Meningkatkan pendapatan masyarakat desa
    <hr>
    4.  Mencegah pengangguran dan urbanisasi.</h3>
            </div>
            <div class="col-md-3 col-md-pull-9">
             <img src="assets/image/back.jpg" style="width:100%; height:600px;">
                



            </div>
            


        </div>

    </div>
    






</section>





