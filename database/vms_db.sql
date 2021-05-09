-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2021 at 11:24 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `con_id` int(11) NOT NULL,
  `con_ch_id` bigint(20) NOT NULL,
  `con_message` varchar(100) NOT NULL,
  `con_u_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='this is for message user';

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`con_id`, `con_ch_id`, `con_message`, `con_u_id`) VALUES
(10, 1, 'hello dear please change my name because it is not true my name is bassam butros warda ', 1),
(11, 1, 'سلاڤ بەرێز ناڤێ زاروکی نە یێ درستە ناڤێ وی (  )', 1);

-- --------------------------------------------------------

--
-- Table structure for table `directoration`
--

CREATE TABLE `directoration` (
  `dir_id` int(11) NOT NULL,
  `dir_sector_name` varchar(20) DEFAULT NULL,
  `dir_directorate_name` varchar(20) DEFAULT NULL,
  `dir_center_name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='this table is for all direcor of the program';

--
-- Dumping data for table `directoration`
--

INSERT INTO `directoration` (`dir_id`, `dir_sector_name`, `dir_directorate_name`, `dir_center_name`) VALUES
(1, 'duhok    ', 'zakho    ', 'saaid piran    '),
(3, 'duhok', 'zakho', 'bersivey');

-- --------------------------------------------------------

--
-- Table structure for table `dosing`
--

