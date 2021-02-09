-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Фев 09 2021 г., 18:35
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `site`
--

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `title` varchar(25) NOT NULL,
  `size` int(22) NOT NULL DEFAULT '0',
  `views` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `title`, `size`, `views`) VALUES
(1, '01.jpg', 0, 0),
(2, '02.jpg', 0, 10),
(3, '03.jpg', 0, 1),
(4, '04.jpg', 2, 0),
(5, '05.jpg', 0, 0),
(6, '06.jpg', 0, 3),
(7, '07.jpg', 0, 0),
(8, '08.jpg', 0, 1),
(9, '09.jpg', 0, 0),
(10, '10.jpg', 0, 0),
(11, '11.jpg', 0, 0),
(12, '12.jpg', 0, 0),
(13, '13.jpg', 0, 1),
(14, '14.jpg', 0, 4),
(15, '15.jpg', 0, 5),
(16, '16.jpg', 0, 1),
(17, '17.jpg', 0, 0),
(18, '18.jpg', 0, 1),
(19, '19.jpg', 0, 0),
(20, '20.jpg', 0, 1),
(21, '21.jpg', 0, 3),
(22, '22.jpg', 0, 0),
(33, '23.jpg', 0, 0),
(42, '24.jpg', 248649, 4);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
