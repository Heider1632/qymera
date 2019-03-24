-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 20, 2018 at 04:23 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db-institute`
--

-- --------------------------------------------------------

--
-- Table structure for table `docentes`
--

CREATE TABLE `docentes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `apellido` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `director_grupo` tinyint(1) NOT NULL,
  `id_grado` int(11) DEFAULT NULL,
  `id_grupo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `docentes`
--

INSERT INTO `docentes` (`id`, `nombre`, `apellido`, `director_grupo`, `id_grado`, `id_grupo`) VALUES
(1, 'Admin', 'unknow', 0, NULL, 0),
(4, 'Ana Marys', 'Ramirez', 1, 2, 2),
(5, 'Martha', 'Perez', 1, 1, 2),
(6, 'Alfredo', 'Leon', 0, NULL, 0),
(7, 'Fernando', 'Montenegro', 1, 4, 2),
(8, 'Nestor', 'Cuello', 0, NULL, 0),
(9, 'Alvaro', 'Castellano', 1, 2, 1),
(10, 'Jose', 'casteñada', 0, NULL, 0),
(11, 'Julian', 'Mejia', 1, 6, 1),
(12, 'Viviana', 'Barbosa', 1, 1, 3),
(13, 'Rafael', 'Acosta', 0, NULL, 0),
(14, 'Daniel', 'Perez', 0, NULL, 0),
(15, 'Marcial', 'Martinez', 1, 1, 1),
(16, 'Johan', 'Causil', 1, 5, 1),
(17, 'Daladier', 'Sanchez', 1, 3, 1),
(18, 'Jose', 'Palacios', 1, 5, 2),
(19, 'Darlina', 'Moreno', 1, 4, 1),
(20, 'Oscar', 'Medina', 1, 3, 2),
(21, 'Enaudis', 'Rambao', 0, NULL, 0),
(22, 'Marian', 'Muñoz', 0, NULL, 0);

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

--
-- Dumping data for table `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `n`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `foto`, `estado`, `tipo`, `id_grado`, `id_grupo`) VALUES
(1, 1, 'Carlos', 'Alberto', 'Acosta', 'Ramirez', '', '', '', 1, 1),
(2, 2, 'Juan', 'Camilo', 'Acosta', 'Ramirez', '', '', '', 1, 1),
(3, 3, 'Daniela', '', 'Ballesteros', 'Manjarrez', '', '', '', 1, 1),
(4, 4, 'Santiago', '', 'Ballesteros', 'Romero', '', '', '', 1, 1),
(5, 4, 'Luis', 'Mario', 'Causil', 'Rivera', '', '', '', 1, 1),
(6, 6, 'Sebastian', '', 'Gomez', 'Solano', '', '', '', 1, 1),
(7, 7, 'Lina', 'Margarita', 'Guerra', 'Jimenez', '', '', '', 1, 1),
(8, 8, 'Keysi', 'Patricia', 'Guzman', 'Velazques', '', '', '', 1, 1),
(9, 9, 'Luis', 'Alberto', 'Hernandez', 'vargas', '', '', '', 1, 1),
(10, 10, 'Victor', 'Julio', 'Lopez', 'Hernandez', '', '', '', 1, 1),
(11, 11, 'Yarith', 'Julieth', 'Lopez', 'Narvaez', '', '', '', 1, 1),
(12, 12, 'Jorge', 'Alberto', 'Martinez', 'Burgos', '', '', '', 1, 1),
(13, 13, 'Sara', 'Michel', 'Martinez', 'Gonzales', '', '', '', 1, 1),
(14, 14, 'Deiber', 'Jose', 'Martinez', 'Padilla', '', '', '', 1, 1),
(15, 15, 'Juan', 'Pablo', 'Martinez', 'Villadiego', '', '', '', 1, 1),
(16, 16, 'Ana', 'Lucia', 'Magrovejo', 'Padilla', '', '', '', 1, 1),
(17, 17, 'Luis', 'Alfredo', 'Novoa', 'Guzman', '', '', '', 1, 1),
(18, 18, 'Juan', 'David', 'Pestana', 'Hoyos', '', '', '', 1, 1),
(19, 19, 'Alejandro', '', 'Ramirez', 'Palacios', '', '', '', 1, 1),
(20, 20, 'Melissa', '', 'Rosado', 'Mogrovejo', '', '', '', 1, 1),
(21, 21, 'Santiago', '', 'Ruiz', 'Madera', '', '', '', 1, 1),
(22, 22, 'Luis', 'Enrique', 'Salas', 'Martinez', '', '', '', 1, 1),
(23, 23, 'Adis', 'Adriana', 'Suarez', 'Vertel', '', '', '', 1, 1),
(24, 1, 'Luis', 'Javier', 'Arrieta', 'Hoyos', '', '', '', 1, 2),
(25, 2, 'Esther', 'Maria', 'Avila', 'Diaz', '', '', '', 1, 2),
(26, 3, 'Jesus', 'Alberto', 'Baltazar', 'Hernandez', '', '', '', 1, 2),
(27, 4, 'Andres', 'Felipe', 'Camacho', 'De Miranda', '', '', '', 1, 2),
(28, 5, 'Isaura', '', 'Camacho', 'Zabaleta', '', '', '', 1, 2),
(29, 6, 'Valeria', '', 'Causil', 'Vargas', '', '', '', 1, 2),
(30, 7, 'Fiorella', '', 'Cogollo', 'Madera', '', '', '', 1, 2),
(31, 8, 'Dulce', 'Maria', 'Cogollo', 'Serrano', '', '', '', 1, 2),
(32, 9, 'Carlos', 'Andres', 'Cohen', 'Arrieta', '', '', '', 1, 2),
(33, 10, 'Georgina', '', 'Contreras', 'Hernandez', '', '', '', 1, 2),
(34, 11, 'Keyla', '', 'Cordoba', 'Lopez', '', '', '', 1, 2),
(35, 12, 'Ana', 'Melissa', 'Fuentes', 'Galeano', '', '', '', 1, 2),
(36, 13, 'Juan', 'Sebastian', 'Garcia', 'Argel', '', '', '', 1, 2),
(37, 14, 'Juan', 'Sebastian', 'Gonzales', 'Hoyos', '', '', '', 1, 2),
(38, 15, 'Yordi', '', 'Guerra', 'Madera', '', '', '', 1, 2),
(39, 16, 'Manuel', 'Ramon', 'Lozano', 'Perez', '', '', '', 1, 2),
(40, 17, 'Omar', 'Dario', 'Mendez', 'Hernandez', '', '', '', 1, 2),
(41, 18, 'Daniela', 'De Jesus', 'Mendoza', 'lambertino', '', '', '', 1, 2),
(42, 19, 'Samuel', '', 'Mendoza', 'lambertino', '', '', '', 1, 2),
(43, 20, 'Vanessa', '', 'Mora', 'Camacho', '', '', '', 1, 2),
(44, 21, 'Carlos', 'Andres', 'Payarez', 'Padilla', '', '', '', 1, 2),
(45, 22, 'Eliseth', 'Paola', 'Romero', 'Hoyos', '', '', '', 1, 2),
(46, 23, 'Isa', 'Katerine', 'Suarez', 'Arrieta', '', '', '', 1, 2),
(47, 24, 'Andrea', 'Carolina', 'Tordecilla', 'Sibaja', '', '', '', 1, 2),
(48, 1, 'Lina', 'Marcela', 'Arrieta', 'Arteaga', '', '', '', 1, 3),
(49, 2, 'Juan', 'Sebastian', 'Camacho', 'Camacho', '', '', '', 1, 3),
(50, 3, 'Ana', 'Karina', 'Cogollo', 'Hernandez', '', '', '', 1, 3),
(51, 4, 'Andres', 'Toribio', 'Cogollo', 'Hernandez', '', '', '', 1, 3),
(52, 5, 'Claudia', 'Patricia', 'Cogollo', 'Hernandez', '', '', '', 1, 3),
(53, 6, 'Ruben', 'Patricio', 'Cogollo', 'Hernandez', '', '', '', 1, 3),
(54, 7, 'Luisa', 'Fernanda', 'Cogollo', 'Villadiego', '', '', '', 1, 3),
(55, 8, 'Jeison', 'Javier', 'Cogollo', 'Villadiego', '', '', '', 1, 3),
(56, 9, 'Sofia', 'Del Carmen', 'Fuentes', 'Galeano', '', '', '', 1, 3),
(57, 10, 'Eime', 'Carolina', 'Gonzales', 'Camacho', '', '', '', 1, 3),
(58, 11, 'Sebastian', 'Andres', 'Guerra', 'Lopez', '', '', '', 1, 3),
(59, 12, 'Dairis', '', 'Hernandez', 'Cogollo', '', '', '', 1, 3),
(60, 13, 'Alvaro', 'Jose', 'Lopez', 'Hoyos', '', '', '', 1, 3),
(61, 14, 'Carlos', 'Eduardo', 'Lozano', 'NuÃ±ez', '', '', '', 1, 3),
(62, 15, 'Jeimer', 'Andres', 'Manjarrez', 'PeÃ±a', '', '', '', 1, 3),
(63, 16, 'Jose', 'David', 'Martinez', 'Suarez', '', '', '', 1, 3),
(64, 17, 'Luis', 'Felipe', 'Mogrovejo', 'Tordecilla', '', '', '', 1, 3),
(65, 18, 'Juan', 'Felipe', 'Romero', 'Tordecilla', '', '', '', 1, 3),
(66, 19, 'Juan', 'Sebastian', 'Romero', 'Tordecilla', '', '', '', 1, 3),
(67, 20, 'Faiber', 'Miguel', 'Salas', 'Hernandez', '', '', '', 1, 3),
(68, 21, 'German', 'David', 'Salas', 'Hernandez', '', '', '', 1, 3),
(69, 1, 'Jose', 'Joaquin', 'Arrieta', 'Díaz', '', '', '', 2, 1),
(70, 2, 'Luis', 'Alfredo', 'Camacho', 'Díaz', '', '', '', 2, 1),
(71, 3, 'María', 'Carrascal', 'Camargo', 'Rodriguez', '', '', '', 2, 1),
(72, 4, 'Jorge', 'Ivan', 'Ceballos', 'Tordecilla', '', '', '', 2, 1),
(73, 5, 'Isa', 'Katerine', 'Cogollo', 'Ruiz', '', '', '', 2, 1),
(74, 6, 'Omarys', '', 'Doria', 'Palacio', '', '', '', 2, 1),
(75, 7, 'Yerlis', '', 'Espitia', 'Soto', '', '', '', 2, 1),
(76, 8, 'Jader', 'Luis', 'Esquivel', 'Soto', '', '', '', 2, 1),
(77, 9, 'Yaidis', '', 'Estrada', 'Mendez', '', '', '', 2, 1),
(78, 10, 'Jose', 'Daniel', 'Fernandez', 'Reyes', '', '', '', 2, 1),
(79, 11, 'Isabel', '', 'Gonzales', 'Camacho', '', '', '', 2, 1),
(80, 12, 'Luisa', 'Fernanda', 'Lopez', 'Emeris', '', '', '', 2, 1),
(81, 13, 'Andres', 'Yair', 'Madera', 'Romero', '', '', '', 2, 1),
(82, 14, 'Jose', 'Luis', 'Manjarrez', 'Gonzales', '', '', '', 2, 1),
(83, 15, 'Julio', 'Alberto', 'Martinez', 'Anaya', '', '', '', 2, 1),
(84, 16, 'Santiago', '', 'Negrete', 'Lozano', '', '', '', 2, 1),
(85, 17, 'Yazmin', '', 'Negrete', 'Meza', '', '', '', 2, 1),
(86, 18, 'Dayana', 'Michel', 'Ospino', 'Doria', '', '', '', 2, 1),
(87, 19, 'Ricardo', 'Leon', 'Ospino', 'Morelo', '', '', '', 2, 1),
(88, 20, 'Carlos', 'Andres', 'Ospino', 'Peña', '', '', '', 2, 1),
(89, 21, 'Angel', 'Segundo', 'Pastrana', 'Mendoza', '', '', '', 2, 1),
(90, 22, 'Marco', 'Jose', 'Ramirez', 'Perez', '', '', '', 2, 1),
(91, 23, 'Milena', 'Isabel', 'Reyes', 'Toledo', '', '', '', 2, 1),
(99, 1, 'Daniel', 'David', 'Alvarez', 'Arroyo', '', '', '', 2, 2),
(100, 2, 'Camilo', 'Andres', 'Anaya', 'Fernandez', '', '', '', 2, 2),
(101, 3, 'Juan', 'David', 'Arrieta', 'Arroyo', '', '', '', 2, 2),
(102, 4, 'Sebastian', 'Jose', 'Arroyo', 'Camacho', '', '', '', 2, 2),
(103, 5, 'Brayan', 'Joser', 'Ayala', 'Montiel', '', '', '', 2, 2),
(104, 6, 'Luis', 'Mario', 'Berna', 'Ortega', '', '', '', 2, 2),
(105, 7, 'Jhonatan', '', 'Berrocal', 'Oquendo', '', '', '', 2, 2),
(106, 8, 'Luis', 'Felipe', 'Contreras', 'Hernandez', '', '', '', 2, 2),
(107, 9, 'Junior', 'Matias', 'Correa', 'Negrete', '', '', '', 2, 2),
(108, 10, 'Justo', 'Manuel', 'Doria', 'Causil', '', '', '', 2, 2),
(109, 11, 'Luis', 'Miguel', 'Gonzales', 'Galvan', '', '', '', 2, 2),
(110, 12, 'Albeiro', 'Jose', 'Guzman', 'Ortega', '', '', '', 2, 2),
(111, 13, 'Juan', 'Jose', 'Manjarrez', 'Manjarrez', '', '', '', 2, 2),
(112, 14, 'Yerlenis', '', 'Martinez', 'Ramirez', '', '', '', 2, 2),
(113, 15, 'Angel', 'Jose', 'Naravez', 'Fuentes', '', '', '', 2, 2),
(114, 16, 'Jesus', 'Manuel', 'Naravez', 'Sanchez', '', '', '', 2, 2),
(115, 17, 'Maron', 'Eliana', 'Oquendo', 'Alvarez', '', '', '', 2, 2),
(116, 18, 'Yerlis', 'Yemith', 'Payarez', 'Jimenez', '', '', '', 2, 2),
(117, 19, 'Saray', '', 'Peralta', 'Arroyo', '', '', '', 2, 2),
(118, 20, 'Juan', 'Diego', 'Pestana', 'Hoyos', '', '', '', 2, 2),
(119, 21, 'Heidy', 'Luz', 'Portillo', 'Hernandez', '', '', '', 2, 2),
(120, 22, 'Ashly', 'Luz', 'Posada', 'Contreras', '', '', '', 2, 2),
(121, 23, 'Andres', 'Felipe', 'Sanchez', 'Ospino', '', '', '', 2, 2),
(122, 24, 'Santiago', '', 'Vargas', 'Causil', '', '', '', 2, 2),
(123, 25, 'Jesus', 'David', 'Vega', 'Díaz', '', '', '', 2, 2),
(147, 1, 'Juan', 'Carlos', 'Almanza', 'Lozano', '', '', '', 3, 1),
(148, 2, 'Yandri', 'Marcela', 'Alvarez', 'Hernandez', '', '', '', 3, 1),
(149, 3, 'Maria', 'Alejandra', 'Burgos', 'Contreras', '', '', '', 3, 1),
(150, 4, 'Mauricio', 'Manuel', 'Causil', 'Vargas', '', '', '', 3, 1),
(151, 5, 'Karina', 'Andrea', 'Díaz', 'Velasquez', '', '', '', 3, 1),
(152, 6, 'Melanie', 'Johana', 'Dominguez', 'Martinez', '', '', '', 3, 1),
(153, 7, 'Euris', '', 'Durango', 'Emeuris', '', '', '', 3, 1),
(154, 8, 'Nicol', 'Dayana', 'Espitia', 'Vargas', '', '', '', 3, 1),
(155, 9, 'Daniel', 'Enrique', 'Gonzales', 'Camacho', '', '', '', 3, 1),
(156, 10, 'Yerleis', 'Del Carmen', 'Gonzales', 'Galvan', '', '', '', 3, 1),
(157, 11, 'Katherine', '', 'Guerra', 'Manjarrez', '', '', '', 3, 1),
(158, 12, 'Katherine', 'Isabel', 'Guzman', 'Ortiz', '', '', '', 3, 1),
(159, 13, 'Kendri', 'Julieth', 'Guzman', 'Velasquez', '', '', '', 3, 1),
(160, 14, 'Rosa', 'Maria', 'Hernandez', 'Vidal', '', '', '', 3, 1),
(161, 15, 'Luis', 'Fidel', 'Hernandez', 'Arrieta', '', '', '', 3, 1),
(162, 16, 'Victor', 'Javier', 'Hernandez', 'Hernandez', '', '', '', 3, 1),
(163, 17, 'Sara', 'Maria', 'Hernandez', 'Mestra', '', '', '', 3, 1),
(164, 18, 'Ani', 'Ruth', 'Hernandez', 'Payarez', '', '', '', 3, 1),
(165, 19, 'Marcelos', '', 'Marzola', 'Mejia', '', '', '', 3, 1),
(166, 20, 'Julio', 'Andres', 'Paez', 'Herrera', '', '', '', 3, 1),
(167, 21, 'Maria', 'Heleina', 'Romero', 'Payares', '', '', '', 3, 1),
(168, 22, 'Maria', 'Jose', 'Tordecilla', 'Causil', '', '', '', 3, 1),
(169, 23, 'Lina', 'Maria', 'Tordecilla', 'De Alba', '', '', '', 3, 1),
(170, 24, 'Yeferson', '', 'Vega', 'Hernandez', '', '', '', 3, 1),
(171, 1, 'Maria', 'Lorena', 'Acosta', 'Ramirez', '', '', '', 3, 2),
(172, 2, 'Andres', 'David', 'Avila', 'Díaz', '', '', '', 3, 2),
(173, 3, 'Juan', 'David', 'Baltazar', 'Hernandez', '', '', '', 3, 2),
(174, 4, 'Camila', 'Andres', 'Bravo', 'Torres', '', '', '', 3, 2),
(175, 5, 'Mario', 'Andres', 'Cogollo', 'Hernandez', '', '', '', 3, 2),
(176, 6, 'Luis', 'Fernando', 'Lozano', 'Nuñes', '', '', '', 3, 2),
(177, 7, 'Pedro', 'Antonio', 'Marquez', 'Ruiz', '', '', '', 3, 2),
(178, 8, 'Esteban', 'Alejandro', 'Martinez', 'Gonzales', '', '', '', 3, 2),
(179, 9, 'Carolina', 'Andres', 'Martinez', 'Villadiego', '', '', '', 3, 2),
(180, 10, 'Sebastian', 'Andres', 'Medina', 'Sarmiento', '', '', '', 3, 2),
(181, 11, 'Jesus', 'David', 'Mendez', 'Hernandez', '', '', '', 3, 2),
(182, 12, 'Yireth', '', 'Mendoza', 'Lambertino', '', '', '', 3, 2),
(183, 13, 'Daniela', '', 'Mogrovejo', 'Burgos', '', '', '', 3, 2),
(184, 14, 'Yarleydis', '', 'Montes', 'Morales', '', '', '', 3, 2),
(185, 15, 'Eimer', 'David', 'Morelo', 'Villalba', '', '', '', 3, 2),
(186, 16, 'Estefania', '', 'Negrete', 'Mestra', '', '', '', 3, 2),
(187, 17, 'Alexander', '', 'Nuñez', 'Baltazar', '', '', '', 3, 2),
(188, 18, 'Luis', 'Angel', 'Pacheco', '', '', '', '', 3, 2),
(189, 19, 'Ana', 'Maria', 'Payarez', 'Jimenez', '', '', '', 3, 2),
(190, 20, 'Zharic', 'Paola', 'Posada', 'Contreras', '', '', '', 3, 2),
(191, 21, 'Estefania', 'Esther', 'Romero', 'Hoyos', '', '', '', 3, 2),
(192, 22, 'Luis', 'Mario', 'Solano', 'Ramirez', '', '', '', 3, 2),
(193, 23, 'Eva', 'Sandric', 'Tordecilla', 'Palomo', '', '', '', 3, 2),
(194, 24, 'Dayana', 'Rosa', 'Zarante', 'Gonzales', '', '', '', 3, 2),
(195, 1, 'Jose', 'Fernando', 'Anaya', 'Bernal', '', '', '', 4, 1),
(196, 2, 'Juan', 'Camilo', 'Anaya', 'Causil', '', '', '', 4, 1),
(197, 3, 'Deikin', 'Jose', 'Arroyo', 'Diaz', '', '', '', 4, 1),
(198, 4, 'Adrian', 'Jose', 'Avila', 'Diaz', '', '', '', 4, 1),
(199, 5, 'Lilibeth', '', 'Ballesteros', 'Manjarrez', '', '', '', 4, 1),
(200, 6, 'Maria', 'Paula', 'Doria', 'Palacios', '', '', '', 4, 1),
(201, 7, 'Yarlis', '', 'Estrada', 'Mendez', '', '', '', 4, 1),
(202, 8, 'Andres', 'Felipe', 'Ferrer', 'Villalba', '', '', '', 4, 1),
(203, 9, 'Luis', 'Gerardo', 'Galvis', 'Ospino', '', '', '', 4, 1),
(204, 10, 'Mayerlis', '', 'Hernandes', 'Gomez', '', '', '', 4, 1),
(205, 11, 'Mauricio', '', 'Jimenez', 'Celestino', '', '', '', 4, 1),
(206, 12, 'Evelio', 'Miguel', 'Leon', 'Garcia', '', '', '', 4, 1),
(207, 13, 'Yair', 'Miguel', 'Majarrez', 'Carvajal', '', '', '', 4, 1),
(208, 14, 'Anderson', '', 'Martinez', 'Ceña', '', '', '', 4, 1),
(209, 15, 'Neider', 'Enrique', 'Negrete', 'Carrascal', '', '', '', 4, 1),
(210, 16, 'Camilo', 'Andres', 'Negrete', 'Mestra', '', '', '', 4, 1),
(211, 17, 'Ana', 'Maria', 'Ortega', 'Pedroza', '', '', '', 4, 1),
(212, 18, 'Mario', 'Jose', 'Romero', 'Hoyos', '', '', '', 4, 1),
(213, 19, 'Yuranis', 'Paola', 'Sanchez', 'Mejia', '', '', '', 4, 1),
(214, 20, 'Daniel', 'Danilo', 'Sanchez', 'Macea', '', '', '', 4, 1),
(215, 21, 'Leidys', 'Nelieth', 'Seña', 'Carrascal', '', '', '', 4, 1),
(216, 22, 'Juan', 'Camilo', 'Sibaja', 'Leon', '', '', '', 4, 1),
(217, 23, 'Keiner', 'De Jesus', 'Tordecilla', 'Gonzales', '', '', '', 4, 1),
(218, 24, 'Jose', 'Daniel', 'Velasquez', 'Palomo', '', '', '', 4, 1),
(244, 1, 'Miguel', 'Enrique', 'Anaya', 'De Hoyos', '', '', '', 4, 2),
(245, 2, 'Ricardo', 'Antonio', 'Avila', 'Sanchez', '', '', '', 4, 2),
(246, 3, 'Carlos', 'Andres', 'Cantero', 'Fuentes', '', '', '', 4, 2),
(247, 4, 'Luis', 'Angel', 'Cogollo', 'Villadiego', '', '', '', 4, 2),
(248, 5, 'Fabio', 'Antonio', 'Contreras', 'Hernandez', '', '', '', 4, 2),
(249, 6, 'Milton', 'Jose', 'Contreras', 'Velasquez', '', '', '', 4, 2),
(250, 7, 'Milena', 'Andrea', 'Correa', 'Negrete', '', '', '', 4, 2),
(251, 8, 'Sebastian', '', 'Fernandez', 'Reyes', '', '', '', 4, 2),
(252, 9, 'Jose', 'Daniel', 'Fernandez', 'Cogollo', '', '', '', 4, 2),
(253, 10, 'Luz', 'Carina', 'Gonzales', 'Camacho', '', '', '', 4, 2),
(254, 11, 'Andres', 'Felipe', 'Guerra', 'Mendez', '', '', '', 4, 2),
(255, 12, 'Jeison', 'Daniel', 'Guzman', 'Martinez', '', '', '', 4, 2),
(256, 13, 'Nelson', 'Andres', 'Hernandez', 'Sosa', '', '', '', 4, 2),
(257, 14, 'Maria', 'Eufemia', 'Hernandez', 'Ortiz', '', '', '', 4, 2),
(258, 15, 'Jeong', 'Hun', 'Lee', 'Lopez', '', '', '', 4, 2),
(259, 16, 'Andres', 'Felipe', 'Lopez', 'Emeris', '', '', '', 4, 2),
(260, 17, 'Angie', 'Paola', 'Martinez', 'Arroyo', '', '', '', 4, 2),
(261, 18, 'Eliana', 'Isabel', 'Martinez', 'Florez', '', '', '', 4, 2),
(262, 19, 'Chaira', 'Yulieth', 'Medina', 'Payares', '', '', '', 4, 2),
(263, 20, 'Estefania', '', 'Mogrovejo', 'Padilla', '', '', '', 4, 2),
(264, 21, 'Camilo', 'Andres', 'Mora', 'Camacho', '', '', '', 4, 2),
(265, 22, 'Heidys', 'Julieth', 'Romero', 'Suarez', '', '', '', 4, 2),
(266, 23, 'Jose', 'Armando', 'Roqueme', 'Galeano', '', '', '', 4, 2),
(267, 24, 'Cesar', 'Luis', 'Tordecilla', 'De Alba', '', '', '', 4, 2),
(268, 25, 'Dana', 'Melisa', 'Tordecilla', 'Portillo', '', '', '', 4, 2),
(269, 1, 'Leidy', 'Sofia', 'Anaya', 'De Hoyos', '', '', '', 5, 1),
(270, 2, 'Felipe', 'Daniel', 'Arroyo', 'Camacho', '', '', '', 5, 1),
(271, 3, 'Maria', 'Alejandra', 'Cogollo', 'Quintero', '', '', '', 5, 1),
(272, 4, 'Yerlis', '', 'Etsrada', 'Mendez', '', '', '', 5, 1),
(273, 5, 'Jhoiner', 'David', 'Fernandez', 'Arteaga', '', '', '', 5, 1),
(274, 6, 'Maria', 'Andrea', 'Galvis', 'Llorente', '', '', '', 5, 1),
(275, 7, 'Maria', 'Camila', 'Julio', 'Salgado', '', '', '', 5, 1),
(276, 8, 'Luis', 'Manuel', 'Mogrovejo', 'Padilla', '', '', '', 5, 1),
(277, 9, 'Duvan', 'Andres', 'Negrete', 'Lozano', '', '', '', 5, 1),
(278, 10, 'Meranis', 'Sandrith', 'Ospino', 'Castillo', '', '', '', 5, 1),
(279, 11, 'Marisol', '', 'Ospino', 'Peña', '', '', '', 5, 1),
(280, 12, 'Yeris', 'Marcela', 'Payares', 'Jimenez', '', '', '', 5, 1),
(281, 13, 'Diana', 'Sofia', 'Payares', 'Lopez', '', '', '', 5, 1),
(282, 14, 'Juan', 'Pedro', 'Perez', 'Payares', '', '', '', 5, 1),
(283, 15, 'Melisa', 'Vanessa', 'Plaza', 'Hernandez', '', '', '', 5, 1),
(284, 16, 'Jairo', 'Enrique', 'Romero', 'Payares', '', '', '', 5, 1),
(285, 17, 'Delsy', 'Liliana', 'Tano', 'Cogollo', '', '', '', 5, 1),
(286, 18, 'Juan', 'David', 'Varon', 'Romero', '', '', '', 5, 1),
(287, 19, 'Charlas', '', 'Vega', 'Hernandez', '', '', '', 5, 1),
(288, 20, 'Karolina', '', 'Vega', 'Hernandez', '', '', '', 5, 1),
(289, 21, 'Victor', 'Miguel', 'Velasquez', 'Arteaga', '', '', '', 5, 1),
(311, 1, 'Camila', 'Andrea', 'Arrieta', 'Hoyos', '', '', '', 5, 2),
(312, 2, 'Jesus', 'Javier', 'Babilonia', 'Ramirez', '', '', '', 5, 2),
(313, 3, 'Leorlides', '', 'Babilonia', 'Ramirez', '', '', '', 5, 2),
(314, 4, 'Diego', 'Luis', 'Ballesteros', 'Manjarrez', '', '', '', 5, 2),
(315, 5, 'Nini', 'Johana', 'Benitez', 'Peinado', '', '', '', 5, 2),
(316, 6, 'Camilo', 'Andres', 'Calderin', 'Morelos', '', '', '', 5, 2),
(317, 7, 'Liliana', '', 'Camacho', 'Vidal', '', '', '', 5, 2),
(318, 8, 'Luis', 'Alejandro', 'Contreras', 'Velasquez', '', '', '', 5, 2),
(319, 9, 'Luis', 'Sebastian', 'Dominguez', 'Martinez', '', '', '', 5, 2),
(320, 10, 'Fernando', 'Jose', 'Garcia', 'Martinez', '', '', '', 5, 2),
(321, 11, 'Alis', 'David', 'Guerra', 'Berrio', '', '', '', 5, 2),
(322, 12, 'Hector', 'David', 'Hurtado', 'Baron', '', '', '', 5, 2),
(323, 13, 'Hernado', 'Jose', 'Leon', 'Garcia', '', '', '', 5, 2),
(324, 14, 'Carlos', 'Daniel', 'Martinez', 'Burgos', '', '', '', 5, 2),
(325, 15, 'Jose', 'Elias', 'Martinez', 'Padilla', '', '', '', 5, 2),
(326, 16, 'Ana', 'Grey', 'Narvaez', 'Chamorro', '', '', '', 5, 2),
(327, 17, 'Yurleidys', '', 'Noriega', 'Padilla', '', '', '', 5, 2),
(328, 18, 'Omar', 'Dario', 'Oquendo', 'Alvarez', '', '', '', 5, 2),
(329, 19, 'Maria', 'Margarita', 'Portillo', 'Hernandez', '', '', '', 5, 2),
(330, 20, 'Ivan', 'Dario', 'Solano', 'Padilla', '', '', '', 5, 2),
(331, 21, 'Franco', 'Luis', 'Velasquez', 'Oquendo', '', '', '', 5, 2),
(332, 1, 'Meliza', '', 'Anaya', 'Anaya', '', '', '', 6, 1),
(333, 2, 'Yuliana', '', 'Anaya', 'Causil', '', '', '', 6, 1),
(334, 3, 'Yarneidis', 'Yulieth', 'Anaya', 'Contreras', '', '', '', 6, 1),
(335, 4, 'Julio', 'Cesar', 'Argumedo', 'Gonzales', '', '', '', 6, 1),
(336, 5, 'Juliana', '', 'Ayala', 'Cerrano', '', '', '', 6, 1),
(337, 6, 'Jose', 'David', 'Berrocal', 'Martinez', '', '', '', 6, 1),
(338, 7, 'Daniel', 'Alberto', 'Burgos', 'Tordecilla', '', '', '', 6, 1),
(339, 8, 'Carlos', 'Alberto', 'Dominguez', 'Martinez', '', '', '', 6, 1),
(340, 9, 'Ana', 'Karina', 'Estrada', 'Mendez', '', '', '', 6, 1),
(341, 10, 'Julio', 'Cesar', 'Galeano', 'Mejia', '', '', '', 6, 1),
(342, 11, 'Jose', 'Antonio', 'Guerra', 'Madera', '', '', '', 6, 1),
(343, 12, 'Ronaldo', 'Luis', 'Guzman', 'Ortega', '', '', '', 6, 1),
(344, 13, 'Victor', 'Manuel', 'Hernandez', 'Cogollo', '', '', '', 6, 1),
(345, 14, 'Deiber', 'Luis', 'Hernandez', 'Vidal', '', '', '', 6, 1),
(346, 15, 'Robert', 'Dario', 'Lagarez', 'Durango', '', '', '', 6, 1),
(347, 16, 'Victor', 'Alfonso', 'Lozano', 'Nuñez', '', '', '', 6, 1),
(348, 17, 'Yajaira', 'Janeth', 'Madera', 'Romero', '', '', '', 6, 1),
(349, 18, 'Valentina', '', 'Manjarrez', 'Manjarrez', '', '', '', 6, 1),
(350, 19, 'Maria', 'Alejandra', 'Narvaez', 'Gonzales', '', '', '', 6, 1),
(351, 20, 'Oreste', '', 'Ortega', 'Pedroza', '', '', '', 6, 1),
(352, 21, 'Estefania', '', 'Reyes', 'Toledo', '', '', '', 6, 1),
(353, 22, 'Jesus', 'David', 'Santamaria', 'Osorio', '', '', '', 6, 1),
(354, 23, 'Eilen', 'Patricia', 'Seña', 'Carrascal', '', '', '', 6, 1),
(355, 24, 'Valentina', '', 'Solano', 'Ramirez', '', '', '', 6, 1),
(356, 25, 'Liliana', 'Patricia', 'Wilches', 'Hernandez', '', '', '', 6, 1),
(357, 26, 'Aura', 'Cristina', 'Yepes', 'Madera', '', '', '', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `eventos`
--

CREATE TABLE `eventos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `body` text COLLATE utf8_spanish_ci NOT NULL,
  `bgColor` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `textColor` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `start` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `end` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `eventos`
--

INSERT INTO `eventos` (`id`, `title`, `body`, `bgColor`, `textColor`, `start`, `end`) VALUES
(1, 'Nuevo evento', 'algo ', '#f0f0f0', '#fff', '2018-11-09 2:00', '2018-13-09 2:00');

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
(1, '6'),
(2, '7'),
(3, '8'),
(4, '9'),
(5, '10'),
(6, '11');

-- --------------------------------------------------------

--
-- Table structure for table `grado_grupo`
--

CREATE TABLE `grado_grupo` (
  `id_grado` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grado_grupo`
--

INSERT INTO `grado_grupo` (`id_grado`, `id_grupo`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(3, 3),
(4, 1),
(4, 2),
(5, 1),
(6, 1),
(6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `grupo`
--

CREATE TABLE `grupo` (
  `id` int(11) NOT NULL,
  `namescape` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grupo`
--

INSERT INTO `grupo` (`id`, `namescape`) VALUES
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
-- Table structure for table `information_docente`
--

CREATE TABLE `information_docente` (
  `id_docente` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `id_grado` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `information_docente`
--

INSERT INTO `information_docente` (`id_docente`, `id_materia`, `id_grado`, `id_grupo`) VALUES
(4, 2, 1, 1),
(4, 2, 1, 2),
(4, 2, 2, 1),
(4, 2, 2, 2),
(4, 2, 3, 1),
(4, 2, 3, 2),
(4, 2, 1, 3),
(4, 2, 4, 1),
(4, 2, 4, 2),
(4, 16, 1, 1),
(4, 16, 1, 2),
(4, 16, 1, 3),
(4, 16, 2, 1),
(4, 16, 2, 2),
(4, 16, 3, 1),
(4, 16, 3, 2),
(4, 16, 4, 1),
(4, 16, 4, 2),
(4, 16, 5, 1),
(4, 16, 5, 2),
(4, 16, 6, 1),
(5, 1, 1, 1),
(5, 1, 1, 2),
(5, 1, 2, 1),
(5, 1, 2, 2),
(6, 1, 1, 3),
(6, 1, 5, 1),
(6, 1, 5, 2),
(6, 1, 6, 1),
(8, 3, 2, 2),
(8, 3, 3, 1),
(8, 3, 3, 2),
(8, 3, 4, 1),
(8, 3, 4, 2),
(8, 3, 5, 1),
(8, 3, 5, 2),
(8, 3, 6, 1),
(9, 3, 1, 1),
(9, 3, 1, 2),
(9, 3, 1, 3),
(9, 3, 2, 1),
(10, 7, 2, 1),
(10, 7, 2, 2),
(10, 7, 3, 1),
(10, 7, 3, 1),
(10, 20, 4, 1),
(10, 20, 4, 2),
(10, 20, 5, 1),
(10, 20, 5, 2),
(11, 7, 4, 1),
(11, 7, 4, 2),
(11, 8, 5, 1),
(11, 8, 5, 2),
(11, 8, 6, 1),
(7, 1, 3, 1),
(7, 1, 3, 2),
(7, 1, 4, 1),
(7, 1, 4, 2),
(12, 7, 1, 1),
(12, 7, 1, 2),
(12, 7, 1, 3),
(12, 20, 1, 1),
(12, 20, 1, 2),
(12, 20, 1, 3),
(12, 20, 2, 1),
(12, 20, 2, 2),
(12, 20, 3, 1),
(12, 20, 3, 2),
(13, 10, 1, 3),
(13, 10, 5, 1),
(13, 10, 5, 2),
(13, 13, 5, 1),
(13, 13, 5, 1),
(13, 11, 5, 1),
(13, 11, 5, 2),
(14, 10, 3, 1),
(14, 10, 3, 2),
(14, 10, 4, 1),
(14, 10, 4, 2),
(14, 10, 6, 1),
(15, 14, 1, 1),
(15, 14, 1, 2),
(15, 14, 1, 3),
(15, 14, 2, 1),
(15, 14, 2, 2),
(15, 14, 3, 1),
(15, 14, 3, 2),
(15, 14, 4, 1),
(15, 14, 4, 2),
(15, 14, 5, 1),
(15, 14, 5, 2),
(15, 14, 6, 1),
(16, 21, 2, 1),
(16, 21, 3, 1),
(16, 21, 3, 1),
(16, 9, 6, 1),
(17, 21, 1, 2),
(17, 21, 1, 3),
(17, 9, 5, 1),
(17, 9, 5, 2),
(17, 21, 6, 1),
(18, 17, 1, 1),
(18, 17, 1, 2),
(18, 17, 1, 3),
(18, 17, 2, 1),
(18, 17, 2, 2),
(18, 17, 3, 1),
(18, 17, 3, 2),
(18, 17, 4, 1),
(18, 17, 4, 2),
(18, 17, 5, 1),
(18, 17, 5, 2),
(18, 17, 6, 1),
(18, 18, 1, 1),
(18, 18, 1, 2),
(18, 18, 1, 3),
(18, 18, 2, 1),
(18, 18, 2, 2),
(18, 18, 3, 1),
(18, 18, 3, 2),
(18, 18, 4, 1),
(18, 18, 4, 2),
(18, 18, 5, 1),
(18, 18, 5, 2),
(18, 18, 6, 1),
(19, 15, 1, 1),
(19, 15, 1, 2),
(19, 15, 1, 3),
(19, 15, 2, 1),
(19, 15, 2, 2),
(19, 15, 3, 1),
(19, 15, 3, 2),
(19, 15, 4, 1),
(19, 15, 4, 2),
(19, 15, 5, 1),
(19, 15, 5, 2),
(19, 15, 6, 1),
(20, 21, 1, 1),
(20, 21, 2, 2);

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
(1, 'español'),
(2, 'lectoescritura'),
(3, 'ingles'),
(4, 'artimética'),
(5, 'estadística'),
(6, 'geometría'),
(7, 'ciencias naturales'),
(8, 'química'),
(9, 'física'),
(10, 'ciencias sociales'),
(11, 'ciencias politicas y economicas'),
(12, 'competencia ciudadanas'),
(13, 'filosofía'),
(14, 'educación física'),
(15, 'tecnología e informática'),
(16, 'artística'),
(17, 'ética'),
(18, 'religión'),
(19, 'emprendimiento'),
(20, 'investigación'),
(21, 'matemáticas');

-- --------------------------------------------------------

--
-- Table structure for table `notas`
--

CREATE TABLE `notas` (
  `id` bigint(20) NOT NULL,
  `nota` double NOT NULL,
  `id_indicador` int(11) NOT NULL,
  `id_periodo` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `id_grado` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `id_docente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notas`
--

INSERT INTO `notas` (`id`, `nota`, `id_indicador`, `id_periodo`, `id_estudiante`, `id_grado`, `id_grupo`, `id_materia`, `id_docente`) VALUES
(1, 7, 1, 1, 1, 1, 1, 1, 4),
(2, 7, 2, 1, 1, 1, 1, 1, 4),
(3, 7, 3, 1, 1, 1, 1, 1, 4),
(4, 7, 1, 1, 2, 1, 1, 1, 4),
(5, 6.8, 2, 1, 2, 1, 1, 1, 4),
(6, 7, 3, 1, 2, 1, 1, 1, 4),
(7, 7.5, 1, 1, 3, 1, 1, 1, 4),
(8, 8, 2, 1, 3, 1, 1, 1, 4),
(9, 6.5, 3, 1, 3, 1, 1, 1, 4),
(10, 7, 1, 1, 4, 1, 1, 1, 4),
(11, 7, 2, 1, 4, 1, 1, 1, 4),
(12, 8.5, 3, 1, 4, 1, 1, 1, 4),
(13, 6.5, 1, 1, 5, 1, 1, 1, 4),
(14, 6.5, 2, 1, 5, 1, 1, 1, 4),
(15, 7, 3, 1, 5, 1, 1, 1, 4),
(16, 8, 1, 1, 6, 1, 1, 1, 4),
(17, 6.5, 2, 1, 6, 1, 1, 1, 4),
(18, 6.5, 3, 1, 6, 1, 1, 1, 4),
(19, 8, 1, 1, 7, 1, 1, 1, 4),
(20, 8, 2, 1, 7, 1, 1, 1, 4),
(21, 8, 3, 1, 7, 1, 1, 1, 4),
(22, 8, 1, 1, 8, 1, 1, 1, 4),
(23, 8.5, 2, 1, 8, 1, 1, 1, 4),
(24, 10, 3, 1, 8, 1, 1, 1, 4),
(25, 6.5, 1, 1, 9, 1, 1, 1, 4),
(26, 6.5, 2, 1, 9, 1, 1, 1, 4),
(27, 6.5, 3, 1, 9, 1, 1, 1, 4),
(28, 7.5, 4, 1, 10, 1, 1, 1, 4),
(29, 6.5, 2, 1, 10, 1, 1, 1, 4),
(30, 7, 3, 1, 10, 1, 1, 1, 4),
(31, 6.5, 1, 1, 11, 1, 1, 1, 4),
(32, 7, 2, 1, 11, 1, 1, 1, 4),
(33, 8.5, 3, 1, 11, 1, 1, 1, 4),
(34, 7, 1, 1, 12, 1, 1, 1, 4),
(35, 7, 2, 1, 12, 1, 1, 1, 4),
(36, 7.5, 3, 1, 12, 1, 1, 1, 4),
(37, 6.5, 1, 1, 13, 1, 1, 1, 4),
(38, 7, 2, 1, 13, 1, 1, 1, 4),
(39, 7, 3, 1, 13, 1, 1, 1, 4),
(40, 6.5, 1, 1, 14, 1, 1, 1, 4),
(41, 5, 2, 1, 14, 1, 1, 1, 4),
(42, 6.5, 3, 1, 14, 1, 1, 1, 4),
(43, 6.5, 1, 1, 15, 1, 1, 1, 4),
(44, 7.5, 2, 1, 15, 1, 1, 1, 4),
(45, 7, 3, 1, 15, 1, 1, 1, 4),
(46, 8.5, 1, 1, 16, 1, 1, 1, 4),
(47, 8, 2, 1, 16, 1, 1, 1, 4),
(48, 8.5, 3, 1, 16, 1, 1, 1, 4),
(49, 7, 1, 1, 17, 1, 1, 1, 4),
(50, 7, 2, 1, 17, 1, 1, 1, 4),
(51, 7, 3, 1, 17, 1, 1, 1, 4),
(52, 6.5, 1, 1, 18, 1, 1, 1, 4),
(53, 7, 2, 1, 18, 1, 1, 1, 4),
(54, 7.5, 3, 1, 18, 1, 1, 1, 4),
(55, 6.5, 1, 1, 19, 1, 1, 1, 4),
(56, 7, 2, 1, 19, 1, 1, 1, 4),
(57, 7, 3, 1, 19, 1, 1, 1, 4),
(70, 6.5, 1, 1, 20, 1, 1, 1, 4),
(71, 6.5, 2, 1, 20, 1, 1, 1, 4),
(72, 7, 3, 1, 20, 1, 1, 1, 4),
(73, 6.5, 1, 1, 21, 1, 1, 1, 4),
(74, 6.5, 2, 1, 21, 1, 1, 1, 4),
(75, 7, 3, 1, 21, 1, 1, 1, 4),
(76, 7.5, 1, 1, 22, 1, 1, 1, 4),
(77, 7, 2, 1, 22, 1, 1, 1, 4),
(78, 8.5, 3, 1, 22, 1, 1, 1, 4),
(79, 6.5, 1, 1, 23, 1, 1, 1, 4),
(80, 7, 2, 1, 23, 1, 1, 1, 4),
(81, 7.5, 3, 1, 23, 1, 1, 1, 4);

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
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `cargo` int(11) NOT NULL DEFAULT '2',
  `keyregister` varchar(120) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `clave`, `cargo`, `keyregister`) VALUES
(1, 'admin@gmail.com', '123456', 1, ''),
(2, 'teacher@gmail.com', '123456', 2, '2'),
(4, 'anoymous@gmail.com', '123456', 2, '3');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `notas`
--
ALTER TABLE `notas`
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
-- AUTO_INCREMENT for table `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=358;

--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grado`
--
ALTER TABLE `grado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `notas`
--
ALTER TABLE `notas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