CREATE TABLE `dosing` (
  `d_v_id` int(11) NOT NULL,
  `d_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `p_id` bigint(20) NOT NULL,
  `p_f_name` varchar(20) DEFAULT NULL,
  `p_m_name` varchar(20) DEFAULT NULL,
  `p_l_name` varchar(20) DEFAULT NULL,
  `p_birthday` date DEFAULT NULL,
  `p_gender` tinyint(1) DEFAULT NULL,
  `p_phone` varchar(15) NOT NULL,
  `p_city` varchar(20) NOT NULL,
  `p_region` varchar(20) NOT NULL,
  `p_street` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='this table is for all person';

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`p_id`, `p_f_name`, `p_m_name`, `p_l_name`, `p_birthday`, `p_gender`, `p_phone`, `p_city`, `p_region`, `p_street`) VALUES
(1, 'بسام', 'بطرس', 'وردة', '1993-03-07', 1, '4229805  ', 'zakho    ', 'bersivey    ', 'old bersivey    '),
(2, 'bassam  ', 'putros  ', 'warda  ', '2020-03-31', 1, '4229805', 'zaxo  ', 'birsivey', 'old bersivey  '),
(16, 'karwan', 'izaddin', 'abas', '2000-02-02', 0, '4229805', 'rge', 're', 'gre'),
(17, 'karwan', 'fthf', 'fhfg', '2000-11-01', 1, '498498', 'drgg', 'fgd', 'fgd'),
(24, 'walid', 'butros', 'warda', '1970-12-04', 1, '789456123', 'zakho', 'bersivey', 'old bersivey'),
(25, 'nadir', 'butros', 'warda', '1982-06-20', 1, '741852963', 'zakho', 'bersivey', 'old bersivey'),
(26, 'bbopoppopop', 'ccc  ', 'ddd  ', '2001-01-11', 0, '74152963  ', 'zakho  ', 'aabasia  ', 'sh  '),
(29, 'bb', 'ccc', 'cc', '1990-01-02', 1, '74152963', 'zakho', 'aabasia', 'sh'),
(30, 'terij', 'haje', 'hamid', '1993-01-05', 1, '07505656565', 'zakho', 'aabasia', 'sh');

-- --------------------------------------------------------

--
-- Table structure for table `person_vaccination`
--

CREATE TABLE `person_vaccination` (
  `p_id` bigint(11) NOT NULL,
  `pv_nationality` varchar(20) NOT NULL,
  `pv_m_f_name` varchar(20) DEFAULT NULL,
  `pv_m_m_name` varchar(20) DEFAULT NULL,
  `pv_m_l_name` varchar(20) DEFAULT NULL,
  `pv_today_date` datetime NOT NULL DEFAULT current_timestamp(),
  `pv_user_id` bigint(11) NOT NULL,
  `pv_direct_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='this table is for all person that vaccinated';

--
-- Dumping data for table `person_vaccination`
--

INSERT INTO `person_vaccination` (`p_id`, `pv_nationality`, `pv_m_f_name`, `pv_m_m_name`, `pv_m_l_name`, `pv_today_date`, `pv_user_id`, `pv_direct_id`) VALUES
(1, 'iraq  ', 'katrina  ', 'polos  ', 'butros  ', '2021-03-03 12:00:34', 1, 3),
(16, 'عراقي', 'cs', 'cs', 'cs', '2020-12-29 22:46:34', 1, 1),
(26, 'عراقي  ', 'eee  ', 'aaa  ', 'sss  ', '2021-02-06 14:41:20', 1, 1),
(29, 'عراقي', 'eee', 'aaa', 'sd', '2021-02-06 14:46:52', 1, 1),
(30, 'iraq', 'eee', 'dvs', 'sdv', '2021-02-06 14:52:05', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_title` varchar(50) NOT NULL,
  `role_description` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_title`, `role_description`) VALUES
(1, 'admin', 'the admin have all roles'),
(2, 'employ', 'the employ that work in sector vaccin'),
(3, 'sector head', 'the boss of sector direction');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `p_id` bigint(20) NOT NULL,
  `u_name` varchar(20) NOT NULL,
  `u_password` varchar(20) NOT NULL,
  `u_email` varchar(50) DEFAULT NULL,
  `u_role_id` int(11) NOT NULL,
  `u_id` bigint(20) NOT NULL,
  `u_director_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`p_id`, `u_name`, `u_password`, `u_email`, `u_role_id`, `u_id`, `u_director_id`) VALUES
(1, 'bassam  ', '123  ', 'abc@gmail.com', 1, 1, 3),
(17, 'ac', '123', 'karwan@gmail.com', 2, 0, 1),
(24, 'walid', '456', 'walid@gmail.com', 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vaccination`
--

CREATE TABLE `vaccination` (
  `v_id` int(11) NOT NULL,
  `v_right_age` int(11) NOT NULL,
  `v_vaccination_name` varchar(30) NOT NULL,
  `v_dosing` int(11) NOT NULL,
  `v_user_id` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='this table is for all Type of vaccination';

--
-- Dumping data for table `vaccination`
--

INSERT INTO `vaccination` (`v_id`, `v_right_age`, `v_vaccination_name`, `v_dosing`, `v_user_id`) VALUES
(1, 2, 'virus B', 1, 1),
(116, 6, 'v1', 2, 1),
(117, 4, 'covid19      ', 3, 17),
(118, 3, 'sork', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `work_record`
--

CREATE TABLE `work_record` (
  `w_id` bigint(20) NOT NULL,
  `w_date` datetime DEFAULT NULL,
  `w_next_date` date DEFAULT NULL,
  `w_note` varchar(100) NOT NULL,
  `w_pollinator_name` varchar(50) DEFAULT NULL,
  `w_pv_id` bigint(20) NOT NULL,
  `w_user_id` bigint(20) NOT NULL,
  `w_dir_id` int(11) NOT NULL,
  `w_v_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='this table is for Record all operation of vaccination';

--
-- Dumping data for table `work_record`
--

INSERT INTO `work_record` (`w_id`, `w_date`, `w_next_date`, `w_note`, `w_pollinator_name`, `w_pv_id`, `w_user_id`, `w_dir_id`, `w_v_id`) VALUES
(6, '2020-04-09 15:53:17', '2021-01-01', 'fsddf        ', 'warda  ', 1, 1, 1, 1),
(7, '2020-12-29 19:45:20', '2021-01-02', 'wefwef  ', 'weffw  ', 1, 1, 1, 116),
(9, '2021-02-02 00:23:11', '2021-02-24', '', 'basam', 1, 1, 1, 1),
(10, '2021-02-06 13:19:47', '2021-04-02', '', 'ali', 16, 1, 1, 117),
(12, '2021-02-06 15:05:47', '2021-02-26', '', 'basam', 30, 1, 1, 117),
(13, '2021-02-06 15:14:19', '2021-02-18', '  ', 'basam  ', 30, 1, 3, 116),
(14, '2021-02-24 21:37:43', '2021-02-27', '', 'bebe', 1, 1, 3, 117),
(15, '2021-02-25 11:16:41', '2021-02-27', '', 'sdds', 16, 1, 3, 117),
(16, '2021-02-25 13:42:28', '2021-03-06', 'adsc  ', 'sdfghj  ', 16, 1, 3, 1),
(17, '2021-02-28 20:19:09', '2021-04-02', '', 'bassam', 1, 1, 3, 1),
(18, '2021-03-01 12:44:41', '2021-03-09', '    ', 'ddd    ', 1, 1, 3, 116),
(20, '2021-05-03 15:30:26', '2021-10-05', 'fgh', 'bassam', 1, 1, 3, 1),
(21, '2021-05-09 00:59:35', '2021-05-25', 'note', 'bassam', 1, 1, 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `directoration`
--
ALTER TABLE `directoration`
  ADD PRIMARY KEY (`dir_id`);

--
-- Indexes for table `dosing`
--
ALTER TABLE `dosing`
  ADD KEY `dosing_vaccination` (`d_v_id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `person_vaccination`
--
ALTER TABLE `person_vaccination`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `user_person_vaccinatioon` (`pv_user_id`),
  ADD KEY `person_vaccination_directoration` (`pv_direct_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `role_user` (`u_role_id`),
  ADD KEY `directoration_user` (`u_director_id`);

--
-- Indexes for table `vaccination`
--
ALTER TABLE `vaccination`
  ADD PRIMARY KEY (`v_id`,`v_right_age`,`v_vaccination_name`),
  ADD KEY `vaccination_user` (`v_user_id`);

--
-- Indexes for table `work_record`
--
ALTER TABLE `work_record`
  ADD PRIMARY KEY (`w_id`),
  ADD KEY `work_record_person_vaccination` (`w_pv_id`),
  ADD KEY `work_record_direction` (`w_dir_id`),
  ADD KEY `work_record_user` (`w_user_id`),
  ADD KEY `work_record_vaccination` (`w_v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `directoration`
--
ALTER TABLE `directoration`
  MODIFY `dir_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `p_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vaccination`
--
ALTER TABLE `vaccination`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `work_record`
--
ALTER TABLE `work_record`
  MODIFY `w_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dosing`
--
ALTER TABLE `dosing`
  ADD CONSTRAINT `dosing_vaccination` FOREIGN KEY (`d_v_id`) REFERENCES `vaccination` (`v_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `person_vaccination`
--
ALTER TABLE `person_vaccination`
  ADD CONSTRAINT `person_vaccination_direction` FOREIGN KEY (`pv_direct_id`) REFERENCES `directoration` (`dir_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `person_vaccination_person` FOREIGN KEY (`p_id`) REFERENCES `person` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_person_vaccinatioon` FOREIGN KEY (`pv_user_id`) REFERENCES `user` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `role_user` FOREIGN KEY (`u_role_id`) REFERENCES `roles` (`role_id`),
  ADD CONSTRAINT `user_dairection` FOREIGN KEY (`u_director_id`) REFERENCES `directoration` (`dir_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_person` FOREIGN KEY (`p_id`) REFERENCES `person` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vaccination`
--
ALTER TABLE `vaccination`
  ADD CONSTRAINT `vaccination_user` FOREIGN KEY (`v_user_id`) REFERENCES `user` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `work_record`
--
ALTER TABLE `work_record`
  ADD CONSTRAINT `work_record_direction` FOREIGN KEY (`w_dir_id`) REFERENCES `directoration` (`dir_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `work_record_person_vaccination` FOREIGN KEY (`w_pv_id`) REFERENCES `person_vaccination` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `work_record_user` FOREIGN KEY (`w_user_id`) REFERENCES `user` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `work_record_vaccination` FOREIGN KEY (`w_v_id`) REFERENCES `vaccination` (`v_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
