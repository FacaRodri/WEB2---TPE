<?php

require_once "./view/usuarioView.php";
require_once "./model/usuarioModel.php";
require_once "./controller/securedController.php";

class usuarioController 
{
  private $Userview;
  private $Usermodel;

  function __construct()
  {
    
    $this->Userview = new UsuarioView();
    $this->Usermodel = new usuarioModel();
  }

  function MostrarUsuario()
  {
    $Usuarios = $this->Usermodel->GetUser();
    $this->Userview->Mostrar($this->$Usuarios);
  }

  function InsertUsuario()
  {
    $nombre = $_POST["nombre"];
    $clave = $_POST["clave"];
    $hash = password_hash($clave, PASSWORD_DEFAULT);
    $this->Usermodel->InsertarUsuario($nombre, $hash);
    session_start();
    $_SESSION['nombre'] = $nombre;
    $_SESSION['admin'] = 0;
    header(HOME);
    header("Location: http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }
  function registro(){
    $this->Userview->registro();

  }

}

?>
