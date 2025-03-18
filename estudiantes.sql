-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2025 at 09:12 PM
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
-- Database: `estudiantes`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbldatos`
--

CREATE TABLE `tbldatos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `carnet` varchar(100) NOT NULL,
  `fechanac` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `tbldatos`
--

INSERT INTO `tbldatos` (`id`, `nombre`, `carnet`, `fechanac`) VALUES
(4, 'Oscar Rene', 'SMSS065523', '2000-05-13'),
(7, 'Gerson Manases', 'SMSS040923', '2005-04-12'),
(8, 'Jooyix Majanix', 'SMSS131318', '2025-03-13'),
(12, 'Joya Majano', 'SMSS96919', '2025-03-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbldatos`
--
ALTER TABLE `tbldatos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbldatos`
--
ALTER TABLE `tbldatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
