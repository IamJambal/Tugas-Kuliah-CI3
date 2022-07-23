-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 14 Jul 2022 pada 13.09
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
-- Struktur dari tabel `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `tgl_lahir` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id`, `nama`, `nim`, `tgl_lahir`, `jurusan`, `alamat`, `email`, `no_telp`) VALUES
(1, 'Zahra Maulidatussolihah', '171014002', '2002-02-02', 'Teknik Informatika Batujajar', 'Batujajar, Kabupaten Bandung Barat', 'zahra@gmail.com', '081234567892'),
(2, 'Maishya Rahmi Ramadhani', '171014003', '2003-03-03', ' Teknik Planologi Batujajar', 'Batujajar, Kabupaten Bandung Barat', 'maishya@gmail.com', '08123454567'),
(3, 'Beben Kurnia', '171014004', '2004-04-04', 'Teknik Mesin Cikalong Wetan', 'Batujajar, Kabupaten Bandung Barat', 'beben@gmail.com', '08523234456'),
(4, 'Candra Gunawan satu', '171014005', '2005-05-05', 'Akuntansi Cililin', 'Batujajar, Kabupaten Bandung Barat', 'candra@gmail.com', '089545678987'),
(5, 'Dendy', '171014006', '2017-02-11', 'Akuntansi', 'Brangsong, Kab Kendal', 'dendy@gmail.com', '089098765789'),
(6, 'Kurniawan', '171014007', '2000-12-10', 'Komputer', 'Kauman, Kabupaten Batang', 'kurniawan@gmail.com', '081876544533'),
(7, 'Toddy Inggil A.R', '171014008', '2001-07-10', 'Teknik Informatika Weleri', 'Weleri, Kab Kendal', 'toddyar@gmail.com', '081234567891');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
