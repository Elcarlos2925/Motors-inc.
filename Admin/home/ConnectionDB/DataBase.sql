-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 13-06-2024 a las 18:16:49
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
-- Base de datos: `Motors-inc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipmentInventory`
--

CREATE TABLE `equipmentInventory` (
  `name` varchar(20) NOT NULL,
  `hostName` varchar(20) NOT NULL,
  `ipAdress` varchar(15) NOT NULL,
  `classification` varchar(15) NOT NULL,
  `location` varchar(10) NOT NULL,
  `department` varchar(70) NOT NULL,
  `assignedTo` varchar(50) NOT NULL,
  `trademark` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `cpu` varchar(50) NOT NULL,
  `hddSize` varchar(15) NOT NULL,
  `ramSize` varchar(15) NOT NULL,
  `serviceTag` varchar(10) NOT NULL,
  `serialNumber` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `equipmentInventory`
--

INSERT INTO `equipmentInventory` (`name`, `hostName`, `ipAdress`, `classification`, `location`, `department`, `assignedTo`, `trademark`, `model`, `cpu`, `hddSize`, `ramSize`, `serviceTag`, `serialNumber`) VALUES
('A0130', 'A0130', '172.245.12', 'Desktop', 'Line 9', 'Programming', 'SMT', 'DELL', 'DELL', 'Intel Core i7', '1TB', '3GB', 'AAA', 'AAA'),
('	AOI31	 ', '	AOI31	 ', '	172.16.1.224	 ', '	Desktop	 ', '	Line 9	 ', '	Programming	 ', '	SMT	 ', '	\"DELL	\"	 ', '	DELL	 ', '	Intel Core i7	 ', '	\"1TB	\"	 ', '	\"3GB	\"	 ', '	7G0B2S2	 ', '	7G0B2S2	 '),
('	AOI32	 ', '	AOI32	 ', '	172.16.1.225	 ', '	Desktop	 ', '	Line 9	 ', '	Programming	 ', '	SMT	 ', '	\"DELL	\"	 ', '	DELL	 ', '	Intel Core i7	 ', '	\"1TB	\"	 ', '	\"3GB	\"	 ', '	7G0B2S3	 ', '	7G0B2S3	 '),
('	AOI33	 ', '	AOI33	 ', '	172.16.1.226	 ', '	Desktop	 ', '	Line 9	 ', '	Programming	 ', '	SMT	 ', '	\"DELL	\"	 ', '	DELL	 ', '	Intel Core i7	 ', '	\"1TB	\"	 ', '	\"3GB	\"	 ', '	7G0B2S4	 ', '	7G0B2S4	 '),
('	AOI34	 ', '	AOI34	 ', '	172.16.1.227	 ', '	Desktop	 ', '	Line 9	 ', '	Programming	 ', '	SMT	 ', '	\"DELL	\"	 ', '	DELL	 ', '	Intel Core i7	 ', '	\"1TB	\"	 ', '	\"3GB	\"	 ', '	7G0B2S5	 ', '	7G0B2S5	 '),
('	AOI35	 ', '	AOI35	 ', '	172.16.1.228	 ', '	Desktop	 ', '	Line 9	 ', '	Programming	 ', '	SMT	 ', '	\"DELL	\"	 ', '	DELL	 ', '	Intel Core i7	 ', '	\"1TB	\"	 ', '	\"3GB	\"	 ', '	7G0B2S6	 ', '	7G0B2S6	 '),
('	AOI36	 ', '	AOI36	 ', '	172.16.1.229	 ', '	Desktop	 ', '	Line 10	 ', '	Programming	 ', '	SMT	 ', '	\"DELL	\"	 ', '	DELL	 ', '	Intel Core i7	 ', '	\"1TB	\"	 ', '	\"3GB	\"	 ', '	7G0B2S7	 ', '	7G0B2S7	 '),
('	AOI37	 ', '	AOI37	 ', '	172.16.1.230	 ', '	Desktop	 ', '	Line 11	 ', '	Programming	 ', '	SMT	 ', '	\"DELL	\"	 ', '	DELL	 ', '	Intel Core i7	 ', '	\"1TB	\"	 ', '	\"3GB	\"	 ', '	7G0B2S8	 ', '	7G0B2S8	 '),
('	AOI38	 ', '	AOI38	 ', '	172.16.1.231	 ', '	Desktop	 ', '	Line 12	 ', '	Programming	 ', '	SMT	 ', '	\"DELL	\"	 ', '	DELL	 ', '	Intel Core i7	 ', '	\"1TB	\"	 ', '	\"3GB	\"	 ', '	7G0B2S9	 ', '	7G0B2S9	 '),
('	AOI39	 ', '	AOI39	 ', '	172.16.1.232	 ', '	Desktop	 ', '	Line 13	 ', '	Programming	 ', '	SMT	 ', '	\"DELL	\"	 ', '	DELL	 ', '	Intel Core i7	 ', '	\"1TB	\"	 ', '	\"3GB	\"	 ', '	7G0B2S10	', '	7G0B2S10	'),
('	AOI40	 ', '	AOI40	 ', '	172.16.1.233	 ', '	Desktop	 ', '	Line 14	 ', '	Programming	 ', '	SMT	 ', '	\"DELL	\"	 ', '	DELL	 ', '	Intel Core i7	 ', '	\"1TB	\"	 ', '	\"3GB	\"	 ', '	7G0B2S11	', '	7G0B2S11	'),
('	AOI41	 ', '	AOI41	 ', '	172.16.1.234	 ', '	Desktop	 ', '	Line 15	 ', '	Programming	 ', '	SMT	 ', '	\"DELL	\"	 ', '	DELL	 ', '	Intel Core i7	 ', '	\"1TB	\"	 ', '	\"3GB	\"	 ', '	7G0B2S12	', '	7G0B2S12	'),
('	AOI42	 ', '	AOI42	 ', '	172.16.1.235	 ', '	Desktop	 ', '	Line 16	 ', '	Programming	 ', '	SMT	 ', '	\"DELL	\"	 ', '	DELL	 ', '	Intel Core i7	 ', '	\"1TB	\"	 ', '	\"3GB	\"	 ', '	7G0B2S13	', '	7G0B2S13	'),
('	AOI43	 ', '	AOI43	 ', '	172.16.1.236	 ', '	Desktop	 ', '	Line 17	 ', '	Programming	 ', '	SMT	 ', '	\"DELL	\"	 ', '	DELL	 ', '	Intel Core i7	 ', '	\"1TB	\"	 ', '	\"3GB	\"	 ', '	7G0B2S14	', '	7G0B2S14	');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

CREATE TABLE `events` (
  `idEvent` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descriptionEvent` text NOT NULL,
  `startEvent` datetime NOT NULL,
  `endEvent` datetime NOT NULL,
  `textColor` varchar(7) NOT NULL,
  `backgroundColor` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `events`
--

INSERT INTO `events` (`idEvent`, `title`, `descriptionEvent`, `startEvent`, `endEvent`, `textColor`, `backgroundColor`) VALUES
(1, 'Odette Franco', 'Desarrollar casos de uso', '2024-04-01 01:00:00', '2024-04-01 23:59:59', '#ffffff', '#17FF81'),
(2, 'Karla Trillo', 'Revisar documentación', '2024-04-02 00:00:00', '2024-04-03 23:59:00', '#ffffff', '#7300ff'),
(4, 'Omar Mendez', 'Reporte de equipos para clientes', '2024-06-04 07:00:00', '2024-06-10 19:00:00', '#ffffff', '#284b63'),
(5, 'Karla Trillo ', 'Junta con proveedor de equipo AOI (Saki)', '2024-06-03 08:00:00', '2024-06-03 09:30:00', '#ffffff', '#d77ea2'),
(6, 'Carlos Lozoya', 'Junta con departamento de producción.', '2024-06-10 09:00:00', '2024-06-10 10:00:00', '#ffffff', '#4da9ff'),
(7, 'Alexis Martinez', 'Inventario de equipos', '2024-06-05 08:00:00', '2024-06-12 17:00:00', '#ffffff', '#73c9c3'),
(9, 'Omar Mendez', 'Restablecer el disco duro de AOI31 y AOI29', '2024-06-13 00:00:00', '2024-06-13 00:00:00', '#ffffff', '#f2740d'),
(10, 'Karla Trillo Cabral', 'Actualizar formatos IGR 001 R02 en todas las lineas de producción', '2024-06-06 07:00:00', '2024-06-10 19:00:00', '#ffffff', '#a85d90'),
(11, 'Roberto', 'Pasar Examen', '2024-05-18 01:15:00', '2024-05-26 06:55:00', '#ffffff', '#00ff40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ictMaintenaince`
--

CREATE TABLE `ictMaintenaince` (
  `Title` varchar(300) NOT NULL,
  `Responsible` varchar(100) NOT NULL,
  `Activity` varchar(300) NOT NULL,
  `startDay` datetime NOT NULL,
  `limitDay` datetime NOT NULL,
  `Finished` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ictMaintenaince`
--

INSERT INTO `ictMaintenaince` (`Title`, `Responsible`, `Activity`, `startDay`, `limitDay`, `Finished`) VALUES
('Fixtura ICTPB081903210074', 'Alexis Martinez', 'Mantenaince', '2024-05-08 12:00:00', '2024-05-09 12:00:00', 1),
('Fixtura ICTPB081903210073', 'Carlos Lozoya', 'Mantenaince', '2024-05-05 10:00:00', '2024-05-06 11:00:00', 0),
('Fixtura ICTPB081903210076', 'Karla Trillo', 'Mantenaince', '2024-05-17 02:10:00', '2024-11-17 02:10:00', 1),
('Fixtura ICTPB081903210071', 'Omar Mendez', 'Calibration', '2024-01-06 12:00:00', '2024-06-06 12:00:00', 0),
('Fixtura ICTPB081903210072', 'Odette Franco', 'Calibration', '2024-03-14 10:50:00', '2024-10-14 10:50:00', 1),
('Fixtura ICTPB081903210075', 'Carlos Lozoya', 'Mantenaince', '2024-05-09 11:55:00', '2024-06-09 11:55:00', 0),
('Maquina1', 'Alexis', 'Mantenimiento', '2024-06-01 02:10:00', '2024-05-19 02:10:00', 0),
('maquina 2', 'carlos', 'Mantenimiento', '2024-05-26 02:10:00', '2024-06-08 02:20:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `passRateToday`
--

CREATE TABLE `passRateToday` (
  `model` varchar(80) NOT NULL,
  `total_production` int(11) NOT NULL,
  `fr` int(11) NOT NULL,
  `ok` int(11) NOT NULL,
  `fr_percentage` varchar(6) NOT NULL,
  `ok_percentage` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `passRateToday`
--

INSERT INTO `passRateToday` (`model`, `total_production`, `fr`, `ok`, `fr_percentage`, `ok_percentage`) VALUES
('E3-10119E30052', 2964, 161, 2803, '2.43', '97.57'),
('E3-10129P17D21', 1988, 0, 1988, '0', '100'),
('E3-23406AAJX', 1213, 4, 1209, '0.33', '99.67'),
('E3-441-09-DB3B', 2596, 44, 2552, '1.69', '98.31'),
('E3-949502-31CB', 162, 0, 162, '0', '100'),
('E3-95018-154', 2304, 171, 2133, '7.42', '92.58'),
('E3-0341B510BX', 4356, 54, 4302, '1.24', '98.76'),
('E3-W343F01872', 20, 20, 0, '100', '0'),
('E3-W343F04274', 824, 96, 728, '11.65', '88.35'),
('E3-X001TL0382H', 2613, 32, 2581, '1.22', '98.78'),
('F3-X1T66895H7X', 1428, 44, 1384, '3.08', '96.92'),
('E3-X1T84791H17', 6, 0, 6, '0', '100');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pcbsLocation`
--

CREATE TABLE `pcbsLocation` (
  `client` varchar(50) DEFAULT NULL,
  `models` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `expirationVerification` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `tipPcbTypele` varchar(50) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pcbsLocation`
--

INSERT INTO `pcbsLocation` (`client`, `models`, `department`, `expirationVerification`, `status`, `tipPcbTypele`, `position`) VALUES
('BGM', 'E2-95018-154', 'AOI', '24-01-2025', 0, 'OK', 'Carro 2 POS #4'),
('	BCM	 ', '	E1-X1TL1672HXZ	 ', '	AOI	 ', '	24-04-2024	 ', 0, '	OK	 ', '	Carro 2 pos#1	 '),
('	GWU	 ', '	E2-X001TL0382H	 ', '	AOI 	 ', '	15-06-2024	 ', 1, '	NG	 ', '	Carro 1 pos#8	 '),
('	NAL	 ', '	E1-949 441 09	 ', '	AOI 	 ', '	10-02-2024	 ', 0, '	NG	 ', '	Carro 2 pos#6	 '),
('	MAGNA	 ', '	E2-28587	 ', '	AOI 	 ', '	18-08-2024	 ', 1, '	OK	 ', '	Carro 2 pos#3	 '),
('	EPS	 ', '	E1-Q34B4166LX	 ', '	ICT	 ', '	23-06-2024	 ', 1, '	OK	 ', '	Carro 1 pos#3	 '),
('	R1-LOW	 ', '	E1-N925L37515	 ', '	ICT	 ', '	07-03-2024	 ', 0, '	OK	 ', '	Carro 1 pos#1	 '),
('	LCM	 ', '	E2-W34F0804	 ', '	ICT	 ', '	06-06-2024	 ', 1, '	NG	 ', '	Carro 1 pos#4	 '),
('	LFU	 ', '	E1-X1T66885HHZX	 ', '	AOI	 ', '	29-05-2024	 ', 1, '	OK	 ', '	Carro 2 pos#1	 '),
('	CID	 ', '	E2-N92570511	 ', '	AOI	 ', '	04-07-2024	 ', 0, '	OK	 ', '	Carro 2 pos#1	 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `username` varchar(99) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subarea` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`idUser`, `username`, `name`, `subarea`, `role`, `phone`, `password`) VALUES
(1, 'OdetteF', 'Odette Franco', 'Tics', 'Admin', '6641234567', 'OdetteF'),
(2, 'KarlaT', 'Karla Trillo', 'Tics', 'User', '6642345678', 'KarlaT'),
(3, 'CarlosL', 'Carlos Lozoya', 'Tics', 'Admin', '6643456789', 'CarlosL'),
(4, 'AlexisM', 'Alexis Martinez', 'Tics', 'User', '6644567890', 'AlexisM'),
(5, 'OmarM', 'Omar Mendez', 'Tics', 'Admin', '6645678901', 'OmarM'),
(6, 'JulioM', 'Julio Martinez', 'Tics', 'User', '6646789012', 'JulioM');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`idEvent`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `events`
--
ALTER TABLE `events`
  MODIFY `idEvent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

