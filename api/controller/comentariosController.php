<?php
require_once "api.php";
require_once "../model/comentariosModel.php";
class ComentariosApiController extends Api
{
  //ATRIBUTOS
  private $comentariosModel;
  function __construct()
  {
    parent::__construct();
    $this->comentariosModel = new comentariosModel();
  }
//TRAE COMENTARIOS
  function mostrarComentarios($id_cerveza = null){
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
//ESTA FUNCION VA EN LA API SecuredComentariosApiController

  function insertarComentario(){
      //FALTA CAMBIAR EL MODELO PARA QUE DEVUELVA UN BOOLEAN
      $comentarioJSON = $this->getJSONData();
      $response = $this->comentariosModel->insert($comentarioJSON->comentario, $comentarioJSON->puntaje,
      $comentarioJSON->id_usuario, $comentarioJSON->id_cerveza);
      return $this->json_response($response, 200);
  }
}
 ?>