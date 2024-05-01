-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2023 at 02:30 PM
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
-- Database: `ahmed`
--

-- --------------------------------------------------------

--
-- Table structure for table `ap`
--

CREATE TABLE `ap` (
  `id` int(11) NOT NULL,
  `email` varchar(70) DEFAULT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `test_name` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ap`
--

INSERT INTO `ap` (`id`, `email`, `first_name`, `last_name`, `test_name`, `phone_number`, `address`, `profile_pic`, `resume`, `payment`) VALUES
(1, NULL, 'ahmed    ', 'shahbaz                                                                    ', 'NAT    ', '03320143701    ', 'KARACHI  BB', 'marker_icon.png', 'S23-SE-ASSIGNMENT 3 (2).docx', ''),
(2, NULL, 'ALI', 'RAZA', 'GAT', '030303030303', 'LAHORE', 'marker_icon1.png', 'S23-CS-CN-5B-LAB15-T15-s21-024-Moomal Mushtaq. (1).pdf', ''),
(3, NULL, 'hamza', 'ali', 'GAT', '030330300303', 'BURE WALA', 'Capture.PNG', 'S23-SE-ASSIGNMENT 3 (2).docx', ''),
(5, NULL, 'sssssss', 'ssssssssssss', 'nat', '227272727272', 'jsjjs', 'neck-stretch-exercise-illustration.jpg', 'S23-CS-CN-5B-LAB15-T15-s21-024-Moomal Mushtaq. (1).pdf', ''),
(6, NULL, 'ahmed    ', 'shahbaz                                                                    ', 'NAT    ', '03320143701    ', 'KARACHI  BB', 'image-removebg-preview.jpg', 'S23-CS-CN-5B-LAB-T10-s21-024-Moomal Mushtaq.pdf', ''),
(7, NULL, 'fahad', 'ali', 'NAT', '0234567890', 'MULTAN', 'beautiful-woman-doing-abdominal-crunches-white-background-29906334.jpg', 'invoice (2) (1).pdf', ''),
(8, NULL, 'salman ', 'anwar', 'NAT ', '03321111111111 ', 'PAVEL ', 'download.jpeg', 'S23-SE-ASSIGNMENT 3 (1).docx', ''),
(20, NULL, 'Daneyal   ', 'Shahbaz                                                   ', 'GAT General 2023-III   ', '03320143701   ', 'MULTAN D ', 'man-5057800__340.jpg', 'S23-SE-ASSIGNMENT 3 (1).docx', ''),
(21, NULL, 'lol ', 'aslam                 ', 'nat ', '4383383838 ', 'lht ', 'List.png', 'aa.pdf', 'uploads/.jpeg'),
(22, NULL, 'jdsdjdj', 'sksksks', 'skskks', '22222222', 'skksk', 'List.png', 'aa.pdf', ''),
(23, NULL, 'raza', 'ashraf', 'sat', '0987654321', 'buravala', 'WhatsApp Image 2023-05-10 at 5.29.36 PM.jpeg', 'BCSM-S21-022 Ahmed Shahbaz .pdf', ''),
(24, NULL, 'ass', 'aika', 'SAT', '123890', 'lhr', 'WhatsApp Image 2023-05-10 at 5.29.36 PM.jpeg', 'BCSM-S21-022 Ahmed Shahbaz .pdf', ''),
(25, NULL, 'ass', 'aika', 'SAT', '123890', 'lhr', 'WhatsApp Image 2023-05-10 at 5.29.36 PM.jpeg', 'BCSM-S21-022 Ahmed Shahbaz .pdf', ''),
(26, NULL, 'asdf', 'hajaja', 'Sat', '123456789', 'lhr', 'WhatsApp Image 2023-05-10 at 5.29.36 PM.jpeg', 'exam2.pdf', ''),
(27, NULL, 'asdf', 'hajaja', 'Sat', '123456789', 'lhr', 'WhatsApp Image 2023-05-10 at 5.29.36 PM.jpeg', 'exam2.pdf', ''),
(28, NULL, 'asdfaaa', 'hajajaaaa', 'Sat', '123456789', 'lhr', 'WhatsApp Image 2023-05-10 at 5.29.36 PM.jpeg', 'exam2.pdf', ''),
(29, NULL, 'lol', 'sjsjjs', 'Sat', '1828', 'djjd', 'images.jpeg', 'WhatsApp Image 2023-05-10 at 5.29.35 PM.pdf', 'uploads/.jpeg'),
(30, NULL, 'Waleed', 'ashraf', 'GAT', '0987654', 'dfghjk', 'q.jpeg', 'BCSM-S21-022 Ahmed Shahbaz .pdf', 'uploads/0987654.jpeg'),
(31, NULL, 'Muneeb Ahmad', 'ahmad', 'asd', '09876543', 'sadasd', 'images.jpeg', 'LabExam-web-5A (1).pdf', 'uploads/09876543.jpeg'),
(32, NULL, 'sasaasa', 'efee', 'yyhy', '32332', 'd', 'WhatsApp Image 2023-05-10 at 5.29.36 PM.jpeg', 'LabExam-web-5A (1).pdf', 'uploads/32332.jpeg'),
(33, 'muneeb@gmail.com', 'Muneeb', 'Ahmad', 'asd', '03056561268', 'Street 1, House 13,Shama Coloney, Begum Kot, Shahdrah', 'titanium-2812785_1920.jpg', 'assignemnt # 3.3.pdf', 'uploads/03056561268.png'),
(34, 'muneeb@gmail.com', 'Muneeb', 'Ahmad', 'GAT', '03056561268', 'Street 1, House 13,Shama Coloney, Begum Kot, Shahdrah', 'titanium-2812785_1920.jpg', 'assignemnt # 3.3.pdf', 'uploads/03056561268.png');

-- --------------------------------------------------------

--
-- Table structure for table `app`
--

CREATE TABLE `app` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app`
--

INSERT INTO `app` (`id`, `first_name`, `last_name`, `phone_number`, `address`, `profile_pic`, `resume`) VALUES
(1, 'dddd', 'ddddd', '123456', 'sssss', 'marker_icon.png', 'S23-SE-ASSIGNMENT 3 (2).docx'),
(2, 'dddd', 'ddddd', '123456', 'sssss', 'marker_icon.png', 'S23-SE-ASSIGNMENT 3 (2).docx'),
(3, 'dddddddd', 'dddddddd', '12345633', 'sssssddd', 'marker_icon.png', 'S23-SE-ASSIGNMENT 3 (2).docx'),
(4, 'aaa', 'aaa', '22', '22', 'image-removebg-preview.jpg', 'Class diagram of Vaccine Management System.docx'),
(5, 'aaa', 'aaa', '22', '22', 'image-removebg-preview.jpg', 'Class diagram of Vaccine Management System.docx'),
(6, 'aaa', 'aaa', '22', '22', 'image-removebg-preview.jpg', 'Class diagram of Vaccine Management System.docx');

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

CREATE TABLE `apps` (
  `id` int(11) NOT NULL,
  `email` varchar(70) DEFAULT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `test_name` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apps`
--

INSERT INTO `apps` (`id`, `email`, `first_name`, `last_name`, `test_name`, `phone_number`, `address`, `profile_pic`, `resume`, `payment`) VALUES
(1, NULL, 'ahmed       ', 'shahbaz                                                                                             ', 'NAT       ', '03320143701       ', 'KARACHI ', 'marker_icon.png', 'S23-SE-ASSIGNMENT 3 (2).docx', ''),
(7, NULL, 'fahad ', 'ali                 ', 'NAT ', '0234567890 ', 'MULTAN D', 'beautiful-woman-doing-abdominal-crunches-white-background-29906334.jpg', 'invoice (2) (1).pdf', ''),
(20, NULL, 'Daneyal   ', 'Shahbaz                                                   ', 'GAT General 2023-III   ', '03320143701   ', 'MULTAN D ', 'man-5057800__340.jpg', 'S23-SE-ASSIGNMENT 3 (1).docx', ''),
(24, NULL, 'ali', 'amjad', 'Gat', '11234567890', 'lhr', 'images.jpeg', 'BCSM-S21-022 Ahmed Shahbaz .pdf', ''),
(27, NULL, 'shshsh', 'sksksk', 'nat', '1234567890', 'lhr', 'WhatsApp Image 2023-05-10 at 5.29.36 PM.jpeg', 'BCSM-S21-022 Ahmed Shahbaz .pdf', 'uploads/1234567890.jpeg'),
(29, NULL, 'sdfasdf', 'sadfsadf', 'asdfas', '2342345235', 'asdfasf', 'WhatsApp Image 2023-05-10 at 5.29.35 PM.jpeg', 'LabExam-web-5A (1).pdf', 'uploads/2342345235.jpeg'),
(30, NULL, 'arslan', 'ashraf', 'Nat', '1234567890', 'lhr', 'WhatsApp Image 2023-05-10 at 5.29.36 PM.jpeg', 'exam2.pdf', 'uploads/1234567890.jpeg'),
(32, 'muneeb@gmail.com', 'Muneeb', 'Ahmad', 'asd', '03056561268', 'Street 1, House 13,Shama Coloney, Begum Kot, Shahdrah', 'warrior-7631678_1920.jpg', 'assignemnt # 3.3.pdf', 'uploads/03056561268.png'),
(33, 'muneeb@gmail.com', 'Muneeb', 'Ahmad', 'asd', '03056561268', 'Street 1, House 13,Shama Coloney, Begum Kot, Shahdrah', 'warrior-7631678_1920.jpg', 'assignment 4 cover.pdf', 'uploads/03056561268.png'),
(34, 'ali@gmail.com', 'Muneeb', 'Ahmad', 'NAT', '03056561268', 'Street 1, House 13,Shama Coloney, Begum Kot, Shahdrah', 'fantasy-4304070_1920.jpg', 'Bcsm-s21-005 Ali Raza Assignment 3.pdf', 'uploads/03056561268.png'),
(35, 'luna@gmail.com', 'Muneeb', 'Ahmad', 'GAT', '03056561268', 'Street 1, House 13,Shama Coloney, Begum Kot, Shahdrah', 'fantasy-4304070_1920.jpg', 'P.U. part 1 result card.pdf', 'uploads/03056561268.png');

-- --------------------------------------------------------

--
-- Table structure for table `datas`
--

CREATE TABLE `datas` (
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `test_name` varchar(100) NOT NULL,
  `phone_number` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `grade` int(100) NOT NULL,
  `attendence` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datas`
--

INSERT INTO `datas` (`first_name`, `last_name`, `test_name`, `phone_number`, `address`, `grade`, `attendence`) VALUES
('Muneeb ', 'ahmed                 ', 'muneeb@gmail.com ', 123456789, 'multan', 100, 95),
('aun', 'abass', 'aun@gmail.com', 1234567890, 'multan', 55, 67);

-- --------------------------------------------------------

--
-- Table structure for table `js`
--

CREATE TABLE `js` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `test_name` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `payment` varchar(200) NOT NULL,
  `resume` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `js`
--

INSERT INTO `js` (`id`, `email`, `first_name`, `last_name`, `test_name`, `phone_number`, `address`, `profile_pic`, `payment`, `resume`) VALUES
(1, NULL, 'ahmed    ', 'shahbaz                                                                    ', 'NAT    ', '03320143701    ', 'KARACHI  BB', 'marker_icon.png', '', 'S23-SE-ASSIGNMENT 3 (2).docx'),
(2, NULL, 'ALI', 'RAZA', 'GAT', '030303030303', 'LAHORE', 'marker_icon1.png', '', 'S23-CS-CN-5B-LAB15-T15-s21-024-Moomal Mushtaq. (1).pdf'),
(3, NULL, 'hamza', 'ali', 'GAT', '030330300303', 'BURE WALA', 'Capture.PNG', '', 'S23-SE-ASSIGNMENT 3 (2).docx'),
(5, NULL, 'sssssss', 'ssssssssssss', 'nat', '227272727272', 'jsjjs', 'neck-stretch-exercise-illustration.jpg', '', 'S23-CS-CN-5B-LAB15-T15-s21-024-Moomal Mushtaq. (1).pdf'),
(6, NULL, 'ahmed    ', 'shahbaz                                                                    ', 'NAT    ', '03320143701    ', 'KARACHI  BB', 'image-removebg-preview.jpg', '', 'S23-CS-CN-5B-LAB-T10-s21-024-Moomal Mushtaq.pdf'),
(7, NULL, 'fahad', 'ali', 'NAT', '0234567890', 'MULTAN', 'beautiful-woman-doing-abdominal-crunches-white-background-29906334.jpg', '', 'invoice (2) (1).pdf'),
(8, NULL, 'salman ', 'anwar', 'NAT ', '03321111111111 ', 'PAVEL ', 'download.jpeg', '', 'S23-SE-ASSIGNMENT 3 (1).docx'),
(20, NULL, 'Daneyal   ', 'Shahbaz                                                   ', 'GAT General 2023-III   ', '03320143701   ', 'MULTAN D ', 'man-5057800__340.jpg', '', 'S23-SE-ASSIGNMENT 3 (1).docx'),
(21, NULL, 'skasaks', 'alalal', 'gat', '8282828282', 'skjskjs', 'man-5057800__340.jpg', '', 'BCSM-S21-022 Ahmed Shahbaz ( 3 ).docx'),
(22, NULL, 'sshshs', 'kakkaka', 'SAT', '1234567890', 'aakaksks', 'man-5057800__340.jpg', '', 'Hamza 351 CN PROJECT.docx'),
(23, NULL, 'Muneeb', 'Ahmad', 'sss', '03056561268', 'Street 1, House 13,Shama Coloney, Begum Kot, Shahdrah', 'gun-4127187_1920.jpg', 'uploads/03056561268.jpg', 'assignment 4 cover.pdf'),
(24, 'muneeb@gmail.com', 'Muneeb', 'Ahmad', 'sdf', '03056561268', 'Street 1, House 13,Shama Coloney, Begum Kot, Shahdrah', 'reality-5069725_1920.jpg', 'uploads/03056561268.jpg', 'assignment 4.pdf'),
(25, 'muneeb@gmail.com', 'Muneeb', 'Ahmad', 'Asd', '03056561268', 'Street 1, House 13,Shama Coloney, Begum Kot, Shahdrah', 'warrior-7631678_1920.jpg', 'uploads/03056561268.jpg', 'assignment 3 cover.pdf'),
(26, 'muneeb@gmail.com', 'Muneeb', 'Ahmad', 'asd', '03056561268', 'Street 1, House 13,Shama Coloney, Begum Kot, Shahdrah', 'warrior-7631678_1920.jpg', 'uploads/03056561268.jpg', '22-05-23.pdf'),
(27, 'muneeb@gmail.com', 'Muneeb', 'Ahmad', 'asd', '03056561268', 'Street 1, House 13,Shama Coloney, Begum Kot, Shahdrah', 'warrior-7631678_1920.jpg', 'uploads/03056561268.jpg', 'assignment 4 cover.pdf'),
(28, 'muneeb@gmail.com', 'Muneeb', 'Ahmad', 'asd', '03056561268', 'Street 1, House 13,Shama Coloney, Begum Kot, Shahdrah', 'warrior-7631678_1920.jpg', 'uploads/03056561268.jpg', 'assignment 4 cover.pdf'),
(29, 'ali@gmail.com', 'Muneeb', 'Ahmad', 'HR', '03056561268', 'Street 1, House 13,Shama Coloney, Begum Kot, Shahdrah', 'warrior-7631678_1920.jpg', 'uploads/03056561268.jpg', 'book.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `pf`
--

CREATE TABLE `pf` (
  `email` varchar(60) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `last_degree` varchar(50) NOT NULL,
  `exp` varchar(50) NOT NULL,
  `profile_pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pf`
--

INSERT INTO `pf` (`email`, `father_name`, `phone_number`, `dob`, `last_degree`, `exp`, `profile_pic`) VALUES
('', '4/4/2001', '1234567890', '', '', '', 'WhatsApp Image 2023-05-10 at 5.29.36 PM.jpeg'),
('ali@gmail.com', 'Ali Ahmad', '123412398765', '2023-05-10', 'bscs', '2 year', 'warrior-7631678_1920.jpg'),
('luna@gmail.com', 'vdaj', '23456789', '2023-05-11', 'Matric', 'waitress', 'reality-5069725_1920.jpg'),
('muneeb@gmail.com', 'Ali Ahmad', '03056561268', '2023-05-24', 'asd', 'asd', 'reality-5069725_1920.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `re-password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `email`, `password`, `re-password`) VALUES
(1, 'ahmed', 'aahmedch420567@gmail.com', '', 'ahmed'),
(3, 'danyeal', 'daneyal@gmail.com', 'daneyal', 'daneyal'),
(5, 'aliraza', 'aliraza@gmail.com', '123', '123'),
(6, 'muneeb', 'muneeb@gmail.com', 'muneeb', 'muneeb');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `re_password` varchar(100) NOT NULL,
  `datatype` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `re_password`, `datatype`) VALUES
(1, 'ahmed', 'ahmed@gmail.com', 'ahmed', 'ahmed', 'admin'),
(2, 'aliraza', 'ali@gmail.com', 'ali', 'ali', 'user'),
(5, 'talha', 'talha@gmail.com', 'talha', 'talha', 'user'),
(6, 'muneeb', 'muneeb@gmail.com', 'muneeb', 'muneeb', 'user'),
(11, 'Daneyal', 'daneyal@gmail.com', 'daneyal', 'daneyal', 'user'),
(12, 'umer', 'umer@gmail.com', 'umer', 'umer', 'user'),
(14, 'aoun', 'aun@gmail.com', 'aun', 'aun', 'user'),
(15, 'naeem', 'naeem@gmail.com', 'naeem', 'naeem', 'user'),
(16, 'asd', 'asd@gmail.com', 'asd', 'asd', 'user'),
(17, 'ashraf', 'ashraf@gmail.com', 'ashraf', 'ashraf', 'user'),
(18, 'auni', 'auni@gmail.com', 'auni', 'auni', 'user'),
(19, 'luna', 'luna@gmail.com', 'lunaa', 'lunaa', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ap`
--
ALTER TABLE `ap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app`
--
ALTER TABLE `app`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `js`
--
ALTER TABLE `js`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pf`
--
ALTER TABLE `pf`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ap`
--
ALTER TABLE `ap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `app`
--
ALTER TABLE `app`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `apps`
--
ALTER TABLE `apps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `js`
--
ALTER TABLE `js`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
