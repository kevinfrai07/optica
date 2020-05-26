-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2020 a las 20:12:41
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
  `id_datos_basicos` int(11) NOT NULL,
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id_datos_basicos` int(11) NOT NULL,
  `id_datos_especificos` int(11) NOT NULL,
  `id_observaciones` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formula_datos_especificos`
--

CREATE TABLE `formula_datos_especificos` (
  `id_datos_especificos` int(11) NOT NULL,
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talla_observaciones`
--

CREATE TABLE `talla_observaciones` (
  `id_observaciones` int(11) NOT NULL,
  `horizontal` varchar(60) NOT NULL,
  `diagonal` varchar(60) NOT NULL,
  `dnp` varchar(60) NOT NULL,
  `dv` varchar(60) NOT NULL,
  `filtro2` varchar(60) NOT NULL,
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
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_basicos`
--
ALTER TABLE `datos_basicos`
  ADD PRIMARY KEY (`id_datos_basicos`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD KEY `id_datos_basicos` (`id_datos_basicos`),
  ADD KEY `id_observaciones` (`id_observaciones`),
  ADD KEY `id_datos_especificos` (`id_datos_especificos`);

--
-- Indices de la tabla `formula_datos_especificos`
--
ALTER TABLE `formula_datos_especificos`
  ADD PRIMARY KEY (`id_datos_especificos`);

--
-- Indices de la tabla `talla_observaciones`
--
ALTER TABLE `talla_observaciones`
  ADD PRIMARY KEY (`id_observaciones`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_basicos`
--
ALTER TABLE `datos_basicos`
  MODIFY `id_datos_basicos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `formula_datos_especificos`
--
ALTER TABLE `formula_datos_especificos`
  MODIFY `id_datos_especificos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `talla_observaciones`
--
ALTER TABLE `talla_observaciones`
  MODIFY `id_observaciones` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`id_datos_basicos`) REFERENCES `datos_basicos` (`id_datos_basicos`),
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`id_observaciones`) REFERENCES `talla_observaciones` (`id_observaciones`),
  ADD CONSTRAINT `factura_ibfk_3` FOREIGN KEY (`id_datos_especificos`) REFERENCES `formula_datos_especificos` (`id_datos_especificos`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
