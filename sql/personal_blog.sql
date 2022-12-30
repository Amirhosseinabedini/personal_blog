-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 23, 2022 at 04:53 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personal_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `basics_eng`
--

DROP TABLE IF EXISTS `basics_eng`;
CREATE TABLE IF NOT EXISTS `basics_eng` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `website_name` varchar(128) COLLATE utf8_persian_ci DEFAULT NULL,
  `role` varchar(128) COLLATE utf8_persian_ci DEFAULT NULL,
  `about` text COLLATE utf8_persian_ci,
  `logo_pic` varchar(64) COLLATE utf8_persian_ci DEFAULT NULL,
  `faveicon` varchar(64) COLLATE utf8_persian_ci NOT NULL,
  `title` varchar(64) COLLATE utf8_persian_ci NOT NULL,
  `tel` varchar(64) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_persian_ci NOT NULL,
  `city` varchar(64) COLLATE utf8_persian_ci NOT NULL,
  `Copyright` varchar(64) COLLATE utf8_persian_ci NOT NULL,
  `linkedin` varchar(128) COLLATE utf8_persian_ci NOT NULL DEFAULT '#',
  `github` varchar(128) COLLATE utf8_persian_ci NOT NULL DEFAULT '#',
  `instagram` varchar(128) COLLATE utf8_persian_ci NOT NULL DEFAULT '#',
  `main_image_web` varchar(64) COLLATE utf8_persian_ci NOT NULL,
  `main_image_mobile` varchar(64) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `basics_eng`
--

INSERT INTO `basics_eng` (`id`, `website_name`, `role`, `about`, `logo_pic`, `faveicon`, `title`, `tel`, `email`, `city`, `Copyright`, `linkedin`, `github`, `instagram`, `main_image_web`, `main_image_mobile`) VALUES
(1, 'Amir', 'Webdeveloper', 'With more than 3 years of professional experience as a programmer in a web development team my job is to develop codes, analyze and projects to implement based on customer needs. I am a very energetic, enthusiastic and committed person and got through the business environment professional experience and good accumulated communication skills. I look forward to continuing my work and bringing my ideas to the tech.', 'logo-no-background1.png', 'favicon.svg', 'Amir - Homepage', '+98 911-110-6131', 'abediniamirhossein96@gmail.com', 'Sari ,Iran', 'Amirr512', 'www.linkedin.com/in/amirhosseinabedini', 'www.github.com/Amirhosseinabedini', 'www.instagram.com/Amir.abedini', 'home.png', 'home-mobile.png');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

DROP TABLE IF EXISTS `certificates`;
CREATE TABLE IF NOT EXISTS `certificates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) COLLATE utf8_persian_ci NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL,
  `Institute` varchar(128) COLLATE utf8_persian_ci NOT NULL,
  `img` varchar(128) COLLATE utf8_persian_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `title`, `description`, `Institute`, `img`, `status`) VALUES
(1, 'CompTIA Network+', 'Specialized training course and network\r\n                                                                    training class', 'Tehran Institute\r\n                                                                    of Technology', 'net+mft.jpg', 1),
(2, 'HTML Programmer for web design', 'HTML Programming for web design', 'Technical and\r\n                                                                    Vocational Training Organization. irantvto.ir', 'html_fanniherfeei.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

DROP TABLE IF EXISTS `education`;
CREATE TABLE IF NOT EXISTS `education` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `institute_name` varchar(128) COLLATE utf8_persian_ci NOT NULL,
  `institute_logo` varchar(128) COLLATE utf8_persian_ci NOT NULL,
  `start_date` varchar(32) COLLATE utf8_persian_ci NOT NULL,
  `end_date` varchar(32) COLLATE utf8_persian_ci NOT NULL,
  `degree_name` varchar(128) COLLATE utf8_persian_ci NOT NULL,
  `resume` text COLLATE utf8_persian_ci NOT NULL,
  `city` varchar(32) COLLATE utf8_persian_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `institute_name`, `institute_logo`, `start_date`, `end_date`, `degree_name`, `resume`, `city`, `status`) VALUES
(1, 'Rouzbahan University\r\n', 'rouzbahan-logo.png', '2018/09', '2022/11', 'BEng Computer Science\r\n', '• High academic average<br>\n• Cooperation in auxiliary education for\nstudents', 'Sari, Iran', 1),
(2, 'UNIVERSITY OF SCIENCE AND\r\nTECHNOLOGY', 'elmofannavari_logo.png', '2014/09', '2016/03', 'BEng Computing(hardware)', '• Grade A+ in the 2nd and 3rd semesters<br>\n• Professional member the university’s\nIT team to improve the performance of\nthe internal network', 'Sari, Iran', 1),
(3, 'NATIONAL ORGANIZATION FOR DEVELOPMENT OF EXCEPTIONAL TALENTS (SAMPAD)', 'logo-sampad.png', ' 2007/09', '2014/06', 'Middle and high school', '• Participation in International Olympiad of\nInformatics<br>\n• Cooperation in the Environmental Protection\nAssociation', 'Sari, Iran', 1);

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

DROP TABLE IF EXISTS `experience`;
CREATE TABLE IF NOT EXISTS `experience` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year_of` int(2) NOT NULL,
  `Slogan` varchar(128) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `year_of`, `Slogan`) VALUES
