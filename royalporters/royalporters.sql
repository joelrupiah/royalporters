-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2020 at 04:18 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `royalporters`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(255) NOT NULL,
  `about_details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` int(25) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `image_path`) VALUES
(6, '../img/ex.jpg'),
(7, '../img/ex1.jpg'),
(8, '../img/avatar.jpg'),
(10, '../img/ex.jpg'),
(11, '../img/avatar6.jpg'),
(12, '../img/avatar9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(25) NOT NULL,
  `pro_id` int(100) NOT NULL,
  `session_id` int(100) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `pro_quantity` int(11) NOT NULL,
  `pro_price` varchar(255) NOT NULL,
  `total_amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` int(11) NOT NULL,
  `expire_date` date DEFAULT NULL,
  `cart_id` varchar(191) DEFAULT NULL,
  `items` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`id`, `expire_date`, `cart_id`, `items`) VALUES
(45, '2020-03-25', NULL, '[{\"id\":\"88 \",\"quantity\":2},{\"id\":\"91 \",\"quantity\":2},{\"id\":\"97 \",\"quantity\":\"1\"}]'),
(46, '2020-03-25', NULL, '[{\"id\":\"86 \",\"quantity\":\"1\"}]'),
(47, '2020-03-25', NULL, '[{\"id\":\"84 \",\"quantity\":2},{\"id\":\"97 \",\"quantity\":3},{\"id\":\"94 \",\"quantity\":2},{\"id\":\"86 \",\"quantity\":\"1\"}]'),
(48, '2020-03-25', NULL, '[{\"id\":\"84\",\"quantity\":\"1\"},{\"id\":\"86\",\"quantity\":\"1\"},{\"id\":\"94\",\"quantity\":\"1\"},{\"id\":\"97\",\"quantity\":2},{\"id\":\"95\",\"quantity\":\"1\"}]'),
(53, '2020-03-26', NULL, '[{\"id\":\"96\",\"quantity\":2},{\"id\":\"94\",\"quantity\":3}]'),
(55, '2020-03-15', NULL, '[{\"id\":\"97\",\"quantity\":3},{\"id\":\"93\",\"quantity\":4},{\"id\":\"91\",\"quantity\":2}]'),
(57, '2020-03-15', NULL, '[{\"id\":\"93\",\"quantity\":4},{\"id\":\"97\",\"quantity\":2},{\"id\":\"94\",\"quantity\":4},{\"id\":\"92\",\"quantity\":\"1\"}]'),
(58, '2020-03-15', NULL, '[{\"id\":\"93\",\"quantity\":3},{\"id\":\"97\",\"quantity\":4},{\"id\":\"96\",\"quantity\":2}]'),
(60, '2020-03-16', NULL, '[{\"id\":\"93\",\"quantity\":3}]'),
(63, '2020-04-14', NULL, '[{\"id\":\"92\",\"quantity\":2}]'),
(64, '2020-04-28', NULL, '[{\"id\":\"97\",\"quantity\":\"1\"}]'),
(65, '2020-04-03', NULL, '[{\"id\":\"96\",\"quantity\":2},{\"id\":\"95\",\"quantity\":3}]');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(255) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `category_name`) VALUES
(1, 'Birthday Cakes'),
(2, 'Wedidng Cakes'),
(4, 'Anniversary'),
(7, 'welcoming'),
(8, 'Cancel Again'),
(9, 'Let');

-- --------------------------------------------------------

--
-- Table structure for table `newspapers`
--

