
--
-- Estructura de tabla para la tabla `inventarios_consumibles`
--

CREATE TABLE `inventarios_consumibles` (
  `inventarios_consumibles_cod_barras` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `inventarios_consumibles_nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `inventarios_consumibles_descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `inventarios_consumibles_precio` int,
  `inventarios_consumibles_cantidad` int,
  `inventarios_consumibles_proveedor_id` int,
  `inventarios_consumibles_tipo_consumible` varchar(255),
  `inventarios_consumibles_caducidad` date,
  `inventarios_consumibles_num_lote` varchar(255),
  `inventarios_consumibles_imagen` varchar(255),
  `inventarios_consumibles_tipo_foto` varchar(255)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Indices de la tabla `inventarios_consumibles`
--
ALTER TABLE `inventarios_consumibles`
  ADD PRIMARY KEY (`inventarios_consumibles_cod_barras`);
