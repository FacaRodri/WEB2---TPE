-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2018 a las 22:31:10
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

CREATE database wikibeer;

use wikibeer;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `wikibeer`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cerveza`
--

CREATE TABLE `cerveza` (
  `id_cerveza` int(10) NOT NULL,
  `nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `precio` int(100) NOT NULL,
  `id_creador` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `cerveza`
--

INSERT INTO `cerveza` (`id_cerveza`, `nombre`, `precio`, `id_creador`) VALUES
(37, 'diablitos', 100, 17),
(39, 'caracoles', 100, 17),
(40, 'IPA', 2000, 17),
(41, 'Honey', 300, 17),
(50, 'bhx', 123, 17),
(52, 'erth', 234, 17),
(53, 'hgf', 234, 17),
(54, 'hgfds', 111, 17),
(55, 'Faca', 100, 17),
(56, '23r4ts', 0, 17),
(58, 'hgfds', 65, 18),
(59, 'ujhygfdyhtgfrd', 0, 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(50) NOT NULL,
  `puntaje` int(5) NOT NULL,
  `comentario` text COLLATE latin1_spanish_ci NOT NULL,
  `id_cerveza` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `puntaje`, `comentario`, `id_cerveza`, `id_usuario`) VALUES
(12, 4, 'njhgfcdxsfghjk', 39, 1),
(13, 5, 'postman', 39, 1),
(26, 1, 'vsdadsasd', 40, 6),
(27, 1, 'Holis', 55, 6),
(28, 4, 'hgfdsaz<<SD', 55, 1),
(29, 1, 'vcdscd', 55, 1),
(30, 5, 'sape', 55, 6),
(31, 5, '', 55, 6),
(32, 1, 'Hola', 55, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distribuidor`
--

CREATE TABLE `distribuidor` (
  `id_creador` int(10) NOT NULL,
  `nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `localidad` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `distribuidor`
--

INSERT INTO `distribuidor` (`id_creador`, `nombre`, `localidad`) VALUES
(17, 'Ogham', 'Tandil'),
(18, 'Tandilia', 'Tandil'),
(19, 'Faca', 'facasss');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id_imagen` int(50) NOT NULL,
  `source` varchar(150) COLLATE utf32_spanish_ci NOT NULL,
  `id_cerveza` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id_imagen`, `source`, `id_cerveza`) VALUES
(2, 'images/5bf5d61323d09.jpg', 50),
(4, 'images/5bf5d675a59c9.jpg', 52),
(5, 'images/5bf5d7b7b79c5.jpg', 53),
(6, 'images/5bf5d9f4e0654.jpg', 54),
(7, 'images/5bf5daea61e31.jpg', 55),
(9, 'images/5bf5db6d84be0.jpg', 56),
(15, 'images/5bf5e3f09ed25.jpg', 58),
(20, 'images/5bf5e3fe84142.jpg', 59),
(21, 'images/5bf5e3fe847e2.jpg', 59),
(22, 'images/5bf5e3fe84d48.jpg', 59),
(24, 'images/5bf5e3fe857c0.jpg', 59),
(25, 'images/5bf5e3fe85e11.jpg', 59),
(26, 'images/5bf5e3fe8642f.jpg', 59);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `clave` varchar(300) COLLATE latin1_spanish_ci NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `clave`, `admin`) VALUES
(1, 'adm', '$2y$12$OyKbUNv7MmFLEPMynJ3K5u7.m1PcAMfF3LMV7uf5.2JFZOml5cuk2', 1),
(2, 'usuario', '$2a$10$FXMwbN1x8qKWTBdxgS1fhejKim4rq1rYtHB8IRoydPi7csL4zi6ge', 1),
(4, 'hero', '$2y$10$K2c7OJDbjTFsJrj8RSh.6.LuYH4AWE/CGoIXJ3fwljOxUh/826a5O', 0),
(5, 'panchi', '$2y$10$QqvBEJiMRjqDw49yiasxHOwbrVSe3ZGiua8W/gQ3.JRt1g.fEj6.G', 0),
(6, 'ligge', '$2y$10$0qbAcWSRhBIJQvE7gbTJWOm9fTDuj./4SWwIkVIyWjQjWSC0WNkTe', 0),
(7, 'ligge', '$2y$10$3DNt4HznrfSXgH5LFL5Mz.ThBt8Sbxit1ZxuxUdBsCyQImMTvRkWO', 0),
(8, 'nico', '$2y$10$3YslVllzlIECCh.cbUms4ubOa0QfiWKftCtukTEOnO1MV1LJmPvgi', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cerveza`
--
ALTER TABLE `cerveza`
  ADD PRIMARY KEY (`id_cerveza`),
  ADD KEY `id_creador` (`id_creador`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_cerveza` (`id_cerveza`,`id_usuario`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_cerveza_2` (`id_cerveza`,`id_usuario`);

--
-- Indices de la tabla `distribuidor`
--
ALTER TABLE `distribuidor`
  ADD PRIMARY KEY (`id_creador`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_imagen`),
  ADD KEY `id_cerveza` (`id_cerveza`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cerveza`
--
ALTER TABLE `cerveza`
  MODIFY `id_cerveza` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `distribuidor`
--
ALTER TABLE `distribuidor`
  MODIFY `id_creador` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cerveza`
--
ALTER TABLE `cerveza`
  ADD CONSTRAINT `cerveza_ibfk_1` FOREIGN KEY (`id_creador`) REFERENCES `distribuidor` (`id_creador`) ON DELETE CASCADE;

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_cerveza`) REFERENCES `cerveza` (`id_cerveza`);

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `imagen_ibfk_1` FOREIGN KEY (`id_cerveza`) REFERENCES `cerveza` (`id_cerveza`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
