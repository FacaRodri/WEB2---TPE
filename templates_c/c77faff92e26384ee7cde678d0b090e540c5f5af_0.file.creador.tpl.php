<?php
/* Smarty version 3.1.33, created on 2018-10-17 23:13:08
  from 'C:\xampp\htdocs\WikiBeerTPE\templates\creador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc7a5e4835ad5_32134577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c77faff92e26384ee7cde678d0b090e540c5f5af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WikiBeerTPE\\templates\\creador.tpl',
      1 => 1539810646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav.tpl' => 1,
  ),
),false)) {
function content_5bc7a5e4835ad5_32134577 (Smarty_Internal_Template $_smarty_tpl) {
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

<body>

<?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid">
<table class="tablaTipos" aling="center">
    <thead>
            <td>
              Nombre
            </td>
            <td>
              Precio
            </td>
            <td>
              Distribuidor
            </td>
            <td>
              Localidad
            </td>
            <td>
            Ver detalles
            </td>
          </thead>
      <ul class="list-group">

      </ul>
    </div>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabla']->value, 'fila');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fila']->value) {
?>
        <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['fila']->value['nombre'];?>
</td>
        <td>$<?php echo $_smarty_tpl->tpl_vars['fila']->value['precio'];?>
</td>
        <td><a href="creador/<?php echo $_smarty_tpl->tpl_vars['fila']->value['id_creador'];?>
"><?php echo $_smarty_tpl->tpl_vars['fila']->value['creador'];?>
</a></td>
        <td><?php echo $_smarty_tpl->tpl_vars['fila']->value['localidad'];?>
</td>
        <td>Mostrar</td>
        </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </table>
          </div><?php }
}
