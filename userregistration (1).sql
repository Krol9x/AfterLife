-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 27 Cze 2021, 17:38
-- Wersja serwera: 10.4.16-MariaDB
-- Wersja PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `userregistration`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ordertable`
--

CREATE TABLE `ordertable` (
  `ordernumber` varchar(200) NOT NULL,
  `costumer` varchar(200) NOT NULL,
  `artist` varchar(200) NOT NULL,
  `color` varchar(200) NOT NULL,
  `day` varchar(200) NOT NULL,
  `width` varchar(200) NOT NULL,
  `height` varchar(200) NOT NULL,
  `where` varchar(200) NOT NULL,
  `mess` varchar(200) NOT NULL,
  `hour` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `usertable`
--

CREATE TABLE `usertable` (
  `Imie` varchar(30) NOT NULL,
  `Nazwisko` varchar(30) NOT NULL,
  `Mail` varchar(30) NOT NULL,
  `tel` varchar(14) NOT NULL,
  `Haslo` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `usertable`
--

INSERT INTO `usertable` (`Imie`, `Nazwisko`, `Mail`, `tel`, `Haslo`) VALUES
('Hubert', 'Krol', 'example@gmail.com', '12-123-123-123', 'Example123');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `ordertable`
--
ALTER TABLE `ordertable`
  ADD PRIMARY KEY (`ordernumber`);

--
-- Indeksy dla tabeli `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`Mail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
