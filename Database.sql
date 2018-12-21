-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Des 2018 pada 10.02
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental`
--
CREATE DATABASE IF NOT EXISTS `rental` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rental`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `debkret`
--

CREATE TABLE `debkret` (
  `tanggal` date NOT NULL,
  `keterangan` text,
  `debit` int(15) NOT NULL,
  `kredit` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `income`
--

CREATE TABLE `income` (
  `plat` varchar(12) NOT NULL,
  `tanggal` date NOT NULL,
  `cost` int(15) NOT NULL DEFAULT '0',
  `driver` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `infodriver`
--

CREATE TABLE `infodriver` (
  `nama` text NOT NULL,
  `tgllahir` date NOT NULL,
  `email` varchar(33) DEFAULT NULL,
  `nohp` varchar(15) DEFAULT NULL,
  `noktp` varchar(16) NOT NULL,
  `nosim` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `fotodriver` text NOT NULL,
  `fotosim` text NOT NULL,
  `fotoktp` text NOT NULL,
  `fotoskck` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `infomobil`
--

CREATE TABLE `infomobil` (
  `type` varchar(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `plat` varchar(12) NOT NULL,
  `tahun` int(4) DEFAULT NULL,
  `warna` text,
  `hargasewa` int(8) NOT NULL DEFAULT '0',
  `kilometer` int(7) NOT NULL DEFAULT '0',
  `fotomobil` text NOT NULL,
  `fotostnk` text NOT NULL,
  `fotoasuransi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `service`
--

CREATE TABLE `service` (
  `plat` varchar(12) NOT NULL,
  `tanggal` date NOT NULL,
  `km` int(7) NOT NULL,
  `cost` int(15) NOT NULL DEFAULT '0',
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabelmobil`
--

CREATE TABLE `tabelmobil` (
  `plat` varchar(11) NOT NULL,
  `gpsdate` date DEFAULT NULL,
  `tglstnk` date DEFAULT NULL,
  `absen` int(3) DEFAULT '0',
  `tglmaintenance` date DEFAULT NULL,
  `income` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `infomobil`
--
ALTER TABLE `infomobil`
  ADD PRIMARY KEY (`plat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
