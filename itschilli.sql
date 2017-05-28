-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2017 at 11:59 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itschilli`
--

-- --------------------------------------------------------

--
-- Table structure for table `cabai`
--

CREATE TABLE `cabai` (
  `id_cabai` int(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabai`
--

INSERT INTO `cabai` (`id_cabai`, `nama`, `jenis`) VALUES
(1, 'Lokal Hijau', 'Rawit'),
(2, 'Lokal Putih', 'Rawit'),
(3, 'Super', 'Rawit'),
(4, 'Halus', 'Rawit'),
(5, 'Merah Keriting', 'Merah'),
(6, 'Merah Besar', 'TW');

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `id_komoditas` char(5) NOT NULL,
  `harga` int(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komoditas_cabe`
--

CREATE TABLE `komoditas_cabe` (
  `id_komoditas` char(5) NOT NULL,
  `nama_komoditas` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komoditas_cabe`
--

INSERT INTO `komoditas_cabe` (`id_komoditas`, `nama_komoditas`) VALUES
('RW01', 'Rawit  Lokal Hijau'),
('RW02', 'Rawit Lokal Putih'),
('RW03', 'Rawit Super'),
('RW04', 'Rawit Halus');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` char(5) NOT NULL,
  `nama_lokasi` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `nama_lokasi`) VALUES
('BTM1', 'Batam'),
('JKT1', 'Jakarta'),
('LMJ1', 'Lumajang'),
('PRB1', 'Probolinggo'),
('SMT1', 'Sumatra');

-- --------------------------------------------------------

--
-- Table structure for table `pasar`
--

CREATE TABLE `pasar` (
  `id_pasar` char(5) NOT NULL,
  `nama_pasar` varchar(40) NOT NULL,
  `id_lokasi` char(5) NOT NULL
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
  ADD PRIMARY KEY (`id_komoditas`);

--
-- Indexes for table `komoditas_cabe`
--
ALTER TABLE `komoditas_cabe`
  ADD PRIMARY KEY (`id_komoditas`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `pasar`
--
ALTER TABLE `pasar`
  ADD PRIMARY KEY (`id_pasar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cabai`
--
ALTER TABLE `cabai`
  MODIFY `id_cabai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
