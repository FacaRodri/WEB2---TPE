<?php
/* Smarty version 3.1.33, created on 2018-10-16 18:21:48
  from 'C:\xampp\htdocs\WikiBeerTPE\templates\cerveza.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc6101c9d8719_14169993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80d590eabdce7ed8a60fc466f6192b5540f62d40' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WikiBeerTPE\\templates\\cerveza.tpl',
      1 => 1539706764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc6101c9d8719_14169993 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\WikiBeerTPE\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>
<div class="container">
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
          <label for="nombre">Cerveza</label>
          <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="form-group">
          <label for="precio">Precio</label>
          <input type="text" class="form-control" id="precio" name="precio">
        </div>
         <div class="form-group">
          <label for="tituloForm">Distribuidor</label>
           <select name="creador">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['creador']->value, 'creadores');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['creadores']->value) {
?>
                          <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['creador']->value['id_creador'],'output'=>$_smarty_tpl->tpl_vars['creador']->value['nombre']),$_smarty_tpl);?>

                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
      </form>
      </table>
      <?php echo print_r($_smarty_tpl->tpl_vars['creador']->value);?>

    </div><?php }
}
