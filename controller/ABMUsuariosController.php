<?php
class ABMUsuariosController
{
    private $ABMUsuariosModel;
    private $render;

    public function __construct($ABMUsuariosModel, $render){
        $this->ABMUsuariosModel = $ABMUsuariosModel;
        $this->render = $render;
    }

    public function execute(){
        
        echo $this->render->render("view/ABMUsuariosView.php");
    }

}
?>