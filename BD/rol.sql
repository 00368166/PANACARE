--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `rol_id` int NOT NULL,
  `rol_rol` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `rol_level` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`rol_id`);


--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `rol_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

INSERT INTO `rol` (`rol_id`, `rol_rol`, `rol_level`) VALUES
(1, 'Administrador', '1');
INSERT INTO `rol` (`rol_id`, `rol_rol`, `rol_level`) VALUES
(2, 'Administrador', '2');
INSERT INTO `rol` (`rol_id`, `rol_rol`, `rol_level`) VALUES
(3, 'Administrador', '3');
INSERT INTO `rol` (`rol_id`, `rol_rol`, `rol_level`) VALUES
(4, 'Colaborador', '4');
