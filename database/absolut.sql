-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2020 a las 21:31:18
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `absolut`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebidas`
--

CREATE TABLE `bebidas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precioventa` double DEFAULT NULL,
  `categoriaID` int(11) DEFAULT NULL,
  `imagen` varchar(50) DEFAULT NULL,
  `imgfondo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bebidas`
--

INSERT INTO `bebidas` (`id`, `nombre`, `cantidad`, `precioventa`, `categoriaID`, `imagen`, `imgfondo`) VALUES
(1, 'Absolut vodka', 200, 1700, 4, 'absolut-vodka.png', 'absolut-vodka.jpg'),
(2, 'Absolut Elyx', 2000, 1000, 4, 'absolut-elyx.png', 'elyx.jpg'),
(3, 'Absolut Extrakt', 100, 1000, 4, 'absolut-extrakt.png', 'extrakt.jpg'),
(4, 'Absolut Lime', 88, 1000, 1, 'absolut-lime.png', 'lime.jpg'),
(5, 'Absolut Rainbow', 156, 1000, 2, 'absolut-rainbow.png', 'rainbow.jpg'),
(6, 'Absolut Citron', 203, 1000, 1, 'absolut-citron.png', 'citron.jpg'),
(7, 'Absolut Mandarin', 100, 1000, 1, 'absolut-mandarin.png', 'mandarin.jpg'),
(8, 'Absolut Raspberri', 80, 1000, 3, 'absolut-raspberri.png', 'raspberri.jpg'),
(9, 'Absolut Vainilla', 144, 1000, 2, 'absolut-vainilla.png', 'vainilla.jpg'),
(10, 'Absolut Apeach', 340, 1000, 3, 'absolut-apeach.png', 'apeach.jpg'),
(11, 'Absolut Ruby Red', 550, 1000, 1, 'absolut-ruby-red.png', 'ruby-red.jpg'),
(12, 'Absolut Pears', 344, 1000, 3, 'absolut-pears.png', 'pears.jpg'),
(13, 'Absolut Mango', 50, 1000, 3, 'absolut-mango.png', 'mango.jpg'),
(14, 'Absolut Apple', 550, 1000, 3, 'absolut-apple.png', 'apple.jpg'),
(15, 'absolut comeback', 133, 1000, 4, 'absolut-comeback.png', 'comeback.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `categoriaID` int(11) NOT NULL,
  `Nombre` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`categoriaID`, `Nombre`) VALUES
(1, 'citrico'),
(2, 'colors'),
(3, 'frutales'),
(4, 'clasicos');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `saborID` (`categoriaID`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`categoriaID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bebidas`
--
ALTER TABLE `bebidas`
  ADD CONSTRAINT `bebidas_ibfk_1` FOREIGN KEY (`categoriaID`) REFERENCES `categoria` (`categoriaID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
