-- phpMyAdmin SQL Dump
-- version 2.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2018 at 05:28 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `dbkopi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL auto_increment,
  `username` varchar(255) collate latin1_general_ci NOT NULL,
  `password` varchar(255) collate latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(255) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'admin', 'admin', 'sucivela');

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE `ongkir` (
  `id_ongkir` int(5) NOT NULL auto_increment,
  `nama_kota` varchar(100) collate latin1_general_ci NOT NULL,
  `tarif` int(11) NOT NULL,
  PRIMARY KEY  (`id_ongkir`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ongkir`
--

INSERT INTO `ongkir` (`id_ongkir`, `nama_kota`, `tarif`) VALUES
(1, 'padang', 35000),
(2, 'dumai', 30000),
(3, 'pekanbaru', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL auto_increment,
  `email` varchar(255) collate latin1_general_ci NOT NULL,
  `pasword_pel` varchar(255) collate latin1_general_ci NOT NULL,
  `nama_pelanggan` varchar(255) collate latin1_general_ci NOT NULL,
  `telepon` varchar(255) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_pelanggan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `email`, `pasword_pel`, `nama_pelanggan`, `telepon`) VALUES
(1, 'suciramadhani14@gmail.com', 'suci', 'suci ramadhani', '082391572014'),
(7, 'agunglaksmana23@gmail.com', 'agung', 'agung', '082391580787'),
(14, 'velaveliani14@gmail.com', 'vela', 'vela veliani', '0897560289'),
(20, 'dellarona@gmail.com', 'dela', 'adela', '09877654322'),
(19, 'ririnfebriani14@gmail.com', 'ririn', 'ririn febriani', '09876654331');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL auto_increment,
  `id_pemesanan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nama_produk` varchar(100) collate latin1_general_ci NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `panjang` int(11) NOT NULL,
  `subpanjang` int(11) NOT NULL,
  `subharga` int(11) NOT NULL,
  PRIMARY KEY  (`id_pembelian`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_pemesanan`, `id_produk`, `jumlah`, `nama_produk`, `harga_produk`, `panjang`, `subpanjang`, `subharga`) VALUES
(2, 4, 4, 2, 'Kopi Spesial Kiniko', 55000, 2000, 0, 110000),
(3, 5, 5, 1, 'Ramuan pinang  kopi', 75000, 2000, 0, 75000),
(4, 5, 8, 1, 'Kopi l Robusta Kiniko', 85000, 5000, 0, 85000),
(5, 6, 6, 1, 'Kopi Spesial Kiniko', 75000, 2000, 0, 75000),
(6, 7, 6, 15, 'Kopi Spesial Kiniko', 75000, 2000, 0, 1125000),
(7, 8, 7, 1, 'Kopi Jahe Kiniko', 35000, 2000, 0, 35000),
(8, 9, 6, 75, 'Kopi Spesial Kiniko', 75000, 2000, 0, 5625000),
(9, 9, 7, 1, 'Kopi Jahe Kiniko', 35000, 2000, 0, 35000),
(10, 10, 7, 1, 'Kopi Jahe Kiniko', 35000, 2000, 0, 35000),
(11, 11, 8, 2, 'Kopi l Robusta Kiniko', 85000, 5000, 0, 170000),
(12, 12, 6, 1, 'Kopi Spesial Kiniko', 75000, 2000, 0, 75000),
(13, 14, 5, 23, 'Ramuan pinang  kopi', 75000, 2000, 0, 1725000),
(14, 15, 7, 1, 'Kopi Jahe Kiniko', 35000, 2000, 0, 35000),
(15, 16, 7, 45, 'Kopi Jahe Kiniko', 35000, 2000, 0, 1575000),
(16, 17, 6, 75, 'Kopi Spesial Kiniko', 75000, 2000, 0, 5625000),
(17, 18, 6, 1, 'Kopi Spesial Kiniko', 75000, 2000, 0, 75000),
(18, 19, 6, 1, 'Kopi Spesial Kiniko', 75000, 2000, 0, 75000),
(19, 20, 7, 1, 'Kopi Jahe Kiniko', 35000, 2000, 0, 35000),
(20, 21, 7, 3, 'Kopi Jahe Kiniko', 35000, 2000, 0, 105000);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(22) NOT NULL auto_increment,
  `id_pelanggan` int(22) NOT NULL,
  `id_ongkir` int(11) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `total_pemesanan` int(22) NOT NULL,
  `nama_kota` varchar(100) collate latin1_general_ci NOT NULL,
  `tarif` int(11) NOT NULL,
  `alamat_pengiriman` text collate latin1_general_ci NOT NULL,
  `status` varchar(200) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_pemesanan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=22 ;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_pelanggan`, `id_ongkir`, `tanggal_pemesanan`, `total_pemesanan`, `nama_kota`, `tarif`, `alamat_pengiriman`, `status`) VALUES
