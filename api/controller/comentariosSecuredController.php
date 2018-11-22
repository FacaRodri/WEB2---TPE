<?php
require_once "api.php";
require_once "apiSecuredController.php";
require_once "../model/comentariosModel.php";
require_once "../model/usuarioModel.php";
class comentariosSecuredController extends apiSecuredController{
  private $ComentariosModel;
  private $UsuariosModel;
  function __construct()
  {
    parent::__construct();
    $this->ComentariosModel = new comentariosModel();
    $this->UsuariosModel = new usuarioModel();
  }
  //ESTA FUNCION VA EN LA API SecuredComentariosApiController
    function InsertarComentario(){
          $comentarioJSON = $this->getJSONData();
          $response = $this->ComentariosModel->insert($comentarioJSON->comentario, $comentarioJSON->puntaje,
          $comentarioJSON->id_usuario, $comentarioJSON->id_cerveza);
          return $this->json_response($response, 200);
    }
    //ESTA FUNCION VA EN LA API SecuredComentariosApiController
    function BorrarComentario($param = null){
       if (count($param) == 1) {
         $id_comentario = $param[0];
         $response = $this->ComentariosModel->delete($id_comentario);
       }
           return $this->json_response($response, 200);
       //   if ($response == false) {
       //     return $this->json_response($response, 300);
       //   }else{
       //     return $this->json_response($response, 200);
       //   }
       // }else {
       //   return $this->json_response("No Task Specified", 300);
       // }
    }
}
 ?>