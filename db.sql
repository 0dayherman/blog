-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE IF NOT EXIST `dbtest` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dbtest`;

CREATE TABLE IF NOT EXIST `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(50) NOT NULL,
  `email_admin` varchar(100) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email_admin`, `username`, `password`) VALUES
(1,	'Dinar Hamid',	'dinar1337@outlook.com',	'dinar1337',	'dinar1337');

CREATE TABLE IF NOT EXIST `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(25) NOT NULL,
  `isi` longtext NOT NULL,
  `tanggal` date NOT NULL,
  `penerbit` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `news` (`id`, `title`, `isi`, `tanggal`, `penerbit`) VALUES
(1,	'Hello Word',	'Hello Word',	'2019-09-17',	'admin');

INSERT INTO `news` (`id`, `title`, `isi`, `tanggal`, `penerbit`) VALUES
(2,	'Hello Word 2',	'Hello Word',	'2019-09-17',	'admin');

INSERT INTO `news` (`id`, `title`, `isi`, `tanggal`, `penerbit`) VALUES
(3,	'Hello Word 3',	'Hello Word',	'2019-09-17',	'admin');
-- 2019-09-12 08:50:29
