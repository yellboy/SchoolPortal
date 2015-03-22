-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2015 at 08:18 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `schoolportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE 'category'

CREATE TABLE IF NOT EXISTS `category` (
`Id` bigint(20) NOT NULL,
  `Version` int(11) NOT NULL,
  `Guid` varchar(50) COLLATE cp1251_bin NOT NULL,
  `Title` varchar(100) COLLATE cp1251_bin NOT NULL COMMENT 'Category title visible on website.',
  `HierarchyDepth` int(11) NOT NULL,
  `HierarchyId` varchar(50) COLLATE cp1251_bin NOT NULL,
  `ParentId` bigint(20) DEFAULT NULL,
  `Position` int(11) NOT NULL,
  `IsDeleted` tinyint(1) NOT NULL,
  `IsHidden` tinyint(1) NOT NULL,
  `Route` text COLLATE cp1251_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=cp1251 COLLATE=cp1251_bin;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Id`, `Version`, `Guid`, `Title`, `HierarchyDepth`, `HierarchyId`, `ParentId`, `Position`, `IsDeleted`, `IsHidden`, `Route`) VALUES
(1, 1, '1601be17-d0ac-11e4-9841-f46d04612ccc', 'Категорије', 0, '1.', NULL, 0, 0, 1, ''),
(2, 1, 'bb0ac377-d0ab-11e4-9841-f46d04612ccc', 'Почетна', 1, '1.2.', 1, 0, 0, 0, '/'),
(3, 1, '6f3c3964-d0ac-11e4-9841-f46d04612ccc', 'Школа', 1, '1.3.', 1, 1, 0, 0, ''),
(4, 1, 'ac9f9ca6-d0ac-11e4-9841-f46d04612ccc', 'Упис', 1, '1.4.', 1, 2, 0, 0, ''),
(5, 1, '61c86244-d0ad-11e4-9841-f46d04612ccc', 'Настава', 1, '1.5.', 1, 3, 0, 0, ''),
(6, 1, '84e427b9-d0ad-11e4-9841-f46d04612ccc', 'Алумни', 1, '1.6.', 1, 4, 0, 0, ''),
(7, 1, 'abeba91a-d0ad-11e4-9841-f46d04612ccc', 'Слободне активности', 1, '1.7.', 1, 5, 0, 0, ''),
(8, 1, '32c7be9b-d0ae-11e4-9841-f46d04612ccc', 'Пројекти', 1, '1.8.', 1, 6, 0, 0, ''),
(9, 1, '57b92082-d0ae-11e4-9841-f46d04612ccc', 'Запослени', 1, '1.9.', 1, 7, 0, 0, ''),
(10, 1, '8041b46c-d0ae-11e4-9841-f46d04612ccc', 'Контакт', 1, '1.10.', 1, 8, 0, 0, ''),
(11, 1, '0eabb1f7-d0b7-11e4-9841-f46d04612ccc', 'Кроз историју', 2, '1.3.11.', 3, 0, 0, 0, ''),
(12, 1, '481306c3-d0b7-11e4-9841-f46d04612ccc', 'Школски одбор', 2, '1.3.12.', 3, 1, 0, 0, ''),
(13, 1, 'aecb6619-d0b7-11e4-9841-f46d04612ccc', 'Савет родитеља', 2, '1.3.13.', 3, 2, 0, 0, ''),
(14, 1, 'c2ac74a8-d0b7-11e4-9841-f46d04612ccc', 'Ђачки парламент', 2, '1.3.14.', 3, 3, 0, 0, ''),
(15, 1, 'abd8bbd9-d0b9-11e4-9841-f46d04612ccc', 'Смерови', 2, '1.4.14.', 4, 0, 0, 0, ''),
(16, 1, 'e3319bfd-d0b9-11e4-9841-f46d04612ccc', 'Наставни материјали', 2, '1.5.16.', 5, 0, 0, 0, ''),
(17, 1, 'f638a356-d0b9-11e4-9841-f46d04612ccc', 'Отворена врата', 2, '1.5.17.', 5, 1, 0, 0, ''),
(19, 1, '09105a95-d0ba-11e4-9841-f46d04612ccc', 'Распоред звона', 2, '1.5.19.', 5, 2, 0, 0, ''),
(20, 1, '1dbfcfb2-d0ba-11e4-9841-f46d04612ccc', 'Распоред часова', 2, '1.5.20.', 5, 3, 0, 0, ''),
(21, 1, '38a4816b-d0ba-11e4-9841-f46d04612ccc', 'Школски календар', 2, '1.5.21.', 5, 4, 0, 0, ''),
(22, 1, '5a1f168f-d0ba-11e4-9841-f46d04612ccc', 'Пријави се на листу', 2, '1.6.22.', 6, 1, 0, 0, '/add-to-alumni'),
(23, 1, 'b79f52e7-d0ba-11e4-9841-f46d04612ccc', 'Алумнисти', 2, '1.6.23.', 6, 0, 0, 0, ''),
(24, 1, '3b0a208c-d0bb-11e4-9841-f46d04612ccc', 'Радионице', 2, '1.7.24.', 7, 0, 0, 0, ''),
(25, 1, '56e9aef5-d0bb-11e4-9841-f46d04612ccc', 'Екскурзије', 2, '1.7.25.', 7, 1, 0, 0, ''),
(26, 1, '848aceb7-d0bb-11e4-9841-f46d04612ccc', 'Позориште', 2, '1.7.26.', 7, 2, 0, 0, ''),
(27, 1, '985923ee-d0bb-11e4-9841-f46d04612ccc', 'Библиотека', 2, '1.7.27.', 7, 3, 0, 0, ''),
(28, 1, 'bc54d471-d0bb-11e4-9841-f46d04612ccc', 'Секције', 2, '1.7.28.', 7, 4, 0, 0, ''),
(29, 1, 'efdfad7b-d0bb-11e4-9841-f46d04612ccc', 'Инклузија', 2, '1.8.29.', 8, 0, 0, 0, ''),
(30, 1, '12c82014-d0bc-11e4-9841-f46d04612ccc', 'Директор и помоћник директора', 2, '1.9.30.', 9, 0, 0, 0, ''),
(31, 1, '28f8ce03-d0bc-11e4-9841-f46d04612ccc', 'Секретар', 2, '1.9.31.', 9, 1, 0, 0, ''),
(32, 1, '37434491-d0bc-11e4-9841-f46d04612ccc', 'Стручна већа', 2, '1.9.32.', 9, 2, 0, 0, ''),
(33, 1, '4a3442e4-d0bc-11e4-9841-f46d04612ccc', 'Стручни сарадници', 2, '1.9.33.', 9, 3, 0, 0, ''),
(34, 1, 'ab383330-d0bd-11e4-9841-f46d04612ccc', 'Рачуноводство и администрација', 2, '1.9.34.', 9, 4, 0, 0, ''),
(35, 1, '1ffb82fc-d0be-11e4-9841-f46d04612ccc', 'Техничко и помоћно особље', 2, '1.9.35.', 9, 5, 0, 0, ''),
(36, 1, '09487e75-d0c1-11e4-9841-f46d04612ccc', 'Наставници', 2, '1.9.36.', 9, 5, 0, 0, '/teachers'),
(37, 1, 'e0de2d58-d0c2-11e4-9841-f46d04612ccc', 'Прва година', 3, '1.5.16.37.', 16, 0, 0, 0, ''),
(38, 1, '013c7415-d0c3-11e4-9841-f46d04612ccc', 'Друга година', 3, '1.5.16.38.', 16, 1, 0, 0, ''),
(39, 1, '1b1cd5d3-d0c3-11e4-9841-f46d04612ccc', 'Трећа година', 3, '1.5.16.39.', 16, 2, 0, 0, ''),
(40, 1, '2b3f6227-d0c3-11e4-9841-f46d04612ccc', 'Четврта година', 3, '1.5.16.40.', 16, 3, 0, 0, ''),
(41, 1, '7fd8a0bc-d0c3-11e4-9841-f46d04612ccc', 'Утисци', 3, '1.7.25.41.', 25, 0, 0, 0, ''),
(42, 1, 'd01b5c3a-d0c3-11e4-9841-f46d04612ccc', 'Слике', 2, '1.7.42.', 7, 5, 0, 0, ''),
(43, 1, '0a23a886-d0c4-11e4-9841-f46d04612ccc', 'Спорт', 2, '1.7.43.', 7, 6, 0, 0, ''),
(44, 1, '3f5acd59-d0c4-11e4-9841-f46d04612ccc', 'Школа данас', 3, '1.7.42.44.', 42, 0, 0, 0, ''),
(45, 1, '4c593e45-d0c4-11e4-9841-f46d04612ccc', 'Кабинети', 3, '1.7.42.45.', 42, 1, 0, 0, ''),
(46, 1, '5709c11a-d0c4-11e4-9841-f46d04612ccc', 'Дружења', 3, '1.7.42.46.', 42, 2, 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`Id`), ADD UNIQUE KEY `Guid` (`Guid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
