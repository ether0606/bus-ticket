-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2025 at 10:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus-ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `role_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `contact_no`, `email`, `password`, `is_active`, `role_id`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Ibrahim khalil', '0156669998', 'kamal@yahoo.com', '356a192b7913b04c54574d18c28d46e6395428ab', 1, 2, 1, NULL, NULL, NULL, NULL),
(3, 'Amran', '01837131953', 'amranhossen9182@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 2, 1, NULL, NULL, NULL, NULL),
(4, 'Amran', '01837131953', 'amranhossen9685@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 2, 1, NULL, NULL, NULL, NULL),
(5, 'ali', '0198422984', 'ali333@gmail.com', '43814346e21444aaf4f70841bf7ed5ae93f55a9d', 1, 2, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 active 0 deleted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `name`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Chittagong', 1, '2025-05-31 00:10:40', '2025-05-31 00:25:28', 4, 4),
(2, 'Dhaka', 1, '2025-05-31 00:11:42', NULL, 4, NULL),
(3, 'Cumilla', 1, '2025-05-31 00:12:40', NULL, 4, NULL),
(4, 'Coxsbazar', 1, '2025-05-31 00:25:15', NULL, 4, NULL),
(5, 'Mymensingh', 1, '2025-06-01 00:02:02', NULL, 0, NULL),
(6, 'Rangpur', 1, '2025-06-01 00:02:12', NULL, 0, NULL),
(7, 'Barisal', 1, '2025-06-01 00:02:23', NULL, 0, NULL),
(8, ' Khulna', 1, '2025-06-01 00:03:41', NULL, 0, NULL),
(9, 'Rajshahi', 1, '2025-06-01 00:03:53', NULL, 0, NULL),
(10, 'Sylhet', 1, '2025-06-01 00:04:02', NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id` int(11) NOT NULL,
  `bus_company_id` int(11) NOT NULL,
  `registration_no` varchar(50) DEFAULT NULL,
  `bus_type` varchar(50) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 active 0 deleted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `bus_company_id`, `registration_no`, `bus_type`, `note`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 8, 'HA-2585', 'NON-AC', 'This is bus\r\n', 1, '2025-05-28 01:47:07', '2025-06-02 02:11:49', 1, 5),
