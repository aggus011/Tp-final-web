<?php
class HomeTallerController
{
    private $homeTallerModel;
    private $render;

    public function __construct($homeTallerModel, $render){
        $this->homeTallerModel = $homeTallerModel;
        $this->render = $render;
    }

    public function execute(){
        echo $this->render->render("view/homeTallerView.php");
    }
}
?>