-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 22 Eki 2020, 01:49:59
-- Sunucu sürümü: 10.4.14-MariaDB
-- PHP Sürümü: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ezpass`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `credentials`
--

CREATE TABLE `credentials` (
  `id` int(10) NOT NULL,
  `platform` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `credentials`
--

INSERT INTO `credentials` (`id`, `platform`, `user`, `password`) VALUES
(43, 'instagram', 's%3A44%3A%22eJyzyHZ0jCyJdCordin2LTX2KMtN03YLtLUFAGWRB%2FA%3D%22%3B', 's%3A44%3A%22eJyzyHZ0jCyJdCordin2LTX2KMtN03YLtLUFAGWRB%2FA%3D%22%3B');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `credentials`
--
ALTER TABLE `credentials`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
