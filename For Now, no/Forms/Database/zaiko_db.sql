-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2021 a las 21:36:21
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `zaiko_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `details_elements`
--

CREATE TABLE `details_elements` (
  `Details_id` int(11) NOT NULL,
  `Details_available` tinyint(4) DEFAULT 0,
  `Details_description` varchar(255) NOT NULL,
  `Details_observation` varchar(255) NOT NULL,
  `Details_state` enum('Bueno','Malo') NOT NULL,
  `Details_serial` int(11) NOT NULL,
  `Details_active` tinyint(4) DEFAULT 0,
  `Details_date_of_modification` datetime NOT NULL DEFAULT current_timestamp(),
  `Details_purchase_value` int(11) NOT NULL,
  `Details_date_of_purchase` datetime NOT NULL DEFAULT current_timestamp(),
  `Details_insurance` tinyint(4) NOT NULL DEFAULT 0,
  `Details_photo_observation` blob NOT NULL,
  `Elements_Elements_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dni`
--

CREATE TABLE `dni` (
  `DNI_id` int(11) NOT NULL,
  `DNI_name` varchar(30) NOT NULL,
  `DNI_active` tinyint(4) DEFAULT 0,
  `DNI_date_of_registration` datetime GENERATED ALWAYS AS (current_timestamp()) VIRTUAL,
  `DNI_date_of_modification` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dni`
--

