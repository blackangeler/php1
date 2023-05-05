-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 23 Şub 2020, 22:50:18
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
-- Veritabanı: `uygulamalar_uyelik`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dersler`
--

CREATE TABLE `dersler` (
  `id` int(10) UNSIGNED NOT NULL,
  `ogrenciid` int(10) NOT NULL,
  `dersadi` varchar(255) NOT NULL,
  `yazili1notu` double NOT NULL,
  `yazili2notu` double NOT NULL,
  `sozlu1notu` double NOT NULL,
  `sozlu2notu` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `dersler`
--

INSERT INTO `dersler` (`id`, `ogrenciid`, `dersadi`, `yazili1notu`, `yazili2notu`, `sozlu1notu`, `sozlu2notu`) VALUES
(1, 1, 'Bilgisayar', 50, 45, 70, 90),
(2, 1, 'Edebiyat', 55, 55, 55, 55),
(3, 1, 'Matematik', 5, 5, 5, 5),
(7, 3, 'İngilizce', 20, 20, 20, 20),
(8, 4, 'Almanca', 15, 25, 5, 5),
(9, 7, 'Coğrafya', 5, 20, 10, 100);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyegiriscikislog`
--

CREATE TABLE `uyegiriscikislog` (
  `id` int(11) UNSIGNED NOT NULL,
  `kullaniciadi` varchar(255) NOT NULL,
  `islemtarihi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `uyegiriscikislog`
--

INSERT INTO `uyegiriscikislog` (`id`, `kullaniciadi`, `islemtarihi`) VALUES
(1, 'volkan', '07.11.2013 18:20:15'),
(2, 'volkan', '07.11.2013 18:56:10'),
(3, 'gokce', '07.11.2013 18:59:18'),
(4, 'örnek', '07.11.2013 19:00:07'),
(5, 'volkan', '07.11.2013 19:00:41'),
(6, 'gökçe', '07.11.2013 19:11:50'),
(7, 'örnek', '07.11.2013 19:11:59'),
(8, 'volkan', '07.11.2013 19:12:09'),
(9, 'volkan', '07.11.2013 19:37:34'),
(10, 'gökçe', '07.11.2013 19:47:18'),
(11, 'örnek', '07.11.2013 19:47:47'),
(14, 'abc', '19.02.2020 23:33:28'),
(15, 'abc', '19.02.2020 23:33:32'),
(16, 'abc', '19.02.2020 23:33:41'),
(17, 'abc', '19.02.2020 23:34:28'),
(18, 'abc', '19.02.2020 23:56:33'),
(19, 'abc', '19.02.2020 23:56:40'),
(20, 'abc', '19.02.2020 23:57:29'),
(21, 'abc', '19.02.2020 23:57:33'),
(22, '0000', '19.02.2020 23:59:03'),
(23, '0000', '19.02.2020 23:59:09'),
(24, 'abc', '20.02.2020 00:20:19'),
(25, 'abc', '20.02.2020 00:30:44'),
(26, 'abc', '20.02.2020 00:30:47'),
(27, 'abc', '20.02.2020 00:30:58'),
(28, 'abc', '20.02.2020 00:31:37'),
(29, 'abc', '20.02.2020 00:33:46'),
(30, 'abc', '20.02.2020 12:14:35'),
(31, 'abc', '20.02.2020 12:15:16'),
(32, 'abc', '20.02.2020 12:16:51'),
(33, 'abc', '20.02.2020 12:19:06'),
(34, 'abc', '20.02.2020 12:35:37'),
(35, 'abc', '20.02.2020 12:44:03'),
(36, 'abc', '20.02.2020 12:44:13'),
(37, 'abc', '20.02.2020 12:48:38'),
(38, 'abc', '20.02.2020 12:53:26'),
(39, 'abc', '20.02.2020 13:01:50'),
(40, 'abc', '20.02.2020 13:01:54'),
(41, 'abc', '20.02.2020 13:02:04'),
(42, 'abc', '20.02.2020 13:03:56'),
(43, 'abc', '20.02.2020 13:04:00'),
(44, 'aa', '20.02.2020 13:04:18'),
(45, 'aa', '20.02.2020 13:04:20'),
(46, 'abc', '20.02.2020 13:05:57'),
(47, 'abc', '20.02.2020 13:06:10'),
(48, 'abc', '20.02.2020 13:07:04'),
(49, 'abc', '20.02.2020 13:07:42'),
(50, 'abc', '20.02.2020 13:07:45'),
(51, 'abc', '20.02.2020 13:08:35'),
(52, 'abc', '20.02.2020 13:08:50'),
(53, 'abc', '20.02.2020 13:10:13'),
(54, 'abc', '20.02.2020 13:10:19'),
(55, 'abc', '20.02.2020 13:12:00'),
(56, 'abc', '20.02.2020 13:12:09'),
(57, 'abc', '20.02.2020 13:14:08'),
(58, 'abc', '20.02.2020 13:14:13'),
(59, 'abc', '20.02.2020 13:16:23'),
(60, 'abc', '20.02.2020 13:16:28'),
(61, 'abc', '20.02.2020 13:18:52'),
(62, 'abc', '20.02.2020 13:18:58'),
(63, 'abc', '20.02.2020 13:20:26'),
(64, 'abc', '20.02.2020 13:20:55'),
(65, 'abc', '20.02.2020 13:22:16'),
(66, 'abc', '20.02.2020 13:25:19'),
(67, 'abc', '20.02.2020 13:25:26'),
(68, 'abc', '20.02.2020 13:45:47'),
(69, 'abc', '20.02.2020 13:52:03'),
(70, 'abc', '20.02.2020 13:52:12'),
(71, 'abc', '20.02.2020 13:59:36'),
(72, 'abc', '20.02.2020 13:59:41'),
(73, 'abc', '20.02.2020 14:00:21'),
(74, 'abc', '20.02.2020 14:03:20'),
(75, 'abc', '20.02.2020 14:22:27'),
(76, 'abc', '20.02.2020 14:25:06'),
(77, 'abc', '20.02.2020 14:27:56'),
(78, 'aa', '20.02.2020 14:29:13'),
(79, 'abc', '20.02.2020 14:30:41'),
(80, 'fff', '20.02.2020 14:39:21'),
(81, 'fff', '20.02.2020 14:41:20'),
(82, 'fff', '20.02.2020 14:41:40'),
(83, 'abc', '20.02.2020 14:42:27'),
(84, 'abc', '23.02.2020 21:09:09'),
(85, 'abc', '23.02.2020 22:27:32'),
(86, 'abc', '23.02.2020 22:28:55'),
(87, 'abc', '23.02.2020 22:42:48'),
(88, 'abc', '23.02.2020 22:44:43'),
(89, 'abc', '23.02.2020 22:45:01'),
(90, 'abc', '23.02.2020 22:47:01');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `id` int(11) UNSIGNED NOT NULL,
  `kullaniciadi` varchar(255) NOT NULL,
  `sifre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adisoyadi` varchar(255) NOT NULL,
  `cinsiyet` varchar(255) NOT NULL,
  `telefon` varchar(255) NOT NULL,
  `resim` varchar(255) NOT NULL,
  `ipadresi` varchar(255) NOT NULL,
  `kayittarihi` varchar(255) NOT NULL,
  `ogrencininsinifi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `kullaniciadi`, `sifre`, `email`, `adisoyadi`, `cinsiyet`, `telefon`, `resim`, `ipadresi`, `kayittarihi`, `ogrencininsinifi`) VALUES
