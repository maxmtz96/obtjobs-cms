-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 19, 2017 at 02:55 PM
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
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(64) COLLATE utf8_unicode_ci NOT NULL,
  `salt` char(16) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `salt`, `email`, `github`, `linkedin`, `status`, `image`, `aboutme`, `exploca1`, `expdura1`, `exptitle1`, `expdesc1`, `exploca2`, `expdura2`, `exptitle2`, `expdesc2`, `eduloca1`, `edudura1`, `edutitle1`, `edudesc1`, `eduloca2`, `edudura2`, `edutitle2`, `edudesc2`, `perskill1`, `perskill2`, `perskill3`, `perskill4`, `proskill1`, `proskill2`, `proskill3`, `proskill4`, `proskill5`, `proskill6`, `address`, `phone`) VALUES
(22, 'Elliot', 'Chen', 'echen1995', '536a60043082fb2966a49b6e05921ae8bf3057a76ff598c7cf685dc0e782d9b1', '2a75aa18504d12aa', 'echen1995@gmail.com', 'lltchen', '', 'Student', 'file1_720.jpg', '"I am an aspiring Web Developer with an eye for detail and passion for efficient user experiences. \r\n                    I want to challenge myself at learning more advanced and technical languages."', 'Innovation Lab', NULL, 'Participant', 'Developed skills in Web Design and Development related skills.', NULL, NULL, '', '', 'Innovation Lab', NULL, 'Web Developer', 'Developed and implemented javascript functionalities into a website', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', 0),
(23, 'Kenyai', 'Hill', 'khill1996', '52e8b31975e98eea1d79a831ef8e0d6fecf6b41d8067653eb28e73e512ae8d6d', '1cd001a651748a9f', 'khill1996@gmail.com', '', '', 'Student', 'image_uploaded_from_ios_720.jpg', 'I love riding my bicycle.', 'Shake-Shack', NULL, 'Cashier', 'Worked a 9 to 5 taking orders from hundreds of people a week', NULL, NULL, NULL, NULL, 'Innovation Lab', NULL, 'Participant', 'Developed skills in HTML and CSS.', NULL, NULL, NULL, NULL, 'Washing', 'Ironing', 'Talking', 'Biking', NULL, NULL, NULL, NULL, NULL, NULL, '', 0),
(24, 'maximiliano', 'martinez', 'axm123', '04a8f0fc3d6f264cfff4dd484c2e3e104c137c7b7d9c65119e654e814db7864b', '71fc68302b2a39ce', 'maxm123@gmail.com', '', '', 'Student', 'file_720.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0),
(25, 'Abrahym', 'Sharfeldden', 'abrahym', '2d03341eda4a7adb3b3d8af8fec9d16f02eba2351073e760f854b2a79a1aeba0', '2a5ac6d714fc935', 'abrahym1@gmail.com', '', '', 'Student', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0),
(26, 'Random', 'Person', 'rand123', 'c94b38cf891954ffbb72a1bd9f4d3d7295bb0de8bfb4227e7472900bf85c7351', 'ebe129931e1d5cf', 'rand123@gmail.com', '', '', 'Student', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0),
(27, 'aaaa', 'aaaa', 'aaaa', '8d4d9e66d7bab14e49fb2b9bed3fae0769d66d5456afa05f9655a037e83f3873', '6a65b3176826aeaa', 'aaaa@gmail.com', '', '', 'Student', 'nyc.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0),
(28, 'Keturah', 'Raymond', 'kraymond', '535a8f9ef4b9e7756ff37058c8cc805107d6fb5ac416c09d537cf78db3991b76', '3040b48259c6fa47', 'kray@gmail.com', '', '', 'Student', 'image_uploaded_from_ios_720.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0),
(29, 'Agustin', 'Zaurelli', 'azaurelli', '9ae73f4590bffd6b88180820c02111da236e1e5f19b642530d740678b588e126', '229a8150576f561b', 'az@gmail.com', '', '', 'Student', 'Debate-Day-Group.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0),
(30, 'Firstname', 'Lastname', 'username', '0d12dc1c905f5d87b55e5b22b4b6240682a9c212989ffb9cefc2deb778d9c3f7', '195b4e5b7d5c5906', 'email@address.com', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0);
