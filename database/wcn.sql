-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 02, 2021 at 01:20 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wcn`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 'Kabiru is a village boy', '<p>Oluokun kabiru is a <b>boy in there village</b><br></p>\n', '2021-07-23 06:08:25', '2021-07-23 06:08:25'),
(2, 1, 'Adesiina is here with me and update', '<p>Yest its nice to be wwith you dear good<br><p></p><p>yes here</p><p><img style=\"width: 450px;\" data-filename=\"qrcode_attack.png\" src=\"/uploads/blogs/Adesiina_is_here_with_me_and_update_1627156811_0.png\"><br></p><p>haghsg ashfjkhaf asfhjkash vsdjfhsd vas dfhasroewur9quweo&nbsp;&nbsp;&nbsp; i&nbsp;&nbsp;&nbsp; p[wep[120-4923492741&nbsp;&nbsp;&nbsp; y41391270938120409217498235v23 75373471710920-430101=-3910401 vIIOEU247234792419I31PO2IO310309120924791274892 VY3245Y827491803491093-=1-=03-=3P[[K LKAS Ka: AOUIOAUEWU8W WI QWOU939479W71271480912840301249172&nbsp; <br></p><p></p><p></p><p></p><p></p><p></p><p></p></p>\n', '2021-07-23 06:16:34', '2021-07-24 19:00:11'),
(6, 1, 'hello world kabiru yes', '<p>Good motning here Good motning here Good motning here Good motning here  <p>Good motning here Good motning here Good motning here Good motning here  </p><p>Good motning here Good motning here Good motning here Good motning here  </p><p>Good motning here Good motning here Good motning here Good motning here  </p><p>Good motning here Good motning here Good motning here Good motning here  </p><p>Good motning here Good motning here Good motning here Good motning here  </p><p>Good motning here Good motning here Good motning here Good motning here  </p><p>Good motning here Good motning here Good motning here Good motning here  </p><p><img style=\"width: 25%;\" data-filename=\"29956704.jpg\" src=\"/uploads/blogs/hello_world_kabiru_1627152275_0.png\"><br></p><p></p><p></p><p></p><p></p></p>\n', '2021-07-23 08:59:11', '2021-07-24 17:44:51'),
(8, 1, 'Testing notification', '<p>let test notification<p>let test notification <br></p><p>let test notification <br></p><p>let test notification <br></p><p>let test notification <br></p><p>let test notification <br></p><p>let test notification <br></p><p>let test notification <br></p><p>let test notification <br></p><p>let test notification <br></p><p>let test notification <br></p><p> </p></p>\n', '2021-08-02 09:48:37', '2021-08-02 09:48:37');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `user_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(2, 1, 'image is good', '<h3 class=\"widget-title\">Our address of yours<br><p>Lorem ipsum dolor sit amet, \r\nconsectetur adipisicing elit. Modi perspiciatis magnam, ab ipsa \r\nlaboriosam tempore tenetur, aliquid repellat, ex cum dicta reiciendis \r\naccusamus. Omnis repudiandae quasi mollitia, iusto odio dignissimos.</p></h3>\n', '2021-07-26 21:38:42', '2021-07-26 21:38:42'),
(3, 1, 'The night less code', '<p>                    \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge <p>                    \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge </p><p>                    \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge </p><p>                    \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge </p></p>\n', '2021-07-26 21:43:50', '2021-07-26 21:43:50'),
(4, 1, 'basic code algo', '<p>                    \r\n                                        \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge <p>                    \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge </p><p>                    \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge </p></p>\n', '2021-07-26 21:45:11', '2021-07-26 21:45:11');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `blog_id`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 6, 'Nice one sapa<br>', 0, '2021-07-23 19:37:55', '2021-07-23 19:37:55'),
(3, 2, 6, '<p>Yes it goo <b>ggh<b> hghh hjhgh jgjhgjh</b></b></p><p><b><b>gfgf jghgjh&nbsp; gjjhgh ghg gg<br></b></b><br></p>', 0, '2021-07-23 20:04:04', '2021-07-23 20:04:04'),
(4, 1, 6, '<p>yes its good <br></p>', 0, '2021-07-24 03:55:51', '2021-07-24 03:55:51'),
(5, 1, 6, '<p>Admin comment<br></p>', 0, '2021-07-24 04:17:31', '2021-07-24 04:17:31'),
(6, 1, 2, '<p>Awa coment nibi ooo<br></p>', 0, '2021-07-24 04:48:30', '2021-07-24 04:48:30');

-- --------------------------------------------------------

--
-- Table structure for table `configurations`
--

CREATE TABLE `configurations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configurations`
--

