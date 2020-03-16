<?php

$ambil = $koneksi->query("SELECT * FROM pemesanan WHERE id_pemesanan='$_GET[id]'");
$pecah = $ambil->fetch_assoc();



$koneksi->query("DELETE FROM pemesanan WHERE id_pemesanan='$_GET[id]'");

echo "<script>alert('Data pemesanan terhapus');</script>";
echo "<script>location='index.php?halaman=pemesanan';</script";

?>