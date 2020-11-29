<?php
class CargaProformaController
{
    private $CargaProformaModel;
    private $render;

    public function __construct($CargaProformaModel, $render){
        $this->CargaProformaModel = $CargaProformaModel;
        $this->render = $render;
    }

    public function execute(){
        echo $this->render->render("view/CargaProformaView.php");
    }

    public function cargaCliente(){
        //datos clientes
        $clienteNombre = $_POST["nombreClienteProforma"];
        $clienteApellido = $_POST["apellidoClienteProforma"];
        $clienteDenominacion = $_POST["denominacionProforma"];
        $clienteCuit = $_POST["CuitProforma"];
        $clienteTelefono = $_POST["TelefonoProforma"];
        $clienteEmail = $_POST["EmailProforma"];
        $clienteContacto1 = $_POST["contacto1Proforma"];
        $clienteContacto2 = $_POST["contacto2Proforma"];
        //direccion cliente
        $calleClienteProforma = $_POST["calleProforma"];
        $numeroClienteProforma = $_POST["numeroProforma"];
        $localidadClienteProforma = $_POST["localidadProforma"];
        $provinciaClienteProforma = $_POST["provinciaProforma"];
        $paisClienteProforma = $_POST["paisProforma"];
        $idDireccion = $this->CargaProformaModel->insertaDireccionCliente($calleClienteProforma,$numeroClienteProforma,$localidadClienteProforma,$provinciaClienteProforma,$paisClienteProforma);
        $idCliente = $this->CargaProformaModel->insertaCliente($clienteNombre,$clienteApellido,$clienteDenominacion,$clienteCuit,$clienteTelefono,$clienteEmail,$clienteContacto1,$clienteContacto2,$idDireccion);
        echo $this->render->render("view/CargaProformaView.php");
    }

    public funtion cargaDireccionOrigenViaje(){
        $calleClienteProforma = $_POST["calleViajeOrigen"];
        $numeroViajeOrigen = $_POST["numeroViajeOrigen"];
        $localidadViajeOrigen = $_POST["localidadViajeOrigen"];
        $provinciaViajeOrigen = $_POST["provinciaViajeOrigen"];
        $paisViajeOrigen = $_POST["paisViajeOrigen"];
        $idDireccion = $this->CargaProformaModel->insertaDireccionCliente($calleClienteProforma,$numeroViajeOrigen,$localidadViajeOrigen,$provinciaViajeOrigen,$paisViajeOrigen);
        echo $this->render->render("view/CargaProformaView.php");
    }

    public funtion cargaDireccionDestinoViaje(){
        $calleClienteProforma = $_POST["calleViajeDestino"];
        $numeroViajeDestino = $_POST["numeroViajeDestino"];
        $localidadViajeDestino = $_POST["localidadViajeDestino"];
        $provinciaViajeDestino = $_POST["provinciaViajeDestino"];
        $paisViajeDestino = $_POST["paisViajeDestino"];
        $idDireccion = $this->CargaProformaModel->insertaDireccionCliente($calleClienteProforma,$numeroViajeDestino,$localidadViajeDestino,$provinciaViajeDestino,$paisViajeDestino);
        echo $this->render->render("view/CargaProformaView.php");
    }
}
?>


        <!-- $estadoElegido = $_POST["estado"];
        $nombreUsuario= $_POST["nick"];
        $this->ABMUsuariosModel->modificarEstadoDeUsuario($nombreUsuario,$estadoElegido);
        header("Location:/ABMUsuarios");
        exit(); -->