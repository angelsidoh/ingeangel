-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-04-2021 a las 12:19:58
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
  `token_contrato` varchar(52) NOT NULL,
  `tipo_contrato` varchar(30) NOT NULL,
  `tipoint_contrato` int(2) NOT NULL,
  `fechainicio_contrato` datetime NOT NULL,
  `fechafin_contrato` datetime NOT NULL,
  `idusuario_contrato` int(11) NOT NULL,
  `firmacliente_contrato` varchar(101) NOT NULL,
  `firmainge_contrato` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contratos`
--

INSERT INTO `contratos` (`id_contrato`, `idproyecto_contrato`, `link_contrato`, `token_contrato`, `tipo_contrato`, `tipoint_contrato`, `fechainicio_contrato`, `fechafin_contrato`, `idusuario_contrato`, `firmacliente_contrato`, `firmainge_contrato`) VALUES
(1, 1, 'https://ingeangel.com/contrato.php', 'oKtXsJguTF3bE8YNlq', '3 Meses', 3, '2021-04-05 09:43:08', '2021-04-05 09:43:10', 0, '', ''),
(2, 2, 'https://ingeangel.com/contrato.php', 'zFgqVLX8C8T0FNg9Dt', '3 Meses', 3, '2021-04-05 09:44:29', '2021-04-05 09:44:31', 0, '', ''),
(19, 1, 'https://ingeangel.com/contrato.php', 'x0tvhMM8Kl6VQEKvj3', '3 Meses', 3, '2021-04-08 07:17:21', '2021-07-08 07:17:21', 1, 'includes/funciones/doc_sings/a9f2906599b3ffd135cd77639f7b648d.png', ''),
(20, 3, 'https://ingeangel.com/contrato.php', 'uoFA6moj3UwSGxW3g8', '3 Meses', 3, '2021-04-09 07:00:35', '2021-04-09 07:00:37', 0, '', ''),
(21, 3, 'https://ingeangel.com/contrato.php', 'xhvxoPVpO1WAEi77eH', '12 Meses', 12, '2021-04-09 07:04:10', '2022-04-09 07:04:10', 3, 'includes/funciones/doc_sings/fff2450800bdf1bb2041064c38a43edb.png', ''),
(22, 4, 'https://ingeangel.com/contrato.php', 'Y4zEr5erNB64Mw3Xi6', '3 Meses', 3, '2021-04-09 08:22:31', '2021-04-09 08:22:33', 0, '', ''),
(23, 4, 'https://ingeangel.com/contrato.php', 'yJ5eyaTNYUDgxGnNA', '12 Meses', 12, '2021-04-09 08:24:16', '2022-04-09 08:24:16', 4, 'includes/funciones/doc_sings/898251581c2a399378138b4860d64256.png', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajecliente`
--

