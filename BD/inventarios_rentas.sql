
--
-- Estructura de tabla para la tabla `inventarios_rentas`
--

CREATE TABLE `inventarios_rentas` (
  `inventarios_rentas_cod_barras` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `inventarios_rentas_nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `inventarios_rentas_descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `inventarios_rentas_precio` int,
  `inventarios_rentas_cantidad` int,
  `inventarios_rentas_proveedor_id` int,
  `inventarios_rentas_num_lote` varchar(255),
  `inventarios_rentas_imagen` varchar(255),
  `inventarios_rentas_tipo_foto` varchar(255)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Indices de la tabla `inventarios_rentas`
--
ALTER TABLE `inventarios_rentas`
  ADD PRIMARY KEY (`inventarios_rentas_cod_barras`);
