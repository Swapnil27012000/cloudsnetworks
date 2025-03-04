-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2025 at 09:27 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cloudsnetorkstest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `u_id` int(11) NOT NULL,
  `firstName` varchar(125) NOT NULL,
  `lastName` varchar(125) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `confirmCode` varchar(10) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`u_id`, `firstName`, `lastName`, `email`, `mobile`, `address`, `password`, `user_type`, `confirmCode`, `status`, `timestamp`) VALUES
(1, 'Swapnil', 'Kamble', 'swapnilkamble27012000@gmail.com', 9028864181, 'Lanja, Ratnagiri', 'admin', 'admin', '112233', 1, NULL),
(2, 'Omkar', 'Gurav', 'omkar@gmail.com', 8087916637, 'kuve, Ratnagiri', 'developer', '2', '223344', 1, NULL),
(3, 'sameer', 'kamble', 'sameer@gmail.com', 1234567890, 'Ratnagiri,HM,IND', 'admin', '2', '111111', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categorytype`
--

CREATE TABLE `categorytype` (
  `id` int(5) NOT NULL,
  `categoryName` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorytype`
--

INSERT INTO `categorytype` (`id`, `categoryName`) VALUES
(1, 'Web Development'),
(2, 'App Development'),
(3, 'SEO Marketing'),
(4, 'UI/UX Design'),
(5, 'IT Consultation'),
(6, 'AWS');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(125) NOT NULL,
  `c_email` varchar(125) NOT NULL,
  `c_mobile` varchar(10) NOT NULL,
  `c_subject` varchar(500) NOT NULL,
  `c_message` varchar(10000) NOT NULL,
  `c_ipaddr` varchar(20) NOT NULL,
  `c_time_stamp` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `c_name`, `c_email`, `c_mobile`, `c_subject`, `c_message`, `c_ipaddr`, `c_time_stamp`) VALUES
(1, 'Swapnil', 'swapnil@gmail.com', '8087916637', 'demo_sub', 'demo_msg', '::1', '2025-02-13 16:54:23'),
(2, 'Balu', 'balu@gmail.com', '9028864181', 'smtp.off sublive', 'live msg', '::1', '2025-02-13 16:54:23'),
(3, 'sayali kamble', 'swapnilkamble27012000@gmail.com', '9028864181', 'done sub', 'msg 2', '::1', '2025-02-13 17:00:16'),
(4, 'swapnil kamble', 'swapnilkamble27012000@gmail.com', '9028864181', 'smtp.off sub env.', 'msg env check', '::1', '2025-02-13 17:08:14'),
(5, 'swapnil kamble', 'swapnilkamble27012000@gmail.com', '9028864181', 'smtp.off sub env. resend', 'msg resend', '::1', '2025-02-13 17:21:35'),
(6, 'Purnima', 'purnima@gmail.com', '9764254554', 'Application for job ', 'Dear Swapnil\n31 Websites Offering Free Email Templates or Free Trials\nUtilizing email templates not only enhances consisten', '::1', '2025-02-13 17:55:50'),
(7, 'swapnil001 kamble', 'swapnilkamble27012000@gmail.com', '9028864181', 'smtp.off sub env. resend', 'msg resend', '::1', '2025-02-13 18:18:44'),
(8, 'swapnil001 kamble', 'swapnilkamble27012000@gmail.com', '9028864181', 'check site key', 'ccording to the TraceLog file that you provided you have a problem in your web.config file. An exception message is C:Users	eilmannsourceNuheatoj.weboj.web.mainweb.config (112):Cannot add duplicate collection entry of type \"mimeMap\" with unique key attribute \"fileExtension\" set to \".json\" Most likely you have a MIME type defined for JSO', '::1', '2025-02-13 20:43:15');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `ns_id` int(11) NOT NULL,
  `ns_email` varchar(125) NOT NULL,
  `ns_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`ns_id`, `ns_email`, `ns_timestamp`) VALUES
(1, 'swapnilkamble27012000@gmail.com', '2025-02-13 20:17:33'),
(2, 'purnima@gmail.com', '2025-02-13 20:19:52'),
(3, 'business.cloudsnetworks@outlook.com', '2025-02-13 20:23:17'),
(4, 'purnima@gmail.com', '2025-02-14 17:33:40'),
(5, 'donkey@gmail.com', '2025-02-14 18:12:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `firstName` varchar(125) NOT NULL,
  `lastName` varchar(125) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `address` text NOT NULL,
  `password` longtext DEFAULT NULL,
  `user_type` varchar(10) NOT NULL,
  `confirmCode` varchar(10) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `firstName`, `lastName`, `email`, `mobile`, `address`, `password`, `user_type`, `confirmCode`, `status`, `timestamp`) VALUES
(1, 'Swapnil', 'Kamble', 'swapnil@gmail.com', 9028864181, 'lanja', 'admin', 'admin', '112233', 1, '2025-02-15 22:18:54'),
(2, 'Omkar', 'Gurav', 'omkar@gmail.com', 8087916637, 'Kuve, Lanja - 416701', 'developer', 'developer', '123456', 1, '2025-02-16 08:48:11');

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `ut_id` int(5) NOT NULL,
  `ut_Name` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`ut_id`, `ut_Name`) VALUES
(1, 'admin'),
(2, 'developer'),
(3, 'writer');

-- --------------------------------------------------------

