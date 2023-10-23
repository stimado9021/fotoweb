-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 23-10-2023 a las 16:27:47
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `albun`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotografia`
--

DROP TABLE IF EXISTS `fotografia`;
CREATE TABLE IF NOT EXISTS `fotografia` (
  `idFoto` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idFoto`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `fotografia`
--

INSERT INTO `fotografia` (`idFoto`, `titulo`, `foto`, `descripcion`, `fecha`) VALUES
(1, 'valentina', 'IMG_20230523_162403_390.jpg', 'valentina caminando sostenida por su querida madre andrea', '2023-10-14 15:22:10'),
(2, 'Valentina con su tia abuela', 'IMG_20230605_113647_678.jpg', 'valentina sostenida en brazos por su tia abuela alcira y con su mama andrea', '2023-10-14 15:23:19'),
(3, 'madrina', 'Screenshot_20230619-122817.jpg', 'madrina de valentina posando para una foto chevere de espalda', '2023-10-14 19:14:02'),
(4, 'familia', '1000097642.jpg', 'chino humberto erick la familia ebratt', '2023-10-14 19:16:57'),
(5, 'valentina', 'IMG_20230523_162446_894.jpg', 'tremendas tetas tiene esta vieja', '2023-10-14 19:52:59');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
