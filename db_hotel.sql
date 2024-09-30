-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 04, 2024 at 06:24 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` text NOT NULL,
  `password` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(8, 'Farrel123', 'sikmas1', 345);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis_kamar`
--

CREATE TABLE `tbl_jenis_kamar` (
  `id_kamar` int NOT NULL,
  `jenis_kamar` varchar(30) NOT NULL,
  `harga` int NOT NULL,
  `keterangan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_jenis_kamar`
--

INSERT INTO `tbl_jenis_kamar` (`id_kamar`, `jenis_kamar`, `harga`, `keterangan`) VALUES
(1, 'Standard Room', 1000000, '12'),
(2, 'Superior Room', 1500000, ''),
(3, 'Deluxe Room', 1800000, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penyewa`
--

CREATE TABLE `tbl_penyewa` (
  `id_sewa` int NOT NULL,
  `id_kamar` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `cekin` date NOT NULL,
  `cekout` date NOT NULL,
  `no_identitas` int NOT NULL,
  `no_hp` int NOT NULL,
  `jumlah` int NOT NULL,
  `total` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_penyewa`
--

INSERT INTO `tbl_penyewa` (`id_sewa`, `id_kamar`, `nama`, `cekin`, `cekout`, `no_identitas`, `no_hp`, `jumlah`, `total`) VALUES
(6, 1, 'Muhammad Farrel Alvidi', '2024-06-05', '2024-06-06', 93, 8988546, 1, 800000),
(7, 3, 'Nadya', '2028-12-30', '2029-12-29', 1234, 123, 1, 655200000),
(8, 3, '1', '2024-06-29', '2024-06-30', 1, 1, 1, 1800000),
(9, 2, '1', '2024-06-05', '2024-06-06', 2, 3, 1, 1500000),
(10, 1, 'admin', '2024-06-04', '2024-06-07', 123, 321, 2, 6000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_jenis_kamar`
--
ALTER TABLE `tbl_jenis_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `tbl_penyewa`
--
ALTER TABLE `tbl_penyewa`
  ADD PRIMARY KEY (`id_sewa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_jenis_kamar`
--
ALTER TABLE `tbl_jenis_kamar`
  MODIFY `id_kamar` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_penyewa`
--
ALTER TABLE `tbl_penyewa`
  MODIFY `id_sewa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
