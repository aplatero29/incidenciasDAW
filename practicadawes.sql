-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 03-03-2020 a las 18:53:20
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practicadawes`
--
CREATE DATABASE IF NOT EXISTS `incidenciasdaw` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `incidenciasdaw`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencias`
--

DROP TABLE IF EXISTS `incidencias`;
CREATE TABLE IF NOT EXISTS `incidencias` (
  `id_inci` int(11) NOT NULL AUTO_INCREMENT,
  `id_prof` int(11) NOT NULL,
  `asunto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cuerpo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  PRIMARY KEY (`id_inci`),
  KEY `id_prof` (`id_prof`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `incidencias`
--

INSERT INTO `incidencias` (`id_inci`, `id_prof`, `asunto`, `cuerpo`, `fecha_creacion`) VALUES
(17, 23, 'incidencia alejandro', 'Prueba con profesor', '2020-02-14 18:50:22'),
(15, 1, 'Prueba numero 2', 'Esta una prueba 2', '2020-02-14 15:59:11'),
(16, 1, 'Prueba numero 3', 'Esta una prueba 3', '2020-02-14 15:59:23'),
(14, 1, 'prueba numero 1', 'Esta es una prueba 1', '2020-02-14 15:55:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `id_prof` int(11) NOT NULL,
  `accion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_accion` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `logs`
--

INSERT INTO `logs` (`id_prof`, `accion`, `usuario`, `fecha_accion`) VALUES
(1, 'Hacer admin a un usuario', 'admin', '2020-02-14 18:17:01'),
(1, 'Generar PDF', 'admin', '2020-02-14 18:17:38'),
(1, 'Generar PDF', 'admin', '2020-02-14 18:27:36'),
(23, 'Inicio de sesión', 'aleplatero29', '2020-02-14 18:44:19'),
(23, 'Inicio de sesión', 'aleplatero29', '2020-02-14 18:45:02'),
(23, 'Inicio de sesión', 'aleplatero29', '2020-02-14 18:47:46'),
(23, 'Creación de incidencia', 'aleplatero29', '2020-02-14 18:50:22'),
(1, 'Inicio de sesión', 'admin', '2020-02-14 18:50:57'),
(23, 'Inicio de sesión', 'aleplatero29', '2020-02-14 18:51:41'),
(1, 'Inicio de sesión', 'admin', '2020-02-14 18:59:05'),
(23, 'Inicio de sesión', 'aleplatero29', '2020-02-14 19:00:01'),
(1, 'Inicio de sesión', 'admin', '2020-02-14 19:13:33'),
(1, 'Generar PDF', 'admin', '2020-02-14 19:14:12'),
(1, 'Generar PDF', 'admin', '2020-02-14 19:14:35'),
(1, 'Generar PDF', 'admin', '2020-02-14 19:14:45'),
(1, 'Generar PDF', 'admin', '2020-02-14 19:14:48'),
(27, 'Registro de usuario', 'uno', '2020-02-14 19:22:05'),
(1, 'Inicio de sesión', 'admin', '2020-02-14 19:31:20'),
(1, 'Generar PDF', 'admin', '2020-02-14 19:31:57'),
(1, 'Creación de incidencia', 'admin', '2020-02-14 19:32:18'),
(1, 'Eliminación de incidencia', 'admin', '2020-02-14 19:32:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

DROP TABLE IF EXISTS `profesores`;
CREATE TABLE IF NOT EXISTS `profesores` (
  `id_prof` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `dni` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `departamento` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_prof`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id_prof`, `nombre`, `dni`, `correo`, `usuario`, `contrasena`, `departamento`, `admin`) VALUES
(1, 'administrador', '12345678A', 'admin@admin.com', 'admin', '$2b$10$D1bmTrzWuIfBcBmQGfgYr.ynAYEkmmGPwcJt7nhWVTZ7F8ckHHFIe', 'Informática', 1),
(26, 'otra', '33445566B', 'otra@otra.com', 'otra', '$2y$10$MpIT1yp1dFhJBdJ/3H1R/.AzuB9Zmh7QI3nY8glNtcrtPi/7wFAbe', 'Administracion y finanzas', 0),
(23, 'alejandro', '23456789A', 'ale@ale.com', 'aleplatero29', '$2y$10$V5phPAArkh5fIRrjM/aWxuCtmNw5Gt.krZ8cdU7HeTbdLQ7LK37xC', 'Comercio', 0),
(25, 'otro', '33445566A', 'otro@otro.com', 'otro', '$2y$10$Z0hUZzvQjkgU/NX89eKocetfNDhi65wpyc2/hTHOZ39ZQrvhzDujC', 'Informatica', 0),
(22, 'nuevo', '12345678A', 'email@prueba.com', 'usuario', '$2y$10$SClmuBg.Mtna4kA3cTU7CucNX4RNGIaeTLntQRE5ed/6mkAI6If2q', 'Comercio', 1),
(27, 'uno', '11223344B', 'uno@uno.com', 'uno', '$2y$10$VUbw6R2crmF36T4USUC6Uet6cGU0FQLzjCuPQ4u65A3ENdsTGyaaC', 'Comercio', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
