<?php

include_once("helper/MysqlDatabase.php");
include_once("helper/Render.php");
include_once("helper/UrlHelper.php");

include_once("model/loginModel.php");
include_once("model/registerModel.php");
include_once("model/homeAdminModel.php");
include_once("model/ABMUsuariosModel.php");
include_once("model/CargaProformaModel.php");

include_once("controller/LoginController.php");
include_once("controller/RegisterController.php");
include_once("controller/HomeAdminController.php");
include_once("controller/ABMUsuariosController.php");
include_once("controller/CargaProformaController.php");

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
}