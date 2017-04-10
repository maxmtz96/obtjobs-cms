-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 10, 2017 at 03:08 PM
-- Server version: 5.6.33
-- PHP Version: 5.6.27

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

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`id`, `firstname`, `lastname`, `worksector`, `companyname`, `worktitle`, `workdepartment`, `username`, `password`, `salt`, `email`) VALUES
(0, 'work', 'work', 'work', 'work', 'work', 'work', 'work', 'ee64c83cad20b0293ad628f264150bc7ac697fb0270d72ef7f2e4131a5d04b49', '42063cef2fffa94', 'work@work.com');

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
(26, 'Random', 'Person', 'rand123', 'c94b38cf891954ffbb72a1bd9f4d3d7295bb0de8bfb4227e7472900bf85c7351', 'ebe129931e1d5cf', 'rand123@gmail.com', 'Student', '', '', '', ''),
(27, 'aaaa', 'aaaa', 'aaaa', '8d4d9e66d7bab14e49fb2b9bed3fae0769d66d5456afa05f9655a037e83f3873', '6a65b3176826aeaa', 'aaaa@gmail.com', 'Student', '', '', '', ''),
(28, 'Keturah', 'Raymond', 'kraymond', '535a8f9ef4b9e7756ff37058c8cc805107d6fb5ac416c09d537cf78db3991b76', '3040b48259c6fa47', 'kray@gmail.com', 'Student', 'image_uploaded_from_ios_720.jpg', '', '', ''),
(29, 'Agustin', 'Zaurelli', 'azaurelli', '9ae73f4590bffd6b88180820c02111da236e1e5f19b642530d740678b588e126', '229a8150576f561b', 'az@gmail.com', 'Student', 'Debate-Day-Group.jpg', '', '', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;