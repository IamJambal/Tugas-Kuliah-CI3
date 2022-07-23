-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 14 Jul 2022 pada 18.02
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id` int(11) NOT NULL,
  `nama_d` varchar(100) NOT NULL,
  `nim_d` varchar(100) NOT NULL,
  `jurusan_d` varchar(100) NOT NULL,
  `alamat_d` varchar(100) NOT NULL,
  `email_d` varchar(100) NOT NULL,
  `telp_d` varchar(100) NOT NULL,
  `jenis_kel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dosen`
--

INSERT INTO `tb_dosen` (`id`, `nama_d`, `nim_d`, `jurusan_d`, `alamat_d`, `email_d`, `telp_d`, `jenis_kel`) VALUES
(1, 'Toddy Inggil', '1027519488', 'Teknik Informatika', 'Weleri, Kendal', 'toddy@gmail.com', '081234567891', 'Laki-Laki'),
(2, 'Yono Sihotang', '0006546674', 'Teknik Mesin', 'Grogol, Kediri', 'yono123@gmail.com', '0831472350560', 'Laki-Laki'),
(3, 'Jaiman Nashiruddin', '6394695900', 'Teknik Informatika', 'Limpung, Batang', 'nashiruddin@gmail.com', '083458977042', 'Laki-Laki'),
(4, 'Aisyah Putri', '1224929478', 'Komputer Akuntansi', 'Samarinda 31549, Maluku', 'aisyah_putri@gmail.com', '0826577800671', 'Perempuan'),
(5, 'Carla Purnawati', '3350516575', 'Sistem Komputer', 'Medan 38233, Lampung', 'carla@gmail.com', '081208141189', 'Perempuan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
