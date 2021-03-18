-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-03-2021 a las 05:27:53
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aut_par_co`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `piezas`
--

CREATE TABLE `piezas` (
  `Id` int(10) NOT NULL,
  `marca_auto` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `modelo` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `version_vehiculo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ejercicio` int(15) NOT NULL,
  `years` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `categoria` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_pieza` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_pieza` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `moneda` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `almacen` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `estante` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `posicion_estante` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `marca_pieza` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `noserie` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_imagen` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `piezas`
--

INSERT INTO `piezas` (`Id`, `marca_auto`, `modelo`, `version_vehiculo`, `ejercicio`, `years`, `categoria`, `nombre_pieza`, `tipo_pieza`, `precio`, `moneda`, `almacen`, `estante`, `posicion_estante`, `marca_pieza`, `noserie`, `id_imagen`) VALUES
(1, 'Ford', 'Mustang', 'Sedan', 1996, '1994-1996', 'Carroceria', 'Defensa delantera', 'Defensa', 90, 'USD', 'MXCL', '21', '1', 'Ford', 'MSTF96', '1'),
(2, 'TOYOTA', 'IGHLANDER', 'PICKUP', 2014, '2014-2016', 'Luces', 'FARO DEREC', 'FARO', 90, 'USD', 'MEXICALI', '2', 'ABAJO', 'TOYOTA', '81150', ''),
(3, 'FORD', 'MUSTANG', 'COUPE', 1994, '1994-1998', 'Carroceria', 'DEFENSA DE', 'DEFENSA', 100, 'USD', '1', '2', 'ABAJO', 'FORD', '0', ''),
(4, 'MAZDA', 'MAZDA', 'SEDAN Y HATCHBACK', 2014, '2014-2018', 'Carroceria', 'COFRE', 'COFRE', 160, 'USD', '1', '2', 'ABAJO', 'MAZDA', '347404', ''),
(5, 'NISSAN', 'SENTRA', 'SEDAN', 2013, '2013-2015', 'Carroceria', 'TAPA DE CA', 'CAJUELA', 85, 'USD', '1', '2', 'ABAJO', 'NISSAN', '0', ''),
(6, 'FORD', 'FIESTA', 'SEDAN', 2008, '2008-2010', 'Carroceria', 'COFRE', 'COFRE', 110, 'USD', '1', '2', 'ABAJO', 'FORD', '0', ''),
(7, 'FORD', 'MUSTANG', 'COUPE', 2015, '2015-2017', 'Carroceria', 'SALPICADER', 'SALPICADER', 260, 'USD', '1', '2', 'ABAJO', 'FORD', '0', ''),
(8, 'TOYOTA', 'HILUX', 'PICKUP', 2016, '2016-2018', 'Suspension', 'CREMALLERA', 'CREMALLERA', 530, 'USD', '1', '2', 'ABAJO', 'TOYOTA', '351770', ''),
(9, 'VOLSWAGEN', 'JETTA', 'SEDAN', 2011, '2011-2014', 'Luces', 'CALAVERA I', 'CALAVERA', 50, 'USD', '1', '2', 'ABAJO', 'VOLSWAGEN', '0', ''),
(10, 'HONDA ', 'CIVIC', 'SEDAN', 2001, '2001-2005', 'Carroceria', 'PUERTA COP', 'PUERTA', 65, 'USD', '1', '2', 'ABAJO', 'HONDA', '0', ''),
(11, 'SEAT', 'LEON', 'HATCHBACK', 2014, '2014-2020', 'Carroceria', 'ESTRIBO', 'ESTRIBO', 100, 'USD', '1', '2', 'ABAJO', 'SEAT', '5', ''),
(57, 'FORD', 'Mustang', 'GT', 1994, '1994-1996', 'Defensa Delantera', 'Defensa delantera', 'Defensa', 20, 'USD', 'MXCL', '1', '3', 'Ford', '0', ''),
(58, 'MAZDA', 'Mazda 3', 'Hatchback', 2017, '2014-2018', 'Carroceria', 'Cofre', 'Cofre', 24, 'USD', 'MXCL', '2', '21', 'MZD', 'MZD17', ''),
(59, 'ACURA', 'Mustang', 'Pickup', 1996, '1994-1998', 'Defensa Delantera', 'Defensa', '5', 20, 'USD', 'MXCL', '21', '4', 'Ford', 'DDFMU94', ''),
(60, 'Array', 'Array', 'Array', 0, '', '', 'Array', 'Array', 0, 'Array', 'Array', 'Array', 'Array', 'Array', 'Array', ''),
(61, 'POST', 'POST', 'POST', 0, 'PO', 'POS', 'POST', 'POST', 0, 'POST', 'POST', 'POST', 'POST', 'POST', 'POST', ''),
(62, 'POST', 'POST', 'POST', 0, 'PO', 'POS', 'POST', 'POST', 0, 'POST', 'POST', 'POST', 'POST', 'POST', 'POST', ''),
(63, 'ACURA', 'Mustang', 'Pickup', 1996, '1994-1998', 'Defensa Delantera', 'Defensa', 'Defensa', 20, 'USD', 'MXCL', '21', '4', 'Ford', 'DR96DEF', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `piezas`
--
ALTER TABLE `piezas`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `piezas`
--
ALTER TABLE `piezas`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
