<?php
class CargaProformaModel{
    private $database;

    public function __construct($database){
        $this->database = $database;
    }

    public function getUsuarios(){
        return $this->database->query("SELECT * FROM usuario");
    }

    public function insertaDireccionCliente($calleClienteProforma,$numeroClienteProforma,$localidadClienteProforma,$provinciaClienteProforma,$paisClienteProforma){
        $this->database->queryInsert("INSERT INTO direccion (`calle`,`numero`,`localidad`,`provincia`,`pais`)VALUES('$calleClienteProforma','$numeroClienteProforma','$localidadClienteProforma','$provinciaClienteProforma','$paisClienteProforma')");
        $idDireccion= $this->database->query("SELECT idDireccion FROM direccion WHERE `calle` = '$calleClienteProforma'
                                                                        AND `numero` = '$numeroClienteProforma'
                                                                        AND `localidad` = '$localidadClienteProforma'
                                                                        AND `provincia` = '$provinciaClienteProforma'
                                                                        AND `pais` = '$paisClienteProforma'");
        return $idDireccion[0]['idDireccion'];                                          
    }

    public function insertaCliente($clienteNombre,$clienteApellido,$clienteDenominacion,$clienteCuit,$clienteTelefono,$clienteEmail,$clienteContacto1,$clienteContacto2,$idDireccion){
        $this->database->queryInsert("INSERT INTO cliente (`nombre`,`apellido`,`cuitOcuil`,`denominacion`,`telefono`,`email`,`contacto1`,`contacto2`,`fk_Cliente_Direccion`)VALUES('$clienteNombre','$clienteApellido','$clienteCuit','$clienteDenominacion','$clienteTelefono','$clienteEmail','$clienteContacto1','$clienteContacto2','$idDireccion')");
        $idCliente= $this->database->query("SELECT idCliente FROM cliente WHERE `nombre` = '$clienteNombre'
                                                                        AND `apellido` = '$clienteApellido'
                                                                        AND `cuitOcuil` = '$clienteCuit'
                                                                        AND `fk_Cliente_Direccion` = '$idDireccion'");
        return $idCliente[0]['idCliente'];   
    }
}

?>