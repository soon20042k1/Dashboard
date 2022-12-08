-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 01:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboard_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `role` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `image`, `title`, `role`, `status`) VALUES
(1, 'John', 'johnemail.com', 'Picture1.png', 'software engineer', 'web developer', 'active'),
(2, 'Nick', 'nick@gmail.com', 'Picture1.png', 'Pentester', 'Web developer', 'active'),
(3, 'Mina', 'mina@gmail.com', 'Picture1.png', 'Tester', 'Web developer', 'active'),
(4, 'Karik', 'karik@gmail.com', 'Picture1.png', 'SOC', 'network engineer', 'active'),
(5, 'Sad girl', 'sad@gmail.com', 'Picture1.png', 'fall in love', 'dev love', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `quantity` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category`, `description`, `image`, `price`, `quantity`) VALUES
(1, 'White Shoes', 'shoes', 'white shoes', 'Picture1.png', '155.00', 10),
(2, 'Bag', 'bags', 'black bag', 'Picture1.png', '250.00', 5),
(3, 'T-Shirt', 'shirts', 'black-shirt', 'Picture1.png', '100.00', 4),
(4, 'Trouser', 'trousers', 'Pink-Trouser', 'Picture1.png', '130.00', 10),
(5, 'Sneaker', 'sneakers', 'blue-sneaker', 'Picture1.png', '200.00', 5),
(6, 'Choker', 'chokers', 'silver-choker', 'Picture1.png', '50.00', 2),
(7, 'Towel', 'towels', 'green-towel', 'Picture1.png', '80.00', 6),
(8, 'Boots', 'Boots', 'black boots', 'Picture1.png', '160.00', 8),
(9, 'Gloves', 'gloves', 'red glovers', 'Picture1.png', '20.00', 6),
(10, 'Sandal', 'sandals', 'basic sandals', 'Picture1.png', '200.00', 2),
(11, 'Sandal', 'shoes', 'sandal', 'Sandal.png', '100.00', 5);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `user_id` decimal(6,2) NOT NULL,
  `employee_name` varchar(100) NOT NULL,
  `quantify` int(11) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `total` decimal(6,2) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `product_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `user_id`, `employee_name`, `quantify`, `price`, `total`, `date`, `product_name`) VALUES
(2, '1.00', 'Jonh', 5, '200.00', '1000.00', '2022-12-13 22:58:39', 'Shoes'),
(3, '2.00', '21', 4, '200.00', '1000.00', '2022-12-05 23:06:15', 'trousers'),
(4, '4.00', '6', 2, '150.00', '2000.00', '2022-12-05 23:06:48', 'Sneaker');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
