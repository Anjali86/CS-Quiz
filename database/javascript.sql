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
-- Table structure for table `javascript`
--

CREATE TABLE `javascript` (
  `Question_no` int(11) NOT NULL,
  `Question` text NOT NULL,
  `Code` text NOT NULL,
  `type` enum('javascript') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `javascript`
--

INSERT INTO `javascript` (`Question_no`, `Question`, `Code`, `type`) VALUES
(1, 'Which of the following is a server-side Java Script object?', '', 'javascript'),
(2, ' Java script can be used for Storing the form\'s contents to a database file on the server', '', 'javascript'),
(3, ' Which of the following is the tainted property of a window object in Java Script?', '', 'javascript'),
(4, 'Which of the following is used to capture all click events in a window?', '', 'javascript'),
(5, 'What is the HTML tag under which one can write the JavaScript code?', '', 'javascript'),
(6, 'Choose the correct JavaScript syntax to change the content of the following HTML code.  <p id=\"geek\"> GeeksforGeeks </p>', '', 'javascript'),
(7, 'Which of the following is the correct syntax to display “GeeksforGeeks” in an alert box using JavaScript?', '', 'javascript'),
(8, 'Predict the output of the following JavaScript code.  ', '  a = 8 + \"8\"; <br/> document.write(a);   ', 'javascript'),
(9, 'Which of the following is not a valid JavaScript variable name?', '', 'javascript'),
(10, 'What is negative infinity in Java script?', '', 'javascript'),
(11, 'Predict the output of the following JavaScript code.   ', '     var x=5; <br/>  var y=6; <br/> var res=eval(\"x*y\");  <br/>document.write(res);     ', 'javascript'),
(12, '___________ JavaScript is also called client-side JavaScript.', '', 'javascript'),
(13, 'Why so Java and JavaScript have similar name?', '', 'javascript'),
(14, 'What is the alternate name for Java script?', '', 'javascript'),
(15, 'What java wrapper type is created when a JavaScript object is sent to Java?', '', 'javascript'),
(16, ' Java Script entities start with ____________ and end with ______________', '', 'javascript'),
(17, 'How to append a value to an array of Java Script?', '', 'javascript'),
(18, 'Predict the output of the following JavaScript code.  <script type=\"text/javascript\" language=\"javascript\">     var a = \"GeeksforGeeks\";  var result = a.substring(4, 5);  document.write(result);     </script> ', '', 'javascript'),
(19, 'Which of the ways below is incorrect of instantiating a date?', '', 'javascript'),
(20, 'Which of the following is used to capture all click events in a window?', '', 'javascript');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `javascript`
--
ALTER TABLE `javascript`
  ADD PRIMARY KEY (`Question_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `javascript`
--
ALTER TABLE `javascript`
  MODIFY `Question_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
