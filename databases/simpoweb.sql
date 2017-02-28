-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-02-2017 a las 14:15:18
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

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
  `seccion` varchar(20) NOT NULL,
  `fecha_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `newsletter`
--

INSERT INTO `newsletter` (`id`, `correo_electronico`, `seccion`, `fecha_registro`) VALUES
(1, '', 'Cursos', '2017-01-09'),
(2, 'jcastro@anzen.com.mx', 'Cursos', '2017-02-01'),
(3, 'tonoescom@gmail.com', 'Talleres', '2016-12-15'),
(4, 'tonoescom@gmail.com', 'Todos', '2017-07-02');

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
(2, 'Jose Antonio', 'Castro Esparza', 'tonoescom@gmial.com', '5516915144', 1, 1),
(3, 'Yesenia', 'Gonzalez Diaz', 'yessdiaz@gmail.com', '5516915144', 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_eventos`
--

CREATE TABLE `registro_eventos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) CHARACTER SET utf8 NOT NULL,
  `dirigido` text NOT NULL,
  `objetivo` text NOT NULL,
  `duracion` int(4) NOT NULL,
  `modalidad` varchar(20) NOT NULL,
  `inicio` date NOT NULL,
  `termino` date NOT NULL,
  `costo` float NOT NULL,
  `ruta` text NOT NULL,
  `fecha_creacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro_eventos`
--

INSERT INTO `registro_eventos` (`id`, `nombre`, `dirigido`, `objetivo`, `duracion`, `modalidad`, `inicio`, `termino`, `costo`, `ruta`, `fecha_creacion`) VALUES
(1, '11111111111111111111', '1', '1', 0, 'Distancia', '2017-02-09', '2017-06-15', 11, '', '2017-02-28'),
(2, '12312', '11', '111', 0, 'Presencial y/o Dista', '2017-02-22', '2017-02-28', 111, '16299229_10158280867620599_4677171366508336613_n.jpg', '2017-02-28'),
(3, '12312', '222', '23423', 222222, 'Presencial y/o Dista', '2017-02-16', '2017-02-14', 23423, '16299229_10158280867620599_4677171366508336613_n.jpg', '2017-02-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulos`
--

CREATE TABLE `titulos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(60) CHARACTER SET utf8 NOT NULL COMMENT 'se guardara el titulo que aparecerá en las secciones del home',
  `seccion` varchar(25) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `titulos`
--

INSERT INTO `titulos` (`id`, `titulo`, `seccion`) VALUES
(1, 'titulo 1', 'seminarios'),
(2, 'titulo 2', 'simposiums'),
(3, 'titulo 3', 'diplomados'),
(4, 'servicios empresariales', 'servicios empresariales'),
(5, 'revista', 'revista');

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
-- Indices de la tabla `registro_eventos`
--
ALTER TABLE `registro_eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `titulos`
--
ALTER TABLE `titulos`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `registro_eventos`
--
ALTER TABLE `registro_eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `titulos`
--
ALTER TABLE `titulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
