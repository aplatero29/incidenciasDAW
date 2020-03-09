-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 09-03-2020 a las 17:04:09
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
-- Base de datos: `incidenciasdaw`
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
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `incidencias`
--

INSERT INTO `incidencias` (`id_inci`, `id_prof`, `asunto`, `cuerpo`, `fecha_creacion`) VALUES
(17, 23, 'incidencia alejandro', 'Prueba con profesor', '2020-02-14 18:50:22'),
(15, 1, 'Prueba numero 2', 'Esta una prueba 2', '2020-02-14 15:59:11'),
(16, 1, 'Prueba numero 3', 'Esta una prueba 3', '2020-02-14 15:59:23'),
(14, 1, 'prueba numero 1', 'Esta es una prueba 1', '2020-02-14 15:55:08'),
(19, 30, 'prueba nueva incidencias', 'Esta es una prueba de creación de incidencia', '2020-03-07 07:50:49'),
(20, 30, 'Otra incidencia', 'Incidencia nueva', '2020-03-07 08:56:44'),
(21, 1, 'Nueva incidencia', 'El cañon del aula 14 tiene problemas para mostrar el video', '2020-03-09 12:52:48'),
(22, 1, 'Nueva incidencia', 'El cañon del aula 14 tiene problemas para mostrar el video', '2020-03-09 12:55:13'),
(23, 1, 'Nueva incidencia 2', 'Otra incidencia nueva', '2020-03-09 12:56:07');

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
-- Estructura de tabla para la tabla `mensajes`
--

DROP TABLE IF EXISTS `mensajes`;
CREATE TABLE IF NOT EXISTS `mensajes` (
  `id_men` int(255) NOT NULL AUTO_INCREMENT,
  `id_remitente` int(255) NOT NULL,
  `id_destinatario` int(255) NOT NULL,
  `titulo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `cuerpo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_mensaje` datetime NOT NULL,
  PRIMARY KEY (`id_men`),
  KEY `id_remitente` (`id_remitente`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id_men`, `id_remitente`, `id_destinatario`, `titulo`, `cuerpo`, `fecha_mensaje`) VALUES
(1, 1, 71, 'Mensaje prueba', 'Esto es una prueba', '2020-03-09 05:00:21'),
(2, 1, 71, 'Mensaje prueba', 'Esto es una prueba', '2020-03-09 05:00:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

DROP TABLE IF EXISTS `profesores`;
CREATE TABLE IF NOT EXISTS `profesores` (
  `id_prof` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `dni` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `departamento` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_prof`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id_prof`, `nombre`, `dni`, `email`, `usuario`, `password`, `departamento`, `admin`, `updated_at`, `created_at`, `remember_token`) VALUES
(1, 'admininstrador', '12345678A', 'admin@admin.com', 'admin', '$2y$10$QPWmZq5yCur9LE0Y/Fklx.IjVSW9gwnZrbbkQFsjXH5RiZHWuf/8q', 'Informática', 1, '2020-03-05 13:11:33', '2020-03-05 13:11:33', '8OzSApXg5NAemfaSC34qvrI2IrggkD9RRoXcaam8I8lD4rv0li4e0PBC1stR'),
(71, 'profesor', '12345678A', 'profesor@profesor.com', 'profesor', '$2y$10$0rowbUCLdNbWV9S0m21xvONghKi1upp6MeZCeemSn884tFNqoqI.O', 'Informática', 0, '2020-03-09 13:03:23', '2020-03-09 13:03:23', 'Wax6tLIRI8h7WINjOwY63PqLnCnKiZrj4FN4Y9hICVAexrGAEIdLH3mfUuUx');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
