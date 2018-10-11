<?php

class cervezaModel
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

      $sentencia = $this->db->prepare( "select * from cerveza");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function Get($id_cerveza){

      $sentencia = $this->db->prepare( "select * from cerveza where id=?");
      $sentencia->execute(array($id_cerveza));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function Insert($nombre,$precio){

    $sentencia = $this->db->prepare("INSERT INTO cerveza(nombre,precio) VALUES(?,?)");
    $sentencia->execute(array($nombre,$precio));
  }

  function Delete($id_cerveza){

    $sentencia = $this->db->prepare( "delete from cerveza where id=?");
    $sentencia->execute(array($id_cerveza));
  }

  function Edit($id_cerveza,$nombre,$precio){
    $sentencia = $this->db->prepare( "update cerveza set nombre = ?, precio = ?, where id=?");
    $sentencia->execute(array($id_cerveza,$nombre,$precio));
  }

}

 ?>
