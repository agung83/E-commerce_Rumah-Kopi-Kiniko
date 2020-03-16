<?php
session_start();
$id_produk=$_GET["id"];
unset($_SESSION["pemesanan"][$id_produk]);

echo "<script>alert('produk dihapus dari pemesanan');</script>";
echo "<script>location='pemesanan.php';</script>";
?>