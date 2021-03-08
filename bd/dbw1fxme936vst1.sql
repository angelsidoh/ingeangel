-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2021 a las 00:21:23
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
-- Estructura de tabla para la tabla `contratos`
--

CREATE TABLE `contratos` (
  `id_contrato` tinyint(11) NOT NULL,
  `idproyecto_contrato` tinyint(11) NOT NULL,
  `link_contrato` varchar(100) NOT NULL,
  `token_contrato` varchar(52) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contratos`
--

INSERT INTO `contratos` (`id_contrato`, `idproyecto_contrato`, `link_contrato`, `token_contrato`) VALUES
(1, 1, 'http://localhost/01ingeangel.com/contrato.php', 'kasidio'),
(2, 20, 'http://localhost/01ingeangel.com/contrato.php-56a1sd561', '56a1sd561'),
(3, 13, 'http://localhost/01ingeangel.com/contrato.php-iajsdij215', 'iajsdij215'),
(4, 13, 'http://localhost/01ingeangel.com/contrato.php-pfgkpasdm441', 'pfgkpasdm441'),
(5, 13, 'http://localhost/01ingeangel.com/contrato.php-okaoskd4151asd', 'okaoskd4151asd'),
(6, 17, 'http://localhost/01ingeangel.com/contrato.php-21d51as', '21d51as'),
(7, 23, 'http://localhost/01ingeangel.com/contrato.php-oofg44sad', 'oofg44sad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id_pago` tinyint(11) NOT NULL,
  `fechainicio_pago` datetime NOT NULL,
  `fechafin_pago` datetime NOT NULL,
  `fechadepago_pago` datetime NOT NULL,
  `idproyecto_pago` tinyint(11) NOT NULL,
  `tokenconekta_pago` varchar(50) NOT NULL,
  `fortarget_pago` int(4) NOT NULL,
  `tokenpago_pago` varchar(100) NOT NULL,
  `idcontrato_pago` tinyint(11) NOT NULL,
  `tokencontrato_pago` varchar(52) NOT NULL,
  `money_pago` decimal(5,0) NOT NULL,
  `titular_pago` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id_pago`, `fechainicio_pago`, `fechafin_pago`, `fechadepago_pago`, `idproyecto_pago`, `tokenconekta_pago`, `fortarget_pago`, `tokenpago_pago`, `idcontrato_pago`, `tokencontrato_pago`, `money_pago`, `titular_pago`) VALUES
(1, '2021-02-18 15:48:34', '2021-03-18 15:48:34', '2021-02-24 15:31:20', 1, '', 0, 'Contrato: (kasidio-1) Paquete Básico y Servicios varios (ingeangel.com).', 1, 'kasidio', '0', 'José Angel Ruiz Chávez'),
(2, '2021-02-19 15:48:34', '2021-03-20 15:48:34', '2021-02-17 15:48:34', 20, 'ord_2pJoKVePYKQ5qi5Vf', 5, 'Contrato: (56a1sd561-2) Paquete Profesional y Servicios varios (donna.com).', 2, '56a1sd561', '9270', 'José Angel Ruiz Chávez'),
(3, '2021-02-18 15:48:34', '2021-03-18 15:48:34', '2021-02-28 15:48:34', 13, 'ord_2pJocqAJhr5e6fRt3', 5, 'Contrato: (iajsdij215-3) Paquete Básico y Servicios varios (goditosybonitos.com).', 3, 'iajsdij215', '5100', 'José Angel Ruiz Chávez'),
(4, '2021-02-19 15:48:34', '2021-03-21 15:48:34', '2021-02-24 15:48:34', 13, 'ord_2pJp779UuwGGq3she', 5, 'Contrato: (iajsdij215-4) Paquete Básico y Servicios varios (goditosybonitos.com).', 3, 'iajsdij215', '5100', 'José Angel Ruiz Chávez'),
(5, '2021-02-18 15:48:34', '2021-03-21 15:48:34', '2021-02-24 15:48:34', 17, 'ord_2pJodCa4odQTTqhvG', 5, 'Contrato: (21d51as-5) Paquete Negocio y Servicios varios (jugos&tortas.com).', 6, '21d51as', '8250', 'José Angel Ruiz Chávez'),
(7, '2021-02-19 15:48:34', '2021-03-21 15:48:34', '2021-03-01 15:48:34', 20, 'ord_2pJoQC4ift7TbMxae', 5, 'Contrato: (56a1sd561-7) Paquete Profesional y Servicios varios (donna.com).', 2, '56a1sd561', '9270', 'José Angel Ruiz Chávez'),
(8, '2021-02-19 15:48:34', '2021-03-20 15:48:34', '2021-03-19 15:48:34', 20, 'ord_2pJoQPSUGBfdqhvLR', 5, 'Contrato: (56a1sd561-8) Paquete Profesional y Servicios varios (donna.com).', 2, '56a1sd561', '9270', 'José Angel Ruiz Chávez'),
(9, '2021-02-19 15:48:34', '2021-03-21 15:48:34', '2021-02-23 15:48:34', 13, 'ord_2pJocc4EG83RCRHyv', 5, 'Contrato: (iajsdij215-9) Paquete Básico y Servicios varios (goditosybonitos.com).', 3, 'iajsdij215', '5100', 'José Angel Ruiz Chávez'),
(10, '2021-02-18 15:48:34', '2021-03-21 15:48:34', '2021-03-22 15:48:34', 13, 'ord_2pJp31RfFk6BhajFu', 5, 'Contrato: (pfgkpasdm441-10) Paquete Básico y Servicios varios (goditosybonitos.com).', 4, 'pfgkpasdm441', '5100', 'José Angel Ruiz Chávez'),
(11, '2021-02-19 15:48:34', '2021-03-21 15:48:34', '2021-02-24 15:48:34', 13, 'ord_2pJoRLovK8wou3oT3', 5, 'Contrato: (okaoskd4151asd-11) Paquete Básico y Servicios varios (goditosybonitos.com).', 5, 'okaoskd4151asd', '5100', 'José Angel Ruiz Chávez'),
(12, '2021-02-19 15:48:34', '2021-03-16 15:48:34', '2021-03-16 15:48:34', 23, 'ord_2pJoKAdkvzr6Dp8Bx', 5, 'Contrato: (oofg44sad-12) Paquete Profesional y Servicios varios (bmth.com).', 7, 'oofg44sad', '9270', 'José Angel Ruiz Chávez');

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
(6, 'f', 1, '2021-02-08 18:18:21', '2021-02-16 12:26:03', 17),
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
(21, 'u', 1, '2021-02-11 11:15:54', '2021-09-09 11:37:02', 17),
(22, 'v', 1, '2021-02-08 18:16:31', '2022-02-28 17:39:12', 23),
(23, 'w', 1, '2021-02-08 18:17:43', '2021-09-15 16:36:00', 17),
(24, 'z', 1, '2021-02-11 18:18:21', '2021-12-01 11:10:39', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precios`
--

CREATE TABLE `precios` (
  `id_precio` tinyint(11) NOT NULL,
  `basico_precio` int(5) NOT NULL,
  `negocio_precio` int(5) NOT NULL,
  `profesional_precio` int(5) NOT NULL,
  `hosting_precio` int(5) NOT NULL,
  `dominio_precio` int(5) NOT NULL,
  `mantenimiento_precio` int(5) NOT NULL,
  `basesdatos_precio` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `precios`
--

INSERT INTO `precios` (`id_precio`, `basico_precio`, `negocio_precio`, `profesional_precio`, `hosting_precio`, `dominio_precio`, `mantenimiento_precio`, `basesdatos_precio`) VALUES
(1, 3900, 7050, 8070, 300, 0, 100, 800);

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
(1, 'ingeangel.com', 1, 'Paquete Básico', 'linkQWEGF', '3700', ''),
(2, '', 2, 'Paquete Básico', 'link', '3700', ''),
(3, '', 3, 'Paquete Básico', 'link', '3700', ''),
(4, '', 4, 'Paquete Básico', 'link', '3700', ''),
(5, '', 5, 'Paquete Negocio', 'link', '7150', ''),
(6, '', 6, 'Paquete Negocio', 'link', '7150', ''),
(7, '', 7, 'Paquete Profesional', 'link', '8170', ''),
(8, '', 9, 'Paquete Profesional', 'link', '8170', ''),
(9, '', 10, 'Paquete Profesional', 'link', '8170', ''),
(10, '', 11, 'Paquete Profesional', 'link', '8170', ''),
(11, '', 12, 'Paquete Profesional', 'link', '8170', ''),
(12, 'jugos&tortas.com', 16, 'Paquete Básico', 'linkDASDASDASD', '3700', ''),
(13, 'goditosybonitos.com', 1, 'Paquete Básico', 'linkDAVFGH', '3700', ''),
(14, 'jugos&tortas.com', 0, 'Paquete Básico', 'link', '3700', ''),
(15, 'jugos&tortas.com', 0, 'Paquete Básico', 'link', '3700', ''),
(16, 'jugos&tortas.com', 14, 'Paquete Básico', 'link', '3700', ''),
(17, 'jugos&tortas.com', 1, 'Paquete Negocio', 'link', '7150', ''),
(18, 'jugos&tortas.com', 17, 'Paquete Profesional', 'link', '8170', ''),
(19, 'jugos&tortas.com', 18, 'Paquete Profesional', 'link', '8170', ''),
(20, 'donna.com', 1, 'Paquete Profesional', 'linkASDBHJJU', '8170', ''),
(21, 'jugos&tortas.com', 20, 'Paquete Profesional', 'link', '8170', ''),
(22, 'jugos&tortas.com', 21, 'Paquete Profesional', 'link', '8170', ''),
(23, 'bmth.com', 1, 'Paquete Profesional', 'linkNMUDFGER', '8170', ''),
(24, 'jugos&tortas.com', 23, 'Paquete Profesional', 'link', '8170', '');

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
(1, 'José Angel', 'Ruiz Chávez', 'a@gmail.com', 'hyo', '4521114455', 'upload/JoséAngel-LeO24Feb2021054522abc.jpeg', 'San José de la Mina1', '411', 'San José de la Min2', '60121', 'Paquete Básico', '2021-02-08', 1, '4', '2', '3'),
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
-- Indices de la tabla `contratos`
--
ALTER TABLE `contratos`
  ADD PRIMARY KEY (`id_contrato`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id_pago`);

--
-- Indices de la tabla `pasos`
--
ALTER TABLE `pasos`
  ADD PRIMARY KEY (`id_paso`);

--
-- Indices de la tabla `precios`
--
ALTER TABLE `precios`
  ADD PRIMARY KEY (`id_precio`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id_proyecto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contratos`
--
ALTER TABLE `contratos`
  MODIFY `id_contrato` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id_pago` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `pasos`
--
ALTER TABLE `pasos`
  MODIFY `id_paso` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de la tabla `precios`
--
ALTER TABLE `precios`
  MODIFY `id_precio` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id_proyecto` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
