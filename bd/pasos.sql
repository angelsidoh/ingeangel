-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-02-2021 a las 01:16:50
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
-- Estructura de tabla para la tabla `pasos`
--

CREATE TABLE `pasos` (
  `id_paso` tinyint(11) NOT NULL,
  `descripcion_paso` varchar(1000) NOT NULL,
  `timing_paso` int(3) NOT NULL,
  `fechaini_paso` datetime NOT NULL,
  `fechafin_paso` datetime NOT NULL,
  `idproyecto_paso` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pasos`
--

INSERT INTO `pasos` (`id_paso`, `descripcion_paso`, `timing_paso`, `fechaini_paso`, `fechafin_paso`, `idproyecto_paso`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. https://www.youtube.com/ Natus sunt, veritatis aliquid hic iusto sed a numquam veniam magni, sint doloribus fuga debitis assumenda, porro expedita? Recusandae aspernatur adipisci eveniet consequuntur dicta!cupiditate necessitatibus atque eveniet', 0, '2021-02-11 07:48:13', '2021-02-16 14:37:58', 1),
(2, 'b', 0, '2021-02-09 07:59:10', '2021-02-17 13:24:16', 1),
(3, 'c', 1, '2021-02-14 14:06:08', '2021-02-16 14:06:12', 13),
(4, 'd', 1, '2021-02-08 18:16:31', '2021-02-16 12:26:03', 1),
(5, 'e', 1, '2021-02-08 18:17:43', '2021-02-16 08:40:02', 23),
(6, 'f', 1, '2021-02-08 18:18:21', '2021-02-16 12:26:03', 12),
(7, 'g', 0, '2021-02-08 20:10:22', '2021-02-16 19:49:56', 1),
(8, 'h', 0, '2021-02-15 07:59:45', '2021-02-16 08:59:48', 13),
(9, 'i', 1, '2021-02-08 20:10:39', '2021-02-16 12:26:03', 1),
(10, 'j', 1, '2021-02-08 18:16:31', '2021-02-09 18:16:31', 13),
(11, 'k', 1, '2021-02-08 18:17:43', '2021-02-17 16:36:00', 1),
(12, 'l', 1, '2021-02-08 18:18:21', '2022-01-05 06:58:08', 1),
(13, 'm', 0, '2021-02-10 20:10:03', '2021-10-13 20:24:43', 1),
(14, 'n', 0, '2021-02-09 07:59:10', '2021-02-16 12:26:03', 1),
(15, 'o', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 21),
(16, 'p', 1, '2021-02-08 18:16:31', '2021-02-28 16:31:00', 1),
(17, 'q', 1, '2021-02-08 18:17:43', '2021-03-01 17:52:25', 23),
(18, 'r', 1, '2021-02-08 18:18:21', '2021-02-16 18:18:21', 23),
(19, 's', 0, '2021-02-08 20:10:22', '2021-04-14 07:00:00', 1),
(20, 't', 0, '2021-02-16 14:47:33', '2021-02-17 14:47:37', 20),
(21, 'u', 1, '2021-02-11 11:15:54', '2021-09-09 11:37:02', 12),
(22, 'v', 1, '2021-02-08 18:16:31', '2022-02-28 17:39:12', 23),
(23, 'w', 1, '2021-02-08 18:17:43', '2021-09-15 16:36:00', 12),
(24, 'z', 1, '2021-02-11 18:18:21', '2021-12-01 11:10:39', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pasos`
--
ALTER TABLE `pasos`
  ADD PRIMARY KEY (`id_paso`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pasos`
--
ALTER TABLE `pasos`
  MODIFY `id_paso` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
