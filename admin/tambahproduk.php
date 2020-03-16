<h2>Tambah Produk</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama</label>
        <input type="text" clas="form-control" name="nama">
	</div>
	<div class="form-group">
		<label>Harga (Rp)</label>
		<input type="number" class="form-control" name="harga">
	</div>
	<div class="form-group">
		<label>berat (Gr)</label>
		<input type="number" class="form-control" name="panjang">
	</div>
	<div class="form-group">
		<label>Stok Barang</label>
		<input type="number" class="form-control" name="stok">
	</div>
	<div class="form-group">
		<label>Keterangan</label>
		<textarea class="form-control" name="keterangan" rows="10"></textarea>
	</div>
	<div class="form-group">
		<label>Foto</label>
		<input type="file" class="form-control" name="foto">
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if (isset($_POST['save'])) 
{
	$nama = $_FILES['foto']['name'];
	$lokasi =$_FILES['foto']['tmp_name'];
	move_uploaded_file($lokasi, "../foto_produk/".$nama);
	$koneksi->query("INSERT INTO produk
		(nama_produk,harga_produk,panjang,foto,keterangan,stok_produk)values
		('$_POST[nama]','$_POST[harga]','$_POST[panjang]','$nama','$_POST[keterangan]','$_POST[stok]')");

        echo "<div class='alert alert-into'>Data Tersimpan</div>";
        echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=produk'>";
 		
}
?>