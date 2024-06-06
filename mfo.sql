-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 06 2024 г., 19:08
-- Версия сервера: 10.8.4-MariaDB
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mfo`
--

-- --------------------------------------------------------

--
-- Структура таблицы `click_id`
--

CREATE TABLE `click_id` (
  `id` int(11) NOT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offer_id` int(11) NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` int(11) NOT NULL,
  `uniq` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `click_id`
--

INSERT INTO `click_id` (`id`, `source`, `offer_id`, `ip`, `time`, `uniq`) VALUES
(20, 'domashniy-computer', 1, '127.0.0.1', 1717677840, 1),
(21, 'domashniy-computer', 2, '127.0.0.1', 1717677850, 1),
(22, 'domashniy-computer', 1, '127.0.0.1', 1717677855, 0),
(23, 'domashniy-computer', 2, '127.0.0.1', 1717677859, 0),
(24, 'domashniy-computer', 4, '127.0.0.1', 1717686862, 1),
(25, 'domashniy-computer', 2, '127.0.0.1', 1717688299, 0),
(26, 'domashniy-computer', 1, '127.0.0.1', 1717688303, 0),
(27, 'domashniy-computer', 4, '127.0.0.1', 1717688305, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `offers`
--

INSERT INTO `offers` (`id`, `img`, `url`, `name`) VALUES
(1, 'webzaim.svg', 'https://webzaim.ru', 'webzaim'),
(2, 'webBankir.svg', 'https://webbankir.ru', 'webbankir'),
(4, 'turbozaim.svg', 'https://turbozaim.ru/', 'turbozaim'),
(12, 'srochnodengi.svg', 'https://srochnodengi.ru/', 'srochnodengi');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `click_id`
--
ALTER TABLE `click_id`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `click_id`
--
ALTER TABLE `click_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
