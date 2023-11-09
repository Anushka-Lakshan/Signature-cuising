-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2023 at 07:30 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signature`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `role` varchar(25) NOT NULL DEFAULT 'staff'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `password`, `role`) VALUES
(1, 'Anushka', 'Anushka.admin', '3c20bab706681593747d7077ed1f55a74f7ac26ceb70ca4ada6fa632f2491ff1', 'admin'),
(11, 'Lakshan', 'Lakshan.staff', 'b8e9f3a2def838e2e0bc184ed725eb7f6a43aa4dcb6f776d684a14cc33e60220', 'stuff'),
(14, 'Uchtha', 'uchitha.admin', '435ec964bda95449531228c2fd78475d42ae51b7a807312f5a9bf998b594fde7', 'admin'),
(15, 'Anushka lakshanEE#23', 'Anushka.admingfdgfdg', 'd065adff6766481caa3f328e5d5b9f43a568427eefb28275a9a3423f9eaf0dfa', 'admin'),
(16, 'Anushka lakshanEE#23', 'Anushka.admingfdgfdgasd', 'd065adff6766481caa3f328e5d5b9f43a568427eefb28275a9a3423f9eaf0dfa', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `Branch_Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Tel_no` varchar(50) NOT NULL,
  `Latitude` varchar(50) NOT NULL,
  `Longitude` varchar(50) NOT NULL,
  `SeatCapacity` int(11) NOT NULL DEFAULT 50
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`Branch_Id`, `Name`, `Address`, `Tel_no`, `Latitude`, `Longitude`, `SeatCapacity`) VALUES
(1, 'Colombo Branch', '123 Colombo-Galle Highway, Colombo(00300), Sri Lanka', '+94 112 123456', '6.921929', '79.846317', 50),
(2, 'Maharagama Branch', '456 Highway Road, Maharagama(10280), Sri Lanka', '+94 112 123457', '6.846285', '79.928109', 50),
(3, 'Kandy Branch', 'S.W.R.D.Bandaranayake Mawatha, Kandy 20000', '-94 11 2088911', '7.290020', '80.632160', 100);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Offers'),
(2, 'Rice Specialities'),
(3, 'Noodles'),
(7, 'Kottu');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `msg`) VALUES
(1, 'Anushka Lakshan', 'anushkalakshan1996@gmail.com', 'This is test msg...'),
(2, 'Dasun dana', 'Dasun@email.com', 'HI, i love this restaurant!!! ❤❤❤'),
(3, 'peshala devinda', 'peshala@email.com', 'this is great!! 👌💕👏');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Customer_Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `NIC` varchar(25) NOT NULL,
  `DOB` date NOT NULL,
  `Password` varchar(500) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `PreparedBranch` int(11) NOT NULL,
  `Reg_Date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Customer_Id`, `Name`, `Email`, `Phone`, `NIC`, `DOB`, `Password`, `Address`, `PreparedBranch`, `Reg_Date`) VALUES
(1, 'Anushka Lakshan', '4thhokageanushka@gmail.com', '0766116604', '465466546544', '1996-12-11', 'ac55106c43967728dbe7dc96d9b7dc1dbc8ff6c55632e1988916dd2f6dc5197c', 'First Lane,Samaja Road,Pathiragoda,Navinna,maharagama', 2, '2023-10-28 22:02:40'),
(7, 'Uchitha Kavinda', 'uperera@gmail.com', '0715896327', '465466546544', '2000-05-17', 'adc09e98cf9e53f3ed385da82e494811449ccd8f0edf2d4af512ffd2dabe4972', 'First Lane,Samaja Road,Pathiragoda\r\n5/18\r\n\r\nUchi@132', 1, '2023-11-05 01:22:31'),
(17, 'Dasun', 'anushkalakshan1996@gmail.comhfhfgfdfdgfdgdfdfg', '0766116604', '465466546544', '2000-01-01', '7b016b6cca21392131487c06afd7bd7e47915b9ad8c240577be662c6cec7427f', 'First Lane,Samaja Road,Pathiragoda\r\n5/18', 1, '2023-11-05 02:32:06');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `order_details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`order_details`)),
  `status` varchar(30) NOT NULL DEFAULT 'Pending',
  `ordered_dt` datetime NOT NULL,
  `confirmed_by` varchar(50) DEFAULT NULL,
  `canceled_by` varchar(50) DEFAULT NULL,
  `location` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `user_note` varchar(1000) DEFAULT NULL,
  `payment_method` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `admin_note` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `name`, `branch_id`, `order_details`, `status`, `ordered_dt`, `confirmed_by`, `canceled_by`, `location`, `user_note`, `payment_method`, `address`, `admin_note`) VALUES
