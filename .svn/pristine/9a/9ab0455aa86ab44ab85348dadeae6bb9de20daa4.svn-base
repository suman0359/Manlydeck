-- phpMyAdmin SQL Dump
-- version 3.4.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 26, 2013 at 04:52 PM
-- Server version: 5.5.28
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wvsoftek_manly_deck`
--

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE IF NOT EXISTS `captcha` (
  `captcha_id` bigint(13) unsigned NOT NULL AUTO_INCREMENT,
  `captcha_time` int(10) unsigned NOT NULL,
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `word` varchar(20) NOT NULL,
  PRIMARY KEY (`captcha_id`),
  KEY `word` (`word`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=423 ;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
(421, 1369311842, '117.202.64.143', 'JxsKnVmN'),
(422, 1369311881, '117.202.64.143', 'zkbz6zcN');

-- --------------------------------------------------------

--
-- Table structure for table `checkout_customer_details`
--

CREATE TABLE IF NOT EXISTS `checkout_customer_details` (
  `booking_date` date NOT NULL,
  `customer_name` varchar(70) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_phone` varchar(70) NOT NULL,
  `cust_city` varchar(50) NOT NULL,
  `customer_country` varchar(50) NOT NULL,
  `booking_amount` varchar(50) NOT NULL,
  `record_entry_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout_customer_details`
--

