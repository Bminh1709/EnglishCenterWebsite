-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 24, 2023 at 02:57 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minhcenter`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int NOT NULL,
  `ad_firstname` varchar(100) NOT NULL,
  `ad_lastname` varchar(100) NOT NULL,
  `ad_gmail` varchar(200) NOT NULL,
  `ad_pass` varchar(200) NOT NULL,
  `ad_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_firstname`, `ad_lastname`, `ad_gmail`, `ad_pass`, `ad_img`) VALUES
(1, 'Minh', 'Bui', 'minhbee203@gmail.com', '123456', '/public/images/img_admin/minhphoto.jpg'),
(2, 'Tường', 'Mạnh', 'tuongmanh@gmail.com', '123456', '/public/images/img_admin/mebeforeyou.png');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `co_Id` varchar(10) NOT NULL,
  `co_name` varchar(100) NOT NULL,
  `co_teacher` varchar(100) NOT NULL,
  `co_startday` date NOT NULL,
  `co_endday` date NOT NULL,
  `co_des` text NOT NULL,
  `co_price` int NOT NULL,
  `co_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`co_Id`, `co_name`, `co_teacher`, `co_startday`, `co_endday`, `co_des`, `co_price`, `co_img`) VALUES
('1', 'Communication English changed', 'Minh', '2023-04-03', '2023-04-27', 'This course is for students', 2000000, 'public/images/img_course/ielts.jpg'),
('1on1', 'Class 1 on 1', 'Chi', '2023-04-07', '2023-04-17', 'This course is for students who are shy to study alone', 7000000, 'public/images/img_course/1on1.jpg'),
('2', 'Communication English hihi', 'Minh', '2023-04-03', '2023-04-27', 'This course is for students', 2000000, 'public/images/img_course/ce.jpg'),
('CS', 'Chieu Sinh Class', 'Tien', '2023-04-15', '2023-04-23', 'This course is for students who want to get a new job', 9000000, 'public/images/img_course/chieusinh.jpg'),
('G12', 'G12 kid', 'Ms Ry', '2023-04-08', '2023-05-05', 'This course is for young students', 5000000, 'public/images/img_course/kid.jpg'),
('G13', 'Class 7 ', 'Ms Mira', '2023-03-27', '2023-04-28', 'This course is for kids', 3000000, 'public/images/img_course/khaigiang.jpg'),
('G3', 'Class G3', 'Quynh', '2023-03-31', '2023-04-22', 'This course is for students who want to get a new job', 900000, 'public/images/img_course/g3.jpg'),
('Khoa9', 'Khóa 9 Class', 'Mira', '2023-04-03', '2023-04-30', 'This course is for students who want to get a new job', 8000000, 'public/images/img_course/khoa9.jpg'),
('TOCE', 'TOEIC 108', 'Karina', '2023-03-29', '2023-04-14', 'This course is for students who want to get a new job', 6000000, 'public/images/img_course/341862863_936931000763292_6427312201137196403_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `or_id` varchar(10) NOT NULL,
  `us_id` int NOT NULL,
  `or_price` int NOT NULL,
  `or_dayjoin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `or_state` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `us_id` int NOT NULL,
  `us_firstname` varchar(100) NOT NULL,
  `us_lastname` varchar(100) NOT NULL,
  `us_gmail` varchar(200) NOT NULL,
  `us_pass` varchar(100) NOT NULL,
  `us_phone` int NOT NULL,
  `us_gender` varchar(20) NOT NULL,
  `us_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`us_id`, `us_firstname`, `us_lastname`, `us_gmail`, `us_pass`, `us_phone`, `us_gender`, `us_img`) VALUES
(16, 'Minh', 'Bui', 'minhbee203@gmail.com', '123456', 706162561, 'Male', 'public/images/img_user/sea.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

CREATE TABLE `user_cart` (
  `cart_id` int NOT NULL,
  `co_Id` varchar(10) NOT NULL,
  `us_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_wait`
--

CREATE TABLE `user_wait` (
  `w_id` int NOT NULL,
  `co_Id` varchar(10) NOT NULL,
  `us_id` int NOT NULL,
  `or_id` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`co_Id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`or_id`),
  ADD KEY `id_user_users` (`us_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`us_id`);

--
-- Indexes for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `co_Id` (`co_Id`),
  ADD KEY `us_id` (`us_id`);

--
-- Indexes for table `user_wait`
--
ALTER TABLE `user_wait`
  ADD PRIMARY KEY (`w_id`),
  ADD KEY `or_id` (`or_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `us_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_cart`
--
ALTER TABLE `user_cart`
  MODIFY `cart_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `user_wait`
--
ALTER TABLE `user_wait`
  MODIFY `w_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `id_user_users` FOREIGN KEY (`us_id`) REFERENCES `user` (`us_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD CONSTRAINT `user_cart_ibfk_1` FOREIGN KEY (`co_Id`) REFERENCES `courses` (`co_Id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `user_wait`
--
ALTER TABLE `user_wait`
  ADD CONSTRAINT `user_wait_ibfk_1` FOREIGN KEY (`or_id`) REFERENCES `orders` (`or_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
