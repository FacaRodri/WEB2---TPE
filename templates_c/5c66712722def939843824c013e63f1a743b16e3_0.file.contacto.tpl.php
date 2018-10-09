<?php
/* Smarty version 3.1.33, created on 2018-10-09 21:58:08
  from 'C:\xampp\htdocs\WikiBeerTPE\templates\contacto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bbd0850014545_84757553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c66712722def939843824c013e63f1a743b16e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WikiBeerTPE\\templates\\contacto.tpl',
      1 => 1539115086,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bbd0850014545_84757553 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid" id="container">
        <div class="row">
            <div class="col-md-2">
                <img src="img/Anuncio5.jpg" width="100%" alt="Anuncio">
                <div class="mt-4">
                    <img src="img/Anuncio6.jpg" width="100%" alt="Anuncio">
                </div>
                <div class="mt-4">
                    <img src="img/Anuncio7.jpg" width="100%" alt="Anuncio">
                </div>
            </div>
            <div class="col-md-8">
                <legend class="text-center letraContacto">CONTACTANOS!</legend>
                <form>
                    <div class="form-row">
                        <div class="col-md-6 ">
                            <label class="colorForm" for="validationDefault01">Nombre</label>
                            <input type="text" class="form-control " id="validationDefault01" placeholder="Nombre" value="" required>
                        </div>
                        <div class="col-md-6 ">
                            <label class="colorForm" for="validationDefault02">Apellido</label>
                            <input type="text" class="form-control " id="validationDefault02" placeholder="Apellido" value="" required>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="col-md-12 ">
                            <label class="colorForm" for="validationDefault02">Email</label>
                            <input type="text" class="form-control " id="validationDefault02" placeholder="Email" value="" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <label class="colorForm" for="message">Mensaje</label>
                            <textarea class="form-control" id="message" name="message" placeholder="Ingrese su mensaje aqui..." rows="5"></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mt-4 text-center ">
                            <button type="submit" class="btn btn-primary btn-lg ">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-2 ">
                <img src="img/Anuncio1.jpg" width="100%" alt="Anuncio">
                <div class="mt-4">
                    <img src="img/Anuncio2.jpg" width="100%" alt="Anuncio">
                </div>
                <div class="mt-4">
                    <img src="img/Anuncio4.jpg" width="100%" alt="Anuncio">
                </div>

            </div>
        </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
