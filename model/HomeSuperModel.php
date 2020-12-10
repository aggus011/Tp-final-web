<?php 
class HomeSuperModel{
    private $database;

    public function __construct($database){
        $this->database = $database;
    }
    public function obtenerUbicacionDeViaje($idViaje){
        return $this->database->query("SELECT * FROM grupo02.ubicaciones where idViaje='$idViaje'
order by idUbicacion desc limit 1 ;");
    }
}