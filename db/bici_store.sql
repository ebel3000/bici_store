-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 20-11-2024 a las 19:21:24
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
-- Base de datos: `bici_store`
--
CREATE DATABASE IF NOT EXISTS `bici_store` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bici_store`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo`
--

CREATE TABLE `catalogo` (
  `id` int(11) NOT NULL,
  `marca_id` int(11) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `rodado` enum('16 - peques','20 - adolescentes','24 - adultos','28 - especial') NOT NULL,
  `color` varchar(20) NOT NULL,
  `bajada` text NOT NULL,
  `precio` varchar(20) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `destacado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `catalogo`
--

INSERT INTO `catalogo` (`id`, `marca_id`, `modelo`, `rodado`, `color`, `bajada`, `precio`, `imagen`, `destacado`) VALUES
(1, 1, 'Volta', '20 - adolescentes', 'Negro', 'Esta bicicleta es ideal para todo tipo de caminos, gracias a su sistema de cambios, sus cubiertas y su agilidad en el pedaleado.', '$279.000,-', 'bicistore_bici1.jpg', 1),
(2, 2, 'Amelie', '24 - adultos', 'Beige', 'Pasear por la ciudad es ideal con esta bicicleta, gracias a su sistema de cambios, sus cubiertas y su agilidad en el pedaleado.', '$259.000,-', 'bicistore_bici2.jpg', 0),
(3, 1, 'Hyper XR', '16 - peques', 'Rosa', 'Bicicleta ideal para aprender a andar! Super segura, con rueditas de máxima protección y seguridad garantizada. Perfecta para niñas entre 4 y 8 años!', '$99.000,-', 'bicistore_bici3.jpg', 1),
(4, 1, 'Flash', '28 - especial', 'Negro', 'Todo terreno profesional que nunca te abandona! Contiene accesorios, luces de emergencia y módulos para acompañante.', '$399.000,-', 'bicistore_bici4.jpg', 1),
(5, 1, 'Mint', '24 - adultos', 'Negro', 'Todo terreno solo para profesionales que buscan lo mejor, esta bicicleta nunca te abandona! Contiene accesorios, luces de emergencia y gps.', '$369.000,-', 'bicistore_bici5.jpg', 0),
(6, 3, 'Giani Max', '20 - adolescentes', 'Verde', 'Mountain bike profesional para deportes extremos, de categoría ISO9901 resistente a las más extremas condiciones!', '$189.000,-', 'bicistore_bici6.jpeg', 1),
(8, 2, 'RetroCity', '20 - adolescentes', 'Verde', 'Esta bicicleta de estilo retro cuenta con cambios XRR21, campana vintage de sonido envolvente y máximo confort.', '$89.000,-', 'bicistore_bici7.jpeg', 0),
(9, 1, 'ModernaTour', '20 - adolescentes', 'Negro', 'De estilo moderno pero con bases vintage, la bicicleta ModernaTour es tu gran compañera tanto en la ruta como en la ciudad, como en los más diversos ambientes.', '$229.000,-', 'bicistore_bici8.jpeg', 0),
(10, 2, 'Raw3000', '24 - adultos', 'Negro', 'Espectacular bicicleta modelo Raw3000 que soporta las más extremas condiciones ambientales. Cambios y accesorios Ford para máxima duración.', '$279.000,-', 'bicistore_bici9.jpg', 0),
(11, 3, 'Velocity Max', '24 - adultos', 'Negro', 'Este increíble modelo Velocity Max te ayudará en tu día a día tanto en la ciudad como en lugares más extremos.', '$239.000,-', 'bicistore_bici10.jpeg', 0),
(12, 1, 'Flash Super XXI', '24 - adultos', 'Amarillo', 'Modelo Flash Súper XXI te ofrece el mayor confort para lograr tus objetivos tanto en la ciudad como en la más diversa naturaleza', '$209.000,-', 'bicistore_bici11.jpg', 0),
(13, 1, 'Tern 101', '20 - adolescentes', 'Amarillo', 'Impresionante bicicleta urbano plegable modelo Xtreme400 que garantiza un rendimiento excepcional en cualquier terreno. Con accesorios de alta gama para una experiencia unica.', '$339.000,-', 'bicistore_bici12.jpg', 0),
(14, 2, 'Jamis 1XL', '20 - adolescentes', 'Azul', 'Sorprendente bicicleta diseñada para resistir las condiciones climáticas más adversas. Con cambios SRAM y componentes robustos para una durabilidad inigualable.', '$119.000,-', 'bicistore_bici13.jpg', 0),
(15, 1, 'All Terra', '24 - adultos', 'Azul', 'Extraordinaria bicicleta modelo Olmo que enfrenta con facilidad los terrenos más desafiantes. Incluye cambios y accesorios Bosch para una máxima eficiencia y resistencia.', '$319.000,-', 'bicistore_bici14.jpg', 0),
(16, 3, 'Rembrandt', '16 - peques', 'Amarillo', 'Diseñada para soportar los terrenos más difíciles para chicos. De máxima seguridad y accesorios de alta calidad, proporciona una durabilidad y rendimiento excepcionales.', '$139.000,-', 'bicistore_bici15.jpg', 0),
(17, 1, 'Stark', '20 - adolescentes', 'Rosa', 'Explora sin límites con la bicicleta Stark, preparada para las condiciones más desafiantes. Equipadas con cambios de precisión y accesorios Giant para una durabilidad máxima.', '$178.000,-', 'bicistore_bici16.jpg', 0),
(18, 2, 'Tern2ti', '20 - adolescentes', 'Negro', 'La bicicleta Tern2ti es perfecta para ciclistas que buscan superar cualquier obstáculo en la ciudad. Con cambios de alta gama y accesorios Cannondale, ofrece una durabilidad excepcional.', '$369.000,-', 'bicistore_bici17.jpg', 0),
(19, 1, 'XCR', '20 - adolescentes', 'Negro', 'Conquista cualquier camino con la bicicleta XCR, diseñada para soportar las condiciones más extremas. Sus cambios de alta precisión y accesorios Merida aseguran una experiencia de ciclismo', '$478.000,-', 'bicistore_bici18.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id`, `nombre`) VALUES
(1, 'Olmo'),
(2, 'Mazzi'),
(3, 'Lamborghini');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_marca` (`marca_id`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `catalogo`
--
ALTER TABLE `catalogo`
  ADD CONSTRAINT `fk_marca` FOREIGN KEY (`marca_id`) REFERENCES `marca` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
