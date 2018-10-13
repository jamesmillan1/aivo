-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-10-2018 a las 23:43:41
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `twitter`
--
CREATE DATABASE IF NOT EXISTS `twitter` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `twitter`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comment`
--

CREATE TABLE `comment` (
  `idcomment` int(11) NOT NULL,
  `created` varchar(400) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `text` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `user_iduser` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comment`
--

INSERT INTO `comment` (`idcomment`, `created`, `text`, `user_iduser`) VALUES
(1, 'Mon Jun 25 16:03:38 +0000 2018', 'Hola, este es un mensaje', 1),
(2, 'Tue Jun 26 14:03:38 +0000 2018', 'Texto del mensaje', 1),
(3, 'Tue Jun 26 18:42:38 +0000 2018', 'Saludos desde Colombia', 1),
(4, 'Tue Jun 26 06:03:56 +0000 2018', 'I love programming', 2),
(5, 'Thu Jul 05 14:11:33 +0000 2018', 'Hello world', 2),
(6, 'Thu Jul 05 15:34:33 +0000 2018', 'Hi there', 2),
(7, 'Fri Oct 12 16:07:02 +0000 2018', 'creando mensaje', 2),
(8, 'Fri Oct 12 16:07:39 +0000 2018', 'Prueba nuevo mensaje', 1),
(9, 'Sat Oct 13 16:14:35 +0000 2018', 'Nuevo Twitt', 2),
(10, 'Sat Oct 13 16:16:59 +0000 2018', 'Material Design', 1),
(11, 'Sat Oct 13 23:40:06 +0000 2018', 'Nuevo mensaje local', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`iduser`, `name`) VALUES
(1, 'John Doe'),
(2, 'James Millan');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idcomment`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comment`
--
ALTER TABLE `comment`
  MODIFY `idcomment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
