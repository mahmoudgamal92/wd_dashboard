-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2023 at 11:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aqar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` text NOT NULL,
  `admin_email` text NOT NULL,
  `admin_phone` text NOT NULL,
  `admin_password` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_phone`, `admin_password`, `date_created`) VALUES
(1, 'admin', 'admin@admin.com', '01063634580', '123456', '2023-09-09 14:34:16');

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `type_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `thumbnail` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `date_created` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`type_id`, `title`, `thumbnail`, `status`, `date_created`) VALUES
(3, 'شقق', 'Untitled design.png', 1, '2023-06-25 00:11:10'),
(4, 'فلل', '', 1, ''),
(5, 'أراضي', '', 1, ''),
(6, 'عمائر', '', 1, ''),
(9, 'شاليهات', '', 1, ''),
(10, 'إستراحات', '', 1, ''),
(11, 'مستودعات', '', 1, ''),
(13, 'مخيم', '', 1, ''),
(15, 'مكتب', '447031.png', 1, ''),
(16, 'محل تجاري', '447031.png', 1, ''),
(17, 'مزرعه', '447031.png', 1, ''),
(18, 'محل للتقبيل', '447031.png', 1, ''),
(19, 'غرفه', '447031.png', 1, ''),
(20, 'دور', '447031.png', 1, ''),
(21, 'test', 'eyeiyo', 1, '23-09-2023');

-- --------------------------------------------------------

--
-- Table structure for table `cat_inputs`
--

CREATE TABLE `cat_inputs` (
  `id` int(11) NOT NULL,
  `cat_id` text NOT NULL,
  `input_id` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cat_inputs`
--

INSERT INTO `cat_inputs` (`id`, `cat_id`, `input_id`, `date_created`) VALUES
(27, '3', '11', '2023-11-05 12:54:02'),
(28, '3', '12', '2023-11-05 12:54:02'),
(29, '3', '13', '2023-11-05 12:54:02'),
(30, '3', '14', '2023-11-05 12:54:02'),
(31, '5', '13', '2023-11-05 12:54:47'),
(32, '5', '14', '2023-11-05 12:54:47');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `state_id` text NOT NULL,
  `name` text NOT NULL,
  `coords` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `state_id`, `name`, `coords`, `date_created`) VALUES
(1, '1', 'الحمراء', '', '2023-10-18 10:20:19'),
(2, '1', 'الدحو', '', '2023-10-18 10:20:44'),
(13, '1', 'تجربة', '', '2023-10-19 13:51:51'),
(14, '2', 'تجبةر ', '', '2023-10-19 13:52:32'),
(16, '3', 'TEST CITY ', '487465,496498', '2023-11-05 11:16:37'),
(17, '', 'حي تجريبي ', '04798475487', '2023-11-05 11:49:41'),
(18, '', '', '', '2023-11-05 15:07:27'),
(19, '', '', '54', '2023-11-05 16:43:58');

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `conversation_id` int(11) NOT NULL,
  `prop_id` text NOT NULL,
  `prop_title` text NOT NULL,
  `seller_token` text NOT NULL,
  `buyer_token` text NOT NULL,
  `date_created` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(11) NOT NULL,
  `city_id` text NOT NULL,
  `name` text NOT NULL,
  `coords` text NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `city_id`, `name`, `coords`, `date_created`) VALUES
(1, '1', 'حي تجريبي ', '0.00000,0.0000', '0000-00-00'),
(5, '13', 'حي تجريبي ', '858677ز739و6798ز67986', '2023-11-05');

-- --------------------------------------------------------

--
-- Table structure for table `favourite`
--

