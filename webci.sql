-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 14, 2022 at 05:05 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webci`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_aset`
--

CREATE TABLE `tabel_aset` (
  `id` int(11) NOT NULL,
  `nama_aset` varchar(50) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_aset`
--

INSERT INTO `tabel_aset` (`id`, `nama_aset`, `jenis`, `lokasi`, `jumlah`) VALUES
(1, 'Meja Kerja', 'meja', 'LPPM', 2),
(2, 'Meja Lipat', 'meja', 'BPM', 2),
(3, 'Kursi Busa', 'Kursi', 'LPPM', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_aset`
--
ALTER TABLE `tabel_aset`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_aset`
--
ALTER TABLE `tabel_aset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
