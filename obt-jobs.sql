-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 07, 2017 at 03:21 PM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `obtjobs-hiring`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(64) COLLATE utf8_unicode_ci NOT NULL,
  `salt` char(16) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `skill1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `skill2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `skill3` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `salt`, `email`, `status`, `image`, `skill1`, `skill2`, `skill3`) VALUES
(22, 'Elliot', 'Chen', 'echen1995', '536a60043082fb2966a49b6e05921ae8bf3057a76ff598c7cf685dc0e782d9b1', '2a75aa18504d12aa', 'echen1995@gmail.com', 'Student', 'file1_720.jpg', '', '', ''),
(23, 'Kenyai', 'Hill', 'khill1996', '52e8b31975e98eea1d79a831ef8e0d6fecf6b41d8067653eb28e73e512ae8d6d', '1cd001a651748a9f', 'khill1996@gmail.com', 'Student', 'image_uploaded_from_ios_720.jpg', '', '', ''),
(24, 'maximiliano', 'martinez', 'axm123', '04a8f0fc3d6f264cfff4dd484c2e3e104c137c7b7d9c65119e654e814db7864b', '71fc68302b2a39ce', 'maxm123@gmail.com', 'Student', 'file_720.jpg', '', '', ''),
(25, 'Abrahym', 'Sharfeldden', 'abrahym', '2d03341eda4a7adb3b3d8af8fec9d16f02eba2351073e760f854b2a79a1aeba0', '2a5ac6d714fc935', 'abrahym1@gmail.com', 'Student', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;