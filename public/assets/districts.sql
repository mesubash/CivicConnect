-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 04, 2024 at 04:03 AM
-- Server version: 8.0.36-0ubuntu0.20.04.1
-- PHP Version: 7.4.3-4ubuntu2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pams`
--

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_id` int NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `code`, `province_id`, `status`) VALUES
(1, 'ताप्लेजुङ', '1', 1, 0),
(2, 'पाँचथर', '2', 1, 0),
(3, 'इलाम', '3', 1, 0),
(4, 'संखुवासभा', '4', 1, 0),
(5, 'तेह्रथुम', '5', 1, 0),
(6, 'धनकुटा', '6', 1, 0),
(7, 'भोजपुर', '7', 1, 0),
(8, 'खोटांग', '8', 1, 0),
(9, 'सोलुखुम्बु', '9', 1, 0),
(10, 'ओखलढुंगा', '10', 1, 0),
(11, 'उदयपुर', '11', 1, 0),
(12, 'झापा', '12', 1, 0),
(13, 'मोरङ', '13', 1, 0),
(14, 'सुनसरी', '14', 1, 0),
(15, 'सप्तरी', '15', 2, 0),
(16, 'सिराहा', '16', 2, 0),
(17, 'धनुषा', '17', 2, 0),
(18, 'महोत्तरी', '18', 2, 0),
(19, 'सर्लाही', '19', 2, 0),
(20, 'रौतहट', '20', 2, 0),
(21, 'बारा', '21', 2, 0),
(22, 'पर्सा', '22', 2, 0),
(23, 'दोलखा', '23', 3, 0),
(24, 'रामेछाप', '24', 3, 0),
(25, 'सिन्धुली', '25', 3, 0),
(26, 'काभ्रेपलाञ्चोक', '26', 3, 0),
(27, 'सिन्धुपाल्चोक', '27', 3, 0),
(28, 'रसुवा', '28', 3, 0),
(29, 'नुवाकोट', '29', 3, 0),
(30, 'धादिंग', '30', 3, 0),
(31, 'चितवन', '31', 3, 0),
(32, 'मकवानपुर', '32', 3, 0),
(33, 'भक्तपुर', '33', 3, 0),
(34, 'ललितपुर', '34', 3, 0),
(35, 'काठमाडौँ', '35', 3, 0),
(36, 'गोरखा', '36', 4, 0),
(37, 'लमजुङ', '37', 4, 0),
(38, 'तनहुँ', '38', 4, 0),
(39, 'कास्की', '39', 4, 0),
(40, 'मनाङ', '40', 4, 0),
(41, 'मुस्ताङ', '41', 4, 0),
(42, 'पर्बत', '42', 4, 0),
(43, 'स्यांजा', '43', 4, 0),
(44, 'म्याग्दी', '44', 4, 0),
(45, 'बागलुङ', '45', 4, 0),
(46, 'नवलपुर', '46', 4, 0),
(47, 'नवलपरासी', '47', 5, 0),
(48, 'रुपन्देही', '48', 5, 0),
(49, 'कपिलवस्तु', '49', 5, 0),
(50, 'पाल्पा', '50', 5, 0),
(51, 'अर्घाखाँची', '51', 5, 0),
(52, 'गुल्मी', '52', 5, 0),
(53, 'रुकुमकोट', '53', 5, 0),
(54, 'रोल्पा', '54', 5, 0),
(55, 'प्युठान', '55', 5, 0),
(56, 'दाङ', '56', 5, 0),
(57, 'बाँके', '57', 5, 0),
(58, 'बर्दिया', '58', 5, 0),
(59, 'रुकुम', '59', 6, 0),
(60, 'सल्यान', '60', 6, 0),
(61, 'डोल्पा', '61', 6, 0),
(62, 'जुम्ला', '62', 6, 0),
(63, 'मुगु', '63', 6, 0),
(64, 'हुम्ला', '64', 6, 0),
(65, 'कालिकोट', '65', 6, 0),
(66, 'जाजरकोट', '66', 6, 0),
(67, 'दैलेख', '67', 6, 0),
(68, 'सुर्खेत', '68', 6, 0),
(69, 'बाजुरा', '69', 7, 0),
(70, 'बझाङ', '70', 7, 0),
(71, 'डोटी', '71', 7, 0),
(72, 'अछाम', '72', 7, 0),
(73, 'दार्चुला', '73', 7, 0),
(74, 'बैतडी', '74', 7, 0),
(75, 'डडेलधुरा', '75', 7, 0),
(76, 'कंचनपुर', '76', 7, 0),
(77, 'कैलाली', '77', 7, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
