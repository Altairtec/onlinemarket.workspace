-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10-Abr-2015 às 20:00
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onlinemarket`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `listings`
--

CREATE TABLE IF NOT EXISTS `listings` (
  `listings_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` char(16) NOT NULL,
  `title` varchar(128) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_expires` timestamp NULL DEFAULT NULL,
  `description` varchar(4096) DEFAULT NULL,
  `photo_filename` varchar(1024) DEFAULT NULL,
  `contact_name` varchar(255) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `contact_phone` varchar(32) DEFAULT NULL,
  `city` varchar(128) DEFAULT NULL,
  `country` char(2) NOT NULL,
  `price` decimal(12,2) NOT NULL,
  `delete_code` char(16) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`listings_id`),
  KEY `title` (`title`),
  KEY `category` (`category`),
  KEY `delete_code` (`delete_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `listings`
--

INSERT INTO `listings` (`listings_id`, `category`, `title`, `date_created`, `date_expires`, `description`, `photo_filename`, `contact_name`, `contact_email`, `contact_phone`, `city`, `country`, `price`, `delete_code`) VALUES
(1, 'barter', 'Teste', '2015-04-09 19:00:41', '2015-04-15 00:00:41', 'Helly', 'http://www.chaos-mag.com/wp-content/uploads/2015/03/zoolander_400.jpg', 'Olnine', 'jdoliveirasa@gmail.com', '', 'São Paulo', '', '123.00', '458'),
(2, 'free', 'Owen', '2015-04-10 17:57:21', '2015-04-20 22:57:21', 'Zoolander Owen Wilson', 'http://reelmovienation.com/wp-content/uploads/2011/11/Zoolander3-300x169.jpg', 'Olnine', 'jdoliveirasa@gmail.com', '+5555-888-999-7778', 'São Paulo', '12', '123.00', '458'),
(3, 'general', 'Bugalu Strigh', '2015-04-10 17:51:42', '2015-04-15 22:51:42', 'Zoolander Vilain', 'http://www.cinema.com.my/images/news/2014/7n_willferrellconfirms01.jpg', 'Zoolander', 'jdoliveirasa@gmail.com', '+5555-888-999-7778', 'São Paulo', '', '12666.00', '898');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
