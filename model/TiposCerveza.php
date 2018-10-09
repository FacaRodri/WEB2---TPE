<?php

class TiposCervezaModel
{
  private $db;

  function __construct()
  {
    $this->db = $this->Connect();
  }

  function Connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=TiposCerveza;charset=utf8'
    , 'root', '');
  }

  function GetTiposCerveza(){

      $sentencia = $this->db->prepare( "select * from TipoCerveza");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetTiposCerveza($id){

      $sentencia = $this->db->prepare( "select * from tipoCerveza where id=?");
      $sentencia->execute(array($id));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function InsertarTiposCerveza($titulo,$descripcion,$completada){

    $sentencia = $this->db->prepare("INSERT INTO TiposCerveza(titulo, descripcion, completada) VALUES(?,?,?)");
    $sentencia->execute(array($titulo,$descripcion,$completada));
  }

  function BorrarTiposCerveza($idTipoCerveza){

    $sentencia = $this->db->prepare( "delete from tipoCerveza where id=?");
    $sentencia->execute(array($idTipoCerveza));
  }

  function GuardarEditarTiposCerveza($titulo,$descripcion,$completada,$id){
    $sentencia = $this->db->prepare( "update tarea set titulo = ?, descripcion = ?, completada = ? where id=?");
    $sentencia->execute(array($titulo,$descripcion,$completada,$id));
  }
}

 ?>
