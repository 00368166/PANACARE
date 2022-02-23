
--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `servicios_cod_barras` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `servicios_nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `servicios_descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `servicios_precio` int,
  `servicios_imagen` varchar(255),
  `servicios_tipo_foto` varchar(255)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`servicios_cod_barras`);
