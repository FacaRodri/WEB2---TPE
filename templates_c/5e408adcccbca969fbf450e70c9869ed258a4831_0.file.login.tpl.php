<?php
/* Smarty version 3.1.33, created on 2018-10-10 21:46:52
  from 'C:\xampp\htdocs\WikiBeerTPE\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bbe572ce44596_46705349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e408adcccbca969fbf450e70c9869ed258a4831' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WikiBeerTPE\\templates\\login.tpl',
      1 => 1539200811,
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
function content_5bbe572ce44596_46705349 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid text-center" id="container">

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
        
    <form class="form-signin text-center">
      <img class="mb-4" src="img/logo.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Iniciar Sesion</h1>
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email" required="" autofocus="">
      <br>
      <label for="inputPassword" class="sr-only">Contraseña</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required="">
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="Recordarme">Recordarme
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
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
  </div>
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
