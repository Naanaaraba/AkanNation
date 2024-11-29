-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 18, 2024 at 04:11 PM
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
-- Database: `akan_nation`
--
CREATE DATABASE akan_nation;
USE akan_nation;
-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `movie_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`movie_id`, `user_id`, `timestamp`) VALUES
(17, 7, '2024-11-18 15:05:16'),
(18, 7, '2024-11-18 15:07:24'),
(33, 7, '2024-11-18 15:29:17'),
(18, 7, '2024-11-18 15:30:34'),
(18, 7, '2024-11-18 15:34:25'),
(18, 7, '2024-11-18 15:34:26'),
(18, 7, '2024-11-18 15:34:30'),
(18, 7, '2024-11-18 15:34:49'),
(18, 7, '2024-11-18 15:34:50'),
(18, 7, '2024-11-18 15:34:50'),
(18, 7, '2024-11-18 15:34:51'),
(18, 7, '2024-11-18 15:34:52'),
(18, 7, '2024-11-18 15:35:15'),
(18, 7, '2024-11-18 15:35:16'),
(18, 7, '2024-11-18 15:35:16'),
(18, 7, '2024-11-18 15:35:16'),
(18, 7, '2024-11-18 15:35:40'),
(18, 7, '2024-11-18 15:35:41'),
(18, 7, '2024-11-18 15:35:41'),
(18, 7, '2024-11-18 15:35:41'),
(18, 7, '2024-11-18 15:35:55'),
(18, 7, '2024-11-18 15:35:55'),
(18, 7, '2024-11-18 15:35:55'),
(18, 7, '2024-11-18 15:35:56'),
(18, 7, '2024-11-18 15:35:56'),
(18, 7, '2024-11-18 15:35:56'),
(18, 7, '2024-11-18 15:36:02'),
(18, 7, '2024-11-18 15:36:03'),
(18, 7, '2024-11-18 15:36:03'),
(18, 7, '2024-11-18 15:36:03'),
(18, 7, '2024-11-18 15:36:03'),
(18, 7, '2024-11-18 15:36:16'),
(18, 7, '2024-11-18 15:36:25'),
(18, 7, '2024-11-18 15:36:26'),
(18, 7, '2024-11-18 15:36:26'),
(18, 7, '2024-11-18 15:36:27'),
(18, 7, '2024-11-18 15:36:35'),
(18, 7, '2024-11-18 15:36:35'),
(18, 7, '2024-11-18 15:36:35'),
(18, 7, '2024-11-18 15:36:35'),
(18, 7, '2024-11-18 15:36:36'),
(18, 7, '2024-11-18 15:36:36'),
(18, 7, '2024-11-18 15:37:01'),
(18, 7, '2024-11-18 15:37:01'),
(18, 7, '2024-11-18 15:37:02'),
(18, 7, '2024-11-18 15:37:02'),
(18, 7, '2024-11-18 15:37:02'),
(18, 7, '2024-11-18 15:37:25'),
(18, 7, '2024-11-18 15:37:25'),
(18, 7, '2024-11-18 15:37:26'),
(18, 7, '2024-11-18 15:37:26'),
(18, 7, '2024-11-18 15:37:26'),
(18, 7, '2024-11-18 15:37:26'),
(18, 7, '2024-11-18 15:38:00'),
(18, 7, '2024-11-18 15:38:01'),
(18, 7, '2024-11-18 15:38:01'),
(18, 7, '2024-11-18 15:50:46'),
(18, 7, '2024-11-18 15:50:51'),
(18, 7, '2024-11-18 15:51:37'),
(18, 7, '2024-11-18 15:52:53'),
(18, 7, '2024-11-18 15:52:54'),
(18, 7, '2024-11-18 15:52:54'),
(18, 7, '2024-11-18 15:52:54'),
(18, 7, '2024-11-18 15:53:19'),
(18, 7, '2024-11-18 15:54:22'),
(18, 7, '2024-11-18 15:54:27'),
(18, 7, '2024-11-18 15:54:27'),
(18, 7, '2024-11-18 15:55:23'),
(18, 7, '2024-11-18 15:55:24'),
(18, 7, '2024-11-18 15:58:49'),
(18, 7, '2024-11-18 15:58:50'),
(18, 7, '2024-11-18 15:58:50'),
(18, 7, '2024-11-18 15:59:26'),
(18, 7, '2024-11-18 15:59:26'),
(18, 7, '2024-11-18 15:59:27'),
(18, 7, '2024-11-18 15:59:27'),
(18, 7, '2024-11-18 15:59:27'),
(18, 7, '2024-11-18 15:59:27'),
(18, 7, '2024-11-18 15:59:37'),
(18, 7, '2024-11-18 15:59:38'),
(18, 7, '2024-11-18 15:59:38'),
(18, 7, '2024-11-18 15:59:38'),
(18, 7, '2024-11-18 15:59:49'),
(18, 7, '2024-11-18 15:59:49'),
(18, 7, '2024-11-18 15:59:49'),
(18, 7, '2024-11-18 15:59:49'),
(18, 7, '2024-11-18 15:59:50'),
(18, 7, '2024-11-18 15:59:56'),
(18, 7, '2024-11-18 15:59:56'),
(18, 7, '2024-11-18 15:59:56'),
(18, 7, '2024-11-18 15:59:56'),
(18, 7, '2024-11-18 15:59:56'),
(18, 7, '2024-11-18 16:00:35'),
(18, 7, '2024-11-18 16:00:35'),
(18, 7, '2024-11-18 16:01:11'),
(18, 7, '2024-11-18 16:01:11'),
(18, 7, '2024-11-18 16:01:42'),
(18, 7, '2024-11-18 16:01:50'),
(18, 7, '2024-11-18 16:02:06'),
(18, 7, '2024-11-18 16:02:06'),
(18, 7, '2024-11-18 16:02:07'),
(18, 7, '2024-11-18 16:02:51'),
(18, 7, '2024-11-18 16:02:52'),
(18, 7, '2024-11-18 16:02:52'),
(18, 7, '2024-11-18 16:02:52'),
(18, 7, '2024-11-18 16:02:52'),
(18, 7, '2024-11-18 16:03:03'),
(18, 7, '2024-11-18 16:03:04'),
(18, 7, '2024-11-18 16:03:04'),
(18, 7, '2024-11-18 16:03:05'),
(17, 7, '2024-11-18 16:03:12'),
(18, 7, '2024-11-18 16:03:32'),
(18, 7, '2024-11-18 16:03:54'),
(18, 7, '2024-11-18 16:03:55'),
(18, 7, '2024-11-18 16:03:55'),
(18, 7, '2024-11-18 16:04:46'),
(18, 7, '2024-11-18 16:04:47'),
(18, 7, '2024-11-18 16:04:47'),
(18, 7, '2024-11-18 16:04:47'),
(18, 7, '2024-11-18 16:04:57'),
(18, 7, '2024-11-18 16:04:57'),
(18, 7, '2024-11-18 16:04:58'),
(18, 7, '2024-11-18 16:05:07'),
(18, 7, '2024-11-18 16:05:07'),
(18, 7, '2024-11-18 16:05:07'),
(18, 7, '2024-11-18 16:05:15'),
(18, 7, '2024-11-18 16:05:15'),
(18, 7, '2024-11-18 16:05:15'),
(18, 7, '2024-11-18 16:05:27');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(2, 'TV Show'),
(4, 'Movie'),
(5, 'hero');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `movie_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`movie_id`, `user_id`) VALUES
(20, 7),
(18, 7);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(11) NOT NULL,
  `genre_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre_id`, `genre_name`) VALUES
