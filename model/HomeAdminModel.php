<?php 
class HomeAdminModel{
    private $database;

    public function __construct($database){
        $this->database = $database;
    }

    public function darAlta($nombreUsuario){
        $this->database->queryInsert("UPDATE `usuario` SET `estado` = 1 WHERE `nombreUsuario` = '$nombreUsuario'");
    }

    public function darBaja($nombreUsuario){
        $this->database->queryInsert("UPDATE `usuario` SET `estado` = 0 WHERE `nombreUsuario` = '$nombreUsuario'");
    }

}