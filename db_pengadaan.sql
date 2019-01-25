-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2019 at 03:05 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

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
  `inisiator` varchar(100) NOT NULL,
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

INSERT INTO `kontrak` (`id`, `nama`, `tanggal`, `nomor`, `inisiator`, `nilai`, `carapembayaran`, `pelaksanaan_from`, `pelaksanaan_to`, `pemeliharaan_from`, `pemeliharaan_to`, `garansijaminan_from`, `garansijaminan_to`, `keterangan`, `status`) VALUES
(1, 'Perbaikan CCTV', '2019-01-24', 12345667, 'Jabatan 2', 1234454545, 'petermin 8%', '2019-01-21', '2019-01-31', '2019-01-04', '2019-01-12', '2019-01-01', '2019-01-08', 'lebih baik', 'Status 1');

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
(1, 1, 'PT ABC', 'aul'),
(2, 1, 'PT JSM', 'sasa'),
(3, 1, 'PT BLABLA', 'njok');

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
(1, 1, 'CCTV Mojokerto'),
(2, 1, 'CCTV Pandaan'),
(3, 1, 'CCTV Surabaya');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kontrak_penandatanganan`
--
ALTER TABLE `kontrak_penandatanganan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kontrak_sub`
--
ALTER TABLE `kontrak_sub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
