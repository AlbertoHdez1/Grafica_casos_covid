-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-07-2021 a las 01:23:16
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `casos_covid_quintana_roo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casos_positivos`
--

CREATE TABLE `casos_positivos` (
  `Municipio` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Positivos` int(10) NOT NULL,
  `Defunciones` int(10) NOT NULL,
  `Recuperados` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `casos_positivos`
--

INSERT INTO `casos_positivos` (`Municipio`, `Positivos`, `Defunciones`, `Recuperados`) VALUES
('BACALAR', 432, 17, 391),
('BENITO JUÁREZ', 23228, 2086, 18336),
('COZUMEL', 1572, 150, 1207),
('FELIPE CARRILLO PUERTO', 884, 86, 698),
('ISLA MUJERES', 389, 38, 329),
('JOSÉ MARÍA MORELOS', 327, 48, 208),
('LÁZARO CÁRDENAS', 532, 43, 467),
('OTHÓN P. BLANCO	', 7622, 395, 6935),
('PUERTO MORELOS', 56, 16, 39),
('SOLIDARIDAD', 7714, 389, 5583),
('TULUM', 491, 40, 434);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
