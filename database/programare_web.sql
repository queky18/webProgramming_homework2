-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: ian. 18, 2019 la 04:26 PM
-- Versiune server: 10.1.37-MariaDB
-- Versiune PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `programare_web`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `country` varchar(50) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `students`
--

INSERT INTO `students` (`student_id`, `student_name`, `email_address`, `contact`, `gender`, `country`, `datetime`) VALUES
(37, 'Adrian Gheorghe', 'adrian.gh.m.18@gmail.com', '12412412412', 'Male', 'RomÃ¢nia', '2019-01-16 16:51:21'),
(38, 'Adrian Gheorghe', 'adrian.gh.m.18@gmail.com', '', '', 'RomÃ¢nia', '2019-01-16 17:08:13'),
(34, 'Adrian Gheorghe', 'adrian.gh.m.18@gmail.com', '21412412412412', 'Male', 'RomÃ¢nia', '2019-01-16 16:51:09'),
(40, 'Adrian Gheorghe', 'adrian.gh.m.18@gmail.com', '', '', 'RomÃ¢nia', '2019-01-16 17:08:27'),
(36, 'Adrian Gheorghe', 'adrian.gh.m.18@gmail.com', '12341124124124412', '', 'RomÃ¢nia', '2019-01-16 16:51:17'),
(35, 'Adrian Gheorghe', 'adrian.gh.m.18@gmail.com', 'Paradox@gmail.com', '', 'RomÃ¢nia', '2019-01-16 16:51:13'),
(39, 'Adrian Gheorghe', 'adrian.gh.m.18@gmail.com', '', '', 'RomÃ¢nia', '2019-01-16 17:08:21');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `studiu_demografic`
--

CREATE TABLE `studiu_demografic` (
  `id_persoana` int(11) NOT NULL,
  `nume` varchar(55) NOT NULL,
  `varsta` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Eliminarea datelor din tabel `studiu_demografic`
--

INSERT INTO `studiu_demografic` (`id_persoana`, `nume`, `varsta`) VALUES
(1, 'Gheorghe', 32),
(2, 'Marin', 43),
(3, 'George', 13),
(4, 'Adrian', 25);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `tabela1`
--

CREATE TABLE `tabela1` (
  `nr_crt` int(11) NOT NULL,
  `produs` varchar(30) NOT NULL,
  `bucati` int(15) NOT NULL,
  `pret_buc` int(20) NOT NULL,
  `pret_total` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Eliminarea datelor din tabel `tabela1`
--

INSERT INTO `tabela1` (`nr_crt`, `produs`, `bucati`, `pret_buc`, `pret_total`) VALUES
(1, 'Umbra de Salam', 25, 10, 250),
(2, 'Ceafa de Pui', 20, 20, 400),
(3, 'Sarmale umplute cu intuneric', 100, 1, 100),
(4, 'Vasole batuta cu putere', 50, 10, 500),
(5, 'Amintiri de Ceaun', 2, 25, 50),
(6, 'Castravezi rataciti', 20, 5, 100),
(7, 'Ardei SuntGras', 5, 10, 50);

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexuri pentru tabele `studiu_demografic`
--
ALTER TABLE `studiu_demografic`
  ADD PRIMARY KEY (`id_persoana`);

--
-- Indexuri pentru tabele `tabela1`
--
ALTER TABLE `tabela1`
  ADD PRIMARY KEY (`nr_crt`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pentru tabele `studiu_demografic`
--
ALTER TABLE `studiu_demografic`
  MODIFY `id_persoana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pentru tabele `tabela1`
--
ALTER TABLE `tabela1`
  MODIFY `nr_crt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
