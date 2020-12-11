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
(1,
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
'76d80224611fc919a5d54f0ff9fba446',
1,
2,
1);

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
'76d80224611fc919a5d54f0ff9fba446',
1,
1,
1);
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
'76d80224611fc919a5d54f0ff9fba446',
1,
3,
1);
INSERT INTO `grupo02`.`arrastrado`
(
  `idArrastrado`,
  `patenteArrastrado`,
  `tipo`,
  `chasis`
)
VALUES
(
1,
'AA100AS',
'Araña',
'585822'
),
(
2,
'AC125AD',
'Araña',
'605737'
),
(
3,
'AB135AG',
'Araña',
'705687'
),
(
4,
'AA189AD',
'Araña',
'775167'
),
(
5,
'AC208AG',
'Araña',
'642287'
),
(
6,
'AB230AS',
'Araña',
'678666'
),
(
7,
'AD252AD',
'Araña',
'758967'
),
(
8,
'AA274AG',
'Araña',
'498515'
),
(
9,
'AC296AS',
'Jaula',
'882174'
),
(
10,
'AB318AD',
'Jaula',
'595287'
),
(
11,
'AD340AG',
'Jaula',
'549916'
),
(
12,
'AA362AS',
'Jaula',
'831768'
),
(
13,
'AC383AD',
'Jaula',
'535330'
),
(
14,
'AB405AG',
'Tanque',
'583419'
),
(
15,
'AD427AS',
'Tanque',
'703673'
),
(
16,
'AA449AD',
'Tanque',
'884654'
),
(
17,
'AC471AG',
'Tanque',
'510019'
),
(
18,
'AB493AS',
'Tanque',
'595948'
),
(
19,
'AD515AD',
'Tanque',
'704640'
),
(
20,
'AA537AG',
'Tanque',
'752105'
),
(
21,
'AC559AS',
'Tanque',
'554550'
),
(
22,
'AB581AD',
'Granel',
'761560'
),
(
23,
'AD602AG',
'Granel',
'555608'
),
(
24,
'AA624AS',
'Granel',
'852157'
),
(
25,
'AC624AD',
'Granel',
'710797'
),
(
26,
'AB688AG',
'Granel',
'815072'
),
(
27,
'AD690AS',
'Granel',
'495851'
),
(
28,
'AA712AD',
'Granel',
'468708'
),
(
29,
'AC734AG',
'Granel',
'661897'
),
(
30,
'AB756AS',
'Granel',
'616372'
),
(
31,
'AD778AD',
'Granel',
'873758'
),
(
32,
'AA800AG',
'Granel',
'820810'
),
(
33,
'AC821AS',
'Araña',
'731202'
),
(
34,
'AB843AD',
'Araña',
'670323'
),
(
35,
'AD865AG',
'Araña',
'747642'
),
(
36,
'AA88AS',
'Araña',
'777450'
),
(
37,
'AC909AD',
'Araña',
'485098'
),
(
38,
'AB931AG',
'Araña',
'806730'
),
(
39,
'AD953AS',
'Araña',
'729910'
),
(
40,
'AA975AD',
'Araña',
'726457'
),
(
41,
'AC997AG',
'Araña',
'730861'
),
(
42,
'AD100AZ',
'CarCarriet',
'730027'
),
(
43,
'AD100AQ',
'CarCarriet',
'730502'
),
(
44,
'AD100ER',
'CarCarriet',
'730978'
),
(
45,
'AD101EF',
'CarCarriet',
'731453'
),
(
46,
'AD102HG',
'CarCarriet',
'731929'
),
(
47,
'AD103LO',
'CarCarriet',
'732404'
),
(
48,
'AD104WE',
'CarCarriet',
'732880'
),
(
49,
'AD105ZP',
'CarCarriet',
'733355'
);