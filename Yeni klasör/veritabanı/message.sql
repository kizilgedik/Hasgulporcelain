-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 19 Ağu 2022, 18:13:53
-- Sunucu sürümü: 5.7.36
-- PHP Sürümü: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `me`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id number',
  `NameSurname` varchar(40) NOT NULL COMMENT 'Name and surname',
  `PhoneNumber` varchar(11) NOT NULL COMMENT 'Phone number',
  `Email` varchar(30) NOT NULL COMMENT 'E mail number',
  `Topic` varchar(25) NOT NULL COMMENT 'Topic ',
  `Message` varchar(300) NOT NULL COMMENT 'Message ',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `message`
--

INSERT INTO `message` (`Id`, `NameSurname`, `PhoneNumber`, `Email`, `Topic`, `Message`) VALUES
(1, 'Ahmet Bey', '05555555555', 'alibey@gmail.com', 'deneme', 'Bu bir denemedir.'),
(5, 'Ã–mer Bey', '05444444444', 'omerbey@hotmail.com', 'Genel', 'Bana ulaÅŸÄ±n!'),
(6, 'Ã–mer Bey', '05444444444', 'omerbey@hotmail.com', 'Genel', 'Bana ulaÅŸÄ±n!'),
(7, 'Selami Uslu', '05449996541', 'selamiuslu@yahomail.com', 'Ben Selami', 'Merhaba ben selami.'),
(8, 'Selami Uslu', '05449996541', 'selamiuslu@yahomail.com', 'Genel', 'Selam.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
