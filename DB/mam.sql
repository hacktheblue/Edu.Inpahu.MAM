-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2014 a las 06:31:46
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
-- Estructura de tabla para la tabla `origensolicitud`
--

CREATE TABLE IF NOT EXISTS `origensolicitud` (
  `ORGS_ID` int(11) NOT NULL,
  `ORGS_NOMBRE` varchar(100) NOT NULL,
  `ORGS_ACT` tinyint(1) NOT NULL,
  PRIMARY KEY (`ORGS_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='R_5';

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
  `REQ_ID` int(11) NOT NULL,
  `TIPC_ID` int(11) DEFAULT NULL,
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
  KEY `FK_REFERENCE_24` (`CALI_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Pertenece a R-9 y R_10';

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `USU_ID` int(11) NOT NULL,
  `USU_NOMBRE` varchar(100) NOT NULL,
  `USU_SEDE` varchar(25) NOT NULL,
  `USU_TELEFONO` varchar(25) NOT NULL,
  `USU_AREA` varchar(25) NOT NULL,
  `USU_SEXO` char(1) NOT NULL,
  `USU_CODIGO` varchar(100) DEFAULT NULL,
  `USU_CLAVE` varchar(100) DEFAULT NULL,
  `USU_ACT` tinyint(1) DEFAULT NULL,
  `USU_USU_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`USU_ID`),
  KEY `AK_USUARIOS` (`USU_CODIGO`),
  KEY `FK_REFERENCE_30` (`USU_USU_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='R_7';

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`USU_ID`, `USU_NOMBRE`, `USU_SEDE`, `USU_TELEFONO`, `USU_AREA`, `USU_SEXO`, `USU_CODIGO`, `USU_CLAVE`, `USU_ACT`, `USU_USU_ID`) VALUES
(1, 'Pablo Escobrar', 'bogota', '2337176', 'Sistemas', 'M', NULL, NULL, NULL, NULL),
(2, 'jUAN', 'bogota', '2337176', 'Sistemas', 'M', NULL, NULL, NULL, NULL);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignado`
--
ALTER TABLE `asignado`
  ADD CONSTRAINT `FK_REFERENCE_17` FOREIGN KEY (`USU_ID`) REFERENCES `usuarios` (`USU_ID`),
  ADD CONSTRAINT `FK_REFERENCE_15` FOREIGN KEY (`REQ_ID`) REFERENCES `requerimiento` (`REQ_ID`),
  ADD CONSTRAINT `FK_REFERENCE_16` FOREIGN KEY (`RUC_ID`) REFERENCES `rolusucat` (`RUC_ID`);

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
  ADD CONSTRAINT `FK_REFERENCE_7` FOREIGN KEY (`EST_ID`) REFERENCES `estados` (`EST_ID`),
  ADD CONSTRAINT `FK_REFERENCE_6` FOREIGN KEY (`CATC_ID`) REFERENCES `catcasos` (`CATC_ID`);

--
-- Filtros para la tabla `divsubcategorias`
--
ALTER TABLE `divsubcategorias`
  ADD CONSTRAINT `FK_REFERENCE_2` FOREIGN KEY (`SUBC_ID`) REFERENCES `subcategoria` (`SUBC_ID`);

--
-- Filtros para la tabla `relareacord`
--
ALTER TABLE `relareacord`
  ADD CONSTRAINT `FK_REFERENCE_29` FOREIGN KEY (`ARE_ID`) REFERENCES `areas` (`ARE_ID`),
  ADD CONSTRAINT `FK_REFERENCE_28` FOREIGN KEY (`USU_ID`) REFERENCES `usuarios` (`USU_ID`);

--
-- Filtros para la tabla `relcatest`
--
ALTER TABLE `relcatest`
  ADD CONSTRAINT `FK_REFERENCE_9` FOREIGN KEY (`CVSE_ID_DESTINO`) REFERENCES `catevsestados` (`CVSE_ID`),
  ADD CONSTRAINT `FK_REFERENCE_8` FOREIGN KEY (`CVSE_ID_ORIGEN`) REFERENCES `catevsestados` (`CVSE_ID`);

--
-- Filtros para la tabla `relrolusucatvsestado`
--
ALTER TABLE `relrolusucatvsestado`
  ADD CONSTRAINT `FK_REFERENCE_11` FOREIGN KEY (`ROLU_ID`) REFERENCES `rolesusuarios` (`ROLU_ID`),
  ADD CONSTRAINT `FK_REFERENCE_10` FOREIGN KEY (`CVSE_ID`) REFERENCES `catevsestados` (`CVSE_ID`);

--
-- Filtros para la tabla `relrutcat`
--
ALTER TABLE `relrutcat`
  ADD CONSTRAINT `FK_REFERENCE_27` FOREIGN KEY (`CATC_ID`) REFERENCES `catcasos` (`CATC_ID`),
  ADD CONSTRAINT `FK_REFERENCE_26` FOREIGN KEY (`RUT_ID`) REFERENCES `rutinas` (`RUT_ID`);

--
-- Filtros para la tabla `requerimiento`
--
ALTER TABLE `requerimiento`
  ADD CONSTRAINT `FK_REFERENCE_24` FOREIGN KEY (`CALI_ID`) REFERENCES `calificacion` (`CALI_ID`),
  ADD CONSTRAINT `FK_REFERENCE_12` FOREIGN KEY (`TIPC_ID`) REFERENCES `tipificacioncasos` (`TIPC_ID`),
  ADD CONSTRAINT `FK_REFERENCE_13` FOREIGN KEY (`DIV_ID`) REFERENCES `divsubcategorias` (`DIV_ID`),
  ADD CONSTRAINT `FK_REFERENCE_18` FOREIGN KEY (`CVSE_ID`) REFERENCES `catevsestados` (`CVSE_ID`),
  ADD CONSTRAINT `FK_REFERENCE_22` FOREIGN KEY (`ORGS_ID`) REFERENCES `origensolicitud` (`ORGS_ID`);

--
-- Filtros para la tabla `rolusucat`
--
ALTER TABLE `rolusucat`
  ADD CONSTRAINT `FK_REFERENCE_5` FOREIGN KEY (`CATC_ID`) REFERENCES `catcasos` (`CATC_ID`),
  ADD CONSTRAINT `FK_REFERENCE_3` FOREIGN KEY (`ROLU_ID`) REFERENCES `rolesusuarios` (`ROLU_ID`),
  ADD CONSTRAINT `FK_REFERENCE_4` FOREIGN KEY (`USU_ID`) REFERENCES `usuarios` (`USU_ID`);

--
-- Filtros para la tabla `seguimientos`
--
ALTER TABLE `seguimientos`
  ADD CONSTRAINT `FK_REFERENCE_21` FOREIGN KEY (`CVSE_ID`) REFERENCES `catevsestados` (`CVSE_ID`),
  ADD CONSTRAINT `FK_REFERENCE_19` FOREIGN KEY (`REQ_ID`) REFERENCES `requerimiento` (`REQ_ID`);

--
-- Filtros para la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD CONSTRAINT `FK_REFERENCE_1` FOREIGN KEY (`CATC_ID`) REFERENCES `catcasos` (`CATC_ID`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `FK_REFERENCE_30` FOREIGN KEY (`USU_USU_ID`) REFERENCES `usuarios` (`USU_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
