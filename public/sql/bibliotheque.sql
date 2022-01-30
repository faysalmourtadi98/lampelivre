-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 25 jan. 2022 à 17:54
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bibliotheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categorie_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `categorie_name`, `categorie_description`, `created_at`, `updated_at`) VALUES
(1, 'Economie', 'vide', '2021-05-31 01:04:14.000000', '2021-05-31 12:48:07.000000'),
(2, 'Math/Physique', 'vide', '2021-05-31 01:04:32.000000', '2021-05-31 01:04:32.000000'),
(3, 'Informatique', 'vide', '2021-05-31 01:04:45.000000', '2021-05-31 01:04:45.000000'),
(4, 'Littérature', 'vide', '2021-05-31 01:05:20.000000', '2021-05-31 01:05:20.000000');

-- --------------------------------------------------------

--
-- Structure de la table `checkouts`
--

CREATE TABLE `checkouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `panier_id` bigint(20) UNSIGNED NOT NULL,
  `checkout_full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkout_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkout_name_on_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkout_adress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkout_credit_cart_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkout_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkout_exp_month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkout_state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkout_zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkout_exp_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkout_cvv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkout_valide` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `checkouts`
--

INSERT INTO `checkouts` (`id`, `panier_id`, `checkout_full_name`, `checkout_email`, `checkout_name_on_card`, `checkout_adress`, `checkout_credit_cart_number`, `checkout_city`, `checkout_exp_month`, `checkout_state`, `checkout_zip`, `checkout_exp_year`, `checkout_cvv`, `checkout_valide`, `created_at`, `updated_at`) VALUES
(1, 37, 'Ori Mosley', 'nuhebyh@mailinator.com', 'Judith Ware', 'Cumque dolore at qui', '999', 'Lorem rerum expedita', '12', 'Aute Nam eos non si', '36773', '1994', 'Deserunt dolor recus', 'OUI', '2021-06-14 19:38:12.000000', '2021-06-14 19:53:00.000000'),
(2, 37, 'Edward Ortega', 'cowuvap@mailinator.com', 'Xandra Lindsay', 'Qui et sint dolor er', '398', 'Animi eu et sit re', '3', 'Eum exercitationem q', '40306', '1988', 'Placeat irure recus', 'NON', '2021-06-14 20:09:08.000000', '2021-06-14 20:09:08.000000');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2022_01_11_211200_create_categories_table', 1),
(2, '2022_01_11_211200_create_checkouts_table', 1),
(3, '2022_01_11_211200_create_failed_jobs_table', 1),
(4, '2022_01_11_211200_create_paniers_table', 1),
(5, '2022_01_11_211200_create_password_resets_table', 1),
(6, '2022_01_11_211200_create_permission_role_table', 1),
(7, '2022_01_11_211200_create_permission_user_table', 1),
(8, '2022_01_11_211200_create_permissions_table', 1),
(9, '2022_01_11_211200_create_products_table', 1),
(10, '2022_01_11_211200_create_role_user_table', 1),
(11, '2022_01_11_211200_create_roles_table', 1),
(12, '2022_01_11_211200_create_users_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `paniers`
--

CREATE TABLE `paniers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `nb_products` bigint(20) UNSIGNED NOT NULL,
  `product_prix_total` double(8,2) UNSIGNED NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `paniers`
--

