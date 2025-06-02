-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2025 at 08:38 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
(41, 2, 'J4', 'Non-AC', 9, 4, 1, '2025-06-02 00:16:20', NULL, 4, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
