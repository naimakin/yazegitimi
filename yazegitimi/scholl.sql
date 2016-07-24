-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 19 Tem 2016, 17:01:31
-- Sunucu sürümü: 5.5.46-0ubuntu0.14.04.2
-- PHP Sürümü: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `scholl`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE IF NOT EXISTS `iletisim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoyad` varchar(255) NOT NULL,
  `eposta` varchar(255) NOT NULL,
  `konu` varchar(255) NOT NULL,
  `mesaj` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `okul`
--

CREATE TABLE IF NOT EXISTS `okul` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uyeID` int(11) NOT NULL,
  `ad` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `telefon` varchar(255) NOT NULL,
  `adres` text NOT NULL,
  `tanitim` text NOT NULL,
  `company_img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uyeID` (`uyeID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Tablo döküm verisi `okul`
--

INSERT INTO `okul` (`id`, `uyeID`, `ad`, `website`, `mail`, `telefon`, `adres`, `tanitim`, `company_img`) VALUES
(1, 22, 'ffffffffffffffffff', 'ddddddddddddddddddgggg', 'jjjjjjjjjjjjjjjjjj', 'kkkkkkkkkkkkkk', 'dddddddddddddddd', 'hhhhhhhhhhhhhhhh', '1979603_861985607148170_2756807363637685971_n8.jpg'),
(6, 1, 'irfaniye', 'http://www.irfaniyeanaokulu.com/', 'bilgi@irfaniyeanaokulu.com', '(0362) 428 18 19', 'Yeni Mahalle 3307. Sokak No:5 Atakum / SAMSUN', 'Okulumuz fiziki olarak sadece anaokulu ö?rencileri dü?ünülerek yap?lm??', 'download_(1)1.jpg'),
(7, 0, 'selimiye', 'sssssssssssssssss', 'ssssssssss', '', 'ssssssssssssss', '', '?+90_544_787_2458?_20160217_2026271.jpg'),
(8, 2, 'külliyemmmmmmmmmmmm', 'mmmmmmmmmmmmmmmmm', 'mmmmmmmmmmmmmm', 'mmmmmmmmmmmm', 'mmmmmmmmmmmmmmm', 'mmmmmmmmmmmmmmm', '1511100_802922893054442_720919396_n_(1)4.jpg'),
(9, 0, 'xxxxxxxxxxx', 'xxxxxxxxx', 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxx', 'xxxxxxxxxxxxxxxx', '?+90_544_787_2458?_20160217_2026272.jpg'),
(10, 7, 'xxxxxxxxxxx', 'xxxxxxxxx', 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxx', 'xxxxxxxxxxxxxxxx', '?+90_544_787_2458?_20160217_2026273.jpg'),
(11, 0, 'qqqqqqqq', 'qqqqqqqqqqqqqqqqqqq', 'qqqqqqqqqqq', 'qqqqqqqqqqqq', 'qqqqqqqqqqq', 'qqqqqqqqqq', '1eb807af-5df5-47f1-9323-6a3af5c7eacc1.jpg'),
(12, 0, 'b', 'b', 'b', 'b', 'b', 'b', '10516588_1025553524124710_6937163315311997218_n3.jpg'),
(13, 3, 'ccccccccccc', 'ccccccccccc', 'ccccccccccccc', 'cccccccccccc', 'cccccccccccc', 'cccccccccccccc', '1979603_861985607148170_2756807363637685971_n11.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uyeID` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(233) NOT NULL,
  `uyeTP` int(11) NOT NULL,
  `sifre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sehir` varchar(233) NOT NULL,
  `meslek` varchar(255) NOT NULL,
  PRIMARY KEY (`uyeID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`uyeID`, `ad`, `uyeTP`, `sifre`, `email`, `sehir`, `meslek`) VALUES
(1, 'admin', 1, 'naim', 'nakn36@gmail.com', '55', 'bilg müh'),
(2, 'naim', 1, 'n', 'ararat36', '19', 'de'),
(3, 'c', 0, 'c', 'ccc', '18', 'cccc'),
(27, 'adam', 0, 'adam', 'adam', '55', 'adam'),
(28, 'servet', 0, 's', 'a', '18', 'sgrafiker');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE IF NOT EXISTS `yorumlar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `okulid` int(11) NOT NULL,
  `adsoyad` varchar(255) NOT NULL,
  `eposta` varchar(255) NOT NULL,
  `yorum` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`id`, `okulid`, `adsoyad`, `eposta`, `yorum`) VALUES
(1, 6, 'nakkknn', 'ssssss', 'sssssssssssssssssssssssssssssssssssssssssss'),
(2, 6, 'vdv', 'nakn36@gmail.com', 'fffffffffffffff'),
(3, 6, 'kars', 'ararat36', 'ddddddddddddddddd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
