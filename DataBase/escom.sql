-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 23-06-2021 a las 03:46:05
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escom`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `admin_user` varchar(15) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`admin_user`, `admin_password`) VALUES
('admin', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `student_id` varchar(10) NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `student_first_surname` varchar(30) NOT NULL,
  `student_second_surname` varchar(30) DEFAULT NULL,
  `student_curp` varchar(18) NOT NULL,
  `student_date_of_birth` date NOT NULL,
  `student_gender` varchar(9) NOT NULL,
  `student_state` varchar(40) NOT NULL,
  `student_municipality` varchar(40) NOT NULL,
  `student_neighborhood` varchar(40) NOT NULL,
  `student_street` varchar(60) NOT NULL,
  `student_postal_code` int(5) NOT NULL,
  `student_home_phone` varchar(10) NOT NULL,
  `student_phone_number` varchar(10) NOT NULL,
  `student_email` varchar(40) NOT NULL,
  `student_school_of_origin` varchar(40) DEFAULT NULL,
  `student_state_of_origin` varchar(40) NOT NULL,
  `student_final_grade` float NOT NULL,
  `student_escom_order` varchar(30) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `students`
--

INSERT INTO `students` (`student_id`, `student_name`, `student_first_surname`, `student_second_surname`, `student_curp`, `student_date_of_birth`, `student_gender`, `student_state`, `student_municipality`, `student_neighborhood`, `student_street`, `student_postal_code`, `student_home_phone`, `student_phone_number`, `student_email`, `student_school_of_origin`, `student_state_of_origin`, `student_final_grade`, `student_escom_order`) VALUES
('2020630500', 'Emilio', 'MÃ©ndez', 'MÃ©ndez', 'MEHE001101HDFNPMA0', '2000-01-01', 'Masculino', 'Aguascalientes', 'Metepec', 'Llano grande', 'Latanias 719', 52150, '7221480760', '7221480760', 'emendez0017@gmail.com', 'Cecyt #4 LÃ¡zaro CÃ¡rdenas del RÃ­o', 'Baja California', 1, '1 OpciÃ³n'),
('2020630550', 'Ana', 'Perez', 'Lopez', 'MEHE001101HDFNPMA0', '2000-02-03', 'Femenino', 'Campeche', 'Metepec', 'Lindavista', 'Latanias 719', 52150, '7221480760', '7221480760', 'emendez0017@gmail.com', 'Cecyt #3 Estanislao Ramirez RuÃ­z', 'Campeche', 8.5, '1 Opción'),
('2020630583', 'Emilio', 'Mendez', 'Hipolito', 'MEHE001101HDFNPMA0', '2000-11-01', 'Masculino', 'Estado de MÃ©xico', 'Metepec', 'Llano grande', 'Latanias 719', 52150, '7223274117', '7221480760', 'emendez0017@gmail.com', 'Otro', 'Estado de MÃ©xico', 9.5, '1 OpciÃ³n'),
('2020630584', 'Juan', 'Perez', 'Lopez', 'MEGJ630730HDFNNV05', '2001-02-03', 'Masculino', 'Ciudad de MÃ©xico', 'Gustavo A. Madero', 'Lindavista', 'Latanias 719', 52148, '5505215784', '7494946661', 'emendez0017@gmail.com', 'Cecyt #17 LeÃ³n, Guanajuato', 'Guanajuato', 8.52, '2 Opción'),
('2020630585', 'ÃEÃ­ou', 'MÃ©ndez', 'HipÃ³lito', 'MEHE001101HDFNPMA0', '2010-01-01', 'Otro', 'Estado de MÃ©xico', 'Metepec', 'Lindavista', 'Latanias 719', 52150, '7221480760', '7221480760', 'emendez0017@gmail.com', 'Cecyt #4 LÃ¡zaro CÃ¡rdenas del RÃ­o', 'Ciudad de MÃ©xico', 5.63, '1 OpciÃ³n'),
('2020630600', 'Emilio', 'Hipolito', 'Mendez', 'MEHE001101HDFNPMA0', '2000-03-02', 'Masculino', 'Aguascalientes', 'Metepec', 'LLANO GRANDE', 'Latanias 719', 52148, '7221480760', '7221480760', 'emden@gmail.com', 'Cecyt #1 Gonzalo VÃ¡zquez Vela', 'Baja California', 9.5, '2 Opción'),
('2020630700', 'Jose ', 'GarcÃ­a', 'HernÃ¡ndez', 'MEHE001101HDFNPMT0', '2003-02-03', 'Otro', 'Campeche', 'Metepec', 'Llano grande', 'Latanias 719', 52150, '7223274117', '7223800107', 'emendez0017@gmail.com', 'Cecyt #15 DiÃ³doro AntÃºnez Echegaray', 'Coahuila de Zaragoza', 7.56, '2 OpciÃ³n'),
('PE00000001', 'Luis', 'PÃ©rez', 'HipÃ³lito', 'MEHE001101HDFNPM00', '1998-05-04', 'Masculino', 'MichoacÃ¡n de Ocampo', 'Metepec', 'Lindavista', 'Latanias 719', 52150, '7221480760', '7221480760', 'tec.web.escom@gmail.com', 'Cecyt #15 DiÃ³doro AntÃºnez Echegaray', 'Estado de MÃ©xico', 6.5, '3 OpciÃ³n'),
('PE01010101', 'Carlos', 'Mejia', 'Gomez', 'MEGJ630730HDFNNV05', '1999-02-06', 'Masculino', 'Durango', 'Toluca', 'Los Portales', 'Morelos', 52140, '7221234568', '7221459877', 'emendez0017@gmail.com', 'Cecyt #15 DiÃ³doro AntÃºnez Echegaray', 'Campeche', 8.23, '4 OpciÃ³n'),
('PE87654321', 'Lucia', 'HernÃ¡ndez', 'MÃ©ndez', 'MEHE001101HDFNPMA0', '2000-06-05', 'Masculino', 'Baja California Sur', 'Metepec', 'Los Portales', 'Latanias 719', 52159, '7221480767', '7221480767', 'emendez0017@gmail.com', 'Cecyt #3 Estanislao RamÃ­rez RuÃ­z', 'Baja California', 6.32, '3 OpciÃ³n'),
('PP12345678', 'Adriana', 'HernÃ¡ndez', 'Reyes', 'MEHA980302MMCNPD03', '1998-03-02', 'Femenino', 'Durango', 'Acapulco', 'Costa', '16 de Septiembre', 52487, '5531849994', '7989561313', 'emendez0017@gmail.com', 'Cecyt #2 Miguel Bernard Perales', 'Campeche', 9.45, '2 OpciÃ³n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `timetable`
--

DROP TABLE IF EXISTS `timetable`;
CREATE TABLE IF NOT EXISTS `timetable` (
  `student_id` varchar(10) NOT NULL,
  `laboratory` varchar(10) NOT NULL,
  `horary` datetime NOT NULL,
  KEY `fk_student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `timetable`
--

INSERT INTO `timetable` (`student_id`, `laboratory`, `horary`) VALUES
('2020630583', 'LAB11', '2021-06-22 10:00:00'),
('2020630584', 'LAB11', '2021-06-22 10:00:00'),
('2020630550', 'LAB11', '2021-06-22 10:00:00'),
('2020630600', 'LAB11', '2021-06-22 10:00:00'),
('2020630500', 'LAB11', '2021-06-22 10:00:00'),
('PE00000001', 'LAB11', '2021-06-22 10:00:00'),
('2020630700', 'LAB11', '2021-06-22 10:00:00'),
('PE01010101', 'LAB11', '2021-06-22 10:00:00'),
('PP12345678', 'LAB11', '2021-06-22 10:00:00'),
('PE87654321', 'LAB11', '2021-06-22 10:00:00'),
('2020630585', 'LAB11', '2021-06-22 10:00:00');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `timetable`
--
ALTER TABLE `timetable`
  ADD CONSTRAINT `fk_student_id` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
