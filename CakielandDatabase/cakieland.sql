-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2024 at 09:07 AM
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
-- Database: `cakieland1`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` varchar(5) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('0ade7c2cf97f75d009975f4d720d1fa6c19f4897', 'i:1;', 1717698649),
('0ade7c2cf97f75d009975f4d720d1fa6c19f4897:timer', 'i:1717698649;', 1717698649),
('3ab06bff7ce3f7aae128b23f412d29d6', 'i:1;', 1716217753),
('3ab06bff7ce3f7aae128b23f412d29d6:timer', 'i:1716217753;', 1716217753),
('ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4', 'i:1;', 1717427750),
('ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4:timer', 'i:1717427750;', 1717427750),
('c1dfd96eea8cc2b62785275bca38ac261256e278', 'i:1;', 1717311771),
('c1dfd96eea8cc2b62785275bca38ac261256e278:timer', 'i:1717311771;', 1717311771),
('daothihanhuyen10a3.19.20@gmail.com|127.0.0.1', 'i:3;', 1716091911),
('daothihanhuyen10a3.19.20@gmail.com|127.0.0.1:timer', 'i:1716091911;', 1716091911),
('fe5dbbcea5ce7e2988b8c69bcfdfde8904aabc1f', 'i:1;', 1717665580),
('fe5dbbcea5ce7e2988b8c69bcfdfde8904aabc1f:timer', 'i:1717665580;', 1717665580),
('subinkhang@gmail.com|127.0.0.1', 'i:1;', 1715711350),
('subinkhang@gmail.com|127.0.0.1:timer', 'i:1715711350;', 1715711350);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(5) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Dry ingredients'),
(2, 'Wet ingredients'),
(3, 'Baking tools'),
(4, 'Cooking utensils'),
(5, 'Bar tool'),
(6, 'Bar ingredients');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `body` text DEFAULT NULL,
  `commentable_type` varchar(255) NOT NULL,
  `commentable_id` int(5) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `parent_id`, `body`, `commentable_type`, `commentable_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(27, 6, NULL, 'tên sản phẩm gì thấy ghê', 'App\\Models\\Post', 25, NULL, '2024-06-06 06:24:16', '2024-06-06 06:24:16'),
(28, 9, NULL, 'hello', 'App\\Models\\Post', 28, NULL, '2024-06-06 11:37:50', '2024-06-06 11:37:50'),
(29, 9, 28, 'hi', 'App\\Models\\Post', 28, NULL, '2024-06-06 11:38:08', '2024-06-06 11:38:08');

-- --------------------------------------------------------

--
-- Table structure for table `comment_likes`
--

CREATE TABLE `comment_likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment_likes`
--

INSERT INTO `comment_likes` (`id`, `user_id`, `comment_id`, `ip`, `user_agent`, `created_at`, `updated_at`) VALUES
(1, 26, 3, NULL, NULL, '2024-06-01 09:19:23', '2024-06-01 09:19:23'),
(3, 25, 21, NULL, NULL, '2024-06-03 02:41:25', '2024-06-03 02:41:25'),
(4, 25, 20, NULL, NULL, '2024-06-03 03:46:09', '2024-06-03 03:46:09'),
(5, 5, 25, NULL, NULL, '2024-06-03 08:07:45', '2024-06-03 08:07:45'),
(8, 6, 27, NULL, NULL, '2024-06-06 06:25:18', '2024-06-06 06:25:18'),
(9, 9, 28, NULL, NULL, '2024-06-06 11:37:56', '2024-06-06 11:37:56');

-- --------------------------------------------------------

--
-- Table structure for table `email_customer`
--

CREATE TABLE `email_customer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_customer`
--

INSERT INTO `email_customer` (`id`, `email`, `created_at`, `updated_at`) VALUES
(17, 'k@mail.com', NULL, NULL),
(18, 'kk@gmail.com', NULL, NULL),
(19, 'oooo@gm.uit.edu.vn', NULL, NULL),
(20, 'caca@gmail.com', NULL, NULL),
(21, 'llllle@gmail.com', NULL, NULL),
(22, 'vogiabach28@gmail.com', NULL, NULL),
(23, 'vogiabach28@gmail.com', NULL, NULL),
(24, 'subinkhang102@gmail.com', NULL, NULL),
(25, 'subinkhang102@gmail.com', NULL, NULL),
(26, 'vogiabach28@gmail.com', NULL, NULL),
(27, 'vogiabach28@gmail.com', NULL, NULL),
(28, 'vogiabach28@gmail.com', NULL, NULL),
(29, 'vogiabach28@gmail.com', NULL, NULL),
(30, 'subinkhang102@gmail.com', NULL, NULL),
(31, 'vogiabach28@gmail.com', NULL, NULL),
(32, 'vogiabach28@gmail.com', NULL, NULL),
(33, 'vogiabach28@gmail.com', NULL, NULL),
(34, 'vogiabach28@gmail.com', NULL, NULL),
(35, 'nhongtrang878@gmail.com', NULL, NULL);

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
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(5) NOT NULL,
  `product_id` int(5) DEFAULT NULL,
  `image_product` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `product_id`, `image_product`) VALUES
(141, 37, '1717741191-833.png'),
(142, 37, '1717741191-401.png'),
(143, 37, '1717741191-691.png'),
(144, 38, '1717741230-97.png'),
(145, 38, '1717741230-224.png'),
(146, 38, '1717741230-386.png'),
(147, 40, '1717741259-410.png'),
(148, 40, '1717741259-542.png'),
(149, 40, '1717741259-762.png'),
(150, 39, '1717741281-164.png'),
(151, 39, '1717741281-383.png'),
(152, 39, '1717741281-128.png'),
(153, 39, '1717741281-511.png'),
(154, 39, '1717741281-73.png'),
(157, 49, '1717741349-822.png'),
(158, 49, '1717741349-765.png'),
(159, 49, '1717741349-908.png'),
(160, 50, '1717741429-571.png'),
(161, 50, '1717741429-373.png'),
(162, 45, '1717741467-192.png'),
(163, 45, '1717741467-570.png'),
(164, 45, '1717741467-585.png'),
(165, 45, '1717741467-76.png'),
(170, 46, '1717741493-173.png'),
(171, 46, '1717741493-400.png'),
(172, 46, '1717741493-119.png'),
(173, 46, '1717741493-197.png'),
(182, 47, '1717741520-415.png'),
(183, 47, '1717741520-974.png'),
(184, 47, '1717741520-962.png'),
(185, 47, '1717741520-568.png'),
(197, 29, '1717742063-42.png'),
(198, 29, '1717742063-513.png'),
(199, 29, '1717742063-431.png'),
(200, 32, '1717742089-97.png'),
(201, 32, '1717742089-544.png'),
(205, 33, '1717742148-749.png'),
(206, 33, '1717742148-118.png'),
(207, 33, '1717742148-871.png');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_04_19_145329_add_two_factor_columns_to_users_table', 1),
(5, '2024_04_19_145354_create_personal_access_tokens_table', 1),
(6, '2024_05_08_145137_homepage_migration', 2),
(7, '2024_05_20_150238_create_roles_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(5) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(10) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `order_date` datetime DEFAULT current_timestamp(),
  `status` int(11) DEFAULT 2,
  `total_money` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `fullname`, `email`, `phone_number`, `address`, `order_date`, `status`, `total_money`) VALUES
