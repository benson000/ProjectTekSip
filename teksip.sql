-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2018 pada 11.22
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teksip`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_skripsi`
--

CREATE TABLE `data_skripsi` (
  `id` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `start_date` date NOT NULL,
  `finish_date` date NOT NULL,
  `dosen_pembimbing1` varchar(50) NOT NULL,
  `dosen_pembimbing2` varchar(50) NOT NULL,
  `dosen_penguji1` varchar(50) NOT NULL,
  `dosen_penguji2` varchar(50) NOT NULL,
  `dosen_penguji3` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `deleted-data_skripsi`
--

CREATE TABLE `deleted-data_skripsi` (
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nim` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `finish_date` date NOT NULL,
  `dosen_pembimbing1` varchar(50) NOT NULL,
  `dosen_pembimbing2` varchar(50) NOT NULL,
  `dosen_penguji1` varchar(50) NOT NULL,
  `dosen_penguji2` varchar(50) NOT NULL,
  `dosen_penguji3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `deleted-nilai`
--

CREATE TABLE `deleted-nilai` (
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nim` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nilai_proposal` int(11) NOT NULL,
  `nilai_draf` int(11) NOT NULL,
  `nilai_sidang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nilai_proposal` int(11) NOT NULL,
  `nilai_draf` int(11) NOT NULL,
  `nilai_sidang` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_skripsi`
--
ALTER TABLE `data_skripsi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_skripsi`
--
ALTER TABLE `data_skripsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
