-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2025 at 05:12 AM
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
-- Database: `hilbram_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_warga`
--

CREATE TABLE `data_warga` (
  `nama` varchar(100) DEFAULT NULL,
  `tempat_tanggal_lahir` varchar(1000) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `umur` tinyint(4) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `golongan_darah` binary(1) DEFAULT NULL,
  `waktu_utc` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_warga`
--

INSERT INTO `data_warga` (`nama`, `tempat_tanggal_lahir`, `alamat`, `umur`, `tanggal_masuk`, `golongan_darah`, `waktu_utc`) VALUES
('Surya', 'Jombang-21-02-2004', 'Kab.Jombang', 29, NULL, 0x30, '2025-09-07 10:58:34'),
('ilham', 'Jombang-21-02-2004', 'Kab.Jombang', 19, NULL, 0x42, '2025-09-07 10:56:58'),
('raihan', 'Lamongan-23-12-2008', 'Kab.Lamongan', 17, '2004-12-12', 0x42, '2025-09-09 03:50:11');

-- --------------------------------------------------------

--
-- Table structure for table `identity_data`
--

CREATE TABLE `identity_data` (
  `Name` varchar(1000) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Email` varchar(1000) DEFAULT NULL,
  `NISN` int(11) NOT NULL,
  `City` varchar(1000) DEFAULT NULL,
  `Road` varchar(1000) DEFAULT NULL,
  `Country` varchar(1000) DEFAULT NULL,
  `instantion` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `identity_data`
--

INSERT INTO `identity_data` (`Name`, `Age`, `Email`, `NISN`, `City`, `Road`, `Country`, `instantion`) VALUES
('Rehan', 21, 'roosetedei@gmail.com', 123456789, 'Pati', 'JL.Samsudin', 'Indonesia', 'SMK GEROBOGAN'),
('Sofyan', 19, 'sofyan@yahoo.com', 123476879, 'SIDOARJO', 'Jl.manunggal', 'Indonesia', 'SMK TANJUNGPINANG'),
('septyan hermawan', 19, 'roosetedei@gmail.com', 1982732222, 'SIDOARJO', 'Jl.manunggal', 'Indonesia', 'SMK ANTARTIKA 2 SIDOARJO'),
('septyan hermawan', 19, 'roosetedei@gmail.com', 1982734567, 'SIDOARJO', 'Jl.manunggal', 'Indonesia', 'SMK ANTARTIKA 2 SIDOARJO'),
('septyan hermawan Aditya hermawan', 19, 'roosetedei@gmail.com', 1982734571, 'SIDOARJO', 'Jl.manunggal', 'Indonesia', 'SMK ANTARTIKA 2 SIDOARJO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `identity_data`
--
ALTER TABLE `identity_data`
  ADD PRIMARY KEY (`NISN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `identity_data`
--
ALTER TABLE `identity_data`
  MODIFY `NISN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
