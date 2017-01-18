-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-01-2017 a las 14:07:44
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `simpoweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administrator`
--

INSERT INTO `administrator` (`id`, `nombre`, `apellidos`, `email`, `password`) VALUES
(1, 'José Antonio', 'Castro Esparza', 'administrator@gmail.com', 'Adm1n2016');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados_republica`
--

CREATE TABLE `estados_republica` (
  `id` int(11) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estados_republica`
--

INSERT INTO `estados_republica` (`id`, `estado`) VALUES
(1, 'Aguascalientes'),
(2, 'Baja California'),
(3, 'Baja California Sur'),
(4, 'Campeche'),
(5, 'Coahuila'),
(6, 'Colima'),
(7, 'Ciudada de México'),
(8, 'Chiapas'),
(9, 'Chihuahua'),
(10, 'Durango'),
(11, 'Guadalajara'),
(12, 'Guanajuato'),
(13, 'Guerrero'),
(14, 'Hidalgo'),
(15, 'Michoacan'),
(16, 'Morelos'),
(17, 'Monterrey'),
(18, 'Nayarit'),
(19, 'Oaxaca'),
(20, 'Puebla'),
(21, 'Querétaro'),
(22, 'Quintana Roo'),
(23, 'San Luis Potosí'),
(24, 'Sinaloa'),
(25, 'Sonora'),
(26, 'Tabasco'),
(27, 'Tamaulipas'),
(28, 'Tlaxcala'),
(29, 'Veracruz'),
(30, 'Yucatán'),
(31, 'Zacatecas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `correo_electronico` varchar(60) NOT NULL,
  `seccion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `newsletter`
--

INSERT INTO `newsletter` (`id`, `correo_electronico`, `seccion`) VALUES
(1, '', 'Cursos'),
(2, 'jcastro@anzen.com.mx', 'Cursos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `genero` tinyint(1) NOT NULL,
  `ciudad` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `register`
--

INSERT INTO `register` (`id`, `nombre`, `apellidos`, `email`, `telefono`, `genero`, `ciudad`) VALUES
(1, 'Jose Antonio', 'Castro Esparza', '', '5516915144', 1, 1),
(2, 'Jose Antonio', 'Castro Esparza', 'tonoescom@gmial.com', '5516915144', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estados_republica`
--
ALTER TABLE `estados_republica`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `estados_republica`
--
ALTER TABLE `estados_republica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
