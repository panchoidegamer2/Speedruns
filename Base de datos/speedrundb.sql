-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2024 a las 04:23:04
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `speedrundb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `idNoticia` int(11) NOT NULL,
  `nombreUsuario` varchar(25) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`idNoticia`, `nombreUsuario`, `descripcion`, `estado`) VALUES
(16, 'Admin', 'Lanzamiento oficial de hollow knight', 1),
(17, 'Admin', 'Lanzamiento de \"sueños ocultos\". La primer actualizacion con contenido gratuito ', 1),
(18, 'Admin', 'Lanzamiento de la segunda actualizacion: \"La Compañía de Grimm\"', 1),
(19, 'Admin', '\"Saviavida\". La tercera actualizacion con contenido extra totalmente gratis ', 1),
(20, 'Admin', 'Ultima actualizacion de contenido, \"Gods and Glory\"', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `runs`
--

CREATE TABLE `runs` (
  `idRun` int(11) NOT NULL,
  `nombreUsuario` varchar(25) NOT NULL,
  `tipoRun` varchar(15) NOT NULL,
  `tiempo` time NOT NULL,
  `porcentaje` int(3) NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `runs`
--

INSERT INTO `runs` (`idRun`, `nombreUsuario`, `tipoRun`, `tiempo`, `porcentaje`, `estado`) VALUES
(10, 'usuario', '106%', '00:02:01', 1, 1),
(11, 'Admin3', '106%', '00:00:02', 3, 1),
(12, 'Admin3', 'Any%', '00:00:01', 1, 1),
(13, 'Admin3', 'Low%', '00:00:01', 3, 1),
(14, 'Admin3', 'AnySkill', '00:00:01', 2, 1),
(15, 'jugador1', 'Low%', '01:01:01', 1, 1),
(16, 'Admin', 'Low%', '00:00:01', 0, 1),
(17, 'Admin', '106%', '00:00:01', 1, 0),
(18, 'Admin', '107%', '00:00:01', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombreUsuario` varchar(25) NOT NULL,
  `tipoUsuario` tinyint(4) NOT NULL,
  `contrasenia` varchar(100) NOT NULL,
  `Email` varchar(55) NOT NULL,
  `cantRuns` int(100) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombreUsuario`, `tipoUsuario`, `contrasenia`, `Email`, `cantRuns`, `estado`) VALUES
(9, 'Admin', 1, 'e3afed0047b08059d0fada10f400c1e5', 'Admin@mail.com', 0, 1),
(10, 'usuario', 0, 'f8032d5cae3de20fcec887f395ec9a6a', 'usuario@gmail.com', 0, 2),
(11, 'jugador1', 0, 'f8032d5cae3de20fcec887f395ec9a6a', 'Jugador1@gmail.com', 0, 1),
(12, 'Jugador2', 0, 'f8032d5cae3de20fcec887f395ec9a6a', 'Jugador2@gmail.com', 0, 1),
(13, 'Admin2', 1, '21232f297a57a5a743894a0e4a801fc3', 'admin2@gmail.com', 0, 1),
(14, 'Jugador3', 0, 'f8032d5cae3de20fcec887f395ec9a6a', 'Jugador3@gmail.com', 0, 1),
(15, 'Jugador4', 0, 'f8032d5cae3de20fcec887f395ec9a6a', 'Jugador4@gmail.com', 0, 1),
(16, 'Jugador5', 0, 'f8032d5cae3de20fcec887f395ec9a6a', 'Jugador5@gmail.com', 0, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`idNoticia`);

--
-- Indices de la tabla `runs`
--
ALTER TABLE `runs`
  ADD PRIMARY KEY (`idRun`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `idNoticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `runs`
--
ALTER TABLE `runs`
  MODIFY `idRun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
