<?php
/* Smarty version 3.1.33, created on 2018-11-19 23:53:46
  from 'C:\xampp\htdocs\WikiBeerTPE\templates\navVisitante.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf33efaa9c400_54170401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fea0b03ae7f6bd74da39ed83c3edc92aec604f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WikiBeerTPE\\templates\\navVisitante.tpl',
      1 => 1542668025,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf33efaa9c400_54170401 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand homeLogo" class=".home" href="#">
                <img src="img/logo.png" height="70" width="70" alt="" srcset="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link home" href="home">HOME
                            <span class="sr-only">(current)</span>
                        </a>
                      
                            <li class="nav-item">
                                <a class="nav-link" href="login">LOGIN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="registro">REGISTRO</a>
                            </li>
                        
                    </li>
                    <li class="nav-item">
                             
                            <li class="nav-item">
                                <a class="nav-link" href="tiposDeCervezaVisitante">TIPOS DE CERVEZA</a>
                            </li>
                                       
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            CURSO DE FABRICACION
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item infoCurso" href="informacionCurso">INFORMACION DEL CURSO</a>
                            <a class="dropdown-item inscripcion" href="inscripcionCurso">INSCRIPCION </a>

                            <li class="nav-item">
                                <a class="nav-link contacto" href="contacto">CONTACTANOS</a>
                            </li>
                            
                        </div>
                </ul>
            </div>
        </nav><?php }
}
