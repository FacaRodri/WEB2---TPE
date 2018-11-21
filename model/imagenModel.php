<?php
class imagenModel
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
  function GetImagenCerveza($id_cerveza){
      $sentencia = $this->db->prepare( "SELECT * FROM imagen WHERE id_cerveza = ?");
      $sentencia->execute(array($id_cerveza[0]));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function GetImagenes(){
      $sentencia = $this->db->prepare( "SELECT * FROM imagen");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function AgregarImagen($path,$id_cerveza){
    $sentencia = $this->db->prepare("INSERT INTO imagen(source,id_cerveza) VALUES(?,?)");
    $sentencia->execute(array($path,$id_cerveza));
  }
  function BorrarImagen($id_imagen){
    $sentencia = $this->db->prepare( "DELETE FROM imagen WHERE id_imagen = ?");
    $sentencia->execute(array($id_imagen[0]));
  }
    function subirImagen($imagen){
      $destino_final = 'images/' . uniqid() . '.jpg';
      move_uploaded_file($imagen, $destino_final);
      return $destino_final;
  }
}
 ?>