INSERT INTO `checkout_customer_details` (`booking_date`, `customer_name`, `customer_email`, `customer_phone`, `cust_city`, `customer_country`, `booking_amount`, `record_entry_date`) VALUES
('2013-03-01', 'manju', 'manju@yahoo.com', '9898989898', 'delhi', 'india', '5000', '2013-02-25 10:46:11'),
('2013-03-01', 'manju', 'manju@yahoo.com', '9898989898', 'delhi', 'india', '5000', '2013-02-25 10:46:14'),
('2013-03-01', 'manju', 'manju@yahoo.com', '9898989898', 'delhi', 'india', '5000', '2013-02-25 10:50:25'),
('2013-03-01', 'manju', 'manju@yahoo.com', '9898989898', 'delhi', 'india', '5000', '2013-02-25 10:55:28'),
('2013-03-01', 'manju', 'manju@yahoo.com', '9898989898', 'delhi', 'india', '5000', '2013-02-25 10:58:02'),
('2013-03-01', 'manju', 'manju@yahoo.com', '9898989898', 'delhi', 'india', '5000', '2013-02-25 11:00:12'),
('2013-03-01', 'manju', 'manju@yahoo.com', '9898989898', 'delhi', 'india', '5000', '2013-02-25 11:00:19'),
('2013-03-03', 'manju', 'manju@yahoo.com', '9898989898', 'bangalore', 'india', '5000', '2013-02-25 11:00:27'),
('0000-00-00', '0', '0', '0', '0', '0', '0', '2013-02-25 11:00:31'),
('2013-12-16', 'krish', 'sam@yahoo.com', '9898989898', 'delhi', 'india', '5000', '2013-02-25 13:57:14'),
('2013-04-02', 'manju', 'manju@yahoo.com', '9898989898', 'delhi', 'india', '5000', '2013-02-26 08:10:10'),
('2013-04-02', 'manju', 'manju@yahoo.com', '9898989898', 'delhi', 'india', '5000', '2013-02-26 08:10:16'),
('2013-04-02', 'manju', 'manju@yahoo.com', '9898989898', 'delhi', 'india', '5000', '2013-02-26 08:10:19'),
('2013-04-02', 'manju', 'manju@yahoo.com', '9898989898', 'delhi', 'india', '5000', '2013-02-26 08:11:58'),
('2013-03-13', 'krishna', 'krish@gmail.com', '9739128834', 'bangalore', 'india', '6000', '2013-02-26 08:16:44'),
('2013-03-13', 'krishna', 'krish@gmail.com', '9739128834', 'bangalore', 'india', '6000', '2013-02-26 08:18:37'),
('2013-03-01', 'samir', 'sam@yahoo.com', '9898989898', 'delhi', 'india', '5000', '2013-02-26 08:18:46'),
('2013-03-01', 'samir', 'sam@yahoo.com', '9898989898', 'delhi', 'india', '5000', '2013-02-26 08:19:14'),
('2013-03-01', 'samir', 'sam@yahoo.com', '9898989898', 'delhi', 'india', '5000', '2013-02-26 08:19:53'),
('2013-03-31', 'samir', 'sam@yahoo.com', '9898989898', 'bangalore', '', '7000', '2013-02-26 08:21:25'),
('2013-03-31', 'samir', 'sam@yahoo.com', '9898989898', 'bangalore', '', '7000', '2013-02-26 08:21:47'),
('2013-03-31', 'samir', 'sam@yahoo.com', '9898989898', 'bangalore', '', '7000', '2013-02-26 08:21:51'),
('2013-03-05', 'admin', 'manju@gmail.com', '9739128834', 'bangalore', 'india', '6000', '2013-02-26 08:24:00'),
('2013-03-05', 'admin', 'manju@gmail.com', '9739128834', 'bangalore', 'india', '6000', '2013-02-26 08:24:04'),
('2013-03-05', 'admin', 'manju@gmail.com', '9739128834', 'bangalore', 'india', '6000', '2013-02-26 08:24:29'),
('2013-03-05', 'admin', 'manju@gmail.com', '9739128834', 'bangalore', 'india', '6000', '2013-02-26 08:24:57'),
('2013-03-20', 'krishna', 'manju@gmail.com', '9739128834', 'bangalore', 'india', '2500', '2013-02-26 08:27:31'),
('2013-02-12', 'manju', 'manju@gmail.com', '9739128834', 'bangalore', 'india', '6000', '2013-02-26 09:18:51'),
('2013-02-12', 'manju', 'manju@gmail.com', '9739128834', 'bangalore', 'india', '6000', '2013-02-26 09:18:55'),
('2013-02-28', 'abc', 'abc@gmail.in', '7676543423', 'mysore', '', '6500', '2013-02-26 15:14:35'),
('2013-03-17', 'manju', 'manju@gmail.com', '9739128834', 'bangalore', 'india', '7000', '2013-03-08 15:21:24'),
('2013-04-03', 'admin', 'manju@gmail.com', '9739128834', 'bangalore', 'india', '6000', '2013-03-08 15:22:02'),
('2013-03-20', 'manju', 'manju@gmail.com', '9739128834', 'bangalore', 'india', '3000', '2013-03-08 15:22:15'),
('2013-03-25', 'manju', 'manju@gmail.com', '9739128834', 'bangalore', 'india', '8000', '2013-03-08 15:22:47'),
('2013-03-16', 'manju1', 'manju@gmail.com', '9739128834', 'mysore', 'india', '250', '2013-03-15 10:57:06'),
('2013-04-24', 'pal', 'pal@adodis.com', '9739174499', 'bangalore', 'india', '0', '2013-03-15 10:57:29'),
('2013-04-06', 'Default', 'shilpa123@wvs.in', '9739128834', 'bangalore', 'india', '0', '2013-03-15 11:10:21'),
('2013-04-06', 'Default', 'shilpa123@wvs.in', '9739128834', 'bangalore', 'india', '0', '2013-03-15 11:10:45'),
('2013-04-06', 'Default', 'shilpa123@wvs.in', '9739128834', 'bangalore', 'india', '0', '2013-03-15 11:11:08'),
('2013-03-28', 'baga', 'baga@gmail.com', '9739127123', 'bangalore', 'Canada', '100', '2013-03-15 11:12:20'),
('2013-03-16', 'manju1', 'manju@gmail.com', '9739128834', 'mysore', 'india', '250', '2013-03-18 10:31:41'),
('2013-03-30', 'manj', 'manju@gmail.com', '9739128834', 'mysore', 'india', '200', '2013-03-27 12:29:29'),
('2013-04-10', 'jessy', 'jes@gmail.in', '9732173311', 'bangalore', 'Afghanistan', '0', '2013-03-27 12:29:42'),
('2013-04-05', 'manju', 'manju@gmail.com', '9739128834', 'mysore', 'india', '200', '2013-03-27 12:32:16'),
('2013-03-28', 'jes', 'jes@gmail.com', '9739174499', 'bangalore', 'Australia', '0', '2013-03-29 05:50:32'),
('2013-03-30', 'sdfsd', 'sdfsdf', '345345', '34534534', 'Australia', '0', '2013-03-29 12:42:31'),
('2013-04-25', 'ram', 'ram@gmail.com', '9734128832', 'melborne', 'Australia', '0', '2013-03-30 06:27:51'),
('2013-03-31', 'manju', 'mann@abc.com', '974392379', 'bangalore', 'Australia', '0', '2013-05-03 00:08:44'),
('2013-03-31', 'manju1', 'manju@gmail.com', '9739128834', 'mysore', 'india', '150', '2013-05-03 00:08:50'),
('0000-00-00', '0', '0', '0', '0', '0', '0', '2013-05-13 10:56:00'),
('0000-00-00', '0', '0', '0', '0', '0', '0', '2013-05-13 10:56:04'),
('2013-04-03', 'manju1', 'manju@gmail.com', '9739128834', 'mysore', 'india', '100', '2013-05-13 10:56:09'),
('2013-04-10', 'guru', 'guru@wvs.in', '8762328646', 'Bangalore', 'Australia', '100', '2013-05-13 10:56:13'),
('2013-04-11', 'guru', 'guru@wvs.in', '8762328646', 'Bangalore', 'Australia', '100', '2013-05-13 10:56:17'),
('2013-04-17', 'ahjah', 'shreebhat@gmail.com', '919964954123', 'Sagar', 'India', '100', '2013-05-13 10:56:21'),
('2013-04-17', 'manju1', 'manju@gmail.com', '9739128834', 'mysore', 'india', '100', '2013-05-13 10:56:25'),
('2013-04-18', 'guru', 'guru@wvs.in', '8762328646', 'Bangalore', 'Australia', '100', '2013-05-13 10:56:28'),
('2013-04-18', 'guru', 'guru@wvs.in', '8762328646', 'Bangalore', 'Australia', '100', '2013-05-13 10:56:31'),
('2013-04-18', 'guru', 'guru@wvs.in', '8762328646', 'Bangalore', 'Australia', '100', '2013-05-13 10:56:34'),
('2013-04-18', 'krishna', 'krishna@gmail.com', '9739212998', 'bangalore', 'Anguilla', '0', '2013-05-13 10:56:39'),
('2013-04-23', 'manjunath', 'manjunath@wvs.in', '9823127799', 'melbourne', 'Australia', '100', '2013-05-13 10:56:42'),
('2013-04-24', 'guru', 'guru@wvs.in', '8762328646', 'Bangalore', 'Australia', '100', '2013-05-13 10:56:47'),
('2013-04-25', 'guru', 'guru@wvs.in', '8762328646', 'Bangalore', 'Australia', '100', '2013-05-13 10:56:51'),
('2013-04-25', 'krishna', 'krishna@gmail.com', '9739212998', 'bangalore', 'Anguilla', '100', '2013-05-13 10:56:55'),
('2013-04-27', 'ram', 'ram@gmail.com', '9739123387', 'bangalore', 'Australia', '0', '2013-05-13 10:56:59'),
('2013-04-27', 'manju1', 'manju@gmail.com', '9739128834', 'mysore', 'india', '250', '2013-05-13 10:57:02'),
('2013-04-28', 'manju1', 'manju@gmail.com', '9739128834', 'mysore', 'india', '150', '2013-05-13 10:57:07'),
('2013-05-02', 'Shreedhar Bhat', 'shreebhat@gmail.com', '917760807087', 'Bangalore', 'Australia', '0', '2013-05-13 10:57:11'),
('2013-05-16', 'Shreedhar Bhat', 'shreebhat@gmail.com', '917760807087', 'Bangalore', 'Australia', '0', '2013-05-13 10:57:15'),
('2013-05-17', 'Manju', 'manju@gmail.com', '9739128834', 'Bangalore', 'india', '200', '2013-05-13 10:57:19'),
('2013-05-31', 'manju', 'manju@yahoo.com', '9739172232', 'bangalore', 'Australia', '0', '2013-05-13 10:58:13'),
('2013-05-22', 'Shreedhar Bhat', 'shreebhat@gmail.com', '917760807087', 'Bangalore', 'Australia', '0', '2013-05-13 10:58:27'),
('2013-05-23', 'Manju', 'manju@gmail.com', '9739128834', 'Bangalore', 'india', '100', '2013-05-13 10:58:31'),
('2013-05-23', 'Manju', 'manju@gmail.com', '9739128834', 'Bangalore', 'india', '100', '2013-05-13 10:58:35'),
('2013-05-25', 'Ajd', 'ahjsh@gmail.com', '9989787', 'sjdjaks', 'Australia', '0', '2013-05-13 10:58:39'),
('2013-05-29', 'Shreedhar Bhat', 'shreebhat@gmail.com', '917760807087', 'Bangalore', 'Australia', '0', '2013-05-13 10:58:44'),
('2013-05-25', 'manju', 'manju@gmail.com', '9739174499', 'banga', 'Australia', '0', '2013-05-13 11:04:19'),
('2013-05-29', 'fdgdsg', 'manju@gmail.com', '9739173322', 'bangalore', 'Australia', '0', '2013-05-13 19:55:55'),
('0000-00-00', '0', '0', '0', '0', '0', '0', '2013-05-15 20:02:34'),
('0000-00-00', '0', '0', '0', '0', '0', '0', '2013-05-15 20:02:41'),
('2013-06-21', 'Manju', 'manju@gmail.com', '9739128834', 'Bangalore', 'india', '200', '2013-05-15 20:13:36'),
('2013-06-16', '', 'manju@gmail.com', '9739128875', 'Bangalore', 'india', '150', '2013-05-23 10:16:32'),
('2013-05-17', 'Manju', 'manju@gmail.com', '9739128895', 'Bangalore', 'india', '200', '2013-05-23 10:16:40'),
('2013-05-17', 'Manju', 'manju@gmail.com', '9739128834', 'Bangalore', 'india', '200', '2013-05-23 10:16:45'),
('2013-05-18', 'manju', 'manjunath@wvs.in', '9739174499', 'bangalore', 'Australia', '250', '2013-05-23 10:16:50'),
('2013-05-22', 'Manju', 'manju@gmail.com', '9739128875', 'Bangalore', 'asdad', '100', '2013-05-23 10:16:56'),
('2013-05-29', 'manju', 'manjunath@wvs.in', '9739174499', 'bangalore', 'Australia', '100', '2013-05-23 10:17:08'),
('2013-05-30', 'Manju', 'manju@gmail.com', '123123123', 'adasdasd', 'Australia', '0', '2013-05-23 10:17:16');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('21806eddc17055c50580ec2689080f62', '150.70.172.202', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)', 1369312714, ''),
('21d92c53ed80bb3193a065a440a0aab9', '117.216.128.97', 'Mozilla/5.0 (Windows NT 6.1; rv:22.0) Gecko/20100101 Firefox/22.0', 1374212998, ''),
('24084de97ec28523f4c3dd3b49eca5d8', '150.70.97.118', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0)', 1369311911, ''),
('3f59f7223c44480325d26c2a1c7c83a5', '150.70.64.216', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)', 1369311985, ''),
('42219d77fbe88b32edf8c81cd2115f8f', '150.70.64.210', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)', 1369312524, ''),
('4a536f911fe1ed36ce5ca54b5ccb8b81', '150.70.97.122', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0)', 1369312397, ''),
('6fdcefafd70662e3c2c41f30fdb33c0d', '150.70.97.114', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0)', 1369312156, ''),
('7e15bc0a1be296678c7121109bff679c', '150.70.97.120', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0)', 1369312335, ''),
('80940b1fbc97c0b698657dddd6a3e3bc', '150.70.97.113', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0)', 1369312160, ''),
('9775fd31e44c2ac689121c0bafe2bb84', '150.70.172.207', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)', 1369312547, ''),
('af6aa787213e4bc58002cff6b631319b', '117.216.129.86', 'Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20100101 Firefox/21.0', 1369369511, ''),
('b3af3a774ec5304e13caebff8ba09814', '117.202.64.143', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', 1369312158, 'a:4:{s:9:"user_data";s:0:"";s:2:"id";s:1:"1";s:4:"name";s:5:"Manju";s:9:"user_type";s:6:"normal";}'),
('bbc1b96fecf87473f021ae6c42f582bd', '150.70.75.35', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)', 1369312499, ''),
('c598d7f03ed4c2be55731503e4a7f010', '150.70.97.127', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0)', 1369312177, ''),
('c5db840e1a195ec01e15ce147a1990b6', '150.70.64.216', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)', 1369312513, ''),
('c6f53a2dc59d31f50dc1882fad431d53', '150.70.64.210', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)', 1369312270, ''),
('c98cb10fc87aebf2bdb2e96f2b88ca0b', '150.70.172.207', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)', 1369312453, ''),
('da4cec01ed587635d5c86c2fe154d087', '150.70.97.126', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0)', 1369312430, ''),
('e07c88298b02105e8e765990ead90e54', '150.70.64.210', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)', 1369312223, ''),
('e775cb33626f7dfa7eaf0f8dce394427', '150.70.64.210', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)', 1369312301, '');

-- --------------------------------------------------------

--
-- Table structure for table `online_platter_order_categories`
--

CREATE TABLE IF NOT EXISTS `online_platter_order_categories` (
  `cat_id` int(128) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(100) NOT NULL,
  `cat_description` varchar(250) NOT NULL,
  `platter_price` varchar(100) NOT NULL,
  `product_image_url` varchar(200) NOT NULL,
  `cat_entered_date` datetime NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `online_platter_order_categories`
--

INSERT INTO `online_platter_order_categories` (`cat_id`, `cat_name`, `cat_description`, `platter_price`, `product_image_url`, `cat_entered_date`) VALUES
(23, 'hot', 'this is for hot items', '100', 'image3.jpg', '2013-04-06 09:38:23'),
(24, 'cold', 'this is for cold items', '80', 'cold.jpg', '2013-04-06 09:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `online_platter_order_products`
--

CREATE TABLE IF NOT EXISTS `online_platter_order_products` (
  `product_id` int(128) NOT NULL AUTO_INCREMENT,
  `cat_id` int(128) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_category` varchar(150) NOT NULL,
  `product_image_url` varchar(150) NOT NULL,
  `product_price` varchar(150) NOT NULL,
  `product_description` varchar(250) NOT NULL,
  `product_tax` varchar(50) NOT NULL,
  `product_recorded_date` datetime NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `online_platter_order_products`
--

INSERT INTO `online_platter_order_products` (`product_id`, `cat_id`, `product_name`, `product_category`, `product_image_url`, `product_price`, `product_description`, `product_tax`, `product_recorded_date`) VALUES
(9, 23, 'Tempura Prawn Skewers', 'hot', 'Tempura-Prawn-Skewers.jpg', '100', 'Tempura-Prawn-Skewers', '5', '2013-03-19 14:36:51'),
(10, 23, 'Satay Chicken Skewers', 'hot', 'Satay-Chicken-Skewers.jpg', '100', 'Satay-Chicken-Skewers', '5', '2013-03-19 14:03:14'),
(12, 23, 'Kilpatrick Oysters', 'hot', 'Kilpatrick-Oysters.jpg', '100', 'Kilpatrick-Oysters', '5', '2013-03-19 14:03:27'),
(13, 23, 'Selection of Miniature Pies', 'hot', 'Selection-of-Miniature-Pies.jpg', '100', 'Selection-of-Miniature-Pies', '5', '2013-03-19 14:37:01'),
(15, 23, 'Mini Sausage Rolls', 'hot', 'Mini-Sausage-Rolls.jpg', '100', 'Mini-Sausage-Rolls', '5', '2013-03-19 14:03:54'),
(16, 23, 'Spinach & Cheese Filo Triangles (V)', 'hot', 'Spinach-&-Cheese-Filo-Triangles.jpg', '100', 'Spinach-&-Cheese-Filo-Triangles', '5', '2013-04-12 11:42:00'),
(17, 23, 'Selection of Miniature Quiches (V)', 'hot', 'Selection-of-Miniature-Quiches.jpg', '100', 'Selection-of-Miniature-Quiches', '5', '2013-04-12 11:42:00'),
(18, 23, 'Chicken Curry Puffs', 'hot', 'Chicken-Curry-Puffs.jpg', '100', 'Chicken-Curry-Puffs', '5', '2013-04-12 11:42:00'),
(19, 23, 'Fish Goujons', 'hot', 'Fish-Goujons.jpg', '100', 'Fish-Goujons', '5', '2013-03-19 14:04:12'),
(20, 23, 'Mini Spring Rolls (V)', 'hot', 'Mini-Spring-Rolls.jpg', '100', 'Mini-Spring-Rolls', '5', '2013-03-19 14:04:24'),
(21, 23, 'Flame Grilled Meat Balls', 'hot', 'Flame-Grilled-Meat-Balls.jpg', '100', 'Flame-Grilled-Meat-Balls', '5', '2013-04-12 11:42:00'),
(22, 23, 'Crumbed Calamari', 'hot', 'Crumbed-Calamari.jpg', '100', 'Crumbed-Calamari', '5', '2013-04-12 11:42:00'),
(23, 23, 'Curry Samosas (V)', 'hot', 'Curry-Samosas.jpg', '100', 'Curry-Samosas', '5', '2013-04-12 11:42:00'),
(26, 24, 'Assortment of Finger Sandwiches', 'cold', 'Assortment-of-Finger-Sandwiches.jpg', '12', 'Assortment-of-Finger-Sandwiches', '12', '2013-03-19 14:04:53'),
(27, 24, 'Three Dips with Grilled Turkish Bread', 'cold', 'Three-Dips-with-Grilled-Turkish-Bread.jpg', '12', 'Three-Dips-with-Grilled-Turkish-Bread', '12', '2013-03-22 12:01:16'),
(28, 24, 'Two Cheeses & Water Crackers', 'cold', 'Two-Cheeses-&-Water-Crackers.jpg', '12', 'Two-Cheeses-&-Water-Crackers', '12', '2013-03-19 14:05:48'),
(29, 24, 'Antipasto Selection', 'cold', 'Antipasto-Selection.jpg', '12', 'Antipasto-Selection', '12', '2013-03-22 06:27:43');

-- --------------------------------------------------------

--
-- Table structure for table `opos_before_making_payment_table`
--

CREATE TABLE IF NOT EXISTS `opos_before_making_payment_table` (
  `id` int(128) NOT NULL AUTO_INCREMENT,
  `user_id` int(128) NOT NULL,
  `invoice_no` varchar(200) NOT NULL,
  `select_date` varchar(150) NOT NULL,
  `platter_combination` varchar(300) NOT NULL,
  `platter_date` varchar(100) NOT NULL,
  `timepicker_6` varchar(150) NOT NULL,
  `payment_type` varchar(120) NOT NULL,
  `cust_name` varchar(150) NOT NULL,
  `cust_phone` varchar(150) NOT NULL,
  `cust_email` varchar(150) NOT NULL,
  `cust_country` varchar(120) NOT NULL,
  `payment_status` int(12) NOT NULL,
  `grand_amount` varchar(200) NOT NULL,
  `recorded_date` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=134 ;

--
-- Dumping data for table `opos_before_making_payment_table`
--

INSERT INTO `opos_before_making_payment_table` (`id`, `user_id`, `invoice_no`, `select_date`, `platter_combination`, `platter_date`, `timepicker_6`, `payment_type`, `cust_name`, `cust_phone`, `cust_email`, `cust_country`, `payment_status`, `grand_amount`, `recorded_date`) VALUES
(125, 1, '592657996', '2013-05-31', '{Kilpatrick Oysters, Satay Chicken Skewers, Selection of Miniature Quiches (V), Selection of Miniature Quiches (V), Selection of Miniature Quiches (V), },{Flame Grilled Meat Balls, Satay Chicken Skewers, Kilpatrick Oysters, Tempura Prawn Skewers, Selection of Miniature Pies, },', '2013-05-31', '5:30,8:30', 'cash_on_order', 'Manju', '9739128834', 'manju@gmail.com', 'india', 1, '200', '2013-05-17 18:09:31'),
(126, 1, '970355947', '2013-06-21', '{Selection of Miniature Quiches (V), Flame Grilled Meat Balls, Mini Spring Rolls (V), Spinach & Cheese Filo Triangles (V), Chicken Curry Puffs, },{Kilpatrick Oysters, Satay Chicken Skewers, Tempura Prawn Skewers, Selection of Miniature Pies, Selection of Miniature Quiches (V), },', '2013-06-21', '12:30,2:30', 'Paypal', 'Manju', '9739128834', 'manju@gmail.com', 'india', 1, '1200', '2013-05-15 20:14:54'),
(127, 1, '209263998', '2013-06-21', '{Tempura Prawn Skewers, Satay Chicken Skewers, Kilpatrick Oysters, Selection of Miniature Pies, Selection of Miniature Quiches (V), },{Selection of Miniature Pies, Satay Chicken Skewers, Flame Grilled Meat Balls, Curry Samosas (V), },{Antipasto Selection, Two Cheeses & Water Crackers, Three Dips wit', '2013-06-21', '11:30,1:00,2:00', 'cash_on_order', 'Manju', '9739128895', 'manju@gmail.com', 'india', 0, '280', '2013-05-16 10:03:05'),
(128, 103, '491357945', '2013-05-25', '{Satay Chicken Skewers, Tempura Prawn Skewers, Kilpatrick Oysters, Selection of Miniature Pies, Mini Sausage Rolls, },{Selection of Miniature Quiches (V), Selection of Miniature Pies, Spinach & Cheese Filo Triangles (V), Chicken Curry Puffs, Selection of Miniature Pies, },', '2013-05-25', '1:30,1:00', 'cash_on_order', 'Manju Vinu', '9739174499', 'manjunath@wvs.in', 'Australia', 0, '200', '2013-05-16 13:36:14'),
(129, 86, '168629818', '2013-05-30', '{Satay Chicken Skewers, Kilpatrick Oysters, Selection of Miniature Pies, Kilpatrick Oysters, Satay Chicken Skewers, },{Two Cheeses & Water Crackers, Two Cheeses & Water Crackers, Assortment of Finger Sandwiches, },', '2013-05-30', '12:30,1:30', 'cash_on_order', 'manju', '974392379', 'mann@abc.com', 'Australia', 1, '1660', '2013-05-17 18:12:12'),
(130, 1, '597121774', '2013-07-13', '{Tempura Prawn Skewers, Satay Chicken Skewers, Kilpatrick Oysters, Selection of Miniature Pies, Mini Sausage Rolls, },{Assortment of Finger Sandwiches, Three Dips with Grilled Turkish Bread, },{Selection of Miniature Quiches (V), Selection of Miniature Pies, Satay Chicken Skewers, Mini Sausage Rolls', '2013-07-13', '4:00,4:00,4:00', 'cash_on_order', 'Manju', '9739128875', 'manju@gmail.com', 'india', 0, '1680', '2013-05-20 11:48:27'),
(131, 1, '776601560', '2013-06-05', '{Selection of Miniature Pies, Kilpatrick Oysters, },', '2013-06-05', '12:00', 'cash_on_order', 'Manju', '9739128875', 'manju@gmail.com', 'india', 0, '300', '2013-05-20 15:14:03'),
(132, 1, '104535477', '2013-06-05', '{Two Cheeses & Water Crackers, Antipasto Selection, },', '2013-06-05', '11:30', 'cash_on_order', 'Manju', '9739128875', 'manju@gmail.com', 'india', 0, '80', '2013-05-23 10:59:02'),
(133, 1, '591596815', '2013-06-05', '{Antipasto Selection, Two Cheeses & Water Crackers, },', '2013-06-05', '11:30', 'Paypal', 'Manju', '9739128875', 'manju@gmail.com', 'india', 1, '80', '2013-05-23 11:18:58');

-- --------------------------------------------------------

--
-- Table structure for table `payment_orders`
--

CREATE TABLE IF NOT EXISTS `payment_orders` (
  `book_id` int(25) NOT NULL AUTO_INCREMENT,
  `user_id` int(128) NOT NULL,
  `invoice_no` varchar(100) NOT NULL,
  `booking_date` date NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `cust_email` varchar(50) NOT NULL,
  `cust_phone` varchar(78) NOT NULL,
  `cust_city` varchar(50) NOT NULL,
  `cust_country` varchar(50) NOT NULL,
  `booking_amount` varchar(100) NOT NULL,
  `booking_slot` varchar(200) NOT NULL,
  `book_status` int(10) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `event_type` varchar(100) NOT NULL,
  `no_of_guests` varchar(100) NOT NULL,
  `remark_description` text NOT NULL,
  `record_entry_date` datetime NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=341 ;

--
-- Dumping data for table `payment_orders`
--

INSERT INTO `payment_orders` (`book_id`, `user_id`, `invoice_no`, `booking_date`, `cust_name`, `cust_email`, `cust_phone`, `cust_city`, `cust_country`, `booking_amount`, `booking_slot`, `book_status`, `event_name`, `event_type`, `no_of_guests`, `remark_description`, `record_entry_date`) VALUES
(317, 1, '266585035', '2013-06-05', 'manju', 'manju@gmail.com', '9882382', 'bangalore', 'Australia', '0', 'lunch', 1, 'werwe', 'rwerwer', '78', '', '2013-05-20 15:26:11'),
(318, 1, '662529433', '2013-05-31', 'manju', 'manju@gmail.com', '9739128832', 'bangalore', 'Australia', '0', 'lunch', 1, 'marriage', 'marriage', '600', '', '2013-05-20 15:26:11'),
(321, 1, '638132741', '2013-05-31', 'Manju', 'manju@gmail.com', '9739128834', 'Bangalore', 'india', '200', 'dinner', 1, 'terwtewrt', 'erwtewtewt', '78', '', '2013-05-20 15:26:11'),
(322, 1, '324470717', '2013-06-21', 'Manju', 'manju@gmail.com', '9739128834', 'Bangalore', 'india', '200', 'lunch', 1, 'dsfsdf', 'sdfsdfsdf', '100', '', '2013-05-20 15:26:11'),
(325, 88, '952096775', '2013-05-24', 'Shreedhar Bhat', 'shreebhat@gmail.com', '917760807087', 'Bangalore', 'Australia', '0', 'lunch', 1, 'Bob', 'asdasd', '34', '', '2013-05-13 19:55:44'),
(331, 97, '359317726', '2013-05-23', 'Sumanth Bhat', 'sumanth@gmail.com', '9986019975', 'Udupi', 'Australia', '0', 'lunch', 1, 'Sumanth''s B''Day', 'Birthday', '60', '', '2013-05-16 10:13:30'),
(332, 103, '333049227', '2013-05-25', 'Manju Vinu', 'manjunath@wvs.in', '9739174499', 'bangalore', 'Australia', '250', 'lunch', 1, 'Naming Ceremony', 'Naming Ceremony', '50', '', '2013-05-16 13:34:44'),
(333, 104, '296172686', '2013-05-23', 'Srinath N', 'info@wvsoftek.com', '919964954123', 'Sagar', 'Australia', '100', 'dinner', 1, 'Bob', 'asdasd', '80', '', '2013-05-16 15:02:22'),
(334, 86, '641414569', '2013-05-30', 'manju', 'mann@abc.com', '974392379', 'bangalore', 'Australia', '100', 'lunch', 1, 'Marriage', 'Marriage', '100', '', '2013-05-17 17:55:46'),
(335, 109, '757168935', '2013-06-21', 'Manjunathan', 'manjunath@wvs.in', '9739237721', 'bangalore', 'Australia', '200', 'dinner', 1, 'ewrewr', 'rwerwer', '56', '', '2013-05-18 12:50:21'),
(336, 1, '829032031', '2013-07-13', 'Manju', 'manju@gmail.com', '9739128875', 'Bangalore', 'india', '250', 'dinner', 1, 'shashikanth''s birthday', 'Birthday', '50', '', '2013-05-20 15:26:11'),
(340, 65, '507862850', '2013-05-25', 'manjunath', 'manjunathan383@gmail.com', '9732128832', 'bangalore', 'india', '250', 'dinner', 1, 'Birthday', 'Birthday', '70', '', '2013-05-23 10:32:35');

-- --------------------------------------------------------

--
-- Table structure for table `pduser_store_combinations`
--

CREATE TABLE IF NOT EXISTS `pduser_store_combinations` (
  `combination_id` int(128) NOT NULL AUTO_INCREMENT,
  `product_id` varchar(100) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `product_image` varchar(400) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  PRIMARY KEY (`combination_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pduser_store_combinations`
--

INSERT INTO `pduser_store_combinations` (`combination_id`, `product_id`, `product_name`, `product_image`, `user_id`) VALUES
(3, '18', 'food12', 'images21.jpg', '76'),
(4, '17', 'food11', 'image88.jpg', '76');

-- --------------------------------------------------------

--
-- Table structure for table `pd_platter_delivery_products`
--

CREATE TABLE IF NOT EXISTS `pd_platter_delivery_products` (
  `product_id` int(128) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `product_category` varchar(150) NOT NULL,
  `product_image_url` varchar(150) NOT NULL,
  `product_price` varchar(150) NOT NULL,
  `product_description` varchar(250) NOT NULL,
  `product_tax` varchar(50) NOT NULL,
  `product_recorded_date` datetime NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `pd_platter_delivery_products`
--

INSERT INTO `pd_platter_delivery_products` (`product_id`, `product_name`, `product_category`, `product_image_url`, `product_price`, `product_description`, `product_tax`, `product_recorded_date`) VALUES
(15, 'food9', 'hot', 'image.jpg', '100', 'fdsfdsfsdfsdfsdfsdfsd', '5', '2013-03-08 12:50:03'),
(16, 'food10', 'hot', 'image9.jpg', '100', 'fdgdfgdfgdfgfdgdfgdfg', '5', '2013-03-08 12:50:23'),
(17, 'food11', 'hot', 'image88.jpg', '100', 'dfsdfdsfdsfsdfsdfsdfsdfsdf', '5', '2013-03-08 12:50:45'),
(18, 'food12', 'hot', 'images21.jpg', '100', 'erwewrwerwerwerwerewrwer', '5', '2013-03-08 12:51:07'),
(19, 'food13', 'cold', 'images71.jpg', '100', 'hjghjghjghjghjghjghjgh', '5', '2013-03-08 12:51:38'),
(20, 'food14', 'cold', 'images81.jpg', '100', 'tretretretre', '5', '2013-03-08 12:52:01'),
(21, 'food15', 'cold', 'index2.jpg', '100', 'tyrtyrtyrtyrtyrtyrtyrty', '5', '2013-03-08 12:52:20'),
(22, 'food16', 'cold', 'index11.jpg', '100', 'uiyiyuiyuiyuiyuiyuiyuiyui', '5', '2013-03-08 12:52:39');

-- --------------------------------------------------------

--
-- Table structure for table `pd_shipping_mgmt_table`
--

CREATE TABLE IF NOT EXISTS `pd_shipping_mgmt_table` (
  `ship_id` int(128) NOT NULL AUTO_INCREMENT,
  `location_name` varchar(200) NOT NULL,
  `shipping_amount` varchar(100) NOT NULL,
  `record_entry_date` datetime NOT NULL,
  PRIMARY KEY (`ship_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pd_shipping_mgmt_table`
--

INSERT INTO `pd_shipping_mgmt_table` (`ship_id`, `location_name`, `shipping_amount`, `record_entry_date`) VALUES
(1, 'bangalore', '150', '2013-03-02 11:55:38'),
(2, 'chennai', '500', '2013-03-02 12:08:28'),
(4, 'shillong', '1000', '2013-03-02 12:08:18'),
(5, 'goa', '500', '2013-03-05 07:48:39'),
(6, 'Kolkatta', '300', '2013-05-03 00:19:56');

-- --------------------------------------------------------

--
-- Table structure for table `platter_deli_cater_categories`
--

CREATE TABLE IF NOT EXISTS `platter_deli_cater_categories` (
  `cat_id` int(128) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(100) NOT NULL,
  `cat_description` varchar(250) NOT NULL,
  `cat_entered_date` datetime NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `platter_deli_cater_categories`
--

INSERT INTO `platter_deli_cater_categories` (`cat_id`, `cat_name`, `cat_description`, `cat_entered_date`) VALUES
(5, 'hot', 'this is for hot items', '2013-03-08 12:49:14'),
(6, 'cold', 'this is for cold items', '2013-03-08 12:49:31');

-- --------------------------------------------------------

--
-- Table structure for table `podc_before_making_payment_table`
--

CREATE TABLE IF NOT EXISTS `podc_before_making_payment_table` (
  `id` int(128) NOT NULL AUTO_INCREMENT,
  `invoice_no` varchar(200) NOT NULL,
  `buy_date` varchar(200) NOT NULL,
  `buy_time` varchar(200) NOT NULL,
  `shipping_type` varchar(200) NOT NULL,
  `shipping_city` varchar(200) NOT NULL,
  `cust_name` varchar(200) NOT NULL,
  `cust_phone` varchar(200) NOT NULL,
  `cust_email` varchar(200) NOT NULL,
  `cust_address` text NOT NULL,
  `cust_country` varchar(200) NOT NULL,
  `payment_typr` varchar(200) NOT NULL,
  `shipping_amount` varchar(200) NOT NULL,
  `total_amount` varchar(200) NOT NULL,
  `grand_total` varchar(200) NOT NULL,
  `record_entry_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `podc_before_making_payment_table`
--

INSERT INTO `podc_before_making_payment_table` (`id`, `invoice_no`, `buy_date`, `buy_time`, `shipping_type`, `shipping_city`, `cust_name`, `cust_phone`, `cust_email`, `cust_address`, `cust_country`, `payment_typr`, `shipping_amount`, `total_amount`, `grand_total`, `record_entry_date`) VALUES
(33, '938888549', 'March, 28, 2013', '08:05 AM', 'Delivery', 'Select City', 'manju', '9739128834', 'manju@gmail.com', 'Bangalore\r\nKarnataka', 'india', '0', '', '880', '880', '2013-03-06 13:27:21'),
(34, '864373779', 'March, 19, 2013', '08:05 AM', 'Delivery', 'goa:500:880', 'manju', '9739128834', 'manju@gmail.com', 'Bangalore\r\nKarnataka', 'india', '0', '500', '880', '1380', '2013-03-07 07:02:32'),
(35, '632012939', 'March, 19, 2013', '08:05 AM', 'Delivery', 'bangalore:150:880', 'manju', '9739128834', 'manju@gmail.com', 'Bangalore\r\nKarnataka', 'india', 'cash_on_order', '150', '880', '1030', '2013-03-07 07:06:04'),
(36, '117083740', 'March, 19, 2013', '08:05 AM', 'Delivery', 'bangalore:150:880', 'manju', '9739128834', 'manju@gmail.com', 'Bangalore\r\nKarnataka', 'india', 'cash_on_order', '150', '880', '1030', '2013-03-07 07:06:40'),
(37, '759619140', 'March, 19, 2013', '08:05 AM', 'Delivery', 'bangalore:150:880', 'manju', '9739128834', 'manju@gmail.com', 'Bangalore\r\nKarnataka', 'india', 'Paypal', '150', '880', '1030', '2013-03-07 07:06:58'),
(38, '973797607', 'March, 19, 2013', '08:05 AM', 'Delivery', 'bangalore:150:880', 'manju', '9739128834', 'manju@gmail.com', 'Bangalore\r\nKarnataka', 'india', 'Paypal', '150', '880', '1030', '2013-03-07 07:07:04'),
(39, '115957641', 'March, 19, 2013', '08:05 AM', 'Delivery', 'bangalore:150:880', 'manju', '9739128834', 'manju@gmail.com', 'Bangalore\r\nKarnataka', 'india', 'Paypal', '150', '880', '1030', '2013-03-07 07:07:43'),
(40, '387100219', 'March, 19, 2013', '08:05 AM', 'Delivery', 'bangalore:150:880', 'manju', '9739128834', 'manju@gmail.com', 'Bangalore\r\nKarnataka', 'india', 'Paypal', '150', '880', '1030', '2013-03-07 07:07:59'),
(41, '572796630', 'March, 19, 2013', '08:05 AM', 'Delivery', 'bangalore:150:880', 'manju', '9739128834', 'manju@gmail.com', 'Bangalore\r\nKarnataka', 'india', 'Paypal', '150', '880', '1030', '2013-03-07 07:08:00'),
(42, '786975097', 'March, 19, 2013', '08:05 AM', 'Delivery', 'bangalore:150:880', 'manju', '9739128834', 'manju@gmail.com', 'Bangalore\r\nKarnataka', 'india', 'cash_on_order', '150', '880', '1030', '2013-03-07 07:08:06'),
(43, '158117675', 'March, 19, 2013', '08:05 AM', 'Delivery', 'bangalore:150:880', 'manju', '9739128834', 'manju@gmail.com', 'Bangalore\r\nKarnataka', 'india', 'cash_on_order', '150', '880', '1030', '2013-03-07 07:08:22'),
(44, '707186889', 'March, 21, 2013', '08:05 AM', 'Delivery', 'Select City', 'manju', '9739128834', 'manju@gmail.com', 'Bangalore\r\nKarnataka', 'india', '0', '', '880', '', '2013-03-07 08:35:49'),
(45, '420114135', 'March, 21, 2013', '08:05 AM', 'Delivery', 'Select City', 'manju', '9739128834', 'manju@gmail.com', 'Bangalore\r\nKarnataka', 'india', '0', '', '880', '', '2013-03-07 08:37:05'),
(46, '978494262', 'March, 20, 2013', '08:05 AM', 'Delivery', 'Select City', 'manju', '9739128834', 'manju@gmail.com', 'Bangalore\r\nKarnataka', 'india', '0', '', '880', '', '2013-03-07 08:49:15'),
(47, '819027709', 'March, 20, 2013', '08:05 AM', 'Delivery', 'Select City', 'manju', '9739128834', 'manju@gmail.com', 'Bangalore\r\nKarnataka', 'india', '0', '', '880', '880', '2013-03-07 08:51:25'),
(48, '316650390', 'March, 20, 2013', '08:05 AM', 'Delivery', 'bangalore:150:880', 'manju', '9739128834', 'manju@gmail.com', 'Bangalore\r\nKarnataka', 'india', '0', '150', '880', '1030', '2013-03-07 08:53:38'),
(49, '129827880', 'March, 20, 2013', '08:05 AM', 'Delivery', 'chennai:500:880', 'manju', '9739128834', 'manju@gmail.com', 'Bangalore\r\nKarnataka', 'india', 'Paypal', '500', '880', '1380', '2013-03-07 08:54:40'),
(50, '493832397', 'March, 27, 2013', '08:05 AM', 'Delivery', 'bangalore:150:880', 'manju', '9739128834', 'manju@gmail.com', 'Bangalore\r\nKarnataka', 'india', 'Paypal', '150', '880', '1030', '2013-03-07 09:41:33'),
(51, '732812500', 'March, 27, 2013', '08:05 AM', 'Delivery', 'chennai:500:880', 'manju', '9739128834', 'manju@gmail.com', 'Bangalore\r\nKarnataka', 'india', 'Paypal', '500', '880', '1380', '2013-03-07 10:51:46'),
(52, '810705566', 'March, 27, 2013', '08:05 AM', 'Delivery', 'shillong:1000:880', 'manju', '9739128834', 'manju@gmail.com', 'Bangalore\r\nKarnataka', 'india', 'cash_on_order', '1000', '880', '1880', '2013-03-07 11:25:42'),
(53, '891043090', 'March, 27, 2013', '08:05 AM', 'Delivery', 'chennai:500:880', 'manju', '9739128834', 'manju@gmail.com', 'Bangalore\r\nKarnataka', 'india', 'Paypal', '500', '880', '1380', '2013-03-07 13:43:55'),
(54, '613143920', 'March, 27, 2013', '08:05 AM', 'Delivery', 'goa:500:880', 'manju', '9739128834', 'manju@gmail.com', 'Bangalore\r\nKarnataka', 'india', 'Paypal', '500', '880', '1380', '2013-03-07 13:49:57'),
(55, '373539212', 'March, 28, 2013', '08:05 AM', 'Delivery', 'chennai:500:880', 'manju', '9739128834', 'manju@gmail.com', 'Bangalore\nKarnataka', 'india', 'Paypal', '500', '880', '1380', '2013-03-07 18:41:48'),
(56, '768606939', 'March, 27, 2013', '08:05 AM', 'Delivery', 'chennai:500:880', 'manju', '9739128834', 'manju@gmail.com', 'Bangalore\nKarnataka', 'india', 'Paypal', '500', '880', '1380', '2013-03-07 18:56:46'),
(57, '421613250', 'March, 28, 2013', '08:05 AM', 'Delivery', 'chennai:500:880', 'manju', '9739128834', 'manju@gmail.com', 'Bangalore\nKarnataka', 'india', 'Paypal', '500', '880', '1380', '2013-03-07 19:23:41'),
(58, '951748113', 'March, 28, 2013', '08:05 AM', 'Delivery', 'bangalore:150:240', 'manju', '9739128834', 'manju@gmail.com', 'Bangalore\nKarnataka', 'india', 'Paypal', '150', '240', '390', '2013-03-08 18:47:40');

-- --------------------------------------------------------

--
-- Table structure for table `set_platter_price`
--

CREATE TABLE IF NOT EXISTS `set_platter_price` (
  `platter_id` int(128) NOT NULL AUTO_INCREMENT,
  `platter_amount` varchar(100) NOT NULL,
  PRIMARY KEY (`platter_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `set_platter_price`
--

INSERT INTO `set_platter_price` (`platter_id`, `platter_amount`) VALUES
(1, '80');

-- --------------------------------------------------------

--
-- Table structure for table `user_booking_details`
--

CREATE TABLE IF NOT EXISTS `user_booking_details` (
  `booking_id` int(25) NOT NULL AUTO_INCREMENT,
  `booking_day` varchar(70) NOT NULL,
  `booking_amount` double NOT NULL,
  `booking_status` int(5) NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user_booking_details`
--

INSERT INTO `user_booking_details` (`booking_id`, `booking_day`, `booking_amount`, `booking_status`) VALUES
(1, 'Monday', 100, 1),
(2, 'Tuesday', 100, 0),
(3, 'Wednesday', 100, 1),
(4, 'Thursday', 100, 0),
(5, 'Friday', 200, 1),
(6, 'Saturday', 250, 0),
(7, 'Sunday', 150, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_cart_delivery_table`
--

CREATE TABLE IF NOT EXISTS `user_cart_delivery_table` (
  `cart_id` int(128) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) NOT NULL,
  `cart_combination` varchar(500) NOT NULL,
  `combination_price` varchar(150) NOT NULL,
  `combination_quantity` varchar(150) NOT NULL,
  `invoice_no` varchar(150) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user_cart_delivery_table`
--

INSERT INTO `user_cart_delivery_table` (`cart_id`, `user_id`, `cart_combination`, `combination_price`, `combination_quantity`, `invoice_no`) VALUES
(7, '1', 'food15, food11, ', '80', '3', '951748113'),
(8, '19', 'food11, food12, ', '80', '1', ''),
(9, '19', 'food15, food9, ', '80', '1', ''),
(10, '65', 'food11, food12, ', '80', '1', ''),
(11, '76', 'food12, food10, ', '80', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_cart_table`
--

CREATE TABLE IF NOT EXISTS `user_cart_table` (
  `cart_id` int(128) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) NOT NULL,
  `cart_combination` varchar(500) NOT NULL,
  `combination_price` varchar(150) NOT NULL,
  `combination_quantity` varchar(150) NOT NULL,
  `platt_dat` varchar(100) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `invoice_no` varchar(150) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=428 ;

--
-- Dumping data for table `user_cart_table`
--

INSERT INTO `user_cart_table` (`cart_id`, `user_id`, `cart_combination`, `combination_price`, `combination_quantity`, `platt_dat`, `category_name`, `invoice_no`) VALUES
(284, '76', 'Kilpatrick Oysters, Satay Chicken Skewers, ', '80', '1', '2013-04-17', 'hot', ''),
(285, '76', 'Selection of Miniature , Tempura Prawn Ske, ', '80', '1', '2013-04-17', 'hot', ''),
(349, '87', 'Tempura Prawn Skewers, Kilpatrick Oysters, Mini Spring Rolls (V), ', '100', '1', '2013-04-25', 'hot', ''),
(386, '0', 'Kilpatrick Oysters, Satay Chicken Skewers, Tempura Prawn Skewers, Selection of Miniature Pies, Selection of Miniature Quiches (V), ', '100', '8', '2013-05-30', 'hot', ''),
(390, '109', 'Satay Chicken Skewers, Selection of Miniature Pies, Tempura Prawn Skewers, Kilpatrick Oysters, Tempura Prawn Skewers, ', '100', '1', '2013-06-21', 'hot', ''),
(393, '0', 'Chicken Curry Puffs, Selection of Miniature Pies, Kilpatrick Oysters, Satay Chicken Skewers, Tempura Prawn Skewers, ', '100', '10', '2013-06-21', 'hot', ''),
(394, '0', 'Assortment of Finger Sandwiches, Three Dips with Grilled Turkish Bread, Two Cheeses & Water Crackers, Antipasto Selection, ', '80', '1', '2013-06-21', 'cold', ''),
(415, '0', 'Satay Chicken Skewers, Selection of Miniature Pies, ', '100', '1', '2013-06-05', 'hot', ''),
(424, '1', 'Kilpatrick Oysters, Satay Chicken Skewers, Tempura Prawn Skewers, Selection of Miniature Pies, Kilpatrick Oysters, ', '100', '1', '2013-06-05', 'hot', ''),
(425, '1', 'Selection of Miniature Pies, ', '100', '10', '2013-06-05', 'hot', ''),
(426, '1', 'Kilpatrick Oysters, ', '100', '1', '2013-06-05', 'hot', ''),
(427, '1', 'Antipasto Selection, Two Cheeses & Water Crackers, ', '80', '1', '2013-06-05', 'cold', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_online_platter_order_paid_bookings`
--

CREATE TABLE IF NOT EXISTS `user_online_platter_order_paid_bookings` (
  `paid_book_id` int(128) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(150) NOT NULL,
  `customer_phone` varchar(100) NOT NULL,
  `customer_email` varchar(200) NOT NULL,
  `customer_serve_time` datetime NOT NULL,
  `customer_platter_combination` varchar(300) NOT NULL,
  `payment_amount` varchar(200) NOT NULL,
  `payment_status` varchar(10) NOT NULL,
  `record_entry_date` datetime NOT NULL,
  PRIMARY KEY (`paid_book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_online_platter_order_paid_bookings`
--

INSERT INTO `user_online_platter_order_paid_bookings` (`paid_book_id`, `customer_name`, `customer_phone`, `customer_email`, `customer_serve_time`, `customer_platter_combination`, `payment_amount`, `payment_status`, `record_entry_date`) VALUES
(2, 'jessy', '8732123412', 'jess@gmail.com', '2013-04-02 09:24:41', '{laptop, laptop, laptop, laptop, tv, }', '3000', '1', '2013-03-14 08:38:07');

-- --------------------------------------------------------

--
-- Table structure for table `user_platter_delivery_catering_paid_bookings`
--

CREATE TABLE IF NOT EXISTS `user_platter_delivery_catering_paid_bookings` (
  `paid_book_id` int(128) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(150) NOT NULL,
  `customer_phone` varchar(100) NOT NULL,
  `customer_email` varchar(200) NOT NULL,
  `customer_serve_time` datetime NOT NULL,
  `customer_platter_combination` varchar(300) NOT NULL,
  `payment_amount` varchar(200) NOT NULL,
  `payment_status` varchar(10) NOT NULL,
  `record_entry_date` datetime NOT NULL,
  PRIMARY KEY (`paid_book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_platter_delivery_catering_paid_bookings`
--

INSERT INTO `user_platter_delivery_catering_paid_bookings` (`paid_book_id`, `customer_name`, `customer_phone`, `customer_email`, `customer_serve_time`, `customer_platter_combination`, `payment_amount`, `payment_status`, `record_entry_date`) VALUES
(4, 'krishnas', '9739123387', 'manju@gmail.com', '2013-03-08 10:00:00', 'sfdsfsdf', '1234', '1', '2013-05-03 00:24:55');

-- --------------------------------------------------------

--
-- Table structure for table `user_registeration_table`
--

CREATE TABLE IF NOT EXISTS `user_registeration_table` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `pin_code` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `user_activation_key` varchar(100) NOT NULL,
  `test_password` varchar(50) NOT NULL,
  `entry_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=112 ;

--
-- Dumping data for table `user_registeration_table`
--

INSERT INTO `user_registeration_table` (`id`, `name`, `phone`, `email`, `city`, `country`, `pin_code`, `address`, `password`, `user_type`, `user_activation_key`, `test_password`, `entry_date`, `modified_date`) VALUES
(1, 'Manju', '9739128875', 'manju@gmail.com', 'Bangalore', 'india', '562001', 'Bangalore\nKarnataka\nIndia', 'a35fe7f7fe8217b4369a0af4244d1fca', 'normal', '170c944978496731ba71f34c25826a34', '5000', '2013-05-22 12:29:50', '2013-05-22 12:29:50'),
(2, 'admin', '9739128834', 'admin@gmail.com', 'bangalore', 'india', '562101', 'rajajinagar\r\nbangalore', '673271cc47c1a4e77f57e239ed4d28a7', 'admin', '85fc37b18c57097425b52fc7afbb6969', '1697', '2013-02-23 11:19:37', '2013-02-23 11:19:37'),
(66, 'debu', '9739128834', 'deb@wvs.in', 'bangalore', 'india', '', 'sdfsdfsdfsdfsdfsdfsdfsdf', '678004486c119599ed7d199f47da043a', 'normal', '5f93f983524def3dca464469d2cf9f3e', '3973', '2013-03-14 12:59:48', '2013-03-14 12:59:48'),
(67, 'baga', '9739127123', 'baga@gmail.com', 'bangalore', 'Canada', '562121', 'dfgjdfkljsgkljd\r\ndfgdfsgsdfgdfgg\r\nfgdgsdfgsdfgdsf', 'f5c3dd7514bf620a1b85450d2ae374b1', 'normal', '7647966b7343c29048673252e490f736', '1818', '2013-03-14 13:37:35', '2013-03-14 13:37:35'),
(68, 'kri', '9739128834', 'kri@abc.com', 'bangalore', 'india', '', 'sdasdasd\r\nasdasdasd\r\nasdasdas', '77f959f119f4fb2321e9ce801e2f5163', 'normal', '9de6d14fff9806d4bcd1ef555be766cd', '1502', '2013-03-14 13:08:04', '2013-03-14 13:08:04'),
(69, 'asda', '9739128834', 'abc@xyz.com', 'bangalore', 'india', '', 'dsfsdfsdfsdfsdfsdfsdfsdfsf', 'b5c01503041b70d41d80e3dbe31bbd8c', 'normal', 'b86e8d03fe992d1b0e19656875ee557c', '2217', '2013-03-14 13:19:05', '2013-03-14 13:19:05'),
(70, 'jes', '9739174499', 'jes@gmail.com', 'bangalore', 'Canada', '562101', 'dsfsdfsdf\nsdfsdfdff', 'f2d887e01a80e813d9080038decbbabb', 'normal', '138bb0696595b338afbab333c555292a', '1820', '2013-03-15 17:12:20', '2013-03-15 17:12:20'),
(71, 'bab', '9739128834', 'ba@gmail.com', 'bangalore', 'Mexico', '560032', 'dfdfdf\r\nfdfdff\r\ndfdfdf', 'e9fb2eda3d9c55a0d89c98d6c54b5b3e', 'normal', '69cb3ea317a32c4e6143e665fdb20b14', '3110', '2013-03-15 06:40:42', '2013-03-15 06:40:42'),
(72, 'Default', '9739128834', 'shilpa123@wvs.in', 'bangalore', 'india', '', 'sadasdasdasdasdasdasdasd', 'e586a4f55fb43a540c2e9dab45e00f53', 'normal', 'edfbe1afcf9246bb0d40eb4d8027d90f', '4996', '2013-03-15 07:34:20', '2013-03-15 07:34:20'),
(73, 'pal', '9739174499', 'pal@adodis.com', 'bangalore', 'india', '', 'sdsdsdsdsdadasdadasdasda', '46d3f6029f6170ebccb28945964d09bf', 'normal', '43feaeeecd7b2fe2ae2e26d917b6477d', '3828', '2013-03-15 10:51:31', '2013-03-15 10:51:31'),
(74, 'manjuindi', '919538930762', 'manjunath.indiweb@gmail.com', 'bangalore', 'India', '562101', 'saasasasas\nsasasasass', '0966289037ad9846c5e994be2a91bafa', 'normal', 'e70611883d2760c8bbafb4acb29e3446', '1396', '2013-03-15 17:16:06', '2013-03-15 17:16:06'),
(77, 'hea', '9323126644', 'abc@abc.com', 'bangakrie', 'india', '', 'dfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf', '17b3c7061788dbe82de5abe9f6fe22b3', 'normal', '19f3cd308f1455b3fa09a282e0d496f4', '2580', '2013-03-16 12:48:22', '2013-03-16 12:48:22'),
(78, 'sreedhar', '9739174499', 'shree@wvs.in', 'bangalore', 'australia', '', 'sdfsdfsdfsdfsdf\r\nsdfsdfsdf', '6d4f95bf53bba28f148641c8561dbf98', 'normal', 'a01a0380ca3c61428c26a231f0e49a09', '4451', '2013-03-21 10:25:54', '2013-03-21 10:25:54'),
(79, 'manju.india', '9731213298', 'manju123@gmail.com', 'bangalore', 'australia', '', 'vcbcvbcvbcvb', '31c0b36aef265d9221af80872ceb62f9', 'normal', '705f2172834666788607efbfca35afb3', '3854', '2013-03-21 10:37:40', '2013-03-21 10:37:40'),
(80, 'debu', '9732120088', 'dev@wvs.in', 'ban', 'Albania', '', 'sfsdfsdf\r\ndsfsdf\r\nsdfsdf', '907edb0aa6986220dbffb79a788596ee', 'normal', '26337353b7962f533d78c762373b3318', '3226', '2013-03-21 13:43:07', '2013-03-21 13:43:07'),
(81, 'jessy', '9732173311', 'jes@gmail.in', 'bangalore', 'Afghanistan', '', 'dsfgdsgdfgdsfgsdfgdsfgdfgdfsgsdfgdsfg', '62021a18331216014fee6916d6ee9584', 'normal', '4ffce04d92a4d6cb21c1494cdfcd6dc1', '4550', '2013-03-27 11:50:16', '2013-03-27 11:50:16'),
(82, 'krishna', '9739212998', 'krishna@gmail.com', 'bangalore', 'Anguilla', '', 'werwerwerwe\r\nwerwerwerewr', 'cf8d8c66b1212720e569b0bd67695451', 'normal', '0d0871f0806eae32d30983b62252da50', '4917', '2013-03-28 10:59:24', '2013-03-28 10:59:24'),
(84, 'ram', '9734128832', 'ram@gmail.com', 'melborne', 'Australia', '', 'aadasdasdasd\r\nadasdasdasdd\r\ndasdasdasdas\r\nasdsddadasda', '5ffaa9f5182c2a36843f438bb1fdbdea', 'normal', 'aeb3135b436aa55373822c010763dd54', '4641', '2013-03-29 11:56:16', '2013-03-29 11:56:16'),
(85, 'sdfsd', '345345', 'sdfsdf', '34534534', 'Australia', '', 'dfgdfgdfgdfg', 'ffc58105bf6f8a91aba0fa2d99e6f106', 'normal', 'eefc9e10ebdc4a2333b42b2dbb8f27b6', '4001', '2013-03-29 12:42:20', '2013-03-29 12:42:20'),
(86, 'manju', '974392379', 'mann@abc.com', 'bangalore', 'Australia', '', 'sdfsdfsdfsdfs\r\ndfs\r\n', '95e6834d0a3d99e9ea8811855ae9229d', 'normal', '6f2268bd1d3d3ebaabb04d6b5d099425', '1940', '2013-03-30 10:42:00', '2013-03-30 10:42:00'),
(87, 'guru', '8762328646', 'guru@wvs.in', 'Bangalore', 'Australia', '560076', 'BTM', '0f2818101a7ac4b96ceeba38de4b934c', 'normal', '48ab2f9b45957ab574cf005eb8a76760', '4975', '2013-04-10 15:34:00', '2013-04-10 15:34:00'),
(88, 'Shreedhar Bhat', '917760807087', 'shreebhat@gmail.com', 'Bangalore', 'Australia', '', 'FYI', '2f29b6e3abc6ebdefb55456ea6ca5dc8', 'normal', '632cee946db83e7a52ce5e8d6f0fed35', '1168', '2013-05-02 23:33:22', '2013-05-02 23:33:22'),
(89, 'Ajd', '9989787', 'ahjsh@gmail.com', 'sjdjaks', 'Australia', '', 'jasdhak', '1175defd049d3301e047ce50d93e9c7a', 'normal', 'f4be00279ee2e0a53eafdaa94a151e2c', '2612', '2013-05-03 00:50:50', '2013-05-03 00:50:50'),
(90, '0', '0', '0', '0', '0', '', '0', 'b1c00bcd4b5183705c134b3365f8c45e', 'normal', 'f73b76ce8949fe29bf2a537cfa420e8f', '2726', '2013-05-03 01:29:39', '2013-05-03 01:29:39'),
(91, 'Shreedhar Bhat', '917760807087', 'shree@wvsoftek.com', 'Bangalore', 'Australia', '4400', 'sfsdf', '56f9f88906aebf4ad985aaec7fa01313', 'normal', 'a5771bce93e200c36f7cd9dfd0e5deaa', '1893', '2013-05-03 02:03:09', '2013-05-03 02:03:09'),
(92, 'manju', '9739172232', 'manju@yahoo.com', 'bangalore', 'Australia', '', 'sadasdasdsa\ndasdasdasdd\nasdasdasdsd', '97250eb3250c1fa40a321076d5be217d', 'normal', '38b3eff8baf56627478ec76a704e9b52', '3888', '2013-05-13 10:52:19', '2013-05-13 10:52:19'),
(104, 'Srinath N', '919964954123', 'info@wvsoftek.com', 'Sagar', 'Australia', '4000', 'QLD', '30d454f09b771b9f65e3eaf6e00fa7bd', 'normal', '18d8042386b79e2c279fd162df0205c8', '4819', '2013-05-16 14:59:10', '2013-05-16 14:59:10'),
(109, 'Manjunathan', '9739237721', 'manjunath@wvs.in', 'bangalore', 'Australia', '562101', 'dsaasdasdasdasdasdasdasasdasd', '1192265fb31ab52a6332c561ee6e5258', 'normal', 'd296c101daa88a51f6ca8cfc1ac79b50', '4020', '2013-05-17 19:16:04', '2013-05-17 19:16:04'),
(110, 'Shreedhar Bhat', '917760807087', 'hi@wvs.in', 'Bangalore', 'Australia', '4000', 'HTYUUUU', 'f7696a9b362ac5a51c3dc8f098b73923', 'normal', '2dea61eed4bceec564a00115c4d21334', '2500', '2013-05-20 20:10:41', '2013-05-20 20:10:41'),
(111, 'Shishir', '9886739718', 'shishir.18', 'Brisbane', 'Australia', '49843', 'test ', 'd71dd235287466052f1630f31bde7932', 'normal', '61b4a64be663682e8cb037d9719ad8cd', '4720', '2013-05-23 12:51:26', '2013-05-23 12:51:26');

-- --------------------------------------------------------

--
-- Table structure for table `user_store_combinations`
--

CREATE TABLE IF NOT EXISTS `user_store_combinations` (
  `combination_id` int(128) NOT NULL AUTO_INCREMENT,
  `product_id` varchar(100) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `category_namee` varchar(150) NOT NULL,
  `product_image` varchar(400) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  PRIMARY KEY (`combination_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=162 ;

--
-- Dumping data for table `user_store_combinations`
--

INSERT INTO `user_store_combinations` (`combination_id`, `product_id`, `product_name`, `category_namee`, `product_image`, `user_id`) VALUES
(155, '9', 'Tempura Prawn Skewers', 'hot', 'Tempura-Prawn-Skewers.jpg', '87'),
(158, '20', 'Mini Spring Rolls (V)', 'hot', 'Mini-Spring-Rolls.jpg', '87'),
(159, '15', 'Mini Sausage Rolls', 'hot', 'Mini-Sausage-Rolls.jpg', '87'),
(161, '15', 'Mini Sausage Rolls', 'hot', 'Mini-Sausage-Rolls.jpg', '87');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
