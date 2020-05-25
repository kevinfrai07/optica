-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2020 a las 05:42:10
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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

--
-- Volcado de datos para la tabla `datos_basicos`
--

INSERT INTO `datos_basicos` (`id_datos_basicos`, `fecha`, `hora`, `diligenciador`, `comprador`, `empresa`, `ciudad`, `direccion`, `correo`, `telefono`) VALUES
(1, '2020-05-24', '10:14:37', 'kevin', 'JESUS ALBERTO SANCHEZ DONOSO', 'dfdfd', 'bogota', 'CALLE 30 C SUR', 'sanchez@hotmail.com', '7252675'),
(2, '2020-05-24', '10:29:40', 'uribe', 'duque', 'paracolandia', 'tranquilandia', 'la esquina ', 'albaroparaco23@hotmail.com', '549999'),
(3, '2020-05-24', '10:33:19', 'gjgjgtg', 'ggg', 'gg', 'g', 'gggg', 'rmora@gamil.com', '55545');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id_datos_basicos` int(11) NOT NULL,
  `id_datos_especificos` int(11) NOT NULL,
  `id_observaciones` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`id_datos_basicos`, `id_datos_especificos`, `id_observaciones`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3);

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

--
-- Volcado de datos para la tabla `formula_datos_especificos`
--

INSERT INTO `formula_datos_especificos` (`id_datos_especificos`, `esf1`, `cil1`, `eje1`, `add1`, `tipo_lente1`, `esf2`, `cil2`, `eje2`, `add2`, `tipo_lente2`, `filtro`, `montadura`, `tipo_talla`) VALUES
(1, '1', '1', '1', '-1', 'Progresivo transition 8 genera', '1', '1', '1', '1', 'Progresivo transition 8 genera', ' Verde', 'Abierta', 'Convencional'),
(2, '2', '2', '2', '2', 'Progresivo blanco image', '2', '-2', '4', '2', 'Progresivo blanco image', ' Verde', 'Cerrada', 'Convencional'),
(3, '6', '4', '3', '-3', 'Progresivo transition 8 genera', '10', '4', '3', '4', 'Progresivo transition 8 genera', ' Verde', 'Abierta', 'Convencional');

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

INSERT INTO `talla_observaciones` (`id_observaciones`, `horizontal`, `diagonal`, `dnp`, `dv`, `filtro`, `vertical`, `puente`, `altrura_focal`, `dt`, `color`, `dtrabajo`, `pant`, `observaciones`, `otras_observaciones`) VALUES
(1, 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', '1', 'kkkk'),
(2, 'jj', 'j', 'jhhh', 'hhh', 'hhh', 'hh', 'hhh', 'hhh', 'hhh', 'hhh', 'hhh', 'hhh', '2', 'jfgjgrjg'),
(3, '4444', '444', '444', '444', '444', '44', '44', '444', '444', '444', '44', '444', '1', '44444');

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
  MODIFY `id_datos_basicos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `formula_datos_especificos`
--
ALTER TABLE `formula_datos_especificos`
  MODIFY `id_datos_especificos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `talla_observaciones`
--
ALTER TABLE `talla_observaciones`
  MODIFY `id_observaciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`id_observaciones`) REFERENCES `talla_observaciones` (`id_observaciones`),
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`id_datos_especificos`) REFERENCES `formula_datos_especificos` (`id_datos_especificos`),
  ADD CONSTRAINT `factura_ibfk_3` FOREIGN KEY (`id_datos_basicos`) REFERENCES `datos_basicos` (`id_datos_basicos`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
