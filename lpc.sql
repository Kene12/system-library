-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2022 at 11:45 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lpc`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id_book` int(11) NOT NULL,
  `bookname` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `stu` int(11) DEFAULT NULL,
  `ter` int(11) DEFAULT NULL,
  `statuss` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id_book`, `bookname`, `author`, `publisher`, `price`, `stu`, `ter`, `statuss`) VALUES
(8, 'Harry Potter', 'J.K.Rowling', 'โรเบิร์ต กัลเบรธ', 375, 3, 5, 'return'),
(9, 'ken2', 'asdasdasd', 'โรเบิร์ต กัลเบรธ', 125546, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `id_borrow` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `lender` varchar(50) NOT NULL,
  `borrow_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_rec` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`id_borrow`, `id_book`, `lender`, `borrow_time`, `id_rec`) VALUES
(24, 8, 'leee', '2022-01-14 10:31:05', 3);

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `id` int(4) NOT NULL,
  `id_book` int(4) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registered` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`id`, `id_book`, `name`, `path`, `registered`) VALUES
(5, 8, '2858853d0dcc66f490aa9aab54db4bd0.jpg', 'picture/', '2022-01-14 05:41:56');

-- --------------------------------------------------------

--
-- Table structure for table `returnn`
--

CREATE TABLE `returnn` (
  `id_returnn` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `id_rec` int(11) NOT NULL,
  `id_borrow` int(11) NOT NULL,
  `receiver` varchar(50) DEFAULT NULL,
  `returnn_time` datetime DEFAULT NULL,
  `borrow_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `returnn`
--

INSERT INTO `returnn` (`id_returnn`, `id_book`, `id_rec`, `id_borrow`, `receiver`, `returnn_time`, `borrow_time`) VALUES
(21, 8, 3, 24, 'fffee', '0000-00-00 00:00:00', '2022-01-14 10:33:48');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id_rec` int(4) NOT NULL,
  `id_student` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prename` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgname` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` int(100) NOT NULL,
  `passwd` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registered` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id_rec`, `id_student`, `prename`, `firstname`, `lastname`, `age`, `gender`, `address`, `mobile`, `email`, `imgname`, `type_id`, `passwd`, `registered`) VALUES
(2, 'admin', 'ken232', 'adasd', 'asdasd', 12, '', 'asdasdasd', '123445', 'asdasdasd', '', 1, '12345', '2022-01-11 08:24:54'),
(3, 'stu12', 'ken2', 'kkde', 'eedkk', 12, '', 'asdasd', '123445', 'asdasdasd', '', 2, '12345', '2022-01-12 04:30:57'),
(4, 'stu13', 'jeee', 'kkde', 'eedkk', 12, 'female', 'asdasd', '123445', 'asdasdasd', '', 2, '12345', '2022-01-12 04:42:16'),
(16, 'admin2', 'Ken', 'Panithan', 'kunkaew', 20, 'male', 'eeeeeeeee', '05515151', 'eeeeeeeeeeeee', '', 1, '12345', '2022-01-14 06:59:17'),
(17, 'ter1', 'sdasd', 'adasd', 'asdasd', 200, 'female', 'sdsdasdaqq', '02020220', 'wqewqewqe', '', 3, '12345', '2022-01-14 07:00:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id_book`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`id_borrow`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `returnn`
--
ALTER TABLE `returnn`
  ADD PRIMARY KEY (`id_returnn`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_rec`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `id_borrow` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `returnn`
--
ALTER TABLE `returnn`
  MODIFY `id_returnn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id_rec` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
