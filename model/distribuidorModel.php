<?php

class distribuidorModel
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

      $sentencia = $this->db->prepare( "select * from distribuidor");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function Get($id_creador){

      $sentencia = $this->db->prepare( "select * from distribuidor where id=?");
      $sentencia->execute(array($id_creador));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function Insert$nombre,$localidad){

    $sentencia = $this->db->prepare("INSERT INTO distribuidor(nombre,localidad,id_cerveza) VALUES(?,?,?)");
    $sentencia->execute(array($nombre,$localidad,$id_cerveza));
  }

  function Delete($id_creador){

    $sentencia = $this->db->prepare( "delete from distribuidor where id=?");
    $sentencia->execute(array($id_creador));
  }

  function Edit($id_creador,$nombre,$localidad,$id_cerveza){
    $sentencia = $this->db->prepare( "update distribuidor set nombre = ?, precio = ?, id_cerveza = ? where id_creador=?");
    $sentencia->execute(array($id_creador,$nombre,$localidad,$id_cerveza));
  }

}

 ?>
