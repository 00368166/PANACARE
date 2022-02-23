
--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `ventas_id` int NOT NULL,
  `ventas_cod_barras` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Ventas_cantidad` int,
  `Ventas_num_factura` int
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`ventas_id`);
  --
  -- AUTO_INCREMENT de la tabla `enfermeras`
  --
  ALTER TABLE `ventas`
    MODIFY `ventas_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
