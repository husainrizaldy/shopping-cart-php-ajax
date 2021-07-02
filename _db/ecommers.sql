-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 08:23 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommers`
--

-- --------------------------------------------------------

--
-- Table structure for table `em_admin`
--

CREATE TABLE `em_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `em_product`
--

CREATE TABLE `em_product` (
  `id_product` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `em_product`
--

INSERT INTO `em_product` (`id_product`, `name`, `image`, `category`, `author`, `price`) VALUES
(1, 'The Dark Is Rising', 'The-Dark-Is-Rising.jpg', 'Science fiction', 'Susan Cooper', 76000.00),
(2, 'Over Sea, Under Stone', 'Over-Sea.jpg', 'Science fiction', 'Susan Cooper', 70000.00),
(3, 'Greenwitch', 'Greenwitch.jpg', 'Science fiction', 'Susan Cooper', 95000.00),
(4, 'The Cruel Prince', 'The-Cruel-Prince.jpg', 'Thriller', 'Holly Black', 90000.00),
(5, 'Earthsea Series', 'Earthsea-Series.jpg', 'Thriller', 'Ursula K. Le Guin', 80000.00),
(6, 'Eldest', 'Christopher-Paolini.jpg', 'Thriller', 'Christopher Paolini', 55000.00),
(7, 'Murder in Mesopotamia', 'Murder-in-Mesopotamia.jpg', 'Drama', 'Murder-in-Mesopotamia.jpg', 99000.00),
(8, 'The Murder of Roger Ackroyd', 'Roger-Ackroyd.jpg', 'Mystery', 'Agatha Christie', 90000.00),
(9, 'They Do It With Mirrors', 'They-Do-It-With-Mirrors.jpg', 'Romance', 'Agatha Christie', 70000.00),
(10, 'The Fall', 'the-fall.jpg', 'Anthology', 'Albert Camus', 80000.00);

-- --------------------------------------------------------

--
-- Table structure for table `em_user`
--

CREATE TABLE `em_user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `em_user`
--

INSERT INTO `em_user` (`id_user`, `name`, `username`, `password`) VALUES
(2, 'chen', 'chen', '123qwe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `em_admin`
--
ALTER TABLE `em_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `em_product`
--
ALTER TABLE `em_product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `em_user`
--
ALTER TABLE `em_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `em_admin`
--
ALTER TABLE `em_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `em_product`
--
ALTER TABLE `em_product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `em_user`
--
ALTER TABLE `em_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
