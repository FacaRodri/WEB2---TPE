<?php

require_once  "./view/tiposDeCervezaView.php";
require_once  "./model/cervezaModel.php";
require_once  "./model/distribuidorModel.php";
require_once  "./controller/securedController.php";

class cervezaController extends securedController
{
  private $CervezasView;
  private $CervezasModel;
  private $DistribuidorModel;
  

  function __construct()
  {
    parent::__construct();
    $this->CervezasView = new tiposDeCervezaView();
    $this->CervezasModel = new cervezaModel();
    $this->DistribuidorModel = new distribuidorModel();
  }

  function mostrarCerveza(){
    $cervezas = $this->CervezasModel->GetAll();
    $creador = $this->DistribuidorModel->GetAll();
    $this->CervezasView->mostrar($cervezas,$creador);

}



function editarCerveza($params){
  $id_cerveza = $params[0];
  $cerveza = $this->CervezasModel->Get($id_cerveza);
  $this->CervezasView->mostrarEditarCerveza($cerveza);
  
}

function GuardarEditarCerveza($id_cerveza){
  $nombre = $_POST['nombreForm'];
  $precio = $_POST['precioForm'];
  $this->CervezasModel->GuardarEditarCerveza($nombre,$precio,$id_cerveza[0]);
  header("Location: http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/tiposDeCerveza");
}

  function InsertCerveza(){
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $id_creador = $_POST["id_creador"];
    $this->CervezasModel->Insert($nombre,$precio,$id_creador);
    header("Location: http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/tiposDeCerveza");
  }

  function Delete($param){
    $this->CervezasModel->Delete($param[0]);
    header("Location: http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/tiposDeCerveza");
  }

  //distribuidor

  function InsertDistribuidor(){
    $nombre = $_POST["nombre"];
    $localidad = $_POST["localidad"];
    $this->DistribuidorModel->Insert($nombre,$localidad);
    header("Location: http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/tiposDeCerveza");
  }

  function DeleteDistribuidor($param){
    $this->DistribuidorModel->Delete($param[0]);
    header("Location: http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/tiposDeCerveza");
  }

  function editarDistribuidor($params){
    $id_creador = $params[0];
    $creador = $this->DistribuidorModel->Get($id_creador);
    $this->CervezasView->mostrarEditarDistribuidor($creador); 
  }
  
  function GuardarEditarDistribuidor($id_creador){
    $nombre = $_POST['nombreFormC'];
    $localidad = $_POST['localidadFormC'];
    $this->DistribuidorModel->GuardarEditarCreador($nombre,$localidad,$id_creador[0]);
    header("Location: http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/tiposDeCerveza");
  }

  
}

 ?>