INSERT INTO `paniers` (`id`, `user_id`, `product_id`, `nb_products`, `product_prix_total`, `created_at`, `updated_at`) VALUES
(37, 37, 4, 2, 80.00, '2021-06-13 15:29:52.000000', '2021-06-13 15:29:52.000000'),
(39, 38, 4, 4, 160.00, '2021-06-14 17:38:04.000000', '2021-06-14 19:13:29.000000');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2021-06-01 14:30:55.000000', '2021-06-01 14:30:55.000000'),
(2, 'users-read', 'Read Users', 'Read Users', '2021-06-01 14:30:55.000000', '2021-06-01 14:30:55.000000'),
(3, 'users-update', 'Update Users', 'Update Users', '2021-06-01 14:30:55.000000', '2021-06-01 14:30:55.000000'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2021-06-01 14:30:55.000000', '2021-06-01 14:30:55.000000'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2021-06-01 14:30:55.000000', '2021-06-01 14:30:55.000000'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2021-06-01 14:30:55.000000', '2021-06-01 14:30:55.000000'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2021-06-01 14:30:55.000000', '2021-06-01 14:30:55.000000'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2021-06-01 14:30:55.000000', '2021-06-01 14:30:55.000000'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2021-06-01 14:30:55.000000', '2021-06-01 14:30:55.000000'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2021-06-01 14:30:55.000000', '2021-06-01 14:30:55.000000'),
(11, 'module_1_name-create', 'Create Module_1_name', 'Create Module_1_name', '2021-06-01 14:30:56.000000', '2021-06-01 14:30:56.000000'),
(12, 'module_1_name-read', 'Read Module_1_name', 'Read Module_1_name', '2021-06-01 14:30:56.000000', '2021-06-01 14:30:56.000000'),
(13, 'module_1_name-update', 'Update Module_1_name', 'Update Module_1_name', '2021-06-01 14:30:56.000000', '2021-06-01 14:30:56.000000'),
(14, 'module_1_name-delete', 'Delete Module_1_name', 'Delete Module_1_name', '2021-06-01 14:30:56.000000', '2021-06-01 14:30:56.000000');

-- --------------------------------------------------------

--
-- Structure de la table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(9, 3),
(10, 1),
(10, 2),
(10, 3);

-- --------------------------------------------------------

--
-- Structure de la table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_prix` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_devise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_description` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_auteur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_in_stock` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `categorie_id`, `product_name`, `product_prix`, `product_image`, `product_devise`, `product_description`, `product_auteur`, `product_in_stock`, `created_at`, `updated_at`) VALUES
(1, 1, 'A Brief History of Time', '100', 'book2.jpg', 'MAD', 'Une brève histoire du temps : Du big bang aux trous noirs est un ouvrage de vulgarisation scientifique qui traite de cosmologie, la science des lois qui gouvernent l’univers', 'vide', 'oui', '2021-05-30 15:18:16.000000', '2021-05-30 15:18:16.000000'),
(2, 1, 'Basic Economics: A Commoon Sense Guide to the Economy', '140', 'book6.jpg', 'MAD', 'citizen  guide to economics-for those who want to understand how the economy works but have no interest in jargon or equations. Sowell reveals the general principles behind any kind of economy-capitalist, socialist, feudal', 'vide', 'vide', '2021-05-30 15:20:44.000000', '2021-05-30 15:22:53.000000'),
(3, 3, 'Eloquent JavaScript', '100', 'book4.jpg', 'MAD', 'vide', 'vide', 'oui', '2021-05-27 11:08:24.000000', '2021-05-27 11:08:24.000000'),
(4, 2, 'Everything you need to age Math in one big fat notebook', '40', 'book3.jpg', 'MAD', 'vide', 'vide', 'oui', '2021-05-30 15:17:24.000000', '2021-05-30 15:17:24.000000'),
(5, 3, 'Java: A Beginner’s', '35', 'java.jpg', 'MAD', 'vide', 'vide', 'oui', '2021-05-27 11:06:57.000000', '2021-05-27 11:06:57.000000'),
(6, 4, 'On Pre-Islamic poetry', '120', 'book5.jpg', 'MAD', ' is a book of literary criticism published in 1926 by the Egyptian author Taha Hussein. In it, Hussein argued that some pre-Islamic poetry was inauthentic, and cast doubt on the authenticity of the Quran. The book\'s publication caused a major literary controversy in Egypt.', 'vide', 'oui', '2021-05-30 15:19:43.000000', '2021-05-30 15:19:43.000000'),
(7, 4, 'On the House: A Washington Memoir', '20', 'book1.jpg', 'MAD', 'vide', 'vide', 'oui', '2021-05-30 15:18:59.000000', '2021-05-30 15:18:59.000000'),
(8, 1, 'Père riche Père pauvre', '40', 'pere.jpg', 'MAD', 'vide', 'vide', 'oui', '2021-05-30 15:15:59.000000', '2021-05-30 15:15:59.000000'),
(9, 3, 'PHP and MySQL for Dynamic Web Sites', '140', 'php.jpg', 'MAD', 'When it comes to creating dynamic, database-driven Web sites, the PHP language and MySQL database offer a winning combination -- and with PHP 7, web professionals can achieve dramatic performance improvements. Combine these great open source technologies with Larry Ullman\'s PHP and MySQL for Dynamic Web Sites: Visual QuickPro Guide, Fifth Edition, and there\'s no limit to the powerful, interactive Web sites you can create.', 'vide', 'vide', '2021-05-27 11:05:46.000000', '2021-06-02 19:52:03.000000'),
(10, 3, 'Python Crash Course', '0', 'Python_Crash_Course.jpg', 'MAD', 'vide', 'vide', 'non', '2021-05-27 11:09:12.000000', '2021-05-27 11:09:12.000000'),
(11, 3, 'The linux command line', '40', 'linux.jpg', 'MAD', 'vide', 'vide', 'oui', '2021-05-27 11:07:42.000000', '2021-05-27 11:07:42.000000');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'superadministrator', 'Superadministrator', 'Superadministrator', '2021-06-01 14:30:55.000000', '2021-06-01 14:30:55.000000'),
(2, 'administrator', 'Administrator', 'Administrator', '2021-06-01 14:30:56.000000', '2021-06-01 14:30:56.000000'),
(3, 'user', 'User', 'User', '2021-06-01 14:30:56.000000', '2021-06-01 14:30:56.000000');

-- --------------------------------------------------------

--
-- Structure de la table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(2, 35, 'App\\Models\\User'),
(3, 36, 'App\\Models\\User'),
(3, 37, 'App\\Models\\User'),
(2, 38, 'App\\Models\\User'),
(2, 39, 'App\\Models\\User'),
(2, 42, 'App\\Models\\User'),
(2, 43, 'App\\Models\\User'),
(2, 44, 'App\\Models\\User'),
(2, 45, 'App\\Models\\User'),
(2, 46, 'App\\Models\\User'),
(2, 47, 'App\\Models\\User'),
(2, 48, 'App\\Models\\User'),
(2, 49, 'App\\Models\\User'),
(2, 50, 'App\\Models\\User'),
(2, 51, 'App\\Models\\User'),
(2, 52, 'App\\Models\\User'),
(2, 53, 'App\\Models\\User'),
(2, 54, 'App\\Models\\User'),
(2, 55, 'App\\Models\\User');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_naissance` date NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `checkouts`
--
ALTER TABLE `checkouts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `paniers`
--
ALTER TABLE `paniers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paniers_user_id_foreign` (`user_id`),
  ADD KEY `paniers_product_id_foreign` (`product_id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Index pour la table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Index pour la table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_categorie_id_foreign` (`categorie_id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Index pour la table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `checkouts`
--
ALTER TABLE `checkouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `paniers`
--
ALTER TABLE `paniers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
