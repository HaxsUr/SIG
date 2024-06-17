-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2024 at 06:55 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig`
--

-- --------------------------------------------------------

--
-- Table structure for table `kepala`
--

CREATE TABLE `kepala` (
  `kd_kepala` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` int(11) NOT NULL,
  `jabatan` varchar(40) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kepala`
--

INSERT INTO `kepala` (`kd_kepala`, `nama`, `nip`, `jabatan`, `alamat`) VALUES
('MK-1', 'Iwak', 252525, 'Kepala Cabang', 'Jl. Sutoto');

-- --------------------------------------------------------

--
-- Table structure for table `tanda`
--

CREATE TABLE `tanda` (
  `nama` varchar(50) NOT NULL,
  `jenis` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tanda`
--

INSERT INTO `tanda` (`nama`, `jenis`, `alamat`, `latitude`, `longitude`) VALUES
('Mesjid Umar', 'Mesjid', '2Q8F+5VW, Marabahan Kota, Kec. Marabahan, Kabupaten', -2.979108, 114.77488),
('Mesjid Umar', 'Mesjid', '2Q8F+5VW, Marabahan Kota, Kec. Marabahan, Kabupaten', -2.979108, 114.77488);

-- --------------------------------------------------------

--
-- Table structure for table `tblogin`
--

CREATE TABLE `tblogin` (
  `pengguna` varchar(15) NOT NULL,
  `sandi` varchar(11) NOT NULL,
  `tingkatan` enum('kepala','administrator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblogin`
--

INSERT INTO `tblogin` (`pengguna`, `sandi`, `tingkatan`) VALUES
('madan', '123456', 'kepala'),
('rijal', '123456', 'kepala'),
('afif', '123456', 'administrator'),
('subhan', '123456', 'administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kepala`
--
ALTER TABLE `kepala`
  ADD PRIMARY KEY (`kd_kepala`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