(1, 'Action'),
(2, 'Drama'),
(3, 'Comedy'),
(4, 'Horror'),
(5, 'Science Fiction'),
(6, 'Romance'),
(7, 'Thriller'),
(8, 'Adventure'),
(9, 'Fantasy'),
(10, 'Documentary');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` varchar(600) NOT NULL,
  `genre` int(11) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `category` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `url` varchar(200) NOT NULL,
  `thumbnail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `title`, `description`, `genre`, `duration`, `category`, `year`, `url`, `thumbnail`) VALUES
(17, 'Black Bags', 'A suspenseful drama about a group of people forced to confront their pasts when an unexpected package arrives, leading to a tangled web of secrets and lies.', 2, '90', 4, '2023', 'https://vidsrc.me/embed/movie?imdb=tt12718392', '../assets/movie_images/6739ff362bd9c_blackbags.jpg'),
(18, 'Catch a Falling Star', 'A heartfelt romantic comedy about two strangers who meet unexpectedly and learn valuable lessons about love and the importance of taking chances.', 6, '102', 4, '2023', 'https://vidsrc.me/embed/movie?imdb=tt0175245', '../assets/movie_images/6739ffac2a119_catch_a_star.jpg'),
(19, 'Dark Paradise', 'A haunting thriller set in a secluded island resort, where a group of vacationers uncovers a dark conspiracy that could alter their lives forever.', 4, '115', 4, '2023', 'https://vidsrc.me/embed/movie?imdb=tt12389236', '../assets/movie_images/6739ffe0deb75_dark_paradise.jpg'),
(20, 'Jingle Bell Run', 'A Christmas romantic comedy where two people meet during a holiday marathon, facing hilarious and heartwarming challenges along the way.', 6, '98', 4, '2024', 'https://vidsrc.me/embed/movie?imdb=tt32432584', '../assets/movie_images/673a003619234_jingle.jpg'),
(21, 'Zombeez', 'In a world where zombie bees threaten humanity, a group of survivors must race against time to develop a cure and save the world.', 5, '105', 4, '2024', 'https://vidsrc.me/embed/movie?imdb=tt13561006', '../assets/movie_images/673a0072ec36c_zombeez.jpg'),
(22, 'Wrong Numbers', 'A suspense-filled thriller revolving around a series of mistaken calls that leads to a deadly game of cat and mouse.', 7, '105', 4, '2024', 'https://vidsrc.me/embed/movie?imdb=tt27505521', '../assets/movie_images/673a021ba5416_wrong_numbers.jpg'),
(23, 'Deported Women of the SS Special Section', 'A gritty exploitation film set during World War II, focusing on the brutal lives of women who were imprisoned by the SS.', 2, '95', 4, '1976', 'https://vidsrc.me/embed/movie?imdb=tt0074395', '../assets/movie_images/673a02523ebdb_deported.jpg'),
(24, 'Titanic: The Musical', 'A theatrical adaptation of the epic story of the Titanic disaster, blending historical events with powerful musical performances.', 2, '120', 4, '2023', 'https://vidsrc.me/embed/movie?imdb=tt28656527', '../assets/movie_images/673a028211762_titanic.jpg'),
(25, 'A Missed Connection', 'A charming romance about two people who nearly meet several times over the years but only connect when fate leads them to each other.', 6, '98', 4, '2024', 'https://vidsrc.me/embed/movie?imdb=tt27773310', '../assets/movie_images/673a03301cd37_missed_connection.jpg'),
(26, 'How to Win a Prince', 'A romantic comedy about a young woman who unexpectedly finds herself competing in a royal contest to win the heart of a prince.', 3, '90', 4, '2023', 'https://vidsrc.me/embed/movie?imdb=tt27041265', '../assets/movie_images/673a037a53085_winaprince.jpg'),
(27, 'A Vineyard Christmas', 'A heartfelt holiday romance set on a vineyard, where love blossoms during the holiday season despite past heartaches.', 1, '85', 4, '2023', 'https://vidsrc.me/embed/movie?imdb=tt28669205', '../assets/movie_images/673a03b92e379_vineyard.jpg'),
(28, 'Team Bride', 'A fun comedy about a group of bridesmaids who get into hilarious situations as they plan the perfect wedding.', 3, '110', 4, '2023', 'https://vidsrc.me/embed/movie?imdb=tt21239272', '../assets/movie_images/673a0400c718f_team_bride.jpg'),
(29, 'Woman Wanted', 'A thriller about a young woman whose life is turned upside down after she becomes the target of an obsessive stalker.', 7, '95', 4, '1999', 'https://vidsrc.me/embed/movie?imdb=tt0158369', '../assets/movie_images/673a043097e6c_womanwanted.jpg'),
(30, 'Silent Bite', 'A suspense-filled horror movie where a young woman discovers a horrifying secret about a small town plagued by deadly creatures.', 4, '100', 4, '2024', 'https://vidsrc.me/embed/movie?imdb=tt32631883', '../assets/movie_images/673a045ce16d3_silentBite.jpg'),
(31, 'Trance', 'A psychological thriller that delves into the mind of a man who is trying to uncover the truth about a crime he committed while in a trance-like state.', 7, '105', 4, '2006', 'https://vidsrc.me/embed/movie?imdb=tt0762115', '../assets/movie_images/673a049021dea_trance.jpg'),
(32, 'Galactic War', 'A fast-paced sci-fi adventure set in a distant galaxy, where an intergalactic war threatens the existence of multiple civilizations.', 5, '120', 4, '2024', 'https://vidsrc.me/embed/movie?imdb=tt27607664', '../assets/movie_images/673a04cb3fb3b_galacticwar.jpg'),
(33, 'Avengers: Infinity War', 'Thanos, a powerful cosmic despot, seeks to collect all six Infinity Stones to bend reality to his will. As the Avengers and their allies protect the world, this new threat emerges, posing a danger too great for any single hero to defeat.', 1, '149', 5, '2018', 'https://vidsrc.me/embed/movie?tmdb=299536', '../assets/movie_images/673a15d918c66_244817-final.jpg'),
(34, 'Spider-Man 2', 'Peter Parker struggles with his identity crisis and steps away from being Spider-Man, leaving the city vulnerable to Doc Ock. Meanwhile, he can\'t confess his love for Mary Jane, and Harry Osborn\'s anger towards him starts to grow.', 1, '127', 5, '2004', 'https://vidsrc.me/embed/movie?tmdb= 558', '../assets/movie_images/673a16fbc50e1_spiderman2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `rating_id` int(11) NOT NULL,
  `rating_name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`rating_id`, `rating_name`) VALUES
(1, '1 star'),
(2, '2 stars'),
(3, '3 stars'),
(4, '4 stars'),
(5, '5 stars');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `user_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `review` varchar(250) NOT NULL,
  `rating` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`user_id`, `movie_id`, `review`, `rating`, `timestamp`) VALUES
