-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-02-2025 a las 18:22:02
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estacionradio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cabinas`
--

CREATE TABLE `cabinas` (
  `id_cabina` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `ubicacion` varchar(255) NOT NULL,
  `capacidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `cabinas`
--

INSERT INTO `cabinas` (`id_cabina`, `nombre`, `ubicacion`, `capacidad`) VALUES
(12, 'Patroclo', 'Alla', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frecuencias`
--

CREATE TABLE `frecuencias` (
  `id_frecuencia` int(11) NOT NULL,
  `valor_frecuencia` decimal(5,2) NOT NULL,
  `tipo_banda` enum('AM','FM') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `frecuencias`
--

INSERT INTO `frecuencias` (`id_frecuencia`, `valor_frecuencia`, `tipo_banda`) VALUES
(45, 98.00, ''),
(46, 100.00, 'FM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos_musicales`
--

CREATE TABLE `generos_musicales` (
  `id_genero` int(11) NOT NULL,
  `nombre_genero` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `generos_musicales`
--

INSERT INTO `generos_musicales` (`id_genero`, `nombre_genero`, `descripcion`) VALUES
(123, 'Rock', 'Es rock');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `locutores`
--

CREATE TABLE `locutores` (
  `id_locutor` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `experiencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `locutores`
--

INSERT INTO `locutores` (`id_locutor`, `nombre`, `apellido`, `experiencia`) VALUES
(12, 'Aloy', 'Sobeck', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas`
--

CREATE TABLE `programas` (
  `id_programa` int(11) NOT NULL,
  `nombre_programa` varchar(100) NOT NULL,
  `id_locutor` int(11) NOT NULL,
  `id_cabina` int(11) NOT NULL,
  `id_frecuencia` int(11) NOT NULL,
  `id_genero` int(11) NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fin` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cabinas`
--
ALTER TABLE `cabinas`
  ADD PRIMARY KEY (`id_cabina`);

--
-- Indices de la tabla `frecuencias`
--
ALTER TABLE `frecuencias`
  ADD PRIMARY KEY (`id_frecuencia`);

--
-- Indices de la tabla `generos_musicales`
--
ALTER TABLE `generos_musicales`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `locutores`
--
ALTER TABLE `locutores`
  ADD PRIMARY KEY (`id_locutor`);

--
-- Indices de la tabla `programas`
--
ALTER TABLE `programas`
  ADD PRIMARY KEY (`id_programa`),
  ADD KEY `id_locutor` (`id_locutor`),
  ADD KEY `id_cabina` (`id_cabina`),
  ADD KEY `id_frecuencia` (`id_frecuencia`),
  ADD KEY `id_genero` (`id_genero`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cabinas`
--
ALTER TABLE `cabinas`
  MODIFY `id_cabina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `frecuencias`
--
ALTER TABLE `frecuencias`
  MODIFY `id_frecuencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `generos_musicales`
--
ALTER TABLE `generos_musicales`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT de la tabla `locutores`
--
ALTER TABLE `locutores`
  MODIFY `id_locutor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `programas`
--
ALTER TABLE `programas`
  MODIFY `id_programa` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `programas`
--
ALTER TABLE `programas`
  ADD CONSTRAINT `programas_ibfk_1` FOREIGN KEY (`id_locutor`) REFERENCES `locutores` (`id_locutor`) ON DELETE CASCADE,
  ADD CONSTRAINT `programas_ibfk_2` FOREIGN KEY (`id_cabina`) REFERENCES `cabinas` (`id_cabina`) ON DELETE CASCADE,
  ADD CONSTRAINT `programas_ibfk_3` FOREIGN KEY (`id_frecuencia`) REFERENCES `frecuencias` (`id_frecuencia`) ON DELETE CASCADE,
  ADD CONSTRAINT `programas_ibfk_4` FOREIGN KEY (`id_genero`) REFERENCES `generos_musicales` (`id_genero`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
