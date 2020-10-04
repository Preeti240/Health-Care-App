-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2016 at 08:00 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinic_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointmenttable`
--

CREATE TABLE `appointmenttable` (
  `Appointment_Type` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `doctor` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Appointment_Date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `appointment_time` time(6) NOT NULL,
  `Patient_First_Name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Patient_Last_Name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Date_of_Birth` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Gender` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `Reason` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `Phone_number` bigint(10) NOT NULL,
  `ZipCode` int(5) NOT NULL,
  `Patient_Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `appointmenttable`
--

INSERT INTO `appointmenttable` (`Appointment_Type`, `doctor`, `Appointment_Date`, `appointment_time`, `Patient_First_Name`, `Patient_Last_Name`, `Date_of_Birth`, `Gender`, `Reason`, `Phone_number`, `ZipCode`, `Patient_Email`) VALUES
('', 'Block', '10/03/2016', '10:00:00.000000', 'Alex', 'Matt', '04-26-1991', 'male', 'Leg Pain', 8167454536, 64134, 'alex@gmail.com'),
('general', 'Bach', '12-30-2016', '02:00:00.000000', 'Alex', 'Matt', '04-26-1991', 'male', 'Chest Pain', 8167454536, 64134, 'alex@gmail.com'),
('online', '', '12-28-2010', '10:00:00.000000', 'Dean', 'Winchester', '02-12-1979', 'female', 'hair loss', 6441214536, 10001, 'dean@ucmo.edu'),
('online', '', '12-22-2016', '11:00:00.000000', 'Mohammed', 'Abdulla', '04-14-1989', 'male', 'rash', 8167452526, 66212, 'abdullah1170@gmail.com'),
('online', 'Block', '12-29-2016', '09:00:00.000000', 'Alex', 'Matt', '04-26-1991', 'male', 'fever', 8167454536, 64134, 'alex@gmail.com'),
('women', 'Balfe', '12-30-2016', '10:00:00.000000', 'Dean', 'Winchester', '02-12-1979', 'male', 'fever', 6441214536, 10001, 'dean@ucmo.edu'),
('general', 'Balfe', '12-27-2010', '02:00:00.000000', 'Mohammed', 'Abdulla', '04-14-1989', 'male', 'hand pain', 8167452526, 66212, 'abdullah1170@gmail.com'),
('general', '0', '12-20-2010', '10:00:00.000000', 'Mohammed', 'Abdulla', '04-14-1989', 'male', 'patientLastNamepatientLastName', 8167452526, 66212, 'abdullah1170@gmail.com'),
('general', 'Bacharier', '12-20-2016', '10:00:00.000000', 'abdulla', 'dfwef', '04-26-1991', 'male', 'sadasdsada', 8167454536, 64134, 'myhah@gmail.com'),
('general', 'Block', '12-20-2016', '11:50:00.000000', 'moe', 'rad', '11-01-1988', 'male', 'Chest pain', 8167454536, 64134, 'xtienator009@icloud.com'),
('general', 'Block', '12-24-2016', '00:00:00.000000', 'Dean', 'Ramanujan', '02-12-1979', 'male', 'fever', 88888888, 10001, 'ramanujan@ucmo.edu'),
('general', 'Baker', '12-27-2010', '01:06:00.000000', 'moe', 'Abdulla', '04-14-1989', 'male', 'fever', 8167454536, 64134, 'xtienator009@icloud.com'),
('general', 'Balfe', '10/04/2016', '02:00:00.000000', 'moe', 'Matt', '04-26-1991', 'male', 'fever', 8167454536, 64134, 'xtienator009@icloud.com'),
('general', 'Balfe', '10/04/2016', '04:00:00.000000', 'moe', 'Abdulla', '04-14-1989', 'male', 'fever', 8167454536, 64134, 'xtienator009@icloud.com'),
('general', 'Bacharier', '10/04/2016', '01:06:00.000000', 'moe', 'Abdulla', '04-14-1989', 'male', 'fever', 8167454536, 64134, 'xtienator009@icloud.com');

-- --------------------------------------------------------

--
-- Table structure for table `bill_payments`
--

CREATE TABLE `bill_payments` (
  `order_No` int(5) UNSIGNED ZEROFILL NOT NULL,
  `account_no` int(5) DEFAULT NULL,
  `amount` int(7) NOT NULL,
  `full_name` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `invoice_date` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `bill_Email` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `payment_Type` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cardHolderName` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `card_No` bigint(16) NOT NULL,
  `exp_Date` varchar(5) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cvv` int(3) NOT NULL,
  `billing_Zipcode` int(5) NOT NULL,
  `payee_Phone` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bill_payments`
