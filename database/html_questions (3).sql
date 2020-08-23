-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2020 at 10:15 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizzer`
--

-- --------------------------------------------------------

--
-- Table structure for table `html_questions`
--

CREATE TABLE `html_questions` (
  `Question_no` int(11) NOT NULL,
  `Question` text NOT NULL,
  `Code` text NOT NULL,
  `type` enum('HTML') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `html_questions`
--

INSERT INTO `html_questions` (`Question_no`, `Question`, `Code`, `type`) VALUES
(1, 'What does HTML stands for?', '', 'HTML'),
(2, 'Anchor tag is inline tag or not', '', 'HTML'),
(3, 'What is the difference between XML and HTML?', '', 'HTML'),
(4, 'Who was the primary author of HTML?', '', 'HTML'),
(5, 'Which of the following attributes comes in handy when borders have to be put between groups of columns instead of every column?', '', 'HTML'),
(6, 'Caption Tag in HTML ?', '', 'HTML'),
(7, 'DOM stands for', '', 'HTML'),
(8, 'Text/Html is called the __________ of the page', '', 'HTML'),
(9, 'Which of the following type attributes of input element defines control for entering a telephone number?', '', 'HTML'),
(10, 'Which element represents marked or highlighted text for reference purposes?', '', 'HTML'),
(11, ' What are meta tags used for?', '', 'HTML'),
(12, 'Which of the following tag represents a piece of content that is only slightly related to the rest of the page in HTML5?', '', 'HTML'),
(13, 'How many graphic object types are allowed by SVG?', '', 'HTML'),
(14, '<canvas > element is only a ____________to the graphics.', '', 'HTML'),
(15, 'The __________ is an instruction to the web browser about what version of HTML the page is written in', '', 'HTML'),
(16, 'Ancestor of all other elements on the page is called________', '', 'HTML'),
(17, 'Canvas is able to draw the 2D graphics using______', '', 'HTML'),
(18, 'What do you mean by SVG?', '', 'HTML'),
(19, ' The sessionStorage object stores the data for __________', '', 'HTML'),
(20, 'Which attribute will play the audio embed in the audio element continuously?', '', 'HTML');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `html_questions`
--
ALTER TABLE `html_questions`
  ADD PRIMARY KEY (`Question_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `html_questions`
--
ALTER TABLE `html_questions`
  MODIFY `Question_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
