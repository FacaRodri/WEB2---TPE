<?php
class comentariosModel
{
  private $db;

  function __construct(){
    $this->db = $this->Connect();
  }

  private function Connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=wikibeer;charset=utf8'
    , 'root', '');
  }

  function insert($puntaje, $comentario, $id_cerveza, $id_usuario){
    $sentencia = $this->db->prepare("INSERT INTO comentario(puntaje, comentario, id_cerveza, id_usuario) VALUES(?,?,?,?)");
    $sentencia->execute(array($puntaje, $comentario, $id_cerveza, $id_usuario));
  }
 
  function getByCerveza($id_cerveza){
    $sentencia = $this->db->prepare("SELECT * FROM comentario WHERE id_cerveza = ?");
    $sentencia->execute($id_cerveza);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getAll(){
    $sentencia = $this->db->prepare("SELECT * FROM comentario");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function delete($id_comentario){
    $sentencia = $this->db->prepare("DELETE FROM comentario WHERE id_comentario=?");
    $sentencia->execute(array($id_comentario[0]));
  }
}
 ?>