
--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
`clientes_id` int NOT NULL,
`clientes_nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
`clientes_telefono` bigint NOT NULL,
`clientes_direccion` text COLLATE utf8_spanish_ci NOT NULL,
`clientes_fecha_nac` date,
`clientes_atencion` text COLLATE utf8_spanish_ci NOT NULL,
`clientes_descripcion` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
ADD PRIMARY KEY (`clientes_id`);


--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
MODIFY `clientes_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


--
-- Estructura de tabla para la tabla `enfermeras`
--

CREATE TABLE `enfermeras` (
`enfermeras_id` int NOT NULL,
`enfermeras_nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
`enfermeras_telefono` bigint NOT NULL,
`enfermeras_curp` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
`enfermeras_rfc` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
`enfermeras_disponibilidad` text COLLATE utf8_spanish_ci NOT NULL,
`enfermeras_nacimiento` date COLLATE utf8_spanish_ci NOT NULL,
`enfermeras_general` text COLLATE utf8_spanish_ci NOT NULL,
`nombre_imagen` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
`tipo_imagen` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
`enfermeras_tipo` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Indices de la tabla `enfermeras`
--
ALTER TABLE `enfermeras`
ADD PRIMARY KEY (`enfermeras_id`);


--
-- AUTO_INCREMENT de la tabla `enfermeras`
--
ALTER TABLE `enfermeras`
MODIFY `enfermeras_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


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


--
-- Estructura de tabla para la tabla `message`
--

CREATE TABLE `message` (
`message_id` int NOT NULL,
`message_nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
`message_telefono` bigint NOT NULL,
`message_text` text COLLATE utf8_spanish_ci NOT NULL,
`message_date` date COLLATE utf8_spanish_ci NOT NULL,
`message_time` time COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Indices de la tabla `message`
--
ALTER TABLE `message`
ADD PRIMARY KEY (`message_id`);


--
-- AUTO_INCREMENT de la tabla `message`
--
ALTER TABLE `message`
MODIFY `message_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
