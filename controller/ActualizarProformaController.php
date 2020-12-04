<?php


class ActualizarProformaController
{
    private $loginModel;
    private $CargaProformaModel;
    private $render;

    public function __construct($LoginModel,$CargaProformaModel, $render){
        $this->loginModel=$LoginModel;
        $this->CargaProformaModel = $CargaProformaModel;
        $this->render = $render;
    }
    public function execute(){
        echo "Error falta al cargar proforma.";
    }
    public function choferConProforma(){
        $data["idViaje"]=$_GET["idViaje"];
        echo $this->render->render("view/loginConQr.php",$data);
    }
    public function actualizarViaje(){
        $idViaje=$_POST["idViaje"];
        $nombre=$_POST["nombre"];
        $password=$_POST["password"];

        $usuario =$this->loginModel->traerUsuarioLogeado($nombre, $password);
        if($usuario) {
            $rol = $this->loginModel->traerRolPorNumeroFk($usuario[0]['fk_Usuario_Role']);
            if($rol="chofer"){
                $data["idViaje"]=$idViaje;
                echo $this->render->render("view/ActualizarProformaView.php",$data);
            }else{
                echo "Problemas con el rol del usuario logeado";
            }
        }else{
            echo "Problemas con el usuario";
        }


    }
    public function actualizarUbicacion(){
        //logica y esas weas
        //echo $_POST["idViaje"]."<br>".$_POST["latitud"]."<br>".$_POST["longitud"];
        $data["idViaje"]=$_POST["idViaje"];
        echo $this->render->render("view/ActualizarProformaView.php",$data);
    }

}