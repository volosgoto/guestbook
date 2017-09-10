-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Сен 10 2017 г., 14:43
-- Версия сервера: 10.1.21-MariaDB
-- Версия PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `guestbook`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` tinyint(4) NOT NULL,
  `text` text NOT NULL,
  `author` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `checked` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `author_id`, `title`, `category`, `text`, `author`, `date`, `checked`) VALUES
(1, 0, '', 0, 'Мороз и солнце; день чудесный!\r\nЕще ты дремлешь, друг прелестный —\r\nПора, красавица, проснись:\r\nОткрой сомкнуты негой взоры\r\nНавстречу северной Авроры,\r\nЗвездою севера явись!', 'Volos', '2017-09-10 12:21:05', 1),
(2, 0, '', 0, '\r\nВысоко стоит луна.\r\nТени елей резки, четки.\r\nЯ — в светлице у окна,\r\nЯ бледнее полотна...\r\nВ серебре пруты решетки.\r\nМать, отец — все спят давно.\r\nЯ с распущенной косою\r\nЗагляделася в окно...\r\nЯ бледна, как полотно,\r\nКак поляна под росою.', 'Volos', '2017-09-10 12:22:09', 1),
(3, 0, '', 0, 'У PDO свой собственный хитровыдуманный способ соединения, называемый DSN. Плюс во время коннекта можно задать хренову тучу опций, некоторые из которых чрезвычайно полезны. Полный список можно найти здесь, но важными из них являются только несколько.', 'John', '2017-09-10 12:23:36', 1),
(4, 0, '', 0, '\r\n                                                            Большинство баз данных поддерживают концепцию подготовленных запросов. Что это такое? Это можно описать, как некий вид скомпилированного шаблона SQL запроса, который будет запускаться приложением и настраиваться с помощью входных параметров. У подготовленных запросов есть два главных преимущества:\r\n\r\nЗапрос необходимо однажды подготовить и затем его можно запускать столько раз, сколько нужно, причем как с теми же, так и с отличающимися параметрами. Когда запрос подготовлен, СУБД анализирует его, компилирует и оптимизирует план его выполнения. В случае сложных запросов этот процесс может занимать ощутимое время и заметно замедлить работу приложения, если потребуется много раз выполнять запрос с разными параметрами. При использовании подготовленного запроса СУБД анализирует/компилирует/оптимизирует запрос любой сложности только один раз, а приложение запускает на выполнение уже подготовленный шаблон. Таким образом подготовленные запросы потребляют меньше ресурсов и работают быстрее.\r\nПараметры подготовленного запроса не требуется экранировать кавычками; драйвер это делает автоматически. Если в приложении используются исключительно подготовленные запросы, разработчик может быть уверен, что никаких SQL инъекций случиться не может (однако, если другие части текста запроса записаны с неэкранированными символами, SQL инъекции все же возможны; здесь речь идет именно о параметрах).\r\nПодготовленные запросы также полезны тем, что PDO может эмулировать их, если драйвер базы данных не имеет подобного функционала. Это значит, что приложение может пользоваться одной и той же методикой доступа к данным независимо от возможностей СУБД.\r\n                                                            \r\n                                                            ', 'John', '2017-09-10 12:24:42', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` int(11) NOT NULL,
  `checked` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `checked`) VALUES
(1, 0, 1),
(2, 0, 1),
(3, 0, 1),
(4, 0, 1),
(5, 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `photo`
--

CREATE TABLE `photo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` tinyint(4) NOT NULL,
  `article_id` tinyint(4) NOT NULL,
  `content` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` int(11) NOT NULL,
  `role` varchar(100) NOT NULL,
  `checked` tinyint(2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`, `role`, `checked`, `date`) VALUES
(1, 'admin', '', 1111, '1', 1, '2017-09-10 12:11:24'),
(2, 'Volos', '', 1111, '1', 1, '2017-09-10 12:12:49'),
(3, 'John', '', 1111, '0', 1, '2017-09-10 12:17:16'),
(4, 'Bob', '', 1111, '0', 1, '2017-09-10 12:17:41'),
(5, 'Sara', '', 1111, '0', 1, '2017-09-10 12:18:05'),
(6, 'Lana', '', 1111, '0', 1, '2017-09-10 12:18:05');

-- --------------------------------------------------------

--
-- Структура таблицы `users_profile`
--

CREATE TABLE `users_profile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `photo` text NOT NULL,
  `age` tinyint(4) NOT NULL,
  `about` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `users_profile`
--
ALTER TABLE `users_profile`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `photo`
--
ALTER TABLE `photo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `users_profile`
--
ALTER TABLE `users_profile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
