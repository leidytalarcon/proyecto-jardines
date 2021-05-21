-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 21-04-2021 a las 18:54:40
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--


CREATE TABLE `administrador` (
  `id_admin` int(11) NOT NULL,
  `documento_admin` int(10) DEFAULT NULL,
  `nombre_admin` varchar(45) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `contrasena` varchar(45) DEFAULT NULL,
  `rol_id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
INSERT INTO mydb.administrador(documento_Admin, nombre_admin,telefono,username,contrasena,rol_id_rol)
VALUES(1234,'admin2',12344,'admin@2.com','asdasd',1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL,
  `codigo` int(11) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `n_estudiantes` int(11) DEFAULT NULL,
  `docente_id_docente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id_curso`, `codigo`, `nombre`, `n_estudiantes`, `docente_id_docente`) VALUES
(1, 102, 'parvulos', 10, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `id_docente` int(11) NOT NULL,
  `documento` int(10) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL,
  `direccion` varchar(60) DEFAULT NULL,
  `ciudad` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `contrasena` varchar(10) DEFAULT NULL,
  `institucion_id_jardin` int(11) NOT NULL,
  `rol_id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`id_docente`, `documento`, `nombre`, `correo`, `telefono`, `direccion`, `ciudad`, `username`, `contrasena`, `institucion_id_jardin`, `rol_id_rol`) VALUES
(1, 234, 'natalia peña', 'penanatalia56@gmail.com', 32131, 'Calle 15 ##18-74', NULL, 'npena', 'npena', 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id_estudiante` int(11) NOT NULL,
  `documento` int(11) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `nombre_padre` varchar(45) DEFAULT NULL,
  `nacimiento` date DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `contrasena` varchar(45) DEFAULT NULL,
  `institucion_id_jardin` int(11) NOT NULL,
  `curso_id_curso` int(11) NOT NULL,
  `rol_id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id_estudiante`, `documento`, `nombre`, `nombre_padre`, `nacimiento`, `direccion`, `correo`, `telefono`, `username`, `contrasena`, `institucion_id_jardin`, `curso_id_curso`, `rol_id_rol`) VALUES
(1, 2345678, 'Felipe peña', 'Natalia peña', '2016-12-05', 'Calle 15 ##18-74', 'penanatalia56@gmail.com', '3213131', 'fpena', 'fpena', 1, 1, 4),
(2, 56789, 'adrian guzman', 'andrea sanchez', NULL, 'Calle 15 ##18-74', 'penanatalia56@gmail.com', '3213131', 'aguzman', NULL, 1, 1, 4),
(3, 235, 'andres felipe', 'Natalia peña', '2021-02-02', 'Calle 15 ##18-74', 'penanatalia56@gmail.com', '3213131', 'fandres', 'fandres', 1, 1, 4),
(4, 5678, 'natalia peña', 'Natalia peña', '2021-04-24', 'Calle 15 ##18-74', 'penanatalia56@gmail.com', '3213131', 'npena', 'npena', 1, 1, 4),
(5, 6789, 'natalia peña', 'Natalia peña', '2021-04-13', 'Calle 15 ##18-74', 'penanatalia56@gmail.com', '3213131', 'natalia', 'npena', 1, 1, 4);


CREATE TABLE `curso_estudiante` (
  `idcursoestudiante` int(11) AUTO_INCREMENT NOT NULL,
  `estado` bit DEFAULT NULL,
  `fecha_creacion` varchar(45) DEFAULT NULL,
  `curso_idcurso` varchar(45) DEFAULT NULL,
  `estudiante_idestudiante` int(11) NOT NULL,
  PRIMARY KEY(idcursoestudiante)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO curso_estudiante(estado,fecha_creacion,curso_idcurso,estudiante_idestudiante)
VALUES(1,NOW(),1,1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE `institucion` (
  `id_jardin` int(11) NOT NULL,
  `nit_jardin` int(11) DEFAULT NULL,
  `nombre_jardin` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `ciudad` varchar(45) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL,
  `logo` varchar(45) DEFAULT NULL,
  `administrador_id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`id_jardin`, `nit_jardin`, `nombre_jardin`, `direccion`, `ciudad`, `telefono`, `logo`, `administrador_id_admin`) VALUES
