<?php
class ConfigApi
{
    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [
      'detalles#GET'=> 'ComentariosApiController#MostrarComentarios',
      'detalles#DELETE'=> 'ComentariosApiController#BorrarComentarios',
      'detalles#POST'=> 'ComentariosApiController#InsertarComentario'
      
    ];
}
 ?>