<?php
class LoginController
{
    private $loginModel;
    private $render;

    public function __construct($loginModel, $render){
        $this->loginModel = $loginModel;
        $this->render = $render;
    }

    public function execute(){
        
        $data["usuarios"] = $this->loginModel->getUsuarios();
        echo $this->render->render("view/loginView.php", $data);
    }

    public function insertUsuario(){
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
        $password = isset($_POST['password']) ? $_POST['password'] : "";
        if($nombre == "" || $password == "")
            return $this->renderErrorMenssage('El email y password son obligatorios');
        else{
            $usuario =$this->loginModel->traerUsuarioLogeado($nombre, $password);
                if($usuario){
                    $rol= $this->loginModel->traerRolPorNumeroFk($usuario[0]['fk_Usuario_Role']);
                    // aca estaria la separacion por rol una vez logeado pregunta el rol y lo dirige al .php de ese rol
                    // habria q validar q este logeado para seguridad pero esos son detalles
                    // el echo render de la linea 47 se eliminaria y pondria en casa case del switch con su
                    // correspondiente rol
                    switch ($rol[0]["nombre"]){
                        case "admin":
                            $data["nombreRol"]="el usuario ingresado es admin";
                            break;
                        case "supervisor":
                            $data["nombreRol"]="el usuario ingresado es supervisor";
                            break;
                        case "encargadoTaller":
                            $data["nombreRol"]="el usuario ingresado es encargado de taller";
                            break;
                        case "chofer":
                            $data["nombreRol"]="el usuario ingresado es chofer";
                            break;
                        default:
                            $data["nombreRol"]="el usuario ingresado es sin rol";
                            break;
                    }
                    echo $this->render->render( "view/home.php",$data);
                }else{
                    $data["mensajeError"]="Usuario y/o contaseña invalida";
                    echo $this->render->render( "view/loginView.php",$data);
                }
        }

    }

    public function renderErrorMenssage($message){
        $params = array('errorMessage' => $message);
        echo $this->render->render("view/loginView.php", $params);
    }
}
?>