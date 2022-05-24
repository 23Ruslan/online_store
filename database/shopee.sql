-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 22 2022 г., 17:42
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shopee`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `item_id`) VALUES
(45, 1, 13);

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 NOT NULL,
  `telephone` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `city`, `telephone`, `email`) VALUES
(1, 'Minsk2', '+99911', '12345@mail.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Asus', 'Asus ZenBook 14', 1572.00, './assets/products/1.png', '2022-05-13 06:16:50'),
(2, 'Lenovo', 'Lenovo ThinkBook 14-IIL', 1222.00, './assets/products/2.png', '2022-05-13 06:16:50'),
(3, 'Lenovo', 'Lenovo Yoga Slim 7', 1212.00, './assets/products/3.png', '2022-05-13 06:16:50'),
(4, 'Lenovo', 'Lenovo ThinkPad E15 Gen 3', 1922.00, './assets/products/4.png', '2022-05-13 06:16:50'),
(5, 'Lenovo', 'Lenovo ThinkPad X1', 1242.00, './assets/products/5.png', '2022-05-13 06:16:50'),
(6, 'Lenovo', 'Lenovo V15-ADA', 1022.00, './assets/products/6.png', '2022-05-13 06:16:50'),
(7, 'Lenovo', 'Lenovo IdeaPad 3 15ADA05', 1562.00, './assets/products/8.png', '2022-05-13 06:16:50'),
(8, 'Lenovo', 'Lenovo Legion 5 Pro', 1282.00, './assets/products/10.png', '2022-05-13 06:16:50'),
(9, 'Asus', 'Asus ZenBook 13', 1522.00, './assets/products/11.png', '2022-05-13 06:16:50'),
(10, 'Asus', 'Asus ExpertBook B9', 1952.00, './assets/products/12.png', '2022-05-13 06:16:50'),
(11, 'Dell', 'Dell G15 5511-378511', 1532.00, './assets/products/13.png', '2022-05-13 06:16:50'),
(12, 'Dell', 'Dell Vostro 15', 1152.00, './assets/products/14.png', '2022-05-13 06:16:50'),
(13, 'Dell', 'Dell Alienware m15 R5', 1000.00, './assets/products/15.png', '2022-05-13 06:16:50');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'Daily', 'Tuition', '2020-03-28 13:07:17'),
(2, 'Akshay', 'Kashyap', '2020-03-28 13:07:17');

-- --------------------------------------------------------

--
-- Структура таблицы `user1`
--

CREATE TABLE `user1` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user1`
--

INSERT INTO `user1` (`id`, `login`, `password`) VALUES
(1, 'admin', 'our_admin_12345');

-- --------------------------------------------------------

--
-- Структура таблицы `user2`
--

CREATE TABLE `user2` (
  `id` int(13) UNSIGNED NOT NULL,
  `login` varchar(100) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user2`
--

INSERT INTO `user2` (`id`, `login`, `pass`, `name`) VALUES
(1, '+375259702390', '12345', 'IvanIvanov'),
(2, '+375259702390', '12345', 'Ivan Ivanov'),
(3, '+375259702390', '33333', 'Ivan Ivanov'),
(4, '+375259702390', '333333', 'IvanIvanov'),
(5, 'adminnn', 'fabdf19ff667222086dbc8eed692fd06', 'adminnn'),
(6, '+375259702390', '297ee1e2b87f8a9dd4cc61dee8a71994', '333333'),
(7, '+375259702390', '297ee1e2b87f8a9dd4cc61dee8a71994', '333333'),
(8, '+375259702390', '297ee1e2b87f8a9dd4cc61dee8a71994', 'Иваааааааааааааааааааааан'),
(9, '+375259702390', '297ee1e2b87f8a9dd4cc61dee8a71994', 'Ivan Ivanov'),
(10, '+375259702390', '53955c4e6e6906d5d32cb1f651f0f918', 'Иваааааааааааааааааааааан'),
(11, '12', '4c094bb2e0aa11a4e93b09dd17727bf6', '12'),
(12, '123', 'a845b16627d3161b71375be423e838b6', '');

-- --------------------------------------------------------

--
-- Структура таблицы `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Индексы таблицы `user1`
--
ALTER TABLE `user1`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `user2`
--
ALTER TABLE `user2`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `user1`
--
ALTER TABLE `user1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `user2`
--
ALTER TABLE `user2`
  MODIFY `id` int(13) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
