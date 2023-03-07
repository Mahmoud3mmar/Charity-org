-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2023 at 09:19 PM
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
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time_stamp` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(255) NOT NULL,
  `doner_id` int(255) NOT NULL,
  `type_id` int(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `payment_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donation_type`
--

CREATE TABLE `donation_type` (
  `id` int(255) NOT NULL,
  `donation_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doner`
--

CREATE TABLE `doner` (
  `id` int(255) NOT NULL,
  `doner_name` varchar(255) NOT NULL,
  `doner_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oprhans`
--

CREATE TABLE `oprhans` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` date NOT NULL,
  `came_at` date NOT NULL,
  `room_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `oprhans`
--

INSERT INTO `oprhans` (`id`, `name`, `age`, `came_at`, `room_id`) VALUES
(2, 'sayd', '2023-03-10', '2022-08-16', 21),
(3, 'sayd', '2023-03-10', '2022-08-16', 21),
(4, 'sayd', '2023-03-10', '2022-08-16', 21),
(5, 'sayd', '2023-03-10', '2022-08-16', 21),
(6, 'sayd', '2023-03-10', '2022-08-16', 21),
(7, 'sayd', '2023-03-10', '2022-08-16', 21),
(8, 'sayd', '2023-03-10', '2022-08-16', 21),
(9, 'saydsa', '2023-03-14', '2023-03-01', 21);

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(29, 'Mahmoud', 'Admin@gmail.com', 'e3afed0047b08059d0fada10f400c1e5', 'admin'),
(30, 'Kero', 'User@gmail.com', '8f9bfe9d1345237cb3b2b205864da075', 'user'),
(35, 'asd', 'asd', '7815696ecbf1c96e6894b779456d330e', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `id` int(255) NOT NULL,
  `worker_name` varchar(255) NOT NULL,
  `worker_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`id`, `worker_name`, `worker_type`) VALUES
(9, 'Test5', 'doc'),
(10, 'Test6', 'nurse6'),
(11, 'nurse12', 'Nurse'),
(12, 'Test6', 'as'),
(13, 'Test54', 'as'),
(14, 'Test55', 'as'),
(15, 'test', 'Nurse'),
(16, 'Test', 'as'),
(17, 'as', 'asd'),
(18, 'asd', 'asd'),
(19, 'Test3', 'asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation_type`
--
ALTER TABLE `donation_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doner`
--
ALTER TABLE `doner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oprhans`
--
ALTER TABLE `oprhans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donation_type`
--
ALTER TABLE `donation_type`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doner`
--
ALTER TABLE `doner`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oprhans`
--
ALTER TABLE `oprhans`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
