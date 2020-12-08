<?php
class ABMUsuariosSuperController
{
    private $ABMUsuariosSuperModel;
    private $render;

    public function __construct($ABMUsuariosSuperModel, $render){
        $this->ABMUsuariosSuperModel = $ABMUsuariosSuperModel;
        $this->render = $render;
    }

    public function execute(){
        $data["usuarios"] = $this->ABMUsuariosSuperModel->traerUsuarios();
        if ($_SESSION["rolLogeado"] == "super") {
            echo $this->render->render("view/ABMUsuariosView.php", $data);
        } else {
            echo "Usuario no es super";
        }
    }
}
?>