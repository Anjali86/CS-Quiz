-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2020 at 04:02 PM
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
-- Table structure for table `python`
--

CREATE TABLE `python` (
  `Question_no` int(11) NOT NULL,
  `Question` text NOT NULL,
  `Code` text NOT NULL,
  `type` enum('python') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `python`
--

INSERT INTO `python` (`Question_no`, `Question`, `Code`, `type`) VALUES
(1, 'What will be the output of the following code : ', 'print type(type(int)) ', 'python'),
(2, 'Which is invalid in python for z = 5 ?', '', 'python'),
(3, 'Which operator is right-associative?', '', 'python'),
(4, 'What command is used to insert 6 in a list ‘‘L’’ at 3rd position ?', '', 'python'),
(5, 'Which event among them is fired when the right mouse button is released?', '', 'python'),
(6, 'We can create an image in canvas. Select the option to do so?', '', 'python'),
(7, 'What is called when a function is defined inside a class?', '', 'python'),
(8, 'What is the output of the following code : ', 'print 9//2', 'python'),
(9, 'Which function overloads the >> operator?', '', 'python'),
(10, 'Which operator is overloaded by the or() function?', '', 'python'),
(11, 'What is the output of the following program : ', ' i = 0 <br/>while i < 3:   <br/>     print i   <br/>     i++    <br/>    print i+1', 'python'),
(12, 'How do you insert COMMENTS in Python code?', '', 'python'),
(13, 'What is the correct syntax to output the type of a variable or object in Python?', '', 'python'),
(14, 'What is the correct way to create a function in Python?', '', 'python'),
(15, 'Which method can be used to remove any whitespace from both the beginning and the end of a string?', '', 'python'),
(16, 'Which of these collections defines a LIST?', '', 'python'),
(17, 'Which of these collections defines a DICTIONARY?', '', 'python'),
(18, 'Which collection does not allow duplicate members?', '', 'python'),
(19, 'How do you start writing a for loop in Python?', '', 'python'),
(20, 'Which of these is not a core data type?', '', 'python');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `python`
--
ALTER TABLE `python`
  ADD PRIMARY KEY (`Question_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `python`
--
ALTER TABLE `python`
  MODIFY `Question_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
