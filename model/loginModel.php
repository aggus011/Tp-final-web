 <?php 
class LoginModel{
    private $database;

    public function __construct($database){
        $this->database = $database;
    }

    public function getUsuarios(){
        return $this->database->query("SELECT * FROM `role`");
    }

    public function insertUsuario(){
        return $this->database->queryInsert("INSERT INTO `role` (`nombre`) VALUES ('Chofer')");
    }
}