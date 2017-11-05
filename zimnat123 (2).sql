-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2017 at 12:57 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zimnat123`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_fees`
--

CREATE TABLE IF NOT EXISTS `tbl_admin_fees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `policy_year` varchar(3) NOT NULL,
  `monthly` double NOT NULL,
  `quarterly` double NOT NULL,
  `half_yearly` double NOT NULL,
  `annually` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_admin_fees`
--

INSERT INTO `tbl_admin_fees` (`id`, `policy_year`, `monthly`, `quarterly`, `half_yearly`, `annually`) VALUES
(1, '1', 11.1111111111111, 11.1111111111111, 11.1111111111111, 11.1111111111111),
(2, '2', 11.1111111111111, 11.1111111111111, 11.1111111111111, 11.1111111111111),
(3, '3 +', 11.1111111111111, 11.1111111111111, 11.1111111111111, 11.1111111111111);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_application_details`
--

CREATE TABLE IF NOT EXISTS `tbl_application_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(5) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(25) NOT NULL,
  `idnum_passport` varchar(15) NOT NULL,
  `marital_status` varchar(25) NOT NULL,
  `dependants` int(11) NOT NULL,
  `home_phone` varchar(25) NOT NULL,
  `mobile_num` varchar(25) NOT NULL,
  `address` varchar(150) NOT NULL,
  `country` varchar(50) NOT NULL,
  `postal_code` varchar(10) NOT NULL,
  `plan_type` varchar(15) NOT NULL,
  `amount_covered` double NOT NULL,
  `payment_details_logged` varchar(3) NOT NULL DEFAULT 'NO',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_application_details`
--

INSERT INTO `tbl_application_details` (`id`, `title`, `firstname`, `middlename`, `surname`, `dob`, `email`, `idnum_passport`, `marital_status`, `dependants`, `home_phone`, `mobile_num`, `address`, `country`, `postal_code`, `plan_type`, `amount_covered`, `payment_details_logged`) VALUES
(1, 'Miss', 'Vimbainashe', 'Laura', 'Nhira', '1994-05-07', 'nhiralee@gmail.com', '59-155130D18', 'Single', 2, '04786452', '0733144105', '12968 Madokero Estate, Tynwald, Harare', 'Zambia', '0260', 'Quarterly', 10000, 'NO'),
(3, 'Mr', 'Caleb', '', 'Bhosha', '1989-06-24', 'caleb@leon.co.zw', '1213', 'Married', 0, '00', '02', 'jklj', 'Zimbabwe', '000', 'Monthly', 2500, 'NO'),
(4, 'Mr', 'Edmore', '', 'Veemu', '1980-08-25', 'veremue@gmail.com', '47128492w47', 'Married', 2, '04777999', '0772808480', '15th Floor', 'Zimbabwe', '263', 'Monthly', 2500, 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_claims`
--

CREATE TABLE IF NOT EXISTS `tbl_claims` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `policy_number` varchar(25) NOT NULL,
  `deceased_name` varchar(100) NOT NULL,
  `death_date` date NOT NULL,
  `death_place` varchar(50) NOT NULL,
  `death_cause` varchar(50) NOT NULL,
  `address_at_death` varchar(100) NOT NULL,
  `occupation_at_death` varchar(25) NOT NULL,
  `suicidal` varchar(3) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `account_number` varchar(25) NOT NULL,
  `bank_address` varchar(100) NOT NULL,
  `branch_code` varchar(25) NOT NULL,
  `swift_code` varchar(10) NOT NULL,
  `principal_name` varchar(100) NOT NULL,
  `principal_email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_claims`
--

INSERT INTO `tbl_claims` (`id`, `policy_number`, `deceased_name`, `death_date`, `death_place`, `death_cause`, `address_at_death`, `occupation_at_death`, `suicidal`, `bank_name`, `account_name`, `account_number`, `bank_address`, `branch_code`, `swift_code`, `principal_name`, `principal_email`) VALUES
(1, '05055', 'Chineni Hwata', '2017-08-11', 'Buhera', 'collapse', '23jlk', 'retired', 'NO', 'NMB', '32000099', '1312', '3232', '1212', '2121', 'Caleb Bhosha', 'caleb@leon.co.zw');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_claim_documents`
--

CREATE TABLE IF NOT EXISTS `tbl_claim_documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `principal_email` varchar(25) NOT NULL,
  `principal_fullname` varchar(100) NOT NULL,
  `policy_number` varchar(25) NOT NULL,
  `file_name` varchar(250) NOT NULL,
  `file_type` varchar(10) NOT NULL,
  `file_size` int(11) NOT NULL,
  `document_type` varchar(50) NOT NULL,
  `upload_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_claim_documents`
