<?php
session_start();

// menghancurkan session pelanggan
session_destroy();
echo "<script>alert('Anda Telah Logout');</script>";
echo "<script>location='index.php';</script>";
?>