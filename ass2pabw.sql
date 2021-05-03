-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Bulan Mei 2021 pada 17.52
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ass2pabw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ip`
--

CREATE TABLE `ip` (
  `id_ip` int(255) NOT NULL,
  `jumlah_ip` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ip`
--

INSERT INTO `ip` (`id_ip`, `jumlah_ip`, `keterangan`) VALUES
(2, '3,43', 'smester 1'),
(3, '3,83', 'smester 2'),
(5, '3,76', 'smester 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `jenis_kelamin`, `username`, `password`) VALUES
(1, 'idham firhanudin', 'Laki-laki', 'idhamf', '718bf20f717cba869349417c38459fe3'),
(2, 'Nadia ', 'Perempuan', 'nadiaf', '0271b7627e3490fb1a5c046577abb231'),
(3, 'boy', 'perempuan', 'boyah', '48eef6c6303aea4891d39008315cbcd6'),
(4, 'Riska Agustin', 'Perempuan', 'riskaagustin_', 'a61fec1781fc3e2be92403ee1c65342a'),
(5, 'Oja', 'Laki-Laki', 'Ojayen', '08ca93de1e920ebf2cbc291a3ed5e69d');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ip`
--
ALTER TABLE `ip`
  ADD PRIMARY KEY (`id_ip`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ip`
--
ALTER TABLE `ip`
  MODIFY `id_ip` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
