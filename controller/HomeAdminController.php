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

}
?>