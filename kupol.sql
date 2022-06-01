-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 01 2022 г., 21:38
-- Версия сервера: 8.0.29
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `kupol`
--

-- --------------------------------------------------------

--
-- Структура таблицы `nowosti`
--

CREATE TABLE `nowosti` (
  `id` int NOT NULL,
  `pictur` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Nazv` varchar(25) NOT NULL,
  `Opis` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `nowosti`
--

INSERT INTO `nowosti` (`id`, `pictur`, `Nazv`, `Opis`, `Date`) VALUES
(6, 'https://www.trn-news.ru/Ru/Upload/Image/http--alcoonline.ru-uploads-b7391a5a6370486ecb71a25be33.jpg', 'Путин подписал', 'Путин поставил подпись', '2022-05-26'),
(7, 'https://sun9-43.userapi.com/s/v1/ig1/-t5k9w3XyuEH7Ar8bxrA_YcU346p_qewHspxYrypqgVyud8LBvBMKfmjhTGj0e8MHfR6GJi3.jpg?size=532x511&quality=96&type=album', 'Вывели новый вид овечек', 'Ученые вывели новый вид овец, они похожи на...', '2022-05-28');

-- --------------------------------------------------------

--
-- Структура таблицы `service`
--

CREATE TABLE `service` (
  `id` int NOT NULL,
  `Sname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Sinfo` varchar(100) NOT NULL,
  `Scost` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `service`
--

INSERT INTO `service` (`id`, `Sname`, `Sinfo`, `Scost`) VALUES
(4, 'Установка труб', 'Установим трубы любых размеров в квартиры/частные участки', '2000-10000 руб.'),
(6, 'Замена труб', 'Заменим трубы в любом месте', '5000 руб.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `nowosti`
--
ALTER TABLE `nowosti`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `nowosti`
--
ALTER TABLE `nowosti`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `service`
--
ALTER TABLE `service`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
