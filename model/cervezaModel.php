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
      $sentencia = $this->db->prepare( "select * from cerveza where id_cerveza = ?");
      $sentencia->execute(array($id_cerveza));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function Insert($nombre,$precio,$id_creador){
    $sentencia = $this->db->prepare("INSERT INTO cerveza(nombre,precio,id_creador) VALUES(?,?,?)");
    $sentencia->execute(array($nombre,$precio,$id_creador));      
  }

  function Delete($id_cerveza){
    $sentencia = $this->db->prepare( "delete from cerveza where id_cerveza=?");
    $sentencia->execute(array($id_cerveza));
  }

  function GuardarEditarCerveza($nombre,$precio,$id_cerveza){
    $sentencia = $this->db->prepare("UPDATE cerveza set nombre = ?, precio = ? where id_cerveza = ?");
    $sentencia->execute(array($nombre,$precio,$id_cerveza));
  }
  function GetAllTable(){
    $sentencia = $this->db->prepare("SELECT c.nombre,c.precio,d.id_creador,d.nombre as creador,d.localidad FROM cerveza c, distribuidor d WHERE c.id_creador = d.id_creador");    
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);


  }
  function filtroCreador($id_creador){
    $sentencia = $this->db->prepare("SELECT c.nombre,c.precio,d.id_creador,d.nombre as creador,d.localidad FROM cerveza c, distribuidor d WHERE c.id_creador = d.id_creador AND d.id_creador = ?");    
    $sentencia->execute($id_creador);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);

  }

  function getDetalles($id_cerveza){
    $setencia = $this->db->prepare("SELECT c.nombre,c.precio,d.id_creador,d.nombre as creador,d.localidad FROM cerveza c, distribuidor d WHERE c.id_creador = d.id_creador AND d.id_creador = ?");
    $setencia->execute($id_cerveza);
    return $setencia->fetch(PDO::FETCH_ASSOC);
  }

  
}

 ?>
