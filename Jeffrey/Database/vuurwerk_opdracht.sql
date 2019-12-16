-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 16 dec 2019 om 15:24
-- Serverversie: 10.4.6-MariaDB
-- PHP-versie: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vuurwerk_opdracht`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `afspraken`
--

CREATE TABLE `afspraken` (
  `Naam` varchar(50) NOT NULL,
  `Datum` varchar(30) NOT NULL,
  `Tijd` varchar(30) NOT NULL,
  `Met_wie` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `afspraken`
--

INSERT INTO `afspraken` (`Naam`, `Datum`, `Tijd`, `Met_wie`) VALUES
('Jeffrey', '10-20-2019', '00:00', 'Boterham');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE `product` (
  `naam` varchar(50) NOT NULL,
  `prijs` double(5,2) NOT NULL,
  `vooraad` int(11) NOT NULL,
  `categorieen` varchar(50) NOT NULL,
  `url_afbeelding` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`naam`, `prijs`, `vooraad`, `categorieen`, `url_afbeelding`) VALUES
('Magnoli', 10.00, 750, 'sier', 'images/cake2.png'),
('Red Dragon', 39.95, 1000, 'knal', 'images/reddragon.png'),
('Rock \'n roller', 20.00, 450, 'sier', 'images/cake3.png'),
('Strijkers (75 stuks)', 5.00, 250, 'knal', 'images/strijkers.png'),
('THE HOAX + INSOMNIA', 12.00, 500, 'sier', 'images/cake1.png'),
('Thunder XL', 4.00, 350, 'knal', 'images/thunder.png');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`naam`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
