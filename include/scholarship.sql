-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 11:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scholarship`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `form_id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `d_o_b` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `shs` varchar(50) NOT NULL,
  `note` text NOT NULL,
  `wassce` varchar(100) NOT NULL,
  `transcript` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`form_id`, `fname`, `sname`, `gender`, `d_o_b`, `email`, `phone`, `shs`, `note`, `wassce`, `transcript`) VALUES
(38, 'LOUIS', 'AFFUL', 'M', '2023-05-31', 'lawsonf@gmail.com', '0502649650', 'qwedfv', 'sdfgh', 'lo.jpg', 'loui137.jpg'),
(41, 'louis', 'AFFUL', 'F', '2023-05-22', 'louisafful1rtyu0@gmail.com', '0502649650', 'lkiuyt', 'wertyjk', 'loui137.jpg', 'ceo.jpg'),
(42, 'LOUIS', 'AFFUL', 'M', '2023-05-16', 'louisaffufghl10@gmail.com', '0502649650', 'dfghjk', 'edrftgyhj', 'denni12.jpg', 'denni12.jpg'),
(43, 'fghj', 'Afful', 'F', '2023-05-02', 'lawson@gmail.com', '0502649650', 'dfghjk', 'dfghj', '', ''),
(45, 'LOUIS', 'Afful', 'M', '2023-05-27', 'louisafful19765@gmail.com', '0591414352', 'Holy Child Int School', 'i am here so pick me', 'IMG-20230525-WA0001.jpg', 'IMG-20230525-WA0001.jpg'),
(46, 'LOUIS', 'AFFUL', 'M', '2023-05-30', 'admin@gmail.com', '0502649650', 'Holy Child Int School', 'hmbfnkjvwb', 'darknet.jpg', 'Awakening the Entrepreneur within.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`form_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
