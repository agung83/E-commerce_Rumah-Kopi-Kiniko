<?php
session_start();
//koneksi ke database
$koneksi = new mysqli("localhost","root","","dbkopi");



if (!isset($_SESSION['admin'])) 
{
    echo "<script>alert('Anda Harus Login');</script>";
    echo "<script>location='login.php';</script>";
    header('location:login.php');
    exit();
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>[ADMIN] RUMAH KOPI KINIKO BATUSANGKAR</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

   
   
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                  
            </div>
  <div style="color: aquamarine;
padding: 15px 50px 5px 50px;
float: left;
font-size: 40px;">Administrator &nbsp; <a href="login.html" ></a></div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.pn" class="user-image img-responsive"/>
                    </li>
				
					
                    <li> <a href="index.php"><img src="assets/img/home.png" width='45' height='45'></i> home</a></li>
                   <li> <a href="index.php?halaman=pemesanan"><img src="assets/img/Keranjang Shop.png" width='45' height='45'></i>Pemesanan</a></li>
                   <li> <a href="index.php?halaman=produk"><img src="assets/img/paket.jpg" width='45' height='45'></i>Edit Produk</a></li>
                   <li> <a href="index.php?halaman=pelanggan"><img src="assets/img/pelanggan.jpg" width='45' height='35'</i>Edit Pelanggan</a></li>
                   <li> <a href="index.php?halaman=logout"><img src="assets/img/Exit.png" width='45' height='45'</i> logout</a></li>
                   
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php
                if  (isset($_GET['halaman']))
                {
                    if ($_GET['halaman']=="produk")
                    {
                        include 'produk.php';
                    }
                    elseif ($_GET['halaman']=="pemesanan")
                    {
                        include 'pemesanan.php';
                    }
                    elseif ($_GET['halaman']=="pelanggan")
                     {
                        include 'pelanggan.php';
                    }
                    elseif ($_GET['halaman']=="edit")
                    {
                        include 'edit.php';
                    }
                    elseif ($_GET['halaman']=="detail")
                     {
                        include 'detail.php';
                    }
                    elseif ($_GET['halaman']=="tambahproduk")
                    {
                        include 'tambahproduk.php';
                    }
                    elseif ($_GET['halaman']=="tambahpelanggan") 
                    {
                        include 'tambahpelanggan.php';
                    }
                    elseif ($_GET['halaman']=="hapusproduk")
                    {
                        include 'hapusproduk.php';
                    }
                    elseif ($_GET['halaman']=="hapuspelanggan")
                     {
                        include 'hapuspelanggan.php';
                    }
                    elseif ($_GET['halaman']=="ubahproduk")
                     {
                        include 'ubahproduk.php';
                    }
                    elseif ($_GET['halaman']=="ubahpelanggan") 
                    {
                        include 'ubahpelanggan.php';
                    }
                    elseif ($_GET['halaman']=="logout") 
                    {
                        include 'logout.php';
                    }
                    elseif ($_GET['halaman']=="hapuspemesanan") 
                    {
                        include 'hapuspemesanan.php';
                    }
                    elseif ($_GET['halaman']=="status")
                    {
                      include 'status.php';

                    }

                }
                else
                {
                    include 'home.php';
                }

                ?>
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
