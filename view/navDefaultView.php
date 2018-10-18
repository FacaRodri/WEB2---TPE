<?php

include_once "./libs/smarty.class.php";

class navDefaultView {
    private $smarty;
    private $SESSION;

    function __construct(){
        $this->smarty = new Smarty();
        $this->SESSION = session_start();
    }

    function home(){
        $this->SESSION;
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
    function tiposDeCervezaVisitante(){
        $this->smarty->display('templates/tiposDeCervezaVisitante.tpl');

    }
    function mostrarVisitante($tabla){
        $this->smarty->assign('tabla', $tabla);
        $this->smarty->display('templates/tiposDeCervezaVisitante.tpl');
    }
    
    function mostrarDetalles($fila){
        $this->smarty->assign('fila', $fila);
        $this->smarty->display('templates/detalles.tpl');
    }

    function mostrarCreador($tabla){
        $this->smarty->assign('tabla', $tabla);
        $this->smarty->display('templates/creador.tpl');
    }
    


}





?>