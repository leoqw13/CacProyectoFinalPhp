-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 26, 2022 at 09:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cacproyecto`
--

-- --------------------------------------------------------

--
-- Table structure for table `localidades`
--

CREATE TABLE `localidades` (
  `idlocalidad` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `idProvincia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `localidades`
--

INSERT INTO `localidades` (`idlocalidad`, `nombre`, `idProvincia`) VALUES
(1, 'Moreno', 3),
(2, 'Guaymallén', 4),
(3, 'Capital', 2),
(4, 'Cruz Alta', 1),
(5, 'Quilmes', 3),
(6, 'Berazategui', 3),
(7, 'Ciudad De Buenos Aires', 3),
(8, 'Bella Vista', 18),
(9, 'Concepcion Del Bermejo', 22),
(10, 'Arroyo Verde', 26),
(11, 'Laguna Yema', 34),
(12, 'Abdon Castro Tolay', 38),
(13, 'Doblas', 42),
(14, 'Apostoles', 54),
(16, 'Bahia Creek', 62),
(18, 'El Rincon', 70),
(19, 'Candelaria', 74),
(20, 'Comandante Luis Piedrabuena', 78),
(21, 'Armstrong', 82),
(22, 'Argentina', 86),
(24, 'Constitucion', 3),
(25, 'Aimogasta', 46),
(27, 'Monserrat', 3),
(28, 'Machigasta', 46),
(30, 'Puerto Madero', 3),
(31, 'San Antonio', 46),
(33, 'Retiro', 3),
(34, 'San Rafael', 4),
(35, 'General José de San Martín', 2),
(36, 'Mendoza (capital)', 4),
(37, 'San Telmo', 3),
(38, 'Malargue', 4),
(39, 'Gral Alvear', 4),
(44, 'Lamadrid', 34),
(45, 'Moquehue', 5),
(46, 'Colonia San Miguel Arcangel', 6),
(47, 'Colpes', 10),
(48, 'Arroyo San Antonio', 14),
(49, 'Los Frentones', 22),
(50, 'Puerto Madryn', 26),
(51, 'Los Chiriguanos', 34),
(52, 'Abra Pampa', 38),
(53, 'Macachin', 42),
(207, 'San Martin', 4),
(209, 'San Carlos', 4),
(210, 'Godoy Cruz', 4),
(211, 'Junin', 4),
(212, 'La Paz', 4),
(213, 'Las Heras', 4),
(214, 'Lavalle', 4),
(215, 'Lujan de Cuyo', 4),
(216, 'Maipu', 4),
(217, 'Rivadavia', 4),
(218, 'Santa Rosa', 4),
(219, 'Tunuyan', 4),
(220, 'Tupungato', 4),
(221, 'Capital', 14),
(222, 'Calamuchita', 14),
(223, 'Colon', 14),
(224, 'Cruz del eje', 14),
(225, 'General Roca', 14),
(226, 'Gral San Martin', 14),
(227, 'Ischilin', 14),
(228, 'Juarz Celman', 14),
(229, 'Marcos Juarez ', 14),
(230, 'Minas', 14),
(231, 'Pocho', 14),
(232, 'Punilla', 14),
(233, 'Rio', 14),
(234, 'San Justo', 14),
(235, 'Sobremonte', 14),
(236, 'Union', 14),
(237, 'Tulumba', 14),
(238, 'Totoral', 14),
(239, 'Anta', 2),
(240, 'Cachi', 2),
(241, 'Cafayate', 2),
(242, 'Carrillos', 2),
(243, 'Chicoana', 2),
(244, 'Gral Guemes', 2),
(245, 'Gral Jose de San Martin', 2),
(246, 'Guachipas', 2),
(247, 'Iruya', 2),
(248, 'La Caldera', 2),
(249, 'Bahia Blanca', 3),
(250, 'Arrecifes', 3),
(251, 'Chacabuco', 3),
(252, 'Dolores', 3),
(253, 'Colon', 3),
(254, 'Alumine', 5),
(255, 'Las Ovejas', 5),
(256, 'Arroyito', 5),
(257, 'Centenario', 5),
(258, 'Meliquina', 5),
(259, 'Junin de los andes', 5),
(260, 'Colon', 6),
(261, 'Crespo', 6),
(262, 'Feliciano', 6),
(263, 'Diamante', 6),
(264, 'Nogoya', 6),
(265, 'Valle Maria', 6),
(266, 'Santa Ana', 6),
(267, 'Larroque', 6),
(268, 'Cerrito', 6),
(269, 'Almagro', 7),
(270, 'Belgrano', 7),
(271, 'Boedo', 7),
(272, 'Caballito', 7),
(273, 'Chacarita', 7),
(274, 'Flores', 7),
(275, 'Barracas', 7),
(276, 'Floresta', 7),
(277, 'Constitucion', 7),
(278, 'La Boca', 7),
(279, 'El Alto', 10),
(280, 'La Paz', 10),
(281, 'Recreo', 10),
(282, 'Sumampa', 10),
(283, 'Icaño', 10),
(284, 'Saujil', 10),
(285, 'El Rodeo', 10),
(287, 'Las Juntas', 10),
(288, 'San Isidro', 10),
(289, 'Bonpland', 18),
(290, 'Cazadores Correntinos', 18),
(291, 'Chavarria', 18),
(292, 'Colonia Libertad', 18),
(293, 'Caa Cati', 18),
(294, 'El Sombrero', 18),
(295, 'Empedraro', 18),
(296, 'Colonia Prado', 18),
(297, 'Colonia Carolina', 18),
(298, 'Goya', 18),
(299, 'Resistencia', 22),
(300, 'Charata', 22),
(301, 'Barranqueras', 22),
(302, 'Charadai', 22),
(303, 'Basail', 22),
(304, 'Villa Angela', 22),
(305, 'Corzuela', 22),
(306, 'Tres Isletas', 22),
(307, 'Las Breñas', 22),
(308, 'Puerto Madryn', 26),
(309, 'Cushamen', 26),
(310, 'Tecka', 26),
(311, 'Las Plumas', 26),
(312, 'Rawzon', 26),
(313, 'Tehuelches', 26),
(314, 'Telsen', 26),
(315, 'Sarmiento', 26),
(316, 'Esqule', 26),
(317, 'Gastre', 26),
(318, 'Pilcomayo', 34),
(319, 'Clorinda', 34),
(320, 'El Colorado', 34),
(321, 'Formosa', 34),
(322, 'Herradura', 34),
(323, 'Laguna Blanca', 34),
(324, 'Palo Santo', 34),
(325, 'Abra Pampa', 38),
(326, 'El Carmen', 38),
(327, 'Humahuaca', 38),
(328, 'Palpala', 38),
(329, 'Susques', 38),
(330, 'Santa Clara', 38),
(331, 'San Pedro de Jujuy', 38),
(332, 'Rinconada', 38),
(333, 'San Antonio', 38),
(334, 'La Quiaca', 38),
(335, '25 de Mayo', 42),
(336, 'Pehuelches', 42),
(337, 'Santa Isabel', 42),
(338, 'Parera', 42),
(339, 'Realico', 42),
(340, 'Toay', 42),
(341, 'General Acha', 42),
(342, 'La Adela', 42),
(343, 'Trenel', 42),
(344, 'Arauco', 46),
(345, 'Capital', 46),
(346, 'Chilecito', 46),
(347, 'Famatina', 46),
(348, 'independencia', 46),
(349, 'Gral Belgrano', 46),
(350, 'Vinchina', 46),
(351, 'Sanagasta', 46),
(352, 'Posadas', 54),
(353, 'Puerto Iguazu', 54),
(354, 'El Dorado', 54),
(355, 'San Ignacio', 54),
(356, 'Apostoles', 54),
(357, 'Montecario', 54),
(358, 'San Javier', 54),
(359, 'Avellaneda', 62),
(360, 'Adolfo Alsina', 62),
(361, 'Bariloche', 62),
(362, 'Conesa', 62),
(363, 'El Cuy', 62),
(364, 'General Roca', 62),
(365, 'San Antonio', 62),
(366, 'Rawson', 70),
(367, 'San Juan', 70),
(368, 'Chimbas', 70),
(369, 'Rivadavia', 70),
(370, 'Santa Lucia', 70),
(371, 'Caucete', 70),
(373, 'Pocito', 70),
(374, 'Albardon', 70),
(375, 'Belgrano', 74),
(376, 'Ayacucho', 74),
(377, 'Junin', 74),
(378, 'Chacabuco', 74),
(379, 'Coronel Pringles', 74),
(380, 'Gobernador Duouy', 74),
(381, 'Gral Pedernera', 74),
(382, 'Gral San Martin', 74),
(383, 'Rio Gallegos', 78),
(384, 'Los Antiguos', 78),
(385, 'Gregores', 78),
(386, 'Pico Truncado', 78),
(387, 'Perito Moreno', 78),
(388, 'El Chalten', 78),
(389, 'Piedrabuena', 78),
(390, 'Las Heras', 78),
(391, 'El Calafate', 78),
(392, 'Rosario', 82),
(393, 'Capital', 82),
(394, 'General Lopez', 82),
(395, 'Las Colonias', 82),
(396, 'Gral Obligado', 82),
(397, 'Castellanos', 82),
(398, 'San Lorenzo', 82),
(399, 'Constitucion', 82),
(400, 'Caseros', 82),
(401, 'San Jeronimo', 82),
(402, 'Vera', 82),
(403, 'Belgrano', 82),
(404, 'San Justo', 82),
(405, 'San Javier', 82),
(406, '9 de Julio', 82),
(407, 'Garay', 82),
(408, 'Aguirre', 86),
(409, 'Alberdi', 86),
(410, 'Avellaneda', 86),
(411, 'Banda', 86),
(412, 'Belgrano', 86),
(413, 'Copo', 86),
(414, 'Figueroa', 86),
(415, 'Jimenez', 86),
(416, 'Juan Felipe Ibarra', 86),
(417, 'Mitre', 86),
(418, 'Rio Hondo', 86),
(419, 'Usuaia', 94),
(420, 'Rio Grande', 94),
(421, 'Tolhuin', 94),
(422, 'Sarmiento', 94),
(423, 'Lago Escondido', 94),
(424, 'Puerto Almanza', 94);

