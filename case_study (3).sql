-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 16, 2020 at 10:32 AM
-- Server version: 8.0.21-0ubuntu0.20.04.4
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `case_study`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_class`
--

CREATE TABLE `tbl_class` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_class`
--

INSERT INTO `tbl_class` (`id`, `name`, `status`) VALUES
(1, '10a1', 'Đang học'),
(2, '10a2', 'Đang học'),
(3, '10a3', 'Đang học'),
(4, '11a1', 'Đang học'),
(5, '11a2', 'Đang học'),
(6, '11a3', 'Đang học'),
(7, '12a1', 'Đang học'),
(8, '12a2', 'Học chiều'),
(9, '12a3', 'Học chiều');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_score`
--

CREATE TABLE `tbl_score` (
  `student_id` int NOT NULL,
  `subject_id` int NOT NULL,
  `score` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_score`
--

INSERT INTO `tbl_score` (`student_id`, `subject_id`, `score`) VALUES
(2, 1, 9),
(1, 2, 5),
(2, 2, 8),
(1, 4, 10),
(1, 5, 10),
(1, 7, 10),
(2, 5, 1),
(1, 7, 10),
(3, 1, 10),
(3, 2, 10),
(3, 4, 10),
(3, 5, 9),
(3, 6, 9),
(3, 7, 10),
(4, 1, 1),
(4, 2, 2),
(4, 4, 5),
(4, 5, 4),
(5, 1, 5),
(5, 2, 6),
(5, 6, 6),
(7, 4, 4),
(11, 1, 10),
(6, 1, 10),
(7, 1, 10),
(8, 1, 10),
(10, 1, 10),
(6, 4, 10),
(7, 4, 5),
(8, 2, 7),
(9, 1, 8),
(10, 2, 9),
(10, 4, 7),
(11, 1, 4),
(11, 2, 1),
(12, 2, 4),
(13, 1, 4),
(14, 1, 2),
(15, 4, 2),
(17, 1, 1),
(11, 2, 10),
(16, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` int NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class_id` int NOT NULL,
  `image` varchar(225) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `name`, `age`, `gender`, `address`, `email`, `class_id`, `image`) VALUES
