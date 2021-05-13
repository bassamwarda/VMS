-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2020 at 06:51 PM
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
(1, 'duhok  ', 'zakho  ', 'saaid piran  ');

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
-- Table structure for table `link_roles_menus`
--

CREATE TABLE `link_roles_menus` (
  `m_id` int(11) NOT NULL,
  `m_role_id` int(11) NOT NULL,
  `m_meue_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `link_roles_menus`
--

INSERT INTO `link_roles_menus` (`m_id`, `m_role_id`, `m_meue_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(40) NOT NULL,
  `m_create_user` tinyint(1) NOT NULL,
  `m_delete_user` tinyint(1) NOT NULL,
  `m_update_user` tinyint(1) NOT NULL,
  `m_view_user_by_direction` tinyint(1) NOT NULL,
  `m_view_all_user` tinyint(1) NOT NULL,
  `m_give_permssion_user` tinyint(1) NOT NULL,
  `m_add_direction` tinyint(1) NOT NULL,
  `m_delete_direction` tinyint(1) NOT NULL,
  `m_update_direction` tinyint(1) NOT NULL,
  `m_view_direction` tinyint(1) NOT NULL,
  `m_add_person` tinyint(1) NOT NULL,
  `m_delete_person` tinyint(1) NOT NULL,
  `m_update_person` tinyint(1) NOT NULL,
  `m_add_vaccin` tinyint(1) NOT NULL,
  `m_delete_vaccin` tinyint(1) NOT NULL,
  `m_update_vaccin` tinyint(1) NOT NULL,
  `m_view_vaccin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`m_id`, `m_name`, `m_create_user`, `m_delete_user`, `m_update_user`, `m_view_user_by_direction`, `m_view_all_user`, `m_give_permssion_user`, `m_add_direction`, `m_delete_direction`, `m_update_direction`, `m_view_direction`, `m_add_person`, `m_delete_person`, `m_update_person`, `m_add_vaccin`, `m_delete_vaccin`, `m_update_vaccin`, `m_view_vaccin`) VALUES
(1, 'bb', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

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
(1, 'bassam', 'putros', 'warda', '1993-03-07', 1, '4229805', 'zakho', 'bersivey', 'old bersivey'),
(2, 'bassam  ', 'putros  ', 'warda  ', '2020-03-31', 1, '4229805', 'zaxo  ', 'birsivey', 'old bersivey  ');

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
(1, 'iraq', 'katrina', 'polos', 'butros', '2020-04-09 15:49:59', 1, 1);

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
(1, 'admin', 'saasfwfsdf');

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
(1, 'bassam', '123', 'abc', 1, 1, 1);

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
(1, 2, 'virus B', 1, 1);

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
(6, '2020-04-09 15:53:17', '2020-04-23', 'fsddf  ', 'warda', 1, 1, 1, 1);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `link_roles_menus`
--
ALTER TABLE `link_roles_menus`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `role_link_role` (`m_role_id`),
  ADD KEY `role_menus` (`m_meue_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`m_id`);

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
-- AUTO_INCREMENT for table `directoration`
--
ALTER TABLE `directoration`
  MODIFY `dir_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `link_roles_menus`
--
ALTER TABLE `link_roles_menus`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `p_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vaccination`
--
ALTER TABLE `vaccination`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `work_record`
--
ALTER TABLE `work_record`
  MODIFY `w_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dosing`
--
ALTER TABLE `dosing`
  ADD CONSTRAINT `dosing_vaccination` FOREIGN KEY (`d_v_id`) REFERENCES `vaccination` (`v_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `link_roles_menus`
--
ALTER TABLE `link_roles_menus`
  ADD CONSTRAINT `role_link_role` FOREIGN KEY (`m_role_id`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_menus` FOREIGN KEY (`m_meue_id`) REFERENCES `menus` (`m_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
