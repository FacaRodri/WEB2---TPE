<?php

include_once "./libs/smarty.class.php";

class navDefaultView {
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function home(){
        $this->smarty->display('templates/home.tpl');
    }

    function contacto(){
        $this->smarty->display('templates/contacto.tpl');
    }
    function informacionCurso(){
        $this->smarty->display('templates/informacionCurso.tpl');
    }
    function inscripcionCurso(){
        $this->smarty->display('templates/inscripcionCurso.tpl');
  
    }
    function login(){
        $this->smarty->display('templates/login.tpl');
    }


}





?>