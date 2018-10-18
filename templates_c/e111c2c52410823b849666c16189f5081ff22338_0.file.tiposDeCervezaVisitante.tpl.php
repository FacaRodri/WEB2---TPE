<?php
/* Smarty version 3.1.33, created on 2018-10-18 16:03:19
  from 'C:\xampp\htdocs\WikiBeerTPE\templates\tiposDeCervezaVisitante.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc892a7da8539_35262530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e111c2c52410823b849666c16189f5081ff22338' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WikiBeerTPE\\templates\\tiposDeCervezaVisitante.tpl',
      1 => 1539871397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:cervezaVisitante.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc892a7da8539_35262530 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid">
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
        <h3 class="letraTiposDeCerveza">TIPOS DE CERVEZA</h3>

        <?php $_smarty_tpl->_subTemplateRender("file:cervezaVisitante.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          
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
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
