<?php

include_once("helper/MysqlDatabase.php");
include_once("helper/Render.php");
include_once("helper/UrlHelper.php");

include_once("model/loginModel.php");
include_once("model/registerModel.php");
include_once("model/homeModel.php");

include_once("controller/LoginController.php");
include_once("controller/RegisterController.php");
include_once("controller/HomeController.php");

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

    public function getHomeController(){
        $HomeModel = $this->getHomeModel();
        return new RegisterController($HomeModel, $this->getRender());
    }
    
    public function getHomeModel(){
        $database = $this->getDatabase();
        return new homeModel($database);
    }
}