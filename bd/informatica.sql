-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2017 a las 18:52:11
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `informatica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id_area` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET latin1 NOT NULL,
  `director` varchar(50) CHARACTER SET latin1 NOT NULL,
  `telefono` varchar(30) CHARACTER SET latin1 NOT NULL,
  `correo` varchar(50) CHARACTER SET latin1 NOT NULL,
  `ubicacion` varchar(60) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id_area`, `nombre`, `director`, `telefono`, `correo`, `ubicacion`) VALUES
(1, 'Presidencia ', 'L.A.E.T Romalda Dzul Caamal', ' 9841519197', 'romalda.dzul.caamal@gmail.com', 'CRT Cancun Tulum Col. Tulum en'),
(3, 'Sindico Municipal ', 'L.C Rodolfo Faustino Pech Guevara', '9841381898', 'rodopech82@gmail.com', 'CRT Cancun Tulum Col. Tulum entre Esq. Palacio Mpal'),
(5, '2do Regidor', ' C. Eugenio Cante Balam', '9841193581', 'genio_cante1@hotmail.com', 'CRT Cancun Tulum Col. Tulum entre Esq. Palacio Mpal'),
(6, '3er Regidor', 'L.A.E. Yenny Del Carmen L&oacute;pez Landero', '9842080063', 'yennylan@hotmail.com', 'CRT Cancun Tulum Col. Tulum entre Esq. Palacio Mpal'),
(7, '4to Regidor', 'C. Benito May Chulim', '9841258649', 'benitochulim@hotmail.com', 'CRT Cancun Tulum Col. Tulum entre Esq. Palacio Mpal'),
(8, '5to Regidor', 'C. Paulina A. Och Dzib', '9841299435', 'pau8133@hotmail.com', 'CRT Cancun Tulum Col. Tulum entre Esq. Palacio Mpal'),
(9, '6to Regidor', 'C. Ir&aacute;n Zapata Hip&oacute;lito', '9841767199', 'irzhno@hotmail.com', 'CRT Cancun Tulum Col. Tulum entre Esq. Palacio Mpal'),
(10, '7mo Regidor', 'LIC. Ra&uacute;l Enrique Rodriguez Luna', '9841089603', 'licenrod5@gmail.com', 'CRT Cancun Tulum Col. Tulum entre Esq. Palacio Mpal'),
(11, '8vo Regidor', 'C. Silvia Emelina Lugo Flota', '9841372571', 'silvia.lugo02@hotmail.com', 'CRT Cancun Tulum Col. Tulum entre Esq. Palacio Mpal'),
(12, '9no Regidor', 'C. Manuel Antonio Xiu Loria', '9842134978', '9naregiduriatulum@gmail.com', 'CRT Cancun Tulum Col. Tulum entre Esq. Palacio Mpal'),
(13, 'Secretaria Privada', 'C. Eduardo Martinez Santana', '9841061148', 'ems1589@hotmail.com', 'CRT Cancun Tulum Col. Tulum entre Esq. Palacio Mpal'),
(14, 'Secretaria Particular', 'MTRA. Nohely Dennyse Olivarez', '9841579818', 'nohely.olivarez@gmail.com', 'CRT Cancun Tulum Col. Tulum entre Esq. Palacio Mpal'),
(15, 'Secretaria Tecnica', 'L.A.E.T. Luis Gomez Flores', '9841050705', 'luisg.gomezflores@outlook.com', 'CRT Cancun Tulum Col. Tulum entre Esq. Palacio Mpal'),
(16, 'Director De Eventos Especiales', 'C. Audomaro Solis Pacheco', '9848062426', 'even.estulum@hotmail.com', 'CRT Cancun Tulum Col. Tulum entre Esq. Palacio Mpal'),
(17, 'Comunicacion Social', 'C. Roberto Andrade Uscanga', '9831545899', 'uscanga.roberto@gmail.com', 'CRT Cancun Tulum Col. Tulum entre Esq. Palacio Mpal'),
(18, 'Relaciones Publicas', 'C. Hector Galicia Oropeza', '9841881726', 'relacionespublicastulum1618@gmail.com', 'CRT Cancun Tulum Col. Tulum entre Esq. Palacio Mpal'),
(19, 'Asuntos Juridicos', 'LIC. Evelyn Maria Del Pilar Escalante Rivero', '9841000222', 'lic.evelyn.escalante@gmail.com', 'CRT Cancun Tulum Col. Tulum entre Esq. Palacio Mpal'),
(20, 'Equidad De Genero', 'C. Marlene De La Cruz Pacheco Aguilar', '9841062619', 'marlenepachecoaguilar@gmail.com', 'CRT Cancun Tulum Col. Tulum entre Esq. Palacio Mpal'),
(21, 'Transparencia', 'LIC. Karla Etelvina Borges Castillo', '9841450166', 'karlaborges82@hotmail.com', 'CRT Cancun Tulum Col. Tulum entre Esq. Palacio Mpal'),
(22, 'Secretaria General', 'L.E.F Martin Antonio Cobos Villalobos', '9841276867', 'cobos2772@msn.com', 'CRT Cancun Tulum Col. Tulum entre Esq. Palacio Mpal'),
(23, 'Gobierno Y Coor. De Delegados', 'C.P. Eliazar Maas Kinil', '9841340154', 'Caribe_e2@yahoo.com.mx', 'CRT Cancun Tulum Col. Tulum entre Esq. Palacio Mpal'),
(24, 'Reclutamiento', 'LIC. Carla Guadalupe Coral Basulto', '9842022661', 'reclutamientotulum@hotmail.com', 'CRT Cancun Tulum Col. Tulum entre Esq. Palacio Mpal'),
(25, 'Oficialia De Registro Civil', 'LIC. Karla De Los Angeles Colli Chi', '9841401982', 'kcolli24@hotmail.com', 'Centro Manzana 54 Lote 2 Entre Centauro Sur y Orion Sur'),
(26, 'Proteccion Civil', 'TUM. Lucio Salvador Arguea', '9841551601', 'proteccionciviltulum@hotmail.com', 'Col Centro Entre Plaza Andador Tulum'),
(27, 'Transporte Y Vialidad', 'C. Jose Luis Hernandez Jimenez', '9841964038', 'transporte_vialidad@hotmail.com', 'Calle Beta Sur Entre andromeda Ote Y Sol Ote'),
(28, 'Jueces Civicos', 'LIC. Esli Ernesto Hernandez Negrete', '9848049769', 'esliernesto@hotmail.com', 'CRT Boca Paila Col. Tulum Entre Avenida Tulum'),
(29, 'Asuntos Religiosos', 'C. Alejandra Del Socorro Canul Dzib', '9841065788', 'ale_canul1981@hotmail.com', 'Cll Beta Sur Col. Centro Entre Centauro Sur Y Orion Sur'),
(30, 'Oficialia Mayor', 'L.A.E.T Omar Ismael Zubieta Arcique', '9841065251', 'oficialiamayor.tulum@hotmail.com', 'Ave. Tulum Col. Centro Entre Jupiter Sur'),
(31, 'Recursos Humanos', 'C.P. Ruby Isela Hernandez Uc', '9841785886', 'oficialiamayor.tulum@hotmail.com', 'Ave. Tulum Col. Centro Entre Jupiter Sur'),
(32, 'Recursos Materiales', 'C. Orlando Jesus Avila Barrera', '9841433435', 'oficialiamayor.tulum@hotmail.com', 'Terrenos De La Expo Tulum'),
(33, 'Informatica', 'Ing. Sergio VillaseÃ±or Solorio', '5546179789', 'oficialiamayor.tulum@hotmail.com', 'Calle Beta Sur Col Tulum Entre andromeda Ote Y Sol Ote'),
(34, 'Servicios Generales', 'C. Ana Maria Mendez Perez', '9848048578', 'oficialiamayor.tulum@hotmail.com', 'Unidad Deportiva'),
(35, 'Inventario Y Patrimonio Municipal', 'C. Laura Crystell Cartagena Ramirez', '9841378919', 'oficialiamayor.tulum@hotmail.com', 'CRT Cancun Tulum Col. Tulum entre Esq. Palacio Mpal'),
(36, 'Parque Vehicular', 'C. Israel Ordaz', '9841008902', 'oficialiamayor.tulum@hotmail.com', 'Cll Geminis Col. Centro Entre 2 Ote Y Sagitario'),
(37, 'Tesoreria Municipal', 'C. Santiago Pech Cahuich', '9848712101', 'kaanluum@hotmail.com', 'Av. Tulum 1 Palacio De Gobierno Entre Alfa Sur'),
(38, 'Ingresos', 'TEC. Jose Ricardo Suarez Beltran', '9848763016', 'ricsuarez123@gmail.com', 'Av. Tulum 1 Palacio De Gobierno Entre Alfa Sur'),
(39, 'Egresos', 'TEC. Tania Nerubia Valladares Blanco', '9841384167', 'nerubia@hotmail.com', 'Av. Tulum 1 Palacio De Gobierno Entre Alfa Sur'),
(40, 'Zofemat', 'ING. Ahmed Gomez Blancas', '9842099004', 'ahmed152x@hotmail.com', 'Col Centro Entre Plaza Andador Tulum'),
(41, 'Contabilidad', 'C.P. Emilia Perez Garcia', '9841414932', 'emi_pege@hotmail.com', 'Av. Tulum 1 Palacio De Gobierno Entre Alfa Sur'),
(42, 'Catastro', 'LIC. Bernabe Antonio Miranda Miranda', '9841163133', 'catastrotulum@hotmail.com', 'Av. Tulum 1 Palacio De Gobierno Entre Alfa Sur'),
(43, 'Contraloria Municipal', 'LIC. Luis Arcangel Poot Ku', '9841469930', 'lic_arcangel@hotmail.com', 'Cll Alfa Sur Col. Tulum Entre Ave. Tulum'),
(44, 'Direccion General De Seguridad Publica y Transito', 'LIC. Gabriel Gonzales Ornelas', '9841880526', 'policiasugerencias@hotmail.com', 'CRT Tulum Boca Paila Col. Centro Tulum Entre H. Cuerpo De Bo'),
(45, 'Operativo', 'C. Pablo Gaspar Zapata Martinez', '9841838708', 'direcciondeproteccionciudadanatulum@hotmail.com', 'CRT Tulum Boca Paila Col. Centro Tulum Entre H. Cuerpo De Bo'),
(46, 'Transito', 'C. Macedonio Vazquez g&oacute;ngora', '9841285424', 'mecadonio.vazquez@gmail.com', 'CRT Tulum Bocapaila Col.Centro Tulum Q.Roo Entre H. cuerpo d'),
(47, 'Director del Heroico Cuerpo de Bomberos', 'C. Wilbert Esquilano', '9841377941', 'Bomberos_tulum@hotmail.com', 'CRT Tulum Bocapaila Col. Centro Tulum Q.Roo Entre AVE Tulum'),
(48, 'Desarrollo EconÃ³mico', 'C.Jorge Armando Angulo CÃ¡ceres ', '9841206776', 'armandoangulo88@hotmail.com', 'CLL Alfa Sur Col. Tulum Lote 18 Tulum Q.roo Entre Ave Tulum'),
(50, 'Turismo', 'Lic. Bernarda de la Cruz Corcova', '9848018383', 'nardacordova@hotmail.com', 'Av. Tulum Col. Centro Mza 4 Lote 10 Tulum Q.Roo Entre Alfa S'),
(51, 'Director De Promoci&oacute;n y Marketing Turistico', 'C.Diego casta&ntilde;on Trejo', '9841588986', 'turismo.tulum@hotmail.com', 'Av. Tulum Col. Centro Mza 4 Lote 10 Tulum Q.Roo Entre Alfa S'),
(52, 'Desarrollo Social', 'L.A.E Euterpe alicia Gutierrez Valasis', '9871000091 /9841764809', 'desarrollosocialtulum1618@gmail.com', 'Terrenos de la Xpo tulum Q.Roo Centro de Desarrollo Comunita'),
(53, 'Participaci &oacute;n Ciudadna', 'LTS Wendy petronila Ruiz Aguilar', '9841431856', 'dactulum.2016@gmail.com', 'Terrenos de la Xpo tulum Q.Roo Centro de Desarrollo Comunita'),
(54, 'Salud  y Accion Social', 'Dr. juan Mena Ramos', '9841299416', 'Juan_mensalud@hotmail.com', 'Calle alfa Sur Col. Tulum  Lote 18 tulum Q.Roo entre Ave. Tu'),
(55, 'Juventud y el Deporte', 'C. Ana Maria Tec Pat', '9841418869', 'servicios.generales2014@hotmail.com', 'cll Jupiter 2 col Tulum entre sajitario poniente'),
(56, 'Cultura', 'Lic. Diego Jose Perez Uca&ntilde;a', '9841273216', 'dperez_76@hotmail.com', ''),
(57, 'Educacion y bibleoteca', 'Profe Melit&oacute;n Gonzalez Perez', '9841421106', 'melys_213@hotmail.com', ''),
(58, 'Planeaci&oacute;n', 'ING. Elsy Juanita Pinkney Toledano', '9848025470', 'joani_elsi@hotmail.com', 'Av. Tulum Col. Centro Mza 4 Lote 9 Tulum Q.Roo Entre Alfa Su');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `problemas`
--

CREATE TABLE `problemas` (
  `id_problema` int(11) NOT NULL,
  `problema` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `problemas`
--

INSERT INTO `problemas` (`id_problema`, `problema`) VALUES
(4, 'Activaci&oacute;n de Windows 10'),
(5, 'Cambio de modem'),
(6, 'Cambio de toner de impresora'),
(7, 'Configuraci&oacute;n de Access Point'),
(8, 'Configuraci&oacute;n de carpetas compartidas'),
(9, 'Configuraci&oacute;n de clave de modem'),
(10, 'Configuraci&oacute;n de computadora nueva'),
(11, 'Configuraci&oacute;n de conexi&oacute;n a internet'),
(12, 'Configuraci&oacute;n de esc&aacute;ner'),
(13, 'Configuraci&oacute;n de router'),
(14, 'Configuraci&oacute;n de impresora'),
(15, 'Desbloquear clave de usuario'),
(16, 'Escaneo de equipo (eliminaci&oacute;n de virus)'),
(17, 'Formateo de instalaci&oacute;n de S.O con programas'),
(18, 'Instalaci&oacute;n de AutoCad'),
(19, 'Instalaci&oacute;n de cableado de red'),
(20, 'Instalaci&oacute;n de cableado telef&oacute;nico'),
(21, 'Instalaci&oacute;n de disco duro'),
(22, 'Instalaci&oacute;n de impresora'),
(23, 'Instalaci&oacute;n de lector de DVD/CD'),
(24, 'Instalaci&oacute;n de memoria RAM'),
(25, 'Instalaci&oacute;n de ofim&aacute;tica'),
(26, 'Instalaci&oacute;n de programas b&aacute;sicos (ofim&aacute;tica, antivirus, utilidades, entre otros)'),
(27, 'Instalaci&oacute;n de tarjeta madre'),
(28, 'Instalaci&oacute;n de utilidades entre otros'),
(29, 'Instalaci&oacute;n o actualizaci&oacute;n de antivirus'),
(30, 'Limpieza de memoria RAM'),
(31, 'Mantenimiento preventivo a computadora de escritorio'),
(34, 'Mantenimiento preventivo a laptop'),
(35, 'Mantenimiento preventivo y/o correctivo a impresora'),
(37, 'Optimizaci&oacute;n de equipo'),
(38, 'Ponchado de cable UTP RJ45'),
(39, 'Recuperaci&oacute;n de informaci&oacute;n'),
(40, 'Reparaci&oacute;n de linea telef&oacute;nica'),
(41, 'Respaldo de informaci&oacute;n'),
(42, 'Restauraci&oacute;n de sistema'),
(43, 'Reubicaci&oacute;n de equipo telef&oacute;nico'),
(44, 'Sin acceso al sistema'),
(45, 'Revisi&oacute;n de servicio a internet'),
(46, 'Ponchado de cable telef&oacute;nico RJ11'),
(47, 'Dict&aacute;menes de equipos de computo'),
(48, 'Remplazo de pantallas de equipo de computo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `id_reporte` int(11) NOT NULL,
  `id_area` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tipo` varchar(30) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `problema` varchar(150) NOT NULL,
  `reporta` varchar(250) NOT NULL,
  `observaciones` varchar(30) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `id_tecnico` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reportes`
--

INSERT INTO `reportes` (`id_reporte`, `id_area`, `fecha`, `tipo`, `marca`, `modelo`, `problema`, `reporta`, `observaciones`, `estado`, `id_tecnico`, `date`) VALUES
(14, 21, '2017-04-01 03:58:44', 'Todo en Uno', 'Lenovo', 'C200', 'Instalaci&oacute;n de lector de DVD/CD', 'Geidi', 'Muy Bueno', 'Terminado', 7, '0000-00-00'),
(15, 21, '2017-04-01 06:25:37', 'Laptop', 'Compac', 'c500', 'Instalaci&oacute;n de disco duro', 'Clarissa', 'Malo', 'Terminado', 8, '0000-00-00'),
(16, 22, '2017-04-01 06:47:37', 'Laptop', 'HP', 'c00', 'Activaci&oacute;n de Windows 10', 'Argangel', 'Alex', 'Terminado', 0, '0000-00-00'),
(17, 1, '2017-04-01 06:58:46', 'Ensamblada', 'Compac', 'xxx', 'Activaci&oacute;n de Windows 10', 'dady', 'Xx', 'Terminado', 7, '0000-00-00'),
(18, 1, '2017-04-01 07:03:20', 'Ensamblada', 'HP', 'xx', 'Activaci&oacute;n de Windows 10', 'Dama4', 'Xx', 'Terminado', 6, '0000-00-00'),
(19, 1, '2017-04-01 07:03:28', 'Todo en Uno', 'Compac', 'xx', 'Activaci&oacute;n de Windows 10', 'dady', 'Xx', 'Terminado', 8, '0000-00-00'),
(20, 19, '2017-04-01 07:03:38', 'Todo en Uno', 'Compac', 'xx', 'Instalaci&oacute;n de impresora', 'Dama4d', 'xx', 'Terminado', 6, '0000-00-00'),
(21, 22, '2017-04-01 07:03:49', 'Laptop', 'Compac', 'x', 'Sin acceso al sistema', 'sdf', 'x', 'Terminado', 7, '0000-00-00'),
(22, 58, '2017-04-01 07:13:58', '', '', '', 'Ponchado de cable telef&oacute;nico RJ11', 'Nalley Gomez Perez', '', 'Pendiente', 8, '0000-00-00'),
(23, 1, '2017-04-01 17:22:59', 'Laptop', 'Acer', 'd', 'Activaci&oacute;n de Windows 10', 'Dama4d', 'd', 'Terminado', 0, '2017-04-27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnicos`
--

