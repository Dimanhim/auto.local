-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 01 2019 г., 18:10
-- Версия сервера: 5.6.38
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
-- База данных: `test-auto`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ad`
--

CREATE TABLE `ad` (
  `id` int(11) NOT NULL,
  `car` varchar(255) NOT NULL,
  `model` int(11) DEFAULT NULL,
  `mileage` int(11) DEFAULT NULL,
  `equipment` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ad`
--

INSERT INTO `ad` (`id`, `car`, `model`, `mileage`, `equipment`, `price`, `phone`) VALUES
(1, '1', 1, 35000, '1,2,4,5,', 1370000, '+7 (888) 888-8888'),
(2, '1', 2, 120000, '4,5,6,', 270000, '+7 (777) 777-7777'),
(3, '1', 3, 44000, '1,2,3,4,6,', 1750000, '+7 (999) 999-9999'),
(4, '1', 4, 24000, '3,4,5,6,', 1820000, '+7 (555) 555-5555'),
(5, '2', 5, 110000, '1,2,4,5,', 530000, '+7 (333) 333-3333'),
(6, '2', 6, 130000, '1,2,3,', 450000, '+7 (333) 333-3333'),
(7, '2', 7, 35000, '3,4,5,', 790000, '+7 (555) 555-5555');

-- --------------------------------------------------------

--
-- Структура таблицы `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `car` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cars`
--

INSERT INTO `cars` (`id`, `car`) VALUES
(1, 'Mitsubishi'),
(2, 'Опель'),
(3, 'Mersedes'),
(4, 'BMW'),
(5, 'Lada');

-- --------------------------------------------------------

--
-- Структура таблицы `equipment`
--

CREATE TABLE `equipment` (
  `id` int(11) NOT NULL,
  `equipment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `equipment`
--

INSERT INTO `equipment` (`id`, `equipment`) VALUES
(1, 'ABS'),
(2, 'Break assist'),
(3, 'EBD'),
(4, 'ESP'),
(5, 'Датчик дождя'),
(6, 'Парктроник');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ad` int(11) NOT NULL,
  `bs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `name`, `ad`, `bs`) VALUES
(20, 'image-1-1-small.jpg', 1, 1),
(21, 'image-1-1-large.jpg', 1, 2),
(22, 'image-2-1-small.jpg', 1, 1),
(23, 'image-2-1-large.jpg', 1, 2),
(24, 'image-3-1-small.jpg', 1, 1),
(25, 'image-3-1-large.jpg', 1, 2),
(26, 'image-1-2-small.jpg', 2, 1),
(27, 'image-1-2-large.jpg', 2, 2),
(28, 'image-2-2-small.jpg', 2, 1),
(29, 'image-2-2-large.jpg', 2, 2),
(30, 'image-3-2-small.jpg', 2, 1),
(31, 'image-3-2-large.jpg', 2, 2),
(32, 'image-1-3-small.jpg', 3, 1),
(33, 'image-1-3-large.jpg', 3, 2),
(34, 'image-2-3-small.jpg', 3, 1),
(35, 'image-2-3-large.jpg', 3, 2),
(36, 'image-3-3-small.webp', 3, 1),
(37, 'image-3-3-large.webp', 3, 2),
(38, 'image-1-4-small.jpg', 4, 1),
(39, 'image-1-4-large.jpg', 4, 2),
(40, 'image-2-4-small.jpg', 4, 1),
(41, 'image-2-4-large.jpg', 4, 2),
(42, 'image-3-4-small.jpg', 4, 1),
(43, 'image-3-4-large.jpg', 4, 2),
(44, 'image-1-5-small.jpg', 5, 1),
(45, 'image-1-5-large.jpg', 5, 2),
(46, 'image-2-5-small.jpg', 5, 1),
(47, 'image-2-5-large.jpg', 5, 2),
(48, 'image-3-5-small.jpg', 5, 1),
(49, 'image-3-5-large.jpg', 5, 2),
(50, 'image-1-6-small.jpg', 6, 1),
(51, 'image-1-6-large.jpg', 6, 2),
(52, 'image-2-6-small.jpeg', 6, 1),
(53, 'image-2-6-large.jpeg', 6, 2),
(54, 'image-3-6-small.jpg', 6, 1),
(55, 'image-3-6-large.jpg', 6, 2),
(56, 'image-1-7-small.jpg', 7, 1),
(57, 'image-1-7-large.jpg', 7, 2),
(58, 'image-2-7-small.jpg', 7, 1),
(59, 'image-2-7-large.jpg', 7, 2),
(60, 'image-3-7-small.jpg', 7, 1),
(61, 'image-3-7-large.jpg', 7, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `models`
--

CREATE TABLE `models` (
  `id` int(11) NOT NULL,
  `model` varchar(255) NOT NULL,
  `car` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `models`
--

INSERT INTO `models` (`id`, `model`, `car`) VALUES
(1, 'Pagero', 1),
(2, 'Lancer', 1),
(3, 'Outlander', 1),
(4, 'Eclipse', 1),
(5, 'Astra', 2),
(6, 'Corsa', 2),
(7, 'Insignia', 2),
(8, 'S-класс', 3),
(9, 'E-класс', 3),
(10, 'C-класс', 3),
(11, 'X5', 4),
(12, 'X6', 4),
(13, 'X1', 4),
(14, 'X3', 4),
(15, 'M5', 4),
(16, 'Priora', 5),
(17, 'Kalina', 5),
(18, 'Granta', 5),
(19, 'X-Ray', 5);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `ad`
--
ALTER TABLE `ad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT для таблицы `models`
--
ALTER TABLE `models`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
