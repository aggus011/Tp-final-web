<?php 
class RegisterModel{
    private $database;

    public function __construct($database){
        $this->database = $database;
    }

    public function getUsuarios(){
        return $this->database->query("SELECT * FROM usuario");
    }

    public function addUser($nombre,$apellido,$documento,$telefono,$email,$username,$password/* aca faltaria direccion y rol*/){

    
       if($nombre != "" && $apellido != "" && $documento != "" && $username != "" && $email != "" && $password != "" && $telefono != ""){
              $this->database->queryInsert("INSERT INTO `usuario` 
              (`nombre`, `apellido`, `documento`, `telefono`, `email`, `nombreUsuario`, `password`, `fk_Usuario_role`,`fk_Usuario_Direccion`)
             VALUES ('$nombre', '$apellido', '$documento', '$telefono', '$email', '$username', '$password','1', '1')");
    }
}
}