--

INSERT INTO `bill_payments` (`order_No`, `account_no`, `amount`, `full_name`, `invoice_date`, `bill_Email`, `payment_Type`, `cardHolderName`, `card_No`, `exp_Date`, `cvv`, `billing_Zipcode`, `payee_Phone`) VALUES
(00094, 1170, 250, 'Berry  Allen', '11-09-1991', 'example@email.com', 'Credit', 'The Flash', 5012452658621234, '0252', 301, 64134, 8167454536),
(00099, 1, 317, 'Mohammed Abdulla', '317', 'abdullah1170@gmail.com', 'Credit', 'Mohd abdu', 123456789123456, '11/20', 301, 64134, 8167454536),
(00100, 2, 521, 'Alex Matt', '521', 'lxm95600@ucmo.edu', 'Credit', 'Raja Hussain', 1234567890002220, '1155', 333, 64134, 8167454536);

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `invoice_date` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `account_no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `patient_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(255) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`invoice_date`, `account_no`, `patient_name`, `amount`, `email`) VALUES
('11-25-2016', 0001, 'Mohammed Abdulla', 317, 'abdullah1170@gmail.com'),
('11-29-2016', 0002, 'Alex Matt', 521, 'lxm95600@ucmo.edu');

-- --------------------------------------------------------

--
-- Table structure for table `loginregister`
--

