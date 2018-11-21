<?php

require_once "./view/tiposDeCervezaView.php";
require_once "./model/cervezaModel.php";
require_once "./model/distribuidorModel.php";
require_once "./controller/securedController.php";
require_once "./model/imagenModel.php";

class cervezaController extends securedController
{
  private $CervezasView;
  private $CervezasModel;
  private $DistribuidorModel;
  private $ImagenModel;


  function __construct()
  {
    parent::__construct();
    $this->CervezasView = new tiposDeCervezaView();
    $this->CervezasModel = new cervezaModel();
    $this->DistribuidorModel = new distribuidorModel();
    $this->ImagenModel = new imagenModel();

  }

  function mostrarCerveza()
  {
    if ($_SESSION['admin'] == 1) {
      $cervezas = $this->CervezasModel->GetAll();
      $creador = $this->DistribuidorModel->GetAll();
      $this->CervezasView->mostrar($cervezas, $creador);
    } else {
      header(HOME);
    }
  }



  function editarCerveza($params)
  {
    if ($_SESSION['admin'] == 1) {
      $id_cerveza = $params[0];
      $id_creador = $params[0];
      $cerveza = $this->CervezasModel->Get($id_cerveza);
      $creador = $this->DistribuidorModel->Get($id_creador);
      $this->CervezasView->mostrarEditarCerveza($cerveza, $creador);
    } else {
      header(HOME);
    }
  }

  function GuardarEditarCerveza($id_cerveza){
    if ($_SESSION['admin'] == 1) {
      $nombre = $_POST['nombreForm'];
      $precio = $_POST['precioForm'];
      $this->CervezasModel->GuardarEditarCerveza($nombre, $precio, $id_cerveza[0]);
      header(TIPOSDECERVEZA);
    } else {
      header(HOME);
    }
  }

  function InsertCerveza(){
    if ($_SESSION['admin'] == 1) {
      if((isset($_POST['nombre'])) && (isset($_POST['precio'])) &&(isset($_POST['id_creador']))){
        $nombre = $_POST["nombre"];
        $precio = $_POST["precio"];
        $id_creador = $_POST["id_creador"];
        $imagen = $_FILES['imagenes'];
      }
      
          $arrayImagenes = array();
      if (isset($_FILES['imagenes'])){
        $cantidad= count($_FILES["imagenes"]["tmp_name"]);
        for ($i=0; $i<$cantidad; $i++){
           //Comprobamos si el fichero es una imagen
          if ($_FILES['imagenes']['type'][$i]=='image/png' || $_FILES['imagenes']['type'][$i]=='image/jpeg'){
            array_push($arrayImagenes, $this->ImagenModel->subirImagen($_FILES["imagenes"]["tmp_name"][$i]));
           }
        }
      }
      $this->CervezasModel->Insert($nombre, $precio, $id_creador);

      $numeroCerveza = $this->CervezasModel->lastInsertId();

      $cantidad = count($arrayImagenes);
      for ($i=0; $i < $cantidad ; $i++) {
        $this->ImagenModel->AgregarImagen($arrayImagenes[$i], $numeroCerveza['id_cerveza']);
      }
    
      header(TIPOSDECERVEZA);
    } else {
      header(HOME);

    }
  }

    function Delete($param){
      if ($_SESSION['admin'] == 1) {
        $this->CervezasModel->Delete($param);
        header(TIPOSDECERVEZA);
      } else {
        header(HOME);
      }
    }

  //distribuidor

    function InsertDistribuidor(){
      if ($_SESSION['admin'] == 1) {
        $nombre = $_POST["nombre"];
        $localidad = $_POST["localidad"];
        $this->DistribuidorModel->Insert($nombre, $localidad);
        header(TIPOSDECERVEZA);
      } else {
        header(HOME);
      }
    }

    function DeleteDistribuidor($param){
      if ($_SESSION['admin'] == 1) {
        $this->DistribuidorModel->Delete($param);
        header(TIPOSDECERVEZA);
      } else {
        header(HOME);
      }
    }

    function editarDistribuidor($params)
    {
      if ($_SESSION['admin'] == 1) {
        $id_creador = $params[0];
        $creador = $this->DistribuidorModel->Get($id_creador);
        $this->CervezasView->mostrarEditarDistribuidor($creador);
      } else {
        header(HOME);
      }
    }

    function GuardarEditarDistribuidor($id_creador)
    {
      if ($_SESSION['admin'] == 1) {
        $nombre = $_POST['nombreFormC'];
        $localidad = $_POST['localidadFormC'];
        $this->DistribuidorModel->GuardarEditarCreador($nombre, $localidad, $id_creador[0]);
        header(TIPOSDECERVEZA);
      } else {
        header(HOME);
      }
    }

    //imagenes

    function BorrarImagen($id_imagen){
      if($_SESSION['admin'] == 1){
        $this->ImagenModel->BorrarImagen($id_imagen);
        header(TIPOSDECERVEZA);
      }else{
        header(HOME);
      }
    } 

}
?>
