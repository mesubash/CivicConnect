-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 04, 2024 at 04:01 AM
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
-- Table structure for table `local_levels`
--

CREATE TABLE `local_levels` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` int NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `local_levels`
--

INSERT INTO `local_levels` (`id`, `name`, `code`, `district_id`, `status`) VALUES
(1, 'सप्तकोशी  नगरपालिका ', '80215407', 15, 1),
(2, 'मनरा गाउँपालिका', '80218407', 18, 1),
(3, 'भँगाहा गाउँपालिका', '80218405', 18, 1),
(4, 'बलवा गाउँपालिका', '80218404', 18, 1),
(5, 'रंगेली नगरपालिका ', '80113404', 13, 1),
(6, 'औरही गाउँपालिका', '80216502', 16, 1),
(7, 'भगवानपुर गाउँपालिका', '80216506', 16, 1),
(8, 'दुधकौशिका गाउँपालिका', '80109503', 9, 1),
(9, 'मुसिकोट नगरपालिका ', '80552401', 52, 1),
(10, 'मलंगवा  नगरपालिका ', '80219407', 19, 1),
(11, 'कालीगण्डकी गाउँपालिका', '80552502', 52, 1),
(12, 'व्यास नगरपालिका ', '80438403', 38, 1),
(13, 'गुल्मीदरबार गाउँपालिका', '80552503', 52, 1),
(14, 'नीलकण्ठ नगरपालिका ', '80330402', 30, 1),
(15, 'गजुरी गाउँपालिका', '80330503', 30, 1),
(16, 'महाङ्काल गाउँपालिका', '80334502', 34, 1),
(17, 'वरेङ गाउँपालिका', '80445506', 45, 1),
(18, 'हरिवन नगरपालिका ', '80219411', 19, 1),
(19, 'बलरा नगरपालिका ', '80219405', 19, 1),
(20, 'फाल्गुनन्द गाउँपालिका', '80102503', 2, 1),
(21, 'चम्पादेवी गाउँपालिका', '80110502', 10, 1),
(22, 'जनकपुर उपमहानगरपालिका', '80217301', 17, 1),
(23, 'कुम्मायक गाउँपालिका', '80102501', 2, 1),
(24, 'चिशंखुगढी गाउँपालिका', '80110503', 10, 1),
(25, 'चुलाचुली गाउँपालिका', '80103501', 3, 1),
(26, 'रुपाकोट मझुवागढी  नगरपालिका ', '80108506', 8, 1),
(27, 'नेत्रावती गाउँपालिका', '80330508', 30, 1),
(28, 'त्रिपुरासुन्दरी गाउँपालिका', '80330506', 30, 1),
(29, 'थाहा नगरपालिका ', '80332401', 32, 1),
(30, 'कटहरिया गाउँपालिका', '80220402', 20, 1),
(31, 'मौलापुर गाउँपालिका', '80220414', 20, 1),
(32, 'फतुवाविजयपुर गाउँपालिका', '80220410', 20, 1),
(33, 'कलैया उपमहानगरपालिका', '80221301', 21, 1),
(34, 'बारागढी गाउँपालिका', '80221507', 21, 1),
(35, 'धोबीनी गाउँपालिका', '80222506', 22, 1),
(36, 'NULL', '80222509', 22, 1),
(37, 'पर्सागढी गाउँपालिका', '80222401', 22, 1),
(38, 'सखुवा प्रसौनी गाउँपालिका', '80222510', 22, 1),
(39, 'पटेर्वा सुगौली गाउँपालिका', '80222508', 22, 1),
(40, 'भरतपुर महानगरपालिका', '80331201', 31, 1),
(41, 'खैरहनी नगरपालिका ', '80331402', 31, 1),
(42, 'माडी नगरपालिका ', '80331403', 31, 1),
(43, 'रत्ननगर नगरपालिका ', '80331404', 31, 1),
(44, 'मष्टा गाउँपालिका ', '80770508', 70, 1),
(45, 'धुर्कोट गाउँपालिका', '80552506', 52, 1),
(46, 'मालिका गाउँपालिका', '80552508', 52, 1),
(47, 'सूर्मा गाउँपालिका ', '80770510', 70, 1),
(48, 'प्यूठान नगरपालिका ', '80555401', 55, 1),
(49, 'मंगलसेन नगरपालिका ', '80772403', 72, 1),
(50, 'बुद्धभुमी नगरपालिका ', '80549403', 49, 1),
(51, 'रामारोशन गाउँपालिका', '80772506', 72, 1),
(52, 'मल्लरानी गाउँपालिका', '80555505', 55, 1),
(53, 'ढकारी गाउँपालिका', '80772502', 72, 1),
(54, 'नौबहिनी गाउँपालिका', '80555504', 55, 1),
(55, 'छत्रदेव गाउँपालिका', '80551501', 51, 1),
(56, 'के.आई.सिं. गाउँपालिका', '80771502', 71, 1),
(57, 'चौकुने गाउँपालिका', '80668502', 68, 1),
(58, 'ठाँटीकाँध गाउँपालिका', '80667502', 67, 1),
(59, 'बर्दगोरिया गाउँपालिका', '80777505', 77, 1),
(60, 'त्रिवेणी गाउँपालिका', '80659501', 59, 1),
(61, 'मोहन्याल गाउँपालिका', '80777506', 77, 1),
(62, 'कैलारी गाउँपालिका', '80777501', 77, 1),
(63, 'शारदा नगरपालिका ', '80660403', 60, 1),
(64, 'जुनीचाँदे गाउँपालिका', '80666502', 66, 1),
(65, 'बेलौरी नगरपालिका ', '80776404', 76, 1),
(66, 'मुड्केचुला गाउँपालिका', '80661505', 61, 1),
(67, 'कनकासुन्दरी गाउँपालिका', '80662501', 62, 1),
(68, 'अमरगढी नगरपालिका ', '80775401', 75, 1),
(69, 'गढवा गाउँपालिका', '80556501', 56, 1),
(70, 'पाटन नगरपालिका ', '80774403', 74, 1),
(71, 'पुर्चौडी नगरपालिका ', '80774402', 74, 1),
(72, 'सुर्नया गाउँपालिका', '80774505', 74, 1),
(73, 'अजयमेरु गाउँपालिका', '80775501', 75, 1),
(74, 'खाँडाचक्र नगरपालिका ', '80665401', 65, 1),
(75, 'तिलागुफा नगरपालिका ', '80665402', 65, 1),
(76, 'सिगास गाउँपालिका', '80774506', 74, 1),
(77, 'पचालझरना गाउँपलिका', '80665503', 65, 1),
(78, 'बैजनाथ गाउँपालिका', '80557505', 57, 1),
(79, 'नरहरिनाथ गाउँपालिका', '80665502', 65, 1),
(80, 'गुलरिया नगरपालिका ', '80558401', 58, 1),
(81, 'दुहुँ गाउँपालिका', '80773502', 73, 1),
(82, 'छायाँनाथ रारा नगरपालिका ', '80663401', 63, 1),
(83, 'नौगाड गाउँपालिका', '80773503', 73, 1),
(84, 'मधुवन नगरपालिका ', '80558405', 58, 1),
(85, 'मुगुमकार्मारोंग गाउँपालिका', '80663502', 63, 1),
(86, 'महाकाली नगरपालिका ', '80773504', 73, 1),
(87, 'राजापुर नगरपालिका ', '80558406', 58, 1),
(88, 'लेकम गाउँपालिका', '80773506', 73, 1),
(89, 'व्याँस गाउँपालिका', '80773507', 73, 1),
(90, 'खत्याड गाउँपालिका', '80663501', 63, 1),
(91, 'बाँसगढी नगरपालिका', '80558404', 58, 1),
(92, 'नाम्खा गाउँपालिका', '80664505', 64, 1),
(93, 'बारबर्दिया नगरपालिका ', '80558403', 58, 1),
(94, 'खार्पुनाथ गाउँपालिका', '80664502', 64, 1),
(95, 'बढैयाताल गाउँपालिका', '80558502', 58, 1),
(96, 'सर्केगाड गाउँपालिका', '80664506', 64, 1),
(97, 'चंखेली गाउँपालिका', '80664503', 64, 1),
(98, 'पाण्डव गुफा गाउँपालिका', '80769503', 69, 1),
(99, 'ईलाम नगरपालिका ', '80103401', 3, 1),
(100, 'सुनकोशी गाउँपालिका', '80110507', 10, 1),
(101, 'सुर्योदय नगरपालिका ', '80103404', 3, 1),
(102, 'मिथिला नगरपालिका ', '80217406', 17, 1),
(103, 'विदुर नगरपालिका ', '80329402', 29, 1),
(104, 'बेलकोटगढी नगरपालिका ', '80329401', 29, 1),
(105, 'ककनी गाउँपालिका', '80329501', 29, 1),
(106, 'तादीगाउँ गाउँपालिका', '80329503', 29, 1),
(107, 'दुप्चेश्वर गाउँपालिका', '80329505', 29, 1),
(108, 'पञ्चकन्या गाउँपालिका', '80329506', 29, 1),
(109, 'लिखु गाउँपालिका', '80329508', 29, 1),
(110, 'मेघाङ गाउँपालिका', '80329507', 29, 1),
(111, 'शिवपुरी गाउँपालिका', '80329509', 29, 1),
(112, 'सुर्यगढी गाउँपालिका', '80329510', 29, 1),
(113, 'देवानगञ्ज गाउँपालिका', '80114503', 14, 1),
(114, 'गढी गाउँपालिका', '80114502', 14, 1),
(115, 'भिमफेदी गाउँपालिका', '80332504', 32, 1),
(116, 'राक्सिराङ्ग गाउँपालिका', '80332507', 32, 1),
(117, 'गौर नगरपालिका ', '80220406', 20, 1),
(118, 'बौधीमाई गाउँपालिका', '80220412', 20, 1),
(119, 'बृन्दावन गाउँपालिका', '80220411', 20, 1),
(120, 'राजपुर गाउँपालिका', '80220503', 20, 1),
(121, 'निजगढ नगरपालिका ', '80221402', 21, 1),
(122, 'करैयामाई गाउँपालिका', '80221502', 21, 1),
(123, 'प्रसौनी गाउँपालिका', '80221505', 21, 1),
(124, 'सुवर्ण गाँउपालिका', '80221509', 21, 1),
(125, 'विरगंज उपमहानगरपालिका', '80222201', 22, 1),
(126, 'पोखरिया नगरपालिका ', '80222402', 22, 1),
(127, 'सुवर्णपुर गाउँपालिका', '80222505', 22, 1),
(128, 'जगरनाथपुर गाउँपालिका', '80222503', 22, 1),
(129, 'छिपहरमाई गाउँपालिका', '80222502', 22, 1),
(130, 'बिन्दबासिनी गाउँपालिका', '80222509', 22, 1),
(131, 'बहुदरमाई गाउँपालिका', '80222403', 22, 1),
(132, 'राप्ती नगरपालिका ', '80331405', 31, 1),
(133, 'सुलीकोट गाउँपालिका', '80436508', 36, 1),
(134, 'सिरानचोक गाउँपालिका', '80436509', 36, 1),
(135, 'अजिरकोट गाउँपालिका', '80436501', 36, 1),
(136, 'आरूघाट गाउँपालिका', '80436502', 36, 1),
(137, 'गण्डकी गाउँपालिका', '80436503', 36, 1),
(138, 'भिमसेन गाउँपालिका', '80436506', 36, 1),
(139, 'शहिद लखन गाउँपालिका', '80436507', 36, 1),
(140, 'जयपृथ्वी नगरपालिका ', '80770401', 70, 1),
(141, 'बुंगल नगरपालिका ', '80770402', 70, 1),
(142, 'तलकोट गाँउपालिका ', '80770505', 70, 1),
(143, 'मदाने गाउँपालिका', '80552507', 52, 1),
(144, 'थलारा गाँउपालिका ', '80770506', 70, 1),
(145, 'वित्थडचिर गाँउपालिका ', '80770509', 70, 1),
(146, 'छबिसपाथिभेरा गाँउपालिका ', '80770504', 70, 1),
(147, 'दुर्गाथली गाँउपालिका ', '80770507', 70, 1),
(148, 'केदारस्युँ गाँउपालिका ', '80770501', 70, 1),
(149, 'साँफेवगर नगरपालिका ', '80772404', 72, 1),
(150, 'शुद्धोधन गाउँपालिका', '80549504', 49, 1),
(151, 'विजयनगर गाउँपालिका', '80549503', 49, 1),
(152, 'बडीकेदार गाउँपालिका', '80771505', 71, 1),
(153, 'लुङग्री गाउँपालिका', '80554506', 54, 1),
(154, 'सुकिदह गाउँपालिका', '80554507', 54, 1),
(155, 'दुल्लु नगरपालिका ', '80667403', 67, 1),
(156, 'महाबु गाउँपालिका', '80667507', 67, 1),
(157, 'भेरी नगरपालिका ', '80666403', 66, 1),
(158, 'सानीभेरी गाउँपालिका', '80659503', 59, 1),
(159, 'शिवालय गाउँपालिका', '80666504', 66, 1),
(160, 'पुनर्वास नगरपालिका ', '80776402', 76, 1),
(161, 'त्रिवेणी गाउँपालिका', '80660506', 60, 1),
(162, 'ठूलीभेरीनगरपालिका ', '80661401', 61, 1),
(163, 'बेदकोट नगरपालिका ', '80776403', 76, 1),
(164, 'छत्रेश्वरी गाउँपालिका', '80660504', 60, 1),
(165, 'डोल्पो बुद्ध गाउँपालिका', '80661504', 61, 1),
(166, 'तुल्सीपुर उपमहानगरपालिका', '80556302', 56, 1),
(167, 'छार्का ताङसोङ गाउँपालिका', '80661502', 61, 1),
(168, 'घोराही उपमहानगरपालिका', '80556301', 56, 1),
(169, 'लमही नगरपालिका ', '80556401', 56, 1),
(170, 'दशरथचन्द नगरपालिका ', '80774401', 74, 1),
(171, 'बेलडाँडी गाउँपालिका', '80776501', 76, 1),
(172, 'सिंजा गाउँपालिका', '80662506', 62, 1),
(173, 'बंगलाचुली गाउँपालिका', '80556503', 56, 1),
(174, 'तिला गाउँपालिका', '80662504', 62, 1),
(175, 'गुठिचौर गाउँपालिका', '80662502', 62, 1),
(176, 'शान्तिनगर गाउँपालिका', '80556507', 56, 1),
(177, 'आलिताल गाउँपालिका', '80775502', 75, 1),
(178, 'भागेश्वर गाउँपालिका', '80775505', 75, 1),
(179, 'कालिकामाई गाउँपालिका', '80222501', 22, 1),
(180, 'जिराभवानी गाउँपालिका', '80222504', 22, 1),
(181, 'बलान-विहुल गाउँपालिका', '80215506', 15, 1),
(182, 'सिदिङ्वा गाउँपालिका', '80101507', 1, 1),
(183, 'रैनादेवी छहरा गाउँपालिका', '80550506', 50, 1),
(184, 'गैंडाकोट नगरपालिका ', '80446402', 46, 1),
(185, 'चन्द्रपुर नगरपालिका ', '80220407', 20, 1),
(186, 'गरुडा नगरपालिका ', '80220405', 20, 1),
(187, 'माधव नारायण गाउँपालिका', '80220413', 20, 1),
(188, 'परोहा गाउँपालिका', '80220409', 20, 1),
(189, 'जीतपुर सिमरा उपमहानगरपालिका', '80221302', 21, 1),
(190, 'छत्रकोट गाउँपालिका', '80552505', 52, 1),
(191, 'सिम्रौनगढ नगरपालिका ', '80221405', 21, 1),
(192, 'पकाहा मैनपुर गाउँपालिका', '80222507', 22, 1),
(193, 'कालिका नगरपालिका ', '80331401', 31, 1),
(194, 'चुमनुव्री गाउँपालिका', '80436504', 36, 1),
(195, 'स्वर्गद्वारी नगरपालिका ', '80555402', 55, 1),
(196, 'कपिलवस्तु नगरपालिका ', '80549401', 49, 1),
(197, 'कमलबजार नगरपालिका ', '80772401', 72, 1),
(198, 'चौरपाटी गाउँपालिका', '80772501', 72, 1),
(199, 'कृष्णनगर नगरपालिका ', '80549402', 49, 1),
(200, 'दिपायल सिलगढी नगरपालिका ', '80771401', 71, 1),
(201, 'ऐरावती गाउँपालिका', '80555501', 55, 1),
(202, 'भुमिकास्थान नगरपालिका ', '80551401', 51, 1),
(203, 'त्रिवेणी गाउँपालिका', '80554501', 54, 1),
(204, 'दुईखोली गाउँपालिका', '80554503', 54, 1),
(205, 'माडी गाउँपालिका', '80554504', 54, 1),
(206, 'पञ्चपुरी नगरपालिका ', '80668402', 68, 1),
(207, 'रुन्टीगढी गाउँपालिका', '80554505', 54, 1),
(208, 'टिकापुर नगरपालिका ', '80777404', 77, 1),
(209, 'सिम्ता गाउँपालिका', '80668504', 68, 1),
(210, 'नारायण नगरपालिका ', '80667404', 67, 1),
(211, 'नौमुले गाउँपालिका', '80667504', 67, 1),
(212, 'भजनी नगरपालिका ', '80777405', 77, 1),
(213, 'गोदावरी नगरपालिका ', '80777401', 77, 1),
(214, 'पुथा उत्तरगंगा गाउँपालिका', '80553501', 53, 1),
(215, 'गौरीगंगा नगरपालिका ', '80777402', 77, 1),
(216, 'भूमे गाउँपालिका', '80553502', 53, 1),
(217, 'त्रिवेणी नलगाड नगरपालिका ', '80666402', 66, 1),
(218, 'कुसे गाउँपालिका', '80666501', 66, 1),
(219, 'भिमदत्त नगरपालिका ', '80776405', 76, 1),
(220, 'ढोरचौर गाउँपालिका', '80660505', 60, 1),
(221, 'दार्मा गाउँपालिका', '80660507', 60, 1),
(222, 'जगदुल्ला गाउँपालिका', '80661503', 61, 1),
(223, 'कृष्णपुर नगरपालिका ', '80776401', 76, 1),
(224, 'काईके गाउँपालिका', '80661501', 61, 1),
(225, 'चन्दननाथ नगरपालिका', '80662401', 62, 1),
(226, 'लालझाडी गाउँपालिका', '80776502', 76, 1),
(227, 'हिमा गाउँपालिका', '80662507', 62, 1),
(228, 'दंगीशरण गाउँपालिका', '80556502', 56, 1),
(229, 'राजपुर गाउँपालिका', '80556505', 56, 1),
(230, 'परशुराम नगरपालिका ', '80775402', 75, 1),
(231, 'राप्ती गाउँपालिका', '80556506', 56, 1),
(232, 'मेलौली नगरपालिका ', '80774404', 74, 1),
(233, 'खुम्वु पासाङल्हामु गाउँपालिका', '80109501', 9, 1),
(234, 'रामग्राम नगरपालिका ', '80547402', 47, 1),
(235, 'वाह्रविसे नगरपालिका ', '80327403', 27, 1),
(236, 'मेन्छयायेम गाउँपालिका', '80105504', 5, 1),
(237, 'चैनपुर नगरपालिका ', '80104402', 4, 1),
(238, 'अन्नपूर्ण गाउँपालिका', '80444501', 44, 1),
(239, 'ललितपुर महानगरपालिका', '80334201', 34, 1),
(240, 'गोदावरी नगरपालिका ', '80334401', 34, 1),
(241, 'बाग्मती गाउँपालिका', '80334503', 34, 1),
(242, 'ढोरपाटन नगरपालिका ', '80445403', 45, 1),
(243, 'तमानखोला गाउँपालिका', '80445502', 45, 1),
(244, 'भक्तपुर नगरपालिका ', '80333402', 33, 1),
(245, 'ताराखोला गाउँपालिका', '80445503', 45, 1),
(246, 'ब्रह्मपुरी गाउँपालिका ', '80219404', 19, 1),
(247, 'निसीखोला गाउँपालिका', '80445504', 45, 1),
(248, 'बुढानिलकण्ठ नगरपालिका ', '80335409', 35, 1),
(249, 'उमाकुण्ड गाउँपालिका', '80324501', 24, 1),
(250, 'कालिन्चोक गाउँपालिका', '80323501', 23, 1),
(251, 'ईन्द्रावती गाउँपालिका', '80327501', 27, 1),
(252, 'बेसीशहर नगरपालिका ', '80437401', 37, 1),
(253, 'दोर्दी गाउँपालिका', '80437503', 37, 1),
(254, 'नमोबुद्ध नगरपालिका ', '80326402', 26, 1),
(255, 'थासाङ गाउँपालिका', '80441502', 41, 1),
(256, 'खानीखोला गाउँपालिका', '80326501', 26, 1),
(257, 'रुपनी गाउँपालिका', '80215509', 15, 1),
(258, 'बेल्ही चपेना गाउँपालिका', '80215505', 15, 1),
(259, 'बुढीगंगा गाउँपालिका', '80113507', 13, 1),
(260, 'अन्नपूर्ण गाउँपालिका', '80439501', 39, 1),
(261, 'देवदह नगरपालिका ', '80548402', 48, 1),
(262, 'कन्चन गाउँपालिका', '80548502', 48, 1),
(263, 'कोटहीमाई गाउँपालिका', '80548503', 48, 1),
(264, 'बर्जु गाउँपालिका', '80114504', 14, 1),
(265, 'भोक्राहा गाउँपालिका', '80114505', 14, 1),
(266, 'पाख्रिवास नगरपालिका ', '80106402', 6, 1),
(267, 'तारकेश्वर नगरपालिका ', '80335406', 35, 1),
(268, 'मुखियापट्टि मुसहरमिया गाउँपालिका', '80217505', 17, 1),
(269, 'पिपरा गाउँपालिका', '80218503', 18, 1),
(270, 'रतुवामाई नगरपालिका ', '80113405', 13, 1),
(271, 'ग्रामथान गाउँपालिका', '80113504', 13, 1),
(272, 'धनकुटा नगरपालिका ', '80106401', 6, 1),
(273, 'चाँगुनारायण नगरपालिका ', '80333401', 33, 1),
(274, 'शंखरापुर नगरपालिका ', '80335410', 35, 1),
(275, 'गोलन्जोर गाउँपालिका', '80325501', 25, 1),
(276, 'मन्थली नगरपालिका ', '80324401', 24, 1),
(277, 'गोकुलगङ्गा गाउँपालिका', '80324503', 24, 1),
(278, 'सुनापति गाउँपालिका', '80324506', 24, 1),
(279, 'वडिगाड गाउँपालिका', '80445505', 45, 1),
(280, 'मेलुङ्ग गाउँपालिका', '80323504', 23, 1),
(281, 'मेलम्ची नगरपालिका ', '80327402', 27, 1),
(282, 'जुगल गाउँपालिका', '80327502', 27, 1),
(283, 'पाँचपोखरी थाङपाल गाउँपालिका', '80327504', 27, 1),
(284, 'मध्यनेपाल नगरपालिका ', '80437402', 37, 1),
(285, 'लिसंखुपाखर गाउँपालिका', '80327507', 27, 1),
(286, 'सुनकोशी गाउँपालिका', '80327508', 27, 1),
(287, 'चापाकोट नगरपालिका ', '80443402', 43, 1),
(288, 'दालोमे गाउँपालिका', '80441503', 41, 1),
(289, 'लोमन्थाङ गाउँपालिका', '80441505', 41, 1),
(290, 'विश्रामपुर गाउँपालिका', '80221508', 21, 1),
(291, 'हलेसीतुवाचुङ नगरपालिका ', '80108402', 8, 1),
(292, 'देउमाई नगरपालिका ', '80103402', 3, 1),
(293, 'धनुषाधाम नगरपालिका ', '80217404', 17, 1),
(294, 'वराहपोखरी गाउँपालिका', '80108507', 8, 1),
(295, 'माईजोगमाई गाउँपालिका', '80103503', 3, 1),
(296, 'शहिदनगर नगरपालिका ', '80217408', 17, 1),
(297, 'जनकनन्दिनी गाउँपालिका', '80217502', 17, 1),
(298, 'सन्दकपुर गाउँपालिका', '80103506', 3, 1),
(299, 'बर्दिबास नगरपालिका ', '80218403', 18, 1),
(300, 'कचनकवल गाउँपालिका', '80112501', 12, 1),
(301, 'विराटनगर उपमहानगरपालिका', '80113201', 13, 1),
(302, 'लोहरपट्टी गाउँपालिका', '80218409', 18, 1),
(303, 'रामगोपालपुर गाउँपालिका', '80218408', 18, 1),
(304, 'पथरी शनिश्चरे नगरपालिका ', '80113402', 13, 1),
(305, 'तिरहुत गाउंपालिका', '80215503', 15, 1),
(306, 'औरही गाउँपालिका', '80218502', 18, 1),
(307, 'सुनवर्षी नगरपालिका ', '80113408', 13, 1),
(308, 'विष्णुपुर गाउँपालिका', '80216406', 16, 1),
(309, 'धरान उप-महानगरपालिका', '80114302', 14, 1),
(310, 'इटहरी उप-महानगरपालिका', '80114401', 14, 1),
(311, 'कोशी गाउँपालिका', '80114501', 14, 1),
(312, 'आठराई गाउँपालिका', '80105501', 5, 1),
(313, 'मादी नगरपालिका ', '80104405', 4, 1),
(314, 'मकालु गाउँपालिका', '80104503', 4, 1),
(315, 'षडानन्द नगरपालिका ', '80107402', 7, 1),
(316, 'ट्याम्केमैयुम गाउँपालिका', '80107503', 7, 1),
(317, 'अरुण गाउँपालिका', '80107501', 7, 1),
(318, 'साल्पासिलिछो गाउँपालिका', '80107506', 7, 1),
(319, 'जैमिनी नगरपालिका ', '80445402', 45, 1),
(320, 'काठेखोला गाउँपालिका', '80445501', 45, 1),
(321, 'गोडैटा नगरपालिका ', '80219403', 19, 1),
(322, 'काठमाण्डौं महानगरपालिका', '80335201', 35, 1),
(323, 'कविलासी गाउँपालिका', '80219402', 19, 1),
(324, 'कागेश्वरी–मनोहरा नगरपालिका ', '80335401', 35, 1),
(325, 'चक्रघट्टा गाउँपालिका', '80219502', 19, 1),
(326, 'चन्द्रागिरी नगरपालिका ', '80335404', 35, 1),
(327, 'टोखा नगरपालिका ', '80335405', 35, 1),
(328, 'कालिका गाउँपालिका', '80328502', 28, 1),
(329, 'गोसाईंकुण्ड गाउँपालिका', '80328503', 28, 1),
(330, 'घ्याङलेख गाउँपालिका', '80325502', 25, 1),
(331, 'मरिण गाउँपालिका', '80325505', 25, 1),
(332, 'हरिहरपुरगढी गाउँपालिका', '80325507', 25, 1),
(333, 'रामेछाप नगरपालिका ', '80324402', 24, 1),
(334, 'खाँडादेवी गाउँपालिका', '80324502', 24, 1),
(335, 'तामाकोशी गाउँपालिका', '80323503', 23, 1),
(336, 'बलेफी गाउँपालिका', '80327505', 27, 1),
(337, 'भोटेकोशी गाउँपालिका', '80327506', 27, 1),
(338, 'धुलिखेल नगरपालिका ', '80326401', 26, 1),
(339, 'पांचखाल नगरपालिका ', '80326404', 26, 1),
(340, 'चौंरीदेउराली गाउँपालिका', '80326502', 26, 1),
(341, 'बेथानचोक गाउँपालिका', '80326504', 26, 1),
(342, 'महाभारत गाउँपालिका', '80326506', 26, 1),
(343, 'स्वामीकार्तिक गाउँपालिका', '80769504', 69, 1),
(344, 'कौडेना गाउँपालिका', '80219501', 19, 1),
(345, 'पर्सा गाउँपालिका', '80219505', 19, 1),
(346, 'बसबरीया गाउँपालिका', '80219507', 19, 1),
(347, 'हिलिहाङ गाउँपालिका', '80102507', 2, 1),
(348, 'लामिडाँडा गाउँपालिका', '80108401', 8, 1),
(349, 'माङसेबुङ गाउँपालिका', '80103504', 3, 1),
(350, 'सबैला नगरपालिका ', '80217409', 17, 1),
(351, 'किस्पाङ गाउँपालिका', '80329502', 29, 1),
(352, 'बटेश्वर गाउँपालिका', '80217504', 17, 1),
(353, 'मंगला गाउँपालिका', '80444503', 44, 1),
(354, 'बरियारपट्टी गाउँपालिका', '80216505', 16, 1),
(355, 'धुनीबेंसी नगरपालिका ', '80330401', 30, 1),
(356, 'खनियाबास गाउँपालिका', '80330501', 30, 1),
(357, 'बागमती नगरपालिका ', '80219406', 19, 1),
(358, 'बरहथवा नगरपालिका ', '80219506', 19, 1),
(359, 'रामनगर गाउँपालिका', '80219508', 19, 1),
(360, 'विष्णु गाउँपालिका', '80219509', 19, 1),
(361, 'नौकुण्ड गाउँपालिका', '80328504', 28, 1),
(362, 'सुनकोशी गाउँपालिका', '80325506', 25, 1),
(363, 'ईशनाथ गाउँपालिका', '80220401', 20, 1),
(364, 'परवानीपुर गाउँपालिका', '80221504', 21, 1),
(365, 'इच्छाकामना गाउँपालिका', '80331501', 31, 1),
(366, 'गोरखा नगरपालिका ', '80436401', 36, 1),
(367, 'पालुङटार नगरपालिका ', '80436402', 36, 1),
(368, 'अर्नमा गाउँपालिका', '80216501', 16, 1),
(369, 'नवराजपुर गाउँपालिका', '80216504', 16, 1),
(370, 'राजदेवी नगरपालिका', '80220415', 20, 1),
(371, 'यमुनामाई गाउँपालिका', '80220502', 20, 1),
(372, 'फुङलीङ नगरपालिका ', '80101401', 1, 1),
(373, 'आठराई त्रिवेणी गाउँपालिका', '80101501', 1, 1),
(374, 'केपिलासगढी गाउँपालिका', '80108502', 8, 1),
(375, 'फाकफोकथुम गाउँपालिका', '80103502', 3, 1),
(376, 'दिप्रुङ गाउँपालिका', '80108505', 8, 1),
(377, 'साकेला गाउँपालिका', '80108508', 8, 1),
(378, 'त्रियुगा नगरपालिका ', '80111403', 11, 1),
(379, 'भद्रपुर नगरपालिका ', '80112405', 12, 1),
(380, 'कमल गाउँपालिका', '80112502', 12, 1),
(381, 'राजविराज नगरपालिका ', '80215405', 15, 1),
(382, 'हल्दिबारी गाउँपालिका', '80112507', 12, 1),
(383, 'बेलवारी नगरपालिका ', '80113403', 13, 1),
(384, 'साम्सी गाउँपालिका', '80218505', 18, 1),
(385, 'छिन्नमस्ता गाउँपालिका', '80215502', 15, 1),
(386, 'मटिहानी गाउँपालिका', '80218406', 18, 1),
(387, 'सुन्दर हरैचा नगरपालिका ', '80113407', 13, 1),
(388, 'सिरहा नगरपालिका ', '80216408', 16, 1),
(389, 'गोलबजार नगरपालिका ', '80216403', 16, 1),
(390, 'जहदा गाउँपालिका', '80113505', 13, 1),
(391, 'लक्ष्मीपुर पतारी गाउँपालिका', '80216405', 16, 1),
(392, 'मिर्चैया नगरपालिका ', '80216507', 16, 1),
(393, 'ईश्वरपुर नगरपालिका ', '80219401', 19, 1),
(394, 'छथर गाउँपालिका', '5', 80105502, 1),
(395, 'फेदाप गाउँपालिका', '80105503', 5, 1),
(396, 'भोजपुर नगरपालिका ', '80107401', 7, 1),
(397, 'हतुवागढी गाउँपालिका', '80107507', 7, 1),
(398, 'रघुगंगा गाउँपालिका', '80444505', 44, 1),
(399, 'NULL', '80442505', 42, 1),
(400, 'महालक्ष्मी नगरपालिका ', '80334402', 34, 1),
(401, 'बाग्लुङ नगरपालिका ', '80445404', 45, 1),
(402, 'गल्कोट नगरपालिका ', '80445401', 45, 1),
(403, 'कोन्ज्योसोम गाउँपालिका', '80334501', 34, 1),
(404, 'विगु गाउँपालिका', '80323506', 23, 1),
(405, 'वैतेश्वर गाउँपालिका', '80323505', 23, 1),
(406, 'राईनास नगरपालिका ', '80437403', 37, 1),
(407, 'सुन्दरबजार नगरपालिका ', '80437404', 37, 1),
(408, 'क्व्होलासोथार गाउँपालिका', '80437501', 37, 1),
(409, 'दूधपोखरी गाउँपालिका', '80437502', 37, 1),
(410, 'हेलम्बु गाउँपालिका', '80327509', 27, 1),
(411, 'पनौती नगरपालिका ', '80326403', 26, 1),
(412, 'रोशी गाउँपालिका', '80326507', 26, 1),
(413, 'मकवानपुरगढी गाउँपालिका', '80332505', 32, 1),
(414, 'मनहरी गाउँपालिका', '80332506', 32, 1),
(415, 'देवाही गोनाही गाँउपालिका', '80220408', 20, 1),
(416, 'दुर्गा भगवती गाउँपालिका', '80220501', 20, 1),
(417, 'गढीमाई गाउँपालिका', '80220404', 20, 1),
(418, 'रेसुंगा नगरपालिका ', '80552402', 52, 1),
(419, 'आदर्श कोतवाल गाउँपालिका', '80221501', 21, 1),
(420, 'फेटा गाउँपालिका', '80221506', 21, 1),
(421, 'धार्चे गाउँपालिका', '80436505', 36, 1),
(422, 'खप्तडछान्ना गाँउपालिका ', '80770503', 70, 1),
(423, 'सरुमारानी गाउँपालिका', '80555507', 55, 1),
(424, 'शिवराज नगरपालिका ', '80549406', 49, 1),
(425, 'महाराजगञ्ज नगरपालिका ', '80549405', 49, 1),
(426, 'यसोधरा गाउँपालिका', '80549502', 49, 1),
(427, 'शिखर नगरपालिका ', '80771402', 71, 1),
(428, 'लेकबेसी नगरपालिका ', '80668405', 68, 1),
(429, 'पूर्वीचौकी गाउँपालिका', '80771504', 71, 1),
(430, 'जोरायल गाउँपालिका', '80771503', 71, 1),
(431, 'झिमरुक गाउँपालिका', '80555503', 55, 1),
(432, 'रोल्पा नगरपालिका ', '80554401', 54, 1),
(433, 'मालारानी गाउँपालिका', '80551503', 51, 1),
(434, 'भेरीगंगा नगरपालिका ', '80668404', 68, 1),
(435, 'बराहताल गाउँपालिका', '80668503', 68, 1),
(436, 'थवाङ गाउँपालिका', '80554502', 54, 1),
(437, 'चिङ्गाड गाउँपालिका', '80668501', 68, 1),
(438, 'धनगढी उपमहानगरपालिका', '80777301', 77, 1),
(439, 'गुराँस गाउँपालिका', '80667501', 67, 1),
(440, 'भैरवी गाउँपालिका', '80667506', 67, 1),
(441, 'बनगाँड कुपिण्डे नगरपालिका ', '80660401', 60, 1),
(442, 'कालिमाटी गाउँपालिका', '80660503', 60, 1),
(443, 'कपुरकोट गाउँपालिका', '80660501', 60, 1),
(444, 'त्रिपुरासुन्दरी नगरपालिका ', '80661402', 61, 1),
(445, 'माहाकाली नगरपालिका ', '80776406', 76, 1),
(446, 'तातोपानी गाउँपालिका', '80662503', 62, 1),
(447, 'पातारासी गाउँपालिका', '80662505', 62, 1),
(448, 'बबई गाउँपालिका', '80556504', 56, 1),
(449, 'उत्तरगया गाउँपालिका', '80328501', 28, 1),
(450, 'विर्तामोड नगरपालिका ', '80112407', 12, 1),
(451, 'मिथिला बिहारी गाउँपालिका', '80217506', 17, 1),
(452, 'भानु नगरपालिका ', '80438401', 38, 1),
(453, 'सत्यवती गाउँपालिका', '80552510', 52, 1),
(454, 'चन्द्रकोट गाउँपालिका', '80552504', 52, 1),
(455, 'रुरु गाउँपालिका', '80552509', 52, 1),
(456, 'ऋषिङ्ग गाउँपालिका', '80438502', 38, 1),
(457, 'बगनासकाली गाउँपालिका', '80550504', 50, 1),
(458, 'रिब्दीकोट गाउँपालिका', '80550508', 50, 1),
(459, 'म्याग्दे गाउँपालिका', '80438506', 38, 1),
(460, 'पोखरा लेखनाथ महानगरपालिका', '80439201', 39, 1),
(461, 'लालीगुराँस नगरपालिका ', '80105402', 5, 1),
(462, 'रामप्रसाद राई गाउँपालिका', '80107505', 7, 1),
(463, 'आमचोक गाउँपालिका', '80107502', 7, 1),
(464, 'ईन्द्रसरोवर गाउँपालिका', '80332501', 32, 1),
(465, 'कैलाश गाउँपालिका', '80332502', 32, 1),
(466, 'बकैया गाउँपालिका', '80332503', 32, 1),
(467, 'बाग्मती गाउँपालिका', '80332508', 32, 1),
(468, 'गुजरा गाउँपालिका', '80220403', 20, 1),
(469, 'कोल्हवी नगरपालिका ', '80221401', 21, 1),
(470, 'देवताल गाउँपालिका', '80221503', 21, 1),
(471, 'काँडा गाउँपालिका ', '80770502', 70, 1),
(472, 'मेल्लेख गाउँपालिका', '80772505', 72, 1),
(473, 'बान्नीगढी जयगढ गाउँपालिका', '80772504', 72, 1),
(474, 'बाणगंगा नगरपालिका ', '80549404', 49, 1),
(475, 'बीरेन्द्रनगर नगरपालिका ', '80668403', 68, 1),
(476, 'शितगंगा नगरपालिका ', '80551402', 51, 1),
(477, 'सायल गाउँपालिका', '80771507', 71, 1),
(478, 'पाणिनी गाउँपालिका', '80551502', 51, 1),
(479, 'आदर्श गाउँपालिका', '80771501', 71, 1),
(480, 'सुवर्णावती गाउँपालिका', '80554509', 54, 1),
(481, 'लम्किचुहा नगरपालिका ', '80777406', 77, 1),
(482, 'चौरजहारी नगरपालिका ', '80659402', 59, 1),
(483, 'चामुण्डा बिन्द्रासैनी नगरपालिका ', '80667402', 67, 1),
(484, 'आठबिसकोट नगरपालिका ', '80659401', 59, 1),
(485, 'डुंगेश्वर गाउँपालिका', '80667503', 67, 1),
(486, 'जोशीपुर गाउँपालिका', '80777504', 77, 1),
(487, 'बागचौर नगरपालिका ', '80660402', 60, 1),
(488, 'चुरे गाउँपालिका', '80777502', 77, 1),
(489, 'बारेकोट गाउँपालिका', '80666503', 66, 1),
(490, 'कुमाखमालिका गाउँपालिका', '80660502', 60, 1),
(491, 'शे फोक्सुन्डो गाउँपालिका', '80661506', 61, 1),
(492, 'शुक्लाफाँट नगरपालिका ', '80776407', 76, 1),
(493, 'पंचेश्वर गाउँपालिका', '80774503', 74, 1),
(494, 'नेपालगञ्ज उपमहानगरपालिका', '80557301', 57, 1),
(495, 'कोहलपुर नगरपालिका ', '80557401', 57, 1),
(496, 'नरैनापुर गाउँपालिका', '80557504', 57, 1),
(497, 'मालिकार्जुन गाउँपालिका', '80773401', 73, 1),
(498, 'शैल्यशिखर नगरपालिका ', '80773402', 73, 1),
(499, 'डुडुवा गाउँपालिका', '80557503', 57, 1),
(500, 'गेरुवा गाउँपालिका', '80558501', 58, 1),
(501, 'सोनमा गाउँपालिका', '80218506', 18, 1),
(502, 'कटहरी गाउँपालिका', '80113501', 13, 1),
(503, 'सुखीपुर नगरपालिका', '80216407', 16, 1),
(504, 'कर्जन्हा गाउँपालिका', '80216401', 16, 1),
(505, 'इनरुवा नगरपालिका ', '80114301', 14, 1),
(506, 'रामपुर नगरपालिका ', '80550402', 50, 1),
(507, 'देवघाट गाउँपालिका', '80438504', 38, 1),
(508, 'पुतलीबजार नगरपालिका ', '80443403', 43, 1),
(509, 'सुनवल नगरपालिका ', '80547403', 47, 1),
(510, 'विनयी गाउँपालिका', '80547503', 47, 1),
(511, 'बेनी नगरपालिका ', '80444401', 44, 1),
(512, 'हरिपुर नगरपालिका ', '80219409', 19, 1),
(513, 'मध्यपुर थिमी नगरपालिका ', '80333403', 33, 1),
(514, 'पचरौता गाउँपालिका', '80221403', 21, 1),
(515, 'सन्धिखर्क नगरपालिका ', '80551403', 51, 1),
(516, 'पंचदेवल विनायक नगरपालिका ', '80772402', 72, 1),
(517, 'गुर्भाकोट नगरपालिका ', '80668401', 68, 1),
(518, 'बोगटान गाउँपालिका', '80771506', 71, 1),
(519, 'सुनछहरी गाउँपालिका', '80554508', 54, 1),
(520, 'मुसिकोट नगरपालिका ', '80659403', 59, 1),
(521, 'घोडाघोडी नगरपालिका ', '80777403', 77, 1),
(522, 'भगवतीमाई गाउँपालिका', '80667505', 67, 1),
(523, 'सिस्ने गाउँपालिका', '80553503', 53, 1),
(524, 'जानकी गाउँपालिका', '80777503', 77, 1),
(525, 'बाँफिकोट गाउँपालिका', '80659502', 59, 1),
(526, 'छेडागाड नगरपालिका ', '80666401', 66, 1),
(527, 'नवदुर्गा गाउँपालिका', '80775504', 75, 1),
(528, 'रास्कोट नगरपालिका ', '80665403', 65, 1),
(529, 'डीलासैनी गाउँपालिका', '80774501', 74, 1),
(530, 'सान्नी त्रिवेणी गाउँपालिका', '80665506', 65, 1),
(531, 'खजुरा गाउँपालिका', '80557501', 57, 1),
(532, 'कालिका गाउँपालिका', '80665501', 65, 1),
(533, 'सिमकोट गाउँपालिका', '80664507', 64, 1),
(534, 'मिक्लाजुङ गाउँपालिका', '80102505', 2, 1),
(535, 'मानेभञ्याङ गाउँपालिका', '80110504', 10, 1),
(536, 'याङवरक गाउँपालिका', '80102506', 2, 1),
(537, 'लिखु गाउँपालिका', '80110506', 10, 1),
(538, 'गणेशमान–चारनाथ नगरपालिका ', '80217403', 17, 1),
(539, 'नगराइन नगरपालिका ', '80217405', 17, 1),
(540, 'तारकेश्वर गाउँपालिका', '80329504', 29, 1),
(541, 'दमक नगरपालिका ', '80112404', 12, 1),
(542, 'कन्काई  नगरपालिका ', '80112402', 12, 1),
(543, 'गौरिगंज गाउँपालिका', '80112503', 12, 1),
(544, 'ताप्ली गाउँपालिका', '80111502', 11, 1),
(545, 'रौतामाई गाउँपालिका', '80111503', 11, 1),
(546, 'भिमाद नगरपालिका ', '80438402', 38, 1),
(547, 'पूर्वखोला गाउँपालिका', '80550503', 50, 1),
(548, 'रम्भा गाउँपालिका', '80550507', 50, 1),
(549, 'देवचुली नगरपालिका ', '80446403', 46, 1),
(550, 'बर्दघाट नगरपालिका ', '80547401', 47, 1),
(551, 'हरिनास गाउँपालिका ', '80443506', 43, 1),
(552, 'महालक्ष्मी  नगरपालिका ', '80106403', 6, 1),
(553, 'खाल्सा छिन्ताङ सहिद भूमि गाउँपालिका', '80106501', 6, 1),
(554, 'छथर जोरपाटी गाउँपालिका', '80106503', 6, 1),
(555, 'चौबिसे गाउँपालिका', '80106502', 6, 1),
(556, 'म्याङलुङ नगरपालिका ', '80105401', 5, 1),
(557, 'पाँचखपन नगरपालिका ', '80104404', 4, 1),
(558, 'भोटखोला गाउँपालिका', '80104502', 4, 1),
(559, 'चिचिला गाउँपालिका', '80104501', 4, 1),
(560, 'सभापोखरी गाउँपालिका', '80104504', 4, 1),
(561, 'सिलीचोङ गाउँपालिका', '80104505', 4, 1),
(562, 'सखुवानान्कारकट्टी गाउँपालिका', '80216509', 16, 1),
(563, 'लालबन्दी नगरपालिका ', '80219408', 19, 1),
(564, 'NULL', '80442504', 42, 1),
(565, 'कीर्तिपुर  नगरपालिका ', '80335402', 35, 1),
(566, 'चन्द्रनगर गाउँपालिका', '80219503', 19, 1),
(567, 'धनकौल गाउँपालिका', '80219504', 19, 1),
(568, 'दक्षिणकाली नगरपालिका ', '80335407', 35, 1),
(569, 'कमलामाई नगरपालिका ', '80325401', 25, 1),
(570, 'दोरम्बा गाउँपालिका', '80324504', 24, 1),
(571, 'लिखु गाउँपालिका', '80324505', 24, 1),
(572, 'जिरी नगरपालिका ', '80323401', 23, 1),
(573, 'भिमेश्वर  नगरपालिका ', '80323402', 23, 1),
(574, 'गौरीशङ्कर गाउँपालिका', '80323502', 23, 1),
(575, 'शैलुङ्ग गाउँपालिका', '80323507', 23, 1),
(576, 'त्रिपुरासुन्दरी गाउँपालिका', '80327503', 27, 1),
(577, 'मर्स्याङदी गाउँपालिका', '80437504', 37, 1),
(578, 'बनेपा नगरपालिका ', '80326405', 26, 1),
(579, 'घरपझोङ गाउँपालिका', '80441501', 41, 1),
(580, 'तेमाल गाउँपालिका', '80326503', 26, 1),
(581, 'भुम्लु गाउँपालिका', '80326505', 26, 1),
(582, 'मण्डनदेउपुर नगरपालिका ', '80326406', 26, 1),
(583, 'थाक्रे गाउँपालिका', '80330507', 30, 1),
(584, 'महागढीमाई नगरपालिका ', '80221404', 21, 1),
(585, 'मायादेवी गाउँपालिका', '80549501', 49, 1),
(586, '0', '72', 1, 0),
(587, '0', '67', 1, 0),
(588, 'गन्यापधुरा गाउँपालिका', '80775503', 75, 1),
(589, 'शिवनाथ गाउँपालिका', '80774504', 74, 1),
(590, 'सोरु गाउँपालिका', '80663503', 63, 1),
(591, 'ठाकुरबाबा नगरपालिका ', '80558402', 58, 1),
(592, 'हंसपुर गाउँपालिका', '80217410', 17, 1),
(593, 'कटारी नगरपालिका ', '80111401', 11, 1),
(594, 'वेलका नगरपालिका ', '80111404', 11, 1),
(595, 'शिवसताक्षी नगरपालिका ', '80112408', 12, 1),
(596, 'इस्मा गाउँपालिका', '80552501', 52, 1),
(597, 'आँबुखैरेनी गाउँपालिका', '80438501', 38, 1),
(598, 'तानसेन नगरपालिका ', '80550401', 50, 1),
(599, 'तिनाउ गाउँपालिका', '80550501', 50, 1),
(600, 'कावासोती नगरपालिका ', '80446401', 46, 1),
(601, 'गल्याङ नगरपालिका ', '80443401', 43, 1),
(602, 'आँधिखोला गाउँपालिका ', '80443502', 43, 1),
(603, 'बिरुवा गाउँपालिका ', '80443505', 43, 1),
(604, 'बुङ्दीकाली गाउँपालिका', '80446502', 46, 1),
(605, 'NULL', '80442503', 42, 1),
(606, 'हरिपुर्वा नगरपालिका ', '80219410', 19, 1),
(607, 'दुधौली नगरपालिका ', '80325402', 25, 1),
(608, 'तीनपाटन गाउँपालिका', '80325503', 25, 1),
(609, 'चौतारा सागाचोकगढी नगरपालिका ', '80327401', 27, 1),
(610, 'वाह्रगाउँ मुक्तिक्षेत्र गाउँपालिका', '80441504', 41, 1),
(611, 'गौमुखी गाउँपालिका', '80555502', 55, 1),
(612, 'माण्डवी गाउँपालिका', '80555506', 55, 1),
(613, 'दोगडाकेदार गाउँपालिका', '80774502', 74, 1),
(614, 'राप्तीसोनारी गाउँपालिका', '80557506', 57, 1),
(615, 'महावै गाउँपालिका', '80665505', 65, 1),
(616, 'बुढीगंगा नगरपालिका ', '80769403', 69, 1),
(617, 'मेचीनगर  नगरपालिका ', '80112406', 12, 1),
(618, 'औरही गाउँपालिका', '80217501', 17, 1),
(619, 'अर्जुनधारा  नगरपालिका ', '80112401', 12, 1),
(620, 'लेटाङ नगरपालिका ', '80113406', 13, 1),
(621, 'धनपालथान गाउँपालिका', '80113506', 13, 1),
(622, 'सिद्धार्थनगर नगरपालिका ', '80548405', 48, 1),
(623, 'तिलोत्तमा नगरपालिका ', '80548401', 48, 1),
(624, 'धर्मदेवी नगरपालिका ', '80104403', 4, 1),
(625, 'खाँदवारी नगरपालिका ', '80104401', 4, 1),
(626, 'NULL', '80442402', 42, 1),
(627, 'पार्वतीकुण्ड गाउँपालिका', '80328505', 28, 1),
(628, 'फिक्कल गाउँपालिका', '80325504', 25, 1),
(629, 'मार्मा गाउँपालिका', '80773505', 73, 1),
(630, 'जानकी गाउँपालिका', '80557502', 57, 1),
(631, 'पलाता गाउँपालिका', '80665504', 65, 1),
(632, 'अपिहिमाल गाउँपालिका', '80773501', 73, 1),
(633, 'बडिमालिका नगरपालिका ', '80769402', 69, 1),
(634, 'कमला सिद्धीदात्री गाउँपालिका', '80217401', 17, 1),
(635, 'जन्तेढुंगा गाउँपालिका', '80108504', 8, 1),
(636, 'विदेह नगरपालिका ', '80217407', 17, 1),
(637, 'खोटेहाङ गाउँपालिका', '80108503', 8, 1),
(638, 'रोङ गाउँपालिका', '80103505', 3, 1),
(639, 'धनौजी गाउँपालिका', '80217503', 17, 1),
(640, 'महादेवा गाउँपालिका', '80215508', 15, 1),
(641, 'महोत्तरी गाउँपालिका', '80218504', 18, 1),
(642, 'तिलाठीकोईलाडी गाउंपालिका', '80215504', 15, 1),
(643, 'उर्लाबारी नगरपालिका ', '80113401', 13, 1),
(644, 'कानेपोखरी गाउँपालिका', '80113503', 13, 1),
(645, 'कल्याणपुर नगरपालिका ', '80216402', 16, 1),
(646, 'केराबारी गाउँपालिका', '80113502', 13, 1),
(647, 'मिक्लाजुङ गाउँपालिका', '80113508', 13, 1),
(648, 'बराह नगरपालिका ', '80114403', 14, 1),
(649, 'शुक्लागण्डकी नगरपालिका ', '80438404', 38, 1),
(650, 'घिरिङ गाउँपालिका', '80438503', 38, 1),
(651, 'निस्दी गाउँपालिका', '80550502', 50, 1),
(652, 'माथागढी गाउँपालिका', '80550505', 50, 1),
(653, 'हरिनगरा गाउँपालिका', '80114506', 14, 1),
(654, 'पौवादुङ्मा गाउँपालिका', '80107504', 7, 1),
(655, 'मालिका गाउँपालिका', '80444504', 44, 1),
(656, 'NULL', '80442401', 42, 1),
(657, 'NULL', '80442501', 42, 1),
(658, 'NULL', '80442502', 42, 1),
(659, 'सूर्यविनायक नगरपालिका ', '80333404', 33, 1),
(660, 'नागार्जुन नगरपालिका ', '80335408', 35, 1),
(661, 'मेरिङदेन गाउँपालिका', '80101503', 1, 1),
(662, 'माहाकुलुङ गाउँपालिका', '80109505', 9, 1),
(663, 'सिरीजङ्घा गाउँपालिका', '80101508', 1, 1),
(664, 'फालेलुङ गाउँपालिका', '80102504', 2, 1),
(665, 'क्षिरेश्वरनाथ नगरपालिका ', '80217402', 17, 1),
(666, 'मादी गाउँपालिका', '80439503', 39, 1),
(667, 'चामे गाउँपालिका', '80440501', 40, 1),
(668, 'गैडहवा गाउँपालिका', '80548504', 48, 1),
(669, 'मर्चवारी गाउँपालिका', '80548505', 48, 1),
(670, 'मायादेवी गाउँपालिका', '80548506', 48, 1),
(671, 'सम्मरीमाई गाउँपालिका', '80548509', 48, 1),
(672, 'साँगुरीगढी गाउँपालिका', '80106504', 6, 1),
(673, 'धवलागिरी गाउँपालिका', '80444502', 44, 1),
(674, 'रुवी भ्याली गाउँपालिका', '80330510', 30, 1),
(675, 'सिद्धलेक गाउँपालिका', '80330511', 30, 1),
(676, 'ताँजाकोट गाउँपालिका', '80664504', 64, 1),
(677, 'त्रिवेणी नगरपालिका ', '80769401', 69, 1),
(678, 'डाक्नेश्वरी नगरपालिका ', '80215403', 15, 1),
(679, 'रामधुनी नगरपालिका ', '80114404', 14, 1),
(680, 'बन्दिपुर गाउँपालिका', '80438505', 38, 1),
(681, 'गोकर्णेश्वर नगरपालिका ', '80335403', 35, 1),
(682, 'हेटौंडा उप-महानगरपालिका', '80332301', 32, 1),
(683, 'अदानचुली गाउँपालिका', '80664501', 64, 1),
(684, 'ऐसेलुखर्क गाउँपालिका', '80108501', 8, 1),
(685, 'माई नगरपालिका ', '80103403', 3, 1),
(686, 'सुनकोशी गाउँपालिका', '80111504', 11, 1),
(687, 'कृष्णासवरन गाउँपालिका', '80215401', 15, 1),
(688, 'झापा गाउँपालिका', '80112504', 12, 1),
(689, 'शम्भुनाथ  नगरपालिका ', '80215406', 15, 1),
(690, 'सुरुगां नगरपालिका ', '80215408', 15, 1),
(691, 'मध्यविन्दु नगरपालिका ', '80446404', 46, 1),
(692, 'भीरकोट नगरपालिका ', '80443404', 43, 1),
(693, 'कालीगण्डकी गाउँपालिका ', '80443503', 43, 1),
(694, 'सुस्ता गाउँपालिका', '80446501', 46, 1),
(695, 'फेदीखोला गाउँपालिका ', '80443504', 43, 1),
(696, 'पाल्हीनन्दन गाउँपालिका', '80547502', 47, 1),
(697, 'प्रतापपुर गाउँपालिका', '80547501', 47, 1),
(698, 'बुलिङटार गाउँपालिका', '80446503', 46, 1),
(699, 'सरावल गाउँपालिका', '80547504', 47, 1),
(700, 'हुप्सेकोट गाउँपालिका', '80446504', 46, 1),
(701, 'बुटवल उपमहानगरपालिका', '80548301', 48, 1),
(702, 'लुम्विनी सांस्कृतिक नगरपालिका ', '80548403', 48, 1),
(703, 'रूपा गाउँपालिका', '80439504', 39, 1),
(704, 'रोहिणी गाउँपालिका', '80548507', 48, 1),
(705, 'सियारी गाउँपालिका', '80548510', 48, 1),
(706, 'गल्छी गाउँपालिका', '80330504', 30, 1),
(707, 'गङ्गाजमुना गाउँपालिका', '80330502', 30, 1),
(708, 'ज्वालामूखी गाउँपालिका', '80330505', 30, 1),
(709, 'हिमाली गाउँपालिका', '80769505', 69, 1),
(710, 'फक्ताङलुङ गाउँपालिका', '80101502', 1, 1),
(711, 'सिद्धिचरण नगरपालिका ', '80110401', 10, 1),
(712, 'खिजीदेम्वा गाउँपालिका', '80110501', 10, 1),
(713, 'चौदण्डीगढी नगरपालिका ', '80111402', 11, 1),
(714, 'जलेश्वर नगरपालिका ', '80218402', 18, 1),
(715, 'गौशाला नगरपालिका ', '80218401', 18, 1),
(716, 'वालिङ नगरपालिका ', '80443405', 43, 1),
(717, 'बेनीघाट रोराङ्ग गाउँपालिका', '80330509', 30, 1),
(718, 'गौमुल गाउँपालिका', '80769501', 69, 1),
(719, 'छेडेदह गाउँपालिका', '80769502', 69, 1),
(720, 'दुधकोशी गाउँपालिका', '80109502', 9, 1),
(721, 'फिदिम नगरपालिका ', '80102401', 2, 1),
(722, 'लक्ष्मीनिया गाउँपालिका', '80217507', 17, 1),
(723, 'एकडारा गाउँपालिका', '80218501', 18, 1),
(724, 'बिष्णुपुर गाउँपालिका', '80215507', 15, 1),
(725, 'धनगढीमाई नगरपालिका ', '80216404', 16, 1),
(726, 'दुहवी नगरपालिका ', '80114402', 14, 1),
(727, 'माछापुछ्रे गाउँपालिका', '80439502', 39, 1),
(728, 'नार्फु गाउँपालिका', '80440503', 40, 1),
(729, 'लहान नगरपालिका ', '80216508', 16, 1),
(730, 'बुढीनन्दा नगरपालिका ', '80769404', 69, 1),
(731, 'गौरादह नगरपालिका ', '80112403', 12, 1),
(732, 'बोदेबरसाईन नगरपालिका ', '80215404', 15, 1),
(733, 'बाह्रदशी गाउँपालिका', '80112506', 12, 1),
(734, 'बुद्धशान्ति गाउँपालिका', '80112505', 12, 1),
(735, 'अर्जुनचौपारी गाउँपालिका ', '80443501', 43, 1),
(736, 'सैनामैना नगरपालिका ', '80548404', 48, 1),
(737, 'ओमसतिया गाउँपालिका', '80548501', 48, 1),
(738, 'शुद्धोधन गाउँपालिका', '80548508', 48, 1),
(739, 'नाशोङ गाउँपालिका', '80440504', 40, 1),
(740, 'नरहा गाउँपालिका', '80216503', 16, 1),
(741, 'खडक नगरपालिका ', '80215402', 15, 1),
(742, 'उदयपुरगढी गाउँपालिका', '80111501', 11, 1),
(743, 'हनुमाननगर कंकालिनी नगरपालिका ', '80215409', 15, 1),
(744, 'कञ्चनरुप  नगरपालिका ', '80215501', 15, 1),
(745, 'सोलुदुधकुण्ड  नगरपालिका ', '80109401', 9, 1),
(746, 'नेस्याङ गाउँपालिका', '80440502', 40, 1),
(747, 'मैवाखोला गाउँपालिका', '80101504', 1, 1),
(748, 'लिखु पिके गाउँपालिका', '80109506', 9, 1),
(749, 'याङवरक गाउँपालिका', '80101506', 1, 1),
(750, 'सोताङ गाउँपालिका', '80109507', 9, 1),
(751, 'तुम्वेवा गाउँपालिका', '80102502', 2, 1),
(752, 'मोलुङ गाउँपालिका', '80110505', 10, 1),
(753, 'मिक्वाखोला गाउँपालिका', '80101505', 1, 1),
(754, 'नेचासल्यान गाउँपालिका', '80109504', 9, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `local_levels`
--
ALTER TABLE `local_levels`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `local_levels`
--
ALTER TABLE `local_levels`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=755;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
