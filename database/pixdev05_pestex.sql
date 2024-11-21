-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 20-Nov-2024 às 23:35
-- Versão do servidor: 10.6.19-MariaDB
-- versão do PHP: 8.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pixdev05_pestex`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cache`
--

CREATE TABLE `cache` (
  `key` varchar(125) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(125) NOT NULL,
  `owner` varchar(125) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_type_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) NOT NULL,
  `slug` varchar(125) DEFAULT NULL,
  `description` varchar(125) DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `weight` int(11) NOT NULL DEFAULT 0,
  `enabled` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `category_types`
--

CREATE TABLE `category_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) NOT NULL,
  `description` varchar(125) DEFAULT NULL,
  `machine_name` varchar(64) NOT NULL,
  `is_flat` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'y356y356y3y', 'FEWFFEWFE@GMAIL.COM', '6456546456', 'gwergergergre', '2024-11-16 19:49:58', '2024-11-16 19:49:58'),
(2, 'gq34g4rff', 'FEWFFEWFE@GMAIL.COM', '53453453425', 'fwfwefwefewf', '2024-11-16 20:09:15', '2024-11-16 20:09:15'),
(3, 'ewf', 'FEWFFEWFE@GMAIL.COM', '6525435234534', 'sdvcsdfcdscscv', '2024-11-16 20:27:00', '2024-11-16 20:27:00'),
(4, '5435345353', 'FEWFFEWFE@GMAIL.COM', '34534523', 'gergvfrvrwf', '2024-11-16 20:34:39', '2024-11-16 20:34:39'),
(5, '5435345353', 'FEWFFEWFE@GMAIL.COM', '34534523', 'gergvfrvrwf', '2024-11-16 20:35:01', '2024-11-16 20:35:01'),
(6, '5435345353', 'FEWFFEWFE@GMAIL.COM', '34534523', 'gergvfrvrwf', '2024-11-16 20:35:34', '2024-11-16 20:35:34'),
(7, '5435345353', 'FEWFFEWFE@GMAIL.COM', '34534523', 'gergvfrvrwf', '2024-11-16 20:36:33', '2024-11-16 20:36:33'),
(8, '5435345353', 'FEWFFEWFE@GMAIL.COM', '34534523', 'gergvfrvrwf', '2024-11-16 20:37:01', '2024-11-16 20:37:01'),
(9, 'jtyeytjhyth', 'FEWFFEWFE@GMAIL.COM', '35645654', 'hrtwgrtgtev', '2024-11-16 20:38:00', '2024-11-16 20:38:00'),
(10, 'jtyeytjhyth', 'FEWFFEWFE@GMAIL.COM', '35645654', 'hrtwgrtgtev', '2024-11-16 20:38:08', '2024-11-16 20:38:08'),
(11, 'jtyeytjhyth', 'FEWFFEWFE@GMAIL.COM', '35645654', 'hrtwgrtgtev', '2024-11-16 20:38:24', '2024-11-16 20:38:24'),
(12, 'jtyeytjhyth', 'FEWFFEWFE@GMAIL.COM', '35645654', 'hrtwgrtgtev', '2024-11-16 20:39:01', '2024-11-16 20:39:01'),
(13, 'jtyeytjhyth', 'FEWFFEWFE@GMAIL.COM', '35645654', 'hrtwgrtgtev', '2024-11-16 20:39:47', '2024-11-16 20:39:47'),
(14, 'jtyeytjhyth', 'FEWFFEWFE@GMAIL.COM', '35645654', 'hrtwgrtgtev', '2024-11-16 20:40:21', '2024-11-16 20:40:21'),
(15, 'jtyeytjhyth', 'FEWFFEWFE@GMAIL.COM', '35645654', 'hrtwgrtgtev', '2024-11-16 20:40:56', '2024-11-16 20:40:56'),
(16, 'jtyeytjhyth', 'FEWFFEWFE@GMAIL.COM', '35645654', 'hrtwgrtgtev', '2024-11-16 20:41:13', '2024-11-16 20:41:13'),
(17, 'jtyeytjhyth', 'FEWFFEWFE@GMAIL.COM', '35645654', 'hrtwgrtgtev', '2024-11-16 20:41:27', '2024-11-16 20:41:27'),
(18, 'jtyeytjhyth', 'FEWFFEWFE@GMAIL.COM', '35645654', 'hrtwgrtgtev', '2024-11-16 20:41:58', '2024-11-16 20:41:58'),
(19, 'jtyeytjhyth', 'FEWFFEWFE@GMAIL.COM', '35645654', 'hrtwgrtgtev', '2024-11-16 20:49:08', '2024-11-16 20:49:08'),
(20, 'jtyeytjhyth', 'FEWFFEWFE@GMAIL.COM', '35645654', 'hrtwgrtgtev', '2024-11-16 20:49:26', '2024-11-16 20:49:26'),
(21, 'jtyeytjhyth', 'FEWFFEWFE@GMAIL.COM', '35645654', 'hrtwgrtgtev', '2024-11-16 20:52:06', '2024-11-16 20:52:06'),
(22, 'jtyeytjhyth', 'FEWFFEWFE@GMAIL.COM', '35645654', 'hrtwgrtgtev', '2024-11-16 20:52:19', '2024-11-16 20:52:19'),
(23, 'jtyeytjhyth', 'FEWFFEWFE@GMAIL.COM', '35645654', 'hrtwgrtgtev', '2024-11-16 20:53:17', '2024-11-16 20:53:17'),
(24, 'rwewer', 'FEWFFEWFE@GMAIL.COM', '4341234324', 'regqergrefefrf', '2024-11-16 21:58:08', '2024-11-16 21:58:08'),
(25, 'rwewer', 'FEWFFEWFE@GMAIL.COM', '4341234324', 'regqergrefefrf', '2024-11-16 22:00:42', '2024-11-16 22:00:42'),
(26, 'rwewer', 'FEWFFEWFE@GMAIL.COM', '4341234324', 'regqergrefefrf', '2024-11-16 22:01:24', '2024-11-16 22:01:24'),
(27, 'rwewer', 'FEWFFEWFE@GMAIL.COM', '4341234324', 'regqergrefefrf', '2024-11-16 22:01:50', '2024-11-16 22:01:50'),
(28, '562565363', 'FEWFFEWFE@GMAIL.COM', '5345345342534', '345345345345', '2024-11-16 22:02:01', '2024-11-16 22:02:01'),
(29, '562565363', 'FEWFFEWFE@GMAIL.COM', '5345345342534', '345345345345', '2024-11-16 22:02:09', '2024-11-16 22:02:09'),
(30, '562565363', 'FEWFFEWFE@GMAIL.COM', '5345345342534', '345345345345', '2024-11-16 22:02:18', '2024-11-16 22:02:18'),
(31, '562565363', 'FEWFFEWFE@GMAIL.COM', '5345345342534', '345345345345', '2024-11-16 22:02:38', '2024-11-16 22:02:38'),
(32, '562565363', 'FEWFFEWFE@GMAIL.COM', '5345345342534', '345345345345', '2024-11-16 22:02:45', '2024-11-16 22:02:45'),
(33, '562565363', 'FEWFFEWFE@GMAIL.COM', '5345345342534', '345345345345', '2024-11-16 22:05:57', '2024-11-16 22:05:57'),
(34, '562565363', 'FEWFFEWFE@GMAIL.COM', '5345345342534', '345345345345', '2024-11-16 22:06:16', '2024-11-16 22:06:16'),
(35, '562565363', 'FEWFFEWFE@GMAIL.COM', '5345345342534', '345345345345', '2024-11-16 22:07:07', '2024-11-16 22:07:07'),
(36, '562565363', 'FEWFFEWFE@GMAIL.COM', '5345345342534', '345345345345', '2024-11-16 22:07:42', '2024-11-16 22:07:42'),
(37, '562565363', 'FEWFFEWFE@GMAIL.COM', '5345345342534', '345345345345', '2024-11-16 22:07:52', '2024-11-16 22:07:52'),
(38, '562565363', 'FEWFFEWFE@GMAIL.COM', '5345345342534', '345345345345', '2024-11-16 22:08:06', '2024-11-16 22:08:06'),
(39, '562565363', 'FEWFFEWFE@GMAIL.COM', '5345345342534', '345345345345', '2024-11-16 22:08:22', '2024-11-16 22:08:22'),
(40, '562565363', 'FEWFFEWFE@GMAIL.COM', '5345345342534', '345345345345', '2024-11-16 22:08:45', '2024-11-16 22:08:45'),
(41, '562565363', 'FEWFFEWFE@GMAIL.COM', '5345345342534', '345345345345', '2024-11-16 22:08:59', '2024-11-16 22:08:59'),
(42, '562565363', 'FEWFFEWFE@GMAIL.COM', '5345345342534', '345345345345', '2024-11-16 22:09:12', '2024-11-16 22:09:12'),
(43, '562565363', 'FEWFFEWFE@GMAIL.COM', '5345345342534', '345345345345', '2024-11-16 22:09:39', '2024-11-16 22:09:39'),
(44, '562565363', 'FEWFFEWFE@GMAIL.COM', '5345345342534', '345345345345', '2024-11-16 22:11:10', '2024-11-16 22:11:10'),
(45, 'joao', 'joao@gmail.com', '282315628', 'fewfewqfewf', '2024-11-19 18:27:23', '2024-11-19 18:27:23'),
(46, 'fweqqewfewf', 'gwerger@gmail.com', '6553', 'wefefewfqfwef', '2024-11-19 18:27:58', '2024-11-19 18:27:58'),
(47, 'tggegw', 'joao@gmail.com', '52545', 'vrnirengverng', '2024-11-19 19:06:15', '2024-11-19 19:06:15'),
(48, 'joao', 'joao@gmail.com', '28264585', 'fgereffefrf', '2024-11-19 19:10:22', '2024-11-19 19:10:22'),
(49, 'erfgerfger', 'rgrg@gmail.com', '6463564', 'grtggtrg', '2024-11-19 19:14:11', '2024-11-19 19:14:11'),
(50, 'erfgerfger', 'rgrg@gmail.com', '6463564', 'grtggtrg', '2024-11-19 19:14:11', '2024-11-19 19:14:11'),
(51, '34r3gewerfger', 'gerw@gmail.com', '43325345', 'ggergergg', '2024-11-19 19:19:41', '2024-11-19 19:19:41');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contact_forms`
--

