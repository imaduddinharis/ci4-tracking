-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Bulan Mei 2019 pada 02.00
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trackingapps`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangs`
--

CREATE TABLE `barangs` (
  `id_barang` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `deskripsi_barang` text NOT NULL,
  `pengirim` varchar(100) NOT NULL,
  `email_pengirim` varchar(100) NOT NULL,
  `penerima` varchar(100) NOT NULL,
  `kontak_pengirim` varchar(100) NOT NULL,
  `kontak_penerima` varchar(100) NOT NULL,
  `asal` text NOT NULL,
  `tujuan` text NOT NULL,
  `lat_asal` varchar(100) NOT NULL,
  `lng_asal` varchar(100) NOT NULL,
  `lat_tujuan` varchar(100) NOT NULL,
  `lng_tujuan` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barangs`
--

INSERT INTO `barangs` (`id_barang`, `nama_barang`, `deskripsi_barang`, `pengirim`, `email_pengirim`, `penerima`, `kontak_pengirim`, `kontak_penerima`, `asal`, `tujuan`, `lat_asal`, `lng_asal`, `lat_tujuan`, `lng_tujuan`, `status`, `created_at`, `updated_at`) VALUES
('yvXfERRBQ', 'Jersey Futsal', 'Jersey Futsal Deskripsi', 'Bambang', 'bambang@example.com', 'Sutejo', '1289812982', '1289812982', 'Jl Raya Cilegon, Cilegon, Banten, 42411, Indonesia', 'Surakarta, Jawa Barat, Indonesia', '-6.017389', '106.0537688', '-6.6364977', '108.5328746', 0, '2019-05-04 23:32:55', '2019-05-04 23:32:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasis`
--

CREATE TABLE `lokasis` (
  `id_lokasi` int(11) NOT NULL,
  `id_barang` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lokasis`
--

INSERT INTO `lokasis` (`id_lokasi`, `id_barang`, `longitude`, `latitude`, `alamat`, `deskripsi`, `created_at`, `updated_at`) VALUES
(10, 'yvXfERRBQ', '107.6049539', '-6.9344694', 'Bandung Lautan Api, Jalan Muhammad Toha, Karees Kulon, Bandung, Jawa Barat, 402652, Indonesia', 'Warehouse', '2019-05-04 23:35:08', '2019-05-04 23:35:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `privillege` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`uid`, `email`, `username`, `password`, `privillege`, `created_at`, `updated_at`) VALUES
(1, 'admin@leafletjs.com', 'admin', '49b52492a07b6cfbffb6c72d2804aa7d', 'admin', '2019-05-02 15:06:50', '2019-05-02 15:06:50');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `lokasis`
--
ALTER TABLE `lokasis`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `lokasis`
--
ALTER TABLE `lokasis`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