CREATE TABLE `newspapers` (
  `newspaper_id` int(255) NOT NULL,
  `newspaper_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newspapers`
--

INSERT INTO `newspapers` (`newspaper_id`, `newspaper_image`) VALUES
(1, '../img/sacco1.jpg'),
(2, '../img/sacco.jpg'),
(3, '../img/sacco1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_id` varchar(255) DEFAULT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_number` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_name`, `customer_id`, `customer_email`, `customer_number`, `customer_address`, `cart_id`, `status`) VALUES
(21, 'Joel', NULL, 'joel@gmail.com', '0715733257', 'utawala', 45, 'Pending'),
(22, 'Sony', NULL, 'sony@gmail.com', '0787878787', 'utawala', 47, 'Processing'),
(23, 'Mary', NULL, 'mary@gmail.com', '0734534560', 'utawala', 48, 'Pending Withdrawals'),
(24, 'fwefwf', NULL, 'dory@gmail.com', '0734534560', 'lkvwifhwd', 53, 'Delivered'),
(25, 'cardinal', NULL, 'cardinal@gmail.com', '980880980', 'westlands.include chocolate an vanilla', 55, 'Processing'),
(26, 'tassia', NULL, 'tassia@gmail.com', '0700000000', 'south c. include more vanilla and little chocolate', 57, 'Delivered'),
(27, 'mlongo', NULL, 'mlongo@gmail.com', '078986567', 'kakamega scheme house number ss/101. dont include any flavors', 58, 'Delivered & Paid'),
(28, 'Keah', NULL, 'keah@gmail.com', '98998998', 'hfsfjksjkdfjsdjfsdf', 65, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(25) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0',
  `category_id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_details` varchar(255) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `product_image4` varchar(255) NOT NULL,
  `product_code` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `quantity`, `category_id`, `product_name`, `product_price`, `product_details`, `product_image1`, `product_image2`, `product_image3`, `product_image4`, `product_code`) VALUES
(92, 7, 4, 'Lilian', '3500', 'Tasty', '../img/cake2.jpg', '../img/sacco.jpg', '../img/cake2.jpg', '../img/cake1.jpg', '17947'),
(95, 7, 1, 'Keah', '3400', 'Tasty', '../img/cake2.jpg', '../img/cake.jpg', '../img/cake2.jpg', '../img/sacco.jpg', '65706'),
(96, 7, 4, 'Maria', '7300', 'Yellow again', '../img/cake1.jpg', '../img/cake.jpg', '../img/cake.jpg', '../img/cake1.jpg', '42435'),
(97, 7, 2, 'cake', '4500', 'White', '../img/cake.jpg', '../img/cake1.jpg', '../img/cake.jpg', '../img/cake2.jpg', '70407');

-- --------------------------------------------------------

--
-- Table structure for table `superadminlogin`
--

CREATE TABLE `superadminlogin` (
  `id` int(25) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadminlogin`
--

INSERT INTO `superadminlogin` (`id`, `username`, `email`, `password`) VALUES
(11, 'joel', 'joel@gmail.com', '$2y$10$I1g8cEgRCzN9uKdYPRvIueQgAFH2.XmB6ri.vWx/I5A9XRKSxepBy'),
(12, 'jeff', 'jeff@gmail.com', '$2y$10$sTr5AXH3Vjf0ZIAQFuDD2OlVjrYUxGejbAJv9GOAF4GsCjgUYiTBa'),
(13, 'Pinky', 'pinky@gmail.com', '$2y$10$3BaOPY4C7tMnX6COlDtPzezdY406AWqs/vlKI5fl0XyHkWEuhDAte');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `member_id` int(255) NOT NULL,
  `member_name` varchar(255) NOT NULL,
  `member_email` varchar(255) NOT NULL,
  `facebook_link` varchar(255) NOT NULL,
  `twitter_link` varchar(255) NOT NULL,
  `instagram_link` varchar(255) NOT NULL,
  `google_link` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `member_details` varchar(255) NOT NULL,
  `member_image1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`member_id`, `member_name`, `member_email`, `facebook_link`, `twitter_link`, `instagram_link`, `google_link`, `short_description`, `member_details`, `member_image1`) VALUES
(21, 'joel', 'joel@gmail.com', 'https://www.facebook.com/joel.rupiah.18', 'https://twitter.com/JoelRupiah', 'https://www.instagram.com/rupiah_joe/', 'https://www.instagram.com/rupiah_joe/', 'Short Description', '\r\n    fnewnfkenglkeg\r\nkjbdgvbedgkbke\r\ndjkbgkjegek', '../img/avatar.jpg'),
(22, 'Pinky', 'pinky@gmail.com', 'https://www.facebook.com/joel.rupiah.18', 'https://twitter.com/JoelRupiah', 'https://www.instagram.com/rupiah_joe/', 'https://www.instagram.com/rupiah_joe/', 'Another sgort description', '\r\n    sfuysdfskdfjsdk\r\nvsdjbvhjsdbjv\r\nvysdbvbuisduvis', '../img/avatar6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `newspapers`
--
ALTER TABLE `newspapers`
  ADD PRIMARY KEY (`newspaper_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `superadminlogin`
--
ALTER TABLE `superadminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `newspapers`
--
ALTER TABLE `newspapers`
  MODIFY `newspaper_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `superadminlogin`
--
ALTER TABLE `superadminlogin`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `member_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
