-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 15 dec 2017 om 16:43
-- Serverversie: 5.7.19
-- PHP-versie: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gameworld2`
--
CREATE DATABASE IF NOT EXISTS `gameworld2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gameworld2`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gamecategory`
--

CREATE TABLE IF NOT EXISTS `gamecategory` (
  `categoryid` int(3) NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(50) NOT NULL,
  `categorydiscription` text NOT NULL,
  `categoryimage` varchar(100) NOT NULL,
  PRIMARY KEY (`categoryid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `gamecategory`
--

INSERT INTO `gamecategory` (`categoryid`, `categoryname`, `categorydiscription`, `categoryimage`) VALUES
(1, 'PS 4', '', ''),
(2, 'PC', '', ''),
(3, 'X-box', '', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `games`
--

CREATE TABLE IF NOT EXISTS `games` (
  `gameid` int(5) NOT NULL AUTO_INCREMENT,
  `gametitle` varchar(50) NOT NULL,
  `gamedescription` text NOT NULL,
  `gameimage` varchar(100) NOT NULL,
  `gameprice` decimal(5,2) NOT NULL,
  `gamecategory` int(3) NOT NULL,
  PRIMARY KEY (`gameid`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `games`
--

INSERT INTO `games` (`gameid`, `gametitle`, `gamedescription`, `gameimage`, `gameprice`, `gamecategory`) VALUES
(1, 'Call of Duty World War 2', 'uehfihfefibbe', 'codWW2.jpg', '50.00', 1),
(2, 'Grand Theft Auto 5', '', 'gta5.jpg', '40.00', 1),
(3, 'Battlefield 1', '', 'battlefield1.jpg', '55.50', 1),
(4, 'Assassins Creed syndicate', '', 'assassinscreed.jpg', '45.00', 3),
(5, 'Destiny', '', 'destiny.jpg', '60.00', 3),
(6, 'FiFa18', '', 'fifa18.jpg', '65.00', 3),
(7, 'Infamous Second Son', '', 'infamous.jpg', '45.00', 2),
(8, 'Mortal Kombat X', '', 'mortalkombat10.jpg', '45.00', 2),
(9, 'Need for speed Rivals', '', 'needforspeed.jpg', '50.00', 2),
(10, 'Fallout 4', '', 'fallout4.jpg', '35.00', 3),
(11, 'Ghost Recon Future soldier', '', 'ghostrecon.jpg', '39.00', 1),
(12, 'Sims 4', '', 'sims4.jpg', '30.00', 2),
(13, 'Star Wars Battle Front 2', '', 'starwars2.jpg', '65.00', 1),
(14, 'Minecraft', '', 'minecraft.jpg', '25.00', 2),
(15, 'Titanfall 2', '', 'titanfall2.jpg', '60.00', 3),
(16, 'Diablo ll', '', 'diablo2.jpg', '57.00', 1),
(17, 'The Last Guardian', '', 'thelastguardian.jpg', '49.99', 2),
(18, 'Halo Wars ll', '', 'halowars2.jpg', '42.50', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
