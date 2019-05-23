-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 23, 2019 at 04:35 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koperasimple`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_image`, `product_name`, `product_price`, `product_quantity`, `created_at`, `updated_at`) VALUES
(2, 'https://lorempixel.com/640/480/?49665', 'sequel', 5392, 80, NULL, NULL),
(3, 'https://lorempixel.com/640/480/?49665', 'at', 3700, 90, NULL, NULL),
(4, 'https://lorempixel.com/640/480/?44682', 'porro', 1617, 54, NULL, NULL),
(5, 'https://lorempixel.com/640/480/?90253', 'culpa', 9106, 95, NULL, NULL),
(6, 'https://lorempixel.com/640/480/?20816', 'libero', 9152, 50, NULL, NULL),
(7, 'https://lorempixel.com/640/480/?56012', 'sit', 4538, 90, NULL, NULL),
(8, 'https://lorempixel.com/640/480/?70870', 'perferendis', 9639, 69, NULL, NULL),
(9, 'https://lorempixel.com/640/480/?81107', 'et', 3205, 12, NULL, NULL),
(10, 'https://lorempixel.com/640/480/?42135', 'doloribus', 1015, 37, NULL, NULL),
(11, 'https://lorempixel.com/640/480/?36440', 'ex', 7775, 96, NULL, NULL),
(12, 'https://lorempixel.com/640/480/?80720', 'laborum', 9794, 5, NULL, NULL),
(13, 'https://lorempixel.com/640/480/?57201', 'et', 8903, 32, NULL, NULL),
(14, 'https://lorempixel.com/640/480/?18167', 'perspiciatis', 1150, 64, NULL, NULL),
(15, 'https://lorempixel.com/640/480/?42426', 'hic', 4278, 53, NULL, NULL),
(16, 'https://lorempixel.com/640/480/?39867', 'ullam', 4916, 36, NULL, NULL),
(17, 'https://lorempixel.com/640/480/?75562', 'et', 4194, 34, NULL, NULL),
(18, 'https://lorempixel.com/640/480/?93000', 'repellendus', 2620, 14, NULL, NULL),
(19, 'https://lorempixel.com/640/480/?21558', 'et', 1975, 63, NULL, NULL),
(20, 'https://lorempixel.com/640/480/?76602', 'velit', 2408, 15, NULL, NULL),
(21, 'https://lorempixel.com/640/480/?20192', 'unde', 5705, 43, NULL, NULL),
(22, 'https://lorempixel.com/640/480/?18701', 'eaque', 2901, 39, NULL, NULL),
(23, 'https://lorempixel.com/640/480/?12176', 'optio', 5884, 10, NULL, NULL),
(24, 'https://lorempixel.com/640/480/?38823', 'voluptate', 8096, 45, NULL, NULL),
(25, 'https://lorempixel.com/640/480/?61230', 'voluptates', 9242, 74, NULL, NULL),
(26, 'https://lorempixel.com/640/480/?60172', 'corrupti', 2888, 18, NULL, NULL),
(27, 'https://lorempixel.com/640/480/?67340', 'non', 6039, 89, NULL, NULL),
(28, 'https://lorempixel.com/640/480/?18231', 'necessitatibus', 3359, 44, NULL, NULL),
(29, 'https://lorempixel.com/640/480/?59557', 'vel', 3348, 21, NULL, NULL),
(30, 'https://lorempixel.com/640/480/?59353', 'minima', 2287, 76, NULL, NULL),
(31, 'https://lorempixel.com/640/480/?96435', 'quas', 1902, 5, NULL, NULL),
(32, 'https://lorempixel.com/640/480/?85253', 'et', 4179, 14, NULL, NULL),
(33, 'https://lorempixel.com/640/480/?53496', 'dolores', 8168, 20, NULL, NULL),
(34, 'https://lorempixel.com/640/480/?72980', 'ipsa', 5010, 36, NULL, NULL),
(35, 'https://lorempixel.com/640/480/?13977', 'numquam', 7756, 31, NULL, NULL),
(36, 'https://lorempixel.com/640/480/?20691', 'quos', 8119, 24, NULL, NULL),
(37, 'https://lorempixel.com/640/480/?12142', 'vitae', 6548, 63, NULL, NULL),
(38, 'https://lorempixel.com/640/480/?49785', 'cum', 9591, 96, NULL, NULL),
(39, 'https://lorempixel.com/640/480/?49926', 'repellendus', 3873, 17, NULL, NULL),
(40, 'https://lorempixel.com/640/480/?31047', 'et', 2045, 14, NULL, NULL),
(41, 'https://lorempixel.com/640/480/?36468', 'magnam', 4689, 84, NULL, NULL),
(42, 'https://lorempixel.com/640/480/?47264', 'et', 8925, 54, NULL, NULL),
(43, 'https://lorempixel.com/640/480/?81725', 'sint', 3728, 8, NULL, NULL),
(44, 'https://lorempixel.com/640/480/?36124', 'fugit', 7223, 0, NULL, NULL),
(45, 'https://lorempixel.com/640/480/?75581', 'nulla', 4144, 48, NULL, NULL),
(46, 'https://lorempixel.com/640/480/?64980', 'illo', 6938, 15, NULL, NULL),
(47, 'https://lorempixel.com/640/480/?53863', 'ratione', 2794, 79, NULL, NULL),
(48, 'https://lorempixel.com/640/480/?78997', 'est', 4684, 69, NULL, NULL),
(49, 'https://lorempixel.com/640/480/?39473', 'occaecati', 8410, 52, NULL, NULL),
(50, 'https://lorempixel.com/640/480/?54746', 'repellendus', 6514, 60, NULL, NULL),
(57, 'https://lorempixel.com/640/480/?54746', 'Coba aja', 8997, 98798, NULL, NULL),
(61, 'https://lorempixel.com/640/480/?54746', 'Selamat Datang di halaman admin : admin', 2455, 214, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `code_transaction` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cost_total` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `time` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `code_transaction`, `user_id`, `product_id`, `quantity`, `cost_total`, `status`, `time`, `created_at`, `updated_at`) VALUES
(1, 'SISWAYasiha-FKY0I8Caqw', 'user', 2, 7, 37744, 1, '2019-05-01', NULL, NULL),
(30, 'SISWAYasiha-FKY0I8C27J', 'user', 2, 7, 37744, 1, '2019-04-11', NULL, NULL),
(31, 'SISWAYasiha-XDNWCOV0L6', 'user', 2, 3, 16176, 1, '2019-01-23', NULL, NULL),
(32, 'GURUYasiha-VMJ2K04TWO', 'guru', 3, 3, 11100, 0, '2019-05-23', NULL, NULL),
(35, 'GURUYasiha-XDNaCOV0L6', 'guru', 2, 3, 16176, 1, '2018-05-13', NULL, NULL),
(36, 'GURUYasiha-XDAWCOV0L6', 'guru', 8, 6, 16176, 1, '2019-01-23', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@mail.com', 2, NULL, NULL, NULL),
(2, 'guru', '77e69c137812518e359196bb2f5e9bb9', 'guru@mail.com', 1, NULL, NULL, NULL),
(3, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user@mail.com', 0, NULL, NULL, NULL),
(4, 'user1', 'ee11cbb19052e40b07aac0ca060c23ee', 'user1@mail.com', 0, NULL, NULL, NULL),
(5, 'user2', 'ee11cbb19052e40b07aac0ca060c23ee', 'user2@mail.com', 0, NULL, NULL, NULL),
(6, 'user3', 'ee11cbb19052e40b07aac0ca060c23ee', 'user3@mail.com', 0, NULL, NULL, NULL),
(7, 'user4', 'ee11cbb19052e40b07aac0ca060c23ee', 'user4@mail.com', 0, NULL, NULL, NULL),
(8, 'user5', 'ee11cbb19052e40b07aac0ca060c23ee', 'user5@mail.com', 0, NULL, NULL, NULL),
(9, 'user6', 'ee11cbb19052e40b07aac0ca060c23ee', 'user6@mail.com', 0, NULL, NULL, NULL),
(10, 'user7', 'ee11cbb19052e40b07aac0ca060c23ee', 'user7@mail.com', 0, NULL, NULL, NULL),
(11, 'user8', 'ee11cbb19052e40b07aac0ca060c23ee', 'user8@mail.com', 0, NULL, NULL, NULL),
(12, 'user9', 'ee11cbb19052e40b07aac0ca060c23ee', 'user9@mail.com', 0, NULL, NULL, NULL),
(13, 'user10', 'ee11cbb19052e40b07aac0ca060c23ee', 'user10@mail.com', 0, NULL, NULL, NULL),
(14, 'user11', 'ee11cbb19052e40b07aac0ca060c23ee', 'user11@mail.com', 0, NULL, NULL, NULL),
(15, 'user12', 'ee11cbb19052e40b07aac0ca060c23ee', 'user12@mail.com', 0, NULL, NULL, NULL),
(16, 'user13', 'ee11cbb19052e40b07aac0ca060c23ee', 'user13@mail.com', 0, NULL, NULL, NULL),
(17, 'user14', 'ee11cbb19052e40b07aac0ca060c23ee', 'user14@mail.com', 0, NULL, NULL, NULL),
(18, 'user15', 'ee11cbb19052e40b07aac0ca060c23ee', 'user15@mail.com', 0, NULL, NULL, NULL),
(19, 'user16', 'ee11cbb19052e40b07aac0ca060c23ee', 'user16@mail.com', 0, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code_transaction` (`code_transaction`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
