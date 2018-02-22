-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 21 2018 г., 17:47
-- Версия сервера: 5.7.20
-- Версия PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published` tinyint(1) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `published`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Спорт', 'sport-1519024803', 1, NULL, '2018-02-19 05:20:06', '2018-02-19 05:20:06'),
(2, 'Программирование', 'programmirovanie-1519024825', 1, NULL, '2018-02-19 05:20:26', '2018-02-19 05:20:26'),
(3, 'Java', 'java-1519024841', NULL, NULL, '2018-02-19 05:20:43', '2018-02-19 05:21:04'),
(4, 'php', 'php-1519024852', 1, NULL, '2018-02-19 05:20:55', '2018-02-19 05:20:55');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_id` int(11) NOT NULL,
  `commentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `text`, `commentable_id`, `commentable_type`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '<p>#1 Реал Бетис - Реал Мадрид - 3:5. Обзор матча. 18.02 eidt</p>', 1, 'App\\Post', 1, '2018-02-19 22:00:00', '2018-02-20 15:46:52'),
(2, '#2\r\nРеал Бетис - Реал Мадрид - 3:5. Обзор матча. 18.02', 1, 'App\\Post', 17, '2018-02-19 22:00:00', '2018-02-19 22:00:00'),
(3, 'yes yes yes yes yes ye ssss', 1, 'App\\Post', 4, '2018-02-20 17:14:25', '2018-02-21 08:14:53'),
(4, 'япарапраапрарапр', 1, 'App\\Post', 4, '2018-02-20 17:15:38', '2018-02-20 17:15:38'),
(5, 'вапвапрапр', 2, 'App\\Post', 4, '2018-02-20 17:16:07', '2018-02-20 17:16:07'),
(6, 'Я коммент до поста 2', 2, 'App\\Post', 4, '2018-02-20 17:17:48', '2018-02-20 17:17:48'),
(7, 'fghfghh', 3, 'App\\Post', 4, '2018-02-20 17:24:33', '2018-02-20 17:24:33'),
(8, 'dddd', 1, 'App\\Post', 4, '2018-02-20 17:27:26', '2018-02-20 17:27:26'),
(9, 'xcvxcv', 1, 'App\\Post', 4, '2018-02-20 17:27:50', '2018-02-20 17:27:50'),
(10, 'dfgdfgdfg', 1, 'App\\Post', 4, '2018-02-20 17:29:47', '2018-02-20 17:29:47'),
(11, 'вап', 4, 'App\\Post', 4, '2018-02-21 05:50:59', '2018-02-21 05:50:59'),
(12, 'еррп', 5, 'App\\Post', 4, '2018-02-21 05:52:43', '2018-02-21 05:52:43');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_02_08_180117_create_categories_table', 1),
(4, '2018_02_09_002117_create_posts_table', 1),
(5, '2018_02_09_003233_create_tags_table', 1),
(6, '2018_02_12_033151_create_tagable_table', 1),
(7, '2018_02_14_072001_create_comments_table', 1),
(8, '2018_02_16_094543_add_video_to_posts', 1),
(9, '2018_02_19_061631_create_roles_table', 1),
(10, '2018_02_19_061855_create_role_user_table', 1);

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
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_short` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `published` tinyint(1) DEFAULT NULL,
  `publication_date` datetime DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `description_short`, `description`, `published`, `publication_date`, `category_id`, `user_id`, `created_at`, `updated_at`, `video`) VALUES
