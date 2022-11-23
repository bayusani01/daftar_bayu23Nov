-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 05:30 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fahriyan9nov`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_komputer`
--

CREATE TABLE `tb_komputer` (
  `id` int(25) NOT NULL,
  `no_seri` int(15) NOT NULL,
  `merek` enum('asus','lenovo','hp','acer') NOT NULL,
  `jumlah` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_komputer`
--

INSERT INTO `tb_komputer` (`id`, `no_seri`, `merek`, `jumlah`) VALUES
(6, 89, 'asus', 24),
(7, 25, 'asus', 22),
(11, 9, 'acer', 3),
(12, 4, 'hp', 3),
(13, 72, 'hp', 30),
(17, 10, 'acer', 11),
(18, 99, 'hp', 88),
(19, 5, 'lenovo', 88),
(21, 49, 'lenovo', 30),
(22, 40, 'asus', 35);

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telpon` decimal(10,0) NOT NULL,
  `tanggal_lahir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`username`, `password`, `email`, `no_telpon`, `tanggal_lahir`) VALUES
('bayuoke', '123456', '', '0', 0),
('mulletoke', '123456', '', '0', 0),
('fahriyan', '45678', '', '0', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_komputer`
--
ALTER TABLE `tb_komputer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_komputer`
--
ALTER TABLE `tb_komputer`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
