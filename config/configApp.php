<?php

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ' '=> 'navigationController#home',
      'home'=> 'navigationController#home',
      'tiposDeCerveza'=> 'cervezaController#mostrarCerveza',
      'contacto'=> 'navigationController#contacto',
      'informacionCurso' => 'navigationController#informacionCurso',
      'inscripcionCurso' => 'navigationController#inscripcionCurso',
      'login' => 'navigationController#login',
      'InsertCerveza' => 'cervezaController#InsertCerveza',
      'editarCerveza' => 'cervezaController#editarCerveza',
      'GuardarEditarCerveza' => 'cervezaController#GuardarEditarCerveza',
      'Delete' => 'cervezaController#Delete',
      'InsertDistribuidor' => 'cervezaController#InsertDistribuidor',
      'DeleteDistribuidor' => 'cervezaController#DeleteDistribuidor',
      'GuardarEditarDistribuidor' => 'cervezaController#GuardarEditarDistribuidor'


    ];

}

 ?>
