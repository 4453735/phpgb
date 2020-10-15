-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 08 2020 г., 21:35
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `news`
--

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `feedback`) VALUES
(1, 'admin', 'Все ок'),
(2, 'Пользователь', 'Привет'),
(3, '112', '1123'),
(4, 'Кто то ', 'Привет'),
(5, 'admin', 'Забаню');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `text`) VALUES
(1, 'Опубликованы детали разговора Путина и Клинтона о гибели подлодки \"Курск\"', 'МОСКВА, 5 окт — РИА Новости. Цифровая библиотека Билла Клинтона рассекретила стенограммы бесед экс-президента США с Владимиром Путиным, одна из которых касалась катастрофы подводной лодки \"Курск\" в августе 2000 года.\r\nВстреча лидеров двух стран состоялась 6 сентября 2000 года в президентском номере нью-йоркской гостиницы Waldorf Astoria.\r\nВ начале беседы Клинтон выразил соболезнования в связи с гибелью \"Курска\", а Путин признал, что у него не было хорошего варианта в сложившейся ситуации.'),
(2, 'ОЗХО направит в Россию экспертов для расследования по делу Навального', 'МОСКВА, 5 окт — РИА Новости. Организация по запрещению химического оружия (ОЗХО) готова предоставить России группу экспертов для расследования инцидента с Алексеем Навальным.\r\nСоответствующее обращение из Москвы поступило 1 октября.\r\n\"Второго октября генеральный директор ОЗХО Фернандо Ариас ответил на этот запрос письмом на имя постоянного представителя России при ОЗХО. Он заверил <...>, что технический секретариат готов предоставить запрашиваемую экспертизу и что группа экспертов может быть размещена в короткие сроки\", — сказано в сообщении.\r\nОтмечается, что гендиректор попросил российскую сторону дать дополнительные разъяснения относительно типа запрашиваемой экспертизы, а также поблагодарил за доверие.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
