-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16 Mei 2017 pada 17.41
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sichili`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `judulBerita` varchar(200) NOT NULL,
  `deskBerita` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `link` varchar(200) NOT NULL,
  `image` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`judulBerita`, `deskBerita`, `date`, `link`, `image`) VALUES
('Blitar Panen Cabai, Pasokan untuk Ramadan Aman', 'Harga cabai di tingkat petani di kisaran Rp 30 ribu per kg sampai dengan Rp 35 ribu per kg.', '2017-05-03', 'http://bisnis.liputan6.com/read/2937966/blitar-panen-cabai-pasokan-untuk-ramadan-aman', ''),
('Harga Cabai Melambung, Petani Gorontalo Batal Nikmati Untung', 'Rata-rata harga cabai di kalangan petani di Gorontalo mencapai Rp 80 ribu per kilogram.', '2017-05-16', 'http://regional.liputan6.com/read/2908009/harga-cabai-melambung-petani-gorontalo-batal-nikmati-untung', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `uname` int(15) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`uname`, `pass`, `email`) VALUES
(1, 'fikri', 'fikrirbbh@gmail.com'),
(2, 'fikri', 'fikrirbb@gmail.com'),
(3, 'njir', 'njir@gm.com'),
(4, 'njir2', 'njir2'),
(5, 'test', 'test'),
(6, 'fikrirbb', 'fikrirbb'),
(7, 'dina', 'diba@gmail.com\n'),
(8, 'dina', 'dina@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uname` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