INSERT INTO `configurations` (`id`, `name`, `phone`, `email`, `address`, `facebook`, `twitter`, `linkedin`, `youtube`, `instagram`, `whatsapp`, `created_at`, `updated_at`) VALUES
(1, 'wcn', 'linkedin.com', 'oka@vboy.com', 'No 4, sabo street jpw <br>', 'facebook.com', 'twitter.com', 'linkedin.com', 'youtube.com', 'instagram.com', 'whatsapp.com', '2021-07-28 17:09:13', '2021-07-28 17:09:13');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `user_id`, `title`, `content`, `date`, `created_at`, `updated_at`) VALUES
(4, 1, 'hello world kabiru yes', '<p>Good&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fans <p>Good&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fans </p><p>Good&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fans </p><p>Good&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning \r\nfansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; \r\nmorning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; \r\nmorning fans Good&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning \r\nfansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fans </p><p>Good&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning \r\nfansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; \r\nmorning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; \r\nmorning fans Good&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning \r\nfansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fans </p><p>Good&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning \r\nfansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; \r\nmorning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; \r\nmorning fans Good&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning \r\nfansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fans <img style=\"width: 25%;\" data-filename=\"koadit_cbt_00002.png\" src=\"/uploads/events/hello_world_kabiru_yes_1627187668_0.png\"></p><p>Good&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning \r\nfansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; \r\nmorning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; \r\nmorning fans Good&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning \r\nfansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fans </p><p>Good&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning \r\nfansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; \r\nmorning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; \r\nmorning fans Good&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning \r\nfansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fans </p><p>Good&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning \r\nfansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; \r\nmorning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; \r\nmorning fans Good&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning \r\nfansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fans <img style=\"width: 25%;\" data-filename=\"koadit_cbt_00017.png\" src=\"/uploads/events/hello_world_kabiru_yes_1627187668_1.png\"><br></p><p>Good&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning \r\nfansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; \r\nmorning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; \r\nmorning fans Good&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning \r\nfansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fans </p><p>Good&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning \r\nfansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; \r\nmorning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; \r\nmorning fans Good&Acirc;&nbsp; morning fans Good&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning \r\nfansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fansGood&Acirc;&nbsp; morning fans <img style=\"width: 25%;\" src=\"http://127.0.0.1:8000/uploads/media/1/oluokun-kabiru.png\"><a href=\"http://127.0.0.1:8000/uploads/media/1/oluokun-kabiru.pnghttp://127.0.0.1:8000/uploads/media/1/oluokun-kabiru.png\" target=\"_blank\">http://127.0.0.1:8000/uploads/media/1/oluokun-kabiru.pnghttp://127.0.0.1:8000/uploads/media/1/oluokun-kabiru.png</a></p><p><a href=\"http://127.0.0.1:8000/uploads/media/1/oluokun-kabiru.png\" target=\"_blank\">the image use</a><br></p></p>\n', '2021-07-10', '2021-07-25 03:34:28', '2021-07-25 04:22:56'),
(5, 1, 'village boy is hunter', '<div style=\"color: #d4d4d4;background-color: #1e1e1e;font-family: \'Droid Sans Mono\', \'monospace\', monospace, \'Droid Sans Fallback\';font-weight: normal;font-size: 14px;line-height: 19px;white-space: pre;\"><div><span style=\"color: #9cdcfe;\">latestevent</span></div><div><span style=\"color: #9cdcfe;\"><br></span></div><div><span style=\"color: #9cdcfe;\"><br></span></div><div><span style=\"color: #9cdcfe;\">aklhdkla hkdkals lsd kasm asdasdas</span></div><div><span style=\"color: #9cdcfe;\">adnajkdh ajsdhah </span></div><div><span style=\"color: #9cdcfe;\"><span style=\"color: rgb(0, 0, 0);\"><span style=\"background-color: rgb(255, 255, 255);\">admda damsda</span></span></span></div><div><span style=\"color: #9cdcfe;\"><span style=\"color: rgb(0, 0, 0);\"><span style=\"background-color: rgb(255, 255, 255);\">akdnakdnjad ad jahdjashdjahd<br></span></span><br></span></div></div>\n', '2021-07-07', '2021-07-26 22:33:26', '2021-07-26 22:33:26');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `media_id` bigint(20) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `user_id`, `media_id`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 0, '2021-07-25 05:39:23', '2021-07-25 05:39:23'),
(3, 1, 1, 0, '2021-07-25 05:45:16', '2021-07-25 05:45:16'),
(4, 1, 1, 1, '2021-07-25 05:51:22', '2021-07-26 11:04:47'),
(5, 1, 1, 1, '2021-07-25 05:57:36', '2021-07-26 11:01:05'),
(7, 1, 1, 1, '2021-07-26 11:05:02', '2021-07-26 11:05:02'),
(8, 1, 1, 1, '2021-07-26 11:05:03', '2021-07-26 11:05:03'),
(9, 1, 1, 1, '2021-07-26 11:05:04', '2021-07-26 11:05:04'),
(10, 3, 1, 1, '2021-07-27 10:39:57', '2021-07-27 10:39:57'),
(11, 3, 1, 1, '2021-07-27 10:39:58', '2021-07-27 10:39:58'),
(12, 1, 1, 1, '2021-08-02 10:15:19', '2021-08-02 10:15:19'),
(13, 1, 1, 1, '2021-08-02 10:15:50', '2021-08-02 10:15:50');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(2, 'App\\Models\\User', 2, '7c08a817-6daf-478d-8c1c-10a9041d740a', 'avatar', '29956704', 'village-boy-adesina.png', 'image/jpeg', 'uploads', 'uploads', 1176168, '[]', '[]', '{\"avatar\":true}', '{\"avatar\":{\"urls\":[\"village-boy-adesina___avatar_37_50.jpg\"],\"base64svg\":\"data:image\\/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMzcgNTAiPgoJPGltYWdlIHdpZHRoPSIzNyIgaGVpZ2h0PSI1MCIgeGxpbms6aHJlZj0iZGF0YTppbWFnZS9qcGVnO2Jhc2U2NCwvOWovNEFBUVNrWkpSZ0FCQVFFQVlBQmdBQUQvL2dBN1ExSkZRVlJQVWpvZ1oyUXRhbkJsWnlCMk1TNHdJQ2gxYzJsdVp5QkpTa2NnU2xCRlJ5QjJOaklwTENCeGRXRnNhWFI1SUQwZ09UQUsvOXNBUXdBREFnSURBZ0lEQXdNREJBTURCQVVJQlFVRUJBVUtCd2NHQ0F3S0RBd0xDZ3NMRFE0U0VBME9FUTRMQ3hBV0VCRVRGQlVWRlF3UEZ4Z1dGQmdTRkJVVS85c0FRd0VEQkFRRkJBVUpCUVVKRkEwTERSUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVLzhBQUVRZ0FLd0FnQXdFUkFBSVJBUU1SQWYvRUFCOEFBQUVGQVFFQkFRRUJBQUFBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUUFBSUJBd01DQkFNRkJRUUVBQUFCZlFFQ0F3QUVFUVVTSVRGQkJoTlJZUWNpY1JReWdaR2hDQ05Dc2NFVlV0SHdKRE5pY29JSkNoWVhHQmthSlNZbktDa3FORFUyTnpnNU9rTkVSVVpIU0VsS1UxUlZWbGRZV1ZwalpHVm1aMmhwYW5OMGRYWjNlSGw2ZzRTRmhvZUlpWXFTazVTVmxwZVltWnFpbzZTbHBxZW9xYXF5czdTMXRyZTR1YnJDdzhURnhzZkl5Y3JTMDlUVjF0ZlkyZHJoNHVQazVlYm42T25xOGZMejlQWDI5L2o1K3YvRUFCOEJBQU1CQVFFQkFRRUJBUUVBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUkFBSUJBZ1FFQXdRSEJRUUVBQUVDZHdBQkFnTVJCQVVoTVFZU1FWRUhZWEVUSWpLQkNCUkNrYUd4d1Frak0xTHdGV0p5MFFvV0pEVGhKZkVYR0JrYUppY29LU28xTmpjNE9UcERSRVZHUjBoSlNsTlVWVlpYV0ZsYVkyUmxabWRvYVdwemRIVjJkM2g1ZW9LRGhJV0doNGlKaXBLVGxKV1dsNWlabXFLanBLV21wNmlwcXJLenRMVzJ0N2k1dXNMRHhNWEd4OGpKeXRMVDFOWFcxOWpaMnVMajVPWG01K2pwNnZMejlQWDI5L2o1K3YvYUFBd0RBUUFDRVFNUkFEOEErL3A0TndyOHVhUHBVeXFsdDg5Y2pqZG15ZWg4eC90d2dSK0NjZXRldGdvTlN1Y2xhVjBmbjk0V3VaN1M3TWtVWmNnOWhYMk5DbzRhbmpWTEg3WU1BYStIYVBjVFBFdmpiOFpwZkFaRnRZUmViZE4wQXJwdytGOXJMVUpTYVdoOGEvSFQ0M2ExNHowbjdGcWRzWTF6d2E5Mm5oWTAzb2NGU1VyYW81ajRKYUpwK29USDdWc3dmNzFldlJnbWVCaWFyVFAxTmZVbDJubXZoV2ZYSStWZmorclA0b2puVmR3OTY5YkRSbEZYWjEwVXBIenA4VTlOYTkweWFabFhDakl4WHB4Yk1zUlRqWm56alovRUMvOEFETjVJc0VqSmc0NHIwWU54Ujh6VW9SbXo5bS9DTjEvYnVvTEdUbE85Zko0T2o3V29qM0swdVNKeUg3U25naTEvc3BiaTBLck9veVIzcjZ5cFFqR0tPUENWNWM5ajVaMHZ3VmRlTGI4YWRLRHRjNHdhd3BKT1ZqdHhjcEtGem12aXArd3pyS2o3VnBkcXo3aGs3UlhxU3BxeDgvQ2J1ZW4rRy8ybnA5QTFCV3RSNWlrODE4N2dvK3cxa2U5WHBPcjhKc2E5OFlkUitKT3B4UkprQjhBcm11K3BWZFoyaUtsUmpobHpTUFVmaHo4TmwwM1VMYlViNlZZd2NNQWE2YU9IY1h6TTgvRVkyTlgzRWZTdWwzbW1YMXFJbE1jb1FZNXhYWmU1dzhqaXJzL0hIUWVHejNyNXVUUHI2YVBWL2hSSy93RHdrY2Z6SGcxNldEU2JQR3pKdEkrcU5jdkoxc2JIRXJEanNhOTNvZk13K0pHZHBldjZqYk5JSXJ5Vk9leHJ6NmZ4TTk3RWZCRS8vOWs9Ij4KCTwvaW1hZ2U+Cjwvc3ZnPg==\"}}', 2, '2021-07-23 20:03:09', '2021-07-23 20:03:11'),
(4, 'App\\Models\\File', 2, '3ce2f3ae-987e-4dc4-b360-5beb88d12af8', 'gallery', 'koadit_cbt_00008', 'koadit_cbt_00008.png', 'image/png', 'uploads', 'uploads', 136048, '[]', '[]', '[]', '[]', 4, '2021-07-25 05:39:23', '2021-07-25 05:39:23'),
(5, 'App\\Models\\File', 3, 'ce2b4064-3593-4047-84e9-369741d37132', 'gallery', 'koadit_cbt_00007', 'koadit_cbt_00007.png', 'image/png', 'uploads', 'uploads', 546336, '[]', '[]', '[]', '[]', 5, '2021-07-25 05:45:16', '2021-07-25 05:45:16'),
(6, 'App\\Models\\File', 4, '732e8b9c-b61a-4130-8cd0-e192b294771a', 'gallery', 'koadit_cbt_00008', 'koadit_cbt_00008.png', 'image/png', 'uploads', 'uploads', 136048, '[]', '[]', '[]', '[]', 6, '2021-07-25 05:51:22', '2021-07-25 05:51:22'),
(7, 'App\\Models\\File', 5, '27fc0366-634c-4a56-a0ec-df7233b9ab3e', 'gallery', 'koadit_cbt_00007', 'koadit_cbt_00007.png', 'image/png', 'uploads', 'uploads', 546336, '[]', '[]', '[]', '[]', 7, '2021-07-25 05:57:36', '2021-07-25 05:57:36'),
(9, 'App\\Models\\File', 7, 'dade82dc-d881-4a90-ab59-62e265bb7831', 'gallery', 'koadit_cbt_00005', 'koadit_cbt_00005.png', 'image/png', 'uploads', 'uploads', 131450, '[]', '[]', '[]', '[]', 8, '2021-07-26 11:05:03', '2021-07-26 11:05:03'),
(10, 'App\\Models\\File', 8, '73aa484b-1c4d-480f-99a6-f24885fb3e91', 'gallery', 'koadit_cbt_00006', 'koadit_cbt_00006.png', 'image/png', 'uploads', 'uploads', 147613, '[]', '[]', '[]', '[]', 9, '2021-07-26 11:05:03', '2021-07-26 11:05:03'),
(11, 'App\\Models\\File', 9, '901bda63-4c1e-455b-8b41-b910c7143cea', 'gallery', 'koadit_cbt_00007', 'koadit_cbt_00007.png', 'image/png', 'uploads', 'uploads', 546336, '[]', '[]', '[]', '[]', 10, '2021-07-26 11:05:04', '2021-07-26 11:05:04'),
(15, 'App\\Models\\Book', 2, '2b720c9e-a010-4aa8-b6d4-3f960de8cbd3', 'books', 'oic', 'oic.png', 'image/png', 'uploads', 'uploads', 12873, '[]', '[]', '[]', '[]', 11, '2021-07-26 21:38:43', '2021-07-26 21:38:43'),
(16, 'App\\Models\\Book', 3, '3690e396-a82b-41b9-b0fc-99534b46926a', 'books', 'koadit', 'koadit.jpg', 'image/jpeg', 'uploads', 'uploads', 1176168, '[]', '[]', '[]', '[]', 12, '2021-07-26 21:43:50', '2021-07-26 21:43:50'),
(17, 'App\\Models\\Book', 4, '3ad32b52-a945-440b-b062-a4df7a4c32a9', 'books', 'qrcode_attack', 'qrcode_attack.png', 'image/png', 'uploads', 'uploads', 799, '[]', '[]', '[]', '[]', 13, '2021-07-26 21:45:11', '2021-07-26 21:45:11'),
(21, 'App\\Models\\User', 1, '2d896253-2d2b-4876-9f94-425c2db3ab44', 'avatar', 'koadit_cbt_00000', 'koadit_cbt_00000.png', 'image/png', 'uploads', 'uploads', 535531, '[]', '[]', '{\"avatar\":true}', '{\"avatar\":{\"urls\":[\"koadit_cbt_00000___avatar_50_27.jpg\"],\"base64svg\":\"data:image\\/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNTAgMjciPgoJPGltYWdlIHdpZHRoPSI1MCIgaGVpZ2h0PSIyNyIgeGxpbms6aHJlZj0iZGF0YTppbWFnZS9qcGVnO2Jhc2U2NCwvOWovNEFBUVNrWkpSZ0FCQVFFQVlBQmdBQUQvL2dBN1ExSkZRVlJQVWpvZ1oyUXRhbkJsWnlCMk1TNHdJQ2gxYzJsdVp5QkpTa2NnU2xCRlJ5QjJOaklwTENCeGRXRnNhWFI1SUQwZ09UQUsvOXNBUXdBREFnSURBZ0lEQXdNREJBTURCQVVJQlFVRUJBVUtCd2NHQ0F3S0RBd0xDZ3NMRFE0U0VBME9FUTRMQ3hBV0VCRVRGQlVWRlF3UEZ4Z1dGQmdTRkJVVS85c0FRd0VEQkFRRkJBVUpCUVVKRkEwTERSUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVLzhBQUVRZ0FFUUFnQXdFUkFBSVJBUU1SQWYvRUFCOEFBQUVGQVFFQkFRRUJBQUFBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUUFBSUJBd01DQkFNRkJRUUVBQUFCZlFFQ0F3QUVFUVVTSVRGQkJoTlJZUWNpY1JReWdaR2hDQ05Dc2NFVlV0SHdKRE5pY29JSkNoWVhHQmthSlNZbktDa3FORFUyTnpnNU9rTkVSVVpIU0VsS1UxUlZWbGRZV1ZwalpHVm1aMmhwYW5OMGRYWjNlSGw2ZzRTRmhvZUlpWXFTazVTVmxwZVltWnFpbzZTbHBxZW9xYXF5czdTMXRyZTR1YnJDdzhURnhzZkl5Y3JTMDlUVjF0ZlkyZHJoNHVQazVlYm42T25xOGZMejlQWDI5L2o1K3YvRUFCOEJBQU1CQVFFQkFRRUJBUUVBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUkFBSUJBZ1FFQXdRSEJRUUVBQUVDZHdBQkFnTVJCQVVoTVFZU1FWRUhZWEVUSWpLQkNCUkNrYUd4d1Frak0xTHdGV0p5MFFvV0pEVGhKZkVYR0JrYUppY29LU28xTmpjNE9UcERSRVZHUjBoSlNsTlVWVlpYV0ZsYVkyUmxabWRvYVdwemRIVjJkM2g1ZW9LRGhJV0doNGlKaXBLVGxKV1dsNWlabXFLanBLV21wNmlwcXJLenRMVzJ0N2k1dXNMRHhNWEd4OGpKeXRMVDFOWFcxOWpaMnVMajVPWG01K2pwNnZMejlQWDI5L2o1K3YvYUFBd0RBUUFDRVFNUkFEOEErbmZpMW9VdXNlQ3Iwd0tRd2pQRmQzMWlLTVZUa2ZCZmhxOGswSFZOUml1d3lNck50NHI2V2g3T3JCSHlHTmhVaFV1bVhkTCtLbmlmU1YxSzRzUzdKRXBLakZlSm1OR25CKzZlOWxzNmtvZThkdjhBc3MvdE9lSU5jOFRYTnY0Z0RKQ3BJQllZcmdwWU4xNDZIUmlNY3NOSlhQckhYL2lUbzk5cDkxRGEzU1NxNmtBQTE1YnFLTzU3Tk9qS3BzZkxtdC9ES1hVN3k4djR3REZrc2NDdlF3K0tiVm9tV0t3VVlheVBRUGdSNEMwSFY5TXZSZndvVkdReFlWTmVxNVM5NWswYUtpclJSUHJ2dzA4TjZYZFNycEZxc0JZOHlvTVZ6UE0zVDBpYmYyS3E2NXBubi9oZjdzbGNGYzlEQ2JucHVsLzhpMWZmOWN6WFZnOWk4eDNSRjhGZitRSnFmKythckVuTGh0MGJOeC94NVNmV3ZHbjhKOUZUK00vLzJRPT0iPgoJPC9pbWFnZT4KPC9zdmc+\"}}', 14, '2021-07-27 08:17:00', '2021-07-27 08:17:01'),
(22, 'App\\Models\\File', 10, '0805e567-81d8-4d2f-a2e6-67f20537d184', 'gallery', 'koadit_cbt_00000', 'koadit_cbt_00000.png', 'image/png', 'uploads', 'uploads', 535531, '[]', '[]', '[]', '[]', 15, '2021-07-27 10:39:58', '2021-07-27 10:39:58'),
(23, 'App\\Models\\File', 11, 'f7a64655-9361-43c6-aab4-f032895f9eef', 'gallery', 'qrcode_attack', 'qrcode_attack.png', 'image/png', 'uploads', 'uploads', 799, '[]', '[]', '[]', '[]', 16, '2021-07-27 10:39:58', '2021-07-27 10:39:58'),
(26, 'App\\Models\\Configuration', 1, 'a34315c9-2ca9-4237-8da6-7fb349af6622', 'logo', 'computer-based-test', 'computer-based-test.jpeg', 'image/jpeg', 'uploads', 'uploads', 75654, '[]', '[]', '[]', '[]', 17, '2021-07-28 17:09:13', '2021-07-28 17:09:13'),
(27, 'App\\Models\\User', 4, '3607e41e-1c11-49b5-84f5-ba92dff33217', 'avatar', 'village boy logo', 'Omo-Oko.png', 'image/jpeg', 'uploads', 'uploads', 18565, '[]', '[]', '{\"avatar\":true}', '{\"avatar\":{\"urls\":[\"Omo-Oko___avatar_50_49.jpg\"],\"base64svg\":\"data:image\\/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNTAgNDkiPgoJPGltYWdlIHdpZHRoPSI1MCIgaGVpZ2h0PSI0OSIgeGxpbms6aHJlZj0iZGF0YTppbWFnZS9qcGVnO2Jhc2U2NCwvOWovNEFBUVNrWkpSZ0FCQVFFQVlBQmdBQUQvL2dBN1ExSkZRVlJQVWpvZ1oyUXRhbkJsWnlCMk1TNHdJQ2gxYzJsdVp5QkpTa2NnU2xCRlJ5QjJOaklwTENCeGRXRnNhWFI1SUQwZ09UQUsvOXNBUXdBREFnSURBZ0lEQXdNREJBTURCQVVJQlFVRUJBVUtCd2NHQ0F3S0RBd0xDZ3NMRFE0U0VBME9FUTRMQ3hBV0VCRVRGQlVWRlF3UEZ4Z1dGQmdTRkJVVS85c0FRd0VEQkFRRkJBVUpCUVVKRkEwTERSUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVLzhBQUVRZ0FId0FnQXdFUkFBSVJBUU1SQWYvRUFCOEFBQUVGQVFFQkFRRUJBQUFBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUUFBSUJBd01DQkFNRkJRUUVBQUFCZlFFQ0F3QUVFUVVTSVRGQkJoTlJZUWNpY1JReWdaR2hDQ05Dc2NFVlV0SHdKRE5pY29JSkNoWVhHQmthSlNZbktDa3FORFUyTnpnNU9rTkVSVVpIU0VsS1UxUlZWbGRZV1ZwalpHVm1aMmhwYW5OMGRYWjNlSGw2ZzRTRmhvZUlpWXFTazVTVmxwZVltWnFpbzZTbHBxZW9xYXF5czdTMXRyZTR1YnJDdzhURnhzZkl5Y3JTMDlUVjF0ZlkyZHJoNHVQazVlYm42T25xOGZMejlQWDI5L2o1K3YvRUFCOEJBQU1CQVFFQkFRRUJBUUVBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUkFBSUJBZ1FFQXdRSEJRUUVBQUVDZHdBQkFnTVJCQVVoTVFZU1FWRUhZWEVUSWpLQkNCUkNrYUd4d1Frak0xTHdGV0p5MFFvV0pEVGhKZkVYR0JrYUppY29LU28xTmpjNE9UcERSRVZHUjBoSlNsTlVWVlpYV0ZsYVkyUmxabWRvYVdwemRIVjJkM2g1ZW9LRGhJV0doNGlKaXBLVGxKV1dsNWlabXFLanBLV21wNmlwcXJLenRMVzJ0N2k1dXNMRHhNWEd4OGpKeXRMVDFOWFcxOWpaMnVMajVPWG01K2pwNnZMejlQWDI5L2o1K3YvYUFBd0RBUUFDRVFNUkFEOEE4alQrMlBFT3VUNG1ZUng4a2V0ZFVhbGpCSzVsYTFQck03VFFSeHVpb09HeDFwdDNORWVhcWZGTnhxalFCWkdqTFkzQVZueWFYS3VNMWVEeFI0UDhRV3BlWjJpa0dlblNzYlhHZW02SjRqMUNYVlprdGlzYUhxeHJybEJSTVVkbFozY1VVVWd2TGxHSkhKckpsWE1hMXRrMUM2bU5qZFJJVTVHZTlPMm1vempQRW5pQzhsMW1LenY0MGxaVGhYRmF3cHA2b0d6RThJK05OQ3RmRURXMnBYRFJobXh3YXljbXgyUFN0ZThWZUZMQlZpaTNTaHhrUG1vNVc5U2JGRFNiM3cvZHlzWWpKRHhrc0R4V210Z3NjRHFXbzJkNzR0QzI4alNoVGpKcnFwS1VVUzJqelB4ZjRDdmwxNldSSlZVZzVCelhFbWJHcHBOaHFVNlJRWFVnY0x3R3pUVStVVmp2ZnNzOFdtQzJ0TnFPd3d6azgxMDAvZTFabXlQd240RXUvd0MyWTVHZENTY2s1cnE1a2xZeDF1Zi8yUT09Ij4KCTwvaW1hZ2U+Cjwvc3ZnPg==\"}}', 18, '2021-08-01 14:45:29', '2021-08-01 14:45:32'),
(28, 'App\\Models\\User', 5, '84698446-d77b-48c6-9ba9-3770d59893fe', 'avatar', 'village boy logo', 'Omo-Oko.png', 'image/jpeg', 'uploads', 'uploads', 18565, '[]', '[]', '{\"avatar\":true}', '{\"avatar\":{\"urls\":[\"Omo-Oko___avatar_50_49.jpg\"],\"base64svg\":\"data:image\\/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNTAgNDkiPgoJPGltYWdlIHdpZHRoPSI1MCIgaGVpZ2h0PSI0OSIgeGxpbms6aHJlZj0iZGF0YTppbWFnZS9qcGVnO2Jhc2U2NCwvOWovNEFBUVNrWkpSZ0FCQVFFQVlBQmdBQUQvL2dBN1ExSkZRVlJQVWpvZ1oyUXRhbkJsWnlCMk1TNHdJQ2gxYzJsdVp5QkpTa2NnU2xCRlJ5QjJOaklwTENCeGRXRnNhWFI1SUQwZ09UQUsvOXNBUXdBREFnSURBZ0lEQXdNREJBTURCQVVJQlFVRUJBVUtCd2NHQ0F3S0RBd0xDZ3NMRFE0U0VBME9FUTRMQ3hBV0VCRVRGQlVWRlF3UEZ4Z1dGQmdTRkJVVS85c0FRd0VEQkFRRkJBVUpCUVVKRkEwTERSUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVLzhBQUVRZ0FId0FnQXdFUkFBSVJBUU1SQWYvRUFCOEFBQUVGQVFFQkFRRUJBQUFBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUUFBSUJBd01DQkFNRkJRUUVBQUFCZlFFQ0F3QUVFUVVTSVRGQkJoTlJZUWNpY1JReWdaR2hDQ05Dc2NFVlV0SHdKRE5pY29JSkNoWVhHQmthSlNZbktDa3FORFUyTnpnNU9rTkVSVVpIU0VsS1UxUlZWbGRZV1ZwalpHVm1aMmhwYW5OMGRYWjNlSGw2ZzRTRmhvZUlpWXFTazVTVmxwZVltWnFpbzZTbHBxZW9xYXF5czdTMXRyZTR1YnJDdzhURnhzZkl5Y3JTMDlUVjF0ZlkyZHJoNHVQazVlYm42T25xOGZMejlQWDI5L2o1K3YvRUFCOEJBQU1CQVFFQkFRRUJBUUVBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUkFBSUJBZ1FFQXdRSEJRUUVBQUVDZHdBQkFnTVJCQVVoTVFZU1FWRUhZWEVUSWpLQkNCUkNrYUd4d1Frak0xTHdGV0p5MFFvV0pEVGhKZkVYR0JrYUppY29LU28xTmpjNE9UcERSRVZHUjBoSlNsTlVWVlpYV0ZsYVkyUmxabWRvYVdwemRIVjJkM2g1ZW9LRGhJV0doNGlKaXBLVGxKV1dsNWlabXFLanBLV21wNmlwcXJLenRMVzJ0N2k1dXNMRHhNWEd4OGpKeXRMVDFOWFcxOWpaMnVMajVPWG01K2pwNnZMejlQWDI5L2o1K3YvYUFBd0RBUUFDRVFNUkFEOEE4alQrMlBFT3VUNG1ZUng4a2V0ZFVhbGpCSzVsYTFQck03VFFSeHVpb09HeDFwdDNORWVhcWZGTnhxalFCWkdqTFkzQVZueWFYS3VNMWVEeFI0UDhRV3BlWjJpa0dlblNzYlhHZW02SjRqMUNYVlprdGlzYUhxeHJybEJSTVVkbFozY1VVVWd2TGxHSkhKckpsWE1hMXRrMUM2bU5qZFJJVTVHZTlPMm1vempQRW5pQzhsMW1LenY0MGxaVGhYRmF3cHA2b0d6RThJK05OQ3RmRURXMnBYRFJobXh3YXljbXgyUFN0ZThWZUZMQlZpaTNTaHhrUG1vNVc5U2JGRFNiM3cvZHlzWWpKRHhrc0R4V210Z3NjRHFXbzJkNzR0QzI4alNoVGpKcnFwS1VVUzJqelB4ZjRDdmwxNldSSlZVZzVCelhFbWJHcHBOaHFVNlJRWFVnY0x3R3pUVStVVmp2ZnNzOFdtQzJ0TnFPd3d6azgxMDAvZTFabXlQd240RXUvd0MyWTVHZENTY2s1cnE1a2xZeDF1Zi8yUT09Ij4KCTwvaW1hZ2U+Cjwvc3ZnPg==\"}}', 19, '2021-08-01 14:53:23', '2021-08-01 14:53:24'),
(29, 'App\\Models\\User', 6, '0773ef3f-8bf7-46b9-b0c7-14d9b5beb55c', 'avatar', '2', 'village-boy-the-coder.png', 'image/jpeg', 'uploads', 'uploads', 88601, '[]', '[]', '{\"avatar\":true}', '{\"avatar\":{\"urls\":[\"village-boy-the-coder___avatar_50_33.jpg\"],\"base64svg\":\"data:image\\/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNTAgMzMiPgoJPGltYWdlIHdpZHRoPSI1MCIgaGVpZ2h0PSIzMyIgeGxpbms6aHJlZj0iZGF0YTppbWFnZS9qcGVnO2Jhc2U2NCwvOWovNEFBUVNrWkpSZ0FCQVFFQVlBQmdBQUQvL2dBN1ExSkZRVlJQVWpvZ1oyUXRhbkJsWnlCMk1TNHdJQ2gxYzJsdVp5QkpTa2NnU2xCRlJ5QjJOaklwTENCeGRXRnNhWFI1SUQwZ09UQUsvOXNBUXdBREFnSURBZ0lEQXdNREJBTURCQVVJQlFVRUJBVUtCd2NHQ0F3S0RBd0xDZ3NMRFE0U0VBME9FUTRMQ3hBV0VCRVRGQlVWRlF3UEZ4Z1dGQmdTRkJVVS85c0FRd0VEQkFRRkJBVUpCUVVKRkEwTERSUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVLzhBQUVRZ0FGUUFnQXdFUkFBSVJBUU1SQWYvRUFCOEFBQUVGQVFFQkFRRUJBQUFBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUUFBSUJBd01DQkFNRkJRUUVBQUFCZlFFQ0F3QUVFUVVTSVRGQkJoTlJZUWNpY1JReWdaR2hDQ05Dc2NFVlV0SHdKRE5pY29JSkNoWVhHQmthSlNZbktDa3FORFUyTnpnNU9rTkVSVVpIU0VsS1UxUlZWbGRZV1ZwalpHVm1aMmhwYW5OMGRYWjNlSGw2ZzRTRmhvZUlpWXFTazVTVmxwZVltWnFpbzZTbHBxZW9xYXF5czdTMXRyZTR1YnJDdzhURnhzZkl5Y3JTMDlUVjF0ZlkyZHJoNHVQazVlYm42T25xOGZMejlQWDI5L2o1K3YvRUFCOEJBQU1CQVFFQkFRRUJBUUVBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUkFBSUJBZ1FFQXdRSEJRUUVBQUVDZHdBQkFnTVJCQVVoTVFZU1FWRUhZWEVUSWpLQkNCUkNrYUd4d1Frak0xTHdGV0p5MFFvV0pEVGhKZkVYR0JrYUppY29LU28xTmpjNE9UcERSRVZHUjBoSlNsTlVWVlpYV0ZsYVkyUmxabWRvYVdwemRIVjJkM2g1ZW9LRGhJV0doNGlKaXBLVGxKV1dsNWlabXFLanBLV21wNmlwcXJLenRMVzJ0N2k1dXNMRHhNWEd4OGpKeXRMVDFOWFcxOWpaMnVMajVPWG01K2pwNnZMejlQWDI5L2o1K3YvYUFBd0RBUUFDRVFNUkFEOEE2anhkNHBYdzc0c2hGbSsyRW5CTmZMNW5tenJZbjkyejBNRmx2TGgrYWExT3B1L0U4V3BXSXl3ZGl1VGl2QnExWlQxWnJHbW9hSTgyMXZ4cWRLbVkyK1VaVDNyYkNZcDBwOHlLeE5EbnAyTnp3RDhSYlB4SmRmWnRRbEViOWlUWDZybE9hZldJOHNqNVhGWlhVcFI5cEZhSFBlSmRQYlZOVkVVeDhwbC92VitUZlZYU1g3eGFuNjNVcVlkcGV5MVJ4SGlMeDhmQmVzeFdZbTNvM0I1b1dINW91elBJeGNJdFhpWE5adUlOUzBvM3pTQUZseUJYRkdENXVWSE5RZzVTU2tlWDZWZmFqZCtJQkhwNWJjRDFXdnNjcTlwQjJSN0dQZENsUnRJK3pQanA0TXNyU09TOGdMUXpBZFZyNlRNc0ZTcVUrWm8vT3N1eGxXTXVXK2g4ZmFyb3NldWE1dXVaR1prYmcxOFg3TlVhYjVUNmwxcFRxSk03dURRWWJ1MWh0V2RoSGpIRmVWaElLZFRVOVRIdjJGTlNnanN0UCtIK20rRnRKWFU3UUUzT001WVYrcllIQzA2ZE5UUzFQenpHWTZyWGx5U2VoLy9aIj4KCTwvaW1hZ2U+Cjwvc3ZnPg==\"}}', 20, '2021-08-02 10:10:33', '2021-08-02 10:10:36'),
(30, 'App\\Models\\User', 7, '68389ae5-4865-4e49-b370-06490f3f9ee7', 'avatar', '4', 'village-boy-the-coder.png', 'image/jpeg', 'uploads', 'uploads', 130101, '[]', '[]', '{\"avatar\":true}', '{\"avatar\":{\"urls\":[\"village-boy-the-coder___avatar_50_26.jpg\"],\"base64svg\":\"data:image\\/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNTAgMjYiPgoJPGltYWdlIHdpZHRoPSI1MCIgaGVpZ2h0PSIyNiIgeGxpbms6aHJlZj0iZGF0YTppbWFnZS9qcGVnO2Jhc2U2NCwvOWovNEFBUVNrWkpSZ0FCQVFFQVlBQmdBQUQvL2dBN1ExSkZRVlJQVWpvZ1oyUXRhbkJsWnlCMk1TNHdJQ2gxYzJsdVp5QkpTa2NnU2xCRlJ5QjJOaklwTENCeGRXRnNhWFI1SUQwZ09UQUsvOXNBUXdBREFnSURBZ0lEQXdNREJBTURCQVVJQlFVRUJBVUtCd2NHQ0F3S0RBd0xDZ3NMRFE0U0VBME9FUTRMQ3hBV0VCRVRGQlVWRlF3UEZ4Z1dGQmdTRkJVVS85c0FRd0VEQkFRRkJBVUpCUVVKRkEwTERSUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVLzhBQUVRZ0FFQUFlQXdFUkFBSVJBUU1SQWYvRUFCOEFBQUVGQVFFQkFRRUJBQUFBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUUFBSUJBd01DQkFNRkJRUUVBQUFCZlFFQ0F3QUVFUVVTSVRGQkJoTlJZUWNpY1JReWdaR2hDQ05Dc2NFVlV0SHdKRE5pY29JSkNoWVhHQmthSlNZbktDa3FORFUyTnpnNU9rTkVSVVpIU0VsS1UxUlZWbGRZV1ZwalpHVm1aMmhwYW5OMGRYWjNlSGw2ZzRTRmhvZUlpWXFTazVTVmxwZVltWnFpbzZTbHBxZW9xYXF5czdTMXRyZTR1YnJDdzhURnhzZkl5Y3JTMDlUVjF0ZlkyZHJoNHVQazVlYm42T25xOGZMejlQWDI5L2o1K3YvRUFCOEJBQU1CQVFFQkFRRUJBUUVBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUkFBSUJBZ1FFQXdRSEJRUUVBQUVDZHdBQkFnTVJCQVVoTVFZU1FWRUhZWEVUSWpLQkNCUkNrYUd4d1Frak0xTHdGV0p5MFFvV0pEVGhKZkVYR0JrYUppY29LU28xTmpjNE9UcERSRVZHUjBoSlNsTlVWVlpYV0ZsYVkyUmxabWRvYVdwemRIVjJkM2g1ZW9LRGhJV0doNGlKaXBLVGxKV1dsNWlabXFLanBLV21wNmlwcXJLenRMVzJ0N2k1dXNMRHhNWEd4OGpKeXRMVDFOWFcxOWpaMnVMajVPWG01K2pwNnZMejlQWDI5L2o1K3YvYUFBd0RBUUFDRVFNUkFEOEE2WDRoL0htemU4R24yRnFYbTZacjhod21GZE9uZExRL1FNWFc5cFBsYk9EMTYvdXRjMDVYR0lpT1NwTkY0ZTFTbWh3VlJVMzdGNkhRK0h2RytoNko0Vk5zWi84QVR1aEh2WHI4anhLY0xhSGtjMHNGTG1sMUttaytPN3QzbEVYeng5UWErUXpQS0tiYVBxY3V6T3ZOT3hnZU5vTk9oMWQ3eXp3c3hIQ212dnE5TGxpb1FQRnA0VG5tNVNPQnVyTHhQZGViS2pIWTMzUUR4WEVzT3B6V2g2czRyQ1VMcG1acFhnM3hMZVhPOW9pQVc1WW12WGhHTkxSSHlkV01zVks3UHAvNFpmRFMzT2pLYnhoNTJCbXNKWlRVeGo1cjZIczBNYkRCUjVVai85az0iPgoJPC9pbWFnZT4KPC9zdmc+\"}}', 21, '2021-08-02 10:11:53', '2021-08-02 10:11:54'),
(31, 'App\\Models\\File', 12, '312a3cca-e7c5-4aee-bb0b-93de04d078fd', 'gallery', '2', '2.jpg', 'image/jpeg', 'uploads', 'uploads', 88601, '[]', '[]', '[]', '[]', 22, '2021-08-02 10:15:19', '2021-08-02 10:15:19'),
(32, 'App\\Models\\File', 13, 'f3f692a5-1081-46a1-91cd-f1ee92e4027f', 'gallery', '5', '5.jpg', 'image/jpeg', 'uploads', 'uploads', 66512, '[]', '[]', '[]', '[]', 23, '2021-08-02 10:15:50', '2021-08-02 10:15:50'),
(33, 'App\\Models\\User', 8, '558c1265-96a9-42d4-b437-01b6d485c730', 'avatar', 'icon', 'Eyin-member-titun.png', 'image/jpeg', 'uploads', 'uploads', 282364, '[]', '[]', '{\"avatar\":true}', '{\"avatar\":{\"urls\":[\"Eyin-member-titun___avatar_50_50.jpg\"],\"base64svg\":\"data:image\\/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNTAgNTAiPgoJPGltYWdlIHdpZHRoPSI1MCIgaGVpZ2h0PSI1MCIgeGxpbms6aHJlZj0iZGF0YTppbWFnZS9qcGVnO2Jhc2U2NCwvOWovNEFBUVNrWkpSZ0FCQVFFQVlBQmdBQUQvL2dBN1ExSkZRVlJQVWpvZ1oyUXRhbkJsWnlCMk1TNHdJQ2gxYzJsdVp5QkpTa2NnU2xCRlJ5QjJOaklwTENCeGRXRnNhWFI1SUQwZ09UQUsvOXNBUXdBREFnSURBZ0lEQXdNREJBTURCQVVJQlFVRUJBVUtCd2NHQ0F3S0RBd0xDZ3NMRFE0U0VBME9FUTRMQ3hBV0VCRVRGQlVWRlF3UEZ4Z1dGQmdTRkJVVS85c0FRd0VEQkFRRkJBVUpCUVVKRkEwTERSUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVLzhBQUVRZ0FJQUFnQXdFUkFBSVJBUU1SQWYvRUFCOEFBQUVGQVFFQkFRRUJBQUFBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUUFBSUJBd01DQkFNRkJRUUVBQUFCZlFFQ0F3QUVFUVVTSVRGQkJoTlJZUWNpY1JReWdaR2hDQ05Dc2NFVlV0SHdKRE5pY29JSkNoWVhHQmthSlNZbktDa3FORFUyTnpnNU9rTkVSVVpIU0VsS1UxUlZWbGRZV1ZwalpHVm1aMmhwYW5OMGRYWjNlSGw2ZzRTRmhvZUlpWXFTazVTVmxwZVltWnFpbzZTbHBxZW9xYXF5czdTMXRyZTR1YnJDdzhURnhzZkl5Y3JTMDlUVjF0ZlkyZHJoNHVQazVlYm42T25xOGZMejlQWDI5L2o1K3YvRUFCOEJBQU1CQVFFQkFRRUJBUUVBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUkFBSUJBZ1FFQXdRSEJRUUVBQUVDZHdBQkFnTVJCQVVoTVFZU1FWRUhZWEVUSWpLQkNCUkNrYUd4d1Frak0xTHdGV0p5MFFvV0pEVGhKZkVYR0JrYUppY29LU28xTmpjNE9UcERSRVZHUjBoSlNsTlVWVlpYV0ZsYVkyUmxabWRvYVdwemRIVjJkM2g1ZW9LRGhJV0doNGlKaXBLVGxKV1dsNWlabXFLanBLV21wNmlwcXJLenRMVzJ0N2k1dXNMRHhNWEd4OGpKeXRMVDFOWFcxOWpaMnVMajVPWG01K2pwNnZMejlQWDI5L2o1K3YvYUFBd0RBUUFDRVFNUkFEOEE5YzhZL0VHeDBMVHpwdmhhRXpzM1ZrNXI4eHp2aU9uS0hzNHlzajdiQVpYS2svYVlnOHg4UmZFRHhmSHBtMlMxa1NBREo0cjR0WnZScndWS016N1RMYVdGNTNKN2t2d1MrS092djRsUlVqY1FidVNSWFRMTlhsdE82a2VYeERRcDFJM2hIVSsydEp1VjhYYWFJcEcyekVDdnRNaHp6KzBZOGplcCtWY2p3cytlU1BqM3dzWS9DdDhzTTBYbVRzY0hmeml2d3JPc0ppRTNHbzdXUDJuRXhqaTZmdEtiMFBUdGVsczd6dzNJV3Rra1lwOTBMWDUvaGxVaGlGNzFqd2FOS3BUcUpubTNoeVJOSTNPbG9JRzNkUU1WOVhpYjFyTG11ZlowNmNhMFBlUGZ2Z2xyVTJvNmp5U1Z4WDNuQkRuREY4dlErQTRsd1ZPbFQ1b25sZnhCK0dPdFJlSm51N2FMZkFUMVVkSy9RZUxjaGxOT3ZCR1dSWjNTVk5VYWpOVFFiVzZoalcybmpaaVJqQkZmelZpOEZXVlJxTVhjK3dsVnBTWE1tVzcvQU9HbXA2cktqV3NCRWJIbml2cE1yeVRHNGlOM0JuT3MzdzlEU1VqMkg0VWVBMjhJSjVsemdNUjFOZnMvRE9VU3l5ZnRjUXJId09mWm9zZDd0TSthdjJmL0FOcjZ6OFplRm5sMWtMSmNvTWtHdjJYRnlqSjhrMW9mRVVLVXJweGVwbzNYN1ovdy9zTlJrU2UzQ1RSbkJHSzhWOE9ZQ3JQMnJnajZKUEZLUEx6R0o0bi9BT0NqL2huUm9mSzB5MUROMEJ4WHIwOEJoNkN0R0tSeFN3OWFXclozL3dBSy93Qm8yNStMTm1zeUh5MVlaQUZmRzhSWmRXeGxMa3cwck01OFBQMkZTMVJILzlrPSI+Cgk8L2ltYWdlPgo8L3N2Zz4=\"}}', 24, '2021-08-02 10:17:02', '2021-08-02 10:17:04');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_19_015044_create_media_table', 1),
(7, '2021_07_19_134433_create_settings_table', 1),
(8, '2021_07_22_220540_create_blogs_table', 1),
(9, '2021_07_23_202402_create_comments_table', 2),
(10, '2021_07_24_201954_create_events_table', 3),
(12, '2021_07_19_025143_create_files_table', 4),
(13, '2021_07_26_140609_create_nuggets_table', 5),
(14, '2021_07_26_160352_create_books_table', 6),
(15, '2021_07_28_162455_create_configurations_table', 7),
(16, '2021_08_01_143518_create_notifications_table', 8),
(17, '2021_08_01_233755_create_testimonies_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('0388a478-bb8c-4073-9932-e8654b11dff9', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"name\":\"Testimony\",\"status\":\"Testimony approved\"}', '2021-08-02 09:20:14', '2021-08-02 00:32:36', '2021-08-02 09:20:14'),
('30321b94-f7b8-4a58-a7b7-537dbd5cbf0d', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"name\":\"Testimony\",\"status\":\"New testimony added\"}', NULL, '2021-08-01 23:38:14', '2021-08-01 23:38:14'),
('4915b6dd-1da7-4c52-b5fe-d83b2ece0243', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"name\":\"blog\",\"status\":\"activate \"}', '2021-08-01 17:42:46', '2021-08-01 17:14:02', '2021-08-01 17:42:46'),
('4ed74b98-bfff-4615-b283-254720ab17f1', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"name\":\"Testimony\",\"status\":\"New testimony added\"}', NULL, '2021-08-01 23:38:27', '2021-08-01 23:38:27'),
('6760435c-692b-4157-8d05-b6ac7e035720', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"name\":\"User\",\"status\":\"New member registered\"}', NULL, '2021-08-02 10:10:36', '2021-08-02 10:10:36'),
('69be7e50-77ed-422c-9ce3-9329a5efb744', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"name\":\"Testimony\",\"status\":\"You approved testimony\"}', NULL, '2021-08-02 00:32:36', '2021-08-02 00:32:36'),
('6b230738-c728-4c4d-b878-7acfeb5891b2', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 2, '{\"name\":\"Gallery\",\"status\":\"New photo added to gallery\"}', NULL, '2021-08-02 10:15:51', '2021-08-02 10:15:51'),
('73f8db28-c384-4157-9e97-2d6968b12a31', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 2, '{\"name\":\"Blog\",\"status\":\"New blog added\"}', NULL, '2021-08-02 09:48:37', '2021-08-02 09:48:37'),
('7c9d7b7d-8c43-43ac-8dfd-4c06bb641135', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"name\":\"User\",\"status\":\"New member registered\"}', NULL, '2021-08-02 10:17:04', '2021-08-02 10:17:04'),
('81774ec7-e83d-4449-b092-c3b249af9741', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 2, '{\"name\":\"comment\",\"status\":\"Comment activate \"}', NULL, '2021-08-02 10:03:53', '2021-08-02 10:03:53'),
('856d30c1-1ffb-42e7-a797-2b24fa0fef8d', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"name\":\"approved successfully\"}', '2021-08-01 17:02:15', '2021-08-01 15:24:15', '2021-08-01 17:02:15'),
('9381d6c6-54f3-4b1d-bd45-f1f62cb30e6c', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"name\":\"gallery\",\"status\":\"Gallery activate \"}', NULL, '2021-08-02 10:15:39', '2021-08-02 10:15:39'),
('9bdc8aab-b0d7-4573-be49-4e0bd9c4c2a5', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"name\":\"Testimony\",\"status\":\"Testimony deleted\"}', NULL, '2021-08-01 23:35:05', '2021-08-01 23:35:05'),
('aa7ab4d6-20b4-432b-9a2c-6868d6a73379', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"name\":\"Testimony\",\"status\":\"Testimony approved\"}', NULL, '2021-08-02 00:25:56', '2021-08-02 00:25:56'),
('ab057ac5-e5a6-4ae9-8e0b-a259e1754ff9', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"name\":\"blog\",\"status\":\"Blog deactivate \"}', '2021-08-01 17:42:46', '2021-08-01 17:28:10', '2021-08-01 17:42:46'),
('ae28ea2f-9f94-4d31-a235-815af4380ee2', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"name\":\"User\",\"status\":\"New member registered\"}', NULL, '2021-08-02 10:11:54', '2021-08-02 10:11:54'),
('b0875937-b12f-4611-aa8e-d2df376ea6a7', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"name\":\"Testimony\",\"status\":\"New testimony added\"}', NULL, '2021-08-01 22:47:55', '2021-08-01 22:47:55'),
('b250a319-221e-4523-bed9-6edf78e76583', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"name\":\"Gallery\",\"status\":\"New photo added to gallery\"}', NULL, '2021-08-02 10:15:51', '2021-08-02 10:15:51'),
('bb0094bb-582d-43de-8ee3-052963198b09', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 5, '{\"name\":\"approved successfully\"}', NULL, '2021-08-01 15:57:36', '2021-08-01 15:57:36'),
('bd425d56-8b02-4937-bb5a-6c4acc70b0df', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"name\":\"Testimony\",\"status\":\"You approved testimony\"}', '2021-08-02 09:17:03', '2021-08-02 00:37:01', '2021-08-02 09:17:03'),
('c111e429-9cbe-4f64-b164-2aff0a7ffbbd', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 2, '{\"name\":\"blog\",\"status\":\"Blog activate \"}', NULL, '2021-08-02 09:47:28', '2021-08-02 09:47:28'),
('c4693560-1b81-4338-b1fc-96af68d3973f', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 2, '{\"name\":\"Gallery\",\"status\":\"New photo added to gallery\"}', NULL, '2021-08-02 10:15:19', '2021-08-02 10:15:19'),
('c757e37c-2487-4032-a211-21a7076a6215', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"name\":\"Testimony\",\"status\":\"Testimony updated\"}', NULL, '2021-08-01 23:32:15', '2021-08-01 23:32:15'),
('d6ad8190-8b44-4c43-92d7-b539058d388e', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"name\":\"Testimony\",\"status\":\"Testimony approved\"}', '2021-08-02 09:17:10', '2021-08-02 00:37:01', '2021-08-02 09:17:10'),
('df73ab06-67ca-482e-a8d8-00ed6eb44c6b', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 2, '{\"name\":\"gallery\",\"status\":\"Gallery activate \"}', NULL, '2021-08-02 09:49:01', '2021-08-02 09:49:01'),
('eb709d8a-3df4-4849-841a-642ddd7c5418', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"name\":\"Testimony\",\"status\":\"You approved testimony\"}', NULL, '2021-08-02 00:25:56', '2021-08-02 00:25:56'),
('ff70947d-4870-4b67-929c-0afb72210669', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"name\":\"Testimony\",\"status\":\"New testimony added\"}', NULL, '2021-08-01 22:52:01', '2021-08-01 22:52:01');

-- --------------------------------------------------------

--
-- Table structure for table `nuggets`
--

CREATE TABLE `nuggets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qoute` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nuggets`
--

INSERT INTO `nuggets` (`id`, `qoute`, `user_id`, `created_at`, `updated_at`) VALUES
(3, '<p>We are here now We are here now We are here now We are here now We are here now <p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p></p>\n', 1, '2021-07-26 13:51:03', '2021-07-26 13:51:03'),
(4, '<p>We are here now We are here now We are here now We are here now We are here now <hr><p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p><p><img style=\"width: 25%;\" data-filename=\"koadit_cbt_00004.png\" src=\"/uploads/nuggets/oluokun_kabiru_1627311107_0.png\"><br></p><p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p><p><img style=\"width: 828px;\" data-filename=\"koadit_cbt_00012.png\" src=\"/uploads/nuggets/oluokun_kabiru_1627311107_1.png\"><br></p><p>We are here now We are here now We are here now We are here now We are here now </p></p>\n', 2, '2021-07-26 13:51:47', '2021-07-26 13:51:47'),
(5, '<p>ksh aksakfjhasj hjfasj hfkheio&nbsp;&nbsp;&nbsp; quwi9&nbsp;&nbsp;&nbsp; o iwueiou&nbsp;&nbsp;&nbsp; y&nbsp;&nbsp;&nbsp; twey7 ueu&nbsp;&nbsp;&nbsp; ui&nbsp; poqk w kviowe iwiofruiwe ajdajkfhuiw<p>kweihrwiru lq</p><p>Q</p><p>QJKHQWIRHWUR23I\\</p><p>W\'R</p><p>W29423UWI QW</p><p>&nbsp;LI Uye&nbsp;&nbsp;&nbsp; uiy7p0&nbsp;&nbsp;&nbsp; -o09wu HLK&nbsp; KL ISJAI</p><p>kijfrioura9ueq </p><p>JWKjoqEIU&nbsp;&nbsp;&nbsp; [1ququ<br></p></p>\n', 1, '2021-07-26 14:33:08', '2021-07-26 14:33:08'),
(6, '<p><a>\r\n                                </a><h5><a>\r\n                                    Village Boy Adesina Adesina<br></a></h5><a>\r\n                            </a><p>We are here now We are here now We are here now We are here now We are here now </p><hr><p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p><p></p></p>\n', 1, '2021-07-26 14:33:51', '2021-07-26 14:48:50');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `email_notification` int(11) NOT NULL,
  `blog_notification` int(11) NOT NULL,
  `nugget_notification` int(11) NOT NULL,
  `gallery_notification` int(11) NOT NULL,
  `book_notification` int(11) NOT NULL,
  `comment_notification` int(11) NOT NULL,
  `event_notification` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `user_id`, `email_notification`, `blog_notification`, `nugget_notification`, `gallery_notification`, `book_notification`, `comment_notification`, `event_notification`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0, 0, 1, 1, 1, 1, '2021-07-27 12:09:41', '2021-08-02 10:15:39'),
(5, 2, 0, 1, 0, 1, 0, 1, 0, '2021-08-01 14:45:32', '2021-08-02 10:03:53'),
(6, 5, 0, 0, 0, 0, 0, 0, 0, '2021-08-01 14:53:24', '2021-08-01 14:53:24'),
(7, 6, 0, 0, 0, 0, 0, 0, 0, '2021-08-02 10:10:36', '2021-08-02 10:10:36'),
(8, 7, 0, 0, 0, 0, 0, 0, 0, '2021-08-02 10:11:54', '2021-08-02 10:11:54'),
(9, 8, 0, 0, 0, 0, 0, 0, 0, '2021-08-02 10:17:04', '2021-08-02 10:17:04');

-- --------------------------------------------------------

--
-- Table structure for table `testimonies`
--

CREATE TABLE `testimonies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL,
  `testimony` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonies`
--

INSERT INTO `testimonies` (`id`, `user_id`, `status`, `testimony`, `created_at`, `updated_at`) VALUES
(1, 1, 0, '<p>Yes I made it in programming the stuffs<br></p>\n', '2021-08-01 22:47:55', '2021-08-01 22:47:55'),
(3, 1, 0, '<p>Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool</p>\n', '2021-08-01 23:38:14', '2021-08-01 23:38:14'),
(4, 1, 1, '<p>Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool</p>\n', '2021-08-01 23:38:27', '2021-08-02 00:37:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `born_again_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `role`, `status`, `born_again_status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `about`) VALUES
(1, 'oluokun kabirus', 'admin@vb.com', '28472472232', 'admin', 1, 'No', '2021-07-31 23:06:57', '$2y$10$CKq33VDqIaBtsrR4tV5P2.uVIyC7zuFtUe/FqbyQseZ3vgswrf5PK', NULL, '2021-07-27 08:17:00', '2021-08-02 09:18:23', NULL),
(2, 'village boy adesina', 'memeber1@vb.com', '99797877', 'member', 1, 'No', NULL, '$2y$10$PWemNbiv1C0LBk1ghvWMx.6993BzCrbu0R0I4n1REpBsK4CLKicou', NULL, '2021-07-23 20:03:09', '2021-08-01 15:34:05', NULL),
(5, 'Omo Oko', 'memeber2@vb.com', '374894792874', 'member', 1, 'No', '2021-08-01 14:54:56', '$2y$10$PKJHAAi1NOPEVe22AeBHyefyexpZWsxJeb2oa.J0OzgUAZVhZcnHu', NULL, '2021-08-01 14:53:23', '2021-08-01 15:57:52', NULL),
(6, 'village boy the coder', 'memeber3@vb.com', '92374897948', 'member', 0, 'No', NULL, '$2y$10$TwMnz8HivgiLHc9bz59hxOHwY6dkArDcoaZLbBsayQfOIPxOMjOz2', NULL, '2021-08-02 10:10:33', '2021-08-02 10:10:33', NULL),
(7, 'village boy the coder', 'memeber4@vb.com', '92374897943', 'member', 0, 'Yes', NULL, '$2y$10$5WTDgXzENrkdRLeeP5Rb0uQc4ApSFZD6.u2.aD0EgtG4S9B2EqMru', NULL, '2021-08-02 10:11:53', '2021-08-02 10:11:53', NULL),
(8, 'Eyin member titun', 'memeber5@vb.com', '189137182', 'member', 0, 'Yes', NULL, '$2y$10$wJUHrTijbgAwfaGJQ/sw6u/RAuI27DtQ57mcii.vtg5CytzhHWo6W', NULL, '2021-08-02 10:17:02', '2021-08-02 10:17:02', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configurations`
--
ALTER TABLE `configurations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `nuggets`
--
ALTER TABLE `nuggets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonies`
--
ALTER TABLE `testimonies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `configurations`
--
ALTER TABLE `configurations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `nuggets`
--
ALTER TABLE `nuggets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `testimonies`
--
ALTER TABLE `testimonies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
