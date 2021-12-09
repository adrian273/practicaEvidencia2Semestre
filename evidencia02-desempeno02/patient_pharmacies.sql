-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 12:18 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hhs_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient_pharmacies`
--

CREATE TABLE `patient_pharmacies` (
  `id` int(10) UNSIGNED NOT NULL,
  `patient_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_id` int(10) UNSIGNED DEFAULT NULL,
  `zip` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_pharmacies`
--

INSERT INTO `patient_pharmacies` (`id`, `patient_id`, `name`, `address`, `city`, `state_id`, `zip`, `phone`, `fax`, `notes`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(2, 34, 'thhhh', NULL, '213', 13, '1321', '32132', '123213', 'ss33', '2021-10-01 18:54:17', '2021-10-01 19:51:42', 28, 28),
(4, 34, 'inochi', 'talxca', 'tas', 2, '112', '123', '1233', 'caaa', '2021-10-01 19:03:04', '2021-10-01 19:51:25', 28, 28),
(6, 25, 'degd', '34324', '3434', 2, '44324', '434342343', '424324', 'ggregree rre rhr', '2021-10-06 18:13:04', '2021-10-06 18:13:04', 9, 0),
(7, 25, 'ewrewre', '45454', '454354', 2, '454354', '4543545', '4543', '4543454', '2021-10-06 18:13:21', '2021-10-06 18:13:21', 9, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient_pharmacies`
--
ALTER TABLE `patient_pharmacies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_pharmacies_patient_id_foreign` (`patient_id`),
  ADD KEY `patient_pharmacies_state_id_foreign` (`state_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient_pharmacies`
--
ALTER TABLE `patient_pharmacies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `patient_pharmacies`
--
ALTER TABLE `patient_pharmacies`
  ADD CONSTRAINT `patient_pharmacies_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  ADD CONSTRAINT `patient_pharmacies_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
