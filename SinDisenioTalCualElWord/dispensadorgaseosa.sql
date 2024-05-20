-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2024 a las 05:10:35
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
-- Base de datos: `dispensadorgaseosa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gaseosa`
--

CREATE TABLE `gaseosa` (
  `gas_id` int(11) NOT NULL,
  `gas_codigoBarras` varchar(50) NOT NULL,
  `gas_marca` varchar(100) NOT NULL,
  `gas_nombre` varchar(100) NOT NULL,
  `gas_precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `gaseosa`
--

INSERT INTO `gaseosa` (`gas_id`, `gas_codigoBarras`, `gas_marca`, `gas_nombre`, `gas_precio`) VALUES
(5, '1111222233335', 'Coca-Cola', 'Coca-Cola Light', 2.00),
(7, '3333444455557', 'Sprite', 'Sprite Limón', 1.80),
(8, '4444555566668', 'Fanta', 'Fanta de Uva', 2.20),
(11, '001', 'Pepsi', 'Pepsi Regular', 1.50),
(12, '002', 'Pepsi', 'Pepsi Light', 1.60),
(13, '003', 'Pepsi', 'Pepsi Max', 1.70),
(14, '004', 'Pepsi', 'Pepsi Twist', 1.80),
(15, '005', 'Pepsi', 'Pepsi Wild Cherry', 1.90),
(16, '006', '7UP', '7UP Regular', 1.50),
(17, '007', '7UP', '7UP Light', 1.60),
(18, '008', 'Mirinda', 'Mirinda Orange', 1.50),
(19, '009', 'Mirinda', 'Mirinda Apple', 1.60),
(20, '010', 'Mountain Dew', 'Mountain Dew Regular', 1.70);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gaseosa`
--
ALTER TABLE `gaseosa`
  ADD PRIMARY KEY (`gas_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gaseosa`
--
ALTER TABLE `gaseosa`
  MODIFY `gas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
