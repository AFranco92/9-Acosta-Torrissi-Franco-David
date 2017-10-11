-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-10-2017 a las 19:16:54
-- Versión del servidor: 10.1.24-MariaDB
-- Versión de PHP: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_celulares`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Celular`
--

CREATE TABLE `Celular` (
  `id_celular` int(11) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `caracteristicas` text NOT NULL,
  `precio` float NOT NULL,
  `stock` tinyint(4) NOT NULL,
  `id_marca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Marca`
--

CREATE TABLE `Marca` (
  `id_marca` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Marca`
--

INSERT INTO `Marca` (`id_marca`, `nombre`, `descripcion`) VALUES
(1, 'Samsung', 'Corea del Sur'),
(2, 'Huawei', 'China'),
(3, 'Motorola', 'Estados Unidos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE `Usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`id_usuario`, `usuario`, `mail`, `password`) VALUES
(1, 'profesor', 'profesor@tudai.com.ar', '$2y$10$oqywdLKj3LiswzLVXaW0X.MHz9sKVlq7NhQESSLEypL9YDJn1aEf6');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Celular`
--
ALTER TABLE `Celular`
  ADD PRIMARY KEY (`id_celular`),
  ADD KEY `id_marca` (`id_marca`);

--
-- Indices de la tabla `Marca`
--
ALTER TABLE `Marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Celular`
--
ALTER TABLE `Celular`
  MODIFY `id_celular` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `Marca`
--
ALTER TABLE `Marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Celular`
--
ALTER TABLE `Celular`
  ADD CONSTRAINT `Celular_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `Marca` (`id_marca`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
