-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2019 at 06:56 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jenyshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_email` varchar(255) NOT NULL,
  `a_password` varchar(255) NOT NULL,
  `a_phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_email`, `a_password`, `a_phone`) VALUES
(9, 'Sameer', 'Sameer@gmail.com', 'sameer', '03113232336'),
(11, 'hamza', 'hamza@gmail.com', 'hamza', '031123233232'),
(13, 'Shahraiz', 'shahraiz@gmail.com', 'shahraiz', '03113232334');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_image`) VALUES
(1, 'Rings', 'RINGS.jpg'),
(4, 'Necklace', 'NECKLACE.jpg'),
(5, 'Bangles', 'BRACLETS.jpg'),
(6, 'Earrings', 'EARRINGS.jpg'),
(7, 'Bracelets', 'BANGLES.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `lastname`, `email`, `subject`, `message`) VALUES
(1, 'Shazil', 'Shah', 'shazil@gmail.com', 'Feedback', 'Good Work');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_password` varchar(255) NOT NULL,
  `c_phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_name`, `c_email`, `c_password`, `c_phone`) VALUES
(1, 'Syed Asad Shah', 'asadtrivedi@gmail.com', 'asad', '031323434343'),
(3, 'Shahraiz', 'shahraiz@gmail.com', 'shahraiz', '03113232334'),
(4, 'Ali', 'ali@gmail.com', '123', '03111111111');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `I_id` int(11) NOT NULL,
  `Pro_Id` int(11) NOT NULL,
  `O_Id` int(11) NOT NULL,
  `Pro_Name` varchar(255) NOT NULL,
  `Pro_PerUnittPrice` int(11) NOT NULL,
  `Pro_Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`I_id`, `Pro_Id`, `O_Id`, `Pro_Name`, `Pro_PerUnittPrice`, `Pro_Quantity`) VALUES
(1, 33, 1, 'Bracelets with Zircon', 5135, 1),
(2, 14, 2, 'Necklace Set with Chetum', 46, 1),
(3, 29, 2, 'Rings with Blue Onyx', 47, 1),
(4, 33, 2, 'Bracelets with Zircon', 5135, 1),
(5, 32, 3, 'Bracelets with Pearl', 46, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `O_Id` int(11) NOT NULL,
  `O_Total_Amount` int(11) NOT NULL,
  `O_Customer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`O_Id`, `O_Total_Amount`, `O_Customer`) VALUES
(1, 5135, NULL),
(2, 5228, NULL),
(3, 46, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `pro_des` varchar(255) NOT NULL,
  `pro_image` varchar(255) NOT NULL,
  `pro_price` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `pro_type` int(11) NOT NULL,
  `keywords` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_name`, `pro_des`, `pro_image`, `pro_price`, `cat_id`, `pro_type`, `keywords`) VALUES
