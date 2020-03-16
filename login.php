<?php
session_start();
//koneksi ke database
$koneksi = new mysqli("localhost","root","","dbkopi");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login pelanggan</title>
	<link rel="stylesheet"  href="assets/bootstrap/css/bootstrap.min.css">
	<body background="assets/image/backasli.jpg">

	 <style type="text/css">
    .navbar-inverse {background: #8B4513;
        font color: #ffffff;}
</style>
</head>
<body>
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
         <a href="" class="navbar-brand"><font color="#fffff">RumahKopiKiniko.com</a></font>
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
        <li><a href="logout.php"><font color="#fffff">Logout</a></li></font>
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
</nav>

<div class="container">
	<div class="row ">
		<div class="col-md-4">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Login pelanggan</h3>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="email">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" name="password">
					</div>
					<button class="btn btn-primary" name="login">login</button>
					<a href="daftar.php" class="btn btn-primary">daftar</a>
				</form>
			</div>


		</div>

		</div>

	</div>
</div>

<?php
// jika ada tombol simpan(tombol simpan di tekan)
if (isset($_POST["login"])) 
{
	 $email = $_POST["email"];
	 $password = $_POST["password"];
	// lakukan kuery ngecek akun di tabel pelangan di db
	$ambil = $koneksi->query("SELECT * FROM pelanggan WHERE email='$email' AND pasword_pel='$password'");
	//ngitung akun yang terambil
		$akunyangcocok = $ambil->num_rows;

		// jika 1 akun yang cocok , maka di loginkan
		if ($akunyangcocok==1) 
		{
			// anda sukses login
			// mendapatkan akun dlm bentuk aarray
			$akun= $ambil->fetch_assoc();
			//simpan di session pelanggan
			$_SESSION["pelanggan"] = $akun;
			echo "<script>alert('anda sukses login');</script>";
			echo "<script>location='checkout.php';</script>";

		}
		else
		{

			// anda gagal login
			echo "<script>alert('anda gagal login, periksa akun anda');</script>";
			echo "<script>location='login.php';</script>";
		}
}

?>



    
</footer>



</body>
</html>