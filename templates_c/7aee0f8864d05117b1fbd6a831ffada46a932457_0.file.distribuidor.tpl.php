<?php
/* Smarty version 3.1.33, created on 2018-10-18 16:03:46
  from 'C:\xampp\htdocs\WikiBeerTPE\templates\distribuidor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc892c2efb878_95538852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7aee0f8864d05117b1fbd6a831ffada46a932457' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WikiBeerTPE\\templates\\distribuidor.tpl',
      1 => 1539871366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5bc892c2efb878_95538852 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid">
<table class="tablaTipos" aling="center">
    <thead>
            <td>
              Distribuidor
            </td>
            <td>
              Localidad
            </td>
             <td>
              Editar
            </td>
            <td>
              Borrar
            </td>
          </thead>
      <ul class="list-group">

      </ul>
    </div>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['creador']->value, 'distribuidor');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['distribuidor']->value) {
?>
        <tr><td><?php echo $_smarty_tpl->tpl_vars['distribuidor']->value['nombre'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['distribuidor']->value['localidad'];?>
</td><td> <a href="editarDistribuidor/<?php echo $_smarty_tpl->tpl_vars['distribuidor']->value['id_creador'];?>
">EDITAR</a> </td><td> <a href="DeleteDistribuidor/<?php echo $_smarty_tpl->tpl_vars['distribuidor']->value['id_creador'];?>
">BORRAR</a> </td></tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <div class="container">
      <h4 class="editar">AGREGAR DISTRIBUIDOR</h4>
      <form method="post" action="InsertDistribuidor">
        <div class="form-group">
          <label for="tituloForm" class="editar">Nombre</label>
          <input type="text" class="form-control" id="tituloForm" name="nombre">
        </div>
        <div class="form-group">
          <label for="descripcionForm" class="editar">Localidad</label>
          <input type="text" class="form-control" id="descripcionForm" name="localidad">
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
      </form>
      </table>
    </div><?php }
}
