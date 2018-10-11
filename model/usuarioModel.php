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

  function InsertarUsuario($nombre, $email, $clave){

    $sentencia = $this->db->prepare("INSERT INTO usuario(nombre, email, clave) VALUES(?,?,?)");
    $sentencia->execute(array($nombre, $email, $clave));
  }

  function GetUser($nombre){

      $sentencia = $this->db->prepare( "select * from usuario where nombre=? limit 1");
      $sentencia->execute(array($nombre));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

}

 ?>
