-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2022 at 07:49 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `no_identitas` bigint(16) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `no_hp` char(13) NOT NULL,
  `id_tempat_wisata` int(100) NOT NULL,
  `tanggal_kunjungan` date NOT NULL,
  `p_dewasa` int(100) NOT NULL,
  `p_kecil` int(100) NOT NULL,
  `total_bayar` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`no_identitas`, `nama_lengkap`, `no_hp`, `id_tempat_wisata`, `tanggal_kunjungan`, `p_dewasa`, `p_kecil`, `total_bayar`) VALUES
(2147483647, 'Jamroni', '89503251061', 1, '2022-08-22', 1, 1, 120000),
(35234235235, 'Kamil', '81390654926', 2, '2022-08-18', 8, 0, 32000),
(1562435617283, 'Lady', '81390654926', 3, '2022-08-27', 2, 2, 30000),
(6253432742334, 'Mohammad Ardi Trisnaldi', '0895385226084', 1, '2022-08-21', 2, 4, 320000),
(21937781525432, 'ridwan', '0895385226084', 3, '2022-08-18', 5, 5, 75000),
(98237486265623, 'Zaenal', '89503251061', 6, '2022-08-21', 2, 2, 90000),
(62536462738472332, 'Hue', '8765456789', 2, '2022-08-25', 6, 3, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `tempat_wisata`
--

CREATE TABLE `tempat_wisata` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempat_wisata`
--

INSERT INTO `tempat_wisata` (`id`, `nama`, `harga`, `image`, `video`) VALUES
(1, 'Guci', 80000, '../assets/images/guci.jpeg', 'Jbdn21QZgoc'),
(2, 'Curug jejg', 4000, '../assets/images/curug-jejeg.jpg', 'vE64SWIB5iE'),
(3, 'Baturaden', 10000, '../assets/images/baturaden.jpg', 'vE64SWIB5iE'),
(6, 'owabong', 30000, '../assets/images/owabong.jpg', 'vE64SWIB5iE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`no_identitas`),
  ADD KEY `id_tempat_wisata` (`id_tempat_wisata`);

--
-- Indexes for table `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
