-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 08 mrt 2018 om 13:42
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
DROP DATABASE IF EXISTS `am1a_loginregistration`;
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
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `login`
--

INSERT INTO `login` (`id`, `email`, `conditions`, `userrole`, `password`, `activated`) VALUES
(55, 'bartjevanbeulen@gmail.com', 'on', 'subscriber', '$2y$10$ecjTNqwB03yIEzASqB87aO.tNHDHQF//vZr.Lw7q2NUcXF8nZrYJO', 'yes'),
(56, 'bertje@gmail.com', 'on', 'subscriber', '$2y$10$z2oUf7gQ3UxtdgHboBwBB.TfzaO41cR0hVE/WPiZg0Pz8Ih/NPyNC', 'yes'),
(57, 'herman@gmail.com', 'on', 'subscriber', '', 'no'),
(58, 'chantal@gmail.com', 'on', 'subscriber', '$2y$10$LMK0Gb7WknkWKI9EreE0vuaC/vlb0Z61x3dm4YOdJrJEkjWkW6wlq', 'yes'),
(59, 'arjjan@slkjf', 'on', 'subscriber', '', 'no'),
(60, 'admin@gmail.com', 'on', 'subscriber', '$2y$10$8tmjtHEVIwlf4USzeii1hOn79Zcj7ytW7AalIrAHXdNQ6dhnWzfOa', 'yes'),
(61, 'superadmin@gmail.com', 'on', 'subscriber', '$2y$10$yPNkRKDaR1icFwFmTiLgfeI.Olcs19vR3Ai4ooK41sug0zjUAlNqy', 'yes'),
(62, 'test@gmail.com', 'on', 'subscriber', '$2y$10$/lbfRHZ8nR/tPJu3N2uHs.9wndMJBnyQUMHGErSlDP.VXayG2s4i6', 'yes');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
