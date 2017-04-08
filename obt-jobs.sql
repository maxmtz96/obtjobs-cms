-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 08, 2017 at 06:40 PM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `obtjobs-hiring`
--

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `worksector` varchar(255) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `worktitle` varchar(255) NOT NULL,
  `workdepartment` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` char(64) NOT NULL,
  `salt` char(15) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(25, 'Abrahym', 'Sharfeldden', 'abrahym', '2d03341eda4a7adb3b3d8af8fec9d16f02eba2351073e760f854b2a79a1aeba0', '2a5ac6d714fc935', 'abrahym1@gmail.com', 'Student', '', '', '', ''),
(26, 'max', 'martinez', 'mxa123', '29cf9956338937fe42108a48c972e57904eeab552fd9feb9a26a2c09ebdf2d85', '4e1657db52f04e81', 'max12@gmail.com', 'Staff', '', '', '', ''),
(27, 'max', 'martinez', 'mmm123', '2def94b7e6467ae161c3c7855f67ed7256b0fc5701d62c95823e108028bd60f3', '6c029dee6e837c6e', '123@gmail.com', 'Staff', '', '', '', ''),
(28, 'max', 'mtz', 'amm123', '6c44990794310657a00bdbb19ee3bdf70c02999d7c96b59ca2ab11ff7ad85728', '25d5ea2867c842ac', 'max123@gmail.com', 'Employer', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;