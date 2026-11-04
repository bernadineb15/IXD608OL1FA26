-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 04, 2026 at 04:18 AM
-- Server version: 11.8.9-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u955985466_IXD608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'Minimalist Wedding Invitation', 3.50, 'wedding', '2026-11-04 03:38:19', '2026-11-04 03:38:19', 'modern, neutral color and minimal design', 'Minimalist_Wedding.png', 'Minimalist_Wedding.png'),
(2, 'Floral Wedding Invitation', 4.00, 'wedding', '2026-11-04 03:33:59', '2026-11-04 03:33:59', 'elegant floral invitation ', 'Elegant_Floral_Wedding.png', 'Elegant_Floral_Wedding.png'),
(3, 'Golden Arch Wedding Invitation', 3.75, 'wedding', '2026-11-04 03:41:52', '2026-11-04 03:41:52', 'golden warm details and refined layout.', 'Golden_Arch_Wedding.png', 'Golden_Arch_Wedding.png'),
(4, 'Rustic Botanical Wedding Invitation', 3.00, 'wedding', '2026-11-04 03:44:51', '2026-11-04 03:44:51', 'botanical illustrations and earthy tones', 'Rustic_Botanical_Wedding.png', 'Rustic_Botanical_Wedding.png'),
(5, 'Blush Pink Birthday Invitation', 2.50, 'birthday', '2026-11-04 03:47:24', '2026-11-04 03:47:24', 'soft blush pink invitation featuring playful details.', 'Blush_Pink_Birthday.png', 'Blush_Pink_Birthday.png'),
(6, 'Modern Birthday Invitation', 2.00, 'birthday', '2026-11-04 03:49:43', '2026-11-04 03:49:43', 'bold and modern design featuring stylish typography', 'Modern_Celebration_Birthday.png', 'Modern_Celebration_Birthday.png'),
(7, 'Little Sunshine Baby Shower', 2.75, 'baby shower', '2026-11-04 03:51:19', '2026-11-04 03:51:19', 'cheerful sunshine-inspired invitation', 'Little_Sunshine_Baby_Shower.png', 'Little_Sunshine_Baby_Shower.png'),
(8, 'Teddy Bear Baby Shower', 2.75, 'baby shower', '2026-11-04 03:52:40', '2026-11-04 03:52:40', 'charming invitation featuring an adorable teddy bear theme', 'Teddy_Bear_Baby_Shower.png', 'Teddy_Bear_Baby_Shower.png'),
(9, 'Graduation Announcement Invitation', 3.00, 'graduation', '2026-11-04 03:54:46', '2026-11-04 03:54:46', 'polished and classic graduation design', 'Graduation_Announcement.png', 'Graduation_Announcement.png'),
(10, 'Classic Graduation Party Invitation', 3.00, 'graduation', '2026-11-04 03:56:59', '2026-11-04 03:56:59', 'timeless graduation party design', 'Classic_Graduation_Party.png', 'Classic_Graduation_Party.png'),
(11, 'Holiday Cheer Party Invitation', 2.50, 'holiday', '2026-11-04 03:58:29', '2026-11-04 03:58:29', 'holiday invitation featuring cheerful seasonal details', 'Holiday_Cheer_Party.png', 'Holiday_Cheer_Party.png'),
(12, 'Sweetheart Valentine\'s Invitation', 6.50, 'holiday', '2026-11-04 04:00:31', '2026-11-04 04:00:31', 'charming and romantic Valentine\'s-inspired invitation', 'Sweetheart_Valentines.png', 'Sweetheart_Valentines.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