(71, 6, 'admin', 'cakielandofficial@gmail.com', NULL, NULL, '2024-06-06 14:48:25', 2, '42.54');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(5) NOT NULL,
  `order_id` int(5) NOT NULL,
  `product_id` int(5) NOT NULL,
  `price` varchar(20) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total_money` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `price`, `quantity`, `total_money`) VALUES
(32, 71, 32, '3.25', 10, '32.5'),
(33, 71, 35, '11.03', 1, '11.03'),
(34, 71, 36, '13.56', 1, '13.56');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('cakielandadmin@gmail.com', '$2y$12$73RBrCTlaLQVcABlC.PeMu1uu2JgBRbNWMiA0LLh4ygSE3wo0C15W', '2024-05-26 21:44:48');

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(5) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `product_id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(20, 32, NULL, NULL, NULL, NULL, NULL),
(21, 31, NULL, NULL, NULL, NULL, NULL),
(22, 35, NULL, NULL, NULL, NULL, NULL),
(23, 29, NULL, NULL, NULL, NULL, NULL),
(24, 34, NULL, NULL, NULL, NULL, NULL),
(25, 41, NULL, NULL, NULL, NULL, NULL),
(26, 50, NULL, NULL, NULL, NULL, NULL),
(27, 44, NULL, NULL, NULL, NULL, NULL),
(28, 30, NULL, NULL, NULL, NULL, NULL),
(29, 38, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(5) NOT NULL,
  `category_id` int(5) NOT NULL,
  `sub_category_id` int(5) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `fake_price` varchar(20) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `description_detail` longtext DEFAULT NULL,
  `description_technique` longtext DEFAULT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL,
  `sum` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `sub_category_id`, `name`, `fake_price`, `price`, `thumbnail`, `description`, `description_detail`, `description_technique`, `brand`, `created_at`, `updated_at`, `deleted`, `sum`) VALUES
