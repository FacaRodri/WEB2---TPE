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

  function editarCerveza($id_cerveza){
      // $id_cerveza = $param[0];

      $cerveza = $this->model->Get($id_cerveza);
      $this->Cervezasview->MostrarEditar("Editar", $cerveza);
  }

  function InsertCerveza(){
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];

    
    $this->CervezasModel->Insert($nombre,$precio);

    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function GuardarEditarCerveza(){
    $id_cerveza = $_POST["idCerveza"];
    $nombre_cerveza = $_POST["nombreCerveza"];
    $precio = $_POST["precioCerveza"];


    $this->CervezasModel->Edit($id_cerveza, $nombre_cerveza, $precio);

    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function BorrarTarea($id_cerveza){
    $this->CervezaModel->Delete($id_cerveza[0]);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  
}

 ?>
