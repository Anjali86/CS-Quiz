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
-- Table structure for table `css_questions`
--

CREATE TABLE `css_questions` (
  `Question_no` int(11) NOT NULL,
  `Question` text NOT NULL,
  `Code` text NOT NULL,
  `type` enum('CSS') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `css_questions`
--

INSERT INTO `css_questions` (`Question_no`, `Question`, `Code`, `type`) VALUES
(1, 'CSS stands for', '', 'CSS'),
(2, 'How can you created rounded corners using CSS3?', '', 'CSS'),
(3, 'How to force a word wrap using CSS3?', '', 'CSS'),
(4, 'Which of these are valid CSS3 transformation statements.', '', 'CSS'),
(5, 'How to re-size/scale objects using CSS3?', '', 'CSS'),
(6, 'Does the box-shadow support all browsers ?', '', 'CSS'),
(7, ' What does RGBa mean?', '', 'CSS'),
(8, 'Box-Shadow is a property that allows developers to apply a....', '', 'CSS'),
(9, 'Which prefix do you need to get CSS3 properties to work on older Mozilla Firefox browsers?', '', 'CSS'),
(10, 'Can you have multiple box-shadows?', '', 'CSS'),
(11, 'How do four values work on border-radius', '', 'CSS'),
(12, 'How to you modify a border image using CSS3?', '', 'CSS'),
(13, 'The ____________ property specifies the stack order of an element', '', 'CSS'),
(14, 'For users that use the tab key to navigate websites, what property shows moving from one element to another using this behavior?', '', 'CSS'),
(15, 'What property can you use to set the spacing in between lines of text?', '', 'CSS'),
(16, 'What property would you use to set an image instead of a standard bullet in a list?', '', 'CSS'),
(17, 'How to create transition effects using CSS3?', '', 'CSS'),
(18, 'Where in an HTML document is the correct place to refer to an external style sheet?', '', 'CSS'),
(19, 'What are the first three values of text-shadow in order?', '', 'CSS'),
(20, 'True or False. In vertical offsets for box shadows, the (-1) means that the box-shadow will be below the box?', '', 'CSS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `css_questions`
--
ALTER TABLE `css_questions`
  ADD PRIMARY KEY (`Question_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `css_questions`
--
ALTER TABLE `css_questions`
  MODIFY `Question_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
