-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 21 Ara 2015, 01:18:54
-- Sunucu sürümü: 5.6.14
-- PHP Sürümü: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `rentacar`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `arac`
--

CREATE TABLE IF NOT EXISTS `arac` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `marka` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `model_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `modeli` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ozellik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `yakit` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `vites` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kapi` int(11) NOT NULL,
  `resim` text COLLATE utf8_turkish_ci NOT NULL,
  `firma_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `firma_id` (`firma_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bildirim`
--

CREATE TABLE IF NOT EXISTS `bildirim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `a_id` int(11) NOT NULL,
  `sigorta_tarih` date NOT NULL,
  `sigorta_tutar` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `vergi_tarih` date NOT NULL,
  `vergi_tutar` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kasko_tarih` date NOT NULL,
  `kasko_tutar` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `muayene_tarih` date NOT NULL,
  `muayene_tutar` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `bakım_tarih` date NOT NULL,
  `bakim_tutar` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `tamir_tarih` date NOT NULL,
  `tamir_tutar` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `firma_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `a_id` (`a_id`),
  KEY `a_id_2` (`a_id`),
  KEY `firma_id` (`firma_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gecici_uyelik`
--

CREATE TABLE IF NOT EXISTS `gecici_uyelik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gecmis`
--

CREATE TABLE IF NOT EXISTS `gecmis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `m_id` int(11) NOT NULL,
  `gidis` date NOT NULL,
  `donus` date NOT NULL,
  `alinan` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kalan` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `m_puan` int(11) NOT NULL,
  `not` text COLLATE utf8_turkish_ci NOT NULL,
  `firma_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `firma_id` (`firma_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `giderler`
--

CREATE TABLE IF NOT EXISTS `giderler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kalem` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `fiyat` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `zaman` int(11) NOT NULL,
  `firma_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `firma_id` (`firma_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kira`
--

CREATE TABLE IF NOT EXISTS `kira` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `a_id` int(11) NOT NULL,
  `gun` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hafta` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ay` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `yil` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `durum` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `firma_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `firma_id` (`firma_id`),
  KEY `a_id` (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kurum`
--

CREATE TABLE IF NOT EXISTS `kurum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firma` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `vd` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `vn` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `yetkili` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `firma_tel` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `yetkili_tel` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `adres` text COLLATE utf8_turkish_ci NOT NULL,
  `mail` text COLLATE utf8_turkish_ci NOT NULL,
  `images` text COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `kurum`
--

INSERT INTO `kurum` (`id`, `firma`, `vd`, `vn`, `yetkili`, `firma_tel`, `yetkili_tel`, `adres`, `mail`, `images`, `sifre`) VALUES
(1, 'Emanet Rent A Car', 'Gaziler', '05426987456', 'Kemal Durhat', '03624281819', '05426971198', 'Yeni mahalle 3307. Sokak No : 5 Atakum / SAMSUN', 'kemaldurhat@hotmail.com', '', 'ce76d254d71c00b771b8b2013d0a1485');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `muhasebe`
--

CREATE TABLE IF NOT EXISTS `muhasebe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `a_id` int(11) NOT NULL,
  `gidis` date NOT NULL,
  `donus` date NOT NULL,
  `tutar` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `r_gidis` date NOT NULL,
  `r_donus` date NOT NULL,
  `firma_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `firma_id` (`firma_id`),
  KEY `a_id` (`a_id`),
  KEY `a_id_2` (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `musteriler`
--

CREATE TABLE IF NOT EXISTS `musteriler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `adres` text COLLATE utf8_turkish_ci NOT NULL,
  `tc` int(11) NOT NULL,
  `firma_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `firma_id` (`firma_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=1 ;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `arac`
--
ALTER TABLE `arac`
  ADD CONSTRAINT `arac_ibfk_1` FOREIGN KEY (`id`) REFERENCES `bildirim` (`a_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `arac_ibfk_2` FOREIGN KEY (`firma_id`) REFERENCES `kurum` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `bildirim`
--
ALTER TABLE `bildirim`
  ADD CONSTRAINT `bildirim_ibfk_1` FOREIGN KEY (`firma_id`) REFERENCES `kurum` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `gecmis`
--
ALTER TABLE `gecmis`
  ADD CONSTRAINT `gecmis_ibfk_1` FOREIGN KEY (`firma_id`) REFERENCES `kurum` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `giderler`
--
ALTER TABLE `giderler`
  ADD CONSTRAINT `giderler_ibfk_1` FOREIGN KEY (`firma_id`) REFERENCES `kurum` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `kira`
--
ALTER TABLE `kira`
  ADD CONSTRAINT `kira_ibfk_1` FOREIGN KEY (`firma_id`) REFERENCES `kurum` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kira_ibfk_2` FOREIGN KEY (`a_id`) REFERENCES `arac` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `muhasebe`
--
ALTER TABLE `muhasebe`
  ADD CONSTRAINT `muhasebe_ibfk_1` FOREIGN KEY (`firma_id`) REFERENCES `kurum` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `muhasebe_ibfk_2` FOREIGN KEY (`a_id`) REFERENCES `arac` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `musteriler`
--
ALTER TABLE `musteriler`
  ADD CONSTRAINT `musteriler_ibfk_1` FOREIGN KEY (`firma_id`) REFERENCES `kurum` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
