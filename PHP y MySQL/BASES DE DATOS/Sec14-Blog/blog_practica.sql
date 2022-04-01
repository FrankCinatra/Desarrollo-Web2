-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-04-2022 a las 03:35:00
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
-- Base de datos: `blog_practica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `extracto` varchar(200) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `texto` text DEFAULT NULL,
  `thumb` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `titulo`, `extracto`, `fecha`, `texto`, `thumb`) VALUES
(1, 'Primer articulo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2022-03-31 23:05:08', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book. It usually begins with:\r\n\r\n“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”\r\nThe purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn\'t distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.\r\n\r\nThe passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it\'s seen all around the web; on templates, websites, and stock designs. Use our generator to get your own, or read on for the authoritative history of lorem ipsum.', '1.png'),
(2, 'Segundo articulo', 'Lorem ipsum began as scrambled, nonsensical Latin derived from Cicero\'s 1st-century BC text De Finibus Bonorum et Malorum.', '2022-03-31 23:05:08', 'Until recently, the prevailing view assumed lorem ipsum was born as a nonsense text. “It\'s not Latin, though it looks like it, and it actually says nothing,” Before & After magazine answered a curious reader, “Its ‘words’ loosely approximate the frequency with which letters occur in English, which is why at a glance it looks pretty real.”\r\n\r\nAs Cicero would put it, “Um, not so fast.”\r\n\r\nThe placeholder text, beginning with the line “Lorem ipsum dolor sit amet, consectetur adipiscing elit”, looks like Latin because in its youth, centuries ago, it was Latin.', '2.png'),
(3, 'Tercer articulo', 'Creation timelines for the standard lorem ipsum passage vary, with some citing the 15th century and others the 20th.', '2022-03-31 23:19:27', 'So how did the classical Latin become so incoherent? According to McClintock, a 15th century typesetter likely scrambled part of Cicero\'s De Finibus in order to provide placeholder text to mockup various fonts for a type specimen book.\r\n\r\nIt\'s difficult to find examples of lorem ipsum in use before Letraset made it popular as a dummy text in the 1960s, although McClintock says he remembers coming across the lorem ipsum passage in a book of old metal type samples. So far he hasn\'t relocated where he once saw the passage, but the popularity of Cicero in the 15th century supports the theory that the filler text has been used for centuries.', '3.png'),
(4, 'Cuarto articulo', 'Lorem ipsum was purposefully designed to have no meaning, but appear like real text, making it the perfect placeholder.', '2022-04-01 01:22:23', 'Don\'t bother typing lorem ipsum into Google translate. If you already tried, you may have gotten anything from \"NATO\" to \"China\", depending on how you capitalized the letters. The bizarre translation was fodder for conspiracy theories, but Google has since updated its lorem ipsum translation to, boringly enough, lorem ipsum.\r\n\r\nOne brave soul did take a stab at translating the almost-not-quite-Latin. According to The Guardian, Jaspreet Singh Boparai undertook the challenge with the goal of making the text precisely as incoherent in English as it is in Latin - and to make it incoherent in the same way. As a result, the Greek \'eu\' in Latin became the French \'bien\' [...] and the \'-ing\' ending in \'lorem ipsum\' seemed best rendered by an \'-iendum\' in English.', '4.png'),
(6, 'Add article proof', 'I wake up to the sounds of the silence that allows for my mind to run around with my ear up to the ground', '2022-04-01 01:26:25', 'Oh the misery\r\nEverybody wants to be my enemy\r\nSpare the sympathy\r\nEverybody wants to be\r\nMy enemy-y-y-y-y\r\n(Look out for yourself)\r\nMy enemy(Look)-y(Look)-y(Look)-y(Look)-y\r\n(Look out for yourself)\r\nBut I\'m ready\r\n\r\nYour words up on the wall\r\nAs you\'re praying for my fall\r\nAnd the laughter in the halls\r\nAnd the names that I\'ve been called\r\n\r\nI stack it in my mind\r\nAnd I\'m waiting for the time\r\nWhen I show you what it\'s like\r\nTo be words spit in a mic\r\n\r\nTell you you\'re the greatest\r\nBut once you turn they hate us\r\n(Huh)', '1.png');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
