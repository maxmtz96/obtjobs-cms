-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 18, 2017 at 08:12 PM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `admin`
--
CREATE DATABASE IF NOT EXISTS `admin` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `admin`;
--
-- Database: `cms`
--
CREATE DATABASE IF NOT EXISTS `cms` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cms`;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `detail` varchar(50) DEFAULT NULL,
  `anything` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `title`, `detail`, `anything`, `phone`) VALUES
(7, 'gtgg', 't54gt4g', 'g4gg', 'tg4hth', 234567890),
(8, 'gkjngjjgn', 'jgerjgnthjgb', 'ijgnrjgnortng', 'gntrijhnoitrgni', 2147483647),
(9, 'fr4ugntugn', 'eigbj4gi4tb`', 'jgtjignrtbgu', 'ijgntrjhthub', 2147483647),
(10, 'irbgut4igbrug', 'fu9rtngiont4giu', 'irbgjrgib', 'jnjefingviefbv', 2147483647),
(11, '', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;--
-- Database: `logintutorial`
--
CREATE DATABASE IF NOT EXISTS `logintutorial` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `logintutorial`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'username', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;--
-- Database: `new table`
--
CREATE DATABASE IF NOT EXISTS `new table` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `new table`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(64) COLLATE utf8_unicode_ci NOT NULL,
  `salt` char(16) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `salt`, `email`) VALUES
