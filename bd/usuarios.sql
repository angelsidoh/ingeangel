-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-02-2021 a las 01:15:11
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
  `id_usuario` tinyint(11) NOT NULL,
  `nombre_usuario` varchar(30) NOT NULL,
  `apellidos_usuario` varchar(30) NOT NULL,
  `email_usuario` varchar(60) NOT NULL,
  `pass_usuario` varchar(30) NOT NULL,
  `telefono_usuario` varchar(11) NOT NULL,
  `foto_usuario` varchar(100) NOT NULL,
  `calle_usuario` varchar(100) NOT NULL,
  `numiedireccion_usuario` varchar(5) NOT NULL,
  `colonia_usuario` varchar(100) NOT NULL,
  `cp_usuario` varchar(5) NOT NULL,
  `paquetes_usuario` varchar(24) NOT NULL,
  `fecha_usuario` date NOT NULL,
  `idproyecto_usuario` tinyint(11) NOT NULL,
  `domiciliofiscal_usuario` varchar(250) NOT NULL,
  `cfdi_usuario` varchar(20) NOT NULL,
  `rfc_usuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `apellidos_usuario`, `email_usuario`, `pass_usuario`, `telefono_usuario`, `foto_usuario`, `calle_usuario`, `numiedireccion_usuario`, `colonia_usuario`, `cp_usuario`, `paquetes_usuario`, `fecha_usuario`, `idproyecto_usuario`, `domiciliofiscal_usuario`, `cfdi_usuario`, `rfc_usuario`) VALUES
(1, 'José Angel', 'Ruiz Chávez', 'a@gmail.com', 'hyo', '4521114455', 'upload/JoséAngel-7NH10Feb2021074622sdax.png', 'San José de la Mina1', '411', 'San José de la Min2', '60121', 'Paquete Básico', '2021-02-08', 1, '4', '2', '3'),
(2, 'José Angel', 'Ruiz Chávez', 'cangel._ruiz@hotmail.com', '-07zC=YG', '4521114455', '', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Básico', '2021-02-08', 1, '', '', ''),
(3, 'José Angel', 'Ruiz Chávez', 'anxgel._ruiz@hotmail.com', '%+5mE~B', '4521114455', '', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Básico', '2021-02-08', 1, '', '', ''),
(4, 'José Angel', 'Ruiz Chávez', 'angesdl._ruiz@hotmail.com', 'HTLb-Quc', '4521114455', '', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Básico', '2021-02-08', 1, '', '', ''),
(5, 'José Angel', 'Ruiz Chávez', 'angeasdl._ruiz@hotmail.com', 'L=teN~Mq', '4521114455', '', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Negocio', '2021-02-08', 1, '', '', ''),
(6, 'José Angel', 'Ruiz Chávez', 'angel._rsdaduiz@hotmail.com', 'ljjqrkzH', '4521114455', '', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Negocio', '2021-02-08', 1, '', '', ''),
(7, 'José Angel', 'Ruiz Chávez', 'angel._rweruiz@hotmail.com', 'LlM#=Es1', '4521114455', '', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Profesional', '2021-02-08', 1, '', '', ''),
(8, 'José Angel', 'Ruiz Chávez', 'angssddael._ruiz@hotmail.com', 'x523O+L', '4521114455', '', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Profesional', '2021-02-08', 1, '', '', ''),
(9, 'José Angel', 'Ruiz Chávez', 'angel._ruiasasz@hotmail.com', 'RU(CUpPz', '4521114455', '', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Profesional', '2021-02-08', 1, '', '', ''),
(10, 'José Angel', 'Ruiz Chávez', 'andfgel._ruiz@hotmail.com', 'qi1WTaY-', '4521114455', '', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Profesional', '2021-02-08', 0, '', '', ''),
(11, 'José Angel', 'Ruiz Chávez', 'angel._ruisdadz@hotmail.com', 'Ui)LANQw', '4521114455', '', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Profesional', '2021-02-08', 0, '', '', ''),
(12, 'José Angel', 'Ruiz Chávez', 'angel.asdad_ruiz@hotmail.com', 'OrrY0RdU', '4521114455', '', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Profesional', '2021-02-08', 0, '', '', ''),
(13, 'José Angel', 'Ruiz Chávez', 'angel._rsduiz@hotmail.com', '4!pN8t1H', '4521114455', '', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Básico', '2021-02-08', 0, '', '', ''),
(14, 'José Angel', 'Ruiz Chávez', 'angel.asdasdadadwwd_ruiz@hotmail.com', 'GoMQ&URj', '4521114455', '', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Básico', '2021-02-08', 0, '', '', ''),
(15, 'José Angel', 'Ruiz Chávez', 'angsadq23el._ruiz@hotmail.com', 'v1YO#YH&', '4521114455', '', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Negocio', '2021-02-08', 0, '', '', ''),
(16, 'José Angel', 'Ruiz Chávez', 'angad32234eel._ruiz@hotmail.com', '9DoW)cER', '4521114455', '', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Negocio', '2021-02-08', 16, '', '', ''),
(17, 'José Angel', 'Ruiz Chávez', 'anad3444gel._ruiz@hotmail.com', 'iQj2S7dM', '4521114455', '', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Profesional', '2021-02-08', 18, '', '', ''),
(18, 'José Angel', 'Ruiz Chávez', 'angel._rasd3uiz@hotmail.com', '&tjs2dkA', '4521114455', '', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Profesional', '2021-02-08', 19, '', '', ''),
(19, 'José Angel', 'Ruiz Chávez', 'angasdad234el._ruiz@hotmail.com', ')%3MM7cV', '4521114455', '', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Profesional', '2021-02-08', 20, '', '', ''),
(20, 'José Angel', 'Ruiz Chávez', 'angel._rsd2125uiz@hotmail.com', 'Uv~qj8MP', '4521114455', '', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Profesional', '2021-02-08', 21, '', '', ''),
(21, 'José Angel', 'Ruiz Chávez', 'anasd541gel._ruiz@hotmail.com', 'IrqA#y', '4521114455', '', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Profesional', '2021-02-08', 22, '', '', ''),
(22, 'José Angel', 'Ruiz Chávez', 'angd2qwe5el._ruiz@hotmail.com', 'ANsCP(0t', '4521114455', '', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Profesional', '2021-02-08', 23, '', '', ''),
(23, 'José Angel', 'Ruiz Chávez', 'angel._ruizdqwd414151asd@hotmail.com', 'uj0iFbti', '4521114455', '', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Profesional', '2021-02-08', 24, '', '', '');

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
  MODIFY `id_usuario` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
