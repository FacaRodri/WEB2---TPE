<?php
/* Smarty version 3.1.33, created on 2018-10-15 19:13:21
  from 'C:\xampp\htdocs\WikiBeerTPE\templates\cerveza.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc4cab18268e3_58188406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80d590eabdce7ed8a60fc466f6192b5540f62d40' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WikiBeerTPE\\templates\\cerveza.tpl',
      1 => 1539623201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc4cab18268e3_58188406 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
<table class="tablaTipos" align="center">
    <thead>
            <td>
              Nombre
            </td>
            <td>
              Precio
            </td>
          </thead>
      <ul class="list-group">

      </ul>
    </div>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cervezas']->value, 'cerveza');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cerveza']->value) {
?>
        <tr><td><?php echo $_smarty_tpl->tpl_vars['cerveza']->value['nombre'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['cerveza']->value['precio'];?>
</td><td> <a href="editarCerveza/<?php echo $_smarty_tpl->tpl_vars['cerveza']->value['id_cerveza'];?>
">EDITAR</a> </td><td> <a href="Delete/<?php echo $_smarty_tpl->tpl_vars['cerveza']->value['id_cerveza'];?>
">BORRAR</a> </td></tr>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <div class="container">
      <h2>Agregar cerveza</h2>
      <form method="post" action="InsertCerveza">
        <div class="form-group">
          <label for="tituloForm">Cerveza</label>
          <input type="text" class="form-control" id="tituloForm" name="nombre">
        </div>
        <div class="form-group">
          <label for="descripcionForm">Precio</label>
          <input type="text" class="form-control" id="descripcionForm" name="precio">
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
      </form>
      </table>
    </div><?php }
}
