-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 06, 2020 at 09:46 AM
-- Server version: 5.7.28-0ubuntu0.19.04.2
-- PHP Version: 7.2.24-0ubuntu0.19.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pachpee`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderSummary`
--

CREATE TABLE `orderSummary` (
  `orderid` int(20) NOT NULL,
  `userid` int(10) NOT NULL,
  `noOfMembers` int(20) NOT NULL,
  `timeOfComming` varchar(25) NOT NULL,
  `Hors d'oeuvres` int(20) NOT NULL,
  `Amuse-bouche` int(20) NOT NULL,
  `Bouillabaisse` int(20) NOT NULL,
  `Feijoada` int(20) NOT NULL,
  `Leche Asada` int(20) NOT NULL,
  `Lemon Meringue Pie` int(20) NOT NULL,
  `Brigadeiros` int(20) NOT NULL,
  `Bunuelos` int(20) NOT NULL,
  `HOT TODDY` int(20) NOT NULL,
  `The Hornitos Hot Shotty` int(20) NOT NULL,
  `LAST-MINUTE MULLED WINE` int(20) NOT NULL,
  `HEATED AFFAIR` int(20) NOT NULL,
  `Guinness Of Ireland` int(20) NOT NULL,
  `Pina Colada` int(20) NOT NULL,
  `GIN of ENGLAND` int(20) NOT NULL,
  `Campari` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderSummary`
--

INSERT INTO `orderSummary` (`orderid`, `userid`, `noOfMembers`, `timeOfComming`, `Hors d'oeuvres`, `Amuse-bouche`, `Bouillabaisse`, `Feijoada`, `Leche Asada`, `Lemon Meringue Pie`, `Brigadeiros`, `Bunuelos`, `HOT TODDY`, `The Hornitos Hot Shotty`, `LAST-MINUTE MULLED WINE`, `HEATED AFFAIR`, `Guinness Of Ireland`, `Pina Colada`, `GIN of ENGLAND`, `Campari`) VALUES
(3, 26, 1, '2019-12-14T19:10', 1, 1, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 26, 1, '2019-12-18T12:46', 2, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `code` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `code`) VALUES
(1, 'Hors d\'oeuvres', '22', 'orderpageimages/hors1.jpg', '991'),
(2, 'Amuse-bouche', '24', 'orderpageimages/Amuse2.jpg', '992'),
(3, 'Bouillabaisse', '27', 'orderpageimages/3.jpg', '993'),
(4, 'Feijoada', '11', 'orderpageimages/Feijoada3.jpg', '994'),
(5, 'Leche Asada', '12', 'orderpageimages/desertleche1.jpg', '995'),
(6, 'Lemon Meringue Pie', '12', 'orderpageimages/lemon4.jpg', '996'),
(7, 'Brigadeiros', '9', 'orderpageimages/brig3.jpg', '997'),
(8, 'Bunuelos', '8', 'orderpageimages/edit.jpg', '998'),
(9, 'HOT TODDY', '22', 'drinks/recipe-hot-toddy.jpg', '999'),
(10, 'The Hornitos Hot Shotty', '24', 'drinks/the-hornitos-hot-shotty.jpeg', '9910'),
(11, 'LAST-MINUTE MULLED WINE', '27', 'drinks/last-minute-mulled-wine-2.jpg', '9911'),
(12, 'HEATED AFFAIR', '11', 'drinks/fa-heated_affair.jpg', '9912'),
(13, 'Guinness Of Ireland', '12', 'drinks/guinness.jpg', '9913'),
(14, 'Pina Colada', '12', 'drinks/pina-colada.jpg', '9914'),
(15, 'GIN of ENGLAND', '9', 'drinks/gin.jpg', '9915'),
(16, 'Campari', '8', 'drinks/drinkingcampari.jpg', '9916');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userindex` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `lastname`, `email`, `phonenumber`, `password`, `userindex`) VALUES
('Ayush', 'Bansal', 'example@gmail.com', '1234567890', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderSummary`
--
ALTER TABLE `orderSummary`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userindex`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderSummary`
--
ALTER TABLE `orderSummary`
  MODIFY `orderid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userindex` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
