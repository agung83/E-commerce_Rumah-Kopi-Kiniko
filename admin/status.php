
<h2>Ganti status pemesanan</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>status</label>
        <select class="form-control" name="status">
         <option value="">pilih status</option>
         <option value="lunas">lunas</option>
         <option value="barang dikirim">barang dikirim</option>
         <option value="batal">batal</option>


        </select>
        
    </div>
    <button class="btn btn-primary" name="ubah">Ganti</button>
</form>
<?php
if (isset($_POST['ubah'])) 
{
        $koneksi->query("UPDATE pemesanan SET status='$_POST[status]'WHERE id_pemesanan='$_GET[id]'");

        
    
    
    echo "<script>alert('status pemesanan telah di ubah');</script>";
    echo "<script>location='index.php?halaman=pemesanan';</script>";
    
}
?>