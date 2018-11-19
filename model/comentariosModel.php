<?php
class comentariosModel
{
  private $db;
  function __construct()
  {
    //Conectamos a la base de datos
    $this->db = $this->Connect();
  }
  private function Connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=wikibeer;charset=utf8'
    , 'root', '');
  }
//Insertar un comentario
  function insert($comentario, $puntaje, $id_usuario, $id_cerveza){
    $sentencia = $this->db->prepare("INSERT INTO comentario(comentario, puntaje, id_usuario, id_cerveza) VALUES(?,?,?,?)");
    $sentencia->execute(array($comentaripo, $puntaje, $id_usuario, $id_cerveza));
  }
//Obtener un comentario medinate el id de un recital
  function getByCerveza($id_cerveza){
    $sentencia = $this->db->prepare("SELECT * FROM comentario WHERE id_cerveza = ?");
    $sentencia->execute($id_cerveza);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
//Obtener todo los comentarios
  function getAll(){
    $sentencia = $this->db->prepare("SELECT * FROM comentario");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
//Eliminar un comentario
  function delete($id_comentario){
    $sentencia = $this->db->prepare("DELETE FROM comentario WHERE id_comentario=?");
    $sentencia->execute(array($id_comentario[0]));
  }
}
 ?>