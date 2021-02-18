-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-02-2021 a las 01:16:13
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbw1fxme936vst`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id_proyecto` tinyint(11) NOT NULL,
  `nombre_proyecto` varchar(50) NOT NULL,
  `idusuario_proyecto` tinyint(11) NOT NULL,
  `tipo_proyecto` varchar(50) NOT NULL,
  `contrato_proyecto` varchar(50) NOT NULL,
  `pago_proyecto` decimal(5,0) NOT NULL,
  `timing_proyecto` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id_proyecto`, `nombre_proyecto`, `idusuario_proyecto`, `tipo_proyecto`, `contrato_proyecto`, `pago_proyecto`, `timing_proyecto`) VALUES
(1, 'ingeangel.com', 1, 'Paquete Básico', 'link', '99999', ''),
(2, '', 2, 'Paquete Básico', 'link', '0', ''),
(3, '', 3, 'Paquete Básico', 'link', '0', ''),
(4, '', 4, 'Paquete Básico', 'link', '4980', ''),
(5, '', 5, 'Paquete Negocio', 'link', '0', ''),
(6, '', 6, 'Paquete Negocio', 'link', '7299', ''),
(7, '', 7, 'Paquete Profesional', 'link', '9620', ''),
(8, '', 9, 'Paquete Profesional', 'link', '9620', ''),
(9, '', 10, 'Paquete Profesional', 'link', '9620', ''),
(10, '', 11, 'Paquete Profesional', 'link', '9620', ''),
(11, '', 12, 'Paquete Profesional', 'link', '9620', ''),
(12, 'jugos&tortas.com', 1, 'Paquete Básico', 'link', '4980', ''),
(13, 'goditosybonitos.com', 1, 'Paquete Básico', 'link', '4980', ''),
(14, 'jugos&tortas.com', 0, 'Paquete Básico', 'link', '4980', ''),
(15, 'jugos&tortas.com', 0, 'Paquete Básico', 'link', '4980', ''),
(16, 'jugos&tortas.com', 14, 'Paquete Básico', 'link', '4980', ''),
(17, 'jugos&tortas.com', 16, 'Paquete Negocio', 'link', '7299', ''),
(18, 'jugos&tortas.com', 17, 'Paquete Profesional', 'link', '9620', ''),
(19, 'jugos&tortas.com', 18, 'Paquete Profesional', 'link', '9620', ''),
(20, 'donna.com', 1, 'Paquete Profesional', 'link', '9620', ''),
(21, 'jugos&tortas.com', 20, 'Paquete Profesional', 'link', '9620', ''),
(22, 'jugos&tortas.com', 21, 'Paquete Profesional', 'link', '9620', ''),
(23, 'bmth.com', 1, 'Paquete Profesional', 'link', '9620', ''),
(24, 'jugos&tortas.com', 23, 'Paquete Profesional', 'link', '9620', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id_proyecto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id_proyecto` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
