-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Апр 25 2021 г., 19:50
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
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `session_id` varchar(65) NOT NULL,
  `goods_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id`, `session_id`, `goods_id`) VALUES
(12, 'aks39tedubbtvlpn5dqt5ed4n41v9q9j', 1),
(13, 'aks39tedubbtvlpn5dqt5ed4n41v9q9j', 2),
(16, 'minbfcnb15e1524qlnm3s2vej66k8acr', 1),
(17, 'minbfcnb15e1524qlnm3s2vej66k8acr', 2),
(18, 'minbfcnb15e1524qlnm3s2vej66k8acr', 3),
(19, '64c8b11jpkr98tpii0rvs3qghe87es53', 4),
(20, 'sbairkfnui7sn03dietu2fge8noh37vg', 2),
(21, 'sbairkfnui7sn03dietu2fge8noh37vg', 3),
(22, 'sbairkfnui7sn03dietu2fge8noh37vg', 2),
(23, 'sbairkfnui7sn03dietu2fge8noh37vg', 2),
(25, '11c91r1s8nncmucch5emmb7cgv7va355', 1),
(28, '11c91r1s8nncmucch5emmb7cgv7va355', 1),
(29, '11c91r1s8nncmucch5emmb7cgv7va355', 2),
(30, '11c91r1s8nncmucch5emmb7cgv7va355', 3),
(31, 'idvn9m31aqbj57v99ip6af3cbh2l23o1', 1),
(32, 'idvn9m31aqbj57v99ip6af3cbh2l23o1', 1),
(33, 'idvn9m31aqbj57v99ip6af3cbh2l23o1', 3),
(34, 'cg2p59h2i0ebesiok4q9is1guk2ig27t', 1),
(35, 'cg2p59h2i0ebesiok4q9is1guk2ig27t', 2),
(36, 'cg2p59h2i0ebesiok4q9is1guk2ig27t', 2),
(37, 'cg2p59h2i0ebesiok4q9is1guk2ig27t', 3),
(38, 'htcqi4gj5d8s3lpo6ij209n5a13av0s5', 1),
(39, 'htcqi4gj5d8s3lpo6ij209n5a13av0s5', 1),
(40, 'htcqi4gj5d8s3lpo6ij209n5a13av0s5', 1),
(41, 'htcqi4gj5d8s3lpo6ij209n5a13av0s5', 1),
(42, '6l1m9o8nr7he0mmj54jlp44ud177ltdo', 1),
(43, '6l1m9o8nr7he0mmj54jlp44ud177ltdo', 1),
(44, '8mmq0j52ajts10b5qtuibt6sng9hugn3', 1),
(45, '8mmq0j52ajts10b5qtuibt6sng9hugn3', 1),
(46, '7blvvogdi9jhau81co584poneje8nsi7', 1),
(47, '7blvvogdi9jhau81co584poneje8nsi7', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(33) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `text`) VALUES
(1, 'Артем', 'Ваш магазин обладает наилучшими товарами!'),
(5, 'Василий', 'Вы обладаете наилучшими качествами!'),
(22, 'Петруччо', 'Мне ничего не понравилось');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `description` text NOT NULL,
  `price` int(19) NOT NULL,
  `likes` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `description`, `price`, `likes`) VALUES
(1, 'Карандаш', 'Простой карандаш, подходит для написания текста и рисования', 30, 12),
(2, 'Ручка', 'Яркая синяя ручка', 100, 5),
(3, 'Бумага а4', 'Белая качественная бумага формата А4', 279, 6);

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
(2, '02.jpg', 0, 13),
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
(42, '24.jpg', 248649, 5),
(43, '25.jpg', 77204, 0),
(44, '26.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `session_id` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `session_id`, `status`) VALUES
(4, '221', '121221', 'aks39tedubbtvlpn5dqt5ed4n41v9q9j', 0),
(5, 'Две ручки', '2345234', 'aks39tedubbtvlpn5dqt5ed4n41v9q9j', 0),
(6, 'Иван', '8-914-234-22-12', 'minbfcnb15e1524qlnm3s2vej66k8acr', 0),
(10, '111', '222', '11c91r1s8nncmucch5emmb7cgv7va355', 0),
(11, '1111', '3333', 'idvn9m31aqbj57v99ip6af3cbh2l23o1', 0),
(12, '55', '5555', 'cg2p59h2i0ebesiok4q9is1guk2ig27t', 0),
(15, '123123', '222', '6l1m9o8nr7he0mmj54jlp44ud177ltdo', 0),
(16, '77', '777', '8mmq0j52ajts10b5qtuibt6sng9hugn3', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `login` varchar(65) NOT NULL,
  `pass` varchar(65) NOT NULL,
  `hash` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `pass`, `hash`) VALUES
(1, 'admin', 'admin', '$2y$10$H/XR6XfkXRaEZxGQEmNTvuGy22goDr1PvrKLZ2L4ThBJRvdUxQ7CG', '108731117360856d2a9350b2.63062791');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
