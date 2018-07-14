-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Июл 14 2018 г., 17:11
-- Версия сервера: 5.5.53
-- Версия PHP: 7.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pyShop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `note_title` varchar(50) NOT NULL,
  `note_body` text NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `notes`
--

INSERT INTO `notes` (`id`, `user_id`, `note_title`, `note_body`, `creation_date`) VALUES
(4, 4, 'Тестовая заметка', 'tetst', '2018-07-13 20:52:58'),
(5, 5, 'test for user', 'test for user', '2018-06-13 20:57:15'),
(6, 5, 'Новая заметка', 'Какая-то новая заметка', '2018-07-14 11:59:13'),
(7, 4, 'Тестовая заметка2', 'Тестовая заметка2', '2018-07-14 12:02:10'),
(9, 4, 'Тестовая заметка 3', 'какая-то новая запись', '2018-07-14 13:45:11'),
(10, 4, 'Заметка 4', 'новая заметка', '2018-07-14 13:45:27'),
(11, 5, 'Новая заметка пользователя', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt elementum semper. Fusce et risus augue. Integer sit amet odio vel odio feugiat suscipit. Fusce varius magna a tellus pellentesque, eget rhoncus dolor rutrum. Ut enim quam, volutpat sagittis ultricies in, volutpat quis metus. Fusce accumsan sollicitudin porttitor. Sed laoreet mauris a magna lacinia, ut posuere ex faucibus. Aenean id facilisis turpis, in sollicitudin eros.', '2018-07-14 13:49:58'),
(12, 5, 'glkdsflsdfds', 'fgdfgdf', '2018-07-14 13:52:50'),
(13, 5, 'Заметка после отладки AJAX', 'Заметка после отладки AJAX', '2018-07-14 17:09:26');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_login` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `user_login`, `user_pass`) VALUES
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(5, 'user', 'ee11cbb19052e40b07aac0ca060c23ee');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `notes`
--
ALTER TABLE `notes`
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
-- AUTO_INCREMENT для таблицы `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
