<?php

include_once("helper/MysqlDatabase.php");
include_once("helper/Render.php");
include_once("helper/UrlHelper.php");

include_once("model/loginModel.php");
include_once("model/registerModel.php");
include_once("model/homeAdminModel.php");
include_once("model/ABMUsuariosModel.php");
include_once("model/CargaProformaModel.php");
include_once("model/ABMUsuariosSuperModel.php");
include_once("model/ABMClientesModel.php");
include_once("model/HomeChoferModel.php");
include_once("model/HomeSuperModel.php");
include_once("model/HomeTallerModel.php");
include_once("model/CargaProformaSuperModel.php");
include_once("model/CargaProformaChoferModel.php");

include_once("controller/LoginController.php");
include_once("controller/RegisterController.php");
include_once("controller/HomeAdminController.php");
include_once("controller/ABMUsuariosController.php");
include_once("controller/CargaProformaController.php");
include_once("controller/ABMUsuariosSuperController.php");
include_once("controller/ABMClientesController.php");
include_once("controller/HomeChoferController.php");
include_once("controller/HomeSuperController.php");
include_once("controller/HomeTallerController.php");
include_once("controller/CargaProformaSuperController.php");
include_once("controller/CargaProformaChoferController.php");

include_once('vendor/mustache/mustache/src/Mustache/Autoloader.php');
include_once("Router.php");

class Configuration{
   

    private function getDatabase(){
        $config = $this->getConfig();
        return new MysqlDatabase(
            $config["servername"],
            $config["username"],
            $config["password"],
            $config["dbname"]
        );
    }

    private function getConfig(){
        return parse_ini_file("config/config.ini");
    }

    public function getRender(){
        return new Render('view/partial');
    }

    public function getRouter(){
        return new Router($this);
    }

    public function getUrlHelper(){
        return new UrlHelper();
    }
    
    public function getLoginController(){
        $loginModel = $this->getLoginModel();
        return new LoginController($loginModel, $this->getRender());
    }

    public function getLoginModel(){
        $database = $this->getDatabase();
        return new LoginModel($database);
    }

    public function getRegisterController(){
        $RegisterModel = $this->getRegisterModel();
        return new RegisterController($RegisterModel, $this->getRender());
    }
    
    public function getRegisterModel(){
        $database = $this->getDatabase();
        return new RegisterModel($database);
    }

    public function getHomeAdminController(){
        $homeAdminModel = $this->getHomeAdminModel();
        return new HomeAdminController($homeAdminModel, $this->getRender());
    }

    public function getHomeAdminModel(){
        $database = $this->getDatabase();
        return new HomeAdminModel($database);
    }

    public function getABMUsuariosController(){
        $ABMUsuariosModel = $this->getABMUsuariosModel();
        return new ABMUsuariosController($ABMUsuariosModel, $this->getRender());
    }

    public function getABMUsuariosModel(){
        $database = $this->getDatabase();
        return new ABMUsuariosModel($database);
    }
    
    public function getCargaProformaController(){
        $CargaProformaModel = $this->getCargaProformaModel();
        return new CargaProformaController($CargaProformaModel, $this->getRender());
    }

    public function getCargaProformaModel(){
        $database = $this->getDatabase();
        return new CargaProformaModel($database);
    }

    public function getABMUsuariosSuperController(){
        $ABMUsuariosSuperModel = $this->getABMUsuariosSuperModel();
        return new ABMUsuariosSuperController($ABMUsuariosSuperModel, $this->getRender());
    }

    public function getABMUsuariosSuperModel(){
        $database = $this->getDatabase();
        return new ABMUsuariosSuperModel($database);
    }

    public function getABMClientesController(){
        $ABMClientesModel = $this->getABMClientesModel();
        return new ABMClientesController($ABMClientesModel, $this->getRender());
    }

    public function getABMClientesModel(){
        $database = $this->getDatabase();
        return new ABMClientesModel($database);
    }

    public function getHomeChoferController(){
        $homeChoferModel = $this->getHomeChoferModel();
        return new HomeChoferController($homeChoferModel, $this->getRender());
    }

    public function getHomeChoferModel(){
        $database = $this->getDatabase();
        return new HomeChoferModel($database);
    }

    public function getHomeSuperController(){
        $homeSuperModel = $this->getHomeSuperModel();
        return new HomeSuperController($homeSuperModel, $this->getRender());
    }

    public function getHomeSuperModel(){
        $database = $this->getDatabase();
        return new HomeSuperModel($database);
    }

    public function getCargaProformaSuperController(){
        $CargaProformaSuperModel = $this->getCargaProformaSuperModel();
        return new CargaProformaSuperController($CargaProformaSuperModel, $this->getRender());
    }

    public function getCargaProformaSuperModel(){
        $database = $this->getDatabase();
        return new CargaProformaSuperModel($database);
    }

    public function getCargaProformaChoferController(){
        $CargaProformaChoferModel = $this->getCargaProformaChoferModel();
        return new CargaProformaChoferController($CargaProformaChoferModel, $this->getRender());
    }

    public function getCargaProformaChoferModel(){
        $database = $this->getDatabase();
        return new CargaProformaChoferModel($database);
    }

    public function getHomeTallerController(){
        $homeTallerModel = $this->getHomeTallerModel();
        return new HomeTallerController($homeTallerModel, $this->getRender());
    }

    public function getHomeTallerModel(){
        $database = $this->getDatabase();
        return new HomeTallerModel($database);
    }
}