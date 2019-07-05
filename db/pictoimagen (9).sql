-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-03-2019 a las 20:25:41
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pictoimagen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE `actividad` (
  `Act_cod` int(4) NOT NULL,
  `Act_Tac_cod` varchar(2) COLLATE latin1_spanish_ci NOT NULL,
  `Act_Tea_cod` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`Act_cod`, `Act_Tac_cod`, `Act_Tea_cod`) VALUES
(10, 'on', 10),
(11, 'da', 10),
(12, 'ds', 10),
(13, 'pi', 10),
(20, 'on', 11),
(21, 'da', 11),
(22, 'ds', 11),
(23, 'pi', 11),
(100, 'on', 20),
(101, 'da', 20),
(102, 'ds', 20),
(103, 'pi', 20),
(110, 'on', 21),
(111, 'da', 21),
(112, 'ds', 21),
(113, 'pi', 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuadro`
--

CREATE TABLE `cuadro` (
  `Cua_cod` int(2) NOT NULL,
  `Cua_Act_cod` int(4) NOT NULL,
  `Cua_Img_cod` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `cuadro`
--

INSERT INTO `cuadro` (`Cua_cod`, `Cua_Act_cod`, `Cua_Img_cod`) VALUES
(1, 10, 101),
(1, 11, 105),
(1, 13, 101),
(1, 20, 111),
(1, 21, 114),
(1, 23, 111),
(1, 100, 201),
(1, 101, 204),
(1, 102, 111),
(1, 103, 201),
(1, 110, 211),
(1, 111, 214),
(1, 112, 114),
(1, 113, 211),
(2, 10, 103),
(2, 11, 201),
(2, 12, 204),
(2, 13, 103),
(2, 20, 112),
(2, 21, 102),
(2, 22, 211),
(2, 23, 112),
(2, 100, 202),
(2, 101, 111),
(2, 102, 203),
(2, 103, 202),
(2, 110, 212),
(2, 111, 204),
(2, 112, 214),
(2, 113, 212),
(3, 10, 105),
(3, 11, 107),
(3, 12, 107),
(3, 13, 105),
(3, 20, 113),
(3, 21, 111),
(3, 22, 113),
(3, 23, 113),
(3, 100, 203),
(3, 101, 202),
(3, 102, 214),
(3, 103, 203),
(3, 110, 213),
(3, 111, 212),
(3, 112, 204),
(3, 113, 213),
(4, 10, 107),
(4, 11, 112),
(4, 12, 212),
(4, 13, 107),
(4, 20, 114),
(4, 21, 213),
(4, 22, 202),
(4, 23, 114),
(4, 100, 204),
(4, 101, 101),
(4, 103, 204),
(4, 110, 214),
(4, 111, 103),
(4, 113, 214),
(10, 12, 109),
(10, 22, 119),
(10, 102, 209),
(10, 112, 219);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `His_Cua_cod` int(2) NOT NULL,
  `His_Cua_Act_cod` int(4) NOT NULL,
  `His_Usu_id` varchar(75) COLLATE latin1_spanish_ci NOT NULL,
  `His_Fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`His_Cua_cod`, `His_Cua_Act_cod`, `His_Usu_id`, `His_Fecha`) VALUES
