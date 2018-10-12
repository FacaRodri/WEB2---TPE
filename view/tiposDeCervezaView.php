<?php

include_once "./libs/smarty.class.php";

class tiposDeCervezaView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function mostrar($cervezas){
        $this->smarty->assign('cervezas', $cervezas);
        $this->smarty->display('templates/tiposDeCerveza.tpl');
    }

    function mostrarEditarCerveza($cerveza){
        $this->smarty->assign('cerveza', $cerveza);
        $this->smarty->display('templates/editarCerveza.tpl');
    }    
    


}