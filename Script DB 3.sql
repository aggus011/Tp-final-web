drop SCHEMA `grupo02`;
CREATE SCHEMA IF NOT EXISTS `grupo02` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `grupo02` ;

CREATE TABLE IF NOT EXISTS `grupo02`.`Role` (
  `idRole` TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`idRole`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `grupo02`.`Combustible` (
  `idCombustible` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `litrosConsumidos` SMALLINT NULL,
  `costo` DECIMAL(7,2) NULL,
  PRIMARY KEY (`idCombustible`))
ENGINE = InnoDB;
CREATE TABLE IF NOT EXISTS `grupo02`.`Ubicaciones` (
  `idUbicacion` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `idViaje` INT NULL,
  `latitud` varchar(250) null ,
  `longitud` varchar(250) null ,
  PRIMARY KEY (`idUbicacion`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `grupo02`.`Alarma` (
  `idAlarma` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `kilometraje` INT NULL,
  `descripcion` VARCHAR(45) NULL,
  PRIMARY KEY (`idAlarma`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `grupo02`.`Marca` (
  `idMarca` TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`idMarca`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `grupo02`.`Direccion` (
  `idDireccion` INT NOT NULL AUTO_INCREMENT,
  `calle` VARCHAR(45) NULL,
  `numero` int NULL,
  `localidad` VARCHAR(45) NULL,
  `provincia` VARCHAR(45) NULL,
  `pais` VARCHAR(45) NULL,
  PRIMARY KEY (`idDireccion`)
  ) 
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `grupo02`.`Cliente` (
  `idCliente` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(25) NULL,
  `apellido` VARCHAR(25) NULL,
  `cuitOcuil` VARCHAR(25) NULL,
  `denominacion` VARCHAR(25) NULL,
  `telefono` VARCHAR(25) NULL,
  `email` VARCHAR(25) NULL,
  `contacto1` VARCHAR(25) NULL,
  `contacto2` VARCHAR(25) NULL,
  `fk_Cliente_Direccion` INT NULL,
  PRIMARY KEY (`idCliente`),
  CONSTRAINT `fk_Cliente_Direccion`
    FOREIGN KEY (`fk_Cliente_Direccion`)
    REFERENCES `grupo02`.`Direccion` (`idDireccion`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `grupo02`.`Usuario` (
  `idUsuario` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(25) NULL,
  `apellido` VARCHAR(25) NULL,
  `documento` VARCHAR(25) NULL,
  `telefono` VARCHAR(25) NULL,
  `email` VARCHAR(60) NULL,
  `nombreUsuario` VARCHAR(60) NOT NULL UNIQUE,
  `password` VARCHAR(255) NULL,
  `estado` TINYINT(1) UNSIGNED NULL DEFAULT 0,
  `fk_Usuario_Role` TINYINT UNSIGNED NULL,
  `fk_Usuario_Direccion` INT NULL,
  PRIMARY KEY (`idUsuario`),
  CONSTRAINT `fk_Usuario_Role`
    FOREIGN KEY (`fk_Usuario_Role`)
    REFERENCES `grupo02`.`Role` (`idRole`),
  CONSTRAINT `fk_Usuario_Direccion`
    FOREIGN KEY (`fk_Usuario_Direccion`)
    REFERENCES `grupo02`.`Direccion` (`idDireccion`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `grupo02`.`tractor` (
  `idTractor` INT,
  `patenteTractor` VARCHAR(50),
  `marca` VARCHAR(50),
  `modelo` VARCHAR(50),
  `motor` INT,
  `chasis` VARCHAR(50),
  PRIMARY KEY (`idTractor`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `grupo02`.`arrastrado` (
  `idArrastrado` INT,
  `patenteArrastrado` VARCHAR(50) NOT NULL,
  `tipo` VARCHAR(50),
  `chasis` INT,
  PRIMARY KEY (`idArrastrado`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `grupo02`.`costeo` (
  `idCosteo` INT AUTO_INCREMENT,
  `kilometros` INT NOT NULL,
  `fk_Costeo_Combustible` INT UNSIGNED NOT NULL,
  `ETD` INT NOT NULL,
  `ETA` INT NOT NULL,
  `viatico` DOUBLE NOT NULL,
  `peaje_pasaje` DOUBLE NOT NULL,
  `extras` VARCHAR(100),
  `hazard` VARCHAR(100),
  `extra` VARCHAR(100),
  `reefer` VARCHAR (100),
  `fee` DOUBLE,
  PRIMARY KEY (`idCosteo`),
  CONSTRAINT `fk_Costeo_Combustible`
    FOREIGN KEY (`fk_Costeo_Combustible`)
    REFERENCES `grupo02`.`Combustible` (`idCombustible`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `grupo02`.`carga`(
  `idCarga` INT AUTO_INCREMENT,
  `tipo` VARCHAR(50),
  `pesoNeto` DOUBLE,
  `hazard` VARCHAR(100),
  `claseHazard` VARCHAR(100),
  `reefer` VARCHAR(100),
  `temperaturaReefer` VARCHAR(100),
  PRIMARY KEY (`idCarga`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `grupo02`.`DatosReal` (
  `idDatosReal` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `kilometrosReal` INT NULL,
  `combustible` INT UNSIGNED NOT NULL,
  `ETD` DATETIME NULL,
  `ETA` DATETIME NULL,
  `viatico` DOUBLE NOT NULL,
  `peaje_pasaje` DOUBLE NOT NULL,
  `extras` VARCHAR(100),
  `hazard` VARCHAR(100),
  `reefer` VARCHAR (100),
  PRIMARY KEY (`idDatosReal`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `grupo02`.`DatosEstimados` (
  `idDatosEstimados` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `kilometrosEstimados` INT NULL,
  `combustible` INT UNSIGNED NOT NULL,
  `ETD` DATETIME NULL,
  `ETA` DATETIME NULL,
  `viatico` DOUBLE NOT NULL,
  `peaje_pasaje` DOUBLE NOT NULL,
  `extras` VARCHAR(100),
  `hazard` VARCHAR(100),
  `reefer` VARCHAR (100),
  PRIMARY KEY (`idDatosEstimados`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `grupo02`.`EstadoDelVehiculo` (
  `idEstadoDelVehiculo` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `activo` TINYINT(1) NULL,
  `reporte` TEXT NULL,
  `fk_EstadoDelVehiculo_Alarma` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idEstadoDelVehiculo`),
  CONSTRAINT `fk_EstadoDelVehiculo_Alarma`
    FOREIGN KEY (`fk_EstadoDelVehiculo_Alarma`)
    REFERENCES `grupo02`.`Alarma` (`idAlarma`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `grupo02`.`Vehiculo` (
  `idVehiculo` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `modelo` VARCHAR(45) NULL,
  `patente` VARCHAR(10) NULL,
  `numeroDeChasis` VARCHAR(45) NULL,
  `numeroDeMotor` VARCHAR(45) NULL,
  `anioDeFabricacion` DATETIME NULL,
  `kilometraje` INT NULL,
  `posicionActual` VARCHAR(45) NULL,
  `fk_Vehiculo_EstadoDelVehiculo` INT UNSIGNED NOT NULL,
  `fk_Vehiculo_Marca` TINYINT UNSIGNED NOT NULL,
  `fk_Vehiculo_Usuario` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idVehiculo`),
  CONSTRAINT `fk_Vehiculo_EstadoDelVehiculo`
    FOREIGN KEY (`fk_Vehiculo_EstadoDelVehiculo`)
    REFERENCES `grupo02`.`EstadoDelVehiculo` (`idEstadoDelVehiculo`),
  CONSTRAINT `fk_Vehiculo_Marca`
    FOREIGN KEY (`fk_Vehiculo_Marca`)
    REFERENCES `grupo02`.`Marca` (`idMarca`),
  CONSTRAINT `fk_Vehiculo_Usuario`
    FOREIGN KEY (`fk_Vehiculo_Usuario`)
    REFERENCES `grupo02`.`Usuario` (`idUsuario`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `grupo02`.`Licencia` (
  `idLicencia` TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(10) NULL,
  `descripcion` VARCHAR(60) NULL,
  `fk_Licencia_Usuario` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idLicencia`),
  CONSTRAINT `fk_Licencia_Usuario`
    FOREIGN KEY (`fk_Licencia_Usuario`)
    REFERENCES `grupo02`.`Usuario` (`idUsuario`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `grupo02`.`Mantenimiento` (
  `idMantenimiento` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `fechaIngreso` DATETIME NULL,
  `fechaEgreso` DATETIME NULL,
  `costo` DECIMAL(10,2) NULL,
  `repuestosCambiados` VARCHAR(25) NULL,
  `descripcion` VARCHAR(45) NULL,
  `fk_Mantenimiento_Vehiculo` INT UNSIGNED NOT NULL,
  `fk_Mantenimiento_Usuario` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idMantenimiento`),
  CONSTRAINT `fk_Mantenimiento_Vehiculo`
    FOREIGN KEY (`fk_Mantenimiento_Vehiculo`)
    REFERENCES `grupo02`.`Vehiculo` (`idVehiculo`),
  CONSTRAINT `fk_Mantenimiento_Usuario`
    FOREIGN KEY (`fk_Mantenimiento_Usuario`)
    REFERENCES `grupo02`.`Usuario` (`idUsuario`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `grupo02`.`Viaje` (
  `idViajeReal` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `fk_Viaje_Cliente` INT UNSIGNED NOT NULL,
  `fk_Viaje_Vehiculo` INT UNSIGNED NULL,
  `fk_Viaje_ViajeEstimado` INT UNSIGNED NOT NULL,
  `fk_Viaje_ViajeReal` INT UNSIGNED NULL,
  `fk_Viaje_Direccion_Origen` INT NOT NULL,
  `fk_Viaje_Direccion_Destino` INT NOT NULL,
  `fk_Viaje_Tractor` INT NULL,
  `fk_Viaje_Arrastrado` INT NULL,
  `fk_Viaje_Carga` int,
  PRIMARY KEY (`idViajeReal`),
  CONSTRAINT `fk_Viaje_Cliente`
    FOREIGN KEY (`fk_Viaje_Cliente`)
    REFERENCES `grupo02`.`Cliente` (`idCliente`),
  CONSTRAINT `fk_Viaje_Vehiculo`
    FOREIGN KEY (`fk_Viaje_Vehiculo`)
    REFERENCES `grupo02`.`Vehiculo` (`idVehiculo`),
  CONSTRAINT `fk_Viaje_ViajeEstimado`
    FOREIGN KEY (`fk_Viaje_ViajeEstimado`)
    REFERENCES `grupo02`.`DatosEstimados` (`idDatosEstimados`),
  CONSTRAINT `fk_Viaje_ViajeReal`
    FOREIGN KEY (`fk_Viaje_ViajeReal`)
    REFERENCES `grupo02`.`DatosReal` (`idDatosReal`),
  CONSTRAINT `fk_Viaje_Direccion_Origen`
    FOREIGN KEY (`fk_Viaje_Direccion_Origen`)
    REFERENCES `grupo02`.`Direccion` (`idDireccion`),
    CONSTRAINT `fk_Viaje_Direccion_Destino`
    FOREIGN KEY (`fk_Viaje_Direccion_Destino`)
    REFERENCES `grupo02`.`Direccion` (`idDireccion`),
    CONSTRAINT `fk_Viaje_Tractor`
    FOREIGN KEY (`fk_Viaje_Tractor`)
    REFERENCES `grupo02`.`tractor` (`idTractor`),
    CONSTRAINT `fk_Viaje_Arrastrado`
    FOREIGN KEY (`fk_Viaje_Arrastrado`)
    REFERENCES `grupo02`.`arrastrado` (`idArrastrado`),
    CONSTRAINT `fk_Viaje_Carga`
    FOREIGN KEY (`fk_Viaje_Carga`)
    REFERENCES `grupo02`.`carga` (`idCarga`))
ENGINE = InnoDB;

INSERT INTO `grupo02`.`Role` (`nombre`)
  VALUES ('chofer'),
         ('admin'),
         ('supervisor'),
         ('encargadoTaller'),
         ('sin rol');
         
INSERT INTO `grupo02`.`direccion`
(`idDireccion`,
`calle`,
`numero`,
`localidad`,
`provincia`,
`pais`)
VALUES
(0,
'SIN DIRECCION',
null,
'SIN DIRECCION',
'SIN DIRECCION',
'SIN DIRECCION');

INSERT INTO `grupo02`.`usuario`
(
`nombre`,
`apellido`,
`documento`,
`telefono`,
`email`,
`nombreUsuario`,
`password`,
`estado`,
`fk_Usuario_Role`,
`fk_Usuario_Direccion`)
VALUES
(
'admin',
'admin',
123,
123,
'admin',
'admin',
'admin',
1,
2,
0);

INSERT INTO `grupo02`.`usuario`
(
`nombre`,
`apellido`,
`documento`,
`telefono`,
`email`,
`nombreUsuario`,
`password`,
`estado`,
`fk_Usuario_Role`,
`fk_Usuario_Direccion`)
VALUES
(
'chofer',
'chofer',
123,
123,
'chofer',
'chofer',
'chofer',
1,
1,
0);
INSERT INTO `grupo02`.`usuario`
(
`nombre`,
`apellido`,
`documento`,
`telefono`,
`email`,
`nombreUsuario`,
`password`,
`estado`,
`fk_Usuario_Role`,
`fk_Usuario_Direccion`)
VALUES
(
'super',
'super',
123,
123,
'super',
'super',
'super',
1,
3,
0);