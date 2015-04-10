ALTER TABLE `category` CHANGE `CourseName` `CourseName` VARCHAR(50) CHARACTER SET cp1251 COLLATE cp1251_bin NULL;
ALTER TABLE `category` CHANGE `IsCourse` `IsCourse` BIT(1) NULL;
UPDATE `schoolportal`.`category` SET `IsFixedRoute` = b'1' WHERE `category`.`Id` = 23;
UPDATE `schoolportal`.`category` SET `Route` = '/alumni' WHERE `category`.`Id` = 23;

UPDATE `schoolportal`.`category` SET `IsCourse` = b'1' WHERE `category`.`Id` > 46;


SELECT CONCAT(cat.Title, " - ", parent.Title) FROM `category` as cat INNER JOIN `category` as parent ON parent.`Id` = cat.`ParentId` WHERE cat.`Id` > 46
UPDATE `schoolportal`.`category` as cat INNER JOIN `category` as parent ON parent.`Id` = cat.`ParentId` SET cat.`CourseName` = CONCAT(cat.Title, " - ", parent.Title) WHERE cat.`Id` > 46
