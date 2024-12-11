-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2024 a las 05:25:25
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
-- Base de datos: `as_constructores`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_proyectos_materiales`
--

CREATE TABLE `detalle_proyectos_materiales` (
  `ID_Detalle` int(11) NOT NULL,
  `ID_Proyecto` int(11) DEFAULT NULL,
  `ID_Material` int(11) DEFAULT NULL,
  `Cantidad_Utilizada` int(11) NOT NULL,
  `Fecha_Asignación` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalle_proyectos_materiales`
--

INSERT INTO `detalle_proyectos_materiales` (`ID_Detalle`, `ID_Proyecto`, `ID_Material`, `Cantidad_Utilizada`, `Fecha_Asignación`) VALUES
(1, 1, 1, 50, '2024-01-20'),
(2, 2, 2, 10, '2023-06-15'),
(3, 3, 3, 500, '2023-03-05'),
(4, 4, 4, 100, '2024-02-10'),
(5, 5, 5, 20, '2024-05-15'),
(6, 6, 6, 15, '2024-03-10'),
(7, 7, 7, 50, '2023-11-15'),
(8, 8, 8, 20, '2023-08-20'),
(9, 9, 9, 25, '2024-01-25'),
(10, 10, 10, 30, '2023-09-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `cargo` varchar(50) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `proyecto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `apellido`, `cargo`, `telefono`, `email`, `proyecto`) VALUES
(16, 'Santos Ivan', 'Abril Rodríguez', 'administrador', '3133705012', 'santos.abril@uptc.edu.co', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `herramientas`
--

CREATE TABLE `herramientas` (
  `ID_Herramienta` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Descripción` text DEFAULT NULL,
  `Cantidad_Disponible` int(11) NOT NULL,
  `Estado` enum('Funcional','En reparación','Fuera de uso') DEFAULT 'Funcional'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `herramientas`
--

INSERT INTO `herramientas` (`ID_Herramienta`, `Nombre`, `Descripción`, `Cantidad_Disponible`, `Estado`) VALUES
(1, 'Taladro', 'Taladro eléctrico portátil', 15, 'Funcional'),
(2, 'Martillo', 'Martillo de construcción estándar', 50, 'Funcional'),
(3, 'Llave Inglesa', 'Llave ajustable de acero', 30, 'Funcional'),
(4, 'Sierra Circular', 'Sierra eléctrica para madera', 10, 'Funcional'),
(5, 'Cortadora de Cerámica', 'Cortadora manual de cerámica', 8, 'Funcional'),
(6, 'Compresor de Aire', 'Compresor portátil de 100 psi', 5, 'En reparación'),
(7, 'Nivel Láser', 'Nivel con precisión láser', 12, 'Funcional'),
(8, 'Andamios', 'Sistema de andamios metálicos', 25, 'Funcional'),
(9, 'Esmeril Angular', 'Esmeril angular para metal', 20, 'Funcional'),
(10, 'Pistola de Pintura', 'Pistola para pintar paredes', 7, 'En reparación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE `materiales` (
  `ID_Material` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Descripción` text DEFAULT NULL,
  `Cantidad_Actual` int(11) NOT NULL,
  `Unidad_Medida` varchar(50) NOT NULL,
  `Precio_Unitario` decimal(10,2) NOT NULL,
  `ID_Proveedor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `materiales`
--

INSERT INTO `materiales` (`ID_Material`, `Nombre`, `Descripción`, `Cantidad_Actual`, `Unidad_Medida`, `Precio_Unitario`, `ID_Proveedor`) VALUES
(1, 'Cemento Gris', 'Bulto de 50kg de cemento gris tipo I', 200, 'Bultos', 35000.00, 1),
(2, 'Arena Fina', 'Metro cúbico de arena fina para mezclas', 50, 'Metros cúbicos', 45000.00, 2),
(3, 'Ladrillo Rojo', 'Ladrillo macizo para construcción', 1000, 'Unidades', 700.00, 3),
(4, 'Varilla de Hierro', 'Varilla de acero corrugado de 12mm', 300, 'Unidades', 15000.00, 4),
(5, 'Pintura Blanca', 'Galón de pintura blanca mate', 100, 'Galones', 60000.00, 6),
(6, 'Yeso', 'Saco de 40kg de yeso industrial', 80, 'Sacos', 25000.00, 5),
(7, 'Tejas Eternit', 'Teja ondulada de 1.83m', 200, 'Unidades', 12000.00, 7),
(8, 'Grava', 'Metro cúbico de grava para concreto', 40, 'Metros cúbicos', 50000.00, 8),
(9, 'Adhesivo Cerámico', 'Saco de 25kg para instalación de cerámica', 120, 'Sacos', 28000.00, 9),
(10, 'Madera Pino', 'Tablón de madera pino de 2x4 pulgadas', 50, 'Unidades', 35000.00, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `ID_Proveedor` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Contacto` varchar(100) DEFAULT NULL,
  `Dirección` text DEFAULT NULL,
  `Teléfono` varchar(20) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`ID_Proveedor`, `Nombre`, `Contacto`, `Dirección`, `Teléfono`, `Email`) VALUES
(1, 'Materiales Tunja SAS', 'Carlos López', 'Carrera 10 #15-20, Tunja', '3104567890', 'contacto@tunjasas.com'),
(2, 'Ferretería Duitama', 'Ana María Pérez', 'Calle 20 #8-15, Duitama', '3117896543', 'ventas@ferreteriaduitama.com'),
(3, 'Construcciones Sogamoso', 'Luis Rodríguez', 'Carrera 9 #5-10, Sogamoso', '3162345678', 'info@sogamoso.com'),
(4, 'Hierros Paipa', 'María Torres', 'Calle 12 #7-18, Paipa', '3129876543', 'ventas@hierrospaipa.com'),
(5, 'Cemento Boyacá', 'Jorge López', 'Avenida Principal #10-12, Tunja', '3154561234', 'info@cementoboyaca.com'),
(6, 'Pinturas Tunja Color', 'Claudia Ramírez', 'Calle 45 #20-30, Tunja', '3176543210', 'claudia@tunja-color.com'),
(7, 'Ladrillos Nobsa', 'Andrés Martínez', 'Carrera 3 #15-45, Nobsa', '3187654321', 'contacto@nobsa.com'),
(8, 'Agregados Belén', 'Diana Ríos', 'Calle 1 #2-3, Belén', '3149876543', 'info@agregadosbelen.com'),
(9, 'Construcciones Villa de Leyva', 'Javier Sánchez', 'Avenida Central #9-10, Villa de Leyva', '3198765432', 'ventas@villadeleyva.com'),
(10, 'Acero y Herramientas Sogamoso', 'Gloria Moreno', 'Carrera 7 #40-50, Sogamoso', '3112345678', 'info@sogamoso.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `ID_Proyecto` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Descripción` text DEFAULT NULL,
  `Dirección` text DEFAULT NULL,
  `Fecha_Inicio` date DEFAULT NULL,
  `Fecha_Fin` date DEFAULT NULL,
  `Estado` enum('En progreso','Completado','Suspendido') DEFAULT 'En progreso'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`ID_Proyecto`, `Nombre`, `Descripción`, `Dirección`, `Fecha_Inicio`, `Fecha_Fin`, `Estado`) VALUES
(1, 'Edificio Altos de Tunja', 'Construcción de un edificio de 10 pisos', 'Carrera 8 #12-34, Tunja', '2024-01-15', '2025-12-20', 'En progreso'),
(2, 'Urbanización Las Acacias', 'Proyecto de 50 casas', 'Calle 50 #20-30, Duitama', '2023-06-01', '2024-06-30', 'En progreso'),
(3, 'Centro Comercial El Nogal', 'Centro comercial con 200 locales', 'Avenida 10 #20-40, Sogamoso', '2023-03-01', '2024-09-15', 'En progreso'),
(4, 'Parque Industrial Boyacá', 'Construcción de bodegas industriales', 'Carrera 15 #45-67, Paipa', '2024-02-01', '2025-08-30', 'En progreso'),
(5, 'Torre Empresarial Tunja', 'Edificio de oficinas de 15 pisos', 'Carrera 7 #10-20, Tunja', '2024-05-01', '2025-12-31', 'En progreso'),
(6, 'Conjunto Residencial La Pradera', 'Conjunto cerrado de 30 apartamentos', 'Calle 30 #15-25, Belén', '2024-03-01', '2025-03-15', 'En progreso'),
(7, 'Hospital Regional Villa de Leyva', 'Ampliación del hospital central', 'Avenida Central #30-40, Villa de Leyva', '2023-11-01', '2024-12-01', 'En progreso'),
(8, 'Colegio Los Libertadores', 'Construcción de aulas y laboratorios', 'Carrera 20 #50-60, Duitama', '2023-08-01', '2024-06-30', 'En progreso'),
(9, 'Puente Vehicular Nobsa', 'Puente de 200 metros', 'Calle 10 #5-15, Nobsa', '2024-01-15', '2024-12-31', 'En progreso'),
(10, 'Terminal de Transportes Sogamoso', 'Terminal para transporte público', 'Carrera 5 #20-25, Sogamoso', '2023-09-01', '2024-10-01', 'En progreso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `contrasena`, `fecha_registro`) VALUES
(1, 'Alvaro Pineda', 'alvaro.pineda@uptc.edu.co', '$2y$10$FU39e60Gh.z5igONS7xFiOvu3.LLEMGL4usnNJ2zFA7TTNWLPvLdG', '2024-12-10 21:13:29'),
(2, 'Julian Becerra', 'JuliBece@gmail.com', '$2y$10$H4FcetTQkWMBNzfz7eV4NelNDGCIo8alM1hXtL9SlRNiW0VMCM6Em', '2024-12-11 04:07:35');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalle_proyectos_materiales`
--
ALTER TABLE `detalle_proyectos_materiales`
  ADD PRIMARY KEY (`ID_Detalle`),
  ADD KEY `ID_Proyecto` (`ID_Proyecto`),
  ADD KEY `ID_Material` (`ID_Material`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Proyecto_Asignado` (`proyecto`);

--
-- Indices de la tabla `herramientas`
--
ALTER TABLE `herramientas`
  ADD PRIMARY KEY (`ID_Herramienta`);

--
-- Indices de la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD PRIMARY KEY (`ID_Material`),
  ADD KEY `ID_Proveedor` (`ID_Proveedor`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`ID_Proveedor`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`ID_Proyecto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalle_proyectos_materiales`
--
ALTER TABLE `detalle_proyectos_materiales`
  MODIFY `ID_Detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `herramientas`
--
ALTER TABLE `herramientas`
  MODIFY `ID_Herramienta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `materiales`
--
ALTER TABLE `materiales`
  MODIFY `ID_Material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `ID_Proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `ID_Proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_proyectos_materiales`
--
ALTER TABLE `detalle_proyectos_materiales`
  ADD CONSTRAINT `detalle_proyectos_materiales_ibfk_1` FOREIGN KEY (`ID_Proyecto`) REFERENCES `proyectos` (`ID_Proyecto`) ON DELETE CASCADE,
  ADD CONSTRAINT `detalle_proyectos_materiales_ibfk_2` FOREIGN KEY (`ID_Material`) REFERENCES `materiales` (`ID_Material`) ON DELETE CASCADE;

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`proyecto`) REFERENCES `proyectos` (`ID_Proyecto`) ON DELETE SET NULL;

--
-- Filtros para la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD CONSTRAINT `materiales_ibfk_1` FOREIGN KEY (`ID_Proveedor`) REFERENCES `proveedores` (`ID_Proveedor`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
