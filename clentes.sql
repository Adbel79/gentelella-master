-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-03-2021 a las 05:29:29
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
-- Estructura de tabla para la tabla `clentes`
--

CREATE TABLE `clentes` (
  `Id` int(10) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_empresa` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `codigo_postal` int(10) NOT NULL,
  `direccion` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `pais` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `rfc` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `phone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `clentes`
--

INSERT INTO `clentes` (`Id`, `nombre`, `nombre_empresa`, `codigo_postal`, `direccion`, `pais`, `rfc`, `correo`, `fecha`, `phone`) VALUES
(1, 'Josue Ruben', 'musclecar', 23223, '0', 'mexico', 'mexico', 'ahshn@hotmail.com', '2000-02-12', 0),
(2, 'Edgar', 'Bimbo', 67456, '0', 'Mexico', 'bipt781221', 'edgar.hernandez@bimb', '1978-12-21', 0),
(5, 'juan', 'Bolsas Plastica', 45086, 'CONCHITAS 4629', 'México', 'jubome4352', 'edgar.hernandez@bimb', '2021-01-21', 0),
(6, 'juan', 'GOS160210849', 45086, 'CONCHITAS 4629', 'México', 'jubome4352', 'edgar.hernandez@bimb', '2021-01-27', 0),
(7, 'juan', 'GOS160210849', 45086, 'CONCHITAS 4629', 'México', 'jubome4352', 'edgar.hernandez@bimb', '2021-01-27', 0),
(8, 'juan', 'GOS160210849', 45086, 'CONCHITAS 4629', 'México', 'jubome4352', 'edgar.hernandez@bimb', '2021-01-27', 0),
(9, 'juan', 'GOS160210849', 45086, 'CONCHITAS 4629', 'México', 'jubome4352', 'edgar.hernandez@bimb', '2021-01-27', 0),
(10, 'juan', 'GOS160210849', 45086, 'CONCHITAS 4629', 'México', 'jubome4352', 'edgar.hernandez@bimb', '2021-01-27', 0),
(11, 'juan', 'GOS160210849', 45086, 'CONCHITAS 4629', 'México', 'jubome4352', 'edgar.hernandez@bimb', '2021-01-27', 0),
(12, 'juan', 'GOS160210849', 45086, 'CONCHITAS 4629', 'México', 'jubome4352', 'edgar.hernandez@bimb', '2021-01-27', 0),
(13, 'juan', 'GOS160210849', 45086, 'CONCHITAS 4629', 'México', 'jubome4352', 'edgar.hernandez@bimb', '2021-01-27', 0),
(14, 'juan', 'GOS160210849', 45086, 'CONCHITAS 4629', 'México', 'jubome4352', 'edgar.hernandez@bimb', '2021-01-11', 0),
(15, 'juan', 'GOS160210849', 45086, 'CONCHITAS 4629', 'México', 'jubome4352', 'edgar.hernandez@bimb', '2021-01-11', 0),
(16, 'juan', 'GOS160210849', 45086, 'CONCHITAS 4629', 'México', 'jubome4352', 'edgar.hernandez@bimb', '2021-01-11', 0),
(17, 'juan', 'GOS160210849', 45086, 'CONCHITAS 4629', 'México', 'jubome4352', 'edgar.hernandez@bimb', '2021-01-11', 0),
(18, 'juan', 'GOS160210849', 45086, 'CONCHITAS 4629', 'México', 'jubome4352', 'edgar.hernandez@bimb', '2021-01-11', 0),
(19, 'juan', 'GOS160210849', 45086, 'CONCHITAS 4629', 'México', 'jubome4352', 'edgar.hernandez@bimb', '2021-01-11', 0),
(20, 'juan', 'GOS160210849', 45086, 'CONCHITAS 4629', 'México', 'jubome4352', 'edgar.hernandez@bimb', '2021-01-18', 0),
(21, 'juan', 'GOS160210849', 45086, 'CONCHITAS 4629', 'México', 'jubome4352', 'edgar.hernandez@bimb', '2021-01-18', 0),
(22, 'juan', 'GOS160210849', 45086, 'CONCHITAS 4629', 'México', 'jubome4352', 'edgar.hernandez@bimb', '2021-01-18', 0),
(23, 'juan', 'GOS160210849', 45086, 'CONCHITAS 4629', 'México', 'jubome4352', 'edgar.hernandez@bimb', '2021-01-18', 2147483647);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clentes`
--
ALTER TABLE `clentes`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clentes`
--
ALTER TABLE `clentes`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
