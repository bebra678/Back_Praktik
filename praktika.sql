-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 01 2023 г., 22:05
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `praktika`
--

-- --------------------------------------------------------

--
-- Структура таблицы `disciplines`
--

CREATE TABLE `disciplines` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `disciplines`
--

INSERT INTO `disciplines` (`id`, `name`) VALUES
(1, 'Дисциплина 1'),
(2, 'Дисциплина 2\r\n'),
(3, 'Дисциплина 3');

-- --------------------------------------------------------

--
-- Структура таблицы `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `second_name` varchar(255) NOT NULL,
  `sex` text NOT NULL,
  `date` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `id_subdivision` int(11) DEFAULT NULL,
  `id_position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `name`, `second_name`, `sex`, `date`, `address`, `id_subdivision`, `id_position`) VALUES
(1, 'Невский', 'Даниил', 'Алексеевич', 'Мужской', '2004-02-26', 'Улица Пушкина 25', 1, 1),
(2, 'Иванов', 'Михаил', 'Иванович', 'Мужской', '2004-01-20', 'Ленина 23', 2, 2),
(3, 'Ахметов', 'Рома', 'Рустамович', 'Мужской', '2004-03-25', 'Колотушкина 15', 2, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `emp_dis`
--

CREATE TABLE `emp_dis` (
  `id` int(11) NOT NULL,
  `id_emp` int(11) NOT NULL,
  `id_dis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `emp_dis`
--

INSERT INTO `emp_dis` (`id`, `id_emp`, `id_dis`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 2, 2),
(5, 3, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `pod_dis`
--

CREATE TABLE `pod_dis` (
  `id` int(11) NOT NULL,
  `id_pod` int(11) NOT NULL,
  `id_dis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `pod_dis`
--

INSERT INTO `pod_dis` (`id`, `id_pod`, `id_dis`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `positions`
--

INSERT INTO `positions` (`id`, `name`) VALUES
(1, 'Директор'),
(2, 'Бухгалтер');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `text`) VALUES
(1, 'Пост', 'Текст поста'),
(2, 'Пост 2', 'Текст поста');

-- --------------------------------------------------------

--
-- Структура таблицы `subdivisions`
--

CREATE TABLE `subdivisions` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `type_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `subdivisions`
--

INSERT INTO `subdivisions` (`id`, `name`, `type_id`) VALUES
(1, 'Администрация', 1),
(2, 'Преподавательский состав', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `type_subdivisions`
--

CREATE TABLE `type_subdivisions` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `type_subdivisions`
--

INSERT INTO `type_subdivisions` (`id`, `name`) VALUES
(1, 'Вид 1'),
(2, 'Вид 2\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `password`, `role`) VALUES
(1, 'test1', 'test1', '123321', 'user'),
(2, 'Admin', 'admin', 'c8837b23ff8aaa8a2dde915473ce0991', '2'),
(3, 'test2', 'test2', 'c8837b23ff8aaa8a2dde915473ce0991', '0');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `disciplines`
--
ALTER TABLE `disciplines`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_subdivision` (`id_subdivision`);

--
-- Индексы таблицы `emp_dis`
--
ALTER TABLE `emp_dis`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pod_dis`
--
ALTER TABLE `pod_dis`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subdivisions`
--
ALTER TABLE `subdivisions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_id` (`type_id`);

--
-- Индексы таблицы `type_subdivisions`
--
ALTER TABLE `type_subdivisions`
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
-- AUTO_INCREMENT для таблицы `disciplines`
--
ALTER TABLE `disciplines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `emp_dis`
--
ALTER TABLE `emp_dis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `pod_dis`
--
ALTER TABLE `pod_dis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `subdivisions`
--
ALTER TABLE `subdivisions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `type_subdivisions`
--
ALTER TABLE `type_subdivisions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`id_subdivision`) REFERENCES `subdivisions` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `subdivisions`
--
ALTER TABLE `subdivisions`
  ADD CONSTRAINT `subdivisions_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `type_subdivisions` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
