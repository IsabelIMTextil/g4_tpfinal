-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2023 a las 14:39:57
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `oradores_textiles`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oradores`
--

CREATE TABLE `oradores` (
  `id_orador` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `tema` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `oradores`
--

INSERT INTO `oradores` (`id_orador`, `nombre`, `apellido`, `mail`, `telefono`, `tema`) VALUES
(1, 'María del Carmen', 'Toribio', 'mct@gmail.com', '112589475', 'De Ing. Juárez, Formosa. Charla sobre el Arte Textil Ancestral con la fibra del chaguar y difusión de su cultura.'),
(2, 'Ermelinda', 'Painequeo', 'erpaine@gmail.com', '11258741', 'De Trelew, Chubut. Charla sobre la cultura la cosmovisión y el tejido Mapuche.'),
(3, 'Jesús', 'Casimiro', 'jesus@gmail.com', '11256987', 'De Luracatao, Salta. Charla sobre el Arte Textil de los Valles Calchaquíes y la cultura Diaguita.'),
(4, 'Mario', 'Vucetich', 'mariov@gmail.com', '11254785', 'De Buenos Aires. El tejido urbano, técnica en telar de cuadros.'),
(5, 'Jorge', 'Marí', 'jmari@gmail.com', '12545632', 'De Buenos Aires. Charla sobre textiles de uso tradicional en Iberoamérica: el poncho mapuche.'),
(6, 'Dardo', 'Gonza', 'dardog@gmail.com', '125652147', 'De Salta. Charla sobre el poncho salteño, estructura del tejido en el telar criollo.'),
(7, 'Margarita', 'Ariza', 'marari@gmail.com', '2114569845', 'El Cercado, Tucumán. Charla sobre la Randa Tucumana, tejido con aguja.'),
(8, 'Leónidas', 'Silva', 'leoduti@gmail.com', '256211478', 'De Buenos Aires. Charla sobre el Ñandutí, la técnica y su origen.'),
(9, 'Sonia', 'Vera', 'svera@gmail.com', '55412365', 'De Buenos Aires. Hilado de fibras naturales. Las diversas fibras vegetales, sus orígenes y tratamiento.'),
(10, 'María', 'Cicchitti', 'mcicchitti@gmail.com', '112354852', 'De Luján de Cuyo, Mendoza. Charla sobre el tejido con personas de la comunidad Huarpe.'),
(13, 'alejandro', 'zapata', 'elprofe@lalala.com', '03034567', 'lañaalalla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(8) NOT NULL,
  `clave` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `clave`) VALUES
('admin', 'adminroot');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `oradores`
--
ALTER TABLE `oradores`
  ADD PRIMARY KEY (`id_orador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `oradores`
--
ALTER TABLE `oradores`
  MODIFY `id_orador` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
