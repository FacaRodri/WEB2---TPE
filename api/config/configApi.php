<?php
class configApi
{
    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [
      'detalles#GET'=> 'comentariosController#mostrarComentario',
      'detalles#DELETE'=> 'comentariosSecuredController#BorrarComentario',
      'detalles#POST'=> 'comentariosSecuredController#insertarComentario'
    ];
}
 ?>