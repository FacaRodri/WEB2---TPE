<?php
/* Smarty version 3.1.33, created on 2018-10-17 19:16:55
  from 'C:\xampp\htdocs\WikiBeerTPE\templates\editarCerveza.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc76e87e314c0_63282291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b82eb5e53a0fb2381777858dc30ae0cf0f21289a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WikiBeerTPE\\templates\\editarCerveza.tpl',
      1 => 1539734555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav.tpl' => 2,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc76e87e314c0_63282291 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
=======

>>>>>>> 54ff3a51a34e914a863c338388873327ab4f8da6
<head>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <base href="http://localhost/WikiBeerTPE/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="http://<?php echo $_SERVER['SERVER_NAME'];?>
/WikiBeerTPE/">
    <title>WikiBeer!</title>
</head>
<<<<<<< HEAD
<?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
=======


<?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

>>>>>>> 54ff3a51a34e914a863c338388873327ab4f8da6
    <div class="container-fluid">
      <h2>EDITAR</h2>
      <form action="GuardarEditarCerveza/<?php echo $_smarty_tpl->tpl_vars['cerveza']->value['id_cerveza'];?>
" method="post">
        <input type="hidden" class="form-control" id="idForm">
        <div class="form-group">
          <label for="nombreForm">Editar Nombre</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm" placeholder="<?php echo $_smarty_tpl->tpl_vars['cerveza']->value['nombre'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['cerveza']->value['nombre'];?>
">
        </div>
        <div class="form-group">
          <label for="precioForm">Editar Precio</label>
          <input type="number" class="form-control" id="precioForm" name="precioForm" placeholder="<?php echo $_smarty_tpl->tpl_vars['cerveza']->value['precio'];?>
"  value="<?php echo $_smarty_tpl->tpl_vars['cerveza']->value['precio'];?>
">
        </div>
        <button type="submit" class="btn btn-primary">Terminar Edicion</button>
      </form>
    </div>
    <?php echo print_r($_smarty_tpl->tpl_vars['cerveza']->value);?>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
