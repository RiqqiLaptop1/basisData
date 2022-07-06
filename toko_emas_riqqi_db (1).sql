-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 08:30 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_emas_riqqi_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan_riqqi`
--

CREATE TABLE `karyawan_riqqi` (
  `id_karyawan` int(4) NOT NULL,
  `nama_karyawan` varchar(20) NOT NULL,
  `almt_karyawan` varchar(20) NOT NULL,
  `gaji_karyawan` int(11) NOT NULL,
  `tgl_gabung` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan_riqqi`
--

INSERT INTO `karyawan_riqqi` (`id_karyawan`, `nama_karyawan`, `almt_karyawan`, `gaji_karyawan`, `tgl_gabung`) VALUES
(1, 'Riqqi', 'Jl.KH.Abdul Wahab 31', 7000000, '2022-07-06 11:38:13'),
(4, 'salma', 'Simbang Kulon', 500000, '2022-07-06 12:12:27'),
(5, 'izul', 'wonoyoso', 500, '2022-07-06 18:06:08'),
(6, 'riyan', 'tangkil kulon', 3000000, '2022-07-06 12:34:59'),
(7, 'ulil', 'paesan', 2300000, '2022-07-06 12:34:59'),
(8, 'obi', 'sapugarut', 3800000, '2022-07-06 12:34:59'),
(9, '7000000', 'Jl.KH.Abdul Wahab 31', 2022, '2022-07-06 18:26:30'),
(10, '500000', 'Simbang Kulon', 2022, '2022-07-06 18:26:30'),
(11, '500', 'wonoyoso', 2022, '2022-07-06 18:26:30'),
(12, '3000000', 'tangkil kulon', 2022, '2022-07-06 18:26:30'),
(13, '2300000', 'paesan', 2022, '2022-07-06 18:26:30'),
(14, '3800000', 'sapugarut', 2022, '2022-07-06 18:26:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan_riqqi`
--
ALTER TABLE `karyawan_riqqi`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karyawan_riqqi`
--
ALTER TABLE `karyawan_riqqi`
  MODIFY `id_karyawan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
