<?php


class usuarioModel
{
  private $db;

  function __construct()
  {
    $this->db = $this->Connect();
  }

  function Connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=wikibeer;charset=utf8'
    , 'root', '');
  }

  function GetAll(){
      $sentencia = $this->db->prepare( "select * from usuario");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function InsertarUsuario($nombre,$clave){
    $sentencia = $this->db->prepare("INSERT INTO usuario(nombre,clave) VALUES(?,?)");
    $sentencia->execute(array($nombre,$clave));
  }

  function GetUser($nombre){
      $sentencia = $this->db->prepare( "SELECT * from usuario where nombre=? limit 1");
      $sentencia->execute(array($nombre));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  // function editarUsuario($id_usuario, $admin){
  //   $sentencia = $this->db->prepare("UPDATE usuario SET admin=? WHERE id_usuario=?");
  //   $sentencia->execute(array($admin, $id_usuario));
  // }
}

 ?>