INSERT INTO `dni` (`DNI_id`, `DNI_name`, `DNI_active`, `DNI_date_of_modification`) VALUES
(1, 'Cédula de ciudadanía', 1, '2021-09-17 14:32:45'),
(2, 'Cédula de Extranjería', 1, '2021-09-17 14:33:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elements`
--

CREATE TABLE `elements` (
  `Elements_id` int(11) NOT NULL,
  `Elements_name` varchar(30) NOT NULL,
  `Elements_references` varchar(255) NOT NULL,
  `Elements_photo` blob NOT NULL,
  `Elements_code` varchar(255) NOT NULL,
  `Elements_brands` varchar(255) NOT NULL,
  `Elements_active` tinyint(4) DEFAULT 0,
  `Elements_date_of_registration` datetime NOT NULL DEFAULT current_timestamp(),
  `Elements_date_of_modification` datetime NOT NULL DEFAULT current_timestamp(),
  `Sub-units_Sub-units_id` int(11) NOT NULL,
  `Group_Elements_Groups_Elements_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `group_elements`
--

CREATE TABLE `group_elements` (
  `Groups_Elements_id` int(11) NOT NULL,
  `Group_Elements_quantity_active` int(11) NOT NULL,
  `Group_Elements_quantity_low` int(11) NOT NULL,
  `Group_Elements_active` tinyint(4) NOT NULL DEFAULT 0,
  `Group_Elements_date_of_registration` datetime NOT NULL DEFAULT current_timestamp(),
  `Group_Elements_date_of_modification` datetime NOT NULL DEFAULT current_timestamp(),
  `Sub-units_Sub-units_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `Historial_id` int(11) NOT NULL,
  `Elements_Elements_id` int(11) NOT NULL,
  `Loans_Loans_id` int(11) NOT NULL,
  `Users_Users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `loans`
--

CREATE TABLE `loans` (
  `Loans_id` int(11) NOT NULL,
  `Loans_active` tinyint(4) DEFAULT 0,
  `Loans_date_of_registration` datetime NOT NULL DEFAULT current_timestamp(),
  `Loans_date_of_modification` datetime NOT NULL DEFAULT current_timestamp(),
  `Loans_date_of_the_loan` datetime NOT NULL DEFAULT current_timestamp(),
  `Loans_delivery_date` datetime NOT NULL DEFAULT current_timestamp(),
  `Loans_deadline` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role`
--

CREATE TABLE `role` (
  `Role_id` int(11) NOT NULL,
  `Role_name` varchar(30) NOT NULL,
  `Role_active` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `role`
--

INSERT INTO `role` (`Role_id`, `Role_name`, `Role_active`) VALUES
(1, 'Admin', 1),
(2, 'Admin_Units', 1),
(3, 'Admin_SubUnits', 1),
(4, 'AverageUser', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sub-units`
--

CREATE TABLE `sub-units` (
  `Sub-units_id` int(11) NOT NULL,
  `Sub-units_name` varchar(255) NOT NULL,
  `Sub-units_active` tinyint(4) DEFAULT 0,
  `Sub-units_date_of_registration` datetime NOT NULL DEFAULT current_timestamp(),
  `Sub-units_date_of_modification` datetime NOT NULL DEFAULT current_timestamp(),
  `Units_Units_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `units`
--

CREATE TABLE `units` (
  `Units_id` int(11) NOT NULL,
  `Units_name` varchar(255) NOT NULL,
  `Units_active` tinyint(4) DEFAULT 0,
  `Units_date_of_registration` datetime NOT NULL DEFAULT current_timestamp(),
  `Units_date_of_modification` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `Users_id` int(11) NOT NULL,
  `Users_names` varchar(30) NOT NULL,
  `Users_surname_one` varchar(15) NOT NULL,
  `Users_surname_two` varchar(15) NOT NULL,
  `Users_telephone` varchar(15) NOT NULL,
  `Users_address` varchar(60) NOT NULL,
  `Users_number_dni` varchar(15) NOT NULL,
  `Users_city` varchar(255) NOT NULL,
  `Users_name_user` varchar(30) NOT NULL,
  `Users_email` varchar(255) NOT NULL,
  `Users_password` varchar(200) NOT NULL,
  `Users_active` tinyint(4) DEFAULT 0,
  `Users_date_of_registration` datetime NOT NULL DEFAULT current_timestamp(),
  `Users_date_of_modification` datetime NOT NULL DEFAULT current_timestamp(),
  `Users_start_date` datetime NOT NULL DEFAULT current_timestamp(),
  `Users_end_date` datetime DEFAULT current_timestamp(),
  `DNI_DNI_id` int(11) NOT NULL,
  `Role_Role_id` int(11) NOT NULL,
  `Loans_Loans_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`Users_id`, `Users_names`, `Users_surname_one`, `Users_surname_two`, `Users_telephone`, `Users_address`, `Users_number_dni`, `Users_city`, `Users_name_user`, `Users_email`, `Users_password`, `Users_active`, `Users_date_of_registration`, `Users_date_of_modification`, `Users_start_date`, `Users_end_date`, `DNI_DNI_id`, `Role_Role_id`, `Loans_Loans_id`) VALUES
(14, 'Daniel', 'Puerta', 'Bernal', '3108101958', 'Calle 52 #48-22', '1040870522', 'Abejorral', 'Mr_Danso', 'Daniel@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2021-09-22 07:50:20', '2021-09-22 07:50:20', '2021-09-22 07:50:20', '2021-09-22 07:50:20', 1, 1, NULL),
(15, 'Mario', 'Lopez', 'Diaz', '3117142319', 'Carrera 52 #48-22', '1250870522', 'Medellin', 'Mr_Mario', 'Mariol@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, '2021-09-22 07:50:58', '2021-09-26 12:25:24', '2021-09-26 01:00:09', '2021-09-26 01:00:46', 2, 2, NULL),
(19, 'maria', 'lopez', 'qerqwe', '1234123', '143124', '43241234', 'ewqreq', 'Mari', 'Mari@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, '2021-09-26 00:48:51', '2021-09-26 12:49:22', '2021-09-26 01:00:36', '2021-09-26 01:00:44', 1, 2, NULL),
(20, 'Pedro', 'lopez', 'colina', '3221221212', 'cale 58#25-23', '1022032743', 'Bogotá', 'root', 'Pedro@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2021-09-26 00:50:23', '2021-09-26 00:50:23', '2021-09-26 00:50:23', '2021-09-26 00:50:23', 1, 2, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_has_units`
--

CREATE TABLE `users_has_units` (
  `Users_has_Units_id` int(11) NOT NULL,
  `Users_Users_id` int(11) NOT NULL,
  `Units_Units_id` int(11) NOT NULL,
  `Sub-units_Sub-units_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `details_elements`
--
ALTER TABLE `details_elements`
  ADD PRIMARY KEY (`Details_id`),
  ADD KEY `fk_Details_elements_Elements1_idx` (`Elements_Elements_id`);

--
-- Indices de la tabla `dni`
--
ALTER TABLE `dni`
  ADD PRIMARY KEY (`DNI_id`);

--
-- Indices de la tabla `elements`
--
ALTER TABLE `elements`
  ADD PRIMARY KEY (`Elements_id`),
  ADD KEY `fk_Elements_Sub-units1_idx` (`Sub-units_Sub-units_id`),
  ADD KEY `fk_Elements_Group_Elements1_idx` (`Group_Elements_Groups_Elements_id`);

--
-- Indices de la tabla `group_elements`
--
ALTER TABLE `group_elements`
  ADD PRIMARY KEY (`Groups_Elements_id`),
  ADD KEY `fk_Group_Elements_Sub-units1_idx` (`Sub-units_Sub-units_id`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`Historial_id`),
  ADD KEY `fk_Historial_Elements1_idx` (`Elements_Elements_id`),
  ADD KEY `fk_Historial_Loans1_idx` (`Loans_Loans_id`),
  ADD KEY `fk_Historial_Users1_idx` (`Users_Users_id`);

--
-- Indices de la tabla `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`Loans_id`);

--
-- Indices de la tabla `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`Role_id`);

--
-- Indices de la tabla `sub-units`
--
ALTER TABLE `sub-units`
  ADD PRIMARY KEY (`Sub-units_id`),
  ADD KEY `fk_Sub-units_Units1_idx` (`Units_Units_id`);

--
-- Indices de la tabla `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`Units_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Users_id`),
  ADD UNIQUE KEY `Users_number_dni_UNIQUE` (`Users_number_dni`),
  ADD KEY `fk_Users_DNI_idx` (`DNI_DNI_id`),
  ADD KEY `fk_Users_Role1_idx` (`Role_Role_id`),
  ADD KEY `fk_Users_Loans1_idx` (`Loans_Loans_id`);

--
-- Indices de la tabla `users_has_units`
--
ALTER TABLE `users_has_units`
  ADD PRIMARY KEY (`Users_has_Units_id`),
  ADD KEY `fk_Users_has_Units1_Units1_idx` (`Units_Units_id`),
  ADD KEY `fk_Users_has_Units1_Users1_idx` (`Users_Users_id`),
  ADD KEY `fk_Users_has_Units1_Sub-units1_idx` (`Sub-units_Sub-units_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `details_elements`
--
ALTER TABLE `details_elements`
  MODIFY `Details_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dni`
--
ALTER TABLE `dni`
  MODIFY `DNI_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `elements`
--
ALTER TABLE `elements`
  MODIFY `Elements_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `group_elements`
--
ALTER TABLE `group_elements`
  MODIFY `Groups_Elements_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `Historial_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `loans`
--
ALTER TABLE `loans`
  MODIFY `Loans_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `role`
--
ALTER TABLE `role`
  MODIFY `Role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `sub-units`
--
ALTER TABLE `sub-units`
  MODIFY `Sub-units_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `units`
--
ALTER TABLE `units`
  MODIFY `Units_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `Users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `users_has_units`
--
ALTER TABLE `users_has_units`
  MODIFY `Users_has_Units_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `details_elements`
--
ALTER TABLE `details_elements`
  ADD CONSTRAINT `fk_Details_elements_Elements1` FOREIGN KEY (`Elements_Elements_id`) REFERENCES `elements` (`Elements_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `elements`
--
ALTER TABLE `elements`
  ADD CONSTRAINT `fk_Elements_Group_Elements1` FOREIGN KEY (`Group_Elements_Groups_Elements_id`) REFERENCES `group_elements` (`Groups_Elements_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Elements_Sub-units1` FOREIGN KEY (`Sub-units_Sub-units_id`) REFERENCES `sub-units` (`Sub-units_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `group_elements`
--
ALTER TABLE `group_elements`
  ADD CONSTRAINT `fk_Group_Elements_Sub-units1` FOREIGN KEY (`Sub-units_Sub-units_id`) REFERENCES `sub-units` (`Sub-units_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `fk_Historial_Elements1` FOREIGN KEY (`Elements_Elements_id`) REFERENCES `elements` (`Elements_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Historial_Loans1` FOREIGN KEY (`Loans_Loans_id`) REFERENCES `loans` (`Loans_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Historial_Users1` FOREIGN KEY (`Users_Users_id`) REFERENCES `users` (`Users_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sub-units`
--
ALTER TABLE `sub-units`
  ADD CONSTRAINT `fk_Sub-units_Units1` FOREIGN KEY (`Units_Units_id`) REFERENCES `units` (`Units_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_Users_DNI` FOREIGN KEY (`DNI_DNI_id`) REFERENCES `dni` (`DNI_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Users_Loans1` FOREIGN KEY (`Loans_Loans_id`) REFERENCES `loans` (`Loans_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Users_Role1` FOREIGN KEY (`Role_Role_id`) REFERENCES `role` (`Role_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `users_has_units`
--
ALTER TABLE `users_has_units`
  ADD CONSTRAINT `fk_Users_has_Units1_Sub-units1` FOREIGN KEY (`Sub-units_Sub-units_id`) REFERENCES `sub-units` (`Sub-units_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Users_has_Units1_Units1` FOREIGN KEY (`Units_Units_id`) REFERENCES `units` (`Units_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Users_has_Units1_Users1` FOREIGN KEY (`Users_Users_id`) REFERENCES `users` (`Users_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
