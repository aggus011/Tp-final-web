drop database grupo02;
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

CREATE TABLE IF NOT EXISTS `grupo02`.`Cliente` (
  `idCliente` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(25) NULL,
  `apellido` VARCHAR(25) NULL,
  `cuitOcuil` VARCHAR(25) NULL,
  PRIMARY KEY (`idCliente`))
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

CREATE TABLE IF NOT EXISTS `grupo02`.`Usuario` (
  `idUsuario` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(25) NULL,
  `apellido` VARCHAR(25) NULL,
  `documento` VARCHAR(25) NULL,
  `telefono` VARCHAR(25) NULL,
  `email` VARCHAR(60) NULL,
  `nombreUsuario` VARCHAR(60) NULL,
  `password` VARCHAR(255) NULL,
  `estado` TINYINT(1) UNSIGNED NULL DEFAULT 0,
  `fk_Usuario_Role` TINYINT UNSIGNED NOT NULL,
  `fk_Usuario_Direccion` INT NOT NULL,
  PRIMARY KEY (`idUsuario`),
  CONSTRAINT `fk_Usuario_Role`
    FOREIGN KEY (`fk_Usuario_Role`)
    REFERENCES `grupo02`.`Role` (`idRole`),
  CONSTRAINT `fk_Usuario_Direccion`
    FOREIGN KEY (`fk_Usuario_Direccion`)
    REFERENCES `grupo02`.`Direccion` (`idDireccion`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `grupo02`.`DatosReal` (
  `idDatosReal` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `fechaYHoraInicio` DATETIME NULL,
  `fechaYHoraFinalizacion` DATETIME NULL,
  `kilometrosReales` INT NULL,
  `fk_DatosReal_Combustible` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idDatosReal`),
  CONSTRAINT `fk_DatosReal_Combustible`
    FOREIGN KEY (`fk_DatosReal_Combustible`)
    REFERENCES `grupo02`.`Combustible` (`idCombustible`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `grupo02`.`DatosEstimados` (
  `idDatosEstimados` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `fechaYHoraInicio` DATETIME NULL,
  `kilometrosEstimados` INT NULL,
  `fk_DatosEstimados_Combustible` INT UNSIGNED NOT NULL,
  `fechaYHoraFinalizacion` DATETIME NULL,
  PRIMARY KEY (`idDatosEstimados`),
  CONSTRAINT `fk_DatosEstimados_Combustible`
    FOREIGN KEY (`fk_DatosEstimados_Combustible`)
    REFERENCES `grupo02`.`Combustible` (`idCombustible`))
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
  `carga` VARCHAR(45) NULL,
  `costo` DECIMAL(10,2) NULL,
  `fk_Viaje_Cliente` INT UNSIGNED NOT NULL,
  `fk_Viaje_Vehiculo` INT UNSIGNED NOT NULL,
  `fk_Viaje_ViajeEstimado` INT UNSIGNED NOT NULL,
  `fk_Viaje_ViajeReal` INT UNSIGNED NOT NULL,
  `fk_Viaje_Direccion` INT NOT NULL,
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
  CONSTRAINT `fk_Viaje_Direccion`
    FOREIGN KEY (`fk_Viaje_Direccion`)
    REFERENCES `grupo02`.`Direccion` (`idDireccion`))
ENGINE = InnoDB;
