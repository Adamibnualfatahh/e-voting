-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Okt 2021 pada 07.46
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kandidat`
--

CREATE TABLE `kandidat` (
  `id` int(11) NOT NULL,
  `nama_kandidat` varchar(100) NOT NULL,
  `nama_calon` varchar(100) NOT NULL,
  `visi_misi` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL DEFAULT '1.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kandidat`
--

INSERT INTO `kandidat` (`id`, `nama_kandidat`, `nama_calon`, `visi_misi`, `foto`) VALUES
(1, 'Calon 1                   ', 'ADAM IBNU ALFATAH', '<p><em><strong>VISI</strong></em></p>\r\n\r\n<p><em>membuat belajar menjadi lebih efektif</em></p>\r\n\r\n<p><em><strong>MISI</strong></em></p>\r\n\r\n<p><em>memperbanyak hari libur</em></p>\r\n', '1_1_upin.png'),
(2, 'Calon 2     ', 'FAJAR RIAN SETYAWAN', '<p><em><strong>VISI</strong></em></p>\r\n\r\n<p><em>membut generasi jaman now lebih pandai</em></p>\r\n\r\n<p><strong><em>MISI</em></strong></p>\r\n\r\n<p><em>menyebar luaskan pemasaran micin diseluruh kantin sekolah</em></p>\r\n', '337-3373577_upin-ipin-clipart-download-gambar-upin-ipin-png.png'),
(3, 'Calon 3  ', 'RIZAL JAYANTORO', '<p><em><strong>VISI</strong></em></p>\r\n\r\n<p><em>menjadikan sekolah lebih bersih dan asri</em></p>\r\n\r\n<p><em><strong>MISI</strong></em></p>\r\n\r\n<p><em>memindahkan sekolah /  pembelajaran di hutan </em></p>\r\n', '3_fizi.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` int(1) NOT NULL COMMENT '1:admin,2:user',
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `nis`, `username`, `password`, `level`, `status`) VALUES
(4, 7283, 'Fajar Rian Setyawan', 'admin', 1, 0),
(12, 7274, 'adam ibnu', 'adam', 1, 0),
(41, 1006, 'Abdul', 'abdul', 2, 1),
(42, 1007, 'fajar', 'fajar', 2, 1),
(43, 1000, 'budi', 'BUDI', 2, 1),
(44, 1002, 'udin', 'asuu', 2, 1),
(45, 1008, 'ibnu', 'ibnu', 2, 1),
(46, 1010, 'adam', 'adam', 2, 1),
(47, 1005, 'rizal jayantoro', 'rizal', 2, 1),
(48, 1003, 'Mbah Alvin', 'alvin', 2, 0),
(49, 1001, 'dhan', 'zerdhan', 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nis`
--

CREATE TABLE `nis` (
  `id` int(11) NOT NULL,
  `nis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nis`
--

INSERT INTO `nis` (`id`, `nis`) VALUES
(8, 1000),
(9, 1001),
(10, 1002),
(11, 1003),
(12, 1004),
(13, 1005),
(14, 1006),
(15, 1007),
(16, 1008),
(17, 1009),
(18, 1010);

-- --------------------------------------------------------

--
-- Struktur dari tabel `suara`
--

CREATE TABLE `suara` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_kandidat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `suara`
--

INSERT INTO `suara` (`id`, `id_user`, `nama_kandidat`) VALUES
(19, 41, '1'),
(20, 42, '2'),
(21, 43, '2'),
(23, 44, '2'),
(24, 45, '1'),
(25, 46, '3'),
(26, 47, '3'),
(27, 49, '2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nis`
--
ALTER TABLE `nis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suara`
--
ALTER TABLE `suara`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kandidat`
--
ALTER TABLE `kandidat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `nis`
--
ALTER TABLE `nis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `suara`
--
ALTER TABLE `suara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
