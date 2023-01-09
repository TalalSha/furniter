-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2022 at 01:00 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `herosol_offshorep`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `phone` varchar(100) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `msg` text CHARACTER SET latin1 NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jobs`
--

CREATE TABLE `tbl_jobs` (
  `id` int(11) NOT NULL,
  `job_cat` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `years_of_experience` tinyint(2) NOT NULL,
  `practice_area_id` int(11) NOT NULL,
  `experience_level_id` int(11) NOT NULL,
  `jurisdiction` int(11) DEFAULT NULL,
  `salary` varchar(255) NOT NULL,
  `positions_available` int(11) NOT NULL,
  `working_type` enum('remote','office_based') DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_jobs`
--

INSERT INTO `tbl_jobs` (`id`, `job_cat`, `title`, `description`, `years_of_experience`, `practice_area_id`, `experience_level_id`, `jurisdiction`, `salary`, `positions_available`, `working_type`, `status`, `created_date`) VALUES
(2, 2, 'asd', '<p>asdnmn</p>\r\n', 3, 2, 1, 2, '40000', 0, NULL, 1, '2022-09-27 01:16:58'),
(3, 1, 'IT', '', 0, 1, 1, 1, '40000', 0, NULL, 0, '2022-09-27 02:22:47'),
(4, 2, 'IT job', '<p>this a IT job</p>\r\n', 0, 2, 1, 2, '40000', 0, NULL, 1, '2022-09-27 02:25:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_categories`
--

CREATE TABLE `tbl_job_categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_job_categories`
--

INSERT INTO `tbl_job_categories` (`id`, `title`, `status`) VALUES
(1, 'Business', 1),
(2, 'Fashion', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_enquiries`
--

CREATE TABLE `tbl_job_enquiries` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `phone` varchar(100) NOT NULL,
  `msg` text CHARACTER SET latin1 NOT NULL,
  `cv` varchar(100) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_experience_levels`
--

CREATE TABLE `tbl_job_experience_levels` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_job_experience_levels`
--

INSERT INTO `tbl_job_experience_levels` (`id`, `title`, `status`) VALUES
(1, 'professional', 1),
(2, 'Entery level', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_jurisdiction`
--

CREATE TABLE `tbl_job_jurisdiction` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_job_jurisdiction`
--

INSERT INTO `tbl_job_jurisdiction` (`id`, `title`, `status`) VALUES
(1, 'Bermuda  ', 1),
(2, 'Italy', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_practice_area`
--

CREATE TABLE `tbl_job_practice_area` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_job_practice_area`
--

INSERT INTO `tbl_job_practice_area` (`id`, `title`, `status`) VALUES
(1, 'Business', 1),
(2, 'Banking Finance', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_locations`
--

CREATE TABLE `tbl_locations` (
  `id` int(11) NOT NULL,
  `meta_title` varchar(100) DEFAULT NULL,
  `meta_keywords` varchar(100) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `banner1` varchar(100) NOT NULL,
  `sec1_image` varchar(100) NOT NULL,
  `sec1_heading` varchar(100) NOT NULL,
  `sec1_detail` text NOT NULL,
  `banner2` varchar(100) NOT NULL,
  `sec2_image` varchar(100) NOT NULL,
  `sec2_heading` varchar(100) NOT NULL,
  `sec2_detail` text NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location_images`
--

CREATE TABLE `tbl_location_images` (
  `id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_multi_text`
--

CREATE TABLE `tbl_multi_text` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `txt1` mediumtext NOT NULL,
  `txt2` mediumtext NOT NULL,
  `txt3` mediumtext NOT NULL,
  `txt4` mediumtext NOT NULL,
  `txt5` mediumtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `section` varchar(255) NOT NULL,
  `order_no` varchar(11) DEFAULT '0',
  `site_lang` enum('eng','gr') NOT NULL DEFAULT 'eng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_multi_text`
--

INSERT INTO `tbl_multi_text` (`id`, `title`, `detail`, `txt1`, `txt2`, `txt3`, `txt4`, `txt5`, `image`, `section`, `order_no`, `site_lang`) VALUES
(9, 'Antarctica', '', 'https://www.youtube.com/embed/VFQtSqChlsk', '', '', '', '', 'a96b65a721e561e1e3de768ac819ffbb_1662544085_11821.jpg', 'home-sec-6', '1', 'eng'),
(10, 'Turkey', '', 'https://www.youtube.com/embed/UCA0VRmUEac', '', '', '', '', 'a96b65a721e561e1e3de768ac819ffbb_1662544085_11822.jpg', 'home-sec-6', '2', 'eng'),
(14, 'Phone', '+1 800 603 6035 (Viber, WhatsApp)', '', '', '', '', '', NULL, 'contact-sec2-left-1', '1', 'eng'),
(15, 'FAX', '+1 800 889 9898', '', '', '', '', '', NULL, 'contact-sec2-left-1', '2', 'eng'),
(16, 'Email', 'abcd@123', '', '', '', '', '', NULL, 'contact-sec2-left-1', '3', 'eng'),
(17, '', '', '', '', '', '', '', 'image_1662720242_2418.svg', 'contact-sec2-left-2', '1', 'eng');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permissions`
--

CREATE TABLE `tbl_permissions` (
  `id` int(11) NOT NULL,
  `permission` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permissions_admin`
--

CREATE TABLE `tbl_permissions_admin` (
  `admin_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siteadmin`
--

CREATE TABLE `tbl_siteadmin` (
  `site_id` int(11) NOT NULL,
  `site_username` varchar(255) DEFAULT NULL,
  `site_password` varchar(255) DEFAULT NULL,
  `site_admin_name` varchar(255) DEFAULT NULL,
  `site_admin_type` enum('admin','subadmin') NOT NULL DEFAULT 'admin',
  `site_domain` varchar(100) DEFAULT NULL,
  `site_name` varchar(500) DEFAULT NULL,
  `site_email` varchar(255) DEFAULT NULL,
  `site_noreply_email` varchar(255) DEFAULT NULL,
  `site_phone` varchar(255) DEFAULT NULL,
  `site_fax` varchar(255) DEFAULT NULL,
  `site_paypal_sandox` tinyint(1) DEFAULT 0,
  `site_sandbox_paypal` varchar(255) DEFAULT NULL,
  `site_live_paypal` varchar(255) DEFAULT NULL,
  `site_ip` varchar(255) DEFAULT NULL,
  `site_logo` varchar(255) DEFAULT NULL,
  `site_footer_logo` varchar(255) DEFAULT NULL,
  `site_icon` varchar(255) DEFAULT NULL,
  `site_thumb` varchar(255) DEFAULT NULL,
  `site_address` varchar(255) DEFAULT NULL,
  `site_about` text DEFAULT NULL,
  `site_city` varchar(100) DEFAULT NULL,
  `site_state` varchar(100) DEFAULT NULL,
  `site_zip` varchar(25) DEFAULT NULL,
  `site_country` varchar(100) DEFAULT NULL,
  `site_lastlogindate` timestamp NOT NULL DEFAULT current_timestamp(),
  `site_copyright` varchar(1000) DEFAULT NULL,
  `site_facebook` varchar(255) DEFAULT NULL,
  `site_twitter` varchar(255) DEFAULT NULL,
  `site_google` varchar(255) DEFAULT NULL,
  `site_instagram` varchar(255) DEFAULT NULL,
  `site_linkedin` varchar(255) DEFAULT NULL,
  `site_youtube` varchar(255) DEFAULT NULL,
  `site_pinterest` varchar(255) DEFAULT NULL,
  `site_contact_map` text DEFAULT NULL,
  `site_google_ad` text DEFAULT NULL,
  `site_meta_desc` text DEFAULT NULL,
  `site_meta_keyword` varchar(1000) DEFAULT NULL,
  `site_meta_copyright` varchar(500) DEFAULT NULL,
  `site_meta_author` varchar(255) DEFAULT NULL,
  `site_how_to_pay` text DEFAULT NULL,
  `site_status` int(11) NOT NULL DEFAULT 1,
  `sub_location` int(20) DEFAULT NULL,
  `site_chat` text DEFAULT NULL,
  `sub_featured` int(30) DEFAULT NULL,
  `site_version` int(11) NOT NULL DEFAULT 0,
  `site_shipping_fee` float DEFAULT NULL,
  `site_tax_percentage` float NOT NULL DEFAULT 0,
  `site_product_msg` varchar(255) DEFAULT NULL,
  `site_product_calltext` varchar(255) DEFAULT NULL,
  `site_accept_order` tinyint(1) DEFAULT 1,
  `interview_cost` double NOT NULL,
  `resume_cost` double NOT NULL,
  `coaching_cost` double NOT NULL,
  `site_stripe_type` tinyint(4) DEFAULT NULL,
  `site_stripe_testing_api_key` varchar(255) DEFAULT NULL,
  `site_stripe_testing_secret_key` varchar(255) DEFAULT NULL,
  `site_stripe_live_api_key` varchar(255) DEFAULT NULL,
  `site_stripe_live_secret_key` varchar(255) DEFAULT NULL,
  `site_commission` double NOT NULL,
  `site_payment_clear_days` int(11) NOT NULL,
  `site_proof_acceptance_days` int(11) DEFAULT NULL,
  `site_email_send` varchar(255) DEFAULT NULL,
  `site_address_gr` text DEFAULT NULL,
  `site_about_gr` text DEFAULT NULL,
  `site_copyright_gr` text DEFAULT NULL,
  `site_external_link` varchar(255) DEFAULT NULL,
  `site_header_notification` text DEFAULT NULL,
  `footer_background` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPRESSED;

--
-- Dumping data for table `tbl_siteadmin`
--

INSERT INTO `tbl_siteadmin` (`site_id`, `site_username`, `site_password`, `site_admin_name`, `site_admin_type`, `site_domain`, `site_name`, `site_email`, `site_noreply_email`, `site_phone`, `site_fax`, `site_paypal_sandox`, `site_sandbox_paypal`, `site_live_paypal`, `site_ip`, `site_logo`, `site_footer_logo`, `site_icon`, `site_thumb`, `site_address`, `site_about`, `site_city`, `site_state`, `site_zip`, `site_country`, `site_lastlogindate`, `site_copyright`, `site_facebook`, `site_twitter`, `site_google`, `site_instagram`, `site_linkedin`, `site_youtube`, `site_pinterest`, `site_contact_map`, `site_google_ad`, `site_meta_desc`, `site_meta_keyword`, `site_meta_copyright`, `site_meta_author`, `site_how_to_pay`, `site_status`, `sub_location`, `site_chat`, `sub_featured`, `site_version`, `site_shipping_fee`, `site_tax_percentage`, `site_product_msg`, `site_product_calltext`, `site_accept_order`, `interview_cost`, `resume_cost`, `coaching_cost`, `site_stripe_type`, `site_stripe_testing_api_key`, `site_stripe_testing_secret_key`, `site_stripe_live_api_key`, `site_stripe_live_secret_key`, `site_commission`, `site_payment_clear_days`, `site_proof_acceptance_days`, `site_email_send`, `site_address_gr`, `site_about_gr`, `site_copyright_gr`, `site_external_link`, `site_header_notification`, `footer_background`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administration', 'admin', 'www.furniture.com', 'Furniture', 'info@furniture.com', 'noreply@furniture.com', '(T) 559.940.2247', '', 1, 'iamgenious.1-facilitator@gmail.com', 'herosolutions.tk@gmail.com', '::1', 'offshore-logo.png', 'furniture-footer-logo.png', 'furniture-icon.png', 'furniture-thumb.png', 'P.O. Box 27468 Fresno, CA 93729', '<p><span style=\"font-size:14px\"><strong>Accessibility Statement</strong></span></p>\r\n\r\n<p><span style=\"font-size:10px\">XLNC Safety & Workwear, Inc. is committed to making its websites accessible for all users, and will continue to take steps necessary to ensure compliance with applicable laws.</span></p>\r\n\r\n<p><span style=\"font-size:10px\">If you have difficulty accessing any content, feature, or functionality on our website or on our other electronic platforms, please call us at 559.940.2247 so that we can provide you access to data through an alternative method.</span></p>\r\n', 'New York', 'WA', '75350', 'USA', '2022-09-28 00:35:12', 'Copyright © 2022.  All rights reserved Withington Furniture.', 'https://www.facebook.com/mistandgo', 'https://www.twitter.com/mistandgo', 'https://plus.google.com/blootopia', 'https://instagram.com/mistandgo', 'https://www.linkedin.com/mistandgo', '?', '', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3318.7250567536676!2d-84.34897039425!3d33.71606266992961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f501790d22f717%3A0x7ff91decdaf344dc!2s1264+Custer+Ave+SE%2C+Atlanta%2C+GA+30316!5e0!3m2!1sen!2s!4v1493122321821', '', 'Blootopia', 'Blootopia', 'New Admin &copy; 2018 All Rights Reserved.', 'Administration', '', 1, 20, 'window.fcWidget.init({\r\ntoken: \"89884c16-15cc-484d-926f-ec74202a584d\",\r\nhost: \"https://wchat.freshchat.com\"\r\n});', 30, 8, 20, 21, 'Call for best price and availability!', 'CALL NOW', 1, 120, 240, 280, 1, 'pk_test_MBmgSxlJm4osKE52BTYcvXul0046kG0FiP', 'sk_test_1mT2FJVNtaS4b2VUMBMxd7Vc00nujrf9Vb', '.', '.', 20, 2, 3, 'info@furniture.com', 'Talacker 41, 8001 Zürich', 'Wir sagen gerne, dass wir bestrebt sind, „die Welt zu verbinden“.', 'Alle Rechte vorbehalten.', '?', 'DESIGNED FOR A HEALTHY HOME & WORK ENVIRONMENT: MIST & GO Sani-Powder', 'offshore-footer-bg.png'),
(2, 'ajay', '098f6bcd4621d373cade4e832627b4f6', 'Malik Ajay Jones', 'subadmin', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-03 13:00:13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, '', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sitecontent`
--

CREATE TABLE `tbl_sitecontent` (
  `id` int(11) NOT NULL,
  `ckey` varchar(80) NOT NULL,
  `code` mediumtext DEFAULT NULL,
  `full_code` mediumtext DEFAULT NULL,
  `site_lang` enum('eng','gr') NOT NULL DEFAULT 'eng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_sitecontent`
--

INSERT INTO `tbl_sitecontent` (`id`, `ckey`, `code`, `full_code`, `site_lang`) VALUES
(1, 'home', 'a:25:{s:10:\"page_title\";s:4:\"Home\";s:10:\"meta_title\";s:8:\"offshore\";s:13:\"meta_keywords\";s:8:\"offshore\";s:16:\"meta_description\";s:20:\"offshore description\";s:15:\"banner_heading1\";s:16:\"MARKET KNOWLEDGE\";s:15:\"banner_heading2\";s:22:\"PROFESSIONAL PROCESSES\";s:15:\"banner_heading3\";s:26:\"RESULTS DRIVEN RECRUITMENT\";s:16:\"section2_heading\";s:8:\"About us\";s:15:\"section2_detail\";s:691:\"<p>We are OFFSHORE specialists. It&rsquo;s in our name, it&rsquo;s what we know and all we do.</p>\r\n\r\n<p>Our entire focus is placing legal and support professionals into offshore private practice law firms globally.</p>\r\n\r\n<p><strong>Candidates</strong>&nbsp;trust Offshore Legal&rsquo;s direct market experience and the invaluable insight and advice we provide.</p>\r\n\r\n<p><strong>Clients</strong>&nbsp;trust Offshore Legal to source and screen the best available talent.</p>\r\n\r\n<p><strong>Candidates and clients</strong>&nbsp;trust Offshore Legal to provide them with a highly professional service which yields results.</p>\r\n\r\n<p><strong>Trust</strong>&nbsp;us to do the same for you!</p>\r\n\";s:17:\"section3_heading1\";s:14:\"WHO WE RECRUIT\";s:14:\"section3_text1\";s:321:\"Our clients require lawyers across multiple practice areas, including; Corporate, Private Equity, Funds, Commercial Litigation, Insolvency and Restructuring, Finance, Private Client, Compliance and Regulation. We also receive instruction for Company Secretaries, Legal Secretaries, Corporate and Trust Administrators.\r\n\r\n\";s:17:\"section3_heading2\";s:16:\"WHERE WE RECRUIT\";s:14:\"section3_text2\";s:201:\"Anywhere that offshore firms are located! Therefor the Cayman Islands, British Virgin Islands, Bermuda, Turks & Caicos, Jersey, Guernsey, Hong Kong, Singapore and London are our primary target markets.\";s:17:\"section3_heading3\";s:18:\"WHO WE RECRUIT FOR\";s:14:\"section3_text3\";s:327:\"Offshore Legal recruits exclusively for offshore private practice law firms. We have strong relationships with all the major firms, as well as mid-tier and local firms. Each firm/jurisdiction typically has their preferred candidate profile so assessing best potential client/candidate fits is often key to a successful outcome.\";s:16:\"section5_heading\";s:16:\"Michael Burbidge\";s:15:\"section5_detail\";s:898:\"<p>Michael founded Offshore Legal in 2009 and has 14 years of direct experience recruiting exclusively for offshore Private Practice firms in the Caribbean, Europe and Asia. In addition, he spent 6 years working in the Cayman Islands, 5 in London and has also lived in Hong Kong and Jersey so has first-hand experience of both the lifestyle and professional offerings across these regions.</p>\r\n\r\n<p>Michael is always discreet, professional, up-front and constructive in all dealings and has helped countless candidates make their dream offshore move. Information as to the various jurisdictions, up-to-date job vacancy information, CV optimization, interview preparation, package negotiation and permit/relocation guidance are all part of this process.</p>\r\n\r\n<p>Whether you are at the stage of information gathering or ready to get the wheels in motion, Michael would love to hear from you.</p>\r\n\";s:16:\"section6_heading\";s:15:\"FEATURED VIDEOS\";s:6:\"image1\";s:52:\"2823f4797102ce1a1aec05359cc16dd9_1662544081_8958.jpg\";s:6:\"image2\";s:52:\"4b0250793549726d5c1ea3906726ebfe_1662544084_8378.png\";s:6:\"image6\";s:52:\"f85454e8279be180185cac7d243c5eb3_1662544084_3534.png\";s:6:\"image7\";s:52:\"10a5ab2db37feedfdeaab192ead4ac0e_1662544084_2170.png\";s:6:\"image8\";s:52:\"f4be00279ee2e0a53eafdaa94a151e2c_1662544084_9790.png\";s:6:\"image9\";s:52:\"db85e2590b6109813dafa101ceb2faeb_1662544084_2155.png\";s:7:\"image10\";s:52:\"a96b65a721e561e1e3de768ac819ffbb_1662544085_1182.jpg\";}', NULL, 'eng'),
(2, 'jobs', 'a:6:{s:10:\"page_title\";s:4:\"Jobs\";s:10:\"meta_title\";s:13:\"Jobs we offer\";s:13:\"meta_keywords\";s:16:\"Jobs, work,tasks\";s:16:\"meta_description\";s:23:\"this is a site for jobs\";s:16:\"section2_heading\";s:23:\"this is a site for jobs\";s:6:\"image1\";s:52:\"0266e33d3f546cb5436a10798e657d97_1662542130_3248.jpg\";}', NULL, 'eng'),
(3, 'locations', 'a:14:{s:10:\"page_title\";s:9:\"Locations\";s:10:\"meta_title\";s:9:\"Locations\";s:13:\"meta_keywords\";s:9:\"Locations\";s:16:\"meta_description\";s:9:\"Locations\";s:16:\"section2_heading\";s:13:\"Our locations\";s:6:\"image1\";s:52:\"66808e327dc79d135ba18e051673d906_1662719893_9701.jpg\";s:16:\"section6_heading\";s:13:\"Our locations\";s:9:\"sec6_pics\";a:2:{i:0;s:53:\"a96b65a721e561e1e3de768ac819ffbb_1662544085_11821.jpg\";i:1;s:53:\"a96b65a721e561e1e3de768ac819ffbb_1662544085_11822.jpg\";}s:10:\"sec6_title\";a:2:{i:0;s:10:\"Antarctica\";i:1;s:6:\"Turkey\";}s:9:\"sec6_link\";a:2:{i:0;s:41:\"https://www.youtube.com/embed/VFQtSqChlsk\";i:1;s:41:\"https://www.youtube.com/embed/UCA0VRmUEac\";}s:13:\"sec6_order_no\";a:2:{i:0;s:1:\"1\";i:1;s:1:\"2\";}s:10:\"sec2_title\";a:1:{i:0;s:6:\"Turkey\";}s:9:\"sec2_link\";a:1:{i:0;s:31:\"youtube.com/watch?v=IES2N5X6Txs\";}s:13:\"sec2_order_no\";a:1:{i:0;s:1:\"1\";}}', NULL, 'eng'),
(4, 'contact', 'a:15:{s:10:\"page_title\";s:10:\"Contact us\";s:10:\"meta_title\";s:10:\"Contact us\";s:13:\"meta_keywords\";s:10:\"Contact us\";s:16:\"meta_description\";s:10:\"Contact us\";s:21:\"section2_left_heading\";s:12:\"Get In Touch\";s:21:\"section2_left_tagline\";s:44:\"7 Rue Caulaincourt, 75018 Zanzibar, Tanzania\";s:18:\"sec2_left_1_detail\";a:3:{i:0;s:33:\"+1 800 603 6035 (Viber, WhatsApp)\";i:1;s:15:\"+1 800 889 9898\";i:2;s:8:\"abcd@123\";}s:22:\"section2_right_heading\";s:14:\"Drop Us a Line\";s:19:\"first_field_heading\";s:4:\"Name\";s:20:\"second_field_heading\";s:5:\"Email\";s:19:\"third_field_heading\";s:5:\"Phone\";s:20:\"fourth_field_heading\";s:7:\"Country\";s:19:\"fifth_field_heading\";s:8:\"Comments\";s:14:\"button_heading\";s:6:\"Submit\";s:6:\"image1\";s:52:\"37a749d808e46495a8da1e5352d03cae_1662643399_4941.jpg\";}', NULL, 'eng');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_site_texts`
--

CREATE TABLE `tbl_site_texts` (
  `txt_id` int(11) NOT NULL,
  `txt_type` varchar(50) DEFAULT NULL,
  `txt_label` varchar(100) DEFAULT NULL,
  `txt_key` text DEFAULT NULL,
  `txt_value` text DEFAULT NULL,
  `txt_subject` text DEFAULT NULL,
  `txt_msg` varchar(160) DEFAULT NULL,
  `txt_is_sms` tinyint(1) DEFAULT NULL,
  `txt_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_upcoming_job_enquiries`
--

CREATE TABLE `tbl_upcoming_job_enquiries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `phone` varchar(100) NOT NULL,
  `msg` text CHARACTER SET latin1 NOT NULL,
  `cv` varchar(100) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jobs`
--
ALTER TABLE `tbl_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job_categories`
--
ALTER TABLE `tbl_job_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job_enquiries`
--
ALTER TABLE `tbl_job_enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job_experience_levels`
--
ALTER TABLE `tbl_job_experience_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job_jurisdiction`
--
ALTER TABLE `tbl_job_jurisdiction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job_practice_area`
--
ALTER TABLE `tbl_job_practice_area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_locations`
--
ALTER TABLE `tbl_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_location_images`
--
ALTER TABLE `tbl_location_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_multi_text`
--
ALTER TABLE `tbl_multi_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_permissions`
--
ALTER TABLE `tbl_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_siteadmin`
--
ALTER TABLE `tbl_siteadmin`
  ADD PRIMARY KEY (`site_id`);

--
-- Indexes for table `tbl_sitecontent`
--
ALTER TABLE `tbl_sitecontent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_site_texts`
--
ALTER TABLE `tbl_site_texts`
  ADD PRIMARY KEY (`txt_id`);

--
-- Indexes for table `tbl_upcoming_job_enquiries`
--
ALTER TABLE `tbl_upcoming_job_enquiries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_jobs`
--
ALTER TABLE `tbl_jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_job_categories`
--
ALTER TABLE `tbl_job_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_job_enquiries`
--
ALTER TABLE `tbl_job_enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_job_experience_levels`
--
ALTER TABLE `tbl_job_experience_levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_job_jurisdiction`
--
ALTER TABLE `tbl_job_jurisdiction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_job_practice_area`
--
ALTER TABLE `tbl_job_practice_area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_locations`
--
ALTER TABLE `tbl_locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_location_images`
--
ALTER TABLE `tbl_location_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_multi_text`
--
ALTER TABLE `tbl_multi_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_permissions`
--
ALTER TABLE `tbl_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_siteadmin`
--
ALTER TABLE `tbl_siteadmin`
  MODIFY `site_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_sitecontent`
--
ALTER TABLE `tbl_sitecontent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_site_texts`
--
ALTER TABLE `tbl_site_texts`
  MODIFY `txt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_upcoming_job_enquiries`
--
ALTER TABLE `tbl_upcoming_job_enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
