<?php
class HomeAdminController
{
    private $homeAdminModel;
    private $render;

    public function __construct($homeAdminModel, $render){
        $this->homeAdminModel = $homeAdminModel;
        $this->render = $render;
    }

    public function execute(){
        
        echo $this->render->render("view/homeAdminView.php");
    }

    public function darAlta(){
        $nombreUsuario = isset($_POST['nombreUsuario']) ? $_POST['nombreUsuario'] : "";
        if($nombreUsuario != ""){
            $this->homeAdminModel->darAlta($nombreUsuario);
            echo $this->render->render("view/homeAdminView.php");
        }
        
        else{
            echo $this->render->render("view/registerView.php");
        }
    }
    
    public function darBaja(){
        $nombreUsuario = isset($_POST['nombreUsuario']) ? $_POST['nombreUsuario'] : "";
        if($nombreUsuario != ""){
            $this->homeAdminModel->darBaja($nombreUsuario);
            echo $this->render->render("view/homeAdminView.php");
        }
        else{
            echo $this->render->render("view/registerView.php");
        }
    } 

}
?>