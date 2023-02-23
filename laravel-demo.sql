-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 22 2021 г., 15:26
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laravel-demo`
--
CREATE DATABASE IF NOT EXISTS `laravel-demo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `laravel-demo`;

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `user_id`, `title`, `excerpt`, `body`, `created_at`, `updated_at`) VALUES
(1, 1, 'Новость о том, что подключение через GitHub работает !', 'Проверка подключения через GitHub для тестового проекта.', 'Прекрасно работает система подключения через аккаунт GitHub !!', '2021-03-22 09:40:32', '2021-03-22 09:40:32'),
(2, 1, 'Подключение через Facebook также работает !', 'Проверка подключения через Facebook успешна !', 'Работает система подключения через соцсеть Facebook !', '2021-03-22 09:42:04', '2021-03-22 09:42:04'),
(3, 1, 'Теперь можно входить в приложение и через Google !', 'Удобно !', 'Работает система авторизации через Google аккаунт.', '2021-03-22 09:43:14', '2021-03-22 09:43:14'),
(4, 1, 'Можно войти и через аккаунт в Twitter !', 'Работает !', 'А что - так тоже можно было ! ;-)', '2021-03-22 09:44:10', '2021-03-22 09:44:10');

-- --------------------------------------------------------

--
-- Структура таблицы `article_tag`
--

