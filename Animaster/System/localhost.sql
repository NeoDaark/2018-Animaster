CREATE DATABASE IF NOT EXISTS bd_animaster;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS Users (
      id_user     int NOT NULL AUTO_INCREMENT,
      user_name     varchar(50) UNIQUE,
      user_mail     varchar(100),
      user_pass     varchar(255),
      user_rol      int NOT NULL DEFAULT 0,
      user_color    int NOT NULL DEFAULT 6,
      PRIMARY KEY (`id_user`)
);

CREATE TABLE IF NOT EXISTS Roles (
      id_rol     int NOT NULL AUTO_INCREMENT,
      rol_name     varchar(32),
      PRIMARY KEY (`id_rol`)
);

ALTER TABLE Users ADD FOREIGN KEY (user_rol) REFERENCES Roles (id_rol);


--
-- Volcado de datos para la tabla `Roles`
--
INSERT INTO `Roles` (
`id_rol` ,
`rol_name`
)
VALUES
(0, 'User'),
(1, 'Admin');
