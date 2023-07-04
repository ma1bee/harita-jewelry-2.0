-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 04 2023 г., 03:53
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `jewel_bd`
--

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `1zapros`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `1zapros` (
`id_order` int
,`id_client` int
,`id_product` int
,`id_master` int
,`date_order` date
,`price` varchar(40)
,`status` varchar(40)
,`date_end` date
);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `2zapros`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `2zapros` (
`id_order` int
,`id_client` int
,`id_product` int
,`id_master` int
,`date_order` date
,`price` varchar(40)
,`status` varchar(40)
,`date_end` date
);

-- --------------------------------------------------------

--
-- Структура таблицы `Clients`
--

CREATE TABLE `Clients` (
  `id_client` int NOT NULL,
  `last_name_client` varchar(40) DEFAULT NULL,
  `name_client` varchar(40) DEFAULT NULL,
  `email` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `number` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Clients`
--

INSERT INTO `Clients` (`id_client`, `last_name_client`, `name_client`, `email`, `number`) VALUES
(1, 'Зубенко', 'Михайил', 'zub@mpt.ru', '88005553535'),
(2, 'Кит', 'Харрингтон', 'gosl@gosl', '88005553535'),
(3, 'Тали', 'Александр', 'ale@tali', '89346667878'),
(4, 'Рыбов', 'Петр', 'riba@pit', '79863451267');

-- --------------------------------------------------------

--
-- Структура таблицы `Masters`
--

CREATE TABLE `Masters` (
  `id_master` int NOT NULL,
  `last_name` varchar(40) DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `patronymic` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Masters`
--

INSERT INTO `Masters` (`id_master`, `last_name`, `name`, `patronymic`) VALUES
(1, 'Романов', 'Геннадий', 'Иванович'),
(2, 'Маринова', 'Ирина', 'Бебровна'),
(3, 'Устин', 'Генрих', 'Петросович'),
(4, 'Мурин', 'Владислав', 'Геннадьевич');

-- --------------------------------------------------------

--
-- Структура таблицы `Materials`
--

CREATE TABLE `Materials` (
  `id_materials` int NOT NULL,
  `name_materials` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Materials`
--

INSERT INTO `Materials` (`id_materials`, `name_materials`) VALUES
(1, 'серебро'),
(2, 'золото'),
(3, 'алмаз'),
(4, 'сапфир'),
(5, 'аметист');

-- --------------------------------------------------------

--
-- Структура таблицы `Orders`
--

CREATE TABLE `Orders` (
  `id_order` int NOT NULL,
  `id_client` int DEFAULT NULL,
  `id_product` int DEFAULT NULL,
  `id_master` int DEFAULT NULL,
  `date_order` date DEFAULT NULL,
  `price` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `status` varchar(40) DEFAULT NULL,
  `date_end` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Orders`
--

INSERT INTO `Orders` (`id_order`, `id_client`, `id_product`, `id_master`, `date_order`, `price`, `status`, `date_end`) VALUES
(4, 2, 1, 2, '2023-07-10', '5000', 'made', '2023-07-22'),
(5, 1, 1, 1, '2023-07-14', '123456789', 'made', '2023-07-21'),
(6, 3, 1, 3, '2023-07-24', '8000', 'create', '2023-07-25'),
(7, 2, 6, 1, '2023-07-05', '9999', 'made', '2023-07-07');

-- --------------------------------------------------------

--
-- Структура таблицы `Products`
--

CREATE TABLE `Products` (
  `id_product` int NOT NULL,
  `id_materials` int DEFAULT NULL,
  `name_product` varchar(40) DEFAULT NULL,
  `date_of_creation` date DEFAULT NULL,
  `id_type_product` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Products`
--

INSERT INTO `Products` (`id_product`, `id_materials`, `name_product`, `date_of_creation`, `id_type_product`) VALUES
(1, 1, 'серьги с изумрудами ', '2023-06-26', 1),
(4, 1, 'кольцо с аметистами', '2023-07-01', 1),
(5, 5, 'серьги с аметистами', '2023-07-04', 6),
(6, 2, 'золотое ожерелье', '2023-07-22', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id_roles` int NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id_roles`, `role`) VALUES
(1, 'Администратор'),
(2, 'Пользователь');

-- --------------------------------------------------------

--
-- Структура таблицы `Type_products`
--

CREATE TABLE `Type_products` (
  `id_type_product` int NOT NULL,
  `name_type_product` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Type_products`
--

INSERT INTO `Type_products` (`id_type_product`, `name_type_product`) VALUES
(1, 'кольцо '),
(6, 'серьги'),
(7, 'подвеска'),
(8, 'ожерелье '),
(9, 'браслет ');

-- --------------------------------------------------------

--
-- Структура таблицы `Users-jewel`
--

CREATE TABLE `Users-jewel` (
  `id_users_jewel` int NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_role` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Users-jewel`
--

INSERT INTO `Users-jewel` (`id_users_jewel`, `email`, `password`, `id_role`) VALUES
(1, 'testtt@beb', 'test', 1),
(5, 'sintsov@mail.com', 'asdasdsadasd', 1),
(7, '12@dsdsdasd66699', 'jydasdsad', 1),
(8, 'asd@sdwdasdasdsad', '$2y$10$OjF0ZPG5NHZxxtUx2ieyX.n2xKXjopushH5Rwhi9C8g7PRart7g7K', 2),
(9, 'asdsadsad2@saaaa', '$2y$10$Pz9/FtRwWRmeOP0ljW.6FuDLKJAs987gm6RHEmCyhqjQHjE5Fk1YG', 2),
(10, 'sadasdsad2@ssss', '$2y$10$lA9UyNqlsPUCPiJnwLbfZuMtw4/9pLc3Nab8XzhuPgrzj5wW93oqe', 2),
(11, 'test@test', '$2y$10$n.Q3r525lf9QIHkooDe5e.Uws8NlaSRnuwe0ad1KgPHf91aBnk.JG', 2),
(12, 'testtest@test', '$2y$10$6BnPYaELkuCNj4n2Iew5M.tcT5cTwtBC9UpF3uW9p03JS.ogpmFCy', 2),
(13, 'auth@auth', '$2y$10$tyLPjWV9TmNQ6J8HoaqxS.2TlbBau9nGEaJn1NToe61KNmqZjtKvC', 2),
(14, 'bebra@arnold', 'test', 2),
(15, 'pyk@pyk', 'pyk', 1),
(17, 'ali@ali', 'ale', 1),
(18, 'kit@kot', 'kit', 1);

-- --------------------------------------------------------

--
-- Структура для представления `1zapros`
--
DROP TABLE IF EXISTS `1zapros`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`%` SQL SECURITY DEFINER VIEW `1zapros`  AS SELECT `orders`.`id_order` AS `id_order`, `orders`.`id_client` AS `id_client`, `orders`.`id_product` AS `id_product`, `orders`.`id_master` AS `id_master`, `orders`.`date_order` AS `date_order`, `orders`.`price` AS `price`, `orders`.`status` AS `status`, `orders`.`date_end` AS `date_end` FROM `orders` WHERE (`orders`.`id_master` = '3')  ;

-- --------------------------------------------------------

--
-- Структура для представления `2zapros`
--
DROP TABLE IF EXISTS `2zapros`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`%` SQL SECURITY DEFINER VIEW `2zapros`  AS SELECT `orders`.`id_order` AS `id_order`, `orders`.`id_client` AS `id_client`, `orders`.`id_product` AS `id_product`, `orders`.`id_master` AS `id_master`, `orders`.`date_order` AS `date_order`, `orders`.`price` AS `price`, `orders`.`status` AS `status`, `orders`.`date_end` AS `date_end` FROM `orders` WHERE (`orders`.`price` > 5000)  ;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Clients`
--
ALTER TABLE `Clients`
  ADD PRIMARY KEY (`id_client`);

--
-- Индексы таблицы `Masters`
--
ALTER TABLE `Masters`
  ADD PRIMARY KEY (`id_master`);

--
-- Индексы таблицы `Materials`
--
ALTER TABLE `Materials`
  ADD PRIMARY KEY (`id_materials`);

--
-- Индексы таблицы `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_master` (`id_master`),
  ADD KEY `id_product` (`id_product`);

--
-- Индексы таблицы `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_materials` (`id_materials`),
  ADD KEY `id_type_product` (`id_type_product`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_roles`);

--
-- Индексы таблицы `Type_products`
--
ALTER TABLE `Type_products`
  ADD PRIMARY KEY (`id_type_product`);

--
-- Индексы таблицы `Users-jewel`
--
ALTER TABLE `Users-jewel`
  ADD PRIMARY KEY (`id_users_jewel`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Clients`
--
ALTER TABLE `Clients`
  MODIFY `id_client` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `Masters`
--
ALTER TABLE `Masters`
  MODIFY `id_master` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `Materials`
--
ALTER TABLE `Materials`
  MODIFY `id_materials` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `Orders`
--
ALTER TABLE `Orders`
  MODIFY `id_order` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `Products`
--
ALTER TABLE `Products`
  MODIFY `id_product` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id_roles` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `Type_products`
--
ALTER TABLE `Type_products`
  MODIFY `id_type_product` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `Users-jewel`
--
ALTER TABLE `Users-jewel`
  MODIFY `id_users_jewel` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Orders`
--
ALTER TABLE `Orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `Clients` (`id_client`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_master`) REFERENCES `Masters` (`id_master`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`id_product`) REFERENCES `Products` (`id_product`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `Products`
--
ALTER TABLE `Products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_materials`) REFERENCES `Materials` (`id_materials`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`id_type_product`) REFERENCES `Type_products` (`id_type_product`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `Users-jewel`
--
ALTER TABLE `Users-jewel`
  ADD CONSTRAINT `users-jewel_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id_roles`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
