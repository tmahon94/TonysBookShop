-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2025 at 04:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `session_id` varchar(255) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `added_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `session_id`, `product_id`, `quantity`, `added_at`) VALUES
(1, 'klac3re9mvaaibvot1o3b0os53', 1, 1, '2025-05-03 13:36:19'),
(2, 'klac3re9mvaaibvot1o3b0os53', 1, 1, '2025-05-03 13:37:03'),
(3, 'klac3re9mvaaibvot1o3b0os53', 1, 2, '2025-05-03 13:37:26'),
(4, 'klac3re9mvaaibvot1o3b0os53', 1, 1, '2025-05-03 13:50:28'),
(5, 'klac3re9mvaaibvot1o3b0os53', 1, 1, '2025-05-03 13:50:50'),
(6, 'klac3re9mvaaibvot1o3b0os53', 5, 1, '2025-05-03 13:51:23'),
(7, 'klac3re9mvaaibvot1o3b0os53', 4, 1, '2025-05-03 13:54:45'),
(8, 'klac3re9mvaaibvot1o3b0os53', 1, 1, '2025-05-03 13:58:55');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `added_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `quantity`, `added_at`) VALUES
(1, 'Moby Dick', 'Epic novel.', 14.99, 13, '2025-05-03 13:20:09'),
(2, 'Harry Potter', 'Wizards', 19.99, 20, '2025-05-03 13:20:09'),
(3, 'The Godfather', 'A classic crime novel by Mario Puzo', 14.00, 12, '2025-05-03 13:47:33'),
(4, 'Johnny Sexton', 'An autobiography', 11.75, 6, '2025-05-03 13:47:33'),
(5, 'Michael Collins', 'A historical biography', 13.20, 8, '2025-05-03 13:47:33'),
(6, 'Game of Thrones', 'Fantsy', 15.50, 8, '2025-05-03 13:47:33'),
(7, 'Einstein', 'A biography', 12.99, 10, '2025-05-03 13:47:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(8, 'tonytest3', 'test3@mail.com', '$2y$10$de8lcvdFJUEN2MCyci600OYBj2rcpbEBOeT4dmNYsvZG5hVyEeyWa', '2025-05-02 16:02:50'),
(9, 'jim', 'jimmy@mail.ie', '$2y$10$HZmp9vmL9qOB/m.kxWjeqeXvBVeOr6UQ0kb4MCHe8HH4CjkzuvN8i', '2025-05-02 16:03:17'),
(10, 'john', 'john@mail.com', '$2y$10$0ZwwdkDCZP2MQeKHhyc8muNINT7G/FMuzy2eBLV.GOvXADbhJ1fyW', '2025-05-02 16:07:23'),
(11, 'tonytest1', 'b00158733@testemail.com', '$2y$10$Yfw1ZGMqmsnT9eCiljjcP.9/fRzrRG2djm.oRtSq9feozo6sxXsv6', '2025-05-03 14:14:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