CREATE TABLE `favourite` (
  `id` int(11) NOT NULL,
  `user_token` text NOT NULL,
  `prop_id` text NOT NULL,
  `date_created` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `favourite`
--

INSERT INTO `favourite` (`id`, `user_token`, `prop_id`, `date_created`) VALUES
(38, 'd56ff9abeda0970f045ff53ae93ccf82', '98', '2023-09-30'),
(39, 'd56ff9abeda0970f045ff53ae93ccf82', '96', '2023-09-30'),
(40, 'd56ff9abeda0970f045ff53ae93ccf82', '88', '2023-09-30'),
(41, 'null', '83', '2023-09-30'),
(42, 'null', '82', '2023-09-30'),
(44, 'd56ff9abeda0970f045ff53ae93ccf82', '90', '2023-09-30'),
(45, 'e2e390eebccab87047943cc33e820f71', '90', '2023-09-30'),
(47, 'de2917740a73f713606237cd4ce459aa', '98', '2023-10-03'),
(48, 'de2917740a73f713606237cd4ce459aa', '59', '2023-10-03'),
(50, 'c221cebd3233f35e92d47036de2f097f', '98', '2023-10-04'),
(51, 'b1c98df9cc84449bb66ce2bf6ee0a1f0', '90', '2023-10-06'),
(52, 'b1c98df9cc84449bb66ce2bf6ee0a1f0', '95', '2023-10-06'),
(53, 'null', '89', '2023-10-07'),
(54, 'c221cebd3233f35e92d47036de2f097f', '100', '2023-10-10'),
(55, 'null', '102', '2023-10-23');

-- --------------------------------------------------------

--
-- Table structure for table `inputs`
--

CREATE TABLE `inputs` (
  `input_id` int(11) NOT NULL,
  `input_key` text NOT NULL,
  `input_placeholder` text NOT NULL,
  `input_type` text NOT NULL,
  `input_role` text NOT NULL,
  `input_desc` text NOT NULL,
  `input_label` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `inputs`
--

INSERT INTO `inputs` (`input_id`, `input_key`, `input_placeholder`, `input_type`, `input_role`, `input_desc`, `input_label`, `date_created`) VALUES
(11, '', 'test', 'number_input', 'secondry', 'أدخل رقم العقار ', 'prop_age', '2023-11-05 11:39:17'),
(12, '', 'test', 'number_input', 'primary', 'أدخل سعر العقار ', 'prop_price', '2023-11-05 11:41:14'),
(13, '', 'test', 'number_input', 'primary', 'أدخل مساحة العقار ', 'prop_space', '2023-11-05 11:42:01'),
(14, '', 'test', 'text_input', 'primary', 'أدخل وصف العقار ', 'prop_desc', '2023-11-05 11:43:07'),
(16, '', 'test', 'select', 'primary', 'نوع الإعلان', 'adv_type', '2023-11-05 11:51:37');

-- --------------------------------------------------------

--
-- Table structure for table `input_values`
--

CREATE TABLE `input_values` (
  `id` int(11) NOT NULL,
  `input_id` text NOT NULL,
  `token` text NOT NULL,
  `value` text NOT NULL,
  `param` text NOT NULL,
  `icon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `input_values`
--

INSERT INTO `input_values` (`id`, `input_id`, `token`, `value`, `param`, `icon`) VALUES
(3, '11', '', 'for_sell', 'للبيع ', ''),
(4, '11', '', 'for_rent', 'للإيجار', '');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `message_txt` int(11) NOT NULL,
  `conversation_id` text NOT NULL,
  `user_token` text NOT NULL,
  `date_created` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `package_id` int(11) NOT NULL,
  `package_title` text NOT NULL,
  `package_price` text NOT NULL,
  `package_color` text NOT NULL,
  `package_desc` text NOT NULL,
  `package_duration` text NOT NULL,
  `max_ads` text NOT NULL,
  `max_featured` text NOT NULL,
  `package_thumbnail` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`package_id`, `package_title`, `package_price`, `package_color`, `package_desc`, `package_duration`, `max_ads`, `max_featured`, `package_thumbnail`, `date_created`) VALUES
(1, 'الباقة الذهبية ', '200', '#456EFF', 'الباقة الذهبية', '30', '30', '5', 'pack1.png', '0000-00-00 00:00:00'),
(2, 'trew', 'fdetr', '', 'e', '180', 'tre', ' tre', '', '2023-11-05 16:44:54');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `prop_id` int(11) NOT NULL,
  `adv_number` text NOT NULL,
  `adv_title` text NOT NULL,
  `adv_type` text NOT NULL,
  `prop_type` text NOT NULL,
  `prop_price` int(11) NOT NULL,
  `prop_space` text NOT NULL,
  `prop_desc` text NOT NULL,
  `prop_coords` text NOT NULL,
  `prop_address` text NOT NULL,
  `prop_status` text NOT NULL,
  `street_width` text NOT NULL,
  `meter_price` text NOT NULL,
  `prop_front` text NOT NULL,
  `bed_rooms` text NOT NULL,
  `bath_rooms` text NOT NULL,
  `floor` text NOT NULL,
  `prop_images` text NOT NULL,
  `date_created` text NOT NULL,
  `prop_owner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`prop_id`, `adv_number`, `adv_title`, `adv_type`, `prop_type`, `prop_price`, `prop_space`, `prop_desc`, `prop_coords`, `prop_address`, `prop_status`, `street_width`, `meter_price`, `prop_front`, `bed_rooms`, `bath_rooms`, `floor`, `prop_images`, `date_created`, `prop_owner`) VALUES
(59, '7120077068', 'شقة للبيع بعباس العقاد XXXXX', 'for_sale', '3', 300, '125', 'شقة للبيع بمدينة نصر عباس العقاد \nمع امكانية التقسيط حتي خمس سنوات \n', '29.985803483195706,31.51820780709386', 'الأندلس عائلي, مدينة القاهرة الجديدة, القاهرة, مصر', 'active', '', '', '', '', '', '', '04182023042838643e1c7693d57.png', '2023-08-01 07:40:47', '393d3675d41d0e949a85aaab852bb8cf'),
(60, '9858273456', 'فيلا للبيع بجدة', 'for_sale', '4', 30000000, '250', 'فيلا للبيع بالتجمع الخامس \nدقائق من شارع التسعين الجنوبي \n', '29.839165122225683,31.484167221933603', 'القاهرة, مصر', 'active', '', '', '', '', '', '', '77a2d4b4-0f89-45dc-a02e-2f5d236366d3.jpeg', '2023-08-01 07:43:28', '393d3675d41d0e949a85aaab852bb8cf'),
(61, '5843937178', 'فيلا للبيع بمدينة زايد ', 'for_sale', '4', 450000000, '500', 'فيلا كاملة التجهيزات بمدينة بدر ', '30.077013119793385,31.71585375443101', 'مدينة القاهرة الجديدة, القاهرة, مصر', 'active', '', '', '', '', '', '', 'b32eed0d-8b4d-437a-b3ee-c0b6ce0c1f95.jpeg', '2023-08-01 07:45:28', '393d3675d41d0e949a85aaab852bb8cf'),
(62, '5819593658', 'عمارة للبيع بجدة ', 'for_sale', '6', 9000000, '250', 'عمارة للبيع بجدة مكونه من ١٢ طابق \nكل طابق يتكون من شقتين كاملة التشطييب', '21.382415337215054,39.18835060670972', 'تحمة, محافظة جدة, منطقة مكة المكرمة, السعودية', 'active', '', '', '', '', '', '', '953779fb-16a3-4a69-bb5e-fc05bcd48fd8.jpeg', '2023-08-01 07:47:26', 'f96571c35b2941d6a9790d69965361a6'),
(63, '6144032296', ' عمارة للبيع بحائل ', 'for_rent', '6', 250000, '140', 'عمارة ٦ ادوا بمدينة حائل للبيع\n', '21.309990894224647,39.49012326076627', 'محافظة بحرة, منطقة مكة المكرمة, السعودية', 'active', '', '', '', '', '', '', '3c7147ba-3660-4e0f-b6a8-c01789a3dc31.jpeg', '2023-08-01 07:49:14', 'f96571c35b2941d6a9790d69965361a6'),
(69, '9901860552', 'عرض تجريبي ', 'for_rent', '3', 200000, '250', 'دبلوكس ', '24.756691592422257,49.953306376049845', 'محافظة الأحساء, المنطقة الشرقية, السعودية', 'pending', '', '', '', '', '', '', '', '2023-08-11 04:19:03', '235302bcbfe8f65a88d3564480808ee6'),
(74, '6632319326', 'مصنع للإيجار بمنطقة  تبوك 222', 'for_rent', '12', 1500000, '2500', 'مصنع للإيجار في منطقة تبوك علي مساحة ٢٥٠٠ متر\n', '21.4858,39.1925', 'محافظة تبوك, منطقة تبوك, السعودية', 'active', '', '', '', '', '', '', '64b8299f-e7c9-491e-a7b6-7175792037da.jpeg', '2023-08-13 19:43:42', 'b1c98df9cc84449bb66ce2bf6ee0a1f0'),
(80, '7132040234', 'بمدينة الرياض حي الملز', 'for_sale', '3', 600000, '250', 'مدخلين غرفتين ومجلس ومقلط وصالة عدد 2 دورة مياه ومطبخ', '25.44501025211202,46.39696747997105', 'محافظة حريملاء, منطقة الرياض, السعودية', 'pending', '', '', '', '', '', '', '48EE2E99-D1F0-4E59-A3DD-74042E387CBD.jpg', '2023-08-21 04:17:41', 'de2917740a73f713606237cd4ce459aa'),
(81, '729337747', 'بمدينة الرياض حي البديعة', 'for_sale', '4', 2300000, '250', 'دورين 4 غرف ومجلس ومقلط ومطبخ داخلي وخارجي 5 دورات مياه وحوش وكراج للسيارة', '26.352917847529756,43.97205440276814', 'طريق الملك خالد, حي الربوة, بريدة, محافظة بريدة, منطقة القصيم, 52382, السعودية', 'pending', '', '', '', '', '', '', '22CD20D5-B688-462F-AB5E-E4C46AF1CBC3.jpg,2E2AC088-2D82-4B3E-9D48-98A2EF99EBD3.jpg,FA36BE8F-A320-45CC-B915-AE1134AB48FD.jpg,B979C2EC-8362-4DBA-A1C8-19B80CD29E04.jpg', '2023-08-24 00:55:16', 'de2917740a73f713606237cd4ce459aa'),
(82, '9142346500', 'السعودية ينبع البحر', 'for_invest', '9', 1200000, '1000', 'شاليه للاستثمار باطلالة مباشرة على البحر الاحمر ، حوض سباحة ، دورين ، 4 غرف ودورتين مياه وصالة ومطبخ', '21.4858,39.1925', 'شارع مصعب بن عمير, ينبع, محافظة ينبع, منطقة المدينة المنورة, السعودية', 'pending', '', '', '', '', '', '', '7E9251B3-3300-45AB-A52F-AD0E3A984078.jpg', '2023-08-24 14:26:00', 'de2917740a73f713606237cd4ce459aa'),
(83, '3030178544', 'السعودية المنطقة الشرقية شاطئ نصف القمر', 'for_rent', '9', 1950, '550', 'شاليه للايجار اليومي .. باطلالة مباشرة على البحر الاحمر ، حوض سباحة ، دورين ، 4 غرف ودورتين مياه وصالة ومطبخ', '21.4858,39.1925', 'محافظة بقيق, المنطقة الشرقية, السعودية', 'pending', '', '', '', '', '', '', 'DB92451E-B101-4B22-9943-7D94D9995A91.jpg', '2023-08-24 14:31:33', 'de2917740a73f713606237cd4ce459aa'),
(84, '5472513260', 'مصنع للبيع', 'for_sale', '12', 1500000, '5000', 'مصنع خرسانة جاهزة بكامل معداته ، مواصفات مدن الصناعية', '24.63891600000001,46.71601039999999', 'البراقية, الفوطة, الرياض, المالز, محافظة الرياض, منطقة الرياض, 11131, السعودية', 'pending', '', '', '', '', '', '', 'AAE22BB7-2AB6-4985-BA2C-54C214C7DCFA.jpg', '2023-08-24 14:55:27', 'de2917740a73f713606237cd4ce459aa'),
(85, '2930980337', 'مصنع للبيع', 'for_sale', '12', 1500000, '5000', 'مصنع تمور جاهزة بكامل معداته ', '17.263462283319402,42.5445295225365', 'محافظة صبياء, منطقة جازان, السعودية', 'pending', '', '', '', '', '', '', 'CAF96F9F-3619-4253-84D6-330D4104B682.jpg', '2023-08-24 14:58:02', 'de2917740a73f713606237cd4ce459aa'),
(86, '2395259879', 'السعودية الخبر', 'for_sale', '3', 600000, '180', 'غرفتين ومجلس وصالة ودورتين مياه', '21.4858,39.1925', 'الخبر, محافظة الخبر, المنطقة الشرقية, 34447, السعودية', 'pending', '', '', '', '', '', '', '3CB672C4-D174-4CB8-82D5-389CB51EAB72.jpg', '2023-08-25 08:57:51', 'de2917740a73f713606237cd4ce459aa'),
(87, '9616329201', 'حفر الباطن', 'for_invest', '5', 1000000, '10000', 'ارض على الدائري الرئيسي', '28.28768087415465,46.03683554426875', 'محافظة حفر الباطن, المنطقة الشرقية, السعودية', 'pending', '', '', '', '', '', '', 'B7729FC2-68B2-471C-8F0A-064DC602AC85.jpg', '2023-08-25 11:54:02', 'de2917740a73f713606237cd4ce459aa'),
(88, '8362750328', 'الرياض', 'for_rent', '7', 120000, '100', 'مكيفة مركزي', '23.54411429695687,45.50938678880711', 'الرين, محافظة الرين, منطقة الرياض, السعودية', 'pending', '', '', '', '', '', '', 'F0EE6E53-E351-42B4-B9E6-17C15B58AC75.jpg', '2023-08-25 11:57:57', 'de2917740a73f713606237cd4ce459aa'),
(89, '1598776883', 'المنطقة الشرقية محافظة الدمام', 'for_rent', '10', 1200, '500', 'مجالس ملاعب ترفيهية مسبح', '26.30343524112926,50.170719093537414', 'مجمع الظهران, Radisson Blu Access Lane, مجمع الظهران السكني, محافظة الخبر, المنطقة الشرقية, 34457, السعودية', 'pending', '', '', '', '', '', '', 'D04D1657-6B70-4FCD-AA60-B71A24932A1B.jpg', '2023-08-25 12:12:13', 'de2917740a73f713606237cd4ce459aa'),
(90, '2701475206', 'المنطقة الشرقية محافظة الدمام', 'for_rent', '11', 120000, '1500', 'مصرحة من مدن', '26.464576522925793,50.014224865676965', 'محافظة القطيف, المنطقة الشرقية, 31483, السعودية', 'pending', '', '', '', '', '', '', '79272CE0-D6DD-465F-BF75-B1F085997C95.jpg', '2023-08-25 12:14:42', 'de2917740a73f713606237cd4ce459aa'),
(95, '9096098286', 'الطائف حي السرور', 'for_sale', '4', 2300000, '250', 'دورين 4 غرف ومجلس ومقلط ومطبخ داخلي وخارجي 5 دورات مياه وحوش وكراج للسيارة', '21.4858,39.1925', 'السرور, الطائف, محافظة الطائف, منطقة مكة المكرمة, 26523, السعودية', 'pending', '', '', '', '', '', '', 'ECCBC719-5AD2-40CE-B739-E98A78431298.jpg,DA396745-8A30-4D17-82E2-4B3B1CF7DCD6.jpg,8B7CD584-48DE-465C-983E-A3FEF6566C9F.jpg', '2023-08-31 04:00:13', 'de2917740a73f713606237cd4ce459aa'),
(96, '9500304750', 'السعودية جدة', 'for_sale', '5', 22500, '25000', 'مباشر على شاطئ البحر الاحمر', '21.530224241732185,39.15807308745334', 'الحمراء, جدة, محافظة جدة, منطقة مكة المكرمة, 22315, السعودية', 'pending', '', '', '', '', '', '', '6828C749-CDF0-41E3-BD90-29AC7435B23B.jpg,50975CC4-CBE8-4346-8DED-294E3506D0BA.jpg', '2023-09-01 06:44:45', 'de2917740a73f713606237cd4ce459aa'),
(97, '1967157577', 'السعودية المدينة الصناعية الثالثة', 'for_ki', '12', 2500000, '3000', 'مصنع تغليف كرتون بكامل معداته', '25.81547911164506,49.57975421524046', 'محافظة بقيق, المنطقة الشرقية, السعودية', 'pending', '', '', '', '', '', '', 'ACA1E1B6-3807-46E6-A4B7-BA40F0FADF5C.jpg', '2023-09-01 07:25:44', 'de2917740a73f713606237cd4ce459aa'),
(98, '3672708654', 'اختبار التطبيق', 'for_invest', '1', 2147483647, '189654', 'وصف العقار', '21.4858,39.1925', 'بلدية عرقة, محافظة الرياض, منطقة الرياض, 13751, السعودية', 'pending', '', '', '', '', '', '', '5DEADA5F-E5EF-4B33-8644-F01936D11EC0.jpg,6122D8C5-96FD-4117-8120-62148C6A3841.jpg,50A93EB2-0690-4140-BEE0-7A435A525564.jpg', '2023-09-02 09:11:59', '5b4da54f2cf549b475dc8bdea431e8fa'),
(99, '7307354145', 'ارض ', 'for_rent', '5', 980000, '٥٠٠', 'ارض', '26.21864312198885,49.98153393571662', 'محافظة الدمام, المنطقة الشرقية, 34325, السعودية', 'pending', '', '', '', '', '', '', '', '2023-10-09 09:31:34', 'c221cebd3233f35e92d47036de2f097f'),
(100, '6666340546', 'ارض ', 'for_sale', '3', 980000, '٥٠٠', 'ارض', '26.21864312198885,49.98153393571662', 'محافظة الدمام, المنطقة الشرقية, 34325, السعودية', 'pending', '', '', '', '', '', '', '', '2023-10-09 09:38:12', 'c221cebd3233f35e92d47036de2f097f'),
(101, '5254604307', 'تجريبي ', 'for_invest', '3', 26589, '2688', 'Uhff uhdd igfdv\n', '21.56769985269804,39.548306073993444', 'محافظة الجموم, منطقة مكة المكرمة, 10928, السعودية', 'pending', '', '', '', '', '', '', '72519dd3-407a-4f90-945b-bb8102ec78a5.jpeg', '2023-10-14 07:36:56', 'b1c98df9cc84449bb66ce2bf6ee0a1f0'),
(102, '3386262280', 'Test', 'for_rent', '3', 3688, '1500', 'Tetd test\n', '21.541541554423695,39.42278942093253', 'محافظة بحرة, منطقة مكة المكرمة, السعودية', 'pending', '', '', '', '', '', '', '7889d79e-0e27-4b0a-87c9-6531b925032a.jpeg', '2023-10-14 07:42:04', 'b1c98df9cc84449bb66ce2bf6ee0a1f0'),
(103, '4199398936', 'Test', 'for_sale', '3', 268, '500', 'Test', '21.4858,39.1925', '', 'pending', '', '', '', '', '', '', 'f5dc5e3b-93af-4df8-81bd-8d386bcb3df7.jpeg', '2023-10-14 07:46:29', 'b1c98df9cc84449bb66ce2bf6ee0a1f0'),
(104, '9917770659', 'Test', 'for_sale', '3', 268, '500', 'Test', '21.4858,39.1925', '', 'pending', '', '', '', '', '', '', 'f5dc5e3b-93af-4df8-81bd-8d386bcb3df7.jpeg', '2023-10-14 07:47:53', 'b1c98df9cc84449bb66ce2bf6ee0a1f0'),
(105, '164819479', 'الرياض', 'for_ki', '7', 700000, '70', 'على شارع صلاح الدين - حي الملز - بالقرب من ملعب كرة القدم - يوجد به تكييف 4 طن - مؤثث بالكامل - رخصة البلدية سارة الى اخر هذه السنة الهجرية - واجهة زجاجية', '24.699454500000034,46.75536249999996', 'ابن إسماعيل التغلبي, الربوة, الرياض, المالز, محافظة الرياض, منطقة الرياض, 12821, السعودية', 'pending', '', '', '', '', '', '', '8612EFF8-D10A-4313-A70A-B5270148E62C.jpg', '2023-10-19 21:52:49', 'de2917740a73f713606237cd4ce459aa'),
(106, '5742259883', 'عقار تجريبي ', 'for_sale', '3', 5000, '1580', 'وصغ العقار ', '21.40389804724473,39.737769942730665', 'محافظة مكة المكرمة, منطقة مكة المكرمة, السعودية', 'pending', '', '', '', '', '', '', '162e6ee3-e4a2-4b87-ac06-14dbe02ecf23.jpeg', '2023-10-21 11:56:07', '83efc5a7a48d76da13507436bb42a21b'),
(107, '6504543337', 'G', 'for_sale', '4', 5, '500', 'F', '21.4858,39.1925', '', 'pending', '', '', '', '', '', '', '', '2023-10-21 12:13:32', 'f0c7f0a17d202cee71679f3ba928e6de'),
(108, '3704032287', 'تجريبي ', 'for_rent', '3', 565, '500', 'تجريبي ', '21.76710122610949,39.48267778381705', 'محافظة الجموم, منطقة مكة المكرمة, 10928, السعودية', 'pending', '', '', '', '', '', '', '59f8405b-1912-47f2-8a96-cbaf0357927b.jpeg', '2023-10-21 12:30:11', '355ce14cf69ba03a1890e83033eed502');

-- --------------------------------------------------------

--
-- Table structure for table `props`
--

CREATE TABLE `props` (
  `prop_id` int(11) NOT NULL,
  `prop_type` text NOT NULL,
  `prop_coords` text NOT NULL,
  `prop_price` text NOT NULL,
  `prop_space` text NOT NULL,
  `prop_desc` text NOT NULL,
  `prop_front` text NOT NULL,
  `prop_age` text NOT NULL,
  `street_width` text NOT NULL,
  `street_count` text NOT NULL,
  `floor_count` text NOT NULL,
  `floor_num` text NOT NULL,
  `duplex` text NOT NULL,
  `room_count` text NOT NULL,
  `hall_count` text NOT NULL,
  `bath_count` text NOT NULL,
  `female` text NOT NULL,
  `female_kitchen` text NOT NULL,
  `two_entrance` text NOT NULL,
  `water` text NOT NULL,
  `saintitation` text NOT NULL,
  `mobile_network` text NOT NULL,
  `electricity` text NOT NULL,
  `garden` text NOT NULL,
  `attatchments` text NOT NULL,
  `basment` text NOT NULL,
  `elevator` text NOT NULL,
  `maid_room` text NOT NULL,
  `garage` text NOT NULL,
  `air_condition` text NOT NULL,
  `private_roof` text NOT NULL,
  `swimming_pool` text NOT NULL,
  `adv_type` text NOT NULL,
  `user_token` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `report_id` int(11) NOT NULL,
  `prop_id` text NOT NULL,
  `user_token` text NOT NULL,
  `date_created` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`report_id`, `prop_id`, `user_token`, `date_created`) VALUES
(1, '23', 'dd24fefe87e7e7e48398ffd8f8d13aee', '2023-08-04 06:14:18'),
(2, '23', 'dd24fefe87e7e7e48398ffd8f8d13aee', '2023-08-04 06:14:43'),
(3, '23', 'dd24fefe87e7e7e48398ffd8f8d13aee', '2023-08-04 06:15:42'),
(4, '23', 'dd24fefe87e7e7e48398ffd8f8d13aee', '2023-08-04 06:26:04'),
(5, '23', 'dd24fefe87e7e7e48398ffd8f8d13aee', '2023-08-04 06:26:07'),
(6, '23', 'dd24fefe87e7e7e48398ffd8f8d13aee', '2023-08-04 08:40:57'),
(7, '98', 'b1c98df9cc84449bb66ce2bf6ee0a1f0', '2023-09-05 17:07:35'),
(8, '98', 'b1c98df9cc84449bb66ce2bf6ee0a1f0', '2023-09-05 17:07:36');

-- --------------------------------------------------------

--
-- Table structure for table `search_for_me`
--

CREATE TABLE `search_for_me` (
  `req_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `email` text NOT NULL,
  `phone_number` text NOT NULL,
  `req_type` text NOT NULL,
  `realstate_type` text NOT NULL,
  `state` text NOT NULL,
  `city` text NOT NULL,
  `price_type` text NOT NULL,
  `min_price` text NOT NULL,
  `max_price` text NOT NULL,
  `min_space` text NOT NULL,
  `max_space` text NOT NULL,
  `req_desc` text NOT NULL,
  `contact_options` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `search_for_me`
--

INSERT INTO `search_for_me` (`req_id`, `user_name`, `email`, `phone_number`, `req_type`, `realstate_type`, `state`, `city`, `price_type`, `min_price`, `max_price`, `min_space`, `max_space`, `req_desc`, `contact_options`, `date_created`) VALUES
(1, 'محمود جمال ', 'mahmoud.elshwaiukh@gmail.com', '01063634580', 'rent', '3', 'القصيم', '', '', '', '', '', '', 'تحربة ', '', '2023-10-14 10:08:33'),
(2, 'محمود جمال ', 'mahmoud.elshwaiukh@gmail.com', '01063634580', 'buy', '3', 'مكة المكرمة', '', '', '', '', '', '', 'تحربية', '', '2023-10-14 10:11:42'),
(3, 'Mahmoud ', 'mahmoud.ukh@gmail.com', '269826989', 'buy', '3', 'الرياض', 'الدحو', 'open', '0', '0', '500', '1500', 'Tesr', '', '2023-10-21 06:16:28'),
(4, 'Test', 'mahwaiukh@gmail.com', '2388869', 'buy', '3', 'الرياض', 'الحمراء', 'open', '0', '0', '200', '255800', 'Test', '', '2023-10-21 06:19:00'),
(5, 'Test', 'mahwaiukh@gmail.com', '2388869', 'buy', '3', 'الرياض', 'الحمراء', 'open', '0', '0', '200', '255800', 'Test', '', '2023-10-21 06:20:20'),
(6, 'Test', 'mahwaiukh@gmail.com', '2388869', 'buy', '3', 'الرياض', 'الحمراء', 'open', '0', '0', '200', '255800', 'Test', '', '2023-10-21 06:26:02'),
(7, 'Test', 'mahwaiukh@gmail.com', '2388869', 'buy', '3', 'الرياض', 'الحمراء', 'open', '0', '0', '200', '255800', 'Test', '', '2023-10-21 06:31:45'),
(8, 'mahmoud', 'test@test.com', '686869', 'rent', '3', 'جدة', '1', 'fixed', '200', '500', '1', '10000', '', '', '2023-10-21 06:35:11'),
(9, 'mahmoud', 'test@test.com', '686869', 'rent', '3', 'جدة', '1', 'fixed', '200', '500', '1', '10000', '', '', '2023-10-21 06:36:22'),
(10, 'Test', 'mahwaiukh@gmail.com', '2388869', 'buy', '3', 'الرياض', 'الحمراء', 'open', '0', '0', '200', '255800', 'Test', '', '2023-10-21 06:36:34'),
(11, 'Test', 'mahmoud.elshwaiukh@gmail.com', '5654898', 'buy', '3', 'مكة المكرمة', 'تجبةر ', 'fixed', '2688', '5544448', '100', '1258', 'Testgc\n', '', '2023-10-21 06:46:28'),
(12, 'Test', 'Amah@yhh.kh', '238458', 'buy', '3', 'مكة المكرمة', 'تجبةر ', 'fixed', '2658', '855589', '5', '125800', 'Figesdrt\nJht', '', '2023-10-21 06:49:28'),
(13, 'Mhgf', 'Fghvc', '56645', 'buy', '3', 'مكة المكرمة', 'تجبةر ', 'fixed', '50', '5588', '2558', '89088', 'Chhfd', '', '2023-10-21 07:14:08'),
(14, 'Chg', 'mahmoud.elshwaiukh@gmail.com', '565556', 'buy', '3', 'القصيم', 'لا يوجد مدن حاليا', 'open', '0', '0', '25', '588', 'Rttt', '', '2023-10-21 07:15:26'),
(15, 'Mhgff', 'mag@hhj.mn', '2656876665', 'buy', '3', 'الرياض', 'الحمراء', 'fixed', '20', '2588', '26', '899888', 'Test', '', '2023-10-21 07:18:38'),
(16, 'Test', 'Fhgf', '56845', 'buy', '3', 'مكة المكرمة', 'تجبةر ', 'fixed', '28', '858', '5688', '8588', 'Test', '', '2023-10-21 09:03:11'),
(17, 'Gufd', 'K HD sz', '65482', 'buy', '3', 'الرياض', 'الحمراء', 'fixed', '2688', '354555', '2586', '865888', 'Test', '', '2023-10-21 10:14:28'),
(18, 'Test665', 'mahmoud.elshwaiukh@gmail.cwdr', '5645588', 'buy', '4', 'مكة المكرمة', 'تجبةر ', 'open', '0', '0', '56', '555', 'Gydd', '', '2023-10-21 10:16:54'),
(19, 'Thff', 'Fhffh', '5656868', 'buy', '3', 'الرياض', 'الحمراء', 'fixed', '1500', '2888888', '25', '8888', 'Test', '', '2023-10-21 11:21:20'),
(20, 'Test', 'Fhcf', '98455', 'buy', '3', 'المنطقة الشرقية', 'لا يوجد مدن حاليا', 'fixed', '2', '8', '5', '8', 'Tyg', '', '2023-10-21 11:23:02'),
(21, 'Mahwaiuk ', 'mahmoud.elshwaiukh@gmail.com', '2684268', 'buy', '4', 'الرياض', 'الحمراء', 'fixed', '250', '500', '150', '250', 'وصف تجريبي', '', '2023-10-21 11:53:54'),
(22, 'Test', 'mahmoud.elshwaiukh@gmail.com', '5655', 'buy', '3', 'الرياض', 'الحمراء', 'fixed', '555', '55547', '8888', '8555', 'اعلبب', '', '2023-10-22 13:27:42'),
(23, 'محمود', 'mahmoud.elshwaiukh@gmail.com', '56566', 'buy', '3', 'الرياض', 'الحمراء', 'fixed', '58', '88', '55', '8574', 'Tedg', '', '2023-10-22 13:28:50');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `key_val` text NOT NULL,
  `value_ar` text NOT NULL,
  `value_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key_val`, `value_ar`, `value_en`) VALUES
(1, 'facebook', 'https://www.facebook.com/', 'https://www.facebook.com/'),
(2, 'instagram', '', 'https://www.instagram.com/'),
(3, 'twitter', 'https://www.instagram.com/', 'https://www.instagram.com/'),
(4, 'linkedin', 'https://www.instagram.com/', 'https://www.instagram.com/'),
(5, 'privacy_policy', 'سياسة الخصوصية', 'Privacy Policy'),
(6, 'terms', 'شروط الإعلان في تطبيق عقاراتك', 'Add Terms'),
(7, 'app_name', 'تطبيق عقارتك', 'Zawya App'),
(8, 'home_page_title', 'عنوان الصفحة الرئيسية', 'HomePage Title'),
(9, 'primary_email', 'aqartech@gmail.com', 'zawyaapp@gmail.com'),
(10, 'terms', 'شروط الإعلان في تطبيق عقاراتك', 'Advertising Terms'),
(11, 'policy', 'سياسة الإستخدام و الخصوصية ', 'Privacy Policy');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `state_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `thumbnail` text NOT NULL,
  `coords` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_id`, `name`, `thumbnail`, `coords`, `date_created`) VALUES
(1, 'الرياض', '', '24.73251237781378, 46.76582632675258', '2023-08-13 16:32:49'),
(2, 'مكة المكرمة', '', '24.73251237781378, 46.76582632675258', '2023-08-13 16:32:49'),
(3, 'القصيم', '', '26.21903641520102, 43.68710513734219', '2023-08-13 16:32:49'),
(4, 'المنطقة الشرقية', '', '23.242134096356214, 51.29363033789013', '2023-08-13 16:32:49'),
(5, 'عسير', '', '19.69283437427762, 42.95435958926389', '2023-08-13 16:32:49'),
(6, 'تبوك', '', '28.3835079, 36.5661908', '2023-08-13 16:32:49'),
(7, 'حائل', '', '27.546958079348848, 41.70165706254459', '2023-08-13 16:32:49'),
(8, 'الحدود الشمالية', '', '31.0582873293921, 41.36331479460866', '2023-08-13 16:32:49'),
(9, 'جازان', '', '16.911933343145154, 42.57678819815819', '2023-08-13 16:32:49'),
(10, 'نجران', '', '17.537818583124597, 44.215868559238494', '2023-08-13 16:32:49'),
(11, 'الباحة', '', '20.020538099609595, 41.463906962519204', '2023-08-13 16:32:49'),
(12, 'الجوف', '', '30.130399568558687, 39.50171622206888', '2023-08-13 16:32:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_token` text NOT NULL,
  `user_name` text NOT NULL,
  `user_email` text NOT NULL,
  `user_phone` text NOT NULL,
  `user_pwd` text NOT NULL,
  `user_status` text NOT NULL,
  `user_image` text NOT NULL,
  `user_type` text NOT NULL,
  `notification_token` text NOT NULL,
  `last_otp` text NOT NULL,
  `date_registered` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_token`, `user_name`, `user_email`, `user_phone`, `user_pwd`, `user_status`, `user_image`, `user_type`, `notification_token`, `last_otp`, `date_registered`) VALUES
(40, '393d3675d41d0e949a85aaab852bb8cf', 'Mahmoud gamal ', 'mahmoud.elshwaiukh@gmail.com', '01063634580', '', '', '', '', 'ExponentPushToken[C-cEbVCk59GA6GCNYBrjid]', '123456', '0000-00-00 00:00:00'),
(41, '9db3db2a3f4fab3136e9d412be1a5bf9', 'mahwaiuk', 'mmhg@hh.khg', '26842684', '', '', '', '', '', '123456', '0000-00-00 00:00:00'),
(42, 'db05c34aaffadbf59497cb323a1b6d46', 'محمود جمال', 'mahmoud.elshwaiukh@gmail.net', '92929292', '', '', '', '', '', '123456', '0000-00-00 00:00:00'),
(43, '324b1cf854fd2c39fff38d06f981d700', 'Tyerthh', 'mahmoud.elshwaiuhhffkh@gmail.com', '5384258888', '', '', '', '', 'ury', '123456', '0000-00-00 00:00:00'),
(44, 'ea2e77c684750c070cc474aae9ff9313', 'Mahwaiukgfs', 'mafgg@mo.com', '230919997', '', '', '', '', '', '123456', '0000-00-00 00:00:00'),
(45, '83efc5a7a48d76da13507436bb42a21b', 'Mahwaiuk ghgg', 'Majkh@jhff.bjj', '564284625', '', '', '', '', 'ExponentPushToken[iUggBJDCPbOzjm1kxQcY4S]', '123456', '0000-00-00 00:00:00'),
(46, '8201bcdb5a427b81c9a28720ec29d0a6', 'Tu gsrygh', 'testnot@test.com', '147258369', '', '', '', '', 'ExponentPushToken[n6IdHjImDdG4EEpVyIRpGH]', '123456', '0000-00-00 00:00:00'),
(47, 'f0c7f0a17d202cee71679f3ba928e6de', 'Om ', 'hamziya@gmail.com', '503813736', '', '', '', '', 'null', '123456', '0000-00-00 00:00:00'),
(48, '355ce14cf69ba03a1890e83033eed502', 'محمود جمال', 'elshwaiukh_1111@yahoo.com', '268555425', '', '', '', '', 'ExponentPushToken[iUggBJDCPbOzjm1kxQcY4S]', '123456', '0000-00-00 00:00:00'),
(49, '3b344cdaf0c55903339108747f33dda7', 'BnnnnnkGo', 'hamziyaa@gmail.com', '0503813736', '', '', '', '', 'null', '123456', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `cat_inputs`
--
ALTER TABLE `cat_inputs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`conversation_id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favourite`
--
ALTER TABLE `favourite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inputs`
--
ALTER TABLE `inputs`
  ADD PRIMARY KEY (`input_id`);

--
-- Indexes for table `input_values`
--
ALTER TABLE `input_values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`prop_id`);

--
-- Indexes for table `props`
--
ALTER TABLE `props`
  ADD PRIMARY KEY (`prop_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `search_for_me`
--
ALTER TABLE `search_for_me`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `cat_inputs`
--
ALTER TABLE `cat_inputs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `conversation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `favourite`
--
ALTER TABLE `favourite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `inputs`
--
ALTER TABLE `inputs`
  MODIFY `input_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `input_values`
--
ALTER TABLE `input_values`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `prop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `props`
--
ALTER TABLE `props`
  MODIFY `prop_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `search_for_me`
--
ALTER TABLE `search_for_me`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
