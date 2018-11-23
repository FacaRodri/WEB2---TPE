<?php
require_once "api.php";
require_once "../model/comentariosModel.php";
class comentariosController extends api
{
  
  private $comentariosModel;
  function __construct()
  {
    parent::__construct();
    $this->comentariosModel = new comentariosModel();
  }

  function mostrarComentario($id_cerveza = null){
    if(isset($id_cerveza)){
      $comentario = $this->comentariosModel->getByCerveza($id_cerveza);
    }else{
      $comentario = $this->comentariosModel->getAll();
    }
    if (isset($comentario)) {
      return $this->json_response($comentario, 200);
    }else {
      return $this->json_response(null, 404);
    }
  }
  
}
 ?>