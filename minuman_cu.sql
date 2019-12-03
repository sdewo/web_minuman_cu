-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 03, 2019 at 07:00 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minuman_cu`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `mail` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `mail`, `password`) VALUES
(1, 'satriadewoo@gmail.com', '$2y$10$YQTVEWnj6eMsLZuc7XuZjesheX3LInSKL0irCOeyKw6LZLdM2X4Ru');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `productQty` int(11) NOT NULL,
  `price` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `orderDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `customerID` int(11) NOT NULL,
  `notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `stock` int(11) NOT NULL,
  `price` double NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `stock`, `price`, `img`, `description`) VALUES
(1, 'Avocado Juice', 100, 22000, 'avocado juice.jpg', 'Perpaduan antara buah alpukat dengan susu kental manis memberikan kesegaran yang dapat memenuhi kebutuhan nutrisi bagi sobat acu'),
(2, 'Dark Chocolate', 100, 18000, 'dark chocolate.jpg', 'Campuran coklat bubuk dengan susu cair yang dipadukan dengan topping choco chips dapat meningkatkan jiwa sobat acu'),
(3, 'Water Fruit', 100, 17000, 'water fruit.jpg', 'Dengan perpaduan buah segar serta packaging yang menarik dan mudah dibawa kemana-mana menjadikan menu ini sebagai teman yang cocok buat sobat acu'),
(4, 'Brown Sugar', 100, 18000, 'brown sugar.jpg', 'Perpaduan antara brown sugar dengan susu cair segar dapat mengembalikan keceriaan bagi sobat acu\r\n'),
(5, 'Original Coffee (Cold)', 100, 18000, 'ice original coffee.jpg', 'Aroma khas dari biji kopi asli yang dipadukan dengan es batu dapat membuat pikiran sobat acu jadi rileks dan tetap segar'),
(6, 'Original Coffee  (Hot)', 100, 16000, 'original coffee.jpg', 'Aroma khas dari biji kopi asli dapat membuat pikiran sobat acu jadi rileks kembali'),
(7, 'Espresso (Cold)', 100, 18000, 'espresso c.png', 'Aroma dari bubuk kopi yang diseduh dengan air panas bertekanan tinggi memberikan kehangatan serta membuat pikiran sobat acu menjadi lebih rileks '),
(8, 'Espresso (Hot)', 100, 16000, 'espresso.jpg', 'Aroma dari bubuk kopi yang diseduh dengan air panas bertekanan tinggi yang dipadukan dengan es batu memberikan kehangatan serta membuat pikiran sobat acu menjadi lebih rileks '),
(9, 'Cappucino (Cold)', 100, 18000, 'cappucino c.jpg', 'Perpaduan antara espresso, susu steam dan foam serta es batu dapat membuat hari sobat acu                                             ceria kembali'),
(10, 'Cappucino (Hot)', 100, 16000, 'cappucino.jpg', 'Perpaduan antara espresso, susu steam dan foam dapat membuat hari sobat acu                                             ceria kembali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ck_product` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
