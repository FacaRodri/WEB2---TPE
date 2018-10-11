<?php

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'navigationController#home',
      'home'=> 'navigationController#home',
      'tiposDeCerveza'=> 'tiposDeCervezaController#mostrarCerveza',
      'contacto'=> 'navigationController#contacto',
      'informacionCurso' => 'navigationController#informacionCurso',
      'inscripcionCurso' => 'navigationController#inscripcionCurso',
      'login' => 'navigationController#login',
      'InsertCerveza' => 'tiposDeCervezaController#InsertCerveza'
    ];

}

 ?>
