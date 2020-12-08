<?php
class HomeSuperController
{
    private $homeSuperModel;
    private $render;

    public function __construct($homeSuperModel, $render){
        $this->homeSuperModel = $homeSuperModel;
        $this->render = $render;
    }

    public function execute(){
        if ($_SESSION["rolLogeado"] == "supervisor") {
            echo $this->render->render("view/homeSuperView.php");
        } else {
            echo "Usuario no es supervisor";
        }

    }
}
?>