(1, 1, 'Anushka lakshan', 1, '{\"items\":[{\"name\":\"Chicken Special Biriyani\",\"price\":\"1300\",\"quantity\":\"2\"},{\"name\":\"Mix Special Biriyani\",\"price\":\"1500\",\"quantity\":1}],\"total\":4100,\"delivery\":300,\"sub_total\":4400}', 'Pending', '2023-11-08 11:16:27', '', '', '{\"latitude\":\"7.0046719\",\"longitude\":\"79.9542002\"}', 'This is test', 'Online', 'First Lane,Samaja Road,Pathiragoda,maharagaa', ''),
(3, 1, 'Anushka lakshan', 2, '{\"items\":[{\"name\":\"Chicken Special Biriyani\",\"price\":\"1300\",\"quantity\":\"3\"},{\"name\":\"Mix Special Biriyani\",\"price\":\"1500\",\"quantity\":\"2\"}],\"total\":6900,\"delivery\":300,\"sub_total\":7200}', 'Pending', '2023-11-08 11:19:14', '', '', '{\"latitude\":\"7.0046719\",\"longitude\":\"79.9542002\"}', '', 'Online', 'First Lane,Samaja Road,Pathiragoda,maharagaa', ''),
(4, 1, 'Anushka lakshan', 2, '{\"items\":[{\"name\":\" Fork Biriyani\",\"price\":\"1600\",\"quantity\":2},{\"name\":\"Mix Jombo Kottu\",\"price\":\"1800\",\"quantity\":1}],\"total\":5000,\"delivery\":300,\"sub_total\":5300}', 'Pending', '2023-11-09 04:29:21', '', '', '{\"latitude\":\"7.028736\",\"longitude\":\"79.9670272\"}', 'Love ', 'Cash', 'First Lane,Samaja Road,Pathiragoda,maharagaa', ''),
(5, 1, 'Anushka Lakshan', 2, '{\"items\":[{\"name\":\"Mix Special Biriyani\",\"price\":\"1500\",\"quantity\":1}],\"total\":1500,\"delivery\":300,\"sub_total\":1800}', 'Pending', '2023-11-09 12:08:37', '', '', '{\"latitude\":\"7.028736\",\"longitude\":\"79.9670272\"}', '', 'Online', 'First Lane,Samaja Road,Pathiragoda,Navinna,maharagama', ''),
(6, 1, 'Anushka Lakshan', 1, '{\"items\":[{\"name\":\"Mix Special Noodles\",\"price\":\"1600\",\"quantity\":1}],\"total\":1600,\"delivery\":300,\"sub_total\":1900}', 'Pending', '2023-11-09 12:38:33', '', '', '', '', 'Cash', 'First Lane,Samaja Road,Pathiragoda,Navinna,maharagama', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `img` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `visibility` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `img`, `category_id`, `visibility`) VALUES
(6, 'Chicken Special Biriyani', 1300, 'Indulge in the savory delight of our Chicken Special Biryani. This culinary masterpiece features tender, marinated chicken cooked to perfection, layered with fragrant basmati rice and an aromatic blend of spices. Each bite is a symphony of flavors, promising an unforgettable biryani experience.', './assets/Food-imgs/Food_img_65480114226c4.jpg', 2, 1),
(7, 'Mix Special Biriyani', 1500, 'Indulge in a culinary masterpiece with our Mix Special Biriyani, a harmonious blend of chicken, egg, pork, sea-food, and beef, expertly cooked with aromatic spices and fragrant basmati rice. This flavorful medley is a celebration of diverse tastes, creating a symphony of savory goodness in every bite.', './assets/Food-imgs/Food_img_6547df4488cc5.jpg', 2, 1),
(8, 'Mix Special Noodles', 1600, 'Indulge in a tantalizing fusion of flavors with our Mix Special Noodles. This savory dish combines tender chicken, succulent seafood, flavorful pork, juicy beef, and rich egg, all stir-fried to perfection and served over a bed of delicate noodles. A medley of textures and tastes awaits in every delicious bite', './assets/Food-imgs/Food_img_6547dfd40033c.jpg', 3, 1),
(9, 'Mix Jombo Kottu', 1800, 'Indulge in the flavorful medley of our Mix Jombo Kottu, a tantalizing combination of succulent chicken, perfectly cooked eggs, tender pork, fresh seafood, and savory beef. This sizzling stir-fry is a fusion of tastes and textures that will delight your palate, creating a harmonious symphony of flavors in every bite.', './assets/Food-imgs/Food_img_6547e060140e7.jpg', 7, 1),
(10, ' Fork Biriyani', 1600, 'Savor the exquisite fusion of flavors with our Fork Biriyani, where tender, marinated meat, and aromatic basmati rice are expertly blended, creating a symphony of tastes in every mouthful. The enticing aroma and perfectly spiced meat make this dish an unforgettable culinary experience.', './assets/Food-imgs/Food_img_6547e1a3521a0.jpg', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `Branch_Id` int(11) NOT NULL,
  `Customer_id` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `persons` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `Confirmed_by` varchar(50) DEFAULT NULL,
  `Canceled_by` varchar(50) DEFAULT NULL,
  `note` varchar(200) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `Branch_Id`, `Customer_id`, `date`, `time`, `persons`, `email`, `name`, `phone`, `Confirmed_by`, `Canceled_by`, `note`, `status`) VALUES
(1, 2, 1, '2023-11-09', '16:39:00', 3, '4thhokageanushka@gmail.com', 'Anushka lakshan', '0766116604', NULL, NULL, 'gfsgsdg', 'Pending'),
(2, 2, 0, '2023-11-10', '20:30:00', 50, '4thhokageanushka@gmail.com', 'John cena', '0766116604', NULL, NULL, 'sdsadsadadasda', 'Pending'),
(3, 1, 1, '2023-11-22', '16:30:00', 4, '4thhokageanushka@gmail.com', 'Anushka lakshan', '0766116604', NULL, NULL, 'make it fantastic!!', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`Branch_Id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`Customer_Id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `Branch_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `Customer_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
