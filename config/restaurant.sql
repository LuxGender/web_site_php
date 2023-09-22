-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-09-2023 a las 08:52:14
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `restaurant`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(50) NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`, `descripcion`) VALUES
(1, 'Hamburguesa', 'Todo tipo de hamburguesas'),
(2, 'Comida típica', 'Todo tipo de comida típica guatemalteca'),
(3, 'Comida china', ' Pollo agridulce, dim sum, arroz frito, rollitos primavera, pato pekín.'),
(4, 'Comida Mexicana', 'Tacos, burritos, enchiladas, guacamole, nachos.'),
(5, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `nit` int(15) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `gmail` varchar(40) NOT NULL,
  `contrasena_us` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `apellido`, `nit`, `telefono`, `gmail`, `contrasena_us`) VALUES
(1, '', '', 0, '', '', ''),
(2, 'Felipe', 'esteban', 232323, '20232302', 'feli@gmail.com', 'abcdefe12'),
(3, 'Felipe', 'garcia', 232323, '232323', 'felipegarcias@gmail.com', 'tnt123'),
(4, 'juan', 'antonio', 232323, '20232302', 'antonio@gmail.com', 'antonio12'),
(5, 'Felipe', 'esteban', 232323, '20232302', 'antonio@gmail.com', 'abcdefg'),
(6, 'Felipe', 'esteban', 232323, '20232302', 'feli@gmail.com', 'abcd123'),
(7, 'Felipe', 'esteban', 232323, '20232302', 'feli@gmail.com', 'abc123'),
(8, 'Felipe', 'esteban', 232323, '20232302', 'feli@gmail.com', 'abcdef123'),
(9, 'Felipe', 'esteban', 232323, '20232302', 'feli@gmail.com', 'abcdefgh'),
(10, 'Felipe', 'esteban', 232323, '20232302', 'feli@gmail.com', 'abcdefgh'),
(11, 'Felipe', 'esteban', 232323, '20232302', 'feli@gmail.com', 'abcd'),
(12, '', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nombre_menu` varchar(50) NOT NULL,
  `precio` varchar(123) NOT NULL,
  `descripcion` text NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(50) NOT NULL,
  `img_menu` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id_menu`, `nombre_menu`, `precio`, `descripcion`, `id_categoria`, `nombre_categoria`, `img_menu`) VALUES
(1, 'Pepian', '45', 'acompañado de 3 guarniciones', 2, 'Comida típica', 0x766965775c696d67363466643539376363666133335f50657069616e2d64652d506f6c6c6f2e6a7067),
(2, 'Hamburguesa Vegetariana de Portobello', '65', 'Una opción perfecta para los amantes de las hamburguesas que prefieren una alternativa vegetariana. Nuestra hamburguesa de Portobello presenta un gran hongo Portobello a la parrilla como protagonista. El hongo se marina en una mezcla de aceite de oliva, ajo y hierbas antes de asarse a la parrilla, lo que le da un sabor profundo y ahumado. Se sirve en un pan integral con espinacas frescas, tomate, cebolla caramelizada y una generosa porción de queso de cabra. Acompañada de batatas fritas crujientes y una mayonesa de aguacate.', 1, 'Hamburguesa', 0x766965775c696d67363466643635383039636132365f616d62757267756573612e706e67),
(3, 'Filete', '90', 'acompañado de 2 guarniciones', 2, 'Comida típica', 0x766965775c696d67363466643635653561303432305f66696c6574652e6a7067);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
