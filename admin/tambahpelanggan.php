<h2>Tambah Pelanggan</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Email</label>
        <textarea class="form-control" name="email" rows="2"> </textarea> 
	</div>
	<div class="form-group">
		<label>Pasword Pelanggan</label>
		<input type="text" class="form-control" name="pasword_pel">
	</div>
	<div class="form-group">
		<label>Nama Pelanggan</label>
		<input type="text" class="form-control" name="nama_pelanggan">
	</div>
	<div class="form-group">
		<label>telepon</label>
		<input type="number" class="form-control" name="telepon" ></textarea>
	</div>

	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if (isset($_POST['save'])) 
{
	
	$koneksi->query("INSERT INTO pelanggan
		(email,pasword_pel,nama_pelanggan,telepon)values
		('$_POST[email]','$_POST[pasword_pel]','$_POST[nama_pelanggan]','$_POST[telepon]')");

        echo "<div class='alert alert-into'>Data Tersimpan</div>";
        echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=pelanggan'>";
 		
}
?>