(1, 'Реал Бетис - Реал Мадрид - 3:5. Обзор матча. 18.02.2018', 'real-betis-real-madrid-35-obzor-ma-1519025008', '<p>Безусловно, еще не успели остыть воспоминания болельщиков мадридского &laquo;Реала&raquo; о феерической победе над ПСЖ в рамках 1/8 финала Лиги Чемпионов, которая была датирована минувшей средой. Однако необходимо переходить к менее приятной теме &mdash; ситуация в чемпионате оставляет желать лучшего. Но вот соперник для восстановления былых кондиций календарем был уготовлен не из &laquo;проходных&raquo; &mdash; севильский &laquo;Бетис&raquo;, извечный обидчик грандов испанского футбола, не нуждается в дополнительном представлении.</p>', '<p>Безусловно, еще не успели остыть воспоминания болельщиков мадридского &laquo;Реала&raquo; о феерической победе над ПСЖ в рамках 1/8 финала Лиги Чемпионов, которая была датирована минувшей средой. Однако необходимо переходить к менее приятной теме &mdash; ситуация в чемпионате оставляет желать лучшего. Но вот соперник для восстановления былых кондиций календарем был уготовлен не из &laquo;проходных&raquo; &mdash; севильский &laquo;Бетис&raquo;, извечный обидчик грандов испанского футбола, не нуждается в дополнительном представлении. А, учитывая выездной, для &laquo;сливочных&raquo;, статус поединка, так и вовсе &mdash; становится не по себе их поклонникам. Вдобавок, стартовый состав &laquo;Реала&raquo; претерпел значительные изменения. Зидан решил отказаться от креативной оси полузащиты Кроос&mdash;Модрич, в пользу пары Ковачич&mdash;Каземиро, перестроив, тем самым, игровую схему под 4-4-2, и изрядно потеряв в созидательной части атак.</p>\r\n\r\n<p>И, все же, первый тайм начался довольно &laquo;легко и непринужденно&raquo; для &laquo;Мадрида&raquo;. Буквально со стартовых минут стало понятно &mdash; гол не заставит себя долго ждать. Уж слишком усердно принялись игроки королевского клуба наседать на ворота соперника. Отсюда и точный удар головой Асенсио уже на 11-ой минуте не выглядел чем-то сверхъестественным. И тут была допущена грубейшая ошибка &mdash; подопечные Зидана умудрились полностью отдать инициативу сопернику. А большего, как покажет время, и не надо для Хоакина и партнеров. Голы Эсса Манди и Жуниора полностью перевернули ситуацию на футбольном поле &mdash; &laquo;Реал&raquo; был вынужден защищаться, причем, удавалось это, порой, с колоссальными усилиями. Однако больше пропускать в первом тайме &laquo;сливочные&raquo; не были намерены.</p>\r\n\r\n<p>Беседа с тренером в перерыве явно пошла на пользу гостям. Асенсио просто блестяще отыграл поединок &mdash; помимо гола в первой половине, перспективному полузащитнику удалось поучаствовать в эпизоде, приведшему к угловому, с которого забил Серхио Рамос, а, в дальнейшем, повторно отличиться взятием ворот Адана. Очередной гол от Криштиану, казалось, снял все вопросы о победителе еще задолго до финального свистка, но игроки &laquo;Бетиса&raquo; нашли в себе силы и, усилиями Серхио Леона, отквитали один мяч.</p>\r\n\r\n<p>3:4 и 5 минут игрового времени &mdash; именно столько было в распоряжении у команды Кике Сетьена, но, в этом поединке чуда не произошло и гол вышедшего на замену Бензема, развенчал все интриги касательно исхода поединка.</p>\r\n\r\n<p>Очередные три очка мадридского &laquo;Реала&raquo; позволяют им не отставать от каталонской &laquo;Барселоны&raquo; в чемпионской гонке. Однако &laquo;цена&raquo; этих баллов увеличена травмой Марсело, который, похоже, получил повреждение задней поверхности бедра. О состоянии здоровья бразильца будет сообщено дополнительно.</p>\r\n\r\n<p><br />\r\n<strong>Чемпионат Испании.&nbsp; 24-й тур.<br />\r\n<br />\r\n&laquo;Реал Бетис&raquo; - &laquo;Реал Мадрид&raquo; - 3:5</strong></p>\r\n\r\n<p><img src=\"http://football.sport.ua/images/g.gif\" />&nbsp;Эсса Манди, 34, Жуниор Фирпо, 38, Серхио Леон, 85 - Марко Асенсио, 10, Серхио Рамос, 51, Марко Асенсио, 59, Криштиану Роналду, 66, Карим Бензема, 90+2</p>\r\n\r\n<p><strong>&laquo;Реал Бетис&raquo;</strong>: Антонио Адан, Антонио Барраган, Жуниор Фирпо, Марк Бартра, Эсса Манди, Рияд Будебуз (Кристиан Тельо, 83), Фабиан Руис, Хорди Амат (Хави Гарсия, 76), Хоакин, Лорен Морон, Андрес Гуардадо (Серхио Леон, 82)</p>\r\n\r\n<p><strong>&laquo;Реал Мадрид&raquo;</strong>: Кейлор Навас, Даниэль Карвахаль, Начо Фернандес, Серхио Рамос, Марсело (Тео Эрнандес, 30), Гарет Бэйл (Иско, 73), Каземиро, Лукас Васкес, Марко Асенсио, Матео Ковачич, Криштиану Роналду (Карим Бензема, 89)</p>\r\n\r\n<p><img src=\"http://football.sport.ua/images/y.gif\" />&nbsp;Жуниор Фирпо, 49. Антонио Барраган, 44. Лорен Морон, 60. - Даниэль Карвахаль, 5. Матео Ковачич, 46. Серхио Рамос, 54. Гарет Бэйл, 57. Каземиро, 81.</p>', 1, NULL, 1, 4, '2018-02-19 05:24:16', '2018-02-19 05:24:16', NULL),
(2, 'ОИ-2018. Допинг-проба Б керлингиста из России будет вскрыта сегодня', 'oi-2018-doping-proba-b-kerlingista-iz-r-1519025223', '<p>19 февраля, будет вскрыта проба Б российского керлингиста Александра Крушельницкого. Вскрытие пройдет в аккредитованной Всемирным антидопинговым агентством (ВАДА) лаборатории в Сеуле, так как в самом Пхенчхане, где проходят Олимпийские игры, антидопинговой лаборатории нет.</p>', '<p>19 февраля, будет вскрыта проба Б российского керлингиста Александра Крушельницкого. Вскрытие пройдет в аккредитованной Всемирным антидопинговым агентством (ВАДА) лаборатории в Сеуле, так как в самом Пхенчхане, где проходят Олимпийские игры, антидопинговой лаборатории нет. Все пробы, взятые у участников Олимпиады, собираются и транспортируются в Сеул.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Напомним, в пробе А Крушельницкого были обнаружены следы запрещенного препарата мельдония. Спортсмен выиграл бронзовую награду Игр в дабл-миксте вместе со своей супругой Анастасией Брызгаловой.</p>', 1, NULL, 1, 4, '2018-02-19 05:27:19', '2018-02-19 05:27:19', NULL),
(3, 'Php', 'php-1519154325', '<p>hphp</p>', '<p>hphphph</p>', 1, NULL, 4, 4, '2018-02-20 17:18:56', '2018-02-20 17:18:56', NULL),
(4, 'Заголовок поста:', 'zagolovok-posta-1519199194', 'Полное описание:', 'Краткое Описание', 1, NULL, 2, 4, '2018-02-21 05:47:38', '2018-02-21 05:47:38', 'xdmHT1igQeQ'),
(5, 'Программирование пост', 'programmirovanie-post-1519199514', '<p>Краткое описание: Программирование пост 3</p>', '<p>Полное описание: Программирование пост 3</p>', 1, NULL, 1, 4, '2018-02-21 05:52:18', '2018-02-21 08:10:58', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'user', 'Зарегистрированный пользователь', '2018-02-19 05:13:20', '2018-02-19 05:13:20'),
(2, 'admin', 'Администратор сайта', '2018-02-19 05:13:20', '2018-02-19 05:13:20');

