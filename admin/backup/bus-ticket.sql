-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2025 at 12:16 PM
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
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `name`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 'Dhaka', 1, NULL, NULL, NULL, NULL, NULL),
(2, 'Faridpur', 1, NULL, NULL, NULL, NULL, NULL),
(3, 'Gazipur', 1, NULL, NULL, NULL, NULL, NULL),
(4, 'Gopalganj', 1, NULL, NULL, NULL, NULL, NULL),
(5, 'Jamalpur', 1, NULL, NULL, NULL, NULL, NULL),
(6, 'Kishoreganj', 1, NULL, NULL, NULL, NULL, NULL),
(7, 'Madaripur', 1, NULL, NULL, NULL, NULL, NULL),
(8, 'Manikganj', 1, NULL, NULL, NULL, NULL, NULL),
(9, 'Munshiganj', 1, NULL, NULL, NULL, NULL, NULL),
(10, 'Mymensingh', 1, NULL, NULL, NULL, NULL, NULL),
(11, 'Narayanganj', 1, NULL, NULL, NULL, NULL, NULL),
(12, 'Narsingdi', 1, NULL, NULL, NULL, NULL, NULL),
(13, 'Netrokona', 1, NULL, NULL, NULL, NULL, NULL),
(14, 'Rajbari', 1, NULL, NULL, NULL, NULL, NULL),
(15, 'Shariatpur', 1, NULL, NULL, NULL, NULL, NULL),
(16, 'Sherpur', 1, NULL, NULL, NULL, NULL, NULL),
(17, 'Tangail', 1, NULL, NULL, NULL, NULL, NULL),
(18, 'Bogra', 1, NULL, NULL, NULL, NULL, NULL),
(19, 'Joypurhat', 1, NULL, NULL, NULL, NULL, NULL),
(20, 'Naogaon', 1, NULL, NULL, NULL, NULL, NULL),
(21, 'Natore', 1, NULL, NULL, NULL, NULL, NULL),
(22, 'Nawabganj', 1, NULL, NULL, NULL, NULL, NULL),
(23, 'Pabna', 1, NULL, NULL, NULL, NULL, NULL),
(24, 'Rajshahi', 1, NULL, NULL, NULL, NULL, NULL),
(25, 'Sirajgonj', 1, NULL, NULL, NULL, NULL, NULL),
(26, 'Dinajpur', 1, NULL, NULL, NULL, NULL, NULL),
(27, 'Gaibandha', 1, NULL, NULL, NULL, NULL, NULL),
(28, 'Kurigram', 1, NULL, NULL, NULL, NULL, NULL),
(29, 'Lalmonirhat', 1, NULL, NULL, NULL, NULL, NULL),
(30, 'Nilphamari', 1, NULL, NULL, NULL, NULL, NULL),
(31, 'Panchagarh', 1, NULL, NULL, NULL, NULL, NULL),
(32, 'Rangpur', 1, NULL, NULL, NULL, NULL, NULL),
(33, 'Thakurgaon', 1, NULL, NULL, NULL, NULL, NULL),
(34, 'Barguna', 1, NULL, NULL, NULL, NULL, NULL),
(35, 'Barisal', 1, NULL, NULL, NULL, NULL, NULL),
(36, 'Bhola', 1, NULL, NULL, NULL, NULL, NULL),
(37, 'Jhalokati', 1, NULL, NULL, NULL, NULL, NULL),
(38, 'Patuakhali', 1, NULL, NULL, NULL, NULL, NULL),
(39, 'Pirojpur', 1, NULL, NULL, NULL, NULL, NULL),
(40, 'Bandarban', 1, NULL, NULL, NULL, NULL, NULL),
(41, 'Brahmanbaria', 1, NULL, NULL, NULL, NULL, NULL),
(42, 'Chandpur', 1, NULL, NULL, NULL, NULL, NULL),
(43, 'Chittagong', 1, NULL, NULL, NULL, NULL, NULL),
(44, 'Comilla', 1, NULL, NULL, NULL, NULL, NULL),
(45, 'Cox\'\'s Bazar', 1, NULL, NULL, NULL, NULL, NULL),
(46, 'Feni', 1, NULL, NULL, NULL, NULL, NULL),
(47, 'Khagrachari', 1, NULL, NULL, NULL, NULL, NULL),
(48, 'Lakshmipur', 1, NULL, NULL, NULL, NULL, NULL),
(49, 'Noakhali', 1, NULL, NULL, NULL, NULL, NULL),
(50, 'Rangamati', 1, NULL, NULL, NULL, NULL, NULL),
(51, 'Habiganj', 1, NULL, NULL, NULL, NULL, NULL),
(52, 'Maulvibazar', 1, NULL, NULL, NULL, NULL, NULL),
(53, 'Sunamganj', 1, NULL, NULL, NULL, NULL, NULL),
(54, 'Sylhet', 1, NULL, NULL, NULL, NULL, NULL),
(55, 'Bagerhat', 1, NULL, NULL, NULL, NULL, NULL),
(56, 'Chuadanga', 1, NULL, NULL, NULL, NULL, NULL),
(57, 'Jessore', 1, NULL, NULL, NULL, NULL, NULL),
(58, 'Jhenaidah', 1, NULL, NULL, NULL, NULL, NULL),
(59, 'Khulna', 1, NULL, NULL, NULL, NULL, NULL),
(60, 'Kushtia', 1, NULL, NULL, NULL, NULL, NULL),
(61, 'Magura', 1, NULL, NULL, NULL, NULL, NULL),
(62, 'Meherpur', 1, NULL, NULL, NULL, NULL, NULL),
(63, 'Narail', 1, NULL, NULL, NULL, NULL, NULL),
(64, 'Satkhira', 1, NULL, NULL, NULL, NULL, NULL),
(65, 'Barishal', 1, '2025-06-15 08:35:07', 1, NULL, NULL, NULL),
(66, 'Barishal', 0, '2025-06-15 08:35:19', 1, NULL, 0, '2025-06-26 07:24:32'),
(67, 'Barishal', 0, '2025-06-15 08:35:47', 1, '2025-06-26 07:22:10', 0, '2025-06-26 07:24:25'),
(68, 'Amran', 0, '2025-06-26 08:41:39', 1, NULL, 0, '2025-06-26 08:41:41');

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `name`, `email`, `contact`, `photo`, `username`, `password`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, NULL, 'kamal@gmail.com', NULL, NULL, 'kamal', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, '2024-06-10 10:09:14', NULL, NULL, NULL, NULL),
(2, '', 'sohana@gmail.com', '', '', 'sohana', 'fc1200c7a7aa52109d762a9f005b149abef01479', 1, '2024-06-10 10:12:06', NULL, '2025-06-26 08:45:23', 1, NULL),
(3, 'Amran', 'amran@gmail.com', '', '', 'amran', '123', 0, '2025-06-26 08:42:38', 0, NULL, 0, '2025-06-26 08:43:24'),
(6, '', '', '', '', 'amran', '123', 0, '2025-06-26 08:46:03', 0, NULL, 0, '2025-06-26 08:46:06'),
(14, '', 'amran1@gmail.com', '', '', 'amran', '123', 1, '2025-06-26 08:54:51', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `counter_name` varchar(255) DEFAULT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `area_id` int(11) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `division_id` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `counter_name`, `contact_no`, `area_id`, `district_id`, `division_id`, `address`, `contact_person`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 'Dampara', '015486931', 43, 43, 7, 'Garibullahshah,GEC', 'Sohana', 1, '2024-07-13 06:56:25', 1, NULL, NULL, NULL),
(2, 'New Market', '01348762', 43, 43, 7, 'BRTC', 'Tanim', 1, '2024-07-13 06:58:27', 1, NULL, NULL, NULL),
(3, 'A.K Khan Road', '0410258662', 43, 43, 7, 'AKborshah', 'Mukut', 1, '2024-07-13 06:59:16', 1, NULL, NULL, NULL),
(4, 'Gabtoli', '01658795', 1, 1, 9, 'Gabtoli Bus Stand', 'Bappy', 1, '2024-07-13 07:00:55', 1, NULL, NULL, NULL),
(5, 'Saidabad', '0134789', 1, 1, 9, 'Saidabad Bus Stand', 'Tanbhir', 1, '2024-07-13 07:01:33', 1, NULL, NULL, NULL),
(6, 'Komolapur', '0139745', 1, 1, 9, 'Komolapur Stand', 'Nur Khan', 1, '2024-07-13 07:02:11', 1, NULL, NULL, NULL),
(7, 'Jinda Bazar', '01579335', 54, 54, 8, 'Jinda Bazar Road', 'Mamun', 1, '2024-07-13 07:03:12', 1, NULL, NULL, NULL),
(8, 'Boro Eidgah', '01364786524', 54, 54, 8, 'Ponchopukur', 'Julfiquer', 0, '2024-07-13 07:03:59', 1, NULL, 0, '2025-06-26 07:26:41'),
(9, 'Chapainaobgonjoooo', '01876635583', 24, 24, 11, 'Aampara moor, Chapai', 'Fahim', 0, '2024-07-14 02:57:48', 1, '2025-06-26 08:55:30', 0, '2025-06-26 08:55:34'),
(10, 'Saiedabad', '01364786524', 1, 1, 9, 'Saidabad Bus Stand', 'Julfiquerr', 1, '2024-07-14 04:19:59', 1, '2025-06-26 10:39:07', 1, '2025-06-26 07:25:39');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `coupon_code` varchar(20) DEFAULT NULL,
  `validity_date` datetime DEFAULT NULL,
  `amount_type` int(11) DEFAULT NULL,
  `amount` decimal(8,2) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`id`, `name`, `coupon_code`, `validity_date`, `amount_type`, `amount`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(5, 'Eid offer', 'EID2025', '2025-06-30 00:00:00', 2, 100.00, 0, '2025-06-26 11:23:03', 1, '2025-06-26 11:32:59', 1, '2025-06-26 11:35:16'),
