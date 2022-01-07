-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2021 at 06:41 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `management`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `place` varchar(100) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `student_id`, `name`, `place`, `amount`) VALUES
(1, 5, 'yesu', 'ytytt', 0),
(5, 8, 'irudayn', 'thripattur', 2000),
(6, 7, 'bush', 'chennai', 3000),
(7, 9, 'bush', 'rhtrhrj', 6555),
(8, 11, 'siva', 'nhgkjytkyk', 7000);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dept` varchar(5) NOT NULL,
  `age` int(3) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `bgroup` varchar(3) NOT NULL,
  `gender` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `dept`, `age`, `address`, `email`, `dob`, `bgroup`, `gender`) VALUES
(5, 'yesu', 'MCA', 4, 'erf', 'yesu111@gmail.com', '0000-00-00', '', 'male'),
(7, 'raj', 'bca', 21, 'hhr', 'irudayan111@gmail.com', '2021-11-09', 'A+', 'male'),
(8, 'dias', 'BA', 32, 'Adiyar', 'dias111@gmail.com', '2021-11-09', 'A+', 'male'),
(9, 'savari', 'MCA', 34, 'thiruvannamalai', 'dias123@gmail.com', '2021-11-10', 'A', 'male'),
(11, 'raj', 'bca', 21, 'gvjvjv', 'gtge@gmail.com', '2021-11-04', 'A-', 'male'),
(13, 'raj', 'bca', 21, 'fdsfsgv', 'irudayan111@gmail.com', '2021-11-03', 'B+', 'male'),
(14, 'raj', 'MCom', 98, 'fdsff', 'irudayan111@gmail.com', '2021-11-02', 'B+', 'male'),
(15, 'raj', 'bca', 21, 'dvdsf', 'gtge@gmail.com', '2021-11-02', 'B+', 'male'),
(17, 'q', 'bca', 21, 'tgg', 'irudayan111@gmail.com', '2021-11-03', 'A+', 'male'),
(18, 'w', 'bca', 98, 'hghth', 'irudayan111@gmail.com', '2021-11-03', 'A-', 'male'),
(20, 'raj', 'bca', 21, 'gfhyjyy', 'gtge@gmail.com', '2021-11-10', 'A+', 'male'),
(22, '4', 'MCom', 21, '4l', 'irudayan111@gmail.com', '2021-11-10', 'A+', 'male'),
(23, '78867', '8767', 678678, '8678', 'gtge@gmail.com', '2021-11-04', 'B+', 'male'),
(24, 'rfr dfhteh', 'bca', 21, 'dghg', 'irudayan111@gmail.com', '2021-11-03', 'A+', 'male'),
(26, 'raj', 'MCom', 21, 'vvfdg', 'irudayan111@gmail.com', '2021-11-11', 'B+', 'male'),
(27, 'raj', 'bca', 21, 'fgef', 'irudayan111@gmail.com', '0000-00-00', 'A+', 'male'),
(28, 'raj', 'bca', 21, 'fhgf', 'irudayan111@gmail.com', '0000-00-00', '', 'male'),
(30, 'vincent', 'MSc', 32, 'thiruchy', 'vin098@gmail.com', '0000-00-00', '', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `student_id` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
