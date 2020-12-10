<?php
class ABMUsuariosController
{
    private $ABMUsuariosModel;
    private $render;

    public function __construct($ABMUsuariosModel, $render){
        $this->ABMUsuariosModel = $ABMUsuariosModel;
        $this->render = $render;
    }

    public function execute()    {
        $data["usuarios"] = $this->ABMUsuariosModel->traerUsuarios();
        if ($_SESSION["rolLogeado"] == "admin") {
            echo $this->render->render("view/ABMUsuariosView.php", $data);
        } else {
            echo "Usuario no es admin";
        }
    }

    public function modificarRol(){
        $rolElegido = $_POST["rol"];
        $nombreUsuario= $_POST["nick"];
        $this->ABMUsuariosModel->modificarRolDeUsuario($nombreUsuario,$rolElegido);
        header("Location:/ABMUsuarios");
        exit();
    }
    public function modificarEstado(){
        $estadoElegido = $_POST["estado"];
        $nombreUsuario= $_POST["nick"];
        $this->ABMUsuariosModel->modificarEstadoDeUsuario($nombreUsuario,$estadoElegido);
        header("Location:/ABMUsuarios");
        exit();
    }


}
?>