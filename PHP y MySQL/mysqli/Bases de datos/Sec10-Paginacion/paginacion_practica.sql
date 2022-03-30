-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-03-2022 a las 00:47:08
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
-- Base de datos: `paginacion_practica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `articulo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `articulo`) VALUES
(1, 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.'),
(2, 'Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor'),
(3, 'No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original.'),
(4, 'Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum'),
(5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(6, 'Nullam tincidunt lorem sem, quis porttitor nulla pretium eget.'),
(7, 'Nullam efficitur varius commodo.'),
(8, 'Morbi et purus bibendum, tristique sem sed, vehicula tellus.'),
(9, 'Donec vitae sem scelerisque lectus congue sodales quis non augue.'),
(10, 'Donec sollicitudin semper dignissim.'),
(11, 'Donec aliquam interdum est, ut tempus risus.'),
(12, 'Nullam eu maximus velit. Mauris luctus congue viverra.'),
(13, 'Sed mauris sem, rutrum quis mi vitae, gravida pharetra mi.'),
(14, 'Nulla vel pretium nisi. Donec dignissim aliquam tellus aliquam venenatis.'),
(15, 'Nulla vulputate dui at maximus consectetur.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