(2, 2, 'HA-15-2598', 'NON-AC', 'asdfk', 1, '2025-05-28 01:50:58', '2025-05-28 01:55:31', 1, 1),
(3, 3, 'MA-01 284', 'AC', 'Marsa Bus', 1, '2025-06-01 00:01:19', '2025-06-01 02:04:27', 0, 5),
(4, 11, 'PA - 84 4287', 'AC', 'Padma \r\n', 1, '2025-06-01 01:59:44', NULL, 5, NULL),
(5, 10, 'SL - 09 478', 'AC', 'SKY BUS', 1, '2025-06-01 02:00:20', NULL, 5, NULL),
(6, 9, 'SA - 09 7564', 'AC', 'Saudia Bus\r\n', 1, '2025-06-01 02:04:16', NULL, 5, NULL),
(7, 8, 'SB -09 845', 'AC', 'SB Delux ', 1, '2025-06-01 02:05:17', NULL, 5, NULL),
(8, 7, 'SR - 98 477', 'AC', 'SR Travels Bus', 1, '2025-06-01 02:05:46', NULL, 5, NULL),
(9, 6, 'lE - 08 4773', 'AC', 'London Express', 1, '2025-06-01 02:09:03', NULL, 5, NULL),
(10, 5, 'ST - 08 4783', 'AC', 'Shadhin Travels', 1, '2025-06-01 02:09:23', NULL, 5, NULL),
(11, 4, 'GL - 08 4684', 'AC', 'Green Line', 1, '2025-06-01 02:11:15', NULL, 5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `buscompany`
--

CREATE TABLE `buscompany` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `contact_no` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 active 0 deleted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buscompany`
--

INSERT INTO `buscompany` (`id`, `name`, `contact_no`, `address`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Hanif', '015', 'Ctg', 1, '2025-05-28 01:13:54', '2025-05-28 01:33:23', 0, 0),
(2, 'Unique Bus S', '016', 'ctg', 0, '2025-05-28 01:15:01', '2025-05-31 00:27:35', 0, 4),
(3, 'Marsa ', '01842942442', 'Chittagong', 1, '2025-06-01 00:01:08', NULL, 0, NULL),
(4, 'Green Line Paribahan', '056314544', 'Chittagong', 1, '2025-06-01 00:52:44', NULL, 0, NULL),
(5, 'Shadhin Travels', '019687864', 'Chittagong', 1, '2025-06-01 00:53:04', NULL, 0, NULL),
(6, 'London Express Ltd', '0198422984', 'Chittagong', 1, '2025-06-01 00:53:19', NULL, 0, NULL),
(7, 'SR Travels', '0198422984', 'Chittagong', 1, '2025-06-01 00:55:51', NULL, 0, NULL),
(8, 'SB Delux', '0198422984', 'Chittagong', 1, '2025-06-01 00:56:08', NULL, 0, NULL),
(9, 'Saudia Paribahan', '0198422984', 'Chittagong', 1, '2025-06-01 00:56:22', '2025-06-01 00:56:25', 0, 0),
(10, 'Sky Line', '01842942442', 'Chittagong', 1, '2025-06-01 00:56:39', NULL, 0, NULL),
(11, 'Padma Enterprise', '98540987', 'Chittagong', 1, '2025-06-01 00:56:52', NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 active 0 deleted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `name`, `address`, `contact_no`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Counter 02', 'Wasa Moor,Chittagong', '0198422984', 1, '2025-06-01 00:05:36', '2025-06-01 02:24:04', 0, 5),
(2, 'Counter 01', 'GEC, Chittagong', '0184857642', 1, '2025-06-01 00:46:55', '2025-06-01 02:25:43', 0, 5),
(3, 'Counter 03', 'Bahaddarhat, Chittagong', '0934587502', 1, '2025-06-01 02:25:06', '2025-06-01 02:25:36', 5, 5),
(4, 'Counter 04', 'Muradpur, Chittagon', '98540987', 1, '2025-06-01 02:25:25', NULL, 5, NULL),
(5, 'Counter 05', 'Agrabad, Chittagong', '0178462434', 1, '2025-06-01 02:26:12', NULL, 5, NULL),
(6, 'Counter 06', 'Karnafuli, Chittagong', '0194847224', 1, '2025-06-01 02:26:54', NULL, 5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment_type`
--

CREATE TABLE `payment_type` (
  `id` int(11) NOT NULL,
  `name` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 active 0 deleted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Admin', 'admin', 1, NULL, NULL, NULL, NULL),
(2, 'User', 'user', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_access`
--

CREATE TABLE `role_access` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `access` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `id` int(11) NOT NULL,
  `to_area` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 active 0 deleted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `from_area` int(11) DEFAULT NULL,
  `break_area` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `to_area`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`, `from_area`, `break_area`) VALUES
(1, 2, 0, '2025-05-31 00:12:58', '2025-05-31 00:29:41', 4, 4, 1, 3),
(2, 2, 0, '2025-05-31 00:20:17', '2025-05-31 00:29:41', 4, 4, 3, 2),
(3, 1, 0, '2025-05-31 00:21:17', '2025-05-31 00:29:41', 4, 4, 2, 3),
(4, 4, 0, '2025-05-31 00:26:32', '2025-05-31 00:29:41', 4, 4, 2, 1),
(5, 1, 0, '2025-05-31 00:27:27', '2025-05-31 00:29:41', 4, 4, 2, 3),
(6, 2, 0, '2025-05-31 00:28:30', '2025-05-31 00:29:41', 4, 4, 1, 3),
(7, 2, 1, '2025-06-01 00:00:49', NULL, 0, NULL, 1, 3),
(8, 2, 1, '2025-06-01 00:01:33', NULL, 0, NULL, 4, 3),
(9, 7, 1, '2025-06-01 02:15:18', NULL, 5, NULL, 10, 2),
(10, 8, 1, '2025-06-01 02:15:24', NULL, 5, NULL, 8, 3),
(11, 8, 1, '2025-06-01 02:15:31', '2025-06-01 02:18:23', 5, 5, 4, 5),
(12, 10, 1, '2025-06-01 02:19:04', NULL, 5, NULL, 8, 9),
(13, 6, 1, '2025-06-01 02:19:13', NULL, 5, NULL, 5, 2),
(14, 7, 1, '2025-06-01 02:19:19', NULL, 5, NULL, 3, 1),
(15, 3, 1, '2025-06-01 02:19:36', NULL, 5, NULL, 1, 7),
(16, 6, 1, '2025-06-01 02:19:43', NULL, 5, NULL, 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `route_id` int(11) DEFAULT NULL,
  `bus_id` int(11) DEFAULT NULL,
  `start_counter_id` int(11) DEFAULT NULL,
  `end_counter_id` int(11) DEFAULT NULL,
  `start_time_date` datetime DEFAULT NULL,
  `has_complimantory` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 active 0 deleted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `route_id`, `bus_id`, `start_counter_id`, `end_counter_id`, `start_time_date`, `has_complimantory`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 8, 2, 6, 4, '2025-06-02 11:18:00', 1, 1, '2025-06-02 01:15:12', NULL, 5, NULL),
(2, 8, 11, 6, 6, '2025-06-02 12:57:20', 1, 1, '2025-06-02 01:50:27', NULL, 5, NULL),
(3, 7, 11, 6, 6, '0000-00-00 00:00:00', 1, 1, '2025-06-02 02:25:07', NULL, 5, NULL),
(4, 10, 11, 6, 6, '0000-00-00 00:00:00', 1, 1, '2025-06-02 02:25:13', NULL, 5, NULL),
(5, 9, 11, 6, 6, '0000-00-00 00:00:00', 1, 1, '2025-06-02 02:25:19', NULL, 5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schedule_counter`
--

CREATE TABLE `schedule_counter` (
  `id` int(11) NOT NULL,
  `schedule_id` int(11) DEFAULT NULL,
  `counter_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `id` int(11) NOT NULL,
  `bus_id` int(11) DEFAULT NULL,
  `seat_number` varchar(255) DEFAULT NULL,
  `seat_type` varchar(255) DEFAULT NULL,
  `seat_row` int(11) DEFAULT NULL,
  `seat_column` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '\r\n1 active 0 deleted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`id`, `bus_id`, `seat_number`, `seat_type`, `seat_row`, `seat_column`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(2, 2, 'A1', 'Non-AC', 0, 1, 1, '2025-06-01 02:20:00', '2025-06-01 23:41:10', 4, 4),
(3, 2, 'A2', 'Non-AC', 0, 2, 1, '2025-06-01 23:48:06', '2025-06-01 23:50:38', 4, 4),
(4, 2, 'A3', 'Non-AC', 0, 3, 1, '2025-06-01 23:51:14', NULL, 4, NULL),
(5, 2, 'A4', 'Non-AC', 0, 4, 1, '2025-06-01 23:52:02', NULL, 4, NULL),
(6, 2, 'B1', 'Non-AC', 1, 1, 1, '2025-06-01 23:54:25', NULL, 4, NULL),
(7, 2, 'B2', 'Non-AC', 1, 2, 1, '2025-06-01 23:55:53', NULL, 4, NULL),
(8, 2, 'B3', 'Non-AC', 1, 3, 1, '2025-06-01 23:56:27', NULL, 4, NULL),
(9, 2, 'B4', 'Non-AC', 1, 4, 1, '2025-06-01 23:56:52', NULL, 4, NULL),
(10, 2, 'C1', 'Non-AC', 2, 1, 1, '2025-06-01 23:57:35', NULL, 4, NULL),
(11, 2, 'C2', 'Non-AC', 2, 2, 1, '2025-06-01 23:58:01', NULL, 4, NULL),
(12, 2, 'C3', 'Non-AC', 2, 3, 1, '2025-06-01 23:58:25', NULL, 4, NULL),
(13, 2, 'C4', 'Non-AC', 2, 4, 1, '2025-06-01 23:58:57', NULL, 4, NULL),
(14, 2, 'D1', 'Non-AC', 3, 1, 1, '2025-06-01 23:59:27', NULL, 4, NULL),
(15, 2, 'D2', 'Non-AC', 3, 2, 1, '2025-06-01 23:59:57', NULL, 4, NULL),
(16, 2, 'D3', 'Non-AC', 3, 3, 1, '2025-06-02 00:00:26', '2025-06-02 00:00:50', 4, 4),
(17, 2, 'D4', 'Non-AC', 3, 4, 1, '2025-06-02 00:01:24', NULL, 4, NULL),
(18, 2, 'E1', 'Non-AC', 4, 1, 1, '2025-06-02 00:02:28', NULL, 4, NULL),
(19, 2, 'E2', 'Non-AC', 4, 2, 1, '2025-06-02 00:03:00', NULL, 4, NULL),
(20, 2, 'E3', 'Non-AC', 4, 3, 1, '2025-06-02 00:03:32', NULL, 4, NULL),
(21, 2, 'E4', 'Non-AC', 4, 4, 1, '2025-06-02 00:04:20', '2025-06-02 00:04:41', 4, 4),
(22, 2, 'F1', 'Non-AC', 5, 1, 1, '2025-06-02 00:05:29', NULL, 4, NULL),
(23, 2, 'F2', 'Non-AC', 5, 2, 1, '2025-06-02 00:06:03', NULL, 4, NULL),
(24, 2, 'F3', 'Non-AC', 5, 3, 1, '2025-06-02 00:06:34', NULL, 4, NULL),
(25, 2, 'F4', 'Non-AC', 5, 4, 1, '2025-06-02 00:06:58', NULL, 4, NULL),
(26, 2, 'G1', 'Non-AC', 6, 1, 1, '2025-06-02 00:07:48', NULL, 4, NULL),
(27, 2, 'G2', 'Non-AC', 6, 2, 1, '2025-06-02 00:08:27', NULL, 4, NULL),
(28, 2, 'G3', 'Non-AC', 6, 3, 1, '2025-06-02 00:08:48', NULL, 4, NULL),
(29, 2, 'G4', 'Non-AC', 6, 4, 1, '2025-06-02 00:09:13', NULL, 4, NULL),
(30, 2, 'H1', 'Non-AC', 7, 1, 1, '2025-06-02 00:10:50', NULL, 4, NULL),
(31, 2, 'H2', 'Non-AC', 7, 2, 1, '2025-06-02 00:11:05', NULL, 4, NULL),
(32, 2, 'H3', 'Non-AC', 7, 3, 1, '2025-06-02 00:11:50', NULL, 4, NULL),
(33, 2, 'H4', 'Non-AC', 7, 4, 1, '2025-06-02 00:12:17', NULL, 4, NULL),
(34, 2, 'I1', 'Non-AC', 8, 1, 1, '2025-06-02 00:12:57', NULL, 4, NULL),
(35, 2, 'I2', 'Non-AC', 8, 2, 1, '2025-06-02 00:13:34', NULL, 4, NULL),
(36, 2, 'I3', 'Non-AC', 8, 3, 1, '2025-06-02 00:14:12', NULL, 4, NULL),
(37, 2, 'I4', 'Non-AC', 8, 4, 1, '2025-06-02 00:14:33', NULL, 4, NULL),
(38, 2, 'J1', 'Non-AC', 9, 1, 1, '2025-06-02 00:15:06', NULL, 4, NULL),
(39, 2, 'J2', 'Non-AC', 9, 2, 1, '2025-06-02 00:15:29', NULL, 4, NULL),
(40, 2, 'J3', 'Non-AC', 9, 3, 1, '2025-06-02 00:15:55', NULL, 4, NULL),
(41, 2, 'J4', 'Non-AC', 9, 4, 1, '2025-06-02 00:16:20', NULL, 4, NULL),
(42, 11, 'A1', 'AC', 0, 1, 1, '2025-06-02 11:48:32', NULL, 4, NULL),
(43, 11, 'A2', 'AC', 0, 2, 1, '2025-06-02 11:49:22', NULL, 4, NULL),
(44, 11, 'A3', 'AC', 0, 3, 1, '2025-06-02 11:49:48', NULL, 4, NULL),
(45, 11, 'A4', 'AC', 0, 4, 1, '2025-06-02 11:50:15', NULL, 4, NULL),
(46, 11, 'B1', 'AC', 1, 1, 1, '2025-06-02 11:50:38', NULL, 4, NULL),
(47, 11, 'B2', 'AC', 1, 2, 1, '2025-06-02 11:51:05', NULL, 4, NULL),
(48, 11, 'B3', 'AC', 1, 3, 1, '2025-06-02 11:51:31', NULL, 4, NULL),
(49, 11, 'B4', 'AC', 1, 4, 1, '2025-06-02 11:51:50', NULL, 4, NULL),
(50, 11, 'C1', 'AC', 2, 1, 1, '2025-06-02 11:52:24', NULL, 4, NULL),
(51, 11, 'C2', 'AC', 2, 2, 1, '2025-06-02 11:52:51', NULL, 4, NULL),
(52, 11, 'C3', 'AC', 2, 3, 1, '2025-06-02 11:53:12', NULL, 4, NULL),
(53, 11, 'C4', 'AC', 2, 4, 1, '2025-06-02 11:53:36', NULL, 4, NULL),
(54, 11, 'D1', 'AC', 3, 1, 1, '2025-06-02 11:53:57', NULL, 4, NULL),
(55, 11, 'D2', 'AC', 3, 2, 1, '2025-06-02 11:54:47', NULL, 4, NULL),
(56, 11, 'D3', 'AC', 3, 3, 1, '2025-06-02 11:55:38', NULL, 4, NULL),
(57, 11, 'D4', 'AC', 3, 4, 1, '2025-06-02 11:56:28', NULL, 4, NULL),
(58, 11, 'E1', 'AC', 4, 1, 1, '2025-06-02 11:56:58', NULL, 4, NULL),
(59, 11, 'E2', 'AC', 4, 2, 1, '2025-06-02 11:57:22', NULL, 4, NULL),
(60, 11, 'E3', 'AC', 4, 3, 1, '2025-06-02 11:58:04', NULL, 4, NULL),
(61, 11, 'E4', 'AC', 4, 4, 1, '2025-06-02 11:59:08', NULL, 4, NULL),
(62, 11, 'F1', 'AC', 5, 1, 1, '2025-06-02 11:59:32', NULL, 4, NULL),
(63, 11, 'F2', 'AC', 5, 2, 1, '2025-06-02 12:00:25', NULL, 4, NULL),
(64, 11, 'F3', 'AC', 5, 3, 1, '2025-06-02 12:00:56', NULL, 4, NULL),
(65, 11, 'F4', 'AC', 5, 4, 1, '2025-06-02 12:01:25', '2025-06-02 12:01:59', 4, 4),
(66, 11, 'G1', 'AC', 6, 1, 1, '2025-06-02 12:02:44', NULL, 4, NULL),
(67, 11, 'G2', 'AC', 6, 2, 1, '2025-06-02 12:03:11', NULL, 4, NULL),
(68, 11, 'G3', 'AC', 6, 3, 1, '2025-06-02 12:03:40', NULL, 4, NULL),
(69, 11, 'G4', 'AC', 6, 4, 1, '2025-06-02 12:04:05', NULL, 4, NULL),
(70, 11, 'H1', 'AC', 7, 1, 1, '2025-06-02 12:05:37', '2025-06-02 12:05:56', 4, 4),
(71, 11, 'H2', 'AC', 7, 2, 1, '2025-06-02 12:06:17', NULL, 4, NULL),
(72, 11, 'H3', 'AC', 7, 3, 1, '2025-06-02 12:06:37', NULL, 4, NULL),
(73, 11, 'H4', 'AC', 7, 4, 1, '2025-06-02 12:07:09', NULL, 4, NULL),
(74, 11, 'I1', 'AC', 8, 1, 1, '2025-06-02 12:07:34', NULL, 4, NULL),
(75, 11, 'I2', 'AC', 8, 2, 1, '2025-06-02 12:08:04', '2025-06-02 12:11:46', 4, 4),
(76, 11, 'I3', 'AC', 8, 3, 1, '2025-06-02 12:08:27', '2025-06-02 12:11:30', 4, 4),
(77, 11, 'I4', 'AC', 8, 4, 1, '2025-06-02 12:08:58', NULL, 4, NULL),
(78, 11, 'J1', 'AC', 9, 1, 1, '2025-06-02 12:09:41', NULL, 4, NULL),
(79, 11, 'J2', 'AC', 9, 2, 1, '2025-06-02 12:10:01', NULL, 4, NULL),
(80, 11, 'J3', 'AC', 9, 3, 1, '2025-06-02 12:10:24', NULL, 4, NULL),
(81, 11, 'J4', 'AC', 9, 4, 1, '2025-06-02 12:10:46', NULL, 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seatfare`
--

CREATE TABLE `seatfare` (
  `id` int(11) NOT NULL,
  `route_id` int(11) DEFAULT NULL,
  `seat_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 active 0 deleted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `fare` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seatfare`
--

INSERT INTO `seatfare` (`id`, `route_id`, `seat_id`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`, `fare`) VALUES
(1, 16, 0, 1, '2025-06-01 02:28:07', NULL, 5, NULL, 500);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `schedule_id` int(11) DEFAULT NULL,
  `ticket_qty` int(11) DEFAULT NULL,
  `total_price` decimal(10,0) DEFAULT NULL,
  `discount` decimal(10,0) DEFAULT NULL,
  `vat` decimal(10,0) DEFAULT NULL,
  `grand_total` decimal(10,0) DEFAULT NULL,
  `ticket_status` int(11) DEFAULT NULL,
  `payment_type` int(11) DEFAULT NULL,
  `payment_status` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 active 0 deleted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `user_id`, `schedule_id`, `ticket_qty`, `total_price`, `discount`, `vat`, `grand_total`, `ticket_status`, `payment_type`, `payment_status`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 1, 5, 2, 0, 0, 0, 0, 1, 1, 1, 0, '2025-06-02 15:19:20', '2025-06-02 15:44:20', 4, 4),
(2, 2, 5, 3, 2000, 100, 89, 1989, 1, 1, 1, 0, '2025-06-02 15:21:38', '2025-06-02 15:44:22', 4, 4),
(3, 2, 4, 2, 2000, 150, 50, 1900, 1, 1, 1, 0, '2025-06-02 15:45:20', '2025-06-02 15:54:32', 4, 4),
(4, 2, 5, 5, 3000, 300, 200, 2900, 1, 1, 1, 1, '2025-06-02 15:48:20', '2025-06-02 15:53:27', 4, 4),
(5, 2, 5, 0, 0, 0, 0, 0, 1, 1, 1, 0, '2025-06-02 15:54:24', '2025-06-02 15:54:36', 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_details`
--

CREATE TABLE `ticket_details` (
  `id` int(11) NOT NULL,
  `ticket_id` int(11) DEFAULT NULL,
  `seat_id` int(11) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `contact_no` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 active 0 deleted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `contact_no`, `email`, `address`, `password`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(2, 'Amran', '01837131953', 'amranhossen9685@gmail.com', 'Chittagong', '123', 1, '2025-06-02 15:31:07', '2025-06-02 15:47:27', 4, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bus_company` (`bus_company_id`);

--
-- Indexes for table `buscompany`
--
ALTER TABLE `buscompany`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_type`
--
ALTER TABLE `payment_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_access`
--
ALTER TABLE `role_access`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule_counter`
--
ALTER TABLE `schedule_counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seatfare`
--
ALTER TABLE `seatfare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_details`
--
ALTER TABLE `ticket_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `buscompany`
--
ALTER TABLE `buscompany`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment_type`
--
ALTER TABLE `payment_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role_access`
--
ALTER TABLE `role_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `schedule_counter`
--
ALTER TABLE `schedule_counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `seatfare`
--
ALTER TABLE `seatfare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ticket_details`
--
ALTER TABLE `ticket_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bus`
--
ALTER TABLE `bus`
  ADD CONSTRAINT `fk_bus_company` FOREIGN KEY (`bus_company_id`) REFERENCES `buscompany` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
