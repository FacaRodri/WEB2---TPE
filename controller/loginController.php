<?php

require_once "./view/loginView.php";
require_once "./model/usuarioModel.php";


class loginController
{
  private $Loginview;
  private $Usermodel;

  function __construct()
  {
    $this->Loginview = new loginView();
    $this->Usermodel = new usuarioModel();
  }

  function login()
  {
    if (isset($_SESSION["nombre"])) {
      $nombre = $_SESSION["nombre"];
      $this->Loginview->mostrarLogin($nombre);
    } else {
      $this->Loginview->mostrarLogin(null);
    }
  }

  function logout()
  {
    session_start();
    session_destroy();
    header(HOME);
  }

  function verificarLogin()
  {
    $nombre = $_POST["nombre"];
    $clave = $_POST["clave"];
    $dbUser = $this->Usermodel->GetUser($nombre);
    if (!empty($dbUser)) {
      if (password_verify($clave, $dbUser[0]['clave'])) {
        session_start();
        $_SESSION["nombre"] = $nombre;
        $_SESSION['admin'] = $dbUser[0]['admin'];
        header(tiposDeCerveza);
      } else {
        $this->Loginview->mostrarLogin("Contraseña incorrecta");
      }
    } else {
      $this->Loginview->mostrarLogin("No existe el usuario");
    }

  }

}

?>
