<?php
/* Smarty version 3.1.33, created on 2018-11-22 20:03:17
  from 'C:\xampp\htdocs\WikiBeerTPE\templates\detalles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf6fd7571ddb5_93191783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7229aa16a5916d3268756ef02017895845acc45f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WikiBeerTPE\\templates\\detalles.tpl',
      1 => 1542913190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:imagenCerveza.tpl' => 1,
    'file:comentarios.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf6fd7571ddb5_93191783 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['fila']->value['nombre'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['fila']->value['precio'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['fila']->value['creador'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['fila']->value['localidad'];?>
</td>
        </tr>
  </table>
      <?php $_smarty_tpl->_subTemplateRender("file:imagenCerveza.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>     
      <div class="container">
        <div class="comentarios">
        </div>
      </div>      
</div>
          <?php $_smarty_tpl->_subTemplateRender("file:comentarios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
