<h2>Detail Pemesanan</h2>

<?php
$ambil = $koneksi->query("SELECT * FROM pemesanan JOIN pelanggan
	ON pemesanan.id_pelanggan=pelanggan.id_pelanggan
	WHERE pemesanan.id_pemesanan='$_GET[id]'");
$detail = $ambil->fetch_assoc();
?>


<strong><?php echo $detail['nama_pelanggan']; ?></strong> <br>
<p>
	<?php echo $detail['telepon']; ?> <br>
	<?php echo $detail['email']; ?> 
</p>

<p>
	tanggal: <?php echo $detail['tanggal_pemesanan']; ?> <br>
	total: <?php echo $detail['total_pemesanan']; ?>
</p>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>no</th>
			<th>nama produk</th>
			<th>harga</th>
			<th>jumlah</th>
			<th>subtotal</th>

		</tr>
	</thead>
	<tbody>
	 <?php $nomor=1; ?>
     <?php  $ambil =$koneksi->query("SELECT * FROM pembelian JOIN produk on pembelian.id_produk=produk.id_produk
		where pembelian.id_pemesanan='$_GET[id])'"); ?>
		<?php while($pecah=$ambil->fetch_assoc()){ 
			?>
<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_produk']; ?> </td>
			<td><?php echo $pecah['harga_produk']; ?> </td>
			<td><?php echo $pecah['jumlah']; ?> </td>
			<td>
				<?php echo $pecah['harga_produk']*$pecah['jumlah']; ?>
			</td>
		</tr>
		<?php $nomor++;?>
		<?php } ?>
	</tbody>
</table>
<a href="javascript:window.print()" class="btn btn-success">cetak </a>