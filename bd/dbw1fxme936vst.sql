-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 14-03-2021 a las 11:33:58
-- Versión del servidor: 5.7.32-35-log
-- Versión de PHP: 7.3.27

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
  `token_contrato` varchar(52) NOT NULL,
  `tipo_contrato` varchar(30) NOT NULL,
  `tipoint_contrato` int(2) NOT NULL,
  `fechainicio_contrato` datetime NOT NULL,
  `fechafin_contrato` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contratos`
--

INSERT INTO `contratos` (`id_contrato`, `idproyecto_contrato`, `link_contrato`, `token_contrato`, `tipo_contrato`, `tipoint_contrato`, `fechainicio_contrato`, `fechafin_contrato`) VALUES
(1, 1, 'https://ingeangel.com/contrato.php', '9ZW2r8h74dDwPIeVa', '3 Meses', 3, '2020-12-07 08:36:14', '2021-01-12 11:55:28'),
(3, 2, 'https://ingeangel.com/contrato.php', 'TNwCzNTM12knc7AI6', '3 Meses', 3, '2021-03-09 05:56:24', '2021-06-09 05:56:24'),
(4, 1, 'https://ingeangel.com/contrato.php', 'IA47X1gTBIYODSxJNl', '12 Meses', 12, '2021-03-10 11:58:24', '2022-03-10 11:58:24'),
(5, 3, 'https://ingeangel.com/contrato.php', 'ZHhXBfZVHqGnM1YEu9', '3 Meses', 3, '2021-03-13 06:53:33', '2021-06-13 06:53:33'),
(6, 4, 'https://ingeangel.com/contrato.php', 'ufgMOCRkW4i8LtHATQ', '3 Meses', 3, '2021-03-13 06:53:46', '2021-06-13 06:53:46');

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
  `titular_pago` varchar(100) NOT NULL,
  `contmeses_pago` int(11) NOT NULL,
  `qr_pago` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id_pago`, `fechainicio_pago`, `fechafin_pago`, `fechadepago_pago`, `idproyecto_pago`, `tokenconekta_pago`, `fortarget_pago`, `tokenpago_pago`, `idcontrato_pago`, `tokencontrato_pago`, `money_pago`, `titular_pago`, `contmeses_pago`, `qr_pago`) VALUES