(1, 'Bùi Xuân Dưỡng', 12, 'male', 'Bắc Giang', 'duong@gmail.com', 1, 'uploads/duong.jpg'),
(2, 'Nguyễn Văn Lực', 14, 'male', 'Nam Định', 'luc@gmail.com', 2, 'uploads/avatar-male.jpg'),
(3, 'Bùi Xuân Huấn', 15, 'male', 'Bắc Giang ', 'huanrose@gmail.com', 1, 'uploads/ahuan.jpeg'),
(4, 'Ngô Khá Bá', 20, 'male', 'Lục Nam ', 'khabanh@gmail.com', 1, 'uploads/akha.jpeg'),
(5, 'Nhữ Văn Chiến', 13, 'male', 'Bắc Ninh', 'chiencho@gmail.com', 9, 'uploads/avatar-male.jpg'),
(6, 'Lò Thị Lọ', 12, 'female', 'Ninh Bình', 'lolo@gmail.com', 1, 'uploads/q.jpeg'),
(7, 'Can Lộ Lộ', 12, 'female', 'Bình Dương ', 'lo@gmail.com', 1, 'uploads/acanlolo.jpeg'),
(8, 'Đinh Công Mạnh', 12, 'male', 'Hà Nội', 'manh@gmail.com', 7, 'uploads/avatar-male.jpg'),
(9, 'Bành Thị Lòi', 12, 'female', 'Bắc Giang', 'loi@gmail.com', 1, 'uploads/n.jpeg'),
(10, 'Nguyễn Văn Thọ ', 12, 'male', 'Hà Nội', 'th@gmail.com', 3, 'uploads/atho.jpeg'),
(11, 'Trần Thị Trấn', 12, 'female', 'Nam Định', 'tran@gmail.com', 2, 'uploads/afemale.jpg'),
(12, 'Chanh Âm', 12, 'female', 'Bắc Giang', 'chanh@gmail.com', 1, 'uploads/atramanh.jpg'),
(13, 'Hà Thiên Lộn', 12, 'female', 'Bắc Kạn', 'lon@gmail.com', 1, 'uploads/aminh.jpeg'),
(14, 'Đỗ Mai Anh', 12, 'female', 'Hà Nội', 'anh@gmail.com', 1, 'uploads/aanh.jpeg'),
(15, 'Nguyễn Minh Anh', 12, 'female', 'Hà Nội', 'anh@gmail.com', 1, 'uploads/aminh.jpeg'),
(16, 'Nguyễn Lê Duy', 12, 'male', 'Hà Nội', '', 1, 'uploads/duy.jpeg'),
(17, 'Trần Nhật Nam', 12, 'male', 'Hà Nội', 'nam@gmail.com', 1, 'uploads/nam.jpeg'),
(18, 'Phan Châu Rang', 14, 'female', 'Bắc Giang', 'giang@gmail.com', 2, 'uploads/v.jpeg'),
(19, 'Nguyễn Minh Khang', 14, 'male', 'Hà Nội', 'khang@gmail.com', 2, 'uploads/s.jpeg'),
(20, 'Châu Hải Linh', 14, 'female', 'Hải Dương', 'linh@gmail.com', 2, 'uploads/a.jpeg'),
(21, 'Phùng Gia Hưng', 14, 'male', 'Hà Nam', 'hung@gmail.com', 2, 'uploads/tungson.jpeg'),
(22, 'Lê Thu Anh', 14, 'female', 'Hải Dương', 'anh@gmail.com', 2, 'uploads/aanh.jpeg'),
(23, 'Nguyễn Phú An', 14, 'male', 'Hà nội', '', 1, 'uploads/trtr.jpeg'),
(24, 'Nguyễn Phú An ', 14, 'male', 'Hà Nội', 'na@gmail.com', 2, 'uploads/u.jpeg'),
(25, 'Lê Thu Anh', 14, 'female', 'Đà Nẵng', 'thuanh@gmail.com', 2, 'uploads/nn.jpeg'),
(26, 'Đào Ngọc Hà', 14, 'male', 'Hà Nội', 'ha@gmail.com', 3, 'uploads/k.jpeg'),
(27, 'Nguyễn Ngọc Diệp', 14, 'female', 'Đồng Nai', 'diep@gmail.com', 3, 'uploads/j.jpeg'),
(28, 'Huỳnh Văn A', 14, 'male', 'Hà Giang', 'a@gmail.com', 3, 'uploads/ga.jpeg'),
(29, 'Nguyễn Phương', 14, 'female', 'Lai Châu', 'phuong@gmail.com', 3, 'uploads/c.jpeg'),
(30, 'Nguyễn Trúc Linh', 14, 'female', 'Lạng Sơn', 'linh@gmail.com', 3, 'uploads/io.jpeg'),
(31, 'Lê long', 15, 'male', 'Bắc Ninh', 'long@gmail.com', 3, 'uploads/l.jpeg'),
(32, 'Lê Văn Lương', 14, 'female', 'Hà Nội', 'luong@gmail.com', 3, 'uploads/b.jpeg'),
(33, 'Ngô Nhật Minh', 14, 'male', 'Hà Nội', 'minh@gmail.com', 3, 'uploads/avatar-male.jpg'),
(34, 'Lê Văn Nam', 15, 'male', 'Lai Châu', 'nam@gmail.com', 3, 'uploads/nam.jpeg'),
(35, 'Hoàng Như Ngọc ', 15, 'female', 'Bắc Ninh', 'ngoc@gmail.com', 4, 'uploads/x.jpeg'),
(36, 'Phạm Quốc Huy', 15, 'male', 'Hà Nội', 'huy@gmail.com', 4, 'uploads/s.jpeg'),
(37, 'Đỗ Gia Linh', 15, 'female', 'Vũng Tàu', 'linh@gmail.com', 4, 'uploads/v.jpeg'),
(38, 'Chủ Nhật ', 15, 'male', 'Hà Nội', 'nhat@gmail.com', 4, 'uploads/u.jpeg'),
(39, 'Vũ Thảo Nguyên', 15, 'female', 'Hải Dương', 'nguyen@gmail.com', 4, 'uploads/i.jpeg'),
(40, 'Hồ Thị Hiền', 15, 'female', 'Hà Nội', 'hien@gmail.com', 4, 'uploads/g.jpeg'),
(41, 'Phan Nhi ', 15, 'female', 'Bắc Giang', 'nhi@gmail.com', 4, 'uploads/x.jpeg'),
(42, 'Lô Thị Ngọc ', 15, 'female', 'Hà Nội', 'ngoc@gmail.com', 4, 'uploads/m.jpeg'),
(43, 'Huỳnh Thị Mỏi Tay', 15, 'female', 'Hà Nội', 'tay@gmail.com', 5, 'uploads/aminh.jpeg'),
(44, 'Văn Mỏi Lưng', 15, 'male', 'Hà Đông ', 'lung@gmail.com', 5, 'uploads/atho.jpeg'),
(45, 'Lung Thị Linh', 15, 'female', 'Hà Nội', 'Lunglinh@gmail.com', 5, 'uploads/ali.jpeg'),
(46, 'Từ Văn Duy', 15, 'male', 'Hà Nội', 'duy@gmail.com', 5, 'uploads/duy.jpeg'),
(47, 'Kiều Nữ', 15, 'female', 'Bắc Giang', 'nu@gmail.com', 5, 'uploads/j.jpeg'),
(48, 'Hồ Thi Thanh', 15, 'female', 'Nghệ An', 'thanh@gmail.com', 5, 'uploads/alo.jpeg'),
(49, 'Nguyễn Thị Thơ', 15, 'female', 'Cần Thơ', 'tho@gmail.com', 5, 'uploads/c.jpeg'),
(50, 'Ngô Thị Mu', 15, 'female', 'Hà Nội', 'mu@gmail.com', 5, 'uploads/b.jpeg'),
(51, 'Tô Thi Lụa', 15, 'female', 'Bắv', '', 1, 'uploads/c.jpeg'),
(52, 'Tô Lụa', 15, 'female', 'Hà Nội', 'lua@gmail.com', 5, 'uploads/afemale.jpg'),
(53, 'Tạ Thị Lạng ', 15, 'female', 'Hà Nội', 'lang@gmai', 1, 'uploads/aminh.jpeg'),
(54, 'Tạ Thị Lạng ', 15, 'female', 'Hà Nội', 'lang@gmail.com', 6, 'uploads/acanlolo.jpeg'),
(55, 'Mỏi Tay Quá', 15, 'female', 'Hà Nội', 'qua@gmail.com', 6, 'uploads/nn.jpeg'),
(56, 'Mùi Thị Mẫn', 15, 'female', 'Hà Nội', 'man@gmail.com', 6, 'uploads/aminh.jpeg'),
(57, 'Hồ Nam', 15, 'male', 'Hà Nội', 'nam@gmail.com', 6, 'uploads/ga.jpeg'),
(58, 'Tạ Tấn ', 115, 'male', 'Hà Giang', 'tan@gmail.com', 6, 'uploads/ass.jpeg'),
(59, 'Tạ Thị Cân', 16, 'female', 'Hà Nội', 'can@gmail.com', 7, 'uploads/aminh.jpeg'),
(60, 'Bùi Thị Nga', 16, 'female', 'Hà Nội', 'nga@gmail.com', 7, 'uploads/atramanh.jpg'),
(61, 'Ngô Nhung ', 16, 'female', 'Bắc Giang', 'nhung@gmail.com', 7, 'uploads/j.jpeg'),
(62, 'Thanh Tùng', 12, 'male', 'Bắc Giang', 'tung@gmail.com', 4, 'uploads/afemale.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE `tbl_subject` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_subject`
--

INSERT INTO `tbl_subject` (`id`, `name`, `description`) VALUES
(1, 'Toán', 'Học sáng'),
(2, 'Văn Học', 'Học chiều'),
(4, 'Tiếng Anh', 'Tiết 1'),
(5, 'Vật Lý', 'Tiết 2'),
(6, 'Hóa Học', 'Tiết 3'),
(7, 'Sinh Học', 'Tiết 4'),
(8, 'Sử Học', 'Tiết 5'),
(10, 'Triết Học ', 'Tự chọn'),
(11, 'Công Nghệ', 'Học Chiều');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(244) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com'),
(2, 'duong', '123', 'duong1997@gmail.com'),
(6, 'luc', '123', 'luc@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_class`
--
ALTER TABLE `tbl_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_score`
--
ALTER TABLE `tbl_score`
  ADD KEY `student_id` (`student_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_class`
--
ALTER TABLE `tbl_class`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_score`
--
ALTER TABLE `tbl_score`
  ADD CONSTRAINT `tbl_score_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `tbl_student` (`id`),
  ADD CONSTRAINT `tbl_score_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `tbl_subject` (`id`);

--
-- Constraints for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD CONSTRAINT `tbl_student_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `tbl_class` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
