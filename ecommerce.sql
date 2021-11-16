-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 16, 2021 at 05:53 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2021_11_11_234711_create_products_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `status`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Oilness & Breakouts | TONIC', 'Formulated for oily, congested skin, this facial mist helps to infuse your skin with effective, oil-free hydration to restore a fresh, clear-looking complexion without drying out the skin. Witch hazel helps to balance excess oil and calm the skin, while aloe vera and vegetable glycerin deeply hydrate the skin. The synergistic combination of juniper berry and lavender helps to decongest pores and calm breakouts.', '102.00', 0, '20211112003622.jpg', '2021-11-12 08:36:22', '2021-11-12 08:39:43'),
(5, 'TruSkin Vitamin C | FACE SERUM', 'When we polled our panel of dermatologists for the Anti-Aging Awards, SkinCeuticals C E Ferulic consistently came up as one of the must-haves for firmer, more radiant skin. The combo of vitamins and ferulic acid instantly gives skin back its glow.', '87.00', 0, '20211112003854.jpg', '2021-11-12 08:38:54', '2021-11-12 08:38:54'),
(6, 'Youthful Glow | SUGAR MASK', 'Physical exfoliants can be abrasive on skin, but this one is different. With a neutral pH of 7, this multitasking mask nourishes as the fine sucrose granules buff away dead skin cells so dull, dry skin looks brighter and more even.', '48.00', 0, '20211112003916.jpg', '2021-11-12 08:39:16', '2021-11-12 08:39:16'),
(7, 'Clean Eye Mask | SEPHORA', 'Clean at Sephora is a curation of brands committed to evolving the beauty industry. When you see our Clean seal, you can be sure this brand\'s products are formulated without certain ingredients that are potentially harmful to human health and the environment and also address ingredients clients are concerned about, including phthalates, formaldehyde or formaldehyde releasers, oxybenzone and octinoxate, hydroquinone, triclosan, coal tar, methylisothiazolinone and methylchloroisothiazolinone, insoluble plastic microbeads, and more. For the full list, check out the Ingredients tab.', '23.00', 0, '20211112004150.jpg', '2021-11-12 08:41:50', '2021-11-12 08:41:50'),
(8, 'Pore Clearing Clay Mask | INNISFREE', 'Free of sulfates SLS and SLES, parabens, formaldehydes, formaldehyde-releasing agents, phthalates, mineral oil, retinyl palmitate, oxybenzone, coal tar, hydroquinone, triclosan, and triclocarban, and contains less than one percent of synthetic fragrances. This product comes in recyclable packaging.', '72.00', 1, '20211112004310.jpg', '2021-11-12 08:43:10', '2021-11-12 08:43:10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
