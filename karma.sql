-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 22 2021 г., 18:36
-- Версия сервера: 5.7.33
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `karma`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pice` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_top` int(1) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_slide` int(1) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `pice`, `description`, `is_top`, `image`, `is_slide`, `status`) VALUES
(20, 'Nike', 800, ' This is Nike', 1, '_img_61499cf9b3e0c.jpg', 1, 1),
(21, 'Nike 1', 800, ' This is Nike 1', 1, '_img_61499cfc2d234.jpg', 1, 1),
(22, 'Addidas', 660, ' Hello my name is addidas', 0, '_img_61499eb0cbcce.jpg', 1, 1),
(23, 'Bickimberg', 300, ' Hello World', 1, '_img_61499ff9bfa34.jpg', 1, 1),
(24, 'Stefano Richi', 500, ' Hello Stefano How are you', 0, '_img_6149a064b3060.jpg', 0, 0),
(25, 'EA7 Armani', 990, ' Armnay is Gorgie ', 1, '_img_6149a0d2aca4d.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product_user`
--

CREATE TABLE `product_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_count` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product_user`
--

INSERT INTO `product_user` (`id`, `user_id`, `product_count`, `product_id`, `status`, `date`) VALUES
(363, 34, 2, 3, 1, '2021-09-17 17:08:04'),
(364, 34, 2, 4, 1, '2021-09-17 17:08:04'),
(365, 34, 2, 14, 2, '2021-09-17 17:08:04'),
(366, 34, 2, 13, 2, '2021-09-17 17:08:04'),
(367, 34, 2, 7, 1, '2021-09-17 17:08:04'),
(368, 34, 2, 3, 3, '2021-09-17 17:11:27'),
(369, 34, 2, 4, 1, '2021-09-17 17:11:27'),
(370, 34, 2, 14, 3, '2021-09-17 17:11:27'),
(371, 34, 2, 13, 2, '2021-09-17 17:11:27'),
(372, 34, 2, 7, 2, '2021-09-17 17:11:27'),
(373, 36, 1, 3, 1, '2021-09-17 17:50:35'),
(374, 36, 1, 14, 3, '2021-09-17 17:50:35'),
(375, 36, 1, 13, 1, '2021-09-17 17:50:35'),
(376, 36, 1, 4, 2, '2021-09-17 17:50:35'),
(409, 34, 2, 3, 1, '2001-11-11 10:15:14'),
(410, 34, 4, 2, 4, '2021-09-21 10:57:55'),
(411, 34, 4, 8, 4, '2021-09-21 10:57:55'),
(412, 34, 4, 3, 4, '2021-09-21 10:57:55'),
(413, 34, 4, 2, 4, '2021-09-21 10:57:57'),
(414, 34, 4, 8, 4, '2021-09-21 10:57:57'),
(415, 34, 4, 3, 4, '2021-09-21 10:57:57'),
(416, 34, 4, 2, 4, '2021-09-21 10:57:58'),
(417, 34, 4, 8, 4, '2021-09-21 10:57:58'),
(418, 34, 4, 3, 4, '2021-09-21 10:57:58');

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`status_id`, `status`) VALUES
(1, 'delete'),
(2, 'set'),
(3, 'get'),
(4, 'spasel');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `user_name`, `login`, `password`) VALUES
(34, 'Anahit', 'ana123', '$2y$10$Tmub6EgNB.dymnpllgylpeoWLfUHb.CKhRUYlVy0X657x3qdXrsaa'),
(35, 'Admin', 'tigo123', ' $2y$10$tsbYzLRCj3Vc8L7fTccieuJvJiwz1RXj4IlstO1CBtduADw9kH/UC'),
(36, 'Valiko', 'valiko123', ' $2y$10$Bz6h85IieZal6Kwc5qsA1e1c9.FQtJrYXu35AWeN.ji6v6gsoHPWe');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_user`
--
ALTER TABLE `product_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `status` (`status`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `product_user`
--
ALTER TABLE `product_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=419;

--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `product_user`
--
ALTER TABLE `product_user`
  ADD CONSTRAINT `product_user_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `product_user_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `product_user_ibfk_3` FOREIGN KEY (`status`) REFERENCES `status` (`status_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
