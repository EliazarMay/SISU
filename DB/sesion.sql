-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-06-2021 a las 07:08:25
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sesion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--
-- Creación: 04-05-2021 a las 13:37:07
-- Última actualización: 21-06-2021 a las 07:42:08
--

CREATE TABLE `areas` (
  `id_areas` int(11) NOT NULL,
  `area` varchar(50) NOT NULL DEFAULT '0',
  `año` year(4) NOT NULL DEFAULT 2021,
  `periodo_inicial` varchar(50) NOT NULL DEFAULT 'Enero',
  `periodo_final` varchar(50) NOT NULL DEFAULT 'Diciembre',
  `id_pilar` int(11) NOT NULL DEFAULT 0,
  `id_usuario` int(11) NOT NULL DEFAULT 0,
  `id_usuario2` varchar(50) DEFAULT NULL,
  `id_usuario3` varchar(50) NOT NULL DEFAULT '',
  `id_usuario4` varchar(50) NOT NULL DEFAULT '',
  `id_usuario5` varchar(50) NOT NULL DEFAULT '',
  `id_usuario6` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA `areas`:
--   `id_usuario`
--       `usuarios` -> `id`
--

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id_areas`, `area`, `año`, `periodo_inicial`, `periodo_final`, `id_pilar`, `id_usuario`, `id_usuario2`, `id_usuario3`, `id_usuario4`, `id_usuario5`, `id_usuario6`) VALUES
(1, 'Servicios Escolares', 2021, 'Enero', 'Diciembre', 1, 5, NULL, '0', '0', '0', NULL),
(2, 'Educación Continua', 2021, 'Enero', 'Diciembre', 1, 6, NULL, '0', '0', '0', NULL),
(3, 'Idiomas', 2021, 'Enero', 'Diciembre', 1, 7, NULL, '0', '0', '0', NULL),
(4, 'Recursos Humanos', 2021, 'Enero', 'Diciembre', 1, 8, NULL, '0', '0', '0', NULL),
(5, 'Servicio Social', 2021, 'Enero', 'Diciembre', 1, 9, NULL, '0', '0', '0', NULL),
(6, 'Desarrollo Humano', 2021, 'Enero', 'Diciembre', 1, 10, NULL, '0', '0', '0', NULL),
(7, 'Difusión de la Cultura y la Comunicación', 2021, 'Enero', 'Diciembre', 1, 11, NULL, '0', '0', '0', NULL),
(8, 'Prácticas Profesionales', 2021, 'Enero', 'Diciembre', 1, 12, NULL, '0', '0', '0', NULL),
(9, 'Movilidad Nacional e Internacional', 2021, 'Enero', 'Diciembre', 1, 13, NULL, '0', '0', '0', NULL),
(10, 'Desarrollo Estudiantil', 2021, 'Enero', 'Diciembre', 1, 14, NULL, '0', '0', '0', NULL),
(21, 'Infraestructura', 2021, 'Enero', 'Enero', 2, 110, NULL, '0', '0', '0', NULL),
(22, 'Ciencias Básicas e Ingenierías', 2021, 'Enero', 'Enero', 2, 105, NULL, '0', '0', '0', NULL),
(23, 'Comité de Sostenibilidad', 2021, 'Enero', 'Enero', 2, 104, NULL, '0', '0', '0', NULL),
(25, 'Compras', 2021, 'Enero', 'Enero', 3, 106, NULL, '0', '0', '0', NULL),
(26, 'Patronato de la Universidad', 2021, 'Enero', 'Enero', 3, 107, NULL, '0', '0', '0', NULL),
(27, 'Becas Académicas', 2021, 'Enero', 'Enero', 3, 5, NULL, '0', '0', '0', NULL),
(28, 'Unidad de Transparencia', 2021, 'Enero', 'Diciembre', 4, 111, NULL, '0', '0', '0', NULL),
(29, 'Alianzas', 2021, 'Enero', 'Diciembre', 5, 73, 'Alejandra Cazal Ferreira', 'Juán Felipe Pérez Vázquez', 'Abelardo Castillo Galeana', 'María Cristina Canul Pech', 'Guillermina Pech Pech'),
(30, 'Infraestructura', 2021, 'Enero', 'Enero', 6, 110, NULL, '0', '0', '0', NULL),
(49, 'Producción Académica y Cuerpos Académicos', 2021, 'Enero', 'Diciembre', 6, 53, NULL, '0', '0', '0', NULL),
(50, 'Biblioteca ', 2021, 'Enero', 'Diciembre', 6, 113, NULL, '0', '0', '0', NULL),
(110, 'Evaluación al desempeño docente', 2021, 'Enero', 'Enero', 1, 109, NULL, '0', '0', '0', NULL),
(133, 'test', 2021, 'Enero', 'Diciembre', 0, 1, '', '', '', '', NULL),
(134, 'Comité de Ética y Conflictos de Interés', 2021, 'Enero', 'Diciembre', 4, 112, NULL, '', '', '', NULL),
(135, 'Nodos de Impulso a la Economía Social y Solidaria', 2021, 'Enero', 'Diciembre', 5, 103, NULL, '', '', '', NULL),
(136, 'Ludoteca', 2021, 'Enero', 'Diciembre', 1, 8, NULL, '', '', '', NULL),
(137, 'Clima Laboral y Satisfacción Estudiantil', 2021, 'Enero', 'Diciembre', 1, 108, NULL, '', '', '', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `años_periodos`
--
-- Creación: 03-03-2021 a las 06:02:44
--

CREATE TABLE `años_periodos` (
  `id_año` int(11) NOT NULL,
  `año` year(4) DEFAULT 2000,
  `id_periodo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA `años_periodos`:
--

--
-- Volcado de datos para la tabla `años_periodos`
--

INSERT INTO `años_periodos` (`id_año`, `año`, `id_periodo`) VALUES
(1, 2020, 1),
(2, 2021, 1),
(3, 2022, 1),
(4, 2023, 1),
(5, 2024, 1),
(6, 2025, 1),
(7, 2026, 1),
(8, 2027, 1),
(9, 2028, 1),
(10, 2029, 1),
(11, 2030, 1),
(12, 2031, 1),
(13, 2032, 1),
(14, 2033, 1),
(15, 2034, 1),
(16, 2035, 1),
(17, 2036, 1),
(18, 2037, 1),
(19, 2038, 1),
(20, 2039, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contador`
--
-- Creación: 26-04-2021 a las 22:04:04
--

CREATE TABLE `contador` (
  `id_contador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA `contador`:
--

--
-- Volcado de datos para la tabla `contador`
--

INSERT INTO `contador` (`id_contador`) VALUES
(1),
(2),
(3),
(4),
(5),
(6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `esquemas_colaboracion`
--
-- Creación: 16-04-2021 a las 22:55:31
--

CREATE TABLE `esquemas_colaboracion` (
  `id_esquema` int(11) NOT NULL,
  `esquema` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA `esquemas_colaboracion`:
--

--
-- Volcado de datos para la tabla `esquemas_colaboracion`
--

INSERT INTO `esquemas_colaboracion` (`id_esquema`, `esquema`) VALUES
(1, 'Becas Académicas'),
(2, 'Capacitación y Formación'),
(3, 'Comité Organizador'),
(4, 'Convenio para Proyecto'),
(5, 'Convenio para Programa'),
(6, 'Convenio para Evento'),
(7, 'Donativo Económico'),
(8, 'Donativo en Especie'),
(9, 'Evaluación de Programas'),
(10, 'Integrante de Comité'),
(11, 'Integrante de Consejo'),
(12, 'Integrante de NODESS'),
(13, 'Integrante de Red'),
(14, 'Miembro Adherido'),
(15, 'Préstamo de Instalaciones'),
(16, 'Proyecto de Investigación Académica'),
(17, 'Sede para Evento'),
(18, 'Soporte Técnico'),
(27, 'test');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus_indicadores`
--
-- Creación: 03-03-2021 a las 06:02:44
--

CREATE TABLE `estatus_indicadores` (
  `id_estatus_indicador` int(11) NOT NULL,
  `estatus_indicador` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA `estatus_indicadores`:
--

--
-- Volcado de datos para la tabla `estatus_indicadores`
--

INSERT INTO `estatus_indicadores` (`id_estatus_indicador`, `estatus_indicador`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indicadores`
--
-- Creación: 14-06-2021 a las 06:59:53
-- Última actualización: 21-06-2021 a las 13:29:49
--

CREATE TABLE `indicadores` (
  `id_indicador` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `indicador` varchar(255) NOT NULL,
  `periodo_1` int(11) NOT NULL,
  `periodo_2` int(11) NOT NULL,
  `periodo_3` int(11) NOT NULL,
  `conteo_anual` int(11) NOT NULL,
  `enlace` text DEFAULT NULL,
  `id_area` int(11) DEFAULT NULL,
  `id_estatus_indicador` int(11) NOT NULL,
  `FechaCreacion` year(4) DEFAULT NULL,
  `sector` varchar(50) DEFAULT NULL,
  `tipo_colaboracion` varchar(50) DEFAULT NULL,
  `informacion` varchar(255) DEFAULT NULL,
  `tipo_indicador` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA `indicadores`:
--

--
-- Volcado de datos para la tabla `indicadores`
--

INSERT INTO `indicadores` (`id_indicador`, `numero`, `indicador`, `periodo_1`, `periodo_2`, `periodo_3`, `conteo_anual`, `enlace`, `id_area`, `id_estatus_indicador`, `FechaCreacion`, `sector`, `tipo_colaboracion`, `informacion`, `tipo_indicador`) VALUES
(1, 1, 'Número de estudiantes matriculados en Licenciaturas', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, 'Numerico'),
(2, 2, 'Número de estudiantes matriculados en Gastronomía', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(3, 3, 'Número de estudiantes matriculados en Turismo Sustentable y Gestión Hotelera', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(4, 4, 'Número de estudiantes matriculados en Turismo Alternativo y Gestión del Patrimonio', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(5, 5, 'Número de estudiantes matriculados en Innovación Empresarial', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(6, 6, 'Número de estudiantes matriculados en Negocios Internacionales', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(7, 7, 'Número de estudiantes matriculados en Ingeniería Ambiental', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(8, 8, 'Número de estudiantes matriculados en Ingeniería en Datos e Inteligencia Organizacional', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(9, 9, 'Número de estudiantes matriculados en Ingeniería en Logística y Cadena de Suministro', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(10, 10, 'Número de estudiantes matriculados en Ingeniería Industrial', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(11, 11, 'Número de estudiantes matriculados en Ingeniería Telemática', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(12, 12, 'Número de estudiantes de Maestría', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(13, 13, 'Número de estudiantes matriculados en Maestría en Innovación y Gestión del Aprendizaje', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(14, 14, 'Número de estudiantes matriculados en Maestría en Urbanismo Sustentable y Bioclimática', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(15, 15, 'Número de estudiantes matriculados en Maestría en Planeación Turística Sustentable', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(16, 16, 'Número de estudiantes matriculados en Maestría en Logística y Cadena de Suministro', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(17, 17, 'Número de estudiantes matriculados en Maestría en Negocios Electrónicos', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(18, 18, 'Número de estudiantes matriculados en Maestría en Gestión de Proyectos', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(19, 19, 'Número de estudiantes matriculados en Maestría en Analítica e Inteligencia de Negocios', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(20, 20, 'Número de estudiantes matriculados en Maestría Internacional en Gastronomía', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(21, 21, 'Número de estudiantes matriculados en Maestría en Visualización de la Información', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(22, 22, 'Incremento en la matrícula de Licenciaturas y Posgrados con respecto al año anterior', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(23, 23, 'Número de egresados en Licenciaturas', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(24, 24, 'Número de egresados en Gastronomía', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(25, 25, 'Número de egresados en Turismo Sustentable y Gestión Hotelera', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(26, 26, 'Número de egresados en Turismo Alternativo y Gestión del Patrimonio', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(27, 27, 'Número de egresados en Innovación Empresarial', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(28, 28, 'Número de egresados en Negocios Internacionales', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(29, 29, 'Número de egresados en Ingeniería Ambiental', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(30, 30, 'Número de egresados en Ingeniería en Datos e Inteligencia Organizacional', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(31, 31, 'Número de egresados en Ingeniería en Logística y Cadena de Suministro', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(32, 32, 'Número de egresados en Ingeniería Industrial', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(33, 33, 'Número de egresados en Ingeniería Telemática', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(34, 34, 'Número de egresados títulados en Licenciaturas', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(35, 35, 'Número de egresados en Maestrías', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(36, 36, 'Número de egresados en Maestría en Innovación y Gestión del Aprendizaje', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(37, 37, 'Número de egresados en Maestría en Urbanismo Sustentable y Bioclimática', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(38, 38, 'Número de egresados en Maestría en Planeación Turística Sustentable', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(39, 39, 'Número de egresados en Maestría en Logística y Cadena de Suministro', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(40, 40, 'Número de egresados en Maestría en Negocios Electrónicos', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(41, 41, 'Número de egresados en Maestría en Gestión de Proyectos', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(42, 42, 'Número de egresados en Maestría en Analítica e Inteligencia de Negocios', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(43, 43, 'Número de egresados en Maestría Internacional en Gastronomía', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(44, 44, 'Número de egresados en Maestría en Visualización de la Información', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(45, 45, 'Número de egresados títulados en Maestrías', 0, 0, 0, 0, '', 1, 1, 2021, NULL, NULL, NULL, NULL),
(46, 1, 'Número de participantes inscritos en programas de educación continua', 50, 50, 50, 0, '', 2, 1, 2021, NULL, NULL, NULL, NULL),
(47, 2, 'Número de diplomados, talleres y cursos ofertados en educación continua', 10, 10, 10, 0, '', 2, 1, 2021, NULL, NULL, NULL, NULL),
(48, 3, 'Número de participantes de educación continua en diplomados', 10, 10, 10, 0, '', 2, 1, 2021, NULL, NULL, NULL, NULL),
(49, 4, 'Número de participantes de educación continua en talleres', 5, 5, 5, 0, '', 2, 1, 2021, NULL, NULL, NULL, NULL),
(50, 5, 'Número de participantes de educación continua en cursos', 1, 0, 0, 0, '', 2, 1, 2021, NULL, NULL, NULL, NULL),
(51, 1, 'Número de estudiantes y participantes externos inscritos en todos los programas de idiomas', 0, 0, 0, 0, NULL, 3, 1, 2021, NULL, NULL, NULL, NULL),
(52, 2, 'Número de estudiantes y participantes externos inscritos en el programa del idioma inglés', 0, 0, 0, 0, NULL, 3, 1, 2021, NULL, NULL, NULL, NULL),
(53, 3, 'Número de estudiantes y participantes externos inscritos en el programa del idioma chino', 0, 0, 0, 0, NULL, 3, 1, 2021, NULL, NULL, NULL, NULL),
(54, 4, 'Número de estudiantes y participantes externos inscritos en el programa del idioma portugués', 0, 0, 0, 0, NULL, 3, 1, 2021, NULL, NULL, NULL, NULL),
(55, 5, 'Número de estudiantes y participantes externos inscritos en el programa del idioma ruso', 0, 0, 0, 0, NULL, 3, 1, 2021, NULL, NULL, NULL, NULL),
(56, 6, 'Número de estudiantes y participantes externos inscritos en el programa del idioma alemán', 0, 0, 0, 0, NULL, 3, 1, 2021, NULL, NULL, NULL, NULL),
(57, 7, 'Número de estudiantes y participantes externos inscritos en el programa del idioma italiano', 0, 0, 0, 0, NULL, 3, 1, 2021, NULL, NULL, NULL, NULL),
(58, 8, 'Número de estudiantes y participantes externos inscritos en el programa del idioma español', 0, 0, 0, 0, NULL, 3, 1, 2021, NULL, NULL, NULL, NULL),
(59, 9, 'Número de estudiantes y participantes externos inscritos en el programa del idioma japonés', 0, 0, 0, 0, NULL, 3, 1, 2021, NULL, NULL, NULL, NULL),
(60, 10, 'Número de estudiantes y participantes externos inscritos en curso del idioma francés', 0, 0, 0, 0, NULL, 3, 1, 2021, NULL, NULL, NULL, NULL),
(61, 11, 'Número de estudiantes y participantes externos inscritos en el Diplomado de Francés en los niveles DELF A1, A2, B1 y B2', 0, 0, 0, 0, NULL, 3, 1, 2021, NULL, NULL, NULL, NULL),
(62, 12, 'Número de estudiantes y participantes externos certificados bajo el Forward Thinking English Testing (APTIS).', 0, 0, 0, 0, NULL, 3, 1, 2021, NULL, NULL, NULL, NULL),
(63, 13, 'Número de estudiantes y participantes externos certificados bajo el International English Language Testing System (IELTS)', 0, 0, 0, 0, NULL, 3, 1, 2021, NULL, NULL, NULL, NULL),
(64, 14, 'Número de estudiantes y participantes externos certificados bajo el Hanyu Shuiping Kaoshi en los niveles Chino Introducción, Chino 1 y Chino 2.', 0, 0, 0, 0, NULL, 3, 1, 2021, NULL, NULL, NULL, NULL),
(65, 15, 'Número de estudiantes usuarios del Self Access Center', 0, 0, 0, 0, NULL, 3, 1, 2021, NULL, NULL, NULL, NULL),
(66, 1, 'Número de colaboradores', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(67, 2, 'Número de colaboradores hombres', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(68, 3, 'Número de colaboradores mujeres', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(69, 4, 'Número de colaboradores en posiciones directivas (Rectoría, Secretarías, Coordinación Administrativa)', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(70, 5, 'Número de colaboradores hombres en posiciones directivas (Rectoría, Secretarías, Coordinación Administrativa)', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(71, 6, 'Número de colaboradores mujeres en posiciones directivas (Rectoría, Secretarías, Coordinación Administrativa)', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(72, 7, 'Número de colaboradores en posiciones de mando medio (Jefaturas de Departamento y Jefes de Oficina)', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(73, 8, 'Número de colaboradores hombres en posiciones de mando medio (Jefaturas de Departamento y Jefes de Oficina)', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(74, 9, 'Número de colaboradores mujeres en posiciones de mando medio (Jefaturas de Departamento y Jefes de Oficina)', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(75, 10, 'Número de colaboradores en posiciones administrativas y operativas (Docentes de tiempo completo, docentes de asignatura, asistentes, enlaces, auxiliares, etc.)', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(76, 11, 'Número de colaboradores hombres en posiciones administrativas y operativas (Docentes de tiempo completo, docentes de asignatura, asistentes, enlaces, auxiliares, etc.)', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(77, 12, 'Número de colaboradores mujeres en posiciones administrativas y operativas (Docentes de tiempo completo, docentes de asignatura, asistentes, enlaces, auxiliares, etc.)', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(78, 13, 'Número de colaboradores menores a 18 años', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(79, 14, 'Número de colaboradores entre 18 a 25 años', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(80, 15, 'Número de colaboradores entre 26 a 35 años', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(81, 16, 'Número de colaboradores entre 36 a 45 años', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(82, 17, 'Número de colaboradores entre 46 y 55 años', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(83, 18, 'Número de colaboradores de 56 años en adelante', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(84, 19, 'Número de colaboradores procedentes de la Península de Yucatán (Quintana Roo, Yucatán y Campeche)', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(85, 20, 'Número de colaboradores procedentes del resto de México', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(86, 21, 'Número de colaboradores procedentes del extranjero', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(87, 22, 'Número de docentes', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(88, 23, 'Número de docentes de tiempo completo', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(89, 24, 'Número de docentes hombres de tiempo completo', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(90, 25, 'Número de docentes mujeres de tiempo completo', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(91, 26, 'Número de docentes de asignatura', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(92, 27, 'Número de docentes hombres de asignatura', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(93, 28, 'Número de docentes mujeres de asignatura', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(94, 29, 'Número de docentes con grado de maestría', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(95, 30, 'Número de docentes hombres con grado de maestría', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(96, 31, 'Número de docentes mujeres con grado de maestría', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(97, 32, 'Número de docentes con grado de doctor', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(98, 33, 'Número de docentes hombres con grado de doctor', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(99, 34, 'Número de docentes mujeres con grado de doctor', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(100, 35, 'Número de colaboradores que son madres', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(101, 36, 'Número de colaboradores que asistieron al festejo del Día de la Madre', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(102, 37, 'Número de colaboradores que son padres', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(103, 38, 'Número de colaboradores que asistieron al festejo del Día del Padre', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(104, 39, 'Número de colaboradores que asistieron al evento de cierre de actividades', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(105, 40, 'Inversión destinada por el Patronato de la Universidad del Caribe para el evento del cierre de actividades', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(106, 41, 'Número de permisos otorgados para horarios flexibles de paternidad', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(107, 42, 'Número de permisos otorgados para horarios flexibles de maternidad', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(108, 43, 'Número de colaboradores promovidos', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(109, 44, 'Número de colaboradores hombres promovidos', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(110, 45, 'Número de colaboradores mujeres promovidos', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(111, 46, 'Número de ediciones de Jornadas de Salud Preventiva por parte del Instituto Mexicano del Seguro Social realizadas en 2019', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(112, 47, 'Número de colaboradores que asistieron a las Jornadas de Salud Preventiva por parte del Instituto Mexicano del Seguro Social en 2019', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(113, 48, 'Número de estudiantes que asistieron a las Jornadas de Salud Preventiva por parte del Instituto Mexicano del Seguro Social en 2019', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(114, 49, 'Número de ediciones de Campañas de Salud Visual realizadas en 2019', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(115, 50, 'Número de colaboradores que asistieron a las Campañas de Salud Visual en 2019', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(116, 51, 'Número de estudiantes que asistieron a las Campañas de Salud Visual en 2019', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(117, 52, 'Número de colaboradores del área de infraestructura que recibieron uniformes y equipo de protección', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(118, 53, 'Número de colaboradores a los que se les realizó cambio de sillas de escritorio tradicionales por ergonómicas en 2019', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(119, 54, 'Número de convenios formalizados para descuentos a colaboradores en comercios locales', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(120, 55, 'Número de colaboradores reconocidos por 5 años', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(121, 56, 'Número de colaboradores reconocidos por 10 años', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(122, 57, 'Número de colaboradores reconocidos por 15 años', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(123, 58, 'Número de colaboradores que asistieron al festejo del Día del Maestro', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(124, 59, 'Número de colaboradores que fueron reconocidos en el Día del Maestro', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(125, 60, 'Nombre (s) y apellidos del mejor docente de carrera reconocido', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(126, 61, 'Nombre (s) y apellidos del mejor docente investigador', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(127, 62, 'Nombre (s) y apellidos del mejor docente de inglés/técnico de apoyo', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(128, 63, 'Nombre (s) y apellidos del mejor docente de asignatura reconocido', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(129, 64, 'Monto de gratificación económica otorgado al mejor docente investigador', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(130, 65, 'Monto de gratificación económica otorgado al mejor docente de carrera', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(131, 66, 'Monto de gratificación económica otorgado al mejor docente de asignatura', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(132, 67, 'Número de colaboradores que respondieron la encuesta anual de clima laboral', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(133, 68, 'Número de colaboradores capacitados sobre el Código de Ética y de Conducta del Gobierno del Estado de Quintana Roo.', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(134, 69, 'Número de sesiones de capacitación sobre el Código de Ética y de Conducta del Gobierno del Estado de Quintana Roo', 0, 0, 0, 0, NULL, 4, 1, 2021, NULL, NULL, NULL, NULL),
(135, 1, 'Número de años del Programa de Vinculo Comunitario', 0, 0, 0, 0, NULL, 5, 1, 2021, NULL, NULL, NULL, NULL),
(136, 2, 'Número de ediciones por año del Programa de Vinculo Comunitario', 0, 0, 0, 0, NULL, 5, 1, 2021, NULL, NULL, NULL, NULL),
(137, 3, 'Número de talleres del Programa de Vinculo Comunitario', 0, 0, 0, 0, NULL, 5, 1, 2021, NULL, NULL, NULL, NULL),
(138, 4, 'Número de estudiantes de servicio social participantes del Programa de Vinculo Comunitario', 0, 0, 0, 0, NULL, 5, 1, 2021, NULL, NULL, NULL, NULL),
(139, 5, 'Número de mentores de estudiantes de servicio social del Programa de Vinculo Comunitario', 0, 0, 0, 0, NULL, 5, 1, 2021, NULL, NULL, NULL, NULL),
(140, 6, 'Número de voluntarios', 0, 0, 0, 0, NULL, 5, 1, 2021, NULL, NULL, NULL, NULL),
(141, 7, 'Número de hombres fueron beneficiadas en el Programa de Vínculo Comunitario', 0, 0, 0, 0, NULL, 5, 1, 2021, NULL, NULL, NULL, NULL),
(142, 8, 'Número de mujeres fueron beneficiadas en el Programa de Vínculo Comunitario', 0, 0, 0, 0, NULL, 5, 1, 2021, NULL, NULL, NULL, NULL),
(143, 9, 'Número de proyectos de servicio social', 0, 0, 0, 0, NULL, 5, 1, 2021, NULL, NULL, NULL, NULL),
(144, 10, 'Número de estudiantes que acreditaron su servicio social', 0, 0, 0, 0, NULL, 5, 1, 2021, NULL, NULL, NULL, NULL),
(145, 11, 'Número de organizaciones de sociedad civil e instituciones públicas para proyectos de servicio social', 0, 0, 0, 0, NULL, 5, 1, 2021, NULL, NULL, NULL, NULL),
(146, 1, 'Número de comunidades mayas participantes en el Tianguis del Mayab', 0, 0, 0, 0, NULL, 6, 1, 2021, NULL, NULL, NULL, NULL),
(147, 2, 'Listado del nombre de las comunidades mayas participantes en el Tianguis del Mayab', 0, 0, 0, 0, NULL, 6, 1, 2021, NULL, NULL, NULL, NULL),
(148, 3, 'Número de productores y artesanos participantes en el Tianguis del Mayab', 0, 0, 0, 0, NULL, 6, 1, 2021, NULL, NULL, NULL, NULL),
(149, 4, 'Número de ediciones del Tianguis del Mayab', 0, 0, 0, 0, NULL, 6, 1, 2021, NULL, NULL, NULL, NULL),
(150, 5, 'Número de asistentes de la comunidad universitaria participantes en los días del Tianguis del Mayab', 0, 0, 0, 0, NULL, 6, 1, 2021, NULL, NULL, NULL, NULL),
(151, 1, 'Número de eventos de contenido disciplinar', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(152, 2, 'Número de asistentes en los eventos de contenido disciplinar', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(153, 3, 'Número de proyecciones de la Ópera Met de Nueva York', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(154, 4, 'Número de asistentes de la Ópera Met de Nueva York', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(155, 5, 'Número de asistentes promedio por cada proyección de la Ópera Met de Nueva York', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(156, 6, 'Número de proyecciones del Teatro Ntl. Theatre de Londres', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(157, 7, 'Número de asistentes del Teatro Ntl. Theatre de Londres', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(158, 8, 'Número de asistentes promedio por cada proyección del Teatro Ntl. Theatre de Londres', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(159, 9, 'Número de proyecciones de BioCinema', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(160, 10, 'Número de asistentes en las proyecciones de BioCinema', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(161, 11, 'Número de asistentes promedio por cada proyección de BioCinema', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(162, 12, 'Número de proyecciones de Cinema Arte', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(163, 13, 'Número de asistentes en las proyecciones de Cinema Arte', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(164, 14, 'Número de asistentes promedio por cada proyección de Cinema Arte', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(165, 15, 'Número de proyecciones de la edición anual del Festival Internacional del Cervantino', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(166, 16, 'Número de asistentes de las proyecciones de la edición anual del Festival Internacional del Cervantino', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(167, 17, 'Número de asistentes promedio de cada proyección de la edición anual del Festival Internacional del Cervantino', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(168, 18, 'Número de proyecciones del My French Film Festival', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(169, 19, 'Número de asistentes en las proyecciones del My French Film Festival', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(170, 20, 'Número de asistentes promedio por cada proyección del My French Film Festival', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(171, 21, 'Número de proyecciones de la edición anual del Foro Internacional Cine', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(172, 22, 'Número de asistentes en las proyecciones de la edición anual del Foro Internacional Cine', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(173, 23, 'Número de asistentes promedio por cada proyección de la edición anual del Foro Internacional Cine', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(174, 24, 'Número de proyecciones de conciertos Vota Rock', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(175, 25, 'Número de asistentes en las proyecciones de conciertos Vota Rock', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(176, 26, 'Número de asistentes promedio por cada proyección de concierto Vota Rock', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(177, 27, 'Número de ediciones de conciertos musicales en vivo', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(178, 28, 'Número de asistentes en los conciertos musicales en vivo', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(179, 29, 'Número de asistentes promedio por cada edición en los conciertos musicales en vivo', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(180, 30, 'Número de ediciones de pláticas de presentaciones de libro', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(181, 31, 'Número de asistentes en las pláticas de presentaciones de libro', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(182, 32, 'Número de asistentes promedio por cada edición de pláticas de presentaciones de libro', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(183, 33, 'Número de ediciones de pláticas de Viernes en la Ciencia', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(184, 34, 'Número de asistentes en las pláticas de Viernes en la Ciencia', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(185, 35, 'Número de asistentes promedio por cada edición de pláticas de Viernes en la Ciencia', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(186, 36, 'Número de ediciones de teatro en vivo', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(187, 37, 'Número de asistentes en teatro en vivo', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(188, 38, 'Número de asistentes promedio por cada edición de teatro en vivo', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(189, 39, 'Número de eventos del Festival Cultural Hungría en Cancún', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(190, 40, 'Número de asistentes en el Festival Cultural Hungría en Cancún', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(191, 41, 'Número de asistentes promedio durante el Festival Cultural Hungría en Cancún', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(192, 42, 'Número de proyecciones de conferencias', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(193, 43, 'Número de asistentes en las conferencias', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(194, 44, 'Número de asistentes promedio por cada conferencia', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(195, 45, 'Número total de proyecciones por todos los eventos anteriores durante el año', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(196, 46, 'Número total de asistentes por todos los eventos anteriores durante el año', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(197, 47, 'Número de asistentes promedio por evento por todos los eventos anterios durante el año', 0, 0, 0, 0, NULL, 7, 1, 2021, NULL, NULL, NULL, NULL),
(198, 1, 'Número de estudiantes que acreditaron sus prácticas profesionales en Quintana Roo', 0, 0, 0, 0, NULL, 8, 1, 2021, NULL, NULL, NULL, NULL),
(199, 2, 'Número de estudiantes que realizaron y acreditaron sus prácticas profesionales en el resto de México', 0, 0, 0, 0, NULL, 8, 1, 2021, NULL, NULL, NULL, NULL),
(200, 3, 'Número de estudiantes que realizaron y acreditaron sus prácticas profesionales en el extranjero', 0, 0, 0, 0, NULL, 8, 1, 2021, NULL, NULL, NULL, NULL),
(201, 4, 'Listado de países donde los estudiantes realizaron y acreditaron sus prácticas profesionales', 0, 0, 0, 0, NULL, 8, 1, 2021, NULL, NULL, NULL, NULL),
(202, 5, 'Número de convenios establecidos para prácticas profesionales en Quintana Roo', 0, 0, 0, 0, NULL, 8, 1, 2021, NULL, NULL, NULL, NULL),
(203, 6, 'Número de convenios establecidos para prácticas profesionales en resto de México', 0, 0, 0, 0, NULL, 8, 1, 2021, NULL, NULL, NULL, NULL),
(204, 7, 'Número de convenios establecidos para prácticas profesionales en el extranjero', 0, 0, 0, 0, NULL, 8, 1, 2021, NULL, NULL, NULL, NULL),
(205, 8, 'Número de empresas, organizaciones e instituciones que fueron parte de la oferta de opciones durante el año para prácticas profesionales en Quintana Roo', 0, 0, 0, 0, NULL, 8, 1, 2021, NULL, NULL, NULL, NULL),
(206, 9, 'Número de empresas, organizaciones e instituciones que fueron parte de la oferta de opciones durante el año para prácticas profesionales en el resto de México', 0, 0, 0, 0, NULL, 8, 1, 2021, NULL, NULL, NULL, NULL),
(207, 10, 'Número de empresas, organizaciones e instituciones que fueron parte de la oferta de opciones durante el año para prácticas profesionales en el extranjero', 0, 0, 0, 0, NULL, 8, 1, 2021, NULL, NULL, NULL, NULL),
(208, 1, 'Número de estudiantes que participaron en movilidad nacional', 0, 0, 0, 0, NULL, 9, 1, 2021, NULL, NULL, NULL, NULL),
(209, 2, 'Número de estudiantes que participaron en movilidad internacional', 0, 0, 0, 0, NULL, 9, 1, 2021, NULL, NULL, NULL, NULL),
(210, 3, 'Listado de países de destino de los estudiantes que participaron en movilidad internacional', 0, 0, 0, 0, NULL, 9, 1, 2021, NULL, NULL, NULL, NULL),
(211, 4, 'Número de estudiantes recibidos de universidades de México', 0, 0, 0, 0, NULL, 9, 1, 2021, NULL, NULL, NULL, NULL),
(212, 5, 'Número de estudiantes recibidos de universidades del extranjero', 0, 0, 0, 0, NULL, 9, 1, 2021, NULL, NULL, NULL, NULL),
(213, 6, 'Listado de países de procedencia de estudiantes recibidos de universidades del extranjero', 0, 0, 0, 0, NULL, 9, 1, 2021, NULL, NULL, NULL, NULL),
(214, 7, 'Número de convenios establecidos con universidades para movilidad nacional', 0, 0, 0, 0, NULL, 9, 1, 2021, NULL, NULL, NULL, NULL),
(215, 8, 'Número de convenios establecidos con universidades para movilidad internacional', 0, 0, 0, 0, NULL, 9, 1, 2021, NULL, NULL, NULL, NULL),
(216, 9, 'Número de universidades que fueron parte de la oferta de opciones durante el año para movilidad dentro de México', 0, 0, 0, 0, NULL, 9, 1, 2021, NULL, NULL, NULL, NULL),
(217, 10, 'Listado de entidades federativas en donde se ubican las universidades para movilidad dentro de México', 0, 0, 0, 0, NULL, 9, 1, 2021, NULL, NULL, NULL, NULL),
(218, 11, 'Número de universidades que fueron parte de la oferta de opciones durante el año para movilidad en el extranjero', 0, 0, 0, 0, NULL, 9, 1, 2021, NULL, NULL, NULL, NULL),
(219, 12, 'Listado de países en donde se ubican las universidades para movilidad en el extranjero', 0, 0, 0, 0, NULL, 9, 1, 2021, NULL, NULL, NULL, NULL),
(220, 1, 'Número de estudiantes inscritos en talleres deportivos', 0, 0, 0, 0, NULL, 10, 1, 2021, NULL, NULL, NULL, NULL),
(221, 2, 'Número de estudiantes inscritos en ajedrez', 0, 0, 0, 0, NULL, 10, 1, 2021, NULL, NULL, NULL, NULL),
(222, 3, 'Número de estudiantes inscritos en natación', 0, 0, 0, 0, NULL, 10, 1, 2021, NULL, NULL, NULL, NULL),
(223, 4, 'Número de estudiantes inscritos en preparación física avanzada', 0, 0, 0, 0, NULL, 10, 1, 2021, NULL, NULL, NULL, NULL),
(224, 5, 'Número de estudiantes inscritos en tenis', 0, 0, 0, 0, NULL, 10, 1, 2021, NULL, NULL, NULL, NULL),
(225, 6, 'Número de estudiantes inscritos en tenis de mesa', 0, 0, 0, 0, NULL, 10, 1, 2021, NULL, NULL, NULL, NULL),
(226, 7, 'Número de estudiantes inscritos en yoga', 0, 0, 0, 0, NULL, 10, 1, 2021, NULL, NULL, NULL, NULL),
(227, 8, 'Número de estudiantes inscritos en basquetbol', 0, 0, 0, 0, NULL, 10, 1, 2021, NULL, NULL, NULL, NULL),
(228, 9, 'Número de estudiantes inscritos en tocho bandera', 0, 0, 0, 0, NULL, 10, 1, 2021, NULL, NULL, NULL, NULL),
(229, 10, 'Número de estudiantes inscritos en voleibol', 0, 0, 0, 0, NULL, 10, 1, 2021, NULL, NULL, NULL, NULL),
(230, 11, 'Número de estudiantes inscritos en fútbol', 0, 0, 0, 0, NULL, 10, 1, 2021, NULL, NULL, NULL, NULL),
(231, 12, 'Número de estudiantes inscritos en talleres artísticos y culturales', 0, 0, 0, 0, NULL, 10, 1, 2021, NULL, NULL, NULL, NULL),
(232, 13, 'Número de estudiantes inscritos en guitarra', 0, 0, 0, 0, NULL, 10, 1, 2021, NULL, NULL, NULL, NULL),
(233, 14, 'Número de estudiantes inscritos en entrenamiento auditivo musical', 0, 0, 0, 0, NULL, 10, 1, 2021, NULL, NULL, NULL, NULL),
(234, 15, 'Número de estudiantes inscritos en canto', 0, 0, 0, 0, NULL, 10, 1, 2021, NULL, NULL, NULL, NULL),
(235, 16, 'Número de estudiantes inscritos en bailes caribeños', 0, 0, 0, 0, NULL, 10, 1, 2021, NULL, NULL, NULL, NULL),
(236, 17, 'Número de estudiantes inscritos en salsa y merengue', 0, 0, 0, 0, NULL, 10, 1, 2021, NULL, NULL, NULL, NULL),
(237, 18, 'Número de estudiantes inscritos en apreciación cinematográfica', 0, 0, 0, 0, NULL, 10, 1, 2021, NULL, NULL, NULL, NULL),
(238, 19, 'Número de estudiantes inscritos en radio', 0, 0, 0, 0, NULL, 10, 1, 2021, NULL, NULL, NULL, NULL),
(239, 20, 'Número de estudiantes inscritos en teatro', 0, 0, 0, 0, NULL, 10, 1, 2021, NULL, NULL, NULL, NULL),
(240, 21, 'Número de estudiantes inscritos en dibujo y pintura', 0, 0, 0, 0, NULL, 10, 1, 2021, NULL, NULL, NULL, NULL),
(241, 22, 'Número de estudiantes inscritos en fotografía', 0, 0, 0, 0, NULL, 10, 1, 2021, NULL, NULL, NULL, NULL),
(242, 23, 'Número de estudiantes inscritos en encuadernación', 0, 0, 0, 0, NULL, 10, 1, 2021, NULL, NULL, NULL, NULL),
(243, 24, 'Número de estudiantes inscritos en escritura creativa', 0, 0, 0, 0, NULL, 10, 1, 2021, NULL, NULL, NULL, NULL),
(244, 1, 'Número total de proveedores', 0, 0, 0, 0, NULL, 25, 1, 2021, NULL, NULL, NULL, NULL),
(245, 2, 'Número de proveedores de Quintana Roo', 0, 0, 0, 0, NULL, 25, 1, 2021, NULL, NULL, NULL, NULL),
(246, 3, 'Número de proveedores de Yucatán', 0, 0, 0, 0, NULL, 25, 1, 2021, NULL, NULL, NULL, NULL),
(247, 4, 'Número de proveedores de Campeche', 0, 0, 0, 0, NULL, 25, 1, 2021, NULL, NULL, NULL, NULL),
(248, 5, 'Número de proveedores nacionales', 0, 0, 0, 0, NULL, 25, 1, 2021, NULL, NULL, NULL, NULL),
(249, 6, 'Número de proveedores extranjeros', 0, 0, 0, 0, NULL, 25, 1, 2021, NULL, NULL, NULL, NULL),
(250, 7, 'Número de proveedores de empresas grandes', 0, 0, 0, 0, NULL, 25, 1, 2021, NULL, NULL, NULL, NULL),
(251, 8, 'Número de proveedores de empresas medianas', 0, 0, 0, 0, NULL, 25, 1, 2021, NULL, NULL, NULL, NULL),
(252, 9, 'Número de proveedores de empresas chicas', 0, 0, 0, 0, NULL, 25, 1, 2021, NULL, NULL, NULL, NULL),
(253, 1, 'Número de uniformes otorgados a colaboradores', 0, 0, 0, 0, NULL, 26, 1, 2021, NULL, NULL, NULL, NULL),
(254, 2, 'Número de uniformes deportivos donados a estudiantes', 0, 0, 0, 0, NULL, 26, 1, 2021, NULL, NULL, NULL, NULL),
(255, 3, 'Número de pases otorgados a estudiantes para el National Theater of London', 0, 0, 0, 0, NULL, 26, 1, 2021, NULL, NULL, NULL, NULL),
(256, 4, 'Número de pases otorgados a estudiantes para el ópera Met de Nueva York', 0, 0, 0, 0, NULL, 26, 1, 2021, NULL, NULL, NULL, NULL),
(257, 5, 'Número de artículos promocionales donados a tráves de la Tienda Universitaria', 0, 0, 0, 0, NULL, 26, 1, 2021, NULL, NULL, NULL, NULL),
(258, 6, 'Número de becas para inscripción para estudiantes', 0, 0, 0, 0, NULL, 26, 1, 2021, NULL, NULL, NULL, NULL),
(259, 7, 'Número de estudiantes hombres beneficiados con becas para inscripción', 0, 0, 0, 0, NULL, 26, 1, 2021, NULL, NULL, NULL, NULL),
(260, 8, 'Número de estudiantes mujeres beneficiadas con becas para inscripci?n', 0, 0, 0, 0, NULL, 26, 1, 2021, NULL, NULL, NULL, NULL),
(261, 9, 'Número de becas para inscripción otorgadas a estudiantes de Gastronomía', 0, 0, 0, 0, NULL, 26, 1, 2021, NULL, NULL, NULL, NULL),
(262, 10, 'Número de becas para inscripción otorgadas a estudiantes de Turismo Sustentable y Gestión Hotelera', 0, 0, 0, 0, NULL, 26, 1, 2021, NULL, NULL, NULL, NULL),
(263, 11, 'Número de becas para inscripción otorgadas a estudiantes de Turismo Alternativo y Gestión del Patrimonio', 0, 0, 0, 0, NULL, 26, 1, 2021, NULL, NULL, NULL, NULL),
(264, 12, 'Número de becas para inscripción otorgadas a estudiantes de Innovación Empresarial', 0, 0, 0, 0, NULL, 26, 1, 2021, NULL, NULL, NULL, NULL),
(265, 13, 'Número de becas para inscripción otorgadas a estudiantes de Negocios Internacionales', 0, 0, 0, 0, NULL, 26, 1, 2021, NULL, NULL, NULL, NULL),
(266, 14, 'Número de becas para inscripción otorgadas a estudiantes de Ingeniería Ambiental', 0, 0, 0, 0, '', 26, 1, 2021, NULL, NULL, NULL, NULL),
(267, 15, 'Número de becas para inscripción otorgadas a estudiantes de Ingeniería en Datos e Inteligencia Organizacional', 0, 0, 0, 0, NULL, 26, 1, 2021, NULL, NULL, NULL, NULL),
(268, 16, 'Número de becas para inscripción otorgadas a estudiantes de Ingeniería en Logística y Cadena de Suministro', 0, 0, 0, 0, NULL, 26, 1, 2021, NULL, NULL, NULL, NULL),
(269, 17, 'Número de becas para inscripción otorgadas a estudiantes de Ingeniería Industrial', 0, 0, 0, 0, NULL, 26, 1, 2021, NULL, NULL, NULL, NULL),
(270, 18, 'Número de becas para inscripción otorgadas a estudiantes de Ingeniería en Telemática', 0, 0, 0, 0, NULL, 26, 1, 2021, NULL, NULL, NULL, NULL),
(271, 19, 'Número de organizaciones que realizaron donativos para becas de inscripción a estudiantes', 0, 0, 0, 0, NULL, 26, 1, 2021, NULL, NULL, NULL, NULL),
(272, 20, 'Listado de organizaciones que realizaron donativos para becas de inscripción a estudiantes a estudiantes', 0, 0, 0, 0, NULL, 26, 1, 2021, NULL, NULL, NULL, NULL),
(273, 21, 'Número de colaboradores que realizaron donativos para becas de inscripción a estudiantes', 0, 0, 0, 0, NULL, 26, 1, 2021, NULL, NULL, NULL, NULL),
(274, 22, 'Número de egresados que realizaron donativos para becas de inscripción a estudiantes', 0, 0, 0, 0, NULL, 26, 1, 2021, NULL, NULL, NULL, NULL),
(275, 23, 'N?mero de personas externas que realizaron donativos para becas de inscripci?n a estudiantes', 0, 0, 0, 0, NULL, 26, 1, 2021, NULL, NULL, NULL, NULL),
(276, 24, 'Monto total de donaciones recibidas para becas de inscripci?n a estudiantes', 0, 0, 0, 0, NULL, 26, 1, 2021, NULL, NULL, NULL, NULL),
(277, 25, 'Número de equipos de cómputo adquiridos para préstamo a estudiantes en situación de vulnerabilidad económica', 0, 0, 0, 0, NULL, 26, 1, 2021, NULL, NULL, NULL, NULL),
(278, 26, 'Número de equipos de cómputo prestados a estudiantes en situación de vulnerabilidad económica', 0, 0, 0, 0, NULL, 26, 1, 2021, NULL, NULL, NULL, NULL),
(279, 1, 'Número de becas institucionales otorgadas de Excelencia estudiantil', 0, 0, 0, 0, NULL, 27, 1, 2021, NULL, NULL, NULL, NULL),
(280, 2, 'Número de becas institucionales otorgadas de Apoyo Económico', 0, 0, 0, 0, NULL, 27, 1, 2021, NULL, NULL, NULL, NULL),
(281, 3, 'Número de becas institucionales otorgadas de Movilidad Internacional', 0, 0, 0, 0, NULL, 27, 1, 2021, NULL, NULL, NULL, NULL),
(282, 4, 'Número de becas institucionales otorgadas de Movilidad Nacional', 0, 0, 0, 0, NULL, 27, 1, 2021, NULL, NULL, NULL, NULL),
(283, 5, 'Número de becas otorgadas de Fundación Lomas', 0, 0, 0, 0, NULL, 27, 1, 2021, NULL, NULL, NULL, NULL),
(284, 6, 'Número de becas otorgadas de Jóvenes Indígenas', 0, 0, 0, 0, NULL, 27, 1, 2021, NULL, NULL, NULL, NULL),
(285, 7, 'Número de becas otorgadas de Fundación RDC Hoteles', 0, 0, 0, 0, NULL, 27, 1, 2021, NULL, NULL, NULL, NULL),
(286, 8, 'Némero de becas otorgadas de Jóvenes Escribiendo el Futuro', 0, 0, 0, 0, NULL, 27, 1, 2021, NULL, NULL, NULL, NULL),
(287, 9, 'Número de becas otorgadas de Manutención y Transporte', 0, 0, 0, 0, NULL, 27, 1, 2021, NULL, NULL, NULL, NULL),
(288, 10, 'Número de becas otorgadas de Manutención Alumnos de 2do. y 3er. año 2019 - SUR-SURESTE', 0, 0, 0, 0, NULL, 27, 1, 2021, NULL, NULL, NULL, NULL),
(289, 11, 'Número de becas otorgadas de Madres Mexicanas Jefas de Familia - CONACYT', 0, 0, 0, 0, NULL, 27, 1, 2021, NULL, NULL, NULL, NULL),
(290, 12, 'Número de becas otorgadas del Programa de Estancias de Investigación COQCYT 2019', 0, 0, 0, 0, NULL, 27, 1, 2021, NULL, NULL, NULL, NULL),
(414, 1, 'Número de mingitorios secos', 1, 0, 0, 0, '', 21, 1, 2021, NULL, NULL, NULL, NULL),
(415, 2, 'Número de metros cúbicos de agua consumidos', 1, 1, 1, 0, '', 21, 1, 2021, NULL, NULL, NULL, NULL),
(416, 3, 'Número de litros de agua utilizados por persona', 1, 1, 1, 0, '', 21, 1, 2021, NULL, NULL, NULL, NULL),
(417, 4, 'Número de kilogramos de residuos orgánicos e inorgánicos recuperados', 1, 1, 1, 3, '', 21, 1, 2021, NULL, NULL, NULL, NULL),
(418, 5, 'Número de kilogramos de residuos orgánicos recuperados para composta', 0, 0, 0, 0, '', 21, 1, 2021, NULL, NULL, NULL, NULL),
(419, 6, 'Número de kilogramos de playo recuperados', 0, 0, 0, 0, '', 21, 1, 2021, NULL, NULL, NULL, NULL),
(420, 7, 'Número de kilogramos de vidrio recuperados', 0, 0, 0, 0, '', 21, 1, 2021, NULL, NULL, NULL, NULL),
(421, 8, 'Número de kilogramos de cartón recuperados', 0, 0, 0, 0, '', 21, 1, 2021, NULL, NULL, NULL, NULL),
(422, 9, 'Número de kilogramos de papel recuperados', 0, 0, 0, 0, '', 21, 1, 2021, NULL, NULL, NULL, NULL),
(423, 10, 'Número de kilogramos de plásticos PET recuperados', 0, 0, 0, 0, '', 21, 1, 2021, NULL, NULL, NULL, NULL),
(424, 11, 'Número de kilogramos de aluminio recuperados', 0, 0, 0, 0, '', 21, 1, 2021, NULL, NULL, NULL, NULL),
(425, 12, 'Porcentaje de reciclaje de los residuos orgánicos e inorgánicos', 0, 0, 0, 0, '', 21, 1, 2021, NULL, NULL, NULL, NULL),
(426, 13, 'Número de kilogramos de basura en general que son enviados al relleno sanitario', 0, 0, 0, 0, '', 21, 1, 2021, NULL, NULL, NULL, NULL),
(427, 14, 'Ingresos recibidos por la venta de residuos inorgánicos con la empresa recicladora', 0, 0, 0, 0, '', 21, 1, 2021, NULL, NULL, NULL, NULL),
(428, 15, 'Nombre de la empresa recicladora a la que se le venden los residuos inorgánicos', 0, 0, 0, 0, '', 21, 1, 2021, NULL, NULL, NULL, NULL),
(429, 16, 'Número de cámaras de acopio para residuos orgánicos', 0, 0, 0, 0, '', 21, 1, 2021, NULL, NULL, NULL, NULL),
(430, 17, 'Número de cámaras de acopio para residuos inorgánicos', 0, 0, 0, 0, '', 21, 1, 2021, NULL, NULL, NULL, NULL),
(431, 18, 'Número de cámaras de acopio para residuos de manejo especial y peligrosos', 0, 0, 0, 0, '', 21, 1, 2021, NULL, NULL, NULL, NULL),
(432, 19, 'Número de lámparas con celdas solares instaladas', 0, 0, 0, 0, '', 21, 1, 2021, NULL, NULL, NULL, NULL),
(433, 20, 'Número de lámparas LED de pasillos', 0, 0, 0, 0, '', 21, 1, 2021, NULL, NULL, NULL, NULL),
(434, 21, 'Número de kilowatts consumidos', 0, 0, 0, 0, '', 21, 1, 2021, NULL, NULL, NULL, NULL),
(435, 22, 'Número de kilowatts consumidos por persona (estudiante/colaborador)', 0, 0, 0, 0, '', 21, 1, 2021, NULL, NULL, NULL, NULL),
(436, 23, 'Número de plantas purificadoras de agua', 0, 0, 0, 0, '', 21, 1, 2021, NULL, NULL, NULL, NULL),
(437, 24, 'Número de estaciones de bebedores', 0, 0, 0, 0, '', 21, 1, 2021, NULL, NULL, NULL, NULL),
(438, 25, 'Número de bebedores', 0, 0, 0, 0, '', 21, 1, 2021, NULL, NULL, NULL, NULL),
(439, 26, 'Número de lagunas', 0, 0, 0, 0, '', 21, 1, 2021, NULL, NULL, NULL, NULL),
(440, 27, 'Número de cuerpos de agua', 0, 0, 0, 0, '', 21, 1, 2021, NULL, NULL, NULL, NULL),
(447, 1, 'Número de especies de flora y fauna identificados', 0, 0, 0, 0, '', 22, 1, 2021, NULL, NULL, NULL, NULL),
(448, 2, 'Número de especies de flora identificados', 0, 0, 0, 0, '', 22, 1, 2021, NULL, NULL, NULL, NULL),
(449, 3, 'Número de especies de aves identificados', 0, 0, 0, 0, '', 22, 1, 2021, NULL, NULL, NULL, NULL),
(450, 4, 'Número de especies de insectos identificados', 0, 0, 0, 0, '', 22, 1, 2021, NULL, NULL, NULL, NULL),
(451, 5, 'Número de especies de peces identificados', 0, 0, 0, 0, '', 22, 1, 2021, NULL, NULL, NULL, NULL),
(452, 6, 'Número de especies introducidas', 0, 0, 0, 0, '', 22, 1, 2021, NULL, NULL, NULL, NULL),
(453, 7, 'Número de especies endémicas de la Península de Yucatán', 0, 0, 0, 0, '', 22, 1, 2021, NULL, NULL, NULL, NULL),
(454, 8, 'Número de especies endémicas de México', 0, 0, 0, 0, '', 22, 1, 2021, NULL, NULL, NULL, NULL),
(455, 9, 'Número de especies amenazadas', 0, 0, 0, 0, '', 22, 1, 2021, NULL, NULL, NULL, NULL),
(456, 10, 'Número de señaleticas de especies de flora y fauna instaladas', 0, 0, 0, 0, '', 22, 1, 2021, NULL, NULL, NULL, NULL),
(457, 11, 'Número de especies de protección especial', 0, 0, 0, 0, '', 22, 1, 2021, NULL, NULL, NULL, NULL),
(462, 1, 'Número de ediciones de la Semana de la Cultura Ambiental', 0, 0, 0, 0, '', 23, 1, 2021, NULL, NULL, NULL, NULL),
(463, 2, 'Número de asistentes en la Semana de la Cultura Ambiental', 0, 0, 0, 0, '', 23, 1, 2021, NULL, NULL, NULL, NULL),
(464, 3, 'Número de aliados en la Semana de la Cultura Ambiental', 0, 0, 0, 0, '', 23, 1, 2021, NULL, NULL, NULL, NULL),
(465, 4, 'Nombre de las organizaciones aliadas en la Semana de la Cultura Ambiental', 0, 0, 0, 0, '', 23, 1, 2021, NULL, NULL, NULL, NULL),
(466, 5, 'Número de conferencias', 0, 0, 0, 0, '', 23, 1, 2021, NULL, NULL, NULL, NULL),
(467, 6, 'Número de paneles', 0, 0, 0, 0, '', 23, 1, 2021, NULL, NULL, NULL, NULL),
(468, 7, 'Número de participantes en el taller de Carta de la Tierra', 0, 0, 0, 0, '', 23, 1, 2021, NULL, NULL, NULL, NULL),
(469, 8, 'Número de años del programa de Eco Lunch', 0, 0, 0, 0, '', 23, 1, 2021, NULL, NULL, NULL, NULL),
(470, 9, 'Número de usuarios del programa de Eco Luch', 0, 0, 0, 0, '', 23, 1, 2021, NULL, NULL, NULL, NULL),
(471, 10, 'Número de toppers donados a la cafetería para el programa de Eco Lunch', 0, 0, 0, 0, '', 23, 1, 2021, NULL, NULL, NULL, NULL),
(472, 11, 'Número de años del programa Eco Colillas', 0, 0, 0, 0, '', 23, 1, 2021, NULL, NULL, NULL, NULL),
(473, 12, 'Número de contenedores instalados para el programa de Eco Colillas', 0, 0, 0, 0, '', 23, 1, 2021, NULL, NULL, NULL, NULL),
(474, 13, 'Número de colillas de cigarros acopiados bajo el programa de Eco Colillas', 0, 0, 0, 0, '', 23, 1, 2021, NULL, NULL, NULL, NULL),
(475, 14, 'Número de años del programa Pajareadas', 0, 0, 0, 0, '', 23, 1, 2021, NULL, NULL, NULL, NULL),
(476, 15, 'Número de ediciones del programa de Pajareadas en el año', 0, 0, 0, 0, '', 23, 1, 2021, NULL, NULL, NULL, NULL),
(477, 16, 'Número de participantes en las ediciones del programa de Pajareadas', 0, 0, 0, 0, '', 23, 1, 2021, NULL, NULL, NULL, NULL),
(493, 1, 'Número de niños (as) participantes en el programa de Eco Huerto', 0, 0, 0, 0, '', 24, 1, 2021, NULL, NULL, NULL, NULL),
(494, 2, 'Número de jovenes participantes en el programa de Eco Huerto', 0, 0, 0, 0, '', 24, 1, 2021, NULL, NULL, NULL, NULL),
(495, 3, 'Número de adultos participantes en el programa de Eco Huerto', 0, 0, 0, 0, '', 24, 1, 2021, NULL, NULL, NULL, NULL),
(496, 4, 'Número de especialistas agricultores responsables en el programa de Eco Huerto', 0, 0, 0, 0, '', 24, 1, 2021, NULL, NULL, NULL, NULL),
(500, 1, 'Número de solicitudes de la información recibidas a través de la Unidad de Transparencia de la Universidad del Caribe', 0, 0, 0, 0, '', 28, 1, 2021, NULL, NULL, NULL, NULL),
(501, 2, 'Número de solicitudes de la información atendidas a través de la Unidad de Transparencia de la Universidad del Caribe.', 0, 0, 0, 0, '', 28, 1, 2021, NULL, NULL, NULL, NULL),
(502, 3, 'Número de solicitudes de la información recibidas a través del Sistema de Portales de Obligaciones de Transparencia (SIPOT)', 0, 0, 0, 0, '', 28, 1, 2021, NULL, NULL, NULL, NULL),
(503, 4, 'Número de solicitudes de la información atendidas a través del Sistema de Portales de Obligaciones de Transparencia (SIPOT)', 0, 0, 0, 0, '', 28, 1, 2021, NULL, NULL, NULL, NULL),
(504, 5, 'Número de solicitudes de la información recibidas a través del Sistema de Información Pública Obligatoria (SEIPO)', 0, 0, 0, 0, '', 28, 1, 2021, NULL, NULL, NULL, NULL),
(505, 6, 'Número de solicitudes de la información atendidas a través del Sistema de Información Pública Obligatoria (SEIPO)', 0, 0, 0, 0, '', 28, 1, 2021, NULL, NULL, NULL, NULL),
(506, 7, 'Número de solicitudes de la información recibidas a través del Sistema de Solicitudes de Información del Estado de Quintana Roo (INFOMEX)', 0, 0, 0, 0, '', 28, 1, 2021, NULL, NULL, NULL, NULL),
(507, 8, 'Número de solicitudes de la información atendidas a través del Sistema de Solicitudes de Información del Estado de Quintana Roo (INFOMEX)', 0, 0, 0, 0, '', 28, 1, 2021, NULL, NULL, NULL, NULL),
(515, 1, 'Número de hectáreas', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(516, 2, 'Número de edificios', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(517, 3, 'Número de aulas', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(518, 4, 'Número de talleres', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(519, 5, 'Número de laboratorios', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(520, 6, 'Número de cubículos PTC', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(521, 7, 'Número de oficinas académicas', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(522, 8, 'Número de pantallas gigantes', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(523, 9, 'Número de proyectores de 15 lúmenes', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(524, 10, 'Números de bocinas JBL', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(525, 11, 'Número de explanadas', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(526, 12, 'Número de auditorios', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(527, 13, 'Número de capacidad de personas en el Auditorio Principal', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(528, 14, 'Número de capacidad de personas en el Auditorio A1', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(529, 15, 'Número de cabinas en auditorios', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(530, 16, 'Número de oficinas administrativas', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(531, 17, 'Número de aulas de cómputo', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(532, 18, 'Número de aulas de clase', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(533, 19, 'Número de centros de idiomas', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(534, 20, 'Número de aulas de francés', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(535, 21, 'Número de aulas Confuncio', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(536, 22, 'Número de salas de eventos', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(537, 23, 'Número de bibliotecas', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(538, 24, 'Número de tiendas de souvenirs', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(539, 25, 'Número de cafeterías', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(540, 26, 'Número de aulas de muestra spa', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(541, 27, 'Número de cuartos muestra hotel', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL);
INSERT INTO `indicadores` (`id_indicador`, `numero`, `indicador`, `periodo_1`, `periodo_2`, `periodo_3`, `conteo_anual`, `enlace`, `id_area`, `id_estatus_indicador`, `FechaCreacion`, `sector`, `tipo_colaboracion`, `informacion`, `tipo_indicador`) VALUES
(542, 28, 'Número de paredes de escalada y de rappel', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(543, 29, 'Número de cocinas', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(544, 30, 'Número de almacén de plaqué', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(545, 31, 'Número de estacionamientos', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(546, 32, 'Número de cajones de estacionamiento destinados para personas con discapacidad', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(547, 33, 'Número de estacionamientos para bicicletas', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(548, 34, 'Número de accesos a la universidad', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(549, 35, 'Número de casetas de vigilancia', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(550, 36, 'Número de cámaras de seguridad', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(551, 37, 'Número de elevadores', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(552, 38, 'Número de rampas de acceso para personas con discapacidad', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(553, 39, 'Número de letreros en código braille para personas con discapacidad', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(554, 40, 'Número de baños para hombres', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(555, 41, 'Número de baños para mujeres', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(556, 42, 'Número de baños para personas con discapacidad', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(557, 43, 'Número de secadores de mano en los baños', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(558, 44, 'Número de canchas de fútbol', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(559, 45, 'Número de canchas de voleibol', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(560, 46, 'Número de canchas de basquetbol', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(561, 47, 'Número de canchas de tenis', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(562, 48, 'Número de canchas de front tenis', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(563, 49, 'Número de espacios para acondicionamiento físico', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(564, 50, 'Número de vestidores', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(565, 51, 'Número de audioramas', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(566, 52, 'Número de kilómetros de ciclopista', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(567, 53, 'Número de enfermerías', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(568, 54, 'Número de ludotecas', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(569, 55, 'Número de cuartos SITE', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(570, 56, 'Número de paraderos de transporte público', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(571, 57, 'Número de estaciones de mantenimiento', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(572, 58, 'Número de almacenes de mantenimiento', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(573, 59, 'Número de puntos verdes de reunión en caso de incendio o sismo', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(574, 60, 'Número de monumentos de piedra en áreas verdes', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(575, 61, 'Número de cajeros automáticos', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(576, 62, 'Número de centros de copiado y papelerías', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(577, 63, 'Número de extintores', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(578, 64, 'Número de estaciones de mangueras en caso de incendio', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(579, 65, 'Número de tomas de agua de mangueras para bomberos', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(580, 66, 'Número de litros de gel antibacterial adquiridos', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(581, 67, 'Número de dispensadores de gel antibacterial', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(582, 68, 'Número de estaciones (mesas) de gel antibacterial instalados', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(583, 69, 'Número de termómetros digital adquiridos', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(584, 70, 'Número de cubrebocas reusables otorgados a colaboradores (administrativos y operativos)', 0, 0, 0, 0, '', 30, 1, 2021, NULL, NULL, NULL, NULL),
(642, 1, 'Número de cuerpos acádemicos', 0, 0, 0, 0, '', 49, 1, 2021, NULL, NULL, NULL, NULL),
(643, 2, 'Número de cuerpos acádemicos consolidados', 0, 0, 0, 0, '', 49, 1, 2021, NULL, NULL, NULL, NULL),
(644, 3, 'Número de cuerpos acádemicos en formación', 0, 0, 0, 0, '', 49, 1, 2021, NULL, NULL, NULL, NULL),
(645, 4, 'Número de cuerpos acádemicos en consolidación', 0, 0, 0, 0, '', 49, 1, 2021, NULL, NULL, NULL, NULL),
(646, 5, 'Número de docentes de carrera que integran todos los cuerpos académicos', 0, 0, 0, 0, '', 49, 1, 2021, NULL, NULL, NULL, NULL),
(647, 6, 'Número de docentes que integran el cuerpo acádemico de Negocios Internacionales', 0, 0, 0, 0, '', 49, 1, 2021, NULL, NULL, NULL, NULL),
(648, 7, 'Número de docentes que integran el cuerpo acádemico de Turismo y Sustentabilidad', 0, 0, 0, 0, '', 49, 1, 2021, NULL, NULL, NULL, NULL),
(649, 8, 'Número de docentes que integran el cuerpo acádemico de Desarrollo Económico, Visión Empresarial y Competitividad Internacional', 0, 0, 0, 0, '', 49, 1, 2021, NULL, NULL, NULL, NULL),
(650, 9, 'Número de docentes que integran el cuerpo acádemico de Sistemas Energéticos y Sustentabilidad', 0, 0, 0, 0, '', 49, 1, 2021, NULL, NULL, NULL, NULL),
(651, 10, 'Número de docentes que integran el cuerpo acádemico de Regulación, Patrimonio y Negocios Turísticos', 0, 0, 0, 0, '', 49, 1, 2021, NULL, NULL, NULL, NULL),
(652, 11, 'Número de docentes que integran el cuerpo acádemico de Cultura e Identidad', 0, 0, 0, 0, '', 49, 1, 2021, NULL, NULL, NULL, NULL),
(653, 12, 'Número de docentes que integran el cuerpo acádemico de Economía y Sociedad', 0, 0, 0, 0, '', 49, 1, 2021, NULL, NULL, NULL, NULL),
(654, 13, 'Número de docentes que integran el cuerpo acádemico de Grupos Vulnerables, Ciudadanía y Desarrollo Humano', 0, 0, 0, 0, '', 49, 1, 2021, NULL, NULL, NULL, NULL),
(655, 14, 'Número de docentes que integran el cuerpo acádemico de Gestión en la Industria Turística y Gastronómica', 0, 0, 0, 0, '', 49, 1, 2021, NULL, NULL, NULL, NULL),
(656, 15, 'Número de docentes que integran el cuerpo acádemico de Sustentabilidad, Desarrollo y Competitividad', 0, 0, 0, 0, '', 49, 1, 2021, NULL, NULL, NULL, NULL),
(657, 16, 'Número de docentes que integran el cuerpo acádemico de Ética, Pensamiento Crítico y Educación para el Desarrollo Humano', 0, 0, 0, 0, '', 49, 1, 2021, NULL, NULL, NULL, NULL),
(658, 17, 'Número de docentes que integran el cuerpo acádemico de Nutrición, Educación y Gastronomía', 0, 0, 0, 0, '', 49, 1, 2021, NULL, NULL, NULL, NULL),
(659, 18, 'Número de docentes que integran el cuerpo acádemico de Patrimonio Cultural Alimentario y Turístico', 0, 0, 0, 0, '', 49, 1, 2021, NULL, NULL, NULL, NULL),
(660, 19, 'Número de cuerpos acádemicos que se encuentran registrados ante el Programa para el Desarrollo Profesional Docente (PRODEP)', 0, 0, 0, 0, '', 49, 1, 2021, NULL, NULL, NULL, NULL),
(661, 20, 'Número de docentes de carrera reconocidos en el Nivel 1 ante el Sistema Nacional de Investigadores (SNI)', 0, 0, 0, 0, '', 49, 1, 2021, NULL, NULL, NULL, NULL),
(662, 21, 'Número de docentes de carrera candidatos en espera de ser reconocidos en el Nivel 1 ante el Sistema Nacional de Investigadores (SNI)', 0, 0, 0, 0, '', 49, 1, 2021, NULL, NULL, NULL, NULL),
(663, 22, 'Número de artículos arbitrados producidos por los cuerpos académicos', 0, 0, 0, 0, '', 49, 1, 2021, NULL, NULL, NULL, NULL),
(664, 23, 'Número de artículos indexados producidos por los cuerpos académicos', 0, 0, 0, 0, '', 49, 1, 2021, NULL, NULL, NULL, NULL),
(665, 24, 'Número de recetarios producidos por los cuerpos académicos', 0, 0, 0, 0, '', 49, 1, 2021, NULL, NULL, NULL, NULL),
(666, 25, 'Número de libros producidos por los cuerpos académicos', 0, 0, 0, 0, '', 49, 1, 2021, NULL, NULL, NULL, NULL),
(667, 26, 'Número de capítulos de libro producidos por los cuerpos académicos', 0, 0, 0, 0, '', 49, 1, 2021, NULL, NULL, NULL, NULL),
(668, 27, 'Número de artículos de difusión producidos por los cuerpos académicos', 0, 0, 0, 0, '', 49, 1, 2021, NULL, NULL, NULL, NULL),
(669, 28, 'Número de productos académicos producidos por los cuerpos académicos desde el 2005 a la actualidad', 0, 0, 0, 0, '', 49, 1, 2021, NULL, NULL, NULL, NULL),
(673, 1, 'Número de bibliotecas', 0, 0, 0, 0, '', 50, 1, 2021, NULL, NULL, NULL, NULL),
(674, 2, 'Número de títulos de acervo impreso', 0, 0, 0, 0, '', 50, 1, 2021, NULL, NULL, NULL, NULL),
(675, 3, 'Número de ejemplares de acervo impreso', 0, 0, 0, 0, '', 50, 1, 2021, NULL, NULL, NULL, NULL),
(676, 4, 'Número de títulos producidos por el cuerpo académico de la Universidad del Caribe y que forman parte del acervo impreso', 0, 0, 0, 0, '', 50, 1, 2021, NULL, NULL, NULL, NULL),
(677, 5, 'Número de revistas de acervo impreso', 0, 0, 0, 0, '', 50, 1, 2021, NULL, NULL, NULL, NULL),
(678, 6, 'Número de periódicos de acervo impreso', 0, 0, 0, 0, '', 50, 1, 2021, NULL, NULL, NULL, NULL),
(679, 7, 'Número de colecciones históricas de acervo impreso', 0, 0, 0, 0, '', 50, 1, 2021, NULL, NULL, NULL, NULL),
(680, 8, 'Nombre de las colecciones históricas de acervo impreso', 0, 0, 0, 0, '', 50, 1, 2021, NULL, NULL, NULL, NULL),
(681, 9, 'Número de libros de acervo digital', 0, 0, 0, 0, '', 50, 1, 2021, NULL, NULL, NULL, NULL),
(682, 10, 'Número de base de datos de acervo digital', 0, 0, 0, 0, '', 50, 1, 2021, NULL, NULL, NULL, NULL),
(683, 11, 'Número de películas de acervo digital', 0, 0, 0, 0, '', 50, 1, 2021, NULL, NULL, NULL, NULL),
(684, 12, 'Número de documentales de acervo digital', 0, 0, 0, 0, '', 50, 1, 2021, NULL, NULL, NULL, NULL),
(685, 13, 'Número de computadoras', 0, 0, 0, 0, '', 50, 1, 2021, NULL, NULL, NULL, NULL),
(686, 14, 'Número de usuarios internos (comunidad universitaria)', 0, 0, 0, 0, '', 50, 1, 2021, NULL, NULL, NULL, NULL),
(687, 15, 'Número de usuarios externos (público en general)', 0, 0, 0, 0, '', 50, 1, 2021, NULL, NULL, NULL, NULL),
(688, 16, 'Número de reconocimientos que ha recibido la biblioteca', 0, 0, 0, 0, '', 50, 1, 2021, NULL, NULL, NULL, NULL),
(689, 17, 'Nombre de los reconocimientos que ha recibido la biblioteca', 0, 0, 0, 0, '', 50, 1, 2021, NULL, NULL, NULL, NULL),
(690, 18, 'Nombre de las organizaciones que han otorgado reconocimientos a la biblioteca', 0, 0, 0, 0, '', 50, 1, 2021, '', NULL, NULL, NULL),
(709, 1, 'Organización Mundial del Turismo ', 0, 0, 0, 0, NULL, 29, 1, 2021, 'Academico', '', '', NULL),
(710, 1, 'Secretaría de Educacion Pública / Dirección General de Educación Superior para Profesionales de la Educación ', 0, 0, 0, 0, NULL, 29, 1, 2021, 'Publico', NULL, NULL, NULL),
(711, 1, 'Consejo Coordinador Empresarial ', 0, 0, 0, 0, NULL, 29, 1, 2021, 'Privado', NULL, NULL, NULL),
(712, 1, 'Red de Educadores Ambientales', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Sociedad Civil', '', '', NULL),
(713, 2, 'Confederación Panamericana de Escuelas de Hotelería, Gastronomía y Turismo ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(714, 3, 'Les Toques Blanches International Club', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(715, 0, 'Asociación Nacional de Universidades e Instituciones de Educación Superior ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(716, 0, 'Asociación Mexicana de Escuelas Superiores de Turismo ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(717, 0, 'Asociación de Desarrollo Humano ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(718, 0, 'Academia Mexicana de Investigación Turística ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(719, 0, 'Academia Nacional de Educación Ambiental ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(720, 0, 'Colectivo Kybernus Zona Norte de Quintana Roo', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Sociedad Civil', NULL, NULL, NULL),
(722, 0, 'Consejo para la Acreditación de la Educación Superior ', 0, 0, 0, 0, NULL, 0, 0, 2021, 'Academico', NULL, NULL, NULL),
(723, 0, 'Consejo Nacional para la Calidad de la Educación Turística ', 0, 0, 0, 0, NULL, 0, 0, 2021, 'Academico', NULL, NULL, NULL),
(730, 0, 'Consejo para la Acreditación de la Educación Superior ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(731, 0, 'Consejo Nacional para la Calidad de la Educación Turística ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(732, 0, 'Consejo de Acreditación en Ciencias Administrativas, Contables y Afines ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(733, 0, 'Conservatorio de la Cultura Gastronómica Mexicana', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(734, 0, 'Comités Interinstitucionales para la Evaluación de la Educación Superior ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(735, 0, 'Red Interinstitucional de Cambio Climático del Sur Sureste', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(736, 0, 'Red de Planes Ambientales Institucionales de la Región Sur-Sureste de la ANUIES', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(737, 0, 'Red de Biblioteca', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(738, 0, 'Red de Movilidad', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(739, 0, 'Red de Estudios de Género', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(740, 0, 'Red de Posgrados e Investigación', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(741, 0, 'Red de Planes Ambientales Institucionales', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(742, 0, 'Red de Tutorías', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(743, 0, 'Red de Tecnologías de la Información y Comunicación', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(744, 0, 'Red de Servicio Social', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(745, 0, 'Red de Vinculación', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(746, 0, 'Red de Seguimiento a Egresados', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(747, 0, 'Red de Escuelas Sostenibles ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(748, 0, 'Universidad Autónoma de Chihuahua', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(749, 0, 'Colegio de Bachilleres ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(750, 0, 'Universidad Nacional Autónoma de México ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(751, 0, 'Universidad Tecnológica de Cancún ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(752, 0, 'Universidad Autónoma de Yucatán ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(753, 0, 'Universidad Autónoma Metropolitana Unidad Xochimilco Vasco de Quiroga', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(754, 0, 'Universidad de Quintana Roo', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(755, 0, 'Centro de Atención Múltiple Jacinto Kanek  ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(756, 0, 'Universidad Michoacana de San Nicolás de Hidalgo. Facultad de economía Vasco de Quiroga', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(757, 0, ' Tecnológico Nacional de México Campus Misantla', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(758, 0, 'Instituto de Ingeniería, UNAM, Querétaro', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(759, 0, 'Consejo de Acreditación de la Enseñanza de la Ingeniería', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(760, 0, 'CEMIE-Océano', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(761, 0, 'The OpenInfraestructure Foundation ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(762, 0, 'Asociación Nacional de Instituciones de Educación en Tecnologías de la Información ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(763, 0, 'Tecnologías de la Información y Comunicaciones de la ANUIES', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(764, 0, 'Instituto de Administración Pública de Quintana Roo ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(765, 0, 'Centro Nacional de Evaluación para la Educación Superior ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Academico', NULL, NULL, NULL),
(766, 0, 'Secretaría de la Contraloría del Estado de Quintana Roo ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Publico', NULL, NULL, NULL),
(767, 0, 'Secretaría de Ecología y Medio Ambiente de Quintana Roo ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Publico', NULL, NULL, NULL),
(768, 0, 'Secretaría de Educación de Quintana Roo ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Publico', NULL, NULL, NULL),
(769, 0, 'Secretaria de Gobierno de Quintana Roo ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Publico', NULL, NULL, NULL),
(770, 0, 'Secretaría de Desarrollo Económico de Quintana Roo ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Publico', NULL, NULL, NULL),
(771, 0, 'Secretaría de Seguridad Pública de Quintana Roo', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Publico', NULL, NULL, NULL),
(776, 0, 'Secretaría de Desarrollo Social de Quintana Roo ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Publico', NULL, NULL, NULL),
(777, 0, 'Secretaría de Turismo de Quintana Roo ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Publico', NULL, NULL, NULL),
(778, 0, 'Consejo Quintanarroense de Ciencia y Tecnología ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Publico', NULL, NULL, NULL),
(779, 0, 'Grupo Estatal para la Prevención del Embarazo en Adolescentes ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Publico', NULL, NULL, NULL),
(780, 0, 'Consejo Consultivo de Consumo de Quintana Roo', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Publico', NULL, NULL, NULL),
(781, 0, 'Consejo de Cuenca de la Península de Yucatán', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Publico', NULL, NULL, NULL),
(782, 0, 'Comité Municipal para la Protección y Conservación de las Tortugas Marinas', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Publico', NULL, NULL, NULL),
(783, 0, 'Comisión Nacional de Áreas Naturales Protegidas ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Publico', NULL, NULL, NULL),
(784, 0, 'Instituto Quintanarroense de Innovación y Tecnología ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Publico', NULL, NULL, NULL),
(785, 0, 'Comisión Nacional para el Uso Eficiente de la Energía ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Publico', NULL, NULL, NULL),
(786, 0, 'Programa de la Naciones Unidas para el Desarrollo, México ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Publico', NULL, NULL, NULL),
(787, 0, 'Embajada de La Gran Bretaña e Irlanda Del Norte', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Publico', NULL, NULL, NULL),
(788, 0, 'Oficilia Mayor del Gobierno de Quintana Roo', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Publico', NULL, NULL, NULL),
(789, 0, 'Gobierno del Estado de Quintana Roo - Consejo Técnico Asesor de Sargazo', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Publico', NULL, NULL, NULL),
(790, 0, 'Secretaría de Turismo del H. Ayuntamiento de Solidaridad', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Publico', NULL, NULL, NULL),
(791, 0, 'Gobierno del Estado de Coahuila', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Publico', NULL, NULL, NULL),
(792, 0, 'Instituto Nacional para el Federalismo y el Desarrollo Municipal ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Publico', NULL, NULL, NULL),
(793, 0, 'Dirección de Promoción Económica del Municipio de Lázaro Cárdenas de Quintana Roo', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Publico', NULL, NULL, NULL),
(794, 0, 'Confederación Patronal de la República Mexicana ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Privado', NULL, NULL, NULL),
(795, 0, 'SMEC S.A. de C.V. ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Privado', NULL, NULL, NULL),
(796, 0, 'Aguakan', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Privado', NULL, NULL, NULL),
(797, 0, 'Comisión Federal de Electricidad', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Privado', NULL, NULL, NULL),
(798, 0, 'Promotora Ambiental De La Laguna, S.A De C.V. ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Privado', NULL, NULL, NULL),
(799, 0, 'Monex Grupo Financiero, S.A. de C.V. ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Privado', NULL, NULL, NULL),
(800, 0, 'Banco Santander S. A. ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Privado', NULL, NULL, NULL),
(801, 0, 'Aspel de México S.A. de C.V. ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Privado', NULL, NULL, NULL),
(802, 0, 'Bak Carnes S de R.L. de C.V. ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Privado', NULL, NULL, NULL),
(803, 0, 'Internet Movil S de R.L. de C.V. ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Privado', NULL, NULL, NULL),
(804, 0, 'Lomas Travel ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Privado', NULL, NULL, NULL),
(805, 0, 'Forja Espacios Creadores de Muebles SA de CV ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Privado', NULL, NULL, NULL),
(806, 0, 'Ventanas al Mar del Cozumel S.A. de C.V', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Privado', NULL, NULL, NULL),
(807, 0, 'Asociación de Egresados de la Universidad del Caribe', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Sociedad Civil', NULL, NULL, NULL),
(809, 0, 'Fundación Lomas I.A.P.', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Sociedad Civil', NULL, NULL, NULL),
(810, 0, 'Alquimia en los Negocios S.C.', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Sociedad Civil', NULL, NULL, NULL),
(811, 0, 'Fundación RCD Hotels', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Sociedad Civil', NULL, NULL, NULL),
(812, 0, 'Grupo Especializado de Trabajo en Educación, Comunicación y Cultura del Agua ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Sociedad Civil', NULL, NULL, NULL),
(814, 0, 'Centro Integral de Atención a las Mujeres Cancún, A.C.', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Sociedad Civil', NULL, NULL, NULL),
(815, 0, 'Patronato de la Universidad del Caribe AC', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Sociedad Civil', NULL, NULL, NULL),
(816, 0, 'Asociación Femenil de Ejecutivas de Empresas Turísticas Quintana Roo, A.C. ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Sociedad Civil', NULL, NULL, NULL),
(817, 0, 'Steffie Wallace', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Sociedad Civil', NULL, NULL, NULL),
(818, 0, 'Antoine Abugaber', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Sociedad Civil', NULL, NULL, NULL),
(819, 0, 'Asociación de Clubes Vacacionales de Quintana Roo ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Sociedad Civil', NULL, NULL, NULL),
(820, 0, 'Asociación de Hoteles de Quintana Roo A.C.', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Sociedad Civil', NULL, NULL, NULL),
(821, 0, 'Asociación de Hoteles de Cancún, Puerto Morelos e Isla Mujeres', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Sociedad Civil', NULL, NULL, NULL),
(822, 0, 'Asociación Mexicana de Mujeres Empresarias ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Sociedad Civil', NULL, NULL, NULL),
(823, 0, 'Asociación de Mujeres Ejecutivas del Sector Turismo ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Sociedad Civil', NULL, NULL, NULL),
(824, 0, 'Tianguis del Mayab ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Sociedad Civil', NULL, NULL, NULL),
(825, 0, 'Ecohuertos Pedagógicos        ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Sociedad Civil', NULL, NULL, NULL),
(826, 0, 'Aliarse por Quintana Roo', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Sociedad Civil', NULL, NULL, NULL),
(827, 0, 'Asociación Mexicana de Mujeres Empresarias Capítulo Riviera Maya         ', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Sociedad Civil', NULL, NULL, NULL),
(828, 0, 'Cooperativa Muuch Kaab', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Sociedad Civil', NULL, NULL, NULL),
(829, 0, 'LA Cooperativa Mar de las Antillas', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Sociedad Civil', NULL, NULL, NULL),
(830, 0, 'Gran Acuífero Maya', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Sociedad Civil', NULL, NULL, NULL),
(831, 0, 'Cruz Roja Mexicana IAP', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Sociedad Civil', NULL, NULL, NULL),
(832, 0, 'Rafael Antonio Bernardo Espinosa y García', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Sociedad Civil', NULL, NULL, NULL),
(833, 0, 'Estrategia ¡Nadie se Queda Fuera!', 0, 0, 0, 0, NULL, 29, 0, 2021, 'Sociedad Civil', NULL, NULL, NULL),
(849, 0, 'Número de asignaturas evaluadas', 0, 0, 0, 0, NULL, 110, 0, 2021, NULL, NULL, NULL, NULL),
(850, 0, 'Número de docentes evaluados', 0, 0, 0, 0, NULL, 110, 0, 2021, NULL, NULL, NULL, NULL),
(851, 0, 'Número de encuestas para estudiantes activadas', 0, 0, 0, 0, NULL, 110, 0, 2021, NULL, NULL, NULL, NULL),
(852, 0, 'Número de encuestas para estudiantes contestadas', 0, 0, 0, 0, NULL, 110, 0, 2021, NULL, NULL, NULL, NULL),
(853, 0, 'Porcentaje de participación de estudiantes en la encuesta', 0, 0, 0, 0, NULL, 110, 0, 2021, NULL, NULL, NULL, NULL),
(854, 0, 'Número de autoevaluaciones de docentes activadas', 0, 0, 0, 0, NULL, 110, 0, 2021, NULL, NULL, NULL, NULL),
(855, 0, 'Número de autoevaluaciones de docentes contestadas', 0, 0, 0, 0, NULL, 110, 0, 2021, NULL, NULL, NULL, NULL),
(856, 0, 'Porcentaje de participación de docentes en la encuesta', 0, 0, 0, 0, NULL, 110, 0, 2021, NULL, NULL, NULL, NULL),
(857, 0, 'Listado de aspectos que contemplan la Evaluación al Desempeño Docente en todos los periodos ', 0, 0, 0, 0, NULL, 110, 0, 2021, NULL, NULL, NULL, NULL),
(858, 0, 'Número de participantes en el proyecto de la Ludoteca', 0, 0, 0, 0, NULL, 136, 0, 2021, NULL, NULL, NULL, NULL),
(859, 0, 'Listado de departamentos y/o comisiones  participantes en el proyecto de la Ludoteca', 0, 0, 0, 0, NULL, 136, 0, 2021, NULL, NULL, NULL, NULL),
(860, 0, 'Número de colaboradores (directivos, jefes y/o docentes) que participaron en el proyecto de la Ludoteca', 0, 0, 0, 0, NULL, 136, 0, 2021, NULL, NULL, NULL, NULL),
(861, 0, 'Número de estudiantes que participaron en el proyecto de la Ludoteca', 0, 0, 0, 0, NULL, 136, 0, 2021, NULL, NULL, NULL, NULL),
(862, 0, 'Número de voluntarios que participaron en el proyecto de la Ludoteca', 0, 0, 0, 0, NULL, 136, 0, 2021, NULL, NULL, NULL, NULL),
(863, 0, 'Número de colaboradores beneficiados a través de la prestación del servicio de Ludoteca', 0, 0, 0, 0, NULL, 136, 0, 2021, NULL, NULL, NULL, NULL),
(864, 0, 'Número de hijos de colaboradores beneficiados a través de la prestación del servicio de Ludoteca', 0, 0, 0, 0, NULL, 136, 0, 2021, NULL, NULL, NULL, NULL),
(865, 0, 'Número de pedagógas que colaboran en la Ludoteca', 0, 0, 0, 0, NULL, 136, 0, 2021, NULL, NULL, NULL, NULL),
(866, 0, 'Número de colaboradores que respondieron la Encuesta Anual de Clima Laboral', 0, 0, 0, 0, NULL, 137, 0, 2021, NULL, NULL, NULL, NULL),
(867, 0, 'Listado de temas que integran la Encuesta Anual de Clima Laboral', 0, 0, 0, 0, NULL, 137, 0, 2021, NULL, NULL, NULL, NULL),
(868, 0, 'Número de estudiantes que respondieron la Encuesta de Satisfacción y Expectativas del Estudiantado', 0, 0, 0, 0, NULL, 137, 0, 2021, NULL, NULL, NULL, NULL),
(869, 0, 'Listado de temas que integran la Encuesta de Satisfacción y Expectativas del Estudiantado', 0, 0, 0, 0, NULL, 137, 0, 2021, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--
-- Creación: 03-03-2021 a las 06:02:44
--

CREATE TABLE `periodo` (
  `id_periodo` int(11) NOT NULL,
  `periodo_1` varchar(50) DEFAULT NULL,
  `periodo_2` varchar(50) DEFAULT NULL,
  `periodo_3` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA `periodo`:
--

--
-- Volcado de datos para la tabla `periodo`
--

INSERT INTO `periodo` (`id_periodo`, `periodo_1`, `periodo_2`, `periodo_3`) VALUES
(1, 'Primavera', 'Verano', 'Otoño');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pilares`
--
-- Creación: 03-03-2021 a las 06:02:44
--

CREATE TABLE `pilares` (
  `id_pilar` int(11) NOT NULL,
  `pilar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA `pilares`:
--

--
-- Volcado de datos para la tabla `pilares`
--

INSERT INTO `pilares` (`id_pilar`, `pilar`) VALUES
(1, 'Personas'),
(2, 'Planeta'),
(3, 'Prosperidad'),
(4, 'Paz'),
(5, 'Alianzas'),
(6, 'Datos Generales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--
-- Creación: 03-03-2021 a las 06:02:44
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `status` enum('draft','published') COLLATE utf8_spanish_ci NOT NULL DEFAULT 'draft',
  `content` text COLLATE utf8_spanish_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `posts`:
--

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `title`, `status`, `content`, `user_id`) VALUES
(1, 'prueba', 'draft', 'mi primer test', 1),
(2, 'prueba 2', 'draft', 'mi segundo test', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_de_usuarios`
--
-- Creación: 03-03-2021 a las 06:02:44
--

CREATE TABLE `tipos_de_usuarios` (
  `id_tipo_de_usuario` int(11) NOT NULL,
  `tipo_de_usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA `tipos_de_usuarios`:
--

--
-- Volcado de datos para la tabla `tipos_de_usuarios`
--

INSERT INTO `tipos_de_usuarios` (`id_tipo_de_usuario`, `tipo_de_usuario`) VALUES
(1, 'Root'),
(2, 'Administrador'),
(3, 'Responsable de Área');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--
-- Creación: 03-03-2021 a las 06:02:44
-- Última actualización: 21-06-2021 a las 07:26:06
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_reg` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_de_usuario` int(11) NOT NULL,
  `puesto` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estatus` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `usuarios`:
--   `tipo_de_usuario`
--       `tipos_de_usuarios` -> `id_tipo_de_usuario`
--

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `username`, `password`, `fecha_reg`, `tipo_de_usuario`, `puesto`, `estatus`) VALUES
(1, 'Eliazar May', 'emay', 'test', '14/01/2021', 1, 'Usuario Root', 'Habilitado'),
(2, 'Oscar Yama', 'oyama', '150300804', '14/01/2021', 2, 'Usuario Root', 'Habilitado'),
(5, 'Rosa Estrada Hinojosa', 'restrada', 'test', '14/01/2021', 3, 'Jefa del Departamento de Servicios Escolares', 'Habilitado'),
(6, 'María Luisa Azueta Ruíz', 'mazueta', 'mazueta', '14/01/2021', 3, 'Responsable de Educación Continua', 'Habilitado'),
(7, 'Jane Elizabeth Holmes Lewendon', 'jhomes', 'jhomes', '14/01/2021', 3, 'Jefa del Departamento de Idiomas', 'Habilitado'),
(8, 'María Magdalena Dzul Tuz', 'mdzul', 'mdzul', '14/01/2021', 3, 'Jefa del Departamento de Recursos Humanos', 'Habilitado'),
(9, 'Zayra Díaz Antonio', 'zdiaz', 'zdiaz', '14/01/2021', 3, 'Jefa de Departamento de Servicio Social', 'Habilitado'),
(10, 'Alejandra Cazal Ferreira', 'acazal', 'acazal', '14/01/2021', 3, 'Jefa del Departamento de Desarrollo Humano', 'Habilitado'),
(11, 'Emilio Reyner Portes Gil', 'ereyner', 'areyner', '14/01/2021', 3, 'Responsable de Arte y Cultura', 'Habilitado'),
(12, 'Ilse Mandujano Wild', 'imandujano', 'imandujano', '14/01/2021', 3, 'Jefa de Departamento', 'Habilitado'),
(13, 'Jessica Hernández Matus', 'jhernadez', 'jhernandez', '14/01/2021', 3, 'Jefa del Departamento de Vinculación Universitaria', 'Habilitado'),
(14, 'Maria Teresa Aguilar Barragán', 'maguilar', 'maguilar', '14/01/2021', 3, 'Coordinadora de Talleres Artísticos y Culturales', 'Habilitado'),
(53, 'Franco Utrera González', 'futera', 'futera', '15/01/2021', 3, 'Jefe del Departamento de Biblioteca', 'Habilitado'),
(72, 'Usuario General', 'usgral', 'usgral', '27/01/2021', 3, 'Jefa de Departamento', 'Habilitado'),
(73, 'Myrna Beltrán', 'mbeltran', 'mbeltran', '01/02/2021', 3, 'Jefa del Departamento de Turismo Sustentable, Gastronomía y Hotelería', 'Habilitado'),
(83, 'root', 'root', 'root', '14/02/2021', 1, 'Usuario Root', 'Habilitado'),
(100, 'Juán Felipe Pérez Vázquez', 'jperez', 'jperez', '04/05/2021', 3, 'Jefe del Departamento de Ciencias Básicas e Ingenierías', 'Habilitado'),
(101, 'Abelardo Castillo Galeana', 'acastillo', 'acastillo', '04/05/2021', 3, 'Jefe del Departamento de Economía y Negocios', 'Habilitado'),
(102, 'María Cristina Canul Pech', 'mcanul', 'mcanul', '04/05/2021', 3, 'Jefa de Oficina del Departamento de Control Presupuestal', 'Habilitado'),
(103, 'Celina Izquierdo Sanchez', 'cizquierdo', 'cizquierdo', '04/05/2021', 3, 'Encargada del Despacho de la Secretaría de Extensión y Vinculación', 'Habilitado'),
(104, 'Guillermina Pech Pech', 'mpech', 'mpech', '04/05/2021', 3, 'Coordinadora del Comité de Sostenibilidad', 'Habilitado'),
(105, 'Juan Francisco Bárcenas Graniel', 'jbarcenas', 'jbarcenas', '04/05/2021', 3, 'Coordinador del Programa Educativo de Ingeniería Ambiental', 'Habilitado'),
(106, 'Christian Lizbeth Rivera Romero', 'crivero', 'crivero', '04/05/2021', 3, 'Encargada de Despacho del Departamento de Compras', 'Habilitado'),
(107, 'María Rosa Ochoa Ávila', 'mochoa', 'mochoa', '04/05/2021', 3, 'Directora del Patronato de la Universidad del Caribe', 'Habilitado'),
(108, 'Ana Laura Rivero Cetina', 'alaura', 'alaura', '04/05/2021', 3, 'Jefa del Departamento de Gestión de la Calidad', 'Habilitado'),
(109, 'Virgilio Lopez Pensado', 'vlopez', 'vlopez', '04/05/2021', 3, 'Jefe del Departamento de Desarrollo Académico', 'Habilitado'),
(110, 'Mónica Loiret Morales Vera', 'mloiret', 'mloiret', '04/05/2021', 3, 'Jefa del Departamento de Servicios Generales e Infraestructura', 'Habilitado'),
(111, 'Julio César Basto Canto', 'jbasto', 'jbasto', '04/05/2021', 3, 'Titular de la Unidad de Transparencia', 'Habilitado'),
(112, 'Jarmen Said Virgen Suarez', 'jsaid', 'jsaid', '04/05/2021', 3, 'Presidente del Comité de Ética y Prevención de Conflictos de Intereses', 'Habilitado'),
(113, 'Jazmin Garnica Ortiz', 'jgarnica', 'jgarnica', '04/05/2021', 3, 'Responsable de la Oficina de Transferencia de Resultados de la Investigación', 'Habilitado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id_areas`) USING BTREE,
  ADD KEY `Constraint name` (`id_usuario`);

--
-- Indices de la tabla `años_periodos`
--
ALTER TABLE `años_periodos`
  ADD PRIMARY KEY (`id_año`);

--
-- Indices de la tabla `contador`
--
ALTER TABLE `contador`
  ADD PRIMARY KEY (`id_contador`);

--
-- Indices de la tabla `esquemas_colaboracion`
--
ALTER TABLE `esquemas_colaboracion`
  ADD PRIMARY KEY (`id_esquema`);

--
-- Indices de la tabla `estatus_indicadores`
--
ALTER TABLE `estatus_indicadores`
  ADD PRIMARY KEY (`id_estatus_indicador`) USING BTREE;

--
-- Indices de la tabla `indicadores`
--
ALTER TABLE `indicadores`
  ADD PRIMARY KEY (`id_indicador`);

--
-- Indices de la tabla `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`id_periodo`) USING BTREE;

--
-- Indices de la tabla `pilares`
--
ALTER TABLE `pilares`
  ADD PRIMARY KEY (`id_pilar`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipos_de_usuarios`
--
ALTER TABLE `tipos_de_usuarios`
  ADD PRIMARY KEY (`id_tipo_de_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Contraint Name` (`tipo_de_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id_areas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT de la tabla `años_periodos`
--
ALTER TABLE `años_periodos`
  MODIFY `id_año` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `esquemas_colaboracion`
--
ALTER TABLE `esquemas_colaboracion`
  MODIFY `id_esquema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `estatus_indicadores`
--
ALTER TABLE `estatus_indicadores`
  MODIFY `id_estatus_indicador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `indicadores`
--
ALTER TABLE `indicadores`
  MODIFY `id_indicador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=916;

--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `id_periodo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pilares`
--
ALTER TABLE `pilares`
  MODIFY `id_pilar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipos_de_usuarios`
--
ALTER TABLE `tipos_de_usuarios`
  MODIFY `id_tipo_de_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `areas`
--
ALTER TABLE `areas`
  ADD CONSTRAINT `Constraint name` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `Contraint Name` FOREIGN KEY (`tipo_de_usuario`) REFERENCES `tipos_de_usuarios` (`id_tipo_de_usuario`);


--
-- Metadatos
--
USE `phpmyadmin`;

--
-- Metadatos para la tabla areas
--

--
-- Metadatos para la tabla años_periodos
--

--
-- Metadatos para la tabla contador
--

--
-- Metadatos para la tabla esquemas_colaboracion
--

--
-- Metadatos para la tabla estatus_indicadores
--

--
-- Metadatos para la tabla indicadores
--

--
-- Metadatos para la tabla periodo
--

--
-- Metadatos para la tabla pilares
--

--
-- Metadatos para la tabla posts
--

--
-- Metadatos para la tabla tipos_de_usuarios
--

--
-- Metadatos para la tabla usuarios
--

--
-- Metadatos para la base de datos sesion
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
