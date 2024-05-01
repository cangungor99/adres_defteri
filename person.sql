-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 18 Nis 2024, 21:09:18
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `person`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `person_data`
--

CREATE TABLE `person_data` (
  `id` int(11) NOT NULL,
  `ad` varchar(100) NOT NULL,
  `soyad` varchar(100) NOT NULL,
  `tel` varchar(25) NOT NULL,
  `adres` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `person_data`
--

INSERT INTO `person_data` (`id`, `ad`, `soyad`, `tel`, `adres`) VALUES
(2, 'Ayşe', 'Kaya', '0532 987 65 43', 'İstanbul'),
(3, 'Mehmet', 'Demir', '0543 321 98 76', 'İzmir'),
(4, 'Fatma', 'Çelik', '0506 789 12 34', 'Bursa'),
(5, 'Mustafa', 'Arslan', '0551 234 56 78', 'Antalya'),
(6, 'Zeynep', 'Şahin', '0530 876 54 32', 'Adana'),
(7, 'Emre', 'Koç', '0544 567 89 01', 'Mersin'),
(8, 'İrem', 'Yıldız', '0505 432 10 98', 'Trabzon'),
(9, 'Berk', 'Aydın', '0552 345 67 89', 'Eskişehir'),
(10, 'Elif', 'Güneş', '0533 210 98 76', 'Diyarbakır'),
(11, 'Onur', 'Şen', '0553 678 90 12', 'Konya'),
(12, 'Esra', 'Kurt', '0542 109 87 65', 'Gaziantep'),
(13, 'Deniz', 'Aslan', '0507 654 32 10', 'Şanlıurfa'),
(14, 'Burak', 'Korkmaz', '0531 098 76 54', 'Samsun'),
(15, 'Sevil', 'Şimşek', '0550 987 65 43', 'Balıkesir');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `person_data`
--
ALTER TABLE `person_data`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `person_data`
--
ALTER TABLE `person_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
