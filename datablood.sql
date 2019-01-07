-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2018 at 05:35 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datablood`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `id` int(11) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `bank_address` varchar(255) NOT NULL,
  `book` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`id`, `blood_group`, `state`, `district`, `bank_name`, `bank_address`, `book`) VALUES
(1, 'O+', 'Uttar Pradesh', 'Ghaziabad', 'Blood Bank, MMG District Hospital', 'Blood Bank, MMG District Hospital, Ghaziabad', 'bloodbook.php'),
(2, 'A+', 'Uttar Pradesh', 'Ghaziabad', 'Blood Bank, MMG District Hospital', 'Blood Bank, MMG District Hospital, Ghaziabad', 'bloodbook.php'),
(3, 'O+', 'Uttar Pradesh', 'ghaziabad', 'Modern Pathology & Blood Bank, SA-96, Shastri Nagar,\r\nGhaziabad.\r\n', 'Shastri Nagar,\r\nGhaziabad.\r\n', 'bloodbook.php'),
(4, 'A+', 'Uttar Pradesh', 'ghaziabad', 'Modern Pathology & Blood Bank, SA-96, Shastri Nagar,\r\nGhaziabad.\r\n', 'Shastri Nagar,\r\nGhaziabad.\r\n', 'bloodbook.php'),
(5, 'B+', 'Uttar Pradesh', 'ghaziabad', 'Modern Pathology & Blood Bank, SA-96, Shastri Nagar,\r\nGhaziabad.\r\n', 'Shastri Nagar,\r\nGhaziabad.\r\n', 'bloodbook.php'),
(6, 'AB+', 'Uttar Pradesh', 'ghaziabad', 'Modern Pathology & Blood Bank, SA-96, Shastri Nagar,\r\nGhaziabad.\r\n', 'Shastri Nagar,\r\nGhaziabad.\r\n', 'bloodbook.php'),
(7, 'O-', 'Uttar Pradesh', 'ghaziabad', 'Modern Pathology & Blood Bank, SA-96, Shastri Nagar,\r\nGhaziabad.\r\n', 'Shastri Nagar,\r\nGhaziabad.\r\n', 'bloodbook.php'),
(8, 'A-', 'Uttar Pradesh', 'ghaziabad', 'Modern Pathology & Blood Bank, SA-96, Shastri Nagar,\r\nGhaziabad.\r\n', 'Shastri Nagar,\r\nGhaziabad.\r\n', 'bloodbook.php'),
(9, 'AB-', 'Uttar Pradesh', 'ghaziabad', 'Modern Pathology & Blood Bank, SA-96, Shastri Nagar,\r\nGhaziabad.\r\n', 'Shastri Nagar,\r\nGhaziabad.\r\n', 'bloodbook.php'),
(10, 'B-', 'Uttar Pradesh', 'ghaziabad', 'Modern Pathology & Blood Bank, SA-96, Shastri Nagar,\r\nGhaziabad.\r\n', 'Shastri Nagar,\r\nGhaziabad.\r\n', 'bloodbook.php'),
(11, 'O+', 'Uttar Pradesh', 'Ghaziabad', 'Blood Bank, Narendra Mohan Hospital & Research Centre,\r\nMohan Nagar, Ghaziabad\r\n', 'Mohan Nagar, Ghaziabad', 'bloodbook.php'),
(12, 'A+', 'Uttar Pradesh', 'Ghaziabad', 'Blood Bank, Narendra Mohan Hospital & Research Centre,\r\nMohan Nagar, Ghaziabad\r\n', 'Mohan Nagar, Ghaziabad', 'bloodbook.php'),
(13, 'B+', 'Uttar Pradesh', 'Ghaziabad', 'Blood Bank, Narendra Mohan Hospital & Research Centre,\r\nMohan Nagar, Ghaziabad\r\n', 'Mohan Nagar, Ghaziabad', 'bloodbook.php'),
(14, 'AB+', 'Uttar Pradesh', 'Ghaziabad', 'Blood Bank, Narendra Mohan Hospital & Research Centre,\r\nMohan Nagar, Ghaziabad\r\n', 'Mohan Nagar, Ghaziabad', 'bloodbook.php'),
(15, 'O-', 'Uttar Pradesh', 'Ghaziabad', 'Blood Bank, Narendra Mohan Hospital & Research Centre,\r\nMohan Nagar, Ghaziabad\r\n', 'Mohan Nagar, Ghaziabad', 'bloodbook.php'),
(16, 'A-', 'Uttar Pradesh', 'Ghaziabad', 'Blood Bank, Narendra Mohan Hospital & Research Centre,\r\nMohan Nagar, Ghaziabad\r\n', 'Mohan Nagar, Ghaziabad', 'bloodbook.php'),
(17, 'B-', 'Uttar Pradesh', 'Ghaziabad', 'Blood Bank, Narendra Mohan Hospital & Research Centre,\r\nMohan Nagar, Ghaziabad\r\n', 'Mohan Nagar, Ghaziabad', 'bloodbook.php'),
(18, 'AB-', 'Uttar Pradesh', 'Ghaziabad', 'Blood Bank, Narendra Mohan Hospital & Research Centre,\r\nMohan Nagar, Ghaziabad\r\n', 'Mohan Nagar, Ghaziabad', 'bloodbook.php'),
(19, 'O+', 'Uttar Pradesh', 'Ghaziabad', 'Blood Bank, Santosh Medical & Dental College Hospital,\r\nNo. 1, Ambedkar Road, Ghaziabad\r\n', 'No. 1, Ambedkar Road, Ghaziabad', 'bloodbook.php'),
(20, 'A+', 'Uttar Pradesh', 'Ghaziabad', 'Blood Bank, Santosh Medical & Dental College Hospital,\r\nNo. 1, Ambedkar Road, Ghaziabad\r\n', 'No. 1, Ambedkar Road, Ghaziabad', 'bloodbook.php'),
(21, 'B+', 'Uttar Pradesh', 'Ghaziabad', 'Blood Bank, Santosh Medical & Dental College Hospital,\r\nNo. 1, Ambedkar Road, Ghaziabad\r\n', 'No. 1, Ambedkar Road, Ghaziabad', 'bloodbook.php'),
(22, 'AB+', 'Uttar Pradesh', 'Ghaziabad', 'Blood Bank, Santosh Medical & Dental College Hospital,\r\nNo. 1, Ambedkar Road, Ghaziabad\r\n', 'No. 1, Ambedkar Road, Ghaziabad', 'bloodbook.php'),
(23, 'O-', 'Uttar Pradesh', 'Ghaziabad', 'Blood Bank, Santosh Medical & Dental College Hospital,\r\nNo. 1, Ambedkar Road, Ghaziabad\r\n', 'No. 1, Ambedkar Road, Ghaziabad', 'bloodbook.php'),
(24, 'A-', 'Uttar Pradesh', 'Ghaziabad', 'Blood Bank, Santosh Medical & Dental College Hospital,\r\nNo. 1, Ambedkar Road, Ghaziabad\r\n', 'No. 1, Ambedkar Road, Ghaziabad', 'bloodbook.php'),
(25, 'B-', 'Uttar Pradesh', 'Ghaziabad', 'Blood Bank, Santosh Medical & Dental College Hospital,\r\nNo. 1, Ambedkar Road, Ghaziabad\r\n', 'No. 1, Ambedkar Road, Ghaziabad', 'bloodbook.php'),
(26, 'AB-', 'Uttar Pradesh', 'Ghaziabad', 'Blood Bank, Santosh Medical & Dental College Hospital,\r\nNo. 1, Ambedkar Road, Ghaziabad\r\n', 'No. 1, Ambedkar Road, Ghaziabad', 'bloodbook.php');

-- --------------------------------------------------------

--
-- Table structure for table `blood_orders`
--

CREATE TABLE `blood_orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `aadhar` int(255) NOT NULL,
  `delivery_address` varchar(255) NOT NULL,
  `mobile_number` int(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_orders`
--

INSERT INTO `blood_orders` (`id`, `name`, `address`, `aadhar`, `delivery_address`, `mobile_number`, `blood_group`, `amount`) VALUES
(1, 'deepak', 'shivam vihar', 123456789, 'ITS', 98765432, 'O+', '1 Unit');

-- --------------------------------------------------------

--
-- Table structure for table `organs`
--

CREATE TABLE `organs` (
  `id` int(11) NOT NULL,
  `bodypart` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pincode` int(11) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `Book` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organs`
--

INSERT INTO `organs` (`id`, `bodypart`, `state`, `district`, `address`, `pincode`, `contact`, `Book`) VALUES
(1, 'kidney', 'uttar pradesh', 'ghaziabad', 'MMG Hospital ', 201205, '5565564754', 'organbook.php'),
(2, 'liver', 'uttar pradesh', 'ghaziabad', 'MMG Hospital ', 201205, '5565564754', 'organbook.php'),
(3, 'lungs', 'uttar pradesh', 'ghaziabad', 'MMG Hospital ', 201205, '5565564754', 'organbook.php'),
(4, 'lungs', 'uttar pradesh', 'ghaziabad', 'MMG Hospital ', 201205, '5565564754', 'organbook.php'),
(5, 'Heart', 'uttar pradesh', 'ghaziabad', 'MMG Hospital ', 201205, '5565564754', 'organbook.php'),
(6, 'Bone Marrow', 'uttar pradesh', 'ghaziabad', 'MMG Hospital ', 201205, '5565564754', 'organbook.php'),
(7, 'Eye Tissue', 'uttar pradesh', 'ghaziabad', 'MMG Hospital ', 201205, '5565564754', 'organbook.php'),
(8, 'Hair Transplant', 'uttar pradesh', 'ghaziabad', 'MMG Hospital ', 201205, '5565564754', 'organbook.php'),
(9, 'Pancreas', 'uttar pradesh', 'ghaziabad', 'MMG Hospital ', 201205, '5565564754', 'organbook.php'),
(10, 'Tendons', 'uttar pradesh', 'ghaziabad', 'MMG Hospital ', 201205, '5565564754', 'organbook.php'),
(11, 'Skin Tissue', 'uttar pradesh', 'ghaziabad', 'MMG Hospital ', 201205, '5565564754', 'organbook.php'),
(12, 'Bones', 'uttar pradesh', 'ghaziabad', 'MMG Hospital ', 201205, '5565564754', 'organbook.php'),
(13, 'lungs', 'uttar pradesh', 'ghaziabad', 'ITS Hospital ', 201205, '5565564754', 'organbook.php'),
(14, 'liver', 'uttar pradesh', 'ghaziabad', 'ITS Hospital ', 201205, '5565564754', 'organbook.php'),
(15, 'Heart', 'uttar pradesh', 'ghaziabad', 'ITS Hospital ', 201205, '5565564754', 'organbook.php'),
(16, 'Kidney', 'uttar pradesh', 'ghaziabad', 'ITS Hospital ', 201205, '5565564754', 'organbook.php'),
(17, 'Bone Marrow', 'uttar pradesh', 'ghaziabad', 'ITS Hospital ', 201205, '5565564754', 'organbook.php'),
(18, 'Eye Tissue', 'uttar pradesh', 'ghaziabad', 'ITS Hospital ', 201205, '5565564754', 'organbook.php'),
(19, 'Hair Transplant', 'uttar pradesh', 'ghaziabad', 'ITS Hospital ', 201205, '5565564754', 'organbook.php'),
(20, 'Pancreas', 'uttar pradesh', 'ghaziabad', 'ITS Hospital ', 201205, '5565564754', 'organbook.php'),
(21, 'Tendons', 'uttar pradesh', 'ghaziabad', 'ITS Hospital ', 201205, '5565564754', 'organbook.php'),
(22, 'Skins', 'uttar pradesh', 'ghaziabad', 'ITS Hospital ', 201205, '5565564754', 'organbook.php');

-- --------------------------------------------------------

--
-- Table structure for table `organ_orders`
--

CREATE TABLE `organ_orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `aadhar` int(255) NOT NULL,
  `delivery_address` varchar(255) NOT NULL,
  `mobile_number` int(255) NOT NULL,
  `body_part` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organ_orders`
--

INSERT INTO `organ_orders` (`id`, `name`, `address`, `aadhar`, `delivery_address`, `mobile_number`, `body_part`) VALUES
(1, 'deepak', 'shivam vihar', 1324532626, 'ITS', 987654321, 'kidney'),
(2, 'deepak', 'shivam vihar', 1324532626, 'ITS', 987654321, 'kidney'),
(3, 'deepak', 'shivam vihar', 2147483647, 'ITS ', 123456987, 'Kidney'),
(4, 'sumit', 'shivam vihar', 2147483647, 'ITS ', 123456987, 'Kidney');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `aadhar` int(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `consult` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `loginas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `aadhar`, `gender`, `consult`, `password`, `loginas`) VALUES
(1, 'deepak', 'deepak@example.com', 132454253, 'Male', 'Yes', 'd08156fe496e1c041b90b7ecf1249423', 'Admin'),
(2, 'deepak', 'abhi@example.com', 2147483647, 'Male', 'Yes', 'd08156fe496e1c041b90b7ecf1249423', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_orders`
--
ALTER TABLE `blood_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organs`
--
ALTER TABLE `organs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organ_orders`
--
ALTER TABLE `organ_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `blood_orders`
--
ALTER TABLE `blood_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `organs`
--
ALTER TABLE `organs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `organ_orders`
--
ALTER TABLE `organ_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
