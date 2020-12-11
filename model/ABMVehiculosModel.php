<?php 
class ABMVehiculosModel{
    private $database;

    public function __construct($database){
        $this->database = $database;
    }
    public function traerArrastrado(){
        return $this->database->query("SELECT * FROM `grupo02`.`arrastrado`;");
    }
}