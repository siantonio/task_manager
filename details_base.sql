-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 19 2017 г., 10:05
-- Версия сервера: 5.5.50
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `details_base`
--

-- --------------------------------------------------------

--
-- Структура таблицы `components_tab`
--

CREATE TABLE IF NOT EXISTS `components_tab` (
  `com_id` int(11) NOT NULL,
  `inv_number` int(11) NOT NULL,
  `motherboard` varchar(60) NOT NULL,
  `ram` int(11) NOT NULL,
  `video` varchar(60) NOT NULL,
  `cpu` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `components_tab`
--

INSERT INTO `components_tab` (`com_id`, `inv_number`, `motherboard`, `ram`, `video`, `cpu`) VALUES
(35, 1231, 'Razer 205', 23, 'GeForce 1872FX', 'Intel Inside'),
(36, 12313, 'MotherBoard', 512, 'GeForce 1872FX', 'Intel Inside'),
(37, 12313, 'MotherBoard', 512, 'GeForce 1872FX', 'Intel Inside'),
(38, 12313, 'MotherBoard', 512, 'GeForce 1872FX', 'Intel Inside');

-- --------------------------------------------------------

--
-- Структура таблицы `hdd_tab`
--

CREATE TABLE IF NOT EXISTS `hdd_tab` (
  `hdd_id` int(11) NOT NULL,
  `com_id` int(11) NOT NULL,
  `hdd` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `hdd_tab`
--

INSERT INTO `hdd_tab` (`hdd_id`, `com_id`, `hdd`) VALUES
(35, 35, 'Seagate 1TB'),
(36, 36, 'Seagate 3GB'),
(37, 37, 'Seagate 3GB'),
(38, 38, 'Seagate 3GB');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `components_tab`
--
ALTER TABLE `components_tab`
  ADD PRIMARY KEY (`com_id`);

--
-- Индексы таблицы `hdd_tab`
--
ALTER TABLE `hdd_tab`
  ADD PRIMARY KEY (`hdd_id`),
  ADD KEY `com_id` (`com_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `components_tab`
--
ALTER TABLE `components_tab`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT для таблицы `hdd_tab`
--
ALTER TABLE `hdd_tab`
  MODIFY `hdd_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `hdd_tab`
--
ALTER TABLE `hdd_tab`
  ADD CONSTRAINT `hdd_tab_ibfk_1` FOREIGN KEY (`com_id`) REFERENCES `components_tab` (`com_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
