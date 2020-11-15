<?php
class LoginController
{
    private $loginModel;
    private $render;

    public function __construct($loginModel, $render){
        $this->loginModel = $loginModel;
        $this->render = $render;
    }

    public function execute(){
        
        $data["usuarios"] = $this->loginModel->getUsuarios();
        echo $this->render->render("view/loginView.php", $data);
    }

    public function insertUsuario(){
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
        $password = isset($_POST['password']) ? $_POST['password'] : "";
        if($nombre == "" || $password == "")
            return $this->renderErrorMenssage('El email y password son obligatorios');
        else{
                if($this->loginModel->validarUsuarioUnico($nombre, $password)){
                    $data["nombreLogeado"] =$nombre;
                    echo $this->render->render( "view/home.php",$data);
                }else{
                    $data["mensajeError"]="Usuario y/o contaseña invalida";
                    echo $this->render->render( "view/loginView.php",$data);
                }
        }

    }

    public function renderErrorMenssage($message){
        $params = array('errorMessage' => $message);
        echo $this->render->render("view/loginView.php", $params);
    }
}
?>