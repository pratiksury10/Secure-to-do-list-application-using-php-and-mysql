-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307:3307
-- Generation Time: Sep 12, 2024 at 11:29 AM
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
-- Database: `signup_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`id`, `username`, `email`, `password`, `confirm_password`) VALUES
(1, 'aaron', 'aaron@gmail.com', '', ''),
(2, 'bella', 'bella@gmail.com', '', ''),
(3, 'charlie', 'charlie@gmail.com', '', ''),
(4, 'diana', 'diana@gmail.com', '', ''),
(5, 'ethan', 'ethan@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` enum('Work','Personal') NOT NULL,
  `due_date` date NOT NULL,
  `status` enum('Pending','In Progress','Completed') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `description`, `category`, `due_date`, `status`, `created_at`) VALUES
(1, 'Task 1', 'Description for task 1', 'Work', '2024-09-15', 'Pending', '2024-09-10 18:17:26'),
(2, 'Task 2', 'Description for task 2', 'Personal', '2024-09-16', 'In Progress', '2024-09-10 18:17:26'),
(3, 'Task 3', 'Description for task 3', 'Work', '2024-09-17', 'Completed', '2024-09-10 18:17:26'),
(4, 'Task 4', 'Description for task 4', 'Personal', '2024-09-18', 'Pending', '2024-09-10 18:17:26'),
(5, 'Task 5', 'Description for task 5', 'Work', '2024-09-19', 'In Progress', '2024-09-10 18:17:26'),
(6, 'Task 6', 'Description for task 6', 'Personal', '2024-09-20', 'Completed', '2024-09-10 18:17:26'),
(7, 'Task 7', 'Description for task 7', 'Work', '2024-09-21', 'Pending', '2024-09-10 18:17:26'),
(8, 'Task 8', 'Description for task 8', 'Personal', '2024-09-22', 'In Progress', '2024-09-10 18:17:26'),
(9, 'Task 9', 'Description for task 9', 'Work', '2024-09-23', 'Completed', '2024-09-10 18:17:26'),
(10, 'Task 10', 'Description for task 10', 'Personal', '2024-09-24', 'Pending', '2024-09-10 18:17:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
