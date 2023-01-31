-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jan 31, 2023 at 11:07 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int NOT NULL,
  `topic` enum('science','geography','basic logic','css','javascript') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_text` varchar(127) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer-1` varchar(127) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer-2` varchar(127) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer-3` varchar(127) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correct` varchar(127) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `topic`, `question_text`, `answer-1`, `answer-2`, `answer-3`, `correct`) VALUES
(1, 'science', 'What is the largest animal that inhabits the Earth?\r\n', 'The blue whale.', 'Elephant', 'Giraffe', 'answer-1'),
(2, 'science', 'Birds evolved from dinosaurs. True or false? ', 'True', 'False', NULL, 'answer-1'),
(3, 'science', 'Which organ of the human body consumes the most energy?', 'The brain', 'The heart', 'The lungs', 'answer-1'),
(4, 'science', 'In which galaxy is the Earth located?', 'In the Milky Way', 'In Narnia', 'In Andromeda', 'answer-1'),
(5, 'science', 'What is the chemical formula of water?', 'O2H', 'H1C', 'H2O', 'answer-3'),
(6, 'science', 'Are humans carnivores, omnivores or herbivores?', 'Hervibores', 'Omnivores', 'Carnivores', 'answer-2'),
(7, 'science', 'What is the only natural satellite of the Earth? ', 'The moon', 'The sun', 'The stars', 'answer-1'),
(8, 'science', 'What is the age of the universe? ', 'Born yesterday', 'Approximately thirteen billion years', 'Five million years', 'answer-2'),
(9, 'science', 'Could you still live if the Earth stopped spinning? Yes or no. ', 'True', 'False', NULL, 'answer-2'),
(10, 'science', 'Tyrannosaurus rex was the largest dinosaur that ever lived. True or False?', 'True', 'False', NULL, 'answer-2'),
(11, 'science', 'What is the death of each member of a species called? ', 'Disappearance', 'Extinction', NULL, 'answer-2'),
(12, 'science', 'What is the closest planet to the Sun?', 'Mercury', 'Saturn', NULL, 'answer-1'),
(13, 'science', 'An electron carries a positive charges?', 'True', 'False', NULL, 'answer-2'),
(14, 'science', 'What are the 206 bones of the human body?', '242', '206', '300', 'answer-2'),
(15, 'science', 'What is the strongest bone in the human body?', 'Skull', 'Rib', 'Femur', 'answer-3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
