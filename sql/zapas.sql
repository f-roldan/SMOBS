-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-01-2020 a las 22:39:11
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `zapas`
--
CREATE DATABASE IF NOT EXISTS `zapas` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `zapas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colores`
--

CREATE TABLE `colores` (
  `id_color` int(11) NOT NULL,
  `color` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `colores`
--

INSERT INTO `colores` (`id_color`, `color`) VALUES
(1, 'Negro'),
(2, 'Blanco'),
(3, 'Gris'),
(4, 'Marron'),
(5, 'Azul');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallesventa`
--

CREATE TABLE `detallesventa` (
  `id_detalle` int(11) NOT NULL,
  `id_zapa` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio_venta` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadosventa`
--

CREATE TABLE `estadosventa` (
  `id_estado_venta` int(11) NOT NULL,
  `estado_venta` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formaspago`
--

CREATE TABLE `formaspago` (
  `id_pago` int(11) NOT NULL,
  `forma_pago` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id_marca` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_marca`, `nombre`) VALUES
(1, 'Puma'),
(2, 'Adidas'),
(3, 'Nike'),
(4, 'Newport'),
(5, 'Diadora'),
(6, 'Sybilla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talles`
--

CREATE TABLE `talles` (
  `id_talle` int(11) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `talles`
--

INSERT INTO `talles` (`id_talle`, `numero`) VALUES
(36, 36),
(37, 37),
(38, 38),
(39, 39),
(40, 40),
(41, 41);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `nombre_completo` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `nombre_completo`, `email`, `pass`, `id_rol`) VALUES
(1, 'Tomas Diaz', 'tomas@mail.com', '$2y$10$z5UIeuM8LKzz55oxST98TuXCajtEANlaJEztwy/RgqZSfVoxt4HTK', 2),
(3, 'Marcos Paz', 'marcos@zapas.com', '$2y$10$eE.2b.7AuGJ8CgjBG5cUBeLL2xjsujd055ECOl3zZyifDxpmluYUm', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `fecha_hora_venta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_detalle` int(11) NOT NULL,
  `monto_total` float DEFAULT NULL,
  `id_pago` int(11) NOT NULL,
  `id_estado_venta` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zapatillas`
--

CREATE TABLE `zapatillas` (
  `id_zapa` int(11) NOT NULL,
  `modelo` varchar(255) DEFAULT NULL,
  `cantidad_stock` int(11) DEFAULT NULL,
  `id_color` int(11) NOT NULL,
  `id_talle` int(11) NOT NULL,
  `precio_unit` float DEFAULT NULL,
  `id_marca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `zapatillas`
--

INSERT INTO `zapatillas` (`id_zapa`, `modelo`, `cantidad_stock`, `id_color`, `id_talle`, `precio_unit`, `id_marca`) VALUES
(1, 'Vikky Stck mujer', 10, 1, 36, 4299, 1),
(2, 'Grand Court Hombre', 10, 1, 37, 4199, 2),
(3, 'Game Hombre', 10, 3, 38, 2599, 5),
(4, 'Masiv Hombre', 10, 4, 39, 2499, 4),
(5, 'Teresa Mujer', 10, 2, 40, 2499, 6),
(6, 'Stone Hombre', 10, 5, 41, 2399, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zapaxcolor`
--

CREATE TABLE `zapaxcolor` (
  `id_color` int(11) NOT NULL,
  `id_zapa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zapaxtalle`
--

CREATE TABLE `zapaxtalle` (
  `id_talle` int(11) NOT NULL,
  `id_zapa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `colores`
--
ALTER TABLE `colores`
  ADD PRIMARY KEY (`id_color`);

--
-- Indices de la tabla `detallesventa`
--
ALTER TABLE `detallesventa`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `id_zapa` (`id_zapa`);

--
-- Indices de la tabla `estadosventa`
--
ALTER TABLE `estadosventa`
  ADD PRIMARY KEY (`id_estado_venta`);

--
-- Indices de la tabla `formaspago`
--
ALTER TABLE `formaspago`
  ADD PRIMARY KEY (`id_pago`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `talles`
--
ALTER TABLE `talles`
  ADD PRIMARY KEY (`id_talle`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_detalle` (`id_detalle`),
  ADD KEY `id_pago` (`id_pago`),
  ADD KEY `id_estado_venta` (`id_estado_venta`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `zapatillas`
--
ALTER TABLE `zapatillas`
  ADD PRIMARY KEY (`id_zapa`),
  ADD KEY `id_color` (`id_color`),
  ADD KEY `id_talle` (`id_talle`),
  ADD KEY `id_marca` (`id_marca`);

--
-- Indices de la tabla `zapaxcolor`
--
ALTER TABLE `zapaxcolor`
  ADD KEY `id_color` (`id_color`),
  ADD KEY `id_zapa` (`id_zapa`);

--
-- Indices de la tabla `zapaxtalle`
--
ALTER TABLE `zapaxtalle`
  ADD KEY `id_talle` (`id_talle`),
  ADD KEY `id_zapa` (`id_zapa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `colores`
--
ALTER TABLE `colores`
  MODIFY `id_color` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `detallesventa`
--
ALTER TABLE `detallesventa`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estadosventa`
--
ALTER TABLE `estadosventa`
  MODIFY `id_estado_venta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `formaspago`
--
ALTER TABLE `formaspago`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `talles`
--
ALTER TABLE `talles`
  MODIFY `id_talle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `zapatillas`
--
ALTER TABLE `zapatillas`
  MODIFY `id_zapa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallesventa`
--
ALTER TABLE `detallesventa`
  ADD CONSTRAINT `detallesventa_ibfk_1` FOREIGN KEY (`id_zapa`) REFERENCES `zapatillas` (`id_zapa`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`id_detalle`) REFERENCES `detallesventa` (`id_detalle`),
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`id_pago`) REFERENCES `formaspago` (`id_pago`),
  ADD CONSTRAINT `ventas_ibfk_3` FOREIGN KEY (`id_estado_venta`) REFERENCES `estadosventa` (`id_estado_venta`),
  ADD CONSTRAINT `ventas_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`);

--
-- Filtros para la tabla `zapatillas`
--
ALTER TABLE `zapatillas`
  ADD CONSTRAINT `zapatillas_ibfk_1` FOREIGN KEY (`id_color`) REFERENCES `colores` (`id_color`),
  ADD CONSTRAINT `zapatillas_ibfk_2` FOREIGN KEY (`id_talle`) REFERENCES `talles` (`id_talle`),
  ADD CONSTRAINT `zapatillas_ibfk_3` FOREIGN KEY (`id_marca`) REFERENCES `marcas` (`id_marca`);

--
-- Filtros para la tabla `zapaxcolor`
--
ALTER TABLE `zapaxcolor`
  ADD CONSTRAINT `zapaxcolor_ibfk_1` FOREIGN KEY (`id_color`) REFERENCES `colores` (`id_color`),
  ADD CONSTRAINT `zapaxcolor_ibfk_2` FOREIGN KEY (`id_zapa`) REFERENCES `zapatillas` (`id_zapa`);

--
-- Filtros para la tabla `zapaxtalle`
--
ALTER TABLE `zapaxtalle`
  ADD CONSTRAINT `zapaxtalle_ibfk_1` FOREIGN KEY (`id_talle`) REFERENCES `talles` (`id_talle`),
  ADD CONSTRAINT `zapaxtalle_ibfk_2` FOREIGN KEY (`id_zapa`) REFERENCES `zapatillas` (`id_zapa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
