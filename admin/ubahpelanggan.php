<h2>Ubah Pelanggan</h2>

<?php
$ambil=$koneksi->query("SELECT * FROM pelanggan WHERE id_pelanggan='$_GET[id]'");
$pecah= $ambil->fetch_assoc();

echo "<pre>";
print_r($pecah);
echo "</pre>";
?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>email</label>
		<input type="text" name="email" class="form-control" value="<?php echo $pecah['email']; ?>">
	</div>
	<div class="form-group">
		<label>password pelanggan</label>
		<input type="text" class="form-control" name="password_pelanggan" value="<?php echo $pecah['pasword_pel']; ?>">
	</div>
	<div class="form-group">
		<label>Nama Pelanggan</label>
		<input type="text" class="form-control" name="nama_pelanggan" value="<?php echo $pecah['nama_pelanggan']; ?>">
	</div>
	<div class="form-group">
		<label>telepon</label>
	    <textarea name="telepon" class="form-control" rows="5"><?php echo $pecah['telepon'];?></textarea>
	</div>
	<button class="btn btn-primary" name="ubah"><img src="assets/img/save.png" width='25' height='25'>ubah</button>


	
</form> 

<?php
if (isset($_POST['ubah'])) 
{
		$koneksi->query("UPDATE pelanggan SET email='$_POST[email]',pasword_pel='$_POST[password_pelanggan]',nama_pelanggan='$_POST[nama_pelanggan]',telepon='$_POST[telepon]'WHERE id_pelanggan='$_GET[id]'");

		
	
	
	echo "<script>alert('Data pelanggan telah diubah');</script>";
	echo "<script>location='index.php?halaman=pelanggan';</script>";
	
}
?>


