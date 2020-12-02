<?php
class ABMClientesController
{
    private $ABMClientesModel;
    private $render;

    public function __construct($ABMClientesModel, $render){
        $this->ABMClientesModel = $ABMClientesModel;
        $this->render = $render;
    }

    public function execute(){
        echo $this->render->render("view/ABMClientesView.php");
    }

    public function InsertaCliente(){
        //datos clientes
        $data["nombre"]=$clienteNombre = $_POST["nombreClienteProforma"];
        $data["apellido"]=$clienteApellido = $_POST["apellidoClienteProforma"];
        $data["denominacion"]=$clienteDenominacion = $_POST["denominacionProforma"];
        $data["cuit"]=$clienteCuit = $_POST["CuitProforma"];
        $data["telefono"]=$clienteTelefono = $_POST["TelefonoProforma"];
        $data["email"]=$clienteEmail = $_POST["EmailProforma"];
        $data["contacto1"]=$clienteContacto1 = $_POST["contacto1Proforma"];
        $data["contacto2"]=$clienteContacto2 = $_POST["contacto2Proforma"];
        //direccion cliente
        $data["calleC"]=$calleClienteProforma = $_POST["calleProforma"];
        $data["numeroC"]=$numeroClienteProforma = $_POST["numeroProforma"];
        $data["localidadC"]=$localidadClienteProforma = $_POST["localidadProforma"];
        $data["provinciaC"]=$provinciaClienteProforma = $_POST["provinciaProforma"];
        $data["paisC"]=$paisClienteProforma = $_POST["paisProforma"];

        $idDireccion = $this->ABMClientesModel->insertaDireccionCliente($calleClienteProforma,$numeroClienteProforma,$localidadClienteProforma,$provinciaClienteProforma,$paisClienteProforma);
        $idCliente = $this->ABMClientesModel->insertaCliente($clienteNombre,$clienteApellido,$clienteDenominacion,$clienteCuit,$clienteTelefono,$clienteEmail,$clienteContacto1,$clienteContacto2,$idDireccion);
        echo $this->render->render("view/ABMClientesView.php");
    }
}
?>