CREATE TABLE `tecnicos` (
  `id_tecnico` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tecnicos`
--

INSERT INTO `tecnicos` (`id_tecnico`, `nombre`, `telefono`, `correo`) VALUES
(5, 'No&eacute; Gustavo Hau Borges', '9841250002', 'hau_borges@hotmail.com'),
(6, 'Augusto V&aacute;zquez Andrade', '9841289097', 'augustored03@gmail.com'),
(7, 'Mariano Jediel Vitzil Basto', '9845932093', 'mj_18285@hotmail.com'),
(8, 'Felix Antonio Tuz Tzek', '9841290868', 'kio_9960@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_adm`
--

CREATE TABLE `usuarios_adm` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios_adm`
--

INSERT INTO `usuarios_adm` (`id_usuario`, `nombre`, `password`) VALUES
(1, 'informatica', '$2y$10$mdBZchEqE5.0gW/5HBj5/..P8etIZX/uv9V6TRlNJRT/6IaxiqYse');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `problemas`
--
ALTER TABLE `problemas`
  ADD PRIMARY KEY (`id_problema`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`id_reporte`);

--
-- Indices de la tabla `tecnicos`
--
ALTER TABLE `tecnicos`
  ADD PRIMARY KEY (`id_tecnico`);

--
-- Indices de la tabla `usuarios_adm`
--
ALTER TABLE `usuarios_adm`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT de la tabla `problemas`
--
ALTER TABLE `problemas`
  MODIFY `id_problema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `id_reporte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `tecnicos`
--
ALTER TABLE `tecnicos`
  MODIFY `id_tecnico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `usuarios_adm`
--
ALTER TABLE `usuarios_adm`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