(1, 'maxm', '7dcebb86767476d9dc5ff18619db4b3e26cd2addc89990440eac0c15f598e9bb', '682f70565a234e8', 'iosfnuewnfunw@gmail.com'),
(2, 'max123', '06bb603d0bc31abdacb1034a971400c7794a6be162972d7e2175e04832a9492a', '2fc40b663119636a', 'iofnwrifn@gmail.com');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;--
-- Database: `obtjobs-hiring`
--
CREATE DATABASE IF NOT EXISTS `obtjobs-hiring` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `obtjobs-hiring`;

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
(0, 'Matt', 'Flores', 'HR', 'Opportunities for a Better Tomorrow', 'Manager', 'HR', 'matt123', 'cd7ab1dd8c565be62cb016d2c50a7e16476c5471967797bea73afd5fb4b611c6', '1363dbadd6ad619', 'matt123@gmail.com'),
(0, 'me', 'me', 'me', 'me', 'me', 'me', 'me', '6c3b84b80b439f4dfe8d24cf4b1700ef3ab28c081cd968aa4055cb154309cf9f', '4f3b4bb43ff84e8', 'me@gmail.com'),
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
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `salt`, `email`, `status`, `image`, `aboutme`, `exploca1`, `expdura1`, `exptitle1`, `expdesc1`, `exploca2`, `expdura2`, `exptitle2`, `expdesc2`, `eduloca1`, `edudura1`, `edutitle1`, `edudesc1`, `eduloca2`, `edudura2`, `edutitle2`, `edudesc2`, `perskill1`, `perskill2`, `perskill3`, `perskill4`, `proskill1`, `proskill2`, `proskill3`, `proskill4`, `proskill5`, `proskill6`, `phone`, `address`) VALUES
(22, 'Elliot', 'Chen', 'echen1995', '536a60043082fb2966a49b6e05921ae8bf3057a76ff598c7cf685dc0e782d9b1', '2a75aa18504d12aa', 'echen1995@gmail.com', 'Student', 'file1_720.jpg', '\"I am an aspiring Web Developer with an eye for detail and passion for efficient user experiences. I want to challenge myself at learning more advanced and technical languages.\"', 'Innovation Lab (Internship)', NULL, 'Web Developer', 'Developed and implemented javascript functionalities into a website', NULL, NULL, '', '', 'Innovation Lab', NULL, 'Web Developer', 'Developed skills in HTML5, CSS3 and, Javascript/JQuery', NULL, NULL, NULL, NULL, 'Empthaic', 'Fluent In Chinese', 'Touchy Feely', 'Nice', 'Typing Speed (50wpm)', 'Microsoft Office Suite', 'Full Stack Developer', 'Music Artist', 'World Renowned Chef', 'Certified Computer Repair Tech ', '111-111-1112', 'home'),
(23, 'Kenyai', 'Hill', 'khill1996', '52e8b31975e98eea1d79a831ef8e0d6fecf6b41d8067653eb28e73e512ae8d6d', '1cd001a651748a9f', 'khill1996@gmail.com', 'Student', 'image_uploaded_from_ios_720.jpg', 'I love riding my bicycle and being eco-friendly..  :)', 'Shake-Shack', NULL, 'Cashier', 'Worked a 9 to 5 taking orders from hundreds of people a week', NULL, NULL, NULL, NULL, 'Innovation Lab', NULL, 'Participant', 'Developed skills in HTML and CSS.', NULL, NULL, NULL, NULL, 'Washing', 'Ironing', 'Talking', 'Biking', 'HTML', 'Javascript ', 'CSS', 'Excel Spreadsheet', 'Mircosoft Word', 'Time Management ', '', ''),
(24, 'maximiliano', 'martinez', 'axm123', '04a8f0fc3d6f264cfff4dd484c2e3e104c137c7b7d9c65119e654e814db7864b', '71fc68302b2a39ce', 'maxm123@gmail.com', 'Student', 'file_720.jpg', 'An aspiring back-end developer, my love for web and software engineering began with video games. I am skilled in both basic languages and self taught in the more advanced PHP. I hope to continue learn', 'Innovation Lab (Internship)', NULL, 'Back-end Developer', 'Developed and improve my knowledge in PHP while constructing a login system for managing user profil', NULL, NULL, NULL, NULL, 'Sunset Park High School', NULL, 'Student', 'Obtained my high school diploma with a 2.9 GPA', NULL, NULL, NULL, NULL, 'Spanish fluency', 'Introvert', '', '', 'Hypertext Pre-Processor', 'Adaptive learner', 'Works well with others', 'Dependable', 'Punctual', 'Logical thinker', '', ''),
(25, 'Abrahym', 'Sharfeldden', 'abrahym', '2d03341eda4a7adb3b3d8af8fec9d16f02eba2351073e760f854b2a79a1aeba0', '2a5ac6d714fc935', 'abrahym1@gmail.com', 'Student', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(26, 'Random', 'Person', 'rand123', 'c94b38cf891954ffbb72a1bd9f4d3d7295bb0de8bfb4227e7472900bf85c7351', 'ebe129931e1d5cf', 'rand123@gmail.com', 'Student', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(27, 'aaaa', 'aaaa', 'aaaa', '8d4d9e66d7bab14e49fb2b9bed3fae0769d66d5456afa05f9655a037e83f3873', '6a65b3176826aeaa', 'aaaa@gmail.com', 'Student', 'nyc.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(28, 'Keturah', 'Raymond', 'kraymond', '535a8f9ef4b9e7756ff37058c8cc805107d6fb5ac416c09d537cf78db3991b76', '3040b48259c6fa47', 'kray@gmail.com', 'Student', 'image_uploaded_from_ios_720.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(29, 'Agustin', 'Zaurelli', 'azaurelli', '9ae73f4590bffd6b88180820c02111da236e1e5f19b642530d740678b588e126', '229a8150576f561b', 'az@gmail.com', 'Student', 'Debate-Day-Group.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(30, 'Firstname', 'Lastname', 'username', '0d12dc1c905f5d87b55e5b22b4b6240682a9c212989ffb9cefc2deb778d9c3f7', '195b4e5b7d5c5906', 'email@address.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(31, 'Anthony', 'Flores', 'A.Flores', '8233dc6699ad3f8206835963bde4c8715250f7c6791761ad3b10bae652414ac0', '67d9d17e1e884224', 'AFlores23@gmail.com', 'Student', '', 'Seeking a position with an opportunity to gain more experience.', 'Prep cook ', NULL, 'Line cook', '', NULL, NULL, NULL, NULL, 'Global Studies Highschool', NULL, 'GED', '', NULL, NULL, NULL, NULL, 'communication', 'all around', '', '', 'Communication', 'Able to get tasks done', 'computer skills', 'dedicated team player', 'completed customer service skills', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD UNIQUE KEY `id` (`id`,`username`),
  ADD UNIQUE KEY `email` (`email`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;--
-- Database: `tbl_users`
--
CREATE DATABASE IF NOT EXISTS `tbl_users` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tbl_users`;

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
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userID` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userPass` varchar(100) NOT NULL,
  `userStatus` enum('Y','N') NOT NULL DEFAULT 'N',
  `tokenCode` varchar(100) NOT NULL
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
  `proskill6` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `salt`, `email`, `status`, `image`, `aboutme`, `exploca1`, `expdura1`, `exptitle1`, `expdesc1`, `exploca2`, `expdura2`, `exptitle2`, `expdesc2`, `eduloca1`, `edudura1`, `edutitle1`, `edudesc1`, `eduloca2`, `edudura2`, `edutitle2`, `edudesc2`, `perskill1`, `perskill2`, `perskill3`, `perskill4`, `proskill1`, `proskill2`, `proskill3`, `proskill4`, `proskill5`, `proskill6`) VALUES
(22, 'Elliot', 'Chen', 'echen1995', '536a60043082fb2966a49b6e05921ae8bf3057a76ff598c7cf685dc0e782d9b1', '2a75aa18504d12aa', 'echen1995@gmail.com', 'Student', 'file1_720.jpg', '\"I am an aspiring Web Developer with an eye for detail and passion for efficient user experiences. \r\n                    I want to challenge myself at learning more advanced and technical languages.\"', 'Innovation Lab', NULL, 'Participant', 'Developed skills in Web Design and Development related skills.', NULL, NULL, '', '', 'Innovation Lab', NULL, 'Web Developer', 'Developed and implemented javascript functionalities into a website', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'Kenyai', 'Hill', 'khill1996', '52e8b31975e98eea1d79a831ef8e0d6fecf6b41d8067653eb28e73e512ae8d6d', '1cd001a651748a9f', 'khill1996@gmail.com', 'Student', 'image_uploaded_from_ios_720.jpg', 'I love riding my bicycle.', 'Shake-Shack', NULL, 'Cashier', 'Worked a 9 to 5 taking orders from hundreds of people a week', NULL, NULL, NULL, NULL, 'Innovation Lab', NULL, 'Participant', 'Developed skills in HTML and CSS.', NULL, NULL, NULL, NULL, 'Washing', 'Ironing', 'Talking', 'Biking', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'maximiliano', 'martinez', 'axm123', '04a8f0fc3d6f264cfff4dd484c2e3e104c137c7b7d9c65119e654e814db7864b', '71fc68302b2a39ce', 'maxm123@gmail.com', 'Student', 'file_720.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'Abrahym', 'Sharfeldden', 'abrahym', '2d03341eda4a7adb3b3d8af8fec9d16f02eba2351073e760f854b2a79a1aeba0', '2a5ac6d714fc935', 'abrahym1@gmail.com', 'Student', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'Random', 'Person', 'rand123', 'c94b38cf891954ffbb72a1bd9f4d3d7295bb0de8bfb4227e7472900bf85c7351', 'ebe129931e1d5cf', 'rand123@gmail.com', 'Student', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'aaaa', 'aaaa', 'aaaa', '8d4d9e66d7bab14e49fb2b9bed3fae0769d66d5456afa05f9655a037e83f3873', '6a65b3176826aeaa', 'aaaa@gmail.com', 'Student', 'nyc.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'Keturah', 'Raymond', 'kraymond', '535a8f9ef4b9e7756ff37058c8cc805107d6fb5ac416c09d537cf78db3991b76', '3040b48259c6fa47', 'kray@gmail.com', 'Student', 'image_uploaded_from_ios_720.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'Agustin', 'Zaurelli', 'azaurelli', '9ae73f4590bffd6b88180820c02111da236e1e5f19b642530d740678b588e126', '229a8150576f561b', 'az@gmail.com', 'Student', 'Debate-Day-Group.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'Firstname', 'Lastname', 'username', '0d12dc1c905f5d87b55e5b22b4b6240682a9c212989ffb9cefc2deb778d9c3f7', '195b4e5b7d5c5906', 'email@address.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

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
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;--
-- Database: `verify`
--
CREATE DATABASE IF NOT EXISTS `verify` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `verify`;

-- --------------------------------------------------------

--
-- Table structure for table `verify`
--

CREATE TABLE `verify` (
  `user_id` int(15) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `verify`
--

INSERT INTO `verify` (`user_id`, `code`) VALUES
(1, 'Od5DUck93lI2zBoSwqQ87AXxjPmvLs04RKY'),
(1, 'NCsIFKRVfMDGv6l0u8y94t3drB2OSXzYpx1'),
(1, 'XsEC2uOISBh3Movjcz4RH15DbpWnUrZwYet'),
(1, 'yROnxwE7bsZjkB6LVTW3aXul1FdqhAPYecv'),
(1, 'X3JDV019WMLQd45inqfYh7PrAkcSKxBjT8u'),
(1, 'wAqGLOFiEBdf8PyuzR5WJK6Drokjb3n0YX9'),
(1, 'imNugbsKroq12FwRGfYVvS6ED05plMjycA9'),
(1, 'fAnw1TPLsVMFv0qxukpzB98RXSeHNjQJbhE'),
(1, '09yZABv5Nj4UkOhml3t1S7qIMia8sxXCGWd'),
(1, 'Yhoc6wMOUPluTx4NtJI2jkKVSsHa57EgAFB'),
(1, 'zo80YRMm2Nfhn76BPKAwlESkXpHOaUdtGv1'),
(1, 'vfXMagAk6O1leCcnwSYqEo70HTQhUdj2usK'),
(1, 'A75FWUC26QoG9Sg0IBvVDytnpPYlZJEbdum'),
(1, 'iKwX9zmx0YqgsCRnTU5JcBEyV3f2FWudS7I'),
(1, 'ofwMvLzHFtY0VqjxXlkgK1rRBOJ4ib7ucZS'),
(1, 'O2SgtuL5PhFjWZAnH6i8UBrDfQ9owpE0TxC'),
(1, 'KSGVuZA7IXeNr6EkoRM3bYFH0x4DcnmL1at');
