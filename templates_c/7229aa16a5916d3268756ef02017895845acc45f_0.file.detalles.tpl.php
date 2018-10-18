<?php
/* Smarty version 3.1.33, created on 2018-10-18 03:22:48
  from 'C:\xampp\htdocs\WikiBeerTPE\templates\detalles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc7e068907a23_32832135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7229aa16a5916d3268756ef02017895845acc45f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WikiBeerTPE\\templates\\detalles.tpl',
      1 => 1539825766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc7e068907a23_32832135 (Smarty_Internal_Template $_smarty_tpl) {
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
          </thead>
      <ul class="list-group">

      </ul>
    </div>
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['fila']->value['nombre'];?>
</td>
          <td>$<?php echo $_smarty_tpl->tpl_vars['fila']->value['precio'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['fila']->value['creador'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['fila']->value['localidad'];?>
</td>
        </tr>
      </table>
          </div>
          <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