(7, 18, 'This is the worst movie ever', 1, '2024-11-18 15:55:22'),
(7, 18, 'Hmmm', 3, '2024-11-18 16:01:49');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(250) NOT NULL,
  `dob` date DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `user_role` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `dob`, `image`, `user_role`) VALUES
(1, 'nycokic', 'togovulol@mailinator.com', '$2y$10$1cqn.IVDfb1KqY/Y24pp.uLZbnX.ad7VhhZsPxjR6bMbtCQVh/r4G', NULL, NULL, 2),
(2, 'byzynegyxu', 'jijehonave@mailinator.com', '$2y$10$JOq7E3QNe5WDqLIt5xshB.9JtyBGK3wEDJH6ucnu7IgwCxGH1S9qq', NULL, NULL, 2),
(3, 'remuxyd', 'sykoriwyzy@mailinator.com', '$2y$10$SEpGGEa4fLlkWlnMJlCqU.npo8P1Fka6QzMvnKCNuD0FMjmeapgEe', NULL, NULL, 2),
(4, 'mydijoxe', 'keqehy@mailinator.com', '$2y$10$uSuiuq3VC00hO.HrAdK1i.izKVruPaCcemZEzx26HX7gxRDfiiVz2', NULL, NULL, 2),
(5, 'jucyxak', 'kuryqaco@mailinator.com', '$2y$10$N7K0/gbG1tuM/K6LP1jg5OiN.FxJq0PWxOqm6auXGPQgqWl0jJA2i', NULL, NULL, 2),
(6, 'dymutir', 'kexeqofoqi@mailinator.com', '$2y$10$6q4hg5O3MeyKF8QhD0DFt.dpvSnFsyAtcjmFjS935JO2ti7vLuKS2', NULL, NULL, 2),
(7, 'wihamiv', 'nekyg@mailinator.com', '$2y$10$lW/wk6JMUjRHGZq.rJcbWO32RDxX9jldXq08uyoBS/VvekSKqK1ky', NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`),
  ADD KEY `category` (`category`),
  ADD KEY `genre` (`genre`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_role` (`user_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity`
--
ALTER TABLE `activity`
  ADD CONSTRAINT `activity_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`),
  ADD CONSTRAINT `activity_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`cat_id`),
  ADD CONSTRAINT `movies_ibfk_2` FOREIGN KEY (`genre`) REFERENCES `genre` (`genre_id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_role`) REFERENCES `role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
