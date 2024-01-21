-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2024 at 07:41 AM
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
(6, 'Samsung', 'samsung', '2028975608.jpg', 1, '2024-01-16 22:04:37', '2024-01-16 22:04:37'),
(7, 'Walton', 'walton', '1015301124.png', 1, '2024-01-16 22:04:50', '2024-01-16 22:04:50'),
(8, 'Local', 'local', '1989400679.jpg', 1, '2024-01-16 22:05:34', '2024-01-16 22:05:34'),
(9, 'Adidas', 'adidas', '1788416567.png', 1, '2024-01-20 23:48:58', '2024-01-20 23:48:58'),
(10, 'Hatil', 'hatil', '1222471110.png', 1, '2024-01-21 00:26:50', '2024-01-21 00:26:50');

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
(11, 'Electronics', 'electronics', '1930190774.jpg', 1, '2024-01-16 21:50:52', '2024-01-16 21:50:52'),
(12, 'Grocery', 'grocery', '200522260.jpg', 1, '2024-01-16 21:52:07', '2024-01-16 21:52:07'),
(13, 'Fashion', 'fashion', '991972089.jpg', 1, '2024-01-20 23:04:42', '2024-01-20 23:04:42'),
(14, 'Furniture', 'furniture', '1011762404.jpg', 1, '2024-01-20 23:05:08', '2024-01-20 23:05:08'),
(15, 'Beauty and care', 'beauty-and-care', '514402865.jpg', 1, '2024-01-20 23:05:35', '2024-01-20 23:05:35'),
(16, 'Home & Appliances', 'home-appliances', '544948726.jpg', 1, '2024-01-20 23:07:45', '2024-01-20 23:07:45');

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
(3, 'Special Offer', 'Vegetable  Good For Health', 'Presentation matters. Our fresh Vietnamese vegetable rolls  look good and taste even better', 'https://web.whatsapp.com/', '1815384294.png', 1, '2024-01-16 21:46:17', '2024-01-16 21:47:10');

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
(21, '2024_01_17_180208_create_billing_infos_table', 9);

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
(2, 'THE SALAD', 'Fresh & Natural Healthy Food Special Offer', 'Do not miss the current offers of us!', 'https://erd.dbdesigner.net/designer/schema/1704165604-sobrokom', '1346225561.png', 1, '2024-01-16 22:09:40', '2024-01-16 22:09:40');

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
(43, 12, 15, 8, 'new-arrival,best-rate', 'Beef', 'beef', 'Discover the epitome of quality with our premium beef selection. Sourced from the finest cuts, our beef guarantees exceptional tenderness and flavor.', 'Whether you\'re grilling for a feast or preparing a cozy family dinner, our beef elevates every meal. Indulge in the rich taste and versatility of our prime beef - your passport to culinary excellence.', '1347795958.jpg', 'BEEF-RIB-EU-001', 'beef,premium beef,meat,gourmet meat', 1, '2024-01-16 22:31:03', '2024-01-16 22:31:03'),
(44, 12, 15, 8, 'feature,new-arrival,trending,best-rate,weekend-deals,top-seller,top-offers', 'Chicken Meat', 'chicken-meat', 'A savory delight for your culinary adventures! Our chickens are sourced from trusted farms, ensuring top-notch quality and flavor in every bite', 'Tender and succulent, these birds are raised with care to guarantee a juicy texture and rich taste. Whether you\'re grilling, roasting, or creating a delectable stew.', '2118686443.jpg', 'CHICKEN-RIB-EU-001', 'chicken,meat,food,frozen food,chicken meat', 1, '2024-01-16 22:52:25', '2024-01-16 22:52:25'),
(45, 12, 16, 8, 'feature,new-arrival,trending,best-rate,weekend-deals,top-seller,top-offers', 'Ginger', 'ginger', 'Elevate your culinary creations with our premium Ginger, a versatile and aromatic spice that adds a burst of flavor to your dishes.', 'Sourced from the finest ginger farms, our product boasts a zesty and warm profile, perfect for both sweet and savory recipes.', '1917535380.jpg', 'GINGER-RIB-EU-001', 'ginger,masala', 1, '2024-01-16 23:00:45', '2024-01-16 23:00:45'),
(46, 12, 16, 8, 'feature,new-arrival,trending,best-rate,weekend-deals,top-seller,top-offers', 'Onion', 'onion', 'Please note that this is just a randomly generated example, and in practice, you would need to obtain a unique and valid barcode', 'channels or a barcode provider. If your business doesn\'t already have a barcode system in place, you can consider obtaining a set of unique barcodes through a', '1429399769.jpg', 'ONION-RIB-EU-001', 'onion,vegetable,natural,food', 1, '2024-01-16 23:08:59', '2024-01-16 23:08:59'),
(47, 12, 16, 8, 'new-arrival,trending,weekend-deals', 'Potato', 'potato', 'Discover the epitome of quality with our premium beef selection. Sourced from the finest cuts, our beef guarantees exceptional tenderness and flavor.', 'Whether you\'re grilling for a feast or preparing a cozy family dinner, our beef elevates every meal. Indulge in the rich taste and versatility of our prime beef', '1779718956.jpg', 'POTATO-RIB-EU-001', 'potato,food', 1, '2024-01-16 23:11:45', '2024-01-16 23:11:45'),
(48, 12, 15, 8, 'new-arrival', 'Fish', 'fish', 'sdfsfsfsdfs', 'sdfsdfsdf', '2048727268.jpg', '324234', 'fisg', 1, '2024-01-16 23:31:51', '2024-01-16 23:31:51'),
(49, 11, 14, 6, 'feature,new-arrival', 'Samsung A20', 'samsung-a20', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', '998480154.jpg', 'SAMSUNG-A20', 'samsung,pone', 1, '2024-01-21 00:14:47', '2024-01-21 00:14:47'),
(50, 11, 17, 7, 'new-arrival,best-rate', 'Walton Primo X 4K Smart TV', 'walton-primo-x-4k-smart-tv', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', '127989108.jpg', 'WALTON-4K-TV', 'walton,tv,monitor,4k', 1, '2024-01-21 00:22:34', '2024-01-21 00:22:34'),
(51, 13, 19, 9, 'feature,new-arrival,top-seller', 'Smart T-shirt for Man', 'smart-t-shirt-for-man', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', '1996647914.jpg', 'T-SHIRT', 'tshirt', 1, '2024-01-21 00:25:02', '2024-01-21 00:25:02'),
(52, 14, 20, 10, 'feature,best-rate', 'Hatil Best Furniture sofa for dyning Room', 'hatil-best-furniture-sofa-for-dyning-room', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '671653460.jpg', 'SOFA', 'sofa,furniture', 1, '2024-01-21 00:28:46', '2024-01-21 00:28:46');

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
(74, 43, '861194795.jpg', '2024-01-16 22:31:03', '2024-01-16 22:31:03'),
(75, 43, '2025806347.jpg', '2024-01-16 22:31:03', '2024-01-16 22:31:03'),
(76, 44, '1669872709.jpg', '2024-01-16 22:52:25', '2024-01-16 22:52:25'),
(77, 44, '1300453705.jpg', '2024-01-16 22:52:25', '2024-01-16 22:52:25'),
(78, 45, '1478042402.jpg', '2024-01-16 23:00:45', '2024-01-16 23:00:45'),
(79, 45, '2144392232.jpg', '2024-01-16 23:00:45', '2024-01-16 23:00:45'),
(80, 46, '1338172216.jpg', '2024-01-16 23:08:59', '2024-01-16 23:08:59'),
(81, 46, '288211682.jpg', '2024-01-16 23:08:59', '2024-01-16 23:08:59'),
(82, 47, '68739322.jpg', '2024-01-16 23:11:45', '2024-01-16 23:11:45'),
(83, 47, '292282650.jpg', '2024-01-16 23:11:45', '2024-01-16 23:11:45'),
(84, 48, '1895384242.jpg', '2024-01-16 23:31:51', '2024-01-16 23:31:51'),
(85, 48, '137041860.jpg', '2024-01-16 23:31:51', '2024-01-16 23:31:51'),
(86, 49, '578399848.jpg', '2024-01-21 00:14:47', '2024-01-21 00:14:47'),
(87, 50, '68579192.jpg', '2024-01-21 00:22:34', '2024-01-21 00:22:34'),
(88, 50, '657386686.jpg', '2024-01-21 00:22:34', '2024-01-21 00:22:34'),
(89, 51, '1512131923.jpg', '2024-01-21 00:25:02', '2024-01-21 00:25:02'),
(90, 52, '1660903196.jpg', '2024-01-21 00:28:46', '2024-01-21 00:28:46');

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
(25, 16, 'Rice Cooker', 'rice-cooker', 1, '2024-01-21 00:31:35', '2024-01-21 00:31:35');

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
  `userName` varchar(255) NOT NULL,
  `socialId` text DEFAULT NULL,
  `fullName` varchar(100) DEFAULT NULL,
  `pic` varchar(100) DEFAULT NULL,
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
(1, 'kishor', NULL, NULL, NULL, NULL, '', '', 'admin', 'mahmudkishor9@gmail.com', NULL, '$2y$12$JxbC/nE84dU/fwR2D81xaO6ItfhxidWJfPD0/m8vq5KV5XQrAzkKS', 'Active', NULL, '2024-01-09 21:29:13', '2024-01-09 21:29:13'),
(2, 'user1', NULL, NULL, NULL, NULL, NULL, NULL, 'user', 'user@gmail.com', NULL, '$2y$12$CvxDN9nI1Dkx2bhPPzyF0uJb7M.Wrf7bvErfIylmqbnyRfokLQ0Ya', 'Active', NULL, '2024-01-17 00:49:23', '2024-01-17 00:49:23');

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
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `expire_date` date DEFAULT NULL,
  `manufacture_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `variants`
--

INSERT INTO `variants` (`id`, `product_id`, `color`, `size`, `regular_price`, `discount`, `discount_amount`, `stock_quantity`, `barcode`, `unit`, `status`, `expire_date`, `manufacture_date`, `created_at`, `updated_at`) VALUES
(90, 43, NULL, NULL, 700.00, '10', 630, 100, '123456789012', 'kg', 1, NULL, NULL, '2024-01-16 22:34:51', '2024-01-16 22:34:51'),
(91, 44, NULL, NULL, 200.00, '0', 200, 100, '123456789013', 'kg', 1, NULL, NULL, '2024-01-16 22:53:07', '2024-01-16 22:53:07'),
(92, 45, NULL, NULL, 300.00, '0', 300, 30, '123456789014', 'kg', 1, NULL, NULL, '2024-01-16 23:03:23', '2024-01-16 23:03:23'),
(93, 46, NULL, NULL, 150.00, '20', 120, 100, '2113123', 'kg', 1, NULL, NULL, '2024-01-16 23:09:25', '2024-01-16 23:09:25'),
(94, 47, NULL, NULL, 80.00, '10', 72, 2330, '23424234', 'liter', 1, NULL, NULL, '2024-01-16 23:12:11', '2024-01-16 23:12:11'),
(95, 48, NULL, NULL, 700.00, '10', 630, 100, '56465', 'kg', 1, NULL, NULL, '2024-01-16 23:34:01', '2024-01-16 23:34:01'),
(96, 43, NULL, NULL, 200.00, '0', 200, 200, NULL, 'liter', 1, NULL, NULL, '2024-01-20 23:58:37', '2024-01-20 23:58:37'),
(97, 49, NULL, NULL, 12000.00, '0', 12000, 100, NULL, 'piece', 1, NULL, NULL, '2024-01-21 00:15:11', '2024-01-21 00:15:11'),
(98, 50, NULL, NULL, 42000.00, '10', 37800, 100, NULL, 'piece', 1, NULL, NULL, '2024-01-21 00:23:08', '2024-01-21 00:23:08'),
(99, 51, NULL, NULL, 200.00, '0', 200, 100, NULL, 'piece', 1, NULL, NULL, '2024-01-21 00:25:15', '2024-01-21 00:25:15'),
(100, 52, NULL, NULL, 24000.00, '10', 21600, 100, NULL, 'piece', 1, NULL, NULL, '2024-01-21 00:29:07', '2024-01-21 00:29:07');

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
-- Dumping data for table `wish_lists`
--

INSERT INTO `wish_lists` (`id`, `user_id`, `product_id`, `loved`, `created_at`, `updated_at`) VALUES
(1, 2, 46, 1, '2024-01-18 02:03:35', '2024-01-18 02:03:35'),
(2, 2, 45, 1, '2024-01-18 02:03:37', '2024-01-18 02:03:37'),
(3, 2, 44, 1, '2024-01-18 02:03:40', '2024-01-18 02:03:40'),
(5, 2, 47, 1, '2024-01-20 22:15:58', '2024-01-20 22:15:58'),
(6, 2, 43, 1, '2024-01-20 22:16:05', '2024-01-20 22:16:05'),
(7, 2, 43, 1, '2024-01-20 22:16:31', '2024-01-20 22:16:31'),
(8, 2, 48, 1, '2024-01-20 22:16:35', '2024-01-20 22:16:35');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
-- AUTO_INCREMENT for table `home_banners`
--
ALTER TABLE `home_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `image_galleries`
--
ALTER TABLE `image_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `offer_banners`
--
ALTER TABLE `offer_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `product_galleries`
--
ALTER TABLE `product_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `variants`
--
ALTER TABLE `variants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `wish_lists`
--
ALTER TABLE `wish_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
