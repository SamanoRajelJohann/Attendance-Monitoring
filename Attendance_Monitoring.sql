-- Adminer 4.8.1 MySQL 10.4.28-MariaDB dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `accountsignup`;
CREATE TABLE `accountsignup` (
  `UserName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `accountsignup` (`UserName`, `Email`, `Password`) VALUES
('ITE601',	'rajelwashere@gmail.com',	'dev'),
('Radge',	'rajelwashere@gmail.com',	'1234453');

DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `ID` int(111) NOT NULL,
  `First_Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Middle_Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Last_Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `BirthDate` date NOT NULL,
  `Address` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `student` (`ID`, `First_Name`, `Middle_Name`, `Last_Name`, `BirthDate`, `Address`) VALUES
(12345,	'Rajel',	'Esponilla',	'Samano',	'2023-12-29',	'sesame street 6666');

DROP TABLE IF EXISTS `teachers`;
CREATE TABLE `teachers` (
  `ID` int(11) NOT NULL,
  `First_Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Middle_Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Last_Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Job_Description` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `teachers` (`ID`, `First_Name`, `Middle_Name`, `Last_Name`, `Job_Description`) VALUES
(12345,	'fdgsdfgsdf',	'ddgsdgdg',	'ggdfgfd',	'Part Time');

-- 2023-12-23 07:27:13