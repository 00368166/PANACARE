--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int NOT NULL,
  `usuario_nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario_apellido` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario_curp` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_clave` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_rolnombre` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);


--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

  INSERT INTO `usuario` (`usuario_id`, `usuario_nombre`, `usuario_apellido`, `usuario_curp`, `usuario_usuario`, `usuario_clave`, `usuario_rolnombre`) VALUES
  (1, 'Manuel Eduardo', 'Flores Cruz', 'FOCM010615HOCLRNA0', '31m4nu', '15d76d1dddc61c7e897724615065b890', '1');
