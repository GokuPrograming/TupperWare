-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2024 a las 06:39:56
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tupperware`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id_carrito` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id_carrito`, `cantidad`, `id_producto`, `id_usuario`) VALUES
(27, 1, 23, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `categoria` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `categoria`) VALUES
(1, 'Toperes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre_completo` varchar(50) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre_completo`, `fecha_nacimiento`, `id_usuario`) VALUES
(1, 'Juan Perez', '1985-05-15', 1),
(2, 'Maria Garcia', '1990-08-22', 2),
(3, 'Pedro Lopez', '1978-01-10', 3),
(4, 'Ana Martinez', '1982-03-18', 4),
(5, 'Luis Fernandez', '1989-06-25', 5),
(6, 'Sofia Rodriguez', '1995-12-02', 6),
(7, 'Carlos Sanchez', '1984-11-30', 7),
(8, 'Laura Gonzalez', '1987-09-15', 8),
(9, 'Jorge Diaz', '1992-07-22', 9),
(10, 'Patricia Ramos', '1975-04-10', 10),
(11, 'Fernando Romero', '1981-05-20', 11),
(12, 'Valeria Gomez', '1988-02-14', 12),
(13, 'Diego Morales', '1993-03-28', 13),
(14, 'Carla Vargas', '1991-08-19', 14),
(15, 'Andres Torres', '1986-10-30', 15),
(16, 'Diana Mendez', '1994-12-05', 16),
(17, 'Julio Castillo', '1979-06-07', 17),
(18, 'Alejandra Ruiz', '1990-04-21', 18),
(19, 'Ricardo Ortiz', '1983-11-11', 19),
(20, 'Marta Silva', '1985-09-09', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `producto` varchar(200) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `almacen` int(11) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `id_proveedor` int(11) DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `descripcion` varchar(6000) DEFAULT 'descripcion del prodjcto',
  `imagen2` varchar(50) DEFAULT NULL,
  `imagen3` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `producto`, `precio`, `almacen`, `id_categoria`, `id_proveedor`, `imagen`, `descripcion`, `imagen2`, `imagen3`) VALUES
(23, 'Tupper rojo muy rojo color rojito', 22222, 212, 1, 1, '1.webp', 'Es un toper rojo jejej salu2', '2.jpg', '3.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `proveedor` varchar(100) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `proveedor`, `tel`) VALUES
(1, 'TopperWere', '555-1234'),
(2, 'Proveedor2', '555-5678'),
(3, 'Proveedor3', '555-9012'),
(4, 'Proveedor4', '555-3456'),
(5, 'Proveedor5', '555-7890'),
(6, 'Proveedor6', '555-1123'),
(7, 'Proveedor7', '555-4567'),
(8, 'Proveedor8', '555-8910'),
(9, 'Proveedor9', '555-1235'),
(10, 'Proveedor10', '555-6789'),
(11, 'Proveedor11', '555-0123'),
(12, 'Proveedor12', '555-4560'),
(13, 'Proveedor13', '555-7891'),
(14, 'Proveedor14', '555-2345'),
(15, 'Proveedor15', '555-6781'),
(16, 'Proveedor16', '555-8901'),
(17, 'Proveedor17', '555-3450'),
(18, 'Proveedor18', '555-7892'),
(19, 'Proveedor19', '555-4561'),
(20, 'Proveedor20', '555-6782');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(20) DEFAULT NULL,
  `descripcion` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `rol`, `descripcion`) VALUES
(1, 'Administrador', 'Administrador del sistema'),
(2, 'Cliente', 'Cliente del sistema'),
(3, 'Vendedor', 'Vendedor de productos'),
(4, 'Gerente', 'Gerente de la tienda'),
(5, 'Cajero', 'Encargado de caja'),
(6, 'Soporte', 'Soporte técnico'),
(7, 'Supervisor', 'Supervisor de ventas'),
(8, 'Analista', 'Analista de datos'),
(9, 'Desarrollador', 'Desarrollador de software'),
(10, 'Tester', 'Encargado de pruebas'),
(11, 'Contador', 'Encargado de finanzas'),
(12, 'Logística', 'Encargado de logística'),
(13, 'Marketing', 'Encargado de marketing'),
(14, 'Recursos Humanos', 'Encargado de RRHH'),
(15, 'Consultor', 'Consultor externo'),
(16, 'Técnico', 'Técnico de reparaciones'),
(17, 'Diseñador', 'Diseñador gráfico'),
(18, 'Redactor', 'Redactor de contenido'),
(19, 'Editor', 'Editor de contenido'),
(20, 'Community Manager', 'Gestor de redes sociales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `password` varchar(18) NOT NULL,
  `id_rol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `correo`, `password`, `id_rol`) VALUES
(1, 'juan.perez@example.com', 'password123', 1),
(2, 'maria.garcia@example.com', 'password456', 2),
(3, 'pedro.lopez@example.com', 'password789', 3),
(4, 'ana.martinez@example.com', 'password012', 4),
(5, 'luis.fernandez@example.com', 'password345', 5),
(6, 'sofia.rodriguez@example.com', 'password678', 6),
(7, 'carlos.sanchez@example.com', 'password901', 7),
(8, 'laura.gonzalez@example.com', 'password234', 8),
(9, 'jorge.diaz@example.com', 'password567', 9),
(10, 'patricia.ramos@example.com', 'password890', 10),
(11, 'fernando.romero@example.com', 'password1234', 11),
(12, 'valeria.gomez@example.com', 'password5678', 12),
(13, 'diego.morales@example.com', 'password9101', 13),
(14, 'carla.vargas@example.com', 'password1123', 14),
(15, 'andres.torres@example.com', 'password1456', 15),
(16, 'diana.mendez@example.com', 'password1789', 16),
(17, 'julio.castillo@example.com', 'password2012', 17),
(18, 'alejandra.ruiz@example.com', 'password2345', 18),
(19, 'ricardo.ortiz@example.com', 'password2678', 19),
(20, 'marta.silva@example.com', 'password2901', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `total_venta` double DEFAULT NULL,
  `fecha_venta` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_detalle`
--

CREATE TABLE `venta_detalle` (
  `id_venta_detalle` int(11) NOT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `subtotal` double DEFAULT NULL,
  `precio_unitario` double DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_venta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id_carrito`),
  ADD KEY `carrito_producto_fk` (`id_producto`),
  ADD KEY `carrito_usuario_fk` (`id_usuario`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `cliente_usuario_fk` (`id_usuario`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `producto_categoria_fk` (`id_categoria`),
  ADD KEY `producto_proveedor_fk` (`id_proveedor`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `usuario_rol_fk` (`id_rol`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`);

--
-- Indices de la tabla `venta_detalle`
--
ALTER TABLE `venta_detalle`
  ADD PRIMARY KEY (`id_venta_detalle`),
  ADD KEY `venta_producto_fk` (`id_producto`),
  ADD KEY `venta_usuario_fk` (`id_usuario`),
  ADD KEY `ventad_venta_fk` (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id_carrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `venta_detalle`
--
ALTER TABLE `venta_detalle`
  MODIFY `id_venta_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_producto_fk` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`),
  ADD CONSTRAINT `carrito_usuario_fk` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_usuario_fk` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_categoria_fk` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`),
  ADD CONSTRAINT `producto_proveedor_fk` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_rol_fk` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`);

--
-- Filtros para la tabla `venta_detalle`
--
ALTER TABLE `venta_detalle`
  ADD CONSTRAINT `venta_producto_fk` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`),
  ADD CONSTRAINT `venta_usuario_fk` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `ventad_venta_fk` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`id_venta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
