-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 31. Juli 2017 jam 11:59
-- Versi Server: 5.1.41
-- Versi PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elibrary`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id_admin` varchar(14) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `kelamin` enum('L','P') NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama`, `username`, `password`, `tempat`, `tgl_lahir`, `no_telepon`, `tgl_masuk`, `kelamin`) VALUES
('ADM20170707002', 'wahyu diyantov', 'wahyu', 'wahyu', 'Sragen', '1999-07-08', '0897642374686', '2017-07-25', 'L'),
('ADM20170731001', 'Wiwit Supriyanto', 'wiwit', '123456', 'Bogor', '1998-09-09', '0897523552757', '2017-07-31', 'L');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku`
--

CREATE TABLE IF NOT EXISTS `tb_buku` (
  `id_buku` varchar(14) NOT NULL,
  `tgl_upload` date NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `tipe_file` varchar(10) NOT NULL,
  `ukuran_file` varchar(20) NOT NULL,
  `file` varchar(60) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `jenis` enum('novel','komik','biografi','ensiklopedi','panduan') NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `tgl_upload`, `judul_buku`, `tipe_file`, `ukuran_file`, `file`, `penulis`, `jenis`) VALUES
('BKU20170731001', '2017-07-31', 'Ayat-ayat Cinta', 'pdf', '1870883', '../files/Ayat-ayat Cinta.pdf', 'Habiburrahman El Sirazy', 'novel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konfirmasi`
--

CREATE TABLE IF NOT EXISTS `tb_konfirmasi` (
  `id_konfirmasi` varchar(14) NOT NULL,
  `id_registrasi` varchar(14) NOT NULL,
  `tgl_konfirmasi` date NOT NULL,
  `nominal` int(10) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `no_rekening` varchar(20) NOT NULL,
  `atas_nama` varchar(30) NOT NULL,
  `bukti_transfer` varchar(60) NOT NULL,
  PRIMARY KEY (`id_konfirmasi`),
  UNIQUE KEY `id_registrasi` (`id_registrasi`),
  UNIQUE KEY `id_registrasi_2` (`id_registrasi`),
  UNIQUE KEY `id_registrasi_3` (`id_registrasi`),
  UNIQUE KEY `id_registrasi_4` (`id_registrasi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_konfirmasi`
--

INSERT INTO `tb_konfirmasi` (`id_konfirmasi`, `id_registrasi`, `tgl_konfirmasi`, `nominal`, `bank`, `no_rekening`, `atas_nama`, `bukti_transfer`) VALUES
('KNF20170731001', 'REG20170723001', '2017-07-31', 50000, 'Syariah Mandiri', '65461318623131', 'Andi Irwansyah', 'gambar/images.jpg'),
('KNF20170731002', 'REG20170723002', '2017-07-31', 50000, 'dfca', 'afdaca', 'afca', 'gambar/struk.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_registrasi`
--

CREATE TABLE IF NOT EXISTS `tb_registrasi` (
  `id_registrasi` varchar(14) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `tgl_registrasi` date NOT NULL,
  `kelamin` enum('L','P') NOT NULL,
  PRIMARY KEY (`id_registrasi`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_registrasi`
--

INSERT INTO `tb_registrasi` (`id_registrasi`, `nama`, `username`, `password`, `tempat`, `tgl_lahir`, `no_telepon`, `tgl_registrasi`, `kelamin`) VALUES
('REG20170723003', 'Wiwit Supriyanto', 'wiwit', '123456', 'solo', '1999-07-14', '9656526552', '2017-07-23', 'L'),
('REG20170723001', 'Ari Siswnto', 'ari', '123456', 'Sragen', '1999-02-08', '08995232437', '2017-07-30', 'L');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` varchar(14) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `kelamin` enum('L','P') NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `password`, `tempat`, `tgl_lahir`, `no_telepon`, `tgl_masuk`, `kelamin`) VALUES
('USR20170731001', 'Ari Siswnto', 'ari', '123456', 'Sragen', '1999-02-08', '08995232437', '2017-07-31', 'L');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