CREATE TABLE `mensajecliente` (
  `id_mensaje` int(11) NOT NULL,
  `idusuario_mensaje` int(11) NOT NULL,
  `idmensaje_mensaje` int(11) NOT NULL,
  `mensaje_mensaje` varchar(1000) NOT NULL,
  `admin_mensaje` varchar(1000) NOT NULL,
  `asunto_mensaje` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mensajecliente`
--

INSERT INTO `mensajecliente` (`id_mensaje`, `idusuario_mensaje`, `idmensaje_mensaje`, `mensaje_mensaje`, `admin_mensaje`, `asunto_mensaje`) VALUES
(1, 1, 1, 'Lorem ipsum dolor sit amet consectetur adipiscing elit, nisi luctus platea lacus cursus duis, dui pharetra bibendum sociosqu fringilla nostra. Commodo viverra scelerisque placerat a himenaeos eu et morbi, lobortis cursus eget tempor etiam maecenas sociis, hac dictum magna non urna aliquam eros. Et varius at potenti gravida vitae ornare convallis feugiat vehicula suscipit, parturient laoreet dis platea curabitur dictumst eu cras sociis nascetur suspendisse, euismod cursus mollis imperdiet sociosq', '', ''),
(2, 1, 1, 'u maecenas ante cum dictum.\n\nPenatibus etiam suspendisse fusce laoreet eros in aenean vitae, nec orci congue consequat himenaeos eget aptent, nullam venenatis semper ultrices torquent cras facilisis. Conubia diam nullam maecenas bibendum habitasse elementum class morbi sociosqu hac, congue ut netus senectus lobortis porttitor cubilia luctus fames erat, urna fusce hendrerit dictum non euismod nibh pretium tortor. Gravida nostra sociis vel tempus id velit odio neque ullamcorper, iaculis hac intege', '', ''),
(3, 1, 1, 'r nunc ultricies praesent sodales sollicitudin eu, montes massa eget dictumst duis laoreet tristique cras.', '', ''),
(4, 2, 4, 'admin', '', ''),
(5, 3, 5, 'La vida espera por quienes realmente se arriesgan, esta es una forma de arriesgarse.', '', ''),
(6, 4, 6, 'Why do we use it?\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web site', '', ''),
(7, 4, 6, 's still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\n\n\nWhere does it come from?\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passa', '', ''),
(8, 4, 6, 'ge, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &#34;de Finibus Bonorum et Malorum&#34; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &#34;Lorem ipsum dolor sit amet..&#34;, comes from a line in section 1.10.32.\n\nThe standard chunk of Lorem Ipsum used since', '', ''),
(9, 4, 6, ' the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &#34;de Finibus Bonorum et Malorum&#34; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\n\nWhere can I get some?\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are', '', ''),
(10, 4, 6, ' going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected', '', ''),
(11, 4, 6, ' humour, or non-characteristic words etc.', '', '');

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
(1, '2021-04-05 09:43:08', '2021-05-05 09:43:08', '0000-00-00 00:00:00', 1, '', 0, '', 1, 'oKtXsJguTF3bE8YNlq', '0', '', 1, ''),
(2, '2021-04-05 09:44:29', '2021-05-05 09:44:29', '0000-00-00 00:00:00', 2, '', 0, '', 2, 'zFgqVLX8C8T0FNg9Dt', '0', '', 1, ''),
(19, '2021-04-08 07:17:21', '2021-05-08 07:17:21', '0000-00-00 00:00:00', 1, '', 0, '', 19, 'x0tvhMM8Kl6VQEKvj3', '0', '', 1, ''),
(20, '2021-05-08 07:17:21', '2021-07-08 07:17:21', '0000-00-00 00:00:00', 1, '', 0, '', 19, 'x0tvhMM8Kl6VQEKvj3', '0', '', 2, ''),
(21, '2021-04-09 07:00:35', '2021-05-09 07:00:35', '0000-00-00 00:00:00', 3, '', 0, '', 20, 'uoFA6moj3UwSGxW3g8', '0', '', 1, ''),
(22, '2021-04-09 07:04:10', '2021-05-09 07:04:10', '2021-04-09 07:22:13', 3, 'ord_2pZ5Fj9jxSdTVGCj9', 4444, 'Contrato: (xhvxoPVpO1WAEi77eH-22) Y Servicios varios del Proyecto (Preparación).', 21, 'xhvxoPVpO1WAEi77eH', '116', 'JOSÉ ANGEL RUIZ CHÁVEZ', 1, './temp/qr/xhvxoPVpO1WAEi77eH-22-32021-04-09-07-22-13codeQr.png'),
(23, '2021-05-09 07:04:10', '2022-04-09 07:04:10', '2021-04-09 07:15:33', 3, 'ord_2pZ5Ad7CAVuJobfjd', 5100, 'Contrato: (xhvxoPVpO1WAEi77eH-23) Y Servicios varios del Proyecto (Preparación).', 21, 'xhvxoPVpO1WAEi77eH', '1276', 'JOSÉ ANGEL RUIZ CHÁVEZ', 11, './temp/qr/xhvxoPVpO1WAEi77eH-23-32021-04-09-07-15-33codeQr.png'),
(24, '2021-04-09 08:22:31', '2021-05-09 08:22:31', '0000-00-00 00:00:00', 4, '', 0, '', 22, 'Y4zEr5erNB64Mw3Xi6', '0', '', 1, ''),
(25, '2021-04-09 08:24:16', '2021-05-09 08:24:16', '2021-04-09 08:44:17', 4, 'ord_2pZ6LQN5n6Z11Scsh', 8431, 'Contrato: (yJ5eyaTNYUDgxGnNA-25) Y Servicios varios del Proyecto (Preparación).', 23, 'yJ5eyaTNYUDgxGnNA', '9280', 'JOSÉ ANGEL RUIZ CHÁVEZ', 1, './temp/qr/yJ5eyaTNYUDgxGnNA-25-42021-04-09-08-44-17codeQr.png'),
(26, '2021-05-09 08:24:16', '2021-11-09 08:24:16', '0000-00-00 00:00:00', 4, '', 0, '', 23, 'yJ5eyaTNYUDgxGnNA', '0', '', 6, ''),
(27, '2021-11-09 08:24:16', '2021-12-09 08:24:16', '0000-00-00 00:00:00', 4, '', 0, '', 23, 'yJ5eyaTNYUDgxGnNA', '0', '', 1, ''),
(28, '2021-12-09 08:24:16', '2022-01-09 08:24:16', '0000-00-00 00:00:00', 4, '', 0, '', 23, 'yJ5eyaTNYUDgxGnNA', '0', '', 1, ''),
(29, '2022-01-09 08:24:16', '2022-02-09 08:24:16', '0000-00-00 00:00:00', 4, '', 0, '', 23, 'yJ5eyaTNYUDgxGnNA', '0', '', 1, ''),
(30, '2022-02-09 08:24:16', '2022-03-09 08:24:16', '0000-00-00 00:00:00', 4, '', 0, '', 23, 'yJ5eyaTNYUDgxGnNA', '0', '', 1, ''),
(31, '2022-03-09 08:24:16', '2022-04-09 08:24:16', '0000-00-00 00:00:00', 4, '', 0, '', 23, 'yJ5eyaTNYUDgxGnNA', '0', '', 1, '');

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
(1, 'Cotización: En proceso', 1, '2021-04-05 09:43:08', '2021-04-06 09:43:08', 1, '1'),
(2, 'Cotización: En proceso', 1, '2021-04-05 09:44:29', '2021-04-06 09:44:29', 2, '1'),
(3, 'Programación del encabezado del sitio.', 0, '2021-04-09 06:50:47', '2021-04-12 06:50:47', 1, '2'),
(4, 'Cotización: En proceso', 1, '2021-04-09 07:00:35', '2021-04-10 07:00:35', 3, '1'),
(5, 'Programación', 0, '2021-04-09 08:05:36', '2021-04-10 08:05:36', 1, '3'),
(6, 'Cotización: En proceso', 1, '2021-04-09 08:22:31', '2021-04-10 08:22:31', 4, '1'),
(7, 'Programación', 0, '2021-04-09 08:34:12', '2021-04-12 08:34:12', 4, '2'),
(8, 'Programación y control de decisiones ', 0, '2021-04-12 04:53:36', '2021-04-17 04:53:36', 4, '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precios`
--

CREATE TABLE `precios` (
  `id_precio` tinyint(11) NOT NULL,
  `basico_precio` int(5) NOT NULL,
  `tokencontrato_precio` varchar(52) NOT NULL,
  `idcontrato_precio` int(11) NOT NULL,
  `hosting_precio` int(5) NOT NULL,
  `dominio_precio` int(5) NOT NULL,
  `mantenimiento_precio` int(5) NOT NULL,
  `basesdatos_precio` int(5) NOT NULL,
  `programacion_precio` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `precios`
--

INSERT INTO `precios` (`id_precio`, `basico_precio`, `tokencontrato_precio`, `idcontrato_precio`, `hosting_precio`, `dominio_precio`, `mantenimiento_precio`, `basesdatos_precio`, `programacion_precio`) VALUES
(1, 4000, '6000', 10000, 1, 1, 300, 1000, 0),
(2, 4000, '6000', 10000, 1, 1, 300, 1000, 0),
(11, 13920, 'x0tvhMM8Kl6VQEKvj3', 19, 100, 100, 150, 800, 10850),
(12, 116, 'xhvxoPVpO1WAEi77eH', 21, 0, 0, 0, 0, 100),
(13, 9280, 'yJ5eyaTNYUDgxGnNA', 23, 100, 100, 150, 800, 6850);

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
(1, 'Preparación', 1, 'Sin paquete', '', '0', ''),
(2, 'Sin Proyecto', 2, 'Sin paquete', '', '0', ''),
(3, 'Preparación', 3, 'Sin paquete', '', '0', ''),
(4, 'https://3dImprent.com', 4, 'Sin paquete', '', '0', '');

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
  `tipo_usuario` varchar(10) NOT NULL,
  `idcontrato_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `apellidos_usuario`, `email_usuario`, `pass_usuario`, `telefono_usuario`, `foto_usuario`, `calle_usuario`, `numiedireccion_usuario`, `colonia_usuario`, `cp_usuario`, `paquetes_usuario`, `fecha_usuario`, `idproyecto_usuario`, `domiciliofiscal_usuario`, `cfdi_usuario`, `rfc_usuario`, `tipo_usuario`, `idcontrato_usuario`) VALUES
(1, 'José Angel', 'Chávez', 'angels._ruiz@hotmail.com', 'Gtuccb8o', '4521441689', '', 'San José de la Mina', '42', '', '', '', '2021-04-05', 1, '', '', '', '', 0),
(2, 'José Angel', 'Chávez', 'jose@hotmail.com', 'h', '4521441689', 'upload/JoséAngel-qlD09Apr2021070504119403493_3413678911988392_8248441450573387682_o.jpg', '', '', '', '', '', '2021-04-05', 0, '', '', '', 'admin', 0),
(3, 'Vianey', 'Ruiz', 'vi@hotmail.com', 'v', '4521441689', 'upload/Vianey-z4o09Apr2021071218abc.jpeg', 'San José de la Mina', '43', 'San José de la Mina', '60125', '', '2021-04-09', 3, 'San José de La Mina #42 Col. San José de la Mina', 'eqwe', '8754654854721', '', 0),
(4, 'José Angel', 'Chávez', 'angel._ruiz@hotmail.com', 'TBMGcTDk', '4521441689', 'upload/JoséAngel-ygQ09Apr2021084239WhatsAppImage2020-09-25at7.19.42AM.jpeg', 'San José de la Mina', '42', '', '60125', '', '2021-04-09', 4, '', '', '', '', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contratos`
--
ALTER TABLE `contratos`
  ADD PRIMARY KEY (`id_contrato`);

--
-- Indices de la tabla `mensajecliente`
--
ALTER TABLE `mensajecliente`
  ADD PRIMARY KEY (`id_mensaje`);

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
  MODIFY `id_contrato` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `mensajecliente`
--
ALTER TABLE `mensajecliente`
  MODIFY `id_mensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id_pago` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `pasos`
--
ALTER TABLE `pasos`
  MODIFY `id_paso` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `precios`
--
ALTER TABLE `precios`
  MODIFY `id_precio` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id_proyecto` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
