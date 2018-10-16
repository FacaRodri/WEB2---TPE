<?php

include_once "./libs/smarty.class.php";

class tiposDeCervezaView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function mostrar($cervezas,$creador){
        $this->smarty->assign('cervezas', $cervezas);
        $this->smarty->assign('creador', $creador);
        $this->smarty->display('templates/tiposDeCerveza.tpl');
    }
    function mostrarVisitante($cervezas,$creador){
        $this->smarty->assign('cervezas', $cervezas);
        $this->smarty->assign('creador', $creador);
        $this->smarty->display('templates/tiposDeCervezaVisitante.tpl');
    }

    function mostrarEditarCerveza($cerveza){
        $this->smarty->assign('cerveza', $cerveza);
        $this->smarty->display('templates/editarCerveza.tpl');
    } 
    
    function mostrarEditarDistribuidor($creador){
        $this->smarty->assign('creador', $creador);
        $this->smarty->display('templates/editarDistribuidor.tpl');

        
    }
    


}