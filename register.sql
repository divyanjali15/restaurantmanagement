-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2023 at 08:19 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_i` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `numbers` int(2) NOT NULL,
  `reservation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_i`, `name`, `city`, `emailid`, `numbers`, `reservation_date`) VALUES
(4, 'Shreya', 'khammam', 'shreyasuryadevara064@gmail.com', 1, '2023-01-31'),
(5, 'Divya', 'Hyderabad', 'divyanjalinaidu15@gmail.com', 2, '2023-02-02'),
(6, 'Snigdha', 'Hyderabad', 'snigdha154@gmail.com', 1, '2023-02-02'),
(7, 'Pranaya', 'Hyderabad', 'pranaya2134@gmail.com', 1, '2023-02-03'),
(19, 'Bhavana', 'Hyderabad', 'bhavana15@gmail.com', 1, '2023-02-06'),
(20, 'Snigdha rani', 'Hyderabad', 'snigdha1754@gmail.com', 2, '2023-02-06'),
(24, 'Rani', 'khammam', 'ranisuryadevara064@gmail.com', 1, '2023-06-22'),
(25, '', '', '', 0, '0000-00-00'),
(26, '', '', '', 0, '0000-00-00'),
(27, '', '', '', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('das123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_i`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_i` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