(9, 'Necklace Set with Zircon', 'Necklace Set stud with Cubic Zircons, 925 Sterling Silver, White Gold & Yellow Gold Electroplated', 'Necklace set with Zircon.jpg', 26500, 4, 4, 'necklace,zricon,necklece'),
(10, 'Dholna Necklace Set', 'Dholna Set stud with Chetum, Jade, Pearls ans Cubic Zircons, 925 Sterling Silver, Yellow Gold Electroplated', 'Dholna Necklace Set.jpg', 47360, 4, 4, 'necklace,dholna'),
(11, 'Dhurri Necklace Set', 'Dhurri Set in Mala Style stud with Multi Color Stones with Kundan Work and Meena Kari', 'Dhurri Necklace Set.jpg', 90865, 4, 2, 'necklace,dhurri'),
(12, 'Chokar Set with Nauratan', 'Double Sided Chokar Set Stud with Nauratan, Kundan and Pearls, 925 Sterling Silver, Yellow Gold Electroplated', 'Chokar Set with Nauratan.jpg', 67256, 4, 1, 'chokar,nauratan'),
(13, 'Nauratan Necklace Set', 'Necklace Set stud with Nauratan, 925 Sterling Silver, Yellow Gold Electroplated', 'Nauratan Necklace Set.jpg', 48680, 4, 1, 'nauratan,necklace'),
(14, 'Necklace Set with Chetum', 'Necklace Set stud with Chetum, Jade and Cubic Zircons, 925 Sterling Silver, Yellow Gold Electroplated', 'Necklace set with Chetum.jpg', 46586, 4, 1, 'necklace,chetum'),
(15, 'Necklace Set with Multicolor Stone', 'Necklace Set stud with Chetum, Jade and Cubic Zircons, 925 Sterling Silver, Yellow Gold Electroplated', 'Necklace set with Multicolor stone.jpg', 68750, 4, 4, 'necklace,multicolor'),
(16, 'BANGLE WITH MULTISTONE', 'Dhurri Set in Mala Style stud with Multi Color Stones with Kundan Work and Meena Kari', 'BANGLE WITH MULTISTONE.jpg', 46960, 5, 1, 'bangle,multistone'),
(17, 'BANGLE WITH POLKIES', 'Necklace Set stud with Chetum, Jade and Cubic Zircons, 925 Sterling Silver, Yellow Gold Electroplated', 'BANGLE WITH POLKIES.jpg', 26125, 5, 1, 'bangle,polkies'),
(18, 'BANGLE WITH CHEETUM', 'Double Sided Chokar Set Stud with Nauratan, Kundan and Pearls, 925 Sterling Silver, Yellow Gold Electroplated', 'BANGLE WITH CHEETUM.jpg', 47160, 5, 4, 'bangle,cheetum'),
(19, 'BANGLE WITH ZIRCON', 'Necklace Set stud with Nauratan, 925 Sterling Silver, Yellow Gold Electroplated', 'BANGLE WITH ZIRCON.jpg', 47440, 5, 4, 'bangle,zircon'),
(20, 'ROSE GOLD BANGLE', 'Dholna Set stud with Chetum, Jade, Pearls ans Cubic Zircons, 925 Sterling Silver, Yellow Gold Electroplated', 'ROSE GOLD BANGLE.jpg', 26555, 5, 2, 'rose,gold,bangle'),
(21, 'Tops with Cheetum and Pearl', 'Dholna Set stud with Chetum, Jade, Pearls ans Cubic Zircons, 925 Sterling Silver, Yellow Gold Electroplated', 'Tops with Cheetum and Pearl.jpg', 5135, 6, 1, 'tops,cheetum,pearl,ear,earrings'),
(22, 'Earrings with Cheetum', 'Dhurri Set in Mala Style stud with Multi Color Stones with Kundan Work and Meena Kari', 'Earrings with Cheetum.jpg', 26123, 6, 4, 'earrings,cheetum,tops,ear'),
(23, 'Earrings with Multi Stone', 'Necklace Set stud with Nauratan, 925 Sterling Silver, Yellow Gold Electroplated', 'Earrings with Multi Stone.jpg', 47789, 6, 1, 'earrings,multistone,stone,tops,ears'),
(24, 'Tops with Cheetum', 'Dhurri Set in Mala Style stud with Multi Color Stones with Kundan Work and Meena Kari', 'Tops with Cheetum.jpg', 26360, 6, 2, 'tops,cheetum,earrings'),
(25, 'Tops with Jade', 'Necklace Set stud with Nauratan, 925 Sterling Silver, Yellow Gold Electroplated', 'Tops with Jade.jpg', 47111, 6, 2, 'tops,jade,earrings'),
(26, 'Kalma Ring with Zircon', 'Dhurri Set in Mala Style stud with Multi Color Stones with Kundan Work and Meena Kari', 'Kalma Ring with Zircon.jpg', 3200, 1, 2, 'kalma,ring,zircon,rings'),
(27, 'Ring with Jade', 'Double Sided Chokar Set Stud with Nauratan, Kundan and Pearls, 925 Sterling Silver, Yellow Gold Electroplated', 'Ring with Jade.jpg', 5135, 1, 2, 'ring,jade,rings'),
(28, 'Ring with Green Onyx', 'Necklace Set stud with Nauratan, 925 Sterling Silver, Yellow Gold Electroplated', 'Ring with Green Onyx.jpg', 26456, 1, 2, 'ring,green,onyx,rings'),
(29, 'Rings with Blue Onyx', 'Necklace Set stud with Nauratan, 925 Sterling Silver, Yellow Gold Electroplated', 'RIng with Blue Onyx.jpg', 47000, 1, 1, 'ring,blue,onyx,rings'),
(30, 'KARA WITH POLKIES', 'Necklace Set stud with Nauratan, 925 Sterling Silver, Yellow Gold Electroplated', 'KARA WITH POLKIES.jpg', 26023, 7, 4, 'kara,polkies,bracelets'),
(31, 'Bracelet with Ayat Ul Kursi', 'Double Sided Chokar Set Stud with Nauratan, Kundan and Pearls, 925 Sterling Silver, Yellow Gold Electroplated', 'Bracelet with Ayat Ul Kursi.jpg', 46405, 7, 4, 'bracelets,ayatulkursi'),
(32, 'Bracelets with Pearl', 'Necklace Set stud with Chetum, Jade and Cubic Zircons, 925 Sterling Silver, Yellow Gold Electroplated', 'Bracelets with Pearl.jpg', 46420, 7, 4, 'bracelets,pearl'),
(33, 'Bracelets with Zircon', 'Dhurri Set in Mala Style stud with Multi Color Stones with Kundan Work and Meena Kari', 'Bracelets with Zircon.jpg', 5135, 6, 1, 'bracelets,zircon');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id` int(11) NOT NULL,
  `pro_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `pro_type`) VALUES
(1, 'Featured'),
(2, 'New'),
(4, 'Basics');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`),
  ADD UNIQUE KEY `a_name` (`a_name`),
  ADD UNIQUE KEY `a_email` (`a_email`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`I_id`),
  ADD KEY `fk_order_id` (`O_Id`),
  ADD KEY `fk_pro_id` (`Pro_Id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`O_Id`),
  ADD KEY `O_Customer` (`O_Customer`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `fk_cat_key` (`cat_id`),
  ADD KEY `pro_type` (`pro_type`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `I_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `O_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `fk_order_id` FOREIGN KEY (`O_Id`) REFERENCES `orders` (`O_Id`),
  ADD CONSTRAINT `fk_pro_id` FOREIGN KEY (`Pro_Id`) REFERENCES `products` (`pro_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_customer_id` FOREIGN KEY (`O_Customer`) REFERENCES `customer` (`c_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_cat_key` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`),
  ADD CONSTRAINT `fk_type_key` FOREIGN KEY (`pro_type`) REFERENCES `product_type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
