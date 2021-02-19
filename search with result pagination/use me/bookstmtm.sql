-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2021 at 09:08 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstmtm`
--

-- --------------------------------------------------------

--
-- Table structure for table `angular`
--

CREATE TABLE `angular` (
  `id` int(11) NOT NULL,
  `book` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `indexing` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `angular`
--

INSERT INTO `angular` (`id`, `book`, `author`, `file`, `indexing`) VALUES
(2, 'sam teach yourself angular - dley', 'dley', 'jvjjg', 'SM TX YRSLF ANKLR TL'),
(3, 'A smarter way to learn html & c - mark myers', 'mark mayer', 'nnv', 'A SMRTR W T LRN TML K MRK MYRS '),
(4, 'Angular for beginner -Elisabeth Robson, Eric Freeman', 'Elisabeth Robson, Eric Freeman', 'hfg', 'ANKLR FR BJNR ELSB0 RBSN ERK FRMN');

-- --------------------------------------------------------

--
-- Table structure for table `bootstrap`
--

CREATE TABLE `bootstrap` (
  `id` int(11) NOT NULL,
  `book` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `indexing` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bootstrap`
--

INSERT INTO `bootstrap` (`id`, `book`, `author`, `file`, `indexing`) VALUES
(2, 'sam teach youself bootstrap in 24 hours - ray yao', 'ray yao', 'foooo', 'SM TX YSLF BTSTRP IN HRS R Y'),
(3, 'bootstrap for beginner - damilare', 'damilare', 'hchchc', 'BTSTRP FR BJNR TMLR ');

-- --------------------------------------------------------

--
-- Table structure for table `c`
--

