-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 01, 2020 at 08:22 AM
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
  `login_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `truck`, `trailer`, `driver_name`, `delivery_location`, `delivery_date`, `notes`, `login_id`) VALUES
(3, 11, 28, 'SHUHRAT IRGASHOV', 'LOS ANGELAS CA   -  FINDLAY, OH ', '10/28  8PM    DEL 10/30  23:00 ', 'LOADED ON THE WAY TO DELIVERY DROP AT DELIVERY 3DAYS CHECK WITH DRIVER !  ', 1),
(4, 7, 17, 'KOMIL ', 'BEREA KY ', '10/30/20 AT  11AM - 3PM', 'PU 10/29  8-3  NEW WINDSOR NY   TO     DEL 10/30  3PM BEREA KY                   DRIVER EMPTY ON TH WAY TO PU  ETA  2;45 PM', 1),
(5, 3, 26, 'RUSTAM', 'Hebron, KY', '10/28/20 AT 00:27', 'EMPTY AT HOME  WANTS WEEK OFF   CHECK WITH DRIVER POWER ONLY AMAZON???', 1),
(6, 5, 24, 'SARVAR', '  Milwaukee, WI  -  Monroe, OH', '10/29 2PM -  10/30 ANY TIME DROP 2DAY', '  GOING HOME AFTER DROP  WANTED 2 DAY OFF CHECK ETA WITH DRIVER !', 1),
(7, 701, 5341, 'G’ULOM JURAKULOV', 'RENO, NV-FINDLAY,OH ', '11/02/20 ', 'check ETA with the driver', 1),
(8, 707, 30, 'SHUHRAT SINDAROV', 'MIDDLETOWN NY  -  BEREA KY', '10/30/20 AT 7PM -11 PM', 'HOLLISTON, MA STILL DELIVERING      YUK OLINGAN MIDDLETOWN NY TO BEREA KY CHEXK RATE CON ', 1),
(9, 2, 29, 'ABBOS ', 'Medley, FL', '10/30/20 AT 6:00AM', 'on the way to pick up  6PM -8PM GA TO  DEL 10/1 7:30PM VANDALIA  OH CHECK RATE CON ', 1),
(10, 6, 31, 'AKMAL UZ INC', 'CALEXICO, CA to MEMPHIS, TN', '10/29/20 AT-10:00-14:00 11/2/2020 9:00', 'load from CA to TN ', 1),
(11, 707, 27, 'RAMIZ', ' Pulaski, NY ---  Plainfield, IN  ', '10/31/20 at 6am-10am fcfc', 'yuk olindi', 1),
(12, 702, 31, 'MIRSOBID', 'LANSING MI ', 'EMPTY', 'DRIVER AT HOME LANSING MI  2WEEKS OFF ', 1),
(13, 9, 32, 'LAZIZBEK ', 'ANDOVER, MA- LOUISVILLE, KY', 'pik up 10/29  24/7   del  10/30  8am-5pm', 'Check ETA with the driver', 1),
(14, 8, 34, 'HUSNIDDIN', 'Swedesboro, NJ', '11/02/20 AT 8:00-15:00', 'CHECK ETA WITH DRIVER !', 1),
(15, 12, 12, '12', '12', '12', '12', 12);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(9) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `username`, `password`) VALUES
(1, 'odil', 'odilorg@gmail.com', 'odilorg', 'd7d7bad44f8f40dbac419b9b2971df07'),
(7, 'Zafar I', 'turbollc@yahoo.com', 'turbollc', '0c531628b1d8e95090f68e9f217509d3'),
(8, 'Zafar I', 'turbollc@yahoo.com', 'turbollc', '0c531628b1d8e95090f68e9f217509d3'),
(9, 'Zafar J', 'zafarorg@gmail.com', 'zafar', '538b58f65612127aff09cf6d0d9f5721'),
(10, 'umar', 'umar@gmau.com', 'umar', '7b7a53e239400a13bd6be6c91c4f6c4e'),
(11, 'isroil', 'osroil@ja.com', 'isroil', 'e0f7a4d0ef9b84b83b693bbf3feb8e6e'),
(12, 'umid', 'umid@dd.com', 'umid', '4b7f871c66be5ac7630c27bb5e21fe7f');

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
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
