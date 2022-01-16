
INSERT INTO categories VALUES
(1, 'Economie', 'vide', '2021-05-31 02:04:14', '2021-05-31 13:48:07'),
(2, 'Math/Physique', 'vide', '2021-05-31 02:04:32', '2021-05-31 02:04:32'),
(3, 'Informatique', 'vide', '2021-05-31 02:04:45', '2021-05-31 02:04:45'),
(4, 'Littérature', 'vide', '2021-05-31 02:05:20', '2021-05-31 02:05:20');

INSERT INTO checkouts  VALUES
(1, 37, 'Ori Mosley', 'nuhebyh@mailinator.com', 'Judith Ware', 'Cumque dolore at qui', '999', 'Lorem rerum expedita', '12', 'Aute Nam eos non si', '36773', '1994', 'Deserunt dolor recus', 'OUI', '2021-06-14 20:38:12', '2021-06-14 20:53:00'),
(2, 37, 'Edward Ortega', 'cowuvap@mailinator.com', 'Xandra Lindsay', 'Qui et sint dolor er', '398', 'Animi eu et sit re', '3', 'Eum exercitationem q', '40306', '1988', 'Placeat irure recus', 'NON', '2021-06-14 21:09:08', '2021-06-14 21:09:08');

--
-- Dumping data for table migrations
--

INSERT INTO migrations VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(13, '2014_10_12_000000_create_users_table', 4),
(17, '2021_06_01_161312_laratrust_setup_tables', 7),
(23, '2021_05_19_235739_create_categories_table', 8),
(24, '2021_05_19_224320_create_products_table', 9),
(25, '2021_06_03_102440_create_paniers_table', 10),
(27, '2022_01_11_205056_create_categories_table', 0),
(28, '2022_01_11_205056_create_checkouts_table', 0),
(29, '2022_01_11_205056_create_failed_jobs_table', 0),
(30, '2022_01_11_205056_create_paniers_table', 0),
(31, '2022_01_11_205056_create_password_resets_table', 0),
(32, '2022_01_11_205056_create_permission_role_table', 0),
(33, '2022_01_11_205056_create_permission_user_table', 0),
(34, '2022_01_11_205056_create_permissions_table', 0),
(35, '2022_01_11_205056_create_products_table', 0),
(36, '2022_01_11_205056_create_role_user_table', 0),
(37, '2022_01_11_205056_create_roles_table', 0),
(38, '2022_01_11_205056_create_users_table', 0),
(39, '2022_01_11_211200_create_categories_table', 0),
(40, '2022_01_11_211200_create_checkouts_table', 0),
(41, '2022_01_11_211200_create_failed_jobs_table', 0),
(42, '2022_01_11_211200_create_paniers_table', 0),
(43, '2022_01_11_211200_create_password_resets_table', 0),
(44, '2022_01_11_211200_create_permission_role_table', 0),
(45, '2022_01_11_211200_create_permission_user_table', 0),
(46, '2022_01_11_211200_create_permissions_table', 0),
(47, '2022_01_11_211200_create_products_table', 0),
(48, '2022_01_11_211200_create_role_user_table', 0),
(49, '2022_01_11_211200_create_roles_table', 0),
(50, '2022_01_11_211200_create_users_table', 0);

--
-- Dumping data for table paniers
--

INSERT INTO paniers VALUES
(37, 37, 4, 2, 80.00, '2021-06-13 16:29:52', '2021-06-13 16:29:52'),
(39, 38, 4, 4, 160.00, '2021-06-14 18:38:04', '2021-06-14 20:13:29');

--
-- Dumping data for table password_resets
--

INSERT INTO password_resets  VALUES
('xiragynev@mailinator.com', '$2y$10$PTIbjS76KsCy9OAfeWcQVeSMsbQOue2noHMB9lw6C0aEiLJompR.K', '2021-06-08 12:37:56'),
('misekuhoh@mailinator.com', '$2y$10$pdyDFuY.hytel.Mq82M5Q.d6n9V/WXXjzkXu3tdDQu93K29ey1Iwa', '2021-06-13 04:58:14'),
('faysalmour98@gmail.com', '$2y$10$8iEHmheJ3ftGjr/eyvREA.ov4GIkdOtvaYVnpdkCBgS66v7FZhy0m', '2021-06-13 15:14:53');

--
-- Dumping data for table permissions
--

