-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2024 at 10:56 AM
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
(3, 'Special Offer', 'Vegetable  Good For Health', 'Presentation matters. Our fresh Vietnamese vegetable rolls  look good and taste even better', 'http://127.0.0.1:8000/category/grocery', '1815384294.png', 1, '2024-01-16 21:46:17', '2024-02-01 02:34:39'),
(4, 'Special Offer', 'Smarter Products for Everyday Needs', 'Simplify your world. Smarter electronics for effortless living.', 'http://127.0.0.1:8000/category/electronics', '393168706.png', 1, '2024-01-29 22:03:28', '2024-02-01 02:35:49'),
(5, '30% Discount', 'Shop styles that flatter your unique figure.', 'Beyond trends, find your signature silhouette.', 'http://127.0.0.1:8000/category/fashion', '433200321.png', 1, '2024-01-29 22:06:36', '2024-02-01 02:35:24');

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
(1, 178430, '01723343865', '2', 24200.00, NULL, NULL, 24200.00, 'In Dhaka', 0.00, 24200.00, 'Cash on Delivery', NULL, NULL, NULL, 'approve', '2024-01-31 00:47:44', '2024-01-31 00:47:44');

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
(2, 1, '54', '1', 24000.00, '2024-01-31 00:47:44', '2024-01-31 00:47:44');

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
(1, '01723343865', '115725', '2024-01-30 11:47:51', '2024-01-30 05:42:51', '2024-01-30 05:42:51');

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
  `shipping` float NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `brand_id`, `product_feature`, `product_name`, `slug`, `short_desc`, `long_desc`, `product_image`, `sku`, `tags`, `shipping`, `status`, `created_at`, `updated_at`) VALUES
