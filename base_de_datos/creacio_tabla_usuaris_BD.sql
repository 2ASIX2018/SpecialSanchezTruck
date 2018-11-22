
create database sst;
use sst;

CREATE TABLE IF NOT EXISTS `sst`.`Usuarios` (
  `idUsuarios` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `passwd` VARCHAR(45) NULL,
  `Nombre` VARCHAR(45) NOT NULL,
  `Direccion` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NULL,
  `DNI` VARCHAR(9) NOT NULL,
  `Poblacion` VARCHAR(45) NOT NULL,
  `Telefono` INT(9) NULL DEFAULT NULL,
  `rol` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idUsuarios`, `username`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

INSERT INTO Usuarios(username,passwd,Nombre,Direccion,email,DNI,Poblacion,Telefono,rol) VALUES 
('admin','1234','admininstrador','SST','admin@admin','0','Sueca','0','admin'),
('user','1234','usuario','c/','user@user','0','Sueca','0','user');

select * from Usuarios;

SELECT rol FROM Usuarios WHERE username = 'admin' AND passwd = '1234';
SELECT rol FROM Usuarios WHERE username = 'user' AND passwd = '1234';