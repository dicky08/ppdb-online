-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2020 at 01:14 PM
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
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_soal`
--

CREATE TABLE `tbl_soal` (
  `id_soal` int(11) NOT NULL,
  `soal` text NOT NULL,
  `a` varchar(50) NOT NULL,
  `b` varchar(50) NOT NULL,
  `c` varchar(50) NOT NULL,
  `d` varchar(50) NOT NULL,
  `kunci` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `aktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_soal`
--

INSERT INTO `tbl_soal` (`id_soal`, `soal`, `a`, `b`, `c`, `d`, `kunci`, `gambar`, `tanggal`, `aktif`) VALUES
(1, 'HTML merupakan singkatan dari ....', 'Home Tool  Markup Language', 'Hyperlinks and Text Markup Language', 'Hyper Text Markup Language', 'Hyper Tool Markup Language', 'c', '', '2018-07-02', 'Y'),
(2, 'Siapa yang mengembangkan Sejarah Web pertama kali...', 'Ruben', 'Thomas Alpha Edison', 'Tim Berners-Lee', 'Albert Einstein', 'c', '', '2018-07-02', 'Y'),
(3, 'Profesi dalam pengembangan web, kecuali...', 'Web Developer', 'Web Programer', 'Web Administrator', 'Web Browser', 'd', '', '2018-07-18', 'Y'),
(4, 'Browser bawaan dari windows adalah ?', 'Opera mini', 'Mozila', 'Chrome', 'Internet Explorer', 'd', '', '2018-07-02', 'Y'),
(5, 'Apa kepanjangan WWW ?', 'World Wide Web', 'Wide World Web', 'Web Wide World', 'World Web Wide', 'a', '', '2018-07-02', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `ujian_sementara`
--

CREATE TABLE `ujian_sementara` (
  `id` int(11) NOT NULL,
  `username` char(8) NOT NULL,
  `score` double NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ujian_sementara`
--

INSERT INTO `ujian_sementara` (`id`, `username`, `score`, `keterangan`) VALUES
(11, 'diki08', 20, 'tidak lulus');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `full_name`, `password`, `picture`) VALUES
(10, 'diki08', 'diki', '$2y$10$Bi99tdC3AOzuAQI7j0vbnOrA3/jhYhcCvG4o1eqz06pEq2ew.FI02', 'default.jpg'),
(15, 'diki12', 'diki', '$2y$10$3zZQ5A/bxbgutpeOt1Sb0.2ONUdQW5F1dm1/IY1.rmzpBA/gcnpeO', 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `ujian_sementara`
--
ALTER TABLE `ujian_sementara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ujian_sementara`
--
ALTER TABLE `ujian_sementara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