(6, 'New Year  Offer', 'NEW25', '2025-06-22 12:00:00', 1, 5.00, 1, '2025-06-26 11:34:25', 1, '2025-06-26 11:36:32', 1, '2025-06-26 11:34:38'),
(7, 'Eid offer', 'EID25', '2025-06-30 00:00:00', 1, 5.00, 1, '2025-06-26 11:40:49', 1, NULL, NULL, NULL),
(8, 'Utshob Offer', 'UT11', '2025-06-30 12:00:00', 2, 85.00, 1, '2025-06-26 11:52:19', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `contact_no`, `password`, `address`, `email`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 'Shafiq Tanim', '01348762', NULL, NULL, 'ahmedmukut19@gmail.com', 1, '2024-07-14 03:56:26', 1, NULL, NULL, NULL),
(2, 'Ibrahim khalil', '0156669998', '356a192b7913b04c54574d18c28d46e6395428ab', '2no Gate', 'kamal@yahoo.com', 1, NULL, NULL, NULL, NULL, NULL),
(5, 'kamal', '015', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2no Gate', 'ether_sb@yahoo.com', 1, NULL, NULL, '2025-06-26 09:02:01', 0, NULL),
(7, 'KAMAL', '0156669998', NULL, NULL, NULL, 0, NULL, NULL, '2024-08-20 08:48:02', 0, '2025-06-26 07:57:51'),
(8, 'Amran', '01837131953', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Chandgaon', 'amran@gmail.com', 0, NULL, NULL, '2025-06-26 08:55:44', 0, '2025-06-26 08:55:50'),
(9, 'Amrann', '01837131953', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Chandgaon', 'kamal@gmail.com', 0, NULL, NULL, '2025-06-26 07:39:05', 0, '2025-06-26 07:39:25'),
(12, 'Khalil', '0183158552', NULL, 'Chattogram', 'khalil@gmail.com', 0, '2025-06-26 09:01:20', 1, NULL, 0, '2025-06-26 09:01:33');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `district_name` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `district_name`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 'Dhaka', 1, NULL, NULL, '2025-06-26 07:58:05', 1, NULL),
(2, 'Faridpur', 1, NULL, NULL, NULL, NULL, NULL),
(3, 'Gazipur', 1, NULL, NULL, NULL, NULL, NULL),
(4, 'Gopalganj', 1, NULL, NULL, NULL, NULL, NULL),
(5, 'Jamalpur', 1, NULL, NULL, NULL, NULL, NULL),
(6, 'Kishoreganj', 1, NULL, NULL, NULL, NULL, NULL),
(7, 'Madaripur', 1, NULL, NULL, NULL, NULL, NULL),
(8, 'Manikganj', 1, NULL, NULL, NULL, NULL, NULL),
(9, 'Munshiganj', 1, NULL, NULL, NULL, NULL, NULL),
(10, 'Mymensingh', 1, NULL, NULL, NULL, NULL, NULL),
(11, 'Narayanganj', 1, NULL, NULL, NULL, NULL, NULL),
(12, 'Narsingdi', 1, NULL, NULL, NULL, NULL, NULL),
(13, 'Netrokona', 1, NULL, NULL, NULL, NULL, NULL),
(14, 'Rajbari', 1, NULL, NULL, NULL, NULL, NULL),
(15, 'Shariatpur', 1, NULL, NULL, NULL, NULL, NULL),
(16, 'Sherpur', 1, NULL, NULL, NULL, NULL, NULL),
(17, 'Tangail', 1, NULL, NULL, NULL, NULL, NULL),
(18, 'Bogra', 1, NULL, NULL, NULL, NULL, NULL),
(19, 'Joypurhat', 1, NULL, NULL, NULL, NULL, NULL),
(20, 'Naogaon', 1, NULL, NULL, NULL, NULL, NULL),
(21, 'Natore', 1, NULL, NULL, NULL, NULL, NULL),
(22, 'Nawabganj', 1, NULL, NULL, NULL, NULL, NULL),
(23, 'Pabna', 1, NULL, NULL, NULL, NULL, NULL),
(24, 'Rajshahi', 1, NULL, NULL, NULL, NULL, NULL),
(25, 'Sirajgonj', 1, NULL, NULL, NULL, NULL, NULL),
(26, 'Dinajpur', 1, NULL, NULL, NULL, NULL, NULL),
(27, 'Gaibandha', 1, NULL, NULL, NULL, NULL, NULL),
(28, 'Kurigram', 1, NULL, NULL, NULL, NULL, NULL),
(29, 'Lalmonirhat', 1, NULL, NULL, NULL, NULL, NULL),
(30, 'Nilphamari', 1, NULL, NULL, NULL, NULL, NULL),
(31, 'Panchagarh', 1, NULL, NULL, NULL, NULL, NULL),
(32, 'Rangpur', 1, NULL, NULL, NULL, NULL, NULL),
(33, 'Thakurgaon', 1, NULL, NULL, NULL, NULL, NULL),
(34, 'Barguna', 1, NULL, NULL, NULL, NULL, NULL),
(35, 'Barisal', 1, NULL, NULL, NULL, NULL, NULL),
(36, 'Bhola', 1, NULL, NULL, NULL, NULL, NULL),
(37, 'Jhalokati', 1, NULL, NULL, NULL, NULL, NULL),
(38, 'Patuakhali', 1, NULL, NULL, NULL, NULL, NULL),
(39, 'Pirojpur', 1, NULL, NULL, NULL, NULL, NULL),
(40, 'Bandarban', 1, NULL, NULL, NULL, NULL, NULL),
(41, 'Brahmanbaria', 1, NULL, NULL, NULL, NULL, NULL),
(42, 'Chandpur', 1, NULL, NULL, NULL, NULL, NULL),
(43, 'Chittagong', 1, NULL, NULL, NULL, NULL, NULL),
(44, 'Comilla', 1, NULL, NULL, NULL, NULL, NULL),
(45, 'Cox\'\'s Bazar', 1, NULL, NULL, NULL, NULL, NULL),
(46, 'Feni', 1, NULL, NULL, NULL, NULL, NULL),
(47, 'Khagrachari', 1, NULL, NULL, NULL, NULL, NULL),
(48, 'Lakshmipur', 1, NULL, NULL, NULL, NULL, NULL),
(49, 'Noakhali', 1, NULL, NULL, NULL, NULL, NULL),
(50, 'Rangamati', 1, NULL, NULL, NULL, NULL, NULL),
(51, 'Habiganj', 1, NULL, NULL, NULL, NULL, NULL),
(52, 'Maulvibazar', 1, NULL, NULL, NULL, NULL, NULL),
(53, 'Sunamganj', 1, NULL, NULL, NULL, NULL, NULL),
(54, 'Sylhet', 1, NULL, NULL, NULL, NULL, NULL),
(55, 'Bagerhat', 1, NULL, NULL, NULL, NULL, NULL),
(56, 'Chuadanga', 1, NULL, NULL, NULL, NULL, NULL),
(57, 'Jessore', 1, NULL, NULL, NULL, NULL, NULL),
(58, 'Jhenaidah', 1, NULL, NULL, NULL, NULL, NULL),
(59, 'Khulna', 1, NULL, NULL, NULL, NULL, NULL),
(60, 'Kushtia', 1, NULL, NULL, NULL, NULL, NULL),
(61, 'Magura', 0, NULL, NULL, NULL, 0, '2025-06-26 09:02:18'),
(62, 'Meherpur', 1, NULL, NULL, NULL, NULL, NULL),
(63, 'Narail', 0, NULL, NULL, NULL, 0, '2025-06-26 08:00:23'),
(64, 'Satkhira', 1, NULL, NULL, '2025-06-26 09:02:13', 1, '2025-06-26 07:58:12'),
(65, 'Magura', 1, '2025-06-26 09:02:31', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `id` int(11) NOT NULL,
  `division_name` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`id`, `division_name`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, '1', 0, '2024-06-23 05:04:52', 1, '2025-06-26 08:01:11', 0, '2025-06-26 08:01:38'),
(2, 'chittagong', 1, '2024-06-23 06:10:57', 1, NULL, 1, '2024-06-30 08:33:27'),
(3, '', 0, '2024-06-23 06:11:13', 1, NULL, 0, '2025-06-26 08:01:43'),
(4, '', 0, '2024-06-23 06:11:26', 1, NULL, 0, '2025-06-26 08:01:45'),
(5, 'chittagong', 1, '2024-06-23 06:11:32', 1, NULL, 1, '2024-06-30 08:33:23'),
(6, 'chittagong', 1, '2024-06-23 07:24:33', 1, NULL, 1, '2024-06-30 08:33:21'),
(7, 'Chittagong', 1, '2024-06-30 08:33:12', 1, '2024-07-01 06:52:09', 1, NULL),
(8, 'Sylhet', 1, '2024-06-30 08:33:36', 1, '2024-06-30 08:38:36', 1, NULL),
(9, 'Dhaka', 1, '2024-06-30 08:33:56', 1, '2024-06-30 08:38:41', 1, NULL),
(10, 'Khulna', 1, '2024-06-30 08:37:16', 1, '2025-06-15 08:29:35', 1, NULL),
(11, 'Rajshahi', 1, '2024-06-30 08:37:35', 1, NULL, 0, '2025-06-15 08:26:30'),
(12, 'Mymensing', 1, '2024-06-30 08:37:57', 1, NULL, 0, '2025-06-15 08:26:30'),
(13, 'Rangpur', 1, '2024-06-30 08:38:13', 1, '2024-06-30 08:38:58', 0, '2025-06-15 08:26:29'),
(14, 'Khulna', 1, '2024-06-30 08:39:16', 1, '2025-06-15 08:26:26', 0, '2025-06-15 08:26:28'),
(15, 'Barishal', 1, '2025-06-15 08:38:36', 1, '2025-06-15 08:41:23', 0, '2025-06-15 08:42:30'),
(16, 'Mymensing', 1, '2025-06-15 08:40:21', 1, NULL, NULL, NULL),
(17, 'Rangpur', 1, '2025-06-15 08:40:56', 1, '2025-06-26 09:03:45', 1, NULL),
(18, 'Rangpur', 0, '2025-06-26 09:03:53', 1, NULL, 0, '2025-06-26 09:03:55');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `from_area` int(11) DEFAULT NULL,
  `break_area` int(11) DEFAULT NULL,
  `to_area` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `name`, `from_area`, `break_area`, `to_area`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 'Dhaka To Chittagong', 1, 44, 43, 1, NULL, NULL, '2025-06-26 08:56:13', 1, NULL),
(2, 'Dhaka To Khulna', 1, 42, 59, 0, NULL, NULL, '2025-06-26 08:20:57', 1, NULL),
(3, 'Dhaka To Sylhet', 1, 41, 54, 0, NULL, NULL, '2025-06-26 08:20:59', 1, NULL),
(4, 'Dhaka To Barisal', 1, 42, 36, 1, NULL, NULL, '2025-06-26 08:19:47', 1, NULL),
(5, 'Dhaka To Rajshahi', 1, 17, 24, 1, NULL, NULL, NULL, NULL, NULL),
(6, 'Dhaka To Rangpur', 1, 25, 32, 1, NULL, NULL, NULL, NULL, NULL),
(7, 'Dhaka To Mymensingh', 1, 0, 10, 1, NULL, NULL, NULL, NULL, NULL),
(8, 'Chittagong To Khulna', 43, 42, 59, 1, NULL, NULL, NULL, NULL, NULL),
(9, 'Chittagong To Sylhet', 43, 1, 54, 1, NULL, NULL, NULL, NULL, NULL),
(10, 'Chittagong To Barisal', 43, 42, 35, 1, NULL, NULL, NULL, NULL, NULL),
(11, 'Chittagong To Rajshahi', 43, 25, 24, 1, NULL, NULL, NULL, NULL, NULL),
(12, 'Chittagong To Rangpur', 43, 25, 32, 1, NULL, NULL, NULL, NULL, NULL),
(13, 'Chittagong To Mymensingh', 43, 44, 10, 1, NULL, NULL, NULL, NULL, NULL),
(14, 'Chittagong To Dhaka', 43, 44, 1, 1, NULL, NULL, NULL, NULL, NULL),
(15, 'Sylhet To Khulna', 54, 1, 59, 1, NULL, NULL, NULL, NULL, NULL),
(16, 'Sylhet To Chittagong', 54, 1, 43, 1, NULL, NULL, NULL, NULL, NULL),
(17, 'Sylhet To Barisal', 54, 1, 35, 1, NULL, NULL, NULL, NULL, NULL),
(18, 'Sylhet To Rajshahi', 54, 1, 24, 1, NULL, NULL, NULL, NULL, NULL),
(19, 'Sylhet To Rangpur', 54, 1, 32, 1, NULL, NULL, NULL, NULL, NULL),
(20, 'Sylhet To Mymensingh', 54, 0, 10, 1, NULL, NULL, NULL, NULL, NULL),
(21, 'Sylhet To Dhaka', 54, 48, 1, 1, NULL, NULL, '2025-06-26 08:15:06', 1, NULL),
(22, 'Dhaka To Chittagong', 1, 44, 43, 0, '2024-07-14 04:18:47', 1, '2025-06-26 08:22:18', 1, '2025-06-26 08:23:46'),
(23, NULL, 43, 44, 1, 0, '2025-06-26 08:57:02', 1, NULL, 1, '2025-06-26 09:05:16'),
(24, NULL, 43, 24, 1, 0, '2025-06-26 09:04:42', 1, NULL, 1, '2025-06-26 09:05:13'),
(25, NULL, 43, 44, 1, 0, '2025-06-26 09:05:58', 1, NULL, 1, '2025-06-26 09:23:33'),
(26, 'Chittagong to Dhaka', 43, 44, 1, 1, '2025-06-26 09:23:23', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `couch_number` varchar(255) DEFAULT NULL,
  `vehicle_id` int(11) DEFAULT NULL,
  `route_id` int(11) DEFAULT NULL,
  `departure_time` datetime DEFAULT NULL,
  `departure_counter` int(11) DEFAULT NULL,
  `arrival_time` datetime DEFAULT NULL,
  `arrival_counter` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `couch_number`, `vehicle_id`, `route_id`, `departure_time`, `departure_counter`, `arrival_time`, `arrival_counter`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, '111', 1, 1, '2024-08-22 10:00:00', 6, '2024-08-22 15:00:00', 1, 1, '2024-07-13 07:07:22', 1, '2025-06-26 08:24:43', 0, '2025-06-26 08:24:48'),
(2, '222', 2, 1, '2024-08-22 12:00:00', 4, '2024-08-22 17:00:00', 2, 1, '2024-07-13 07:09:37', 1, '2024-07-28 14:49:37', 1, NULL),
(3, '333', 3, 9, '2024-08-22 22:00:00', 3, '2024-08-23 06:00:00', 8, 1, '2024-07-13 07:11:24', 1, '2024-07-28 14:49:59', 1, NULL),
(4, '444', 4, 9, '2024-08-23 10:00:00', 1, '2024-08-23 18:00:00', 7, 1, '2024-07-13 07:12:50', 1, '2024-07-28 14:50:24', 1, NULL),
(5, '555', 5, 16, '2024-08-26 17:00:00', 7, '2024-08-27 02:00:00', 3, 1, '2024-07-13 07:16:55', 1, '2024-07-28 14:50:53', 1, NULL),
(6, '666', 6, 21, '2024-08-27 18:00:00', 8, '2024-08-27 12:00:00', 6, 1, '2024-07-13 07:20:05', 1, '2024-07-28 14:51:13', 1, NULL),
(7, '777', 8, 5, '2024-08-30 17:00:00', 5, '2024-08-30 23:00:00', 9, 1, '2024-07-14 02:59:09', 1, '2024-07-28 14:51:35', 1, NULL),
(8, '888', 1, 1, '2024-08-22 09:46:00', 4, '2024-08-22 09:46:00', 2, 1, '2024-07-14 03:47:21', 1, '2024-07-28 14:52:03', 1, NULL),
(9, '9', 8, 1, '2025-06-18 17:50:00', 64, '2025-06-19 18:00:00', 22, 1, '2024-07-14 05:46:44', 1, '2025-06-17 09:18:15', 1, NULL),
(10, '701', 1, 1, '2025-06-22 14:00:00', 10, '2025-06-21 21:56:00', 1, 1, '2025-06-21 05:57:31', 1, '2025-06-21 05:58:52', 1, NULL),
(11, '702', 2, 1, '2025-06-22 13:00:00', 10, '2025-06-22 18:00:00', 1, 1, '2025-06-21 06:44:44', 1, '2025-06-26 09:24:11', 1, NULL),
(12, '703', 3, 1, '2025-06-22 12:00:00', 10, '2025-06-22 17:00:00', 1, 0, '2025-06-21 06:46:59', 1, '2025-06-26 08:24:16', 0, '2025-06-26 08:26:02'),
(13, '703', 2, 1, '2025-06-30 08:00:00', 10, '2025-06-30 14:00:00', 1, NULL, '2025-06-26 08:41:07', 1, NULL, NULL, NULL),
(14, '703', 2, 1, '2025-06-30 08:00:00', 10, '2025-06-30 14:00:00', 1, NULL, '2025-06-26 09:25:24', 1, NULL, NULL, NULL),
(15, '704', 2, 1, '2025-06-30 08:25:00', 10, '2025-06-30 14:25:00', 1, NULL, '2025-06-26 09:26:16', 1, NULL, NULL, NULL),
(16, '705', 2, 1, '2025-06-30 13:40:00', 10, '2025-06-30 20:40:00', 1, 1, '2025-06-26 09:40:57', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `Status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`id`, `name`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `Status`) VALUES
(1, 'A1', '2024-06-23 09:03:52', 1, NULL, NULL, NULL, 1),
(2, 'A2', '2024-06-23 09:03:59', 1, NULL, NULL, NULL, 1),
(3, 'A3', '2024-06-29 09:56:25', 1, NULL, NULL, NULL, 1),
(4, 'A4', '2024-06-29 09:57:37', 1, NULL, NULL, NULL, 1),
(5, 'B1', '2024-06-29 09:57:46', 1, NULL, NULL, NULL, 1),
(6, 'B2', '2024-06-29 09:57:52', 1, NULL, NULL, NULL, 1),
(7, 'B3', '2024-06-29 09:57:58', 1, NULL, NULL, NULL, 1),
(8, 'B4', '2024-06-29 09:58:05', 1, NULL, NULL, NULL, 1),
(9, 'C1', '2024-06-29 09:58:12', 1, NULL, NULL, NULL, 1),
(10, 'C2', '2024-06-29 09:58:20', 1, NULL, NULL, NULL, 1),
(11, 'C3', '2024-06-29 09:58:25', 1, NULL, NULL, NULL, 1),
(12, 'C4', '2024-06-29 09:58:30', 1, NULL, NULL, NULL, 1),
(13, 'D1', '2024-06-29 09:58:36', 1, NULL, NULL, NULL, 1),
(14, 'D2', '2024-06-29 09:58:48', 1, NULL, NULL, NULL, 1),
(15, 'D3', '2024-06-29 09:58:55', 1, NULL, NULL, NULL, 1),
(16, 'D4', '2024-06-29 09:59:00', 1, NULL, NULL, NULL, 1),
(17, 'E1', '2024-06-29 09:59:08', 1, NULL, NULL, NULL, 1),
(18, 'E2', '2024-06-29 09:59:12', 1, NULL, NULL, NULL, 1),
(19, 'E3', '2024-06-29 09:59:15', 1, NULL, NULL, NULL, 1),
(20, 'E4', '2024-06-29 09:59:19', 1, NULL, NULL, NULL, 1),
(21, 'F1', '2024-06-29 09:59:42', 1, NULL, NULL, NULL, 1),
(22, 'F2', '2024-06-29 09:59:45', 1, NULL, 1, '2024-06-29 10:04:59', 1),
(23, 'F3', '2024-06-29 09:59:49', 1, NULL, NULL, NULL, 1),
(24, 'F4', '2024-06-29 09:59:54', 1, NULL, 1, '2025-06-26 08:35:45', 0),
(25, 'G2', '2024-06-29 10:00:04', 1, '2025-06-26 08:26:27', 1, NULL, 0),
(26, 'G2', '2024-06-29 10:00:07', 1, NULL, NULL, NULL, NULL),
(27, 'G3', '2024-06-29 10:00:11', 1, NULL, NULL, NULL, NULL),
(28, 'G4', '2024-06-29 10:00:15', 1, NULL, NULL, NULL, NULL),
(29, 'H1', '2024-06-29 10:00:20', 1, NULL, NULL, NULL, NULL),
(30, 'H2', '2024-06-29 10:00:24', 1, NULL, NULL, NULL, NULL),
(31, 'H3', '2024-06-29 10:00:38', 1, NULL, NULL, NULL, NULL),
(32, 'H4', '2024-06-29 10:00:46', 1, NULL, NULL, NULL, NULL),
(33, 'I1', '2024-06-29 10:00:52', 1, NULL, NULL, NULL, NULL),
(34, 'I2', '2024-06-29 10:00:56', 1, NULL, NULL, NULL, NULL),
(35, 'I3', '2024-06-29 10:00:59', 1, NULL, NULL, NULL, NULL),
(36, 'I4', '2024-06-29 10:01:03', 1, NULL, NULL, NULL, NULL),
(37, 'J1', '2024-06-29 10:01:08', 1, NULL, NULL, NULL, NULL),
(38, 'J2', '2024-06-29 10:01:12', 1, NULL, NULL, NULL, NULL),
(39, 'J3', '2024-06-29 10:01:15', 1, NULL, NULL, NULL, NULL),
(40, 'J4', '2024-06-29 10:01:18', 1, NULL, NULL, NULL, NULL),
(47, 'F4', '2025-06-26 08:35:52', 0, NULL, NULL, NULL, NULL),
(48, 'G1', '2025-06-26 08:36:14', 0, NULL, NULL, NULL, NULL),
(49, 'F4', '2025-06-26 08:38:20', 0, NULL, NULL, NULL, NULL),
(50, 'F4', '2025-06-26 08:38:42', 0, NULL, NULL, NULL, NULL),
(51, 'F4', '2025-06-26 09:41:56', 0, NULL, NULL, NULL, NULL),
(52, 'F4', '2025-06-26 09:42:42', 0, NULL, NULL, NULL, NULL),
(53, 'F4', '2025-06-26 09:43:44', 0, NULL, NULL, NULL, 1),
(54, 'G1', '2025-06-26 09:44:04', 0, '2025-06-26 09:44:43', 1, '2025-06-26 09:44:46', 0);

-- --------------------------------------------------------

--
-- Table structure for table `seat_book`
--

CREATE TABLE `seat_book` (
  `id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `total_seat` int(11) NOT NULL,
  `other_charge` decimal(10,2) NOT NULL,
  `coupon_code` varchar(20) NOT NULL,
  `discount` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `request_cancel` int(11) DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seat_book`
--

INSERT INTO `seat_book` (`id`, `vehicle_id`, `schedule_id`, `customer_id`, `name`, `email`, `phone`, `address`, `transaction_id`, `currency`, `total_amount`, `total_seat`, `other_charge`, `coupon_code`, `discount`, `status`, `request_cancel`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 1, 1, 0, 'Ibrahim khalil', 'kamal@yahoo.com', '0156669998', '2no Gate', 'SSLCZ_TEST_669620985f2f5', 'BDT', 1300.00, 2, 40.00, '', 0, 1, 0, '2024-07-16 07:26:16', 1, NULL, NULL, NULL),
(2, 1, 1, 0, 'sohana afsana', 'sohanaafsana16@gmail.com', '01876635583', 'Shishu kabarsthan, DC road, chawkbazar,chittagong', 'SSLCZ_TEST_669788725b866', 'BDT', 1300.00, 2, 40.00, '', 0, 1, 0, '2024-07-17 09:01:38', 1, NULL, NULL, NULL),
(3, 8, 7, 0, 'shovon', 'soufianeelhouachi@gmail.com', '01318887607', '595, Shafi Bhaban, Abdul Ali Nagar, Alankar', 'SSLCZ_TEST_66a650cdb1101', 'BDT', 4200.00, 3, 60.00, '', 0, 1, 0, '2024-07-28 14:08:13', 1, NULL, NULL, NULL),
(4, 8, 7, 0, 'shovon', 'soufianeelhouachi@gmail.com', '01318887607', '595, Shafi Bhaban, Abdul Ali Nagar, Alankar', 'SSLCZ_TEST_66a65429f235c', 'BDT', 5600.00, 4, 80.00, '', 0, 1, 0, '2024-07-28 14:22:33', 1, NULL, NULL, NULL),
(5, 1, 1, 0, 'Ibrahim khalil', 'ether_sb@yahoo.com', '0156669998', '2no Gate', 'SSLCZ_TEST_66b85b08ae395', 'BDT', 1300.00, 2, 40.00, '', 0, 1, 0, '2024-08-11 08:32:40', 1, NULL, NULL, NULL),
(6, 1, 1, 0, 'Ibrahim khalil', 'ether_sb@yahoo.com', '0156669998', '2no Gate', 'SSLCZ_TEST_66b85ec5d4a10', 'BDT', 1300.00, 2, 40.00, '', 0, 1, 0, '2024-08-11 08:48:37', 1, NULL, NULL, NULL),
(7, 1, 1, 0, 'Ibrahim khalil', 'ether_sb@yahoo.com', '0156669998', '2no Gate', 'SSLCZ_TEST_66c04664351da', 'BDT', 1300.00, 2, 40.00, '', 0, 0, 0, '2024-08-17 08:42:44', 1, NULL, NULL, NULL),
(8, 1, 1, 5, 'Ibrahim khalil', 'ether_sb@yahoo.com', '0156669998', '2no Gate', 'SSLCZ_TEST_66c047f48204d', 'BDT', 1340.00, 2, 40.00, '', 0, 1, 1, '2024-08-17 08:49:24', 1, NULL, 1, NULL),
(9, 1, 1, 5, 'Ibrahim khalil', 'ether_sb@yahoo.com', '0156669998', '2no Gate', 'SSLCZ_TEST_66c2eefc47951', 'BDT', 1340.00, 2, 40.00, '', 0, 0, 1, '2024-08-19 09:06:36', 1, NULL, 1, NULL),
(10, 8, 9, 8, 'Amran', 'amran@gmail.com', '01837131953', 'Chandgaon', 'SSLCZ_TEST_685117018dbe9', 'BDT', 2840.00, 2, 40.00, '', 0, 0, 0, '2025-06-17 09:19:29', 1, NULL, NULL, NULL),
(11, 0, 0, 8, 'Amran', 'amran@gmail.com', '01837131953', 'Chandgaon', 'SSLCZ_TEST_68511703dbfc6', 'BDT', 0.00, 0, 0.00, '', 0, 0, 0, '2025-06-17 09:19:31', 1, NULL, NULL, NULL),
(12, 3, 12, 9, 'Amran', 'kamal@gmail.com', '01837131953', 'Chandgaon', 'SSLCZ_TEST_68565541d04c7', 'BDT', 1400.00, 2, 40.00, '', 0, 1, 0, '2025-06-21 08:46:25', 1, NULL, 1, NULL),
(13, 3, 12, 9, 'Amran', 'kamal@gmail.com', '01837131953', 'Chandgaon', 'SSLCZ_TEST_68578eeeb0ed4', 'BDT', 3940.00, 4, 80.00, '', 0, 0, 0, '2025-06-22 07:04:46', 1, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seat_book_details`
--

CREATE TABLE `seat_book_details` (
  `id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `seat_book_id` int(11) NOT NULL,
  `seat_id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seat_book_details`
--

INSERT INTO `seat_book_details` (`id`, `vehicle_id`, `schedule_id`, `seat_book_id`, `seat_id`, `price`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `status`) VALUES
(1, 1, 1, 1, 1, 650.00, '2024-07-16 07:26:16', 0, NULL, 1, '2025-06-26 08:27:58', 0),
(2, 1, 1, 1, 2, 650.00, '2024-07-16 07:26:16', 0, NULL, NULL, NULL, 1),
(3, 1, 1, 2, 5, 650.00, '2024-07-17 09:01:38', 0, NULL, NULL, NULL, 1),
(4, 1, 1, 2, 6, 650.00, '2024-07-17 09:01:38', 0, NULL, NULL, NULL, 1),
(5, 8, 7, 3, 1, 1400.00, '2024-07-28 14:08:13', 0, NULL, NULL, NULL, 1),
(6, 8, 7, 3, 5, 1400.00, '2024-07-28 14:08:13', 0, NULL, NULL, NULL, 1),
(7, 8, 7, 3, 9, 1400.00, '2024-07-28 14:08:13', 0, NULL, NULL, NULL, 1),
(8, 8, 7, 4, 13, 1400.00, '2024-07-28 14:22:33', 0, NULL, NULL, NULL, 1),
(9, 8, 7, 4, 17, 1400.00, '2024-07-28 14:22:33', 0, NULL, NULL, NULL, 1),
(10, 8, 7, 4, 21, 1400.00, '2024-07-28 14:22:33', 0, NULL, NULL, NULL, 1),
(11, 8, 7, 4, 25, 1400.00, '2024-07-28 14:22:34', 0, NULL, NULL, NULL, 1),
(12, 1, 1, 5, 3, 650.00, '2024-08-11 08:32:40', 0, NULL, NULL, NULL, 1),
(13, 1, 1, 5, 7, 650.00, '2024-08-11 08:32:40', 0, NULL, NULL, NULL, 1),
(14, 1, 1, 6, 4, 650.00, '2024-08-11 08:48:37', 0, NULL, NULL, NULL, 1),
(15, 1, 1, 6, 8, 650.00, '2024-08-11 08:48:37', 0, NULL, NULL, NULL, 1),
(16, 1, 1, 7, 9, 650.00, '2024-08-17 08:42:44', 0, NULL, NULL, NULL, 1),
(17, 1, 1, 7, 10, 650.00, '2024-08-17 08:42:44', 0, NULL, NULL, NULL, 1),
(18, 1, 1, 8, 11, 650.00, '2024-08-17 08:49:24', 0, NULL, NULL, NULL, 1),
(19, 1, 1, 8, 12, 650.00, '2024-08-17 08:49:24', 0, NULL, NULL, NULL, 1),
(20, 1, 1, 9, 13, 650.00, '2024-08-19 09:06:36', 0, NULL, NULL, NULL, 1),
(21, 1, 1, 9, 14, 650.00, '2024-08-19 09:06:36', 0, NULL, NULL, NULL, 1),
(22, 8, 9, 10, 242, 1400.00, '2025-06-17 09:19:29', 8, NULL, NULL, NULL, 1),
(23, 8, 9, 10, 243, 1400.00, '2025-06-17 09:19:29', 8, NULL, NULL, NULL, 1),
(24, 3, 12, 12, 61, 680.00, '2025-06-21 08:46:25', 9, NULL, NULL, NULL, 1),
(25, 3, 12, 12, 62, 665.00, '2025-06-21 08:46:25', 9, '2025-06-26 09:46:56', 1, '2025-06-26 09:47:01', 0),
(26, 3, 12, 13, 164, 1250.00, '2025-06-22 07:04:46', 9, NULL, NULL, NULL, NULL),
(27, 3, 12, 13, 165, 1250.00, '2025-06-22 07:04:46', 9, NULL, NULL, NULL, NULL),
(28, 3, 12, 13, 73, 680.00, '2025-06-22 07:04:46', 9, NULL, NULL, NULL, NULL),
(29, 3, 12, 13, 74, 680.00, '2025-06-22 07:04:46', 9, NULL, NULL, NULL, NULL),
(30, 1, 12, 12, 25, 650.00, '2025-06-26 09:48:46', 1, NULL, NULL, NULL, NULL),
(31, 3, 12, 12, 62, 220.00, '2025-06-26 09:49:17', 1, NULL, NULL, NULL, NULL),
(32, 2, 4, 2, 4, 480.00, '2025-06-26 09:51:38', 1, '2025-06-26 11:53:30', 1, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `seat_type`
--

CREATE TABLE `seat_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seat_type`
--

INSERT INTO `seat_type` (`id`, `name`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `status`) VALUES
(1, 'Economy Class', '2024-06-23 05:05:39', 1, '2025-06-26 12:13:12', 1, '2025-06-26 08:28:45', 1),
(5, 'Business Class', '2025-06-26 12:11:09', 1, NULL, NULL, NULL, NULL),
(6, 'Business Class', '2025-06-26 12:13:26', 1, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `registration_no` varchar(255) DEFAULT NULL,
  `vehicle_type` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `name`, `registration_no`, `vehicle_type`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `status`) VALUES
(1, 'Shohag', 'sho-01', 'NON-AC', '2024-06-22 07:49:43', 1, '2025-06-21 05:17:03', 0, NULL, 1),
(2, 'Shohag Elite', 'Sho-02', 'AC', '2024-06-30 08:20:24', 1, '2024-07-06 09:06:19', 1, NULL, 1),
(3, 'Desh Travels Business Class', 'DT-01', 'AC', '2024-06-30 08:23:56', 1, NULL, NULL, NULL, 1),
(4, 'Desh Travels', 'DT-02', 'Non-AC', '2024-06-30 08:24:18', 1, NULL, NULL, NULL, 1),
(5, 'Hanif Volvo', 'HA-055', 'AC', '2024-07-06 07:15:23', 1, NULL, NULL, NULL, 1),
(6, 'Hanif', 'Ha-44', 'Non-AC', '2024-07-06 07:15:43', 1, NULL, NULL, NULL, 1),
(7, 'Unique', 'UNI-159', 'AC', '2024-07-06 09:23:20', 1, '2025-06-17 08:59:43', 0, NULL, 1),
(8, 'Silk Line Travels', 'SILK-007', 'NON-AC', '2024-07-06 09:57:40', 1, '2025-06-26 09:57:20', 0, NULL, 1),
(9, 'Sejuti', 'SE-101', 'AC', '2025-06-26 10:00:35', 1, '2025-06-26 10:01:38', 0, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_seat_type`
--

CREATE TABLE `vehicle_seat_type` (
  `id` int(11) NOT NULL,
  `vehicle_id` int(11) DEFAULT NULL,
  `seat_id` int(11) DEFAULT NULL,
  `seat_type_id` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle_seat_type`
--

INSERT INTO `vehicle_seat_type` (`id`, `vehicle_id`, `seat_id`, `seat_type_id`, `price`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `status`) VALUES
(1, 1, 1, 1, 650.00, NULL, 1, NULL, NULL, NULL, 1),
(2, 1, 2, 1, 650.00, NULL, 1, NULL, NULL, NULL, 1),
(3, 1, 3, 1, 650.00, NULL, 1, NULL, NULL, NULL, 1),
(4, 1, 4, 1, 650.00, NULL, 1, NULL, NULL, NULL, 1),
(5, 1, 5, 1, 650.00, NULL, 1, NULL, NULL, NULL, 1),
(6, 1, 6, 1, 650.00, NULL, 1, NULL, NULL, NULL, 1),
(7, 1, 7, 1, 650.00, NULL, 1, NULL, NULL, NULL, 1),
(8, 1, 8, 1, 650.00, NULL, 1, NULL, NULL, NULL, 1),
(9, 1, 9, 1, 650.00, NULL, 1, NULL, NULL, NULL, 1),
(10, 1, 10, 1, 650.00, NULL, 1, NULL, NULL, NULL, 1),
(11, 1, 11, 1, 650.00, NULL, 1, NULL, NULL, NULL, 1),
(12, 1, 12, 1, 650.00, NULL, 1, NULL, NULL, NULL, 1),
(13, 1, 13, 1, 650.00, NULL, 1, NULL, NULL, NULL, 1),
(14, 1, 14, 1, 650.00, NULL, 1, NULL, NULL, NULL, 1),
(15, 1, 15, 1, 650.00, NULL, 1, NULL, NULL, NULL, 1),
(16, 1, 16, 1, 650.00, NULL, 1, NULL, NULL, NULL, 1),
(17, 1, 17, 1, 650.00, NULL, 1, NULL, NULL, NULL, 1),
(18, 1, 18, 1, 650.00, NULL, 1, NULL, NULL, NULL, 1),
(19, 1, 19, 1, 650.00, NULL, 1, NULL, NULL, NULL, 1),
(20, 1, 20, 1, 650.00, NULL, 1, NULL, NULL, NULL, 1),
(21, 1, 21, 1, 650.00, NULL, 1, NULL, NULL, NULL, 1),
(22, 1, 22, 1, 650.00, NULL, 1, NULL, NULL, NULL, 1),
(23, 1, 23, 1, 650.00, NULL, 1, NULL, NULL, NULL, 1),
(24, 1, 24, 1, 650.00, NULL, 1, NULL, NULL, NULL, 1),
(25, 1, 25, 1, 650.00, NULL, 1, NULL, NULL, NULL, 1),
(26, 1, 26, 1, 650.00, NULL, 1, NULL, NULL, NULL, NULL),
(27, 1, 27, 1, 650.00, NULL, 1, NULL, NULL, NULL, NULL),
(28, 1, 28, 1, 650.00, NULL, 1, NULL, NULL, NULL, NULL),
(29, 1, 29, 1, 650.00, NULL, 1, NULL, NULL, NULL, NULL),
(30, 1, 30, 1, 650.00, NULL, 1, NULL, NULL, NULL, NULL),
(31, 1, 31, 1, 650.00, NULL, 1, NULL, NULL, NULL, NULL),
(32, 1, 32, 1, 650.00, NULL, 1, NULL, NULL, NULL, NULL),
(33, 1, 33, 1, 650.00, NULL, 1, NULL, NULL, NULL, NULL),
(34, 1, 34, 1, 650.00, NULL, 1, NULL, NULL, NULL, NULL),
(35, 1, 35, 1, 650.00, NULL, 1, NULL, NULL, NULL, NULL),
(36, 1, 36, 1, 650.00, NULL, 1, NULL, NULL, NULL, NULL),
(37, 1, 37, 1, 650.00, NULL, 1, NULL, NULL, NULL, NULL),
(38, 1, 38, 1, 650.00, NULL, 1, NULL, NULL, NULL, NULL),
(39, 1, 39, 1, 650.00, NULL, 1, NULL, NULL, NULL, NULL),
(40, 1, 40, 1, 650.00, NULL, 1, NULL, NULL, NULL, NULL),
(41, 3, 1, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(42, 3, 2, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(43, 3, 3, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(44, 3, 4, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(45, 3, 5, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(46, 3, 6, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(47, 3, 7, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(48, 3, 8, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(49, 3, 9, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(50, 3, 10, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(51, 3, 11, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(52, 3, 12, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(53, 3, 13, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(54, 3, 14, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(55, 3, 15, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(56, 3, 16, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(57, 3, 17, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(58, 3, 18, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(59, 3, 19, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(60, 3, 20, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(61, 3, 21, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(62, 3, 22, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(63, 3, 23, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(64, 3, 24, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(65, 3, 25, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(66, 3, 26, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(67, 3, 27, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(68, 3, 28, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(69, 3, 29, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(70, 3, 30, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(71, 3, 31, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(72, 3, 32, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(73, 3, 33, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(74, 3, 34, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(75, 3, 35, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(76, 3, 36, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(77, 3, 37, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(78, 3, 38, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(79, 3, 39, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(80, 3, 40, 1, 680.00, NULL, 1, NULL, NULL, NULL, NULL),
(81, 6, 1, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(82, 6, 2, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(83, 6, 3, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(84, 6, 4, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(85, 6, 5, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(86, 6, 6, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(87, 6, 7, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(88, 6, 8, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(89, 6, 9, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(90, 6, 10, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(91, 6, 11, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(92, 6, 12, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(93, 6, 13, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(94, 6, 14, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(95, 6, 15, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(96, 6, 16, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(97, 6, 17, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(98, 6, 18, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(99, 6, 19, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(100, 6, 20, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(101, 6, 21, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(102, 6, 22, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(103, 6, 23, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(104, 6, 24, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(105, 6, 25, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(106, 6, 26, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(107, 6, 27, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(108, 6, 28, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(109, 6, 29, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(110, 6, 30, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(111, 6, 31, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(112, 6, 32, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(113, 6, 33, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(114, 6, 34, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(115, 6, 35, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(116, 6, 36, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(117, 6, 37, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(118, 6, 38, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(119, 6, 39, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(120, 6, 40, 1, 720.00, NULL, 1, NULL, NULL, NULL, NULL),
(121, 7, 1, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(122, 7, 2, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(123, 7, 3, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(124, 7, 4, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(125, 7, 5, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(126, 7, 6, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(127, 7, 7, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(128, 7, 8, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(129, 7, 9, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(130, 7, 10, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(131, 7, 11, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(132, 7, 12, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(133, 7, 13, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(134, 7, 14, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(135, 7, 15, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(136, 7, 16, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(137, 7, 17, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(138, 7, 18, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(139, 7, 19, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(140, 7, 20, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(141, 7, 21, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(142, 7, 22, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(143, 7, 23, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(144, 7, 24, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(145, 7, 25, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(146, 7, 26, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(147, 7, 27, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(148, 7, 28, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(149, 7, 29, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(150, 7, 30, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(151, 7, 31, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(152, 7, 32, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(153, 7, 33, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(154, 7, 34, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(155, 7, 35, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(156, 7, 36, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(157, 7, 37, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(158, 7, 38, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(159, 7, 39, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(160, 7, 40, 1, 700.00, NULL, 1, NULL, NULL, NULL, NULL),
(161, 2, 1, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(162, 2, 3, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(163, 2, 4, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(164, 2, 5, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(165, 2, 7, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(166, 2, 8, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(167, 2, 9, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(168, 2, 11, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(169, 2, 12, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(170, 2, 13, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(171, 2, 15, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(172, 2, 16, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(173, 2, 17, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(174, 2, 19, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(175, 2, 20, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(176, 2, 21, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(177, 2, 23, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(178, 2, 24, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(179, 2, 25, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(180, 2, 27, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(181, 2, 28, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(182, 2, 29, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(183, 2, 31, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(184, 2, 32, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(185, 3, 1, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(186, 3, 3, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(187, 3, 4, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(188, 3, 5, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(189, 3, 7, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(190, 3, 8, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(191, 3, 9, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(192, 3, 11, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(193, 3, 12, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(194, 3, 13, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(195, 3, 15, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(196, 3, 16, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(197, 3, 17, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(198, 3, 19, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(199, 3, 20, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(200, 3, 21, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(201, 3, 23, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(202, 3, 24, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(203, 3, 25, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(204, 3, 27, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(205, 3, 28, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(206, 3, 29, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(207, 3, 31, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(208, 3, 32, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(209, 5, 1, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(210, 5, 3, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(211, 5, 4, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(212, 5, 5, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(213, 5, 7, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(214, 5, 8, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(215, 5, 9, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(216, 5, 11, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(217, 5, 12, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(218, 5, 13, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(219, 5, 15, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(220, 5, 16, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(221, 5, 17, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(222, 5, 19, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(223, 5, 20, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(224, 5, 21, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(225, 5, 23, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(226, 5, 24, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(227, 5, 25, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(228, 5, 27, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(229, 5, 28, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(230, 5, 29, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(231, 5, 31, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(232, 5, 32, 2, 1250.00, NULL, 1, NULL, NULL, NULL, NULL),
(233, 8, 1, 2, 1400.00, NULL, 1, NULL, NULL, NULL, NULL),
(234, 8, 3, 2, 1400.00, NULL, 1, NULL, NULL, NULL, NULL),
(235, 8, 4, 2, 1400.00, NULL, 1, NULL, NULL, NULL, NULL),
(236, 8, 5, 2, 1400.00, NULL, 1, NULL, NULL, NULL, NULL),
(237, 8, 7, 2, 1400.00, NULL, 1, NULL, NULL, NULL, NULL),
(238, 8, 8, 2, 1400.00, NULL, 1, NULL, NULL, NULL, NULL),
(239, 8, 9, 2, 1400.00, NULL, 1, NULL, NULL, NULL, NULL),
(240, 8, 11, 2, 1400.00, NULL, 1, NULL, NULL, NULL, NULL),
(241, 8, 12, 2, 1400.00, NULL, 1, NULL, NULL, NULL, NULL),
(242, 8, 13, 2, 1400.00, NULL, 1, NULL, NULL, NULL, NULL),
(243, 8, 15, 2, 1400.00, NULL, 1, NULL, NULL, NULL, NULL),
(244, 8, 16, 2, 1400.00, NULL, 1, NULL, NULL, NULL, NULL),
(245, 8, 17, 2, 1400.00, NULL, 1, NULL, NULL, NULL, NULL),
(246, 8, 19, 2, 1400.00, NULL, 1, NULL, NULL, NULL, NULL),
(247, 8, 20, 2, 1400.00, NULL, 1, NULL, NULL, NULL, NULL),
(248, 8, 21, 2, 1400.00, NULL, 1, NULL, NULL, NULL, NULL),
(249, 8, 23, 2, 1400.00, NULL, 1, NULL, NULL, NULL, NULL),
(250, 8, 24, 2, 1400.00, NULL, 1, NULL, NULL, NULL, NULL),
(251, 8, 25, 2, 1400.00, NULL, 1, NULL, NULL, NULL, NULL),
(252, 8, 27, 2, 1400.00, NULL, 1, NULL, NULL, NULL, NULL),
(253, 8, 28, 2, 1400.00, NULL, 1, NULL, NULL, NULL, NULL),
(254, 8, 29, 2, 1400.00, NULL, 1, NULL, NULL, NULL, NULL),
(255, 8, 31, 2, 1400.00, NULL, 1, NULL, NULL, NULL, NULL),
(256, 8, 32, 2, 1400.00, NULL, 1, NULL, NULL, NULL, NULL),
(258, 2, 4, 1, 480.00, '2025-06-26 10:03:14', 1, NULL, NULL, NULL, 1),
(259, 2, 4, 1, 600.00, '2025-06-26 10:04:46', 1, NULL, NULL, NULL, 1),
(260, 2, 4, 1, 650.00, '2025-06-26 10:04:55', 1, '2025-06-26 10:06:30', 0, '2025-06-26 10:05:03', 1),
(261, 2, 4, 1, 200.00, '2025-06-26 10:06:45', 1, '2025-06-26 11:53:43', 0, '2025-06-26 11:55:19', 0),
(262, 2, 62, 1, 330.00, '2025-06-26 11:54:28', 1, NULL, 0, '2025-06-26 11:55:11', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
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
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat_book`
--
ALTER TABLE `seat_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat_book_details`
--
ALTER TABLE `seat_book_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat_type`
--
ALTER TABLE `seat_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_seat_type`
--
ALTER TABLE `vehicle_seat_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `seat_book`
--
ALTER TABLE `seat_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `seat_book_details`
--
ALTER TABLE `seat_book_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `seat_type`
--
ALTER TABLE `seat_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vehicle_seat_type`
--
ALTER TABLE `vehicle_seat_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
