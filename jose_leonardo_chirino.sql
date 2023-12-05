-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:33065
-- Generation Time: Nov 21, 2023 at 03:20 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jose_leonardo_chirino`
--

-- --------------------------------------------------------

--
-- Table structure for table `cargas_familiares`
--

CREATE TABLE `cargas_familiares` (
  `id_carga_familiares` int(11) NOT NULL,
  `id_jefe_familia` int(11) DEFAULT NULL,
  `nombre_carga` varchar(255) DEFAULT NULL,
  `apellido_carga` varchar(255) DEFAULT NULL,
  `id_genero` int(11) DEFAULT NULL,
  `cedula_carga` varchar(10) DEFAULT NULL,
  `fecha_nacimiento_carga` date DEFAULT NULL,
  `discapacitada_carga` tinyint(1) DEFAULT NULL,
  `incapacitado_carga` varchar(2) DEFAULT NULL,
  `embarazo_temprano_carga` tinyint(1) DEFAULT NULL,
  `id_parentesco` int(11) DEFAULT NULL,
  `id_grado_instruccion` int(11) DEFAULT NULL,
  `profesion_carga` varchar(255) DEFAULT NULL,
  `ingreso_mensual_carga` int(11) DEFAULT NULL,
  `inscrito_cne` tinyint(1) DEFAULT NULL,
  `pensionado_carga` tinyint(1) DEFAULT NULL,
  `carga_carnet` varchar(2) DEFAULT NULL,
  `codigo_carnet_carga` varchar(100) DEFAULT NULL,
  `serial_carnet_carga` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `condiciones_vivienda`
--

CREATE TABLE `condiciones_vivienda` (
  `id_condiciones_vivienda` int(11) NOT NULL,
  `id_jefe_familia` int(11) DEFAULT NULL,
  `aguas_blancas` tinyint(1) DEFAULT NULL,
  `aguas_servidas` tinyint(1) DEFAULT NULL,
  `tanque_agua` tinyint(1) DEFAULT NULL,
  `medidor_agua` tinyint(1) DEFAULT NULL,
  `electricidad` tinyint(1) DEFAULT NULL,
  `medidor_electricidad` tinyint(1) DEFAULT NULL,
  `telefonia_fija` tinyint(1) DEFAULT NULL,
  `internet` tinyint(1) DEFAULT NULL,
  `proveedor_internet` varchar(255) DEFAULT NULL,
  `cable` tinyint(1) DEFAULT NULL,
  `proveedor_cable` varchar(255) DEFAULT NULL,
  `aseo_urbano` tinyint(1) DEFAULT NULL,
  `gas_directo` tinyint(1) DEFAULT NULL,
  `alumbrado_publico` tinyint(1) DEFAULT NULL,
  `cilindro` tinyint(1) DEFAULT NULL,
  `id_tamano_cilindro` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enfermedades`
--

