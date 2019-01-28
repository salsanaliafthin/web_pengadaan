-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2019 at 10:11 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pengadaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontrak`
--

CREATE TABLE `kontrak` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `nomor` int(11) NOT NULL,
  `inisiator_nama` varchar(100) NOT NULL,
  `inisiator_devisi` varchar(100) NOT NULL,
  `nilai` int(11) NOT NULL,
  `carapembayaran` varchar(50) NOT NULL,
  `pelaksanaan_from` date NOT NULL,
  `pelaksanaan_to` date NOT NULL,
  `pemeliharaan_from` date NOT NULL,
  `pemeliharaan_to` date NOT NULL,
  `garansijaminan_from` date NOT NULL,
  `garansijaminan_to` date NOT NULL,
  `keterangan` varchar(150) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontrak`
--

INSERT INTO `kontrak` (`id`, `nama`, `tanggal`, `nomor`, `inisiator_nama`, `inisiator_devisi`, `nilai`, `carapembayaran`, `pelaksanaan_from`, `pelaksanaan_to`, `pemeliharaan_from`, `pemeliharaan_to`, `garansijaminan_from`, `garansijaminan_to`, `keterangan`, `status`) VALUES
(3, 'Perbaikan Jalan', '2019-01-27', 2345, '', '', 987654, 'langsung', '2019-01-02', '2019-01-04', '2019-01-07', '2019-01-11', '2019-01-20', '2019-01-25', 'lkjhgfd', 'Drafting'),
(4, 'Perbaikan CCTV', '2019-02-28', 1234, 'salsa', 'manager sdm', 1000000, 'petermin 10%', '2019-03-27', '2019-02-02', '2019-02-03', '2019-02-09', '2019-02-10', '2019-02-16', 'oke', 'On Progress'),
(5, 'Perbaikan CCTV', '2019-03-27', 1234, 'salsa', 'manager sdm', 1000000, 'petermin 10%', '2018-12-27', '2019-02-02', '2019-02-03', '2019-02-09', '2019-02-10', '2019-02-16', 'oke', 'On Progress'),
(6, '1', '0001-01-01', 1, '1', '1', 1, 'petermin', '0001-01-01', '0001-01-01', '0001-01-01', '0001-01-01', '0001-01-01', '0001-01-01', '1', 'Drafting'),
(7, '1', '0001-01-01', 1, '1', '1', 1, 'petermin', '0001-01-01', '0001-01-01', '0001-01-01', '0001-01-01', '0001-01-01', '0001-01-01', '1', 'Drafting');

-- --------------------------------------------------------

--
-- Table structure for table `kontrak_penandatanganan`
--

CREATE TABLE `kontrak_penandatanganan` (
  `id` int(11) NOT NULL,
  `fk_kontrak` int(11) NOT NULL,
  `nama_perseroan` varchar(50) NOT NULL,
  `nama_perwakilan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontrak_penandatanganan`
--

INSERT INTO `kontrak_penandatanganan` (`id`, `fk_kontrak`, `nama_perseroan`, `nama_perwakilan`) VALUES
(7, 3, 'PT ABC', 'sem'),
(8, 3, 'PT TRE', 'njok'),
(9, 3, 'PT QWE', 'Aldan'),
(10, 3, '', ''),
(11, 3, '', ''),
(12, 3, '', ''),
(13, 3, '', ''),
(14, 3, '', ''),
(15, 3, '', ''),
(16, 3, '', ''),
(17, 3, '', ''),
(18, 3, '', ''),
(19, 3, '', ''),
(20, 3, '', ''),
(21, 3, '', ''),
(22, 3, '', ''),
(23, 3, '', ''),
(24, 3, '', ''),
(25, 4, 'PT ABC', 'aul'),
(26, 4, 'PT BCD', 'njok'),
(27, 5, 'PT ABC', 'aul'),
(28, 5, 'PT BCD', 'njok');

-- --------------------------------------------------------

--
-- Table structure for table `kontrak_petermin`
--

CREATE TABLE `kontrak_petermin` (
  `id` int(11) NOT NULL,
  `fk_kontrak` int(11) NOT NULL,
  `petermin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kontrak_petermin`
--

INSERT INTO `kontrak_petermin` (`id`, `fk_kontrak`, `petermin`) VALUES
(1, 7, 1),
(2, 7, 1),
(3, 7, 1),
(4, 7, 1),
(5, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kontrak_sub`
--

CREATE TABLE `kontrak_sub` (
  `id` int(11) NOT NULL,
  `fk_kontrak` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontrak_sub`
--

INSERT INTO `kontrak_sub` (`id`, `fk_kontrak`, `nama`) VALUES
(7, 3, 'waru 1'),
(8, 3, 'waru 2'),
(9, 3, 'waru 3'),
(10, 4, 'CCTV Waru'),
(11, 4, 'CCTV malang'),
(12, 4, 'CCTV Surabaya'),
(13, 5, 'CCTV Waru'),
(14, 5, 'CCTV malang'),
(15, 5, 'CCTV Surabaya'),
(16, 6, '1'),
(17, 7, '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `npp` int(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `npp`, `email`, `password`, `level`) VALUES
(1, 'superadmin', 'superadmin', 123, 'superadmin@gmail.com', 'jsm123', 1),
(2, 'salsa', 'salsaa', 1234, 'salsanalia.fathin@gmaill.', 'salsa', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontrak`
--
ALTER TABLE `kontrak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontrak_penandatanganan`
--
ALTER TABLE `kontrak_penandatanganan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontrak_petermin`
--
ALTER TABLE `kontrak_petermin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kontrak` (`fk_kontrak`);

--
-- Indexes for table `kontrak_sub`
--
ALTER TABLE `kontrak_sub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontrak`
--
ALTER TABLE `kontrak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kontrak_penandatanganan`
--
ALTER TABLE `kontrak_penandatanganan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `kontrak_petermin`
--
ALTER TABLE `kontrak_petermin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kontrak_sub`
--
ALTER TABLE `kontrak_sub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
