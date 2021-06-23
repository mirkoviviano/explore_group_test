-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 23, 2021 at 11:08 PM
-- Server version: 8.0.13-4
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `OiFSvEuH1e`
--

-- --------------------------------------------------------

--
-- Table structure for table `explore_log`
--

CREATE TABLE `explore_log` (
  `id` int(11) NOT NULL,
  `statusCode` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `referenceID` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime(5) NOT NULL,
  `action` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `explore_log`
--

INSERT INTO `explore_log` (`id`, `statusCode`, `referenceID`, `datetime`, `action`) VALUES
(9, 'SC2001', 'A238NA', '2021-06-22 22:01:57.00000', 'Account registered successfully'),
(10, 'SC2001', 'A238NA', '2021-06-23 09:03:35.00000', 'Account registered successfully'),
(11, 'SC2001', 'A223EA', '2021-06-23 10:43:33.00000', 'Account registered successfully'),
(12, 'SC2001', 'A3848J', '2021-06-22 22:03:13.00000', 'Account registered successfully'),
(13, 'SC2001', 'A393AK', '2021-06-23 22:25:11.00000', 'Account registered successfully'),
(14, 'SC2001', 'A2123M', '2021-06-23 19:03:12.00000', 'Account registered successfully'),
(15, 'SC2001', 'A233KO', '2021-06-23 01:03:46.00000', 'Account registered successfully'),
(16, 'SC2001', 'A23LAJ', '2021-06-23 17:03:35.00000', 'Account registered successfully'),
(17, 'SC2001', 'A2319X', '2021-06-22 13:03:36.00000', 'Account registered successfully'),
(18, 'SC2001', 'A2319P', '2021-06-22 07:03:39.00000', 'Account registered successfully'),
(19, 'ER1001', 'C138UC', '2021-06-23 12:10:37.00000', 'Email already in database'),
(20, 'ER1001', 'C123AD', '2021-06-23 22:10:37.00000', 'Email already in database'),
(21, 'ER1001', 'C184J2', '2021-06-23 06:10:37.00000', 'Email already in database'),
(22, 'ER1001', 'C193KD', '2021-06-22 22:10:37.00000', 'Email already in database'),
(23, 'ER1001', 'C112AS', '2021-06-23 17:10:37.00000', 'Email already in database'),
(24, 'ER1001', 'C13321', '2021-06-23 21:10:37.00000', 'Email already in database'),
(25, 'ER1001', 'C13LJD', '2021-06-23 03:10:37.00000', 'Email already in database'),
(26, 'ER1001', 'C13112', '2021-06-23 11:10:37.00000', 'Email already in database'),
(27, 'ER1001', 'C131LP', '2021-06-23 19:10:37.00000', 'Email already in database'),
(28, 'ER1003', 'K4334', '2021-06-23 22:13:49.00000', 'Account registered, email failed.'),
(29, 'ER1003', 'K4POWR', '2021-06-23 13:13:49.00000', 'Account registered, email failed.'),
(30, 'ER1003', 'K43F2G', '2021-06-23 05:13:50.00000', 'Account registered, email failed.'),
(31, 'ER1003', 'K44Q34', '2021-06-22 22:13:50.00000', 'Account registered, email failed.'),
(32, 'ER1003', 'K434QZ', '2021-06-23 16:13:50.00000', 'Account registered, email failed.'),
(33, 'ER1003', 'K494Q3', '2021-06-22 15:13:50.00000', 'Account registered, email failed.'),
(34, 'ER1003', 'K48YTH', '2021-06-23 15:13:50.00000', 'Account registered, email failed.'),
(35, 'ER1003', 'K43QES', '2021-06-22 19:13:50.00000', 'Account registered, email failed.'),
(36, 'ER1003', 'K44WEF', '2021-06-23 23:13:50.00000', 'Account registered, email failed.'),
(37, 'ER1004', 'P52QED', '2021-06-23 22:16:05.00000', 'Wrong format email.'),
(38, 'ER1004', 'P5OKMN', '2021-06-22 17:16:05.00000', 'Wrong format email.'),
(39, 'ER1004', 'P5DSCX', '2021-06-23 22:16:05.00000', 'Wrong format email.'),
(40, 'ER1004', 'P534TV', '2021-06-22 11:16:05.00000', 'Wrong format email.'),
(41, 'ER1004', 'P54TGC', '2021-06-22 19:16:05.00000', 'Wrong format email.'),
(42, 'ER1004', 'P58IUH', '2021-06-23 03:16:05.00000', 'Wrong format email.'),
(43, 'ER1004', 'P5EWAX', '2021-06-23 16:16:05.00000', 'Wrong format email.'),
(44, 'ER1004', 'P5ZXCF', '2021-06-23 07:16:05.00000', 'Wrong format email.'),
(45, 'ER1004', 'P545TG', '2021-06-23 21:16:05.00000', 'Wrong format email.'),
(46, 'ER1004', 'P52QED', '2021-06-23 22:17:13.00000', 'Wrong format email.'),
(47, 'ER1004', 'P5OKMN', '2021-06-23 22:17:13.00000', 'Wrong format email.'),
(48, 'ER1004', 'P5DSCX', '2021-06-23 22:17:13.00000', 'Wrong format email.'),
(49, 'ER1004', 'P534TV', '2021-06-23 22:17:13.00000', 'Wrong format email.'),
(50, 'ER1004', 'P54TGC', '2021-06-23 22:17:13.00000', 'Wrong format email.'),
(51, 'ER1004', 'P52QED', '2021-06-23 22:17:46.00000', 'Wrong format email.'),
(52, 'ER1004', 'P5OKMN', '2021-06-23 22:17:46.00000', 'Wrong format email.'),
(53, 'ER1004', 'P5DSCX', '2021-06-23 22:17:46.00000', 'Wrong format email.'),
(54, 'ER1004', 'P534TV', '2021-06-23 22:17:46.00000', 'Wrong format email.'),
(55, 'ER1002', 'Q698IUH', '2021-06-23 13:20:20.00000', '#1064 - You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near \'format email.\');'),
(56, 'ER1002', 'Q6GBHN', '2021-06-23 22:20:20.00000', '#1064 - You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near \'format email.\');'),
(57, 'ER1002', 'Q6ANFO', '2021-06-03 20:20:20.00000', '#1064 - You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near \'format email.\');'),
(58, 'ER1002', 'Q6923E', '2021-06-23 18:43:46.00000', '#1064 - You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near \'format email.\');'),
(59, 'ER1002', 'Q6IAJF', '2021-06-23 06:16:46.00000', '#1064 - You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near \'format email.\');'),
(60, 'ER1002', 'Q6I230', '2021-06-23 04:41:46.00000', '#1064 - You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near \'format email.\');'),
(61, 'ER1004', '400BB', '2021-06-23 22:23:04.00000', 'Wrong format email'),
(62, 'SC2001', '2040B', '2021-06-23 22:23:09.00000', 'Account registered successfully'),
(63, 'ER1003', '94526', '2021-06-23 22:37:43.00000', 'Account registered, email failed.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `email`, `password`) VALUES
(49, 'Leanne Graham', 'Sincere@april.biz', 'd7b0d615bb8b1c816649f1d6b4f4cfa3'),
(50, 'Ervin Howell', 'Shanna@melissa.tv', '259e543bc3bbd2f2cbc5b0331bea0e01'),
(51, 'Clementine Bauch', 'Nathan@yesenia.net', '8db127884e85d1d0a8bbd9cafb7a1e5b'),
(52, 'Patricia Lebsack', 'Julianne.OConner@kory.org', '5e1cfbe2c1c242fbece1594232048b66'),
(53, 'Chelsey Dietrich', 'Lucio_Hettinger@annie.ca', '645c4ef7b587f451d6f7ea7d7490e2dd'),
(54, 'Mrs. Dennis Schulist', 'Karley_Dach@jasper.info', '60db584cbf46260fb62fc24fe545d6e5'),
(55, 'Kurtis Weissnat', 'Telly.Hoeger@billy.biz', 'e317971fc63a3c32e69ac2b108c5f7e7'),
(56, 'Nicholas Runolfsdottir V', 'Sherwood@rosamond.me', 'c4d422757cdb830164933e8702f8cbf2'),
(57, 'Glenna Reichert', 'Chaim_McDermott@dana.io', '64c7ed8509a9ae7d4a12bb3f2c509fdf'),
(58, 'Clementina DuBuque', 'Rey.Padberg@karina.biz', '3e8ccca0a5cc68be38ff417fe24e6bc5'),
(59, 'SOMEONE LIKEYOU', 'someonel@likeyou.com', '6e6bc4e49dd477ebc98ef4046c067b5f'),
(60, 'amazing person', 'test@aijf.com', 'b19f854c93aa7330289ce0325c7b81ec');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `explore_log`
--
ALTER TABLE `explore_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `explore_log`
--
ALTER TABLE `explore_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
