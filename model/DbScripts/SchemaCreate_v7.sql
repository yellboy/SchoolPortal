-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2015 at 01:33 PM
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
-- Table structure for table `alumni`
--

CREATE TABLE IF NOT EXISTS `alumni` (
  `Id` bigint(20) NOT NULL,
  `FirstName` text CHARACTER SET cp1251 COLLATE cp1251_bin NOT NULL,
  `LastName` text CHARACTER SET cp1251 COLLATE cp1251_bin NOT NULL,
  `City` text CHARACTER SET cp1251 COLLATE cp1251_bin NOT NULL,
  `State` text CHARACTER SET cp1251 COLLATE cp1251_bin NOT NULL,
  `Email` text CHARACTER SET cp1251 COLLATE cp1251_bin NOT NULL,
  `Year` int(11) NOT NULL,
  `Classroom` text CHARACTER SET cp1251 COLLATE cp1251_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `authorizationrole`
--

CREATE TABLE IF NOT EXISTS `authorizationrole` (
  `AuthorizationRoleId` bigint(20) NOT NULL,
  `Type` tinyint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`Id` bigint(20) NOT NULL,
  `Version` int(11) NOT NULL,
  `Guid` varchar(50) COLLATE cp1251_bin NOT NULL,
  `Title` varchar(200) COLLATE cp1251_bin NOT NULL COMMENT 'Category title visible on website.',
  `HierarchyDepth` int(11) NOT NULL,
  `HierarchyId` varchar(50) COLLATE cp1251_bin NOT NULL,
  `ParentId` bigint(20) DEFAULT NULL,
  `Position` int(11) NOT NULL,
  `IsDeleted` tinyint(1) NOT NULL,
  `IsHidden` tinyint(1) NOT NULL,
  `IsHome` bit(1) NOT NULL,
  `IsFixedRoute` bit(1) NOT NULL,
  `Route` text COLLATE cp1251_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=cp1251 COLLATE=cp1251_bin;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Id`, `Version`, `Guid`, `Title`, `HierarchyDepth`, `HierarchyId`, `ParentId`, `Position`, `IsDeleted`, `IsHidden`, `IsHome`, `IsFixedRoute`, `Route`) VALUES
(0, 1, '55169df9d83a0', 'New node', 3, '1.8.87.88.', 87, 0, 0, 0, b'0', b'0', ''),
(1, 1, '1601be17-d0ac-11e4-9841-f46d04612ccc', 'Категорије', 0, '1.', NULL, 0, 0, 1, b'0', b'0', ''),
(2, 1, 'bb0ac377-d0ab-11e4-9841-f46d04612ccc', 'Почетна', 1, '1.2.', 1, 0, 0, 0, b'1', b'1', '/'),
(3, 1, '6f3c3964-d0ac-11e4-9841-f46d04612ccc', 'Школа', 1, '1.3.', 1, 1, 0, 0, b'0', b'0', ''),
(4, 1, 'ac9f9ca6-d0ac-11e4-9841-f46d04612ccc', 'Упис', 1, '1.4.', 1, 2, 0, 0, b'0', b'0', ''),
(5, 1, '61c86244-d0ad-11e4-9841-f46d04612ccc', 'Настава', 1, '1.5.', 1, 3, 0, 0, b'0', b'0', ''),
(6, 1, '84e427b9-d0ad-11e4-9841-f46d04612ccc', 'Алумни', 1, '1.6.', 1, 4, 0, 0, b'0', b'0', ''),
(7, 1, 'abeba91a-d0ad-11e4-9841-f46d04612ccc', 'Слободне активности', 1, '1.7.', 1, 5, 0, 0, b'0', b'0', ''),
(8, 1, '32c7be9b-d0ae-11e4-9841-f46d04612ccc', 'Пројекти', 1, '1.8.', 1, 6, 0, 0, b'0', b'0', ''),
(9, 1, '57b92082-d0ae-11e4-9841-f46d04612ccc', 'Запослени', 1, '1.9.', 1, 7, 0, 0, b'0', b'0', ''),
(10, 1, '8041b46c-d0ae-11e4-9841-f46d04612ccc', 'Контакт', 1, '1.10.', 1, 8, 0, 0, b'0', b'0', ''),
(11, 1, '0eabb1f7-d0b7-11e4-9841-f46d04612ccc', 'Кроз историју', 2, '1.3.', 3, 0, 0, 0, b'0', b'0', ''),
(12, 1, '481306c3-d0b7-11e4-9841-f46d04612ccc', 'Школски одбор', 2, '1.3.12.', 3, 1, 0, 0, b'0', b'0', ''),
(13, 1, 'aecb6619-d0b7-11e4-9841-f46d04612ccc', 'Савет родитеља', 2, '1.3.13.', 3, 2, 0, 0, b'0', b'0', ''),
(14, 1, 'c2ac74a8-d0b7-11e4-9841-f46d04612ccc', 'Ђачки парламент', 2, '1.3.14.', 3, 3, 0, 0, b'0', b'0', ''),
(15, 1, 'abd8bbd9-d0b9-11e4-9841-f46d04612ccc', 'Смерови', 2, '1.4.14.', 4, 0, 0, 0, b'0', b'0', ''),
(16, 1, 'e3319bfd-d0b9-11e4-9841-f46d04612ccc', 'Наставни материјали', 2, '1.5.16.', 5, 0, 0, 0, b'0', b'0', ''),
(17, 1, 'f638a356-d0b9-11e4-9841-f46d04612ccc', 'Отворена врата', 2, '1.5.17.', 5, 1, 0, 0, b'0', b'0', ''),
(19, 1, '09105a95-d0ba-11e4-9841-f46d04612ccc', 'Распоред звона', 2, '1.5.19.', 5, 2, 0, 0, b'0', b'0', ''),
(20, 1, '1dbfcfb2-d0ba-11e4-9841-f46d04612ccc', 'Распоред часова', 2, '1.5.20.', 5, 3, 0, 0, b'0', b'0', ''),
(21, 1, '38a4816b-d0ba-11e4-9841-f46d04612ccc', 'Школски календар', 2, '1.5.21.', 5, 4, 0, 0, b'0', b'0', ''),
(22, 1, '5a1f168f-d0ba-11e4-9841-f46d04612ccc', 'Пријави се на листу', 2, '1.6.22.', 6, 1, 0, 0, b'0', b'1', '/add-to-alumni'),
(23, 1, 'b79f52e7-d0ba-11e4-9841-f46d04612ccc', 'Алумнисти', 2, '1.6.23.', 6, 0, 0, 0, b'0', b'0', ''),
(24, 1, '3b0a208c-d0bb-11e4-9841-f46d04612ccc', 'Радионице', 2, '1.7.24.', 7, 0, 0, 0, b'0', b'0', ''),
(25, 1, '56e9aef5-d0bb-11e4-9841-f46d04612ccc', 'Екскурзије', 2, '1.7.25.', 7, 1, 0, 0, b'0', b'0', ''),
(26, 1, '848aceb7-d0bb-11e4-9841-f46d04612ccc', 'Позориште', 2, '1.7.26.', 7, 2, 0, 0, b'0', b'0', ''),
(27, 1, '985923ee-d0bb-11e4-9841-f46d04612ccc', 'Библиотека', 2, '1.7.27.', 7, 3, 0, 0, b'0', b'0', ''),
(28, 1, 'bc54d471-d0bb-11e4-9841-f46d04612ccc', 'Секције', 2, '1.7.28.', 7, 4, 0, 0, b'0', b'0', ''),
(29, 1, 'efdfad7b-d0bb-11e4-9841-f46d04612ccc', 'Инклузија', 2, '1.8.29.', 8, 0, 0, 0, b'0', b'0', ''),
(30, 1, '12c82014-d0bc-11e4-9841-f46d04612ccc', 'Директор и помоћник директора', 2, '1.9.30.', 9, 0, 0, 0, b'0', b'0', ''),
(31, 1, '28f8ce03-d0bc-11e4-9841-f46d04612ccc', 'Секретар', 2, '1.9.31.', 9, 1, 0, 0, b'0', b'0', ''),
(32, 1, '37434491-d0bc-11e4-9841-f46d04612ccc', 'Стручна већа', 2, '1.9.32.', 9, 2, 0, 0, b'0', b'0', ''),
(33, 1, '4a3442e4-d0bc-11e4-9841-f46d04612ccc', 'Стручни сарадници', 2, '1.9.33.', 9, 3, 0, 0, b'0', b'0', ''),
(34, 1, 'ab383330-d0bd-11e4-9841-f46d04612ccc', 'Рачуноводство и администрација', 2, '1.9.34.', 9, 4, 0, 0, b'0', b'0', ''),
(35, 1, '1ffb82fc-d0be-11e4-9841-f46d04612ccc', 'Техничко и помоћно особље', 2, '1.9.35.', 9, 5, 0, 0, b'0', b'0', ''),
(36, 1, '09487e75-d0c1-11e4-9841-f46d04612ccc', 'Наставници', 2, '1.9.36.', 9, 5, 0, 0, b'0', b'1', '/teachers'),
(37, 1, 'e0de2d58-d0c2-11e4-9841-f46d04612ccc', 'Прва година', 3, '1.5.16.37.', 16, 0, 0, 0, b'0', b'0', ''),
(38, 1, '013c7415-d0c3-11e4-9841-f46d04612ccc', 'Друга година', 3, '1.5.16.38.', 16, 1, 0, 0, b'0', b'0', ''),
(39, 1, '1b1cd5d3-d0c3-11e4-9841-f46d04612ccc', 'Трећа година', 3, '1.5.16.39.', 16, 2, 0, 0, b'0', b'0', ''),
(40, 1, '2b3f6227-d0c3-11e4-9841-f46d04612ccc', 'Четврта година', 3, '1.5.16.40.', 16, 3, 0, 0, b'0', b'0', ''),
(41, 1, '7fd8a0bc-d0c3-11e4-9841-f46d04612ccc', 'Утисци', 3, '1.7.25.41.', 25, 0, 0, 0, b'0', b'0', ''),
(42, 1, 'd01b5c3a-d0c3-11e4-9841-f46d04612ccc', 'Слике', 2, '1.7.42.', 7, 5, 0, 0, b'0', b'0', ''),
(43, 1, '0a23a886-d0c4-11e4-9841-f46d04612ccc', 'Спорт', 2, '1.7.43.', 7, 6, 0, 0, b'0', b'0', ''),
(44, 1, '3f5acd59-d0c4-11e4-9841-f46d04612ccc', 'Школа данас', 3, '1.7.42.44.', 42, 0, 0, 0, b'0', b'0', ''),
(45, 1, '4c593e45-d0c4-11e4-9841-f46d04612ccc', 'Кабинети', 3, '1.7.42.45.', 42, 1, 0, 0, b'0', b'0', ''),
(46, 1, '5709c11a-d0c4-11e4-9841-f46d04612ccc', 'Дружења', 3, '1.7.42.46.', 42, 2, 0, 0, b'0', b'0', ''),
(47, 1, '8eac84ba-d0cb-11e4-9841-f46d04612ccc', 'Српски језик и књижевност', 4, '1.5.16.37.47.', 37, 0, 0, 0, b'0', b'0', ''),
(48, 1, 'fb9eb30c-d0cb-11e4-9841-f46d04612ccc', 'Математика', 4, '1.5.16.37.48.', 37, 1, 0, 0, b'0', b'0', ''),
(49, 1, 'aa446f8f-d0cf-11e4-9841-f46d04612ccc', 'Физика', 4, '1.5.16.37.49.', 37, 2, 0, 0, b'0', b'0', ''),
(50, 1, 'bc61b686-d0cf-11e4-9841-f46d04612ccc', 'Хемија', 4, '1.5.16.37.50.', 37, 3, 0, 0, b'0', b'0', ''),
(51, 1, 'cea62af5-d0cf-11e4-9841-f46d04612ccc', 'Историја', 4, '1.5.16.37.51.', 37, 4, 0, 0, b'0', b'0', ''),
(52, 1, 'eb02efca-d0cf-11e4-9841-f46d04612ccc', 'Рачунарство и информатика', 4, '1.5.16.37.52.', 37, 5, 0, 0, b'0', b'0', ''),
(53, 1, '2c72d8f7-d0d0-11e4-9841-f46d04612ccc', 'Српски језик и књижевност', 4, '1.5.16.38.53.', 38, 0, 0, 0, b'0', b'0', ''),
(54, 1, '7c3d17ce-d0d0-11e4-9841-f46d04612ccc', 'Математика', 4, '1.5.16.38.54.', 38, 1, 0, 0, b'0', b'0', ''),
(55, 1, '7c44c894-d0d0-11e4-9841-f46d04612ccc', 'Физика', 4, '1.5.16.38.55.', 38, 2, 0, 0, b'0', b'0', ''),
(56, 1, '7c4b9523-d0d0-11e4-9841-f46d04612ccc', 'Хемија', 4, '1.5.16.38.56.', 38, 3, 0, 0, b'0', b'0', ''),
(57, 1, '7c524b75-d0d0-11e4-9841-f46d04612ccc', 'Историја', 4, '1.5.16.38.57.', 38, 4, 0, 0, b'0', b'0', ''),
(58, 1, '7c569dbe-d0d0-11e4-9841-f46d04612ccc', 'Рачунарство и информатика', 4, '1.5.16.38.58.', 38, 5, 0, 0, b'0', b'0', ''),
(59, 1, 'f6169c3b-d0d0-11e4-9841-f46d04612ccc', 'Српски језик и књижевност', 4, '1.5.16.39.59.', 39, 0, 0, 0, b'0', b'0', ''),
(60, 1, 'f61d8fa5-d0d0-11e4-9841-f46d04612ccc', 'Математика', 4, '1.5.16.39.60.', 39, 1, 0, 0, b'0', b'0', ''),
(61, 1, 'f625082a-d0d0-11e4-9841-f46d04612ccc', 'Физика', 4, '1.5.16.39.61.', 39, 2, 0, 0, b'0', b'0', ''),
(62, 1, 'f62fedea-d0d0-11e4-9841-f46d04612ccc', 'Хемија', 4, '1.5.16.39.62.', 39, 3, 0, 0, b'0', b'0', ''),
(63, 1, 'f63b03de-d0d0-11e4-9841-f46d04612ccc', 'Рачунарство и информатика', 4, '1.5.16.39.63.', 39, 4, 0, 0, b'0', b'0', ''),
(64, 1, '40689d5e-d0d1-11e4-9841-f46d04612ccc', 'Српски језик и књижевност', 4, '1.5.16.40.64.', 40, 0, 0, 0, b'0', b'0', ''),
(65, 1, '406d7ad5-d0d1-11e4-9841-f46d04612ccc', 'Математика', 4, '1.5.16.40.65.', 40, 1, 0, 0, b'0', b'0', ''),
(66, 1, '40719398-d0d1-11e4-9841-f46d04612ccc', 'Физика', 4, '1.5.16.40.66.', 40, 2, 0, 0, b'0', b'0', ''),
(67, 1, '407799ab-d0d1-11e4-9841-f46d04612ccc', 'Хемија', 4, '1.5.16.40.67.', 40, 3, 0, 0, b'0', b'0', ''),
(68, 1, '407d6692-d0d1-11e4-9841-f46d04612ccc', 'Рачунарство и информатика', 4, '1.5.16.40.68.', 40, 4, 0, 0, b'0', b'0', ''),
(86, 1, '5513260be644e', 'nova 123', 2, '1.8.86.', 8, 0, 1, 0, b'0', b'0', ''),
(87, 1, '55169d6eb8fca', 'nova 2', 2, '1.8.', 8, 2, 0, 0, b'0', b'0', ''),
(89, 1, '55169e083f1b6', 'New node', 2, '1.8.', 8, 4, 0, 0, b'0', b'0', ''),
(90, 1, '55169e68e7b18', 'New node', 3, '1.8.87.', 87, 1, 0, 0, b'0', b'0', ''),
(91, 1, '55169eda24fc3', 'New node', 3, '1.8.87.', 87, 2, 0, 0, b'0', b'0', ''),
(92, 1, '55169f4d9d019', 'nova 5', 3, '1.8.87.', 87, 3, 0, 0, b'0', b'0', '');

-- --------------------------------------------------------

--
-- Table structure for table `categorycourserelation`
--

CREATE TABLE IF NOT EXISTS `categorycourserelation` (
  `CategoryId` bigint(20) NOT NULL,
  `CourseId` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
`Id` bigint(20) NOT NULL,
  `Version` int(11) NOT NULL,
  `Guid` varchar(32) NOT NULL,
  `Title` text CHARACTER SET cp1251 COLLATE cp1251_bin NOT NULL,
  `CategoryId` bigint(20) NOT NULL,
  `IsDeleted` bit(1) NOT NULL,
  `CreatedAt` date NOT NULL,
  `LastModifiedAt` date DEFAULT NULL,
  `CreatedByUserId` bigint(20) DEFAULT NULL,
  `CreatedByUserName` varchar(30) NOT NULL,
  `ContentType` tinyint(5) DEFAULT NULL,
  `Content` text CHARACTER SET cp1251 COLLATE cp1251_bin,
  `FilePath` text CHARACTER SET cp1251 COLLATE cp1251_bin
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`Id`, `Version`, `Guid`, `Title`, `CategoryId`, `IsDeleted`, `CreatedAt`, `LastModifiedAt`, `CreatedByUserId`, `CreatedByUserName`, `ContentType`, `Content`, `FilePath`) VALUES
(1, 1, '5515bc635fc67', 'test kroz panel novi nasvlo', 2, b'1', '2015-03-27', '2015-03-27', NULL, '', 1, '<p>test 13131 ham</p>\n', NULL),
(2, 1, '5515bc99725a4', 'test 2 AI', 2, b'0', '2015-03-27', '2015-03-27', NULL, '', 1, '<blockquote>\n<p>tes 242 <strong>cada dasdjkjka dw daw</strong>d wad awd adaw</p>\n</blockquote>\n\n<p>cadaw neki sadrzaj razni<s> tes</s>t &nbsp;dawdaw &nbsp;2dawdawdaw daw</p>\n\n<ul>\n	<li>dada</li>\n	<li>faf</li>\n</ul>\n\n<p>&nbsp;</p>\n', NULL),
(3, 1, '5515bcb3e6b06', 'dawdaw', 4, b'0', '2015-03-27', NULL, NULL, '', 1, '<p>dawdaw</p>\n', NULL),
(4, 1, '5515bfe84e0f4', 'adada', 4, b'0', '2015-03-27', '2015-03-27', NULL, '', 1, '<p>dada</p>\n', NULL),
(5, 1, '5515d0d77ffa4', 'dada', 2, b'0', '2015-03-27', NULL, NULL, '', 1, '<p>3232</p>\n', NULL),
(6, 1, '5516721b281d1', 'Nova vest 131', 2, b'0', '2015-03-28', NULL, NULL, '', 1, '<p>dawd <em>da</em></p>\n', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `CourseId` bigint(20) NOT NULL,
  `CourseName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Id` int(11) NOT NULL,
  `Version` int(11) NOT NULL,
  `Guid` int(11) NOT NULL,
  `UserName` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `PasswordHash` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `HashKey` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `Email` text NOT NULL,
  `FirstName` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `LastName` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `CreatedAt` date NOT NULL,
  `PhotoPath` text NOT NULL,
  `About` text CHARACTER SET utf16 COLLATE utf16_bin,
  `AuthorizationId` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Version`, `Guid`, `UserName`, `PasswordHash`, `HashKey`, `Email`, `FirstName`, `LastName`, `CreatedAt`, `PhotoPath`, `About`, `AuthorizationId`) VALUES
(0, 1, 1, 'года', '', '', 'gdavidovic@yahoo.com', 'Гордана', 'Давидовић', '2015-03-26', '', 'Рођена сам у Београду. :)', 0),
(2, 0, 0, 'дијо', '', '', 'divna@gmail.com', 'Дивна', 'Јовановић', '2015-03-26', '', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `usercourserelation`
--

CREATE TABLE IF NOT EXISTS `usercourserelation` (
  `UserId` bigint(20) NOT NULL,
  `CourseId` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `authorizationrole`
--
ALTER TABLE `authorizationrole`
 ADD PRIMARY KEY (`AuthorizationRoleId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`Id`), ADD UNIQUE KEY `Guid` (`Guid`);

--
-- Indexes for table `categorycourserelation`
--
ALTER TABLE `categorycourserelation`
 ADD PRIMARY KEY (`CategoryId`,`CourseId`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
 ADD PRIMARY KEY (`CourseId`);

--
-- Indexes for table `usercourserelation`
--
ALTER TABLE `usercourserelation`
 ADD PRIMARY KEY (`UserId`,`CourseId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;