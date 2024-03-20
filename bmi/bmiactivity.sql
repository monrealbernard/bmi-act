-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2024 at 03:31 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monbmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `bmiactivity`
--

CREATE TABLE `bmiactivity` (
  `name` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contactnumber` bigint(50) NOT NULL,
  `birthdate` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `bloodtype` varchar(50) NOT NULL,
  `heightmetric` int(50) NOT NULL,
  `weightmetric` int(50) NOT NULL,
  `bmiresultmetric` int(50) NOT NULL,
  `heightimperial` int(50) NOT NULL,
  `weightimperial` int(255) NOT NULL,
  `bmiresultimperial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bmiactivity`
--

INSERT INTO `bmiactivity` (`name`, `age`, `address`, `contactnumber`, `birthdate`, `gender`, `bloodtype`, `heightmetric`, `weightmetric`, `bmiresultmetric`, `heightimperial`, `weightimperial`, `bmiresultimperial`) VALUES
('monreal bernard', 21, 'navotas', 98765432, 'jan2 2003', 'male', 'O+', 70, 167, 0, 70, 178, 26);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
