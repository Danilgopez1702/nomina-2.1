-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2022 a las 23:33:31
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nomis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id_asistencia` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `fecha_asistencia` date NOT NULL,
  `hora_asistencia` time NOT NULL,
  `status_asistencia` int(11) NOT NULL,
  `comentario_asistencia` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id_departamento` int(11) NOT NULL,
  `nombre_departamento` varchar(99) NOT NULL,
  `horario_departamento` varchar(99) NOT NULL,
  `turno_departamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `dni` int(11) NOT NULL,
  `id_empleado` varchar(99) NOT NULL,
  `no_cuenta` varchar(99) NOT NULL,
  `banco` varchar(99) NOT NULL,
  `nombre_empleado` varchar(99) NOT NULL,
  `apellido_paterno` varchar(99) NOT NULL,
  `apellido_materno` varchar(99) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `sueldo_mensual` double NOT NULL,
  `sueldo_diario` double NOT NULL,
  `nombre_departamento` varchar(99) NOT NULL,
  `frecuencia_pago` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `foto` varchar(99) NOT NULL,
  `fecha_baja` date DEFAULT NULL,
  `motivo_baja` varchar(99) DEFAULT NULL,
  `vacaciones` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`dni`, `id_empleado`, `no_cuenta`, `banco`, `nombre_empleado`, `apellido_paterno`, `apellido_materno`, `fecha_ingreso`, `sueldo_mensual`, `sueldo_diario`, `nombre_departamento`, `frecuencia_pago`, `status`, `foto`, `fecha_baja`, `motivo_baja`, `vacaciones`) VALUES
(1, '00000000045', '000000001146188601', '071', 'DANIEL GUSTAVO', 'GUERRERO', ' 	LOPEZ', '2021-03-10', 15000, 493.42105263158, 'SISTEMAS', 14, 1, 'imagenes/0000000045A.jpg', NULL, NULL, '6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `id_[restamo` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `fecha_prestamo` date NOT NULL,
  `monto_prestamo` varchar(99) NOT NULL,
  `comentario_prestamo` varchar(99) NOT NULL,
  `plazo_prestamo` int(11) NOT NULL,
  `plazo_actual_prestamo` int(11) NOT NULL,
  `status_prestamo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(99) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(99) NOT NULL,
  `pass` varchar(99) NOT NULL,
  `rol` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `id_usuario`, `nombre`, `pass`, `rol`) VALUES
(1, 1, 'Carlos', '19851985', '1'),
(13, 2, 'Sistemas', '123', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacaciones`
--

CREATE TABLE `vacaciones` (
  `id_vacaciones` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `fecha_vacaciones` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id_asistencia`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`dni`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`id_[restamo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vacaciones`
--
ALTER TABLE `vacaciones`
  ADD PRIMARY KEY (`id_vacaciones`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id_asistencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `dni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `id_[restamo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `vacaciones`
--
ALTER TABLE `vacaciones`
  MODIFY `id_vacaciones` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