CREATE TABLE `loginregister` (
  `id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `firstname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(6) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loginregister`
--

INSERT INTO `loginregister` (`id`, `firstname`, `lastname`, `username`, `password`, `gender`) VALUES
(00001, 'alex', 'Matt', 'lxm95600@ucmo.edu', '534b44a19bf18d20b71ecc4eb77c572f', 'male'),
(00004, 'Dean', 'Ramanujan', 'ramanujan@ucmo.edu', '48767461cb09465362c687ae0c44753b', 'male'),
(00005, 'Mohammed', 'Abdulla', 'abdullah1170@gmail.com', 'ead57550b6a8a8511d228cdc26ff5c1e', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `shop_payments`
--

CREATE TABLE `shop_payments` (
  `Invoice_no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `bill_amount` int(5) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `adress` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `zipcode` int(5) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `bill_email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `card_no` bigint(20) NOT NULL,
  `exp` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `card_zip` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shop_payments`
--

INSERT INTO `shop_payments` (`Invoice_no`, `id`, `bill_amount`, `name`, `adress`, `city`, `state`, `zipcode`, `phone`, `bill_email`, `card_no`, `exp`, `card_zip`) VALUES
(0009, '0', 44, 'Alex Matt', '9823 Lane Avenue', 'Kansas City', 'Missouri', 64134, 8167454536, 'lxm95600@ucmo.edu', 1234567890000456, '1112', 66212),
(0023, '58433813ec0bb', 595, 'moe', '515 nall avenue', 'kansas city', 'Missouri', 64134, 8167454536, 'xtienator009@icloud.com', 1111222233334444, '2519', 66213),
(0040, '58450ed112776', 121, 'Alex Matt', '9218 Metcalf Avenue #206', 'Overland Park', 'Kansas', 66212, 8167454536, 'lxm95600@ucmo.edu', 5151212152526666, '1199', 66212);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `firstname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `phone` bigint(10) NOT NULL,
  `adress` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `zipcode` int(5) NOT NULL,
  `dob` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(4) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `lastname`, `gender`, `email`, `phone`, `adress`, `city`, `state`, `zipcode`, `dob`, `id`) VALUES
('Mohammed', 'Abdulla', 'Male', 'abdullah1170@gmail.com', 8167452526, '9823 Lane Avenue', 'Kansas City', 'Missouri', 64134, '04-14-1989', 0003),
('Alex', 'Matt', 'male', 'lxm95600@ucmo.edu', 8167454536, '9218 Metcalf Avenue #206', 'Overland Park', 'Kansas', 66212, '04-26-1991', 0002),
('Dean', 'Ramanujan', 'Male', 'ramanujan@ucmo.edu', 6441214536, '888 Lamar Avenue', 'Overland Park', 'Kansas', 10001, '02-12-1979', 0005);

-- --------------------------------------------------------

--
-- Table structure for table `video_ppointment_table`
--

CREATE TABLE `video_ppointment_table` (
  `Appointment_Date` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `appointment_time` time NOT NULL,
  `Patient_First_Name` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Patient_Last_Name` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Date_of_Birth` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Gender` varchar(6) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Reason` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Phone_number` int(10) NOT NULL,
  `ZipCode` int(5) NOT NULL,
  `Patient_Email` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `video_ppointment_table`
--

INSERT INTO `video_ppointment_table` (`Appointment_Date`, `appointment_time`, `Patient_First_Name`, `Patient_Last_Name`, `Date_of_Birth`, `Gender`, `Reason`, `Phone_number`, `ZipCode`, `Patient_Email`) VALUES
('0000-00-00', '00:00:00', '', '', '10/25/1991', '', '', 0, 0, ''),
('0000-00-00', '00:00:00', '', '', '10/25/1991', '', '', 0, 0, ''),
('0000-00-00', '00:00:00', '', '', '10/25/1991', 'female', '', 0, 0, ''),
('0000-00-00', '11:23:00', '', '', '10/25/1991', '', '', 0, 0, ''),
('0000-00-00', '11:23:00', 'sam', 'deam', '10/25/1991', 'male', 'dgfbbbbbbbbbbbbbgggggggggggggggggggggggggggggg', 88888888, 77777, 'xxx@gmai.com'),
('0000-00-00', '01:23:00', 'video ', 'works', '10/25/1991', 'male', 'eAppointmentTime', 2147483647, 45678, 'lldnfdslflsdsdnfsjksj@lkdsfsdlkf.com'),
('0000-00-00', '01:23:00', 'deav', 'dfwef', '10/25/1991', 'male', 'sadadsadas', 88881212, 32323, 'myhah@gmail.com'),
('12-28-2010', '01:23:00', 'Optimus ', 'Prime', '10/25/1991', 'female', 'sdcsd', 88881212, 0, 'lldnfdslflsdsdnfsjksj@lkdsfsdlkf.com'),
('', '00:00:00', '', '', '10/25/1991', '', '', 0, 0, ''),
('12-28-2010', '10:54:00', 'Optimus ', 'Prime', '10/25/1991', 'male', 'Pharmacy Shopper', 88888888, 66212, 'myhah@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill_payments`
--
ALTER TABLE `bill_payments`
  ADD PRIMARY KEY (`order_No`),
  ADD UNIQUE KEY `order_No` (`order_No`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`account_no`),
  ADD UNIQUE KEY `account_no` (`account_no`);

--
-- Indexes for table `loginregister`
--
ALTER TABLE `loginregister`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `shop_payments`
--
ALTER TABLE `shop_payments`
  ADD PRIMARY KEY (`Invoice_no`),
  ADD UNIQUE KEY `Invoice_no` (`Invoice_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill_payments`
--
ALTER TABLE `bill_payments`
  MODIFY `order_No` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `account_no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `loginregister`
--
ALTER TABLE `loginregister`
  MODIFY `id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `shop_payments`
--
ALTER TABLE `shop_payments`
  MODIFY `Invoice_no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
