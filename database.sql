-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2017 at 04:45 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` varchar(36) NOT NULL,
  `date_modifiled` datetime NOT NULL,
  `date_entered` datetime NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `content` longtext NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `views` int(11) NOT NULL DEFAULT '1',
  `image` varchar(255) NOT NULL,
  `user_created` varchar(36) NOT NULL,
  `user_modifiled` varchar(36) NOT NULL,
  `blog_category_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `date_modifiled`, `date_entered`, `name`, `description`, `content`, `meta_title`, `meta_description`, `views`, `image`, `user_created`, `user_modifiled`, `blog_category_id`) VALUES
('420339b3d658e50afbe86c2106e027e0WX0d', '2017-09-18 23:40:42', '2017-09-18 23:40:42', 'nguyễn thị bích uyên', '', '<h2 style=\"font-style:italic;\"><strong><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:72px\"><span style=\"color:#00ffff\">Anh Y&ecirc;u Em</span></span></span></strong></h2>\r\n\r\n<p><strong><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:72px\"><span style=\"color:#00ffff\">Nguyễn Thị B&iacute;ch Uy&ecirc;n</span></span></span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', 1, 'http://localhost/web/uploads/icons/none.jpg', '749c6ffa523195afa50eaeb6b25ff4ee8gCp', '749c6ffa523195afa50eaeb6b25ff4ee8gCp', '[\"b2ef550e87881bda1e78f97448fd0783XwGE\",\"50bde3920eec4afcb1f914e409c813fcwUFu\"]'),
('5523636ff380e438f2949ba2c5160f33P5fr', '2017-09-19 00:18:00', '2017-09-19 00:18:00', 'popo', '', '', '', '', 1, 'http://localhost/web/uploads/icons/none.jpg', '749c6ffa523195afa50eaeb6b25ff4ee8gCp', '749c6ffa523195afa50eaeb6b25ff4ee8gCp', 'null'),
('ddf432f77ab44203d9ae7b59d13d5abeGppB', '2017-09-21 14:27:58', '2017-09-21 14:27:58', 'troanf', '', '', '', '', 1, 'http://localhost/web/uploads/icons/none.jpg', '749c6ffa523195afa50eaeb6b25ff4ee8gCp', '749c6ffa523195afa50eaeb6b25ff4ee8gCp', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `id` varchar(36) NOT NULL,
  `date_modifiled` datetime NOT NULL,
  `date_entered` datetime NOT NULL,
  `user_created` varchar(36) NOT NULL,
  `user_modifiled` varchar(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `date_modifiled`, `date_entered`, `user_created`, `user_modifiled`, `name`, `description`, `meta_title`, `meta_description`, `image`) VALUES
('50bde3920eec4afcb1f914e409c813fcwUFu', '2017-09-17 20:02:18', '2017-09-17 20:02:18', '749c6ffa523195afa50eaeb6b25ff4ee8gCp', '749c6ffa523195afa50eaeb6b25ff4ee8gCp', 'danh muc 1', '', '', '', 'http://localhost/web/uploads/icons/none.jpg'),
('b2ef550e87881bda1e78f97448fd0783XwGE', '2017-09-17 20:02:30', '2017-09-17 20:02:30', '749c6ffa523195afa50eaeb6b25ff4ee8gCp', '749c6ffa523195afa50eaeb6b25ff4ee8gCp', 'danh muc 2', '', '', '', 'http://localhost/web/uploads/icons/none.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` varchar(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modifiled` datetime NOT NULL,
  `user_created` varchar(36) NOT NULL,
  `user_modifiled` varchar(36) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `views` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `name`, `date_entered`, `date_modifiled`, `user_created`, `user_modifiled`, `meta_title`, `meta_description`, `description`, `content`, `image`, `views`) VALUES
('9a4266f6e46f7b704945b6996e8429afsMRz', 'trang giới thiệu', '2017-09-21 16:39:56', '2017-09-21 16:39:56', '749c6ffa523195afa50eaeb6b25ff4ee8gCp', '749c6ffa523195afa50eaeb6b25ff4ee8gCp', '', '', '', '', 'http://localhost/web/uploads/icons/none.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`name`, `value`) VALUES
('page_title', 'Tiêu đề trang web'),
('page_description', 'Mô tả trang web'),
('logo', 'http://localhost/web/uploads/images/user1.jpg'),
('icon', 'http://localhost/web/uploads/images/user2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modifiled` datetime NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `user_created` varchar(36) NOT NULL,
  `user_modifiled` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `date_entered`, `date_modifiled`, `username`, `password`, `avatar`, `first_name`, `last_name`, `email`, `phone`, `description`, `user_created`, `user_modifiled`) VALUES
('749c6ffa523195afa50eaeb6b25ff4ee8gCp', '2017-09-08 14:14:26', '2017-09-17 17:21:36', 'admin', '$2y$10$8v2cFLmOjX.gQf7g/X9EC.n5QX40zTix7MlS/zns4dgYbcGjaORue', 'http://localhost/web/uploads/images/user.jpg', 'Trần Khánh', 'Toàn', 'trankhanhtoan96@gmail.com', '01636634028', 'mô tả bản thân', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
