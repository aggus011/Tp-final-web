<?php 
class RegisterModel{
    private $database;

    public function __construct($database){
        $this->database = $database;
    }

    public function getUsuarios(){
        return $this->database->query("SELECT * FROM usuario");
    }

    public function addUser(){
        $nombre = isset($_POST['nombreRegister']) ? $_POST['nombreRegister'] : "";
        $apellido = isset($_POST['apellidoRegister']) ? $_POST['apellidoRegister'] : "";
        $documento = isset($_POST['documentoRegister']) ? $_POST['documentoRegister'] : "";
        $username = isset($_POST['usuarioRegister']) ? $_POST['usuarioRegister'] : "";
        $email = isset($_POST['emailRegister']) ? $_POST['emailRegister'] : "";
        $password = isset($_POST['passwordRegister']) ? $_POST['passwordRegister'] : "";
        $direccion = isset($_POST['directionRegister']) ? $_POST['directionRegister'] : "";
        $telefono = isset($_POST['telefonoRegister']) ? $_POST['telefonoRegister'] : "";
    
       if($nombre != "" && $apellido != "" && $documento != "" && $username != "" && $email != "" && $password != "" && $direccion != "" && $telefono != ""){
              $this->database->queryInsert("INSERT INTO `usuario` 
              (`nombre`, `apellido`, `documento`, `telefono`, `email`, `nombreUsuario`, `password`, `Usuario_Direccion`)
             VALUES ('$nombre', '$apellido', '$documento', '$telefono', '$email', '$username', '$password', '$username', '$direccion')");   
    }
}
}