CREATE TABLE `contact_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `confirmed` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `contact_forms`
--

INSERT INTO `contact_forms` (`id`, `name`, `email`, `phone`, `confirmed`, `created_at`, `updated_at`) VALUES
(1, 'joao', 'joo@gmail.com', NULL, 1, '2024-11-17 04:53:34', '2024-11-17 04:53:34'),
(2, 'joao', 'joo@gmail.com', NULL, 1, '2024-11-17 04:54:20', '2024-11-17 04:54:20'),
(3, 'joao', 'joo@gmail.com', NULL, 1, '2024-11-17 04:57:28', '2024-11-17 04:57:28'),
(4, 'joao', 'joao@gmail.com', NULL, 1, '2024-11-17 05:07:40', '2024-11-17 05:07:40'),
(5, 'joao', 'joao@gmail.com', NULL, 1, '2024-11-19 22:37:50', '2024-11-19 22:37:50');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dashboards`
--

CREATE TABLE `dashboards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `front_pages`
--

CREATE TABLE `front_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(191) NOT NULL,
  `name` varchar(125) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `landing_2pages`
--

CREATE TABLE `landing_2pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company-status-h6` varchar(255) NOT NULL,
  `company-status-h3` varchar(255) NOT NULL,
  `company-status-1h4` varchar(255) NOT NULL,
  `company-status-1p` varchar(255) NOT NULL,
  `company-status-2h4` varchar(255) NOT NULL,
  `company-status-2p` varchar(255) NOT NULL,
  `company-status-3h4` varchar(255) NOT NULL,
  `company-status-3p` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `landing_2pages`
