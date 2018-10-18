<?php
/* Smarty version 3.1.33, created on 2018-10-18 15:23:01
  from 'C:\xampp\htdocs\WikiBeerTPE\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc88935cce281_59475408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e408adcccbca969fbf450e70c9869ed258a4831' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WikiBeerTPE\\templates\\login.tpl',
      1 => 1539868979,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc88935cce281_59475408 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
        
    <form class="form-signin text-center" method="post" action="verificarLogin">
      <img class="mb-4" src="img/logo.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">INICIAR SESION</h1>
      <label for="inputUser" class="sr-only">Nombre de usuario</label>
      <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre de usuario" required="" autofocus="">
      <br>
      <label for="inputPassword" class="sr-only">Contraseña</label>
      <input type="password" id="clave" name="clave" class="form-control" placeholder="Contraseña" required="">
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="Recordarme">Recordarme
        </label>
      </div>
      <h3><?php echo $_smarty_tpl->tpl_vars['Message']->value;?>
</h3>
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
