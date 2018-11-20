-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-11-2018 a las 19:25:15
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `web_de_ventas`
--
CREATE DATABASE `web_de_ventas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `web_de_ventas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avisos`
--

CREATE TABLE IF NOT EXISTS `avisos` (
  `id_aviso` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `aviso` varchar(500) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  PRIMARY KEY (`id_aviso`),
  KEY `id_producto` (`id_producto`),
  KEY `id_cliente` (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_cliente` varchar(150) NOT NULL,
  `Apellido` varchar(150) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(32) NOT NULL,
  `e_mail` varchar(100) NOT NULL,
  `nro_telefono` varchar(15) NOT NULL,
  `tipo_usuario` varchar(15) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `Nombre_cliente`, `Apellido`, `usuario`, `contrasena`, `e_mail`, `nro_telefono`, `tipo_usuario`) VALUES
(1, '', '', '', '', '', '', ''),
(2, 'diego', 'vagas', 'dvargas', '', 'ddiego@gmail.com', '90040958', ''),
(3, 'lalete', 'niripil', 'lalux', '12354', 'lalitox@gmail.com', '123456', ''),
(4, 'lalicio', 'delbum', 'dvargas', 'a6bb4faacdff9dcdcb6f6e22bc51eac9', 'diegovargas@gmail.com', '945162712', ''),
(5, 'lalic', 'delbu', 'dvargas', 'a6bb4faacdff9dcdcb6f6e22bc51eac9', 'diegovargas@gmail.com', '945162712', ''),
(6, 'nat', 'nov', 'nat', '25f9e794323b453885f5181f1b624d0b', 'nnovoa2017@alu.uct.cl', '168296854', ''),
(7, 'macarena', 'gallardo', 'maraquis', '8642955a15967c74a3a871fdecd77a5a', 'maca.maraca@gmail.com', '987654323', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE IF NOT EXISTS `mascotas` (
  `id_cliente` int(11) NOT NULL,
  `id_mascota` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `raza` varchar(50) NOT NULL,
  `especie` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  PRIMARY KEY (`id_mascota`),
  KEY `id_cliente` (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `producto` varchar(50) NOT NULL,
  `precio` varchar(50) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `seccion` varchar(30) NOT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `producto`, `precio`, `cantidad`, `descripcion`, `seccion`) VALUES
(1, 'COLLAR LED PARA PERROS', '$ 2.310', 8, 'collar luminoso ideal para las salidas  nocturnas o carreteras ', 'PERROS'),
(2, 'POLERA ADIDOG', '$ 1.800', 10, 'Polera Adidog , exclusiva de marca \'ADIDAS\'', 'PERROS'),
(3, 'COLLAR ANTILADRIDO', '$3.000', 30, 'Collar antiladrido posee una descarga de energia que hara facil el control de tu mascota.', 'PERRO'),
(4, 'BOTELLA PARA VIAJE', '$ 700', 40, 'Botella para viajes , ideal para esos momentos donde sales de paseo con tu mascota ', 'GATOS'),
(5, 'DISFRAZ', '$ 3.200', 90, 'Disfraz sppiderman para perro', 'PERROS'),
(6, 'CAMA FLEX', '$5.000', 56, 'Cama Flex gatos , es una cama comoda de material acolchado que hara que tu gato duerma tranquilo.', 'GATOS'),
(7, 'COLLAR PERRO', '1300', 1, 'Collar , variados colores', 'PERROS'),
(8, 'CHALECOS SALVAGATOS', '1000', 30, 'chaleco salvavidas  para gato ideal para que tu gato aprenda a enamorarse de el agua', 'GATOS'),
(9, 'COLLAR GATO CORBATA', '1500', 2, 'Collar felino con un peque&ntildeo detalle de corbata , para que tu macota se vea adorable', 'GATOS');
COMMIT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `avisos`
--
ALTER TABLE `avisos`
  ADD CONSTRAINT `avisos_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `avisos_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD CONSTRAINT `mascotas_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
