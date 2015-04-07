-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2015 at 10:00 PM
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
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`Id` bigint(20) NOT NULL,
  `Version` int(11) NOT NULL,
  `Guid` varchar(32) NOT NULL,
  `UserName` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `Password` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `Email` text NOT NULL,
  `FirstName` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `LastName` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `CreatedAt` date NOT NULL,
  `PhotoPath` text NOT NULL,
  `About` text CHARACTER SET utf16 COLLATE utf16_bin,
  `AuthorizationId` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Version`, `Guid`, `UserName`, `Password`, `Email`, `FirstName`, `LastName`, `CreatedAt`, `PhotoPath`, `About`, `AuthorizationId`) VALUES
(1, 1, '1', 'года', '202cb962ac59075b964b07152d234b70', 'gdavidovic@yahoo.com', 'Гордана', 'Давидовић', '2015-03-26', './photos/1.jpg', 'Рођена сам у Београду.s :)						', 0),
(2, 0, '0', 'дијо', '202cb962ac59075b964b07152d234b70', 'divna@gmail.com', 'Дивна', 'Јовановић', '2015-03-26', './photos/default.jpg', '									', 0),
(3, 1, '6b66ca0e-d640-11e4-8641-f46d0461', 'markic', '944e7f5541dcc9e94aceb3a23d626af8', 'marin.markic@mail.com', 'Marin', 'Markic', '2015-03-29', './photos/default.jpg', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`Id`), ADD UNIQUE KEY `Id` (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
