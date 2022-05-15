-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 07, 2021 at 02:38 AM
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
(12, 1, 'Good morning everybody', 'Good morning everybody Good morning everybody Good morning everybody Good morning everybody<br>', '2021-09-06 01:22:33', '2021-09-06 01:22:33');

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
(4, 1, 'basic code algo', '<p>                    \r\n                                        \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge <p>                    \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge </p><p>                    \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge                     \r\n                    As we al know that cooding is a new languge </p></p>', '2021-09-06 01:11:46', '2021-09-06 01:11:46');

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
(5, 1, 6, '<p>Admin comment<br></p>', 0, '2021-07-24 04:17:31', '2021-07-24 04:17:31');

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
  `user_id` bigint(20) DEFAULT NULL,
  `youth_qoute` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youth_qoute1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_us` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conception` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vision` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mission` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `core_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pioneer_message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pioneer_message1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `configurations` (`id`, `name`, `phone`, `email`, `address`, `user_id`, `youth_qoute`, `youth_qoute1`, `about_us`, `conception`, `vision`, `mission`, `core_value`, `pioneer_message`, `pioneer_message1`, `facebook`, `twitter`, `linkedin`, `youtube`, `instagram`, `whatsapp`, `created_at`, `updated_at`) VALUES
(1, 'wcn', 'https://linkedin.com', 'oka@vboy.com', '<p>                    No 4, sabo street </p><p>Sapa street</p><p>Enugbe<br>\r\n                </p>', 1, '<p>\r\n                                If the youths have to\r\n                                become a better version of\r\n                                themselves or better still a\r\n                                splitting imaging of Jesus,\r\n                                for in his light can they truly\r\n                                discover themselves, we must\r\n                                begin to rid ourselves of the\r\n                                pessimistic phenomenon.\r\n\r\n                            </p>', 'We strongly believe no one <br>\r\n                values what is gotten cheaply <br>\r\n                and nothing becomes valuable <br>\r\n                not having gone through pain <br>\r\n                and hardship. Even a mad man <br>\r\n                wouldn’t throw stones at a tree <br>\r\n                without fruits. Discomfort is a <br>\r\n                pre-requisite for value. <br>', 'Word Central Global Network (WCN) is a vibrant youth\r\n              ministry dedicated <br> to liberating youths from the shackles\r\n              of perversion, transforming <br> them to be lights in a perverse\r\n              and crooked world, and releasing <br> them as guided missiles\r\n              to impact their world in the  market place;<br> campuses,\r\n              fellowships, Churches, families, etc.\r\n              Word Central Global<br> Network, as the name implies, firmly\r\n              believes in the efficacy of the Word<br> of God to transform\r\n              lives and we have seen this happen over the years. <br>', 'xc\r\n                                    dsdsdaskjklaj kajkljakljla<br>', '<p> To raise a crop of youths who would catch the fire of\r\n                      the Holy Ghost, come alive, be revived themselves,\r\n                      and then, begin to cause an unstoppable revival in our\r\n                      days towards seeing the continuity of the faith handed\r\n                      us by the fathers and an increase of the same through\r\n                      dedicated and calculated youth meetings, mentorship\r\n                      initiatives and discipleship programs.\r\n                    </p>', '<p> We help youths see the value heaven places on their soul,\r\n                      engage them in active service in God’s Kingdom, subject\r\n                      them to an environment of leadership and commission\r\n                      them to do the same at the appointed time thus producing\r\n                      men of purpose, focus, discipline, having themselves\r\n                      been products of the same.\r\n                    </p>', 'We believe all members of Word Central Global Network; <br>\r\n                    a. Must be born again, <br>\r\n                    b. Must have a desire to grow spiritually, <br>\r\n                    c. Must be willing to be trained and well-rounded <br>\r\n                    d. Must be dedicated and sacrificial (spiritually and\r\n                    financially), and otherwise <br>\r\n                    e. Must be ministry-oriented and vision driven <br>\r\n                    f. Must be acquiescent to leadership and strive to\r\n                    be one<br>\r\n                    g. Must be oriented towards consistent service\r\n                    over the years.', '<p>\r\n                       <strong> “WHAT YOU SEE YOU GET”</strong> <br>\r\n\r\n                There is a lot of noise about how useless, ungodly and\r\n                at some point, how lazy the youths are.\r\n                Each time I hear this, my heart bleeds simply because it\r\n                is an established fact that we immediately lose or begin\r\n                to lose our ability to help whatever we have concluded as\r\n                damaged and/or “useless”.\r\n                You have to see the good to get the good.\r\n                What you see you get!\r\n            </p>\r\n                 \r\n\r\n              <p class=\" quotes \" style=\"  text-align:justify;\">\r\n              If the youths have to become a better version of\r\n              themselves or better still a splitting image of Jesus for\r\n              in his light, can they truly discover themselves, we must\r\n              begin to rid ourselves of the pessimistic phenomenon. If\r\n              there is no glimmer of hope within\r\n              us, how can we produce in them\r\n              hope for their future. We cannot\r\n              give what we do not have.\r\n              </p>\r\n\r\n              <p class=\" quotes \" style=\"  text-align:justify;\">\r\n              I once said at a youth meeting\r\n              I had about 20 years ago\r\n              which I tagged “Youth\r\n              Expression” that\r\n              “…the strength of an\r\n              entire length of rope\r\n              is determined by its\r\n              weakest link… if we\r\n              continue to call the\r\n              <i type=\"text\" class=\"text text-warning\" data-toggle=\"modal\" data-target=\"#pioneerModal\">\r\n                Continue reading\r\n                 </i>\r\n              </p>\r\n          \r\n\r\n\r\n            <!-- The Modal -->\r\n      <div class=\"modal fade\" id=\"pioneerModal\">\r\n        <div class=\"modal-dialog modal-lg\">\r\n          <div class=\"modal-content\">\r\n\r\n            <!-- Modal Header -->\r\n            <div class=\"modal-header\">\r\n              <h4 class=\"modal-title\">Message from the Pioneer</h4>\r\n              <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>\r\n            </div>\r\n\r\n            <!-- Modal body -->\r\n            <div class=\"modal-body\">\r\n            <strong> “WHAT YOU SEE YOU GET”</strong>\r\n            <p>\r\n                There is a lot of noise about how useless, ungodly and\r\n                at some point, how lazy the youths are.\r\n                Each time I hear this, my heart bleeds simply because it\r\n                is an established fact that we immediately lose or begin\r\n                to lose our ability to help whatever we have concluded as\r\n                damaged and/or “useless”.\r\n                You have to see the good to get the good.\r\n                What you see you get!\r\n            </p>\r\n\r\n            <p class=\"font-weight-bold quotes \" style=\"  text-align:justify;\">\r\n              If the youths have to become a better version of\r\n              themselves or better still a splitting image of Jesus for\r\n              in his light, can they truly discover themselves, we must\r\n              begin to rid ourselves of the pessimistic phenomenon. If\r\n              there is no glimmer of hope within\r\n              us, how can we produce in them\r\n              hope for their future. We cannot\r\n              give what we do not have.\r\n              </p>\r\n\r\n              <p class=\"font-weight-bold quotes \" style=\"  text-align:justify;\">\r\n              I once said at a youth meeting\r\n              I had about 20 years ago\r\n              which I tagged “Youth\r\n              Expression” that\r\n              “…the strength of an\r\n              entire length of rope\r\n              is determined by its\r\n              weakest link… if we\r\n              continue to call the youths corrupt and weak, we are indirectly describing\r\n              our strength, our fate and the product that our best\r\n              could leave behind. We are exactly what we call them.\r\n              We cannot be better…”\r\n              </p>\r\n\r\n              <p class=\"font-weight-bold quotes \" style=\"  text-align:justify;\">\r\n              It is high time we all arise and get busy helping these\r\n              young folks discover who they have been created to be in\r\n              Christ rather than get busy complaining about the ills we\r\n              observe. Afterall we are exactly what we complain about.\r\n              </p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n            </div>\r\n\r\n            <!-- Modal footer -->\r\n            <div class=\"modal-footer\">\r\n              <button type=\"button\" class=\"btn btn-warning\" data-dismiss=\"modal\">Close</button>\r\n            </div>\r\n\r\n          </div>\r\n        </div>\r\n      </div>', '<pre>        The best gift to the world is the gift\r\n        of salvation. The best gift to the\r\n            church is the gift of the word.\r\n        We have been sent with a\r\n        message. The devil can’t shut us\r\n        up, nothing can stop us, we have\r\n        a message that must be heard,\r\n        and that message is the word of\r\n        peace and hope, of rest and of\r\n        the finished work.\r\n    </pre>', 'https://facebook.com', 'twitter.com', 'linkedin.com', 'https://youtube.com', 'https://instagram.com', 'https://whatsapp.com', '2021-07-28 17:09:13', '2021-09-06 23:35:33');

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
(7, 1, 'Good evening here', 'h hgkgkkhjhk hjkghg kghkghj ghjkg ghgkhg<br>', '2021-09-06', '2021-09-06 01:55:02', '2021-09-06 01:55:02'),
(8, 1, 'let code it', 'gkjhg kghk gkhfhfg fdfdsd sdfsdfsgd<br>', '2021-09-06', '2021-09-06 01:52:05', '2021-09-06 01:52:05');

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
(13, 1, 1, 1, '2021-08-02 10:15:50', '2021-08-02 10:15:50'),
(14, 1, 1, 1, '2021-08-07 06:16:37', '2021-08-07 06:16:37'),
(15, 1, 1, 1, '2021-08-07 06:16:55', '2021-08-07 06:16:55'),
(16, 1, 1, 1, '2021-08-07 06:19:17', '2021-08-07 06:19:17');

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
(33, 'App\\Models\\User', 8, '558c1265-96a9-42d4-b437-01b6d485c730', 'avatar', 'icon', 'Eyin-member-titun.png', 'image/jpeg', 'uploads', 'uploads', 282364, '[]', '[]', '{\"avatar\":true}', '{\"avatar\":{\"urls\":[\"Eyin-member-titun___avatar_50_50.jpg\"],\"base64svg\":\"data:image\\/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNTAgNTAiPgoJPGltYWdlIHdpZHRoPSI1MCIgaGVpZ2h0PSI1MCIgeGxpbms6aHJlZj0iZGF0YTppbWFnZS9qcGVnO2Jhc2U2NCwvOWovNEFBUVNrWkpSZ0FCQVFFQVlBQmdBQUQvL2dBN1ExSkZRVlJQVWpvZ1oyUXRhbkJsWnlCMk1TNHdJQ2gxYzJsdVp5QkpTa2NnU2xCRlJ5QjJOaklwTENCeGRXRnNhWFI1SUQwZ09UQUsvOXNBUXdBREFnSURBZ0lEQXdNREJBTURCQVVJQlFVRUJBVUtCd2NHQ0F3S0RBd0xDZ3NMRFE0U0VBME9FUTRMQ3hBV0VCRVRGQlVWRlF3UEZ4Z1dGQmdTRkJVVS85c0FRd0VEQkFRRkJBVUpCUVVKRkEwTERSUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVLzhBQUVRZ0FJQUFnQXdFUkFBSVJBUU1SQWYvRUFCOEFBQUVGQVFFQkFRRUJBQUFBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUUFBSUJBd01DQkFNRkJRUUVBQUFCZlFFQ0F3QUVFUVVTSVRGQkJoTlJZUWNpY1JReWdaR2hDQ05Dc2NFVlV0SHdKRE5pY29JSkNoWVhHQmthSlNZbktDa3FORFUyTnpnNU9rTkVSVVpIU0VsS1UxUlZWbGRZV1ZwalpHVm1aMmhwYW5OMGRYWjNlSGw2ZzRTRmhvZUlpWXFTazVTVmxwZVltWnFpbzZTbHBxZW9xYXF5czdTMXRyZTR1YnJDdzhURnhzZkl5Y3JTMDlUVjF0ZlkyZHJoNHVQazVlYm42T25xOGZMejlQWDI5L2o1K3YvRUFCOEJBQU1CQVFFQkFRRUJBUUVBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUkFBSUJBZ1FFQXdRSEJRUUVBQUVDZHdBQkFnTVJCQVVoTVFZU1FWRUhZWEVUSWpLQkNCUkNrYUd4d1Frak0xTHdGV0p5MFFvV0pEVGhKZkVYR0JrYUppY29LU28xTmpjNE9UcERSRVZHUjBoSlNsTlVWVlpYV0ZsYVkyUmxabWRvYVdwemRIVjJkM2g1ZW9LRGhJV0doNGlKaXBLVGxKV1dsNWlabXFLanBLV21wNmlwcXJLenRMVzJ0N2k1dXNMRHhNWEd4OGpKeXRMVDFOWFcxOWpaMnVMajVPWG01K2pwNnZMejlQWDI5L2o1K3YvYUFBd0RBUUFDRVFNUkFEOEE5YzhZL0VHeDBMVHpwdmhhRXpzM1ZrNXI4eHp2aU9uS0hzNHlzajdiQVpYS2svYVlnOHg4UmZFRHhmSHBtMlMxa1NBREo0cjR0WnZScndWS016N1RMYVdGNTNKN2t2d1MrS092djRsUlVqY1FidVNSWFRMTlhsdE82a2VYeERRcDFJM2hIVSsydEp1VjhYYWFJcEcyekVDdnRNaHp6KzBZOGplcCtWY2p3cytlU1BqM3dzWS9DdDhzTTBYbVRzY0hmeml2d3JPc0ppRTNHbzdXUDJuRXhqaTZmdEtiMFBUdGVsczd6dzNJV3Rra1lwOTBMWDUvaGxVaGlGNzFqd2FOS3BUcUpubTNoeVJOSTNPbG9JRzNkUU1WOVhpYjFyTG11ZlowNmNhMFBlUGZ2Z2xyVTJvNmp5U1Z4WDNuQkRuREY4dlErQTRsd1ZPbFQ1b25sZnhCK0dPdFJlSm51N2FMZkFUMVVkSy9RZUxjaGxOT3ZCR1dSWjNTVk5VYWpOVFFiVzZoalcybmpaaVJqQkZmelZpOEZXVlJxTVhjK3dsVnBTWE1tVzcvQU9HbXA2cktqV3NCRWJIbml2cE1yeVRHNGlOM0JuT3MzdzlEU1VqMkg0VWVBMjhJSjVsemdNUjFOZnMvRE9VU3l5ZnRjUXJId09mWm9zZDd0TSthdjJmL0FOcjZ6OFplRm5sMWtMSmNvTWtHdjJYRnlqSjhrMW9mRVVLVXJweGVwbzNYN1ovdy9zTlJrU2UzQ1RSbkJHSzhWOE9ZQ3JQMnJnajZKUEZLUEx6R0o0bi9BT0NqL2huUm9mSzB5MUROMEJ4WHIwOEJoNkN0R0tSeFN3OWFXclozL3dBSy93Qm8yNStMTm1zeUh5MVlaQUZmRzhSWmRXeGxMa3cwck01OFBQMkZTMVJILzlrPSI+Cgk8L2ltYWdlPgo8L3N2Zz4=\"}}', 24, '2021-08-02 10:17:02', '2021-08-02 10:17:04'),
(34, 'App\\Models\\File', 14, '137ddb75-29b5-49e5-a1c3-151cad0c6539', 'gallery', '2', '2.jpg', 'image/jpeg', 'uploads', 'uploads', 88601, '[]', '[]', '[]', '[]', 25, '2021-08-07 06:16:37', '2021-08-07 06:16:37'),
(35, 'App\\Models\\File', 15, '5d6a8ad1-286d-40f0-a546-bd406cc65f13', 'gallery', '5', '5.jpg', 'image/jpeg', 'uploads', 'uploads', 66512, '[]', '[]', '[]', '[]', 26, '2021-08-07 06:16:55', '2021-08-07 06:16:55'),
(36, 'App\\Models\\File', 16, '583e020d-5ea1-47db-9fb1-9ec76f70df8b', 'gallery', '5', '5.jpg', 'image/jpeg', 'uploads', 'uploads', 66512, '[]', '[]', '[]', '[]', 27, '2021-08-07 06:19:17', '2021-08-07 06:19:17'),
(37, 'App\\Models\\User', 9, 'ac3fb964-4e1d-40f3-a8c3-8afc78c13739', 'avatar', '5', 'Oluokun-kabiru-Adesiina.png', 'image/jpeg', 'uploads', 'uploads', 66512, '[]', '[]', '{\"avatar\":true}', '{\"avatar\":{\"urls\":[\"Oluokun-kabiru-Adesiina___avatar_50_37.jpg\"],\"base64svg\":\"data:image\\/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNTAgMzciPgoJPGltYWdlIHdpZHRoPSI1MCIgaGVpZ2h0PSIzNyIgeGxpbms6aHJlZj0iZGF0YTppbWFnZS9qcGVnO2Jhc2U2NCwvOWovNEFBUVNrWkpSZ0FCQVFFQVlBQmdBQUQvL2dBN1ExSkZRVlJQVWpvZ1oyUXRhbkJsWnlCMk1TNHdJQ2gxYzJsdVp5QkpTa2NnU2xCRlJ5QjJOaklwTENCeGRXRnNhWFI1SUQwZ09UQUsvOXNBUXdBREFnSURBZ0lEQXdNREJBTURCQVVJQlFVRUJBVUtCd2NHQ0F3S0RBd0xDZ3NMRFE0U0VBME9FUTRMQ3hBV0VCRVRGQlVWRlF3UEZ4Z1dGQmdTRkJVVS85c0FRd0VEQkFRRkJBVUpCUVVKRkEwTERSUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVLzhBQUVRZ0FGd0FmQXdFUkFBSVJBUU1SQWYvRUFCOEFBQUVGQVFFQkFRRUJBQUFBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUUFBSUJBd01DQkFNRkJRUUVBQUFCZlFFQ0F3QUVFUVVTSVRGQkJoTlJZUWNpY1JReWdaR2hDQ05Dc2NFVlV0SHdKRE5pY29JSkNoWVhHQmthSlNZbktDa3FORFUyTnpnNU9rTkVSVVpIU0VsS1UxUlZWbGRZV1ZwalpHVm1aMmhwYW5OMGRYWjNlSGw2ZzRTRmhvZUlpWXFTazVTVmxwZVltWnFpbzZTbHBxZW9xYXF5czdTMXRyZTR1YnJDdzhURnhzZkl5Y3JTMDlUVjF0ZlkyZHJoNHVQazVlYm42T25xOGZMejlQWDI5L2o1K3YvRUFCOEJBQU1CQVFFQkFRRUJBUUVBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUkFBSUJBZ1FFQXdRSEJRUUVBQUVDZHdBQkFnTVJCQVVoTVFZU1FWRUhZWEVUSWpLQkNCUkNrYUd4d1Frak0xTHdGV0p5MFFvV0pEVGhKZkVYR0JrYUppY29LU28xTmpjNE9UcERSRVZHUjBoSlNsTlVWVlpYV0ZsYVkyUmxabWRvYVdwemRIVjJkM2g1ZW9LRGhJV0doNGlKaXBLVGxKV1dsNWlabXFLanBLV21wNmlwcXJLenRMVzJ0N2k1dXNMRHhNWEd4OGpKeXRMVDFOWFcxOWpaMnVMajVPWG01K2pwNnZMejlQWDI5L2o1K3YvYUFBd0RBUUFDRVFNUkFEOEE5MytPbnhPbDhON1lMV1FCejFGZm5PYjVrNFM5blRaNm1Ed3ZNdWFSODJhajhSTmF2dFRXNFdYQlU1RmZLL1hKdXprZXdxTVk2SSt2ZmdEcTk1NGs4TkNUVStlTUExOS9sZUtsS243NTg5aklSVTdST3cxblJRWkNZRG5ucFgwVVpLZXg1YmpZK01makhxTTJwNjdJOHdmYXZOZmlGZXJVcVZIS1c1OTlTakdNYkk4bXNQRWR2ZGFrMFpPMktNOG10cFVKMDRLUzNKVWs1TkgwMThGZmpkQTBTYVRhcWRxREc0VjlabDFTcHlKU1I4N2pJcFR1bWZRM2hDL24xVzZrZHNzdU04MTloZzdzOHFSNXA4V2ZnOWI2ell6WGx1RWpmYWNpdmtjNHlkZnhxZWxqNkRCWXo3TWo0NDhRZkQwMmwrOXBiTUVta2ZhV3pYeldDcVNyVmxTbDBQVXJKUmh6SStxdjJZUDJlNHREczF2NzlrbmtjWjRPYS9Vc0hnb3dqZG55VmVvNU0rZ2ZFR3JXUGdHMlJvNE03ampnVjY2akduc2NqWi8vMlE9PSI+Cgk8L2ltYWdlPgo8L3N2Zz4=\"}}', 28, '2021-08-11 07:09:26', '2021-08-11 07:09:29'),
(38, 'App\\Models\\User', 10, 'a6a8f59c-4965-4577-9340-a13369301f9f', 'avatar', '5', 'Oluokun-kabiru-Adesiina.png', 'image/jpeg', 'uploads', 'uploads', 66512, '[]', '[]', '{\"avatar\":true}', '{\"avatar\":{\"urls\":[\"Oluokun-kabiru-Adesiina___avatar_50_37.jpg\"],\"base64svg\":\"data:image\\/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNTAgMzciPgoJPGltYWdlIHdpZHRoPSI1MCIgaGVpZ2h0PSIzNyIgeGxpbms6aHJlZj0iZGF0YTppbWFnZS9qcGVnO2Jhc2U2NCwvOWovNEFBUVNrWkpSZ0FCQVFFQVlBQmdBQUQvL2dBN1ExSkZRVlJQVWpvZ1oyUXRhbkJsWnlCMk1TNHdJQ2gxYzJsdVp5QkpTa2NnU2xCRlJ5QjJOaklwTENCeGRXRnNhWFI1SUQwZ09UQUsvOXNBUXdBREFnSURBZ0lEQXdNREJBTURCQVVJQlFVRUJBVUtCd2NHQ0F3S0RBd0xDZ3NMRFE0U0VBME9FUTRMQ3hBV0VCRVRGQlVWRlF3UEZ4Z1dGQmdTRkJVVS85c0FRd0VEQkFRRkJBVUpCUVVKRkEwTERSUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVLzhBQUVRZ0FGd0FmQXdFUkFBSVJBUU1SQWYvRUFCOEFBQUVGQVFFQkFRRUJBQUFBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUUFBSUJBd01DQkFNRkJRUUVBQUFCZlFFQ0F3QUVFUVVTSVRGQkJoTlJZUWNpY1JReWdaR2hDQ05Dc2NFVlV0SHdKRE5pY29JSkNoWVhHQmthSlNZbktDa3FORFUyTnpnNU9rTkVSVVpIU0VsS1UxUlZWbGRZV1ZwalpHVm1aMmhwYW5OMGRYWjNlSGw2ZzRTRmhvZUlpWXFTazVTVmxwZVltWnFpbzZTbHBxZW9xYXF5czdTMXRyZTR1YnJDdzhURnhzZkl5Y3JTMDlUVjF0ZlkyZHJoNHVQazVlYm42T25xOGZMejlQWDI5L2o1K3YvRUFCOEJBQU1CQVFFQkFRRUJBUUVBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUkFBSUJBZ1FFQXdRSEJRUUVBQUVDZHdBQkFnTVJCQVVoTVFZU1FWRUhZWEVUSWpLQkNCUkNrYUd4d1Frak0xTHdGV0p5MFFvV0pEVGhKZkVYR0JrYUppY29LU28xTmpjNE9UcERSRVZHUjBoSlNsTlVWVlpYV0ZsYVkyUmxabWRvYVdwemRIVjJkM2g1ZW9LRGhJV0doNGlKaXBLVGxKV1dsNWlabXFLanBLV21wNmlwcXJLenRMVzJ0N2k1dXNMRHhNWEd4OGpKeXRMVDFOWFcxOWpaMnVMajVPWG01K2pwNnZMejlQWDI5L2o1K3YvYUFBd0RBUUFDRVFNUkFEOEE5MytPbnhPbDhON1lMV1FCejFGZm5PYjVrNFM5blRaNm1Ed3ZNdWFSODJhajhSTmF2dFRXNFdYQlU1RmZLL1hKdXprZXdxTVk2SSt2ZmdEcTk1NGs4TkNUVStlTUExOS9sZUtsS243NTg5aklSVTdST3cxblJRWkNZRG5ucFgwVVpLZXg1YmpZK01makhxTTJwNjdJOHdmYXZOZmlGZXJVcVZIS1c1OTlTakdNYkk4bXNQRWR2ZGFrMFpPMktNOG10cFVKMDRLUzNKVWs1TkgwMThGZmpkQTBTYVRhcWRxREc0VjlabDFTcHlKU1I4N2pJcFR1bWZRM2hDL24xVzZrZHNzdU04MTloZzdzOHFSNXA4V2ZnOWI2ell6WGx1RWpmYWNpdmtjNHlkZnhxZWxqNkRCWXo3TWo0NDhRZkQwMmwrOXBiTUVta2ZhV3pYeldDcVNyVmxTbDBQVXJKUmh6SStxdjJZUDJlNHREczF2NzlrbmtjWjRPYS9Vc0hnb3dqZG55VmVvNU0rZ2ZFR3JXUGdHMlJvNE03ampnVjY2akduc2NqWi8vMlE9PSI+Cgk8L2ltYWdlPgo8L3N2Zz4=\"}}', 29, '2021-08-11 07:16:01', '2021-08-11 07:16:03'),
(39, 'App\\Models\\User', 11, 'ccda0bd9-4b4b-4a84-8258-3eba9961e8b6', 'avatar', '1', 'Oluokun-kabiru-Adesiina.png', 'image/jpeg', 'uploads', 'uploads', 37976, '[]', '[]', '{\"avatar\":true}', '{\"avatar\":{\"urls\":[\"Oluokun-kabiru-Adesiina___avatar_50_33.jpg\"],\"base64svg\":\"data:image\\/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNTAgMzMiPgoJPGltYWdlIHdpZHRoPSI1MCIgaGVpZ2h0PSIzMyIgeGxpbms6aHJlZj0iZGF0YTppbWFnZS9qcGVnO2Jhc2U2NCwvOWovNEFBUVNrWkpSZ0FCQVFFQVlBQmdBQUQvL2dBN1ExSkZRVlJQVWpvZ1oyUXRhbkJsWnlCMk1TNHdJQ2gxYzJsdVp5QkpTa2NnU2xCRlJ5QjJOaklwTENCeGRXRnNhWFI1SUQwZ09UQUsvOXNBUXdBREFnSURBZ0lEQXdNREJBTURCQVVJQlFVRUJBVUtCd2NHQ0F3S0RBd0xDZ3NMRFE0U0VBME9FUTRMQ3hBV0VCRVRGQlVWRlF3UEZ4Z1dGQmdTRkJVVS85c0FRd0VEQkFRRkJBVUpCUVVKRkEwTERSUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVLzhBQUVRZ0FGUUFnQXdFUkFBSVJBUU1SQWYvRUFCOEFBQUVGQVFFQkFRRUJBQUFBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUUFBSUJBd01DQkFNRkJRUUVBQUFCZlFFQ0F3QUVFUVVTSVRGQkJoTlJZUWNpY1JReWdaR2hDQ05Dc2NFVlV0SHdKRE5pY29JSkNoWVhHQmthSlNZbktDa3FORFUyTnpnNU9rTkVSVVpIU0VsS1UxUlZWbGRZV1ZwalpHVm1aMmhwYW5OMGRYWjNlSGw2ZzRTRmhvZUlpWXFTazVTVmxwZVltWnFpbzZTbHBxZW9xYXF5czdTMXRyZTR1YnJDdzhURnhzZkl5Y3JTMDlUVjF0ZlkyZHJoNHVQazVlYm42T25xOGZMejlQWDI5L2o1K3YvRUFCOEJBQU1CQVFFQkFRRUJBUUVBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUkFBSUJBZ1FFQXdRSEJRUUVBQUVDZHdBQkFnTVJCQVVoTVFZU1FWRUhZWEVUSWpLQkNCUkNrYUd4d1Frak0xTHdGV0p5MFFvV0pEVGhKZkVYR0JrYUppY29LU28xTmpjNE9UcERSRVZHUjBoSlNsTlVWVlpYV0ZsYVkyUmxabWRvYVdwemRIVjJkM2g1ZW9LRGhJV0doNGlKaXBLVGxKV1dsNWlabXFLanBLV21wNmlwcXJLenRMVzJ0N2k1dXNMRHhNWEd4OGpKeXRMVDFOWFcxOWpaMnVMajVPWG01K2pwNnZMejlQWDI5L2o1K3YvYUFBd0RBUUFDRVFNUkFEOEE1THdYOEdOSjBPMEV1cFNCRC9kSnI4MHI0aU5GWGtmdHNxN3ZhbWFIanVIUnROOE1YQzJDNzVkdUZ4MXJ6TU5tVWF0VGthSW56cGN6WjVINExmWGJ6ZXI2WE5OQm43d1ExOURMRDh5NW9oOVpveVZtOVMxOFIvaHMxeG9vdi9zN1JFOVFSV1NqT215WXFGUjJpenRmRUhpMTlUMVZySVNFQWQ4MTRHTnBTaTNLUjV0Q3J6YUkxdkRObHBrZDVCSHFFNG1WbUdWSnpYaFUzT1ZWY3FQU25KS203cytxdkRjdmhUU05CUllMTzNBS2NuYU9hL1JhRTM3TkkrTXFQMzczUEZmamJyR2xYMmlYTWR1a2FJRHhpdXRSYzQyTzdEMS9aelR1Zk91cER6Rlc4QktTbnJpcnhtR3AxRnFqeGNMaVp3ZWhnV09zM1o4UlFSbVZpdTRkNjhLT0ZweGxaSTllclhtNGMxejMyODhRM3RucEVTUnpNQVZIZXZaaFNqRkt4ODdLdkp0bmh2eG84WmFqWjZSc2psUHpuazVyMHFjRWtkV0hrNXoxUC8vWiI+Cgk8L2ltYWdlPgo8L3N2Zz4=\"}}', 30, '2021-08-11 07:21:03', '2021-08-11 07:21:04'),
(40, 'App\\Models\\User', 12, '6a9d0210-31ae-4ba8-a7ad-6d7f8785c53d', 'avatar', '2', 'oluokun-kabiru.png', 'image/jpeg', 'uploads', 'uploads', 88601, '[]', '[]', '{\"avatar\":true}', '{\"avatar\":{\"urls\":[\"oluokun-kabiru___avatar_50_33.jpg\"],\"base64svg\":\"data:image\\/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNTAgMzMiPgoJPGltYWdlIHdpZHRoPSI1MCIgaGVpZ2h0PSIzMyIgeGxpbms6aHJlZj0iZGF0YTppbWFnZS9qcGVnO2Jhc2U2NCwvOWovNEFBUVNrWkpSZ0FCQVFFQVlBQmdBQUQvL2dBN1ExSkZRVlJQVWpvZ1oyUXRhbkJsWnlCMk1TNHdJQ2gxYzJsdVp5QkpTa2NnU2xCRlJ5QjJOaklwTENCeGRXRnNhWFI1SUQwZ09UQUsvOXNBUXdBREFnSURBZ0lEQXdNREJBTURCQVVJQlFVRUJBVUtCd2NHQ0F3S0RBd0xDZ3NMRFE0U0VBME9FUTRMQ3hBV0VCRVRGQlVWRlF3UEZ4Z1dGQmdTRkJVVS85c0FRd0VEQkFRRkJBVUpCUVVKRkEwTERSUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVLzhBQUVRZ0FGUUFnQXdFUkFBSVJBUU1SQWYvRUFCOEFBQUVGQVFFQkFRRUJBQUFBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUUFBSUJBd01DQkFNRkJRUUVBQUFCZlFFQ0F3QUVFUVVTSVRGQkJoTlJZUWNpY1JReWdaR2hDQ05Dc2NFVlV0SHdKRE5pY29JSkNoWVhHQmthSlNZbktDa3FORFUyTnpnNU9rTkVSVVpIU0VsS1UxUlZWbGRZV1ZwalpHVm1aMmhwYW5OMGRYWjNlSGw2ZzRTRmhvZUlpWXFTazVTVmxwZVltWnFpbzZTbHBxZW9xYXF5czdTMXRyZTR1YnJDdzhURnhzZkl5Y3JTMDlUVjF0ZlkyZHJoNHVQazVlYm42T25xOGZMejlQWDI5L2o1K3YvRUFCOEJBQU1CQVFFQkFRRUJBUUVBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUkFBSUJBZ1FFQXdRSEJRUUVBQUVDZHdBQkFnTVJCQVVoTVFZU1FWRUhZWEVUSWpLQkNCUkNrYUd4d1Frak0xTHdGV0p5MFFvV0pEVGhKZkVYR0JrYUppY29LU28xTmpjNE9UcERSRVZHUjBoSlNsTlVWVlpYV0ZsYVkyUmxabWRvYVdwemRIVjJkM2g1ZW9LRGhJV0doNGlKaXBLVGxKV1dsNWlabXFLanBLV21wNmlwcXJLenRMVzJ0N2k1dXNMRHhNWEd4OGpKeXRMVDFOWFcxOWpaMnVMajVPWG01K2pwNnZMejlQWDI5L2o1K3YvYUFBd0RBUUFDRVFNUkFEOEE2anhkNHBYdzc0c2hGbSsyRW5CTmZMNW5tenJZbjkyejBNRmx2TGgrYWExT3B1L0U4V3BXSXl3ZGl1VGl2QnExWlQxWnJHbW9hSTgyMXZ4cWRLbVkyK1VaVDNyYkNZcDBwOHlLeE5EbnAyTnp3RDhSYlB4SmRmWnRRbEViOWlUWDZybE9hZldJOHNqNVhGWlhVcFI5cEZhSFBlSmRQYlZOVkVVeDhwbC92VitUZlZYU1g3eGFuNjNVcVlkcGV5MVJ4SGlMeDhmQmVzeFdZbTNvM0I1b1dINW91elBJeGNJdFhpWE5adUlOUzBvM3pTQUZseUJYRkdENXVWSE5RZzVTU2tlWDZWZmFqZCtJQkhwNWJjRDFXdnNjcTlwQjJSN0dQZENsUnRJK3pQanA0TXNyU09TOGdMUXpBZFZyNlRNc0ZTcVUrWm8vT3N1eGxXTXVXK2g4ZmFyb3NldWE1dXVaR1prYmcxOFg3TlVhYjVUNmwxcFRxSk03dURRWWJ1MWh0V2RoSGpIRmVWaElLZFRVOVRIdjJGTlNnanN0UCtIK20rRnRKWFU3UUUzT001WVYrcllIQzA2ZE5UUzFQenpHWTZyWGx5U2VoLy9aIj4KCTwvaW1hZ2U+Cjwvc3ZnPg==\"}}', 31, '2021-08-15 15:31:31', '2021-08-15 15:31:35'),
(41, 'App\\Models\\User', 13, '5d860268-3c3f-4d6c-9003-8126cd54cf82', 'avatar', '4', 'oluokun-kabiru.png', 'image/jpeg', 'uploads', 'uploads', 130101, '[]', '[]', '{\"avatar\":true}', '{\"avatar\":{\"urls\":[\"oluokun-kabiru___avatar_50_26.jpg\"],\"base64svg\":\"data:image\\/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNTAgMjYiPgoJPGltYWdlIHdpZHRoPSI1MCIgaGVpZ2h0PSIyNiIgeGxpbms6aHJlZj0iZGF0YTppbWFnZS9qcGVnO2Jhc2U2NCwvOWovNEFBUVNrWkpSZ0FCQVFFQVlBQmdBQUQvL2dBN1ExSkZRVlJQVWpvZ1oyUXRhbkJsWnlCMk1TNHdJQ2gxYzJsdVp5QkpTa2NnU2xCRlJ5QjJOaklwTENCeGRXRnNhWFI1SUQwZ09UQUsvOXNBUXdBREFnSURBZ0lEQXdNREJBTURCQVVJQlFVRUJBVUtCd2NHQ0F3S0RBd0xDZ3NMRFE0U0VBME9FUTRMQ3hBV0VCRVRGQlVWRlF3UEZ4Z1dGQmdTRkJVVS85c0FRd0VEQkFRRkJBVUpCUVVKRkEwTERSUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVLzhBQUVRZ0FFQUFlQXdFUkFBSVJBUU1SQWYvRUFCOEFBQUVGQVFFQkFRRUJBQUFBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUUFBSUJBd01DQkFNRkJRUUVBQUFCZlFFQ0F3QUVFUVVTSVRGQkJoTlJZUWNpY1JReWdaR2hDQ05Dc2NFVlV0SHdKRE5pY29JSkNoWVhHQmthSlNZbktDa3FORFUyTnpnNU9rTkVSVVpIU0VsS1UxUlZWbGRZV1ZwalpHVm1aMmhwYW5OMGRYWjNlSGw2ZzRTRmhvZUlpWXFTazVTVmxwZVltWnFpbzZTbHBxZW9xYXF5czdTMXRyZTR1YnJDdzhURnhzZkl5Y3JTMDlUVjF0ZlkyZHJoNHVQazVlYm42T25xOGZMejlQWDI5L2o1K3YvRUFCOEJBQU1CQVFFQkFRRUJBUUVBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUkFBSUJBZ1FFQXdRSEJRUUVBQUVDZHdBQkFnTVJCQVVoTVFZU1FWRUhZWEVUSWpLQkNCUkNrYUd4d1Frak0xTHdGV0p5MFFvV0pEVGhKZkVYR0JrYUppY29LU28xTmpjNE9UcERSRVZHUjBoSlNsTlVWVlpYV0ZsYVkyUmxabWRvYVdwemRIVjJkM2g1ZW9LRGhJV0doNGlKaXBLVGxKV1dsNWlabXFLanBLV21wNmlwcXJLenRMVzJ0N2k1dXNMRHhNWEd4OGpKeXRMVDFOWFcxOWpaMnVMajVPWG01K2pwNnZMejlQWDI5L2o1K3YvYUFBd0RBUUFDRVFNUkFEOEE2WDRoL0htemU4R24yRnFYbTZacjhod21GZE9uZExRL1FNWFc5cFBsYk9EMTYvdXRjMDVYR0lpT1NwTkY0ZTFTbWh3VlJVMzdGNkhRK0h2RytoNko0Vk5zWi84QVR1aEh2WHI4anhLY0xhSGtjMHNGTG1sMUttaytPN3QzbEVYeng5UWErUXpQS0tiYVBxY3V6T3ZOT3hnZU5vTk9oMWQ3eXp3c3hIQ212dnE5TGxpb1FQRnA0VG5tNVNPQnVyTHhQZGViS2pIWTMzUUR4WEVzT3B6V2g2czRyQ1VMcG1acFhnM3hMZVhPOW9pQVc1WW12WGhHTkxSSHlkV01zVks3UHAvNFpmRFMzT2pLYnhoNTJCbXNKWlRVeGo1cjZIczBNYkRCUjVVai85az0iPgoJPC9pbWFnZT4KPC9zdmc+\"}}', 32, '2021-08-15 15:33:38', '2021-08-15 15:33:39'),
(42, 'App\\Models\\User', 14, 'e0e391bd-8a6c-4464-a7cb-7d9bfeb72b94', 'avatar', 'icon', 'Oluokun-kabiru-Adesiina.png', 'image/jpeg', 'uploads', 'uploads', 282364, '[]', '[]', '{\"avatar\":true}', '{\"avatar\":{\"urls\":[\"Oluokun-kabiru-Adesiina___avatar_50_50.jpg\"],\"base64svg\":\"data:image\\/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNTAgNTAiPgoJPGltYWdlIHdpZHRoPSI1MCIgaGVpZ2h0PSI1MCIgeGxpbms6aHJlZj0iZGF0YTppbWFnZS9qcGVnO2Jhc2U2NCwvOWovNEFBUVNrWkpSZ0FCQVFFQVlBQmdBQUQvL2dBN1ExSkZRVlJQVWpvZ1oyUXRhbkJsWnlCMk1TNHdJQ2gxYzJsdVp5QkpTa2NnU2xCRlJ5QjJOaklwTENCeGRXRnNhWFI1SUQwZ09UQUsvOXNBUXdBREFnSURBZ0lEQXdNREJBTURCQVVJQlFVRUJBVUtCd2NHQ0F3S0RBd0xDZ3NMRFE0U0VBME9FUTRMQ3hBV0VCRVRGQlVWRlF3UEZ4Z1dGQmdTRkJVVS85c0FRd0VEQkFRRkJBVUpCUVVKRkEwTERSUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVLzhBQUVRZ0FJQUFnQXdFUkFBSVJBUU1SQWYvRUFCOEFBQUVGQVFFQkFRRUJBQUFBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUUFBSUJBd01DQkFNRkJRUUVBQUFCZlFFQ0F3QUVFUVVTSVRGQkJoTlJZUWNpY1JReWdaR2hDQ05Dc2NFVlV0SHdKRE5pY29JSkNoWVhHQmthSlNZbktDa3FORFUyTnpnNU9rTkVSVVpIU0VsS1UxUlZWbGRZV1ZwalpHVm1aMmhwYW5OMGRYWjNlSGw2ZzRTRmhvZUlpWXFTazVTVmxwZVltWnFpbzZTbHBxZW9xYXF5czdTMXRyZTR1YnJDdzhURnhzZkl5Y3JTMDlUVjF0ZlkyZHJoNHVQazVlYm42T25xOGZMejlQWDI5L2o1K3YvRUFCOEJBQU1CQVFFQkFRRUJBUUVBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUkFBSUJBZ1FFQXdRSEJRUUVBQUVDZHdBQkFnTVJCQVVoTVFZU1FWRUhZWEVUSWpLQkNCUkNrYUd4d1Frak0xTHdGV0p5MFFvV0pEVGhKZkVYR0JrYUppY29LU28xTmpjNE9UcERSRVZHUjBoSlNsTlVWVlpYV0ZsYVkyUmxabWRvYVdwemRIVjJkM2g1ZW9LRGhJV0doNGlKaXBLVGxKV1dsNWlabXFLanBLV21wNmlwcXJLenRMVzJ0N2k1dXNMRHhNWEd4OGpKeXRMVDFOWFcxOWpaMnVMajVPWG01K2pwNnZMejlQWDI5L2o1K3YvYUFBd0RBUUFDRVFNUkFEOEE5YzhZL0VHeDBMVHpwdmhhRXpzM1ZrNXI4eHp2aU9uS0hzNHlzajdiQVpYS2svYVlnOHg4UmZFRHhmSHBtMlMxa1NBREo0cjR0WnZScndWS016N1RMYVdGNTNKN2t2d1MrS092djRsUlVqY1FidVNSWFRMTlhsdE82a2VYeERRcDFJM2hIVSsydEp1VjhYYWFJcEcyekVDdnRNaHp6KzBZOGplcCtWY2p3cytlU1BqM3dzWS9DdDhzTTBYbVRzY0hmeml2d3JPc0ppRTNHbzdXUDJuRXhqaTZmdEtiMFBUdGVsczd6dzNJV3Rra1lwOTBMWDUvaGxVaGlGNzFqd2FOS3BUcUpubTNoeVJOSTNPbG9JRzNkUU1WOVhpYjFyTG11ZlowNmNhMFBlUGZ2Z2xyVTJvNmp5U1Z4WDNuQkRuREY4dlErQTRsd1ZPbFQ1b25sZnhCK0dPdFJlSm51N2FMZkFUMVVkSy9RZUxjaGxOT3ZCR1dSWjNTVk5VYWpOVFFiVzZoalcybmpaaVJqQkZmelZpOEZXVlJxTVhjK3dsVnBTWE1tVzcvQU9HbXA2cktqV3NCRWJIbml2cE1yeVRHNGlOM0JuT3MzdzlEU1VqMkg0VWVBMjhJSjVsemdNUjFOZnMvRE9VU3l5ZnRjUXJId09mWm9zZDd0TSthdjJmL0FOcjZ6OFplRm5sMWtMSmNvTWtHdjJYRnlqSjhrMW9mRVVLVXJweGVwbzNYN1ovdy9zTlJrU2UzQ1RSbkJHSzhWOE9ZQ3JQMnJnajZKUEZLUEx6R0o0bi9BT0NqL2huUm9mSzB5MUROMEJ4WHIwOEJoNkN0R0tSeFN3OWFXclozL3dBSy93Qm8yNStMTm1zeUh5MVlaQUZmRzhSWmRXeGxMa3cwck01OFBQMkZTMVJILzlrPSI+Cgk8L2ltYWdlPgo8L3N2Zz4=\"}}', 33, '2021-08-15 15:46:55', '2021-08-15 15:46:57'),
(43, 'App\\Models\\User', 15, '38863525-1199-410b-9456-b41b2272bc26', 'avatar', '5', 'Oluokun-kabiru-Adesiina.png', 'image/jpeg', 'uploads', 'uploads', 66512, '[]', '[]', '{\"avatar\":true}', '{\"avatar\":{\"urls\":[\"Oluokun-kabiru-Adesiina___avatar_50_37.jpg\"],\"base64svg\":\"data:image\\/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNTAgMzciPgoJPGltYWdlIHdpZHRoPSI1MCIgaGVpZ2h0PSIzNyIgeGxpbms6aHJlZj0iZGF0YTppbWFnZS9qcGVnO2Jhc2U2NCwvOWovNEFBUVNrWkpSZ0FCQVFFQVlBQmdBQUQvL2dBN1ExSkZRVlJQVWpvZ1oyUXRhbkJsWnlCMk1TNHdJQ2gxYzJsdVp5QkpTa2NnU2xCRlJ5QjJOaklwTENCeGRXRnNhWFI1SUQwZ09UQUsvOXNBUXdBREFnSURBZ0lEQXdNREJBTURCQVVJQlFVRUJBVUtCd2NHQ0F3S0RBd0xDZ3NMRFE0U0VBME9FUTRMQ3hBV0VCRVRGQlVWRlF3UEZ4Z1dGQmdTRkJVVS85c0FRd0VEQkFRRkJBVUpCUVVKRkEwTERSUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVLzhBQUVRZ0FGd0FmQXdFUkFBSVJBUU1SQWYvRUFCOEFBQUVGQVFFQkFRRUJBQUFBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUUFBSUJBd01DQkFNRkJRUUVBQUFCZlFFQ0F3QUVFUVVTSVRGQkJoTlJZUWNpY1JReWdaR2hDQ05Dc2NFVlV0SHdKRE5pY29JSkNoWVhHQmthSlNZbktDa3FORFUyTnpnNU9rTkVSVVpIU0VsS1UxUlZWbGRZV1ZwalpHVm1aMmhwYW5OMGRYWjNlSGw2ZzRTRmhvZUlpWXFTazVTVmxwZVltWnFpbzZTbHBxZW9xYXF5czdTMXRyZTR1YnJDdzhURnhzZkl5Y3JTMDlUVjF0ZlkyZHJoNHVQazVlYm42T25xOGZMejlQWDI5L2o1K3YvRUFCOEJBQU1CQVFFQkFRRUJBUUVBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUkFBSUJBZ1FFQXdRSEJRUUVBQUVDZHdBQkFnTVJCQVVoTVFZU1FWRUhZWEVUSWpLQkNCUkNrYUd4d1Frak0xTHdGV0p5MFFvV0pEVGhKZkVYR0JrYUppY29LU28xTmpjNE9UcERSRVZHUjBoSlNsTlVWVlpYV0ZsYVkyUmxabWRvYVdwemRIVjJkM2g1ZW9LRGhJV0doNGlKaXBLVGxKV1dsNWlabXFLanBLV21wNmlwcXJLenRMVzJ0N2k1dXNMRHhNWEd4OGpKeXRMVDFOWFcxOWpaMnVMajVPWG01K2pwNnZMejlQWDI5L2o1K3YvYUFBd0RBUUFDRVFNUkFEOEE5MytPbnhPbDhON1lMV1FCejFGZm5PYjVrNFM5blRaNm1Ed3ZNdWFSODJhajhSTmF2dFRXNFdYQlU1RmZLL1hKdXprZXdxTVk2SSt2ZmdEcTk1NGs4TkNUVStlTUExOS9sZUtsS243NTg5aklSVTdST3cxblJRWkNZRG5ucFgwVVpLZXg1YmpZK01makhxTTJwNjdJOHdmYXZOZmlGZXJVcVZIS1c1OTlTakdNYkk4bXNQRWR2ZGFrMFpPMktNOG10cFVKMDRLUzNKVWs1TkgwMThGZmpkQTBTYVRhcWRxREc0VjlabDFTcHlKU1I4N2pJcFR1bWZRM2hDL24xVzZrZHNzdU04MTloZzdzOHFSNXA4V2ZnOWI2ell6WGx1RWpmYWNpdmtjNHlkZnhxZWxqNkRCWXo3TWo0NDhRZkQwMmwrOXBiTUVta2ZhV3pYeldDcVNyVmxTbDBQVXJKUmh6SStxdjJZUDJlNHREczF2NzlrbmtjWjRPYS9Vc0hnb3dqZG55VmVvNU0rZ2ZFR3JXUGdHMlJvNE03ampnVjY2akduc2NqWi8vMlE9PSI+Cgk8L2ltYWdlPgo8L3N2Zz4=\"}}', 34, '2021-08-15 15:48:24', '2021-08-15 15:48:25'),
(44, 'App\\Models\\User', 16, '8b46f3bc-b0ab-4b6f-ad4d-c683f93606c5', 'avatar', 'img_3', 'Oluokun-kabiru-Adesiina.png', 'image/jpeg', 'uploads', 'uploads', 72308, '[]', '[]', '[]', '[]', 35, '2021-08-15 15:53:04', '2021-08-15 15:53:04'),
(45, 'App\\Models\\User', 17, '69c2e37f-9eda-4b02-a424-0881aa1d48e1', 'avatar', 'img_3', 'Oluokun-kabiru-Adesiina.png', 'image/jpeg', 'uploads', 'uploads', 72308, '[]', '[]', '{\"avatar\":true}', '{\"avatar\":{\"urls\":[\"Oluokun-kabiru-Adesiina___avatar_50_42.jpg\"],\"base64svg\":\"data:image\\/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNTAgNDIiPgoJPGltYWdlIHdpZHRoPSI1MCIgaGVpZ2h0PSI0MiIgeGxpbms6aHJlZj0iZGF0YTppbWFnZS9qcGVnO2Jhc2U2NCwvOWovNEFBUVNrWkpSZ0FCQVFFQVlBQmdBQUQvL2dBN1ExSkZRVlJQVWpvZ1oyUXRhbkJsWnlCMk1TNHdJQ2gxYzJsdVp5QkpTa2NnU2xCRlJ5QjJPVEFwTENCeGRXRnNhWFI1SUQwZ09UQUsvOXNBUXdBREFnSURBZ0lEQXdNREJBTURCQVVJQlFVRUJBVUtCd2NHQ0F3S0RBd0xDZ3NMRFE0U0VBME9FUTRMQ3hBV0VCRVRGQlVWRlF3UEZ4Z1dGQmdTRkJVVS85c0FRd0VEQkFRRkJBVUpCUVVKRkEwTERSUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVLzhBQUVRZ0FHZ0FmQXdFaUFBSVJBUU1SQWYvRUFCOEFBQUVGQVFFQkFRRUJBQUFBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUUFBSUJBd01DQkFNRkJRUUVBQUFCZlFFQ0F3QUVFUVVTSVRGQkJoTlJZUWNpY1JReWdaR2hDQ05Dc2NFVlV0SHdKRE5pY29JSkNoWVhHQmthSlNZbktDa3FORFUyTnpnNU9rTkVSVVpIU0VsS1UxUlZWbGRZV1ZwalpHVm1aMmhwYW5OMGRYWjNlSGw2ZzRTRmhvZUlpWXFTazVTVmxwZVltWnFpbzZTbHBxZW9xYXF5czdTMXRyZTR1YnJDdzhURnhzZkl5Y3JTMDlUVjF0ZlkyZHJoNHVQazVlYm42T25xOGZMejlQWDI5L2o1K3YvRUFCOEJBQU1CQVFFQkFRRUJBUUVBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUkFBSUJBZ1FFQXdRSEJRUUVBQUVDZHdBQkFnTVJCQVVoTVFZU1FWRUhZWEVUSWpLQkNCUkNrYUd4d1Frak0xTHdGV0p5MFFvV0pEVGhKZkVYR0JrYUppY29LU28xTmpjNE9UcERSRVZHUjBoSlNsTlVWVlpYV0ZsYVkyUmxabWRvYVdwemRIVjJkM2g1ZW9LRGhJV0doNGlKaXBLVGxKV1dsNWlabXFLanBLV21wNmlwcXJLenRMVzJ0N2k1dXNMRHhNWEd4OGpKeXRMVDFOWFcxOWpaMnVMajVPWG01K2pwNnZMejlQWDI5L2o1K3YvYUFBd0RBUUFDRVFNUkFEOEFTMHRQTkFCcm4vaUo4TUc4VWFYdGhINzBuaXQrMzFxMlM1QUREWjJOWS9qVDR6MlBoTFViQzFPR01yZ0d2eFBEWUdvOFREa1d0ejlreEdOakdoSnladjhBd20vWWptMXF5dDdyV0pmM1hCQzE5V2VDUGdUb1hnT3hXSzFpK2JHQ1RUdmg5OFE3YTU4RzJNMENaM1JnNS9DbzlWK0l3YkllOGh0OEhvV0ZmclZOMDZNVW9vL0txdnRzVE55bTduNU42YjhiN21TM2hDRXM2bm1wZkVXdUh4dGMyZHdZeUpZaURYa0hoRG1RNTVyMlB3ZWk1WDVSK1ZmSVl4ckF0eXBMVkg2YmwyRGhtRVAzejNQYU5DK01QaWlIUXJmVGJTUXdSUm9GeUtwWFdwNnRxYmw3M1ZuVmp6amZXWEQ4c0hISDBybE5jbWtFL0RzT2ZXdmtwWTdGNHVWdmFXUHBYbGVFd2tieGhjLy8yUT09Ij4KCTwvaW1hZ2U+Cjwvc3ZnPg==\"}}', 36, '2021-08-15 16:02:17', '2021-08-15 16:02:20'),
(46, 'App\\Models\\User', 18, '4aa65947-87b2-42aa-9131-7ccef8cd57ef', 'avatar', 'icon', 'Oluokun-kabiru-Adesiina.png', 'image/jpeg', 'uploads', 'uploads', 282364, '[]', '[]', '{\"avatar\":true}', '{\"avatar\":{\"urls\":[\"Oluokun-kabiru-Adesiina___avatar_50_50.jpg\"],\"base64svg\":\"data:image\\/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNTAgNTAiPgoJPGltYWdlIHdpZHRoPSI1MCIgaGVpZ2h0PSI1MCIgeGxpbms6aHJlZj0iZGF0YTppbWFnZS9qcGVnO2Jhc2U2NCwvOWovNEFBUVNrWkpSZ0FCQVFFQVlBQmdBQUQvL2dBN1ExSkZRVlJQVWpvZ1oyUXRhbkJsWnlCMk1TNHdJQ2gxYzJsdVp5QkpTa2NnU2xCRlJ5QjJOaklwTENCeGRXRnNhWFI1SUQwZ09UQUsvOXNBUXdBREFnSURBZ0lEQXdNREJBTURCQVVJQlFVRUJBVUtCd2NHQ0F3S0RBd0xDZ3NMRFE0U0VBME9FUTRMQ3hBV0VCRVRGQlVWRlF3UEZ4Z1dGQmdTRkJVVS85c0FRd0VEQkFRRkJBVUpCUVVKRkEwTERSUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVLzhBQUVRZ0FJQUFnQXdFUkFBSVJBUU1SQWYvRUFCOEFBQUVGQVFFQkFRRUJBQUFBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUUFBSUJBd01DQkFNRkJRUUVBQUFCZlFFQ0F3QUVFUVVTSVRGQkJoTlJZUWNpY1JReWdaR2hDQ05Dc2NFVlV0SHdKRE5pY29JSkNoWVhHQmthSlNZbktDa3FORFUyTnpnNU9rTkVSVVpIU0VsS1UxUlZWbGRZV1ZwalpHVm1aMmhwYW5OMGRYWjNlSGw2ZzRTRmhvZUlpWXFTazVTVmxwZVltWnFpbzZTbHBxZW9xYXF5czdTMXRyZTR1YnJDdzhURnhzZkl5Y3JTMDlUVjF0ZlkyZHJoNHVQazVlYm42T25xOGZMejlQWDI5L2o1K3YvRUFCOEJBQU1CQVFFQkFRRUJBUUVBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUkFBSUJBZ1FFQXdRSEJRUUVBQUVDZHdBQkFnTVJCQVVoTVFZU1FWRUhZWEVUSWpLQkNCUkNrYUd4d1Frak0xTHdGV0p5MFFvV0pEVGhKZkVYR0JrYUppY29LU28xTmpjNE9UcERSRVZHUjBoSlNsTlVWVlpYV0ZsYVkyUmxabWRvYVdwemRIVjJkM2g1ZW9LRGhJV0doNGlKaXBLVGxKV1dsNWlabXFLanBLV21wNmlwcXJLenRMVzJ0N2k1dXNMRHhNWEd4OGpKeXRMVDFOWFcxOWpaMnVMajVPWG01K2pwNnZMejlQWDI5L2o1K3YvYUFBd0RBUUFDRVFNUkFEOEE5YzhZL0VHeDBMVHpwdmhhRXpzM1ZrNXI4eHp2aU9uS0hzNHlzajdiQVpYS2svYVlnOHg4UmZFRHhmSHBtMlMxa1NBREo0cjR0WnZScndWS016N1RMYVdGNTNKN2t2d1MrS092djRsUlVqY1FidVNSWFRMTlhsdE82a2VYeERRcDFJM2hIVSsydEp1VjhYYWFJcEcyekVDdnRNaHp6KzBZOGplcCtWY2p3cytlU1BqM3dzWS9DdDhzTTBYbVRzY0hmeml2d3JPc0ppRTNHbzdXUDJuRXhqaTZmdEtiMFBUdGVsczd6dzNJV3Rra1lwOTBMWDUvaGxVaGlGNzFqd2FOS3BUcUpubTNoeVJOSTNPbG9JRzNkUU1WOVhpYjFyTG11ZlowNmNhMFBlUGZ2Z2xyVTJvNmp5U1Z4WDNuQkRuREY4dlErQTRsd1ZPbFQ1b25sZnhCK0dPdFJlSm51N2FMZkFUMVVkSy9RZUxjaGxOT3ZCR1dSWjNTVk5VYWpOVFFiVzZoalcybmpaaVJqQkZmelZpOEZXVlJxTVhjK3dsVnBTWE1tVzcvQU9HbXA2cktqV3NCRWJIbml2cE1yeVRHNGlOM0JuT3MzdzlEU1VqMkg0VWVBMjhJSjVsemdNUjFOZnMvRE9VU3l5ZnRjUXJId09mWm9zZDd0TSthdjJmL0FOcjZ6OFplRm5sMWtMSmNvTWtHdjJYRnlqSjhrMW9mRVVLVXJweGVwbzNYN1ovdy9zTlJrU2UzQ1RSbkJHSzhWOE9ZQ3JQMnJnajZKUEZLUEx6R0o0bi9BT0NqL2huUm9mSzB5MUROMEJ4WHIwOEJoNkN0R0tSeFN3OWFXclozL3dBSy93Qm8yNStMTm1zeUh5MVlaQUZmRzhSWmRXeGxMa3cwck01OFBQMkZTMVJILzlrPSI+Cgk8L2ltYWdlPgo8L3N2Zz4=\"}}', 37, '2021-08-15 16:19:05', '2021-08-15 16:19:12'),
(47, 'App\\Models\\User', 19, '9d021b64-95c6-46fe-81fd-fe8126c49326', 'avatar', 'icon', 'Oluokun-kabiru-Adesiina.png', 'image/jpeg', 'uploads', 'uploads', 282364, '[]', '[]', '{\"avatar\":true}', '{\"avatar\":{\"urls\":[\"Oluokun-kabiru-Adesiina___avatar_50_50.jpg\"],\"base64svg\":\"data:image\\/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNTAgNTAiPgoJPGltYWdlIHdpZHRoPSI1MCIgaGVpZ2h0PSI1MCIgeGxpbms6aHJlZj0iZGF0YTppbWFnZS9qcGVnO2Jhc2U2NCwvOWovNEFBUVNrWkpSZ0FCQVFFQVlBQmdBQUQvL2dBN1ExSkZRVlJQVWpvZ1oyUXRhbkJsWnlCMk1TNHdJQ2gxYzJsdVp5QkpTa2NnU2xCRlJ5QjJOaklwTENCeGRXRnNhWFI1SUQwZ09UQUsvOXNBUXdBREFnSURBZ0lEQXdNREJBTURCQVVJQlFVRUJBVUtCd2NHQ0F3S0RBd0xDZ3NMRFE0U0VBME9FUTRMQ3hBV0VCRVRGQlVWRlF3UEZ4Z1dGQmdTRkJVVS85c0FRd0VEQkFRRkJBVUpCUVVKRkEwTERSUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVLzhBQUVRZ0FJQUFnQXdFUkFBSVJBUU1SQWYvRUFCOEFBQUVGQVFFQkFRRUJBQUFBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUUFBSUJBd01DQkFNRkJRUUVBQUFCZlFFQ0F3QUVFUVVTSVRGQkJoTlJZUWNpY1JReWdaR2hDQ05Dc2NFVlV0SHdKRE5pY29JSkNoWVhHQmthSlNZbktDa3FORFUyTnpnNU9rTkVSVVpIU0VsS1UxUlZWbGRZV1ZwalpHVm1aMmhwYW5OMGRYWjNlSGw2ZzRTRmhvZUlpWXFTazVTVmxwZVltWnFpbzZTbHBxZW9xYXF5czdTMXRyZTR1YnJDdzhURnhzZkl5Y3JTMDlUVjF0ZlkyZHJoNHVQazVlYm42T25xOGZMejlQWDI5L2o1K3YvRUFCOEJBQU1CQVFFQkFRRUJBUUVBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUkFBSUJBZ1FFQXdRSEJRUUVBQUVDZHdBQkFnTVJCQVVoTVFZU1FWRUhZWEVUSWpLQkNCUkNrYUd4d1Frak0xTHdGV0p5MFFvV0pEVGhKZkVYR0JrYUppY29LU28xTmpjNE9UcERSRVZHUjBoSlNsTlVWVlpYV0ZsYVkyUmxabWRvYVdwemRIVjJkM2g1ZW9LRGhJV0doNGlKaXBLVGxKV1dsNWlabXFLanBLV21wNmlwcXJLenRMVzJ0N2k1dXNMRHhNWEd4OGpKeXRMVDFOWFcxOWpaMnVMajVPWG01K2pwNnZMejlQWDI5L2o1K3YvYUFBd0RBUUFDRVFNUkFEOEE5YzhZL0VHeDBMVHpwdmhhRXpzM1ZrNXI4eHp2aU9uS0hzNHlzajdiQVpYS2svYVlnOHg4UmZFRHhmSHBtMlMxa1NBREo0cjR0WnZScndWS016N1RMYVdGNTNKN2t2d1MrS092djRsUlVqY1FidVNSWFRMTlhsdE82a2VYeERRcDFJM2hIVSsydEp1VjhYYWFJcEcyekVDdnRNaHp6KzBZOGplcCtWY2p3cytlU1BqM3dzWS9DdDhzTTBYbVRzY0hmeml2d3JPc0ppRTNHbzdXUDJuRXhqaTZmdEtiMFBUdGVsczd6dzNJV3Rra1lwOTBMWDUvaGxVaGlGNzFqd2FOS3BUcUpubTNoeVJOSTNPbG9JRzNkUU1WOVhpYjFyTG11ZlowNmNhMFBlUGZ2Z2xyVTJvNmp5U1Z4WDNuQkRuREY4dlErQTRsd1ZPbFQ1b25sZnhCK0dPdFJlSm51N2FMZkFUMVVkSy9RZUxjaGxOT3ZCR1dSWjNTVk5VYWpOVFFiVzZoalcybmpaaVJqQkZmelZpOEZXVlJxTVhjK3dsVnBTWE1tVzcvQU9HbXA2cktqV3NCRWJIbml2cE1yeVRHNGlOM0JuT3MzdzlEU1VqMkg0VWVBMjhJSjVsemdNUjFOZnMvRE9VU3l5ZnRjUXJId09mWm9zZDd0TSthdjJmL0FOcjZ6OFplRm5sMWtMSmNvTWtHdjJYRnlqSjhrMW9mRVVLVXJweGVwbzNYN1ovdy9zTlJrU2UzQ1RSbkJHSzhWOE9ZQ3JQMnJnajZKUEZLUEx6R0o0bi9BT0NqL2huUm9mSzB5MUROMEJ4WHIwOEJoNkN0R0tSeFN3OWFXclozL3dBSy93Qm8yNStMTm1zeUh5MVlaQUZmRzhSWmRXeGxMa3cwck01OFBQMkZTMVJILzlrPSI+Cgk8L2ltYWdlPgo8L3N2Zz4=\"}}', 38, '2021-08-15 16:24:30', '2021-08-15 16:24:32');
INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(48, 'App\\Models\\User', 20, '5e79daf1-947b-4f8f-aa92-c27d9e919cc1', 'avatar', '5', 'oluokun-kabiru-village-boy.png', 'image/jpeg', 'uploads', 'uploads', 66512, '[]', '[]', '{\"avatar\":true}', '{\"avatar\":{\"urls\":[\"oluokun-kabiru-village-boy___avatar_50_37.jpg\"],\"base64svg\":\"data:image\\/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNTAgMzciPgoJPGltYWdlIHdpZHRoPSI1MCIgaGVpZ2h0PSIzNyIgeGxpbms6aHJlZj0iZGF0YTppbWFnZS9qcGVnO2Jhc2U2NCwvOWovNEFBUVNrWkpSZ0FCQVFFQVlBQmdBQUQvL2dBN1ExSkZRVlJQVWpvZ1oyUXRhbkJsWnlCMk1TNHdJQ2gxYzJsdVp5QkpTa2NnU2xCRlJ5QjJOaklwTENCeGRXRnNhWFI1SUQwZ09UQUsvOXNBUXdBREFnSURBZ0lEQXdNREJBTURCQVVJQlFVRUJBVUtCd2NHQ0F3S0RBd0xDZ3NMRFE0U0VBME9FUTRMQ3hBV0VCRVRGQlVWRlF3UEZ4Z1dGQmdTRkJVVS85c0FRd0VEQkFRRkJBVUpCUVVKRkEwTERSUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVLzhBQUVRZ0FGd0FmQXdFUkFBSVJBUU1SQWYvRUFCOEFBQUVGQVFFQkFRRUJBQUFBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUUFBSUJBd01DQkFNRkJRUUVBQUFCZlFFQ0F3QUVFUVVTSVRGQkJoTlJZUWNpY1JReWdaR2hDQ05Dc2NFVlV0SHdKRE5pY29JSkNoWVhHQmthSlNZbktDa3FORFUyTnpnNU9rTkVSVVpIU0VsS1UxUlZWbGRZV1ZwalpHVm1aMmhwYW5OMGRYWjNlSGw2ZzRTRmhvZUlpWXFTazVTVmxwZVltWnFpbzZTbHBxZW9xYXF5czdTMXRyZTR1YnJDdzhURnhzZkl5Y3JTMDlUVjF0ZlkyZHJoNHVQazVlYm42T25xOGZMejlQWDI5L2o1K3YvRUFCOEJBQU1CQVFFQkFRRUJBUUVBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUkFBSUJBZ1FFQXdRSEJRUUVBQUVDZHdBQkFnTVJCQVVoTVFZU1FWRUhZWEVUSWpLQkNCUkNrYUd4d1Frak0xTHdGV0p5MFFvV0pEVGhKZkVYR0JrYUppY29LU28xTmpjNE9UcERSRVZHUjBoSlNsTlVWVlpYV0ZsYVkyUmxabWRvYVdwemRIVjJkM2g1ZW9LRGhJV0doNGlKaXBLVGxKV1dsNWlabXFLanBLV21wNmlwcXJLenRMVzJ0N2k1dXNMRHhNWEd4OGpKeXRMVDFOWFcxOWpaMnVMajVPWG01K2pwNnZMejlQWDI5L2o1K3YvYUFBd0RBUUFDRVFNUkFEOEE5MytPbnhPbDhON1lMV1FCejFGZm5PYjVrNFM5blRaNm1Ed3ZNdWFSODJhajhSTmF2dFRXNFdYQlU1RmZLL1hKdXprZXdxTVk2SSt2ZmdEcTk1NGs4TkNUVStlTUExOS9sZUtsS243NTg5aklSVTdST3cxblJRWkNZRG5ucFgwVVpLZXg1YmpZK01makhxTTJwNjdJOHdmYXZOZmlGZXJVcVZIS1c1OTlTakdNYkk4bXNQRWR2ZGFrMFpPMktNOG10cFVKMDRLUzNKVWs1TkgwMThGZmpkQTBTYVRhcWRxREc0VjlabDFTcHlKU1I4N2pJcFR1bWZRM2hDL24xVzZrZHNzdU04MTloZzdzOHFSNXA4V2ZnOWI2ell6WGx1RWpmYWNpdmtjNHlkZnhxZWxqNkRCWXo3TWo0NDhRZkQwMmwrOXBiTUVta2ZhV3pYeldDcVNyVmxTbDBQVXJKUmh6SStxdjJZUDJlNHREczF2NzlrbmtjWjRPYS9Vc0hnb3dqZG55VmVvNU0rZ2ZFR3JXUGdHMlJvNE03ampnVjY2akduc2NqWi8vMlE9PSI+Cgk8L2ltYWdlPgo8L3N2Zz4=\"}}', 39, '2021-08-15 16:32:27', '2021-08-15 16:32:28'),
(51, 'App\\Models\\Book', 4, 'd1a42e20-0b88-4273-9360-a18b0ca1c67d', 'books', 'img_2', 'img_2.jpg', 'image/jpeg', 'uploads', 'uploads', 82710, '[]', '[]', '[]', '[]', 40, '2021-09-06 01:11:46', '2021-09-06 01:11:46'),
(54, 'App\\Models\\Blog', 12, 'd6cee166-c41d-4720-a2aa-25a3c19b4d97', 'blogs', 'img_2', 'Good_morning_everybody', 'image/jpeg', 'uploads', 'uploads', 82710, '[]', '[]', '[]', '[]', 41, '2021-09-06 01:22:33', '2021-09-06 01:22:33'),
(56, 'App\\Models\\Event', 8, '0d42f101-9c4a-4d70-bb87-4469e12950d9', 'events', 'model_2_bg', 'let_code_it', 'image/jpeg', 'uploads', 'uploads', 71659, '[]', '[]', '[]', '[]', 43, '2021-09-06 01:52:06', '2021-09-06 01:52:06'),
(57, 'App\\Models\\Event', 7, 'c52360b6-1d9f-4aa1-9007-084a18300cb5', 'events', 'person_4', 'person_4.jpg', 'image/jpeg', 'uploads', 'uploads', 86756, '[]', '[]', '[]', '[]', 44, '2021-09-06 01:55:02', '2021-09-06 01:55:02'),
(58, 'App\\Models\\Nugget', 6, 'a5f88d7c-7497-4df4-9f9f-d201de5fd693', 'nuggets', 'hero_2', 'hero_2.jpg', 'image/jpeg', 'uploads', 'uploads', 345889, '[]', '[]', '[]', '[]', 45, '2021-09-06 02:28:43', '2021-09-06 02:28:43'),
(59, 'App\\Models\\Nugget', 5, '782daf27-639b-4e0b-baff-351c32209b4a', 'nuggets', 'model_3_bg', 'model_3_bg.jpg', 'image/jpeg', 'uploads', 'uploads', 62948, '[]', '[]', '[]', '[]', 46, '2021-09-06 02:32:29', '2021-09-06 02:32:29'),
(60, 'App\\Models\\Nugget', 4, 'a81772ac-70dc-4b81-a548-57ad311bd1f7', 'nuggets', 'person_2', 'person_2.jpg', 'image/jpeg', 'uploads', 'uploads', 28652, '[]', '[]', '[]', '[]', 47, '2021-09-06 02:32:47', '2021-09-06 02:32:47'),
(61, 'App\\Models\\Nugget', 3, 'e4d4e45c-5bf4-42f7-a2a8-3dcbbc1f049f', 'nuggets', 'product_1', 'product_1.png', 'image/png', 'uploads', 'uploads', 870525, '[]', '[]', '[]', '[]', 48, '2021-09-06 02:33:05', '2021-09-06 02:33:05');

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
(17, '2021_08_01_233755_create_testimonies_table', 9),
(18, '2021_08_07_023548_create_privatemessages_table', 10);

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
('047b39f7-5aae-46b5-80e8-788030116236', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 2, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/21\\/conversions\\/koadit_cbt_00000-avatar.jpg\",\"name\":\"Blog\",\"status\":\"New blog added\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/blog\\/10\\/read\\/Good_evening_here\"}', NULL, '2021-09-06 01:10:23', '2021-09-06 01:10:23'),
('161d32a7-3f71-4710-bbb1-ed32f23e3b03', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/21\\/conversions\\/koadit_cbt_00000-avatar.jpg\",\"name\":\"Testimony\",\"status\":\"New testimony added\",\"url\":\"\"}', '2021-09-06 02:17:08', '2021-09-06 02:11:54', '2021-09-06 02:17:08'),
('22737fd8-dfea-47e3-8ab2-1f6ec68d08a0', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/46\\/conversions\\/Oluokun-kabiru-Adesiina-avatar.jpg\",\"name\":\"User\",\"status\":\"New member registered\",\"url\":\"\"}', '2021-08-19 08:39:36', '2021-08-15 16:19:14', '2021-08-19 08:39:36'),
('2352e017-781c-4a09-bf38-1ca8bb45e455', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/2\\/conversions\\/village-boy-adesina-avatar.jpg\",\"name\":\"message\",\"status\":\"You have new message\",\"url\":\"\"}', '2021-08-11 06:26:21', '2021-08-11 05:01:09', '2021-08-11 06:26:21'),
('2d6ccbe9-4b11-4450-afe8-fb9c234cbe57', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/48\\/conversions\\/oluokun-kabiru-village-boy-avatar.jpg\",\"name\":\"User\",\"status\":\"New member registered\",\"url\":\"\"}', '2021-08-19 08:39:35', '2021-08-15 16:32:28', '2021-08-19 08:39:35'),
('390e86f6-694f-44c0-8c60-4cadcb2ad9f3', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/2\\/conversions\\/village-boy-adesina-avatar.jpg\",\"name\":\"message\",\"status\":\"You have new message\",\"url\":\"\"}', '2021-08-11 06:26:21', '2021-08-11 05:46:41', '2021-08-11 06:26:21'),
('3fe757e0-3970-46ef-ae06-37ae66b0b881', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/43\\/conversions\\/Oluokun-kabiru-Adesiina-avatar.jpg\",\"name\":\"User\",\"status\":\"New member registered\",\"url\":\"\"}', '2021-08-19 08:39:36', '2021-08-15 15:48:25', '2021-08-19 08:39:36'),
('4578bc5e-8640-45bd-a822-6f0f24e2be76', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/21\\/conversions\\/koadit_cbt_00000-avatar.jpg\",\"name\":\"blog\",\"status\":\"Blog deactivate \",\"url\":\"\"}', '2021-08-11 06:26:21', '2021-08-07 06:04:32', '2021-08-11 06:26:21'),
('47d65834-a84d-44ab-8dda-42f10dbfa2e5', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/21\\/conversions\\/koadit_cbt_00000-avatar.jpg\",\"name\":\"Testimony\",\"status\":\"Testimony approved\",\"url\":\"\"}', '2021-09-06 02:17:08', '2021-09-06 02:16:53', '2021-09-06 02:17:08'),
('4b74a6b4-04e6-4cc4-aba0-cc31fa3e00a6', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 2, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/21\\/conversions\\/koadit_cbt_00000-avatar.jpg\",\"name\":\"Blog\",\"status\":\"New blog added\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/blog\\/9\\/read\\/version_two_blog\"}', NULL, '2021-09-06 00:55:06', '2021-09-06 00:55:06'),
('4fc733d0-ea6c-4430-a915-271718589e09', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 2, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/21\\/conversions\\/koadit_cbt_00000-avatar.jpg\",\"name\":\"message\",\"status\":\"You have new message\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/messages\\/chat\\/2\\/conversation\\/village_boy_adesina\"}', '2021-08-11 05:52:33', '2021-08-11 05:50:52', '2021-08-11 05:52:33'),
('5091a90a-680c-4616-b306-7e220747433d', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 8, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/21\\/conversions\\/koadit_cbt_00000-avatar.jpg\",\"name\":\"message\",\"status\":\"You have new message\",\"url\":\"\"}', NULL, '2021-08-07 08:09:20', '2021-08-07 08:09:20'),
('56498839-7fbb-4fac-a410-c8e7d7689785', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 2, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/21\\/conversions\\/koadit_cbt_00000-avatar.jpg\",\"name\":\"message\",\"status\":\"You have new message\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/messages\\/chat\\/1\\/conversation\\/village_boy_adesina\"}', '2021-08-11 05:56:45', '2021-08-11 05:56:22', '2021-08-11 05:56:45'),
('5d3418d1-06da-4409-afc0-eb4078556510', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 2, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/21\\/conversions\\/koadit_cbt_00000-avatar.jpg\",\"name\":\"message\",\"status\":\"You have new message\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/messages\\/chat\\/1\\/conversation\\/village_boy_adesina\"}', '2021-08-11 06:24:59', '2021-08-11 06:24:22', '2021-08-11 06:24:59'),
('5e5fa88f-4138-4ede-8494-a495c63a58d4', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 2, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/21\\/conversions\\/koadit_cbt_00000-avatar.jpg\",\"name\":\"Gallery\",\"status\":\"New photo added to gallery\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/36\\/5.jpg\"}', '2021-08-07 06:32:47', '2021-08-07 06:19:18', '2021-08-07 06:32:47'),
('5f8c9849-f629-41aa-ba8c-ebe45f999cc4', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"avatar\":\"http:\\/\\/localhost\\/app\\/public\\/uploads\\/media\\/21\\/conversions\\/koadit_cbt_00000-avatar.jpg\",\"name\":\"Event\",\"status\":\"New event added\",\"url\":\"http:\\/\\/localhost\\/app\\/public\\/event\\/6\\/full-details\\/ksdfdsfd\"}', '2021-09-06 02:17:09', '2021-08-22 10:45:59', '2021-09-06 02:17:09'),
('5fd8596e-f305-4686-9586-13b904df41c6', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/21\\/conversions\\/koadit_cbt_00000-avatar.jpg\",\"name\":\"Event\",\"status\":\"New event added\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/event\\/8\\/full-details\\/let_code_it\"}', '2021-09-06 02:17:09', '2021-09-06 01:52:06', '2021-09-06 02:17:09'),
('62ab8db4-916e-41ee-803d-08cb862079fe', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/40\\/conversions\\/oluokun-kabiru-avatar.jpg\",\"name\":\"User\",\"status\":\"New member registered\",\"url\":\"\"}', '2021-08-19 08:39:36', '2021-08-15 15:31:35', '2021-08-19 08:39:36'),
('65a647ce-01b5-4db6-aced-cf9ccac1db2d', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 2, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/21\\/conversions\\/koadit_cbt_00000-avatar.jpg\",\"name\":\"message\",\"status\":\"You have new message\",\"url\":\"\"}', '2021-08-11 05:52:40', '2021-08-07 06:32:20', '2021-08-11 05:52:40'),
('6d87b1ba-db73-4694-aa16-2af44f8a78b7', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"avatar\":\"http:\\/\\/localhost\\/wcn\\/public\\/uploads\\/media\\/45\\/conversions\\/Oluokun-kabiru-Adesiina-avatar.jpg\",\"name\":\"User\",\"status\":\"New member registered\",\"url\":\"\"}', '2021-08-19 08:39:36', '2021-08-15 16:02:20', '2021-08-19 08:39:36'),
('816a4955-5a40-43f0-b35d-fcd4af85ae35', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/47\\/conversions\\/Oluokun-kabiru-Adesiina-avatar.jpg\",\"name\":\"User\",\"status\":\"New member registered\",\"url\":\"\"}', '2021-08-19 08:39:35', '2021-08-15 16:24:32', '2021-08-19 08:39:35'),
('8272d32e-8946-44d2-8a92-d3f236eaf5f3', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 2, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/21\\/conversions\\/koadit_cbt_00000-avatar.jpg\",\"name\":\"message\",\"status\":\"You have new message\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/messages\\/chat\\/1\\/conversation\\/village_boy_adesina\"}', '2021-08-11 06:24:59', '2021-08-11 06:07:23', '2021-08-11 06:24:59'),
('92db936f-9b84-4b06-b06d-d16006acfb84', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/21\\/conversions\\/koadit_cbt_00000-avatar.jpg\",\"name\":\"Event\",\"status\":\"New event added\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/event\\/7\\/full-details\\/Good_evening_here\"}', '2021-09-06 02:17:09', '2021-09-06 01:51:24', '2021-09-06 02:17:09'),
('9e003f3b-3aa8-4e35-8443-844f27863552', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 8, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/21\\/conversions\\/koadit_cbt_00000-avatar.jpg\",\"name\":\"message\",\"status\":\"You have new message\",\"url\":\"\"}', NULL, '2021-08-07 08:11:10', '2021-08-07 08:11:10'),
('ac475b07-d81d-4d63-a7aa-f72243c1c297', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 2, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/21\\/conversions\\/koadit_cbt_00000-avatar.jpg\",\"name\":\"message\",\"status\":\"You have new message\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/messages\\/chat\\/2\\/conversation\\/village_boy_adesina\"}', '2021-08-11 05:56:54', '2021-08-11 05:54:01', '2021-08-11 05:56:54'),
('ae33f172-761c-4599-9657-78a600d34b08', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 7, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/21\\/conversions\\/koadit_cbt_00000-avatar.jpg\",\"name\":\"message\",\"status\":\"You have new message\",\"url\":\"\"}', NULL, '2021-08-11 04:23:18', '2021-08-11 04:23:18'),
('ae9c7871-5dcf-45b2-b66c-4b8182f21743', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 2, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/21\\/conversions\\/koadit_cbt_00000-avatar.jpg\",\"name\":\"Blog\",\"status\":\"New blog added\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/blog\\/12\\/read\\/Good_morning_everybody\"}', NULL, '2021-09-06 01:22:33', '2021-09-06 01:22:33'),
('b501e9a5-9773-4607-a144-f54d0397489d', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 2, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/21\\/conversions\\/koadit_cbt_00000-avatar.jpg\",\"name\":\"Blog\",\"status\":\"New blog added\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/blog\\/11\\/read\\/Good_evening_here\"}', NULL, '2021-09-06 01:12:59', '2021-09-06 01:12:59'),
('bad2710d-e748-4e24-87d0-19a143aed1c2', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/21\\/conversions\\/koadit_cbt_00000-avatar.jpg\",\"name\":\"comment\",\"status\":\"You delete you comment\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/blog\\/2\\/read\\/2\"}', '2021-08-19 08:39:35', '2021-08-19 08:38:28', '2021-08-19 08:39:35'),
('d85f8275-d5de-47cd-ba67-0fe19c62aa23', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/42\\/conversions\\/Oluokun-kabiru-Adesiina-avatar.jpg\",\"name\":\"User\",\"status\":\"New member registered\",\"url\":\"\"}', '2021-08-19 08:39:36', '2021-08-15 15:46:58', '2021-08-19 08:39:36'),
('dc535e0f-511c-479c-b709-40aa47634d64', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 2, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/21\\/conversions\\/koadit_cbt_00000-avatar.jpg\",\"name\":\"message\",\"status\":\"You have new message\",\"url\":\"\"}', '2021-08-11 05:52:36', '2021-08-11 05:08:43', '2021-08-11 05:52:36'),
('ddc2906b-90bb-4501-a315-b5a869c59306', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/39\\/conversions\\/Oluokun-kabiru-Adesiina-avatar.jpg\",\"name\":\"User\",\"status\":\"New member registered\",\"url\":\"\"}', '2021-08-19 08:39:36', '2021-08-11 07:21:05', '2021-08-19 08:39:36'),
('e9ce69d1-f1aa-4966-bc69-b8b13324d847', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 11, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/21\\/conversions\\/koadit_cbt_00000-avatar.jpg\",\"name\":\"approved\",\"status\":\"approved successfully\",\"url\":\"\"}', NULL, '2021-08-11 07:37:19', '2021-08-11 07:37:19'),
('eaa19f78-9d59-473a-a946-d0b10e0999de', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/21\\/conversions\\/koadit_cbt_00000-avatar.jpg\",\"name\":\"comment\",\"status\":\"You added new comment\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/blog\\/2\\/read\\/2\"}', '2021-08-19 08:39:35', '2021-08-19 08:38:16', '2021-08-19 08:39:35'),
('ecb56ce2-decf-4d5a-baf7-dffbf16f0c27', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/21\\/conversions\\/koadit_cbt_00000-avatar.jpg\",\"name\":\"Gallery\",\"status\":\"New photo added to gallery\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/36\\/5.jpg\"}', '2021-08-11 06:26:21', '2021-08-07 06:19:18', '2021-08-11 06:26:21'),
('ee71631b-5dd1-4eea-b9fd-bc42c3d9f47e', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/41\\/conversions\\/oluokun-kabiru-avatar.jpg\",\"name\":\"User\",\"status\":\"New member registered\",\"url\":\"\"}', '2021-08-19 08:39:36', '2021-08-15 15:33:40', '2021-08-19 08:39:36'),
('f02083d2-892e-4ed8-a977-30b1058f0a9b', 'App\\Notifications\\ActivatorNofification', 'App\\Models\\User', 1, '{\"avatar\":\"http:\\/\\/127.0.0.1:8000\\/uploads\\/media\\/21\\/conversions\\/koadit_cbt_00000-avatar.jpg\",\"name\":\"Testimony\",\"status\":\"You approved testimony\",\"url\":\"\"}', '2021-09-06 02:17:08', '2021-09-06 02:16:53', '2021-09-06 02:17:08');

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
(3, '<p>We are here now We are here now We are here now We are here now We are here now <p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p></p>', 1, '2021-09-06 02:33:05', '2021-09-06 02:33:05'),
(4, '<p>We are here now We are here now We are here now We are here now We are here now <hr><p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p><p><img style=\"width: 25%;\" data-filename=\"koadit_cbt_00004.png\" src=\"/uploads/nuggets/oluokun_kabiru_1627311107_0.png\"><br></p><p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p><p><img style=\"width: 828px;\" data-filename=\"koadit_cbt_00012.png\" src=\"/uploads/nuggets/oluokun_kabiru_1627311107_1.png\"><br></p><p>We are here now We are here now We are here now We are here now We are here now </p></p>', 2, '2021-09-06 02:32:47', '2021-09-06 02:32:47'),
(5, '<p>ksh aksakfjhasj hjfasj hfkheio    quwi9    o iwueiou    y    twey7 ueu    ui  poqk w kviowe iwiofruiwe ajdajkfhuiw<p>kweihrwiru lq</p><p>Q</p><p>QJKHQWIRHWUR23I\\</p><p>W\'R</p><p>W29423UWI QW</p><p> LI Uye    uiy7p0    -o09wu HLK  KL ISJAI</p><p>kijfrioura9ueq </p><p>JWKjoqEIU    [1ququ<br></p></p>', 1, '2021-09-06 02:32:29', '2021-09-06 02:32:29'),
(6, '<p><a>\r\n                                </a><h5><a>\r\n                                    Village Boy Adesina Adesina<br></a></h5><a>\r\n                            </a><p>We are here now We are here now We are here now We are here now We are here now </p><hr><p>We are here now We are here now We are here now We are here now We are here now </p><p>We are here now We are here now We are here now We are here now We are here now </p><p></p></p>', 1, '2021-09-06 02:28:42', '2021-09-06 02:28:42');

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
-- Table structure for table `privatemessages`
--

CREATE TABLE `privatemessages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privatemessages`
--

INSERT INTO `privatemessages` (`id`, `user_id`, `message`, `sender`, `created_at`, `updated_at`) VALUES
(1, 1, '<p>Good morning<br></p>\n', 8, '2021-08-07 05:37:07', '2021-08-07 05:37:07'),
(2, 1, '<p>Good morning<br></p>\n', 8, '2021-08-07 05:45:18', '2021-08-07 05:45:18'),
(3, 1, '<p>Good morning<br></p>\n', 8, '2021-08-07 05:45:33', '2021-08-07 05:45:33'),
(4, 1, '<p>Good morning<br></p>\n', 8, '2021-08-07 05:57:11', '2021-08-07 05:57:11'),
(5, 1, '<p>Good morniing deAR ALL<p><img style=\"width: 25%;\" data-filename=\"5.jpg\" src=\"/uploads/messages/2_1628321540_0.png\"><br></p></p>\n', 2, '2021-08-07 06:32:20', '2021-08-07 06:32:20'),
(6, 8, '<p>Good morningg<br></p>\n', 1, '2021-08-07 08:09:20', '2021-08-07 08:09:20'),
(7, 8, '<p>Good morningg<br></p>\n', 1, '2021-08-07 08:11:10', '2021-08-07 08:11:10'),
(8, 7, '<p>Good morning<br></p>\n', 1, '2021-08-11 04:23:17', '2021-08-11 04:23:17'),
(9, 1, '<p>Good morning sir, I wanted to kno mowre akhka aj</p>\n', 2, '2021-08-11 05:01:09', '2021-08-11 05:01:09'),
(10, 2, '<p>Good day sir how are you akhdkshdas as hajskhjk a jahdkajj</p>\n', 1, '2021-08-11 05:08:43', '2021-08-11 05:08:43'),
(11, 1, '<p>I\'m fine sir, how is family and other inthe route<br></p>\n', 2, '2021-08-11 05:46:41', '2021-08-11 05:46:41'),
(12, 2, '<p>let praise god for his mercy<br></p>\n', 1, '2021-08-11 05:50:52', '2021-08-11 05:50:52'),
(13, 2, '<p>alkhksdh ajh akjh jka hajkhdja hkaHD AJ DASD SAJHD ASJ <br></p>\n', 1, '2021-08-11 05:54:01', '2021-08-11 05:54:01'),
(14, 2, '<p>Good day me chater&nbsp; jhkjh<p>ahkdhjkas</p><p>askdhajkdh<br></p></p>\n', 1, '2021-08-11 05:56:22', '2021-08-11 05:56:22'),
(15, 2, '<p>Ok god be with you<br></p>\n', 1, '2021-08-11 06:07:22', '2021-08-11 06:07:22'),
(16, 2, '<p>I need something from you<br></p>\n', 1, '2021-08-11 06:24:22', '2021-08-11 06:24:22');

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
(1, 1, 1, 0, 0, 1, 1, 1, 1, '2021-07-27 12:09:41', '2021-08-07 06:04:32'),
(5, 2, 0, 1, 0, 1, 0, 1, 0, '2021-08-01 14:45:32', '2021-08-02 10:03:53'),
(6, 5, 0, 0, 0, 0, 0, 0, 0, '2021-08-01 14:53:24', '2021-08-01 14:53:24'),
(7, 6, 0, 0, 0, 0, 0, 0, 0, '2021-08-02 10:10:36', '2021-08-02 10:10:36'),
(8, 7, 0, 0, 0, 0, 0, 0, 0, '2021-08-02 10:11:54', '2021-08-02 10:11:54'),
(9, 8, 0, 0, 0, 0, 0, 0, 0, '2021-08-02 10:17:04', '2021-08-02 10:17:04'),
(10, 9, 0, 0, 0, 0, 0, 0, 0, '2021-08-11 07:09:30', '2021-08-11 07:09:30'),
(11, 10, 0, 0, 0, 0, 0, 0, 0, '2021-08-11 07:16:03', '2021-08-11 07:16:03'),
(12, 11, 0, 0, 0, 0, 0, 0, 0, '2021-08-11 07:21:04', '2021-08-11 07:21:04'),
(13, 12, 0, 0, 0, 0, 0, 0, 0, '2021-08-15 15:31:35', '2021-08-15 15:31:35'),
(14, 13, 0, 0, 0, 0, 0, 0, 0, '2021-08-15 15:33:39', '2021-08-15 15:33:39'),
(15, 14, 0, 0, 0, 0, 0, 0, 0, '2021-08-15 15:46:58', '2021-08-15 15:46:58'),
(16, 15, 0, 0, 0, 0, 0, 0, 0, '2021-08-15 15:48:25', '2021-08-15 15:48:25'),
(17, 17, 0, 0, 0, 0, 0, 0, 0, '2021-08-15 16:02:20', '2021-08-15 16:02:20'),
(18, 18, 0, 0, 0, 0, 0, 0, 0, '2021-08-15 16:19:12', '2021-08-15 16:19:12'),
(19, 19, 0, 0, 0, 0, 0, 0, 0, '2021-08-15 16:24:32', '2021-08-15 16:24:32'),
(20, 20, 0, 0, 0, 0, 0, 0, 0, '2021-08-15 16:32:28', '2021-08-15 16:32:28');

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
(3, 1, 1, '<p>Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool</p>\n', '2021-08-01 23:38:14', '2021-09-06 02:16:53'),
(4, 1, 1, '<p>Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool                     \r\n                Let code it jare its very cool</p>\n', '2021-08-01 23:38:27', '2021-08-02 00:37:01'),
(5, 1, 0, 'akkjas jkasdh dsajd hajkdhajk dask<br>', '2021-09-06 02:11:53', '2021-09-06 02:11:53');

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
(20, 'oluokun kabiru village boy', 'oluokunkabiru2015@gmail.com', '89743894', 'member', 0, 'No', '2021-08-15 16:34:09', '$2y$10$oWtglTsGxYtG5OWvn0L2mud4oE9ZDjFnzo4agVAk2x5GcLEpggyLO', NULL, '2021-08-15 16:32:27', '2021-08-15 16:34:09', NULL);

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
-- Indexes for table `privatemessages`
--
ALTER TABLE `privatemessages`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `configurations`
--
ALTER TABLE `configurations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `nuggets`
--
ALTER TABLE `nuggets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `privatemessages`
--
ALTER TABLE `privatemessages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `testimonies`
--
ALTER TABLE `testimonies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
