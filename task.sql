-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 10 2017 г., 15:58
-- Версия сервера: 10.1.24-MariaDB
-- Версия PHP: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `task_manager`
--

-- --------------------------------------------------------

--
-- Структура таблицы `task`
--

CREATE TABLE `task` (
  `ID` int(4) NOT NULL COMMENT 'ID',
  `Title` char(50) NOT NULL COMMENT 'Title',
  `Priority` char(10) NOT NULL COMMENT 'Priority',
  `State` char(10) NOT NULL COMMENT 'State',
  `Deadline` date NOT NULL COMMENT 'Deadline'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `task`
--

INSERT INTO `task` (`ID`, `Title`, `Priority`, `State`, `Deadline`) VALUES
(69, 'Составление технического задания', 'Высокий', 'Новое', '2017-07-11'),
(70, 'Создание макета сайта', 'Средний', 'Новое', '2017-07-15'),
(71, 'Верстка макета', 'Средний', 'Новое', '2017-07-22'),
(72, ' Backend', 'Низкий', 'Новое', '2017-07-27'),
(73, 'Тестирование', 'Низкий', 'Новое', '2017-07-30'),
(74, 'SEO', 'Низкий', 'Новое', '2017-08-10');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `task`
--
ALTER TABLE `task`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=75;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
