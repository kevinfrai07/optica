-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2020 a las 01:05:17
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `catalogo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_basicos`
--

CREATE TABLE `datos_basicos` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `diligenciador` varchar(50) NOT NULL,
  `comprador` varchar(100) NOT NULL,
  `empresa` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_basicos`
--

INSERT INTO `datos_basicos` (`id`, `fecha`, `hora`, `diligenciador`, `comprador`, `empresa`, `ciudad`, `direccion`, `correo`, `telefono`) VALUES
(3, '2020-05-20', '13:22:00', 'Opcion1', 'jesus', 'dersa', 'Opcion1', 'CALLE 30 C SUR', 'albaroparaco23@hotmail.com', '7252675');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formula_datos_especificos`
--

CREATE TABLE `formula_datos_especificos` (
  `id` int(11) NOT NULL,
  `esf1` varchar(30) NOT NULL,
  `cil1` varchar(30) NOT NULL,
  `eje1` varchar(30) NOT NULL,
  `add1` varchar(30) NOT NULL,
  `tipo_lente1` varchar(30) NOT NULL,
  `esf2` varchar(30) NOT NULL,
  `cil2` varchar(30) NOT NULL,
  `eje2` varchar(30) NOT NULL,
  `add2` varchar(30) NOT NULL,
  `tipo_lente2` varchar(30) NOT NULL,
  `filtro` varchar(30) NOT NULL,
  `montadura` varchar(30) NOT NULL,
  `tipo_talla` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `formula_datos_especificos`
--

INSERT INTO `formula_datos_especificos` (`id`, `esf1`, `cil1`, `eje1`, `add1`, `tipo_lente1`, `esf2`, `cil2`, `eje2`, `add2`, `tipo_lente2`, `filtro`, `montadura`, `tipo_talla`) VALUES
(4, 'Opcion1', 'Seleccionar...', 'Opcion1', 'Opcion1', 'Opcion1', 'Opcion1', 'Opcion1', 'Opcion1', 'Opcion1', 'Opcion1', ' Opcion1', 'Opcion1', 'Opcion1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talla_observaciones`
--

CREATE TABLE `talla_observaciones` (
  `id` int(11) NOT NULL,
  `fecha` varchar(60) NOT NULL,
  `diagonal` varchar(60) NOT NULL,
  `dnp` varchar(60) NOT NULL,
  `dv` varchar(60) NOT NULL,
  `filtro` varchar(60) NOT NULL,
  `vertical` varchar(60) NOT NULL,
  `puente` varchar(60) NOT NULL,
  `altrura_focal` varchar(60) NOT NULL,
  `dt` varchar(60) NOT NULL,
  `color` varchar(60) NOT NULL,
  `dtrabajo` varchar(60) NOT NULL,
  `pant` varchar(60) NOT NULL,
  `observaciones` varchar(60) NOT NULL,
  `otras_observaciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `talla_observaciones`
--

INSERT INTO `talla_observaciones` (`id`, `fecha`, `diagonal`, `dnp`, `dv`, `filtro`, `vertical`, `puente`, `altrura_focal`, `dt`, `color`, `dtrabajo`, `pant`, `observaciones`, `otras_observaciones`) VALUES
(3, 'hoy', 'xd', 'hola', 'putos', 'nalgas ', 'horizontal', 'nalga', 'mucha', 'jesus', 'transparente', 'mucho', 'nada', 'Opcion1', 'gafas de narco');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_basicos`
--
ALTER TABLE `datos_basicos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `formula_datos_especificos`
--
ALTER TABLE `formula_datos_especificos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `talla_observaciones`
--
ALTER TABLE `talla_observaciones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_basicos`
--
ALTER TABLE `datos_basicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `formula_datos_especificos`
--
ALTER TABLE `formula_datos_especificos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `talla_observaciones`
--
ALTER TABLE `talla_observaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
