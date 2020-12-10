-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 03:14 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbfacebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblfacebook`
--

CREATE TABLE `tblfacebook` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblfacebook`
--

INSERT INTO `tblfacebook` (`fname`, `lname`, `email`, `password`, `birthday`, `gender`) VALUES
('Ma. Jesusa', 'Mercado', 'ma.jesusamercado.bsit.ucu@gmail.com', 'hello', '', 'Female'),
('Paula', 'Mercado', 'hello@gmail.com', 'hahaha', '', 'Female'),
('Juan', 'Dela Cruz', '09123456789', 'hello', '', 'Male'),
('hello', 'world', '09091234567', 'hi', '', 'Custom'),
('Paulo', 'Mercado', '09123456789', 'hi', '2020-07-03', 'Male'),
('Ma. Jesusa', 'Mercado', 'ma.jesusamercado.bsit.ucu@gmail.com', 'hello', '2020-12-24', 'Female');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
