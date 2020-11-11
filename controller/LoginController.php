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
        if($nombre == "" OR $password == "")
            return $this->renderErrorMenssage('El email y password son obligatorios');
        else()
        $this->loginModel->insertUsuario($nombre);
        echo $this->render->render( "view/loginView.php");
    }

    public function renderErrorMenssage($message){
        $params = array('errorMessage' => $message);
        echo $this->render->render("view/loginView.php", $params);
    }
}
?>