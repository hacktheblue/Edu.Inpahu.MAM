-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-11-2014 a las 20:47:12
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mam`
--
CREATE DATABASE IF NOT EXISTS `mam` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mam`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE IF NOT EXISTS `areas` (
  `ARE_ID` int(11) NOT NULL,
  `ARE_NOMBRE` varchar(100) NOT NULL,
  `ARE_ACTV` tinyint(1) NOT NULL,
  PRIMARY KEY (`ARE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='R7';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignado`
--

CREATE TABLE IF NOT EXISTS `asignado` (
  `ASI_ID` int(11) NOT NULL,
  `REQ_ID` int(11) NOT NULL,
  `RUC_ID` int(11) DEFAULT NULL,
  `USU_ID` int(11) DEFAULT NULL,
  `ASI_ACT` tinyint(1) NOT NULL,
  PRIMARY KEY (`ASI_ID`),
  KEY `FK_REFERENCE_15` (`REQ_ID`),
  KEY `FK_REFERENCE_16` (`RUC_ID`),
  KEY `FK_REFERENCE_17` (`USU_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='R_9 y R_10';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `baseconocimiento`
--

CREATE TABLE IF NOT EXISTS `baseconocimiento` (
  `BAC_ID` int(11) NOT NULL,
  `SEG_ID` int(11) NOT NULL,
  `SEG_TITULO` varchar(100) NOT NULL,
  `BAC_ACT` tinyint(1) NOT NULL,
  PRIMARY KEY (`BAC_ID`),
  KEY `FK_REFERENCE_23` (`SEG_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='R18';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE IF NOT EXISTS `calificacion` (
  `CALI_ID` int(11) NOT NULL,
  `CALI_NOMBRE` varchar(100) NOT NULL,
  PRIMARY KEY (`CALI_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='R25';

--
-- Volcado de datos para la tabla `calificacion`
--

INSERT INTO `calificacion` (`CALI_ID`, `CALI_NOMBRE`) VALUES
(1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camposrutinas`
--

CREATE TABLE IF NOT EXISTS `camposrutinas` (
  `CRUT_ID` int(11) NOT NULL,
  `RUT_ID` int(11) NOT NULL,
  `CRUT_VALOR` varchar(100) NOT NULL,
  PRIMARY KEY (`CRUT_ID`),
  KEY `FK_REFERENCE_25` (`RUT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='r13';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catcasos`
--

CREATE TABLE IF NOT EXISTS `catcasos` (
  `CATC_ID` int(11) NOT NULL,
  `CATC_NOMBRE` varchar(100) NOT NULL,
  `CATC_ACT` tinyint(1) NOT NULL,
  PRIMARY KEY (`CATC_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='R_2\r\nse comunica con Subcategorias';

--
-- Volcado de datos para la tabla `catcasos`
--

INSERT INTO `catcasos` (`CATC_ID`, `CATC_NOMBRE`, `CATC_ACT`) VALUES
(1, 'Infraestructua', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catevsestados`
--

CREATE TABLE IF NOT EXISTS `catevsestados` (
  `CVSE_ID` int(11) NOT NULL,
  `CATC_ID` int(11) DEFAULT NULL,
  `EST_ID` int(11) DEFAULT NULL,
  `CVSE_ACT` tinyint(1) NOT NULL,
  PRIMARY KEY (`CVSE_ID`),
  KEY `AK_KEY_2` (`CATC_ID`,`EST_ID`),
  KEY `FK_REFERENCE_7` (`EST_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Parte del R_7';

--
-- Volcado de datos para la tabla `catevsestados`
--

INSERT INTO `catevsestados` (`CVSE_ID`, `CATC_ID`, `EST_ID`, `CVSE_ACT`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `divsubcategorias`
--

CREATE TABLE IF NOT EXISTS `divsubcategorias` (
  `DIV_ID` int(11) NOT NULL,
  `SUBC_ID` int(11) DEFAULT NULL,
  `DIV_NOMBRE` varchar(100) NOT NULL,
  `DIV_PORCENTAJE` int(11) NOT NULL,
  `DIV_TIEMPO` int(11) NOT NULL,
  `DIV_ACT` tinyint(1) NOT NULL,
  PRIMARY KEY (`DIV_ID`),
  KEY `FK_REFERENCE_2` (`SUBC_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='R_24';

--
-- Volcado de datos para la tabla `divsubcategorias`
--

INSERT INTO `divsubcategorias` (`DIV_ID`, `SUBC_ID`, `DIV_NOMBRE`, `DIV_PORCENTAJE`, `DIV_TIEMPO`, `DIV_ACT`) VALUES
(0, 1, '1', 1, 1, 1),
(1, 1, '1', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
  `EST_ID` int(11) NOT NULL,
  `EST_NOMBRE` varchar(100) NOT NULL,
  `EST_ACT` tinyint(1) NOT NULL,
  PRIMARY KEY (`EST_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='R_4';

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`EST_ID`, `EST_NOMBRE`, `EST_ACT`) VALUES
(1, '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historicofechas`
--

CREATE TABLE IF NOT EXISTS `historicofechas` (
  `HISF_ID` int(11) NOT NULL,
  `HISF_REQE` int(11) NOT NULL,
  `HISF_FECHA` datetime NOT NULL,
  `HISF_ESTADO` varchar(100) NOT NULL,
  PRIMARY KEY (`HISF_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='R9 y R10';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logauditoria`
--

CREATE TABLE IF NOT EXISTS `logauditoria` (
  `ID` int(11) NOT NULL,
  `TABLA` varchar(100) NOT NULL,
  `ID_TABLA` int(11) NOT NULL,
  `USUARIO` varchar(100) NOT NULL,
  `FECHA` date NOT NULL,
  `ACCION` varchar(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE IF NOT EXISTS `modulos` (
  `mdo_id` int(11) NOT NULL AUTO_INCREMENT,
  `mdo_number` varchar(40) NOT NULL,
  `mdo_nombre` varchar(40) NOT NULL,
  `mdo_cssIconoForm` varchar(30) NOT NULL,
  `mdo_viewName` varchar(30) NOT NULL,
  PRIMARY KEY (`mdo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`mdo_id`, `mdo_number`, `mdo_nombre`, `mdo_cssIconoForm`, `mdo_viewName`) VALUES
(1, '1', 'Administrador Cuentas', 'fa-users', 'AdministraUsuView.php'),
(2, '2', 'Reportes', 'fa-folder-open', 'ReportesView.php'),
(3, '3', 'Casos', 'fa-file-text', 'CasosView.php'),
(4, '4', 'Servicios', 'fa-book', 'ServiciosView.php'),
(5, '5', 'Areas', 'fa-language', 'AreaView.php'),
(6, '6', 'Sedes', 'fa-building-o', 'SedesView.php'),
(7, '7', 'Ajustes ', 'fa-wrench', 'AjusesView.php'),
(8, '8', 'Solicitud Servicio', 'fa-share', 'SolicitudSerView.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `origensolicitud`
--

CREATE TABLE IF NOT EXISTS `origensolicitud` (
  `ORGS_ID` int(11) NOT NULL,
  `ORGS_NOMBRE` varchar(100) NOT NULL,
  `ORGS_ACT` tinyint(1) NOT NULL,
  PRIMARY KEY (`ORGS_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='R_5';

--
-- Volcado de datos para la tabla `origensolicitud`
--

INSERT INTO `origensolicitud` (`ORGS_ID`, `ORGS_NOMBRE`, `ORGS_ACT`) VALUES
(1, '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE IF NOT EXISTS `permisos` (
  `per_id` int(11) NOT NULL AUTO_INCREMENT,
  `per_tpu_id` int(11) NOT NULL,
  `per_modulo1` char(1) NOT NULL,
  `per_modulo2` char(1) NOT NULL,
  `per_modulo3` char(1) NOT NULL,
  `per_modulo4` char(1) NOT NULL,
  `per_modulo5` char(1) NOT NULL,
  `per_modulo6` char(1) NOT NULL,
  `per_modulo7` char(1) NOT NULL,
  `per_modulo8` char(1) NOT NULL,
  PRIMARY KEY (`per_id`),
  UNIQUE KEY `per_tpu_id` (`per_tpu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`per_id`, `per_tpu_id`, `per_modulo1`, `per_modulo2`, `per_modulo3`, `per_modulo4`, `per_modulo5`, `per_modulo6`, `per_modulo7`, `per_modulo8`) VALUES
(1, 1, '1', '1', '1', '1', '1', '1', '1', '1'),
(2, 2, '0', '1', '1', '0', '0', '0', '1', '1'),
(3, 3, '0', '1', '1', '0', '0', '0', '1', '1'),
(4, 4, '0', '1', '1', '0', '0', '0', '1', '1'),
(5, 5, '0', '1', '1', '0', '0', '0', '1', '1'),
(6, 6, '0', '1', '1', '0', '0', '0', '1', '1'),
(7, 7, '0', '1', '1', '0', '0', '0', '1', '1'),
(8, 8, '0', '1', '1', '0', '0', '0', '1', '1'),
(9, 9, '0', '1', '0', '0', '0', '0', '1', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relareacord`
--

CREATE TABLE IF NOT EXISTS `relareacord` (
  `RAC_ID` int(11) NOT NULL,
  `USU_ID` int(11) NOT NULL,
  `ARE_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`RAC_ID`),
  KEY `AK_KEY_2` (`USU_ID`,`ARE_ID`),
  KEY `FK_REFERENCE_29` (`ARE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='relacion area coordinador';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relcatest`
--

CREATE TABLE IF NOT EXISTS `relcatest` (
  `RCE_ID` int(11) NOT NULL,
  `CVSE_ID_ORIGEN` int(11) NOT NULL,
  `CVSE_ID_DESTINO` int(11) NOT NULL,
  `RCE_ACT` tinyint(1) NOT NULL,
  PRIMARY KEY (`RCE_ID`),
  KEY `AK_KEY_2` (`CVSE_ID_ORIGEN`,`CVSE_ID_DESTINO`),
  KEY `FK_REFERENCE_9` (`CVSE_ID_DESTINO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Parte del R_7';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relrolusucatvsestado`
--

CREATE TABLE IF NOT EXISTS `relrolusucatvsestado` (
  `RRC_ID` int(11) NOT NULL,
  `CVSE_ID` int(11) NOT NULL,
  `ROLU_ID` int(11) NOT NULL,
  `RRC_ACT` tinyint(1) NOT NULL,
  PRIMARY KEY (`RRC_ID`),
  KEY `AK_KEY_2` (`CVSE_ID`,`ROLU_ID`),
  KEY `FK_REFERENCE_11` (`ROLU_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='parte de R_7\r\n';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relrutcat`
--

CREATE TABLE IF NOT EXISTS `relrutcat` (
  `RRCA_ID` int(11) NOT NULL,
  `RUT_ID` int(11) NOT NULL,
  `CATC_ID` int(11) NOT NULL,
  `RRCA_ACT` tinyint(1) NOT NULL,
  PRIMARY KEY (`RRCA_ID`),
  KEY `AK_KEY_2` (`RUT_ID`,`CATC_ID`),
  KEY `FK_REFERENCE_27` (`CATC_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='r13 relacion rutina categoria';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requerimiento`
--

CREATE TABLE IF NOT EXISTS `requerimiento` (
  `REQ_ID` int(11) NOT NULL AUTO_INCREMENT,
  `TIPC_ID` int(11) DEFAULT NULL,
  `TPC_ID` int(11) NOT NULL,
  `DIV_ID` int(11) DEFAULT NULL,
  `CVSE_ID` int(11) DEFAULT NULL,
  `ORGS_ID` int(11) DEFAULT NULL,
  `REQ_TITULO` varchar(100) NOT NULL,
  `REQ_DESCRIPCION` text NOT NULL,
  `REQ_ACT` tinyint(1) NOT NULL,
  `REQ_USUARIOSOL` varchar(100) NOT NULL,
  `REQ_FECHASOL` datetime NOT NULL,
  `CALI_ID` int(11) DEFAULT NULL,
  `REQ_OBSERVACION` text,
  `REQ_CAMBIO` int(11) DEFAULT NULL,
  PRIMARY KEY (`REQ_ID`),
  KEY `FK_REFERENCE_12` (`TIPC_ID`),
  KEY `FK_REFERENCE_13` (`DIV_ID`),
  KEY `FK_REFERENCE_18` (`CVSE_ID`),
  KEY `FK_REFERENCE_22` (`ORGS_ID`),
  KEY `FK_REFERENCE_24` (`CALI_ID`),
  KEY `TPC_ID` (`TPC_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Pertenece a R-9 y R_10' AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `requerimiento`
--

INSERT INTO `requerimiento` (`REQ_ID`, `TIPC_ID`, `TPC_ID`, `DIV_ID`, `CVSE_ID`, `ORGS_ID`, `REQ_TITULO`, `REQ_DESCRIPCION`, `REQ_ACT`, `REQ_USUARIOSOL`, `REQ_FECHASOL`, `CALI_ID`, `REQ_OBSERVACION`, `REQ_CAMBIO`) VALUES
(1, 0, 1, 0, 1, 1, '1', '1', 1, '', '2014-11-12 00:00:00', 1, '123123', 123123),
(2, 1, 2, 0, 1, 1, '12', '312312', 127, '123', '2014-11-04 00:00:00', 1, '123123', 123123),
(3, 0, 3, 0, 1, 1, '123', '12312', 127, '123', '2014-11-05 00:00:00', NULL, NULL, NULL),
(4, 0, 1, 0, 1, 1, '23123123', '1231231', 127, '3123123', '2014-11-05 00:00:00', 1, '123123', 123123),
(5, 1, 2, 0, 1, 1, '3123', '12312', 1, '123123', '2014-11-18 00:00:00', 1, '123123', 123123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolesusuarios`
--

CREATE TABLE IF NOT EXISTS `rolesusuarios` (
  `ROLU_ID` int(11) NOT NULL,
  `ROLU_NOMBRE` varchar(100) NOT NULL,
  `ROLU_ACT` tinyint(1) NOT NULL,
  PRIMARY KEY (`ROLU_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='R_7 parte';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolusucat`
--

CREATE TABLE IF NOT EXISTS `rolusucat` (
  `RUC_ID` int(11) NOT NULL,
  `ROLU_ID` int(11) DEFAULT NULL,
  `USU_ID` int(11) DEFAULT NULL,
  `CATC_ID` int(11) DEFAULT NULL,
  `RUC_ACT` tinyint(1) NOT NULL,
  PRIMARY KEY (`RUC_ID`),
  KEY `AK_KEY_2` (`USU_ID`,`CATC_ID`),
  KEY `FK_REFERENCE_3` (`ROLU_ID`),
  KEY `FK_REFERENCE_5` (`CATC_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='parte R_7 union de ls tabals de roles usuarios y categorias ';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutinas`
--

CREATE TABLE IF NOT EXISTS `rutinas` (
  `RUT_ID` int(11) NOT NULL,
  `RUT_NOMBRE` varchar(100) NOT NULL,
  `RUT_DESCRIPCION` text NOT NULL,
  `RUT_ACT` tinyint(1) NOT NULL,
  PRIMARY KEY (`RUT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='R13';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimientos`
--

CREATE TABLE IF NOT EXISTS `seguimientos` (
  `SEG_ID` int(11) NOT NULL,
  `REQ_ID` int(11) NOT NULL,
  `CVSE_ID` int(11) NOT NULL,
  `SEG_OBSERVACION` text NOT NULL,
  `SEG_FECHASEG` datetime NOT NULL,
  `SEG_USUARIO` varchar(100) NOT NULL,
  `SEG_SOLUCION` tinyint(1) NOT NULL,
  PRIMARY KEY (`SEG_ID`),
  KEY `FK_REFERENCE_19` (`REQ_ID`),
  KEY `FK_REFERENCE_21` (`CVSE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='R9 ,R10,R11,R12,R14,R15';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategoria`
--

CREATE TABLE IF NOT EXISTS `subcategoria` (
  `SUBC_ID` int(11) NOT NULL,
  `CATC_ID` int(11) NOT NULL,
  `SUBC_NOMBRE` varchar(100) NOT NULL,
  `SUBC_PORCENTAJE` int(11) NOT NULL,
  `SUBC_ACT` tinyint(1) NOT NULL,
  PRIMARY KEY (`SUBC_ID`),
  KEY `FK_REFERENCE_1` (`CATC_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='R_3\r\nLlave forenea amarra subcategoria con categoria ca';

--
-- Volcado de datos para la tabla `subcategoria`
--

INSERT INTO `subcategoria` (`SUBC_ID`, `CATC_ID`, `SUBC_NOMBRE`, `SUBC_PORCENTAJE`, `SUBC_ACT`) VALUES
(1, 1, '1', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `submodulos`
--

CREATE TABLE IF NOT EXISTS `submodulos` (
  `sbm_id` int(11) NOT NULL AUTO_INCREMENT,
  `sbm_mod_id` int(11) NOT NULL,
  `sbm_nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`sbm_id`),
  KEY `sbm_mod_id` (`sbm_mod_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipificacioncasos`
--

CREATE TABLE IF NOT EXISTS `tipificacioncasos` (
  `TIPC_ID` int(11) NOT NULL,
  `TIPC_NOMBRE` varchar(100) NOT NULL,
  `TIPC_ACT` tinyint(1) NOT NULL,
  PRIMARY KEY (`TIPC_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='R_1';

--
-- Volcado de datos para la tabla `tipificacioncasos`
--

INSERT INTO `tipificacioncasos` (`TIPC_ID`, `TIPC_NOMBRE`, `TIPC_ACT`) VALUES
(0, 'Prueba', 3),
(1, 'Prueba', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_caso`
--

CREATE TABLE IF NOT EXISTS `tipo_caso` (
  `TPC_ID` int(11) NOT NULL AUTO_INCREMENT,
  `TPC_NOMBRE` varchar(30) NOT NULL,
  PRIMARY KEY (`TPC_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tipo_caso`
--

INSERT INTO `tipo_caso` (`TPC_ID`, `TPC_NOMBRE`) VALUES
(1, 'CLINICO'),
(2, 'INFORMATICO'),
(3, 'INFRAESTRUCTURA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuarios`
--

CREATE TABLE IF NOT EXISTS `tipo_usuarios` (
  `tpu_id` int(11) NOT NULL AUTO_INCREMENT,
  `tpu_nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`tpu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `tipo_usuarios`
--

INSERT INTO `tipo_usuarios` (`tpu_id`, `tpu_nombre`) VALUES
(1, 'Administrador'),
(2, 'Coordinador'),
(3, 'SoporteClinico'),
(4, 'SoporteInfraestructura'),
(5, 'SoporteInformatica'),
(6, 'SupervisorClinico'),
(7, 'SupervisorInfraestructura'),
(8, 'SupervisorInformatica'),
(9, 'UsuarioAplicacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `USU_ID` int(50) NOT NULL AUTO_INCREMENT,
  `TPU_ID` int(11) NOT NULL,
  `USU_NOMBRE` varchar(100) NOT NULL,
  `USU_CEDULA` varchar(13) NOT NULL,
  `USU_SEDE` varchar(25) NOT NULL,
  `USU_TELEFONO` varchar(25) NOT NULL,
  `USU_EMAIL` varchar(30) NOT NULL,
  `USU_AREA` varchar(25) NOT NULL,
  `USU_SEXO` char(1) NOT NULL,
  `USU_CODIGO` varchar(100) DEFAULT NULL,
  `USU_CLAVE` varchar(100) DEFAULT NULL,
  `USU_ACT` tinyint(1) DEFAULT NULL,
  `USU_USU_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`USU_ID`),
  KEY `AK_USUARIOS` (`USU_CODIGO`),
  KEY `FK_REFERENCE_30` (`USU_USU_ID`),
  KEY `TPU_ID` (`TPU_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='R_7' AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`USU_ID`, `TPU_ID`, `USU_NOMBRE`, `USU_CEDULA`, `USU_SEDE`, `USU_TELEFONO`, `USU_EMAIL`, `USU_AREA`, `USU_SEXO`, `USU_CODIGO`, `USU_CLAVE`, `USU_ACT`, `USU_USU_ID`) VALUES
(1, 1, 'Juan Vega', '1023925838', '1123123', '123123', '123123', '123123', 'M', '123', 'c9bf6c4a4fc1ac127bf27c71ce2e7250', 1, 1),
(2, 9, '123123', '1', '1', '1', '1', '1', '1', '1', 'c9bf6c4a4fc1ac127bf27c71ce2e7250', 1, 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignado`
--
ALTER TABLE `asignado`
  ADD CONSTRAINT `FK_REFERENCE_15` FOREIGN KEY (`REQ_ID`) REFERENCES `requerimiento` (`REQ_ID`),
  ADD CONSTRAINT `FK_REFERENCE_16` FOREIGN KEY (`RUC_ID`) REFERENCES `rolusucat` (`RUC_ID`),
  ADD CONSTRAINT `FK_REFERENCE_17` FOREIGN KEY (`USU_ID`) REFERENCES `usuarios` (`USU_ID`);

--
-- Filtros para la tabla `baseconocimiento`
--
ALTER TABLE `baseconocimiento`
  ADD CONSTRAINT `FK_REFERENCE_23` FOREIGN KEY (`SEG_ID`) REFERENCES `seguimientos` (`SEG_ID`);

--
-- Filtros para la tabla `camposrutinas`
--
ALTER TABLE `camposrutinas`
  ADD CONSTRAINT `FK_REFERENCE_25` FOREIGN KEY (`RUT_ID`) REFERENCES `rutinas` (`RUT_ID`);

--
-- Filtros para la tabla `catevsestados`
--
ALTER TABLE `catevsestados`
  ADD CONSTRAINT `FK_REFERENCE_6` FOREIGN KEY (`CATC_ID`) REFERENCES `catcasos` (`CATC_ID`),
  ADD CONSTRAINT `FK_REFERENCE_7` FOREIGN KEY (`EST_ID`) REFERENCES `estados` (`EST_ID`);

--
-- Filtros para la tabla `divsubcategorias`
--
ALTER TABLE `divsubcategorias`
  ADD CONSTRAINT `FK_REFERENCE_2` FOREIGN KEY (`SUBC_ID`) REFERENCES `subcategoria` (`SUBC_ID`);

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `permisos_ibfk_1` FOREIGN KEY (`per_tpu_id`) REFERENCES `tipo_usuarios` (`tpu_id`);

--
-- Filtros para la tabla `relareacord`
--
ALTER TABLE `relareacord`
  ADD CONSTRAINT `FK_REFERENCE_28` FOREIGN KEY (`USU_ID`) REFERENCES `usuarios` (`USU_ID`),
  ADD CONSTRAINT `FK_REFERENCE_29` FOREIGN KEY (`ARE_ID`) REFERENCES `areas` (`ARE_ID`);

--
-- Filtros para la tabla `relcatest`
--
ALTER TABLE `relcatest`
  ADD CONSTRAINT `FK_REFERENCE_8` FOREIGN KEY (`CVSE_ID_ORIGEN`) REFERENCES `catevsestados` (`CVSE_ID`),
  ADD CONSTRAINT `FK_REFERENCE_9` FOREIGN KEY (`CVSE_ID_DESTINO`) REFERENCES `catevsestados` (`CVSE_ID`);

--
-- Filtros para la tabla `relrolusucatvsestado`
--
ALTER TABLE `relrolusucatvsestado`
  ADD CONSTRAINT `FK_REFERENCE_10` FOREIGN KEY (`CVSE_ID`) REFERENCES `catevsestados` (`CVSE_ID`),
  ADD CONSTRAINT `FK_REFERENCE_11` FOREIGN KEY (`ROLU_ID`) REFERENCES `rolesusuarios` (`ROLU_ID`);

--
-- Filtros para la tabla `relrutcat`
--
ALTER TABLE `relrutcat`
  ADD CONSTRAINT `FK_REFERENCE_26` FOREIGN KEY (`RUT_ID`) REFERENCES `rutinas` (`RUT_ID`),
  ADD CONSTRAINT `FK_REFERENCE_27` FOREIGN KEY (`CATC_ID`) REFERENCES `catcasos` (`CATC_ID`);

--
-- Filtros para la tabla `requerimiento`
--
ALTER TABLE `requerimiento`
  ADD CONSTRAINT `FK_REFERENCE_12` FOREIGN KEY (`TIPC_ID`) REFERENCES `tipificacioncasos` (`TIPC_ID`),
  ADD CONSTRAINT `FK_REFERENCE_13` FOREIGN KEY (`DIV_ID`) REFERENCES `divsubcategorias` (`DIV_ID`),
  ADD CONSTRAINT `FK_REFERENCE_18` FOREIGN KEY (`CVSE_ID`) REFERENCES `catevsestados` (`CVSE_ID`),
  ADD CONSTRAINT `FK_REFERENCE_22` FOREIGN KEY (`ORGS_ID`) REFERENCES `origensolicitud` (`ORGS_ID`),
  ADD CONSTRAINT `FK_REFERENCE_24` FOREIGN KEY (`CALI_ID`) REFERENCES `calificacion` (`CALI_ID`),
  ADD CONSTRAINT `requerimiento_ibfk_1` FOREIGN KEY (`TPC_ID`) REFERENCES `tipo_caso` (`TPC_ID`);

--
-- Filtros para la tabla `rolusucat`
--
ALTER TABLE `rolusucat`
  ADD CONSTRAINT `FK_REFERENCE_3` FOREIGN KEY (`ROLU_ID`) REFERENCES `rolesusuarios` (`ROLU_ID`),
  ADD CONSTRAINT `FK_REFERENCE_4` FOREIGN KEY (`USU_ID`) REFERENCES `usuarios` (`USU_ID`),
  ADD CONSTRAINT `FK_REFERENCE_5` FOREIGN KEY (`CATC_ID`) REFERENCES `catcasos` (`CATC_ID`);

--
-- Filtros para la tabla `seguimientos`
--
ALTER TABLE `seguimientos`
  ADD CONSTRAINT `FK_REFERENCE_19` FOREIGN KEY (`REQ_ID`) REFERENCES `requerimiento` (`REQ_ID`),
  ADD CONSTRAINT `FK_REFERENCE_21` FOREIGN KEY (`CVSE_ID`) REFERENCES `catevsestados` (`CVSE_ID`);

--
-- Filtros para la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD CONSTRAINT `FK_REFERENCE_1` FOREIGN KEY (`CATC_ID`) REFERENCES `catcasos` (`CATC_ID`);

--
-- Filtros para la tabla `submodulos`
--
ALTER TABLE `submodulos`
  ADD CONSTRAINT `submodulos_ibfk_1` FOREIGN KEY (`sbm_mod_id`) REFERENCES `modulos` (`mdo_id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `FK_REFERENCE_30` FOREIGN KEY (`USU_USU_ID`) REFERENCES `usuarios` (`USU_ID`),
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`TPU_ID`) REFERENCES `tipo_usuarios` (`tpu_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
