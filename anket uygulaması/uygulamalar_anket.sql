-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 06 Şub 2020, 22:06:33
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `uygulamalar_anket`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anketverileri`
--

CREATE TABLE `anketverileri` (
  `id` int(10) NOT NULL,
  `soru` varchar(255) NOT NULL,
  `cevapbir` varchar(255) NOT NULL,
  `cevapiki` varchar(255) NOT NULL,
  `cevapuc` varchar(255) NOT NULL,
  `oysayisicevapbir` int(10) NOT NULL,
  `oysayisicevapiki` int(10) NOT NULL,
  `oysayisicevapuc` int(10) NOT NULL,
  `oysayisitoplam` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `anketverileri`
--

INSERT INTO `anketverileri` (`id`, `soru`, `cevapbir`, `cevapiki`, `cevapuc`, `oysayisicevapbir`, `oysayisicevapiki`, `oysayisicevapuc`, `oysayisitoplam`) VALUES
(1, 'Sitemizi Nasıl Buldunuz?', 'İyi ', 'Normal', 'Kötü', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `oykullananlar`
--

CREATE TABLE `oykullananlar` (
  `id` int(10) UNSIGNED NOT NULL,
  `ipno` varchar(255) NOT NULL,
  `tarihdamgasi` int(11) NOT NULL,
  `tarih` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `anketverileri`
--
ALTER TABLE `anketverileri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `oykullananlar`
--
ALTER TABLE `oykullananlar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `anketverileri`
--
ALTER TABLE `anketverileri`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `oykullananlar`
--
ALTER TABLE `oykullananlar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
