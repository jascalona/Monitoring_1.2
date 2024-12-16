-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.32-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for gxdeve_apps
CREATE DATABASE IF NOT EXISTS `gxdeve_apps` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `gxdeve_apps`;

-- Dumping structure for table gxdeve_apps.log_partner
CREATE TABLE IF NOT EXISTS `log_partner` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `surname` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `roll` varchar(50) DEFAULT NULL,
  `corporation` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table gxdeve_apps.log_partner: ~4 rows (approximately)
DELETE FROM `log_partner`;
INSERT INTO `log_partner` (`id`, `name`, `surname`, `email`, `password`, `roll`, `corporation`) VALUES
	(1, 'Jose', 'escalona', 'jose.escalona@grupoxven.com', '*xerox20', 'administrator', 'xdv'),
	(2, 'Manuel', 'Andrade', 'manuel.andrade@grupoxven.com', '*xerox20', 'administrador', 'xdv'),
	(3, 'test', 'test', NULL, 'test', 'Administrator', NULL),
	(4, 'test', 'test', NULL, 'test', 'Service', NULL);

-- Dumping structure for table gxdeve_apps.m_employees
CREATE TABLE IF NOT EXISTS `m_employees` (
  `name` varchar(100) DEFAULT NULL,
  `surname` varchar(100) DEFAULT NULL,
  `CI` int(11) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `customer` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `Cargo` varchar(200) DEFAULT NULL,
  `Credencial` int(11) NOT NULL,
  `Departamento` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='Personal General';

-- Dumping data for table gxdeve_apps.m_employees: ~34 rows (approximately)
DELETE FROM `m_employees`;
INSERT INTO `m_employees` (`name`, `surname`, `CI`, `email`, `customer`, `location`, `Cargo`, `Credencial`, `Departamento`) VALUES
	('Maikel', 'guia', 14952157, 'maikel.guia@grupoxven.com', 'CAF ', 'Miranda', 'Asesor Tecnologico', 1, 'DIR. SOLUCIONES & SERVICIOS'),
	('Juan', 'Torrealba', 27391277, 'Juan.torrealba@grupoxven.com', 'CAF ', 'Miranda', 'Asesor Tecnologico', 2, 'DIR. SOLUCIONES & SERVICIOS'),
	('Fernando', ' Mora', 6160334, 'fernando.mora@grupoxven.com', 'Farmatodo la Trinidad', 'Miranda', 'Asesor Tecnologico', 3, 'DIR. SOLUCIONES & SERVICIOS'),
	('Antonio', ' Martinez', 16903333, 'antonio.martinez@grupoxven.com', 'Farmatodo la Trinidad', 'Miranda', 'Asesor Tecnologico', 4, 'DIR. SOLUCIONES & SERVICIOS'),
	('Hender', ' Ramirez', 21148844, 'hender.ramirez@grupoxven.com', 'Farmatodo Charallave CDF', 'Miranda', 'Asesor Tecnologico', 5, 'DIR. SOLUCIONES & SERVICIOS'),
	('Luis', ' Jimenez', 30159160, 'luis.jimenez@gripoxven.com', 'Farmatodo Charallave Cendis', 'Miranda', 'Asesor Tecnologico', 6, 'DIR. SOLUCIONES & SERVICIOS'),
	('Diana', ' Rivas', 22694729, 'diana.rivas@grupoxven.com', 'Farmatodo Charallave CDF', 'Miranda', 'Asesor Tecnologico', 7, 'DIR. SOLUCIONES & SERVICIOS'),
	('Yuluika', ' Farias', 25517141, 'yuleika.farias@grupoxven.com', 'Farmatodo Charallave CDF', 'Miranda', 'Asesor Tecnologico', 8, 'DIR. SOLUCIONES & SERVICIOS'),
	('Daneiker', ' Marcano', 30697589, 'daneiker.marcano@grupoxven.com', 'Farmatodo Charallave CDF', 'Miranda', 'Asesor Tecnologico', 9, 'DIR. SOLUCIONES & SERVICIOS'),
	('Yirwins', ' Ramirez', 31079868, 'Yirwins.ramirez@grupoxven.com', 'Farmatodo Charallave Cendis', 'Miranda', 'Asesor Tecnologico', 10, 'DIR. SOLUCIONES & SERVICIOS'),
	('Pablo', ' Martinez', 19453432, 'pablo.martinez@grupoxven.com', 'Centro Empresarial Polar', 'Miranda', 'Asesor Tecnologico', 11, 'DIR. SOLUCIONES & SERVICIOS'),
	('Rayder', ' Baron', 19163916, 'rayder.baron@grupoxven.com', 'Centro Empresarial Polar', 'Miranda', 'Asesor Tecnologico', 12, 'DIR. SOLUCIONES & SERVICIOS'),
	('Robert', ' Salazar', 12688894, 'Robert.salazar@grupoxven.com', 'Centro Empresarial Polar', 'Miranda', 'Asesor Tecnologico', 13, 'DIR. SOLUCIONES & SERVICIOS'),
	('Denys', ' Tello', 17141475, 'denys.tello@grupoxven.com', 'Provincial', 'Distrito Capital', 'Asesor Tecnologico', 14, 'DIR. SOLUCIONES & SERVICIOS'),
	('Julio', ' Gutierrez', 10115229, 'julio.gutierrez@grupoxven.com', 'Provincial', 'Distrito Capital', 'Asesor Tecnologico', 15, 'DIR. SOLUCIONES & SERVICIOS'),
	('Marcos', ' Da Conceicao', 13844707, 'Marcos.DaConceicao@grupoxven.com', 'Bigott', 'Miranda', 'Asesor Tecnologico', 16, 'DIR. SOLUCIONES & SERVICIOS'),
	('Oswaldo', ' Magdaleno', 6160184, 'Oswaldo.Magdaleno@grupoxven.com', 'Defensa Publica', 'Distrito Capital', 'Asesor Tecnologico', 17, 'DIR. SOLUCIONES & SERVICIOS'),
	('Carlos', ' PEÑA', 27282353, 'carlos.pena@grupoxven.com', 'Kpmg', 'Miranda', 'Asesor Tecnologico', 18, 'DIR. SOLUCIONES & SERVICIOS'),
	('Jose', ' Azuaje', 16954047, 'jose.azuaje@grupoxven.com', 'DHL  La Guaira', 'La Guaira', 'Asesor Tecnologico', 19, 'DIR. SOLUCIONES & SERVICIOS'),
	('Aldo', ' Hernandez', 15039517, 'aldo.hernandez@grupoxven.com', 'Campo', 'Distrito Capital', 'Asesor Tecnologico', 20, 'DIR. SOLUCIONES & SERVICIOS'),
	('Deblin', ' Mora', 10869851, 'deblin.mora@grupoxven.com', 'Campo', 'Distrito Capital', 'Asesor Tecnologico', 21, 'DIR. SOLUCIONES & SERVICIOS'),
	('Daniel', ' Alvarado', 19086868, 'daniel.alvarado@grupoxven.com', 'Campo', 'Distrito Capital', 'Asesor Tecnologico', 22, 'DIR. SOLUCIONES & SERVICIOS'),
	('Alirio', ' Lopez', 9483969, 'alirio.lopez@grupoxven.com', 'Campo', 'Distrito Capital', 'Asesor Tecnologico', 23, 'DIR. SOLUCIONES & SERVICIOS'),
	('Jesus', ' Alvarado', 5136313, 'jesus.alvarado@grupoxven.com', 'Campo', 'Aragua', 'Asesor Tecnologico', 24, 'DIR. SOLUCIONES & SERVICIOS'),
	('Roberto', ' Orias', 9685538, 'robert.orias@grupoxven.com', 'Campo', 'Aragua', 'Asesor Tecnologico', 25, 'DIR. SOLUCIONES & SERVICIOS'),
	('José', ' Tabata', 8833698, 'jose.tabata@grupoxven.com', 'Campo', 'Valencia', 'Asesor Tecnologico', 26, 'DIR. SOLUCIONES & SERVICIOS'),
	('Ender', ' Bello', 7138682, 'ender.bello@grupoxven.com', 'Campo', 'Valencia', 'Coordinador de Servicios', 27, 'DIR. SOLUCIONES & SERVICIOS'),
	('Javier', ' Chang', 18058869, 'javier.chan@grupoxven.com', 'Campo', 'Barquisimeto', 'Asesor Tecnologico', 28, 'DIR. SOLUCIONES & SERVICIOS'),
	('Alexander', ' Montilla', 14764278, 'alexander.montilla@grupoxven.com', 'Campo', 'Barcelona', 'Asesor Tecnologico', 29, 'DIR. SOLUCIONES & SERVICIOS'),
	('Alexis', ' Aponte', 22001221, 'alexis.aponte@grupoxven.com', 'Polar Metalgrafica', 'Valencia', 'Asesor Tecnologico', 30, 'DIR. SOLUCIONES & SERVICIOS'),
	('Miguel', ' Flores', 13314267, 'miguel.flores@grupoxven.com', 'Polar Metalgrafica', 'Valencia', 'Asesor Tecnologico', 31, 'DIR. SOLUCIONES & SERVICIOS'),
	('Joan', ' Fernendes', 26422421, 'joan.fernendes@grupoxven.com', 'San Joaquin', 'Valencia', 'Asesor Tecnologico', 32, 'DIR. SOLUCIONES & SERVICIOS'),
	('Hendrickson', ' Salazar', 21257877, 'hendrickson.salazar@grupoxven.com', 'Polar Turmero', 'Aragua', 'Asesor Tecnologico', 33, 'DIR. SOLUCIONES & SERVICIOS'),
	('Roswill', ' Lopez', 27966217, 'roswill.lopez@grupoxven.com', 'Polar Chivacoa', 'Yaracuy', 'Asesor Tecnologico', 34, 'DIR. SOLUCIONES & SERVICIOS');

-- Dumping structure for table gxdeve_apps.m_uload
CREATE TABLE IF NOT EXISTS `m_uload` (
  `date` date DEFAULT NULL,
  `ci` int(11) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `cargo` varchar(200) DEFAULT NULL,
  `credenciales` int(11) NOT NULL,
  `customer` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `departamento` varchar(150) DEFAULT NULL,
  `location` varchar(300) DEFAULT NULL,
  KEY `credenciales` (`credenciales`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dumping data for table gxdeve_apps.m_uload: ~1 rows (approximately)
DELETE FROM `m_uload`;
INSERT INTO `m_uload` (`date`, `ci`, `surname`, `name`, `time`, `cargo`, `credenciales`, `customer`, `status`, `departamento`, `location`) VALUES
	('2024-11-05', 555555, 'Test', 'Test', '11:11:43', 'prueba', 43, 'Test', 'Entrada', 'admin', '10.4904889,-66.8499626');

-- Dumping structure for table gxdeve_apps.m_user_lg
CREATE TABLE IF NOT EXISTS `m_user_lg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CI` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `customer` varchar(150) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `roll` varchar(50) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `cargo` varchar(150) DEFAULT NULL,
  `departamento` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='User Login';

-- Dumping data for table gxdeve_apps.m_user_lg: ~42 rows (approximately)
DELETE FROM `m_user_lg`;
INSERT INTO `m_user_lg` (`id`, `CI`, `name`, `surname`, `customer`, `email`, `password`, `roll`, `location`, `cargo`, `departamento`) VALUES
	(1, 14952157, 'Maikel', 'guia', 'CAF', 'maikel.guia@grupoxven.com', '14952157', 'operator', 'Miranda', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(2, 27391277, 'Juan', 'Torrealba', 'CAF', 'Juan.torrealba@grupoxven.com', '27391277', 'operator', 'Miranda', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(3, 6160334, 'Fernando', ' Mora', 'Farmatodo la Trinidad', 'fernando.mora@grupoxven.com', '6160334', 'operator', 'Miranda', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(4, 16903333, 'Antonio', ' Martinez', 'Farmatodo la Trinidad', 'antonio.martinez@grupoxven.com', '16903333', 'operator', 'Miranda', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(5, 21148844, 'Hender', ' Ramirez', 'Farmatodo Charallave CDF', 'hender.ramirez@grupoxven.com', '21148844', 'operator', 'Miranda', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(6, 30159160, 'Luis', ' Rodriguez', 'Farmatodo Charallave CDF', 'luis.rodriguez@grupoxven.com', '30159160', 'operator', 'Miranda', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(7, 22694729, 'Diana', ' Rivas', 'Farmatodo Charallave CDF', 'diana.rivas@grupoxven.com', '22694729', 'operator', 'Miranda', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(8, 25517141, 'Yuluika', ' Farias', 'Farmatodo Charallave CDF', 'yuleika.farias@grupoxven.com', '25517141', 'operator', 'Miranda', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(9, 30697589, 'Daneiker', ' Marcano', 'Farmatodo Charallave CDF', 'daneiker.marcano@grupoxven.com', '30697589', 'operator', 'Miranda', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(10, 30159160, 'Luis', ' Jimenez', 'Farmatodo Charallave Cendis', 'luis.jimenez@gripoxven.com', '30159160', 'operator', 'Miranda', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(11, 31079868, 'Yirwins', ' Ramirez', 'Farmatodo Charallave Cendis', 'Yirwins.ramirez@grupoxven.com', '31079868', 'operator', 'Miranda', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(12, 19453432, 'Pablo', ' Martinez', 'Centro Empresas Polar', 'pablo.martinez@grupoxven.com', '19453432', 'operator', 'Miranda', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(13, 19163916, 'Rayder', ' Baron', 'Centro Empresas Polar', 'rayder.baron@grupoxven.com', '19163916', 'operator', 'Miranda', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(14, 12688894, 'Robert', ' Salazar', 'Polar Turmero', 'Robert.salazar@grupoxven.com', '12688894', 'operator', 'Miranda', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(15, 17141475, 'Denys', ' Tello', 'Provincial', 'denys.tello@grupoxven.com', '17141475', 'operator', 'Distrito Capital', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(16, 10115229, 'Julio', ' Gutierrez', 'Provincial', 'julio.gutierrez@grupoxven.com', '10115229', 'operator', 'Distrito Capital', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(17, 13844707, 'Marcos', ' Da Conceicao', 'Bigott', 'Marcos.DaConceicao@grupoxven.com', '13844707', 'operator', 'Miranda', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(18, 6160184, 'Oswaldo', ' Magdaleno', 'Defensa Publica', 'Oswaldo.Magdaleno@grupoxven.com', '6160184', 'operator', 'Distrito Capital', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(19, 27282353, 'Carlos', ' PEÑA', 'Kpmg', 'carlos.pena@grupoxven.com', '27282353', 'operator', 'Miranda', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(20, 16954047, 'Jose', ' Azuaje', 'DHL la Guaira', 'jose.azuaje@grupoxven.com', '16954047', 'operator', 'La Guaira', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(21, 15039517, 'Aldo', ' Hernandez', 'Campo', 'aldo.hernandez@grupoxven.com', '15039517', 'operator', 'Distrito Capital', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(22, 10869851, 'Deblin', ' Mora', 'Campo', 'deblin.mora@grupoxven.com', '10869851', 'operator', 'Distrito Capital', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(23, 19086868, 'Daniel', ' Alvarado', 'Campo', 'daniel.alvarado@grupoxven.com', '19086868', 'operator', 'Distrito Capital', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(24, 9483969, 'Alirio', ' Lopez', 'Campo', 'alirio.lopez@grupoxven.com', '*xerox21', 'operator', 'Distrito Capital', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(25, 5136313, 'Jesus', ' Alvarado', 'Campo', 'jesus.alvarado@grupoxven.com', '5136313', 'operator', 'Aragua', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(26, 9685538, 'Roberto', ' Orias', 'Campo', 'robert.orias@grupoxven.com', '9685538', 'operator', 'Aragua', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(27, 8833698, 'José', ' Tabata', 'Campo', 'jose.tabata@grupoxven.com', '8833698', 'operator', 'Valencia', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(28, 7138682, 'Ender', ' Bello', 'Campo', 'ender.bello@grupoxven.com', '7138682', 'operator', 'Valencia', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(29, 18058869, 'Javier', ' Chang', 'Campo', 'javier.chan@grupoxven.com', '18058869', 'operator', 'Barquisimeto', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(30, 14764278, 'Alexander', ' Montilla', 'Campo', 'alexander.montilla@grupoxven.com', '14764278', 'operator', 'Barcelona', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(31, 22001221, 'Alexis', ' Aponte', 'Polar Metalgrafica', 'alexis.aponte@grupoxven.com', '22001221', 'operator', 'Valencia', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(32, 13314267, 'Miguel', ' Flores', 'Polar Metal Grafica', 'miguel.flores@grupoxven.com', '13314267', 'operator', 'Valencia', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(33, 26422421, 'Joan', ' Fernendes', 'San Joaquin Polar', 'joan.fernendes@grupoxven.com', '26422421', 'operator', 'Valencia', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(34, 21257877, 'Hendrickson', ' Salazar', 'Polar Turmero', 'hendrickson.salazar@grupoxven.com', '21257877', 'operator', 'Aragua', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(35, 27966217, 'Roswill', ' Lopez', 'Polar Chivacoa', 'roswill.lopez@grupoxven.com', '27966217', 'operator', 'Yaracuy', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(36, 101010, 'Manuel', 'Andrade', 'XDV', 'manuel.andrade@grupoxven.com', '*xerox20', 'administrator', 'XDV', 'Gerente', 'Servicios Tecnologicos'),
	(37, 28434878, 'Carlos', 'Barboza', 'XDV', 'carlos.barboza@grupoxven.com', '28434878', 'operator', 'Distrito Capital', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(38, 30221960, 'Jose', 'Escalona', 'XDV', 'jose.escalona@grupoxven.com', '*xerox20', 'administrator', 'Distrito Capital', 'Coordinador', 'Servicios Tecnologicos'),
	(39, 20569778, 'Pedro', 'Perez', 'XDV', 'pedro.perez@grupoxven.com', '20569778', 'administrator', 'Distrito Capital', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(40, 2021450, 'Doris', 'Montenegro', 'XDV', 'doris.montenegro@grupoxven.com', '1010', 'operator', 'caracas', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(41, 5214785, 'prueba', 'prueba', 'prueba', 'admin@grupoxven.com', 'prueba', 'operator', 'prueba', 'Asesor Tecnologico', 'Servicios Tecnologicos'),
	(43, 555555, 'Test', 'Test', 'Test', 'Test@grupoxven.com', '3030', 'operator', 'guatire', 'prueba', 'admin');

-- Dumping structure for table gxdeve_apps.vl_b405
CREATE TABLE IF NOT EXISTS `vl_b405` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `caracteristicas` mediumtext NOT NULL,
  `instalacion` mediumtext NOT NULL,
  `teoria_funtion` mediumtext NOT NULL,
  `mantenimiento` mediumtext NOT NULL,
  `herra_ajustes` mediumtext NOT NULL,
  `problemas_principales` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table gxdeve_apps.vl_b405: ~4 rows (approximately)
DELETE FROM `vl_b405`;
INSERT INTO `vl_b405` (`id`, `caracteristicas`, `instalacion`, `teoria_funtion`, `mantenimiento`, `herra_ajustes`, `problemas_principales`) VALUES
	(1, 'Las impresoras compactas VersaLink B400 y B405 están diseñadas para entornos de oficina pequeños donde la versatilidad y la velocidad son importantes.\r\nEn esta lección, aprenderá sobre las características clave de cada modelo.', '', '', '', '', ''),
	(2, 'Caracteristicas:\r\n\r\nVelocidad de salida: 47 ppm (tamaño carta), 45 ppm (tamaño A4)\r\n\r\nCapacidad de la bandeja de papel principal: 550 hojas\r\n\r\nCapacidad de la bandeja bypass: 150 hojas\r\n\r\nResolución de copia e impresión: Hasta 1200 x 1200 ppp\r\n\r\nSalida de dos caras: Estándar\r\n\r\nEscanear: Escanear a USB, correo electrónico, red\r\n', '', '', '', '', ''),
	(4, 'Las impresoras VersaLink ofrecen una interfaz de pantalla táctil a color para el control de la impresora. Esta interfaz utiliza una interfaz de estilo "aplicación" móvil para teléfonos inteligentes, que es la interfaz de usuario estándar del sistema operativo Nextwave y cuenta con lo siguiente:\r\n\r\nExperiencia móvil\r\n\r\nAplicaciones centradas en tareas\r\n\r\nFácilmente personalizable para alinearse con el flujo de trabajo de los usuarios.\r\n\r\nInteracción familiar basada en gestos\r\n\r\nBotones duros mínimos\r\n\r\nUtilice el panel de control Ul para tareas como diagnosticar problemas, acceder a datos internos de la máquina, conectarse a una red inalámbrica y ejecutar copias de prueba.\r\n\r\n', '', '', '', '', ''),
	(5, 'Al igual que con otros productos de oficina de Xerox, Xerox ofrece una selección de controladores para la funcionalidad de impresión y escaneo.\r\n\r\nEl proceso de instalación del controlador es el mismo que para otros productos de oficina que utilizan la utilidad Xerox Wizard.\r\n\r\n• Postscript es el controlador de impresión recomendado para los productos VersaLink B400 y B405. También hay otros controladores disponibles\r\n\r\n• Se proporcionan controladores de escaneo WIA y TWAIN\r\n\r\n• Se pueden instalar varios controladores de impresión y escaneo a la vez con el Asistente de Xerox', '', '', '', '', '');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
