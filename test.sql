-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 29, 2016 at 11:00 AM
-- Server version: 10.0.25-MariaDB-0ubuntu0.15.10.1
-- PHP Version: 5.6.23-1+deb.sury.org~wily+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(10) UNSIGNED NOT NULL,
  `ime` varchar(50) DEFAULT NULL,
  `prezime` varchar(50) DEFAULT NULL,
  `drzava` varchar(50) DEFAULT NULL,
  `grad` varchar(50) DEFAULT NULL,
  `ulica` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefon` varchar(30) DEFAULT NULL,
  `mobitel` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `drzava`, `grad`, `ulica`, `email`, `telefon`, `mobitel`) VALUES
(1, 'Mislav', 'Glavačević', 'Hrvatska', 'Slavonski Brod', 'Marinci 69a', 'mglavacevic@ffos.hr', NULL, '0919873363'),
(2, 'Ivona', 'Palko', 'Hrvatska', 'Kneževi Vinogradi', 'Vinogradska12', 'ipalko@ffos.hr', NULL, '974349324'),
(3, 'Adrijana --', 'Ledo -----', 'Hrvatska', 'Osijek', 'Bosutska 13', 'aledo@ffos.hr', NULL, '913694493'),
(4, 'Alen', 'Serdar', 'Hrvatska', 'Slavonski Brod', 'Natka Nodila 62', 'aserdar@ffos.hr', NULL, '0989928967'),
(5, 'Darijo', 'Srna', 'Hrvatska', 'Metković', 'Ulica Rozinka 11', 'dsrna@ffos.hr', NULL, '917084006'),
(6, 'Ivan', 'Perišić', 'Hrvatska', 'Split', 'Zagrebačka 44', 'iperisic@ffos.hr', NULL, '917057758'),
(7, 'Luka', 'Modrić', 'Hrvatska', 'Zadar', 'zadarska 12', 'lmodric@ffos.hr', NULL, '0349838982'),
(8, 'Danijel', 'Subašić', 'Hrvatska', 'Zadar', 'kvarnerska 24', 'suba@ffos.hr', NULL, '453534634'),
(30, 'test ime', 'test prezime', 'test drzava', 'test grad', 'ulica', 'email', NULL, 'mobitel'),
(11, 'Marko', 'Pjaca', 'Država', 'Zagreb', 'Driblinska 41', 'mpjaca@ffos.hr', NULL, '0912340294'),
(31, 'sdfdsf', 'sdfsd', 'fsdfsd', 'fsdfs', '', '', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `pass`) VALUES
(0000000001, 'stjepan@inchoo.net', 'e99a18c428cb38d5f260853678922e03'),
(0000000002, 'mislav', '098f6bcd4621d373cade4e832627b4f6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
