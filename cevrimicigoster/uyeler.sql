-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 11 Kas 2013, 10:13:50
-- Sunucu sürümü: 5.6.12-log
-- PHP Sürümü: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `uyeler`
--
CREATE DATABASE IF NOT EXISTS `uyeler` DEFAULT CHARACTER SET latin5 COLLATE latin5_turkish_ci;
USE `uyeler`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uye`
--

CREATE TABLE IF NOT EXISTS `uye` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uyekullaniciadi` varchar(255) NOT NULL,
  `uyesifresi` varchar(255) NOT NULL,
  `uyesonislemtarihi` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin5 AUTO_INCREMENT=7 ;

--
-- Tablo döküm verisi `uye`
--

INSERT INTO `uye` (`id`, `uyekullaniciadi`, `uyesifresi`, `uyesonislemtarihi`) VALUES
(1, 'volkan', '123456', 0),
(2, 'gokce', '12345678', 0),
(3, 'hakan', '12345', 0),
(4, 'aykan', '1234', 0),
(5, 'mesut', '123', 0),
(6, 'ferhat', '1234567', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
