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
-- Table structure for table `php_questions`
--

CREATE TABLE `php_questions` (
  `Question_no` int(11) NOT NULL,
  `Question` text NOT NULL,
  `Code` text NOT NULL,
  `type` enum('PHP') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `php_questions`
--

INSERT INTO `php_questions` (`Question_no`, `Question`, `Code`, `type`) VALUES
(1, 'The PHP syntax is most similar to:', '', 'PHP'),
(2, 'When using the POST method, variables are displayed in the URL:', '', 'PHP'),
(3, 'Which of the following is true about php variables?', '', 'PHP'),
(4, ' Which of the following is NOT a magic predefined constant?', '', 'PHP'),
(5, 'Which of the following function sorts an array in reverse order?', '', 'PHP'),
(6, 'If there is any problem in loading a file then the include() function generates a warning but the script will continue execution.', '', 'PHP'),
(7, 'Can you assign the default values to a function parameters?', '', 'PHP'),
(8, 'Which of the following method returns current date and time?', '', 'PHP'),
(9, 'Which of the following is used to declare a constant', '', 'PHP'),
(10, 'What gets printed?\r\n\r\n', '$var = \'false\'; <br/> if ($var) <br/> {   <br/>  echo \'true\';  <br/>} else {     echo \'false\'; }', 'PHP'),
(11, ' Which of the following is the way to create comments in PHP?', '', 'PHP'),
(12, 'What does PHP stand for?', '', 'PHP'),
(13, ' How do we access the value of \'d\' later?\r\n ', '$a = array(     \'a\',     3 => \'b\',     1 => \'c\',     \'d\' ); <br/>', 'PHP'),
(14, 'What gets printed?\r\n\r\n', 'class MyException extends Exception {}  <br/>try {   throw new MyException(\'Oops!\'); } <br/> catch (Exception $e) <br/> {   <br/>echo \"Caught Exception \"; <br/> } <br/>catch (MyException $e) { <br/>  echo \"Caught MyException \"; <br/> }', 'PHP'),
(15, 'Which statement about the code below is correct?', '', 'PHP'),
(16, 'What is the strpos() function used for?', '', 'PHP'),
(17, ' Which of the following differences are valid between PHP 4 and PHP 5?', '', 'PHP'),
(18, 'Can we use include (”test.php”) two times in a PHP page “test1.PHP”?', '', 'PHP'),
(19, ' ____________ function in PHP Returns a list of response headers sent (or ready to send)', '', 'PHP'),
(20, 'What is array_keys() used for?', '', 'PHP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `php_questions`
--
ALTER TABLE `php_questions`
  ADD PRIMARY KEY (`Question_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `php_questions`
--
ALTER TABLE `php_questions`
  MODIFY `Question_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
