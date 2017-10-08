-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-10-2017 a las 01:50:46
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
  `id_admin` int(11) NOT NULL,
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

INSERT INTO `administradores` (`id_admin`, `nombre`, `apellido_paterno`, `apellido_materno`, `email`, `password`, `creation_date`, `estatus`, `genero`) VALUES
(26, 'José Antonio', 'Esparza', 'Castro', 'tonoescom@gmail.com', 'fkS5bhTce9CNwns', '2017-09-13', '0', 0);

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
-- Estructura de tabla para la tabla `faqs`
--

CREATE TABLE `faqs` (
  `id_faqs` int(11) NOT NULL,
  `question` text COLLATE utf8_spanish_ci NOT NULL,
  `answer` text COLLATE utf8_spanish_ci NOT NULL,
  `category` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `faqs`
--

INSERT INTO `faqs` (`id_faqs`, `question`, `answer`, `category`) VALUES
(105, 'servicios emprsarial', 'serviiso emasdasd', 'servicio_empresarial'),
(106, 'dfsdfsdq', 'safasdasdasd', 'servicio_empresarial'),
(107, 'serviciso asadasd', 'sadasdasdasd', 'curso'),
(108, '1', '2', 'servicio_empresarial'),
(109, '12', '1212', 'servicio_empresarial'),
(110, 'as', 'adasdasd', 'servicio_empresariales'),
(111, 'z', 'asdas', 'servicios_empresariales'),
(112, 'diplomados', 'diplomados', 'diplomados'),
(113, 'revista', 'revista', 'revista'),
(114, 'seminario', 'seminario', 'semiarios'),
(115, '121', '1212', 'semiarios'),
(116, 'semiarios', 'seminarios', 'semiarios'),
(117, 'seminarios', 'seminarios', 'seminarios'),
(118, 'simpo', 'simpoooo', 'simposiums'),
(119, 'talleres', 'talleres', 'talleres');

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
(16, 'tonoescom@gmail.com', 'Cursos', '2017-09-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `id` int(50) NOT NULL,
  `publication_name` varchar(40) NOT NULL,
  `review` text NOT NULL,
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

INSERT INTO `publicaciones` (`id`, `publication_name`, `review`, `addressed`, `objetive`, `periodicity`, `cost`, `route_image`, `url_web`, `creation_date`, `created_by`) VALUES
(1, 'sss', '', 'sss', 'sss', 1, 1111110000, '39089542658cd734ad2c90.png', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-18', 'yos'),
(2, 'asdasd', '', 'asdasd', 'asdasd', 1, 112, '1318868458cd73f1314d3.png', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-18', 'yos'),
(3, '11', '', 'a', 'a', 1, 0, '78233791858cdddef9f3dc.png', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(4, 'assa', '', 'asda', 'assa', 11, 11, '117455620658cdfdec16ca4.png', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(5, 'assa', '', 'asda', 'assa', 11, 11, '145599232458cdfdf26fc77.png', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(6, 'asd', '', 'asdas', 'asd', 1, 0, '125580315058cdfe174e4b2.jpg', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(7, 'asd', '', 'asfsd', 'asda', 1, 0, '154084243258cdff03646a0.png', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(8, 'q', '', 'SASDA', 'ASSDASa', 3, 0, '213980800858cdff2a34983.png', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(9, 'asd', '', 'assd', 'assd', 3, 4, '7004640158cdff61a798f.jpg', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(10, 'as', '', 'adas', 'assd', 2, 0, '109598654758ce009884809.jpg', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(11, 'sadasd', '', 'asdas', 'as', 2, 0, '61260145458ce0e465f1a5.jpg', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(12, 'asdasd', '', 'asdasd', 'asdasd', 1, 0, '166373615258ce0eb60fb55.jpg', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(13, 'sdaasdas', '', 'asdasd', 'asdasd', 1, 0, '5927473758ce19c9cebd9.jpg', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(14, 'sdfsdf', '', 'sdfsdf', 'sdfsdf', 3, 0, '61784302958ce19e85a72d.jpg', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(15, 'asdasd', '', 'dasdas', 'asdasd', 2, 0, '44666333658ce1b1476350.jpg', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(16, 'asdasd', '', 'sadasdasd', 'asdasd', 3, 0, '193081642158ce1c9875f4b.jpg', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(17, 'asdasdasd', '', 'asdasd', 'asdasd', 3, 111, '17069213158ce1e0b77614.jpg', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(18, 'asdasd', '', 'asdas', 'asdasd', 2, 0, '43023567858ce1ea322ba9.jpg', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(19, 'asdasd', '', 'asdasd', 'asdasd', 13, 1, '124114084358ce1eee6d451.jpg', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(20, 'sdasd', '', 'asdas', 'asdasd', 5, 2, '12720896158ce204493849.jpg', 'http://revistaelectronica-ipn.org/Inicio', '2017-03-19', 'yos'),
(21, 'mi primera publicacion', '', 'mi primera publicacion', 'mi primera publicacion', 0, 44, '53583526558fd5b6132452.png', 'http://revistaelectronica-ipn.org/Inicio', '2017-04-24', 'Josï¿½ Antonio');

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
  `periodo` varchar(20) NOT NULL,
  `duracion` int(4) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_final` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_final` time NOT NULL,
  `modalidad` varchar(20) NOT NULL,
  `requisitos` text NOT NULL,
  `informacion_adicional` text NOT NULL,
  `costo` float NOT NULL,
  `metodo_pago` text NOT NULL,
  `ruta` text NOT NULL,
  `fecha_creacion` date NOT NULL,
  `seccion` varchar(10) CHARACTER SET utf8 NOT NULL,
  `usuario` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro_eventos`
--

INSERT INTO `registro_eventos` (`id`, `nombre`, `resumen`, `dirigido`, `objetivo`, `periodo`, `duracion`, `fecha_inicio`, `fecha_final`, `hora_inicio`, `hora_final`, `modalidad`, `requisitos`, `informacion_adicional`, `costo`, `metodo_pago`, `ruta`, `fecha_creacion`, `seccion`, `usuario`) VALUES
(5, 'curso', 'curso', 'cuso', 'curso', 'Presencial', 1, '2017-12-31', '2017-12-31', '23:59:00', '23:59:00', 'Presencial', 'curso', 'curso', 12200, 'Presencial', '51niq9nL+OL._SX338_BO1,204,203,200_.jpg', '2017-09-10', 'curso', 'JosÃ¯Â¿Â½ Antonio'),
(6, 'as', 'sda', 'ssda', 'asdasd', 'Presencial y/o Dista', 1, '2017-12-31', '2017-12-31', '23:59:00', '23:59:00', 'Presencial', 'asd', 'asdasd', 0, 'Distancia', 'feliz-cumpleanos_067.jpg', '2017-09-10', 'curso', 'JosÃƒÂ© Antonio'),
(7, 'a', 'as', 'aas', 'asd', 'Presencial y/o Dista', 1, '2017-12-31', '2017-12-31', '23:59:00', '23:59:00', 'Presencial', 'sada', 'asda', 0, 'Presencial', '7a0badc9-c5d2-4d66-8a2d-648f08f3ca68.jpg', '2017-09-10', 'curso', 'José Antonio'),
(8, 'seminario', 'seminario', 'seminario', 'seminari', 'Distancia', 1, '2017-12-31', '2017-12-31', '23:59:00', '01:00:00', 'Presencial', 'seminario', 'seminarios', 111, 'Presencial', 'Captura de pantalla de 2017-03-03 17-18-10.png', '2017-09-10', 'seminario', 'José Antonio'),
(9, 'taller', 'taller', 'taller', 'taller', 'Presencial', 1, '2017-12-31', '2017-12-31', '23:59:00', '23:59:00', 'Presencial', 'taller', 'taller', 1, 'Distancia', 'ce44e881-4164-486e-a906-afe3151fe430.jpg', '2017-09-10', 'taller', 'JosÃ© AntonioÂ EsparzaÂ Castro'),
(10, 'diplomado', 'diplomado', 'diplomado', 'diplomado', 'Presencial y/o Dista', 1, '2017-12-31', '2017-12-31', '23:59:00', '23:59:00', 'Presencial', 'diplomado', 'diplomado', 1, 'Distancia', '12312312312312312.jpg', '2017-09-10', 'diplomado', 'JosÃ© AntonioÂ EsparzaÂ Castro'),
(11, 'diplomado', 'diplomado', 'diplomado', 'diplomado', 'Presencial y/o Dista', 1, '2017-12-31', '2017-12-31', '23:59:00', '23:59:00', 'Presencial', 'diplomado', 'diplomado', 1, 'Distancia', '514t9U2nNnL._SX321_BO1,204,203,200_.jpg', '2017-09-10', 'diplomado', 'JosÃ© AntonioÂ EsparzaÂ Castro'),
(12, 'diplomado', 'diplomado', 'diplopmad', 'ssaada', 'Distancia', 1, '2017-12-31', '2017-12-31', '23:59:00', '23:59:00', 'Distancia', 'qadas', 'ad', 1, 'Presencial', '18.jpg', '2017-09-10', 'diplomado', 'José Antonio Esparza Castro'),
(13, 'simpo', 'simpo', 'simpo', 'simpo', 'Presencial', 1, '2017-12-31', '2017-12-31', '23:59:00', '22:59:00', 'Presencial', 'sad', 'asda', 0, 'Distancia', '18157732_1697261370288296_4622809835939531089_n.jpg', '2017-09-11', 'simposium', 'José Antonio Esparza Castro'),
(14, 'sdf', 'dsfa', 'asd', 'asdasd', 'Semanas', 6, '2017-02-02', '2018-03-02', '00:00:00', '01:00:00', 'Presencial', 'ASDASD', 'sad', 1, 'DepÃ³sito Bancario', '16299229_10158280867620599_4677171366508336613_n.jpg', '2017-09-11', 'simposium', 'José Antonio Esparza Castro'),
(15, 'simpo', 'simpo', 'simpo', 'simpo', 'Semanas', 2, '2017-01-31', '2018-01-01', '23:00:00', '01:00:00', 'Presencial', 'simpoi', 'simpoi', 1, 'Efectivo', '18157732_1697261370288296_4622809835939531089_n.jpg', '2017-09-11', 'simposium', 'Esparza Castro José Antonio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios_empresariales`
--

CREATE TABLE `servicios_empresariales` (
  `id` int(11) NOT NULL,
  `name_business_service` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `review` text COLLATE utf8_spanish_ci NOT NULL,
  `addressed` text COLLATE utf8_spanish_ci NOT NULL,
  `objetive` text COLLATE utf8_spanish_ci NOT NULL,
  `cost` float NOT NULL,
  `image` text COLLATE utf8_spanish_ci NOT NULL,
  `date_creation` date NOT NULL,
  `created_by` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
  `password` varchar(60) CHARACTER SET utf8 NOT NULL,
  `creation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `user_register`
--

INSERT INTO `user_register` (`id`, `name`, `surnames`, `telephone`, `gender`, `email`, `password`, `creation_date`) VALUES
(101, 'JosÃ© Antonio', 'Esparza', '551695144', 1, 'tonoescom@gmail.com', '111', '2017-09-15'),
(102, 'JosÃ© Antonio', 'Esparza', '5516915144', 1, 'tonoescom@gmail.com', '123', '2017-09-15'),
(103, 'JosÃ© Antonio', 'Esparza', '(551) 691-5144', 1, 'tonoescom@gmail.com', '1234', '2017-09-15'),
(104, 'JosÃ© Antonio', 'Esparza', '5516915144', 1, 'tonoescom@gmail.com', '1234', '2017-09-15'),
(105, 'JosÃ© Antonio', 'Esparza', '5516915144', 2, 'tonoescom@gmail.com', '1234', '2017-09-15'),
(106, 'JosÃ© Antonio', 'Esparza', '551695144', 1, 'tonoescom@gmail.com', '1234', '2017-09-15'),
(107, 'JosÃ© Antonio', 'Esparza', '5516915144', 1, 'tonoescom@gmail.com', '12', '2017-09-15'),
(108, 'JosÃ© Antonio', 'Esparza', '(551) 691-5144', 1, 'tonoescom@gmail.com', '1', '2017-09-17'),
(109, 'JosÃ© Antonio', 'Esparza', '551691544', 1, 'tonoescom@gmail.com', '1', '2017-09-17'),
(110, 'JosÃ© Antonio', 'Esparza', '5516915144', 1, 'tonoescom@gmail.com', '1', '2017-09-17'),
(111, 'JosÃ© Antonio', 'Esparza', '(551) 691-5144', 1, 'tonoescom@gmail.com', '1', '2017-09-17'),
(112, 'JosÃ© Antonio', 'Esparza', '(551) 691-5144', 1, 'tonoescom@gmail.com', '1', '2017-09-17'),
(113, 'JosÃ© Antonio', 'Esparza', '000000000000000', 1, 'tonoescom@gmail.com', '000', '2017-09-17'),
(114, 'JosÃ© Antonio', 'Esparza', '(551) 691-5144', 1, 'tonoescom@gmail.com', '123', '2017-09-17'),
(115, 'JosÃ© Antonio', 'Esparza', '(551) 691-5144', 1, 'tonoescom@gmail.com', '1234', '2017-09-17'),
(116, 'JosÃ© Antonio', 'Esparza', '000000000', 1, 'tonoescom@gmail.com', '1234', '2017-09-17'),
(117, 'JosÃ© Antonio', 'Esparza', '46456456456456', 1, 'tonoescom@gmail.com', '$1$somethin$k8AtJbDPlkfGtvGU2qXx5.', '2017-09-17'),
(118, 'JosÃ© Antonio', 'Esparza', '5516915144', 1, 'tonoescom@gmail.com', '$1$somethin$k8AtJbDPlkfGtvGU2qXx5.', '2017-09-17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id_admin`);

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
-- Indices de la tabla `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id_faqs`);

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
-- Indices de la tabla `servicios_empresariales`
--
ALTER TABLE `servicios_empresariales`
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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
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
-- AUTO_INCREMENT de la tabla `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id_faqs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
--
-- AUTO_INCREMENT de la tabla `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `registro_eventos`
--
ALTER TABLE `registro_eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `servicios_empresariales`
--
ALTER TABLE `servicios_empresariales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `titulos`
--
ALTER TABLE `titulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `user_register`
--
ALTER TABLE `user_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
