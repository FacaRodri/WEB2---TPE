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
  // $id_cerveza = $cerveza[0];

  $cervezas = $this->CervezasModel->Get($id_cerveza);
  $this->CervezasView->mostrarEditarCerveza($cervezas);
}


// function GuardarEditarCerveza(){
//   $id_tarea = $_POST["idForm"];
//   $titulo = $_POST["tituloForm"];
//   $descripcion = $_POST["descripcionForm"];


//   if(isset($_POST["completadaForm"])){
//     $completada = 1;
//   }else{
//     $completada = 0;
//   }

//   $this->model->GuardarEditarTarea($titulo,$descripcion,$completada,$id_tarea);

//   header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
// }


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
