-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 06 2021 г., 15:32
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
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int NOT NULL,
  `session_id` text NOT NULL,
  `goods_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id`, `session_id`, `goods_id`) VALUES
(9, 'e8l0vbimil48i23jaafa94rl65oi02be', 2),
(10, 'e8l0vbimil48i23jaafa94rl65oi02be', 2),
(11, 'e8l0vbimil48i23jaafa94rl65oi02be', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `feedback`) VALUES
(1, 'Admin', 'Все хорошо'),
(2, 'Гость', 'Куку'),
(3, 'Admin', '123'),
(4, '1', '1'),
(5, 'Коля', 'Новое сообщение'),
(6, '2', '2'),
(7, '123', '123'),
(8, '2', '3'),
(9, 'Вася', 'Крутой сайт!'),
(10, 'Евгения Арестова', '123');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lyke` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `lyke`) VALUES
(1, '01.jpg', 2),
(2, '02.jpg', 5),
(3, '03.jpg', 3),
(4, '04.jpg', 2),
(5, '05.jpg', 2),
(6, '06.jpg', 1),
(7, '07.jpg', 5),
(8, '08.jpg', 1),
(9, '09.jpg', 7),
(10, '10.jpg', 3),
(11, '11.jpg', 1),
(12, '12.jpg', 8),
(13, '13.jpg', 1),
(14, '14.jpg', 1),
(15, '15.jpg', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `price` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `price`, `description`) VALUES
(1, 'Чай', '22', 'Цейлонский'),
(2, 'Пицца', '23', 'Свежая'),
(3, 'Банан', '41', 'Заморский');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `prev` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `prev`, `text`) VALUES
(1, 'Посол России рассказал о реакции Госдепа на статью Путина', 'МОСКВА, 20 июн — РИА Новости. Посол России в США Анатолий Антонов сообщил, что в Госдепартаменте заинтересовались предложением Москвы относительно саммита \"ядерной пятерки\", которое было изложено президентом Владимиром Путиным в его статье, приуроченной к 75-летию окончания Второй мировой войны.\r\nПо его словам, посольство подключилось к тиражированию статьи: ее направили в Госдеп, ведущие неправительственные организации, посольства стран Западной Европы и СНГ.\r\n\"Публикация вызвала значительный интерес\", — сказал Антонов в онлайн-интервью.'),
(5, 'Бабарико предъявлено обвинение', 'Мы сегодня были у Виктора Дмитриевича, нас вызывали на процессуальные действия, по факту ему предъявлено обвинение. Статьи называть мне нельзя. Могу сказать, что Виктор Дмитриевич намерен принципиально отстаивать свою правоту, убеждения и честное имя\", — сказал Лаевский.\r\nОн также отметил, что защита обжаловала задержание Бабарико, но пока суд по этому поводу не состоялся. \"И защита настаивает на невиновности Виктора Дмитриевича\", — сказал собеседник агентства.');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `hash` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `hash`) VALUES
(1, 'admin', '$2y$10$MRa6SD6fTbLDi9.OZqeG1eNPPbG7QBtsplowb7zEpTiqjmLZGEHb2', '656834131601e84dd5cc170.34288771');

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
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
