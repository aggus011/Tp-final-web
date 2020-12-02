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
        $data["usuarios"]=$this->ABMUsuariosSuperModel->traerUsuarios();
        echo $this->render->render("view/ABMUsuariosView.php",$data);
    }

    public function modificarRol(){
        $rolElegido = $_POST["rol"];
        $nombreUsuario= $_POST["nick"];
        $this->ABMUsuariosSuperModel->modificarRolDeUsuario($nombreUsuario,$rolElegido);
        header("Location:/ABMUsuariosSuper");
        exit();
    }
    public function modificarEstado(){
        $estadoElegido = $_POST["estado"];
        $nombreUsuario= $_POST["nick"];
        $this->ABMUsuariosSuperModel->modificarEstadoDeUsuario($nombreUsuario,$estadoElegido);
        header("Location:/ABMUsuariosSuper");
        exit();
    }

    public function darBaja(){
        $nombreUsuario = isset($_POST['nombreUsuario']) ? $_POST['nombreUsuario'] : "";
        if($nombreUsuario != ""){
            $this->ABMUsuariosSuperModel->darBaja($nombreUsuario);
            header("Location:/ABMUsuariosSuper");
        }
        else{
            echo $this->render->render("view/registerView.php");
        }
    } 
    
}
?>