CREATE TABLE `enfermedades` (
  `id_enfermedades` int(11) NOT NULL,
  `id_jefe_familia` int(11) DEFAULT NULL,
  `cancer` tinyint(1) DEFAULT NULL,
  `vih` tinyint(1) DEFAULT NULL,
  `sida` tinyint(1) DEFAULT NULL,
  `diabetes` tinyint(1) DEFAULT NULL,
  `hepatitis` tinyint(1) DEFAULT NULL,
  `leucemia` tinyint(1) DEFAULT NULL,
  `epilepsia` tinyint(1) DEFAULT NULL,
  `asma` tinyint(1) DEFAULT NULL,
  `hipertension` tinyint(1) DEFAULT NULL,
  `tuberculosis` tinyint(1) DEFAULT NULL,
  `corazon` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `estado_civil`
--

CREATE TABLE `estado_civil` (
  `id_estado_civil` int(11) NOT NULL,
  `estado_civil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `estado_civil`
--

INSERT INTO `estado_civil` (`id_estado_civil`, `estado_civil`) VALUES
(1, 'Soltero'),
(2, 'Casado'),
(3, 'Divorciado'),
(4, 'Viudo'),
(5, 'Concubinato');

-- --------------------------------------------------------

--
-- Table structure for table `genero`
--

CREATE TABLE `genero` (
  `id_genero` int(11) NOT NULL,
  `nombre_genero` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genero`
--

INSERT INTO `genero` (`id_genero`, `nombre_genero`) VALUES
(1, 'Masculino'),
(2, 'Femenino');

-- --------------------------------------------------------

--
-- Table structure for table `grado_instruccion`
--

CREATE TABLE `grado_instruccion` (
  `id_grado_instruccion` int(11) NOT NULL,
  `grado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grado_instruccion`
--

INSERT INTO `grado_instruccion` (`id_grado_instruccion`, `grado`) VALUES
(1, 'Primaria'),
(2, 'Bachillerato'),
(3, 'Técnico Medio'),
(4, 'Técnico Superior'),
(5, 'Pregrado'),
(6, 'Maestría'),
(7, 'Postgrado'),
(8, 'Doctorado');

-- --------------------------------------------------------

--
-- Table structure for table `jefe_familia`
--

CREATE TABLE `jefe_familia` (
  `id_jefe_familia` int(11) NOT NULL,
  `nombres` varchar(255) DEFAULT NULL,
  `apellidos` varchar(255) DEFAULT NULL,
  `cedula` varchar(10) DEFAULT NULL,
  `id_genero` int(11) DEFAULT NULL,
  `codigo_carnet` varchar(30) DEFAULT NULL,
  `serial_carnet` varchar(30) DEFAULT NULL,
  `numero_celular` varchar(15) DEFAULT NULL,
  `numero_telefono` varchar(15) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `id_estado_civil` int(11) DEFAULT NULL,
  `id_grado_instruccion` int(11) DEFAULT NULL,
  `id_sector_trabajo` int(11) DEFAULT NULL,
  `ocupacion` varchar(255) DEFAULT NULL,
  `pensionado` tinyint(1) DEFAULT NULL,
  `discapacitado` tinyint(1) DEFAULT NULL,
  `incapacitado` varchar(100) DEFAULT NULL,
  `cne` tinyint(1) DEFAULT NULL,
  `actividad_comercial` tinyint(1) DEFAULT NULL,
  `tipo_actividad` varchar(100) DEFAULT NULL,
  `cargas_familiares` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mascotas`
--

CREATE TABLE `mascotas` (
  `id_mascotas` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mascotas`
--

INSERT INTO `mascotas` (`id_mascotas`, `nombre`) VALUES
(1, 'Perro'),
(2, 'Gato'),
(3, 'Conejo'),
(4, 'Ave'),
(5, 'Morrocoy'),
(6, 'Acuatico'),
(7, 'Otro');

-- --------------------------------------------------------

--
-- Table structure for table `materiales_vivienda`
--

CREATE TABLE `materiales_vivienda` (
  `id_materiales_vivienda` int(11) NOT NULL,
  `condicion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `materiales_vivienda`
--

INSERT INTO `materiales_vivienda` (`id_materiales_vivienda`, `condicion`) VALUES
(1, 'De Bloque'),
(2, 'De Lata'),
(3, 'De Madera'),
(4, 'De Barro');

-- --------------------------------------------------------

--
-- Table structure for table `parentesco`
--

CREATE TABLE `parentesco` (
  `id_parentesco` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parentesco`
--

INSERT INTO `parentesco` (`id_parentesco`, `nombre`) VALUES
(1, 'Hermano/a'),
(2, 'Hijo/a'),
(3, 'Esposo/a'),
(4, 'Madre'),
(5, 'Padre'),
(6, 'Tío/a'),
(7, 'Sobrino/a'),
(8, 'Otro');

-- --------------------------------------------------------

--
-- Table structure for table `participacion_social`
--

CREATE TABLE `participacion_social` (
  `id_participacion_social` int(11) NOT NULL,
  `id_jefe_familia` int(11) DEFAULT NULL,
  `organizacion_comunitaria` tinyint(1) DEFAULT NULL,
  `nombre_organizacion` varchar(255) DEFAULT NULL,
  `carnet_psuv` tinyint(1) DEFAULT NULL,
  `codigo_carnet_psuv` varchar(15) DEFAULT NULL,
  `clap` tinyint(1) DEFAULT NULL,
  `cantidad_clap` int(11) DEFAULT NULL,
  `bolsa_nutricion` tinyint(1) DEFAULT NULL,
  `cantidad_bolsa_nutricion` int(11) DEFAULT NULL,
  `hogares_patria` tinyint(1) DEFAULT NULL,
  `jose_gregorio_hernandez` tinyint(1) DEFAULT NULL,
  `parto_humanizado` tinyint(1) DEFAULT NULL,
  `lactancia_materna` tinyint(1) DEFAULT NULL,
  `escolarizacion` tinyint(1) DEFAULT NULL,
  `economia_familiar` tinyint(1) DEFAULT NULL,
  `chamba_juvenil` tinyint(1) DEFAULT NULL,
  `amor_mayor` tinyint(1) DEFAULT NULL,
  `otro_beneficio` tinyint(1) DEFAULT NULL,
  `observaciones` varchar(450) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sector_trabajo`
--

CREATE TABLE `sector_trabajo` (
  `id_sector_trabajo` int(11) NOT NULL,
  `sector` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sector_trabajo`
--

INSERT INTO `sector_trabajo` (`id_sector_trabajo`, `sector`) VALUES
(1, 'Público'),
(2, 'Privado'),
(3, 'Cuenta Propia'),
(4, 'Desempleado'),
(5, 'Otro');

-- --------------------------------------------------------

--
-- Table structure for table `tamanos_cilindros`
--

CREATE TABLE `tamanos_cilindros` (
  `id_tamano_cilindro` int(11) NOT NULL,
  `tamano_cilindro` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tamanos_cilindros`
--

INSERT INTO `tamanos_cilindros` (`id_tamano_cilindro`, `tamano_cilindro`) VALUES
(1, 10),
(2, 18),
(3, 27),
(4, 43);

-- --------------------------------------------------------

--
-- Table structure for table `vivienda`
--

CREATE TABLE `vivienda` (
  `id_vivienda` int(11) NOT NULL,
  `id_jefe_familia` int(11) DEFAULT NULL,
  `condiciones_terreno` varchar(255) DEFAULT NULL,
  `forma_tenencia` varchar(255) DEFAULT NULL,
  `tipo_vivienda` varchar(255) DEFAULT NULL,
  `habitaciones` enum('1','2','3','4','5') DEFAULT NULL,
  `id_condiciones_vivienda` int(11) DEFAULT NULL,
  `tiene_mascotas` tinyint(1) DEFAULT NULL,
  `id_mascotas` int(11) DEFAULT NULL,
  `necesidades_vivienda` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cargas_familiares`
--
ALTER TABLE `cargas_familiares`
  ADD PRIMARY KEY (`id_carga_familiares`),
  ADD KEY `id_jefe_familia` (`id_jefe_familia`),
  ADD KEY `id_genero` (`id_genero`),
  ADD KEY `id_parentesco` (`id_parentesco`),
  ADD KEY `id_grado_instruccion` (`id_grado_instruccion`);

--
-- Indexes for table `condiciones_vivienda`
--
ALTER TABLE `condiciones_vivienda`
  ADD PRIMARY KEY (`id_condiciones_vivienda`),
  ADD KEY `id_jefe_familia` (`id_jefe_familia`);

--
-- Indexes for table `enfermedades`
--
ALTER TABLE `enfermedades`
  ADD PRIMARY KEY (`id_enfermedades`),
  ADD KEY `id_jefe_familia` (`id_jefe_familia`);

--
-- Indexes for table `estado_civil`
--
ALTER TABLE `estado_civil`
  ADD PRIMARY KEY (`id_estado_civil`);

--
-- Indexes for table `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indexes for table `grado_instruccion`
--
ALTER TABLE `grado_instruccion`
  ADD PRIMARY KEY (`id_grado_instruccion`);

--
-- Indexes for table `jefe_familia`
--
ALTER TABLE `jefe_familia`
  ADD PRIMARY KEY (`id_jefe_familia`),
  ADD KEY `id_genero` (`id_genero`),
  ADD KEY `id_estado_civil` (`id_estado_civil`),
  ADD KEY `id_sector_trabajo` (`id_sector_trabajo`),
  ADD KEY `id_grado_instruccion` (`id_grado_instruccion`);

--
-- Indexes for table `mascotas`
--
ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`id_mascotas`);

--
-- Indexes for table `materiales_vivienda`
--
ALTER TABLE `materiales_vivienda`
  ADD PRIMARY KEY (`id_materiales_vivienda`);

--
-- Indexes for table `parentesco`
--
ALTER TABLE `parentesco`
  ADD PRIMARY KEY (`id_parentesco`);

--
-- Indexes for table `participacion_social`
--
ALTER TABLE `participacion_social`
  ADD PRIMARY KEY (`id_participacion_social`),
  ADD KEY `id_jefe_familia` (`id_jefe_familia`);

--
-- Indexes for table `sector_trabajo`
--
ALTER TABLE `sector_trabajo`
  ADD PRIMARY KEY (`id_sector_trabajo`);

--
-- Indexes for table `tamanos_cilindros`
--
ALTER TABLE `tamanos_cilindros`
  ADD PRIMARY KEY (`id_tamano_cilindro`);

--
-- Indexes for table `vivienda`
--
ALTER TABLE `vivienda`
  ADD PRIMARY KEY (`id_vivienda`),
  ADD KEY `id_jefe_familia` (`id_jefe_familia`),
  ADD KEY `id_mascotas` (`id_mascotas`),
  ADD KEY `id_condiciones_vivienda` (`id_condiciones_vivienda`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cargas_familiares`
--
ALTER TABLE `cargas_familiares`
  MODIFY `id_carga_familiares` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `condiciones_vivienda`
--
ALTER TABLE `condiciones_vivienda`
  MODIFY `id_condiciones_vivienda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enfermedades`
--
ALTER TABLE `enfermedades`
  MODIFY `id_enfermedades` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `estado_civil`
--
ALTER TABLE `estado_civil`
  MODIFY `id_estado_civil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `genero`
--
ALTER TABLE `genero`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `grado_instruccion`
--
ALTER TABLE `grado_instruccion`
  MODIFY `id_grado_instruccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jefe_familia`
--
ALTER TABLE `jefe_familia`
  MODIFY `id_jefe_familia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `id_mascotas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `materiales_vivienda`
--
ALTER TABLE `materiales_vivienda`
  MODIFY `id_materiales_vivienda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `parentesco`
--
ALTER TABLE `parentesco`
  MODIFY `id_parentesco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `participacion_social`
--
ALTER TABLE `participacion_social`
  MODIFY `id_participacion_social` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sector_trabajo`
--
ALTER TABLE `sector_trabajo`
  MODIFY `id_sector_trabajo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tamanos_cilindros`
--
ALTER TABLE `tamanos_cilindros`
  MODIFY `id_tamano_cilindro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vivienda`
--
ALTER TABLE `vivienda`
  MODIFY `id_vivienda` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cargas_familiares`
--
ALTER TABLE `cargas_familiares`
  ADD CONSTRAINT `cargas_familiares_ibfk_1` FOREIGN KEY (`id_jefe_familia`) REFERENCES `jefe_familia` (`id_jefe_familia`),
  ADD CONSTRAINT `cargas_familiares_ibfk_2` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id_genero`),
  ADD CONSTRAINT `cargas_familiares_ibfk_3` FOREIGN KEY (`id_parentesco`) REFERENCES `parentesco` (`id_parentesco`),
  ADD CONSTRAINT `cargas_familiares_ibfk_4` FOREIGN KEY (`id_grado_instruccion`) REFERENCES `grado_instruccion` (`id_grado_instruccion`);

--
-- Constraints for table `condiciones_vivienda`
--
ALTER TABLE `condiciones_vivienda`
  ADD CONSTRAINT `condiciones_vivienda_ibfk_1` FOREIGN KEY (`id_jefe_familia`) REFERENCES `jefe_familia` (`id_jefe_familia`);

--
-- Constraints for table `enfermedades`
--
ALTER TABLE `enfermedades`
  ADD CONSTRAINT `enfermedades_ibfk_1` FOREIGN KEY (`id_jefe_familia`) REFERENCES `jefe_familia` (`id_jefe_familia`);

--
-- Constraints for table `jefe_familia`
--
ALTER TABLE `jefe_familia`
  ADD CONSTRAINT `jefe_familia_ibfk_1` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id_genero`),
  ADD CONSTRAINT `jefe_familia_ibfk_2` FOREIGN KEY (`id_estado_civil`) REFERENCES `estado_civil` (`id_estado_civil`),
  ADD CONSTRAINT `jefe_familia_ibfk_3` FOREIGN KEY (`id_sector_trabajo`) REFERENCES `sector_trabajo` (`id_sector_trabajo`),
  ADD CONSTRAINT `jefe_familia_ibfk_4` FOREIGN KEY (`id_grado_instruccion`) REFERENCES `grado_instruccion` (`id_grado_instruccion`);

--
-- Constraints for table `participacion_social`
--
ALTER TABLE `participacion_social`
  ADD CONSTRAINT `participacion_social_ibfk_1` FOREIGN KEY (`id_jefe_familia`) REFERENCES `jefe_familia` (`id_jefe_familia`);

--
-- Constraints for table `vivienda`
--
ALTER TABLE `vivienda`
  ADD CONSTRAINT `vivienda_ibfk_1` FOREIGN KEY (`id_jefe_familia`) REFERENCES `jefe_familia` (`id_jefe_familia`),
  ADD CONSTRAINT `vivienda_ibfk_2` FOREIGN KEY (`id_mascotas`) REFERENCES `mascotas` (`id_mascotas`),
  ADD CONSTRAINT `vivienda_ibfk_3` FOREIGN KEY (`id_condiciones_vivienda`) REFERENCES `condiciones_vivienda` (`id_condiciones_vivienda`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
