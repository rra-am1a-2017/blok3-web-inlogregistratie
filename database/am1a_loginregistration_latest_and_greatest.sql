-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 05 apr 2018 om 11:41
-- Serverversie: 5.7.19
-- PHP-versie: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `am1a_loginregistration`
--
CREATE DATABASE IF NOT EXISTS `am1a_loginregistration` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `am1a_loginregistration`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `conditions` enum('on','off') NOT NULL DEFAULT 'off',
  `userrole` enum('superadmin','administrator','subscriber','') NOT NULL DEFAULT 'subscriber',
  `password` varchar(60) NOT NULL,
  `activated` enum('yes','no') NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `login`
--

INSERT INTO `login` (`id`, `email`, `conditions`, `userrole`, `password`, `activated`) VALUES
(63, 'sub@nl', 'on', 'superadmin', '$2y$10$diyGOJPsN2d7pDzqfnU.DuXCxYJKSCUSpMpohOMTroHiVU.dDgXdm', 'yes'),
(64, 'admin@nl', 'on', 'subscriber', '$2y$10$6IUXcJkVb11aOhqHgE8tw.QXFFnpIHAKUGBIPTcT.2on/V9BZRG0K', 'yes'),
(65, 'super@nl', 'on', 'superadmin', '$2y$10$MnbyvdxdqtswhWHFSuDwEeDA60G.UQt75g69xTMK6Yw7ia5iULzB2', 'yes'),
(66, 'q@q', 'on', 'subscriber', '$2y$10$5ruULqzkCdg6AqwM5QMtN.BnzqX0SZEItJkvsndc5cqVryULMCQYC', 'yes'),
(67, 'sldkj@jlskdjflk', 'on', 'subscriber', '$2y$10$mRyqDojFHKRqYCNLfmzg9.pZUgAyCXkZp/bKgL1hvrv1Mr.ES7N5C', 'yes'),
(68, 'jksdflj@kljsdlkfjslk', 'on', 'subscriber', '$2y$10$5AbVXSa7sPObdWLp7NHTPefsHapiKOHU0gmGZ3wqrKYyshGyoa64y', 'yes');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