(1, 3, 'The Best Is Yet to Come...');

-- --------------------------------------------------------

--
-- Table structure for table `messege`
--

DROP TABLE IF EXISTS `messege`;
CREATE TABLE IF NOT EXISTS `messege` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_persian_ci NOT NULL,
  `messege` text COLLATE utf8_persian_ci NOT NULL,
  `setdate` varchar(128) COLLATE utf8_persian_ci NOT NULL,
  `ip` varchar(64) COLLATE utf8_persian_ci DEFAULT NULL,
  `answer_status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `messege`
--

INSERT INTO `messege` (`id`, `name`, `email`, `messege`, `setdate`, `ip`, `answer_status`) VALUES
(1, 'abediniamirhossein69@gmail.com', 'abediniamirhossein69@gmail.com', 'abediniamirhossein69@gmail.com', 'Friday 23rd of December 2022 04:14:33 PM', '1111', 0),
(2, 'amir', 'abediniamirhossein69@gmail.com', 'zxc', 'Friday 23rd of December 2022 04:14:55 PM', '1111', 0),
(3, 'amir', 'abediniamirhossein69@gmail.com', 'zxc', 'Friday 23rd of December 2022 04:17:34 PM', '1111', 0),
(4, 'amir', 'abediniamirhossein69@gmail.com', 'zxc', '2022-12-23 19:54:45', '1111', 0),
(5, 'amir', 'abediniamirhossein69@gmail.com', 'zxc', '2022-12-23 19:57:48', '::1', 0),
(6, 'amir', 'abediniamirhossein69@gmail.com', 'sazdsfd', '2022-12-23 19:58:57', '::1', 0),
(7, 'amir', 'abediniamirhossein69@gmail.com', 'sazdsfd', '2022-12-23 20:01:32', '::1', 0),
(8, 'amir111', 'abediniamirhossein96@gmail.com', 'sdfsdfsdf', '2022-12-23 20:02:03', '::1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_persian_ci DEFAULT NULL,
  `percentage` int(4) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `percentage`, `status`) VALUES
(1, 'PHP', 75, 1),
(2, 'LARAVEL', 60, 1),
(3, 'QUERY', 70, 1),
(4, 'QUERY', 70, 1),
(5, 'BOOTSTRAP', 90, 1),
(6, 'CSS', 90, 1),
(7, 'HTML', 90, 1),
(8, 'MYSQL', 70, 1),
(9, 'GIT', 60, 1),
(10, 'SCRUM', 70, 1),
(11, 'WORDPRESS', 60, 1);
COMMIT;

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) COLLATE utf8_persian_ci NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL,
  `image` varchar(64) COLLATE utf8_persian_ci NOT NULL,
  `direct_link` varchar(128) COLLATE utf8_persian_ci DEFAULT NULL,
  `github_link` varchar(128) COLLATE utf8_persian_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `image`, `direct_link`, `github_link`, `status`) VALUES
(1, 'Wordpress Project', 'WordPress website design and development for a upvc window shop.', 'alumtechwin.png', 'https://alumtechwin.ir', NULL, 1),
(2, 'Wordpress Project', 'WordPress website design and development for music products.', 'navayesimorgh.png', 'https://navayesimorgh.com/', NULL, 1),
(3, 'Raahbar national project', 'Development and optimization of a system to control housing construction in villages and\r\nmonitor construction permits • Covered villages: +52,000 • Number of applicants:\r\n+2,000,000.', 'rahbar.png', 'https://svs.bonyadmaskan.ir/', NULL, 1),
(4, 'Behsazi national project', 'Development and optimization of a system for paying loans to renovate buildings\r\nin villages and cities with a population of less than 2,500. • Covered cases:\r\n+2,500,000.', 'rahbar.png', 'https://svs.bonyadmaskan.ir/', NULL, 1),
(5, 'Payesh national project', 'Development and optimization of the system for assessing natural disasters (floods,\r\nearthquakes, etc.) and the resulting damages • Registered incidents: +150 • Number of\r\nregistered damaged units: 1,600,000.', 'rahbar.png', 'https://svs.bonyadmaskan.ir/', NULL, 1),
(6, 'School management system', 'Programming the school simulation system based on the needs of the student’s\r\nRequirements.', 'rahbar.png', 'https://svs.bonyadmaskan.ir/', NULL, 1);


CREATE TABLE IF NOT EXISTS `work_experiences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` varchar(128) COLLATE utf8mb4_polish_ci NOT NULL,
  `Company` varchar(128) COLLATE utf8mb4_polish_ci NOT NULL,
  `start_date` varchar(64) COLLATE utf8mb4_polish_ci DEFAULT NULL,
  `end_date` varchar(64) COLLATE utf8mb4_polish_ci DEFAULT NULL,
  `location` varchar(64) COLLATE utf8mb4_polish_ci DEFAULT NULL,
  `tasks` text COLLATE utf8mb4_polish_ci NOT NULL,
  `work_certificate_img` varchar(128) COLLATE utf8mb4_polish_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `work_experiences`
--

INSERT INTO `work_experiences` (`id`, `position`, `Company`, `start_date`, `end_date`, `location`, `tasks`, `work_certificate_img`, `status`) VALUES
(1, 'MID LEVEL BACKEND DEVELOPER', 'Dornica Company', '2020/10', 'Present', 'Sari, Iran', '• Managing Database systems and projects with PHP.<br>\r\n• codes Debugging , Testing website’s structure with PHP and MYSQL.<br>\r\n• Saving and retrieving various converts to modify or update data.<br>\r\n• Analyzing data and extraction.<br>\r\n• Analyzing functions Algorithm.<br>\r\n• Defining the product vision and set the goals.<br>\r\n• Analyze and review customer needs, write tasks, administrative duties.<br>\r\n• troubleshooting System errors.<br>\r\n• Training interns.<br>', 'dornica_cert.jpg', 1),
(2, 'FRONT-END WEB DEVELOPER', 'Dadekav21 Company', '2020/03', '2020/09', 'Sari, Iran', '• Front‑end development and programming with Html,Css,Javascript.<br>• Update and expand existing Web pages.', 'dadekav_cert.jpg', 1),
(3, 'Freelance developer', 'SELF EMPLOYED', '2019/09', '2020/03', ' Tehran, Iran', '• Participation in various student projects in the field of data science with python.<br>\r\n• Programming and developing WordPress web pages with Elementor.\r\n', NULL, 1);
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
