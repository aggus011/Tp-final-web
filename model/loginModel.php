 <?php 
class LoginModel{
    private $database;

    public function __construct($database){
        $this->database = $database;
    }

    public function getUsuarios(){
        return $this->database->query("SELECT * FROM `role`");
    }

    public function validarUsuarioUnico($nombre, $password){
        $queryResult = $this->database->query("SELECT nombreUsuario, password FROM `usuario` 
        WHERE nombreUsuario = '". $nombre ."' and password='".$password."'");
        if (sizeof($queryResult) == 1){
            return true;
        }else{
            return false;
        }
    } 
}