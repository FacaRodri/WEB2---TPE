<?php
  define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/login');
  define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/logout');
  define('TIPOSDECERVEZA', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/tiposDeCerveza');
  define('DETALLES', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/detalles');
class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ' '=> 'navigationController#home',
      'home'=> 'navigationController#home',
      'tiposDeCerveza'=> 'cervezaController#mostrarCerveza',
      'tiposDeCervezaVisitante' => 'navigationController#mostrarCervezaVisitante',
      'contacto'=> 'navigationController#contacto',
      'informacionCurso' => 'navigationController#informacionCurso',
      'inscripcionCurso' => 'navigationController#inscripcionCurso',
      'InsertCerveza' => 'cervezaController#InsertCerveza',
      'editarCerveza' => 'cervezaController#editarCerveza',
      'GuardarEditarCerveza' => 'cervezaController#GuardarEditarCerveza',
      'Delete' => 'cervezaController#Delete',
      'InsertDistribuidor' => 'cervezaController#InsertDistribuidor',
      'DeleteDistribuidor' => 'cervezaController#DeleteDistribuidor',
      'editarDistribuidor' => 'cervezaController#editarDistribuidor',
      'GuardarEditarDistribuidor' => 'cervezaController#GuardarEditarDistribuidor',
      'login' => 'loginController#login',
      'logout' => 'loginController#logout',
      'verificarLogin' => 'loginController#verificarLogin',
      'creador' => 'navigationController#creador',
      'detalles' => 'navigationController#detalles',
      'registro' => 'usuarioController#registro',
      'InsertUsuario' => 'usuarioController#InsertUsuario',
      'BorrarImagen'=> 'cervezaController#BorrarImagen'
      


       


    ];

}

 ?>
