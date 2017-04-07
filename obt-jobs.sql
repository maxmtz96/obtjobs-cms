-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 30, 2017 at 11:35 PM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `obtjobs-hiring`
--

-- --------------------------------------------------------

--
-- Table structure for table `multiupload`
--

CREATE TABLE `multiupload` (
  `id` int(15) NOT NULL,
  `name` varchar(255) NOT NULL
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
(1, '0', '0', 'maxm', 'max123', '', 'maxm@gmail.com', '', 'file1_720.jpg', '', '', ''),
(3, 'Max', 'Martinez', 'maxm123', '33eb7c2ec3a987ce503296bd129ebde33d499173c32cebcfa3b3de2062220d73', '1c96bd127612038', 'inrin@gmail.com', '', 'file_720.jpg', 'me', 'myself', 'and i'),
(4, 'Sam', 'Chen', 'Sam123', '119dc8e9d34d983c050a4d671fc571425255e02c902e13e1ed2345853acd9e15', '60c4bf857b39d05e', 'rgbtjniu@gmail.com', '', 'file1_720.jpg', '', '', ''),
(6, 'Elliot ', 'Chen', 'Elliot123', 'eaa2b91a2246f0ee3d9cd6fc0fc28a60746368b03ce0c63a9273959ddc688498', 'afb325e68a9455', 'tingokmt@gmail.com', '', 'file1_720.jpg', '', '', ''),
(7, 'Elliot', 'Chen', 'DaAsianKid', '69c0fb204dfff4ce17b40c6bc44e111c1c07b6e92dadb9d6d3f9d6908e18c9af', '250bb94e4a962cb', 'asiansrock@gmail.com', '', 'file1_720.jpg', '', '', ''),
(8, 'mex', 'last', 'max1234', 'af676e622b468387979479c27d474bd74b63e929cd8169db62b45144e5808d7d', '4689018d2284a8ad', 'max123@gmail.com', 'student', 'file1_720.jpg', 'hi', '', ''),
(14, 'max', 'cool', 'maxm96', '6a6329b26ff9e6641c08a72b2f0f4c6d00067a63fe8b67fe21e6930a168e3f48', '424a0aab447d7dab', 'max@gmail.com', 'Student', 'file1_720.jpg', '', '', ''),
(15, 'cool', 'me', 'cool123', '1d7a54a006698e8dd8b56ef2b15780f41bda8f752bdbfe5ba5298a5a274cd318', '413b06cf52943732', 'max13@gmail.com', 'Student', 'image_uploaded_from_ios_720.jpg', '', '', ''),
(16, 'Arm', 'leg ', 'account', '41f80af92ff1138f4c67c08b16caffd73cfcf98fc3b0b48aad1d9ddc4113b48d', '7373d6f24afbbbd2', 'lkajdlkf@gmail.com', 'Student', '', 'hi', '', ''),
(20, 'mat', 'name', 'mat123', '5bc6fcdadd0cee2f88787fd8c4eba9cfb6cd5774b0713f418ff1e2cad450cf1c', '4cce2c88fbb9af6', 'mat@gmail.com', 'Student', 'image_uploaded_from_ios_720.jpg', '', '', ''),
(21, 'max', 'lol', 'maxm122345', '0827295f5ab9a0f43b949fb26d60b869a7062ee713a097525dcd3d201af60d25', '1e31ae6f61669c80', 'max1@gmail.com', 'Student', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `multiupload`
--
ALTER TABLE `multiupload`
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
-- AUTO_INCREMENT for table `multiupload`
--
ALTER TABLE `multiupload`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;