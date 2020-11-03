-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 03, 2020 at 08:09 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id15263961_turbollc`
--

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` int(11) NOT NULL,
  `truck` int(10) DEFAULT NULL,
  `trailer` int(10) DEFAULT NULL,
  `driver_name` varchar(50) DEFAULT NULL,
  `delivery_location` varchar(50) NOT NULL,
  `delivery_date` varchar(50) NOT NULL,
  `notes` varchar(200) NOT NULL,
  `login_id` int(11) DEFAULT NULL,
  `today_red` varchar(5) NOT NULL,
  `comments` varchar(200) NOT NULL,
  `updated` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `truck`, `trailer`, `driver_name`, `delivery_location`, `delivery_date`, `notes`, `login_id`, `today_red`, `comments`, `updated`) VALUES
(3, 11, 28, 'SHUHRAT IRGASHOV', 'LOS ANGELAS CA   -  FINDLAY, OH ', '10/28  8PM    DEL 10/30  23:00 ', 'LOADED ON THE WAY TO DELIVERY ', 1, '', 'DROP AT DELIVERY 3DAYS CHECK WITH DRIVER !  ', '02.11.2020 at 11:14:56pm by Umar'),
(4, 7, 17, 'KOMIL ', 'BEREA KY ', '10/30/20 AT  11AM - 3PM', 'PU 10/29  8-3  NEW WINDSOR NY TO DEL 10/30  3PM BEREA KY', 1, '', ' DRIVER EMPTY ON TH WAY TO PU  ETA  2;45 PM', '02.11.2020 at 10:32:29pm by Zafar J'),
(5, 3, 29, 'RUSTAM', 'springdale,AR', '11/03/20 AT 00:27', 'load from OH to AR', 1, '', 'load from OH to AR', '02.11.2020 at 11:20:04pm by Isroil'),
(6, 5, 24, 'SARVAR', '  Milwaukee, WI  -  Monroe, OH', '10/29 2PM -  10/30 ANY TIME DROP 2DAY', '  GOING HOME AFTER DROP  ', 1, '1', 'WANTED 2 DAY OFF CHECK ETA WITH DRIVER !', '02.11.2020 at 11:23:13pm by Isroil'),
(7, 701, 5341, 'G’ULOM JURAKULOV', 'RENO, NV-FINDLAY,OH ', '11/02/20 ', 'check ETA with the driver', 1, '1', '', '02.11.2020 at 11:21:16pm by Odil'),
(8, 707, 30, 'SHUHRAT SINDAROV', 'MIDDLETOWN NY  -  BEREA KY', '10/30/20 AT 7PM -11 PM', 'HOLLISTON, MA STILL DELIVERING', 1, '', 'YUK OLINGAN MIDDLETOWN NY TO BEREA KY CHEXK RATE CON ', ''),
(9, 2, 29, 'ABBOS ', 'check with rate con', '11/02/20 AT 8-12:00AM', 'Empty time check with driver', 1, '1', 'Check with driver', '02.11.2020 at 11:22:35pm by Isroil'),
(10, 6, 31, 'AKMAL UZ INC', 'TATAMY, PA', '11/02/20 AT-10:00-14:00 11/2/2020', 'Empty time check with driver', 1, '', 'Check with driver', '02.11.2020 at 10:55:18pm by Isroil'),
(11, 707, 27, 'RAMIZ', ' Pulaski, NY ---  Plainfield, IN  ', '10/31/20 at 6am-10am fcfc', 'yuk olindi', 1, '', 'no comments', '02.11.2020 at 11:28:04pm by Umar'),
(12, 702, 31, 'MIRSOBID', 'LANSING MI ', 'EMPTY', 'DRIVER AT HOME LANSING MI  2WEEKS OFF ', 1, '', '', ''),
(13, 9, 32, 'LAZIZBEK ', 'ANDOVER, MA- LOUISVILLE, KY', 'pik up 10/29  24/7   del  10/30  8am-5pm', 'Check ETA with the driver', 1, '0', '', ''),
(14, 8, 34, 'HUSNIDDIN', 'Swedesboro, NJ', '11/02/20 AT 8:00-15:00', 'CHECK ETA WITH DRIVER !', 1, '1', '', '02.11.2020 at 11:23:34pm by Isroil');

-- --------------------------------------------------------

--
-- Table structure for table `loads`
--

CREATE TABLE `loads` (
  `id` int(3) NOT NULL,
  `sana` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `load_itc` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `drivers_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `amount` decimal(6,0) NOT NULL,
  `amount_d` decimal(6,0) NOT NULL,
  `login_id` int(5) NOT NULL,
  `load_broker` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loads`
--

INSERT INTO `loads` (`id`, `sana`, `load_itc`, `drivers_name`, `amount`, `amount_d`, `login_id`, `load_broker`) VALUES
(13, '2020-11-02', '123456', 'Akmal', 3450, 35, 4, ' 9180097550');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(5) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `admin` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `username`, `password`, `admin`) VALUES
(1, 'Odil', 'od@od.com', 'odilorg', '2f4cf4e6eb8e7065b701fd6e72fdcb6b', 1),
(2, 'Zafar J', 'zafr@yah.com', 'zafar', '0459f8ebb506c02718d4b29b11f586a0', 0),
(3, 'Umar', 'mu@ya.com', 'umar', '6c90885b28e58d1f44856d787da2078f', 0),
(4, 'Isroil', 'is@yh.com', 'isroil', 'edc880b4b7f5df806d8602bd2ce87de5', 0),
(5, 'Umid', 'jhj', 'umid', '4b7f871c66be5ac7630c27bb5e21fe7f', 0),
(6, 'Zafar Irgashov', 'sd', 'turbollc', '31b7e865b13310bbbc0dbc93eaeef2cb', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `login_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `qty`, `price`, `login_id`) VALUES
(3, 'pencil', 78, 89.00, 1),
(4, 'pen', 4, 45.00, 1),
(8, 'DS', 0, 0.00, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `login_id` (`login_id`);

--
-- Indexes for table `loads`
--
ALTER TABLE `loads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_products_1` (`login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `loads`
--
ALTER TABLE `loads`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_products_1` FOREIGN KEY (`login_id`) REFERENCES `login` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
