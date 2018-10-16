<?php

require_once  "./view/loginView.php";
require_once  "./model/usuarioModel.php";


class loginController
{
  private $Loginview;
  private $Loginmodel;

  function __construct()
  {
    $this->Loginview = new loginView();
    $this->Loginmodel = new usuarioModel();
  }

  function login(){
    $this->Loginview->mostrarLogin();
  }

  function logout(){
    session_start();
    session_destroy();
    header(HOME);
  }

  function verificarLogin(){
      $nombre = $_POST["nombre"];
      $clave = $_POST["clave"];
      $dbUser = $this->Loginmodel->GetUser($nombre);
      if(!empty($dbUser)){
          if (password_verify($clave, $dbUser[0]['clave'])){
              //mostrar lista de tareas
              session_start();
              $_SESSION["nombre"] = $nombre;
              header(tiposDeCerveza);
          }else{
            $this->Loginview->mostrarLogin("Contraseña incorrecta");

          }
      }else{
        //No existe el usario
        $this->Loginview->mostrarLogin("No existe el usario");
      }

  }

}

 ?>
