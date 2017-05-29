
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 28 Mei 2017 pada 04.15
-- Versi Server: 10.1.22-MariaDB
-- Versi PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `u968404612_chili`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `idberita` int(5) NOT NULL AUTO_INCREMENT,
  `judulBerita` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `deskBerita` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idberita`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`idberita`, `judulBerita`, `deskBerita`, `date`, `link`, `image`) VALUES
(1, 'Blitar Panen Cabai, Pasokan untuk Ramadan Aman', 'Harga cabai di tingkat petani di kisaran Rp 30 ribu per kg sampai dengan Rp 35 ribu per kg.', '2017-05-03', 'http://bisnis.liputan6.com/read/2937966/blitar-panen-cabai-pasokan-untuk-ramadan-aman', 'http://tahuberita.com/wp-content/uploads/2017/01/Cabai-Petani.jpg'),
(2, 'Harga Cabai Melambung, Petani Gorontalo Batal Nikmati Untung', 'Rata-rata harga cabai di kalangan petani di Gorontalo mencapai Rp 80 ribu per kilogram.', '2017-05-16', 'http://regional.liputan6.com/read/2908009/harga-cabai-melambung-petani-gorontalo-batal-nikmati-untung', 'http://cdn2.tstatic.net/tribunnews/foto/bank/images/20140325_000833_petani-cabai-aceh-merana.jpg'),
(3, 'Harga Cabai cabaian Melambung, Petani Gorontalo Batal Nikmati Untung', 'Rata-rata harga cabai di kalangan petani di Gorontalo mencapai Rp 80 ribu per kilogram.', '2017-05-16', 'http://regional.liputan6.com/read/2908009/harga-cabai-melambung-petani-gorontalo-batal-nikmati-untung', 'http://www.iyoiye.id/wp-content/uploads/2016/09/httpberita.beritajatim.combrt985580857-e1473166623714.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cabai`
--

CREATE TABLE IF NOT EXISTS `cabai` (
  `id_cabai` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) NOT NULL,
  `jenis` varchar(25) NOT NULL,
  PRIMARY KEY (`id_cabai`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `cabai`
--

INSERT INTO `cabai` (`id_cabai`, `nama`, `jenis`) VALUES
(1, 'Cabai Merah', 'Rawit'),
(2, 'Cabai Hijau', 'Biasa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_telp` int(20) NOT NULL,
  `pass` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data untuk tabel `customer`
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
(21, 'venata fatmala', 'venatafatmala@gmail.com', 2147483647, '6f12d5164b5f02f813af60bc0efc971c');

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga`
--

CREATE TABLE IF NOT EXISTS `harga` (
  `id_harga` int(3) NOT NULL AUTO_INCREMENT,
  `id_cabai` int(3) NOT NULL,
  `harga` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  PRIMARY KEY (`id_harga`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data untuk tabel `harga`
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
-- Struktur dari tabel `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id_post` int(3) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`id_post`, `judul`, `isi`, `kategori`) VALUES
(1, 'nyoba cabe', 'Cara menanam cabai yang baik yaitu pada bulan bulan saja', 'coba'),
(5, 'AA', 'aa', 'aa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) NOT NULL,
  `user` varchar(25) NOT NULL,
  `pass` text NOT NULL,
  `level` varchar(6) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
