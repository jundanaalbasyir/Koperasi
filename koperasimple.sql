-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 26, 2019 at 01:50 AM
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
(1, 'https://lorempixel.com/640/480/?54746', 'Coba aja', 8997, 180, NULL, NULL),
(2, 'https://lorempixel.com/640/480/?49665', 'sequel', 5392, 25, NULL, NULL),
(3, 'https://lorempixel.com/640/480/?49665', 'at', 3700, 96, NULL, NULL),
(4, 'https://lorempixel.com/640/480/?44682', 'porro', 1617, 54, NULL, NULL),
(5, 'https://lorempixel.com/640/480/?90253', 'culpa', 9106, 95, NULL, NULL),
(6, 'https://lorempixel.com/640/480/?20816', 'libero', 9152, 27, NULL, NULL),
(7, 'https://lorempixel.com/640/480/?56012', 'sit', 4538, 90, NULL, NULL),
(8, 'https://lorempixel.com/640/480/?70870', 'perferendis', 9639, 69, NULL, NULL),
(9, 'https://lorempixel.com/640/480/?81107', 'et', 3205, 12, NULL, NULL),
(10, 'https://lorempixel.com/640/480/?42135', 'doloribus', 1015, 48, NULL, NULL),
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
(48, 'https://lorempixel.com/640/480/?78997', 'est', 4684, 91, NULL, NULL),
(49, 'https://lorempixel.com/640/480/?39473', 'occaecati', 8410, 52, NULL, NULL),
(50, 'https://lorempixel.com/640/480/?54746', 'repellendus', 6514, 60, NULL, NULL),
(61, 'https://lorempixel.com/640/480/?54746', 'Selamat Datang di halaman admin : admin', 2455, 214, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `savings`
--

CREATE TABLE `savings` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `coin` bigint(20) DEFAULT '0',
  `poin` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `savings`
--

INSERT INTO `savings` (`id`, `user_id`, `coin`, `poin`) VALUES
(1, 'user', 51000, 212),
(6, 'guru', 70000, 22),
(7, 'telek', 0, 0),
(8, 'cacing', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `savings_record`
--

CREATE TABLE `savings_record` (
  `id` int(11) NOT NULL,
  `code_savings` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `savings_coin` bigint(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `savings_record`
--

INSERT INTO `savings_record` (`id`, `code_savings`, `user_id`, `savings_coin`, `status`) VALUES
(1, 'TabunganYasiha-CAGDMHRCV1', 'user', 10000, 1),
(8, 'TabunganYasiha-QO7FNYX6ZP', 'guru', 14000, 0),
(9, 'TabunganYasiha-DGBS7COH92', 'guru', 15000, 2),
(12, 'TabunganYasiha-HNM1XGVJUA', 'user', 5000, 1),
(15, 'TabunganYasiha-36GDAT7M8H', 'user', 1000, 1),
(17, 'TabunganYasiha-GY0EOSP7QC', 'guru', 5000, 1);

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
  `status` int(11) DEFAULT '0',
  `time` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `code_transaction`, `user_id`, `product_id`, `quantity`, `cost_total`, `status`, `time`, `created_at`, `updated_at`) VALUES
(57, 'SISWAYasiha-DLSP7Z2RGT', 'user', 1, 12, 17964, 1, '2019-01-16', NULL, NULL),
(58, 'SISWAYasiha-XR90C82VKW', 'user', 6, 23, 20496, 0, '2019-02-10', NULL, NULL),
(59, 'SISWAYasiha-CFTSO0V6HZ', 'user', 10, 11, 11165, 1, '2019-03-14', NULL, NULL),
(60, 'GURUYasiha-RUBTOV4JC2', 'guru', 48, 22, 10307, 1, '2019-12-20', NULL, NULL),
(61, 'GURUYasiha-8HPDWBAQRE', 'guru', 27, 31, 17209, 1, '2019-04-09', NULL, NULL),
(62, 'SISWAYasiha-DLSEBZ2RGT', 'user', 1, 3, 11964, 1, '2019-05-14', NULL, NULL),
(65, 'SISWAYasiha-U0G5MWI8S1', 'user', 1, 5, 9985, 0, '2019-06-26', NULL, NULL),
(66, 'SISWAYasiha-DASP7Z2RGT', 'user', 1, 12, 10764, 1, '2019-07-16', NULL, NULL),
(67, 'SISWAYasiha-XR90C8AVKW', 'user', 6, 23, 21046, 1, '2019-08-10', NULL, NULL),
(68, 'SISWAYasiha-CATSO0V6HZ', 'user', 10, 11, 11165, 2, '2019-09-14', NULL, NULL),
(69, 'GURUYasiha-RUBTEV4JC2', 'guru', 48, 22, 13048, 1, '2019-10-20', NULL, NULL),
(70, 'GURUYasiha-8EPDWBAQRE', 'guru', 27, 31, 18720, 0, '2019-11-09', NULL, NULL);

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
(19, 'user16', 'ee11cbb19052e40b07aac0ca060c23ee', 'user16@mail.com', 0, NULL, NULL, NULL),
(20, 'telek', '870c412ec0db61769abe85dadda27a15', NULL, 0, NULL, NULL, NULL),
(21, 'cacing', '43035732d194997fd7f2b152993e9d84', NULL, 0, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `savings`
--
ALTER TABLE `savings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `savings_record`
--
ALTER TABLE `savings_record`
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
-- AUTO_INCREMENT for table `savings`
--
ALTER TABLE `savings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `savings_record`
--
ALTER TABLE `savings_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
