-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2020 at 07:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insan_kamil`
--

-- --------------------------------------------------------

--
-- Table structure for table `coba`
--

CREATE TABLE `coba` (
  `id` int(11) NOT NULL,
  `coba1` varchar(128) NOT NULL,
  `coba_p` varchar(255) NOT NULL,
  `coba2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coba`
--

INSERT INTO `coba` (`id`, `coba1`, `coba_p`, `coba2`) VALUES
(2, 'adasd', 'adasd.jpg', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_ayah`
--

CREATE TABLE `tabel_ayah` (
  `nik_ayah` char(16) NOT NULL,
  `nama_ayah` varchar(128) NOT NULL,
  `tempat_lahir_ayah` varchar(50) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `pendidikan_terakhir_ayah` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(128) NOT NULL,
  `alamat_ayah` varchar(255) NOT NULL,
  `photo_ayah` varchar(255) NOT NULL,
  `no_hp` char(12) NOT NULL,
  `nik_siswa` char(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_ibu`
--

CREATE TABLE `tabel_ibu` (
  `nik_ibu` char(16) NOT NULL,
  `nama_ibu` varchar(128) NOT NULL,
  `tempat_lahir_ibu` varchar(50) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `pendidikan_terakhir_ibu` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(128) NOT NULL,
  `alamat_ibu` varchar(255) NOT NULL,
  `photo_ibu` varchar(255) NOT NULL,
  `nik_siswa` char(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_siswa`
--

CREATE TABLE `tabel_siswa` (
  `nik_siswa` char(16) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `nama_panggilan` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `anak_ke` int(2) NOT NULL,
  `jmlh_saudara_kandung` int(2) NOT NULL,
  `berat_badan` int(3) NOT NULL,
  `tinggi_badan` int(3) NOT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `nik_ayah` char(16) NOT NULL,
  `nik_ibu` char(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coba`
--
ALTER TABLE `coba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_ayah`
--
ALTER TABLE `tabel_ayah`
  ADD PRIMARY KEY (`nik_ayah`);

--
-- Indexes for table `tabel_ibu`
--
ALTER TABLE `tabel_ibu`
  ADD PRIMARY KEY (`nik_ibu`);

--
-- Indexes for table `tabel_siswa`
--
ALTER TABLE `tabel_siswa`
  ADD PRIMARY KEY (`nik_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coba`
--
ALTER TABLE `coba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