(29, 1, 7, 'Meizan - Plain flour1kg', '9.5', '8', '1717596891-730.png', 'Blade Flexibility: The flexibility of the spatula blade is important for scraping and spreading ingredients. A more flexible blade will be able to get into corners and crevices better, while a stiffer blade will be better for spreading frosting or dough.', 'Material: Can be made of silicone, plastic, or rubber. Choose a spatula made from food-grade materials, heat-resistant, easy to clean, and flexible. \r\n\r\nSize: Available in various sizes, from small to large. Choose a spatula with a size appropriate for the bowl or container you are using. \r\n\r\nTypes of Spatulas: There are different types of spatulas, the most common being straight spatulas and angled spatulas. Straight spatulas are suitable for scraping batter, mixing ingredients, angled spatulas are suitable for spreading frosting, chocolate, etc. \r\n\r\nNote: Use the appropriate spatula for each ingredient and purpose. Avoid using spatulas with torn or cracked blades.', 'Trademark: KitchenAid \r\n\r\nBrand Origin: USA \r\n\r\nMaterial: Stainless steel, ABS plastic \r\n\r\nWattage: 250W \r\n\r\nSize: 23 x 17 x 8 cm \r\n\r\nProduct Weight: 0.9 kg \r\n\r\nWarranty Form: Warranty \r\n\r\nWarranty Period: 1 year \r\n\r\nAdditional Features: \r\n\r\n5 speed settings \r\n\r\n2 beater attachments and 2 dough hooks \r\n\r\nErgonomic handle for comfortable grip \r\n\r\nDishwasher safe attachments', 'Meizan', '2024-06-05 21:14:51', NULL, NULL, NULL),
(30, 1, 7, 'Whole wheat flour 2,27kg', '12.05', '10.00', '1717597256-289.jfif', 'Blade Flexibility: The flexibility of the spatula blade is important for scraping and spreading ingredients. A more flexible blade will be able to get into corners and crevices better, while a stiffer blade will be better for spreading frosting or dough.', 'Size: Available in various sizes, from small to large. Choose a whisk with a size appropriate for the bowl or container you are using. \r\n\r\nTypes of Whisks: There are different types of whisks, the most common being balloon whisks and dough whisks. Balloon whisks have thin wire tines that help whip cream easily, dough whisks have thicker wire tines that help mix dough more evenly. \r\n\r\nSingle vs. Double Action: Single-action sifters require you to push the plunger down to sift the flour, while double-action sifters have a rotating mechanism that sifts the flour as you push down. Double-action sifters are generally easier to use and produce more evenly sifted flour. \r\n\r\nNote: Use the appropriate whisk for each ingredient and purpose. Avoid using whisks with rusted or bent wires.', 'Trademark: Silpat \r\n\r\nBrand Origin: France \r\n\r\nMaterial: Silicone \r\n\r\nSize: 42 x 30 cm \r\n\r\nTemperature Resistance: -40°F to 480°F (-40°C to 250°C) \r\n\r\nAdditional Features: \r\n\r\nNon-stick surface for easy release of baked goods \r\n\r\nCan be used for baking, roasting, and freezing \r\n\r\nDishwasher safe \r\n\r\nReusable and durable', 'Bob’s Mill', '2024-06-05 21:20:56', NULL, NULL, NULL),
(31, 1, 8, 'Mauri - Bread yeast 10g', '2.05', '1.29', '1717597632-555.jfif', 'Blade Flexibility: The flexibility of the spatula blade is important for scraping and spreading ingredients. A more flexible blade will be able to get into corners and crevices better, while a stiffer blade will be better for spreading frosting or dough.', 'Additional Tips: \r\n\r\nInvest in high-quality baking tools that will last for years. \r\n\r\nProperly care for your baking tools by washing them by hand with warm, soapy water and drying them thoroughly. \r\n\r\nStore your baking tools in a clean, organized place. \r\n\r\nWith the right baking tools, you can create delicious and beautiful cakes right at home. \r\n\r\nWire Thickness: The thickness of the whisk wires affects how well it can mix different ingredients. Thinner wires are better for whisking light ingredients like eggs and cream, while thicker wires are better for mixing heavier ingredients like dough. \r\n\r\nHandle Design: The handle design of the whisk should be comfortable to grip and easy to control. Look for a whisk with a handle that has a good grip and a non-slip', 'Trademark: Kuhn Rikon \r\n\r\nBrand Origin: Switzerland \r\n\r\nMaterial: 18/10 stainless steel \r\n\r\nSet Includes: 1 cup, 1/2 cup, 1/3 cup, 1/4 cup, 1 tablespoon, 1 teaspoon, 1/2 teaspoon, 1/4 teaspoon \r\n\r\nAdditional Features: \r\n\r\nNested design for compact storage \r\n\r\nEasy-to-read markings \r\n\r\nDishwasher safe \r\n\r\nDurable construction', 'Mauri', '2024-06-05 21:27:12', NULL, NULL, NULL),
(32, 1, 8, 'Baking powder 1kg', '2.19', '3.25', '1717597881-534.jfif', 'Blade Flexibility: The flexibility of the spatula blade is important for scraping and spreading ingredients. A more flexible blade will be able to get into corners and crevices better, while a stiffer blade will be better for spreading frosting or dough.', 'Mesh Size: The mesh size of the sifter determines how fine the flour will be. A finer mesh will result in a lighter and airier cake, while a coarser mesh will result in a denser cake. \r\n\r\nSingle vs. Double Action: Single-action sifters require you to push the plunger down to sift the flour, while double-action sifters have a rotating mechanism that sifts the flour as you push down. Double-action sifters are generally easier to use and produce more evenly sifted flour. \r\n\r\nBlade Flexibility: The flexibility of the spatula blade is important for scraping and spreading ingredients. A more flexible blade will be able to get into corners and crevices better, while a stiffer blade will be better for spreading frosting or dough. \r\n\r\nHandle Length: The length of the spatula handle should be appropriate for the size of the bowls or pans you are using. A longer handle will give you more reach, while a shorter handle will be more maneuverable in smaller spaces.', 'Trademark: Le Creuset \r\n\r\nBrand Origin: France \r\n\r\nMaterial: Granite stoneware with wooden handles \r\n\r\nSize: 16 inches long, 2.5 inches in diameter \r\n\r\nAdditional Features: \r\n\r\nSmooth, non-stick surface for easy rolling and dough release \r\n\r\nHeavy weight for even rolling and pressure \r\n\r\nComfortable wooden handles for a secure grip \r\n\r\nDurable construction for long-lasting use \r\n\r\nOven safe up to 500°F (260°C)', 'Mauri', '2024-06-05 21:31:21', NULL, NULL, NULL),
(33, 2, 9, 'Sour cream Tatua 500g', '8.5', '7.68', '1717598833-597.png', 'Blade Flexibility: The flexibility of the spatula blade is important for scraping and spreading ingredients. A more flexible blade will be able to get into corners and crevices better, while a stiffer blade will be better for spreading frosting or dough.', 'Material: Can be made of silicone, plastic, or rubber. Choose a spatula made from food-grade materials, heat-resistant, easy to clean, and flexible. \r\n\r\nSize: Available in various sizes, from small to large. Choose a spatula with a size appropriate for the bowl or container you are using. \r\n\r\nTypes of Spatulas: There are different types of spatulas, the most common being straight spatulas and angled spatulas. Straight spatulas are suitable for scraping batter, mixing ingredients, angled spatulas are suitable for spreading frosting, chocolate, etc. \r\n\r\nNote: Use the appropriate spatula for each ingredient and purpose. Avoid using spatulas with torn or cracked blades.', 'Trademark: KitchenAid \r\n\r\nBrand Origin: USA \r\n\r\nMaterial: Stainless steel, ABS plastic \r\n\r\nWattage: 250W \r\n\r\nSize: 23 x 17 x 8 cm \r\n\r\nProduct Weight: 0.9 kg \r\n\r\nWarranty Form: Warranty \r\n\r\nWarranty Period: 1 year \r\n\r\nAdditional Features: \r\n\r\n5 speed settings \r\n\r\n2 beater attachments and 2 dough hooks \r\n\r\nErgonomic handle for comfortable grip \r\n\r\nDishwasher safe attachments', 'Tatua', '2024-06-05 21:47:13', NULL, NULL, NULL),
(34, 2, 9, 'Whole milk - 3,5% Oldenburger 1L', '5.67', '4.57', '1717600189-152.png', 'Blade Flexibility: The flexibility of the spatula blade is important for scraping and spreading ingredients. A more flexible blade will be able to get into corners and crevices better, while a stiffer blade will be better for spreading frosting or dough.', 'Size: Available in various sizes, from small to large. Choose a whisk with a size appropriate for the bowl or container you are using. \r\n\r\nTypes of Whisks: There are different types of whisks, the most common being balloon whisks and dough whisks. Balloon whisks have thin wire tines that help whip cream easily, dough whisks have thicker wire tines that help mix dough more evenly. \r\n\r\nSingle vs. Double Action: Single-action sifters require you to push the plunger down to sift the flour, while double-action sifters have a rotating mechanism that sifts the flour as you push down. Double-action sifters are generally easier to use and produce more evenly sifted flour. \r\n\r\nNote: Use the appropriate whisk for each ingredient and purpose. Avoid using whisks with rusted or bent wires.', 'Trademark: Silpat \r\n\r\nBrand Origin: France \r\n\r\nMaterial: Silicone \r\n\r\nSize: 42 x 30 cm \r\n\r\nTemperature Resistance: -40°F to 480°F (-40°C to 250°C) \r\n\r\nAdditional Features: \r\n\r\nNon-stick surface for easy release of baked goods \r\n\r\nCan be used for baking, roasting, and freezing \r\n\r\nDishwasher safe \r\n\r\nReusable and durable', 'Oldenburger', '2024-06-05 22:09:49', NULL, NULL, NULL),
(35, 2, 10, 'Whipping cream 500g', '14.03', '11.03', '1717600819-133.jfif', 'Passionate about baking but lack the necessary support tools? Let the Cake Kitchen introduce to you indispensable baking tools, helping you unleash your creativity and produce delicious, beautiful cakes:', 'Additional Tips: \r\n\r\nInvest in high-quality baking tools that will last for years. \r\n\r\nProperly care for your baking tools by washing them by hand with warm, soapy water and drying them thoroughly. \r\n\r\nStore your baking tools in a clean, organized place. \r\n\r\nWith the right baking tools, you can create delicious and beautiful cakes right at home. \r\n\r\nWire Thickness: The thickness of the whisk wires affects how well it can mix different ingredients. Thinner wires are better for whisking light ingredients like eggs and cream, while thicker wires are better for mixing heavier ingredients like dough. \r\n\r\nHandle Design: The handle design of the whisk should be comfortable to grip and easy to control. Look for a whisk with a handle that has a good grip and a non-slip', 'Trademark: Kuhn Rikon \r\n\r\nBrand Origin: Switzerland \r\n\r\nMaterial: 18/10 stainless steel \r\n\r\nSet Includes: 1 cup, 1/2 cup, 1/3 cup, 1/4 cup, 1 tablespoon, 1 teaspoon, 1/2 teaspoon, 1/4 teaspoon \r\n\r\nAdditional Features: \r\n\r\nNested design for compact storage \r\n\r\nEasy-to-read markings \r\n\r\nDishwasher safe \r\n\r\nDurable construction', 'Malaysia', '2024-06-05 22:20:19', NULL, NULL, NULL),
(36, 2, 9, 'Whipping Anchor 1L', '15', '13.56', '1717601148-373.jpeg', 'Passionate about baking but lack the necessary support tools? Let the Cake Kitchen introduce to you indispensable baking tools, helping you unleash your creativity and produce delicious, beautiful cakes:', 'Mesh Size: The mesh size of the sifter determines how fine the flour will be. A finer mesh will result in a lighter and airier cake, while a coarser mesh will result in a denser cake. \r\n\r\nSingle vs. Double Action: Single-action sifters require you to push the plunger down to sift the flour, while double-action sifters have a rotating mechanism that sifts the flour as you push down. Double-action sifters are generally easier to use and produce more evenly sifted flour. \r\n\r\nBlade Flexibility: The flexibility of the spatula blade is important for scraping and spreading ingredients. A more flexible blade will be able to get into corners and crevices better, while a stiffer blade will be better for spreading frosting or dough. \r\n\r\nHandle Length: The length of the spatula handle should be appropriate for the size of the bowls or pans you are using. A longer handle will give you more reach, while a shorter handle will be more maneuverable in smaller spaces.', 'Trademark: Le Creuset \r\n\r\nBrand Origin: France \r\n\r\nMaterial: Granite stoneware with wooden handles \r\n\r\nSize: 16 inches long, 2.5 inches in diameter \r\n\r\nAdditional Features: \r\n\r\nSmooth, non-stick surface for easy rolling and dough release \r\n\r\nHeavy weight for even rolling and pressure \r\n\r\nComfortable wooden handles for a secure grip \r\n\r\nDurable construction for long-lasting use \r\n\r\nOven safe up to 500°F (260°C)', 'Anchor', '2024-06-05 22:25:48', NULL, NULL, NULL),
(37, 3, 11, 'Cake mold spring form 20cm', '6', '5.78', '1717601304-323.jfif', 'Passionate about baking but lack the necessary support tools? Let the Cake Kitchen introduce to you indispensable baking tools, helping you unleash your creativity and produce delicious, beautiful cakes:', 'Material: Can be made of silicone, plastic, or rubber. Choose a spatula made from food-grade materials, heat-resistant, easy to clean, and flexible. \r\n\r\nSize: Available in various sizes, from small to large. Choose a spatula with a size appropriate for the bowl or container you are using. \r\n\r\nTypes of Spatulas: There are different types of spatulas, the most common being straight spatulas and angled spatulas. Straight spatulas are suitable for scraping batter, mixing ingredients, angled spatulas are suitable for spreading frosting, chocolate, etc. \r\n\r\nNote: Use the appropriate spatula for each ingredient and purpose. Avoid using spatulas with torn or cracked blades.', 'Trademark: KitchenAid \r\n\r\nBrand Origin: USA \r\n\r\nMaterial: Stainless steel, ABS plastic \r\n\r\nWattage: 250W \r\n\r\nSize: 23 x 17 x 8 cm \r\n\r\nProduct Weight: 0.9 kg \r\n\r\nWarranty Form: Warranty \r\n\r\nWarranty Period: 1 year \r\n\r\nAdditional Features: \r\n\r\n5 speed settings \r\n\r\n2 beater attachments and 2 dough hooks \r\n\r\nErgonomic handle for comfortable grip \r\n\r\nDishwasher safe attachments', 'Master class', '2024-06-05 22:28:24', NULL, NULL, NULL),
(38, 3, 11, 'Baking tray Unibaker', '5.98', '5', '1717601448-93.jfif', 'Passionate about baking but lack the necessary support tools? Let the Cake Kitchen introduce to you indispensable baking tools, helping you unleash your creativity and produce delicious, beautiful cakes:', 'Size: Available in various sizes, from small to large. Choose a whisk with a size appropriate for the bowl or container you are using. \r\n\r\nTypes of Whisks: There are different types of whisks, the most common being balloon whisks and dough whisks. Balloon whisks have thin wire tines that help whip cream easily, dough whisks have thicker wire tines that help mix dough more evenly. \r\n\r\nSingle vs. Double Action: Single-action sifters require you to push the plunger down to sift the flour, while double-action sifters have a rotating mechanism that sifts the flour as you push down. Double-action sifters are generally easier to use and produce more evenly sifted flour. \r\n\r\nNote: Use the appropriate whisk for each ingredient and purpose. Avoid using whisks with rusted or bent wires.', 'Trademark: Silpat \r\n\r\nBrand Origin: France \r\n\r\nMaterial: Silicone \r\n\r\nSize: 42 x 30 cm \r\n\r\nTemperature Resistance: -40°F to 480°F (-40°C to 250°C) \r\n\r\nAdditional Features: \r\n\r\nNon-stick surface for easy release of baked goods \r\n\r\nCan be used for baking, roasting, and freezing \r\n\r\nDishwasher safe \r\n\r\nReusable and durable', 'Unibaker', '2024-06-05 22:30:48', NULL, NULL, NULL),
(39, 3, 12, 'Electric mixer - Bluestone 400W HMB-6338S', '30.09', '28.56', '1717601599-288.png', 'Passionate about baking but lack the necessary support tools? Let the Cake Kitchen introduce to you indispensable baking tools, helping you unleash your creativity and produce delicious, beautiful cakes:', 'Additional Tips: \r\n\r\nInvest in high-quality baking tools that will last for years. \r\n\r\nProperly care for your baking tools by washing them by hand with warm, soapy water and drying them thoroughly. \r\n\r\nStore your baking tools in a clean, organized place. \r\n\r\nWith the right baking tools, you can create delicious and beautiful cakes right at home. \r\n\r\nWire Thickness: The thickness of the whisk wires affects how well it can mix different ingredients. Thinner wires are better for whisking light ingredients like eggs and cream, while thicker wires are better for mixing heavier ingredients like dough. \r\n\r\nHandle Design: The handle design of the whisk should be comfortable to grip and easy to control. Look for a whisk with a handle that has a good grip and a non-slip', 'Trademark: Kuhn Rikon \r\n\r\nBrand Origin: Switzerland \r\n\r\nMaterial: 18/10 stainless steel \r\n\r\nSet Includes: 1 cup, 1/2 cup, 1/3 cup, 1/4 cup, 1 tablespoon, 1 teaspoon, 1/2 teaspoon, 1/4 teaspoon \r\n\r\nAdditional Features: \r\n\r\nNested design for compact storage \r\n\r\nEasy-to-read markings \r\n\r\nDishwasher safe \r\n\r\nDurable construction', 'Bluestone', '2024-06-05 22:33:19', NULL, NULL, NULL),
(40, 3, 12, 'Egg mixer - Net mego 300W', '25.47', '24.04', '1717603033-74.png', 'Types of Whisks: There are different types of whisks, the most common being balloon whisks and dough whisks. Balloon whisks have thin wire tines that help whip cream easily, dough whisks have thicker wire tines that help mix dough more evenly.', 'Mesh Size: The mesh size of the sifter determines how fine the flour will be. A finer mesh will result in a lighter and airier cake, while a coarser mesh will result in a denser cake. \r\n\r\nSingle vs. Double Action: Single-action sifters require you to push the plunger down to sift the flour, while double-action sifters have a rotating mechanism that sifts the flour as you push down. Double-action sifters are generally easier to use and produce more evenly sifted flour. \r\n\r\nBlade Flexibility: The flexibility of the spatula blade is important for scraping and spreading ingredients. A more flexible blade will be able to get into corners and crevices better, while a stiffer blade will be better for spreading frosting or dough. \r\n\r\nHandle Length: The length of the spatula handle should be appropriate for the size of the bowls or pans you are using. A longer handle will give you more reach, while a shorter handle will be more maneuverable in smaller spaces.', 'Trademark: Le Creuset \r\n\r\nBrand Origin: France \r\n\r\nMaterial: Granite stoneware with wooden handles \r\n\r\nSize: 16 inches long, 2.5 inches in diameter \r\n\r\nAdditional Features: \r\n\r\nSmooth, non-stick surface for easy rolling and dough release \r\n\r\nHeavy weight for even rolling and pressure \r\n\r\nComfortable wooden handles for a secure grip \r\n\r\nDurable construction for long-lasting use \r\n\r\nOven safe up to 500°F (260°C)', 'Net mego', '2024-06-05 22:57:13', NULL, NULL, NULL),
(41, 4, 1, 'Chef Classic Stainless Cookware Collection 8-Inch', '34.38', '33.56', '1717603375-610.jfif', 'Types of Whisks: There are different types of whisks, the most common being balloon whisks and dough whisks. Balloon whisks have thin wire tines that help whip cream easily, dough whisks have thicker wire tines that help mix dough more evenly.', 'Mesh Size: The mesh size of the sifter determines how fine the flour will be. A finer mesh will result in a lighter and airier cake, while a coarser mesh will result in a denser cake. \r\n\r\nSingle vs. Double Action: Single-action sifters require you to push the plunger down to sift the flour, while double-action sifters have a rotating mechanism that sifts the flour as you push down. Double-action sifters are generally easier to use and produce more evenly sifted flour. \r\n\r\nBlade Flexibility: The flexibility of the spatula blade is important for scraping and spreading ingredients. A more flexible blade will be able to get into corners and crevices better, while a stiffer blade will be better for spreading frosting or dough. \r\n\r\nHandle Length: The length of the spatula handle should be appropriate for the size of the bowls or pans you are using. A longer handle will give you more reach, while a shorter handle will be more maneuverable in smaller spaces.', 'Trademark: Le Creuset \r\n\r\nBrand Origin: France \r\n\r\nMaterial: Granite stoneware with wooden handles \r\n\r\nSize: 16 inches long, 2.5 inches in diameter \r\n\r\nAdditional Features: \r\n\r\nSmooth, non-stick surface for easy rolling and dough release \r\n\r\nHeavy weight for even rolling and pressure \r\n\r\nComfortable wooden handles for a secure grip \r\n\r\nDurable construction for long-lasting use \r\n\r\nOven safe up to 500°F (260°C)', 'Cuisinart', '2024-06-05 23:02:55', NULL, NULL, NULL),
(42, 4, 1, 'Cuisinart Chef Classic Stainless Nonstick 8-Inch Open Skillet', '29.95', '26', '1717603493-976.jfif', 'Types of Whisks: There are different types of whisks, the most common being balloon whisks and dough whisks. Balloon whisks have thin wire tines that help whip cream easily, dough whisks have thicker wire tines that help mix dough more evenly.', 'Material: Can be made of silicone, plastic, or rubber. Choose a spatula made from food-grade materials, heat-resistant, easy to clean, and flexible. \r\n\r\nSize: Available in various sizes, from small to large. Choose a spatula with a size appropriate for the bowl or container you are using. \r\n\r\nTypes of Spatulas: There are different types of spatulas, the most common being straight spatulas and angled spatulas. Straight spatulas are suitable for scraping batter, mixing ingredients, angled spatulas are suitable for spreading frosting, chocolate, etc. \r\n\r\nNote: Use the appropriate spatula for each ingredient and purpose. Avoid using spatulas with torn or cracked blades.', 'Trademark: KitchenAid \r\n\r\nBrand Origin: USA \r\n\r\nMaterial: Stainless steel, ABS plastic \r\n\r\nWattage: 250W \r\n\r\nSize: 23 x 17 x 8 cm \r\n\r\nProduct Weight: 0.9 kg \r\n\r\nWarranty Form: Warranty \r\n\r\nWarranty Period: 1 year \r\n\r\nAdditional Features: \r\n\r\n5 speed settings \r\n\r\n2 beater attachments and 2 dough hooks \r\n\r\nErgonomic handle for comfortable grip \r\n\r\nDishwasher safe attachments', 'Cuisinart', '2024-06-05 23:04:53', NULL, NULL, NULL),
(43, 4, 2, 'PREMIUM JAPANESE KITCHEN KNIFE SET - CRIMSON COLLECTION', '395', '159', '1717603602-100.jfif', 'Types of Whisks: There are different types of whisks, the most common being balloon whisks and dough whisks. Balloon whisks have thin wire tines that help whip cream easily, dough whisks have thicker wire tines that help mix dough more evenly.', 'Size: Available in various sizes, from small to large. Choose a whisk with a size appropriate for the bowl or container you are using. \r\n\r\nTypes of Whisks: There are different types of whisks, the most common being balloon whisks and dough whisks. Balloon whisks have thin wire tines that help whip cream easily, dough whisks have thicker wire tines that help mix dough more evenly. \r\n\r\nSingle vs. Double Action: Single-action sifters require you to push the plunger down to sift the flour, while double-action sifters have a rotating mechanism that sifts the flour as you push down. Double-action sifters are generally easier to use and produce more evenly sifted flour. \r\n\r\nNote: Use the appropriate whisk for each ingredient and purpose. Avoid using whisks with rusted or bent wires.', 'Trademark: Silpat \r\n\r\nBrand Origin: France \r\n\r\nMaterial: Silicone \r\n\r\nSize: 42 x 30 cm \r\n\r\nTemperature Resistance: -40°F to 480°F (-40°C to 250°C) \r\n\r\nAdditional Features: \r\n\r\nNon-stick surface for easy release of baked goods \r\n\r\nCan be used for baking, roasting, and freezing \r\n\r\nDishwasher safe \r\n\r\nReusable and durable', 'Crimon', '2024-06-05 23:06:42', NULL, NULL, NULL),
(44, 4, 2, 'PREMIUM JAPANESE KITCHEN KNIFE SET - IMPERIAL COLLECTION', '365', '149', '1717603710-793.png', 'Types of Whisks: There are different types of whisks, the most common being balloon whisks and dough whisks. Balloon whisks have thin wire tines that help whip cream easily, dough whisks have thicker wire tines that help mix dough more evenly.', 'Additional Tips: \r\n\r\nInvest in high-quality baking tools that will last for years. \r\n\r\nProperly care for your baking tools by washing them by hand with warm, soapy water and drying them thoroughly. \r\n\r\nStore your baking tools in a clean, organized place. \r\n\r\nWith the right baking tools, you can create delicious and beautiful cakes right at home. \r\n\r\nWire Thickness: The thickness of the whisk wires affects how well it can mix different ingredients. Thinner wires are better for whisking light ingredients like eggs and cream, while thicker wires are better for mixing heavier ingredients like dough. \r\n\r\nHandle Design: The handle design of the whisk should be comfortable to grip and easy to control. Look for a whisk with a handle that has a good grip and a non-slip', 'Trademark: Kuhn Rikon \r\n\r\nBrand Origin: Switzerland \r\n\r\nMaterial: 18/10 stainless steel \r\n\r\nSet Includes: 1 cup, 1/2 cup, 1/3 cup, 1/4 cup, 1 tablespoon, 1 teaspoon, 1/2 teaspoon, 1/4 teaspoon \r\n\r\nAdditional Features: \r\n\r\nNested design for compact storage \r\n\r\nEasy-to-read markings \r\n\r\nDishwasher safe \r\n\r\nDurable construction', 'Imperial', '2024-06-05 23:08:30', NULL, NULL, NULL),
(45, 5, 3, 'Coffee foam maker mini pin AA', '5.34', '5', '1717603831-59.png', 'Types of Whisks: There are different types of whisks, the most common being balloon whisks and dough whisks. Balloon whisks have thin wire tines that help whip cream easily, dough whisks have thicker wire tines that help mix dough more evenly.', 'Mesh Size: The mesh size of the sifter determines how fine the flour will be. A finer mesh will result in a lighter and airier cake, while a coarser mesh will result in a denser cake. \r\n\r\nSingle vs. Double Action: Single-action sifters require you to push the plunger down to sift the flour, while double-action sifters have a rotating mechanism that sifts the flour as you push down. Double-action sifters are generally easier to use and produce more evenly sifted flour. \r\n\r\nBlade Flexibility: The flexibility of the spatula blade is important for scraping and spreading ingredients. A more flexible blade will be able to get into corners and crevices better, while a stiffer blade will be better for spreading frosting or dough. \r\n\r\nHandle Length: The length of the spatula handle should be appropriate for the size of the bowls or pans you are using. A longer handle will give you more reach, while a shorter handle will be more maneuverable in smaller spaces.', 'Trademark: Le Creuset \r\n\r\nBrand Origin: France \r\n\r\nMaterial: Granite stoneware with wooden handles \r\n\r\nSize: 16 inches long, 2.5 inches in diameter \r\n\r\nAdditional Features: \r\n\r\nSmooth, non-stick surface for easy rolling and dough release \r\n\r\nHeavy weight for even rolling and pressure \r\n\r\nComfortable wooden handles for a secure grip \r\n\r\nDurable construction for long-lasting use \r\n\r\nOven safe up to 500°F (260°C)', 'Frother', '2024-06-05 23:10:31', NULL, NULL, NULL),
(46, 5, 3, 'Coffee foam maker Mlikshake Taisho', '42', '39.08', '1717604003-475.jfif', 'Cake molds: There are many different types of molds such as round molds, square molds, loaf molds,... to help you create diverse cake shapes. You should choose a mold made of good material, high heat resistance and easy to clean.', 'Material: Can be made of silicone, plastic, or rubber. Choose a spatula made from food-grade materials, heat-resistant, easy to clean, and flexible. \r\n\r\nSize: Available in various sizes, from small to large. Choose a spatula with a size appropriate for the bowl or container you are using. \r\n\r\nTypes of Spatulas: There are different types of spatulas, the most common being straight spatulas and angled spatulas. Straight spatulas are suitable for scraping batter, mixing ingredients, angled spatulas are suitable for spreading frosting, chocolate, etc. \r\n\r\nNote: Use the appropriate spatula for each ingredient and purpose. Avoid using spatulas with torn or cracked blades.', 'Trademark: KitchenAid \r\n\r\nBrand Origin: USA \r\n\r\nMaterial: Stainless steel, ABS plastic \r\n\r\nWattage: 250W \r\n\r\nSize: 23 x 17 x 8 cm \r\n\r\nProduct Weight: 0.9 kg \r\n\r\nWarranty Form: Warranty \r\n\r\nWarranty Period: 1 year \r\n\r\nAdditional Features: \r\n\r\n5 speed settings \r\n\r\n2 beater attachments and 2 dough hooks \r\n\r\nErgonomic handle for comfortable grip \r\n\r\nDishwasher safe attachments', 'Taisho', '2024-06-05 23:13:23', NULL, NULL, NULL),
(47, 5, 4, 'Plastic measuring cup with 2 ends 20cc - 40cc', '2.5', '1.56', '1717604129-81.jfif', 'Cake molds: There are many different types of molds such as round molds, square molds, loaf molds,... to help you create diverse cake shapes. You should choose a mold made of good material, high heat resistance and easy to clean.', 'Size: Available in various sizes, from small to large. Choose a whisk with a size appropriate for the bowl or container you are using. \r\n\r\nTypes of Whisks: There are different types of whisks, the most common being balloon whisks and dough whisks. Balloon whisks have thin wire tines that help whip cream easily, dough whisks have thicker wire tines that help mix dough more evenly. \r\n\r\nSingle vs. Double Action: Single-action sifters require you to push the plunger down to sift the flour, while double-action sifters have a rotating mechanism that sifts the flour as you push down. Double-action sifters are generally easier to use and produce more evenly sifted flour. \r\n\r\nNote: Use the appropriate whisk for each ingredient and purpose. Avoid using whisks with rusted or bent wires.', 'Trademark: Silpat \r\n\r\nBrand Origin: France \r\n\r\nMaterial: Silicone \r\n\r\nSize: 42 x 30 cm \r\n\r\nTemperature Resistance: -40°F to 480°F (-40°C to 250°C) \r\n\r\nAdditional Features: \r\n\r\nNon-stick surface for easy release of baked goods \r\n\r\nCan be used for baking, roasting, and freezing \r\n\r\nDishwasher safe \r\n\r\nReusable and durable', 'Ikisha', '2024-06-05 23:15:29', NULL, NULL, NULL),
(48, 6, 5, 'Phuc Long Black Tea 500g', '12', '10.67', '1717604256-760.png', 'Cake molds: There are many different types of molds such as round molds, square molds, loaf molds,... to help you create diverse cake shapes. You should choose a mold made of good material, high heat resistance and easy to clean.', 'Additional Tips: \r\n\r\nInvest in high-quality baking tools that will last for years. \r\n\r\nProperly care for your baking tools by washing them by hand with warm, soapy water and drying them thoroughly. \r\n\r\nStore your baking tools in a clean, organized place. \r\n\r\nWith the right baking tools, you can create delicious and beautiful cakes right at home. \r\n\r\nWire Thickness: The thickness of the whisk wires affects how well it can mix different ingredients. Thinner wires are better for whisking light ingredients like eggs and cream, while thicker wires are better for mixing heavier ingredients like dough. \r\n\r\nHandle Design: The handle design of the whisk should be comfortable to grip and easy to control. Look for a whisk with a handle that has a good grip and a non-slip', 'Trademark: Kuhn Rikon \r\n\r\nBrand Origin: Switzerland \r\n\r\nMaterial: 18/10 stainless steel \r\n\r\nSet Includes: 1 cup, 1/2 cup, 1/3 cup, 1/4 cup, 1 tablespoon, 1 teaspoon, 1/2 teaspoon, 1/4 teaspoon \r\n\r\nAdditional Features: \r\n\r\nNested design for compact storage \r\n\r\nEasy-to-read markings \r\n\r\nDishwasher safe \r\n\r\nDurable construction', 'Phuc Long', '2024-06-05 23:17:36', NULL, NULL, NULL),
(49, 6, 5, 'Roasted tea powder Hojicha 500g', '13.45', '11.59', '1717604351-226.jfif', 'Cake molds: There are many different types of molds such as round molds, square molds, loaf molds,... to help you create diverse cake shapes. You should choose a mold made of good material, high heat resistance and easy to clean.', 'Mesh Size: The mesh size of the sifter determines how fine the flour will be. A finer mesh will result in a lighter and airier cake, while a coarser mesh will result in a denser cake. \r\n\r\nSingle vs. Double Action: Single-action sifters require you to push the plunger down to sift the flour, while double-action sifters have a rotating mechanism that sifts the flour as you push down. Double-action sifters are generally easier to use and produce more evenly sifted flour. \r\n\r\nBlade Flexibility: The flexibility of the spatula blade is important for scraping and spreading ingredients. A more flexible blade will be able to get into corners and crevices better, while a stiffer blade will be better for spreading frosting or dough. \r\n\r\nHandle Length: The length of the spatula handle should be appropriate for the size of the bowls or pans you are using. A longer handle will give you more reach, while a shorter handle will be more maneuverable in smaller spaces.', 'Trademark: Le Creuset \r\n\r\nBrand Origin: France \r\n\r\nMaterial: Granite stoneware with wooden handles \r\n\r\nSize: 16 inches long, 2.5 inches in diameter \r\n\r\nAdditional Features: \r\n\r\nSmooth, non-stick surface for easy rolling and dough release \r\n\r\nHeavy weight for even rolling and pressure \r\n\r\nComfortable wooden handles for a secure grip \r\n\r\nDurable construction for long-lasting use \r\n\r\nOven safe up to 500°F (260°C)', 'Hojicha', '2024-06-05 23:19:11', NULL, NULL, NULL),
(50, 6, 6, 'Strawberry syrup Golden farm 700ml', '5.68', '4.04', '1717604437-910.jfif', 'Cake molds: There are many different types of molds such as round molds, square molds, loaf molds,... to help you create diverse cake shapes. You should choose a mold made of good material, high heat resistance and easy to clean.', 'Material: Can be made of silicone, plastic, or rubber. Choose a spatula made from food-grade materials, heat-resistant, easy to clean, and flexible. \r\n\r\nSize: Available in various sizes, from small to large. Choose a spatula with a size appropriate for the bowl or container you are using. \r\n\r\nTypes of Spatulas: There are different types of spatulas, the most common being straight spatulas and angled spatulas. Straight spatulas are suitable for scraping batter, mixing ingredients, angled spatulas are suitable for spreading frosting, chocolate, etc. \r\n\r\nNote: Use the appropriate spatula for each ingredient and purpose. Avoid using spatulas with torn or cracked blades.', 'Trademark: KitchenAid \r\n\r\nBrand Origin: USA \r\n\r\nMaterial: Stainless steel, ABS plastic \r\n\r\nWattage: 250W \r\n\r\nSize: 23 x 17 x 8 cm \r\n\r\nProduct Weight: 0.9 kg \r\n\r\nWarranty Form: Warranty \r\n\r\nWarranty Period: 1 year \r\n\r\nAdditional Features: \r\n\r\n5 speed settings \r\n\r\n2 beater attachments and 2 dough hooks \r\n\r\nErgonomic handle for comfortable grip \r\n\r\nDishwasher safe attachments', 'Golden farm', '2024-06-05 23:20:37', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `id` int(5) NOT NULL,
  `product_id` int(5) NOT NULL,
  `color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`id`, `product_id`, `color`) VALUES
(90, 31, '1'),
(115, 37, '1'),
(116, 38, '2'),
(117, 40, '1'),
(118, 40, '2'),
(119, 39, '4'),
(121, 49, '2'),
(122, 50, '3'),
(123, 45, '1'),
(124, 45, '3'),
(127, 46, '1'),
(128, 46, '4'),
(134, 47, '1'),
(135, 47, '3'),
(136, 47, '4'),
(150, 29, '5'),
(151, 32, '4'),
(153, 33, '6'),
(157, 34, '5'),
(159, 35, '3'),
(170, 30, '2'),
(171, 36, '5'),
(172, 41, '4'),
(173, 48, '6'),
(174, 42, '1'),
(175, 42, '2'),
(176, 42, '4'),
(177, 43, '1'),
(178, 43, '4'),
(179, 44, '1'),
(180, 44, '2'),
(181, 44, '4');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('qiTuOxCJmX4wVfIZPyseeqBJoa4ZMUMTlIFrrBkA', 6, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiMkZKMlg1YXlkWnpPS3JZS2pISklCRHhhc0RWVVlROGxGaUw2OEJlTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTg6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9oZWFkZXItZm9vdGVyL2pzL2Jvb3RzdHJhcC5idW5kbGUuanMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo2O3M6NzoibWVzc2FnZSI7czoyODoiUHJvZHVjdCB1cGRhdGVkIHN1Y2Nlc3NmdWxseSI7fQ==', 1717743763);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(5) NOT NULL,
  `category_id` int(5) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `category_id`, `name`) VALUES
(1, 4, 'Stainless steel tools'),
(2, 4, 'Kitchen knife set'),
(3, 5, 'Coffee foam maker'),
(4, 5, 'Measuring cup'),
(5, 6, 'Tea'),
(6, 6, 'Syrup'),
(7, 1, 'Flour'),
(8, 1, 'Yeast'),
(9, 2, 'Milk'),
(10, 2, 'Whipping cream'),
(11, 3, 'Cake mold'),
(12, 3, 'Electric mixer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'user',
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `date_of_birth` datetime DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `phone_number` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `address`, `date_of_birth`, `avatar`, `phone_number`) VALUES
(1, 'khang đẹp trai', 'subin@gmail.com', NULL, '$2y$12$tuiVLYlI/G9p9Qcj4phWtupL60JDK8drTfYkbapK75kYbSkIxAldK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-13 12:12:25', '2024-05-13 12:12:25', 'hoho', '2024-05-09 00:00:00', '', 25245),
(3, 'newkhang', 'newkhang@gmail.com', NULL, '$2y$12$ATSLhNSdwVfAeQRYiYllSOU93c4GdMIMXEtUc55hRCmcV3DqfKVYW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-18 08:39:32', '2024-05-18 08:39:32', NULL, NULL, NULL, NULL),
(4, 'Cakieland Admin', 'cakielandadmin@gmail.com', NULL, '$2y$12$UsIz3osxHH0r/pdrKvHOGejz/j3aW7ElOVFuR5Do3a34HOTcZBVui', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-19 00:22:28', '2024-05-19 00:22:28', NULL, NULL, NULL, NULL),
(6, 'admin cakieland', 'cakielandofficial@gmail.com', '2024-06-02 00:01:51', '$2y$12$MKD3tQV9gRCcA/NG1h5epu5x.lgcs2PM7sqpdIXWBHtGjR1AnLCJO', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-02 00:01:17', '2024-06-02 00:01:51', 'thủ đức', '2024-06-02 00:00:00', '1717700795-766.png', 903360966),
(7, 'Đào Thị Hạnh ', 'hoho@gmail.com', NULL, '$2y$12$ItjqikcdonRM967UCHrWR.Ho6m1KGiswX.0e8R7Eq49VFE5XSE./G', 'user', NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-05 01:26:03', '2024-06-05 01:26:03', NULL, NULL, NULL, NULL),
(8, 'trang', 'nhongtrang878@gmail.com', '2024-06-06 02:18:40', '$2y$12$fDyxAoM/cM1xdZ4tco0FeuGn2Zr0U/gfkTLurmDXcnqFoIwpNnjwe', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-06 02:18:10', '2024-06-06 02:18:40', NULL, NULL, NULL, NULL),
(9, 'Subin', 'subinkhang102@gmail.com', '2024-06-06 11:29:49', '$2y$12$pJGG47z9CFQI8aieXcJWM.6wcukGzkKxppMlsFpJLYqN0e.Z1oyZi', 'user', NULL, NULL, NULL, 'nI8jsJclSLtGz5UMa04iG6WFn7saOZiM3QICIs13XLqJT1JroKdDdC0Rqi3V', NULL, NULL, '2024-06-06 11:29:24', '2024-06-06 12:12:04', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id` int(11) NOT NULL,
  `name_voucher` varchar(150) NOT NULL,
  `code_voucher` varchar(50) NOT NULL,
  `number_voucher` int(50) NOT NULL,
  `condition_voucher` int(50) NOT NULL,
  `value_voucher` varchar(50) NOT NULL,
  `start_voucher` datetime NOT NULL,
  `end_voucher` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`id`, `name_voucher`, `code_voucher`, `number_voucher`, `condition_voucher`, `value_voucher`, `start_voucher`, `end_voucher`) VALUES
(5, 'tháng 6', 'iu', 89, 1, '50', '2024-06-05 00:00:00', '2024-06-08 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_parent_id_foreign` (`parent_id`),
  ADD KEY `comments_commentable_type_commentable_id_index` (`commentable_type`,`commentable_id`),
  ADD KEY `commentable_id` (`commentable_id`);

--
-- Indexes for table `comment_likes`
--
ALTER TABLE `comment_likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_customer`
--
ALTER TABLE `email_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id_2` (`order_id`),
  ADD KEY `product_id` (`product_id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`,`sub_category_id`),
  ADD KEY `category_id_2` (`category_id`),
  ADD KEY `category_id_3` (`category_id`),
  ADD KEY `sub_category_id` (`sub_category_id`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pro_id` (`product_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `comment_likes`
--
ALTER TABLE `comment_likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `email_customer`
--
ALTER TABLE `email_customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `comments` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_category` (`id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD CONSTRAINT `product_detail_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
