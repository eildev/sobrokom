-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2024 at 04:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sobrokom`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing_infos`
--

CREATE TABLE `billing_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(16) NOT NULL,
  `address_1` varchar(255) NOT NULL,
  `address_2` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `post_code` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `order_notes` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `billing_infos`
--

INSERT INTO `billing_infos` (`id`, `user_id`, `first_name`, `last_name`, `email`, `phone`, `address_1`, `address_2`, `city`, `division`, `post_code`, `country`, `order_notes`, `created_at`, `updated_at`) VALUES
(6, 2, 'Md. Ehaoteshamul Islam', 'Kisor', 'dev.kishor138@gmail.com', '32423423423', 'dsfdsf', 'sdfsdf', 'asdasd', 'sdf', 'asdasd', 'bangladesh', 'wqeqweqweqwe', '2024-01-18 01:58:40', '2024-01-18 01:58:40');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `BrandName` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `BrandName`, `slug`, `image`, `status`, `created_at`, `updated_at`) VALUES
(11, 'Samsung', 'samsung', '372521020.png', 1, '2024-01-21 06:03:34', '2024-01-21 06:03:34'),
(12, 'Apex', 'apex', '952469503.png', 1, '2024-01-21 06:03:51', '2024-01-21 06:03:51'),
(13, 'Bata', 'bata', '160785086.png', 1, '2024-01-21 06:04:18', '2024-01-21 06:04:18'),
(14, 'Hatil', 'hatil', '1172763973.png', 1, '2024-01-21 06:04:32', '2024-01-21 06:04:32'),
(15, 'LG', 'lg', '1017250098.png', 1, '2024-01-21 06:04:42', '2024-01-21 06:04:42'),
(16, 'Adidas', 'adidas', '1813667508.png', 1, '2024-01-21 06:05:06', '2024-01-21 06:05:06'),
(17, 'Walton', 'walton', '1963542453.png', 1, '2024-01-21 06:05:17', '2024-01-21 06:05:17'),
(18, 'Local', 'local', '190806827.jpg', 1, '2024-01-21 06:07:21', '2024-01-21 06:07:21');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoryName` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryName`, `slug`, `image`, `status`, `created_at`, `updated_at`) VALUES
(11, 'Electronics', 'electronics', '1296680700.png', 1, '2024-01-16 21:50:52', '2024-01-21 05:59:40'),
(12, 'Grocery', 'grocery', '200522260.jpg', 1, '2024-01-16 21:52:07', '2024-01-16 21:52:07'),
(13, 'Fashion', 'fashion', '743297329.png', 1, '2024-01-20 23:04:42', '2024-01-21 05:58:47'),
(14, 'Furniture', 'furniture', '1840890447.png', 1, '2024-01-20 23:05:08', '2024-01-21 05:59:02'),
(15, 'Beauty and care', 'beauty-and-care', '1629392852.png', 1, '2024-01-20 23:05:35', '2024-01-21 05:59:16'),
(16, 'Home & Appliances', 'home-appliances', '964592041.png', 1, '2024-01-20 23:07:45', '2024-01-21 05:59:29');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `expiration` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `global_coupons`
--

CREATE TABLE `global_coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `startDate` varchar(255) NOT NULL,
  `expiration` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `global_coupons`
--

INSERT INTO `global_coupons` (`id`, `coupon_code`, `discount`, `startDate`, `expiration`, `status`, `created_at`, `updated_at`) VALUES
(1, 'K', '5', '2024-01-01', '2024-01-31', 1, '2024-01-27 22:12:13', '2024-01-27 22:12:13'),
(2, 'M', '10', '2024-01-01', '2024-01-31', 1, '2024-01-27 22:12:13', '2024-01-27 22:12:13');

-- --------------------------------------------------------

--
-- Table structure for table `home_banners`
--

CREATE TABLE `home_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `short_description` varchar(100) NOT NULL,
  `long_description` varchar(200) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_banners`
--

