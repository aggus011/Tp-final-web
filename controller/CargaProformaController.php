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
}
?>