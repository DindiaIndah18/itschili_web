-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2017 at 04:40 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `itschili`
--

-- --------------------------------------------------------

--
-- Table structure for table `cabai`
--

CREATE TABLE IF NOT EXISTS `cabai` (
`id_cabai` int(3) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jenis` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabai`
--

INSERT INTO `cabai` (`id_cabai`, `nama`, `jenis`) VALUES
(1, 'Cabai Merah', 'Rawit'),
(2, 'Cabai Hijau', 'Biasa');

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE IF NOT EXISTS `harga` (
`id_harga` int(3) NOT NULL,
  `id_cabai` int(3) NOT NULL,
  `harga` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`id_harga`, `id_cabai`, `harga`, `tanggal`, `lokasi`) VALUES
(1, 1, '30000', '2017-05-13', 'Bondowoso'),
(2, 1, '50000', '2017-05-14', 'Bondowoso'),
(3, 1, '60000', '2017-05-15', 'Bondowoso'),
(4, 1, '40000', '2017-05-16', 'Bondowoso'),
(5, 1, '70000', '2017-05-17', 'Bondowoso'),
(6, 1, '80000', '2017-05-18', 'Bondowoso'),
(7, 1, '50000', '2017-05-19', 'Bondowoso'),
(8, 2, '30000', '2017-05-13', 'Bondowoso'),
(9, 2, '50000', '2017-05-14', 'Bondowoso'),
(10, 2, '40000', '2017-05-15', 'Bondowoso'),
(11, 2, '70000', '2017-05-16', 'Bondowoso'),
(12, 2, '10000', '2017-05-17', 'Bondowoso'),
(13, 2, '80000', '2017-05-18', 'Bondowoso'),
(14, 2, '110000', '2017-05-19', 'Bondowoso'),
(15, 1, '200000', '2017-05-20', 'Bondowoso'),
(16, 0, '45000', '2017-05-22', 'jember');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
`id_post` int(3) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_post`, `judul`, `isi`, `kategori`) VALUES
(1, 'nyoba cabe', 'Cara menanam cabai yang baik yaitu pada bulan bulan saja', 'coba'),
(5, 'AA', 'aa', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(3) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `user` varchar(25) NOT NULL,
  `pass` text NOT NULL,
  `level` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabai`
--
ALTER TABLE `cabai`
 ADD PRIMARY KEY (`id_cabai`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
 ADD PRIMARY KEY (`id_harga`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
 ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cabai`
--
ALTER TABLE `cabai`
MODIFY `id_cabai` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
MODIFY `id_harga` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
MODIFY `id_post` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
