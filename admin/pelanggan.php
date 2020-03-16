<h2>Data Pelanggan</h2>

<table class="table table-bordered">
	 <thead>
	 	<tr>
	 		<th>nomor</th>
	 		<th>id_pelanggan</th>
	 		<th>email</th>
	 		<th>pasword_pelanggan</th>
	 		<th>nama_pelanggan</th>
	 		<th>telepon</th>
	 		<th>aksi</th>

	 		
	 	</tr>
	 	</thead>
	 	<tbody>
	 		<? $nomor=1; ?>
	 		<?php $ambil=$koneksi->query("SELECT * FROM Pelanggan");?>
	 		<?php while($pecah = $ambil->fetch_assoc()){?>
	 		<tr>
	 			<td><?php echo $nomor; ?></td>
	 			<td><?php echo $pecah['id_pelanggan']; ?></td>
	 			<td><?php echo $pecah['email']; ?></td>
	 			<td><?php echo $pecah['pasword_pel']; ?></td>
	 			<td><?php echo $pecah['nama_pelanggan']; ?></td>
	 			<td><?php echo $pecah['telepon']; ?></td>
	 			<td>
	 				<a href="index.php?halaman=hapuspelanggan&id=<?php echo $pecah['id_pelanggan'];?>" class="btn-danger btn" class="btn-danger btn">hapus</a>
	 				<a href="index.php?halaman=ubahpelanggan&id=<?php echo $pecah['id_pelanggan'];?>"  class="btn btn-warning">ubah</a>
	 				
	 				
	 			</td>
	 		</tr>
	 		<?php $nomor++;?>
	 		<?php } ?>
	 	</tbody>
	 </table>	
	 <a href="index.php?halaman=tambahpelanggan" class="btn btn-primary">Tambah Pelanggan</a>