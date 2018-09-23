-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 23-09-2018 a las 18:15:58
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
(26, 'José Antonio', 'Esparza', 'Castro', 'tonoescom@gmail.com', '1', '2017-09-13', '1', 0);

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
-- Estructura de tabla para la tabla `biografia`
--

CREATE TABLE `biografia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido_p` varchar(50) NOT NULL,
  `apellido_m` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `ruta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(107, 'Venezuela le quitará 5 ceros a su moneda a partir del lunes                                    ', '        111111111111                                                                                                                                                                                                                                                                                                ', 'curso'),
(108, 'GALLOS BLANCOS CONTRA AMÃ‰RICA NO SERÃ TRANSMITIDO POR TV AZTECA', '  2                                                ', 'servicio_empresarial'),
(109, '12', '1212', 'servicio_empresarial'),
(110, 'as', 'adasdasd', 'servicio_empresariales'),
(111, 'z', 'asdas', 'servicios_empresariales'),
(112, 'diplomados', 'diplomados', 'diplomado'),
(114, 'seminario', 'seminario', 'semiarios'),
(115, '121', '1212', 'semiarios'),
(116, 'semiarios', 'seminarios', 'semiario'),
(117, 'seminarios', 'seminarios', 'seminarios'),
(118, 'simpo', 'simpoooo', 'simposiums'),
(119, 'talleres', 'talleres', 'talleres'),
(120, 'La actriz, que en la serie de Manolo Caro hace el papel de Elena De la Mora, revela que fue un agasajo compartir el set con Verónica Castro, pero también en pleno rodaje tuvo molestias por su primer embarazo', 'La actriz, que en la serie de Manolo Caro hace el papel de Elena De la Mora, revela que fue un agasajo compartir el set con Verónica Castro, pero también en pleno rodaje tuvo molestias por su primer embarazo', 'curso'),
(121, 'Angélica María solo sufrió un golpe tras caída en concierto', 'La cantante de 73 años ya se encuentra en Los Ángeles, California, donde se recuperará de su tropiezo en el Auditorio Nacional, donde pronto volverá a presentarse con Enrique Guzmán, César Costa y Alberto Vázque', 'diplomado'),
(123, 'afael Nadal, número uno del mundo, secó el efecto Stefanos Tsitsipas y amargó el vigésimo cumpleaños del tenista griego, sensación del Masters 1.000 de Toronto que conquistó por cuarta vez el español para alcanzar el título número 80 de su carrera, cifra solo alcanzada antes por el suizo Roger Federer y por los estadounidenses Jimmy Connors e Ivan Lendl.', 'afael Nadal, número uno del mundo, secó el efecto Stefanos Tsitsipas y amargó el vigésimo cumpleaños del tenista griego, sensación del Masters 1.000 de Toronto que conquistó por cuarta vez el español para alcanzar el título número 80 de su carrera, cifra solo alcanzada antes por el suizo Roger Federer y por los estadounidenses Jimmy Connors e Ivan Lendl.', 'revista'),
(126, '1', '2', 'servicio_empresarial'),
(127, 'Lejos de enmendar el panorama en la segunda manga, el griego sufrió de entrada una nueva rotura que desequilibró la situación y afeó todavía más su panorama.', 'Lejos de enmendar el panorama en la segunda manga, el griego sufrió de entrada una nueva rotura que desequilibró la situación y afeó todavía más su panorama.', 'servicio_empresarial'),
(129, 'Lejos de enmendar el panorama en la segunda manga, el griego sufrió de entrada una nueva rotura que desequilibró la situación y afeó todavía más su panorama.', 'Lejos de enmendar el panorama en la segunda manga, el griego sufrió de entrada una nueva rotura que desequilibró la situación y afeó todavía más su panorama.', 'simposium'),
(130, '  Listo para operar el Nuevo Aeropuerto en CDMX, pero hasta el 2022                                                ', '  Listo para operar el Nuevo Aeropuerto en CDMX,                              ', 'diplomado'),
(131, '  Listo para operar el Nuevo Aeropuerto en CDMX                                              ', '  Listo para operar el Nuevo Aeropuerto en CDMX, pero hasta el 2022                                                ', 'revista'),
(132, '  Listo para operar el Nuevo Aeropuerto en CDMX, pero hasta el 2022                                                ', 'NAIM SegÃºn el plan maestro de la obra, la terminal abrirÃ­a operaciones hasta el segundo semestre de 2022, respecto al plan original que era octubre de 2020.', 'seminario'),
(133, 'asdasdasd', '  Listo para operar el Nuevo Aeropuerto en CDMX, pero hasta el 2022                                                ', 'simposium'),
(134, 'Satanistas piden retirar estatua de Diez Mandamientos ', '  Listo para operar el Nuevo Aeropuerto en CDMX, pero hasta el 2022                                                ', 'taller'),
(135, 'Listo para operar el Nuevo Aeropuerto en CDMX, pero hasta el 2022', 'Listo para operar el Nuevo Aeropuerto en CDMX, pero hasta el 2022', 'servicio_empresarial'),
(136, '  Listo para operar el Nuevo Aeropuerto en CDMX, pero hasta el 2022                                                ', '  Listo para operar el Nuevo Aeropuerto en CDMX                                           ', 'curso'),
(137, '  Listo para operar el Nuevo Aeropuerto en CDMX, pero hasta el 2022                                                ', '  Listo para operar el Nuevo Aeropuerto en CDMX,             ', ''),
(138, '  Listo para operar el Nuevo Aeropuerto en CDMX, pero hasta el 2022                                                ', '  Listo para operar el Nuevo Aeropuerto en CDMX,             ', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `nombre_materia` text NOT NULL,
  `seccion` text NOT NULL,
  `area` text NOT NULL,
  `imparte` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `nombre_materia`, `seccion`, `area`, `imparte`) VALUES
(14, 'Metodología de la investigación 2', 'Doctorado', 'Clínica', 'Adelina');

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
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id_prof` int(11) NOT NULL,
  `nombre_prof` text NOT NULL,
  `a_paterno_prof` text NOT NULL,
  `a_materno_prof` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id_prof`, `nombre_prof`, `a_paterno_prof`, `a_materno_prof`) VALUES
(2, 'Adelina', 'Pérez', 'Rosas'),
(3, 'Adelina', 'Pérez', 'Rosas');

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
  `nombre` varchar(150) CHARACTER SET utf8 NOT NULL,
  `resumen` text NOT NULL,
  `dirigido` text NOT NULL,
  `objetivo` text NOT NULL,
  `periodo` varchar(20) NOT NULL,
  `duracion` int(4) NOT NULL,
  `dias` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_final` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_final` time NOT NULL,
  `modalidad` varchar(20) NOT NULL,
  `requisitos` text NOT NULL,
  `informacion_adicional` text NOT NULL,
  `costo` float NOT NULL,
  `lugares_disponibles` int(11) NOT NULL,
  `metodo_pago` text NOT NULL,
  `ruta` text NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_modificacion` date NOT NULL,
  `seccion` varchar(25) CHARACTER SET utf8 NOT NULL,
  `usuario` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro_eventos`
--

INSERT INTO `registro_eventos` (`id`, `nombre`, `resumen`, `dirigido`, `objetivo`, `periodo`, `duracion`, `dias`, `fecha_inicio`, `fecha_final`, `hora_inicio`, `hora_final`, `modalidad`, `requisitos`, `informacion_adicional`, `costo`, `lugares_disponibles`, `metodo_pago`, `ruta`, `fecha_creacion`, `fecha_modificacion`, `seccion`, `usuario`) VALUES
(12, 'Curso', 'El peso perdía la mañana de este viernes ante un recrudecimiento en las tensiones comerciales entre Estados Unidos y China, y preocupaciones por algunos mercados emergentes, mientras el mercado espera conocer si Canadá y Washington lograrán un acuerdo en el marco de las negociaciones del Tratado de ', 'El peso perdía la mañana de este viernes ante un recrudecimiento en las tensiones comerciales entre Estados Unidos y China, y preocupaciones por algunos mercados emergentes, mientras el mercado espera conocer si Canadá y Washington lograrán un acuerdo en el marco de las negociaciones del Tratado de Libre Comercio de América del Norte (TLCAN).', 'El peso perdía la mañana de este viernes ante un recrudecimiento en las tensiones comerciales entre Estados Unidos y China, y preocupaciones por algunos mercados emergentes, mientras el mercado espera conocer si Canadá y Washington lograrán un acuerdo en el marco de las negociaciones del Tratado de Libre Comercio de América del Norte (TLCAN).El peso perdía la mañana de este viernes ante un recrudecimiento en las tensiones comerciales entre Estados Unidos y China, y preocupaciones por algunos mercados emergentes, mientras el mercado espera conocer si Canadá y Washington lograrán un acuerdo en el marco de las negociaciones del Tratado de Libre Comercio de América del Norte (TLCAN).', 'Dias', 2, 'Viernes,Sábado,Domingo', '2018-09-24', '2018-09-25', '09:00:00', '15:00:00', 'Presencial', 'El peso perdía la mañana de este viernes ante un recrudecimiento en las tensiones comerciales entre Estados Unidos y China, y preocupaciones por algunos mercados emergentes, mientras el mercado espera conocer si Canadá y Washington lograrán un acuerdo en el marco de las negociaciones del Tratado de Libre Comercio de América del Norte (TLCAN).', 'El peso perdía la mañana de este viernes ante un recrudecimiento en las tensiones comerciales entre Estados Unidos y China, y preocupaciones por algunos mercados emergentes, mientras el mercado espera conocer si Canadá y Washington lograrán un acuerdo en el marco de las negociaciones del Tratado de Libre Comercio de América del Norte (TLCAN).', 1200, 5, 'Depósito Bancario', '8940088405b8b7479184f7.jpg', '2018-09-02', '2018-09-02', 'curso', 'Esparza Castro José Antonio'),
(16, 'diplomado', ' En estos momentos son treinta grupos de unas veinte personas. En total medio millar de catalanes. ¿Su misión? Organizarse y retirar lazos amarillos, cruces y otros elementos de propaganda que el secesionismo distribuye sin tregua por calles, barrios y pueblos con total impunidad para pedir la libertad de sus dirigentes presos. ', ' En estos momentos son treinta grupos de unas veinte personas. En total medio millar de catalanes. ¿Su misión? Organizarse y retirar lazos amarillos, cruces y otros elementos de propaganda que el secesionismo distribuye sin tregua por calles, barrios y pueblos con total impunidad para pedir la libertad de sus dirigentes presos. ', ' En estos momentos son treinta grupos de unas veinte personas. En total medio millar de catalanes. ¿Su misión? Organizarse y retirar lazos amarillos, cruces y otros elementos de propaganda que el secesionismo distribuye sin tregua por calles, barrios y pueblos con total impunidad para pedir la libertad de sus dirigentes presos. ', 'Meses', 1, 'Sábado,Domingo', '2018-09-24', '2018-10-24', '09:00:00', '12:00:00', 'Distancia', ' En estos momentos son treinta grupos de unas veinte personas. En total medio millar de catalanes. ¿Su misión? Organizarse y retirar lazos amarillos, cruces y otros elementos de propaganda que el secesionismo distribuye sin tregua por calles, barrios y pueblos con total impunidad para pedir la libertad de sus dirigentes presos. ', ' En estos momentos son treinta grupos de unas veinte personas. En total medio millar de catalanes. ¿Su misión? Organizarse y retirar lazos amarillos, cruces y otros elementos de propaganda que el secesionismo distribuye sin tregua por calles, barrios y pueblos con total impunidad para pedir la libertad de sus dirigentes presos. ', 1850, 15, 'Efectivo', '251939035b8e76b21e603.jpg', '2018-09-04', '2018-09-04', 'diplomado', 'Esparza Castro José Antonio'),
(19, '1', '1', '1', '1', 'Dias', 1, 'Sábado,Domingo', '2018-09-24', '2018-09-25', '09:30:00', '12:00:00', 'Distancia', '1', '1', 1, 1, 'Depósito Bancario', '9643230745b95f4328d8c8.jpg', '2018-09-10', '2018-09-10', 'servicio_empresarial', 'Esparza Castro José Antonio');

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
  `surname_p` varchar(60) CHARACTER SET utf8 NOT NULL,
  `surname_m` varchar(50) CHARACTER SET utf8 NOT NULL,
  `telephone` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `gender` tinyint(1) NOT NULL,
  `email` varchar(60) CHARACTER SET utf8 NOT NULL,
  `password` varchar(60) CHARACTER SET utf8 NOT NULL,
  `creation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `user_register`
--

INSERT INTO `user_register` (`id`, `name`, `surname_p`, `surname_m`, `telephone`, `gender`, `email`, `password`, `creation_date`) VALUES
(120, 'Erika', 'Roldan', '', '5516915144', 2, 'jcastroe1000@alumno.ipn.mx', '1234', '2018-08-19'),
(121, 'JosÃ© Antonio', 'Esparza', 'Esparza', '5516915144', 1, 'aguilita_ameri@hotmail.com', '$1$somethin$c1scW4MUVeVH8ibuvR063/', '2018-08-19'),
(122, 'JosÃ© Antonio', 'Esparza', 'Esparza', '5516915144', 1, 'jcastro@anzen.com.mx', '$1$somethin$COEJ0zKut7beTen0WfTr2/', '2018-08-24');

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
-- Indices de la tabla `biografia`
--
ALTER TABLE `biografia`
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
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id_prof`);

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
-- AUTO_INCREMENT de la tabla `biografia`
--
ALTER TABLE `biografia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estados_republica`
--
ALTER TABLE `estados_republica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id_faqs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id_prof` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `registro_eventos`
--
ALTER TABLE `registro_eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
