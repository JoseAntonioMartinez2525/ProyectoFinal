-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2020 a las 19:07:41
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `movies`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `name`, `email`, `password`, `status`, `created_at`, `rol`) VALUES
(1, 'Jose Antonio Martinez', 'jose123', '12345', 'active', '2020-12-05 13:10:44', 1),
(3, 'Carlos Lopez', 'carlosllogu@gmail.com', 'b37d98442fc877a9219c401216b9257782043c2e', 'active', '2020-12-05 15:20:44', 0),
(5, 'leilany jimenez', 'lele@outlook.com', '269847da03aab5baafd903b552a3881ba03f044d', 'active', '2020-12-05 16:00:44', 0),
(7, 'juan Carlos Bordeau', 'jc@gmail.com', '268010345ded6c6a1c469820422d332f3975bb87', 'active', '2020-12-05 16:50:44', 0),
(8, 'Daniela Palos', 'dani_20@gmail.com', '78b6ac88865a00146d00b93fc81e1554eb36b56b', 'active', '2020-12-06 16:49:59', 0),
(9, 'Rodrigo Meza', 'ro_25@uabcs.mx', 'cf67549357f8f36287b6c8cc04497f4071b32e5f', 'active', '2020-12-06 17:10:01', 0),
(10, 'Karla Navarro', 'kar60@gmail', '269847da03aab5baafd903b552a3881ba03f044d', 'active', '2020-12-06 17:10:30', 0),
(11, 'yanira Achoy', 'achoycita@gmail.com', '6d1af8ee97e144d09e283011b0cc13cefa0f671e', 'active', '2020-12-06 18:26:06', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_cargo` (`rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
