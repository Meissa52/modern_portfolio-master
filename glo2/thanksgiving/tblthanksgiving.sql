-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 15, 2018 at 08:29 PM
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
-- Database: `thanksgiving`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblthanksgiving`
--

DROP TABLE IF EXISTS `tblthanksgiving`;
CREATE TABLE IF NOT EXISTS `tblthanksgiving` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Picture` varchar(500) NOT NULL,
  `Thanksgivingactivity` varchar(45) NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblthanksgiving`
--

INSERT INTO `tblthanksgiving` (`Id`, `Picture`, `Thanksgivingactivity`, `Description`) VALUES
(1, 'https://www.uwlc-ms.org/sites/uwlc-ms.org/files/thanksgiving%20volunteers%20needed.jpg', 'Volunteer Together', 'Provide a meal for those in need at your local Salvation Army or through The National Coalition for the Homeless, where families can team up to serve dinner and welcome the less fortunate in for a warm holiday meal among friends.\r\n\r\nVolunteer Match is another great resource to get connected with Thanksgiving Day volunteer opportunities right in your own backyard.'),
(2, 'https://si.wsj.net/public/resources/images/BN-QW900_GRANDM_P_20161121121626.jpg', 'Family Football Game', 'Start a friendly football game for the whole family outdoors and work up a sweat together. You can even make a pre-game activity out of making the Family Football Thanksgiving Championship trophy, which can become the coveted prize during this tradition for years to come!'),
(3, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRScnHuFQGvRH_g-uGRJyIbOeQ_efk9-fRWFtXtqIK_PzrT4hq_', 'Outdoor Scavenger Hunt', 'Assemble family members into pairs or teams and organize an exciting scavenger hunt either in the backyard or throughout the neighborhood. Offer prizing like small gift cards or special treats to inspire some friendly competition.\r\n\r\nGet some great ideas on ways to plan a scavenger hunt here!'),
(4, 'https://www.lifeissweeterbydesign.com/wp-content/uploads/2014/11/5-Reasons-I-Put-Up-My-Christmas-Tree-Before-Thanksgiving-FBTW.jpg', 'Set up the Christmas Tree', 'Some may argue that Thanksgiving is too early to start your holiday decorating, but hey—you might as well take the help while you can get it! Plus, who doesn’t enjoy decorating the family tree? Turn on some festive music, delegate out the tree-decorating tasks, and watch your holiday come alive with the help of the whole family. Serve up some hot cocoa to really help get everyone in the spirit!'),
(5, 'https://i2.wp.com/tlcms.org/wp-content/uploads/2017/10/Game-Night.jpg?w=1080', 'Family Game Night', 'From traditional board games like Pictionary and Scattergories, to the hot new games like Apples to Apples and the just-for-adults Cards Against Humanity, gather up the crew for some good old-fashioned family fun!'),
(6, 'https://secure.img2-fg.wfcdn.com/im/67515118/resize-h310-w310%5Ecompr-r85/5078/50788856/4x6-wedding-book-photo-album.jpg', 'Browse Through Photo Albums', 'Take out the old family photo albums and gather grandparents and the kids for some storytelling as you look through old photos together. Your family members will love going back in time, swapping favorite memories, and laughing together at some of the cringe-worthy fashions and hairstyles!');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
