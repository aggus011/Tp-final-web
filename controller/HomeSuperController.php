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
    public function verUbicacion(){
        if ($_SESSION["rolLogeado"] == "supervisor") {
            echo $this->render->render("view/ubicacionSuperView.php");
        } else {
            echo "Usuario no es supervisor";
        }
    }
    public function mostrarUbicacion(){

        if ($_SESSION["rolLogeado"] == "supervisor") {

            $ubicacion=$this->homeSuperModel->obtenerUbicacionDeViaje($_POST["idViaje"]);
            $data["latitud"]=$ubicacion[0]["latitud"];
            $data["longitud"]=$ubicacion[0]["longitud"];
            echo $this->render->render("view/mostrarUbicacionView.php",$data);
        } else {
            echo "Usuario no es supervisor";
        }
    }
}
?>