(1, 456789, 'mi pequeña', 'fava', 'faca', 678, 'fghjklsd', 1456);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rector`
--

CREATE TABLE `rector` (
  `id_rector` int(11) NOT NULL,
  `documento_rector` int(10) DEFAULT NULL,
  `nombre_rector` varchar(45) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `contrasena` varchar(45) DEFAULT NULL,
  `institucion_id_jardin` int(11) NOT NULL,
  `rol_id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre`) VALUES
(1, 'administrador'),
(2, 'rector'),
(3, 'docente'),
(4, 'estudiante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarea`
--

CREATE TABLE `tarea` (
  `idtarea` int(11) NOT NULL,
  `numero` int(2) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `contenido` varchar(500) DEFAULT NULL,
  `tarea_doc` varchar(45) DEFAULT NULL,
  `tarea_est` varchar(45) DEFAULT NULL,
  `tema_idtema` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tarea`
--

INSERT INTO `tarea` (`idtarea`, `numero`, `nombre`, `contenido`, `tarea_doc`, `tarea_est`, `tema_idtema`) VALUES
(1, 0, 'numeros 1-5', 'Decora los numeros como desees.', NULL, NULL, 1),
(4, 0, 'las vocales', 'Decora los vocalescomo desees.', 'numeros 1-5.jpg', 'numeros 1-5.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tema`
--

CREATE TABLE `tema` (
  `idtema` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `contenido` varchar(45) DEFAULT NULL,
  `apoyo` varchar(45) DEFAULT NULL,
  `foro` varchar(45) DEFAULT NULL,
  `curso_docente_id_docente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tema`
--

INSERT INTO `tema` (`idtema`, `nombre`, `contenido`, `apoyo`, `foro`, `curso_docente_id_docente`) VALUES
(1, 'numeros 1-5', 'Decora los numeros como desees.', 'nataklia', '1', 1);

--
-- Índices para tablas volcadas
--
-- Foro
CREATE TABLE `foro` (
  `idforo` int(11) AUTO_INCREMENT NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `contenido` varchar(45) DEFAULT NULL,
  `tema_idtema` int(11) DEFAULT NULL,
  `docente_iddocente` int(11) NOT NULL,
  PRIMARY KEY (idforo)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO foro(nombre,contenido,tema_idtema,docente_iddocente)
VALUES ('foro prueba','foro tema 1',1,1);

CREATE TABLE `comentario` (
  `idcomentario` int(11) AUTO_INCREMENT NOT NULL,
  `comentario` varchar(45) DEFAULT NULL,
  `fecha_creacion` varchar(45) DEFAULT NULL,
  `foro_idforo` int(11) DEFAULT NULL,
  `estudiante_idestudiante` int(11) NOT NULL,
  PRIMARY KEY(idcomentario)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO comentario(comentario,fecha_creacion,foro_idforo,estudiante_idestudiante)
VALUES('comentario prueba',NOW(),1,1);

CREATE TABLE `respuesta` (
  `idrespuesta` int(11) AUTO_INCREMENT NOT NULL,
  `respuesta` varchar(255) DEFAULT NULL,
  `fecha_creacion` varchar(45) DEFAULT NULL,
  `comentario_idcomentario` int(11) DEFAULT NULL,
  `estudiante_idestudiante` int(11) NOT NULL,
  PRIMARY KEY(idrespuesta)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO respuesta(respuesta,fecha_creacion,comentario_idcomentario,estudiante_idestudiante)
VALUES('comentario prueba',NOW(),1,1);

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`id_docente`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id_estudiante`,`curso_id_curso`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`id_jardin`);

--
-- Indices de la tabla `rector`
--
ALTER TABLE `rector`
  ADD PRIMARY KEY (`id_rector`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tarea`
--
ALTER TABLE `tarea`
  ADD PRIMARY KEY (`idtarea`);

--
-- Indices de la tabla `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`idtema`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `id_docente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id_estudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `id_jardin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `rector`
--
ALTER TABLE `rector`
  MODIFY `id_rector` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tarea`
--
ALTER TABLE `tarea`
  MODIFY `idtarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tema`
--
ALTER TABLE `tema`
  MODIFY `idtema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `rol` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

ALTER TABLE mydb.tema
ADD numero int null;

