<h2>Ubah Produk</h2>

<?php
$ambil=$koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
$pecah= $ambil->fetch_assoc();

echo "<pre>";
print_r($pecah);
echo "</pre>";
?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama Produk</label>
		<input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_produk']; ?>">
	</div>
	<div class="form-group">
		<label>Harga Rp</label>
		<input type="number" class="form-control" name="harga" value="<?php echo $pecah['harga_produk']; ?>">
	</div>
	<div class="form-group">
		<label>Berat (Gr)</label>
		<input type="number" class="form-control" name="panjang" value="<?php echo $pecah['panjang']; ?>">
	</div>
	<div class="form-group">
		<label>Stok Barang</label>
		<input type="number" class="form-control" name="stok" value="<?php echo $pecah['stok_produk']; ?>">
	</div>
	<div class="form-group">
		<img src="../foto_produk/<?php echo $pecah['foto'] ?>" width="200"> 
	</div>
	<div class="form-group">
		<label>Ganti Foto</label>
		<input type="file" name="foto" class="form-control">
	</div>
	<div class="form-group">
		<label>Keterangan</label>
	    <textarea name="keterangan" class="form-control" rows="10"><?php echo $pecah['keterangan'];?></textarea>
	</div>
	<button class="btn btn-primary" name="ubah"><img src="assets/img/save.png" width='25' height='25'>ubah</button>


	
</form> 

<?php
if (isset($_POST['ubah'])) 
{
	$namafoto=$_FILES['foto']['name'];
	$lokasifoto = $_FILES['foto']['tmp_name'];
	
	if (!empty($lokasifoto)) 
	{
		move_uploaded_file($lokasifoto, "../foto_produk/$namafoto");

		$koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]',harga_produk='$_POST[harga]',panjang='$_POST[panjang]',foto='$namafoto',keterangan='$_POST[keterangan]',stok_produk='$_POST[stok]'WHERE id_produk='$_GET[id]'");
	}
	else
	{
		$koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]',harga_produk='$_POST[harga]',panjang='$_POST[panjang]',keterangan='$_POST[keterangan]',stok_produk='$_POST[stok]'WHERE id_produk='$_GET[id]'");
	}
	echo "<script>alert('Data produk telah diubah');</script>";
	echo "<script>location='index.php?halaman=produk';</script>";
	}

?>