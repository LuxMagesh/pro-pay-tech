-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2022 at 02:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pro-pay`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(200) NOT NULL,
  `f_name` varchar(200) NOT NULL,
  `l_name` varchar(200) NOT NULL,
  `id_num` varchar(13) NOT NULL,
  `reg_date` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `language` varchar(200) NOT NULL,
  `interests` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `f_name`, `l_name`, `id_num`, `reg_date`, `email`, `mobile`, `language`, `interests`) VALUES
(1, 'Lux', 'Magesh', '8801095701085', '09/01/88', 'luxmotsumi@gmail.com', '0737812479', '', ' '),
(3, 'Lux', 'Test', '8901095701085', '09/01/89', 'lux@gmail.com', '0747812479', '1', ' '),
(4, 'David', 'Furman', '9401095701085', '09/01/94', 'dav@gmail.com', '0747212479', '6', ' '),
(5, 'Rachel', 'Henry', '9301085701085', '08/01/93', 'rac@gamil.com', '0727812879', 'Spanish', ' '),
(11, 'James', 'Harvey', '9004155701085', '15/04/90', 'jame@gmail.com', '0784462778', 'French', ' '),
(12, 'Ivan', 'Ghost', '9903125701085', '12/03/99', 'ivan@gmail.com', '07278345678', 'German', ' '),
(13, 'Ivan', 'Ghost', '9903115701085', '11/03/99', 'ivan@gmail.com', '07278345678', 'German', ''),
(14, 'Ivan', 'Ghost', '9904115701085', '11/04/99', 'ivan@gmail.com', '07278345678', 'German', ''),
(15, 'Ivan', 'Ghost', '9904075701085', '07/04/99', 'ivan@gmail.com', '07278345678', 'German', 'Jewelry_Making'),
(16, 'Ivan', 'Ghost', '8404075701085', '07/04/84', 'ivan@gmail.com', '07278345678', 'German', 'Jewelry_Making'),
(17, 'Ivan', 'Ghost', '9104075701085', '07/04/91', 'ivan@gmail.com', '07278345678', 'isiZulu', ''),
(18, 'Ivan', 'Ghost', '9104065701085', '06/04/91', 'ivan@gmail.com', '07278345678', 'French', 'Array'),
(19, 'Ivan', 'Ghost', '9104015701085', '01/04/91', 'ivan@gmail.com', '07278345678', 'French', ' Martial_Arts, Fishing, '),
(20, 'Kevin', 'Evans', '9304015701085', '01/04/93', 'ivan@gmail.com', '07278345678', 'Portuguese', ' Reading, Jewelry_Making, Video_Games, ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
