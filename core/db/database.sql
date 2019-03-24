-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 03, 2019 at 03:03 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db-qymera-2018`
--

-- --------------------------------------------------------

--
-- Table structure for table `actividades`
--

CREATE TABLE `actividades` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `f_asignacion` date NOT NULL,
  `f_revision` date NOT NULL,
  `valoracion` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `compartido`
--

CREATE TABLE `compartido` (
  `id` int(11) NOT NULL,
  `remitente` varchar(50) NOT NULL,
  `destinatario` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `cuerpo` text NOT NULL,
  `archivo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `directivo`
--

CREATE TABLE `directivo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `docentes`
--

CREATE TABLE `docentes` (
  `id` int(11) NOT NULL,
  `primer_nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `segundo_nombre` varchar(50) NOT NULL,
  `primer_apellido` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `segundo_apellido` varchar(50) NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `director_grupo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `docentes`
--

INSERT INTO `docentes` (`id`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `foto`, `director_grupo`) VALUES
(1, 'Heider', 'Jose', 'Zapa', 'Reyes', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` bigint(20) NOT NULL,
  `n` int(11) NOT NULL,
  `primer_nombre` varchar(50) NOT NULL,
  `segundo_nombre` varchar(50) NOT NULL,
  `primer_apellido` varchar(50) NOT NULL,
  `segundo_apellido` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `id_grado` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `eventos`
--

CREATE TABLE `eventos` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `inicio` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `finalizacion` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `id_docente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grado`
--

CREATE TABLE `grado` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grado`
--

INSERT INTO `grado` (`id`, `nombre`) VALUES
(1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `grado_grupo`
--

CREATE TABLE `grado_grupo` (
  `id_grado` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `codigo` varchar(100) NOT NULL,
  `id_sede` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grado_grupo`
--

INSERT INTO `grado_grupo` (`id_grado`, `id_grupo`, `codigo`, `id_sede`) VALUES
(1, 1, '001', 1);

-- --------------------------------------------------------

--
-- Table structure for table `grupo`
--

CREATE TABLE `grupo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grupo`
--

INSERT INTO `grupo` (`id`, `nombre`) VALUES
(1, '1'),
(2, '2'),
(3, '3');

-- --------------------------------------------------------

--
-- Table structure for table `indicadores`
--

CREATE TABLE `indicadores` (
  `id` int(11) NOT NULL,
  `n` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `id_docente` int(11) NOT NULL,
  `id_grado` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `id_periodo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `indicadores`
--

INSERT INTO `indicadores` (`id`, `n`, `nombre`, `id_docente`, `id_grado`, `id_materia`, `id_periodo`) VALUES
(1, 1, 'Redacta textos cortos, organizando la información en secuencias lógicas.', 4, 1, 2, 1),
(2, 2, '\r\nReconoce el texto y la lectura como instrumento de mi entorno en forma verbal y no verbal.', 4, 1, 2, 1),
(3, 3, 'null', 4, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `informacion_docente`
--

CREATE TABLE `informacion_docente` (
  `id_docente` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `id_grupo` varchar(50) NOT NULL,
  `horario` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `informacion_docente`
--

INSERT INTO `informacion_docente` (`id_docente`, `id_materia`, `id_grupo`, `horario`) VALUES
(1, 1, '001', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `materias`
--

INSERT INTO `materias` (`id`, `nombre`) VALUES
(1, 'español');

-- --------------------------------------------------------

--
-- Table structure for table `periodo`
--

CREATE TABLE `periodo` (
  `fecha_inicio` date NOT NULL,
  `fecha_cierre` date NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `periodo`
--

INSERT INTO `periodo` (`fecha_inicio`, `fecha_cierre`, `nombre`, `id`) VALUES
('2018-01-16', '2018-03-16', 'primer periodo', 1),
('2018-03-17', '2018-06-20', 'segundo periodo', 2),
('2018-07-21', '2018-09-20', 'tercer periodo', 3),
('2018-09-21', '2018-12-06', 'cuarto periodo', 4);

-- --------------------------------------------------------

--
-- Table structure for table `sedes`
--

CREATE TABLE `sedes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `poblacion` int(3) NOT NULL,
  `localidad` varchar(20) NOT NULL,
  `representante` varchar(50) NOT NULL,
  `contacto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sedes`
--

INSERT INTO `sedes` (`id`, `nombre`, `poblacion`, `localidad`, `representante`, `contacto`) VALUES
(1, 'principal', 600, 'rural', 'Heider Zapa', '31456759228');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `cargo` int(11) NOT NULL DEFAULT '2',
  `token` varchar(120) NOT NULL DEFAULT '',
  `estado` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `correo`, `clave`, `cargo`, `token`, `estado`) VALUES
(5, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '0', 0),
(7, 'heiderzapa78@gmail.com', 'ad9248da7fcd2ff8b531042e9ee903d0', 2, '3850494cee9fcf4963183005fd0b9bf6', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compartido`
--
ALTER TABLE `compartido`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `directivo`
--
ALTER TABLE `directivo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grado`
--
ALTER TABLE `grado`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indicadores`
--
ALTER TABLE `indicadores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sedes`
--
ALTER TABLE `sedes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actividades`
--
ALTER TABLE `actividades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `compartido`
--
ALTER TABLE `compartido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `directivo`
--
ALTER TABLE `directivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grado`
--
ALTER TABLE `grado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grupo`
--
ALTER TABLE `grupo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `indicadores`
--
ALTER TABLE `indicadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sedes`
--
ALTER TABLE `sedes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
