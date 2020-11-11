<?php
class RegisterController
{
    private $registerModel;
    private $render;

    public function __construct($registerModel, $render){
        $this->registerModel = $registerModel;
        $this->render = $render;
    }

    public function execute(){
        
        $data["usuario"] = $this->registerModel->getUsuarios();
        echo $this->render->render("view/registerView.php", $data);
    }
    public function addUser(){
        $this->registerModel->addUser();
        echo $this->render->render( "view/registerView.php");
    }

}
?>