--

INSERT INTO `tbl_claim_documents` (`id`, `principal_email`, `principal_fullname`, `policy_number`, `file_name`, `file_type`, `file_size`, `document_type`, `upload_time`) VALUES
(1, 'caleb@leon.co.zw', 'Caleb Bhosha', '05055', '25611-21 aug 2017.txt', 'text/plain', 422, 'Death_Certificate', '2017-08-21 20:10:18'),
(2, 'caleb@leon.co.zw', 'Caleb Bhosha', '05055', '44805-21 aug 2017.txt', 'text/plain', 422, 'National_ID', '2017-08-21 20:10:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_direct_debits`
--

CREATE TABLE IF NOT EXISTS `tbl_direct_debits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(25) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `account_number` int(20) NOT NULL,
  `branch_code` varchar(25) NOT NULL,
  `convenient_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_direct_debits`
--

INSERT INTO `tbl_direct_debits` (`id`, `email`, `fullname`, `bank_name`, `account_name`, `account_number`, `branch_code`, `convenient_date`) VALUES
(1, 'nhiralee@gmail.com', 'Vimbainashe Nhira', 'CBZ', 'Vimbainashe Nhira', 12346789, '2017-08-10', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_family_members`
--

CREATE TABLE IF NOT EXISTS `tbl_family_members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(5) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `relationship` varchar(15) NOT NULL,
  `country` varchar(50) NOT NULL,
  `amount_covered` double NOT NULL,
  `plan_type` varchar(15) NOT NULL,
  `principal_idnum_passport` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_family_members`
--

INSERT INTO `tbl_family_members` (`id`, `title`, `firstname`, `middlename`, `surname`, `dob`, `gender`, `relationship`, `country`, `amount_covered`, `plan_type`, `principal_idnum_passport`) VALUES
(1, 'Mr', 'Jamal', 'Jan', 'Doe', '1994-06-23', 'Male', 'Child', 'Zambia', 2500, 'Quarterly', '59-155130D18'),
(2, 'Mrs', 'Jane', 'Sarah', 'Doe', '1963-01-04', 'Female', 'Parent', 'Zimbabwe', 2500, 'Quarterly', '59-155130D18'),
(3, 'Mr', 'Jamal', 'Jan', 'Doe', '1994-06-23', 'Male', 'Child', 'Zambia', 2500, 'Quarterly', '59-155130D18'),
(4, 'Mrs', 'Jane', 'Sarah', 'Doe', '1963-01-04', 'Female', 'Parent', 'Zimbabwe', 2500, 'Quarterly', '59-155130D18'),
(5, 'Mr', 'V', '', 'v', '2017-07-31', 'Male', 'Spouse', 'Zimbabwe', 2500, 'Monthly', '47128492w47'),
(6, 'Mr', 'v', '', 'v', '1980-08-16', 'Male', 'Spouse', 'Zimbabwe', 2500, 'Monthly', '47128492w47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gp_for_checking`
--

CREATE TABLE IF NOT EXISTS `tbl_gp_for_checking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `age` int(11) NOT NULL,
  `annually` double NOT NULL,
  `half_yearly` double NOT NULL,
  `quarterly` double NOT NULL,
  `monthly` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `tbl_gp_for_checking`
--

INSERT INTO `tbl_gp_for_checking` (`id`, `age`, `annually`, `half_yearly`, `quarterly`, `monthly`) VALUES
(1, 1, 7.26, 3.72, 1.88, 0.63),
(2, 2, 7.43, 3.8, 1.92, 0.65),
(3, 3, 7.62, 3.9, 1.97, 0.66),
(4, 4, 7.83, 4.01, 2.03, 0.68),
(5, 5, 8.06, 4.12, 2.09, 0.7),
(6, 6, 8.32, 4.26, 2.15, 0.72),
(7, 7, 8.6, 4.4, 2.23, 0.75),
(8, 8, 8.93, 4.57, 2.31, 0.78),
(9, 9, 9.33, 4.78, 2.42, 0.81),
(10, 10, 9.76, 5, 2.53, 0.85),
(11, 11, 10.24, 5.24, 2.65, 0.89),
(12, 12, 10.76, 5.51, 2.79, 0.94),
(13, 13, 11.38, 5.82, 2.95, 0.99),
(14, 14, 12.21, 6.25, 3.16, 1.06),
(15, 15, 13.02, 6.67, 3.37, 1.13),
(16, 16, 13.8, 7.07, 3.58, 1.2),
(17, 17, 14.56, 7.46, 3.77, 1.27),
(18, 18, 15.3, 7.84, 3.97, 1.33),
(19, 19, 16, 8.2, 4.15, 1.39),
(20, 20, 16.73, 8.57, 4.34, 1.46),
(21, 21, 17.44, 8.94, 4.52, 1.52),
(22, 22, 18.15, 9.3, 4.71, 1.58),
(23, 23, 18.84, 9.66, 4.89, 1.64),
(24, 24, 19.53, 10.01, 5.07, 1.7),
(25, 25, 20.22, 10.36, 5.25, 1.76),
(26, 26, 20.92, 10.73, 5.43, 1.83),
(27, 27, 21.62, 11.08, 5.61, 1.89),
(28, 28, 22.28, 11.43, 5.79, 1.95),
(29, 29, 22.91, 11.75, 5.95, 2),
(30, 30, 23.5, 12.05, 6.11, 2.05),
(31, 31, 24.02, 12.32, 6.24, 2.1),
(32, 32, 24.43, 12.54, 6.35, 2.14),
(33, 33, 24.62, 12.64, 6.4, 2.15),
(34, 34, 24.74, 12.7, 6.43, 2.16),
(35, 35, 24.82, 12.73, 6.45, 2.17),
(36, 36, 24.87, 12.76, 6.46, 2.17),
(37, 37, 24.9, 12.78, 6.47, 2.18),
(38, 38, 24.93, 12.79, 6.48, 2.18),
(39, 39, 24.96, 12.81, 6.49, 2.18),
(40, 40, 25.01, 12.83, 6.5, 2.19),
(41, 41, 25.1, 12.87, 6.52, 2.19),
(42, 42, 25.19, 12.92, 6.55, 2.2),
(43, 43, 25.23, 12.94, 6.55, 2.2),
(44, 44, 25.79, 13.23, 6.7, 2.25),
(45, 45, 26.48, 13.58, 6.88, 2.31),
(46, 46, 27.31, 14, 7.09, 2.38),
(47, 47, 28.27, 14.5, 7.34, 2.47),
(48, 48, 29.4, 15.08, 7.64, 2.57),
(49, 49, 30.69, 15.74, 7.97, 2.68),
(50, 50, 32.22, 16.53, 8.37, 2.81),
(51, 51, 33.92, 17.4, 8.81, 2.96),
(52, 52, 35.87, 18.4, 9.32, 3.13),
(53, 53, 38.14, 19.57, 9.91, 3.33),
(54, 54, 40.87, 20.97, 10.63, 3.57),
(55, 55, 43.85, 22.51, 11.41, 3.84),
(56, 56, 47.09, 24.18, 12.26, 4.12),
(57, 57, 50.58, 25.99, 13.17, 4.43),
(58, 58, 54.32, 27.92, 14.16, 4.76),
(59, 59, 58.34, 30, 15.22, 5.12),
(60, 60, 62.66, 32.24, 16.36, 5.51),
(61, 61, 67.35, 34.67, 17.59, 5.92),
(62, 62, 72.45, 37.32, 18.95, 6.38),
(63, 63, 78.04, 40.23, 20.43, 6.88),
(64, 64, 84.18, 43.42, 22.06, 7.43),
(65, 65, 90.89, 46.93, 23.85, 8.04),
(66, 66, 98.16, 50.73, 25.8, 8.7),
(67, 67, 105.98, 54.83, 27.9, 9.41),
(68, 68, 114.34, 59.23, 30.16, 10.18),
(69, 69, 123.24, 63.93, 32.57, 11),
(70, 70, 132.7, 68.93, 35.15, 11.87),
(71, 71, 142.75, 74.26, 37.9, 12.81),
(72, 72, 153.43, 79.94, 40.83, 13.81),
(73, 73, 164.79, 86.01, 43.97, 14.88),
(74, 74, 176.87, 92.48, 47.33, 16.03),
(75, 75, 189.7, 99.39, 50.91, 17.25);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inquiries`
--

CREATE TABLE IF NOT EXISTS `tbl_inquiries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(5) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `policy_number` varchar(50) NOT NULL,
  `resident_country` varchar(50) NOT NULL,
  `phone_number` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `subject` varchar(15) NOT NULL,
  `message` varchar(250) NOT NULL,
  `inquiry_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `response_sent` varchar(3) NOT NULL DEFAULT 'NO',
  `response_by` varchar(50) NOT NULL,
  `response_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_inquiries`
--

INSERT INTO `tbl_inquiries` (`id`, `title`, `firstname`, `surname`, `policy_number`, `resident_country`, `phone_number`, `email`, `subject`, `message`, `inquiry_time`, `response_sent`, `response_by`, `response_time`) VALUES
(1, '', 'Vimbainashe', 'Nhira', '12345', 'RSA', 'jhkk', 'nhiralee@gmail.com', '', 'afgh', '2017-07-31 10:07:10', 'NO', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_modal_factors`
--

CREATE TABLE IF NOT EXISTS `tbl_modal_factors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `age` int(11) NOT NULL,
  `monthly` double NOT NULL,
  `quarterly` double NOT NULL,
  `half_yearly` double NOT NULL,
  `annually` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `tbl_modal_factors`
--

INSERT INTO `tbl_modal_factors` (`id`, `age`, `monthly`, `quarterly`, `half_yearly`, `annually`) VALUES
(1, 1, 1, 2.9841, 5.9048, 11.5238),
(2, 2, 1, 2.9538, 5.8462, 11.4308),
(3, 3, 1, 2.9848, 5.9091, 11.5455),
(4, 4, 1, 2.9853, 5.8971, 11.5147),
(5, 5, 1, 2.9857, 5.8857, 11.5143),
(6, 6, 1, 2.9861, 5.9167, 11.5556),
(7, 7, 1, 2.9733, 5.8667, 11.4667),
(8, 8, 1, 2.9615, 5.859, 11.4487),
(9, 9, 1, 2.9877, 5.9012, 11.5185),
(10, 10, 1, 2.9765, 5.8824, 11.4824),
(11, 11, 1, 2.9775, 5.8876, 11.5056),
(12, 12, 1, 2.9681, 5.8617, 11.4468),
(13, 13, 1, 2.9798, 5.8788, 11.4949),
(14, 14, 1, 2.9811, 5.8962, 11.5189),
(15, 15, 1, 2.9823, 5.9027, 11.5221),
(16, 16, 1, 2.9833, 5.8917, 11.5),
(17, 17, 1, 2.9685, 5.874, 11.4646),
(18, 18, 1, 2.985, 5.8947, 11.5038),
(19, 19, 1, 2.9856, 5.8993, 11.5108),
(20, 20, 1, 2.9726, 5.8699, 11.4589),
(21, 21, 1, 2.9737, 5.8816, 11.4737),
(22, 22, 1, 2.981, 5.8861, 11.4873),
(23, 23, 1, 2.9817, 5.8902, 11.4878),
(24, 24, 1, 2.9824, 5.8882, 11.4882),
(25, 25, 1, 2.983, 5.8864, 11.4886),
(26, 26, 1, 2.9672, 5.8634, 11.4317),
(27, 27, 1, 2.9683, 5.8624, 11.4392),
(28, 28, 1, 2.9692, 5.8615, 11.4256),
(29, 29, 1, 2.975, 5.875, 11.455),
(30, 30, 1, 2.9805, 5.878, 11.4634),
(31, 31, 1, 2.9714, 5.8667, 11.4381),
(32, 32, 1, 2.9673, 5.8598, 11.4159),
(33, 33, 1, 2.9767, 5.8791, 11.4512),
(34, 34, 1, 2.9769, 5.8796, 11.4537),
(35, 35, 1, 2.9724, 5.8664, 11.4378),
(36, 36, 1, 2.977, 5.8802, 11.4608),
(37, 37, 1, 2.9679, 5.8624, 11.422),
(38, 38, 1, 2.9725, 5.867, 11.4358),
(39, 39, 1, 2.9771, 5.8761, 11.4495),
(40, 40, 1, 2.968, 5.8584, 11.4201),
(41, 41, 1, 2.9772, 5.8767, 11.4612),
(42, 42, 1, 2.9773, 5.8727, 11.45),
(43, 43, 1, 2.9773, 5.8818, 11.4682),
(44, 44, 1, 2.9778, 5.88, 11.4622),
(45, 45, 1, 2.9784, 5.8788, 11.4632),
(46, 46, 1, 2.979, 5.8824, 11.4748),
(47, 47, 1, 2.9717, 5.8704, 11.4453),
(48, 48, 1, 2.9728, 5.8677, 11.4397),
(49, 49, 1, 2.9739, 5.8731, 11.4515),
(50, 50, 1, 2.9786, 5.8826, 11.4662),
(51, 51, 1, 2.9764, 5.8784, 11.4595),
(52, 52, 1, 2.9776, 5.8786, 11.4601),
(53, 53, 1, 2.976, 5.8769, 11.4535),
(54, 54, 1, 2.9776, 5.8739, 11.4482),
(55, 55, 1, 2.9714, 5.862, 11.4193),
(56, 56, 1, 2.9757, 5.8689, 11.4296),
(57, 57, 1, 2.9729, 5.8668, 11.4176),
(58, 58, 1, 2.9748, 5.8655, 11.4118),
(59, 59, 1, 2.9727, 5.8594, 11.3945),
(60, 60, 1, 2.9691, 5.8512, 11.3721),
(61, 61, 1, 2.9713, 5.8564, 11.3767),
(62, 62, 1, 2.9702, 5.8495, 11.3558),
(63, 63, 1, 2.9695, 5.8474, 11.343),
(64, 64, 1, 2.969, 5.8439, 11.3297),
(65, 65, 1, 2.9664, 5.8371, 11.3047),
(66, 66, 1, 2.9655, 5.831, 11.2828),
(67, 67, 1, 2.9649, 5.8268, 11.2625),
(68, 68, 1, 2.9627, 5.8183, 11.2318),
(69, 69, 1, 2.9609, 5.8118, 11.2036),
(70, 70, 1, 2.9612, 5.8071, 11.1794),
(71, 71, 1, 2.9586, 5.797, 11.1436),
(72, 72, 1, 2.9566, 5.7886, 11.1101),
(73, 73, 1, 2.955, 5.7802, 11.0746),
(74, 74, 1, 2.9526, 5.7692, 11.0337),
(75, 75, 1, 2.9513, 5.7617, 10.9971);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_monthly_net_premium_rates`
--

CREATE TABLE IF NOT EXISTS `tbl_monthly_net_premium_rates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `age` int(11) NOT NULL,
  `benefit2500` double NOT NULL,
  `benefit5000` double NOT NULL,
  `benefit10000` double NOT NULL,
  `benefit15000` double NOT NULL,
  `benefit20000` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `tbl_monthly_net_premium_rates`
--

INSERT INTO `tbl_monthly_net_premium_rates` (`id`, `age`, `benefit2500`, `benefit5000`, `benefit10000`, `benefit15000`, `benefit20000`) VALUES
(1, 1, 0.57, 0.57, 0.57, 0.57, 0.57),
(2, 2, 0.59, 0.59, 0.59, 0.59, 0.59),
(3, 3, 0.59, 0.59, 0.59, 0.59, 0.59),
(4, 4, 0.61, 0.61, 0.61, 0.61, 0.61),
(5, 5, 0.63, 0.63, 0.63, 0.63, 0.63),
(6, 6, 0.65, 0.65, 0.65, 0.65, 0.65),
(7, 7, 0.68, 0.68, 0.68, 0.68, 0.68),
(8, 8, 0.7, 0.7, 0.7, 0.7, 0.7),
(9, 9, 0.73, 0.73, 0.73, 0.73, 0.73),
(10, 10, 0.77, 0.77, 0.77, 0.77, 0.77),
(11, 11, 0.8, 0.8, 0.8, 0.8, 0.8),
(12, 12, 0.85, 0.85, 0.85, 0.85, 0.85),
(13, 13, 0.89, 0.89, 0.89, 0.89, 0.89),
(14, 14, 0.95, 0.95, 0.95, 0.95, 0.95),
(15, 15, 1.02, 1.02, 1.02, 1.02, 1.02),
(16, 16, 1.08, 1.08, 1.08, 1.08, 1.08),
(17, 17, 1.14, 1.14, 1.14, 1.14, 1.14),
(18, 18, 1.2, 1.2, 1.2, 1.2, 1.2),
(19, 19, 1.25, 1.25, 1.25, 1.25, 1.25),
(20, 20, 1.31, 1.31, 1.31, 1.31, 1.31),
(21, 21, 1.37, 1.37, 1.37, 1.37, 1.37),
(22, 22, 1.42, 1.42, 1.42, 1.42, 1.42),
(23, 23, 1.48, 1.48, 1.48, 1.48, 1.48),
(24, 24, 1.53, 1.53, 1.53, 1.53, 1.53),
(25, 25, 1.58, 1.58, 1.58, 1.58, 1.58),
(26, 26, 1.65, 1.65, 1.65, 1.65, 1.65),
(27, 27, 1.7, 1.7, 1.7, 1.7, 1.7),
(28, 28, 1.76, 1.76, 1.76, 1.76, 1.76),
(29, 29, 1.8, 1.8, 1.8, 1.8, 1.8),
(30, 30, 1.85, 1.85, 1.85, 1.85, 1.85),
(31, 31, 1.89, 1.89, 1.89, 1.89, 1.89),
(32, 32, 1.93, 1.93, 1.93, 1.93, 1.93),
(33, 33, 1.94, 1.94, 1.94, 1.94, 1.94),
(34, 34, 1.94, 1.94, 1.94, 1.94, 1.94),
(35, 35, 1.95, 1.95, 1.95, 1.95, 1.95),
(36, 36, 1.95, 1.95, 1.95, 1.95, 1.95),
(37, 37, 1.96, 1.96, 1.96, 1.96, 1.96),
(38, 38, 1.96, 1.96, 1.96, 1.96, 1.96),
(39, 39, 1.96, 1.96, 1.96, 1.96, 1.96),
(40, 40, 1.97, 1.97, 1.97, 1.97, 1.97),
(41, 41, 1.97, 1.97, 1.97, 1.97, 1.97),
(42, 42, 1.98, 1.98, 1.98, 1.98, 1.98),
(43, 43, 1.98, 1.98, 1.98, 1.98, 1.98),
(44, 44, 2.03, 2.03, 2.03, 2.03, 2.03),
(45, 45, 2.08, 2.08, 2.08, 2.08, 2.08),
(46, 46, 2.14, 2.14, 2.14, 2.14, 2.14),
(47, 47, 2.22, 2.22, 2.22, 2.22, 2.22),
(48, 48, 2.31, 2.31, 2.31, 2.31, 2.31),
(49, 49, 2.41, 2.41, 2.41, 2.41, 2.41),
(50, 50, 2.53, 2.53, 2.53, 2.53, 2.53),
(51, 51, 2.66, 2.66, 2.66, 2.66, 2.66),
(52, 52, 2.82, 2.82, 2.82, 2.82, 2.82),
(53, 53, 3, 3, 3, 3, 3),
(54, 54, 3.21, 3.21, 3.21, 3.21, 3.21),
(55, 55, 3.46, 3.46, 3.46, 3.46, 3.46),
(56, 56, 3.71, 3.71, 3.71, 3.71, 3.71),
(57, 57, 3.99, 3.99, 3.99, 3.99, 3.99),
(58, 58, 4.28, 4.28, 4.28, 4.28, 4.28),
(59, 59, 4.61, 4.61, 4.61, 4.61, 4.61),
(60, 60, 4.96, 4.96, 4.96, 4.96, 4.96),
(61, 61, 5.33, 5.33, 5.33, 5.33, 5.33),
(62, 62, 5.74, 5.74, 5.74, 5.74, 5.74),
(63, 63, 6.19, 6.19, 6.19, 6.19, 6.19),
(64, 64, 6.69, 6.69, 6.69, 6.69, 6.69),
(65, 65, 7.24, 7.24, 7.24, 7.24, 7.24),
(66, 66, 7.83, 7.83, 7.83, 7.83, 7.83),
(67, 67, 8.47, 8.47, 8.47, 8.47, 8.47),
(68, 68, 9.16, 9.16, 9.16, 9.16, 9.16),
(69, 69, 9.9, 9.9, 9.9, 9.9, 9.9),
(70, 70, 10.68, 10.68, 10.68, 10.68, 10.68),
(71, 71, 11.53, 11.53, 11.53, 11.53, 11.53),
(72, 72, 12.43, 12.43, 12.43, 12.43, 12.43),
(73, 73, 13.39, 13.39, 13.39, 13.39, 13.39),
(74, 74, 14.43, 14.43, 14.43, 14.43, 14.43),
(75, 75, 15.53, 15.53, 15.53, 15.53, 15.53);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_principal_beneficiary`
--

CREATE TABLE IF NOT EXISTS `tbl_principal_beneficiary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(5) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `relationship` varchar(15) NOT NULL,
  `principal_idnum_passport` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_principal_beneficiary`
--

INSERT INTO `tbl_principal_beneficiary` (`id`, `title`, `firstname`, `surname`, `relationship`, `principal_idnum_passport`) VALUES
(1, 'Mr', 'Jamal', 'Doe', 'Child', '59-155130D18'),
(2, 'Mr', 'Jamal', 'Doe', 'Child', '59-155130D18'),
(3, 'Mr', 'Tino', 'Magura', 'Child', '1213'),
(4, 'Mr', 'b', 'b', 'Spouse', '47128492w47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prospective_clients`
--

CREATE TABLE IF NOT EXISTS `tbl_prospective_clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `passcode` varchar(25) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Inactive',
  `title` varchar(5) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` date DEFAULT NULL,
  `homephone` varchar(25) NOT NULL,
  `mobilenum` varchar(25) NOT NULL,
  `pwdlastchanged` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_prospective_clients`
--

INSERT INTO `tbl_prospective_clients` (`id`, `username`, `passcode`, `status`, `title`, `firstname`, `surname`, `middlename`, `email`, `gender`, `dob`, `homephone`, `mobilenum`, `pwdlastchanged`) VALUES
(1, 'nhiralee@gmail.com', '123', 'Active', 'Miss', 'Vimbainashe', 'Nhira', 'Laura', 'nhiralee@gmail.com', 'Female', '1994-05-07', '777999', '733144105', '0000-00-00'),
(5, 'chrisrufu@gmail.com', '123456789', 'Active', 'Mr', 'Chris', 'Rufu', '', 'chrisrufu@gmail.com', 'Male', '0000-00-00', '', '+263772964', '0000-00-00'),
(6, 'vamber@zimnat.co.zw', 'keptwoman04', 'Active', 'Ms', 'Rufaro', 'Vambe', 'Eve', 'vamber@zimnat.co.zw', 'Female', '0000-00-00', '263772882708', '263772882708', '0000-00-00'),
(7, 'murevim@zimnat.co.zw', 'Password#45', 'Active', 'Mr', 'Misheck ', 'Murevi', '', 'murevim@zimnat.co.zw', 'Male', '1974-07-24', '', '0772927750', '0000-00-00'),
(8, 'murevim@zimnat.co.zw', 'Password#45', 'Active', 'Mr', 'Misheck ', 'Murevi', '', 'murevim@zimnat.co.zw', 'Male', '1974-07-24', '', '0772927750', '0000-00-00'),
(9, 'veremue@gmail.com', '123', 'Active', 'Mr', 'Ed', 'Veremu', '', 'veremue@gmail.com', 'Male', '2014-05-05', '', '06688774411', '0000-00-00'),
(10, 'edmore@leon.co.zw', '123', 'Active', 'Mr', 'Ed', 'Veremu', '', 'edmore@leon.co.zw', 'Male', '2011-01-01', '', '07744889966', '0000-00-00'),
(11, 'clebhosh@gmail.com', '123', 'Active', 'Mr', 'X', 'G', '', 'clebhosh@gmail.com', 'Male', '2017-07-26', '', '+263782895500', '0000-00-00'),
(12, 'gatsid@zimnat.co.zw', 'kingsbury1', 'Active', 'Ms', 'Doreen', 'Gatsi', '', 'gatsid@zimnat.co.zw', 'Female', '1978-10-21', '', '263772330025', '0000-00-00'),
(13, 'effortgotora123@gmail.com', 'Maryzenda1', 'Inactive', 'Mr', 'Effort', 'Gotora', 'Effort', 'effortgotora123@gmail.com', 'Male', '0000-00-00', '042907170', '+263773496505', '0000-00-00'),
(14, 'mundowaz@zimnat.co.zw', 'Zimnat123', 'Inactive', 'Mr', 'Zeb', 'Mun', 'te', 'mundowaz@zimnat.co.zw', 'Male', '2017-10-12', '', '0783397022', '0000-00-00'),
(15, 'sharon.nyakutambwa4@gmail', 'maibhunu', 'Inactive', 'Mrs', 'Sharon', 'Bhunu', 'Shamiso', 'sharon.nyakutambwa4@gmail', 'Female', '1991-07-12', '0776285025', '0719285025', '0000-00-00'),
(16, 'dzingayia@zimnat.co.zw', 'Absalom', 'Active', 'Mr', 'Absalom', 'Dzingayi', '', 'dzingayia@zimnat.co.zw', 'Male', '1984-06-03', '', 'Finance Manager', '0000-00-00'),
(17, 'chokotoe@zimnat.co.zw', 'LawT1#@$', 'Inactive', 'Mr', 'Enock', 'Chokoto', '', 'chokotoe@zimnat.co.zw', 'Male', '1973-12-02', '', '+262772616811', '0000-00-00'),
(18, 'it@leon.co.zw', '123', 'Inactive', 'Mr', 'T', 'T', '', 'it@leon.co.zw', 'Male', '2017-08-03', '', '0', '0000-00-00'),
(19, 'ed@leon.co.zw', '123', 'Inactive', 'Mr', 'Ed', 'Vq', '', 'ed@leon.co.zw', 'Male', '1982-11-18', '77777', '7777777', '0000-00-00'),
(20, 'caleb@bhoshstudio.com', 'leon', 'Active', 'Mrs', 'Caleb', 'Bhosha', '', 'caleb@bhoshstudio.com', 'Male', '1989-02-04', '0782', '0782', '0000-00-00'),
(21, 'caleb@leon.co.zw', 'Leon@2016', 'Active', 'Mr', 'Caleb', 'Bhosha', '', 'caleb@leon.co.zw', 'Male', '1989-06-24', '0782', '0782', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_referrals`
--

CREATE TABLE IF NOT EXISTS `tbl_referrals` (
  `id` int(11) NOT NULL DEFAULT '0',
  `fullname_referee` varchar(50) NOT NULL,
  `policynumber_referee` varchar(50) NOT NULL,
  `fullname_refered` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone_number` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_referrals`
--

INSERT INTO `tbl_referrals` (`id`, `fullname_referee`, `policynumber_referee`, `fullname_refered`, `email`, `phone_number`) VALUES
(0, 'Vimbainashe Nhira', '123', 'Jane Doe', 'nhiralee@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_secondary_beneficiary`
--

CREATE TABLE IF NOT EXISTS `tbl_secondary_beneficiary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(5) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `relationship` varchar(15) NOT NULL,
  `principal_idnum_passport` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_secondary_beneficiary`
--

INSERT INTO `tbl_secondary_beneficiary` (`id`, `title`, `firstname`, `surname`, `relationship`, `principal_idnum_passport`) VALUES
(1, 'Mrs', 'Jane', 'Doe', 'Parent', '59-155130D18'),
(2, 'Mrs', 'Jane', 'Doe', 'Parent', '59-155130D18'),
(3, 'Miss', 'jkljk', 'jkjlkj', 'Parent', '1213'),
(4, 'Mrs', 'v', 'x', 'Child', '47128492w47');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
