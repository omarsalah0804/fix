-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2023 at 11:42 AM
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
-- Database: `masterpiece`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_services`
--

CREATE TABLE `booking_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quantity` varchar(255) NOT NULL,
  `total_price` decimal(8,2) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_time` time NOT NULL,
  `worker_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `status` enum('Pending','confirm','not available','completed') NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking_services`
--

INSERT INTO `booking_services` (`id`, `service_id`, `quantity`, `total_price`, `booking_date`, `booking_time`, `worker_id`, `user_id`, `note`, `name`, `email`, `phone`, `location`, `status`, `created_at`, `updated_at`) VALUES
(40, 1, '2', 40.00, '2024-02-22', '14:22:00', 2, 20, NULL, 'Customer', 'Customer@a.com', '0799742617', 'amman', 'Pending', '2023-11-13 02:35:06', '2023-11-13 02:35:06');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `logo`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Electrical Services', '20231027140445.jpg', '20231027140207.png', '', NULL, '2023-10-27 11:04:45'),
(2, 'Plumbing', '20231027141357.jpg', '20231027141259.png', '', NULL, '2023-10-27 11:13:57'),
(3, 'Air Conditioner', '20231027142045.jpg', '20231027142045.png', '', NULL, '2023-10-27 11:20:45'),
(4, 'Electronic Devices', '20231027142517.jpg', '20231027142517.png', '', NULL, '2023-10-27 11:25:17'),
(5, 'House Paint', '20231027142910.jpg', '20231027142910.png', '', NULL, '2023-10-27 11:29:10'),
(6, 'Carpentry Services', '20231027143131.jpg', '20231027143131.png', '', NULL, '2023-10-27 11:31:31'),
(7, 'Blacksmith', '20231027143418.jpg', '20231027143418.png', '', '2023-10-25 01:55:21', '2023-10-27 11:34:18'),
(8, 'Furniture Transfer', '20231027143750.jpg', '20231027143750.png', '', '2023-10-25 05:52:39', '2023-10-27 11:37:50'),
(9, 'Pest Control', '20231027145356.jpg', '20231027145356.png', '', '2023-10-27 11:53:56', '2023-10-27 11:54:08'),
(10, 'Maintenance Equipment', '20231027202111.jpg', '20231027202111.png', '', '2023-10-27 17:21:11', '2023-10-27 17:21:29');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'omar', 'oarsalah251@gmail.com', 'rate the website', 'thx', '2023-11-12 17:04:42', '2023-11-12 17:04:42');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_10_23_080048_create_contacts_table', 1),
(5, '2022_10_29_072550_create_categories_table', 1),
(6, '2022_10_29_072635_create_services_table', 1),
(7, '2022_10_29_074000_create_users_table', 1),
(8, '2022_11_23_092802_create_user_services_table', 1),
(9, '2022_12_29_103114_create_booking_services_table', 1),
(10, '2023_01_10_142126_create_ratings_table', 1),
(11, '2023_01_14_085337_create_website_ratings_table', 1),
(12, '2023_01_31_093940_create_work_samples_table', 1),
(13, '2023_10_20_090533_create_order_details_table', 1),
(14, '2024_10_20_131840_create_order_items_table', 1),
(15, '2014_10_12_100000_create_password_resets_table', 1),
(16, '2019_08_19_000000_create_failed_jobs_table', 1),
(17, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(18, '2022_10_23_080048_create_contacts_table', 1),
(19, '2022_10_29_072550_create_categories_table', 1),
(20, '2022_10_29_072635_create_services_table', 1),
(21, '2022_10_29_074000_create_users_table', 1),
(22, '2022_11_23_092802_create_user_services_table', 1),
(23, '2022_12_29_103114_create_booking_services_table', 1),
(24, '2023_01_10_142126_create_ratings_table', 1),
(25, '2023_01_14_085337_create_website_ratings_table', 1),
(26, '2023_01_31_093940_create_work_samples_table', 1),
(27, '2023_10_20_090533_create_order_details_table', 1),
(28, '2024_10_20_131840_create_order_items_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `status` enum('Pending','on the way','delivered') NOT NULL DEFAULT 'Pending',
  `note` text DEFAULT NULL,
  `address` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_details_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ali@yahoo.com', '$2y$10$iNXjBDBpALWi/ZA35hr0sOkUcCiXplLB9yGAGQYYrdBXX6pSnOQNW', '2023-01-29 09:58:24'),
('c@c.com', '$2y$10$kwHsbLUU235jXUhX4dQJXe7Vz/DPcNRVVkdhKtdUzzcAh8K6/ZKia', '2023-10-26 05:30:05'),
('omar@gmail.com', '$2y$10$T75OfkXYyg//pw.f1Tjo3.HYJ2WYz0Mz4ajV0/l9Bk4xauy.V/aqO', '2023-10-26 07:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `worker_id` bigint(20) UNSIGNED DEFAULT NULL,
  `rate` enum('1','2','3','4','5') NOT NULL DEFAULT '3',
  `comment` text NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `user_id`, `worker_id`, `rate`, `comment`, `created_at`, `updated_at`) VALUES
(1, 20, 2, '5', 'thx tom', '2023-11-13', '2023-11-13 02:27:37'),
(2, 20, 9, '5', 'thx jack', '2023-11-13', '2023-11-13 02:28:23'),
(3, 20, 19, '5', 'thx olivia', '2023-11-13', '2023-11-13 02:29:09'),
(4, 20, 10, '5', 'thx henry', '2023-11-13', '2023-11-13 02:29:39'),
(5, 20, 11, '5', 'thx daniel', '2023-11-13', '2023-11-13 02:30:13');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL DEFAULT '_',
  `image3` varchar(255) NOT NULL DEFAULT '_',
  `image4` varchar(255) NOT NULL DEFAULT '_',
  `type` enum('book_unit','book_hr','book_m2','cart') NOT NULL DEFAULT 'book_unit',
  `price` decimal(8,2) NOT NULL DEFAULT 0.00,
  `description` varchar(255) DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `image`, `image2`, `image3`, `image4`, `type`, `price`, `description`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Home Safety Inspections', '20231108043208.jpg', '20231108044842.jpg', '20231108044842.jpg', '20231108044842.jpg', 'book_unit', 20.00, 'Our comprehensive electrical safety inspections are designed to identify and address potential hazards, ensuring a secure environment and compliance with safety standards for your peace of mind.', 1, NULL, '2023-11-08 02:49:40'),
(2, 'Emergency Electrical Repairs', '20231108060815.jpg', '20231108060815.jpg', '20231108060815.jpg', '20231108060815.jpg', 'book_unit', 30.00, 'Delivering prompt repairs for essential electrical faults or outages, ensuring uninterrupted power supply and a safe environment, 24/7, for your peace of mind and operational continuity', 1, NULL, '2023-11-08 03:08:15'),
(3, 'Electrical Panel Upgrade', '20231108071229.jpg', '20231108071229.jpg', '20231108071229.jpg', '20231108071229.jpg', 'book_unit', 70.00, 'Enhancing your electrical panel to meet contemporary energy requirements, ensuring your home or facility can safely accommodate modern electrical demands and technologies for improved efficiency and safety', 1, NULL, '2023-11-08 04:12:29'),
(4, 'Electric Vehicle Charger Installation', '20231108074829.jpg', '20231108074829.jpg', '20231108074829.jpg', '20231108074829.jpg', 'book_unit', 150.00, 'Providing electric vehicle (EV) charging station installation services to accommodate electric car owners, promoting sustainable transportation and convenient access to charging infrastructure for EV users', 1, NULL, '2023-11-08 04:48:29'),
(5, 'Smoke Detector Installation/Replacement', '20231108081422.jpg', '20231108081422.jpg', '20231108081422.jpg', '20231108081422.jpg', 'book_unit', 100.00, 'Offering smoke detector installation and replacement services to enhance fire safety in homes and buildings, ensuring early detection of potential fire hazards for increased protection and peace of mind', 1, NULL, '2023-11-08 05:14:22'),
(6, 'Wiring Repair/Replacement', '20231108082652.jpg', '20231108082652.jpg', '20231108082652.jpg', '20231108082652.jpg', 'book_unit', 15.00, 'Expertly repairing or rewiring damaged electrical wiring within homes, enhancing safety, functionality, and compliance with electrical codes for a secure and efficient living environment.', 1, NULL, '2023-11-08 05:27:42'),
(7, 'Lighting Installation/Repair', '20231108085158.jpg', '20231108085158.jpg', '20231108085158.jpg', '20231108085158.jpg', 'book_unit', 15.00, 'Professionally installing or repairing lighting systems to enhance both security and aesthetics, creating a well-lit and visually appealing environment that contributes to safety and the overall ambiance of your space', 1, '2022-11-23 23:15:14', '2023-11-08 05:51:58'),
(8, 'Leak Repairs', '20231109052229.jpg', '20231109052229.jpg', '20231109052229.jpg', '20231109052229.jpg', 'book_unit', 15.00, 'Rapid identification and repair of pipe, faucet, or fixture leaks to prevent water damage, ensuring resource conservation and maintaining a sustainable and efficient plumbing system. Swift service for lasting protection', 2, '2022-11-23 23:20:05', '2023-11-09 02:22:29'),
(9, 'Clogged Drain Clearing', '20231109053313.jpg', '20231109053313.jpg', '20231109053313.jpg', '20231109053313.jpg', 'book_unit', 20.00, 'Swift and effective elimination of blockages in sinks, showers, or toilets, restoring optimal drainage and preventing backups. Our service ensures efficient plumbing and a hassle-free water flow.', 2, '2022-11-23 23:23:35', '2023-11-09 02:36:05'),
(10, 'Water Heater Maintenance', '20231109054047.jpg', '20231109054047.jpg', '20231109054047.jpg', '20231109054047.jpg', 'book_unit', 40.00, 'Routine check-ups, flushing, and repairs to guarantee peak performance and prolong the life of your water heater. Our service ensures reliable hot water supply and energy efficiency. Maintain comfort effortlessly', 2, '2022-11-23 23:28:35', '2023-11-09 02:40:47'),
(11, 'Pipe Replacement', '20231109054901.png', '20231109054901.jpg', '20231109054901.jpg', '20231109054901.jpg', 'book_unit', 25.00, 'Timely replacement of damaged or corroded pipes to prevent leaks, water damage, and maintain the integrity of your plumbing system. Our service safeguards your property and ensures long-term reliability', 2, '2022-11-23 23:40:19', '2023-11-09 02:49:47'),
(12, 'Fixture Installation', '20231109055642.jpg', '20231109055642.jpg', '20231109055642.jpg', '20231109055642.jpg', 'book_unit', 40.00, 'Precise installation of faucets, sinks, toilets, or showerheads, enhancing both functionality and aesthetics. Our service ensures a seamless blend of style and performance for a modern and efficient plumbing setup', 2, '2022-11-23 23:42:52', '2023-11-09 02:56:42'),
(13, 'Sump Pump Installation or Repair', '20231109060525.jpg', '20231109060525.jpg', '20231109060526.jpg', '20231109060526.jpg', 'book_unit', 45.00, 'Expert installation or repair of sump pumps to prevent basement flooding and protect your home during heavy rainfall or plumbing issues. Our service ensures a dry and secure foundation', 2, '2023-01-13 02:28:30', '2023-11-09 03:05:26'),
(14, 'Routine Maintenance', '20231109061625.jpg', '20231109061625.jpg', '20231109061625.jpg', '20231109061625.jpg', 'book_unit', 25.00, 'Regular check-ups, cleaning, and tune-ups for peak AC performance, energy efficiency, and a longer lifespan. Our service keeps your air conditioner running optimally and cost-effectively', 3, '2023-01-13 02:33:22', '2023-11-09 03:16:42'),
(15, 'Refrigerant Recharge', '20231109062545.jpg', '20231109062545.jpg', '20231109062545.jpg', '20231109062545.jpg', 'book_unit', 30.00, 'Replenishing refrigerant levels to maintain proper cooling, enhance efficiency, and prevent system malfunctions', 3, '2023-01-13 08:26:42', '2023-11-09 03:25:45'),
(16, 'Compressor Replacement', '20231109063321.jpg', '20231109063321.jpg', '20231109063321.jpg', '20231109063321.jpg', 'book_unit', 25.00, 'Replacement of a faulty compressor, ensuring the unit\'s ability to cool effectively and efficiently', 3, '2023-01-13 08:30:35', '2023-11-09 03:33:21'),
(17, 'Evaporator Coil Cleaning', '20231109063836.jpg', '20231109063836.jpg', '20231109063836.jpg', '20231109063836.jpg', 'book_unit', 35.00, 'Thorough cleaning of the evaporator coil to improve heat exchange and prevent cooling issues', 3, '2023-01-13 08:34:07', '2023-11-09 03:38:36'),
(18, 'Condenser Unit Repair/Replacement', '20231109064230.jpg', '20231109064230.jpg', '20231109064230.jpg', '20231109064230.jpg', 'book_unit', 50.00, 'Repairing or replacing the condenser unit to restore efficient heat dissipation and overall system function', 3, '2023-01-13 08:37:19', '2023-11-09 03:42:30'),
(19, 'Thermostat Replacement', '20231109064943.jpg', '20231109064943.jpg', '20231109064943.jpg', '20231109064943.jpg', 'book_unit', 25.00, 'Upgrading or replacing the thermostat for accurate temperature control and improved energy efficiency.', 3, '2023-01-13 08:55:55', '2023-11-09 03:50:09'),
(20, 'Refrigerator Repair', '20231112093602.jpg', '20231112093602.jpg', '20231112093602.jpg', '20231112093602.jpg', 'book_unit', 30.00, 'Professional diagnosis and repair for refrigerators, addressing issues like temperature control, leaks, or unusual noises to restore optimal cooling', 4, '2023-01-13 08:58:29', '2023-11-12 06:36:02'),
(21, 'Microwave Oven Repair', '20231112094413.jpg', '20231112094413.jpg', '20231112094413.jpg', '20231112094413.jpg', 'book_unit', 35.00, 'Expert repair for microwave ovens, addressing common issues such as faulty heating, turntable problems, or electrical malfunctions to ensure efficient cooking', 4, '2023-01-13 09:01:00', '2023-11-12 06:44:13'),
(22, 'Television Repair', '20231112095134.jpg', '20231112095134.jpg', '20231112095134.jpg', '20231112095134.jpg', 'book_unit', 25.00, 'Comprehensive TV repair service, including diagnosis and fixing display problems, audio issues, or power malfunctions for an enhanced viewing experience', 4, '2023-01-29 08:12:07', '2023-11-12 06:51:34'),
(23, 'Appliance Diagnostic and Repair', '20231112095648.jpg', '20231112095648.jpg', '20231112095648.jpg', '20231112095648.jpg', 'book_unit', 45.00, 'Expert diagnosis and repair for various home appliances, including washing machines, ovens, or dishwashers, ensuring proper functionality and extending their lifespan', 4, '2023-01-29 08:15:38', '2023-11-12 06:56:48'),
(24, 'Exterior Wall Painting', '20231112100658.jpg', '20231112100658.jpg', '20231112100658.jpg', '20231112100658.jpg', 'book_unit', 140.00, 'Expert exterior wall painting for a revitalized façade, protecting your home from the elements with durable and weather-resistant paints, ensuring long-lasting curb appeal', 5, '2023-01-29 08:18:19', '2023-11-12 07:06:58'),
(25, 'Ceiling Cleaning and Repainting', '20231112101152.jpg', '20231112101152.jpg', '20231112101152.jpg', '20231112101152.jpg', 'book_unit', 200.00, 'Expert exterior wall painting for a revitalized façade, protecting your home from the elements with durable and weather-resistant paints, ensuring long-lasting curb appeal', 5, '2023-01-29 08:23:18', '2023-11-12 07:13:44'),
(26, 'Ceiling Cleaning and Repainting', '20231112101727.jpg', '20231112101727.jpg', '20231112101727.jpg', '20231112101727.jpg', 'book_unit', 250.00, 'Thorough ceiling cleaning and repainting service, removing stains, discoloration, and applying a fresh coat for a brighter, cleaner, and well-maintained overhead space', 5, '2023-01-29 08:27:24', '2023-11-12 07:17:27'),
(27, 'Wallpaper Installation and Removal', '20231112102207.jpg', '20231112102207.jpg', '20231112102207.jpg', '20231112102207.jpg', 'book_unit', 200.00, 'Professional wallpaper services, including precise installation for a customized look or expert removal to refresh your walls, providing a quick and stylish transformation', 5, '2023-01-29 08:30:38', '2023-11-12 07:22:07'),
(28, 'Custom Furniture Building', '20231112102802.jpg', '20231112102802.jpg', '20231112102802.jpg', '20231112102802.jpg', 'book_unit', 400.00, 'Craftsmanship in building bespoke furniture pieces tailored to your style and space, combining functionality and aesthetics for a personalized touch to your home', 6, '2023-01-29 08:32:40', '2023-11-12 07:28:02'),
(29, 'Door Installation and Repair', '20231112103226.jpg', '20231112103226.jpg', '20231112103226.jpg', '20231112103226.jpg', 'book_unit', 200.00, 'Professional installation and repair of interior and exterior doors, ensuring proper functionality, security, and an enhanced appearance for your home', 6, '2023-01-29 08:35:40', '2023-11-12 07:32:26'),
(30, 'Wooden Flooring Installation', '20231112103601.jpg', '20231112103601.jpg', '20231112103601.jpg', '20231112103601.jpg', 'book_unit', 150.00, 'Precise installation of wooden flooring, enhancing the beauty of your space with durable and aesthetically pleasing wooden floorboards for a warm and inviting atmosphere', 6, '2023-01-29 08:38:05', '2023-11-12 07:36:01'),
(31, 'Built-in Closet and Cabinet Construction', '20231112104030.jpg', '20231112104030.jpg', '20231112104030.jpg', '20231112104030.jpg', 'book_unit', 300.00, 'Custom construction of built-in closets and cabinets, optimizing storage space with tailor-made designs that seamlessly integrate into your home, combining practicality and elegance', 6, '2023-01-29 08:40:34', '2023-11-12 07:40:30'),
(32, 'Wrought Iron Gate Fabrication and Installation', '20231112104609.jpg', '20231112104609.jpg', '20231112104609.jpg', '20231112104609.jpg', 'book_unit', 300.00, 'Craftsmanship in designing and installing durable wrought iron gates, enhancing security and aesthetics with custom-made, stylish entrances for your home', 7, '2023-01-29 08:43:41', '2023-11-12 07:46:09'),
(33, 'Metal Fence Construction', '20231112105029.jpg', '20231112105029.jpg', '20231112105029.jpg', '20231112105029.jpg', 'book_unit', 150.00, 'Expert construction of sturdy metal fences, providing security and defining property boundaries with durable materials and customized designs to suit your preferences', 7, '2023-01-29 08:48:04', '2023-11-12 07:50:29'),
(34, 'Local Furniture Moving', '20231112105546.jpg', '20231112105546.jpg', '20231112105546.jpg', '20231112105546.jpg', 'book_unit', 300.00, 'Efficient and careful relocation of furniture within your locality, ensuring a smooth transition to your new home with professional handling and transportation', 8, '2023-11-12 07:55:46', '2023-11-12 07:55:46'),
(35, 'Inter-City Furniture Transport', '20231112105855.jpg', '20231112105855.jpg', '20231112105855.jpg', '20231112105855.jpg', 'book_unit', 500.00, 'Secure and reliable transportation of furniture between cities, offering a hassle-free solution for your long-distance relocation needs with experienced movers and well-equipped vehicles', 8, '2023-11-12 07:58:55', '2023-11-12 07:58:55'),
(36, 'Furniture Assembly and Disassembly', '20231112110827.jpg', '20231112110827.jpg', '20231112110827.jpg', '20231112110827.jpg', 'book_unit', 100.00, 'Skilled assembly and disassembly of furniture items, ensuring proper handling and care during relocation, with the option of reassembly at the destination for added convenience', 8, '2023-11-12 08:08:27', '2023-11-12 08:08:27'),
(37, 'Packing and Unpacking Services', '20231112111115.jpg', '20231112111115.jpg', '20231112111115.jpg', '20231112111115.jpg', 'book_unit', 200.00, 'Comprehensive packing and unpacking services, providing careful handling of your belongings, efficient packing materials, and organized unpacking at your new residence, streamlining the moving process', 8, '2023-11-12 08:11:15', '2023-11-12 08:11:15'),
(38, 'General Pest Control', '20231112123322.jpg', '20231112123322.jpg', '20231112123322.jpg', '20231112123322.jpg', 'book_unit', 100.00, 'Comprehensive treatment to eliminate common pests like ants, cockroaches, and spiders, safeguarding your home with safe and effective solutions for long-lasting results', 9, '2023-11-12 09:33:22', '2023-11-12 09:33:22'),
(39, 'Rodent Extermination', '20231112123704.jpg', '20231112123704.jpg', '20231112123704.jpg', '20231112123704.jpg', 'book_unit', 150.00, 'Expert eradication of rodents, such as mice and rats, using strategic baiting and trapping methods, preventing damage and potential health risks in your home', 9, '2023-11-12 09:37:05', '2023-11-12 09:37:05'),
(40, 'Termite Inspection and Treatment', '20231112124009.jpg', '20231112124009.jpg', '20231112124009.jpg', '20231112124009.jpg', 'book_unit', 200.00, 'Thorough inspection and targeted treatment for termite infestations, protecting your property from structural damage with specialized solutions tailored to your home\'s needs', 9, '2023-11-12 09:40:09', '2023-11-12 09:40:09'),
(41, 'Bed Bug Removal', '20231112124357.jpg', '20231112124357.jpg', '20231112124357.jpg', '20231112124357.jpg', 'book_unit', 75.00, 'Specialized treatment to eliminate bed bug infestations, providing relief from bites and ensuring a pest-free sleeping environment with professional and safe eradication methods.', 9, '2023-11-12 09:43:57', '2023-11-12 09:43:57'),
(42, 'Ladder', '20231112125935.jpg', '20231112125935.jpg', '20231112125935.jpg', '20231112125935.jpg', 'cart', 20.00, 'Sturdy ladder for various tasks, reaching high places with safety, an essential tool for home maintenance', 10, '2023-11-12 09:55:39', '2023-11-12 09:59:35'),
(43, 'Maintenance Kit Bag', '20231112131847.jpg', '20231112131847.jpg', '20231112131847.jpg', '20231112131847.jpg', 'cart', 45.00, 'Portable bag with essential tools for repairs, convenient for organized and on-the-go home maintenance', 10, '2023-11-12 10:18:47', '2023-11-12 10:18:47'),
(44, 'Tool Set', '20231112132143.jpg', '20231112132143.jpg', '20231112132143.jpg', '20231112132235.jpg', 'cart', 40.00, 'Comprehensive toolkit with various tools for general repairs, offering versatility and convenience for DIY home maintenance', 10, '2023-11-12 10:21:43', '2023-11-12 10:22:35'),
(45, 'Power Drill', '20231112132452.jpg', '20231112132452.jpg', '20231112132452.jpg', '20231112132452.jpg', 'cart', 65.00, 'Electric drill for drilling and screwing tasks, speeding up home maintenance projects with efficiency and precision', 10, '2023-11-12 10:24:52', '2023-11-12 10:24:52'),
(46, 'Wrench Set', '20231112132811.jpg', '20231112132811.jpg', '20231112132811.jpg', '20231112132811.jpg', 'cart', 25.00, 'Adjustable wrench set for tightening or loosening nuts and bolts, a fundamental tool for plumbing and furniture maintenance', 10, '2023-11-12 10:28:11', '2023-11-12 10:28:11'),
(47, 'Plunge', '20231112133337.jpg', '20231112133337.jpg', '20231112133337.jpg', '20231112133337.jpg', 'cart', 30.00, 'Unclogging tool for sinks and drains, a simple and effective solution for basic plumbing maintenance in the home', 10, '2023-11-12 10:33:37', '2023-11-12 10:33:37'),
(48, 'Measuring Tape', '20231112133627.jpg', '20231112133627.jpg', '20231112133627.jpg', '20231112133627.jpg', 'cart', 5.00, 'Accurate measuring tool for various projects, essential for precision in home maintenance and DIY tasks', 10, '2023-11-12 10:36:28', '2023-11-12 10:36:28'),
(49, 'Paint Roller Kit', '20231112133842.jpg', '20231112133842.jpg', '20231112133842.jpg', '20231112133842.jpg', 'cart', 15.00, 'All-in-one paint roller kit for smooth and efficient painting, a must-have for home maintenance and improvement projects', 10, '2023-11-12 10:38:42', '2023-11-12 10:38:42'),
(50, 'Screwdriver Set', '20231112183451.jpg', '20231112183451.jpg', '20231112183451.jpg', '20231112183451.jpg', 'cart', 35.00, 'Set of screwdrivers for various screw types, facilitating the assembly and disassembly of furniture and fixtures in home maintenance', 10, '2023-11-12 15:34:51', '2023-11-12 15:34:51'),
(51, 'Flashlight', '20231112183715.jpg', '20231112183715.jpg', '20231112183715.jpg', '20231112183715.jpg', 'cart', 15.00, 'Portable and reliable flashlight for illuminating dark spaces during home maintenance tasks or emergencies', 10, '2023-11-12 15:37:15', '2023-11-12 15:37:33'),
(52, 'Safety Gloves', '20231112183944.jpg', '20231112183944.jpg', '20231112183944.jpg', '20231112183944.jpg', 'cart', 10.00, 'Durable and protective gloves for safe handling during various maintenance tasks, ensuring hand safety and comfort', 10, '2023-11-12 15:39:44', '2023-11-12 15:39:44'),
(53, 'Extension Cord', '20231112184404.jpg', '20231112184404.jpg', '20231112184404.jpg', '20231112184404.jpg', 'cart', 8.00, 'Extra-long power cord for reaching distant outlets, facilitating power tool usage in various home maintenance projects', 10, '2023-11-12 15:44:04', '2023-11-12 15:44:04'),
(54, 'Caulk Gun', '20231112184630.jpg', '20231112184630.jpg', '20231112184630.jpg', '20231112184630.jpg', 'cart', 9.00, 'Tool for applying caulk smoothly, ideal for sealing gaps and joints in windows, doors, and fixtures during home maintenance', 10, '2023-11-12 15:46:30', '2023-11-12 15:46:30'),
(55, 'Utility Knife', '20231112184835.jpg', '20231112184835.jpg', '20231112184835.jpg', '20231112184835.jpg', 'cart', 5.00, 'Versatile cutting tool for various materials, aiding in precision tasks during home maintenance and repairs', 10, '2023-11-12 15:48:35', '2023-11-12 15:48:35'),
(56, 'Sanding Block', '20231112185058.jpg', '20231112185058.jpg', '20231112185058.jpg', '20231112185058.jpg', 'cart', 6.00, 'Block for sanding surfaces, achieving smooth finishes in woodworking and painting projects, essential for home maintenance', 10, '2023-11-12 15:50:58', '2023-11-12 15:50:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.png',
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `type` enum('User','Admin','Worker','Driver') NOT NULL DEFAULT 'User',
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `image`, `phone`, `email`, `email_verified_at`, `password`, `type`, `category_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Omar', '20231112201634.jpg', '0799742617', 'a@a.com', NULL, '$2y$10$gEVhH7JwVivksDbJYyianed0v7eFvUdvmpZObBShN/bYZZZX4ww4u', 'Admin', NULL, 'nWcLrWsqzSMwgTyUFayo79rxBuIgiykWMYeuioCzVBPK5R4DjIfvSFVKcugc', NULL, NULL),
(2, 'Tom', '1699839443.png', '0799999999', 'tom@a.com', NULL, '$2y$10$mu9cyS08HU.DIKf.UnOwueohdnWkjY0CqdzAC3ZdeO/a6znZFEfB.', 'Worker', NULL, NULL, NULL, NULL),
(3, 'Ben', '1699839574.png', '0799999999', 'ben@a.com', NULL, '$2y$10$jimaouCg5oi8QFebkggvXuEluDjxaaZNMcpXYAoPA6vq.SMHXp.uO', 'Worker', NULL, NULL, NULL, NULL),
(4, 'Sara', '1699842970.png', '0799999999', 'sara@a.com', NULL, '$2y$10$8vJF1ozOvGcEaM.r8P.0nekRxqwVqeTs4ubAfsXuNlm9Ymi3nRQ9q', 'Worker', NULL, NULL, NULL, NULL),
(5, 'Lama', '1699843038.png', '0799999999', 'lama@a.com', NULL, '$2y$10$ThYNJ/uXchHJKyQxq8iZ0.NMyXfEzA5.5GZEXEOmyJK0us.4Zslda', 'Worker', NULL, NULL, NULL, NULL),
(6, 'Kate', '1699843137.png', '0799999999', 'kate@a.com', NULL, '$2y$10$1329pgb9dAGnHm7ZuLO6Y.mrssqGvf6sxvextwRVRMopYqkGlN6f.', 'Worker', NULL, NULL, NULL, NULL),
(7, 'adam', '1699843183.png', '0799999999', 'adam@a.com', NULL, '$2y$10$rkJphlspjSSgeMN0JAv8qOWRKVNWh6swaclWR8xRU.OfMZVoXcI2a', 'Worker', NULL, NULL, NULL, NULL),
(8, 'Lily', '1699843448.png', '0799999999', 'lily@a.com', NULL, '$2y$10$4KuKY4e8zeUDfJeN05iNrejtxXEBe5V.b3z5e9aIOsFtebDpGIiqq', 'Worker', NULL, NULL, NULL, NULL),
(9, 'Jack', '1699843504.png', '0799999999', 'jack@a.com', NULL, '$2y$10$ICcjk.6/DRY3y6mpcEv9SO8jjgach2ukqmt7F6rk6kLNvFnEKyDry', 'Worker', NULL, NULL, NULL, NULL),
(10, 'Henry', '1699843603.png', '0799999999', 'henry@a.com', NULL, '$2y$10$HE.XRtFjniCRJ42yZWV9PuaG.7N79/mUjWlrGQrzF2I6BrfM19W6K', 'Worker', NULL, NULL, NULL, NULL),
(11, 'Daniel', '1699843657.png', '0799999999', 'daniel@a.com', NULL, '$2y$10$kADOtvtBOVBDJNVnZIRoKOwMY/h3.uYjeQyX35GP/Z1jByp1eH67C', 'Worker', NULL, NULL, NULL, NULL),
(12, 'Logan', '1699843736.png', '0799999999', 'logan@a.com', NULL, '$2y$10$uI7eHxScRimiQISbYV7PZurU/U/ytMZN48/BIu0zNrmF61mACs/0K', 'Worker', NULL, NULL, NULL, NULL),
(13, 'Leo', '1699843788.png', '0799999999', 'leo@a.com', NULL, '$2y$10$gPz.8yxBH1mDtSB/523NIull5bzKHeTyZeO5edT7U3lPLbLMGDJAO', 'Worker', NULL, NULL, NULL, NULL),
(14, 'Ethan', '1699843843.png', '0799999999', 'ethan@a.com', NULL, '$2y$10$VIHTOHunVtgIuWgvcUmJfeEG3A3lSUEbCM5xaTdSdUlvXf.VYtlDW', 'Worker', NULL, NULL, NULL, NULL),
(15, 'Lucas', '1699843941.png', '0799999999', 'lucas@a.com', NULL, '$2y$10$MTXxE8O.FUw0crUsW9sY4O6TgQoLG0OIFBJvbzGRL8FD.oIOtrb/W', 'Worker', NULL, NULL, NULL, NULL),
(16, 'Noah', '1699844005.png', '0799999999', 'noah@a.com', NULL, '$2y$10$FNtS43a5xI3nf9su3cOGPOR07WR70imcBZuDuaMKx/nKKiCj9ndD6', 'Worker', NULL, NULL, NULL, NULL),
(17, 'James', '1699844109.png', '0799999999', 'james@gmail.com', NULL, '$2y$10$oMrLJlfrbjNHu3e8dg04huUZJt3h8eqTxz4HsKFXicyjgj7Gzl06e', 'Worker', NULL, NULL, NULL, NULL),
(18, 'Emily', '1699844189.png', '0799999999', 'emily@gmail.com', NULL, '$2y$10$rq2jjjPHecSY49Pa2lvaTeKtty/4oZqWJW8j7RkdJWUp6Nhb1uPuC', 'Worker', NULL, NULL, NULL, NULL),
(19, 'Olivia', '1699844267.png', '0799999999', 'olivia@a.com', NULL, '$2y$10$.jj2ZaeMggqKGGZRwpyya.HUFWvpEvYS8JHecvYgm9hOaP/h78d1W', 'Worker', NULL, NULL, NULL, NULL),
(20, 'Customer', '20231113054053.jpg', '0799742617', 'Customer@a.com', NULL, '$2y$10$TkEO7V0qXOcgyAV1xT4zaOgZ3THe2gAH8WzGl6PGKDXj/58qPAxZG', 'User', NULL, NULL, '2023-11-13 02:25:53', '2023-11-13 02:40:53');

-- --------------------------------------------------------

--
-- Table structure for table `user_services`
--

CREATE TABLE `user_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `service_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_services`
--

INSERT INTO `user_services` (`id`, `user_id`, `service_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 2, 3, NULL, NULL),
(4, 2, 4, NULL, NULL),
(5, 2, 5, NULL, NULL),
(6, 2, 6, NULL, NULL),
(7, 2, 7, NULL, NULL),
(8, 13, 1, NULL, NULL),
(9, 13, 2, NULL, NULL),
(10, 13, 3, NULL, NULL),
(11, 13, 4, NULL, NULL),
(12, 13, 5, NULL, NULL),
(13, 13, 6, NULL, NULL),
(14, 13, 7, NULL, NULL),
(15, 19, 1, NULL, NULL),
(16, 19, 2, NULL, NULL),
(17, 19, 3, NULL, NULL),
(18, 19, 4, NULL, NULL),
(19, 19, 5, NULL, NULL),
(20, 19, 6, NULL, NULL),
(21, 19, 7, NULL, NULL),
(22, 4, 8, NULL, NULL),
(23, 4, 9, NULL, NULL),
(24, 4, 10, NULL, NULL),
(25, 4, 11, NULL, NULL),
(26, 4, 12, NULL, NULL),
(27, 4, 13, NULL, NULL),
(28, 10, 8, NULL, NULL),
(29, 10, 9, NULL, NULL),
(30, 10, 10, NULL, NULL),
(31, 10, 11, NULL, NULL),
(32, 10, 12, NULL, NULL),
(33, 10, 13, NULL, NULL),
(34, 11, 8, NULL, NULL),
(35, 11, 9, NULL, NULL),
(36, 11, 10, NULL, NULL),
(37, 11, 11, NULL, NULL),
(38, 11, 12, NULL, NULL),
(39, 11, 13, NULL, NULL),
(40, 3, 14, NULL, NULL),
(41, 3, 15, NULL, NULL),
(42, 3, 16, NULL, NULL),
(43, 3, 17, NULL, NULL),
(44, 3, 18, NULL, NULL),
(45, 3, 19, NULL, NULL),
(46, 5, 14, NULL, NULL),
(47, 5, 15, NULL, NULL),
(48, 5, 16, NULL, NULL),
(49, 5, 17, NULL, NULL),
(50, 5, 18, NULL, NULL),
(51, 5, 19, NULL, NULL),
(52, 12, 14, NULL, NULL),
(53, 12, 15, NULL, NULL),
(54, 12, 16, NULL, NULL),
(55, 12, 17, NULL, NULL),
(56, 12, 18, NULL, NULL),
(57, 12, 19, NULL, NULL),
(58, 15, 20, NULL, NULL),
(59, 15, 21, NULL, NULL),
(60, 15, 22, NULL, NULL),
(61, 15, 23, NULL, NULL),
(62, 18, 20, NULL, NULL),
(63, 18, 21, NULL, NULL),
(64, 18, 22, NULL, NULL),
(65, 18, 23, NULL, NULL),
(66, 6, 24, NULL, NULL),
(67, 6, 25, NULL, NULL),
(68, 6, 26, NULL, NULL),
(69, 6, 27, NULL, NULL),
(70, 9, 24, NULL, NULL),
(71, 9, 25, NULL, NULL),
(72, 9, 26, NULL, NULL),
(73, 9, 27, NULL, NULL),
(74, 16, 28, NULL, NULL),
(75, 16, 29, NULL, NULL),
(76, 16, 30, NULL, NULL),
(77, 16, 31, NULL, NULL),
(78, 19, 28, NULL, NULL),
(79, 19, 29, NULL, NULL),
(80, 19, 30, NULL, NULL),
(81, 19, 31, NULL, NULL),
(82, 14, 32, NULL, NULL),
(83, 14, 33, NULL, NULL),
(84, 7, 34, NULL, NULL),
(85, 7, 35, NULL, NULL),
(86, 7, 36, NULL, NULL),
(87, 7, 37, NULL, NULL),
(88, 17, 34, NULL, NULL),
(89, 17, 35, NULL, NULL),
(90, 17, 36, NULL, NULL),
(91, 17, 37, NULL, NULL),
(92, 8, 38, NULL, NULL),
(93, 8, 39, NULL, NULL),
(94, 8, 40, NULL, NULL),
(95, 8, 41, NULL, NULL),
(96, 10, 38, NULL, NULL),
(97, 10, 39, NULL, NULL),
(98, 10, 40, NULL, NULL),
(99, 10, 41, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `website_ratings`
--

CREATE TABLE `website_ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `rate` enum('1','2','3','4','5') NOT NULL DEFAULT '3',
  `comment` text NOT NULL,
  `status` enum('ok','no') NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website_ratings`
--

INSERT INTO `website_ratings` (`id`, `user_id`, `rate`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(1, 20, '5', 'Thank you very much for the services provided by this site because it saves me the trouble of finding a worker to repair home faults', 'ok', '2023-11-13 02:32:43', '2023-11-13 02:32:43'),
(2, 1, '5', 'The services provided by the workers are very wonderful and they repaired the electrical fault in my home with the utmost efficiency and professionalism', 'ok', '2023-11-13 02:43:01', '2023-11-13 02:43:01');

-- --------------------------------------------------------

--
-- Table structure for table `work_samples`
--

CREATE TABLE `work_samples` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `worker_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image1` varchar(255) NOT NULL DEFAULT 'default.png',
  `image2` varchar(255) NOT NULL DEFAULT 'default.png',
  `image3` varchar(255) NOT NULL DEFAULT 'default.png',
  `image4` varchar(255) NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_services`
--
ALTER TABLE `booking_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_services_service_id_foreign` (`service_id`),
  ADD KEY `booking_services_worker_id_foreign` (`worker_id`),
  ADD KEY `booking_services_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_details_id_foreign` (`order_details_id`),
  ADD KEY `order_items_service_id_foreign` (`service_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_user_id_foreign` (`user_id`),
  ADD KEY `ratings_worker_id_foreign` (`worker_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_category_id_foreign` (`category_id`);

--
-- Indexes for table `user_services`
--
ALTER TABLE `user_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_services_user_id_foreign` (`user_id`),
  ADD KEY `user_services_service_id_foreign` (`service_id`);

--
-- Indexes for table `website_ratings`
--
ALTER TABLE `website_ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `website_ratings_user_id_foreign` (`user_id`);

--
-- Indexes for table `work_samples`
--
ALTER TABLE `work_samples`
  ADD PRIMARY KEY (`id`),
  ADD KEY `work_samples_worker_id_foreign` (`worker_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_services`
--
ALTER TABLE `booking_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `user_services`
--
ALTER TABLE `user_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `website_ratings`
--
ALTER TABLE `website_ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `work_samples`
--
ALTER TABLE `work_samples`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_services`
--
ALTER TABLE `booking_services`
  ADD CONSTRAINT `booking_services_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_services_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_services_worker_id_foreign` FOREIGN KEY (`worker_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_details_id_foreign` FOREIGN KEY (`order_details_id`) REFERENCES `order_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_items_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ratings_worker_id_foreign` FOREIGN KEY (`worker_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_services`
--
ALTER TABLE `user_services`
  ADD CONSTRAINT `user_services_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_services_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `website_ratings`
--
ALTER TABLE `website_ratings`
  ADD CONSTRAINT `website_ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `work_samples`
--
ALTER TABLE `work_samples`
  ADD CONSTRAINT `work_samples_worker_id_foreign` FOREIGN KEY (`worker_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
