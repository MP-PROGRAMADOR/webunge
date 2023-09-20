-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2023 at 04:35 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unge`
--

-- --------------------------------------------------------

--
-- Table structure for table `campus`
--

CREATE TABLE `campus` (
  `Id` int(3) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Ubicacion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campus`
--

INSERT INTO `campus` (`Id`, `Nombre`, `Ubicacion`) VALUES
(1, 'CAMPUS I', 'CAMPUS I DE MALABO');

-- --------------------------------------------------------

--
-- Table structure for table `carreras`
--

CREATE TABLE `carreras` (
  `Id` int(3) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Facultad` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `Id` int(3) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`Id`, `Nombre`) VALUES
(1, 'TECNOLOGIA'),
(2, 'CIENCIAS'),
(3, 'MEDIO AMBIENTE'),
(4, 'AGRICULTURA');

-- --------------------------------------------------------

--
-- Table structure for table `evento`
--

CREATE TABLE `evento` (
  `Id` int(3) NOT NULL,
  `titulo` varchar(20) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `evento`
--

INSERT INTO `evento` (`Id`, `titulo`, `descripcion`) VALUES
(1, 'SEMANA CULTURAL', '<p>De conformidad con la <strong>Ley General de Educaci&oacute;n vigente</strong>, el acceso a los estudios Universitarios de los estudiantes con estudios extranjeros y diferentes a los del Sistema Educativo Nacional, pasan por la v&iacute;a de convalidaci&oacute;n de los mismos.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `facultad`
--

CREATE TABLE `facultad` (
  `Id` int(3) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Sede` int(3) NOT NULL,
  `Campus` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facultad`
--

INSERT INTO `facultad` (`Id`, `Nombre`, `Sede`, `Campus`) VALUES
(1, 'fFACULTAD DE CIENCIAS ECONOMICAS', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lugar`
--

CREATE TABLE `lugar` (
  `Id` int(3) NOT NULL,
  `FechaEvento` varchar(20) NOT NULL,
  `HoraEvento` varchar(20) NOT NULL,
  `Facultad` int(3) NOT NULL,
  `Evento` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lugar`
--

INSERT INTO `lugar` (`Id`, `FechaEvento`, `HoraEvento`, `Facultad`, `Evento`) VALUES
(1, '2023-09-23', '12:37', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `noticias`
--

CREATE TABLE `noticias` (
  `Id` int(3) NOT NULL,
  `Titulo` varchar(50) NOT NULL,
  `Descripcion` text NOT NULL,
  `Img` varchar(20) NOT NULL,
  `Dia` int(3) NOT NULL,
  `Mes` varchar(10) NOT NULL,
  `Agno` int(5) NOT NULL,
  `Categoria` int(3) NOT NULL,
  `Facultad` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `noticias`
--

INSERT INTO `noticias` (`Id`, `Titulo`, `Descripcion`, `Img`, `Dia`, `Mes`, `Agno`, `Categoria`, `Facultad`) VALUES
(1, 'MALABO A OCURAS', '<p>El pasaje &quot;Lorem ipsum...&quot; se ha extra&iacute;do del texto que dice &quot;Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...&quot;, que se traducir&iacute;a como&nbsp;<strong>&quot;No hay nadie que ame el dolor mismo, que lo busque y lo quiera tener, simplemente porque es el dolor...&quot;</strong>.</p>\r\n', '', 1, 'Ene', 2020, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sede`
--

CREATE TABLE `sede` (
  `Id` int(3) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sede`
--

INSERT INTO `sede` (`Id`, `Nombre`, `Direccion`) VALUES
(1, 'MALABO', 'Avda Hassan II');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `Id` int(3) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campus`
--
ALTER TABLE `campus`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Facultad` (`Facultad`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `facultad`
--
ALTER TABLE `facultad`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Sede` (`Sede`),
  ADD KEY `Campus` (`Campus`);

--
-- Indexes for table `lugar`
--
ALTER TABLE `lugar`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Facultad` (`Facultad`),
  ADD KEY `Evento` (`Evento`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Categoria` (`Categoria`),
  ADD KEY `Facultad` (`Facultad`);

--
-- Indexes for table `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campus`
--
ALTER TABLE `campus`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carreras`
--
ALTER TABLE `carreras`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `evento`
--
ALTER TABLE `evento`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `facultad`
--
ALTER TABLE `facultad`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lugar`
--
ALTER TABLE `lugar`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sede`
--
ALTER TABLE `sede`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carreras`
--
ALTER TABLE `carreras`
  ADD CONSTRAINT `carreras_ibfk_1` FOREIGN KEY (`Facultad`) REFERENCES `facultad` (`Id`);

--
-- Constraints for table `facultad`
--
ALTER TABLE `facultad`
  ADD CONSTRAINT `facultad_ibfk_1` FOREIGN KEY (`Sede`) REFERENCES `sede` (`Id`),
  ADD CONSTRAINT `facultad_ibfk_2` FOREIGN KEY (`Campus`) REFERENCES `campus` (`Id`);

--
-- Constraints for table `lugar`
--
ALTER TABLE `lugar`
  ADD CONSTRAINT `lugar_ibfk_1` FOREIGN KEY (`Facultad`) REFERENCES `facultad` (`Id`),
  ADD CONSTRAINT `lugar_ibfk_2` FOREIGN KEY (`Evento`) REFERENCES `evento` (`Id`);

--
-- Constraints for table `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `noticias_ibfk_1` FOREIGN KEY (`Categoria`) REFERENCES `categoria` (`Id`),
  ADD CONSTRAINT `noticias_ibfk_2` FOREIGN KEY (`Facultad`) REFERENCES `facultad` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
