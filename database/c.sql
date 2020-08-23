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
-- Table structure for table `c`
--

CREATE TABLE `c` (
  `Question_no` int(11) NOT NULL,
  `Question` text NOT NULL,
  `Code` text NOT NULL,
  `type` enum('C') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `c`
--

INSERT INTO `c` (`Question_no`, `Question`, `Code`, `type`) VALUES
(1, ' The types of linkages are,', '', 'C'),
(2, 'Choose the correct statement that is a combination of these two statements,', 'Statement 1: char *p; <br/>\r\n   \r\nStatement 2: p = (char*) malloc(100);', 'C'),
(3, ' Choose the function that is most appropriate for reading in a multi-word string?', '', 'C'),
(4, 'What is the output of the following program?', '#include<stdio.h> <br/>  main()<br/> {	<br/>     register int x = 5;  <br/>    int *p;  <br/>   p=&x;  <br/>   x++; <br/>    printf(\"%d\",*p); }', 'C'),
(5, 'What is the output of the following program?', '', 'C'),
(6, 'A macro can execute faster than a function.', '', 'C'),
(7, 'The given below program allocates the memory, what function will you use to free the allocated memory?', '#include<stdio.h><br/> #include<stdlib.h><br/>  #define MAXROW 4<br/> # define MAXCOL 5 <br/> int main ()<br/> {  <br/>  int **p, i, j     <br/>   p = (int **) malloc(MAXROW * sizeof(int*));  <br/>  return 0;<br/> }', 'C'),
(8, ' In the following code, what is \'P\'?', 'Typedef char *charp; <br/>       const charp P;', 'C'),
(9, 'Which of the following statement shows the correct implementation of nested conditional operation by finding greatest number out of three numbers?', '', 'C'),
(10, 'What will be the output of the given below code?', '#include&lt;stdio.h&gt; <br/>   int main() <br/>{   <br/> const int *ptr = &amp;i;  <br/>      char str[] = &quot;Welcome&quot;; <br/>   s = str;  <br/>  while(*s) <br/>  printf(&quot;%c&quot;, *s++); <br/>   return 0;<br/> }', 'C'),
(11, 'What will be the output of the given below code?', '#include &quot;stdio.h&quot; <br/>int main()<br/>  {  <br/>  int x, y = 5, z = 5;  <br/>  x = y == z;  <br/>  printf(&quot;%d&quot;, x);<br/>   getchar();<br/>    return 0; <br/> }', 'C'),
(12, 'What will be the output of the given below code?', '#include &lt;stdio.h&gt; <br/> int main() <br/> {   <br/>   int i = 3;   <br/>   printf(&quot;%d&quot;, (++i)++);    <br/>  return 0; <br/> }', 'C'),
(13, 'What is the output of the following program?', '#include&lt;stdio.h&gt; <br/>  void f() <br/>  { <br/>    static int i;  <br/>     ++i;  <br/>   printf(&quot;%d&quot;, i); <br/>  }<br/>  main() { <br/>    f(); <br/>    f();   <br/>  f(); <br/> }', 'C'),
(14, 'What will be the output of the given below code?', 'struct node <br/>   {    <br/>   int i;   <br/>    float j; <br/>  };  <br/>  struct node *s[10]; ', 'C'),
(15, 'What does the following fragment of C-program print?', 'char c[] = \"GATE2011\";  <br/> char *p =c;  <br/> printf(\"%s\", p + p[3] - p[1]) ; ', 'C'),
(16, '“typedef” in C basically works as an alias. Which of the following is correct for “typedef”?', '', 'C'),
(17, 'To store a word/sentence declare a variable of the type \'string\'.', '', 'C'),
(18, ' In the standard library of C programming language, which of the following header file is designed for basic mathematical operations?', '', 'C'),
(19, ' An operation with only one operand is called unary operation.', '', 'C'),
(20, 'In the given below statement, what does the “pf” indicate?', 'int (*pf)();', 'C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `c`
--
ALTER TABLE `c`
  ADD PRIMARY KEY (`Question_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `c`
--
ALTER TABLE `c`
  MODIFY `Question_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
