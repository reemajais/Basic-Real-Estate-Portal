-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2023 at 11:13 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestate_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `brokers`
--

CREATE TABLE `brokers` (
  `broker_contact` varchar(10) NOT NULL,
  `broker_email` varchar(30) NOT NULL,
  `broker_experience` varchar(30) NOT NULL,
  `property_id` int(30) NOT NULL,
  `broker_commission` decimal(5,2) NOT NULL,
  `broker_status` tinyint(1) NOT NULL,
  `broker_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brokers`
--

INSERT INTO `brokers` (`broker_contact`, `broker_email`, `broker_experience`, `property_id`, `broker_commission`, `broker_status`, `broker_name`) VALUES
('', '', '', 0, '0.00', 0, '0'),
('1234567890', 'abc@gmail.com', '3', 1, '5.00', 1, 'Rahul jaiswal'),
('', '', '', 0, '0.00', 0, ''),
('1122334455', 'xyz@gmail.com', '3', 0, '10.00', 1, 'Al nayab'),
('', '', '', 0, '0.00', 0, ''),
('', '', '', 0, '0.00', 0, ''),
('', '', '', 0, '0.00', 0, ''),
('', '', '', 0, '0.00', 0, ''),
('', '', '', 0, '0.00', 0, ''),
('', '', '', 0, '0.00', 0, ''),
('', '', '', 0, '0.00', 0, ''),
('', '', '', 0, '0.00', 0, ''),
('', '', '', 0, '0.00', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `property_id` int(30) NOT NULL,
  `property_name` varchar(30) NOT NULL,
  `property_description` varchar(30) NOT NULL,
  `property_address` varchar(30) NOT NULL,
  `property_price` decimal(30,0) NOT NULL,
  `property_image` varchar(30) NOT NULL,
  `property_owner_name` varchar(50) DEFAULT NULL,
  `owner_contact` varchar(30) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(30) NOT NULL,
  `zip_code` varchar(10) NOT NULL,
  `kind_of_property` varchar(30) DEFAULT NULL,
  `area` decimal(10,2) DEFAULT NULL,
  `total_valuation` decimal(10,2) DEFAULT NULL,
  `property_status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`property_id`, `property_name`, `property_description`, `property_address`, `property_price`, `property_image`, `property_owner_name`, `owner_contact`, `address`, `city`, `zip_code`, `kind_of_property`, `area`, `total_valuation`, `property_status`) VALUES
(1, 'Downtown Apartment', 'This beautiful 3-bedroom, 2-ba', '123 Main St, Anytown USA', '500000', '', NULL, '', NULL, '', '', NULL, NULL, NULL, NULL),
(2, 'Beachfront Condo', 'Stunning ocean views, modern a', '456 High St, Big City USA', '7000000', '', NULL, '', NULL, '', '', NULL, NULL, NULL, NULL),
(0, '', '', '', '0', '', 'Ramnath jaiswal', '9456436888', 'ambikapur road', 'manendragarh', '497442', 'Apartment', '40.00', '6.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Password`) VALUES
('admin', 'admin'),
('admin', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
