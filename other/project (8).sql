-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2023 at 12:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `username` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` longblob NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medication_schedule`
--

CREATE TABLE `medication_schedule` (
  `username` varchar(100) NOT NULL,
  `medication_name` varchar(100) NOT NULL,
  `dose` int(11) NOT NULL,
  `frequency` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `schedule_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medication_schedule`
--

INSERT INTO `medication_schedule` (`username`, `medication_name`, `dose`, `frequency`, `start_date`, `end_date`, `schedule_id`) VALUES
('aa', 'dolo', 2, 'mrg', '2023-01-26', '2023-01-27', 55),
('aa', 'AA', 120, 'nyt', '1111-11-11', '1111-11-11', 56),
('aa', 'AA', 120, 'nyt', '1111-11-11', '1111-11-11', 57),
('aa', 'QQ', 120, 'noon', '1111-11-11', '1111-11-11', 58),
('aa', 'QQ', 120, 'noon', '1111-11-11', '1111-11-11', 59),
('aa', 'QQ', 120, 'noon', '1111-11-11', '1111-11-11', 60),
('abhishek', 'vitamin pills', 5, 'nyt', '2023-01-01', '2023-12-31', 2025);

--
-- Triggers `medication_schedule`
--
DELIMITER $$
CREATE TRIGGER `person_b` AFTER INSERT ON `medication_schedule` FOR EACH ROW IF NEW.dose>200 THEN
SIGNAL SQLSTATE '50001' SET MESSAGE_TEXT = 'your taking table of  more dose than usuall.';
END IF
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` varchar(200) DEFAULT NULL,
  `priority` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `username`, `title`, `content`, `priority`) VALUES
(8, 'aa', 'mk', ',kp,p', 'middle');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`) VALUES
('aa', 'aa@123', '4124bc0a9335c27f086f24ba207a4912'),
('aaa', 'aaa@aaa', '47bce5c74f589f4867dbd57e9ca9f808'),
('abhishek', 'abhi@45', 'ab64f5c1af67e191fb34d5b3f87c7902'),
('darshan', 'vi@1234', '4124bc0a9335c27f086f24ba207a4912'),
('darshan n', 'darshann4789@gmail.com', '84ec2efebebfe678f1ddf33866dcf7d4'),
('manjunath', 'manjunath26071@gmail.com', 'd76f3d05cc9ac98f1f9160274a39fe33'),
('sins', 'aa@aaa', '4124bc0a9335c27f086f24ba207a4912'),
('Studentmit', 'abhi@gmail.com', 'e11170b8cbd2d74102651cb967fa28e5'),
('vi', 'vi@123', '827ccb0eea8a706c4c34a16891f84e7b'),
('vijay', 'vijay2002@gmail.com', '533c5ba8368075db8f6ef201546bd71a'),
('vijaync', 'abhi@gmail', 'e11170b8cbd2d74102651cb967fa28e5');

-- --------------------------------------------------------

--
-- Table structure for table `workout_plans`
--

CREATE TABLE `workout_plans` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `day` varchar(1000) NOT NULL,
  `bodypart` varchar(1000) NOT NULL,
  `sets` varchar(1000) NOT NULL,
  `workout_time` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `workout_plans`
--

INSERT INTO `workout_plans` (`id`, `username`, `day`, `bodypart`, `sets`, `workout_time`) VALUES
(64, 'vijaync', 'monday', 'leg', '10', '1'),
(70, 'studentmit', 'monday', 'leg', '10', '1'),
(72, 'vijaync', 'monday', 'maste', '10', '1'),
(75, 'aa', 'monday', 'leg', '10', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD KEY `username` (`username`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `medication_schedule`
--
ALTER TABLE `medication_schedule`
  ADD PRIMARY KEY (`schedule_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `workout_plans`
--
ALTER TABLE `workout_plans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `workout_plans_ibfk_1` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `medication_schedule`
--
ALTER TABLE `medication_schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2026;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `workout_plans`
--
ALTER TABLE `workout_plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `medication_schedule`
--
ALTER TABLE `medication_schedule`
  ADD CONSTRAINT `medication_schedule_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `workout_plans`
--
ALTER TABLE `workout_plans`
  ADD CONSTRAINT `workout_plans_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
