-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 01:59 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pempho`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `aboutme` text NOT NULL,
  `skills` text NOT NULL,
  `contacts` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`aboutme`, `skills`, `contacts`) VALUES
('\r\n<p style=\"text-align: center;\">JIVER DESIGNS CO is a company that specialises in designing and building houses and apartments<br>it was first established in 2017 and as of now it has it has completed over 20 projects which some are in the projects section<br>Our goal is to be known as one of the best in this designing and building industry</p>\r\n<HR>\r\n<p> TO ENQUIRE FOR OUR SERVICES PLEASE FILL OUT THE DETAILS BELOW</p>\r\n ', '\r\n<h2><B> 1.we are adaptive and flexible as with time changing we also abide to bring in new technologies in place ,that is something we have placed as one of our main goals<B></h2>\r\n	<br>\r\n	<h2><basefont>2. we are timely on our projects .we believe on timeliness is the basis of this business</basefont></h2>\r\n	<h2><b>3. we that a good centralised organisational team which leaves less room for errors . so trusting us with projects know that we leave no room for errors<b></h2>\r\n  ', '	<p>jiver design co</p>\r\n	<p>P/BAG 202</p>\r\n	<p>Lilongwe</p><br>\r\n	<p><i>cell no<i><b>:0991309052/0880055163<b></p>\r\n		<p><strong>email:<i><u>Pempherokadzako@gmail.com</u></i></p></strong>\r\n');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