CREATE TABLE `c` (
  `id` int(11) NOT NULL,
  `book` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `indexing` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c`
--

INSERT INTO `c` (`id`, `book`, `author`, `file`, `indexing`) VALUES
(3, 'easy step in c sharp - you [by in s]', 'unknown', 'gh', 'ES STP IN K XRP Y B IN S ');

-- --------------------------------------------------------

--
-- Table structure for table `catone`
--

CREATE TABLE `catone` (
  `id` int(11) NOT NULL,
  `book` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `indexing` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catone`
--

INSERT INTO `catone` (`id`, `book`, `author`, `file`, `indexing`) VALUES
(2, 'EKSU CIV 102 - UNKNOWN', 'unknown', 'hvhvh', 'EKS SF UNKNN '),
(4, 'lautech mth 302 - unknown', 'unknown', 'nfn', 'LTX M0 UNKNN ');

-- --------------------------------------------------------

--
-- Table structure for table `cattwo`
--

CREATE TABLE `cattwo` (
  `id` int(11) NOT NULL,
  `book` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `indexing` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cattwo`
--

INSERT INTO `cattwo` (`id`, `book`, `author`, `file`, `indexing`) VALUES
(2, 'EKSU MTH 101 - adekanmbi', 'adekanmbi', 'hfh', 'EKS M0 ATKNM '),
(3, 'shear stress - charles O.', 'charles O.', 'hghgh', 'XR STRS XRLS O '),
(4, 'bending moment and shear stress - damilare', 'damilare', 'jjjgjg', 'BNTNK MMNT ANT XR STRS TMLR ');

-- --------------------------------------------------------

--
-- Table structure for table `cplus`
--

CREATE TABLE `cplus` (
  `id` int(11) NOT NULL,
  `book` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `indexing` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cplus`
--

INSERT INTO `cplus` (`id`, `book`, `author`, `file`, `indexing`) VALUES
(3, 'advance cplus textbook - carey', 'carey', 'jhj', 'ATFNS KPLS TKSTBK KR ');

-- --------------------------------------------------------

--
-- Table structure for table `csharp`
--

CREATE TABLE `csharp` (
  `id` int(11) NOT NULL,
  `book` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `indexing` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `csharp`
--

INSERT INTO `csharp` (`id`, `book`, `author`, `file`, `indexing`) VALUES
(2, '12 hours with csharp - sola', 'sola', 'hhh', 'HRS W0 KXRP SL ');

-- --------------------------------------------------------

--
-- Table structure for table `css`
--

CREATE TABLE `css` (
  `id` int(11) NOT NULL,
  `book` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `indexing` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `css`
--

INSERT INTO `css` (`id`, `book`, `author`, `file`, `indexing`) VALUES
(5, 'A simple way to learn css - elizabeth castro', 'elizabeth castro', 'hhhf', 'A SMPL W T LRN KS ELSB0 KSTR '),
(6, 'sam teach yourself css - dley', 'dley', 'kjj', 'SM TX YRSLF KS TL ');

-- --------------------------------------------------------

--
-- Table structure for table `html`
--

CREATE TABLE `html` (
  `id` int(11) NOT NULL,
  `book` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `indexing` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `html`
--

INSERT INTO `html` (`id`, `book`, `author`, `file`, `indexing`) VALUES
(18, 'eyes on you', 'eyes', 'jdjd', 'EYS ON Y'),
(19, 'dami html book', 'adekanmbi dley', 'doodle', 'TM TML BK '),
(20, 'html 101', 'joe fary', 'hdhd', 'TML S'),
(21, 'joh html three', 'joh', 'thhhj', 'J TML 0R ');

-- --------------------------------------------------------

--
-- Table structure for table `java`
--

CREATE TABLE `java` (
  `id` int(11) NOT NULL,
  `book` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `indexing` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `java`
--

INSERT INTO `java` (`id`, `book`, `author`, `file`, `indexing`) VALUES
(3, '5th  java edition - damilare', 'damilare', 'jgjg', '0 JF ETXN TMLR ');

-- --------------------------------------------------------

--
-- Table structure for table `js`
--

CREATE TABLE `js` (
  `id` int(11) NOT NULL,
  `book` varchar(20) NOT NULL,
  `author` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `indexing` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `js`
--

INSERT INTO `js` (`id`, `book`, `author`, `file`, `indexing`) VALUES
(2, 'eloquent javascript ', 'goke', 'jjj', 'ELKNT JFSKRPT KK'),
(3, 'Javascript in 24 hou', 'Emma Emma', 'jj', 'JFSKRPT IN HRS EM EM');

-- --------------------------------------------------------

--
-- Table structure for table `php`
--

CREATE TABLE `php` (
  `id` int(11) NOT NULL,
  `book` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `indexing` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `php`
--

INSERT INTO `php` (`id`, `book`, `author`, `file`, `indexing`) VALUES
(3, 'functional php - gilles Crettenands', 'gilles Crettenands', 'hdhh', 'FNKXNL FP JLS KRTNNTS ');

-- --------------------------------------------------------

--
-- Table structure for table `phyton`
--

CREATE TABLE `phyton` (
  `id` int(11) NOT NULL,
  `book` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `indexing` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phyton`
--

INSERT INTO `phyton` (`id`, `book`, `author`, `file`, `indexing`) VALUES
(3, 'phyton for me - emma', 'emma', 'nvn', 'FTN FR M EM ');

-- --------------------------------------------------------

--
-- Table structure for table `react`
--

CREATE TABLE `react` (
  `id` int(11) NOT NULL,
  `book` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `indexing` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `react`
--

INSERT INTO `react` (`id`, `book`, `author`, `file`, `indexing`) VALUES
(2, 'advance react - tope', 'tope', 'jjv', 'ATFNS RKT TP '),
(3, 'react impatient - liver W.', ' liver W.', 'hhh', 'RKT IMPTNT LFR'),
(4, 'Angular for beginner - Elisabeth Castro', 'Elizabeth Castro, Bruce Hyslop', 'jgjjg', 'ANKLR FR BJNR ELSB0 KSTR');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(220) NOT NULL,
  `comment_sender_name` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(1, 0, '  hi everybody\r\n', 'adekanmbidamilare', '2020-11-07 17:34:49'),
(2, 0, '  hello!', 'dley', '2021-02-16 00:01:25'),
(3, 1, '@ damilare. hellos', 'dley', '2021-02-16 00:01:53'),
(4, 0, '  hello. my is child of JESUS CHRIST', 'admin', '2021-02-19 19:59:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_like_unlike`
--

CREATE TABLE `tbl_like_unlike` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `like_unlike` int(2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `email`, `password`) VALUES
(1, 'adekanmbidamilare', 'adekanmbidamilare@gmail.com', 'a55f0a1b8e5d8e3d1b648b93d509172c'),
(2, 'dley', 'adekanmbidamilare@gmail.com', 'a55f0a1b8e5d8e3d1b648b93d509172c'),
(3, 'admin', 'adekanmbidamilare@gmail.com', 'a55f0a1b8e5d8e3d1b648b93d509172c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `angular`
--
ALTER TABLE `angular`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bootstrap`
--
ALTER TABLE `bootstrap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c`
--
ALTER TABLE `c`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catone`
--
ALTER TABLE `catone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cattwo`
--
ALTER TABLE `cattwo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cplus`
--
ALTER TABLE `cplus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `csharp`
--
ALTER TABLE `csharp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `css`
--
ALTER TABLE `css`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `html`
--
ALTER TABLE `html`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `java`
--
ALTER TABLE `java`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `js`
--
ALTER TABLE `js`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `php`
--
ALTER TABLE `php`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phyton`
--
ALTER TABLE `phyton`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `react`
--
ALTER TABLE `react`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `tbl_like_unlike`
--
ALTER TABLE `tbl_like_unlike`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `angular`
--
ALTER TABLE `angular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bootstrap`
--
ALTER TABLE `bootstrap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `c`
--
ALTER TABLE `c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `catone`
--
ALTER TABLE `catone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cattwo`
--
ALTER TABLE `cattwo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cplus`
--
ALTER TABLE `cplus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `csharp`
--
ALTER TABLE `csharp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `css`
--
ALTER TABLE `css`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `html`
--
ALTER TABLE `html`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `java`
--
ALTER TABLE `java`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `js`
--
ALTER TABLE `js`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `php`
--
ALTER TABLE `php`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `phyton`
--
ALTER TABLE `phyton`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `react`
--
ALTER TABLE `react`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_like_unlike`
--
ALTER TABLE `tbl_like_unlike`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
