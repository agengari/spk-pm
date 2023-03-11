-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jun 2022 pada 17.47
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pemilihan_makanan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_user` int(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_user`, `username`, `password`, `nama`, `phone`, `email`) VALUES
(1, 'admin', 'admin', 'Ageng', '+628995101187', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `food`
--

CREATE TABLE `food` (
  `id_makanan` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `natrium` float NOT NULL,
  `lemak` float NOT NULL,
  `protein` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `food`
--

INSERT INTO `food` (`id_makanan`, `name`, `natrium`, `lemak`, `protein`) VALUES
(1, 'Nasi', 1.3, 0.39, 3.9),
(3, 'Lupis Ketan', 0, 2.1483, 1.8414),
(4, 'Mie Ayam', 1116, 15.6, 24.8),
(5, 'Yangko', 0, 0.165, 0.45),
(6, 'Gatot', 44.8, 1.12, 2.08),
(7, 'Geblek', 52.95, 0.255, 0.06),
(8, 'Getuk Singkong', 0, 0.98, 0.35),
(9, 'Ongol-ongol sagu', 0, 1.62, 0.18),
(10, 'Tiwul', 7.5, 1.65, 3.6),
(11, 'Geplak', 0, 3.6, 0.35),
(12, 'Rempeyek Kacang', 0, 40.625, 21.875),
(13, 'Tahu Goreng', 5.6, 6.8, 7.76),
(14, 'Tempe Goreng', 7.7, 9.31, 8.575),
(15, 'Tempe Benguk', 0, 0.26, 2.04),
(16, 'Ayam Goreng', 510.4, 35.38, 108.46),
(17, 'Soto Jeroan', 1633.5, 19.35, 53.1),
(18, 'Soto Kudus', 0, 10.35, 11.7),
(19, 'Belut Goreng', 142, 38.8, 51.8),
(20, 'Gurame Asam Manis', 0, 30.3, 38.1),
(21, 'Mi Instan', 1310, 26, 10),
(22, 'Sardines', 290, 3, 11),
(23, 'Tahu Tempe', 29, 35.1, 34.2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `idhasil` int(11) NOT NULL,
  `idproses` int(11) NOT NULL,
  `ncf` double NOT NULL,
  `nsf` double NOT NULL,
  `nt` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`idhasil`, `idproses`, `ncf`, `nsf`, `nt`) VALUES
(23, 1, 3.25, 5, 3.6),
(24, 3, 3.25, 5, 3.6),
(25, 4, 3.5, 5, 3.8),
(26, 5, 3.25, 5, 3.6),
(27, 6, 3.25, 5, 3.6),
(28, 7, 3.25, 5, 3.6),
(29, 8, 3.25, 5, 3.6),
(30, 9, 3.25, 5, 3.6),
(31, 10, 3.25, 5, 3.6),
(32, 11, 3.25, 5, 3.6),
(33, 12, 3.5, 5, 3.8),
(34, 13, 3.75, 5, 4),
(35, 14, 3.75, 5, 4),
(36, 15, 3.25, 5, 3.6),
(37, 16, 4.25, 1.5, 3.7),
(38, 17, 4, 3.5, 3.9),
(39, 18, 3.75, 5, 4),
(40, 19, 3.5, 3.5, 3.5),
(41, 20, 4, 4.5, 4.1),
(42, 21, 3.75, 5, 4),
(43, 22, 3.75, 5, 4),
(44, 23, 4, 4.5, 4.1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id_makanan`);

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`idhasil`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `food`
--
ALTER TABLE `food`
  MODIFY `id_makanan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `idhasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
