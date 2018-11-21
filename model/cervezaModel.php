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
      $sentencia = $this->db->prepare( "SELECT * from cerveza");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function Get($id_cerveza){
      $sentencia = $this->db->prepare( "SELECT * from cerveza where id_cerveza = ?");
      $sentencia->execute(array($id_cerveza));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function Insert($nombre,$precio,$id_creador){
    $sentencia = $this->db->prepare("INSERT INTO cerveza(nombre,precio,id_creador) VALUES(?,?,?)");
    $sentencia->execute(array($nombre,$precio,$id_creador));      
  }
  
  function Delete($id_cerveza){
    $sentencia = $this->db->prepare("DELETE from cerveza where id_cerveza=?");
    $sentencia->execute(array($id_cerveza[0]));
  }

  function GuardarEditarCerveza($nombre,$precio,$id_cerveza){
    $sentencia = $this->db->prepare("UPDATE cerveza set nombre = ?, precio = ? where id_cerveza = ?");
    $sentencia->execute(array($nombre,$precio,$id_cerveza));
  }

  function GetAllTable(){
    $sentencia = $this->db->prepare("SELECT c.nombre,c.precio,d.id_creador,d.nombre as creador,d.localidad FROM cerveza c, distribuidor d WHERE c.id_creador = d.id_creador ORDER BY c.id_creador" );    
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function filtroCreador($id_creador){
    $sentencia = $this->db->prepare("SELECT c.nombre,c.precio,d.id_creador,d.nombre as creador,d.localidad FROM cerveza c, distribuidor d WHERE c.id_creador = d.id_creador AND d.id_creador = ?");    
    $sentencia->execute($id_creador);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);

  }

  function getDetalles($id_cerveza){
    $setencia = $this->db->prepare("SELECT c.id_cerveza, c.nombre,c.precio,d.id_creador,d.nombre as creador,d.localidad FROM cerveza c, distribuidor d WHERE c.id_creador = d.id_creador AND c.id_cerveza = ?");
    $setencia->execute($id_cerveza);
    return $setencia->fetch(PDO::FETCH_ASSOC);
  }
  function lastInsertId(){
    $sentencia = $this->db->prepare("SELECT id_cerveza FROM cerveza ORDER BY id_cerveza  DESC LIMIT 1");
    $sentencia->execute();
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }
  
} 

 ?>
