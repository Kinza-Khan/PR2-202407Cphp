-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2025 at 08:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `202407c`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `description`) VALUES
(1, 'Watches', 'w1.webp', 'Perfect Gifts for Friends: This watch gift comes in a stylish gift box, making it an excellent birthday gift , and an exceptional gift for any occasion, including a birthday, anniversary, weddings, and Christmas gift. Make your loved ones feel special with this unique and thoughtful present.\r\nEasy-to-Read: The silver dial with roman index ensures that you can quickly and effortlessly read the time at a glance, making this watch both fashionable and functional.\r\nCase size: 32mm; Strap width : 16m'),
(2, 'Perfumes', 'p11.webp', 'Buy original men and women perfumes and attar online in Pakistan at best prices. Shop online at Pakistan\'s premium shopping store.\r\n'),
(3, 'Shoes', 'sh1.jpg', 'If hugs where a shoe, they’d be our mocs! Made from super-soft flexible lining for all day comfort and packed with technology that provides balanced body movement. Soft footbed adds an extra layer of shock absorption and superior cushioning. Slip lasted strobel construction provides flexibility and comfort. Lightweight TPR outsole with siped rubber pad inserts placed strategically to provide traction and durability. There’s no denying that these classic shoes feel like a hug—but for your feet. S'),
(4, 'Bags', 'b1.webp', 'Discover effortless style with our trendy Pink bucket bag. Featuring a spacious interior and a drawstring closure, this bag combines functionality with a chic design. The adjustable strap makes it perfect for any occasion, adding a touch of sophistication to your outfit.');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `des` varchar(500) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `des`, `price`, `qty`, `image`, `c_id`) VALUES
(1, 'Bisley Women Square Watch Leather Strap Easy to Re', 'Perfect Gifts for Friends: This watch gift comes in a stylish gift box, making it an excellent birthday gift , and an exceptional gift for any occasion, including a birthday, anniversary, weddings, and Christmas gift. Make your loved ones feel special with this unique and thoughtful present.\r\nEasy-to-Read: The silver dial with roman index ensures that you can quickly and effortlessly read the time at a glance, making this watch both fashionable and functional.\r\nCase size: 32mm; Strap width : 16m', 5000, 50, 'product-06.jpg', 1),
(2, 'Aeternum | 40MM', 'Crafted for style and performance the Sveston Aeternum Men\'s Sports Stainless Steel Watch features a 40mm dial and comes elegantly packaged in a sophisticated luxury watch case', 600, 60, 'product-15.jpg', 1),
(3, ' Share Beige Bucket Bag IWB-BKB24-008', 'Sleek and versatile, this bag is perfect for everyday use. With a roomy interior, drawstring closure, and comfortable straps, it’s both stylish and practical for any occasion.', 7500, 75, 'gallery-01.jpg', 4),
(4, 'WASIM AKRAM 502', 'WA 502 is a scent for the man who defies convention with a strong intellect. A proactive blend of citrus and woods that liberates the senses. Intense sensual fragrance that offers a singular statement, determination and aspiration of today’s modern man. WA 502 by J. unites the zest of citrus, cardamom, apple and sweet orange. An arresting transformation can then be felt with the freshness of Juniper berries, lavender and clary sage absolute. New Ambertonic, Patchouli heart and Oak moss fully jus', 6000, 45, 'p3.webp', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c_id` (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
