-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 14, 2023 at 03:25 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `memejoy`
--

-- --------------------------------------------------------

--
-- Table structure for table `memes`
--

CREATE TABLE `memes` (
  `meme_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `uploader_id` int(11) NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `upload_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `source` varchar(50) DEFAULT 'UserUploaded'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `memes`
--

INSERT INTO `memes` (`meme_id`, `title`, `image_path`, `uploader_id`, `category`, `upload_time`, `source`) VALUES
(1, 'haha', '../images/656bdd790d6b9_meme2.jpeg', 1, 'funny', '2023-12-03 01:44:25', 'UserUploaded'),
(2, '1', '../images/656d6979e385e_1f1.jpg', 1, 'funny', '2023-12-04 05:54:01', 'UserUploaded'),
(3, 'test1', '../images/656d6b7748e1b_1f1.jpg', 1, 'funny', '2023-12-04 06:02:31', 'UserUploaded'),
(4, 'test2', '../images/656d6d3e4e872_meme.jpeg', 1, 'funny', '2023-12-04 06:10:06', 'UserUploaded'),
(5, 'cooking', '../images/656d6e9f326b5_5zfsu3.png', 1, 'funny', '2023-12-04 06:15:59', 'UserUploaded'),
(6, 'm3', '../images/656d6eab38bf6_IMG_1913.JPG', 1, 'funny', '2023-12-04 06:16:11', 'UserUploaded'),
(7, 'm4', '../images/656d6eb3e2533_IMG_3469.JPG', 1, 'funny', '2023-12-04 06:16:19', 'UserUploaded'),
(8, 'trial', '../images/657562e3b22dc_4517666_20161122180730_jpeg9115947ee612af5e2276b73a983a686f.jpeg', 1, 'twitter', '2023-12-10 07:04:03', 'UserUploaded'),
(9, 'memes', '../images/657565eac2cb2_9e0.jpg', 1, 'twitter', '2023-12-10 07:16:58', 'UserUploaded'),
(10, 'memes', '../images/657565eacd457_20221019_210216.jpg', 1, 'twitter', '2023-12-10 07:16:58', 'UserUploaded'),
(11, 'memes', '../images/657565eacdde5_20221114_131927.jpg', 1, 'twitter', '2023-12-10 07:16:58', 'UserUploaded'),
(12, 'memes', '../images/657565eace1e9_20221125_113417.jpg', 1, 'twitter', '2023-12-10 07:16:58', 'UserUploaded'),
(13, 'memes', '../images/657565eace414_20221125_113425.jpg', 1, 'twitter', '2023-12-10 07:16:58', 'UserUploaded'),
(14, 'funny guy', '../images/65756cf3b493c_20230106_220202.jpg', 1, 'twitter', '2023-12-10 07:46:59', 'UserUploaded'),
(15, 'funny guy', '../images/65756ff2e00aa_20230106_220226.jpg', 1, 'twitter', '2023-12-10 07:59:46', 'UserUploaded'),
(21, 'things', '../images/657570f7827c3_20230228_165411.jpg', 1, 'memes', '2023-12-10 08:04:07', 'UserUploaded'),
(22, 'twitter', '../images/657572360319a_20230228_165520.jpg', 1, 'meme', '2023-12-10 08:09:26', 'UserUploaded'),
(23, 'twitter', '../images/657573ac2a082_20230228_165501.jpg', 1, 'meme', '2023-12-10 08:15:40', 'UserUploaded'),
(24, 'twitter', '../images/65766cdc01b3a_20230225_043051.jpg', 1, 'twitter', '2023-12-11 01:58:52', 'UserUploaded'),
(25, 'working', '../images/6576708889a7a_20230302_163505.jpg', 1, 'twitter', '2023-12-11 02:14:32', 'UserUploaded'),
(26, 'haha', '../images/6576726791995_20230228_165423.jpg', 1, 'twitter', '2023-12-11 02:22:31', 'UserUploaded');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'casey', 'caseyanetor@gmail.com', '1234', '2023-12-01 19:57:38'),
(2, 'new', 'new@gmail.com', '1234', '2023-12-07 09:17:06');

-- --------------------------------------------------------

--
-- Table structure for table `user_likes`
--

CREATE TABLE `user_likes` (
  `like_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `meme_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_likes`
--

INSERT INTO `user_likes` (`like_id`, `user_id`, `meme_id`) VALUES
(59, 1, 7),
(60, 1, 8),
(61, 1, 9),
(62, 1, 13),
(63, 1, 14),
(64, 1, 24),
(65, 1, 22),
(66, 1, 23),
(67, 1, 1),
(68, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `memes`
--
ALTER TABLE `memes`
  ADD PRIMARY KEY (`meme_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_likes`
--
ALTER TABLE `user_likes`
  ADD PRIMARY KEY (`like_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `meme_id` (`meme_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `memes`
--
ALTER TABLE `memes`
  MODIFY `meme_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_likes`
--
ALTER TABLE `user_likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_likes`
--
ALTER TABLE `user_likes`
  ADD CONSTRAINT `user_likes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `user_likes_ibfk_2` FOREIGN KEY (`meme_id`) REFERENCES `memes` (`meme_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
