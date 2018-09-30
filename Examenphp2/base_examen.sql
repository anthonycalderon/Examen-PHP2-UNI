-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.21 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.5.0.5289
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para php2examen
CREATE DATABASE IF NOT EXISTS `php2examen` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `php2examen`;

-- Volcando estructura para tabla php2examen.alumnos
CREATE TABLE IF NOT EXISTS `alumnos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `apellidos` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `fnac` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla php2examen.alumnos: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `alumnos` DISABLE KEYS */;
INSERT INTO `alumnos` (`id`, `apellidos`, `nombre`, `fnac`) VALUES
	(1, 'Torres', 'Jaimito', '2000-09-30'),
	(2, 'Galarza', 'Maria Pia', '2000-06-22'),
	(3, 'Lopez', 'Pepita', '2018-09-30');
/*!40000 ALTER TABLE `alumnos` ENABLE KEYS */;

-- Volcando estructura para tabla php2examen.cursos
CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla php2examen.cursos: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` (`id`, `nombre`, `estado`) VALUES
	(1, 'PHP 0', 1),
	(2, 'PHP1', 1),
	(3, 'PHP 2', 1);
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;

-- Volcando estructura para tabla php2examen.promedios
CREATE TABLE IF NOT EXISTS `promedios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_alumno` int(11) DEFAULT NULL,
  `id_curso` int(11) DEFAULT NULL,
  `promedio` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_alumno_id_curso` (`id_alumno`,`id_curso`),
  KEY `FK_promedio_cursos` (`id_curso`),
  CONSTRAINT `FK_promedio_alumnos` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`id`),
  CONSTRAINT `FK_promedio_cursos` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla php2examen.promedios: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `promedios` DISABLE KEYS */;
INSERT INTO `promedios` (`id`, `id_alumno`, `id_curso`, `promedio`) VALUES
	(1, 1, 2, 13.58);
/*!40000 ALTER TABLE `promedios` ENABLE KEYS */;

-- Volcando estructura para tabla php2examen.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nick` varchar(50) DEFAULT NULL,
  `clave` varchar(50) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla php2examen.usuarios: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nick`, `clave`, `estado`) VALUES
	(1, 'admin', 'admin', 1),
	(2, 'user', 'user', 1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

-- Volcando estructura para vista php2examen.vistareporte
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `vistareporte` (
	`idAlumno` INT(11) NOT NULL,
	`apellidos` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`nombreAlumno` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`fnac` DATE NULL,
	`idCurso` INT(11) NULL,
	`nombreCurso` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`idPromedio` INT(11) NULL,
	`promedio` DOUBLE NULL
) ENGINE=MyISAM;

-- Volcando estructura para vista php2examen.vistareporte
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `vistareporte`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vistareporte` AS select `a`.`id` AS `idAlumno`,`a`.`apellidos` AS `apellidos`,`a`.`nombre` AS `nombreAlumno`,`a`.`fnac` AS `fnac`,`c`.`id` AS `idCurso`,`c`.`nombre` AS `nombreCurso`,`b`.`id` AS `idPromedio`,`b`.`promedio` AS `promedio` from ((`alumnos` `a` left join `promedios` `b` on((`a`.`id` = `b`.`id_alumno`))) left join `cursos` `c` on((`b`.`id_curso` = `c`.`id`)));

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