(1, 10, 'cinco', '2019-03-10 16:34:51'),
(1, 10, 'conrado', '2019-03-07 18:15:24'),
(1, 11, 'cinco', '2019-03-10 16:34:59'),
(1, 11, 'conrado', '2019-03-07 18:15:34'),
(1, 12, 'conrado', '2019-03-07 18:15:46'),
(1, 13, 'cinco', '2019-03-10 16:35:20'),
(1, 13, 'conrado', '2019-03-07 18:15:56'),
(1, 20, 'cinco', '2019-03-10 16:35:48'),
(1, 20, 'conrado', '2019-03-07 18:16:12'),
(1, 21, 'conrado', '2019-03-07 18:16:22'),
(1, 21, 'conrado', '2019-03-07 22:55:16'),
(1, 23, 'conrado', '2019-03-07 18:16:29'),
(1, 100, 'conrado', '2019-03-18 15:36:25'),
(1, 100, 'conrado', '2019-03-18 15:45:58'),
(1, 101, 'conrado', '2019-03-18 15:36:33'),
(1, 101, 'conrado', '2019-03-18 15:46:01'),
(1, 101, 'conrado', '2019-03-18 15:46:09'),
(1, 102, 'conrado', '2019-03-18 15:40:59'),
(1, 102, 'conrado', '2019-03-18 15:46:14'),
(1, 103, 'conrado', '2019-03-18 15:43:29'),
(1, 103, 'conrado', '2019-03-18 15:46:17'),
(1, 110, 'conrado', '2019-03-18 16:13:00'),
(1, 110, 'conrado', '2019-03-18 16:19:15'),
(1, 110, 'conrado', '2019-03-18 16:19:59'),
(1, 111, 'conrado', '2019-03-18 16:13:09'),
(1, 111, 'conrado', '2019-03-18 16:19:29'),
(1, 111, 'conrado', '2019-03-18 16:20:06'),
(1, 112, 'conrado', '2019-03-18 16:13:19'),
(1, 113, 'conrado', '2019-03-18 16:13:23'),
(1, 113, 'conrado', '2019-03-18 16:19:34'),
(1, 113, 'conrado', '2019-03-18 16:20:11'),
(2, 10, 'cinco', '2019-03-10 16:34:51'),
(2, 10, 'conrado', '2019-03-07 18:15:26'),
(2, 11, 'conrado', '2019-03-07 18:15:40'),
(2, 12, 'cinco', '2019-03-10 16:35:18'),
(2, 12, 'conrado', '2019-03-07 18:15:51'),
(2, 13, 'cinco', '2019-03-10 16:35:21'),
(2, 13, 'conrado', '2019-03-07 18:15:57'),
(2, 20, 'cinco', '2019-03-10 16:35:49'),
(2, 20, 'conrado', '2019-03-07 18:16:14'),
(2, 21, 'conrado', '2019-03-07 18:16:20'),
(2, 22, 'conrado', '2019-03-07 18:16:27'),
(2, 23, 'conrado', '2019-03-07 18:16:31'),
(2, 100, 'conrado', '2019-03-18 15:36:26'),
(2, 100, 'conrado', '2019-03-18 15:45:58'),
(2, 101, 'conrado', '2019-03-18 15:36:30'),
(2, 101, 'conrado', '2019-03-18 15:46:08'),
(2, 102, 'conrado', '2019-03-18 15:41:01'),
(2, 102, 'conrado', '2019-03-18 15:46:15'),
(2, 103, 'conrado', '2019-03-18 15:43:30'),
(2, 103, 'conrado', '2019-03-18 15:46:17'),
(2, 110, 'conrado', '2019-03-18 16:13:00'),
(2, 110, 'conrado', '2019-03-18 16:19:15'),
(2, 110, 'conrado', '2019-03-18 16:19:59'),
(2, 111, 'conrado', '2019-03-18 16:13:11'),
(2, 111, 'conrado', '2019-03-18 16:13:13'),
(2, 111, 'conrado', '2019-03-18 16:19:27'),
(2, 111, 'conrado', '2019-03-18 16:20:06'),
(2, 112, 'conrado', '2019-03-18 16:13:21'),
(2, 112, 'conrado', '2019-03-18 16:19:31'),
(2, 112, 'conrado', '2019-03-18 16:20:09'),
(2, 113, 'conrado', '2019-03-18 16:13:23'),
(2, 113, 'conrado', '2019-03-18 16:19:34'),
(2, 113, 'conrado', '2019-03-18 16:20:11'),
(3, 10, 'cinco', '2019-03-10 16:34:51'),
(3, 10, 'conrado', '2019-03-07 18:15:27'),
(3, 11, 'cinco', '2019-03-10 16:34:59'),
(3, 11, 'conrado', '2019-03-07 18:15:38'),
(3, 12, 'conrado', '2019-03-07 18:15:48'),
(3, 13, 'cinco', '2019-03-10 16:35:21'),
(3, 13, 'conrado', '2019-03-07 18:15:59'),
(3, 20, 'cinco', '2019-03-10 16:35:49'),
(3, 20, 'conrado', '2019-03-07 18:16:15'),
(3, 21, 'conrado', '2019-03-07 18:16:24'),
(3, 21, 'conrado', '2019-03-07 22:55:17'),
(3, 23, 'conrado', '2019-03-07 18:16:33'),
(3, 100, 'conrado', '2019-03-18 15:36:26'),
(3, 100, 'conrado', '2019-03-18 15:45:59'),
(3, 101, 'conrado', '2019-03-18 15:36:31'),
(3, 101, 'conrado', '2019-03-18 15:46:02'),
(3, 101, 'conrado', '2019-03-18 15:46:10'),
(3, 102, 'conrado', '2019-03-18 15:40:57'),
(3, 102, 'conrado', '2019-03-18 15:46:14'),
(3, 103, 'conrado', '2019-03-18 15:43:31'),
(3, 103, 'conrado', '2019-03-18 15:46:18'),
(3, 110, 'conrado', '2019-03-18 16:13:01'),
(3, 110, 'conrado', '2019-03-18 16:19:15'),
(3, 110, 'conrado', '2019-03-18 16:20:00'),
(3, 111, 'conrado', '2019-03-18 16:13:07'),
(3, 111, 'conrado', '2019-03-18 16:19:27'),
(3, 111, 'conrado', '2019-03-18 16:20:05'),
(3, 112, 'conrado', '2019-03-18 16:13:20'),
(3, 113, 'conrado', '2019-03-18 16:13:24'),
(3, 113, 'conrado', '2019-03-18 16:13:25'),
(3, 113, 'conrado', '2019-03-18 16:19:34'),
(3, 113, 'conrado', '2019-03-18 16:20:12'),
(4, 10, 'cinco', '2019-03-10 16:34:53'),
(4, 10, 'conrado', '2019-03-07 18:15:29'),
(4, 11, 'cinco', '2019-03-10 16:34:59'),
(4, 11, 'conrado', '2019-03-07 18:15:36'),
(4, 13, 'cinco', '2019-03-10 16:35:21'),
(4, 13, 'conrado', '2019-03-07 18:16:01'),
(4, 20, 'cinco', '2019-03-10 16:35:49'),
(4, 20, 'conrado', '2019-03-07 18:16:17'),
(4, 23, 'conrado', '2019-03-07 18:16:36'),
(4, 100, 'conrado', '2019-03-18 15:36:27'),
(4, 100, 'conrado', '2019-03-18 15:45:59'),
(4, 101, 'conrado', '2019-03-18 15:36:32'),
(4, 101, 'conrado', '2019-03-18 15:46:09'),
(4, 103, 'conrado', '2019-03-18 15:43:31'),
(4, 103, 'conrado', '2019-03-18 15:46:18'),
(4, 110, 'conrado', '2019-03-18 16:13:01'),
(4, 110, 'conrado', '2019-03-18 16:19:15'),
(4, 110, 'conrado', '2019-03-18 16:20:00'),
(4, 111, 'conrado', '2019-03-18 16:13:10'),
(4, 111, 'conrado', '2019-03-18 16:13:12'),
(4, 111, 'conrado', '2019-03-18 16:19:28'),
(4, 111, 'conrado', '2019-03-18 16:20:06'),
(4, 113, 'conrado', '2019-03-18 16:13:26'),
(4, 113, 'conrado', '2019-03-18 16:19:35'),
(4, 113, 'conrado', '2019-03-18 16:20:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `Img_cod` int(3) NOT NULL,
  `Img_url` varchar(300) COLLATE latin1_spanish_ci NOT NULL,
  `Img_sonido` varchar(300) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`Img_cod`, `Img_url`, `Img_sonido`) VALUES
