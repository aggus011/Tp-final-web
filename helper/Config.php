<?php

include_once("helper/Database.php");
include_once("helper/Renderer.php");
include_once("helper/UrlHelper.php");

include_once("model/loginModel.php");

include_once("controller/LoginController.php");

include_once('vendor/mustache/src/Mustache/Autoloader.php');
include_once("Router.php");

class Configuration{
    public function getLoginModel(){
        $database = $this->getDatabase();
        return new LoginModel($database);
    }

    private function getDatabase(){
        $config = $this->getConfig();
        return new Database(
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
        return new LoginController($loginModel, $this->getRender);
    }
}