-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 05 Des 2020 pada 03.20
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utswebprog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `b_produk`
--

CREATE TABLE `b_produk` (
  `idprd` int(11) NOT NULL,
  `kodeprd` varchar(30) NOT NULL,
  `namaprd` varchar(30) NOT NULL,
  `hargaprd` double NOT NULL,
  `stokprd` int(11) NOT NULL,
  `detailprd` text NOT NULL,
  `beratprd` float NOT NULL,
  `jenisprd` varchar(30) NOT NULL,
  `fotoprd` text NOT NULL,
  `tglsimpan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `b_produk`
--

INSERT INTO `b_produk` (`idprd`, `kodeprd`, `namaprd`, `hargaprd`, `stokprd`, `detailprd`, `beratprd`, `jenisprd`, `fotoprd`, `tglsimpan`) VALUES
(1, '111', 'Pepsoden', 20000, 3, 'asdasdasd', 1, 'Liquid', 'Screenshot from 2020-08-27 22-39-56.png', '2020-12-05 08:46:58'),
(3, '321', 'Rinso', 20, 10, 'Lengkaplah', 1, 'Bubuk', 'Screenshot from 2020-08-27 22-46-26.png', '2020-12-05 09:09:02'),
(4, '1221', 'Baju', 20000, 4, 'Baju Pria Gaul', 1, 'Halus', 'a.png', '2020-12-05 09:19:14');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `b_produk`
--
ALTER TABLE `b_produk`
  ADD PRIMARY KEY (`idprd`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `b_produk`
--
ALTER TABLE `b_produk`
  MODIFY `idprd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
