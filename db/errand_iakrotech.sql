-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: mysql5036.site4now.net
-- Generation Time: Mar 10, 2021 at 01:41 PM
-- Server version: 5.6.26-log
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
CREATE Database `errand_iakrotech`;

USE errand_iakrotech;
--

-- --------------------------------------------------------

--
-- Table structure for table `errands`
--

CREATE TABLE `errands` (
  `auto_id` bigint(20) NOT NULL,
  `errand_id` varchar(233) NOT NULL,
  `client_id` varchar(233) NOT NULL,
  `errand_date` date,
  `errand_time` varchar(233) NOT NULL,
  `errand_status` enum('New','Ongoing','Delivered','Deleted') NOT NULL DEFAULT 'New',
  `partner_initiated` varchar(233) NOT NULL DEFAULT 'None',
  `client_fullname` varchar(233) NOT NULL,
  `client_contact` varchar(233) NOT NULL,
  `client_lat` varchar(233) NOT NULL DEFAULT 'None',
  `client_lng` varchar(233) NOT NULL DEFAULT 'None',
  `client_currentgps` varchar(233) NOT NULL,
  `client_currentlocation` varchar(233) NOT NULL,
  `errand_gps` varchar(233) NOT NULL,
  `errand_lat` varchar(233) NOT NULL DEFAULT 'None',
  `errand_long` varchar(233) NOT NULL DEFAULT 'None',
  `errand_location` varchar(233) NOT NULL,
  `errand_contact` varchar(233) NOT NULL,
  `product_name` text NOT NULL,
  `product_qty` text NOT NULL,
  `product_price` text NOT NULL,
  `product_comment` text NOT NULL,
  `errand_comment` text NOT NULL,
  `errand_amount` varchar(233) NOT NULL DEFAULT '0.00',
  `delivery_amount` varchar(233) NOT NULL DEFAULT '0.00',
  `final_amount` varchar(233) NOT NULL DEFAULT '0.00',
  `calculated_by` varchar(233) NOT NULL DEFAULT 'None',
  `payment_status` enum('Pending','Paid') NOT NULL DEFAULT 'Pending',
  `payment_receiver` varchar(233) NOT NULL DEFAULT 'None',
  `assigned_by` varchar(233) NOT NULL DEFAULT 'None',
  `assigned_to` varchar(233) NOT NULL DEFAULT 'None',
  `date_assigned` date,
  `time_assigned` varchar(233) NOT NULL DEFAULT 'None',
  `date_delivered` date,
  `time_delivered` varchar(233) NOT NULL DEFAULT 'None',
  `edited_by` varchar(233) NOT NULL DEFAULT 'None',
  `deleted_by` varchar(233) NOT NULL DEFAULT 'None',
  `date_deleted` date
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `errand_admins`
--

CREATE TABLE `errand_admins` (
  `auto_id` bigint(20) NOT NULL,
  `user_id` varchar(233) NOT NULL,
  `user_name` varchar(233) NOT NULL,
  `user_contact` varchar(10) NOT NULL,
  `user_econtact` varchar(10) NOT NULL,
  `user_email` varchar(233) NOT NULL,
  `user_type` enum('Admin','User','Viewer','CEO','CTO','Finance','Agent') NOT NULL DEFAULT 'User',
  `user_status` enum('Active','Inactive','Pending') NOT NULL DEFAULT 'Inactive',
  `user_password` varchar(233) NOT NULL DEFAULT '81dc9bdb52d04dc20036dbd8313ed055',
  `user_logstatus` varchar(233) NOT NULL DEFAULT '0',
  `user_lastlog` varchar(10) NOT NULL DEFAULT 'None',
  `date_added` date
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `errand_partners`
--

CREATE TABLE `errand_partners` (
  `auto_id` bigint(20) NOT NULL,
  `partner_id` varchar(233) NOT NULL,
  `partner_name` varchar(233) NOT NULL,
  `partner_contact` varchar(10) NOT NULL,
  `partner_econtact` varchar(10) NOT NULL,
  `partner_email` varchar(233) NOT NULL,
  `partner_status` enum('Active','Inactive','Pending') NOT NULL DEFAULT 'Inactive',
  `partner_password` varchar(233) NOT NULL DEFAULT '81dc9bdb52d04dc20036dbd8313ed055',
  `partner_logstatus` varchar(233) NOT NULL DEFAULT '0',
  `partner_lastlog` varchar(10) NOT NULL DEFAULT 'None',
  `referal` varchar(233) NOT NULL DEFAULT 'None',
  `date_added` date
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



-- --------------------------------------------------------

--
-- Table structure for table `errand_clients`
--

CREATE TABLE `errand_clients` (
  `auto_id` bigint(20) NOT NULL,
  `client_id` varchar(233) NOT NULL,
  `client_name` varchar(233) NOT NULL,
  `client_contact` varchar(10) NOT NULL,
  `client_econtact` varchar(10) NOT NULL,
  `client_email` varchar(233) NOT NULL,
  `client_status` enum('Active','Inactive','Pending') NOT NULL DEFAULT 'Active',
  `client_password` varchar(233) NOT NULL DEFAULT '81dc9bdb52d04dc20036dbd8313ed055',
  `client_logstatus` varchar(233) NOT NULL DEFAULT '0',
  `client_lastlog` varchar(10) NOT NULL DEFAULT 'None',
  `referal` varchar(233) NOT NULL DEFAULT 'None',
  `date_added` date
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `errand_drivers`
--

CREATE TABLE `errand_drivers` (
  `auto_id` bigint(20) NOT NULL,
  `driver_id` varchar(233) NOT NULL,
  `driver_name` varchar(233) NOT NULL,
  `driver_contact` varchar(10) NOT NULL,
  `driver_econtact` varchar(10) NOT NULL,
  `driver_email` varchar(233) NOT NULL,
  `driver_status` enum('Active','Inactive','Pending') NOT NULL DEFAULT 'Active',
  `driver_city` varchar(233) NOT NULL,
  `driver_region` varchar(233) NOT NULL,
  `driver_password` varchar(233) NOT NULL DEFAULT '81dc9bdb52d04dc20036dbd8313ed055',
  `driver_logstatus` varchar(233) NOT NULL,
  `driver_lastlog` varchar(10) NOT NULL,
  `driver_onlinestatus` enum('Online','Offline') NOT NULL,
  `recent_location` varchar(233) NOT NULL DEFAULT 'None',
  `recent_lat` varchar(233) NOT NULL DEFAULT 'None',
  `recent_lng` varchar(233) NOT NULL DEFAULT 'None',
  `area` varchar(233) NOT NULL DEFAULT 'None',
  `house_gps` varchar(233) NOT NULL DEFAULT 'None',
  `license_number` varchar(233) NOT NULL DEFAULT 'None',
  `license_expiry` varchar(233) NOT NULL DEFAULT 'None',
  `vehicle_category` enum('Car','Motor','Van','None') NOT NULL DEFAULT 'None',
  `vehicle_make` varchar(233) NOT NULL DEFAULT 'None',
  `vehicle_model` varchar(233) NOT NULL DEFAULT 'None',
  `vehicle_color` varchar(233) NOT NULL DEFAULT 'None',
  `vehicle_number` varchar(233) NOT NULL DEFAULT 'None',
  `driver_img` varchar(233) NOT NULL DEFAULT 'logo.png',
  `referal` varchar(233) NOT NULL DEFAULT 'None',
  `date_added` date
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `errands`
--
ALTER TABLE `errands`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `errand_admins`
--
ALTER TABLE `errand_admins`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `errand_clients`
--
ALTER TABLE `errand_clients`
  ADD PRIMARY KEY (`auto_id`);

ALTER TABLE `errand_partners`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `errand_drivers`
--
ALTER TABLE `errand_drivers`
  ADD PRIMARY KEY (`auto_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `errands`
--
ALTER TABLE `errands`
  MODIFY `auto_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `errand_admins`
--
ALTER TABLE `errand_admins`
  MODIFY `auto_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `errand_clients`
--
ALTER TABLE `errand_clients`
  MODIFY `auto_id` bigint(20) NOT NULL AUTO_INCREMENT;


ALTER TABLE `errand_partners`
  MODIFY `auto_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `errand_drivers`
--
ALTER TABLE `errand_drivers`
  MODIFY `auto_id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