INSERT INTO permissions  VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2021-06-01 15:30:55', '2021-06-01 15:30:55'),
(2, 'users-read', 'Read Users', 'Read Users', '2021-06-01 15:30:55', '2021-06-01 15:30:55'),
(3, 'users-update', 'Update Users', 'Update Users', '2021-06-01 15:30:55', '2021-06-01 15:30:55'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2021-06-01 15:30:55', '2021-06-01 15:30:55'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2021-06-01 15:30:55', '2021-06-01 15:30:55'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2021-06-01 15:30:55', '2021-06-01 15:30:55'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2021-06-01 15:30:55', '2021-06-01 15:30:55'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2021-06-01 15:30:55', '2021-06-01 15:30:55'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2021-06-01 15:30:55', '2021-06-01 15:30:55'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2021-06-01 15:30:55', '2021-06-01 15:30:55'),
(11, 'module_1_name-create', 'Create Module_1_name', 'Create Module_1_name', '2021-06-01 15:30:56', '2021-06-01 15:30:56'),
(12, 'module_1_name-read', 'Read Module_1_name', 'Read Module_1_name', '2021-06-01 15:30:56', '2021-06-01 15:30:56'),
(13, 'module_1_name-update', 'Update Module_1_name', 'Update Module_1_name', '2021-06-01 15:30:56', '2021-06-01 15:30:56'),
(14, 'module_1_name-delete', 'Delete Module_1_name', 'Delete Module_1_name', '2021-06-01 15:30:56', '2021-06-01 15:30:56');

--
-- Dumping data for table permission_role
--

INSERT INTO permission_role VALUES
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

--
-- Dumping data for table products
--

INSERT INTO products  VALUES
(1, 1, 'A Brief History of Time', '100', 'book2.jpg', 'MAD', 'Une brève histoire du temps : Du big bang aux trous noirs est un ouvrage de vulgarisation scientifique qui traite de cosmologie, la science des lois qui gouvernent l’univers', 'vide', 'oui', '2021-05-30 16:18:16', '2021-05-30 16:18:16'),
(2, 1, 'Basic Economics: A Commoon Sense Guide to the Economy', '140', 'book6.jpg', 'MAD', 'citizen's guide to economics-for those who want to understand how the economy works but have no interest in jargon or equations. Sowell reveals the general principles behind any kind of economy-capitalist, socialist, feudal', 'vide', 'vide', '2021-05-30 16:20:44', '2021-05-30 16:22:53'),
(3, 3, 'Eloquent JavaScript', '100', 'book4.jpg', 'MAD', 'vide', 'vide', 'oui', '2021-05-27 12:08:24', '2021-05-27 12:08:24'),
(4, 2, 'Everything you need to age Math in one big fat notebook', '40', 'book3.jpg', 'MAD', 'vide', 'vide', 'oui', '2021-05-30 16:17:24', '2021-05-30 16:17:24'),
(5, 3, 'Java: A Beginner’s', '35', 'java.jpg', 'MAD', 'vide', 'vide', 'oui', '2021-05-27 12:06:57', '2021-05-27 12:06:57'),
(6, 4, 'On Pre-Islamic poetry', '120', 'book5.jpg', 'MAD', ' is a book of literary criticism published in 1926 by the Egyptian author Taha Hussein. In it, Hussein argued that some pre-Islamic poetry was inauthentic, and cast doubt on the authenticity of the Quran. The book\'s publication caused a major literary controversy in Egypt.', 'vide', 'oui', '2021-05-30 16:19:43', '2021-05-30 16:19:43'),
(7, 4, 'On the House: A Washington Memoir', '20', 'book1.jpg', 'MAD', 'vide', 'vide', 'oui', '2021-05-30 16:18:59', '2021-05-30 16:18:59'),
(8, 1, 'Père riche Père pauvre', '40', 'pere.jpg', 'MAD', 'vide', 'vide', 'oui', '2021-05-30 16:15:59', '2021-05-30 16:15:59'),
(9, 3, 'PHP and MySQL for Dynamic Web Sites', '140', 'php.jpg', 'MAD', 'When it comes to creating dynamic, database-driven Web sites, the PHP language and MySQL database offer a winning combination -- and with PHP 7, web professionals can achieve dramatic performance improvements. Combine these great open source technologies with Larry Ullman\'s PHP and MySQL for Dynamic Web Sites: Visual QuickPro Guide, Fifth Edition, and there\'s no limit to the powerful, interactive Web sites you can create.', 'vide', 'vide', '2021-05-27 12:05:46', '2021-06-02 20:52:03'),
(10, 3, 'Python Crash Course', '0', 'Python_Crash_Course.jpg', 'MAD', 'vide', 'vide', 'non', '2021-05-27 12:09:12', '2021-05-27 12:09:12'),
(11, 3, 'The linux command line', '40', 'linux.jpg', 'MAD', 'vide', 'vide', 'oui', '2021-05-27 12:07:42', '2021-05-27 12:07:42');

--
-- Dumping data for table roles
--

INSERT INTO roles  VALUES
(1, 'superadministrator', 'Superadministrator', 'Superadministrator', '2021-06-01 15:30:55', '2021-06-01 15:30:55'),
(2, 'administrator', 'Administrator', 'Administrator', '2021-06-01 15:30:56', '2021-06-01 15:30:56'),
(3, 'user', 'User', 'User', '2021-06-01 15:30:56', '2021-06-01 15:30:56');

--
-- Dumping data for table role_user
--

INSERT INTO role_user  VALUES
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
COMMIT;