-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 07, 2023 at 04:41 PM
-- Server version: 8.0.35-0ubuntu0.22.04.1
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` bigint UNSIGNED NOT NULL,
  `recipe_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `recipe_id`, `name`, `quantity`, `unit`, `created_at`, `updated_at`) VALUES
(1, 1, 'dolorum molestiae qui', '1', 'kilo', '2023-11-03 21:52:51', '2023-11-03 21:52:51'),
(2, 1, 'culpa quisquam qui', '1', 'kilo', '2023-11-03 21:52:51', '2023-11-03 21:52:51'),
(3, 1, 'nulla quisquam culpa', '1', 'kilo', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(4, 2, 'qui et velit', '1', 'kilo', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(5, 2, 'laborum eius sunt', '1', 'kilo', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(6, 2, 'sit blanditiis ea', '1', 'kilo', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(7, 3, 'dolorum hic quod', '1', 'kilo', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(8, 3, 'natus recusandae minima', '1', 'kilo', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(9, 3, 'molestias fuga sunt', '1', 'kilo', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(10, 4, 'fuga maiores aperiam', '1', 'kilo', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(11, 4, 'rerum architecto ab', '1', 'kilo', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(12, 4, 'ullam nesciunt quia', '1', 'kilo', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(13, 5, 'voluptatum recusandae aut', '1', 'kilo', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(14, 5, 'et recusandae ut', '1', 'kilo', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(15, 5, 'est voluptatem tempora', '1', 'kilo', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(16, 6, 'sed beatae exercitationem', '1', 'kilo', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(17, 6, 'nobis non excepturi', '1', 'kilo', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(18, 6, 'dolores laboriosam officiis', '1', 'kilo', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(19, 7, 'eius non quo', '1', 'kilo', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(20, 7, 'ut eos repellendus', '1', 'kilo', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(21, 7, 'quasi similique dolorum', '1', 'kilo', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(22, 8, 'et rerum iste', '1', 'kilo', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(23, 8, 'consequatur sequi voluptates', '1', 'kilo', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(24, 8, 'consequatur est expedita', '1', 'kilo', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(25, 9, 'cupiditate impedit corporis', '1', 'kilo', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(26, 9, 'sed debitis eaque', '1', 'kilo', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(27, 9, 'qui sint dolor', '1', 'kilo', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(28, 10, 'aut sequi enim', '1', 'kilo', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(29, 10, 'eius eaque suscipit', '1', 'kilo', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(30, 10, 'sint ducimus et', '1', 'kilo', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(61, 1, 'asdfdas', '1 1/2', 'kg', '2023-11-04 14:19:41', '2023-11-04 14:19:41'),
(85, 43, 'Soy Sauce', '1 1/2', 'cup', '2023-11-06 14:21:27', '2023-11-06 14:40:16'),
(86, 43, 'Vinegar', '1', 'cup', '2023-11-06 14:21:37', '2023-11-06 14:39:52'),
(87, 43, 'Garlic', '20', 'cloves', '2023-11-06 14:33:27', '2023-11-06 14:33:27'),
(88, 43, 'Bay Leaf', '1', 'pc', '2023-11-06 14:43:55', '2023-11-06 14:43:55'),
(89, 43, 'Potato (Optional)', '1', 'whole', '2023-11-06 14:44:43', '2023-11-06 14:44:43'),
(90, 43, 'Pepper', '1/2', 'tbsp', '2023-11-06 14:45:39', '2023-11-06 14:45:50'),
(91, 43, 'Sugar', '1', 'tbsp', '2023-11-06 14:46:14', '2023-11-06 14:46:14'),
(92, 43, 'Fish Sauce (Patis)', '2 1/2', 'tbsp', '2023-11-06 14:47:34', '2023-11-06 14:47:43'),
(93, 43, 'Water', '4', 'cups', '2023-11-06 14:56:08', '2023-11-06 14:56:08'),
(94, 43, 'Meat (Chicken or Pork)', '1', 'kg', '2023-11-06 14:56:22', '2023-11-06 14:56:22');

-- --------------------------------------------------------

--
-- Table structure for table `instructions`
--

CREATE TABLE `instructions` (
  `id` bigint UNSIGNED NOT NULL,
  `recipe_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instructions`
--

INSERT INTO `instructions` (`id`, `recipe_id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'quia ratione ipsam', 'Molestiae velit consectetur hic omnis. Qui officia quidem et nulla necessitatibus. Vel aut eos qui necessitatibus corporis a omnis.', '2023-11-03 21:52:51', '2023-11-03 21:52:51'),
(2, 1, 'harum molestiae repellat', 'Harum tenetur accusantium nisi et voluptas. Quas fugit qui harum assumenda. Autem fuga molestiae accusantium cumque et rerum.', '2023-11-03 21:52:51', '2023-11-03 21:52:51'),
(3, 1, 'minima ducimus et', 'Eum dolor alias eum minus et omnis asperiores. Neque a ipsa aliquid tenetur laborum. Mollitia et molestias et incidunt ducimus suscipit illum.', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(4, 2, 'porro facilis molestiae', 'Dolor quia reprehenderit dolores sed itaque repellat repellendus. Architecto temporibus saepe quidem. Facilis eius et rem ut minima.', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(5, 2, 'cupiditate magni consequatur', 'Aspernatur autem officia voluptatem hic autem soluta qui enim. Tempore totam dolorum eius deserunt sit. Omnis minima alias voluptas rerum iusto ea id voluptatem.', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(6, 2, 'veritatis dolorem perferendis', 'Beatae minima et saepe non dolores architecto. Quo commodi voluptas vel quae. Eos vitae sit aut sed voluptas nulla culpa.', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(7, 3, 'amet repudiandae quis', 'Rerum rerum autem distinctio nobis corrupti iste sunt. Porro eveniet qui suscipit enim. Ex quibusdam est praesentium omnis accusantium magnam numquam.', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(8, 3, 'neque sed qui', 'Debitis et illum eius sapiente exercitationem ratione voluptatibus. Dignissimos quidem corrupti et velit laborum non. Voluptas nostrum dignissimos qui.', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(9, 3, 'similique enim quia', 'Molestiae aperiam in suscipit aut sit sit neque reprehenderit. Explicabo numquam alias sed. Dolor porro perspiciatis aut pariatur mollitia libero.', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(10, 4, 'ullam perferendis itaque', 'Quod saepe nemo nihil omnis consectetur labore. Aliquid facere quia quas odit tempore rerum. Aut qui voluptatem numquam et facere rerum sint.', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(11, 4, 'eum sed possimus', 'Odio architecto error sit aspernatur sed tempore nam possimus. Nemo praesentium adipisci quasi vitae. Id nesciunt quam et quaerat aut voluptatem natus.', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(12, 4, 'autem quia officia', 'Dolor repellat provident et modi. Quo magni ut enim sint temporibus possimus. Ad perferendis nisi fuga aut.', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(13, 5, 'eaque beatae iure', 'At ad quam et ipsam rem laudantium repudiandae exercitationem. Ut dignissimos dolor est voluptas itaque ut est. Ab ut sequi possimus quaerat nihil sed suscipit.', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(14, 5, 'quo occaecati dolor', 'Itaque eos tempore qui numquam. Voluptatem officiis qui veritatis et. Perferendis laboriosam laboriosam dignissimos minus quia.', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(15, 5, 'at quo vel', 'Pariatur et reprehenderit quo veniam amet commodi. Non odit voluptatum aut. Sint consequatur aperiam odio voluptas nisi.', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(16, 6, 'expedita hic corporis', 'Et rerum ullam repudiandae odio. At odit necessitatibus similique. Deserunt autem et architecto atque sit et molestiae.', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(17, 6, 'maiores velit rem', 'Dolore illum sit iste aut ea veniam. Aliquid esse voluptatem quod qui accusamus vel. Dolorem illum quisquam nobis praesentium fugiat nam repudiandae eos.', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(18, 6, 'tempora provident quibusdam', 'Ex perferendis reprehenderit et vero quo non. Nesciunt adipisci praesentium ipsam ducimus optio ea maiores. Maxime voluptatem dolor sint eveniet.', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(19, 7, 'placeat autem officia', 'Molestiae nesciunt qui distinctio consequuntur sint voluptatum modi. Earum quis nobis ea. Quae rerum et mollitia vero.', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(20, 7, 'est dicta numquam', 'Voluptatem aut sunt quia iure dolorum. Aut pariatur repellat assumenda esse ea. Qui libero itaque unde non earum voluptatem amet.', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(21, 7, 'perferendis consequatur dolores', 'Eum quo nesciunt eum minima. Esse enim quod eum molestias odit eaque. Eum exercitationem laboriosam nulla rerum dicta non sunt.', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(22, 8, 'officia quas totam', 'Sint cumque molestias est velit consequatur. Earum rerum ut aut. Dolor non sunt asperiores est odit pariatur.', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(23, 8, 'perferendis et enim', 'Voluptatum sed id voluptas dolor voluptas quae. Qui dignissimos quia alias aut aut labore voluptatem. Ullam non cum odio.', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(24, 8, 'quae molestiae iusto', 'Ut quibusdam voluptas fugit enim aut adipisci. Dolor alias neque iure. In culpa qui soluta est illum.', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(25, 9, 'vitae quia doloribus', 'Quia fuga consequatur ducimus labore repellat et placeat. Laudantium cumque possimus non. Quo labore blanditiis ab ipsum sit.', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(26, 9, 'rerum perferendis cupiditate', 'Omnis consequuntur aut quia pariatur. Ad sit quasi doloribus itaque totam porro. Iure possimus sunt corporis quia adipisci aperiam sit autem.', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(27, 9, 'aut animi autem', 'Dolores sit fugit eum corporis. Et voluptas temporibus optio facilis distinctio qui eum eos. Libero sed eos distinctio ea reiciendis quis corporis.', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(28, 10, 'dolor vitae magnam', 'Sunt et quo rem quia. Quasi quibusdam inventore iusto dolor quaerat dolor. Quis rerum amet iusto a suscipit eos neque inventore.', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(29, 10, 'non iure deserunt', 'Minima quae ducimus magnam. Sint ab voluptatem qui qui ea aut labore. Sed ex quis et qui consequuntur.', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(30, 10, 'commodi aut nobis', 'Omnis et est sint nulla. Quia rem maxime quas dolores ut et veniam occaecati. Vel aperiam omnis maxime repellendus nesciunt aspernatur.', '2023-11-03 21:52:52', '2023-11-03 21:52:52'),
(67, 43, 'Chopping', 'Chop your potato, garlic, and onion.', '2023-11-06 14:48:48', '2023-11-06 14:48:48'),
(68, 43, 'Heating the pan', 'Heat the pan up using moderate heat setting on your stove or induction cooker.', '2023-11-06 14:50:08', '2023-11-06 14:50:08'),
(69, 43, 'Fry spices', 'Fry the chopped onion and garlic. Saute it until the good smell comes out.', '2023-11-06 14:51:19', '2023-11-06 14:51:19'),
(70, 43, 'Add the meat of your choice', 'Add your meat to the pan. It can be pork or chicken. Continue to saute it until the color changes slightly.', '2023-11-06 14:52:37', '2023-11-06 14:53:05'),
(71, 43, 'Add fish sauce', 'Add 2 1/2 tbsp of fish sauce to the meat. Ensure that to put it on top of the meat itself. This helps in removing stench. Saute for 5 minutes.', '2023-11-06 14:54:41', '2023-11-06 14:55:01'),
(72, 43, 'Add Water', 'Add 4 cups of water. This will be the base for the soup.', '2023-11-06 14:55:58', '2023-11-06 14:55:58'),
(73, 43, 'Add soy sauce and vinegar', 'Add the soy sauce, vinegar, pepper, and bay leaf to the pan. Boil it using high heat for 20 minutes.', '2023-11-06 14:57:58', '2023-11-06 14:58:47'),
(74, 43, 'Add potato', 'Now add the chopped potatoes (if you have). This step can be skipped if you don\'t like potatoes.', '2023-11-06 14:59:30', '2023-11-06 14:59:30'),
(75, 43, 'Simmer', 'Simmer for 10 minutes or until the potatoes are soft and cooked.', '2023-11-06 14:59:55', '2023-11-06 14:59:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_02_120348_create_recipes_table', 2),
(6, '2023_11_02_120425_create_ingredients_table', 2),
(7, '2023_11_02_120440_create_instructions_table', 2),
(8, '2023_11_04_233212_instructions_drop_step_number_column', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `user_id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'culpa odit quasi', 'nostrum qui aut iusto modi ut temporibus est voluptate eaque accusantium modi voluptatem sed aut odio tempore rerum vero ut omnis et est est quia unde et facilis molestias aliquid', 'https://picsum.photos/1280/480', '2023-11-02 14:52:08', '2023-11-02 14:52:08'),
(2, 1, 'consequatur sed sit', 'omnis minima assumenda qui qui voluptatibus odio assumenda voluptatem est sit nam nobis dicta dolorem tempore minus quidem molestias omnis accusamus omnis velit sint facilis consequatur est veniam at ipsam', 'https://picsum.photos/1280/480', '2023-11-02 14:52:08', '2023-11-02 14:52:08'),
(3, 1, 'qui atque ullam', 'et consequatur tempore illum explicabo quibusdam non numquam et qui inventore ducimus eos totam optio in amet qui minima hic dolor et soluta quia repellendus quisquam doloribus odio et repellendus', 'https://picsum.photos/1280/480', '2023-11-02 14:52:08', '2023-11-02 14:52:08'),
(4, 1, 'excepturi deleniti ex', 'porro perferendis eaque ipsum praesentium et autem aut quod sed optio id eos a sit autem exercitationem illum animi ut placeat aliquid esse quibusdam dolor necessitatibus quia saepe error numquam', 'https://picsum.photos/1280/480', '2023-11-02 14:52:08', '2023-11-02 14:52:08'),
(5, 1, 'voluptatum ratione et', 'cum reprehenderit vel quis maxime at consequatur aut a quaerat officia ut officiis eum pariatur sit quia voluptate voluptate nam ducimus aut dolorem vitae sunt aliquam a eaque quis sint', 'https://picsum.photos/1280/480', '2023-11-02 14:52:08', '2023-11-02 14:52:08'),
(6, 1, 'praesentium nulla mollitia', 'quod molestiae consequatur eius ut omnis inventore ut dolor alias et aut expedita doloribus exercitationem esse eum in facilis sed sit corrupti beatae voluptatem illum veritatis voluptatem magni doloremque tenetur', 'https://picsum.photos/1280/480', '2023-11-02 14:52:08', '2023-11-02 14:52:08'),
(7, 1, 'est tempora velit', 'aut tenetur et assumenda error veniam autem incidunt perspiciatis tempore mollitia illo qui et aut ut molestiae et rerum quia et velit provident mollitia fugiat asperiores quia sint quibusdam et', 'https://picsum.photos/1280/480', '2023-11-02 14:52:08', '2023-11-02 14:52:08'),
(8, 1, 'eius ipsa molestiae', 'pariatur aut sint in ut aut enim et saepe officia qui et recusandae ut voluptas fugit vel perferendis non accusamus qui cum iure doloribus aut suscipit assumenda et saepe quia', 'https://picsum.photos/1280/480', '2023-11-02 14:52:08', '2023-11-02 14:52:08'),
(9, 1, 'quisquam aspernatur enim', 'a ea fugiat placeat recusandae corrupti velit eos a expedita natus et autem aliquid consequatur aperiam culpa cum eveniet et neque dolores molestiae qui sunt est quibusdam est ab qui', 'https://picsum.photos/1280/480', '2023-11-02 14:52:08', '2023-11-02 14:52:08'),
(10, 1, 'nostrum iste incidunt', 'sapiente quam quas et a sunt provident nesciunt non doloremque vitae rerum cumque aliquid distinctio ex iure aperiam blanditiis adipisci excepturi autem libero doloremque hic asperiores quia omnis distinctio ipsa', 'https://picsum.photos/1280/480', '2023-11-02 14:52:08', '2023-11-02 14:52:08'),
(43, 10, 'Adobo', 'Classic Filipino Adobo', '/uploads/adobo_1699276315.jfif', '2023-11-06 13:11:55', '2023-11-06 13:11:55'),
(44, 10, 'Tinolang Manok', 'Enjoy the taste of ginger, onion, and garlic with tinolang manok.', '/uploads/Chicken-Tinola-Soup-Recipe_1699277241.jpg', '2023-11-06 13:27:21', '2023-11-06 14:17:04'),
(45, 10, 'Chicken Curry', 'Enjoy the taste of chicken curry. That spice that is not so spicy is always heaven to the mouth.', '/uploads/Chicken-Coconut-Curry-1-1-500x500_1699277324.jpg', '2023-11-06 13:28:45', '2023-11-06 13:28:45'),
(46, 10, 'Nilagang Baboy', 'Nilagang baboy recipe', '/uploads/Pork-Nilaga_1699317851.jpg', '2023-11-07 00:44:11', '2023-11-07 00:44:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Katheryn Fay', 'emanuel67@example.com', '2023-11-02 06:11:18', '$2y$10$su2kacm2JW40MlWCCy5ODOKO9Yq1OEvFaY3zmpTsufLNGqnHFoX6G', 'xQ1Pdu6Rcn', '2023-11-02 06:11:19', '2023-11-02 06:11:19'),
(2, 'Raegan Feest', 'carter.ahmad@example.net', '2023-11-02 06:11:18', '$2y$10$56liciSX40NrYbDy0p3MHum7WNbaL842c4A52B6FAAI810XxWGXLG', 'e6pWVCP1G3', '2023-11-02 06:11:19', '2023-11-02 06:11:19'),
(3, 'Prof. Roma Schaefer PhD', 'kristin86@example.com', '2023-11-02 06:11:18', '$2y$10$bsVA1VbBOjkcVxyiLk4l2eMTJ/yDJXohvX6M3rmm86zPjPzfbiTom', 'Tq3agyjTTu', '2023-11-02 06:11:19', '2023-11-02 06:11:19'),
(4, 'Alanis Kutch', 'edyth21@example.net', '2023-11-02 06:11:18', '$2y$10$wUcE.JV.tLN2naild2CHt.NrIjh7FRMXb3DWGzJOGcuUfAFUivi8.', 'Q9OiINHjIn', '2023-11-02 06:11:19', '2023-11-02 06:11:19'),
(5, 'Noel Nader', 'qrunolfsdottir@example.net', '2023-11-02 06:11:18', '$2y$10$Kwt.m10T2kCr112X8McPAOv/w9lwuMxzn200qx4WTRVOZHHLOZNvq', '2JUo7zLZ0X', '2023-11-02 06:11:19', '2023-11-02 06:11:19'),
(6, 'Paul Camano', 'paul@gmail.com', NULL, '$2y$10$JnW2D/PscSJztRUYE96fc.klajjSt1IAZlZkZmKREiHpkNafL9eJi', NULL, '2023-11-02 08:01:31', '2023-11-02 08:01:31'),
(7, 'Mae Cabs', 'mae@mae.com', NULL, '$2y$10$u4sLMOlVvCe2LcwPANyreeGqMQzYuOkiGgHirED3GdSRC7MZI5b4e', NULL, '2023-11-02 08:03:16', '2023-11-02 08:03:16'),
(8, 'baby', 'baby@mail.com', NULL, '$2y$10$94hDw05ez4ZAr02ood4FNOEKj/IIAiYsyD2TOoUVPoYjI.CXidaIC', NULL, '2023-11-02 08:04:56', '2023-11-02 08:04:56'),
(9, 'baby', 'baby2@mail.com', NULL, '$2y$10$8E1gQ4Vn7c4YlbN4cWlQ7OkGOeBElkEcgudf6pYtxx8hTQ.Rl25VK', NULL, '2023-11-02 08:05:29', '2023-11-02 08:05:29'),
(10, 'Paul Cam', 'pc@pcc.com', NULL, '$2y$10$EsfkY7h/YgEM7kM.4kXSRuEjj/AS514D9HZEnrI.WUfgoXZAMAuge', NULL, '2023-11-02 13:22:21', '2023-11-02 13:22:21'),
(11, 'Tito Paul', 'paul@tito.com', NULL, '$2y$10$qVtO.uvVRAmpL4S9P1OiYuEw5dMEO50/QEpeSXC.OSV16uU5IhH9K', NULL, '2023-11-05 01:01:04', '2023-11-05 01:01:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ingredients_recipe_id_foreign` (`recipe_id`);

--
-- Indexes for table `instructions`
--
ALTER TABLE `instructions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `instructions_recipe_id_foreign` (`recipe_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipes_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `instructions`
--
ALTER TABLE `instructions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD CONSTRAINT `ingredients_recipe_id_foreign` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `instructions`
--
ALTER TABLE `instructions`
  ADD CONSTRAINT `instructions_recipe_id_foreign` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `recipes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
