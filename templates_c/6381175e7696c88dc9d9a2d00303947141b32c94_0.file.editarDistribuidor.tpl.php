<?php
/* Smarty version 3.1.33, created on 2018-10-18 07:07:03
  from 'C:\xampp\htdocs\WikiBeerTPE\templates\editarDistribuidor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc814f725c075_55841706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6381175e7696c88dc9d9a2d00303947141b32c94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WikiBeerTPE\\templates\\editarDistribuidor.tpl',
      1 => 1539839205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc814f725c075_55841706 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
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
<?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container-fluid">
      <h2 class="editar">EDITAR</h2>
      <form action="GuardarEditarDistribuidor/<?php echo $_smarty_tpl->tpl_vars['creador']->value['id_creador'];?>
" method="post">
        <input type="hidden" class="form-control" id="idFormC">
        <div class="form-group">
          <label class="editar" for="nombreForm">Editar Nombre</label>
          <input type="text" class="form-control" id="nombreFormC" name="nombreFormC" placeholder="<?php echo $_smarty_tpl->tpl_vars['creador']->value['nombre'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['creador']->value['nombre'];?>
">
        </div>
        <div class="form-group">
          <label class="editar" for="precioForm">Editar Localidad</label>
          <input type="text" class="form-control" id="localidadFormC" name="localidadFormC" placeholder="<?php echo $_smarty_tpl->tpl_vars['creador']->value['localidad'];?>
"  value="<?php echo $_smarty_tpl->tpl_vars['creador']->value['localidad'];?>
">
        </div>
        <button type="submit" class="btn btn-primary">Terminar Edicion</button>
      </form>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
