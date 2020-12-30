-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 30 2020 г., 21:01
-- Версия сервера: 10.4.14-MariaDB
-- Версия PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `whitelist`
--

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `BookID` int(11) NOT NULL,
  `Author` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Genre` varchar(30) CHARACTER SET utf8 NOT NULL,
  `Amount` int(20) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`BookID`, `Author`, `Title`, `Genre`, `Amount`, `Date`) VALUES
(30, 'Александр Пушкин', 'Евгений Онегин', 'Роман', 5, '2020-12-12'),
(32, 'Лев Толстой', 'Война и Мир', 'Роман', 3, '2020-12-29'),
(39, 'Эрих Ремарк', 'Триумфальная арка', 'Роман', 3, '2020-12-30'),
(40, 'Стивен Кинг', 'Оно', 'Ужасы Роман', 2, '2020-12-12'),
(41, 'Джек Лондон', 'Морской волк', 'Роман', 3, '2021-02-12'),
(42, 'Шарлотта Бронте', 'Джейн Эйр', 'Роман', 2, '2020-12-12'),
(43, 'Рэй Брэдбери', 'Вино из одуванчиков', 'Повесть', 1, '2021-02-12'),
(44, 'Харуки Мураками', 'Норвежский лес', 'Роман', 2, '2020-12-30'),
(45, 'Федор Достоевский', 'Преступление и наказание', 'Роман', 2, '2021-03-18'),
(46, 'Маргарет Митчелл', 'Унесенные ветром', 'Роман', 4, '2021-02-23'),
(47, 'Павел Санаев', 'Похороните меня за плинтусом', 'Автобиография Повесть', 1, '2020-12-29'),
(48, 'Владислав Шпильман', 'Пианист', 'Биография', 1, '2021-02-23'),
(49, 'Стивен Кинг', 'Ловец снов', 'Роман Ужасы', 2, '2020-12-30');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `book_id`, `body`) VALUES
(39, 40, 'Подарочное издание '),
(40, 40, 'Журнальные страницы '),
(41, 40, 'Твердый переплет'),
(42, 40, 'Золотое тиснение '),
(43, 40, 'Бархатный форзац '),
(44, 40, 'Ширина корешка - 50 см'),
(45, 40, 'Формат - 142х90'),
(46, 40, 'Наличие иллюстраций'),
(47, 40, 'Супер обложка '),
(48, 40, 'Оригинальный текст'),
(57, 40, 'От издательства Абракадабра');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`BookID`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `BookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`BookID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