(1, '2020-12-07 08:36:14', '2021-03-09 08:36:14', '2021-03-07 09:11:55', 1, 'ord_2pNKmHM4bgahas2cS', 5100, 'angel._ruiz@hotmail.com', 1, '9ZW2r8h74dDwPIeVa', '8000', 'José Angel Ruiz Chávez', 1, ''),
(2, '2021-01-11 09:06:11', '2021-03-11 17:56:04', '2021-03-07 10:17:23', 1, 'ord_2pNLdGwu3TapJmksi', 1881, 'angel._ruiz@hotmail.com', 1, '9ZW2r8h74dDwPIeVa', '8000', 'José Angel Ruiz Chávez', 2, ''),
(11, '2021-03-10 18:14:12', '2021-04-09 05:56:24', '2021-03-13 06:45:28', 2, 'ord_2pQFbxtb9z3CYg7hd', 4444, 'Contrato: (TNwCzNTM12knc7AI6-11) Paquete Negocio y Servicios varios (www.pruebas.com).', 3, 'TNwCzNTM12knc7AI6', '8000', 'JOSÉ ANGEL RUIZ CHÁVEZ', 1, './temp/qr/TNwCzNTM12knc7AI6-11-22021-03-13-06-45-28codeQr.png'),
(12, '2021-04-09 05:56:24', '2021-06-09 05:56:24', '2021-03-12 15:44:06', 2, 'ord_2pQ3jbSs17tpuCFin', 5100, 'Contrato: (TNwCzNTM12knc7AI6-12) Paquete Negocio y Servicios varios (www.pruebas.com).', 3, 'TNwCzNTM12knc7AI6', '16000', 'JOSÉ ANGEL RUIZ CHÁVEZ', 2, './temp/qr/TNwCzNTM12knc7AI6-12-22021-03-12-15-44-06codeQr.png'),
(13, '2021-03-10 18:03:40', '2021-04-10 11:58:24', '0000-00-00 00:00:00', 1, 'asdas', 0, '', 4, 'IA47X1gTBIYODSxJNl', '0', '', 1, ''),
(14, '2021-04-10 18:01:50', '2022-03-10 11:58:24', '0000-00-00 00:00:00', 1, '', 0, '', 4, 'IA47X1gTBIYODSxJNl', '0', '', 11, ''),
(15, '2021-03-13 06:53:33', '2021-04-13 06:53:33', '0000-00-00 00:00:00', 3, '', 0, '', 5, 'ZHhXBfZVHqGnM1YEu9', '0', '', 1, ''),
(16, '2021-03-13 06:53:46', '2021-04-13 06:53:46', '2021-03-13 07:00:55', 4, 'ord_2pQFomG6pnq5JiFaM', 1881, 'Contrato: (ufgMOCRkW4i8LtHATQ-16) Paquete Profesional y Servicios varios (Prototipo X).', 6, 'ufgMOCRkW4i8LtHATQ', '12000', 'JOSÉ ANGEL RUIZ CHÁVEZ', 1, './temp/qr/ufgMOCRkW4i8LtHATQ-16-42021-03-13-07-00-55codeQr.png'),
(17, '2021-04-13 06:53:46', '2021-06-13 06:53:46', '2021-03-13 07:02:57', 4, 'ord_2pQFqKL4M7V3kz7fY', 1881, 'Contrato: (ufgMOCRkW4i8LtHATQ-17) Paquete Profesional y Servicios varios (Prototipo X).', 6, 'ufgMOCRkW4i8LtHATQ', '22400', 'JOSÉ ANGEL RUIZ CHÁVEZ', 2, './temp/qr/ufgMOCRkW4i8LtHATQ-17-42021-03-13-07-02-57codeQr.png'),
(18, '2021-04-13 06:53:33', '2021-05-13 06:53:33', '0000-00-00 00:00:00', 3, '', 0, '', 5, 'ZHhXBfZVHqGnM1YEu9', '0', '', 1, ''),
(19, '2021-05-13 06:53:33', '2021-06-13 06:53:33', '0000-00-00 00:00:00', 3, '', 0, '', 5, 'ZHhXBfZVHqGnM1YEu9', '0', '', 1, '');

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
  `idproyecto_paso` tinyint(11) NOT NULL,
  `num_paso` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pasos`
--

INSERT INTO `pasos` (`id_paso`, `descripcion_paso`, `timing_paso`, `fechaini_paso`, `fechafin_paso`, `idproyecto_paso`, `num_paso`) VALUES
(3, 'Nos pondremos en contacto con usted a la brevedad posible', 1, '2021-03-09 05:56:24', '2021-03-11 00:00:00', 2, '1'),
(6, '1.-Contacto con el cliente', 1, '2021-03-10 08:36:14', '2021-03-12 22:00:00', 1, '2'),
(9, 'Platicar sobre el diseño de su pagina', 0, '2021-03-10 07:25:08', '2021-03-31 12:00:00', 2, '2'),
(10, 'Maquetar el diseño en los lenguajes de programación necesarios', 0, '2021-03-10 07:34:08', '2021-03-31 07:00:00', 2, '3'),
(11, 'diseño de la pagina', 0, '2021-03-10 16:26:54', '2021-03-11 18:00:00', 1, '3'),
(12, 'casi esta lista', 0, '2021-03-10 18:19:58', '2021-03-13 20:00:00', 2, '4'),
(13, 'Se me olvido la descripción', 0, '2021-03-13 06:48:59', '2021-03-14 06:48:59', 1, '4'),
(14, '1.-Nos pondremos en contacto con usted a la brevedad posible.', 1, '2021-03-13 06:53:33', '2021-03-14 06:53:33', 3, '1'),
(15, '1.-Nos pondremos en contacto con usted a la brevedad posible.', 1, '2021-03-13 06:53:46', '2021-03-14 06:53:46', 4, ''),
(16, 'Hey', 0, '2021-03-13 06:59:20', '2021-03-15 06:59:20', 3, '2');

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
(1, 3800, 6800, 10000, 300, 0, 100, 800),
(2, 3800, 6800, 10800, 300, 0, 100, 800);

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
(1, 'pcplus.com', 24, 'Paquete Negocio', 'link', '8000', ''),
(2, 'www.pruebas.com', 24, 'Paquete Negocio', 'link', '8000', ''),
(3, 'Prototipo X', 26, 'Paquete Profesional', 'link', '12000', ''),
(4, 'Prototipo X', 27, 'Paquete Profesional', 'link', '12000', '');

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
  `rfc_usuario` varchar(20) NOT NULL,
  `tipo_usuario` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `apellidos_usuario`, `email_usuario`, `pass_usuario`, `telefono_usuario`, `foto_usuario`, `calle_usuario`, `numiedireccion_usuario`, `colonia_usuario`, `cp_usuario`, `paquetes_usuario`, `fecha_usuario`, `idproyecto_usuario`, `domiciliofiscal_usuario`, `cfdi_usuario`, `rfc_usuario`, `tipo_usuario`) VALUES
(1, 'José Angel', 'Ruiz Chávez', 'a@gmail.com', 'hyo', '4521441689', 'upload/JoséAngel-wr901Mar2021152753abc.jpeg', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Profesional', '2021-02-25', 127, 'San José', '45a4sd51', '4a5sd451as54d1', 'admin'),
(24, 'José Angel', 'Ruiz Chávez', 'angel._ruiz@hotmail.com', 'a', '4521114455', '', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Negocio', '2021-03-07', 2, '', '', '', 'user'),
(25, 'José Angel', 'Ruiz Chávez', 'b@gmail.com', 'hyo', '4521441689', 'upload/JoséAngel-wr901Mar2021152753abc.jpeg', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Profesional', '2021-02-25', 127, 'San José', '45a4sd51', '4a5sd451as54d1', 'admin'),
(26, 'Jordan', 'Ruiz Chávez', 'joseangelruizchavez@hotmail.com', 'IMtzfI17', '4521114455', '', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Profesional', '2021-03-13', 3, '', '', '', ''),
(27, 'Jordan', 'Ruiz Chávez', 'joseangelruizchavez@gmail.com', 'U0DPCjKK', '4521114455', '', 'San José de la Mina', '42', 'San José de la Mina', '60125', 'Paquete Profesional', '2021-03-13', 4, '', '', '', '');

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
  MODIFY `id_contrato` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id_pago` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `pasos`
--
ALTER TABLE `pasos`
  MODIFY `id_paso` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `precios`
--
ALTER TABLE `precios`
  MODIFY `id_precio` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id_proyecto` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
