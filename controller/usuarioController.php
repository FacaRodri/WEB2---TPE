<?php

require_once  "./view/usuarioView.php";
require_once  "./model/usuarioModel.php";

class usuarioController extends securedController
{
  private $Userview;
  private $Usermodel;

  function __construct()
  {
    parent::__construct();
    $this->Userview = new UsuarioView();
    $this->Usermodel = new usuarioModel();
  }

  function MostrarUsuario(){
      $Usuarios = $this->Usermodel->GetUser();
      $this->Userview->Mostrar($this->$Usuarios);
  }

  function InsertUsuario(){
    $nombre = $_POST["nombre"];
    $clave = $_POST["clave"];
    $this->Usermodel->InsertarUsuario($nombre,$clave);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

}

 ?>