-- --------------------------------------------------------

--
-- Структура таблицы `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(4, 2, 4),
(5, 1, 5),
(6, 1, 17),
(7, 1, 18);

-- --------------------------------------------------------

--
-- Структура таблицы `tagables`
--

CREATE TABLE `tagables` (
  `tag_id` int(11) NOT NULL,
  `tagable_id` int(11) NOT NULL,
  `tagable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tagables`
--

INSERT INTO `tagables` (`tag_id`, `tagable_id`, `tagable_type`) VALUES
(1, 2, 'App\\Post'),
(1, 1, 'App\\Post'),
(2, 1, 'App\\Post');

-- --------------------------------------------------------

--
-- Структура таблицы `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tags`
--

INSERT INTO `tags` (`id`, `title`, `slug`, `published`, `created_at`, `updated_at`) VALUES
(1, 'Спорт', 'sport-1519024774', '1', '2018-02-19 05:19:37', '2018-02-19 05:19:37'),
(2, 'Футбо', 'futbol-1519039487', '1', '2018-02-19 09:24:56', '2018-02-19 09:24:56');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Employee Name', 'employee@example.com', '$2y$10$g9KN2Hwu6YZUAEs0EQ0YeOkgleCs2rchTMz5pu658/RQUQS5uGEUy', NULL, '2018-02-19 05:13:20', '2018-02-19 05:13:20'),
(2, 'Manager Name', 'manager@example.com', '$2y$10$ywDDf/jH2vYCjd9JjIihUe/T3MSBtXnWy0SYY2JdXid.YwQc5w4eC', NULL, '2018-02-19 05:13:21', '2018-02-19 05:13:21'),
(4, 'admin', 'admin@gmail.com', '$2y$10$3v/TmirsK8LBglc./oMAhuD155vzV0LH.7NEPLL9Ggo/2u8Fjt3Z.', 'nkKeozjBap4PLyEwhwLeSwfjlzaYIVXKn9sYasglUdJWgOozIPk8zEG8AJli', '2018-02-19 05:18:34', '2018-02-19 05:18:34'),
(5, 'user', 'user@gmai.com', '$2y$10$TVTgloH58Gc9N7cJmEEkAOqCAQzfqcMmbSTdT2IVZiKMZqeDZewFO', 'j1METTrvGdo71vfOe0yMKxf0VDG8CuLijecgA1Qc4ohiDRGPrZ3U1d1pfUhe', '2018-02-19 06:34:00', '2018-02-19 06:34:00'),
(17, 'admin', 'sdgdfg@fsdf', '$2y$10$HSe3VITzHWxHbM9Mjdg0jeZDBHelA1yZII95cHS7YyvlVonv1.oZ6', NULL, '2018-02-19 08:51:01', '2018-02-19 08:51:01'),
(18, 'darova123', 'darova123@gmail.com', '$2y$10$64wtNxFOtdCwuX5xvvgb.urr2zSz/baBBSDXWQqc4hDUvKfih8Wb.', 'ive1dx2egpPFZ3AT0G17AZLagsem6L9pwKVfSTrKrKvqk3S578Tu4GWgMwWI', '2018-02-20 15:26:32', '2018-02-20 15:26:32');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_slug_unique` (`slug`);

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
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
