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
        if ($_SESSION["rolLogeado"] == "encargadoTaller") {
            echo $this->render->render("view/homeTallerView.php");
        } else {
            echo "Usuario no es encargado";
        }

    }
}
?>