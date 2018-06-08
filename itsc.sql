-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-05-19 04:58:03
-- 伺服器版本: 10.1.30-MariaDB
-- PHP 版本： 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `itsc`
--

-- --------------------------------------------------------

--
-- 資料表結構 `s_detail`
--

CREATE TABLE `s_detail` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `version` varchar(30) DEFAULT NULL,
  `language` varchar(3000) DEFAULT NULL,
  `information` varchar(3000) DEFAULT NULL,
  `processor` varchar(100) DEFAULT NULL,
  `platform` varchar(100) DEFAULT NULL,
  `memory` varchar(30) DEFAULT NULL,
  `setup_time` varchar(30) DEFAULT NULL,
  `hardware_requirement` varchar(3000) DEFAULT NULL,
  `supplier` varchar(100) DEFAULT NULL,
  `support_by` varchar(100) DEFAULT NULL,
  `support_url` varchar(200) DEFAULT NULL,
  `setup_instruction` varchar(3000) DEFAULT NULL,
  `troubleshooting` varchar(3000) DEFAULT NULL,
  `remark` varchar(3000) DEFAULT NULL,
  `download_url` varchar(200) DEFAULT NULL,
  `subscribe` tinyint(1) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `creator` varchar(30) DEFAULT NULL,
  `last_modified_date` varchar(30) DEFAULT NULL,
  `last_modified_by` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `s_detail`
--

