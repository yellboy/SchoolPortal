-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2015 at 10:38 PM
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
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
`Id` bigint(20) NOT NULL,
  `Version` int(11) NOT NULL,
  `Guid` varchar(32) CHARACTER SET latin1 NOT NULL,
  `Title` text COLLATE cp1251_bin NOT NULL,
  `CategoryId` bigint(20) NOT NULL,
  `IsDeleted` bit(1) NOT NULL,
  `CreatedAt` date NOT NULL,
  `LastModifiedAt` date DEFAULT NULL,
  `CreatedByUserId` bigint(20) DEFAULT NULL,
  `CreatedByUserName` varchar(30) CHARACTER SET latin1 NOT NULL,
  `ContentType` tinyint(5) DEFAULT NULL,
  `Content` text COLLATE cp1251_bin,
  `FilePath` text COLLATE cp1251_bin
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=cp1251 COLLATE=cp1251_bin;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`Id`, `Version`, `Guid`, `Title`, `CategoryId`, `IsDeleted`, `CreatedAt`, `LastModifiedAt`, `CreatedByUserId`, `CreatedByUserName`, `ContentType`, `Content`, `FilePath`) VALUES
(1, 1, '551b06899c8e0', 'Кроз историју', 11, b'1', '2015-03-31', '2015-05-09', 1, '????', 1, './contents/1.html', NULL),
(2, 1, '551b077677f7e', 'Школски одбор', 12, b'1', '2015-03-31', '2015-04-02', 3, 'markic', 1, './contents/2.html', NULL),
(3, 1, '551b09bc8fe31', 'Контакт', 10, b'1', '2015-03-31', NULL, 3, 'markic', 1, './contents/3.html', NULL),
(4, 1, '551b0a9cec298', 'Директор и помоћник директора', 30, b'1', '2015-03-31', '2015-03-31', 3, 'markic', 1, './contents/4.html', NULL),
(5, 1, '551b0acfa76e6', 'Секретар', 31, b'1', '2015-03-31', '2015-03-31', 3, 'markic', 1, './contents/5.html', NULL),
(6, 1, '551b0b966d038', 'Стручна већа', 32, b'1', '2015-03-31', NULL, 3, 'markic', 1, './contents/6.html', NULL),
(7, 1, '551b0bef3c6ac', 'Стручни сарадници', 33, b'1', '2015-03-31', NULL, 3, 'markic', 1, './contents/7.html', NULL),
(8, 1, '551b0c2c89bff', 'Рачуноводство и администрација', 34, b'1', '2015-03-31', NULL, 3, 'markic', 1, './contents/8.html', NULL),
(9, 1, '551b0c5b7ddac', 'Техничко и помоћно особље', 35, b'1', '2015-03-31', NULL, 3, 'markic', 1, './contents/9.html', NULL),
(10, 1, '551b0e12917da', 'Инклузија', 29, b'1', '2015-03-31', NULL, 3, 'markic', 1, './contents/10.html', NULL),
(11, 1, '551b0e5da2ae8', 'Спорт', 43, b'1', '2015-03-31', NULL, 3, 'markic', 1, './contents/11.html', NULL),
(12, 1, '551b0ebd37497', 'Библиотека', 27, b'1', '2015-03-31', NULL, 3, 'markic', 1, './contents/12.html', NULL),
(13, 1, '551b0ed6e623b', 'Позориште', 26, b'1', '2015-03-31', NULL, 3, 'markic', 1, './contents/13.html', NULL),
(16, 1, '551d9bee2f0ef', 'Филм о историји Пете београдске гимназије', 2, b'1', '2013-11-12', NULL, 3, 'markic', 1, './contents/16.html', NULL),
(17, 1, '551d9c0fd0406', 'Графен претвара Кока Колу у воду', 2, b'1', '2014-03-07', NULL, 3, 'markic', 1, './contents/17.html', NULL),
(18, 1, '551d9c355e02f', 'УПИС У ПРВУ ГОДИНУ', 2, b'1', '2015-02-28', NULL, 3, 'markic', 1, './contents/18.html', NULL),
(19, 1, '551d9c5643dbd', 'ИЗВЕШТАЈ СА ТАКМИЧЕЊА', 2, b'1', '2015-04-02', NULL, 3, 'markic', 1, './contents/19.html', NULL),
(20, 1, '551da129a6c4d', 'Савет родитеља', 13, b'1', '2015-04-02', NULL, 3, 'markic', 1, './contents/20.html', NULL),
(21, 1, '551da1ef5f182', 'Ђачки парламент', 14, b'1', '2015-04-02', NULL, 3, 'markic', 1, './contents/21.html', NULL),
(22, 1, '551da21ddeb27', 'Смерови', 15, b'1', '2015-04-02', NULL, 3, 'markic', 1, './contents/22.html', NULL),
(23, 1, '551da292af35d', 'Распоред часова', 20, b'1', '2015-04-02', NULL, 3, 'markic', 1, './contents/23.html', NULL),
(24, 1, '551da2b7d8b53', 'Распоред звона', 19, b'1', '2015-04-02', NULL, 3, 'markic', 1, './contents/24.html', NULL),
(25, 1, '551da2cfb69cc', 'Отворена врата', 17, b'1', '2015-04-02', NULL, 3, 'markic', 1, './contents/25.html', NULL),
(26, 1, '551da2f34844b', 'Школски календар', 21, b'1', '2015-04-02', NULL, 3, 'markic', 1, './contents/26.html', NULL),
(27, 1, '551da3cc28262', 'Радионице', 24, b'1', '2015-04-02', NULL, 3, 'markic', 1, './contents/27.html', NULL),
(28, 1, '551da3ea874c4', 'Утисци', 41, b'1', '2015-04-02', NULL, 3, 'markic', 1, './contents/28.html', NULL),
(29, 1, '551da436f1d58', 'Секције', 28, b'1', '2015-04-02', NULL, 3, 'markic', 1, './contents/29.html', NULL),
(30, 1, '551da455a1b1e', 'Школа данас', 44, b'1', '2015-04-02', NULL, 3, 'markic', 1, './contents/30.html', NULL),
(31, 1, '551da47b335db', 'Кабинети', 45, b'1', '2015-04-02', NULL, 3, 'markic', 1, './contents/31.html', NULL),
(32, 1, '551da4af557ff', 'Дружења', 46, b'1', '2015-04-02', NULL, 3, 'markic', 1, './contents/32.html', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
 ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
