-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Nov 2023 pada 09.44
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_20210121010`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kamar`
--

CREATE TABLE `tbl_kamar` (
  `id_kamar` int(11) NOT NULL,
  `kd_kamar` varchar(15) NOT NULL,
  `no_kamar` varchar(5) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `fasilitas` text NOT NULL,
  `harga` double NOT NULL,
  `stok` int(11) NOT NULL,
  `foto` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_kamar`
--

INSERT INTO `tbl_kamar` (`id_kamar`, `kd_kamar`, `no_kamar`, `jenis`, `fasilitas`, `harga`, `stok`, `foto`, `created_at`, `updated_at`) VALUES
(1, '101', '1', 'Deluxe', 'Bathub', 10000, 2, '1700550224_acreate.png', NULL, NULL),
(3, '102', '12', 'Premium', 'Rooftop', 100000, 12, '1700551903_bupdate.png', '2023-11-21 00:31:43', '2023-11-21 00:31:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_reservasi`
--

CREATE TABLE `tbl_reservasi` (
  `id_reservasi` int(11) NOT NULL,
  `tgl_reservasi` date NOT NULL,
  `nm_customer` varchar(40) NOT NULL,
  `kd_kamar` varchar(15) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` double NOT NULL,
  `foto_kwitansi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_reservasi`
--

INSERT INTO `tbl_reservasi` (`id_reservasi`, `tgl_reservasi`, `nm_customer`, `kd_kamar`, `jumlah`, `total`, `foto_kwitansi`, `created_at`, `updated_at`) VALUES
(1, '2023-11-22', 'Abdul Basith', '102', 12, 100000, '1700556178_ANALISIS REKAM MEDIS _ AEP NURUL HIDAYAH - Google Chrome 11_9_2023 4_40_41 PM.png', '2023-11-21 01:33:19', '2023-11-21 01:42:58');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_kamar`
--
ALTER TABLE `tbl_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indeks untuk tabel `tbl_reservasi`
--
ALTER TABLE `tbl_reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_kamar`
--
ALTER TABLE `tbl_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_reservasi`
--
ALTER TABLE `tbl_reservasi`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
