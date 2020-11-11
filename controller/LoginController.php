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
        $this->loginModel->insertUsuario();
        echo $this->render->render( "view/loginView.php");
    }
}
?>