INSERT INTO `s_detail` (`id`, `name`, `version`, `language`, `information`, `processor`, `platform`, `memory`, `setup_time`, `hardware_requirement`, `supplier`, `support_by`, `support_url`, `setup_instruction`, `troubleshooting`, `remark`, `download_url`, `subscribe`, `created_date`, `creator`, `last_modified_date`, `last_modified_by`) VALUES
(1, 'Photoshop', '1.01', 'ENGLISH', 'Adobe Photoshop is a raster graphics editor developed and published by Adobe Systems for macOS and Windows.', NULL, 'IA-32 and x86-64', NULL, NULL, NULL, 'ADOBE', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-05-18 15:09:08', NULL, NULL, NULL),
(2, 'VISUAL STUDIO', '2015', '	Chinese, Czech, English, French, German, Italian, Japanese, Korean, Polish, Portuguese (Brazil), Russian, Spanish and Turkish', 'Microsoft Visual Studio is an integrated development environment (IDE) from Microsoft. It is used to develop computer programs, as well as web sites, web apps, web services and mobile apps. Visual Studio uses Microsoft software development platforms such as Windows API, Windows Forms, Windows Presentation Foundation, Windows Store and Microsoft Silverlight. It can produce both native code and managed code.', NULL, 'Windows 7 SP1 and later\r\nWindows Server 2008 R2 SP1 and late', NULL, NULL, NULL, 'Microsoft', 'Freemium', NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-19 01:14:02', NULL, NULL, NULL),
(3, 'Matlab', '9.4.0.813654', NULL, 'MATLAB (matrix laboratory) is a multi-paradigm numerical computing environment. A proprietary programming language developed by MathWorks, MATLAB allows matrix manipulations, plotting of functions and data, implementation of algorithms, creation of user interfaces, and interfacing with programs written in other languages, including C, C++, C#, Java, Fortran and Python.', NULL, 'Win Mac Linux', NULL, NULL, NULL, 'World Express', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-18 15:20:53', NULL, NULL, NULL),
(4, 'Microsoft Windows 8.1', '8.1', NULL, 'Windows 8.1 (codenamed Blue) is a computer operating system released by Microsoft. First unveiled and released as a public beta in June 2013, it was released to manufacturing on August 27, 2013, and reached general availability on October 17, 2013, almost a year after the retail release of its predecessor. Windows 8.1 is available free of charge for retail copies of Windows 8 and Windows RT users via the Windows Store. Unlike service packs on previous versions of Windows, users who obtained Windows 8 outside of retail copies or pre-loaded installations (i.e., volume licensing) must obtain Windows 8.1 through new installation media from their respective subscription or enterprise channel. Microsoft\'s support lifecycle policy treats Windows 8.1 similar to previous service packs of Windows: It is part of Windows 8\'s support lifecycle, and installing Windows 8.1 is required to maintain access to support and Windows updates after January 12, 2016. However, unlike previous service packs, Windows 8.1 cannot be acquired via Windows Update.', NULL, 'Win', NULL, NULL, NULL, 'Microsoft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-19 01:19:23', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `s_info`
--

CREATE TABLE `s_info` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `fee` int(30) DEFAULT NULL,
  `img` varchar(3000) DEFAULT NULL,
  `creator` varchar(30) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_modifier` varchar(30) DEFAULT NULL,
  `last_modified_date` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `s_info`
--

INSERT INTO `s_info` (`id`, `name`, `location`, `category`, `fee`, `img`, `creator`, `created_date`, `last_modifier`, `last_modified_date`) VALUES
(1, 'Photoshop', 'Barn A', 'Graphic', NULL, 'http://localhost\\itsc\\assets\\images\\img\\software\\photoshop.png', NULL, '2018-05-19 02:45:22', NULL, NULL),
(2, 'VISUAL STUDIO', 'Barn A, Barn B', 'Programming', NULL, 'http://localhost\\itsc\\assets\\images\\img\\software\\visual_studio.png', NULL, '2018-05-19 02:45:32', NULL, NULL),
(3, 'Matlab', 'Barn A', 'Academic', NULL, 'http://localhost\\itsc\\assets\\images\\img\\software\\matlab.png', NULL, '2018-05-19 02:45:40', NULL, NULL),
(4, 'Microsoft Windows 8.1', 'Barn A, Barn B', 'Graphic, Programming, Academic', NULL, 'http://localhost\\itsc\\assets\\images\\img\\software\\window8.png', NULL, '2018-05-19 02:44:51', NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `s_type`
--

CREATE TABLE `s_type` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  `creator` varchar(30) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_modifier` varchar(30) DEFAULT NULL,
  `last_modified_date` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `s_type`
--

INSERT INTO `s_type` (`id`, `name`, `type`, `img`, `creator`, `created_date`, `last_modifier`, `last_modified_date`) VALUES
(1, 'Graphic', 'category', 'http://localhost\\itsc\\assets\\images\\img\\category\\graphic.png', NULL, '2018-05-19 02:55:03', NULL, NULL),
(2, 'Programming', 'category', 'http://localhost\\itsc\\assets\\images\\img\\category\\programming.png', NULL, '2018-05-19 02:55:13', NULL, NULL),
(3, 'Academic', 'category', 'http://localhost\\itsc\\assets\\images\\img\\category\\academic.png', NULL, '2018-05-19 02:55:22', NULL, NULL),
(4, 'Barn A', 'location', 'http://localhost\\itsc\\assets\\images\\img\\location\\barnA.png', NULL, '2018-05-19 02:55:35', NULL, NULL),
(5, 'Barn B', 'location', 'http://localhost\\itsc\\assets\\images\\img\\location\\barnB.png', NULL, '2018-05-19 02:55:41', NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `tbl_last_login`
--

CREATE TABLE `tbl_last_login` (
  `id` bigint(20) NOT NULL,
  `userId` bigint(20) NOT NULL,
  `sessionData` varchar(2048) NOT NULL,
  `machineIp` varchar(1024) NOT NULL,
  `userAgent` varchar(128) NOT NULL,
  `agentString` varchar(1024) NOT NULL,
  `platform` varchar(128) NOT NULL,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `tbl_last_login`
--

INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES
(1, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 8.1', '2018-03-17 11:58:31'),
(2, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 8.1', '2018-03-24 09:25:09'),
(3, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 8.1', '2018-03-24 09:55:17'),
(4, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 8.1', '2018-03-24 15:54:05');

-- --------------------------------------------------------

--
-- 資料表結構 `tbl_reset_password`
--

CREATE TABLE `tbl_reset_password` (
  `id` bigint(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activation_id` varchar(32) NOT NULL,
  `agent` varchar(512) NOT NULL,
  `client_ip` varchar(32) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` bigint(20) NOT NULL DEFAULT '1',
  `createdDtm` datetime NOT NULL,
  `updatedBy` bigint(20) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 資料表結構 `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `roleId` tinyint(4) NOT NULL COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `tbl_roles`
--

INSERT INTO `tbl_roles` (`roleId`, `role`) VALUES
(1, 'System Administrator'),
(2, 'Manager'),
(3, 'Employee');

-- --------------------------------------------------------

--
-- 資料表結構 `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` int(11) NOT NULL,
  `email` varchar(128) NOT NULL COMMENT 'login email',
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) DEFAULT NULL COMMENT 'full name of user',
  `mobile` varchar(20) DEFAULT NULL,
  `roleId` tinyint(4) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'admin@example.com', '$2y$10$6NOKhXKiR2SAgpFF2WpCkuRgYKlSqFJaqM0NgIM3PT1gKHEM5/SM6', 'System Administrator', '9890098900', 1, 0, 0, '2015-07-01 18:56:49', 1, '2018-01-05 05:56:34'),
(2, 'manager@example.com', '$2y$10$quODe6vkNma30rcxbAHbYuKYAZQqUaflBgc4YpV9/90ywd.5Koklm', 'Manager', '9890098900', 2, 0, 1, '2016-12-09 17:49:56', 1, '2018-01-12 07:22:11'),
(3, 'employee@example.com', '$2y$10$UYsH1G7MkDg1cutOdgl2Q.ZbXjyX.CSjsdgQKvGzAgl60RXZxpB5u', 'Employee', '9890098900', 3, 0, 1, '2016-12-09 17:50:22', 3, '2018-01-04 07:58:28');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `s_detail`
--
ALTER TABLE `s_detail`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `s_info`
--
ALTER TABLE `s_info`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `s_type`
--
ALTER TABLE `s_type`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `tbl_last_login`
--
ALTER TABLE `tbl_last_login`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`roleId`);

--
-- 資料表索引 `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userId`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `s_detail`
--
ALTER TABLE `s_detail`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表 AUTO_INCREMENT `s_info`
--
ALTER TABLE `s_info`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表 AUTO_INCREMENT `s_type`
--
ALTER TABLE `s_type`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表 AUTO_INCREMENT `tbl_last_login`
--
ALTER TABLE `tbl_last_login`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表 AUTO_INCREMENT `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表 AUTO_INCREMENT `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `roleId` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'role id', AUTO_INCREMENT=4;

--
-- 使用資料表 AUTO_INCREMENT `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
