-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 20, 2017 at 09:15 PM
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
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` char(64) NOT NULL,
  `salt` char(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `worksector` varchar(50) NOT NULL,
  `companyname` varchar(50) NOT NULL,
  `worktitle` varchar(50) NOT NULL,
  `workdepartment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`id`, `firstname`, `lastname`, `username`, `password`, `salt`, `email`, `worksector`, `companyname`, `worktitle`, `workdepartment`) VALUES
(1, 'max', 'max', 'max123', '6580d4eb3aa8c8ac6156a836ef1cc472c5be138178dd008c3e99ea8dd9cdf969', '18a5c7ea2d9db4d8', 'max123@gmail.com', 'max', 'max', 'max', 'max'),
(2, 'aaa', 'aaa', 'aaa', 'eca8543b31a2a21d75d18a9360b720ef7f65cc9bcff7f234a3729ee2dd460d76', '3cc1c7f22aa2c3c', 'aaa@gmail.com', 'aaa', 'aaa', 'aaa', 'aaa');

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
  `aspiring` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `github` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `aboutme` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `exploca1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `expdura1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `exptitle1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `expdesc1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `exploca2` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `expdura2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `exptitle2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `expdesc2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eduloca1` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `edudura1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `edutitle1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `edudesc1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eduloca2` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `edudura2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `edutitle2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `edudesc2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `perskill1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `perskill2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `perskill3` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `perskill4` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `proskill1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `proskill2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `proskill3` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `proskill4` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `proskill5` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `proskill6` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `username` (`username`,`email`,`github`,`linkedin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;