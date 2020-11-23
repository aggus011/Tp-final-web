<?php 
class ABMUsuariosModel{
    private $database;

    public function __construct($database){
        $this->database = $database;
    }
    public function traerUsuarios(){
        return $this->database->query("SELECT * FROM usuario");
    }
    public function modificarRolDeUsuario($usuario,$rol){
        return $this->database->queryInsert("UPDATE `grupo02`.`usuario` SET `fk_Usuario_Role` = (SELECT idRole FROM `role` WHERE nombre ='$rol') WHERE `nombreUsuario` ='$usuario';");
    }

    public function modificarEstadoDeUsuario($nombreUsuario,$estadoElegido){
        $estado=null;
        if ($estadoElegido == "Activo"){
            $estado=1;
        }
        if ($estadoElegido == "Inactivo"){
            $estado=0;
        }
        return $this->database->queryInsert("UPDATE `grupo02`.`usuario` SET `estado` = '$estado' WHERE `nombreUsuario` = '$nombreUsuario';");
    }
}