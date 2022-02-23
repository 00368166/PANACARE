--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `proveedor_id` int NOT NULL,
  `proveedor_nombre_empresa` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `proveedor_nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `proveedor_direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `proveedor_descripcion` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`proveedor_id`);


--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `proveedor_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
