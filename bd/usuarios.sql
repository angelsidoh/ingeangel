-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-02-2021 a las 18:56:02
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
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(30) NOT NULL,
  `apellidos_usuario` varchar(30) NOT NULL,
  `email_usuario` varchar(60) NOT NULL,
  `pass_usuario` varchar(30) NOT NULL,
  `telefono_usuario` varchar(11) NOT NULL,
  `calle_usuario` varchar(100) NOT NULL,
  `numiedireccion_usuario` varchar(5) NOT NULL,
  `colonia_usuario` varchar(100) NOT NULL,
  `cp_usuario` varchar(5) NOT NULL,
  `paquetes_usuario` varchar(24) NOT NULL,
  `fecha_usuario` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `apellidos_usuario`, `email_usuario`, `pass_usuario`, `telefono_usuario`, `calle_usuario`, `numiedireccion_usuario`, `colonia_usuario`, `cp_usuario`, `paquetes_usuario`, `fecha_usuario`) VALUES
(1, 'José Angel', 'Ruiz Chávez', 'a@gmail.com', 'hyo', '0', '', '0', '', '0', '', '0000-00-00'),
(2, 'Nick José', 'Ruiz Chávez', 'b@outlook.com', 'hyonick', '0', '', '0', '', '0', '', '0000-00-00'),
(4, 'José Angel', '', '', '', '0', '', '0', '', '0', '', '0000-00-00'),
(5, 'José Angel', 'Ruiz Chávez', '', '', '0', '', '0', '', '0', '', '0000-00-00'),
(6, 'José Angel', 'Ruiz Chávez', '', '', '2147483647', '', '0', '', '0', '', '0000-00-00'),
(7, 'José Angel', 'Ruiz Chávez', '', '', '2147483647', '', '0', '', '0', '', '0000-00-00'),
(8, 'José Angel', 'Ruiz Chávez', '', '', '2147483647', '', '0', '', '0', '', '0000-00-00'),
(9, 'José Angel', 'Ruiz Chávez', '', '', '4521114455', '', '0', '', '0', '', '0000-00-00'),
(10, 'José Angel', 'Ruiz Chávez', '', '', '4521114455', '', '', '', '', '', '0000-00-00'),
(11, 'José Angel', 'Ruiz Chávez', 'angel._rusiz@hotmail.com', '', '4521114455', 'San José de la Mina', '42', '', '', '', '0000-00-00'),
(12, 'José Angel', 'Ruiz Chávez', 'angel._rsuiz@hotmail.com', '', '4521114455', 'San José de la Mina', '42', 'San José de la Mina', '', '', '0000-00-00'),
(13, 'José Angel', 'Ruiz Chávez', 'angel._ruiz@hotmail.com', '', '4521114455', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Negocio', '2021-02-06'),
(14, 'José Angel', 'Ruiz Chávez', 'angels._ruiz@hotmail.com', '', '4521114455', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Negocio', '2021-02-06'),
(15, 'José Angel', 'Ruiz Chávez', 'angasdel._ruiz@hotmail.com', '', '4521114455', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Negocio', '2021-02-06'),
(16, 'José Angel', 'Ruiz Chávez', 'angel._aruiz@hotmail.com', '', '4521114455', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Negocio', '2021-02-06'),
(17, 'José Angel', 'Ruiz Chávez', 'angel._rudiz@hotmail.com', '', '4521114455', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Negocio', '2021-02-06'),
(18, 'José Angel', 'Ruiz Chávez', 'angel._ruadiz@hotmail.com', '', '4521114455', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Negocio', '2021-02-06'),
(19, 'José Angel', 'Ruiz Chávez', 'angesssl._ruiz@hotmail.com', 'PWQXs=iZ', '4521114455', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Negocio', '2021-02-06'),
(20, 'José Angel', 'Ruiz Chávez', 'angeaaal._ruiz@hotmail.com', 'd4YTI8(!', '4521114455', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Negocio', '2021-02-06'),
(21, 'José Angel', 'Ruiz Chávez', 'angel._ruasdasdiz@hotmail.com', 'tg1RSQ6Z', '4521114455', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Negocio', '2021-02-07'),
(22, 'José Angel', 'Ruiz Chávez', 'angasdasdel._ruiz@hotmail.com', 'JV-dUW9b', '4521114455', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Negocio', '2021-02-07');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
