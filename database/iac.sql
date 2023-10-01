
--
-- Base de datos: `iac`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_alumnos_del_curso`
--

CREATE TABLE `t_alumnos_del_curso` (
  `id` int(11) NOT NULL,
  `nombreDelUsuario` varchar(30) DEFAULT NULL,
  `mail` varchar(30) DEFAULT NULL,
  `codigoCurso` int(2) DEFAULT NULL
);

--
-- Volcado de datos para la tabla `t_alumnos_del_curso`
--


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_alumnos_del_curso`
--
ALTER TABLE `t_alumnos_del_curso`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_alumnos_del_curso`
--
ALTER TABLE `t_alumnos_del_curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
