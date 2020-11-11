 <?php 
class LoginModel{
    private $database;

    public function __construct($database){
        $this->database = $database;
    }

    public function getUsuarios(){
        return $this->database->query("SELECT * FROM `role`");
    }

    public function insertUsuario($nombre, $password){
        $sql = $this->database->query("SELECT nombreUsuario, password FROM `usuario` WHERE nombreUsuario = '". $nombre ."'");
        $num = $sql->num_rows;
        if($num > 0){
            $row = $sql->fetch_assoc();
            $passBd = $row['password'];
            if($password == $passBd)
                $_SESSION['usuario'] = $row['nombreUsuario'];
                echo "ingreso";
        } 
        /* return $this->database->queryInsert("INSERT INTO `role` (`nombre`) VALUES ('Chofer')"); */
    } 
}