
--
-- Estructura de tabla para la tabla `inventarios_consumibles`
--

CREATE TABLE `inventarios_consumibles` (
  `inventarios_consumibles_id` int NOT NULL,
  `inventarios_consumibles_cod_barras` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `inventarios_consumibles_nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `inventarios_consumibles_telefono` bigint NOT NULL,
  `inventarios_consumibles_direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `inventarios_consumibles_atencion` text COLLATE utf8_spanish_ci NOT NULL,
  `inventarios_consumibles_descripcion` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Indices de la tabla `inventarios_consumibles`
--
ALTER TABLE `inventarios_consumibles`
  ADD PRIMARY KEY (`inventarios_consumibles_id`);


--
-- AUTO_INCREMENT de la tabla `inventarios_consumibles`
--
ALTER TABLE `inventarios_consumibles`
  MODIFY `inventarios_consumibles_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