--

INSERT INTO `landing_2pages` (`id`, `company-status-h6`, `company-status-h3`, `company-status-1h4`, `company-status-1p`, `company-status-2h4`, `company-status-2p`, `company-status-3h4`, `company-status-3p`, `created_at`, `updated_at`) VALUES
(1, 'SOS Pragas', 'Uma Solução Eficaz', 'Vantagens Consulting', 'O nosso metodo tecnologico elit, sed do eiusmod tempor', 'Tecnologia de Ponta', 'tecnicos qualificados g elit, sed do eiusmod tempor', 'A melhor Solução', 'Vale a pena tebntars amecon sectetur adipisicing elit, sed do e', '2024-11-09 04:10:16', '2024-11-12 15:38:01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `landing_3pages`
--

CREATE TABLE `landing_3pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `best-service-h6-1` varchar(255) NOT NULL,
  `best-service-h3-1` varchar(255) NOT NULL,
  `best-service-img-path-1` varchar(255) NOT NULL,
  `best-service-a-1` varchar(255) NOT NULL,
  `best-service-p-1` varchar(255) NOT NULL,
  `best-service-img-path-2` varchar(255) NOT NULL,
  `best-service-a-2` varchar(255) NOT NULL,
  `best-service-p-2` varchar(255) NOT NULL,
  `best-service-img-path-3` varchar(255) NOT NULL,
  `best-service-a-3` varchar(255) NOT NULL,
  `best-service-p-3` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `landing_3pages`
--

INSERT INTO `landing_3pages` (`id`, `best-service-h6-1`, `best-service-h3-1`, `best-service-img-path-1`, `best-service-a-1`, `best-service-p-1`, `best-service-img-path-2`, `best-service-a-2`, `best-service-p-2`, `best-service-img-path-3`, `best-service-a-3`, `best-service-p-3`, `created_at`, `updated_at`) VALUES
(1, 'Serviços Populares', 'Eliminamos todo o tipo de Pragas', 'storage/assets/images/294ErLnfFODlMnovAYkLs0ohIXOUV6kgUwV7cegM.png', 'Roedores', '23r2r23r ndard chunk of Ipsum used since is Agency & Star tup.', 'storage/assets/images/Lk1UM9VWsWs5tBd7rpHwAC527GTohB8512qNsZdl.webp', 'Baratas', '3223r2rf23 sss standard chunk of Ipsum used since is Agency & Startup.', 'storage/assets/images/TNP7sdDyzKQNNP1KSqURYhW1XVQSBpIbh8Z4d144.png', 'Percevejos', 'zeeseefw rd chunk of Ipsum used since is Agency & Star tup.', '2024-11-09 04:35:51', '2024-11-19 15:59:01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `landing_4pages`
--

CREATE TABLE `landing_4pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `our-services-h6-1` varchar(255) NOT NULL,
  `our-services-h2-1` varchar(255) NOT NULL,
  `our-services-h2-2` varchar(255) NOT NULL,
  `our-services-bg-img-path-1` varchar(255) NOT NULL,
  `our-services-tab-1` varchar(255) NOT NULL,
  `our-services-tab-1-h2` varchar(255) NOT NULL,
  `our-services-tab-1-p` varchar(255) NOT NULL,
  `our-services-tab-1-p-1` varchar(255) NOT NULL,
  `our-services-tab-1-li-1` varchar(255) NOT NULL,
  `our-services-tab-1-li-2` varchar(255) NOT NULL,
  `our-services-tab-1-li-3` varchar(255) NOT NULL,
  `our-services-tab-1-p-2` varchar(255) NOT NULL,
  `our-services-tab-1-a-2` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `landing_4pages`
--

INSERT INTO `landing_4pages` (`id`, `our-services-h6-1`, `our-services-h2-1`, `our-services-h2-2`, `our-services-bg-img-path-1`, `our-services-tab-1`, `our-services-tab-1-h2`, `our-services-tab-1-p`, `our-services-tab-1-p-1`, `our-services-tab-1-li-1`, `our-services-tab-1-li-2`, `our-services-tab-1-li-3`, `our-services-tab-1-p-2`, `our-services-tab-1-a-2`, `created_at`, `updated_at`) VALUES
(1, 'Our Services', 'Cleaning Services', 'Cleaning Services', 'assets/images/backgrounds/service-1.jpg', 'Empresas', 'Hostel Cleaning Services', '123 e perfectly simple and easy to distinguish.', 'In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best.', '123c Professional & Expert Cleaning Service', '123c Advanced Technology', '23 Healthy and Worry Free Environment', '233 Don’t Wait to Clean Your Work Place,', '213 Make an Appointment', '2024-11-09 04:52:38', '2024-11-13 21:57:03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `landing_5pages`
--

CREATE TABLE `landing_5pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `our-services-tab-2` varchar(255) NOT NULL,
  `our-services-tab-2-h2` varchar(255) NOT NULL,
  `our-services-tab-2-p` varchar(255) NOT NULL,
  `our-services-tab-2-p-1` varchar(255) NOT NULL,
  `our-services-tab-2-li-1` varchar(255) NOT NULL,
  `our-services-tab-2-li-2` varchar(255) NOT NULL,
  `our-services-tab-2-li-3` varchar(255) NOT NULL,
  `our-services-tab-2-a` varchar(255) NOT NULL,
  `our-services-tab-2-p-2` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `landing_5pages`
--

INSERT INTO `landing_5pages` (`id`, `our-services-tab-2`, `our-services-tab-2-h2`, `our-services-tab-2-p`, `our-services-tab-2-p-1`, `our-services-tab-2-li-1`, `our-services-tab-2-li-2`, `our-services-tab-2-li-3`, `our-services-tab-2-a`, `our-services-tab-2-p-2`, `created_at`, `updated_at`) VALUES
(1, 'Residencias', '123 Hospitality Cleaning Services', '13 These cases are perfectly simple and easy to distinguish. In a free hour,', 'when our power of choice is untrammelled and when nothing prevents our being able to do what we like best.', '13 142Professional & Expert Cleaning Service', '14 1Advanced Technology', '24 Healthy and Worry Free Environment', 'Agende uma visita', '43 1Don’t Wait to Clean Your Work Place', '2024-11-09 04:56:57', '2024-11-13 21:57:03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `landing_6pages`
--

CREATE TABLE `landing_6pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about-now-h6` varchar(255) NOT NULL,
  `about-now-h3` varchar(255) NOT NULL,
  `about-now-p` varchar(255) NOT NULL,
  `about-now-1-bg-img-path` varchar(255) NOT NULL,
  `about-now-2-img-path` varchar(255) NOT NULL,
  `about-now-li-1` varchar(255) NOT NULL,
  `about-now-li-2` varchar(255) NOT NULL,
  `about-now-li-3` varchar(255) NOT NULL,
  `about-now-li-4` varchar(255) NOT NULL,
  `about-now-li-5` varchar(255) NOT NULL,
  `about-now-li-6` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `landing_6pages`
--

INSERT INTO `landing_6pages` (`id`, `about-now-h6`, `about-now-h3`, `about-now-p`, `about-now-1-bg-img-path`, `about-now-2-img-path`, `about-now-li-1`, `about-now-li-2`, `about-now-li-3`, `about-now-li-4`, `about-now-li-5`, `about-now-li-6`, `created_at`, `updated_at`) VALUES
(1, 'SOBRE NÓS', '12We Can Clients with the About Services', '12xBusiness tailored it design, management & support services business agency elit, sed do eiusmod tempor.', 'assets/images/shapes/about-bg-1.jpg', 'assets/images/shapes/about-1-shape-1.png', '1 Business onstructivism.', '2 Media in this solution.', '3 cWe give management', '4 We give management', '5 Business onstructivism.', '6 Media in this solution.', '2024-11-09 04:59:30', '2024-11-19 16:01:49');

-- --------------------------------------------------------

--
-- Estrutura da tabela `landing_7pages`
--

CREATE TABLE `landing_7pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `choose-us-p-1` varchar(255) NOT NULL,
  `choose-us-h3` varchar(255) NOT NULL,
  `choose-us-p-2` varchar(255) NOT NULL,
  `choose-us-p-2-1` varchar(255) NOT NULL,
  `choose-us-h4-1` varchar(255) NOT NULL,
  `choose-us-h4-2` varchar(255) NOT NULL,
  `choose-us-h4-3` varchar(255) NOT NULL,
  `choose-us-img` varchar(255) NOT NULL,
  `choose-us-img-1` varchar(255) NOT NULL,
  `choose-us-img-2` varchar(255) NOT NULL,
  `choose-us-img-3` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `landing_7pages`
--

INSERT INTO `landing_7pages` (`id`, `choose-us-p-1`, `choose-us-h3`, `choose-us-p-2`, `choose-us-p-2-1`, `choose-us-h4-1`, `choose-us-h4-2`, `choose-us-h4-3`, `choose-us-img`, `choose-us-img-1`, `choose-us-img-2`, `choose-us-img-3`, `created_at`, `updated_at`) VALUES
(1, 'PORQUÊ NÓS?', '1 We Grow Your Business Choose Services', '2 Business tailored it design, management &', ' support services business agency elit, sed do eiusmod tempor.', '1 • Our success team man', '2 • Professional Best service', '3 • Long experience support', 'assets/images/resources/why-choose-2-1.jpg', 'assets/images/resources/why-choose-2-2.jpg', 'assets/images/resources/why-choose-2-3.jpg', 'assets/images/resources/why-choose-2-4.jpg', '2024-11-09 05:02:37', '2024-11-14 19:45:35');

-- --------------------------------------------------------

--
-- Estrutura da tabela `landing_8pages`
--

CREATE TABLE `landing_8pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `testimonial-say-p-strong` varchar(255) NOT NULL,
  `testimonial-say-h2` varchar(255) NOT NULL,
  `testimonial-say-p-i-1` varchar(255) NOT NULL,
  `testimonial-say-p-i-1-1` varchar(255) NOT NULL,
  `testimonial-say-h3-1` varchar(255) NOT NULL,
  `testimonial-say-h5-1` varchar(255) NOT NULL,
  `testimonial-say-p-i-2` varchar(255) NOT NULL,
  `testimonial-say-p-i-2-1` varchar(255) NOT NULL,
  `testimonial-say-h3-2` varchar(255) NOT NULL,
  `testimonial-say-h5-2` varchar(255) NOT NULL,
  `testimonial-say-p-i-3` varchar(255) NOT NULL,
  `testimonial-say-p-i-3-1` varchar(255) NOT NULL,
  `testimonial-say-h3-3` varchar(255) NOT NULL,
  `testimonial-say-h5-3` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `landing_8pages`
--

INSERT INTO `landing_8pages` (`id`, `testimonial-say-p-strong`, `testimonial-say-h2`, `testimonial-say-p-i-1`, `testimonial-say-p-i-1-1`, `testimonial-say-h3-1`, `testimonial-say-h5-1`, `testimonial-say-p-i-2`, `testimonial-say-p-i-2-1`, `testimonial-say-h3-2`, `testimonial-say-h5-2`, `testimonial-say-p-i-3`, `testimonial-say-p-i-3-1`, `testimonial-say-h3-3`, `testimonial-say-h5-3`, `created_at`, `updated_at`) VALUES
(1, 'O QUE DIZEM', 'What our clients says company', '123 loremibrgibfbewifbweifbweifbe wifewifewifewife', '>wifbewibfwiegnorgngwbngiwebgfewifbewifbewifbewifbweifbewifbewifbie wfbewbfiewbfiiewbfewibfewbifewifibwfiewbfiewbfiewbfiewbifewibfbeiwfbiwefbiwefibwebfiewf', 'Manel das Docas', 'Gatuno', '123Vloremibrgibfbewifbweifbweifbewifewifewifewif', ' ewifbewibfwiegnorgngwbngiwebgfewifbewifbewifbewifbweifbewifbewifbie wfbewbfiewbfiiewbfewibfewbifewifibwfiewbfiewbfiewbfiewbifewibfbeiwfbiwefbiwefibwebfiewf', 'Maria José', 'professora', 'loremibrgibfbewifbweifbweifbewifewifew', 'ifewifewifbewibfwiegnorgngwbngiwebgfewifbewifbewifbewifbweifbewifbewifbie wfbewbfiewbfiiewbfewibfewbifewifibwfiewbfiewbfiewbfiewbifewibfbeiwfbiwefbiwefibwebfiewf', 'Zé maria', 'banhista', '2024-11-09 05:06:51', '2024-11-12 15:58:44');

-- --------------------------------------------------------

--
-- Estrutura da tabela `landing_9pages`
--

CREATE TABLE `landing_9pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `collapse-bg-img` varchar(255) NOT NULL,
  `collapse-h3-1` varchar(255) NOT NULL,
  `collapse-p-1` varchar(255) NOT NULL,
  `collapse-h3-2` varchar(255) NOT NULL,
  `collapse-p-2` varchar(255) NOT NULL,
  `collapse-h3-3` varchar(255) NOT NULL,
  `collapse-p-3` varchar(255) NOT NULL,
  `collapse-h4-1` varchar(255) NOT NULL,
  `collapse-div-p-1` varchar(255) NOT NULL,
  `collapse-div-p-1-1` varchar(255) NOT NULL,
  `collapse-div-p-1-2` varchar(255) NOT NULL,
  `collapse-h4-2` varchar(255) NOT NULL,
  `collapse-div-p-2` varchar(255) NOT NULL,
  `collapse-div-p-2-1` varchar(255) NOT NULL,
  `collapse-div-p-2-2` varchar(255) NOT NULL,
  `collapse-h4-3` varchar(255) NOT NULL,
  `collapse-div-p-3` varchar(255) NOT NULL,
  `collapse-div-p-3-1` varchar(255) NOT NULL,
  `collapse-div-p-3-2` varchar(255) NOT NULL,
  `collapse-h4-4` varchar(255) NOT NULL,
  `collapse-div-p-4` varchar(255) NOT NULL,
  `collapse-div-p-4-1` varchar(255) NOT NULL,
  `collapse-div-p-4-2` varchar(255) NOT NULL,
  `collapse-h4-5` varchar(255) NOT NULL,
  `collapse-div-p-5` varchar(255) NOT NULL,
  `collapse-div-p-5-1` varchar(255) NOT NULL,
  `collapse-div-p-5-2` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `landing_9pages`
--

INSERT INTO `landing_9pages` (`id`, `collapse-bg-img`, `collapse-h3-1`, `collapse-p-1`, `collapse-h3-2`, `collapse-p-2`, `collapse-h3-3`, `collapse-p-3`, `collapse-h4-1`, `collapse-div-p-1`, `collapse-div-p-1-1`, `collapse-div-p-1-2`, `collapse-h4-2`, `collapse-div-p-2`, `collapse-div-p-2-1`, `collapse-div-p-2-2`, `collapse-h4-3`, `collapse-div-p-3`, `collapse-div-p-3-1`, `collapse-div-p-3-2`, `collapse-h4-4`, `collapse-div-p-4`, `collapse-div-p-4-1`, `collapse-div-p-4-2`, `collapse-h4-5`, `collapse-div-p-5`, `collapse-div-p-5-1`, `collapse-div-p-5-2`, `created_at`, `updated_at`) VALUES
(1, 'assets/images/resources/counter-1-1.jpg', '222k+', 'pragas combatidas', '333k+', 'Projects terminados', '555k+', 'Clientes satisfeitos', 'Maecenas é que é preciso', 'Blá,blá, bla´mBR tions of passages of is psum available,', 'but the majority have suffered alteration in some we form, by injected humour,', 'but the majority have suffered alteration in some we form, by injected humour,', 'Formigas e gafanhotos', 'There are many variations of passages', 'of is psum available, but the majority have suffered alteration in some we form, by injected humour,', 'but the majority have suffered alteration in some we form, by injected humour,', 'Adeus ó vai-te Embora!', 'There are many variations of passages', 'of is psum available, but the majority have suffered alteration in some we form, by injected humour,', 'but the majority have suffered alteration in some we form, by injected humour,', 'Porque a nossa equipa?', '123 There are many variations of passages <BR>  of is psum available, but the majority <BR>  have suffered alteration in some we form, by injected humour,', 'but the majority have suffered alteration in some we form, by injected humour,', 'but the majority have suffered alteration in some we form, by injected humour,', 'Maria Imaculada', 'Há muitas especies de bichos <BR>  passages of is psum available, but the majority have suffered alteration in some we form, by injected humour,', 'but the majority have suffered alteration in some we form, by injected humour,', 'but the majority have suffered alteration in some we form, by injected humour,', '2024-11-09 05:07:56', '2024-11-14 19:52:04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `landing_10pages`
--

CREATE TABLE `landing_10pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `call-now-bg-image-1-path` varchar(255) NOT NULL,
  `call-now-bg-image-2-path` varchar(255) NOT NULL,
  `call-now-bg-image-3-path` varchar(255) NOT NULL,
  `call-now-h4-1` varchar(255) NOT NULL,
  `call-now-p-a-1` varchar(255) NOT NULL,
  `call-now-p-a-2` varchar(255) NOT NULL,
  `call-now-h4-2` varchar(255) NOT NULL,
  `call-now-p-a-3` varchar(255) NOT NULL,
  `call-now-p` varchar(255) NOT NULL,
  `call-now-p-1` varchar(255) NOT NULL,
  `call-now-a-2` varchar(255) NOT NULL,
  `call-now-bg-image-4-path` varchar(255) NOT NULL,
  `call-now-a-3` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `landing_10pages`
--

INSERT INTO `landing_10pages` (`id`, `call-now-bg-image-1-path`, `call-now-bg-image-2-path`, `call-now-bg-image-3-path`, `call-now-h4-1`, `call-now-p-a-1`, `call-now-p-a-2`, `call-now-h4-2`, `call-now-p-a-3`, `call-now-p`, `call-now-p-1`, `call-now-a-2`, `call-now-bg-image-4-path`, `call-now-a-3`, `created_at`, `updated_at`) VALUES
(1, 'storage/assets/images/q91KdMKH3j39CmN0BvY3OIbmA23c1T4hlgTKSCa2.png', 'storage/assets/images/n2tYxlbRiEqsLIHzzs8t7FzdAfhN0Dgn58ylLqbL.jpg', 'storage/assets/images/Szw1CBNvFWyp4f3zuoTquLzg4gt0dDqBGvHcfLVX.jpg', 'Ligue Já', '96969696', '9191919119', 'Solução Company', 'Call Now', 'Proporcionamos um serviço confiável', 'Introduza o seu email', 'TIRAR Ler mais', 'storage/assets/images/UqKBIkp0VIOsbgOq1OQ0ox1oSrd3b6C3xiEos9GT.png', 'Fica o Vertical!', '2024-11-09 05:07:56', '2024-11-14 22:34:32');

-- --------------------------------------------------------

--
-- Estrutura da tabela `landing_11pages`
--

CREATE TABLE `landing_11pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `watch-video-p-strong-1` varchar(255) NOT NULL,
  `watch-video-h2` varchar(255) NOT NULL,
  `watch-video-p-2` varchar(255) NOT NULL,
  `watch-video-p-2-1` varchar(255) NOT NULL,
  `watch-video-p-3` varchar(255) NOT NULL,
  `watch-video-p-3-1` varchar(255) NOT NULL,
  `watch-video-bg-img` varchar(255) NOT NULL,
  `contact-us-h2-part-1` varchar(255) NOT NULL,
  `contact-us-h2-part-2` varchar(255) NOT NULL,
  `contact-us-bg-img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `landing_11pages`
--

INSERT INTO `landing_11pages` (`id`, `watch-video-p-strong-1`, `watch-video-h2`, `watch-video-p-2`, `watch-video-p-2-1`, `watch-video-p-3`, `watch-video-p-3-1`, `watch-video-bg-img`, `contact-us-h2-part-1`, `contact-us-h2-part-2`, `contact-us-bg-img`, `created_at`, `updated_at`) VALUES
(1, 'VÍDEO', '123 Want to learn to videoidea Business', '123 lorem fwefowenfoewf fewofinewa', 'Business fewewfew efwfefdwe ewfwefw', '123 lorem fwefowenfoewf fewofinewfoew', ' Business fewewfew efwfefdwe ewfwefw', 'storage/assets/images/9DIsNrqbqU77h6NF0tLhz7NUmCDyWJjLQpEYZ1Dd.png', 'Get in touch', 'Make an apointement', 'storage/assets/images/3ttnP1LIwg8RevFIAWJCqo6bcClnuFAAjbRAV2zk.png', '2024-11-09 05:10:27', '2024-11-15 00:34:23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `landing_pages`
--

CREATE TABLE `landing_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nav-paragraph` varchar(255) NOT NULL,
  `quote-form-tab-title-1` varchar(255) NOT NULL,
  `quote-form-tab-title-2` varchar(255) NOT NULL,
  `quote-form-tab-2-h2` varchar(255) NOT NULL,
  `quote-form-tab-2-p` varchar(255) NOT NULL,
  `carrousel-h5` varchar(255) NOT NULL,
  `carrousel-h2` varchar(255) NOT NULL,
  `carrousel-p` varchar(255) NOT NULL,
  `carrousel-a-1` varchar(255) NOT NULL,
  `carrousel-bg-img-path` varchar(255) NOT NULL,
  `carrousel-h5-1` varchar(255) NOT NULL,
  `carrousel-h2-1` varchar(255) NOT NULL,
  `carrousel-p-1` varchar(255) NOT NULL,
  `carrousel-a-1-1` varchar(255) NOT NULL,
  `carrousel-bg-img-path-1` varchar(255) NOT NULL,
  `carrousel-h5-2` varchar(255) NOT NULL,
  `carrousel-h2-2` varchar(255) NOT NULL,
  `carrousel-p-2` varchar(255) NOT NULL,
  `carrousel-a-1-2` varchar(255) NOT NULL,
  `carrousel-bg-img-path-2` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `landing_pages`
--

INSERT INTO `landing_pages` (`id`, `nav-paragraph`, `quote-form-tab-title-1`, `quote-form-tab-title-2`, `quote-form-tab-2-h2`, `quote-form-tab-2-p`, `carrousel-h5`, `carrousel-h2`, `carrousel-p`, `carrousel-a-1`, `carrousel-bg-img-path`, `carrousel-h5-1`, `carrousel-h2-1`, `carrousel-p-1`, `carrousel-a-1-1`, `carrousel-bg-img-path-1`, `carrousel-h5-2`, `carrousel-h2-2`, `carrousel-p-2`, `carrousel-a-1-2`, `carrousel-bg-img-path-2`, `created_at`, `updated_at`) VALUES
(1, 'Orçamentos Grátis – Agende uma visita técnica sem compromisso', 'Pedir orçamento', 'Contacte-nos', 'Tem alguma duvida, como o podemos ajudar?', 'Contacte-nos', 'Benvindos To Pixel!', 'Livre-se das  <br> Esta é a soluçã<span>o</span>n', 'Desinfesta-te!', 'Ligue Já!', 'storage/assets/images/JAleTgLbf7fAwP1gjAgRznMQlYjd5o1GhKFo2i2O.webp', 'Benvindos To Pixelmotion!', 'Livre-se das  <br> Esta é a soluçã<span>o</span>n', 'Desinfesta-te!', 'Ligue Já!', 'storage/assets/images/M4eXL8YQfxBxURLJSxwq2GH1O5Ru2uIK74gx7S2d.png', 'Benvindos To Pixel!', 'Livre-se das  <br> Esta é a soluçã<span>o</span>n', 'Desinfesta-te!', 'Ligue Já!', 'storage/assets/images/JAleTgLbf7fAwP1gjAgRznMQlYjd5o1GhKFo2i2O.webp', '2024-11-09 02:57:34', '2024-11-20 01:19:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `disk` varchar(32) NOT NULL,
  `directory` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `extension` varchar(32) NOT NULL,
  `mime_type` varchar(128) NOT NULL,
  `aggregate_type` varchar(32) NOT NULL,
  `size` int(10) UNSIGNED NOT NULL,
  `variant_name` varchar(255) DEFAULT NULL,
  `original_media_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `alt` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `media`
--

INSERT INTO `media` (`id`, `disk`, `directory`, `filename`, `extension`, `mime_type`, `aggregate_type`, `size`, `variant_name`, `original_media_id`, `created_at`, `updated_at`, `alt`) VALUES
(1, 'public', 'avatar', 'sds', 'jpg', 'image/jpeg', 'image', 3326552, 'avatar', NULL, '2024-10-27 15:11:57', '2024-10-27 15:11:57', NULL),
(2, 'public', 'avatar', 'sds-thumbnail', 'jpg', 'image/jpeg', 'image', 10238, 'thumbnail', 1, '2024-10-27 15:11:58', '2024-10-27 15:11:58', NULL),
(3, 'public', 'assets/images', 'fdfd', 'png', 'image/png', 'image', 23087, 'default', NULL, '2024-10-27 20:37:05', '2024-10-27 20:37:05', NULL),
(4, 'public', 'assets/images', 'fdfd-thumbnail', 'png', 'image/png', 'image', 7826, 'thumbnail', 3, '2024-10-27 20:37:06', '2024-10-27 20:37:06', NULL),
(5, 'public', 'assets/images', 'fdfd-small', 'png', 'image/png', 'image', 3145, 'small', 3, '2024-10-27 20:37:06', '2024-10-27 20:37:06', NULL),
(6, 'public', 'assets/images', 'fdfd-1', 'png', 'image/png', 'image', 23087, 'avatar', NULL, '2024-10-27 20:40:36', '2024-10-27 20:40:36', NULL),
(7, 'public', 'assets/images', 'fdfd-1-thumbnail', 'png', 'image/png', 'image', 7826, 'thumbnail', 6, '2024-10-27 20:40:36', '2024-10-27 20:40:36', NULL),
(8, 'public', 'assets/images', 'fdfdf', 'png', 'image/png', 'image', 605808, 'default', NULL, '2024-10-30 16:49:49', '2024-10-30 16:49:49', NULL),
(9, 'public', 'assets/images', 'fdfdf-thumbnail', 'png', 'image/png', 'image', 146101, 'thumbnail', 8, '2024-10-30 16:49:49', '2024-10-30 16:49:49', NULL),
(10, 'public', 'assets/images', 'fdfdf-small', 'png', 'image/png', 'image', 41163, 'small', 8, '2024-10-30 16:49:49', '2024-10-30 16:49:49', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `mediables`
--

CREATE TABLE `mediables` (
  `media_id` bigint(20) UNSIGNED NOT NULL,
  `mediable_type` varchar(100) NOT NULL,
  `mediable_id` bigint(20) UNSIGNED NOT NULL,
  `tag` varchar(100) NOT NULL,
  `order` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) NOT NULL,
  `description` varchar(125) DEFAULT NULL,
  `machine_name` varchar(64) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu_items`
--

CREATE TABLE `menu_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `uri` varchar(125) DEFAULT NULL,
  `description` varchar(125) DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `weight` int(11) NOT NULL DEFAULT 0,
  `enabled` tinyint(1) NOT NULL DEFAULT 1,
  `icon` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2016_06_27_000000_create_mediable_tables', 1),
(5, '2020_10_12_000000_add_variants_to_media', 1),
(33, '2024_03_19_114651_create_permission_tables', 2),
(34, '2024_03_30_000000_add_alt_to_media', 2),
(35, '2024_10_26_215657_create_category_tables', 2),
(36, '2024_10_26_215657_create_menu_tables', 2),
(37, '2024_11_07_233240_create_front_pages_table', 2),
(38, '2024_11_08_002512_create_dashboards_table', 2),
(39, '2024_11_08_004609_create_landing_pages_table', 2),
(40, '2024_11_09_012736_create_landing_pages2_table', 2),
(41, '2024_11_09_012741_create_landing_pages3_table', 2),
(42, '2024_11_09_012746_create_landing_pages4_table', 2),
(43, '2024_11_09_012752_create_landing_pages5_table', 2),
(44, '2024_11_09_012755_create_landing_pages6_table', 2),
(45, '2024_11_09_012758_create_landing_pages7_table', 2),
(46, '2024_11_09_012802_create_landing_pages8_table', 2),
(47, '2024_11_09_012806_create_landing_pages9_table', 2),
(48, '2024_11_09_012810_create_landing_pages10_table', 2),
(49, '2024_11_09_013649_create_landing_pages11_table', 2),
(50, '2024_11_15_171819_create_quote-form_table', 3),
(51, '2024_11_15_172429_create_contact-forms_table', 3),
(52, '2024_11_15_171819_create_quote_forms_table', 4),
(53, '2024_11_16_192328_create_contactus_table', 5),
(54, '2024_11_16_194517_create_contacts_table', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `model_has_categories`
--

CREATE TABLE `model_has_categories` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `category_item_type` varchar(100) DEFAULT NULL,
  `category_item_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(125) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(125) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(125) NOT NULL,
  `token` varchar(125) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) NOT NULL,
  `guard_name` varchar(125) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `quote_forms`
--

CREATE TABLE `quote_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_type` varchar(255) NOT NULL,
  `locality` varchar(255) NOT NULL,
  `products` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `confirmed` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `quote_forms`
--

INSERT INTO `quote_forms` (`id`, `customer_type`, `locality`, `products`, `name`, `email`, `phone`, `confirmed`, `created_at`, `updated_at`) VALUES
(1, 'home', 'qgere', 'ratos', 'gqregregre@gmail.com', 'qrgreg@gmji.com', '645964984984', 1, '2024-11-16 18:27:30', '2024-11-16 18:27:30'),
(2, 'company', 'lagoa', 'baratas', 'pedro', 'pedro@gmail.com', '282615963', 1, '2024-11-19 19:08:41', '2024-11-19 19:08:41'),
(3, 'company', 'lagoa', 'baratas', 'pedro', 'pedro@gmail.com', '282615963', 1, '2024-11-19 19:09:09', '2024-11-19 19:09:09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) NOT NULL,
  `guard_name` varchar(125) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(125) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) NOT NULL,
  `email` varchar(125) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(125) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin@example.com', '2024-10-27 11:58:19', '$2y$10$PqP5mEOvn9Zht1/bn2ZP6uXucAthZPeLNSVonktddAja1xjlOcFTy', 'EBsErChMYVJIqwWIzMSNBVFubc9SgiaF0JR6unBDAOJcsKbxa0jdDpciXMxN', '2024-10-27 11:58:19', '2024-10-27 12:02:58'),
(2, 'Admin User', 'admin@example.com', '2024-10-27 11:58:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '0KMzFGVOJYgYDPsHWq9bwqWQHfgt0yCwHUEULK0YrY7GvbxNHrWRJfmslgOh', '2024-10-27 11:58:19', '2024-10-27 11:58:19'),
(3, 'Example User', 'test@example.com', '2024-10-27 11:58:19', '$2y$12$/RpUxppCGQQXo8qM64oE9.ZkHQm7p4XfYY7LmMoPhKM6.pZas2uj2', 'Jmqs1HQeC8KC6Ju4Rx9kgVJpk45jOcOE5hGDgeUTrJ73Wr4kYookrDXHCj8Q', '2024-10-27 11:58:19', '2024-11-07 18:17:25');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Índices para tabela `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Índices para tabela `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_category_type_id_slug_unique` (`category_type_id`,`slug`);

--
-- Índices para tabela `category_types`
--
ALTER TABLE `category_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_types_machine_name_unique` (`machine_name`);

--
-- Índices para tabela `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contact_forms`
--
ALTER TABLE `contact_forms`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `dashboards`
--
ALTER TABLE `dashboards`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`) USING HASH;

--
-- Índices para tabela `front_pages`
--
ALTER TABLE `front_pages`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`(250));

--
-- Índices para tabela `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `landing_2pages`
--
ALTER TABLE `landing_2pages`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `landing_3pages`
--
ALTER TABLE `landing_3pages`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `landing_4pages`
--
ALTER TABLE `landing_4pages`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `landing_5pages`
--
ALTER TABLE `landing_5pages`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `landing_6pages`
--
ALTER TABLE `landing_6pages`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `landing_7pages`
--
ALTER TABLE `landing_7pages`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `landing_8pages`
--
ALTER TABLE `landing_8pages`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `landing_9pages`
--
ALTER TABLE `landing_9pages`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `landing_10pages`
--
ALTER TABLE `landing_10pages`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `landing_11pages`
--
ALTER TABLE `landing_11pages`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `landing_pages`
--
ALTER TABLE `landing_pages`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_disk_directory_filename_extension_unique` (`disk`,`directory`,`filename`,`extension`) USING HASH,
  ADD KEY `media_aggregate_type_index` (`aggregate_type`),
  ADD KEY `media_original_media_id_foreign` (`original_media_id`);

--
-- Índices para tabela `mediables`
--
ALTER TABLE `mediables`
  ADD PRIMARY KEY (`media_id`,`mediable_type`,`mediable_id`,`tag`),
  ADD KEY `mediables_mediable_id_mediable_type_index` (`mediable_id`,`mediable_type`),
  ADD KEY `mediables_tag_index` (`tag`),
  ADD KEY `mediables_order_index` (`order`);

--
-- Índices para tabela `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_machine_name_unique` (`machine_name`);

--
-- Índices para tabela `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `model_has_categories`
--
ALTER TABLE `model_has_categories`
  ADD KEY `model_has_categories_category_id_foreign` (`category_id`),
  ADD KEY `model_has_categories_category_item_type_index` (`category_item_type`),
  ADD KEY `model_has_categories_category_item_id_index` (`category_item_id`);

--
-- Índices para tabela `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Índices para tabela `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Índices para tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices para tabela `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Índices para tabela `quote_forms`
--
ALTER TABLE `quote_forms`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Índices para tabela `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Índices para tabela `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `category_types`
--
ALTER TABLE `category_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de tabela `contact_forms`
--
ALTER TABLE `contact_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `dashboards`
--
ALTER TABLE `dashboards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `front_pages`
--
ALTER TABLE `front_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `landing_2pages`
--
ALTER TABLE `landing_2pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `landing_3pages`
--
ALTER TABLE `landing_3pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `landing_4pages`
--
ALTER TABLE `landing_4pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `landing_5pages`
--
ALTER TABLE `landing_5pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `landing_6pages`
--
ALTER TABLE `landing_6pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `landing_7pages`
--
ALTER TABLE `landing_7pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `landing_8pages`
--
ALTER TABLE `landing_8pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `landing_9pages`
--
ALTER TABLE `landing_9pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `landing_10pages`
--
ALTER TABLE `landing_10pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `landing_11pages`
--
ALTER TABLE `landing_11pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `landing_pages`
--
ALTER TABLE `landing_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de tabela `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `quote_forms`
--
ALTER TABLE `quote_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
