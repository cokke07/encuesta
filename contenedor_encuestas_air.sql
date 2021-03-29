-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-03-2021 a las 05:05:11
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `contenedor_encuestas_air`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_valido`
--

CREATE TABLE `cliente_valido` (
  `Rut` varchar(10) NOT NULL,
  `Codigo` varchar(10) NOT NULL,
  `F_Nacimiento` datetime NOT NULL,
  `C_Origen` varchar(20) NOT NULL,
  `C_Destino` varchar(20) NOT NULL,
  `Pais` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente_valido`
--

INSERT INTO `cliente_valido` (`Rut`, `Codigo`, `F_Nacimiento`, `C_Origen`, `C_Destino`, `Pais`) VALUES
('123', '123', '2018-06-06 00:00:00', 'Chillan', 'Lima', 'Chile'),
('1234', '1234', '2021-03-21 00:00:00', 'chile', 'peru', 'chile'),
('12341', '12341', '2021-03-21 00:00:00', 'chile', 'peru', 'chile'),
('12345', '12345', '1983-05-09 00:00:00', 'Santiago', 'Paris', 'Chile'),
('1313', '1313', '2019-06-13 00:00:00', 'Santiago', 'Paris', 'Chile'),
('22', '22', '2000-06-07 00:00:00', 'huilo', 'santiasco', 'china'),
('54321', '54321', '2000-01-20 00:00:00', 'Santiago', 'Paris', 'Chile'),
('77', '77', '1990-06-14 00:00:00', 'buenos aires', 'chillan', 'argentina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--

CREATE TABLE `encuesta` (
  `Rut` varchar(10) NOT NULL,
  `Codigo` varchar(10) NOT NULL,
  `R1` char(1) NOT NULL,
  `R2` char(1) NOT NULL,
  `R3` char(1) NOT NULL,
  `R4` char(1) NOT NULL,
  `R5` char(1) NOT NULL,
  `R6` char(1) NOT NULL,
  `R7` char(1) NOT NULL,
  `R8` char(1) NOT NULL,
  `R9` char(1) NOT NULL,
  `R10` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente_valido`
--
ALTER TABLE `cliente_valido`
  ADD PRIMARY KEY (`Rut`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