(1, 'assets\\images\\Tematica\\Animales\\Animales.png', 'assets\\sonidos\\candy-crush-bomba-color.mp3'),
(2, 'assets\\images\\Tematica\\Granja\\Granja.png', 'assets/sonidos/candy-crush-bomba-color.mp3'),
(10, 'assets/images/Tematica/Animales/Leon/Leon.png', 'assets/sonidos/lion1.mp3'),
(11, 'assets/images/Tematica/Animales/Elefante/Elefante.png', 'assets/sonidos/elefante1.mp3'),
(20, 'assets/images/Tematica/Animales/Perro/Perro.png', 'assets/sonidos/perro.mp3'),
(21, 'assets/images/Tematica/Granja/Cerdo/Cerdo.png', 'assets/sonidos/cerdo1.mp3'),
(96, 'assets\\images\\Actividad\\Onomatopeya.png', 'assets/sonidos/candy-crush-bomba-color.mp3'),
(97, 'assets\\images\\Actividad\\DA.png', 'assets/sonidos/candy-crush-bomba-color.mp3'),
(98, 'assets\\images\\Actividad\\DS.png', 'assets/sonidos/candy-crush-bomba-color.mp3'),
(99, 'assets\\images\\Actividad\\Picto.png', 'assets/sonidos/candy-crush-bomba-color.mp3'),
(101, 'assets/images/Tematica/Animales/Leon/L-Ono-1.png', 'assets/sonidos/lion1.mp3'),
(102, 'assets/images/Tematica/Animales/Leon/L-Ono-2.png', 'assets/sonidos/lion1.mp3'),
(103, 'assets/images/Tematica/Animales/Leon/L-Ono-3.png', 'assets/sonidos/lion1.mp3'),
(104, 'assets/images/Tematica/Animales/Leon/L-Ono-4.png', 'assets/sonidos/lion1.mp3'),
(105, 'assets/images/Tematica/Animales/Leon/L-Ono-5.png', 'assets/sonidos/lion1.mp3'),
(106, 'assets/images/Tematica/Animales/Leon/L-Ono-6.png', 'assets/sonidos/lion1.mp3'),
(107, 'assets/images/Tematica/Animales/Leon/L-Ono-7.png', 'assets/sonidos/lion1.mp3'),
(108, 'assets/images/Tematica/Animales/Leon/L-Ono-8.png', 'assets/sonidos/lion1.mp3'),
(109, 'assets\\images\\Tematica\\Animales\\Leon\\L-Picto.png', 'assets/sonidos/mover-foto-L.mp3'),
(111, 'assets/images/Tematica/Animales/Elefante/E-Ono-1.png', 'assets/sonidos/elefante1.mp3'),
(112, 'assets/images/Tematica/Animales/Elefante/E-Ono-2.png', 'assets/sonidos/elefante1.mp3'),
(113, 'assets/images/Tematica/Animales/Elefante/E-Ono-3.png', 'assets/sonidos/elefante1.mp3'),
(114, 'assets/images/Tematica/Animales/Elefante/E-Ono-4.png', 'assets/sonidos/elefante1.mp3'),
(119, 'assets\\images\\Tematica\\Animales\\Elefante\\E-Picto.png', 'assets/sonidos/mover-foto-E.mp3'),
(201, 'assets/images/Tematica/Animales/Perro/P-Ono-1.png', 'assets/sonidos/perro.mp3'),
(202, 'assets/images/Tematica/Animales/Perro/P-Ono-2.png', 'assets/sonidos/perro2.mp3'),
(203, 'assets/images/Tematica/Animales/Perro/P-Ono-3.png', 'assets/sonidos/perro.mp3'),
(204, 'assets/images/Tematica/Animales/Perro/P-Ono-4.png', 'assets/sonidos/perro2.mp3'),
(209, 'assets\\images\\Tematica\\Animales\\Perro\\P-Picto.png', 'assets/sonidos/mover-foto-P.mp3'),
(211, 'assets/images/Tematica/Granja/Cerdo/C-Ono-1.png', 'assets/sonidos/cerdo1.mp3'),
(212, 'assets/images/Tematica/Granja/Cerdo/C-Ono-2.png', 'assets/sonidos/cerdo2.mp3'),
(213, 'assets/images/Tematica/Granja/Cerdo/C-Ono-3.png', 'assets/sonidos/cerdo1.mp3'),
(214, 'assets/images/Tematica/Granja/Cerdo/C-Ono-4.png', 'assets/sonidos/cerdo2.mp3'),
(219, 'assets\\images\\Tematica\\Granja\\Cerdo\\C-Picto.png', 'assets/sonidos/mover-foto-C.mp3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tema`
--

CREATE TABLE `tema` (
  `Tea_cod` int(3) NOT NULL,
  `Tea_nom` varchar(75) COLLATE latin1_spanish_ci NOT NULL,
  `Tea_Tem_cod` int(2) NOT NULL,
  `Tea_Img_cod` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `tema`
--

INSERT INTO `tema` (`Tea_cod`, `Tea_nom`, `Tea_Tem_cod`, `Tea_Img_cod`) VALUES
(10, 'Leon', 1, 10),
(11, 'Elefante', 1, 11),
(20, 'Perro', 2, 20),
(21, 'Cerdo', 2, 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tematica`
--

CREATE TABLE `tematica` (
  `Tem_cod` int(2) NOT NULL,
  `Tem_nom` varchar(75) COLLATE latin1_spanish_ci NOT NULL,
  `Tem_Img_cod` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `tematica`
--

INSERT INTO `tematica` (`Tem_cod`, `Tem_nom`, `Tem_Img_cod`) VALUES
(1, 'Animales Salvajes', 1),
(2, 'Animales Granja', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoactividad`
--

CREATE TABLE `tipoactividad` (
  `Tac_cod` varchar(2) COLLATE latin1_spanish_ci NOT NULL,
  `Tac_nom` varchar(75) COLLATE latin1_spanish_ci NOT NULL,
  `Tac_url` varchar(300) COLLATE latin1_spanish_ci NOT NULL,
  `Tac_Img_cod` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `tipoactividad`
--

INSERT INTO `tipoactividad` (`Tac_cod`, `Tac_nom`, `Tac_url`, `Tac_Img_cod`) VALUES
('da', 'Discriminacion Auditiva', 'discauditiva.php', 97),
('ds', 'Discriminacion Semantica', 'discsemantica.php', 98),
('on', 'Onomatopeya', 'onomatopeya.php', 96),
('pi', 'Pasaje de Foto a Pictograma', 'fotoapicto.php', 99);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `Tus_cod` varchar(2) COLLATE latin1_spanish_ci NOT NULL,
  `Tus_nom` varchar(75) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`Tus_cod`, `Tus_nom`) VALUES
('al', 'Alumno'),
('es', 'Especialista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Usu_id` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `Usu_contra` varchar(75) COLLATE latin1_spanish_ci NOT NULL,
  `Usu_Tus_cod` varchar(2) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Usu_id`, `Usu_contra`, `Usu_Tus_cod`) VALUES
('cinco', '5555', 'al'),
('conrado', '1234', 'es'),
('cuatro', '4444', 'al'),
('danilo', '1234', 'es'),
('dos', '2222', 'al'),
('tres', '3333', 'al'),
('uno', '1111', 'al');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`Act_cod`),
  ADD KEY `Act_Tea_cod` (`Act_Tea_cod`),
  ADD KEY `Act_Tac_cod` (`Act_Tac_cod`);

--
-- Indices de la tabla `cuadro`
--
ALTER TABLE `cuadro`
  ADD PRIMARY KEY (`Cua_cod`,`Cua_Act_cod`) USING BTREE;

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`His_Cua_cod`,`His_Cua_Act_cod`,`His_Usu_id`,`His_Fecha`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`Img_cod`);

--
-- Indices de la tabla `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`Tea_cod`),
  ADD KEY `Tea_Tem_cod` (`Tea_Tem_cod`),
  ADD KEY `Tea_Img_cod` (`Tea_Img_cod`);

--
-- Indices de la tabla `tematica`
--
ALTER TABLE `tematica`
  ADD PRIMARY KEY (`Tem_cod`),
  ADD KEY `Tem_Img_cod` (`Tem_Img_cod`);

--
-- Indices de la tabla `tipoactividad`
--
ALTER TABLE `tipoactividad`
  ADD PRIMARY KEY (`Tac_cod`),
  ADD KEY `Tac_Img_cod` (`Tac_Img_cod`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`Tus_cod`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Usu_id`),
  ADD KEY `Usu_tipo` (`Usu_Tus_cod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
