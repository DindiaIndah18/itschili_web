-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2017 at 06:13 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itschillifix`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `idberita` int(5) NOT NULL,
  `judulBerita` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `deskBerita` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`idberita`, `judulBerita`, `deskBerita`, `date`, `link`, `image`) VALUES
(1, 'Blitar Panen Cabai, Pasokan untuk Ramadan Aman', 'Harga cabai di tingkat petani di kisaran Rp 30 ribu per kg sampai dengan Rp 35 ribu per kg.', '2017-05-03', 'http://bisnis.liputan6.com/read/2937966/blitar-panen-cabai-pasokan-untuk-ramadan-aman', 'http://tahuberita.com/wp-content/uploads/2017/01/Cabai-Petani.jpg'),
(2, 'Harga Cabai Melambung, Petani Gorontalo Batal Nikmati Untung', 'Rata-rata harga cabai di kalangan petani di Gorontalo mencapai Rp 80 ribu per kilogram.', '2017-05-16', 'http://regional.liputan6.com/read/2908009/harga-cabai-melambung-petani-gorontalo-batal-nikmati-untung', 'http://cdn2.tstatic.net/tribunnews/foto/bank/images/20140325_000833_petani-cabai-aceh-merana.jpg'),
(3, 'Harga Cabai cabaian Melambung, Petani Gorontalo Batal Nikmati Untung', 'Rata-rata harga cabai di kalangan petani di Gorontalo mencapai Rp 80 ribu per kilogram.', '2017-05-16', 'http://regional.liputan6.com/read/2908009/harga-cabai-melambung-petani-gorontalo-batal-nikmati-untung', 'http://www.iyoiye.id/wp-content/uploads/2016/09/httpberita.beritajatim.combrt985580857-e1473166623714.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(3) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_telp` int(20) NOT NULL,
  `pass` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `nama`, `email`, `no_telp`, `pass`) VALUES
(16, 'wildi zainun j', 'wildizainunj@gmail.com', 2147483647, '46de34a1dd352ec7fd00d70bb11746da'),
(15, 'test', 'test@test.com', 875, '098f6bcd4621d373cade4e832627b4f6'),
(14, 'fikri', 'fikrirbb@gmail.com', 798, 'fb3c6caff4f6092a4a58ca7a4a9a6926'),
(13, 'test1', 'test1', 111, '5a105e8b9d40e1329780d62ea2265d8a'),
(12, 'test', 'test', 0, '098f6bcd4621d373cade4e832627b4f6'),
(11, '1', '1', 1, '1'),
(17, 'testis', 'testiss', 6292, 'faa95453ba3967308e819f789f546b0d'),
(18, 'ilham', 'ilham@gmail.com', 55542, 'b63d204bf086017e34d8bd27ab969f28'),
(19, 'syahbana', 'syah', 86, '418a0cdf69bde721880aa171d2d79d40'),
(20, 'syahbana', 'syah@gmail.com', 86, '418a0cdf69bde721880aa171d2d79d40'),
(21, 'venata fatmala', 'venatafatmala@gmail.com', 2147483647, '6f12d5164b5f02f813af60bc0efc971c'),
(22, 'venata fatmala', 'venatafatmala@gmail.com', 2147483647, '6f12d5164b5f02f813af60bc0efc971c');

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `tgl` date NOT NULL,
  `id_jenis` char(5) NOT NULL,
  `id_pasar` varchar(5) NOT NULL,
  `harga` varchar(35) NOT NULL,
  `idharga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`tgl`, `id_jenis`, `id_pasar`, `harga`, `idharga`) VALUES
('2017-05-30', 'RWT2', '4', '12500', 1),
('2017-05-31', 'RWT3', '4', '14000', 2),
('2017-05-30', 'RWT2', '1', '15000', 3),
('2017-05-30', 'RWT3', '1', '12500', 4),
('2017-05-31', 'RWT2', '4', '11000', 5),
('2017-05-31', 'RWT3', '4', '12000', 6),
('2017-05-31', 'RWT2', '1', '10000', 7),
('2017-05-31', 'RWT3', '1', '14000', 8);

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` char(5) NOT NULL,
  `nama_jenis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`) VALUES
('KRT1', 'Merah Keriting'),
('RWT1', 'Rawit Hijau'),
('RWT2', 'Rawit Lokal Hijau'),
('RWT3', 'Rawait Lokal Putih'),
('RWT4', 'Rawit Super'),
('RWT5', 'Rawit Halus'),
('TW1', 'Merah Besar');

-- --------------------------------------------------------

--
-- Table structure for table `pasar`
--

CREATE TABLE `pasar` (
  `id_pasar` int(5) NOT NULL,
  `nama_pasar` varchar(35) NOT NULL,
  `nama_lokasi` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasar`
--

INSERT INTO `pasar` (`id_pasar`, `nama_pasar`, `nama_lokasi`) VALUES
(1, 'Pasar Baru', 'Lumajang'),
(2, 'Pasar Yosowilangun', 'Lumajang'),
(3, 'Pasar Kunir', 'Lumajang'),
(4, 'Pasar Mangunharjo', 'Probolinggo'),
(5, 'Pasar Sukapura', 'Probolinggo'),
(6, 'Pasar Ketapang', 'Probolinggo'),
(7, 'Pasar Senen', 'Jakarta'),
(8, 'Pasar Turi', 'Jakarta'),
(9, 'Pasar Minggu', 'Jakarta'),
(10, 'Pasar Surian', 'Sumatera'),
(11, 'Pasar Talang Babungo', 'Sumatera'),
(12, 'Pasar Muaro Labuh', 'Sumatera'),
(13, 'Pasar Baru', 'Batam'),
(14, 'Pasar Selasa', 'Batam'),
(15, 'Pasar Rabu', 'Batam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`idberita`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`idharga`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `pasar`
--
ALTER TABLE `pasar`
  ADD PRIMARY KEY (`id_pasar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `idberita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
  MODIFY `idharga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pasar`
--
ALTER TABLE `pasar`
  MODIFY `id_pasar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