-- --------------------------------------------------------

--
-- Table structure for table `pedidos`
--

CREATE TABLE `pedidos` (
  `idpedido` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `lugarentrega` varchar(80) NOT NULL,
  `localidad` int(11) NOT NULL,
  `codpostal` varchar(9) NOT NULL,
  `formadepago` varchar(10) NOT NULL,
  `tarjtitular` varchar(40) NOT NULL,
  `tarjnumero` bigint(16) NOT NULL,
  `tarjvto` varchar(10) NOT NULL,
  `tarjclave` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pedidos`
--

INSERT INTO `pedidos` (`idpedido`, `nombre`, `apellido`, `usuario`, `mail`, `lugarentrega`, `localidad`, `codpostal`, `formadepago`, `tarjtitular`, `tarjnumero`, `tarjvto`, `tarjclave`) VALUES
(2, 'Pedros', 'Suarez', 'psuarez', 'pedro@gmail.com', 'Lavalle 3222', 25, '1234', 'on', 'Pedro suarez', 2147483647, '2022-07-29', 325),
(4, 'Pedro', 'Suarez', 'psuarez', 'pedro@gmail.com', 'Lavalle 3222', 1, '1234', 'o', 'sdf', 2147483647, 'sdf', 1245),
(5, 'Juanes', 'Rodriguez', 'jrodriguez', 'jrodriguez@gmail.com', 'Av. Rivadavia 32556', 2, '1233', 'on', 'Juan rodriguez', 2147483647, '0422', 124),
(6, 'María', 'Rosalex', 'mrosales', 'jrodriguez@gmail.com', 'Jujuy 323', 210, '3433', 'on', 'María Rosales', 2147483647, '2025-07-16', 314),
(7, 'Pedro', 'Suarez', 'jrodriguez', 'dsf@vorterix.com', 'Av. Rivadavia 32556', 1, '1233', 'o', 'Juan rodriguez', 2147483647, '0422', 124),
(8, 'Juana', 'Rodriguez', 'sdf', 'jrodriguez@gmail.com', 'Lavalle 3222', 1, '1233', 'o', 'Juan rodriguez', 2147483647, '0422', 124),
(9, 'Juana', 'Rodriguez', 'sdf', 'jrodriguez@gmail.com', 'Lavalle 3222', 1, '1233', 'o', 'Juan rodriguez', 2147483647, '0422', 124),
(10, 'Hermeto', 'Carmona', 'hcarmona', 'hcarmona@gmail.com', 'Av. La Plata 2233 ', 1, '1882', 'o', 'ss', 33, '33', 33),
(12, 'Facundo', 'Sileo', 'fsileo', 'fsileo@gmail.com', 'Av. La Plata 556', 1, '1884', 'checkedVal', 'Facundo Sileo', 1234, '0422', 423),
(13, 'Brenda', 'Benitez', 'bbenitez', 'bbenitez@hotmail.com', 'Av. Cabildo 4555', 1, '1223', 'checkedVal', 'Brenda Benitez', 1234, '0422', 423),
(14, 'Jesus', 'Rodriguez', 'jrodriguez', 'jrodriguez@gmail.com', 'Av. Cabildo 333', 1, '1223', 'checkedVal', 'Jesus Rodriguez', 123456, '0422', 325),
(23, 'Beatriz', 'Perez', 'bperez', 'bperez@gmail.com', 'Laprida 232', 2, '1554', 'mercado', 'Beatriz Perez', 1234, '0422', 325),
(25, 'Hernesto', 'Rodriguez', 'jrodriguez', 'prueba@gmail.com', 'Av. Cabildo 4555', 1, '1223', 'null', 'Jesus Rodriguez', 1123455645667899, '0422', 123),
(27, 'Hernesto', 'Rodriguez', 'jrodriguez', 'prueba@gmail.com', 'Av. Cabildo 4555', 2, '1223', 'tarjeta', 'Jesus Rodriguez', 1123455645667899, '0422', 123),
(28, 'Hernan', 'Jacinto', 'hjacinto', 'hjacinto@gmail.com', 'Laprida 232', 3, '1255', 'mercado', 'dd', 3333, '3333', 333),
(29, 'Paola', 'Hernanedz', 'phernan', 'ph@gmail.com', 'Laprida 232', 250, '1234', 'on', 'Hernan', 333, '2024-07-10', 333),
(30, 'Romina', 'Estevez', 'restevez', 'restevez@gmail.com', 'Av La Plata 321', 1, '1882', 'on', '111', 111, '0122', 123),
(32, 'Raul', 'Gonzalez', 'RRgonzales', 'Rgonsales@gmail.com', 'Montecaseros 231', 47, '214', 'on', '22311', 1223, '2022-07-14', 2212),
(38, 'Leonardo', 'Orion', 'Lorion', 'Lorion@email.com', 'Uzuriaga 5600', 12, '5400', 'on', 'Leonardo', 23132313, '2022-07-13', 3113),
(46, 'Pedros', 'Gonzalez', 'Pgonzales', 'Pgonzales@email.com', 'H. Irigoyen 3221', 347, '123', 'on', 'Pedro', 1232, '2022-07-23', 213123),
(47, 'Florencia', 'Perez', 'Florp', 'florp@email.com', 'Lanus 123', 315, '6412', 'on', 'Florenca', 2415115, '2022-08-06', 241),
(48, 'Mario', 'Honda', 'Mhonad', 'Mario@gmail.com', 'La Mancha 213', 210, '2341', 'on', 'Mario', 2441241, '2022-07-28', 241);

-- --------------------------------------------------------

--
-- Table structure for table `provincias`
--

CREATE TABLE `provincias` (
  `idprovincia` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `provincias`
--

INSERT INTO `provincias` (`idprovincia`, `nombre`) VALUES
(1, 'Tucumán'),
(2, 'Salta'),
(3, 'Buenos Aires'),
(4, 'Mendoza'),
(5, 'Neuquen'),
(6, 'Entre Ríos'),
(7, 'Ciudad Autónoma de Buenos Aires'),
(10, 'Catamarca'),
(14, 'Córdoba'),
(18, 'Corrientes'),
(22, 'Chaco'),
(26, 'Chubut'),
(34, 'Formosa'),
(38, 'Jujuy'),
(42, 'La Pampa'),
(46, 'La Rioja'),
(54, 'Misiones'),
(62, 'Río Negro'),
(70, 'San Juan'),
(74, 'San Luis'),
(78, 'Santa Cruz'),
(82, 'Santa Fe'),
(86, 'Santiago del Estero'),
(94, 'Tierra del Fuego');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `clave` varchar(150) NOT NULL,
  `nombreyapellido` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `usuario`, `clave`, `nombreyapellido`) VALUES
(1, 'prueba@gmail.com', '909090', 0x4a6f73c3a92049676e6163696f),
(2, 'mail@hotmail.com', '808080', 0x4a75616e204361726c6f73),
(3, 'lslsls@gmail.com', '123456Aa', 0x6c736c73),
(4, 'lslsls@gmail.com', '123456Aa', 0x6c736c73),
(12, 'martaII@gmail.com', '123414141', 0x4d61727461206c6c),
(13, 'martamarta@gmail.com', '123456', 0x4d61727461206d61727461),
(15, 'pedro@gmail.com', 'Pedrojl13', 0x506564726f),
(16, 'marcos@gmail.com', 'Marcos1312', 0x4d6172636f73),
(17, 'tomas@gmail.com', 'Tomas1243', 0x546f6d6173),
(19, 'nico@gmail.com', 'Nico12314', 0x4e69636f),
(20, 'tiana@gmail.com', 'Tiana21311', 0x4e6f736d),
(23, 'Melanie@gmail.com', 'Melanie23', 0x4d656c616e6965),
(24, 'MelanieWolf@gmail.co', 'Tsafaf13', 0x4d656c616e6965),
(25, 'Sonia@gmail.com', 'Sonia12321', 0x536f6e6961),
(26, 'Sonia2@gmail.com', 'Sonia123', 0x536f6e6961),
(27, 'Rcarez@email.com', 'Rodrigo12', 0x526f647269676f204361636572657a),
(28, 'Mg@gmail.com', 'Mgome12412', 0x4d6172696f20476f6d657a),
(29, 'Roman@gmail.com', 'RomanM12', 0x526f6d616e204d6172696e6f),
(30, 'Marcelo@gmail.com', 'Marceok12', 0x4d617263656c6f205275736f);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `localidades`
--
ALTER TABLE `localidades`
  ADD PRIMARY KEY (`idlocalidad`),
  ADD UNIQUE KEY `LocProvincia` (`idlocalidad`),
  ADD KEY `LocProv` (`idProvincia`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idpedido`),
  ADD KEY `FK_Localidad` (`localidad`);

--
-- Indexes for table `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`idprovincia`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `localidades`
--
ALTER TABLE `localidades`
  MODIFY `idlocalidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=425;

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `provincias`
--
ALTER TABLE `provincias`
  MODIFY `idprovincia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `localidades`
--
ALTER TABLE `localidades`
  ADD CONSTRAINT `LocProv` FOREIGN KEY (`idProvincia`) REFERENCES `provincias` (`idprovincia`) ON UPDATE CASCADE;

--
-- Constraints for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `FK_Localidad` FOREIGN KEY (`localidad`) REFERENCES `localidades` (`idlocalidad`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