(6, 7, 1, '2018-10-26', 110000, 'padang', 35000, 'jln.nanggalo', 'lunas'),
(7, 7, 1, '2018-10-26', 1160000, 'padang', 35000, 'jln.tabing', 'batal'),
(8, 19, 1, '2018-10-26', 70000, 'padang', 35000, 'jln.sungai', 'barang dikirim'),
(5, 1, 1, '2018-10-26', 195000, 'padang', 35000, 'jln.bandabuat', ''),
(9, 1, 1, '2018-10-26', 5695000, 'padang', 35000, 'jln.lubeg', 'lunas'),
(10, 1, 1, '2018-10-26', 70000, 'padang', 35000, 'jln.aru', ''),
(11, 20, 1, '2018-10-26', 205000, 'padang', 35000, 'jln.kopi', ''),
(12, 20, 2, '2018-10-26', 105000, 'dumai', 30000, 'jln.pekanbaRU', ''),
(13, 20, 2, '2018-10-26', 30000, 'dumai', 30000, 'jln.pekanbaRU', ''),
(14, 20, 3, '2018-10-26', 1750000, 'pekanbaru', 25000, 'jln.ololadang', ''),
(15, 7, 2, '2018-10-26', 65000, 'dumai', 30000, 'jln.damar', ''),
(16, 20, 3, '2018-10-26', 1600000, 'pekanbaru', 25000, 'jln.batangkampar no13', ''),
(17, 20, 1, '2018-10-26', 5660000, 'padang', 35000, 'jln.pondok no13', ''),
(18, 1, 1, '2018-10-31', 110000, 'padang', 35000, 'jln.olo ladang', ''),
(20, 1, 1, '2018-11-26', 70000, 'padang', 35000, 'gg', ''),
(21, 1, 1, '2018-12-05', 140000, 'padang', 35000, 'jln.ololhjgjjfhghgh', '');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL auto_increment,
  `nama_produk` varchar(255) collate latin1_general_ci NOT NULL,
  `harga_produk` int(255) NOT NULL,
  `panjang` int(255) NOT NULL,
  `foto` varchar(255) collate latin1_general_ci NOT NULL,
  `keterangan` text collate latin1_general_ci NOT NULL,
  `stok_produk` int(200) NOT NULL,
  PRIMARY KEY  (`id_produk`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `panjang`, `foto`, `keterangan`, `stok_produk`) VALUES
(7, 'Kopi Jahe Kiniko', 35000, 2000, '1.jpg', 'kopi ini  dibuat dengan campuran jahe ,sehingga memberikan sensasi hangat yang sangat pas untuk yang meminumnya', 41),
(6, 'Kopi Spesial Kiniko', 75000, 2000, '2.jpg', 'kopi aroma yang khas kiniko', 43),
(5, 'Ramuan pinang  kopi', 75000, 2000, '4.jpg', 'ramuan mantap untuk diminum', 50),
(8, 'Kopi l Robusta Kiniko', 85000, 5000, '3.jpg', 'mantap', 88),
(9, 'Kopi Pinang', 35000, 2000, '6.jpg', 'mantap', 45);
