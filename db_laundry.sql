-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2020 at 10:22 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `t_jasa`
--

CREATE TABLE `t_jasa` (
  `id` varchar(4) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `sabun` int(4) NOT NULL,
  `softener` int(4) NOT NULL,
  `parfum` int(4) NOT NULL,
  `harga` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_jasa`
--

INSERT INTO `t_jasa` (`id`, `nama`, `sabun`, `softener`, `parfum`, `harga`) VALUES
('101', 'Cuci Kering', 100, 100, 0, 3000),
('102', 'Cuci Kering Setrika', 100, 100, 20, 4500),
('201', 'Selimut Kecil', 100, 100, 50, 12000),
('202', 'Selimut Besar', 100, 100, 50, 18000),
('103', 'Setrika', 0, 0, 20, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `t_masuk`
--

CREATE TABLE `t_masuk` (
  `id_trans` int(4) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jasa` varchar(25) NOT NULL,
  `berat` int(4) NOT NULL,
  `total` int(9) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_masuk`
--

INSERT INTO `t_masuk` (`id_trans`, `tgl_masuk`, `nama`, `jasa`, `berat`, `total`, `status`) VALUES
(1001, '2020-01-07', 'Ayu', 'Setrika', 5, 15000, 'Dalam Proses'),
(1002, '2020-01-08', 'Ida', 'Cuci Kering Setrika', 2, 9000, 'Siap Ambil'),
(1003, '2020-01-09', 'Lely', 'Cuci Kering', 2, 6000, 'Sudah Diambil');

-- --------------------------------------------------------

--
-- Table structure for table `t_sabun`
--

CREATE TABLE `t_sabun` (
  `sabun` int(5) NOT NULL,
  `softener` int(5) NOT NULL,
  `parfum` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_sabun`
--

INSERT INTO `t_sabun` (`sabun`, `softener`, `parfum`) VALUES
(50000, 32000, 50000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
