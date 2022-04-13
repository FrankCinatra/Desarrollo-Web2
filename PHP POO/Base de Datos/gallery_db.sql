-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-04-2022 a las 19:54:05
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gallery_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `photo_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`id`, `photo_id`, `author`, `body`) VALUES
(0, 81, 'Thomas Boy', 'Isn\'t the best but is the one i love');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `filename` varchar(255) NOT NULL,
  `alternate_text` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `photos`
--

INSERT INTO `photos` (`id`, `title`, `caption`, `description`, `filename`, `alternate_text`, `type`, `size`) VALUES
(81, 'Gray Carss', '', '', 'images-21.jpg', '', 'image/jpeg', 19957),
(83, '', '', '', 'images-22.jpg', '', 'image/jpeg', 21133),
(85, '', '', '', 'images-23.jpg', '', 'image/jpeg', 22792),
(87, '', '', '', 'images-24.jpg', '', 'image/jpeg', 29850),
(89, '', '', '', 'images-25.jpg', '', 'image/jpeg', 19363),
(91, '', '', '', 'images-26.jpg', '', 'image/jpeg', 21802),
(95, '', '', '', 'images-28.jpg', '', 'image/jpeg', 17662),
(97, '', '', '', 'images-29.jpg', '', 'image/jpeg', 25493),
(99, '', '', '', 'images-30.jpg', '', 'image/jpeg', 20257),
(101, '', '', '', 'images-31.jpg', '', 'image/jpeg', 20928),
(102, '', '', '', 'images-32 copy.jpg', '', 'image/jpeg', 22772),
(103, '', '', '', 'images-32.jpg', '', 'image/jpeg', 22772),
(104, '', '', '', 'images-33 copy.jpg', '', 'image/jpeg', 16855),
(105, '', '', '', 'images-33.jpg', '', 'image/jpeg', 16855),
(106, '', '', '', 'images-34 copy.jpg', '', 'image/jpeg', 23587),
(107, '', '', '', 'images-34.jpg', '', 'image/jpeg', 23587),
(108, '', '', '', 'images-35 copy.jpg', '', 'image/jpeg', 23672),
(109, '', '', '', 'images-35.jpg', '', 'image/jpeg', 23672),
(110, '', '', '', 'images-36 copy.jpg', '', 'image/jpeg', 21672),
(111, '', '', '', 'images-36.jpg', '', 'image/jpeg', 21672),
(112, '', '', '', 'images-37 copy.jpg', '', 'image/jpeg', 20381),
(113, '', '', '', 'images-37.jpg', '', 'image/jpeg', 20381),
(114, '', '', '', 'images-38 copy.jpg', '', 'image/jpeg', 21857),
(115, '', '', '', 'images-38.jpg', '', 'image/jpeg', 21857),
(116, '', '', '', 'images-39 copy.jpg', '', 'image/jpeg', 24969),
(117, '', '', '', 'images-39.jpg', '', 'image/jpeg', 24969),
(118, '', '', '', 'images-40.jpg', '', 'image/jpeg', 24385),
(119, '', '', '', 'images-41 copy.jpg', '', 'image/jpeg', 16296),
(120, '', '', '', 'images-41.jpg', '', 'image/jpeg', 16296),
(121, '', '', '', 'images-42 copy.jpg', '', 'image/jpeg', 22401),
(122, '', '', '', 'images-44 copy.jpg', '', 'image/jpeg', 29486),
(123, '', '', '', 'images-44.jpg', '', 'image/jpeg', 29486),
(124, '', '', '', 'images-50 copy.jpg', '', 'image/jpeg', 21652),
(125, '', '', '', 'images-50.jpg', '', 'image/jpeg', 21652),
(126, '', '', '', 'slide_1.jpg', '', 'image/jpeg', 177750),
(127, '', '', '', 'slide_2.jpg', '', 'image/jpeg', 190863),
(128, '', '', '', 'slide_3.jpg', '', 'image/jpeg', 61299),
(135, '', '', '', 'lambor_aventador.jpg', '', 'image/jpeg', 739322),
(0, 'Albedo mami', '', '', 'Albedo bunny.jpg', '', 'image/jpeg', 227761);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `user_image`) VALUES
(1, 'rico', '123456', 'John', 'Doe', ''),
(2, 'asdf', '123456', 'John', 'Smith', ''),
(3, 'tommy', '123456', 'Thomas', 'Boy', 'Nezuko-chikita.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
