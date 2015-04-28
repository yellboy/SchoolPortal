-- Hopefully this is last final resolved database
-- --------------------------------------------------------

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
  `Route` text COLLATE cp1251_bin NOT NULL,
  `IsCourse` bit(1) DEFAULT NULL,
  `CourseName` varchar(50) COLLATE cp1251_bin DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=cp1251 COLLATE=cp1251_bin;


ALTER TABLE `category`
 ADD PRIMARY KEY (`Id`), ADD UNIQUE KEY `Guid` (`Guid`);

ALTER TABLE `category`
MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=100;


-- --------------------------------------------------------

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



CREATE TABLE IF NOT EXISTS `authorizationrole` (
`Id` bigint(20) NOT NULL,
  `Name` varchar(32) CHARACTER SET cp1251 COLLATE cp1251_bin NOT NULL,
  `Code` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


-- --------------------------------------------------------


-- --------------------------------------------------------

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
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=cp1251 COLLATE=cp1251_bin;