-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-03-2017 a las 08:00:35
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
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellido_paterno` varchar(60) NOT NULL,
  `apellido_materno` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `creation_date` date NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `genero` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `nombre`, `apellido_paterno`, `apellido_materno`, `email`, `password`, `creation_date`, `estatus`, `genero`) VALUES
(1, 'José Antonio', 'Castro Esparza', '0', 'administrator@gmail.com', 'Adm1n2016', '0000-00-00', '1', 0),
(10, 'tonoescom@gmail.com', 'Esparza', 'Castro', 'tonoescom@gmail.com', '1234', '0000-00-00', '0', 0),
(11, 'José Antonio', 'Castro ', 'Esparza', 'jcastroe1000@alumno.ipn.mx', '12312312312312', '2017-03-08', '2', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellido_paterno` varchar(60) NOT NULL,
  `apellido_materno` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `creation_date` date NOT NULL,
  `estatus` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administrator`
--

INSERT INTO `administrator` (`id`, `nombre`, `apellido_paterno`, `apellido_materno`, `email`, `password`, `creation_date`, `estatus`) VALUES
(1, 'José Antonio', 'Castro Esparza', '0', 'administrator@gmail.com', 'Adm1n2016', '0000-00-00', ''),
(10, 'tonoescom@gmail.com', 'Esparza', 'Castro', 'tonoescom@gmail.com', 'KnEZX8WNnsw3glJ', '0000-00-00', '0');

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
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `id` int(50) NOT NULL,
  `publication_name` varchar(40) NOT NULL,
  `addressed` text NOT NULL,
  `objetive` text NOT NULL,
  `periodicity` int(11) NOT NULL,
  `cost` float NOT NULL,
  `route_image` varchar(50) NOT NULL,
  `url_web` varchar(50) NOT NULL DEFAULT 'http://revistaelectronica-ipn.org/Inicio',
  `creation_date` date NOT NULL,
  `created_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`id`, `publication_name`, `addressed`, `objetive`, `periodicity`, `cost`, `route_image`, `url_web`, `creation_date`, `created_by`) VALUES
(1, 'sss', 'sss', 'sss', 1, 1111110000, '39089542658cd734ad2c90.png', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-18', 'yos'),
(2, 'asdasd', 'asdasd', 'asdasd', 1, 112, '1318868458cd73f1314d3.png', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-18', 'yos'),
(3, '11', 'a', 'a', 1, 0, '78233791858cdddef9f3dc.png', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(4, 'assa', 'asda', 'assa', 11, 11, '117455620658cdfdec16ca4.png', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(5, 'assa', 'asda', 'assa', 11, 11, '145599232458cdfdf26fc77.png', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(6, 'asd', 'asdas', 'asd', 1, 0, '125580315058cdfe174e4b2.jpg', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(7, 'asd', 'asfsd', 'asda', 1, 0, '154084243258cdff03646a0.png', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(8, 'q', 'SASDA', 'ASSDASa', 3, 0, '213980800858cdff2a34983.png', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(9, 'asd', 'assd', 'assd', 3, 4, '7004640158cdff61a798f.jpg', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(10, 'as', 'adas', 'assd', 2, 0, '109598654758ce009884809.jpg', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(11, 'sadasd', 'asdas', 'as', 2, 0, '61260145458ce0e465f1a5.jpg', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(12, 'asdasd', 'asdasd', 'asdasd', 1, 0, '166373615258ce0eb60fb55.jpg', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(13, 'sdaasdas', 'asdasd', 'asdasd', 1, 0, '5927473758ce19c9cebd9.jpg', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(14, 'sdfsdf', 'sdfsdf', 'sdfsdf', 3, 0, '61784302958ce19e85a72d.jpg', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(15, 'asdasd', 'dasdas', 'asdasd', 2, 0, '44666333658ce1b1476350.jpg', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(16, 'asdasd', 'sadasdasd', 'asdasd', 3, 0, '193081642158ce1c9875f4b.jpg', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(17, 'asdasdasd', 'asdasd', 'asdasd', 3, 111, '17069213158ce1e0b77614.jpg', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(18, 'asdasd', 'asdas', 'asdasd', 2, 0, '43023567858ce1ea322ba9.jpg', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(19, 'asdasd', 'asdasd', 'asdasd', 13, 1, '124114084358ce1eee6d451.jpg', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(20, 'sdasd', 'asdas', 'asdasd', 5, 2, '12720896158ce204493849.jpg', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_eventos`
--

CREATE TABLE `registro_eventos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) CHARACTER SET utf8 NOT NULL,
  `resumen` text NOT NULL,
  `dirigido` text NOT NULL,
  `objetivo` text NOT NULL,
  `duracion` int(4) NOT NULL,
  `modalidad` varchar(20) NOT NULL,
  `inicio` date NOT NULL,
  `termino` date NOT NULL,
  `costo` float NOT NULL,
  `ruta` text NOT NULL,
  `fecha_creacion` date NOT NULL,
  `seccion` varchar(10) CHARACTER SET utf8 NOT NULL,
  `usuario` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro_eventos`
--

INSERT INTO `registro_eventos` (`id`, `nombre`, `resumen`, `dirigido`, `objetivo`, `duracion`, `modalidad`, `inicio`, `termino`, `costo`, `ruta`, `fecha_creacion`, `seccion`, `usuario`) VALUES
(54, 'seminario', '', 'seminario', 'seminario', 1, 'Distancia', '2017-03-31', '2017-11-16', 1, '64371088258d13d0aaa356.png', '2017-03-21', 'seminario', 'tonoescom@gmail.com'),
(55, '1', '', 'asda', 'asdas', 1, 'Presencial y/o Dista', '2017-12-31', '2017-12-31', 121, '92114968758d8a95d503c4.png', '2017-03-27', 'seminario', 'tonoescom@gmail.com');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_register`
--

CREATE TABLE `user_register` (
  `id` int(11) NOT NULL,
  `name` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `surnames` varchar(60) CHARACTER SET utf8 NOT NULL,
  `telephone` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `gender` tinyint(1) NOT NULL,
  `email` varchar(60) CHARACTER SET utf8 NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 NOT NULL,
  `creation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `user_register`
--

INSERT INTO `user_register` (`id`, `name`, `surnames`, `telephone`, `gender`, `email`, `password`, `creation_date`) VALUES
(17, 'JosÃ© Antonio', 'Esparza', '122323', 1, 'tonoescom@gmail.com', 'assd', '2017-03-21'),
(18, 'JosÃ© Antonio', 'Esparza', '2223', 1, 'tonoescom@gmail.com', '2323', '2017-03-21'),
(19, '333', '222', '111', 1, 'tonoescom@gmail.com', '2222', '2017-03-24'),
(20, '333', '222', '111', 1, 'tonoescom@gmail.com', '2222', '2017-03-24'),
(21, '111', '0000', '11111', 1, 'tonoescom@gmail.com', '1112', '2017-03-24'),
(22, '1', 'Q', 'ASD', 2, 'tonoescom@gmail.com', '342342', '2017-03-24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
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
-- Indices de la tabla `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `registro_eventos`
--
ALTER TABLE `registro_eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT de la tabla `titulos`
--
ALTER TABLE `titulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `user_register`
--
ALTER TABLE `user_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
