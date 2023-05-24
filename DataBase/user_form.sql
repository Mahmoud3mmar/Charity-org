-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2023 at 08:27 PM
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
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(20, 'mahmoud', 'admin2@gmail.com', 'admin', 'admin'),
(29, 'Mahmoud', 'Admin@gmail.com', 'e3afed0047b08059d0fada10f400c1e5', 'admin'),
(30, 'Kero', 'User@gmail.com', '8f9bfe9d1345237cb3b2b205864da075', 'receptionist'),
(35, 'ddddddddddddddddddd', 'asd', '7815696ecbf1c96e6894b779456d330e', 'user'),
(40, 'mahmoud', 'admin2@gmail.com', 'admin', 'admin'),
(46, 'asd', 'asdddd', '8277e0910d750195b448797616e091ad', 'user'),
(47, 'asd', 'd', '8277e0910d750195b448797616e091ad', 'user'),
(48, 'asd', 'asd', '49f0bad299687c62334182178bfd75d8', 'Accountant'),
(49, 'asd', 'asd', '77963b7a931377ad4ab5ad6a9cd718aa', 'receptionist'),
(51, 'Ahmed', 'asd@gmail', '0b2c082c00e002a2f571cbe340644239', 'receptionist'),
(53, 'Ahmed', 'asd@gmail', '7815696ecbf1c96e6894b779456d330e', 'receptionist'),
(54, 's', 's', '03c7c0ace395d80182db07ae2c30f034', 'receptionist'),
(55, 'sa', 'sa', 'f45731e3d39a1b2330bbf93e9b3de59e', 'Pharmacist'),
(57, 'as', 'asd', '74f0b9469b30d1921757f2e2aa8cacb8', 'Admin'),
(59, 'Belly', 'Ware@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'WareHouse Manager'),
(61, 'Fayed', 'Acc@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Accountant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
