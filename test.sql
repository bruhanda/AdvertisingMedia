-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 31, 2013 at 02:41 PM
-- Server version: 5.3.4
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `weight` int(10) unsigned DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'login', 'Login privileges, granted after account confirmation'),
(2, 'admin', 'Administrative user, has access to everything.');

-- --------------------------------------------------------

--
-- Table structure for table `roles_users`
--

CREATE TABLE IF NOT EXISTS `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles_users`
--

INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES
(48, 1),
(48, 2),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(254) NOT NULL,
  `first_name` varchar(254) NOT NULL,
  `middle_name` varchar(254) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `registration_date` datetime NOT NULL,
  `link` varchar(255) NOT NULL,
  `confirmed` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `first_name`, `middle_name`, `surname`, `username`, `password`, `logins`, `last_login`, `phone`, `registration_date`, `link`, `confirmed`) VALUES
(48, 'bruhanda@gmail.com', 'ЫФВАВА', '', '', '', 'f32594cfaae9da6671722fd3fb626b4fe668f1f1647aee8ca1be7039cc05c172', 12, 1382436917, 0, '2013-10-22 12:53:36', '6318d7246e300999914ededb78ba181b786a6088', 1),
(63, 'bruhandadfa@gmail.com', '', '', '', '', 'f32594cfaae9da6671722fd3fb626b4fe668f1f1647aee8ca1be7039cc05c172', 0, NULL, NULL, '2013-12-31 14:38:21', '0a1125800e41ba25cb87c5a2c3ae66c8433b4cea', 0),
(62, 'asdfsdfsadf@gmail.com', '', '', '', '', '66b1c0e53682bafd48157ae8b08d4745543aa02beb12cb05efcca62e4908596a', 0, NULL, NULL, '2013-12-31 14:34:24', '73f1a596a072f4e6ba3521ea7b93e22418811807', 0),
(61, 'bruffhanda@gmail.com', '', '', '', '', 'f32594cfaae9da6671722fd3fb626b4fe668f1f1647aee8ca1be7039cc05c172', 0, NULL, NULL, '2013-12-31 14:32:57', '6ca2741ecad3061fbd214ff9cdd352ddac0b31c4', 0),
(60, 'bruhandaf@gmail.com', '', '', '', '', '9fdff16d562edb4b21c51da46073e9ed971fe1fbcca20e686b5da7fac779a2af', 0, NULL, NULL, '2013-12-31 14:30:55', '4ef99024f58cf98c90aa074c0163df8f64a12a28', 0),
(59, 'bruhandfaa@gmail.com', '', '', '', '', 'f32594cfaae9da6671722fd3fb626b4fe668f1f1647aee8ca1be7039cc05c172', 0, NULL, NULL, '2013-12-31 14:30:28', '93281582b121763c6deb535823c19036253a6021', 0),
(58, 'bruhandaa@gmail.com', '', '', '', '', 'f32594cfaae9da6671722fd3fb626b4fe668f1f1647aee8ca1be7039cc05c172', 0, NULL, NULL, '2013-12-31 14:27:39', 'd05a98074a28acc90589b983a0e956c50701c648', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_tokens`
--

CREATE TABLE IF NOT EXISTS `user_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `ip_address` varchar(24) NOT NULL,
  `token` varchar(40) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`),
  KEY `expires` (`expires`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
