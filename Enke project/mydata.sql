-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 01, 2018 at 07:50 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblmydata`
--

DROP TABLE IF EXISTS `tblmydata`;
CREATE TABLE IF NOT EXISTS `tblmydata` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmydata`
--

INSERT INTO `tblmydata` (`Id`, `name`, `price`, `description`) VALUES
(23, 'iphone 6 plus', 600, 'it&#39;s in great quality'),
(6, 'Apple 13\" MacBook Air', 796, 'Whatever the task, the MacBook Air is up for it. From editing photos to browsing the web, everything happens ultrafast. And all that power is encased in a light and thin enclosure that lasts up to 12 hours on a charge.'),
(7, 'Acer Aspire E 15', 360, 'Acer Aspire E 15 E5-576-392H comes with these high level specs: 8th Generation Intel Core i3-8130U Processor 2.2GHz with Turbo Boost Technology up to 3.4GHz, Windows 10 Home, 15.6\" Full HD (1920 x 1080) widescreen LED-backlit display'),
(8, 'Apple 13\" MacBook Air', 796, 'Whatever the task, the MacBook Air is up for it. From editing photos to browsing the web, everything happens ultrafast. And all that power is encased in a light and thin enclosure that lasts up to 12 hours on a charge.'),
(9, 'Acer Aspire E 15', 360, 'Acer Aspire E 15 E5-576-392H comes with these high level specs: 8th Generation Intel Core i3-8130U Processor 2.2GHz with Turbo Boost Technology up to 3.4GHz, Windows 10 Home, 15.6  Full HD 1920 x 1080 widescreen LED-backlit display'),
(10, 'Apple 13\" MacBook Air', 796, 'Whatever the task, the MacBook Air is up for it. From editing photos to browsing the web, everything happens ultrafast. And all that power is encased in a light and thin enclosure that lasts up to 12 hours on a charge.'),
(11, 'Acer Aspire E 15', 360, 'Acer Aspire E 15 E5-576-392H comes with these high level specs: 8th Generation Intel Core i3-8130U Processor 2.2GHz with Turbo Boost Technology up to 3.4GHz, Windows 10 Home, 15.6  Full HD 1920 x 1080 widescreen LED-backlit display'),
(12, 'Apple 13\" MacBook Air', 796, 'Whatever the task, the MacBook Air is up for it. From editing photos to browsing the web, everything happens ultrafast. And all that power is encased in a light and thin enclosure that lasts up to 12 hours on a charge.'),
(13, 'Apple iPhone X', 1040, 'Professionally inspected and tested to work and look like new, and backed by the 90-day Amazon Renewed Guarantee. Box and relevant accessories (no headphones included) may be generic.\r\nGSM Unlocked Phones are ONLY compatible with GSM carriers like AT&T and T-Mobile as well as other GSM networks around the world. They WILL NOT WORK with CDMA carriers like Sprint and Verizon (Search for \"Fully Unlocked iPhones\" for CDMA compatible iPhones\r\n'),
(14, 'Samsung Galaxy Note9 ', 875, 'This Certified Refurbished product has been tested and certified to work and look like new, with minimal to no signs of wear, by a specialized third-party seller approved by Amazon. The product is backed by a minimum 90-day warranty and may arrive in a generio more, '),
(15, 'Canon PIXMA TS6220', 100, 'Inspire your creativity with prints that will impress. From stunning photographs to detailed documents, put the 5-Color Individual Ink System to work and never compromise on speed or quality.\r\nEnjoy the simplicity of connecting your smartphone, tablet and all your favorite devices with ease. With IFTTT IF This Then That support, use various web s to automate printing.\r\nTION SECTION BELOW'),
(16, 'Canon EOS Rebel T6 Digital SLR Camera', 325, 'This Certified Refurbished product is tested and certified to look and work like new. The refurbishing process includes functionality testing, basic cleaning, inspection, and repackaging. The product ships with all relevant accessories, a minimum 90-day warranty, and may arrive in a generic box. Only select sellers who maintain a high performance bar may offer Certified Refurbished products on Amazon.com\r\n'),
(17, 'Echo (2nd Generation)', 100, 'Echo connects to Althermostats, garage doors, sprinklers, and moreAlexa is always getting smarter and adding new features and skills. Just ask Alexa to control your TV, request an Uber, order a pizza, and more.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
