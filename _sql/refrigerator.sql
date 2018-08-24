-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Авг 24 2018 г., 21:35
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `refrigerator`
--

-- --------------------------------------------------------

--
-- Структура таблицы `refrigerator`
--

CREATE TABLE IF NOT EXISTS `refrigerator` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `datebuy` date NOT NULL,
  `datemake` date NOT NULL,
  `datelimit` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=102 ;

--
-- Дамп данных таблицы `refrigerator`
--

INSERT INTO `refrigerator` (`id`, `name`, `datebuy`, `datemake`, `datelimit`) VALUES
(71, 'name1', '2018-08-24', '2018-08-21', '2018-08-23'),
(73, 'name2', '2018-08-24', '2018-08-21', '2018-08-31'),
(96, 'name3', '2018-08-24', '2018-08-20', '2018-08-28'),
(97, 'name4', '2018-08-24', '2018-08-12', '2018-08-24'),
(98, 'name5', '2018-08-24', '2018-08-12', '2018-08-31'),
(99, 'name6', '2018-08-24', '2018-08-01', '2018-08-31'),
(100, 'name7', '2018-08-24', '2018-08-01', '2018-09-03'),
(101, 'name8', '2018-08-12', '2018-08-11', '2018-08-22');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
