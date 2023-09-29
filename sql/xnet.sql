-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 29-09-2023 a las 23:44:30
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `xnet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `departments`
--

INSERT INTO `departments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Atención al cliente', '2023-09-30 01:19:12', '2023-09-30 01:19:12'),
(2, 'Recursos Humanos', '2023-09-30 01:19:12', '2023-09-30 01:19:12'),
(3, 'Comercial', '2023-09-30 01:19:13', '2023-09-30 01:19:13'),
(4, 'Limpieza', '2023-09-30 01:19:13', '2023-09-30 01:19:13'),
(5, 'Planta de reciclaje', '2023-09-30 01:19:13', '2023-09-30 01:19:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_09_26_183626_create_roles_table', 1),
(7, '2023_09_26_184705_create_permissions_table', 1),
(8, '2023_09_26_184808_create_permission_role_table', 1),
(9, '2023_09_26_184955_add_role_id_to_users_table', 1),
(10, '2023_09_26_202452_create_departments_table', 1),
(11, '2023_09_26_203250_add_department_id_to_users_table', 1),
(12, '2023_09_27_124144_create_notes_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notes`
--

CREATE TABLE `notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(3000) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_company` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `observation` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `saved_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `reactivated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `notes`
--

INSERT INTO `notes` (`id`, `user_id`, `department_id`, `description`, `customer_name`, `customer_company`, `customer_phone`, `status`, `observation`, `created_at`, `updated_at`, `saved_at`, `deleted_at`, `reactivated_at`) VALUES
(1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quis porttitor lorem. Mauris efficitur purus sed tortor iaculis, vitae vehicula libero molestie. Etiam lacinia vitae turpis ut sollicitudin', 'Mario Curtis', 'company random', '555 5555', 'pending', NULL, '2023-09-30 01:19:14', '2023-09-30 01:19:14', NULL, NULL, NULL),
(2, 1, 5, 'Donec gravida, neque et euismod semper, magna arcu dictum tortor,', 'Peter Parker', 'le carbusiere', '555 5555', 'process', 'Necesitamos cambios', '2023-09-30 01:19:14', '2023-09-30 01:19:14', '2023-09-30 01:19:14', NULL, NULL),
(3, 1, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quis porttitor lorem. Mauris efficitur purus sed tortor iaculis, vitae vehicula libero molestie. Etiam lacinia vitae turpis ut sollicitudin', 'Magnus Gregorius', 'Scholl Xm', '555 5555', 'finish', NULL, '2023-09-30 01:19:14', '2023-09-30 01:19:14', NULL, NULL, NULL),
(4, 1, 4, 'Donec gravida, neque et euismod semper, magna arcu dictum tortor,', 'Amy  Sun', 'Petite Cat', '555 5555', 'pending', NULL, '2023-09-30 01:19:14', '2023-09-30 01:19:14', NULL, '2023-09-30 01:19:14', NULL),
(5, 2, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quis porttitor lorem. Mauris efficitur purus sed tortor iaculis, vitae vehicula libero molestie. Etiam lacinia vitae turpis ut sollicitudin', 'Maria Tejo', 'company premiere', '555 5555', 'pending', NULL, '2023-09-30 01:19:14', '2023-09-30 01:19:14', NULL, NULL, NULL),
(6, 2, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quis porttitor lorem. Mauris efficitur purus sed tortor iaculis, vitae vehicula libero molestie. Etiam lacinia vitae turpis ut sollicitudin', 'Pedro Skull', 'El Paso', '555 5555', 'pending', NULL, '2023-09-30 01:19:14', '2023-09-30 01:19:14', NULL, NULL, NULL),
(7, 2, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quis porttitor lorem. Mauris efficitur purus sed tortor iaculis, vitae vehicula libero molestie. Etiam lacinia vitae turpis ut sollicitudin', 'Elon Musk', 'Tesla', '555 5555', 'pending', NULL, '2023-09-30 01:19:14', '2023-09-30 01:19:14', NULL, NULL, NULL),
(8, 2, 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quis porttitor lorem. Mauris efficitur purus sed tortor iaculis, vitae vehicula libero molestie. Etiam lacinia vitae turpis ut sollicitudin', 'Mark Suckerber', 'FB', '555 5555', 'pending', NULL, '2023-09-30 01:19:14', '2023-09-30 01:19:14', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'view-notes', '2023-09-30 01:19:12', '2023-09-30 01:19:12'),
(2, 'create-notes', '2023-09-30 01:19:12', '2023-09-30 01:19:12'),
(3, 'update-notes', '2023-09-30 01:19:12', '2023-09-30 01:19:12'),
(4, 'delete-notes', '2023-09-30 01:19:12', '2023-09-30 01:19:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 3),
(3, 3),
(4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
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
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Jefe', '2023-09-30 01:19:12', '2023-09-30 01:19:12'),
(2, 'Responsable de equipo', '2023-09-30 01:19:12', '2023-09-30 01:19:12'),
(3, 'Empleado', '2023-09-30 01:19:12', '2023-09-30 01:19:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`, `department_id`) VALUES
(1, 'user', 'user@xnet.com', NULL, '$2y$10$Kjv/rQTXTdESHIGINFidYehlKSi.v/dm4pOxOd41g3eBbqQDrquvG', NULL, '2023-09-30 01:19:13', '2023-09-30 01:19:13', 3, 1),
(2, 'jefe atc', 'jefeatc@xnet.com', NULL, '$2y$10$AaqQQqH3T7eODdHQ17Gd4ecQc7pJubkYimqvZvU69aexc4FLo3fMa', NULL, '2023-09-30 01:19:13', '2023-09-30 01:19:13', 1, 1),
(3, 'responsable atc', 'respatc@xnet.com', NULL, '$2y$10$CZFt9QtKq5aPyuKcUFdHyeJFHI3lsjyu76gXCZfmQdcJPSBcXm63K', NULL, '2023-09-30 01:19:13', '2023-09-30 01:19:13', 2, 1),
(4, 'user2', 'user2@xnet.com', NULL, '$2y$10$46h.y6Njz7nF/8PPNHp7Ue6oB7Z.yxsE00rfwkjnSw70NnlSjLnGO', NULL, '2023-09-30 01:19:14', '2023-09-30 01:19:14', 3, 3),
(5, 'jefe comercial', 'jefecomercial@xnet.com', NULL, '$2y$10$Ve270m2U2VZnJBNgNKiRgO.KwvTR5earc1D546FQhif7HF9.J55se', NULL, '2023-09-30 01:19:14', '2023-09-30 01:19:14', 1, 3),
(6, 'responsable comercial', 'respcomercial@xnet.com', NULL, '$2y$10$VpJUPgeYo7vijUlK3LU1WeY23NBSAAOkd/YfXxG8BA/QIs35yQ2C2', NULL, '2023-09-30 01:19:14', '2023-09-30 01:19:14', 2, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notes_user_id_foreign` (`user_id`),
  ADD KEY `notes_department_id_foreign` (`department_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`),
  ADD KEY `users_department_id_foreign` (`department_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `notes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`),
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
