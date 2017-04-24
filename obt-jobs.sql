-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 24, 2017 at 03:40 PM
-- Server version: 5.6.33
-- PHP Version: 5.6.27

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
  `aspiring` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(64) COLLATE utf8_unicode_ci NOT NULL,
  `salt` char(16) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `github` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `aspiring`, `username`, `password`, `salt`, `email`, `github`, `linkedin`, `facebook`, `twitter`, `status`, `image`, `aboutme`, `exploca1`, `expdura1`, `exptitle1`, `expdesc1`, `exploca2`, `expdura2`, `exptitle2`, `expdesc2`, `eduloca1`, `edudura1`, `edutitle1`, `edudesc1`, `eduloca2`, `edudura2`, `edutitle2`, `edudesc2`, `perskill1`, `perskill2`, `perskill3`, `perskill4`, `proskill1`, `proskill2`, `proskill3`, `proskill4`, `proskill5`, `proskill6`, `address`, `phone`) VALUES
(22, 'Elliot', 'Chen', 'Full Stack Developer', 'echen1995', '536a60043082fb2966a49b6e05921ae8bf3057a76ff598c7cf685dc0e782d9b1', '2a75aa18504d12aa', 'echen1995@gmail.com', 'lltchen', 'asdasd', 'asdasd', 'asdas', 'Student', 'file1_720.jpg', 'I am an aspiring Full Stack Developer with an eye for detail and passion for efficient user experiences. I want to challenge myself at learning more advanced and technical languages.', 'Innovation Lab', NULL, 'Participant', 'Developed skills in Web Design and Development related skills.', NULL, NULL, '', '', 'Innovation Lab', NULL, 'Web Developer', 'Developed and implemented javascript functionalities into a website', NULL, NULL, NULL, NULL, '', '', '', '', 'HTML', 'CSS', 'Javascript', '', '', '', '', 0),
(23, 'Kenyai', 'Hill', 'Graphic Designer', 'khill1996', '52e8b31975e98eea1d79a831ef8e0d6fecf6b41d8067653eb28e73e512ae8d6d', '1cd001a651748a9f', 'khill1996@gmail.com', 'Kenyai', '', NULL, NULL, 'Student', 'image_uploaded_from_ios_720.jpg', 'A society grows great when old men plant trees whose shade they know they shall never sit in. -Greek Proverb', 'Shake-Shack', NULL, 'Cashier', 'Worked a 9 to 5 taking orders from hundreds of people a week', NULL, NULL, NULL, NULL, 'Innovation Lab', NULL, 'Participant', 'Developed skills in HTML and CSS.', NULL, NULL, NULL, NULL, 'Washing', 'Ironing', 'Talking', 'Biking', 'Customer Service', 'HTML', '', '', '', '', '', 0),
(24, 'maximiliano', 'martinez', 'Back end Developer', 'axm123', '04a8f0fc3d6f264cfff4dd484c2e3e104c137c7b7d9c65119e654e814db7864b', '71fc68302b2a39ce', 'maxm123@gmail.com', '', '', NULL, NULL, 'Student', 'file_720.jpg', 'He\'s making a database. He\'s sorting it twice. SELECT * from contacts WHERE behavior = \'nice\'. SQL Clause is coming to town.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PHP', 'SQL', 'AJAX', NULL, NULL, NULL, '', 0),
(28, 'Keturah', 'Raymond', 'Data Management', 'kraymond', '535a8f9ef4b9e7756ff37058c8cc805107d6fb5ac416c09d537cf78db3991b76', '3040b48259c6fa47', 'kray@gmail.com', '', '', NULL, NULL, 'Student', 'image_uploaded_from_ios_720.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0),
(29, 'Agustin', 'Zaurelli', 'A Nuisance', 'azaurelli', '9ae73f4590bffd6b88180820c02111da236e1e5f19b642530d740678b588e126', '229a8150576f561b', 'az@gmail.com', '', '', NULL, NULL, 'Student', 'Debate-Day-Group.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`username`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;