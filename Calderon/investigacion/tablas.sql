CREATE TABLE IF NOT EXISTS `primeratabla` (
`articulo` int(26) NOT NULL,
  `nombre` tinytext CHARACTER SET utf8 NOT NULL,
  `descripcion` tinytext CHARACTER SET utf8 NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
INSERT INTO `primeratabla` (`articulo`, `nombre`, `descripcion`, `precio`) VALUES
(1, 'primerarticulo', 'Descripcion 1', 0);
CREATE TABLE IF NOT EXISTS `segundatabla` (
  `articulo` int(26) NOT NULL,
  `nombre` tinytext CHARACTER SET utf8 NOT NULL,
  `descripcion` tinytext CHARACTER SET utf8 NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `segundatabla` (`articulo`, `nombre`, `descripcion`, `precio`) VALUES
(0, 'segundoarticulo', 'Descripcion 2', 1),
(1, 'tercerarticulo', 'Descripcion 3', 1);
