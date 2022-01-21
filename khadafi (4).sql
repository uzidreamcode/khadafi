-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 02:52 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khadafi`
--

-- --------------------------------------------------------

--
-- Table structure for table `cucian`
--

CREATE TABLE `cucian` (
  `id_cucian` int(11) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `berat` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `harga` varchar(100) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `status` enum('belum','selesai','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cucian`
--

INSERT INTO `cucian` (`id_cucian`, `nama_pelanggan`, `berat`, `tanggal`, `harga`, `no_hp`, `status`) VALUES
(1, 'uzi', 3, '2006-01-22', '10000', 888, 'selesai'),
(5, '123', 0, '2022-01-06', '0', 122, 'belum'),
(6, 'tes', 33, '2022-01-06', '3300000', 123, 'belum'),
(7, 'tes', 3, '2022-01-06', '9000', 123123, 'selesai'),
(8, '13123', 12, '2022-01-06', '36000', 812123, 'selesai'),
(9, '23423', 2113, '2022-01-06', '6339000', 4, 'belum'),
(10, 'uzi', 1, '2022-01-06', '3000', 22, 'belum');

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `id_harga` int(11) NOT NULL,
  `total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`id_harga`, `total`) VALUES
(1, '3000');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(100) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `logo` varchar(200) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `nama_sekolah`, `keterangan`, `logo`, `create_date`) VALUES
(1, 'SMKN 1 KEPANJEN', 'Sekolah Terbaik di Kabupaten Malang, Jawa timur, Indonesia, Asia Tenggara, Asia,Bumi, Galaxy Bima Sakti', 'kanesa.jpg', '2019-12-05 08:20:17'),
(2, 'SMKN 8 MALANG', 'Sekolah Terbaik di Kota', 'file_1575905258.png', '2019-12-05 08:37:05'),
(5, NULL, NULL, 'kosong1.png', '2022-01-05 15:45:53'),
(6, NULL, NULL, 'file_1641397593.PNG', '2022-01-05 15:46:33'),
(7, NULL, NULL, 'kosong1.png', '2022-01-05 15:47:18'),
(8, NULL, NULL, 'kosong1.png', '2022-01-05 15:47:54'),
(9, NULL, NULL, 'kosong1.png', '2022-01-05 15:48:48'),
(10, NULL, NULL, 'file_1641397749.PNG', '2022-01-05 15:49:09');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hp` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id_admin`, `nama`, `username`, `password`, `hp`, `foto`, `level`) VALUES
(1, 'Somad', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 0, 'file_1641432039.png', 1),
(2, 'sdsdad', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 812123, 'file_1641431586.PNG', 2),
(4, 'uzi', 'uzi', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 12, 'file_1641397993.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(100) DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cucian`
--
ALTER TABLE `cucian`
  ADD PRIMARY KEY (`id_cucian`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id_harga`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cucian`
--
ALTER TABLE `cucian`
  MODIFY `id_cucian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
  MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