(1, 'volkan', '12345678', 'volkan@tatliilisim.com', 'volkan alakent', 'Erkek', '05321234567', '107168536262811249114.jpg', '127.0.0.1', '07.11.2013 18:06:18', '8a'),
(2, 'gökçe', '9876543210', 'gokce@tatlibilisim.com', 'Gökçe Öney', 'Bayan', '05321111111', '187231438479305299499.jpg', '127.0.0.1', '07.11.2013 18:07:49', '8a'),
(3, 'örnek', '0000', 'demo@tatlibilisim.com', 'Örnek İsim', 'Erkek', '02120000000', '644235214976806325347.jpg', '127.0.0.1', '07.11.2013 18:59:52', '8a'),
(4, 'sdgsdg', 'sdgdsg', 'sdgds', 'dsgsd', 'Erkek', 'sdgds', '', '::1', '18.02.2020 22:42:16', '8b'),
(5, '0000', 'khkh', 'ghkjhg', 'khk', 'Erkek', 'kjhkj', '', '::1', '18.02.2020 22:57:11', '8b'),
(16, 'abc', 'dsgds', 'dsghds', 'hfsdhs', 'Erkek', 'dfh', '723155489265566936133.jpg', '::1', '19.02.2020 23:33:23', '8b'),
(17, 'sdgsdgdsg', 'dsgds', 'dsgsdg', 'sdgsd', 'Bayan', 'dsgds', '', '::1', '19.02.2020 23:54:35', '8b'),
(18, 'aa', 'aa', 'aa', 'aa', 'Bayan', 'aa', '985035959478483007603.jpg', '::1', '20.02.2020 13:04:11', '8b'),
(19, 'abcd', 'abcd', 'abcdsgs', 'abcd', 'Erkek', 'abcd', '', '::1', '20.02.2020 14:05:33', '8b'),
(20, 'fff', 'ffffgsf', 'fffsdgs', 'fffdsg', 'Erkek', 'fff', '332143619573311054292.jpg', '::1', '20.02.2020 14:39:03', '8c');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `dersler`
--
ALTER TABLE `dersler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `uyegiriscikislog`
--
ALTER TABLE `uyegiriscikislog`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `dersler`
--
ALTER TABLE `dersler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `uyegiriscikislog`
--
ALTER TABLE `uyegiriscikislog`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
