-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 27-08-2024 a las 03:00:03
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agencia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avion`
--

DROP TABLE IF EXISTS `avion`;
CREATE TABLE IF NOT EXISTS `avion` (
  `avi_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `avi_capacidad` int(3) NOT NULL,
  `bole_codigo` int(11) DEFAULT NULL,
  PRIMARY KEY (`avi_codigo`),
  KEY `bole_codigo` (`bole_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `avion`
--

INSERT INTO `avion` (`avi_codigo`, `avi_capacidad`, `bole_codigo`) VALUES
(3, 189, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boleto`
--

DROP TABLE IF EXISTS `boleto`;
CREATE TABLE IF NOT EXISTS `boleto` (
  `bole_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `bole_fecha` varchar(10) NOT NULL,
  `bole_clase` text NOT NULL,
  `pasa_codigo` int(11) DEFAULT NULL,
  PRIMARY KEY (`bole_codigo`),
  KEY `pasa_codigo` (`pasa_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `boleto`
--

INSERT INTO `boleto` (`bole_codigo`, `bole_fecha`, `bole_clase`, `pasa_codigo`) VALUES
(3, '2024-08-10', 'economico', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destino`
--

DROP TABLE IF EXISTS `destino`;
CREATE TABLE IF NOT EXISTS `destino` (
  `des_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `des_continente` text NOT NULL,
  `des_nombre` text NOT NULL,
  `avi_codigo` int(11) DEFAULT NULL,
  PRIMARY KEY (`des_codigo`),
  KEY `avi_codigo` (`avi_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `destino`
--

INSERT INTO `destino` (`des_codigo`, `des_continente`, `des_nombre`, `avi_codigo`) VALUES
(3, 'Europa', 'Italia', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasajero`
--

DROP TABLE IF EXISTS `pasajero`;
CREATE TABLE IF NOT EXISTS `pasajero` (
  `pasa_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `pasa_nombre` text NOT NULL,
  `pasa_apellido` text NOT NULL,
  `pasa_telefono` int(8) NOT NULL,
  PRIMARY KEY (`pasa_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pasajero`
--

INSERT INTO `pasajero` (`pasa_codigo`, `pasa_nombre`, `pasa_apellido`, `pasa_telefono`) VALUES
(1, 'valeria michelle', 'bermudez zapata', 33313693),
(2, 'valeria michelle', 'bermudez zapata', 33313693);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `piloto`
--

DROP TABLE IF EXISTS `piloto`;
CREATE TABLE IF NOT EXISTS `piloto` (
  `pilo_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `pilo_nombre` text NOT NULL,
  `pilo_apellido` text NOT NULL,
  `pilo_telefono` int(8) NOT NULL,
  `avi_codigo` int(11) DEFAULT NULL,
  PRIMARY KEY (`pilo_codigo`),
  KEY `avi_codigo` (`avi_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `piloto`
--

INSERT INTO `piloto` (`pilo_codigo`, `pilo_nombre`, `pilo_apellido`, `pilo_telefono`, `avi_codigo`) VALUES
(2, 'ali', 'jons23', 33313693, 3);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `avion`
--
ALTER TABLE `avion`
  ADD CONSTRAINT `avion_ibfk_1` FOREIGN KEY (`bole_codigo`) REFERENCES `boleto` (`bole_codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `boleto`
--
ALTER TABLE `boleto`
  ADD CONSTRAINT `boleto_ibfk_1` FOREIGN KEY (`pasa_codigo`) REFERENCES `pasajero` (`pasa_codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `destino`
--
ALTER TABLE `destino`
  ADD CONSTRAINT `destino_ibfk_1` FOREIGN KEY (`avi_codigo`) REFERENCES `avion` (`avi_codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `piloto`
--
ALTER TABLE `piloto`
  ADD CONSTRAINT `piloto_ibfk_1` FOREIGN KEY (`avi_codigo`) REFERENCES `avion` (`avi_codigo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
