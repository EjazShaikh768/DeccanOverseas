-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2022 at 08:15 PM
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
-- Database: `deccan_overseas`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE `category_table` (
  `cat_id` int(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `quntity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_table`
--

INSERT INTO `category_table` (`cat_id`, `category_name`, `quntity`) VALUES
(1, 'FRUITS', ''),
(2, 'VEGETABLES', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `alt_phone` int(255) NOT NULL,
  `aadhar` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pincode` int(255) NOT NULL,
  `pan_no` varchar(255) NOT NULL,
  `ac_no` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `bank_ifsc` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `joining_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `full_name`, `phone`, `alt_phone`, `aadhar`, `address`, `pincode`, `pan_no`, `ac_no`, `bank_name`, `bank_ifsc`, `email`, `password`, `joining_date`) VALUES
(1, 'Ejaz Shaikh', 2147483647, 2147483647, 2147483647, 'camp', 480011, 'DNEPB2414k', '569854698565', 'SBI', ' SBI5265', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `image_gallery`
--

CREATE TABLE `image_gallery` (
  `img_id` int(255) NOT NULL,
  `img_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `full_name`, `phone`, `email`, `type`, `product`, `message`, `state`, `country`) VALUES
(1, 'Ejaz Shaikh', '123', 'admin@gmail.com', '0', '9', 'messages ', '', ''),
(2, 'Hussain Pathrawala', '123', 'ishan@gmail.com', '1', '2', 'this is great company good quality with the  good price', 'MADHYA PARDESH', 'INDIA'),
(3, 'Hussain Pathrawala', '8446931810', 'hussain837@gmail.com', '1', '3', 'good quality and very good service and good packing\nthis company provide good service\nthank you Decaan Overseas ', 'DELHI', 'INDIA'),
(4, 'Tausif Patel', '9988665544', 'tausifpatel88@gmail.com', '1', '8', 'Good Product and good service and very good company and valuable Deal', 'UTTAR PARDESH', 'INDIA');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `product_name`, `product_image`, `product_category`, `product_description`) VALUES
(2, 'APPLE', '', 'FRUITS', 'Apples are a popular fruit, containing antioxidants, vitamins, dietary fiber, and a range of other nutrients.'),
(3, 'BANANA', '', 'FRUITS', ' 	Bananas are among the most important food crops on the planet. They come from a family of plants called Musa that are native to Southeast Asia and grown in many of the warmer areas of the world. Bananas are a healthy source of fiber, potassium, vitamin '),
(4, 'ORANGE', '', 'FRUITS', 'Orange skin is often called \"orange peel\". Oranges are an important food source in many parts of the world for several reasons. They are a commonly available source of vitamin C'),
(5, 'GRAPES', '', 'FRUITS', 'Grapes are a type of fruit that grow in clusters of 15 to 300, and can be crimson, black, dark blue, yellow, green, orange, and pink. \"White\" grapes are actually green in color, and are evolutionarily derived from the purple grape'),
(6, 'MANGO', '', 'FRUITS', 'A mango is an edible stone fruit produced by the tropical tree Mangifera indica which is believed to have originated in the region between northwestern'),
(7, 'PINEAPPLE', '', 'FRUITS', 'Pineapples are tropical fruits that are rich in vitamins, enzymes and antioxidants. They may help boost the immune system, build strong bones and aid indigestion. Plus, despite their sweetness, pineapples are low in calories'),
(8, 'WATERMELON', '', 'FRUITS', 'watermelon, (Citrullus lanatus), succulent fruit and vinelike plant of the gourd family (Cucurbitaceae), native to tropical Africa and cultivated around the world. The fruit contains vitamin A and some vitamin C and is usually eaten raw. The rind is somet'),
(9, 'ONION', '', 'VEGETABLES', 'an onion is not a fruit because the edible part is not grown from the flower of the plant and it doesn\'t contain seeds. Therefore, and onion cannot be classified as a fruit.'),
(10, 'GARLIC', '', 'VEGETABLES', 'Garlic fruit, or bitter garcinia (G. spicata), is planted as an ornamental in tropical salt-spray oceanfront areas.'),
(11, 'GINGER', '', 'VEGETABLES', 'Ginger (Zingiber officinale) is a flowering plant whose rhizome, ginger root or ginger, is widely used as a spice and a folk medicine.'),
(12, 'BROCCOLI', '', 'VEGETABLES', 'Broccoli is high in many nutrients, including fiber, vitamin C, vitamin K, iron, and potassium. It also boasts more protein than most other vegetables. This green veggie can be enjoyed both raw and cooked, but recent research shows that gentle steaming pr'),
(13, 'CAPSICUM', '', 'VEGETABLES', 'Capsicum, also known as red pepper or chili pepper, is an herb. Its fruit is commonly applied to the skin for arthritis pain and other conditions. The fruit of the capsicum plant contains a chemical called capsaicin. Capsaicin is what seems to help reduce');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `wphone` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_table`
--
ALTER TABLE `category_table`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `image_gallery`
--
ALTER TABLE `image_gallery`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_table`
--
ALTER TABLE `category_table`
  MODIFY `cat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `image_gallery`
--
ALTER TABLE `image_gallery`
  MODIFY `img_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
