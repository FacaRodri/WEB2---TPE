<?php

require_once  "./view/tiposDeCervezaView.php";
require_once  "./model/cervezaModel.php";

class cervezaController
{
  private $CervezasView;
  private $CervezasModel;
  

  function __construct()
  {

    $this->CervezasView = new tiposDeCervezaView();
    $this->CervezasModel = new cervezaModel();
    
  }

  function mostrarCerveza(){
    $cervezas = $this->CervezasModel->GetAll();
    $this->CervezasView->mostrar($cervezas);
}

function editarCerveza($params){
  $id_cerveza = $params[0];
  $cervezas = $this->CervezasModel->GetAll();
  $cerveza = $this->CervezasModel->Get($id_cerveza);
  $this->CervezasView->mostrarEditarCerveza($cerveza);
  
}


function GuardarEditarCerveza(){
  $nombre = $_POST['nombreForm'];
  $precio = $_POST['precioForm'];
  $this->CervezasModel->GuardarEditarCerveza($nombre,$precio,$id_cerveza);
  header("Location: http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/tiposDeCerveza");
}

  function InsertCerveza(){
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];

    
    $this->CervezasModel->Insert($nombre,$precio);
    header("Location: http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/tiposDeCerveza");
  }


  function Delete($id_cerveza){
    $this->CervezasModel->Delete($id_cerveza);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  
}

 ?>
