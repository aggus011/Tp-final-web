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
        $_POST["latitud"];
        $_POST["longitud"];
        echo $this->render->render("view/ActualizarProformaView.php",$data);
    }
    public function actualizarKilometros(){
        //logica y esas weas
        $data["idViaje"]=$_POST["idViaje"];
        $_POST["actualizarKilometros"];
        echo $this->render->render("view/ActualizarProformaView.php",$data);
    }

    public function actualizarCombustible(){
        //logica y esas weas
        $data["idViaje"]=$_POST["idViaje"];
        $_POST["actualizarCombustible"];
        echo $this->render->render("view/ActualizarProformaView.php",$data);
    }
    public function actualizarEtd(){
        //logica y esas weas
        $data["idViaje"]=$_POST["idViaje"];
        $_POST["actualizarEtd"];
        echo $this->render->render("view/ActualizarProformaView.php",$data);
    }
    public function actualizarEta(){
        //logica y esas weas
        $data["idViaje"]=$_POST["idViaje"];
        $_POST["actualizarEta"];
        echo $this->render->render("view/ActualizarProformaView.php",$data);
    }
    public function actualizarViaticos(){
        //logica y esas weas
        $data["idViaje"]=$_POST["idViaje"];
        $_POST["actualizarViaticos"];
        echo $this->render->render("view/ActualizarProformaView.php",$data);
    }
    public function actualizarPeajePasaje(){
        $data["idViaje"]=$_POST["idViaje"];
        $_POST["actualizarPeajePasaje"];
        echo $this->render->render("view/ActualizarProformaView.php",$data);
        }
    public function actualizarExtras(){
        //logica y esas weas
        $data["idViaje"]=$_POST["idViaje"];
        $_POST["actualizarExtras"];
        echo $this->render->render("view/ActualizarProformaView.php",$data);
    }
    public function actualizarHazard(){
        //logica y esas weas
        $data["idViaje"]=$_POST["idViaje"];
        $_POST["actualizarHazard"];
        echo $this->render->render("view/ActualizarProformaView.php",$data);
    }
    public function actualizarReefer(){
        //logica y esas weas
        $data["idViaje"]=$_POST["idViaje"];
        $_POST["actualizarReefer"];
        echo $this->render->render("view/ActualizarProformaView.php",$data);
    }


}