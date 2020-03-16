<h2>
Data Pemesanan</h2>

<table class="table table-bordered">
	 <thead>
	 	<tr>
	 		<th>nomor</th>
	 		<th>id_pemesanan</th>
	 		<th>id_pelanggan</th>
	 		<th>tanggal_pemesanan</th>
	 		<th>alamat pemesan</th>
	 		<th>total_pemesanan</th>
	 		<th>status</th>
	 		<th>aksi</th>

	 		
	 	</tr>
	 	</thead>
	 	<tbody>
	 		<? $nomor=1; ?>
	 		<?php $ambil=$koneksi->query("SELECT * FROM Pemesanan");?>
	 		<?php while($pecah = $ambil->fetch_assoc()){?>
	 		<tr>
	 			<td><?php echo $nomor; ?></td>
	 			<td><?php echo $pecah['id_pemesanan']; ?></td>
	 			<td><?php echo $pecah['id_pelanggan']; ?></td>
	 			<td><?php echo $pecah['tanggal_pemesanan']; ?></td>
	 			<td><?php echo $pecah['alamat_pengiriman']; ?></td>
	 			<td>Rp. <?php echo $pecah['total_pemesanan']; ?></td>
	 			<td><?php echo $pecah['status']; ?></td>
	 			<td>
	 				<a href="index.php?halaman=detail&id=<?php echo $pecah['id_pemesanan']; ?>" class="btn btn-info btn">detail</a>
	 				
	 				<a href="index.php?halaman=hapuspemesanan&id=<?php echo $pecah['id_pemesanan'];?>" class="btn-danger btn" class="btn-danger btn">hapus</a>


	 				<a href="index.php?halaman=status&id=<?php echo $pecah['id_pemesanan'];?>" class="btn btn-success"">status</a>


	 				

	 			</td>
	 		</tr>
	 		<?php $nomor++;?>
	 		<?php } ?>
	 	</tbody>
	 </table>	