INSERT INTO `home_banners` (`id`, `title`, `short_description`, `long_description`, `link`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Special Offer', 'Vegetable  Good For Health', 'Presentation matters. Our fresh Vietnamese vegetable rolls  look good and taste even better', 'http://sobrokom.store/category/grocery', '1815384294.png', 1, '2024-01-16 21:46:17', '2024-02-01 16:39:21'),
(4, 'Special Offer', 'Smarter Products for Everyday Needs', 'Simplify your world. Smarter electronics for effortless living.', 'http://sobrokom.store/category/electronics', '393168706.png', 1, '2024-01-29 22:03:28', '2024-02-01 16:39:31'),
(5, '30% Discount', 'Shop styles that flatter your unique figure.', 'Beyond trends, find your signature silhouette.', 'http://sobrokom.store/category/fashion', '433200321.png', 1, '2024-01-29 22:06:36', '2024-02-01 16:39:45');

-- --------------------------------------------------------

--
-- Table structure for table `image_galleries`
--

CREATE TABLE `image_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_galleries`
--

INSERT INTO `image_galleries` (`id`, `banner_id`, `image`, `created_at`, `updated_at`) VALUES
(6, 3, '840070653.png', '2024-01-16 21:46:17', '2024-01-16 21:46:17'),
(7, 3, '247232614.png', '2024-01-16 21:46:17', '2024-01-16 21:46:17');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_04_090014_create_categories_table', 1),
(6, '2024_01_08_112546_create_subcategories_table', 1),
(7, '2024_01_08_183644_create_brands_table', 1),
(8, '2024_01_09_082933_create_popup_messages_table', 1),
(9, '2024_01_10_054755_create_tag_names_table', 2),
(10, '2024_01_10_084208_create_home_banners_table', 3),
(11, '2024_01_10_091853_create_image_galleries_table', 4),
(12, '2024_01_11_050430_create_products_table', 5),
(13, '2024_01_11_051806_create_variants_table', 5),
(14, '2024_01_11_052618_create_product_galleries_table', 5),
(15, '2024_01_11_053124_create_coupons_table', 5),
(16, '2024_01_11_085029_create_offer_banners_table', 5),
(17, '2024_01_14_070739_create_subscribes_table', 6),
(19, '2024_01_17_065344_create_wish_lists_table', 7),
(21, '2024_01_17_180208_create_billing_infos_table', 9),
(23, '2024_01_28_040127_create_global_coupons_table', 10),
(24, '2024_01_30_080121_create_o_t_p_data_table', 11),
(25, '2024_01_30_050042_create_orders_table', 12),
(26, '2024_01_30_052443_create_order_details_table', 12),
(27, '2024_01_30_053011_create_order_billing_details_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `offer_banners`
--

CREATE TABLE `offer_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `head` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `short_description` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offer_banners`
--

INSERT INTO `offer_banners` (`id`, `head`, `title`, `short_description`, `link`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, 'THE SALAD', 'Fresh & Natural Healthy Food Special Offer', 'Do not miss the current offers of us!', 'https://portfolio-2-0-seven-gamma.vercel.app/', '1152204769.jpg', 1, '2024-01-21 01:03:24', '2024-01-21 01:03:24');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_number` bigint(20) NOT NULL,
  `user_identity` varchar(255) NOT NULL,
  `product_quantity` varchar(255) NOT NULL,
  `product_total` double(8,2) NOT NULL,
  `coupon_id` varchar(255) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `sub_total` double(8,2) NOT NULL,
  `shipping_method` varchar(255) DEFAULT NULL,
  `shipping_amount` double(8,2) DEFAULT NULL,
  `grand_total` double(8,2) NOT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `order_note` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `invoice_number`, `user_identity`, `product_quantity`, `product_total`, `coupon_id`, `discount`, `sub_total`, `shipping_method`, `shipping_amount`, `grand_total`, `payment_method`, `payment_id`, `payment_status`, `order_note`, `status`, `created_at`, `updated_at`) VALUES
(1, 178430, '01723343865', '2', 24200.00, NULL, NULL, 24200.00, 'In Dhaka', 0.00, 24200.00, 'Cash on Delivery', NULL, NULL, NULL, 'approve', '2024-01-31 00:47:44', '2024-01-31 00:47:44'),
(2, 285795, '01917344267', '1', 1350.00, NULL, NULL, 1350.00, 'In Dhaka', 0.00, 1350.00, 'Cash on Delivery', NULL, NULL, NULL, 'approve', '2024-02-01 15:40:57', '2024-02-01 15:41:50'),
(3, 394792, '01723343865', '2', 24200.00, NULL, NULL, 24200.00, 'In Dhaka', 0.00, 24200.00, 'Cash on Delivery', NULL, NULL, NULL, 'approve', '2024-02-01 15:54:14', '2024-02-01 15:56:29'),
(4, 787459, '01742735416', '4', 5650.00, NULL, NULL, 5650.00, 'In Dhaka', 0.00, 5650.00, 'Cash on Delivery', NULL, NULL, NULL, 'approve', '2024-02-01 16:25:23', '2024-02-01 16:26:42'),
(5, 826474, '01580581992', '10', 87510.00, NULL, NULL, 87510.00, 'In Dhaka', 0.00, 87510.00, 'Cash on Delivery', NULL, NULL, NULL, 'approve', '2024-02-01 16:41:43', '2024-02-04 08:35:22'),
(6, 220180, '01917344267', '5', 24800.00, NULL, NULL, 24800.00, 'In Dhaka', 0.00, 24800.00, 'Cash on Delivery', NULL, NULL, NULL, 'pending', '2024-02-02 18:46:21', '2024-02-02 18:46:21'),
(7, 543338, '01742735416', '2', 24200.00, NULL, NULL, 24200.00, 'In Dhaka', 0.00, 24200.00, 'Cash on Delivery', NULL, NULL, NULL, 'approve', '2024-02-03 10:42:19', '2024-02-03 10:43:03'),
(8, 434505, '01712115004', '7', 6500.00, NULL, NULL, 6500.00, 'In Dhaka', 0.00, 6500.00, 'Cash on Delivery', NULL, NULL, NULL, 'approve', '2024-02-03 11:18:04', '2024-02-03 11:21:20'),
(9, 859092, '01723343865', '3', 3670.00, NULL, NULL, 3670.00, 'In Dhaka', 0.00, 3670.00, 'Cash on Delivery', NULL, NULL, NULL, 'approve', '2024-02-04 08:34:10', '2024-02-04 08:36:24');

-- --------------------------------------------------------

--
-- Table structure for table `order_billing_details`
--

CREATE TABLE `order_billing_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(16) NOT NULL,
  `address_1` varchar(255) NOT NULL,
  `address_2` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `post_code` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `order_notes` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_billing_details`
--

INSERT INTO `order_billing_details` (`id`, `order_id`, `first_name`, `last_name`, `email`, `phone`, `address_1`, `address_2`, `city`, `division`, `post_code`, `country`, `order_notes`, `created_at`, `updated_at`) VALUES
(1, 1, 'Kishor', 'Mahmud', 'user@gmail.com', '01723343865', 'Banasree, Rampura, Dhaka', NULL, 'Dhaka', 'Dhaka', '1219', 'Bangladesh', NULL, '2024-01-31 00:47:44', '2024-01-31 00:47:44');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `product_quantity` varchar(255) NOT NULL,
  `total_price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_quantity`, `total_price`, `created_at`, `updated_at`) VALUES
(1, 1, '83', '1', 200.00, '2024-01-31 00:47:44', '2024-01-31 00:47:44'),
(2, 1, '54', '1', 24000.00, '2024-01-31 00:47:44', '2024-01-31 00:47:44'),
(3, 2, '58', '1', 1350.00, '2024-02-01 15:40:57', '2024-02-01 15:40:57'),
(4, 3, '83', '1', 200.00, '2024-02-01 15:54:14', '2024-02-01 15:54:14'),
(5, 3, '54', '1', 24000.00, '2024-02-01 15:54:14', '2024-02-01 15:54:14'),
(6, 4, '77', '1', 700.00, '2024-02-01 16:25:23', '2024-02-01 16:25:23'),
(7, 4, '58', '1', 1350.00, '2024-02-01 16:25:23', '2024-02-01 16:25:23'),
(8, 4, '62', '1', 3400.00, '2024-02-01 16:25:23', '2024-02-01 16:25:23'),
(9, 4, '83', '1', 200.00, '2024-02-01 16:25:23', '2024-02-01 16:25:23'),
(10, 5, '83', '2', 200.00, '2024-02-01 16:41:43', '2024-02-01 16:41:43'),
(11, 5, '81', '1', 70.00, '2024-02-01 16:41:43', '2024-02-01 16:41:43'),
(12, 5, '80', '1', 100.00, '2024-02-01 16:41:43', '2024-02-01 16:41:43'),
(13, 5, '79', '1', 200.00, '2024-02-01 16:41:43', '2024-02-01 16:41:43'),
(14, 5, '57', '1', 200.00, '2024-02-01 16:41:43', '2024-02-01 16:41:43'),
(15, 5, '56', '1', 1350.00, '2024-02-01 16:41:43', '2024-02-01 16:41:43'),
(16, 5, '75', '1', 890.00, '2024-02-01 16:41:43', '2024-02-01 16:41:43'),
(17, 5, '76', '1', 60300.00, '2024-02-01 16:41:43', '2024-02-01 16:41:43'),
(18, 5, '54', '1', 24000.00, '2024-02-01 16:41:43', '2024-02-01 16:41:43'),
(19, 6, '54', '1', 24000.00, '2024-02-02 18:46:21', '2024-02-02 18:46:21'),
(20, 6, '83', '4', 200.00, '2024-02-02 18:46:21', '2024-02-02 18:46:21'),
(21, 7, '83', '1', 200.00, '2024-02-03 10:42:19', '2024-02-03 10:42:19'),
(22, 7, '54', '1', 24000.00, '2024-02-03 10:42:19', '2024-02-03 10:42:19'),
(23, 8, '57', '1', 200.00, '2024-02-03 11:18:04', '2024-02-03 11:18:04'),
(24, 8, '58', '4', 1350.00, '2024-02-03 11:18:04', '2024-02-03 11:18:04'),
(25, 8, '83', '1', 200.00, '2024-02-03 11:18:04', '2024-02-03 11:18:04'),
(26, 8, '77', '1', 700.00, '2024-02-03 11:18:04', '2024-02-03 11:18:04'),
(27, 9, '59', '1', 250.00, '2024-02-04 08:34:10', '2024-02-04 08:34:10'),
(28, 9, '60', '1', 2070.00, '2024-02-04 08:34:10', '2024-02-04 08:34:10'),
(29, 9, '56', '1', 1350.00, '2024-02-04 08:34:10', '2024-02-04 08:34:10');

-- --------------------------------------------------------

--
-- Table structure for table `o_t_p_data`
--

CREATE TABLE `o_t_p_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) NOT NULL,
  `otp` varchar(255) NOT NULL,
  `expire_at` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `o_t_p_data`
--

INSERT INTO `o_t_p_data` (`id`, `phone`, `otp`, `expire_at`, `created_at`, `updated_at`) VALUES
(1, '01723343865', '115725', '2024-01-30 11:47:51', '2024-01-30 05:42:51', '2024-01-30 05:42:51'),
(2, '01917344267', '103274', '2024-02-01 10:45:36', '2024-02-01 15:40:36', '2024-02-01 15:40:36'),
(3, '01723343865', '100751', '2024-02-01 10:58:50', '2024-02-01 15:53:50', '2024-02-01 15:53:50'),
(4, '01742735416', '113799', '2024-02-01 11:29:53', '2024-02-01 16:24:53', '2024-02-01 16:24:53'),
(5, '01580581992', '120968', '2024-02-01 11:46:18', '2024-02-01 16:41:18', '2024-02-01 16:41:18'),
(6, '01742735416', '114258', '2024-02-01 11:51:57', '2024-02-01 16:46:57', '2024-02-01 16:46:57'),
(7, '01917344267', '105185', '2024-02-02 13:50:55', '2024-02-02 18:45:55', '2024-02-02 18:45:55'),
(8, '01742735416', '105315', '2024-02-03 05:46:51', '2024-02-03 10:41:51', '2024-02-03 10:41:51'),
(9, '01712115004', '101685', '2024-02-03 06:22:28', '2024-02-03 11:17:28', '2024-02-03 11:17:28'),
(10, '01723343865', '119589', '2024-02-04 03:38:39', '2024-02-04 08:33:39', '2024-02-04 08:33:39');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `popup_messages`
--

CREATE TABLE `popup_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `popup_messages`
--

INSERT INTO `popup_messages` (`id`, `title`, `description`, `link`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'sfsfsd', 'sdfsdfsdf', 'https://erd.dbdesigner.net/designer/schema/1704165604-sobrokom', '1704371411.jpg', 1, '2024-01-10 05:09:24', '2024-01-10 05:09:24');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `product_feature` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `short_desc` varchar(255) NOT NULL,
  `long_desc` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `tags` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `brand_id`, `product_feature`, `product_name`, `slug`, `short_desc`, `long_desc`, `product_image`, `sku`, `tags`, `status`, `created_at`, `updated_at`) VALUES
(87, 12, 15, 18, 'feature,new-arrival', 'Chicken wings', 'chicken-wings', 'Chicken wings', 'Chicken wings', '219177739.png', 'asdfasd', 'asdsad', 1, '2024-02-04 01:22:44', '2024-02-04 01:22:44'),
(88, 12, 15, 18, 'feature,new-arrival,trending', 'Chicken drumstick', 'chicken-drumstick', 'Chicken drumstick', 'Chicken drumstick', '562678631.jpg', 'sdfsaf', 'sdfsdf', 1, '2024-02-04 04:09:21', '2024-02-04 04:09:21');

-- --------------------------------------------------------

--
-- Table structure for table `product_galleries`
--

CREATE TABLE `product_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_galleries`
--

INSERT INTO `product_galleries` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(134, 87, '239186593.png', '2024-02-04 01:22:44', '2024-02-04 01:22:44'),
(135, 87, '1127651391.png', '2024-02-04 01:22:44', '2024-02-04 01:22:44'),
(136, 88, '882423874.png', '2024-02-04 04:09:21', '2024-02-04 04:09:21'),
(137, 88, '119490433.jpg', '2024-02-04 04:09:21', '2024-02-04 04:09:21');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoryId` bigint(20) UNSIGNED NOT NULL,
  `subcategoryName` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `categoryId`, `subcategoryName`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(14, 11, 'Mobile', 'mobile', 1, '2024-01-16 21:52:25', '2024-01-16 21:52:25'),
(15, 12, 'Frozen Food', 'frozen-food', 1, '2024-01-16 21:52:37', '2024-01-16 21:52:37'),
(16, 12, 'Vegetable', 'vegetable', 1, '2024-01-16 21:52:46', '2024-01-16 21:52:46'),
(17, 11, 'TV', 'tv', 1, '2024-01-16 21:53:35', '2024-01-16 21:53:35'),
(18, 13, 'Jackets', 'jackets', 1, '2024-01-20 23:08:13', '2024-01-20 23:08:13'),
(19, 13, 'T-shirt', 't-shirt', 1, '2024-01-20 23:08:23', '2024-01-20 23:08:23'),
(20, 14, 'Sofa', 'sofa', 1, '2024-01-20 23:08:44', '2024-01-20 23:08:44'),
(21, 15, 'Fair and Lovely', 'fair-and-lovely', 1, '2024-01-20 23:08:53', '2024-01-20 23:08:53'),
(22, 16, 'Blender', 'blender', 1, '2024-01-20 23:09:12', '2024-01-20 23:09:12'),
(23, 14, 'Almary', 'almary', 1, '2024-01-21 00:30:51', '2024-01-21 00:30:51'),
(24, 15, 'Make-up Box', 'make-up-box', 1, '2024-01-21 00:31:12', '2024-01-21 00:31:12'),
(25, 16, 'Rice Cooker', 'rice-cooker', 1, '2024-01-21 00:31:35', '2024-01-21 00:31:35'),
(26, 13, 'Shoe', 'shoe', 1, '2024-01-21 22:06:41', '2024-01-21 22:06:41'),
(27, 14, 'Table', 'table', 1, '2024-01-21 22:27:02', '2024-01-21 22:27:02'),
(28, 11, 'Refrigaretor', 'refrigaretor', 1, '2024-01-21 22:38:37', '2024-01-21 22:38:37'),
(29, 12, 'Dry Food', 'dry-food', 1, '2024-02-01 00:30:16', '2024-02-01 00:30:16'),
(30, 12, 'Noodles', 'noodles', 1, '2024-02-01 00:30:38', '2024-02-01 00:30:38'),
(31, 12, 'Sauce', 'sauce', 1, '2024-02-01 00:31:01', '2024-02-01 00:31:01'),
(32, 12, 'Cheese', 'cheese', 1, '2024-02-01 00:31:14', '2024-02-01 00:31:14'),
(33, 12, 'Butter', 'butter', 1, '2024-02-01 00:31:33', '2024-02-01 00:31:33'),
(34, 12, 'Mushroom', 'mushroom', 1, '2024-02-01 00:32:15', '2024-02-01 00:32:15'),
(35, 12, 'Sheets', 'sheets', 1, '2024-02-01 00:33:21', '2024-02-01 00:33:21'),
(36, 12, 'Cookies', 'cookies', 1, '2024-02-01 00:34:23', '2024-02-01 00:34:23'),
(37, 12, 'Oil', 'oil', 1, '2024-02-01 00:34:39', '2024-02-01 00:34:39'),
(38, 12, 'Chocolate', 'chocolate', 1, '2024-02-01 00:34:48', '2024-02-01 00:34:48'),
(39, 12, 'Coffee', 'coffee', 1, '2024-02-01 00:34:59', '2024-02-01 00:34:59'),
(40, 12, 'Honey', 'honey', 1, '2024-02-01 00:37:01', '2024-02-01 00:37:01'),
(41, 12, 'Nuts', 'nuts', 1, '2024-02-01 00:37:07', '2024-02-01 00:37:07'),
(42, 12, 'Jelly', 'jelly', 1, '2024-02-01 00:37:53', '2024-02-01 00:37:53'),
(43, 12, 'Sea Food', 'sea-food', 1, '2024-02-01 00:38:28', '2024-02-01 00:38:28'),
(44, 12, 'Nut', 'nut', 1, '2024-02-01 00:38:56', '2024-02-01 00:38:56'),
(45, 12, 'Sweets', 'sweets', 1, '2024-02-01 00:40:31', '2024-02-01 00:40:31'),
(46, 12, 'Spice', 'spice', 1, '2024-02-01 00:42:24', '2024-02-01 00:42:24');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tag_names`
--

CREATE TABLE `tag_names` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tagName` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userName` varchar(255) DEFAULT NULL,
  `socialId` text DEFAULT NULL,
  `fullName` varchar(100) DEFAULT NULL,
  `pic` text DEFAULT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `present_address` varchar(100) DEFAULT NULL,
  `permanent_address` varchar(100) DEFAULT NULL,
  `role` enum('superadmin','admin','user') DEFAULT 'user',
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userName`, `socialId`, `fullName`, `pic`, `phone`, `present_address`, `permanent_address`, `role`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kishor', NULL, NULL, NULL, NULL, '', '', 'admin', 'majid.bd905@gmail.com', NULL, '$2y$12$izBb/gTAf//kq6RBUvG1IOGz/rtcm3yoIOA1IxgzKusv75VIdlpqS', 'Active', NULL, '2024-01-09 21:29:13', '2024-02-04 10:28:27'),
(2, 'user1', NULL, NULL, NULL, NULL, NULL, NULL, 'user', 'user@gmail.com', NULL, '$2y$12$CvxDN9nI1Dkx2bhPPzyF0uJb7M.Wrf7bvErfIylmqbnyRfokLQ0Ya', 'Active', NULL, '2024-01-17 00:49:23', '2024-01-17 00:49:23'),
(13, 'abm Programming', '113769219383336868763', 'abm Programming', 'https://lh3.googleusercontent.com/a/ACg8ocLQYAR3ZvDlNQ-Uq7epx1KuLdX9tzb2AuUBtTi0pvMDFNc=s96-c', NULL, NULL, NULL, 'admin', 'abm.bd905@gmail.com', NULL, '$2y$12$ZKbsUywt2AGh.1J3gMMVseuoliaOfw.27oBtnRqSPH4vJ0Qk5aUxG', 'Active', NULL, '2024-02-04 10:56:51', '2024-02-04 10:56:51');

-- --------------------------------------------------------

--
-- Table structure for table `variants`
--

CREATE TABLE `variants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `regular_price` double(8,2) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `discount_amount` int(11) NOT NULL,
  `stock_quantity` int(11) NOT NULL,
  `barcode` varchar(255) DEFAULT NULL,
  `unit` varchar(50) NOT NULL,
  `weight` varchar(20) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `expire_date` date DEFAULT NULL,
  `manufacture_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `variants`
--

INSERT INTO `variants` (`id`, `product_id`, `color`, `size`, `regular_price`, `discount`, `discount_amount`, `stock_quantity`, `barcode`, `unit`, `weight`, `status`, `expire_date`, `manufacture_date`, `created_at`, `updated_at`) VALUES
(134, 87, NULL, NULL, 250.00, '10', 225, 100, NULL, 'gm', '500', 1, NULL, NULL, '2024-02-04 01:24:04', '2024-02-04 01:24:04'),
(135, 88, NULL, NULL, 400.00, '0', 400, 100, NULL, 'kg', '1', 1, NULL, NULL, '2024-02-04 04:09:44', '2024-02-04 04:09:44');

-- --------------------------------------------------------

--
-- Table structure for table `wish_lists`
--

CREATE TABLE `wish_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `loved` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing_infos`
--
ALTER TABLE `billing_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `billing_infos_user_id_foreign` (`user_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_coupon_code_unique` (`coupon_code`),
  ADD KEY `coupons_product_id_foreign` (`product_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `global_coupons`
--
ALTER TABLE `global_coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_banners`
--
ALTER TABLE `home_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_galleries`
--
ALTER TABLE `image_galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_galleries_banner_id_foreign` (`banner_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer_banners`
--
ALTER TABLE `offer_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_billing_details`
--
ALTER TABLE `order_billing_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_billing_details_order_id_foreign` (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`);

--
-- Indexes for table `o_t_p_data`
--
ALTER TABLE `o_t_p_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `popup_messages`
--
ALTER TABLE `popup_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_subcategory_id_foreign` (`subcategory_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_galleries_product_id_foreign` (`product_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategories_categoryid_foreign` (`categoryId`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribes_email_unique` (`email`);

--
-- Indexes for table `tag_names`
--
ALTER TABLE `tag_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `variants`
--
ALTER TABLE `variants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `variants_product_id_foreign` (`product_id`);

--
-- Indexes for table `wish_lists`
--
ALTER TABLE `wish_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wish_lists_user_id_foreign` (`user_id`),
  ADD KEY `wish_lists_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing_infos`
--
ALTER TABLE `billing_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `global_coupons`
--
ALTER TABLE `global_coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_banners`
--
ALTER TABLE `home_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `image_galleries`
--
ALTER TABLE `image_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `offer_banners`
--
ALTER TABLE `offer_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_billing_details`
--
ALTER TABLE `order_billing_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `o_t_p_data`
--
ALTER TABLE `o_t_p_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `popup_messages`
--
ALTER TABLE `popup_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `product_galleries`
--
ALTER TABLE `product_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tag_names`
--
ALTER TABLE `tag_names`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `variants`
--
ALTER TABLE `variants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `wish_lists`
--
ALTER TABLE `wish_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billing_infos`
--
ALTER TABLE `billing_infos`
  ADD CONSTRAINT `billing_infos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `coupons`
--
ALTER TABLE `coupons`
  ADD CONSTRAINT `coupons_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `image_galleries`
--
ALTER TABLE `image_galleries`
  ADD CONSTRAINT `image_galleries_banner_id_foreign` FOREIGN KEY (`banner_id`) REFERENCES `home_banners` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_billing_details`
--
ALTER TABLE `order_billing_details`
  ADD CONSTRAINT `order_billing_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD CONSTRAINT `product_galleries_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_categoryid_foreign` FOREIGN KEY (`categoryId`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `variants`
--
ALTER TABLE `variants`
  ADD CONSTRAINT `variants_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wish_lists`
--
ALTER TABLE `wish_lists`
  ADD CONSTRAINT `wish_lists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wish_lists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
