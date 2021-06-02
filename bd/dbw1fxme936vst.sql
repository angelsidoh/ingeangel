-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 02-06-2021 a las 22:04:34
-- Versión del servidor: 5.7.32-35-log
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(23, 4, 'https://ingeangel.com/contrato.php', 'yJ5eyaTNYUDgxGnNA', '12 Meses', 12, '2021-04-09 08:24:16', '2022-04-09 08:24:16', 4, 'includes/funciones/doc_sings/898251581c2a399378138b4860d64256.png', ''),
(24, 5, 'https://ingeangel.com/contrato.php', 'SkWITi34Q54C1e5DfB', '3 Meses', 3, '2021-04-12 06:37:49', '2021-04-12 06:37:51', 0, '', ''),
(25, 6, 'https://ingeangel.com/contrato.php', 'FbqZ1PE2rEb1JqLGN', '3 Meses', 3, '2021-04-12 06:39:17', '2021-04-12 06:39:19', 0, '', ''),
(26, 6, 'https://ingeangel.com/contrato.php', '9TMp37nmFVXjTMiqkA', '12 Meses', 12, '2021-04-15 07:40:22', '2022-04-15 07:40:22', 0, '', ''),
(27, 7, 'https://ingeangel.com/contrato.php', '0xoha9MMOVtKscYS9N', '3 Meses', 3, '2021-04-22 17:24:40', '2021-04-22 17:24:42', 0, '', ''),
(28, 8, 'https://ingeangel.com/contrato.php', 'eZXDkW084gcIW9G32', '3 Meses', 3, '2021-04-22 17:26:10', '2021-04-22 17:26:12', 0, '', ''),
(29, 9, 'https://ingeangel.com/contrato.php', 'rGp2wt595UAbmFXClt', '3 Meses', 3, '2021-04-22 17:30:49', '2021-04-22 17:30:51', 0, '', ''),
(30, 10, 'https://ingeangel.com/contrato.php', 'YEZdlvkcYY7DbcgPB2', '3 Meses', 3, '2021-04-22 17:33:28', '2021-04-22 17:33:30', 0, '', ''),
(31, 11, 'https://ingeangel.com/contrato.php', 'pZTeuKpvQc5quBIn', '3 Meses', 3, '2021-04-22 17:45:24', '2021-04-22 17:45:26', 0, '', ''),
(32, 11, 'https://ingeangel.com/contrato.php', '8nbbUuNpk2PwbD3y', '12 Meses', 12, '2021-04-22 18:48:05', '2022-04-22 18:48:05', 0, '', ''),
(33, 7, 'https://ingeangel.com/contrato.php', 'feDLQWto06W1Jhljl3', '1 Mes', 1, '2021-04-24 18:48:56', '2021-05-24 18:48:56', 0, '', ''),
(34, 12, 'https://ingeangel.com/contrato.php', '9N0VoGJUdzwa0Qcl46', '3 Meses', 3, '2021-05-25 11:47:56', '2021-05-25 11:47:58', 0, '', ''),
(35, 12, 'https://ingeangel.com/contrato.php', 'mPT3LFkCaAPKDJP0iO', '12 Meses', 12, '2021-05-25 11:50:32', '2022-05-25 11:50:32', 0, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajecliente`
--

CREATE TABLE `mensajecliente` (
  `id_mensaje` int(11) NOT NULL,
  `idusuario_mensaje` int(11) NOT NULL,
  `idmensaje_mensaje` int(11) NOT NULL,
  `mensaje_mensaje` varchar(1000) NOT NULL,
  `admin_mensaje` varchar(120) NOT NULL,
  `asunto_mensaje` varchar(50) NOT NULL,
  `fecha_mensaje` datetime NOT NULL,
  `idconversacion_mensaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mensajecliente`
--

INSERT INTO `mensajecliente` (`id_mensaje`, `idusuario_mensaje`, `idmensaje_mensaje`, `mensaje_mensaje`, `admin_mensaje`, `asunto_mensaje`, `fecha_mensaje`, `idconversacion_mensaje`) VALUES
(1, 1, 1, 'Lorem ipsum dolor sit amet consectetur adipiscing elit, nisi luctus platea lacus cursus duis, dui pharetra bibendum sociosqu fringilla nostra. Commodo viverra scelerisque placerat a himenaeos eu et morbi, lobortis cursus eget tempor etiam maecenas sociis, hac dictum magna non urna aliquam eros. Et varius at potenti gravida vitae ornare convallis feugiat vehicula suscipit, parturient laoreet dis platea curabitur dictumst eu cras sociis nascetur suspendisse, euismod cursus mollis imperdiet sociosq', '', '2', '0000-00-00 00:00:00', 0),
(2, 1, 1, 'u maecenas ante cum dictum.\n\nPenatibus etiam suspendisse fusce laoreet eros in aenean vitae, nec orci congue consequat himenaeos eget aptent, nullam venenatis semper ultrices torquent cras facilisis. Conubia diam nullam maecenas bibendum habitasse elementum class morbi sociosqu hac, congue ut netus senectus lobortis porttitor cubilia luctus fames erat, urna fusce hendrerit dictum non euismod nibh pretium tortor. Gravida nostra sociis vel tempus id velit odio neque ullamcorper, iaculis hac intege', '', '2', '0000-00-00 00:00:00', 0),
(3, 1, 1, 'r nunc ultricies praesent sodales sollicitudin eu, montes massa eget dictumst duis laoreet tristique cras.', '', '2', '0000-00-00 00:00:00', 0),
(4, 2, 4, 'admin', '', '4', '0000-00-00 00:00:00', 0),
(5, 3, 5, 'La vida espera por quienes realmente se arriesgan, esta es una forma de arriesgarse.', '', '5', '0000-00-00 00:00:00', 0),
(6, 4, 6, 'Why do we use it?\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web site', '', '6', '0000-00-00 00:00:00', 0),
(7, 4, 6, 's still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\n\n\nWhere does it come from?\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passa', '', '6', '0000-00-00 00:00:00', 0),
(8, 4, 6, 'ge, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &#34;de Finibus Bonorum et Malorum&#34; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &#34;Lorem ipsum dolor sit amet..&#34;, comes from a line in section 1.10.32.\n\nThe standard chunk of Lorem Ipsum used since', '', '6', '0000-00-00 00:00:00', 0),
(9, 4, 6, ' the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &#34;de Finibus Bonorum et Malorum&#34; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\n\nWhere can I get some?\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are', '', '6', '0000-00-00 00:00:00', 0),
(10, 4, 6, ' going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected', '', '6', '0000-00-00 00:00:00', 0),
(11, 4, 6, ' humour, or non-characteristic words etc.', '', '6', '0000-00-00 00:00:00', 0),
(12, 5, 12, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque est tellus, ultricies non nulla vel, ultrices dapibus quam. Etiam eu viverra odio, in feugiat nunc. Morbi est ligula, suscipit eu orci vitae, molestie eleifend enim. Etiam et tincidunt risus. Donec ornare molestie viverra. Nulla faucibus accumsan turpis, in fringilla eros venenatis eget. Ut ac nulla diam. Donec quis ligula massa. Sed pellentesque, eros eget porttitor ornare, neque sapien lobortis justo, vel pharetra sapien mi ', '', '12', '0000-00-00 00:00:00', 0),
(13, 5, 12, 'ut erat. Sed vitae orci odio. Phasellus porttitor maximus tincidunt. Pellentesque turpis nisl, rutrum sed quam non, congue posuere ex. Duis euismod lorem libero, commodo cursus libero gravida vitae.\r\n\r\nDonec vitae vehicula justo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec tempus orci at venenatis hendrerit. Aliquam varius justo luctus dapibus ultrices. Sed ligula magna, aliquet at auctor at, dignissim id augue. In sollicitudin neque quis dol', '', '12', '0000-00-00 00:00:00', 0),
(14, 5, 12, 'or sagittis, vitae commodo neque tincidunt. Maecenas eget aliquet ex. Nunc in accumsan erat. Quisque rhoncus justo diam, non aliquam purus vestibulum non. Aenean feugiat sodales mollis. Suspendisse rutrum, nisi ut malesuada dictum, purus leo placerat arcu, id venenatis felis justo sed massa. Integer a tincidunt est. Nulla sed tempus lacus. Nam eu dui nibh.\r\n\r\nMauris vel elit enim. Integer tempor euismod massa varius pretium. Mauris vel finibus nisl. Quisque pharetra diam a metus scelerisque soda', '', '12', '0000-00-00 00:00:00', 0),
(15, 5, 12, 'les. Nulla laoreet lorem vitae ligula sodales venenatis. Phasellus in venenatis justo. Vivamus eu lacus id nisi tempus dignissim. Phasellus auctor finibus sapien, non elementum lectus bibendum nec. Aenean faucibus turpis quis condimentum aliquet.\r\n\r\nInteger aliquam dui luctus velit gravida rutrum. Suspendisse quis mattis turpis. Nullam feugiat tortor sapien, id ullamcorper nisi egestas et. Nam in neque ullamcorper, suscipit felis porttitor, venenatis turpis. Vivamus massa odio, sodales ut risus ', '', '12', '0000-00-00 00:00:00', 0),
(16, 5, 12, 'consectetur, tempor tempor tellus. Sed fringilla orci a pellentesque pharetra. Phasellus eu justo non nibh varius sodales. Curabitur at tempus lorem. Cras vitae est eget metus posuere dictum quis rhoncus magna. Nam condimentum convallis condimentum. Donec vestibulum ultricies justo ac commodo.\r\n\r\nQuisque venenatis nisi quis convallis aliquam. Sed eget eros accumsan, congue justo ut, aliquam leo. Vestibulum pellentesque mi condimentum, gravida libero volutpat, volutpat nulla. In non tortor ut lig', '', '12', '0000-00-00 00:00:00', 0),
(17, 5, 12, 'ula ullamcorper eleifend. Curabitur gravida nulla nec elit consequat pharetra. Proin sed laoreet massa. Curabitur convallis odio leo, vel suscipit leo consequat eu. Cras a orci blandit justo vulputate vulputate in sit amet nisl. Nulla id ligula vehicula, convallis justo quis, hendrerit ante. Etiam mattis nisl sit amet massa fringilla pulvinar. Suspendisse faucibus vitae nibh sit amet ultricies. Phasellus lacinia orci sit amet dolor congue pharetra. Interdum et malesuada fames ac ante ipsum primi', '', '12', '0000-00-00 00:00:00', 0),
(18, 5, 12, 's in faucibus. Maecenas quis ex eu odio ullamcorper ornare.', '', '12', '0000-00-00 00:00:00', 0),
(19, 6, 19, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque est tellus, ultricies non nulla vel, ultrices dapibus quam. Etiam eu viverra odio, in feugiat nunc. Morbi est ligula, suscipit eu orci vitae, molestie eleifend enim. Etiam et tincidunt risus. Donec ornare molestie viverra. Nulla faucibus accumsan turpis, in fringilla eros venenatis eget. Ut ac nulla diam. Donec quis ligula massa. Sed pellentesque, eros eget porttitor ornare, neque sapien lobortis justo, vel pharetra sapien mi ', 'José Angel Ruiz Chávez. Cliente', '1', '2021-04-13 07:25:56', 0),
(20, 6, 19, 'ut erat. Sed vitae orci odio. Phasellus porttitor maximus tincidunt. Pellentesque turpis nisl, rutrum sed quam non, congue posuere ex. Duis euismod lorem libero, commodo cursus libero gravida vitae.\r\n\r\nDonec vitae vehicula justo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec tempus orci at venenatis hendrerit. Aliquam varius justo luctus dapibus ultrices. Sed ligula magna, aliquet at auctor at, dignissim id augue. In sollicitudin neque quis dol', 'José Angel Ruiz Chávez. Cliente', '1', '2021-04-13 07:26:00', 0),
(21, 6, 19, 'or sagittis, vitae commodo neque tincidunt. Maecenas eget aliquet ex. Nunc in accumsan erat. Quisque rhoncus justo diam, non aliquam purus vestibulum non. Aenean feugiat sodales mollis. Suspendisse rutrum, nisi ut malesuada dictum, purus leo placerat arcu, id venenatis felis justo sed massa. Integer a tincidunt est. Nulla sed tempus lacus. Nam eu dui nibh.\r\n\r\nMauris vel elit enim. Integer tempor euismod massa varius pretium. Mauris vel finibus nisl. Quisque pharetra diam a metus scelerisque soda', 'José Angel Ruiz Chávez.Cliente', '1', '2021-04-13 07:26:04', 0),
(22, 6, 19, 'les. Nulla laoreet lorem vitae ligula sodales venenatis. Phasellus in venenatis justo. Vivamus eu lacus id nisi tempus dignissim. Phasellus auctor finibus sapien, non elementum lectus bibendum nec. Aenean faucibus turpis quis condimentum aliquet.\r\n\r\nInteger aliquam dui luctus velit gravida rutrum. Suspendisse quis mattis turpis. Nullam feugiat tortor sapien, id ullamcorper nisi egestas et. Nam in neque ullamcorper, suscipit felis porttitor, venenatis turpis. Vivamus massa odio, sodales ut risus ', 'José Angel Ruiz Chávez. Cliente', '1', '2021-04-13 07:26:07', 0),
(23, 6, 19, '- tempor tempor tellus. Sed fringilla orci a pellentesque pharetra. Phasellus eu justo non nibh varius sodales. Curabitur at tempus lorem. Cras vitae est eget metus posuere dictum quis rhoncus magna. Nam condimentum convallis condimentum. Donec vestibulum ultricies justo ac commodo.\r\n\r\nQuisque venenatis nisi quis convallis aliquam. Sed eget eros accumsan, congue justo ut, aliquam leo. Vestibulum pellentesque mi condimentum, gravida libero volutpat, volutpat nulla. In non tortor ut lig-', 'José Angel Ruiz Chávez. Cliente', '1', '2021-04-13 07:26:10', 0),
(24, 6, 19, 'ula ullamcorper eleifend. Curabitur gravida nulla nec elit consequat pharetra. Proin sed laoreet massa. Curabitur convallis odio leo, vel suscipit leo consequat eu. Cras a orci blandit justo vulputate vulputate in sit amet nisl. Nulla id ligula vehicula, convallis justo quis, hendrerit ante. Etiam mattis nisl sit amet massa fringilla pulvinar. Suspendisse faucibus vitae nibh sit amet ultricies. Phasellus lacinia orci sit amet dolor congue pharetra. Interdum et malesuada fames ac ante ipsum primi', 'José Angel Ruiz Chávez. Cliente', '1', '2021-04-13 07:26:13', 0),
(25, 6, 20, 's in faucibus. Maecenas quis ex eu odio ullamcorper ornare.', 'José Angel Ruiz Chávez. Cliente', '1', '2021-04-22 07:26:17', 0),
(26, 6, 21, 'sto. Vivamus eu lacus id nisi tempus dignissim. Phasellus auctor finibus sapien, non elementum lectus bibendum nec. Aenean faucibus turpis quis condimentum aliquet. Integer aliquam dui luctus velit gravida rutrum. Suspendisse quis mattis turpis. Nullam feugiat tortor sapien, id ullamcorper nisi egestas et. Nam in neque ullamcorper, suscipit felis porttitor, venenatis turpis. Vivamus massa odio, sodales ut risus - tempor tempor tellus. Sed fringilla orci a pell', 'Jordan Caballero Piedra. Ingeniero en Mecatrónica', '1', '2021-04-13 07:17:24', 0),
(27, 6, 27, 'Lorem ipsum dolor sit amet consectetur adipiscing elit viverra cubilia imperdiet iaculis sapien, nostra sem molestie rutrum sed mattis augue feugiat vestibulum dignissim est. Himenaeos blandit dictumst habitant nam consequat aptent convallis quis, class magnis taciti vulputate orci mi sociosqu lacinia, litora bibendum cum primis torquent netus aenean. Turpis nunc accumsan habitasse feugiat placerat himenaeos ac scelerisque metus, praesent ad mollis non suspendisse libero posuere velit fusce iacu', '', '27', '0000-00-00 00:00:00', 0),
(28, 6, 28, 'lis, nostra aliquam pellentesque nascetur lacinia sodales etiam commodo. Magna torquent facilisis nulla tincidunt aliquet consequat orci eu mollis velit, integer fusce sem ridiculus sociis mus enim nostra.\r\n\r\nPotenti malesuada himenaeos sociis natoque, etiam metus venenatis mauris aptent, eleifend quam eu. Ridiculus montes euismod nam libero sagittis dapibus pretium sociis in nascetur mollis, rhoncus metus scelerisque dui duis praesent sapien suspendisse pellentesque. Euismod penatibus felis bla', '', '27', '0000-00-00 00:00:00', 0),
(29, 6, 27, 'ndit eget convallis vulputate non ut hac mus, vivamus integer curabitur congue sem eros ullamcorper vel feugiat fames sociosqu, dictum eleifend rhoncus iaculis himenaeos fermentum massa bibendum tristique. Sollicitudin donec nulla porta porttitor quam tortor at potenti hendrerit in aliquet curae posuere, bibendum elementum luctus suscipit egestas semper convallis proin ligula aptent dictum.\r\n\r\nDonec cras inceptos montes cubilia pellentesque dui egestas at curabitur nisi congue, tellus dignissim ', '', '27', '0000-00-00 00:00:00', 0),
(30, 6, 27, 'nam faucibus tristique elementum habitant ultricies massa turpis, sagittis ante lobortis porta himenaeos orci vestibulum diam etiam pharetra. Varius massa at in sagittis lacus vehicula quisque, odio nibh ante aliquam luctus netus primis fringilla, senectus duis feugiat vivamus etiam orci. Pharetra felis eros vel blandit ullamcorper vitae, in imperdiet cursus venenatis accumsan augue diam, sociis hendrerit mus suspendisse tortor. Fringilla fames sem dictum blandit ullamcorper ut nunc aliquet id, ', '', '27', '0000-00-00 00:00:00', 0),
(31, 6, 27, 'nostra mollis porta eleifend vitae ornare diam potenti congue, nisl nullam tortor laoreet neque velit curae gravida.\r\n\r\nLigula purus feugiat magnis ad at et, lacinia habitasse turpis aptent mi fusce, augue iaculis neque ac platea. Accumsan est hendrerit molestie dui vivamus varius praesent, augue porta cum senectus suscipit risus magnis nostra, lobortis tempor mattis parturient tempus lectus. Dignissim bibendum platea non turpis pharetra consequat enim velit, sagittis class suspendisse metus mau', '', '27', '0000-00-00 00:00:00', 0),
(32, 6, 27, 'ris nisl gravida, eros pretium lectus potenti purus cras natoque.\r\n\r\nEleifend commodo libero volutpat sem fames mauris litora etiam, augue eros ante congue semper ac. Quis sagittis natoque congue posuere in cras pretium magnis conubia hendrerit, risus varius rhoncus laoreet metus velit senectus facilisis cursus, porttitor condimentum rutrum dapibus consequat nunc vehicula malesuada curabitur. Congue egestas vehicula potenti semper in massa maecenas lacus mollis lacinia, metus rhoncus libero ut s', '', '27', '0000-00-00 00:00:00', 0),
(33, 6, 27, 'odales mus nunc arcu ultrices dignissim, himenaeos sollicitudin neque habitant nascetur id morbi eget diam. Nascetur curabitur dignissim sociis placerat nam risus consequat praesent, integer morbi leo pulvinar cursus ultricies ac at, porttitor blandit proin vivamus mauris orci nullam.\r\n\r\nNulla dapibus mattis vestibulum ac vitae, sed phasellus augue viverra, ad torquent non natoque. Nibh velit lacinia vivamus natoque risus faucibus at leo tortor rhoncus sed tempus, lobortis fusce mus mi facilisis', '', '27', '0000-00-00 00:00:00', 0),
(34, 6, 27, ' primis molestie viverra parturient magna. Ante lobortis odio consequat non penatibus dignissim aenean auctor tincidunt blandit, tempor proin et volutpat senectus etiam porta vitae. Dui semper lacinia cursus consequat inceptos sociosqu euismod interdum, tristique venenatis fringilla cubilia tincidunt scelerisque vitae a etiam, dictumst felis nulla nisi sem nec taciti.\r\n\r\nPharetra nullam litora sapien sem iaculis dui, justo vel a condimentum tortor, fringilla id tempus quisque pretium. Ullamcorpe', '', '27', '0000-00-00 00:00:00', 0),
(35, 6, 27, 'r neque primis nisl class hac velit, quisque nostra laoreet hendrerit volutpat. Lacus risus himenaeos quis augue curae dui velit netus eu ornare, rutrum natoque aenean conubia viverra sed condimentum posuere cursus, tristique scelerisque dis aliquet feugiat volutpat magna nostra consequat. Mauris etiam sagittis sodales condimentum suspendisse taciti, magna iaculis massa quam elementum, enim habitasse quis nostra donec.\r\n\r\nTincidunt donec dictum volutpat tristique a aliquet diam condimentum ridic', '', '27', '0000-00-00 00:00:00', 0),
(36, 6, 27, 'ulus morbi magnis vivamus dapibus, bibendum auctor taciti nullam quis risus hac lobortis faucibus blandit himenaeos praesent. Penatibus placerat nulla aliquet fermentum venenatis justo dignissim cursus scelerisque, volutpat imperdiet augue lacinia euismod felis arcu sociis, ligula sapien mattis nunc lobortis ultricies bibendum class. Luctus senectus laoreet inceptos sapien congue himenaeos nullam nostra, turpis diam volutpat conubia curae primis tellus, dis potenti massa urna lacinia ultricies e', '', '27', '0000-00-00 00:00:00', 0),
(37, 6, 27, 'rat.\r\n\r\nQuisque netus interdum enim facilisi ad inceptos fringilla, libero curae lacus condimentum taciti suscipit, pulvinar mi tortor sodales neque potenti. Porta nascetur cum pharetra nunc id habitant nulla vivamus ultricies, nibh semper lectus penatibus et bibendum curabitur magnis gravida primis, porttitor ut cras himenaeos donec vestibulum velit urna. Imperdiet lobortis nisi sapien velit id vulputate ligula mus, libero lacus diam laoreet consequat quisque donec, ac montes semper maecenas od', '', '27', '0000-00-00 00:00:00', 0),
(38, 6, 27, 'io dignissim nisl.\r\n\r\nFelis aptent volutpat hendrerit mollis sollicitudin lobortis cum velit erat luctus gravida facilisis feugiat id, mattis habitasse dapibus odio tincidunt cras tellus molestie eleifend rhoncus hac montes. Hac proin in ac turpis sollicitudin auctor aenean erat, cum mauris vitae nam dictumst id felis sodales blandit, metus placerat enim duis sapien magna natoque. Donec natoque dis porta dictum fermentum netus, varius lectus proin viverra volutpat, porttitor condimentum tortor c', '', '27', '0000-00-00 00:00:00', 0),
(39, 6, 27, 'ubilia sem. Aliquet posuere iaculis cum integer cubilia nisi mollis platea, dignissim natoque justo vivamus sodales condimentum quam ligula, eros libero quisque euismod arcu nulla parturient.\r\n\r\nMassa tempus iaculis volutpat a nunc magnis mollis, urna conubia aliquet pellentesque mattis magna ridiculus, netus cras suscipit mauris dapibus proin. Lobortis risus semper potenti urna aliquet, aliquam ridiculus dis pellentesque vehicula gravida, ad turpis accumsan sociosqu. Imperdiet hendrerit nibh od', '', '27', '0000-00-00 00:00:00', 0),
(40, 6, 27, 'io tortor nostra tincidunt quis sollicitudin augue quam turpis curabitur urna, mauris arcu habitant mi libero ultricies ullamcorper fusce fringilla non dapibus rhoncus.\r\n\r\nEleifend habitasse class turpis sem tortor dictumst vestibulum ultrices sociosqu, ornare habitant convallis eu orci ut elementum potenti, arcu cum condimentum blandit euismod aptent cursus accumsan. At eu enim vehicula feugiat quam luctus augue, mauris dictumst vivamus litora sapien praesent convallis, aliquet ullamcorper vest', '', '27', '0000-00-00 00:00:00', 0),
(41, 6, 27, 'ibulum suspendisse odio torquent. Vulputate donec imperdiet justo viverra habitant libero diam bibendum elementum primis, at sociosqu et nisi id per dictum vestibulum sed aptent, mattis odio conubia venenatis lacus metus cubilia dui senectus.\r\n\r\nMus condimentum ut maecenas eget convallis placerat pellentesque ligula potenti sollicitudin aliquet ornare hendrerit duis arcu, dictumst tortor erat magnis curae litora rutrum phasellus turpis habitant fames vitae tellus. Purus libero risus placerat bib', '', '27', '0000-00-00 00:00:00', 0),
(42, 6, 27, 'endum mi mus morbi ligula, eget suscipit eros dui vitae velit mattis sed, hac curabitur rhoncus parturient commodo interdum duis. Eleifend orci semper laoreet nostra magnis lacinia praesent dui vulputate, curae nunc pretium convallis himenaeos sem sagittis quam, quis facilisis natoque pellentesque mus neque cursus molestie. Augue sapien vehicula ut conubia eros cubilia vitae penatibus, metus gravida semper duis varius diam sociis sodales ad, sem etiam tristique euismod praesent pretium nulla.\r\n\r', '', '27', '0000-00-00 00:00:00', 0),
(43, 6, 27, '\nTristique lectus fames faucibus varius rhoncus natoque, mi fusce erat potenti cubilia placerat lobortis, felis mauris ut vulputate eleifend. Class egestas metus magna tincidunt scelerisque ullamcorper suspendisse vehicula, duis natoque mus molestie torquent habitasse rhoncus phasellus gravida, neque orci tortor eleifend in augue taciti. Eget sem duis quisque ante metus faucibus primis massa iaculis consequat aenean, ligula condimentum nec cum a sagittis velit eu dignissim nam hac curae, etiam e', '', '27', '0000-00-00 00:00:00', 0),
(44, 6, 27, 'rat commodo scelerisque volutpat facilisis bibendum dictumst varius phasellus.\r\n\r\nA augue vivamus ad tempor lacinia, montes penatibus etiam erat. Elementum curabitur suspendisse risus ornare tincidunt hendrerit volutpat himenaeos magna duis penatibus, pretium litora facilisi pellentesque habitasse platea ligula blandit malesuada pulvinar. Hendrerit auctor non integer congue morbi enim, egestas potenti vivamus nisl curae cum, tincidunt semper euismod imperdiet dis.\r\n\r\nDictumst consequat proin dic', '', '27', '0000-00-00 00:00:00', 0),
(45, 6, 27, 'tum imperdiet diam laoreet orci, arcu condimentum montes vivamus suscipit fusce taciti, accumsan tincidunt leo a nascetur sapien. Massa aptent id est rutrum sed scelerisque orci dui, a fermentum lectus montes ultrices velit posuere. Venenatis nullam fringilla sollicitudin ullamcorper tellus enim turpis lacinia torquent nisl, montes dignissim duis nec sodales eu blandit ornare nostra, mauris cursus velit accumsan augue maecenas netus cubilia quis.\r\n\r\nDuis scelerisque cursus orci sapien magnis est', '', '27', '0000-00-00 00:00:00', 0),
(46, 6, 27, ' odio dictumst vel nam, torquent dui pellentesque lacinia fusce venenatis libero bibendum primis et, ornare leo conubia blandit metus litora penatibus arcu praesent. Eros consequat condimentum placerat blandit tincidunt netus tempor, ultrices quis fringilla auctor facilisi taciti faucibus cursus, nibh mus diam at urna egestas. Volutpat orci ad ullamcorper mattis hendrerit ultricies neque, suscipit blandit tempus quam vehicula metus, parturient rhoncus quis himenaeos odio interdum. Mus rutrum fer', '', '27', '0000-00-00 00:00:00', 0),
(47, 6, 27, 'mentum faucibus nec non lacinia primis fusce, aliquet ad diam libero quisque integer etiam gravida tortor, eleifend nunc conubia sodales quis dis venenatis.\r\n\r\nPrimis sed rutrum dictum venenatis ligula dui integer etiam nec taciti, nam feugiat donec inceptos facilisis mus bibendum pharetra libero, orci habitasse potenti tempus pulvinar fames consequat felis viverra. At eu parturient arcu suspendisse primis est quisque risus, mi iaculis nascetur sociosqu quam rutrum sociis praesent, per elementum', '', '27', '0000-00-00 00:00:00', 0),
(48, 6, 27, ' consequat taciti congue gravida enim. Laoreet dapibus morbi consequat interdum at gravida dui metus rhoncus commodo hac cursus sodales quis nullam inceptos, vel curabitur justo phasellus fusce ac nascetur convallis suscipit ante lectus facilisi vitae condimentum. Viverra sociis duis erat condimentum orci neque, praesent dui dis sem habitant nunc, porta fames ultrices magna ad.\r\n\r\nAugue faucibus blandit per torquent netus facilisi ullamcorper phasellus, bibendum lacus penatibus orci aliquam temp', '', '27', '0000-00-00 00:00:00', 0),
(49, 6, 27, 'us parturient nec, elementum eget porttitor a donec magnis potenti. At cursus placerat magna penatibus lectus urna inceptos morbi, interdum senectus hendrerit lobortis sociosqu eros cras, vitae quis consequat velit duis sapien rhoncus. Fusce vivamus faucibus mauris eros lacinia pretium augue massa feugiat pulvinar blandit vehicula inceptos, convallis urna duis cum torquent nullam tincidunt libero nisl rhoncus auctor pharetra, nunc dui parturient habitasse mattis per cubilia sed facilisi aliquet ', '', '27', '0000-00-00 00:00:00', 0),
(50, 6, 27, 'orci curae. Bibendum augue senectus erat suspendisse potenti vehicula tincidunt magna, scelerisque habitasse accumsan sollicitudin curabitur commodo rutrum integer, vestibulum proin ultricies varius hac interdum duis.\r\n\r\nSociis molestie pretium habitant nascetur id curabitur per eget facilisi aliquam, senectus lacus vehicula sapien mi nec mauris primis gravida torquent, ultricies nostra magna nam leo pulvinar quam non tortor. Venenatis imperdiet interdum conubia commodo dui tortor dictumst, vel ', '', '27', '0000-00-00 00:00:00', 0),
(51, 6, 27, 'parturient mollis neque maecenas fermentum, sollicitudin molestie accumsan dis dignissim turpis. Tellus ante nibh quam fermentum feugiat turpis placerat elementum vehicula consequat condimentum, curae porttitor sapien conubia taciti potenti arcu platea senectus. Auctor tincidunt est eleifend non vitae faucibus class nisi ac, gravida proin quam suscipit nibh vivamus magnis risus et in, cubilia fusce viverra tristique pellentesque vel luctus primis.\r\n\r\nClass ligula vulputate vel auctor blandit dui', '', '27', '0000-00-00 00:00:00', 0),
(52, 6, 27, 's, posuere sociosqu bibendum leo libero lobortis nisi, velit justo enim facilisi habitant. Montes pretium leo mauris faucibus mus aptent convallis, pellentesque natoque himenaeos iaculis ultrices risus est dignissim, et nibh ornare curae eget aliquet. Ligula vestibulum convallis malesuada blandit phasellus sociis ornare lobortis, ultricies dui vivamus habitant ridiculus eros felis faucibus, maecenas class vulputate in rutrum pellentesque nec. Purus iaculis eros odio viverra morbi enim ridiculus ', '', '27', '0000-00-00 00:00:00', 0),
(53, 6, 27, 'arcu eget cum, inceptos bibendum sollicitudin blandit eleifend penatibus vestibulum est euismod a massa, pharetra lectus suscipit porttitor curabitur luctus erat taciti laoreet.\r\n\r\nEst magna mollis tempor dapibus torquent nibh sociosqu montes sagittis nisl, ut rhoncus phasellus orci fermentum aenean suspendisse cras. Mus torquent natoque tellus mauris libero cras ornare potenti est himenaeos, tincidunt phasellus molestie vel dictumst eu ultrices aliquet donec pharetra, id tempus venenatis habita', '', '27', '0000-00-00 00:00:00', 0),
(54, 6, 27, 'nt ante rhoncus facilisis lacinia turpis. Porta augue maecenas integer lacinia accumsan semper venenatis, sagittis risus vitae porttitor eget vehicula sem, egestas faucibus curae ad cursus diam.\r\n\r\nVarius ligula odio curabitur iaculis sed pretium tortor imperdiet malesuada aliquam placerat pulvinar hac rhoncus nisl purus, morbi nam libero vestibulum tempor nibh senectus nunc facilisis tempus litora in vel faucibus cursus. Diam tristique augue potenti odio nam leo orci, mauris massa ornare sociis', '', '27', '0000-00-00 00:00:00', 0),
(55, 6, 27, ' natoque vel, justo morbi neque nibh risus ante. Id potenti magnis dapibus enim condimentum pretium suspendisse velit fames praesent, libero integer habitasse blandit etiam class hendrerit rutrum gravida eleifend, curae hac nibh phasellus dis fusce habitant litora tristique. Nisl leo dignissim nostra est posuere orci suscipit sollicitudin turpis, laoreet nascetur facilisi pretium nullam class pulvinar eleifend, venenatis luctus libero potenti porttitor magnis sociis id.\r\n\r\nNetus nulla fringilla ', '', '27', '0000-00-00 00:00:00', 0),
(56, 6, 27, 'at cras fermentum diam pellentesque velit, gravida sociis auctor egestas phasellus dapibus fusce habitant, vitae sodales ligula feugiat conubia duis dignissim. Senectus facilisi augue praesent scelerisque natoque ac ut nullam, eleifend vestibulum pellentesque sapien morbi neque eu, metus cum ornare hac inceptos pretium nascetur. Facilisis molestie faucibus augue quis lacinia auctor vulputate laoreet eu, proin nec justo montes hac rutrum netus turpis euismod, egestas interdum volutpat orci arcu n', '', '27', '0000-00-00 00:00:00', 0),
(57, 6, 27, 'unc blandit nostra. Bibendum accumsan praesent mauris ultrices maecenas feugiat potenti augue massa, aptent torquent dapibus tempus malesuada vehicula consequat vulputate eleifend duis, eu arcu vitae placerat fusce himenaeos porta nunc.\r\n\r\nMetus etiam at ultrices turpis nostra porta fringilla donec aliquam pharetra blandit convallis sagittis, suspendisse non taciti ridiculus mauris a sollicitudin quisque nascetur magna ut varius. Accumsan vehicula pretium non curae maecenas tristique, potenti ae', '', '27', '0000-00-00 00:00:00', 0),
(58, 6, 27, 'nean magna vivamus suspendisse donec massa, rhoncus quisque fermentum dictum tempus. Libero natoque vestibulum vivamus luctus per duis tellus aliquet habitant, id nibh cubilia dictumst curae accumsan ornare etiam neque, potenti sociosqu semper felis parturient magna porta ad.\r\n\r\nSenectus dis fames lacus vivamus taciti augue purus urna porta, sodales ad facilisis aliquet vehicula tincidunt posuere velit, dui nulla etiam sed fringilla metus diam fusce. Odio dictumst ultricies purus gravida nulla v', '', '27', '0000-00-00 00:00:00', 0),
(59, 6, 27, 'ivamus vehicula laoreet condimentum massa, augue risus eros sociosqu netus metus fusce aenean inceptos. Congue cum habitasse egestas montes pharetra nascetur cubilia, suspendisse risus senectus nostra est laoreet proin urna, suscipit at conubia donec eget dictumst. Nostra sagittis dis fames nascetur est torquent proin curae tempus nisl sed class mus tincidunt viverra magna, ligula cursus massa feugiat euismod varius non dignissim neque lobortis nunc nam donec per ullamcorper.\r\n\r\nLobortis habitas', '', '27', '0000-00-00 00:00:00', 0),
(60, 6, 27, 'se auctor dignissim nibh vestibulum odio sollicitudin vivamus, lacinia quam aptent porta conubia vulputate etiam quisque, primis sociis non ut torquent in rhoncus. Iaculis egestas phasellus tristique vulputate metus rhoncus etiam dignissim, non pulvinar lacinia leo in velit hendrerit massa netus, tempus suspendisse nam class euismod bibendum turpis. Euismod convallis nisl nullam justo vulputate orci aliquet, dictumst sagittis platea velit interdum dictum commodo, nascetur sed bibendum ornare sus', '', '27', '0000-00-00 00:00:00', 0),
(61, 6, 27, 'cipit mollis.\r\n\r\nVestibulum curabitur himenaeos morbi fringilla curae elementum mus porta blandit pretium habitasse rhoncus, non per ultrices ligula commodo congue sapien class odio convallis venenatis, euismod imperdiet pellentesque dictum lectus donec vulputate habitant gravida tempor nisl. A aliquet quam imperdiet luctus lectus laoreet ad bibendum, conubia justo fames dignissim sociis faucibus nec primis, ultrices est quis metus sodales morbi sollicitudin. Cursus dapibus pellentesque himenaeo', '', '27', '0000-00-00 00:00:00', 0),
(62, 6, 27, 's potenti ridiculus mattis, diam suspendisse ultrices facilisi porta, habitant per nascetur velit tristique. Nascetur metus torquent dignissim feugiat hac convallis dictum risus netus quam, nisl class imperdiet sapien venenatis malesuada ante congue ad, justo volutpat dui mauris scelerisque id suspendisse erat curabitur.', '', '27', '0000-00-00 00:00:00', 0),
(63, 6, 63, 'Lorem ipsum dolor sit amet consectetur adipiscing elit porttitor, a dignissim et non sem tincidunt nec cras, vel imperdiet nunc dis interdum tristique eleifend. Magna eleifend nunc facilisi ullamcorper per netus gravida ultrices cubilia taciti, convallis nisi montes luctus nullam platea aenean sed arcu cras pharetra, phasellus ante mollis nibh donec orci tristique curabitur nam. Maecenas ante erat vel fringilla pretium facilisis risus sem nec mollis, quis pharetra diam ligula in eget mus eleifen', 'Usuario', 'abc', '2021-04-13 15:33:04', 0),
(64, 6, 63, 'd vestibulum iaculis cursus, conubia himenaeos vitae pulvinar senectus leo nisi pellentesque duis.\r\n\r\nNullam faucibus urna sapien nisl ligula erat porttitor quis suscipit a tincidunt, sociosqu dictum varius posuere vivamus magna vulputate at cum eu, fringilla diam pellentesque massa tempor ad mi maecenas sagittis magnis. Dictum metus posuere nam semper potenti porta suspendisse ornare diam risus neque convallis odio velit, gravida primis hac nascetur cras sem pharetra praesent euismod in etiam a', 'Usuario', 'abc', '2021-04-13 15:33:04', 0),
(65, 6, 63, 'ccumsan cubilia.', 'Usuario', 'abc', '2021-04-13 15:33:04', 0),
(66, 6, 66, '[object HTMLDivElement]', 'Usuario', 'abc', '2021-04-13 15:43:32', 0),
(67, 6, 67, '[object HTMLDivElement]', 'Usuario', 'acb', '2021-04-13 15:44:59', 0),
(68, 6, 68, '[object HTMLDivElement]', 'Usuario', 'AVC', '2021-04-13 15:46:10', 0),
(69, 6, 69, '[object HTMLDivElement]', 'Usuario', 'AVC', '2021-04-13 15:47:19', 0),
(70, 6, 70, 'asdv', 'Usuario', 'aaaaac', '2021-04-13 15:47:50', 0),
(71, 6, 71, 'Lorem ipsum dolor sit amet consectetur adipiscing elit mus conubia eleifend ad, dis egestas fringilla inceptos sollicitudin scelerisque tellus nam sociosqu vel lobortis quisque, vulputate dictumst consequat lectus purus mollis condimentum massa felis porttitor. Felis accumsan vivamus mauris enim nostra turpis semper primis est, interdum ut inceptos massa rhoncus facilisi venenatis at, magnis magna porttitor dui curabitur non tempus et. Auctor lobortis tempus pulvinar rhoncus convallis tempor hab', 'José Ruiz Usuario', 'Soy la verga', '2021-04-13 15:48:45', 0),
(72, 6, 71, 'itant felis dui taciti phasellus, vel montes curae conubia facilisi vulputate vestibulum luctus mus. Ultricies blandit platea interdum potenti ad placerat metus magnis orci, nascetur turpis erat imperdiet porttitor consequat dis aenean enim non, nullam maecenas pharetra curae praesent ac fames dictumst.\r\n\r\nSed molestie arcu dignissim nisi ornare vivamus nisl integer quisque condimentum mus augue eget, facilisi vitae conubia gravida congue tortor est venenatis eu facilisis inceptos. Porttitor qui', 'José Ruiz Usuario', 'Soy la verga', '2021-04-13 15:48:45', 0),
(73, 6, 71, 'sque quis elementum pulvinar fames consequat posuere augue, ultrices potenti vehicula et nibh ligula netus, rhoncus lacus rutrum pretium diam mollis venenatis. Sem sagittis vivamus integer lobortis sed aliquet interdum, litora risus dictum ridiculus lacus tellus malesuada, class cubilia montes nullam tempor et.', 'José Ruiz Usuario', 'Soy la verga', '2021-04-13 15:48:45', 0),
(74, 6, 74, 'Lorem ipsum dolor sit amet consectetur adipiscing elit velit donec, nascetur torquent eget erat lacinia ridiculus rutrum. Velit non pretium habitant auctor bibendum ultrices facilisi montes aenean iaculis, dictum turpis torquent quis sagittis est vulputate ullamcorper odio aliquet phasellus, nostra fames commodo vehicula scelerisque venenatis malesuada pharetra condimentum. Eu orci netus sodales porttitor sapien fusce lacus lectus rutrum, justo diam laoreet morbi blandit inceptos sed. Justo vene', 'José Angel Ruiz Chávez. Ingeniero', 'Soy la verga', '2021-04-13 15:56:39', 0),
(75, 6, 74, 'natis libero neque nullam cursus hendrerit torquent, vulputate at lobortis cum velit sodales, vel ornare felis accumsan interdum quam.\n\nPraesent potenti euismod nulla facilisis mi proin dis dignissim senectus quisque, vestibulum parturient tortor elementum aptent tristique dapibus magna mattis, accumsan pulvinar vitae fermentum ridiculus primis netus diam eleifend. Auctor magna neque conubia hendrerit in fringilla blandit ridiculus, augue tincidunt elementum duis dictum pulvinar posuere ultricie', 'José Angel Ruiz Chávez. Ingeniero', 'Soy la verga', '2021-04-13 15:56:39', 0),
(76, 6, 74, 's, bibendum vulputate mus lacinia a montes volutpat. Eros vehicula ridiculus dis vestibulum odio cubilia phasellus, magna sollicitudin sodales malesuada venenatis potenti, penatibus at nostra tincidunt quis eget. Fames mi tortor nibh scelerisque vulputate ut luctus, vestibulum auctor hendrerit at sapien bibendum facilisis ultricies, hac curabitur nunc phasellus sociosqu nec.', 'José Angel Ruiz Chávez. Ingeniero', 'Soy la verga', '2021-04-13 15:56:39', 0),
(77, 6, 77, 'como podría amarte demaciado', 'José Ruiz. Usuario', '1', '2021-04-14 10:28:51', 0),
(78, 6, 78, 'claro que va a funcionar lo nuestro', 'José Ruiz. Usuario', 'Soy la verga', '2021-04-14 10:30:06', 0),
(79, 6, 79, 'seee', 'José Ruiz. Usuario', '1', '2021-04-14 11:03:14', 0),
(80, 6, 80, 'esto es genial', 'José Ruiz. Usuario', '1', '2021-04-14 11:04:54', 0),
(81, 6, 81, '1', 'José Ruiz. Usuario', '1', '2021-04-14 11:06:19', 0),
(82, 6, 82, '2', 'José Ruiz. Usuario', '1', '2021-04-14 11:07:13', 0),
(83, 6, 83, '3', 'José Ruiz. Usuario', '1', '2021-04-14 11:09:38', 0),
(84, 6, 84, '4', 'José Ruiz. Usuario', '1', '2021-04-14 11:09:38', 0),
(85, 6, 85, '5', 'José Ruiz. Usuario', '1', '2021-04-14 11:09:38', 0),
(86, 6, 86, '', 'José Ruiz. Usuario', '1', '2021-04-14 11:11:27', 0),
(87, 6, 87, '', 'José Ruiz. Usuario', '1', '2021-04-14 11:11:27', 0),
(88, 6, 88, '', 'José Ruiz. Usuario', '1', '2021-04-14 11:11:28', 0),
(89, 6, 89, '', 'José Ruiz. Usuario', '1', '2021-04-14 11:12:50', 0),
(90, 6, 90, '', 'José Ruiz. Usuario', '1', '2021-04-14 11:14:17', 0),
(91, 6, 91, '', 'José Ruiz. Usuario', '1', '2021-04-14 11:15:33', 0),
(92, 6, 92, '', 'José Ruiz. Usuario', '1', '2021-04-14 11:15:33', 0),
(93, 6, 93, '', 'José Ruiz. Usuario', '1', '2021-04-14 11:15:33', 0),
(94, 6, 94, '', 'José Ruiz. Usuario', '1', '2021-04-14 11:23:31', 0),
(95, 6, 95, 'hola como te va', 'José Ruiz. Usuario', 'Soy la verga', '2021-04-14 11:35:11', 0),
(96, 6, 96, 'esta vez te respondo por este medio', 'José Ruiz. Usuario', '1', '2021-04-14 11:35:55', 0),
(97, 6, 97, 'Hola como te va quiero saber sobre el proyecto.', 'José Ruiz. Usuario', 'Este asunto es nuevo', '2021-04-14 11:36:45', 0),
(98, 6, 98, 'Desde luego que si, contamos con varias oportunidades de proyectos ;D', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 05:07:07', 0),
(99, 6, 99, 'El proyecto actualmente se encuentra destinado a los proceso de fabricación textil.', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 06:11:25', 0),
(100, 6, 100, 'Y las otras a la venta de sus productos', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 06:11:59', 0),
(101, 6, 101, 'Además queremos implementar otra vez que sea para publicidad.', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 06:13:39', 0),
(102, 6, 102, 'La versatilidad de las paginas en conjunto lograran atraer al máximo número de clientes a su negocio.', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 06:23:13', 0),
(103, 6, 103, 'Y usted estará sumamente contento del resultado.', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 06:25:32', 0),
(104, 6, 104, 'Tanto que estoy buscando las mejores variables para incluirlas en sus proyectos.', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 06:27:00', 0),
(105, 6, 105, 'Garantizándole los resultados por los próximos 5 años.', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 06:31:49', 0),
(106, 6, 106, '¿Que le parece lo anterior?', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 06:33:56', 0),
(107, 6, 107, 'Cualquier tipo de duda, estaré contento de responderla.', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 06:35:55', 0),
(108, 6, 108, 'a', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 06:40:28', 0),
(109, 6, 109, 'b', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 06:41:05', 0),
(110, 6, 110, 'c', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 06:41:40', 0),
(111, 6, 111, 'd', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 06:43:05', 0),
(112, 6, 112, 'f', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 06:44:56', 0),
(113, 6, 113, 'se me olvido la e', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 06:51:01', 0),
(114, 6, 114, 'esa tontería puede ser genial.', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 06:51:47', 0),
(115, 6, 115, 'g', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 06:52:37', 0),
(116, 6, 116, 'h', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 06:54:55', 0),
(117, 6, 117, 'i', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 06:55:26', 0),
(118, 6, 118, 'j', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 06:56:03', 0),
(119, 6, 119, 'k', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 06:57:05', 0),
(120, 6, 120, 'l', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 06:59:13', 0),
(121, 6, 121, 'm', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 07:00:41', 0),
(122, 6, 122, 'n', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 07:02:40', 0),
(123, 6, 123, 'o', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 07:03:31', 0),
(124, 6, 124, 'p', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 07:04:21', 0),
(125, 6, 125, 'q', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 07:07:07', 0),
(126, 6, 126, 'r', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 07:09:48', 0),
(127, 6, 127, 's', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 07:10:41', 0),
(128, 6, 128, 't', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 07:16:52', 0),
(129, 6, 129, 'u', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 07:17:25', 0),
(130, 6, 130, 'v', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 07:18:44', 0),
(131, 6, 131, 'asd', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 07:29:53', 0),
(132, 6, 132, 'adds', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 07:30:58', 0),
(133, 6, 133, 'asd', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 07:34:15', 0),
(134, 6, 134, 'la realidad', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 07:36:12', 0),
(135, 6, 135, 'puede ser triste xD', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 07:39:21', 0),
(136, 6, 136, 'hola el proyecto sigue en pie.\r\nPuedo brindarte un descuento de 0 ;D', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 07:45:04', 0),
(137, 6, 137, 'hOLA mi correo esta muy bien', 'José Angel Ruiz Chávez. Ingeniero', 'Este asunto es nuevo', '2021-04-15 08:10:33', 0),
(138, 6, 138, 'no puede ser que funcione también ya casi esta lista mi página :D', 'José Angel Ruiz Chávez. Ingeniero', 'Soy la verga', '2021-04-15 08:12:52', 0),
(139, 6, 139, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec lacinia arcu. Nam vitae consequat nisl. Quisque finibus odio at viverra cursus. Quisque iaculis orci non turpis gravida congue. Nunc ac turpis placerat, suscipit sapien vel, tristique leo. Vestibulum maximus lacus vitae scelerisque feugiat. Aenean hendrerit nibh sit amet elit egestas, sed dapibus magna scelerisque. Quisque vitae vehicula leo. Duis nec iaculis arcu.\r\n\r\nSed id dignissim massa. Pellentesque quam diam, blandit ne', 'José Angel Ruiz Chávez. Ingeniero', 'Soy la verga', '2021-04-15 08:13:44', 0),
(140, 6, 139, 'c pharetra posuere, vestibulum consectetur tellus. Nunc blandit eu lectus eu bibendum. Etiam sed tellus commodo, faucibus arcu id, bibendum enim. Sed mollis ullamcorper lectus, non tempus lacus lacinia nec. In congue eros ut ex rutrum, id fermentum quam porttitor. Aenean quis tincidunt urna. Morbi tempor, arcu eget commodo feugiat, quam lectus vestibulum tellus, vitae ultricies nisi sem sed enim. Aliquam blandit auctor laoreet. Sed at erat ut purus feugiat rutrum rhoncus id massa. Aenean sed con', 'José Angel Ruiz Chávez. Ingeniero', 'Soy la verga', '2021-04-15 08:13:44', 0),
(141, 6, 139, 'sequat nulla, eu dignissim massa. Sed sit amet elit dolor. Phasellus pulvinar, dui et tempus tempus, arcu massa mattis dolor, viverra vestibulum dui mi in metus. Vivamus sit amet pharetra lectus. Proin in ex mollis, tristique felis quis, convallis ligula.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras augue dui, rhoncus eget urna at, elementum venenatis urna. Phasellus eget varius lacus. Vivamus ac rutrum leo. Curabitur eu ligula laoreet, aliquam sapien eget, condimentum lectus', 'José Angel Ruiz Chávez. Ingeniero', 'Soy la verga', '2021-04-15 08:13:44', 0),
(142, 6, 139, '. Curabitur congue mollis lorem, quis eleifend augue scelerisque et. Integer commodo rutrum risus, eu mollis velit vestibulum eget. Nam eu ex tellus. Integer tristique ex mauris, in blandit dolor sodales semper. Pellentesque ut volutpat risus. Nam imperdiet non enim et ornare. Mauris sollicitudin augue eu finibus feugiat. Sed a urna pretium, cursus velit ac, placerat eros. Praesent viverra leo sit amet tellus ullamcorper scelerisque. Integer mattis imperdiet suscipit.\r\n\r\nIn egestas libero a enim', 'José Angel Ruiz Chávez. Ingeniero', 'Soy la verga', '2021-04-15 08:13:44', 0),
(143, 6, 139, ' vulputate, id condimentum libero viverra. Donec suscipit lobortis ex et lacinia. Vivamus dignissim erat quis elit vehicula dapibus. Integer vel malesuada magna. Vestibulum a orci eget risus vestibulum commodo non vitae quam. Nam a feugiat nisl. Morbi id odio aliquam, varius libero in, rutrum quam. Quisque volutpat, nulla vitae euismod suscipit, mi libero ultricies velit, ut facilisis diam nisl iaculis turpis. Maecenas non nunc lacinia, consequat tortor sed, dignissim nisi. Nullam dignissim ex a', 'José Angel Ruiz Chávez. Ingeniero', 'Soy la verga', '2021-04-15 08:13:44', 0),
(144, 6, 139, ' sem convallis, sed tempor nisi cursus. Nam egestas interdum diam, non ornare sapien posuere id. Donec ut arcu feugiat, aliquam ipsum malesuada, aliquam tellus.\r\n\r\nQuisque rhoncus ultricies dui, ut accumsan nunc dapibus quis. Suspendisse mauris diam, cursus non quam luctus, laoreet blandit felis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus eleifend metus hendrerit fringilla feugiat. Etiam id euismod dolor. Etiam ut sapien vulputate purus bl', 'José Angel Ruiz Chávez. Ingeniero', 'Soy la verga', '2021-04-15 08:13:44', 0),
(145, 6, 139, 'andit efficitur. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur vel eros congue, ullamcorper leo eget, malesuada dui. Nulla lorem velit, hendrerit a malesuada sit amet, dignissim vitae metus. Duis laoreet dui non quam sodales aliquet. Nunc quam nulla, imperdiet sit amet neque et, rutrum euismod erat. Ut gravida feugiat magna eu ultricies. Duis mollis sit amet ex quis vulputate. Donec nisl velit, luctus sed elit a, commodo maximus tellus.', 'José Angel Ruiz Chávez. Ingeniero', 'Soy la verga', '2021-04-15 08:13:44', 0),
(146, 6, 146, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec lacinia arcu. Nam vitae consequat nisl. Quisque finibus odio at viverra cursus. Quisque iaculis orci non turpis gravida congue. Nunc ac turpis placerat, suscipit sapien vel, tristique leo. Vestibulum maximus lacus vitae scelerisque feugiat. Aenean hendrerit nibh sit amet elit egestas, sed dapibus magna scelerisque. Quisque vitae vehicula leo. Duis nec iaculis arcu.\r\n\r\nSed id dignissim massa. Pellentesque quam diam, blandit ne', 'José Angel Ruiz Chávez. Ingeniero', 'Soy la verga', '2021-04-15 08:14:36', 0),
(147, 6, 146, 'c pharetra posuere, vestibulum consectetur tellus. Nunc blandit eu lectus eu bibendum. Etiam sed tellus commodo, faucibus arcu id, bibendum enim. Sed mollis ullamcorper lectus, non tempus lacus lacinia nec. In congue eros ut ex rutrum, id fermentum quam porttitor. Aenean quis tincidunt urna. Morbi tempor, arcu eget commodo feugiat, quam lectus vestibulum tellus, vitae ultricies nisi sem sed enim. Aliquam blandit auctor laoreet. Sed at erat ut purus feugiat rutrum rhoncus id massa. Aenean sed con', 'José Angel Ruiz Chávez. Ingeniero', 'Soy la verga', '2021-04-15 08:14:36', 0),
(148, 6, 146, 'sequat nulla, eu dignissim massa. Sed sit amet elit dolor. Phasellus pulvinar, dui et tempus tempus, arcu massa mattis dolor, viverra vestibulum dui mi in metus. Vivamus sit amet pharetra lectus. Proin in ex mollis, tristique felis quis, convallis ligula.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras augue dui, rhoncus eget urna at, elementum venenatis urna. Phasellus eget varius lacus. Vivamus ac rutrum leo. Curabitur eu ligula laoreet, aliquam sapien eget, condimentum lectus', 'José Angel Ruiz Chávez. Ingeniero', 'Soy la verga', '2021-04-15 08:14:36', 0);
INSERT INTO `mensajecliente` (`id_mensaje`, `idusuario_mensaje`, `idmensaje_mensaje`, `mensaje_mensaje`, `admin_mensaje`, `asunto_mensaje`, `fecha_mensaje`, `idconversacion_mensaje`) VALUES
(149, 6, 146, '. Curabitur congue mollis lorem, quis eleifend augue scelerisque et. Integer commodo rutrum risus, eu mollis velit vestibulum eget. Nam eu ex tellus. Integer tristique ex mauris, in blandit dolor sodales semper. Pellentesque ut volutpat risus. Nam imperdiet non enim et ornare. Mauris sollicitudin augue eu finibus feugiat. Sed a urna pretium, cursus velit ac, placerat eros. Praesent viverra leo sit amet tellus ullamcorper scelerisque. Integer mattis imperdiet suscipit.\r\n\r\nIn egestas libero a enim', 'José Angel Ruiz Chávez. Ingeniero', 'Soy la verga', '2021-04-15 08:14:36', 0),
(150, 6, 146, ' vulputate, id condimentum libero viverra. Donec suscipit lobortis ex et lacinia. Vivamus dignissim erat quis elit vehicula dapibus. Integer vel malesuada magna. Vestibulum a orci eget risus vestibulum commodo non vitae quam. Nam a feugiat nisl. Morbi id odio aliquam, varius libero in, rutrum quam. Quisque volutpat, nulla vitae euismod suscipit, mi libero ultricies velit, ut facilisis diam nisl iaculis turpis. Maecenas non nunc lacinia, consequat tortor sed, dignissim nisi. Nullam dignissim ex a', 'José Angel Ruiz Chávez. Ingeniero', 'Soy la verga', '2021-04-15 08:14:36', 0),
(151, 6, 146, ' sem convallis, sed tempor nisi cursus. Nam egestas interdum diam, non ornare sapien posuere id. Donec ut arcu feugiat, aliquam ipsum malesuada, aliquam tellus.\r\n\r\nQuisque rhoncus ultricies dui, ut accumsan nunc dapibus quis. Suspendisse mauris diam, cursus non quam luctus, laoreet blandit felis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus eleifend metus hendrerit fringilla feugiat. Etiam id euismod dolor. Etiam ut sapien vulputate purus bl', 'José Angel Ruiz Chávez. Ingeniero', 'Soy la verga', '2021-04-15 08:14:36', 0),
(152, 6, 146, 'andit efficitur. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur vel eros congue, ullamcorper leo eget, malesuada dui. Nulla lorem velit, hendrerit a malesuada sit amet, dignissim vitae metus. Duis laoreet dui non quam sodales aliquet. Nunc quam nulla, imperdiet sit amet neque et, rutrum euismod erat. Ut gravida feugiat magna eu ultricies. Duis mollis sit amet ex quis vulputate. Donec nisl velit, luctus sed elit a, commodo maximus tellus.', 'José Angel Ruiz Chávez. Ingeniero', 'Soy la verga', '2021-04-15 08:14:36', 0),
(153, 6, 153, 'tortas de jamón', 'José Ruiz. Usuario', 'Este asunto es nuevo', '2021-04-16 05:22:01', 0),
(154, 6, 154, 'se comen con un buen refresco de cola', 'José Ruiz. Usuario', 'Este asunto es nuevo', '2021-04-16 05:22:57', 0),
(155, 6, 155, 'No sea tan desesperado y sea mas tranquilo', 'José Ruiz. Usuario', 'Este asunto es nuevo', '2021-04-16 05:26:46', 0),
(156, 6, 156, 'Si tienes vida, compra mantequilla, y no te golpes la rodilla.;D', 'José Ruiz. Usuario', 'Este asunto es nuevo', '2021-04-16 05:27:34', 0),
(157, 6, 157, 'Listo', 'José Ruiz. Usuario', 'Este asunto es nuevo', '2021-04-16 05:29:13', 0),
(158, 6, 158, 'listo también por el programador', 'José Ruiz. Usuario', 'Este asunto es nuevo', '2021-04-16 05:29:47', 0),
(159, 6, 159, 'ASD', '', 'Nuevo', '0000-00-00 00:00:00', 0),
(160, 6, 160, 'LEL', '', 'Nuevo1', '0000-00-00 00:00:00', 0),
(161, 6, 161, 'asd', 'Usuario', 'Nuevo2', '2021-04-22 17:45:24', 0),
(162, 0, 162, 'sd', 'José Ruiz. Usuario', 'Soy la verga2', '2021-04-23 07:28:14', 0),
(163, 6, 163, 'asdasd', 'José Ruiz. Usuario', 'Soy la verga 3', '2021-04-23 07:35:48', 0),
(164, 6, 164, 'd', 'José Angel Ruiz Chávez. Ingeniero', 'azc', '2021-04-23 17:49:29', 0),
(165, 6, 165, 'quiero una nuevo pagina', 'Usuario', '', '2021-05-25 11:47:56', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagoparts`
--

CREATE TABLE `pagoparts` (
  `id_pagoparts` int(11) NOT NULL,
  `idpago_pagoparts` int(11) NOT NULL,
  `tokencontrato_pagoparts` varchar(55) NOT NULL,
  `fecha_pagoparts` datetime NOT NULL,
  `pagado_pagoparts` datetime NOT NULL,
  `order_pagoparts` varchar(50) NOT NULL,
  `orderstatus_pagoparts` varchar(30) NOT NULL,
  `idconekta_pagoparts` varchar(50) NOT NULL,
  `monto_pagoparts` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pagoparts`
--

INSERT INTO `pagoparts` (`id_pagoparts`, `idpago_pagoparts`, `tokencontrato_pagoparts`, `fecha_pagoparts`, `pagado_pagoparts`, `order_pagoparts`, `orderstatus_pagoparts`, `idconekta_pagoparts`, `monto_pagoparts`) VALUES
(1, 44, 'mPT3LFkCaAPKDJP0iO-044', '2021-05-27 16:31:32', '0000-00-00 00:00:00', '98000010933011', 'pending_payment', 'ord_2pptdfnB8aSXVLnxc', '1000000'),
(2, 44, 'mPT3LFkCaAPKDJP0iO-144', '2021-05-27 16:31:33', '0000-00-00 00:00:00', '98000010933029', 'pending_payment', 'ord_2pptdgUhdhy45W9sV', '1000000'),
(3, 44, 'mPT3LFkCaAPKDJP0iO-244', '2021-05-27 16:31:33', '0000-00-00 00:00:00', '98000010933037', 'pending_payment', 'ord_2pptdhQC5md8V3Ktv', '1000000'),
(4, 44, 'mPT3LFkCaAPKDJP0iO-344', '2021-05-27 16:31:34', '0000-00-00 00:00:00', '98000010933045', 'pending_payment', 'ord_2pptdhQC5mmjyS6H4', '1000000'),
(5, 44, 'mPT3LFkCaAPKDJP0iO-444', '2021-05-27 16:31:34', '0000-00-00 00:00:00', '98000010933052', 'pending_payment', 'ord_2pptdiBa8PLW8EGd6', '1000000'),
(6, 44, 'mPT3LFkCaAPKDJP0iO-544', '2021-05-27 16:31:35', '0000-00-00 00:00:00', '98000010933060', 'pending_payment', 'ord_2pptdhxLg71Bheub7', '1000000'),
(7, 44, 'mPT3LFkCaAPKDJP0iO-644', '2021-05-27 16:31:36', '0000-00-00 00:00:00', '98000010933078', 'pending_payment', 'ord_2pptdihACJZqKva68', '1000000'),
(8, 44, 'mPT3LFkCaAPKDJP0iO-744', '2021-05-27 16:31:36', '0000-00-00 00:00:00', '98000010933086', 'pending_payment', 'ord_2pptdijTDNe7ZVqzN', '1000000'),
(9, 44, 'mPT3LFkCaAPKDJP0iO-844', '2021-05-27 16:31:37', '0000-00-00 00:00:00', '98000010933094', 'pending_payment', 'ord_2pptdjceeNQhGGiFZ', '1000000'),
(10, 44, 'mPT3LFkCaAPKDJP0iO-944', '2021-05-27 16:31:37', '0000-00-00 00:00:00', '98000010933102', 'pending_payment', 'ord_2pptdkD6FmntLdkWD', '1000000'),
(11, 44, 'mPT3LFkCaAPKDJP0iO-1044', '2021-05-27 16:31:38', '0000-00-00 00:00:00', '98000010933110', 'pending_payment', 'ord_2pptdkD6Fmsd6X8zu', '1000000'),
(12, 44, 'mPT3LFkCaAPKDJP0iO-1144', '2021-05-27 16:31:39', '0000-00-00 00:00:00', '98000010933128', 'pending_payment', 'ord_2pptdkwumyP5v1ffK', '1000000'),
(13, 44, 'mPT3LFkCaAPKDJP0iO-1244', '2021-05-27 16:31:39', '0000-00-00 00:00:00', '98000010933136', 'pending_payment', 'ord_2pptdkwumySGinoVu', '1000000'),
(14, 44, 'mPT3LFkCaAPKDJP0iO-1344', '2021-05-27 16:31:40', '0000-00-00 00:00:00', '98000010933144', 'pending_payment', 'ord_2pptdmgjJB5yTPsc2', '1000000'),
(15, 44, 'mPT3LFkCaAPKDJP0iO-1444', '2021-05-27 16:31:40', '0000-00-00 00:00:00', '98000010933151', 'pending_payment', 'ord_2pptdnPFoJYMcnRoU', '567395'),
(16, 45, 'mPT3LFkCaAPKDJP0iO-045', '2021-05-27 16:32:33', '0000-00-00 00:00:00', '98000010933169', 'pending_payment', 'ord_2ppteSxXoXsgafoUp', '1000000'),
(17, 45, 'mPT3LFkCaAPKDJP0iO-145', '2021-05-27 16:32:34', '0000-00-00 00:00:00', '98000010933177', 'pending_payment', 'ord_2ppteTWgPsNUCDdUE', '1000000'),
(18, 45, 'mPT3LFkCaAPKDJP0iO-245', '2021-05-27 16:32:34', '0000-00-00 00:00:00', '98000010933185', 'pending_payment', 'ord_2ppteUHnw8xbjuxxg', '1000000'),
(19, 45, 'mPT3LFkCaAPKDJP0iO-345', '2021-05-27 16:32:35', '0000-00-00 00:00:00', '98000010933193', 'pending_payment', 'ord_2ppteUHnw8z8x1GhB', '1000000'),
(20, 45, 'mPT3LFkCaAPKDJP0iO-445', '2021-05-27 16:32:36', '0000-00-00 00:00:00', '98000010933219', 'pending_payment', 'ord_2ppteVAzN8ZCCjKTq', '1000000'),
(21, 45, 'mPT3LFkCaAPKDJP0iO-545', '2021-05-27 16:32:36', '0000-00-00 00:00:00', '98000010933227', 'pending_payment', 'ord_2ppteVAzN8Woy81va', '1000000'),
(22, 45, 'mPT3LFkCaAPKDJP0iO-645', '2021-05-27 16:32:37', '0000-00-00 00:00:00', '98000010933235', 'pending_payment', 'ord_2ppteVuotL9yvobD2', '1000000'),
(23, 45, 'mPT3LFkCaAPKDJP0iO-745', '2021-05-27 16:32:37', '0000-00-00 00:00:00', '98000010933243', 'pending_payment', 'ord_2ppteWedQXkR5L1ED', '1000000'),
(24, 45, 'mPT3LFkCaAPKDJP0iO-845', '2021-05-27 16:32:38', '0000-00-00 00:00:00', '98000010933250', 'pending_payment', 'ord_2ppteWTxUfZuVurSN', '1000000'),
(25, 45, 'mPT3LFkCaAPKDJP0iO-945', '2021-05-27 16:32:39', '0000-00-00 00:00:00', '98000010933268', 'pending_payment', 'ord_2ppteXF51wGUX3x6o', '1000000'),
(26, 45, 'mPT3LFkCaAPKDJP0iO-1045', '2021-05-27 16:32:39', '0000-00-00 00:00:00', '98000010933276', 'pending_payment', 'ord_2ppteXF51wJ4zuCmg', '1000000'),
(27, 45, 'mPT3LFkCaAPKDJP0iO-1145', '2021-05-27 16:32:40', '0000-00-00 00:00:00', '98000010933284', 'pending_payment', 'ord_2ppteXytY8oP5Mb9t', '1000000'),
(28, 45, 'mPT3LFkCaAPKDJP0iO-1245', '2021-05-27 16:32:40', '0000-00-00 00:00:00', '98000010933292', 'pending_payment', 'ord_2ppteYii4LPmmbH6D', '1000000'),
(29, 45, 'mPT3LFkCaAPKDJP0iO-1345', '2021-05-27 16:32:41', '0000-00-00 00:00:00', '98000010933300', 'pending_payment', 'ord_2ppteYgR3GHk2rv2C', '1000000'),
(30, 45, 'mPT3LFkCaAPKDJP0iO-1445', '2021-05-27 16:32:41', '0000-00-00 00:00:00', '98000010933318', 'pending_payment', 'ord_2ppteZeU1k4DbNjnq', '567395');

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
(31, '2022-03-09 08:24:16', '2022-04-09 08:24:16', '0000-00-00 00:00:00', 4, '', 0, '', 23, 'yJ5eyaTNYUDgxGnNA', '0', '', 1, ''),
(32, '2021-04-12 06:37:49', '2021-05-12 06:37:49', '0000-00-00 00:00:00', 5, '', 0, '', 24, 'SkWITi34Q54C1e5DfB', '0', '', 1, ''),
(33, '2021-04-12 06:39:17', '2021-05-12 06:39:17', '0000-00-00 00:00:00', 6, '', 0, '', 25, 'FbqZ1PE2rEb1JqLGN', '0', '', 1, ''),
(34, '2021-04-15 07:40:22', '2021-05-15 07:40:22', '0000-00-00 00:00:00', 6, '', 0, '', 26, '9TMp37nmFVXjTMiqkA', '0', '', 1, ''),
(35, '2021-04-22 17:24:40', '2021-05-22 17:24:40', '0000-00-00 00:00:00', 7, '', 0, '', 27, '0xoha9MMOVtKscYS9N', '0', '', 1, ''),
(36, '2021-04-22 17:26:10', '2021-05-22 17:26:10', '0000-00-00 00:00:00', 8, '', 0, '', 28, 'eZXDkW084gcIW9G32', '0', '', 1, ''),
(37, '2021-04-22 17:30:49', '2021-05-22 17:30:49', '0000-00-00 00:00:00', 9, '', 0, '', 29, 'rGp2wt595UAbmFXClt', '0', '', 1, ''),
(38, '2021-04-22 17:33:28', '2021-05-22 17:33:28', '0000-00-00 00:00:00', 10, '', 0, '', 30, 'YEZdlvkcYY7DbcgPB2', '0', '', 1, ''),
(39, '2021-04-22 17:45:24', '2021-05-22 17:45:24', '0000-00-00 00:00:00', 11, '', 0, '', 31, 'pZTeuKpvQc5quBIn', '0', '', 1, ''),
(40, '2021-04-22 18:48:05', '2021-05-22 18:48:05', '0000-00-00 00:00:00', 11, '', 0, '', 32, '8nbbUuNpk2PwbD3y', '0', '', 1, ''),
(41, '2021-05-15 07:40:22', '2021-06-15 07:40:22', '0000-00-00 00:00:00', 6, '', 0, '', 26, '9TMp37nmFVXjTMiqkA', '0', '', 1, ''),
(42, '2021-04-24 18:48:56', '2021-05-24 18:48:56', '0000-00-00 00:00:00', 7, '', 0, '', 33, 'feDLQWto06W1Jhljl3', '0', '', 1, ''),
(43, '2021-05-25 11:47:56', '2021-06-25 11:47:56', '0000-00-00 00:00:00', 12, '', 0, '', 34, '9N0VoGJUdzwa0Qcl46', '0', '', 1, ''),
(44, '2021-05-25 11:50:32', '2021-06-25 11:50:32', '0000-00-00 00:00:00', 12, '', 0, '', 35, 'mPT3LFkCaAPKDJP0iO', '0', '', 1, ''),
(45, '2021-06-25 11:50:32', '2021-07-25 11:50:32', '0000-00-00 00:00:00', 12, '', 0, '', 35, 'mPT3LFkCaAPKDJP0iO', '0', '', 1, '');

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
(8, 'Programación y control de decisiones ', 0, '2021-04-12 04:53:36', '2021-04-17 04:53:36', 4, '3'),
(9, 'Cotización: En proceso', 1, '2021-04-12 06:37:49', '2021-04-13 06:37:49', 5, '1'),
(10, 'Cotización: En proceso', 1, '2021-04-12 06:39:17', '2021-04-13 06:39:17', 6, '1'),
(11, 'Programación', 0, '2021-04-15 05:52:44', '2021-04-30 05:52:44', 6, '2'),
(12, 'Cotización: En proceso', 1, '2021-04-22 17:24:40', '2021-04-23 17:24:40', 7, '1'),
(13, 'Cotización: En proceso', 1, '2021-04-22 17:26:10', '2021-04-23 17:26:10', 8, '1'),
(14, 'Cotización: En proceso', 1, '2021-04-22 17:30:49', '2021-04-23 17:30:49', 9, '1'),
(15, 'Cotización: En proceso', 1, '2021-04-22 17:33:28', '2021-04-23 17:33:28', 10, '1'),
(16, 'Cotización: En proceso', 1, '2021-04-22 17:45:24', '2021-04-23 17:45:24', 11, '1'),
(17, 'Cotización: En proceso', 1, '2021-05-25 11:47:56', '2021-05-26 11:47:56', 12, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pr`
--

CREATE TABLE `pr` (
  `id_archivo` int(11) NOT NULL,
  `idusuario_archivo` int(11) NOT NULL,
  `idproyecto_archivo` int(11) NOT NULL,
  `direccion_archivo` varchar(150) NOT NULL,
  `fecha_archivo` datetime NOT NULL,
  `identificacion_archivo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pr`
--

INSERT INTO `pr` (`id_archivo`, `idusuario_archivo`, `idproyecto_archivo`, `direccion_archivo`, `fecha_archivo`, `identificacion_archivo`) VALUES
(1, 6, 5, 'archivos/119403493_3413678911988392_8248441450573387682_o.jpg', '2021-04-15 07:12:38', 'Usuario'),
(2, 6, 6, 'archivos/abc.jpeg', '2021-04-15 07:12:36', 'Usuario'),
(3, 6, 6, 'archivos/119403493_3413678911988392_8248441450573387682_o.jpg', '2021-04-15 07:12:34', 'Usuario'),
(4, 6, 6, 'archivos/abc.jpeg', '2021-04-15 07:12:31', 'Usuario'),
(5, 6, 6, 'archivos/Operaciones+Publico+en+general.pdf', '2021-04-15 07:12:28', 'Usuario'),
(6, 6, 6, 'archivos/rose-realistic-transparent-set-with-red-flowers-isolated.zip', '2021-04-15 07:12:24', 'Usuario'),
(7, 6, 6, 'archivos/435617.jpg', '2021-04-16 07:12:17', 'Usuario'),
(8, 6, 6, 'archivos/mapa predio.psd', '2021-04-16 07:43:36', 'Usuario'),
(9, 6, 6, 'archivos/adminpagos.docx', '2021-04-16 07:49:22', 'Usuario'),
(10, 6, 6, 'archivos/Currículo.docx', '2021-04-16 07:49:22', 'Usuario'),
(11, 6, 6, 'archivos/adminpagos.docx', '2021-04-16 07:53:31', 'Usuario'),
(12, 6, 6, 'archivos/Currículo.docx', '2021-04-16 07:53:31', 'Usuario'),
(13, 6, 6, 'archivos/adminpagos.docx', '2021-04-16 07:53:52', 'Usuario'),
(14, 6, 6, 'archivos/Currículo.docx', '2021-04-16 07:53:52', 'Usuario'),
(15, 6, 6, 'archivos/Pieza1.SLDPRT', '2021-04-16 08:08:31', 'admin'),
(16, 6, 6, 'archivos/20200908_182723.jpg', '2021-04-16 08:14:52', 'admin'),
(17, 6, 6, 'archivos/20201030_080052.jpg', '2021-04-16 08:14:52', 'admin'),
(18, 6, 6, 'archivos/20201030_081757 (2).jpg', '2021-04-16 08:14:52', 'admin'),
(19, 6, 6, 'archivos/20201030_081757 (3).jpg', '2021-04-16 08:14:52', 'admin'),
(20, 6, 6, 'archivos/20201030_081757 (4).jpg', '2021-04-16 08:14:52', 'admin'),
(21, 6, 6, 'archivos/20201030_081757.jpg', '2021-04-16 08:14:52', 'admin'),
(22, 6, 6, 'archivos/20201030_081814.jpg', '2021-04-16 08:14:52', 'admin'),
(23, 6, 6, 'archivos/José-FTI22Apr20210546331.gif', '2021-04-22 05:46:33', 'Usuario'),
(24, 6, 6, 'archivos/José-aNu22Apr2021054650pagocurso.zip', '2021-04-22 05:46:50', 'Usuario'),
(25, 6, 5, 'archivos/José-6B22Apr2021054708pagocurso.zip', '2021-04-22 05:47:08', 'Usuario'),
(26, 6, 6, 'archivos/1.gif', '2021-04-22 05:48:54', 'Usuario'),
(27, 6, 6, 'archivos/1.gif', '2021-04-22 05:49:16', 'Usuario'),
(28, 6, 6, 'archivos/modern-resume.zip', '2021-04-22 05:51:05', 'Usuario'),
(29, 6, 6, 'archivos/130.psd', '2021-04-22 05:52:22', 'Usuario'),
(30, 6, 6, 'archivos/130.psd', '2021-04-22 05:53:05', 'Usuario'),
(31, 6, 6, 'archivos/Pieza1.SLDPRT', '2021-04-22 05:53:20', 'Usuario'),
(32, 0, 2, 'archivos/professional-curriculum-vitae-template.zip', '2021-04-22 06:01:02', 'admin'),
(33, 0, 2, 'archivos/LibroAutomatizacinIndustrialI_versin_final.pdf', '2021-04-22 06:01:25', 'admin'),
(34, 0, 2, 'archivos/modern-professional-resume-cv-template.zip', '2021-04-22 06:02:16', 'admin'),
(35, 0, 2, 'archivos/2.psd', '2021-04-22 06:10:18', 'admin'),
(36, 6, 6, 'archivos/Currículo.docx', '2021-04-22 06:20:55', 'admin'),
(37, 6, 5, 'archivos/pagocurso.zip', '2021-04-22 06:21:42', 'Usuario'),
(38, 6, 9, 'archivos/NOVIEMBRE2020.pdf', '2021-04-23 17:16:48', 'admin'),
(39, 9, 6, 'archivos/41906609.pdf', '2021-04-23 17:27:14', 'admin'),
(40, 9, 6, 'archivos/117.jpg', '2021-04-23 17:28:24', 'admin'),
(41, 9, 6, 'archivos/LibroAutomatizacinIndustrialI_versin_final.pdf', '2021-04-23 17:30:24', 'admin'),
(42, 9, 6, 'archivos/2.psd', '2021-04-23 17:31:13', 'admin'),
(43, 9, 6, 'archivos/angelrfc.jsf', '2021-04-23 17:32:36', 'admin'),
(44, 9, 6, 'archivos/1.gif', '2021-04-23 17:33:23', 'admin'),
(45, 9, 6, 'archivos/ProyectoINGEANGEL.COM.docx', '2021-04-23 17:35:25', 'admin'),
(46, 6, 9, 'archivos/adminpagos.docx', '2021-04-23 17:36:20', 'admin'),
(47, 6, 11, 'archivos/joseangel.png', '2021-04-23 17:48:12', 'admin'),
(48, 6, 6, 'archivos/WhatsAppImage2020-10-17at8.46.00AM.jpeg', '2021-04-23 18:17:12', 'Usuario'),
(49, 6, 6, 'archivos/117.docx', '2021-04-23 19:40:59', 'Usuario'),
(50, 6, 6, 'archivos/xx.png', '2021-04-23 20:02:26', 'Usuario'),
(51, 6, 6, 'archivos/sdax.png', '2021-04-24 17:34:20', 'Usuario'),
(52, 6, 6, 'archivos/117.docx', '2021-04-24 17:38:42', 'Usuario'),
(53, 6, 9, 'archivos/41906609.pdf', '2021-04-24 17:42:26', 'Usuario'),
(54, 6, 5, 'archivos/fotocurriculo.png', '2021-04-24 17:44:32', 'Usuario'),
(55, 6, 6, 'archivos/fotocurriculo.png', '2021-04-24 17:45:00', 'Usuario'),
(56, 6, 9, 'archivos/fotocurriculo.png', '2021-04-24 17:45:33', 'Usuario'),
(57, 6, 11, 'archivos/fotocurriculo.png', '2021-04-24 17:45:56', 'Usuario'),
(58, 6, 11, 'archivos/Currículo.docx', '2021-04-24 18:45:42', 'admin'),
(59, 6, 7, 'archivos/Currículo.docx', '2021-04-24 18:46:05', 'admin'),
(60, 5, 5, 'archivos/117.docx', '2021-04-25 08:34:05', 'admin'),
(61, 3, 3, 'archivos/117.docx', '2021-04-25 08:34:32', 'admin'),
(62, 4, 4, 'archivos/117.docx', '2021-04-25 08:34:51', 'admin'),
(63, 6, 12, 'archivos/20190422_200017.jpg', '2021-05-25 11:49:50', 'admin');

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
(13, 9280, 'yJ5eyaTNYUDgxGnNA', 23, 100, 100, 150, 800, 6850),
(14, 9280, '9TMp37nmFVXjTMiqkA', 26, 100, 100, 150, 800, 6850),
(15, 4640, '8nbbUuNpk2PwbD3y', 32, 100, 100, 150, 800, 2850),
(16, 11600, 'feDLQWto06W1Jhljl3', 33, 100, 100, 150, 800, 8850),
(17, 145674, 'mPT3LFkCaAPKDJP0iO', 35, 100, 100, 150, 800, 124431);

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
(4, 'https://3dImprent.com', 4, 'Sin paquete', '', '0', ''),
(5, 'Sin Proyecto', 5, 'Sin paquete', '', '0', ''),
(6, 'Preparación', 6, 'Sin paquete', '', '0', ''),
(7, 'Preparación', 6, 'Sin paquete', '', '0', ''),
(8, 'Preparaciónxx', 6, 'Sin paquete', '', '0', ''),
(9, 'Preparaciónxxx', 6, 'Sin paquete', '', '0', ''),
(10, 'Preparaciónxxxx', 6, 'Sin paquete', '', '0', ''),
(11, 'Preparaciónxxxxx', 6, 'Sin paquete', '', '0', ''),
(12, 'buhos.com', 6, 'Sin paquete', '', '0', '');

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
(2, 'José Angel', 'Chávez', 'jose@hotmail.com', 'h', '4521441689', 'upload/JoséAngel-TaU24April20211850-11xx.png', '', '', '', '', '', '2021-04-05', 0, '', '', '', 'admin', 0),
(3, 'Vianey', 'Ruiz', 'vi@hotmail.com', 'v', '4521441689', 'upload/Vianey-z4o09Apr2021071218abc.jpeg', 'San José de la Mina', '43', 'San José de la Mina', '60125', '', '2021-04-09', 3, 'San José de La Mina #42 Col. San José de la Mina', 'eqwe', '8754654854721', '', 0),
(4, 'José Angel', 'Chávez', 'angel._ruiz@hodtmail.com', 'TBMGcTDk', '4521441689', 'upload/JoséAngel-ygQ09Apr2021084239WhatsAppImage2020-09-25at7.19.42AM.jpeg', 'San José de la Mina', '42', '', '60125', '', '2021-04-09', 4, '', '', '', '', 0),
(5, 'José', 'Angel', 'angel._ruiz@hotmial.com', 'etw0xXJ', '4521441689', '', '', '', '', '', '', '2021-04-12', 5, '', '', '', 'Usuario', 0),
(6, 'José', 'Ruiz', 'angel._ruiz@hotmail.com', 'x', '4521441689', 'upload/José-hdt23April20211009-05WhatsApp Image 2020-02-19 at 7.55.33 AM.jpeg', '', '', '', '60125', '', '2021-04-12', 6, '', '', '', 'Usuario', 0);

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
-- Indices de la tabla `pagoparts`
--
ALTER TABLE `pagoparts`
  ADD PRIMARY KEY (`id_pagoparts`);

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
-- Indices de la tabla `pr`
--
ALTER TABLE `pr`
  ADD PRIMARY KEY (`id_archivo`);

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
  MODIFY `id_contrato` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `mensajecliente`
--
ALTER TABLE `mensajecliente`
  MODIFY `id_mensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT de la tabla `pagoparts`
--
ALTER TABLE `pagoparts`
  MODIFY `id_pagoparts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id_pago` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `pasos`
--
ALTER TABLE `pasos`
  MODIFY `id_paso` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `pr`
--
ALTER TABLE `pr`
  MODIFY `id_archivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `precios`
--
ALTER TABLE `precios`
  MODIFY `id_precio` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id_proyecto` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