CREATE TABLE `article_tag` (
  `id` bigint UNSIGNED NOT NULL,
  `article_id` bigint UNSIGNED NOT NULL,
  `tag_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `article_tag`
--

INSERT INTO `article_tag` (`id`, `article_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2021-03-22 09:40:32', '2021-03-22 09:40:32'),
(2, 1, 2, '2021-03-22 09:40:32', '2021-03-22 09:40:32'),
(3, 1, 4, '2021-03-22 09:40:32', '2021-03-22 09:40:32'),
(4, 2, 1, '2021-03-22 09:42:04', '2021-03-22 09:42:04'),
(5, 2, 2, '2021-03-22 09:42:04', '2021-03-22 09:42:04'),
(6, 2, 3, '2021-03-22 09:42:04', '2021-03-22 09:42:04'),
(7, 2, 4, '2021-03-22 09:42:04', '2021-03-22 09:42:04'),
(8, 3, 1, '2021-03-22 09:43:15', '2021-03-22 09:43:15'),
(9, 3, 2, '2021-03-22 09:43:15', '2021-03-22 09:43:15'),
(10, 3, 3, '2021-03-22 09:43:15', '2021-03-22 09:43:15'),
(11, 4, 1, '2021-03-22 09:44:10', '2021-03-22 09:44:10'),
(12, 4, 3, '2021-03-22 09:44:10', '2021-03-22 09:44:10'),
(13, 4, 4, '2021-03-22 09:44:10', '2021-03-22 09:44:10');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
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
-- Структура таблицы `forms`
--

CREATE TABLE `forms` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_02_10_153900_create_articles_table', 1),
(5, '2021_02_17_122130_create_tags_table', 1),
(6, '2021_02_25_125031_create_forms_table', 1),
(7, '2021_02_27_103416_create_request_forms_table', 1),
(8, '2021_03_22_143709_create_news_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pubDate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `link`, `guid`, `description`, `pubDate`, `created_at`, `updated_at`) VALUES
(1, 'Apple оштрафовали на $2 млн в Бразилии за продажу смартфонов без зарядного устройства', 'https://yandex.ru/news/story/Apple_oshtrafovali_na$2_mln_vBrazilii_zaprodazhu_smartfonov_bezzaryadnogo_ustrojstva--46f36c00bc6e1d66bc7aa7b966f51e6a?lang=ru&from=rss&wan=1&stid=emxTpFSFmjiRaQVI2T4b', 'https://yandex.ru/news/story/Apple_oshtrafovali_na$2_mln_vBrazilii_zaprodazhu_smartfonov_bezzaryadnogo_ustrojstva--46f36c00bc6e1d66bc7aa7b966f51e6a?lang=ru&from=rss&wan=1&stid=emxTpFSFmjiRaQVI2T4b', 'Американскую компанию Apple обязали заплатить штраф 10,5 млн реалов после расследования Procon-SP по защите прав потребителей за продажу iPhone 12 без зарядного устройства В Бразилии за продажу iPhone 12 без зарядных устройств компанию Apple оштрафовали почти на 2 млн долларов.', '21 Mar 2021 08:38:29 +0000', '2021-03-22 12:15:32', '2021-03-22 12:15:32'),
(2, 'Запуск новой операционной системы Windows 10X откладывается', 'https://yandex.ru/news/story/Zapusk_novoj_operacionnoj_sistemy_Windows_10X_otkladyvaetsya--7f32a48b2f7e84b573cc24f20555f24f?lang=ru&from=rss&wan=1&stid=QN5yqash9Y3w', 'https://yandex.ru/news/story/Zapusk_novoj_operacionnoj_sistemy_Windows_10X_otkladyvaetsya--7f32a48b2f7e84b573cc24f20555f24f?lang=ru&from=rss&wan=1&stid=QN5yqash9Y3w', 'Как стало известно из компетентных источников, в Microsoft решили задержать выпуск новой операционной системы Windows 10X. Теперь специалисты утверждают, что ее нужно ожидать не ранее второй половины текущего года.', '19 Mar 2021 17:04:00 +0000', '2021-03-22 12:16:03', '2021-03-22 12:16:03'),
(4, 'Корпорация Microsoft отозвала срочное обновление ОС Windows 10', 'https://yandex.ru/news/story/Korporaciya_Microsoft_otozvala_srochnoe_obnovlenie_OS_Windows_10--ad1aefb26f9221da5ea14e098c37abeb?lang=ru&from=rss&wan=1&stid=6nTXn6hX8MjcckQj7JwO', 'https://yandex.ru/news/story/Korporaciya_Microsoft_otozvala_srochnoe_obnovlenie_OS_Windows_10--ad1aefb26f9221da5ea14e098c37abeb?lang=ru&from=rss&wan=1&stid=6nTXn6hX8MjcckQj7JwO', 'Американская компания Microsoft без объяснения причин резко прекратила распространение недавнего внепланового опционального накопительного обновления для ОС Windows 10. Стоит отметить, что это уже второй срочный апдейт за прошедшую неделю.', '21 Mar 2021 13:39:28 +0000', '2021-03-22 12:17:31', '2021-03-22 12:17:31');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `request_forms`
--

CREATE TABLE `request_forms` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requested` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `tags`
--

CREATE TABLE `tags` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Laravel', '2021-03-22 09:30:42', '2021-03-22 09:30:43'),
(2, 'PHP', '2021-03-22 09:30:50', '2021-03-22 09:30:51'),
(3, 'News', '2021-03-22 09:30:59', '2021-03-22 09:31:00'),
(4, 'Education', '2021-03-22 09:31:17', '2021-03-22 09:31:17');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `access_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `avatar`, `provider`, `provider_id`, `access_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Alexey', 'alexey@mail.ru', NULL, '', 'https://avatars.githubusercontent.com/u/64591234?v=4', 'github', '64591234', 'cd989457d91d23e376ef068a411680a7c1234567', 'uNReal0fu8kXEVDWNcfsg6pfx7kLErD7Uj9wSPtqOmhge9Q3bSX8tMeltESt', '2021-03-22 09:38:26', '2021-03-22 09:38:26'),
(2, 'Ivan', 'ivan@mail.ru', NULL, '$2y$10$ijZ4iS.BvusuF81uGDGta.zZ/S065EQ3VY00odmBl/rDSoObl.fqm', NULL, NULL, NULL, NULL, NULL, '2021-03-22 12:17:15', '2021-03-22 12:17:15');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `article_tag`
--
ALTER TABLE `article_tag`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `article_tag_article_id_tag_id_unique` (`article_id`,`tag_id`),
  ADD KEY `article_tag_tag_id_foreign` (`tag_id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_title_unique` (`title`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `request_forms`
--
ALTER TABLE `request_forms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `request_forms_email_unique` (`email`);

--
-- Индексы таблицы `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `article_tag`
--
ALTER TABLE `article_tag`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `forms`
--
ALTER TABLE `forms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `request_forms`
--
ALTER TABLE `request_forms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Ограничения внешнего ключа таблицы `article_tag`
--
ALTER TABLE `article_tag`
  ADD CONSTRAINT `article_tag_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `article_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
