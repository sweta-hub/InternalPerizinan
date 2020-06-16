-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jun 2020 pada 09.30
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internal_perizinan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `penanaman_modal`
--

CREATE TABLE `penanaman_modal` (
  `id_penanaman_modal` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengendalian`
--

CREATE TABLE `pengendalian` (
  `id_pengendalian` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perizinan`
--

CREATE TABLE `perizinan` (
  `id_perizinan` int(11) NOT NULL,
  `no_izin` varchar(455) NOT NULL,
  `nama_pemilik` varchar(455) NOT NULL,
  `file` varchar(455) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekretariat`
--

CREATE TABLE `sekretariat` (
  `id_sekretariat` int(12) NOT NULL,
  `no_surat` varchar(455) NOT NULL,
  `pengirim` varchar(455) NOT NULL,
  `tanggal` date NOT NULL,
  `perihal` varchar(455) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id_gambar` int(12) NOT NULL,
  `gambar` varchar(455) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `penanaman_modal`
--
ALTER TABLE `penanaman_modal`
  ADD PRIMARY KEY (`id_penanaman_modal`);

--
-- Indeks untuk tabel `pengendalian`
--
ALTER TABLE `pengendalian`
  ADD PRIMARY KEY (`id_pengendalian`);

--
-- Indeks untuk tabel `perizinan`
--
ALTER TABLE `perizinan`
  ADD PRIMARY KEY (`id_perizinan`);

--
-- Indeks untuk tabel `sekretariat`
--
ALTER TABLE `sekretariat`
  ADD PRIMARY KEY (`id_sekretariat`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_gambar`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `penanaman_modal`
--
ALTER TABLE `penanaman_modal`
  MODIFY `id_penanaman_modal` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengendalian`
--
ALTER TABLE `pengendalian`
  MODIFY `id_pengendalian` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `perizinan`
--
ALTER TABLE `perizinan`
  MODIFY `id_perizinan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sekretariat`
--
ALTER TABLE `sekretariat`
  MODIFY `id_sekretariat` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `id_gambar` int(12) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
