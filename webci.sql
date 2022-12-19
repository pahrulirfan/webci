-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 19, 2022 at 02:54 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `table_c`
--

CREATE TABLE `table_c` (
  `id_043` int(11) NOT NULL,
  `kolom_jurusan` varchar(50) NOT NULL,
  `kolom_kelas` varchar(10) NOT NULL,
  `kolom_isi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_c`
--

INSERT INTO `table_c` (`id_043`, `kolom_jurusan`, `kolom_kelas`, `kolom_isi`) VALUES
(1, 'D3RPL', 'A', '20'),
(2, 'D3SI', 'B', '20'),
(3, 'Quod aliquid ut cill', 'Exercitati', '12'),
(4, 'Ratione velit nostr', 'Aliqua Mol', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_aset`
--
ALTER TABLE `tabel_aset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_c`
--
ALTER TABLE `table_c`
  ADD PRIMARY KEY (`id_043`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_aset`
--
ALTER TABLE `tabel_aset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table_c`
--
ALTER TABLE `table_c`
  MODIFY `id_043` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