(53, 11, 14, 11, 'feature,new-arrival,best-rate', 'Samsung A20', 'samsung-a20', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1245530657.png', 'SAMSUNG-A20', 'samsung,mobile', 100, 1, '2024-01-21 21:47:28', '2024-01-21 21:47:28'),
(54, 11, 17, 17, 'new-arrival,weekend-deals', 'Walton 4k Monitor', 'walton-4k-monitor', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '217606482.png', 'WALTON-4K-MONITOR', 'walton,tv,monitor', 100, 1, '2024-01-21 21:50:18', '2024-01-21 21:50:18'),
(55, 13, 19, 16, 'new-arrival,trending', 'Black T-shirt for men', 'black-t-shirt-for-men', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '904029533.png', 'BLACK-T-SHIRT', 'black,t-shirt,men', 70, 1, '2024-01-21 22:01:13', '2024-01-21 22:01:13'),
(56, 13, 18, 16, 'feature,new-arrival,best-rate', 'Yellow Jacket\'s for Women', 'yellow-jackets-for-women', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1891538933.png', 'YELLOW-JACKET', 'yellow,jacket', 70, 1, '2024-01-21 22:03:58', '2024-01-21 22:03:58'),
(57, 13, 19, 16, 'feature,new-arrival,trending', 'Smart T-shirt for men', 'smart-t-shirt-for-men', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '523162002.png', 'SMART-T-SHIRT', 'smart,t-shirt', 70, 1, '2024-01-21 22:05:57', '2024-01-21 22:05:57'),
(58, 13, 26, 12, 'feature,new-arrival,trending', 'White Shoe for men', 'white-shoe-for-men', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '537174501.png', 'WHITE-SHOE', 'white,shoe', 70, 1, '2024-01-21 22:08:29', '2024-01-21 22:08:29'),
(59, 13, 19, 16, 'feature,new-arrival,trending', 'Trendy T-shirt for Men', 'trendy-t-shirt-for-men', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '9762969.png', 'TRENDY-T-SHIRT', 'trendy,t-shirt', 70, 1, '2024-01-21 22:19:53', '2024-01-21 22:19:53'),
(60, 13, 26, 13, 'feature,new-arrival', 'Black Shoe for Men', 'black-shoe-for-men', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '265388077.png', 'BLACK-T-SHIRT', 'black,t-shirt', 70, 1, '2024-01-21 22:21:41', '2024-01-21 22:21:41'),
(61, 11, 17, 15, 'feature,new-arrival,trending', 'LG 4k Smart TV', 'lg-4k-smart-tv', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1878363478.png', 'SMART-MONITOR', 'lg,smart,monitor,tv', 70, 1, '2024-01-21 22:24:07', '2024-01-21 22:24:07'),
(62, 13, 18, 16, 'feature,new-arrival', 'Black Jacket for Men', 'black-jacket-for-men', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1394030665.png', 'BLACK-JACKET', 'black,jacket', 70, 1, '2024-01-21 22:26:10', '2024-01-21 22:26:10'),
(63, 14, 27, 18, 'feature,new-arrival', 'Reading Table', 'reading-table', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '742649424.png', 'READING-TABLE', 'table,reading', 70, 1, '2024-01-21 22:28:24', '2024-01-21 22:28:24'),
(64, 13, 19, 18, 'feature,new-arrival', 'Blue T-shirt', 'blue-t-shirt', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '344436337.png', 'BLUE-T_SHIRT', 'blue,t-shirt', 70, 1, '2024-01-21 22:30:47', '2024-01-21 22:30:47'),
(65, 13, 19, 16, 'feature,new-arrival,trending', 'Navy-blue T-shirt', 'navy-blue-t-shirt', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '714258298.png', 'NAVY-BLUE-T-SHIRT', 'navy,blue,t-shirt', 70, 1, '2024-01-21 22:32:57', '2024-01-21 22:32:57'),
(66, 13, 18, 16, 'feature,new-arrival,trending', 'Smart Jackets for Men', 'smart-jackets-for-men', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '719303581.png', 'SMART-JACKET', 'smart,jacket', 70, 1, '2024-01-21 22:35:15', '2024-01-21 22:35:15'),
(67, 13, 18, 16, 'feature,new-arrival', 'Blue Denim for Men and women', 'blue-denim-for-men-and-women', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1773929998.png', 'BLUE-DENIM', 'blue,denim', 100, 1, '2024-01-21 22:37:39', '2024-01-21 22:37:39'),
(68, 11, 28, 15, 'feature,new-arrival,trending', 'LG Regriaretor', 'lg-regriaretor', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '731980308.png', 'LG-FRIDGE', 'lg,fridge', 200, 1, '2024-01-21 22:40:20', '2024-01-21 22:40:20'),
(69, 14, 27, 14, 'feature,new-arrival', 'Dyning Table', 'dyning-table', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2049187024.png', 'DYNING-TABLE', 'dyning,table', 100, 1, '2024-01-21 22:42:01', '2024-01-21 22:42:01'),
(70, 11, 14, 11, 'new-arrival,trending', 'Samsung A21', 'samsung-a21', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1830461508.png', 'SAMSUNG-A21', 'samsung,a21', 100, 1, '2024-01-21 22:44:00', '2024-01-21 22:44:00'),
(71, 14, 27, 14, 'new-arrival,trending', 'Round Table', 'round-table', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '193805906.png', 'ROUND-TABLE', 'round,table', 100, 1, '2024-01-21 22:45:55', '2024-01-21 22:45:55'),
(72, 11, 28, 17, 'new-arrival', 'Walton Regrigaretor', 'walton-regrigaretor', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '622902008.png', 'WALTON-FRIDGE', 'walton fridge', 200, 1, '2024-01-21 22:48:15', '2024-01-21 22:48:15'),
(73, 13, 18, 16, 'feature,new-arrival', 'Jackets for Men', 'jackets-for-men', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2023767703.png', 'JACKTS', 'jackets', 70, 1, '2024-01-21 22:50:34', '2024-01-21 22:50:34'),
(74, 11, 14, 11, 'feature,new-arrival', 'Samsung Galaxy A04e', 'samsung-galaxy-a04e', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '828715119.png', 'SAMSUNG-GALAXY', 'samsung,galaxy', 100, 1, '2024-01-21 22:52:44', '2024-01-21 22:52:44'),
(75, 14, 27, 14, 'feature', 'Folding Round Table', 'folding-round-table', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1687746825.png', 'FOLDING-TABLE', 'folding,table', 100, 1, '2024-01-21 22:54:33', '2024-01-21 22:54:33'),
(76, 14, 20, 14, 'feature', 'Room Sofa', 'room-sofa', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1265160550.png', 'FURNITURE-SOFA', 'sofa', 100, 1, '2024-01-21 22:58:35', '2024-01-21 22:58:35'),
(77, 12, 15, 18, 'feature,new-arrival', 'Beef', 'beef', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1637460874.jpg', 'BEEF', 'beef', 70, 1, '2024-01-21 23:03:55', '2024-01-21 23:03:55'),
(78, 12, 15, 18, 'feature,new-arrival', 'Chicken Meat', 'chicken-meat', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1497507513.jpg', 'CHICKEN', 'chicken', 70, 1, '2024-01-21 23:05:48', '2024-01-21 23:05:48'),
(79, 12, 16, 18, 'feature,new-arrival', 'Ginger', 'ginger', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '48256348.jpg', 'GINGER', 'ginger', 70, 1, '2024-01-21 23:07:10', '2024-01-21 23:07:10'),
(80, 12, 16, 18, 'feature,new-arrival', 'Onion', 'onion', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1470355509.jpg', 'ONION', 'onion', 70, 1, '2024-01-21 23:08:30', '2024-01-21 23:08:30'),
(81, 12, 16, 18, 'feature,new-arrival', 'Potato', 'potato', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '636362809.jpg', 'POTATO', 'potato', 70, 1, '2024-01-21 23:09:42', '2024-01-21 23:09:42'),
(83, 13, 19, 16, 'feature,new-arrival,weekend-deals', 'T-Shirt for Smart Man', 't-shirt-for-smart-man', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', 'text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic', '1742277523.png', 'T-SHIRT-005', 't-shirt', 70, 1, '2024-01-24 11:46:09', '2024-01-24 11:46:09');

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
(91, 53, '2097634736.png', '2024-01-21 21:47:28', '2024-01-21 21:47:28'),
(92, 54, '1264175915.png', '2024-01-21 21:50:18', '2024-01-21 21:50:18'),
(93, 55, '451033152.png', '2024-01-21 22:01:13', '2024-01-21 22:01:13'),
(94, 56, '1718437178.png', '2024-01-21 22:03:58', '2024-01-21 22:03:58'),
(95, 57, '2118198515.png', '2024-01-21 22:05:57', '2024-01-21 22:05:57'),
(96, 58, '1117334339.png', '2024-01-21 22:08:29', '2024-01-21 22:08:29'),
(97, 59, '1062439628.png', '2024-01-21 22:19:53', '2024-01-21 22:19:53'),
(98, 60, '1832984797.png', '2024-01-21 22:21:41', '2024-01-21 22:21:41'),
(99, 61, '1824352617.png', '2024-01-21 22:24:07', '2024-01-21 22:24:07'),
(100, 62, '1600956799.png', '2024-01-21 22:26:10', '2024-01-21 22:26:10'),
(101, 63, '871839792.png', '2024-01-21 22:28:24', '2024-01-21 22:28:24'),
(102, 64, '825316947.png', '2024-01-21 22:30:47', '2024-01-21 22:30:47'),
(103, 65, '1504666335.png', '2024-01-21 22:32:57', '2024-01-21 22:32:57'),
(104, 66, '79607514.png', '2024-01-21 22:35:15', '2024-01-21 22:35:15'),
(105, 67, '2015477010.png', '2024-01-21 22:37:39', '2024-01-21 22:37:39'),
(106, 68, '938156495.png', '2024-01-21 22:40:20', '2024-01-21 22:40:20'),
(107, 69, '2063710477.png', '2024-01-21 22:42:01', '2024-01-21 22:42:01'),
(108, 70, '1218028694.png', '2024-01-21 22:44:00', '2024-01-21 22:44:00'),
(109, 71, '285063595.png', '2024-01-21 22:45:55', '2024-01-21 22:45:55'),
(110, 72, '1614563978.png', '2024-01-21 22:48:15', '2024-01-21 22:48:15'),
(111, 73, '13908149.png', '2024-01-21 22:50:34', '2024-01-21 22:50:34'),
(112, 74, '727086364.png', '2024-01-21 22:52:44', '2024-01-21 22:52:44'),
(113, 75, '1672089193.png', '2024-01-21 22:54:33', '2024-01-21 22:54:33'),
(114, 76, '734036678.png', '2024-01-21 22:58:35', '2024-01-21 22:58:35'),
(115, 77, '439363737.jpg', '2024-01-21 23:03:55', '2024-01-21 23:03:55'),
(116, 77, '428856423.jpg', '2024-01-21 23:03:55', '2024-01-21 23:03:55'),
(117, 78, '1535439662.jpg', '2024-01-21 23:05:48', '2024-01-21 23:05:48'),
(118, 78, '394592933.jpg', '2024-01-21 23:05:48', '2024-01-21 23:05:48'),
(119, 79, '1488319798.jpg', '2024-01-21 23:07:10', '2024-01-21 23:07:10'),
(120, 79, '923043248.jpg', '2024-01-21 23:07:10', '2024-01-21 23:07:10'),
(121, 80, '332651783.jpg', '2024-01-21 23:08:30', '2024-01-21 23:08:30'),
(122, 81, '498882434.jpg', '2024-01-21 23:09:42', '2024-01-21 23:09:42'),
(123, 81, '334820377.jpg', '2024-01-21 23:09:42', '2024-01-21 23:09:42'),
(124, 83, '396682478.png', '2024-01-24 11:46:09', '2024-01-24 11:46:09'),
(125, 83, '1995834960.png', '2024-01-24 11:46:09', '2024-01-24 11:46:09'),
(126, 83, '1079137942.png', '2024-01-24 11:46:09', '2024-01-24 11:46:09'),
(127, 83, '1550289961.png', '2024-01-24 11:46:09', '2024-01-24 11:46:09');

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
(101, 53, NULL, NULL, 12000.00, '0', 12000, 56, NULL, 'piece', 1, NULL, NULL, '2024-01-21 21:47:57', '2024-01-21 21:47:57'),
(102, 54, NULL, NULL, 24000.00, '0', 24000, 67, NULL, 'piece', 1, NULL, NULL, '2024-01-21 21:50:45', '2024-01-21 21:50:45'),
(103, 55, NULL, NULL, 200.00, '0', 200, 200, NULL, 'piece', 1, NULL, NULL, '2024-01-21 22:01:29', '2024-01-21 22:01:29'),
(104, 56, NULL, NULL, 1500.00, '10', 1350, 670, NULL, 'piece', 1, NULL, NULL, '2024-01-21 22:04:22', '2024-01-21 22:04:22'),
(105, 57, NULL, NULL, 200.00, '0', 200, 56, NULL, 'piece', 1, NULL, NULL, '2024-01-21 22:06:12', '2024-01-21 22:06:12'),
(106, 58, NULL, NULL, 1350.00, '0', 1350, 635, NULL, 'piece', 1, NULL, NULL, '2024-01-21 22:08:54', '2024-01-21 22:08:54'),
(107, 59, NULL, NULL, 250.00, '0', 250, 200, NULL, 'piece', 1, NULL, NULL, '2024-01-21 22:20:09', '2024-01-21 22:20:09'),
(108, 60, NULL, NULL, 2300.00, '10', 2070, 290, NULL, 'piece', 1, NULL, NULL, '2024-01-21 22:22:15', '2024-01-21 22:22:15'),
(109, 61, NULL, NULL, 45000.00, '0', 45000, 78, NULL, 'piece', 1, NULL, NULL, '2024-01-21 22:24:29', '2024-01-21 22:24:29'),
(110, 62, NULL, NULL, 3400.00, '0', 3400, 46, NULL, 'piece', 1, NULL, NULL, '2024-01-21 22:26:29', '2024-01-21 22:26:29'),
(111, 63, NULL, NULL, 700.00, '0', 700, 23, NULL, 'piece', 1, NULL, NULL, '2024-01-21 22:28:47', '2024-01-21 22:28:47'),
(112, 64, NULL, NULL, 200.00, '0', 200, 200, NULL, 'piece', 1, NULL, NULL, '2024-01-21 22:31:02', '2024-01-21 22:31:02'),
(113, 65, NULL, NULL, 250.00, '0', 250, 27, NULL, 'piece', 1, NULL, NULL, '2024-01-21 22:33:12', '2024-01-21 22:33:12'),
(114, 66, NULL, NULL, 3100.00, '10', 2790, 27, NULL, 'piece', 1, NULL, NULL, '2024-01-21 22:35:32', '2024-01-21 22:35:32'),
(115, 67, NULL, NULL, 2200.00, '20', 1760, 340, NULL, 'piece', 1, NULL, NULL, '2024-01-21 22:38:05', '2024-01-21 22:38:05'),
(116, 68, NULL, NULL, 34000.00, '0', 34000, 34, NULL, 'piece', 1, NULL, NULL, '2024-01-21 22:40:36', '2024-01-21 22:40:36'),
(117, 69, NULL, NULL, 1500.00, '0', 1500, 67, NULL, 'piece', 1, NULL, NULL, '2024-01-21 22:42:20', '2024-01-21 22:42:20'),
(118, 70, NULL, NULL, 14999.00, '0', 14999, 15, NULL, 'piece', 1, NULL, NULL, '2024-01-21 22:44:21', '2024-01-21 22:44:21'),
(119, 71, NULL, NULL, 670.00, '0', 670, 56, NULL, 'piece', 1, NULL, NULL, '2024-01-21 22:46:24', '2024-01-21 22:46:24'),
(120, 72, NULL, NULL, 25000.00, '0', 25000, 24, NULL, 'piece', 1, NULL, NULL, '2024-01-21 22:48:34', '2024-01-21 22:48:34'),
(121, 73, NULL, NULL, 2100.00, '0', 2100, 87, NULL, 'piece', 1, NULL, NULL, '2024-01-21 22:50:48', '2024-01-21 22:50:48'),
(122, 74, NULL, NULL, 19000.00, '0', 19000, 63, NULL, 'piece', 1, NULL, NULL, '2024-01-21 22:53:04', '2024-01-21 22:53:04'),
(123, 75, NULL, NULL, 890.00, '0', 890, 28, NULL, 'piece', 1, NULL, NULL, '2024-01-21 22:54:54', '2024-01-21 22:54:54'),
(124, 76, NULL, NULL, 67000.00, '10', 60300, 78, NULL, 'piece', 1, NULL, NULL, '2024-01-21 22:58:53', '2024-01-21 22:58:53'),
(125, 77, NULL, NULL, 700.00, '0', 700, 20, NULL, 'kg', 1, NULL, NULL, '2024-01-21 23:04:16', '2024-01-21 23:04:16'),
(126, 78, NULL, NULL, 200.00, '0', 200, 20, NULL, 'kg', 1, NULL, NULL, '2024-01-21 23:06:04', '2024-01-21 23:06:04'),
(127, 79, NULL, NULL, 200.00, '0', 200, 200, NULL, 'kg', 1, NULL, NULL, '2024-01-21 23:07:24', '2024-01-21 23:07:24'),
(128, 80, NULL, NULL, 100.00, '0', 100, 100, NULL, 'kg', 1, NULL, NULL, '2024-01-21 23:08:44', '2024-01-21 23:08:44'),
(129, 81, NULL, NULL, 70.00, '0', 70, 100, NULL, 'kg', 1, NULL, NULL, '2024-01-21 23:09:56', '2024-01-21 23:09:56'),
(130, 83, 'red', 'M', 200.00, '0', 200, 50, '5000', 'piece', 1, NULL, NULL, '2024-01-24 11:46:46', '2024-01-24 11:46:46'),
(131, 83, 'blue', 'L', 250.00, '0', 250, 67, '68897', 'piece', 1, NULL, NULL, '2024-01-24 11:47:15', '2024-01-24 11:47:15'),
(132, 83, 'green', 'XL', 300.00, '10', 270, 67, '786969', 'piece', 1, NULL, NULL, '2024-01-24 11:47:39', '2024-01-24 11:47:39');

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
(9, 2, 80, 1, '2024-01-22 05:38:45', '2024-01-22 05:38:45'),
(10, 2, 78, 1, '2024-01-22 22:39:14', '2024-01-22 22:39:14'),
(11, 2, 77, 1, '2024-01-23 00:03:50', '2024-01-23 00:03:50'),
(12, 2, 64, 1, '2024-01-23 00:03:53', '2024-01-23 00:03:53');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_billing_details`
--
ALTER TABLE `order_billing_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `o_t_p_data`
--
ALTER TABLE `o_t_p_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `product_galleries`
--
ALTER TABLE `product_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `variants`
--
ALTER TABLE `variants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

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
